@extends('frontend.layouts.master')

@section('title','Otaku Haven || Refund Policy')

@section('main-content')

<div class="breadcrumbs">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="bread-inner">
                    <ul class="bread-list">
                        <li><a href="index1.html">Home<i class="ti-arrow-right"></i></a></li>
                        <li class="active"><a href="#">Refund Policy</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<section id="refund-policy" class="refund-wrapper">
    <div class="refund-header">
        <h1>Refund Policy</h1>
        <p>We value your satisfaction at Anime Otaku Haven Shop. Please read our refund guidelines below.</p>
    </div>

    <div class="refund-container">
        <div class="refund-item active">
            <div class="refund-answer">
                <p><strong>Eligibility for Refund:</strong></p>
                <ul>
                    <li>Received wrong item or size</li>
                    <li>Item arrived damaged or defective</li>
                    <li>Did not receive your item beyond expected delivery time</li>
                </ul>

                <p><strong>Non-Refundable Situations:</strong></p>
                <ul>
                    <li>Change of mind after purchase</li>
                    <li>Damage caused by customer misuse</li>
                    <li>Items bought during Sale or Clearance</li>
                </ul>

                <p><strong>Steps to Request a Refund:</strong></p>
                <ol>
                    <li>Contact us within <strong>7 days</strong> after receiving your order.</li>
                    <li>Send proof of issue (photo/video of item and packaging).</li>
                    <li>Submit your request through any of the following:
                        <ul>
                            <li>Message us on our <a href="https://www.facebook.com/BibimeowOtakuHaven" target="_blank" style="color:#db4444; font-weight:bold;">Facebook Page</a></li>
                            <li>Reach out via our <strong>Customer Support</strong> for faster assistance</li>
                        </ul>
                    </li>
                    <li>Approved refunds will be processed within <strong>5-7 business days</strong>.</li>
                    <li>Refund will be sent through your original payment method (PayPal or COD reversal if applicable).</li>
                </ol>

                <p><strong>Contact Us:</strong></p>
                <p>If you have any concerns or need help with your refund, feel free to contact us directly through:</p>
                <ul>
                    <li><strong>Facebook Page:</strong> <a href="https://www.facebook.com/BibimeowOtakuHaven" target="_blank" style="color:#db4444;">Anime Otaku Haven Shop</a></li>
                    <li><strong>Customer Support Email:</strong> bibimeowotakuhaven@gmail.com</li>
                </ul>

                <p>We appreciate your understanding and patience!</p>
            </div>
        </div>
    </div>
</section>

@endsection


<style>
    .refund-wrapper {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        width: 100%;
        padding: 50px 50px;
    }

    .refund-header {
        text-align: center;
        margin-bottom: 30px;
    }

    .refund-header h1 {
        font-size: 2.5rem;
        color: #db4444;
        margin-bottom: 10px;
    }

    .refund-header p {
        font-size: 1.1rem;
        color: #777;
        max-width: 600px;
        margin: 0 auto;
    }

    .refund-container {
        max-width: 800px;
        width: 100%;
    }

    .refund-item {
        margin-bottom: 20px;
        border-radius: 8px;
        overflow: hidden;
        background-color: #fff;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        transition: box-shadow 0.3s ease;
    }

    .refund-item.active {
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
    }

    .refund-answer {
        padding: 50px;
        background-color: #f9f9f9;
        color: #555;
    }

    .refund-answer p, .refund-answer ul, .refund-answer ol {
        margin: 1rem 0;
        line-height: 1.6;
    }

    .refund-answer ul, .refund-answer ol {
        padding-left: 1.5rem;
    }

    .refund-answer li {
        margin-bottom: 0.5rem;
    }

    .refund-answer a:hover {
        text-decoration: underline;
    }

    @media (max-width: 768px) {
        .refund-header h1 {
            font-size: 2rem;
        }

        .refund-header p {
            font-size: 1rem;
        }

        .refund-answer p, .refund-answer li {
            font-size: 0.95rem;
        }
    }
</style>
