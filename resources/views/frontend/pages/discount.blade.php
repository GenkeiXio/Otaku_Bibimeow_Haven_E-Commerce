@extends('frontend.layouts.master')

@section('title','Otaku Haven || How to Use Discount Codes')

@section('main-content')

<div class="breadcrumbs">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="bread-inner">
                    <ul class="bread-list">
                        <li><a href="{{ route('home') }}">Home<i class="ti-arrow-right"></i></a></li>
                        <li class="active"><a href="#">How to Use Discount Codes</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<section id="discount-info" class="discount-wrapper">
    <div class="discount-header">
        <h1>How to Use Discount Codes</h1>
        <p>Enjoy amazing deals and discounts when you shop at Anime Otaku Haven Shop! Here's how you can use your discount codes during checkout.</p>
    </div>

    <div class="discount-container">

        <div class="discount-item active">
            <div class="discount-answer">
                <h3>Where to Find Discount Codes?</h3>
                <p>You can find our latest discount codes through:</p>
                <ul style="margin-left: 1rem;">
                    <li>Official Facebook Page Announcements</li>
                    <li>Special Promotional Events</li>
                    <li>Pop-ups on our Website</li>
                    <li>Exclusive Offers from Customer Support</li>
                </ul>
                <p>Make sure to follow and like our <a href="#">Facebook Page</a> to stay updated on upcoming discounts and promo codes!</p>
            </div>
        </div>

        <div class="discount-item active">
            <div class="discount-answer">
                <h3>How to Apply Discount Codes?</h3>
                <p><strong>Step 1:</strong> Add your favorite items to your cart.</p>
                <p><strong>Step 2:</strong> Proceed to checkout.</p>
                <p><strong>Step 3:</strong> Enter the Discount Code in the designated field.</p>
                <p><strong>Step 4:</strong> Click <strong>"Apply"</strong> and enjoy your discount!</p>
                <p><strong>Note:</strong> Each code may have terms such as minimum spend or expiration dates.</p>
            </div>
        </div>

        <div class="discount-item active">
            <div class="discount-answer">
                <h3>Need Help?</h3>
                <p>If you encounter any issues when using your discount code or cannot find one, feel free to reach out to our <strong>Customer Support</strong> or message us directly on our <a href="https://www.facebook.com/BibimeowOtakuHaven" target="_blank"><strong>Facebook Page</strong></a> to stay updated on upcoming discounts and promo codes!</p>
                <p>We're always happy to assist you!</p>
            </div>
        </div>

    </div>
</section>

@endsection


<style>
.discount-wrapper {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    width: 100%;
    padding-bottom: 20px;
}

.discount-header h1 {
    font-size: 2.5em;
    color: #db4444;
    margin-bottom: 10px;
    padding-top: 20px;
    text-align: center;
}

.discount-header p {
    font-size: 1.1em;
    color: #777;
    max-width: 600px;
    margin: 0 auto;
    text-align: center;
}

.discount-container {
    max-width: 800px;
    margin: 0 auto;
}

.discount-item {
    margin: 1rem 0;
    border-radius: 8px;
    overflow: hidden;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    background-color: #fff;
}

.discount-answer {
    padding: 1rem;
    background-color: #f9f9f9;
    padding: 30px;
}

.discount-answer p, .discount-answer ul li {
    margin: 1rem 0;
    color: #555;
}
</style>
