@extends('frontend.layouts.master')

@section('title','Otaku Haven || Shipping Information')

@section('main-content')

<div class="breadcrumbs">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="bread-inner">
                    <ul class="bread-list">
                        <li><a href="index1.html">Home<i class="ti-arrow-right"></i></a></li>
                        <li class="active"><a href="#">Shipping Information</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<section id="shipping-info" class="shipping-wrapper">
    <div class="shipping-header">
        <h1>Shipping Information</h1>
        <p>Everything you need to know about our shipping process at Anime Otaku Haven Shop.</p>
    </div>

    <div class="shipping-container">
        <div class="shipping-item active">
            <div class="shipping-answer">
                <p>We offer both local and international shipping. Shipping fees vary depending on your location and the size of your order.</p>
                <p><strong>Processing Time:</strong> 1-3 business days after order confirmation.</p>
                <p><strong>Delivery Time:</strong><br>
                - Local: 3-7 business days<br>
                - International: 7-20 business days</p>
                <p><strong>Tracking:</strong> Tracking details will be provided on the user dashboard once your order has been shipped.</p>
            </div>
        </div>
    </div>
</section>

@endsection


<style>
    /* Wrapper Section */
    .shipping-wrapper {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        width: 100%;
        padding: 50px 20px;
    }

    /* Header Text */
    .shipping-header {
        text-align: center;
        margin-bottom: 30px;
    }

    .shipping-header h1 {
        font-size: 2.5rem;
        color: #db4444;
        margin-bottom: 10px;
    }

    .shipping-header p {
        font-size: 1.1rem;
        color: #777;
        max-width: 600px;
        margin: 0 auto;
    }

    /* Container */
    .shipping-container {
        max-width: 800px;
        width: 100%;
    }

    /* Individual Shipping Item */
    .shipping-item {
        margin-bottom: 20px;
        border-radius: 8px;
        overflow: hidden;
        background-color: #fff;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        transition: box-shadow 0.3s ease;
    }

    .shipping-item.active {
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
    }

    /* Shipping Question Button (Optional if expandable content later) */
    .shipping-question {
        width: 100%;
        background-color: #fff;
        border: none;
        padding: 1rem;
        text-align: left;
        font-size: 1.1rem;
        font-weight: bold;
        color: #E07575;
        cursor: pointer;
        border-bottom: 1px solid #e0e0e0;
        outline: none;
        transition: color 0.3s ease;
    }

    .shipping-question:hover {
        color: #db4444;
    }

    /* Answer Content */
    .shipping-answer {
        padding: 1rem;
        background-color: #f9f9f9;
        color: #555;
    }

    .shipping-answer p {
        margin: 1rem 0;
        line-height: 1.6;
    }

    /* Responsive Design */
    @media (max-width: 768px) {
        .shipping-header h1 {
            font-size: 2rem;
        }

        .shipping-header p {
            font-size: 1rem;
        }

        .shipping-answer p {
            font-size: 0.95rem;
        }
    }
</style>
