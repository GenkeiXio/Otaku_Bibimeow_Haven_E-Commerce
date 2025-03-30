<?php

namespace App\Http\Controllers;

use Srmklive\PayPal\Services\PayPal as PayPalClient;
use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\Product;
use App\Models\Order;
use DB;

class PaypalController extends Controller
{
    public function payment()
    {
        $provider = new PayPalClient();
        $provider->setApiCredentials(config('paypal'));
        $paypalToken = $provider->getAccessToken();

        $cart = Cart::where('user_id', auth()->user()->id)
                    ->where('order_id', null)
                    ->get();

        $items = [];
        $total = 0;
        
        foreach ($cart as $item) {
            $product = Product::find($item->product_id);
            $items[] = [
                'name'  => $product->title,
                'unit_amount' => [
                    'currency_code' => config('paypal.currency'),
                    'value' => $item->price,
                ],
                'quantity' => $item->quantity,
            ];
            $total += $item->price * $item->quantity;
        }

        $order = [
            'intent' => 'CAPTURE',
            'purchase_units' => [[
                'amount' => [
                    'currency_code' => config('paypal.currency'),
                    'value' => $total,
                    'breakdown' => [
                        'item_total' => [
                            'currency_code' => config('paypal.currency'),
                            'value' => $total,
                        ],
                    ],
                ],
                'items' => $items,
            ]],
            'application_context' => [
                'return_url' => route('payment.success'),
                'cancel_url' => route('payment.cancel'),
            ],
        ];

        $response = $provider->createOrder($order);

        if (isset($response['id']) && $response['id'] != null) {
            foreach ($response['links'] as $link) {
                if ($link['rel'] === 'approve') {
                    return redirect()->away($link['href']);
                }
            }
        }

        return redirect()->route('payment.cancel')->with('error', 'Something went wrong.');
    }

    public function cancel()
    {
        return redirect()->route('home')->with('error', 'Your payment was canceled.');
    }

    public function success(Request $request)
    {
        $provider = new PayPalClient();
        $provider->setApiCredentials(config('paypal'));
        $paypalToken = $provider->getAccessToken();

        $response = $provider->capturePaymentOrder($request->token);

        if (isset($response['status']) && $response['status'] == 'COMPLETED') {
            // Retrieve the order from the database (Assuming it's stored before redirecting to PayPal)
            $order = Order::where('user_id', auth()->user()->id)->latest()->first();

            if (!$order) {
                return redirect()->route('home')->with('error', 'Order not found.');
            }

            // Mark the order as paid
            $order->payment_status = 'paid';
            $order->save();

            // Clear the cart after successful payment
            session()->forget('cart');
            session()->forget('coupon');
            Cart::where('user_id', auth()->user()->id)->delete();

            return redirect()->route('home')->with('success', 'Payment successful, order placed!');
        }

        return redirect()->route('payment.cancel')->with('error', 'Payment failed.');
    }
}
