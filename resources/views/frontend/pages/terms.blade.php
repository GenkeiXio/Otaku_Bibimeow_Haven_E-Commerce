@extends('frontend.layouts.master')

@section('title','Otaku Haven || Terms and Conditions')

@section('main-content')

    <!-- Breadcrumbs -->
	<div class="breadcrumbs">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="bread-inner">
						<ul class="bread-list">
							<li><a href="index1.html">Home<i class="ti-arrow-right"></i></a></li>
							<li class="active"><a href="blog-single.html">Terms and Conditions</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End Breadcrumbs -->

    <!-- Start of Terms and Conditions -->
    <section id="terms-of-use-section">
        <div class="terms-container">
            <h4>Terms of Use</h4>
            <p>Effective Date: February 28, 2025</p><br>

            <h5>Introduction</h5>
            <p>Welcome to Anime Otaku Haven Shop! By accessing and using our website, you agree to comply with and be bound by these Terms of Use. Please read them carefully.</p><br>
            <h5>Use of Our Services</h5>
            <ul>
                <li>You must be at least 18 years old or have parental consent to use our services.</li>
                <li>You agree to provide accurate and up-to-date information when creating an account or placing an order.</li>
                <li>You are responsible for maintaining the confidentiality of your account and password.</li>
                <li>Unauthorized use of our website, including hacking or fraudulent activity, is strictly prohibited.</li>
            </ul><br>

            <h5>Intellectual Property</h5>
            <p>All content on this website, including images, logos, text, and designs, is the property of Anime Otaku Haven Shop and is protected by intellectual property laws. You may not use, reproduce, or distribute any content without our permission.</p><br>

            <h5>Orders and Payments</h5>
            <ul>
                <li>All orders placed are subject to availability and confirmation.</li>
                <li>Prices and product descriptions are subject to change without notice.</li>
                <li>We reserve the right to refuse or cancel orders if fraudulent activity is suspected.</li>
            </ul><br>

            <h5>Limitation of Liability</h5>
            <p>We are not responsible for any direct, indirect, incidental, or consequential damages arising from your use of our website or products. Your use of our services is at your own risk.</p><br>

            <h5>Terms & Conditions</h5>
            <p>By using our services, you agree to the following terms and conditions:</p>
            <ul>
                <li>In case of disputes, we encourage customers to contact our support team to resolve any issues amicably.</li>
                <li>Returns and refunds are subject to our Return Policy. Items must be returned within 14 days of receipt in their original condition.</li>
                <li>Refunds will be processed within 7-10 business days after the returned item is received and inspected.</li>
                <li>We reserve the right to refuse a return or refund if the item is damaged due to misuse or not in its original packaging.</li>
            </ul><br>

            <h5>Changes to These Terms</h5>
            <p>We may update these Terms of Use from time to time. Any changes will be posted on this page with an updated date. Continued use of our website signifies your acceptance of these changes.</p><br>

            <p>If you have any questions about these Terms of Use, please contact us at bibimeowotakuhaven@gmail.com.</p>
        </div>
    </section>
    <!-- End of Terms and Conditions -->

    <style>
        .terms-container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            background: #f9f9f9;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-top: 50px;
            margin-bottom: 50px;
        }
        .terms-container h4{
            color: #db4444;
        }

        .terms-container h5{
            color: #000000;
            padding-bottom: 10px;
        }

        .terms-container p, .terms-container ul {
            color: #555;
            line-height: 1.6;
        }
        .terms-container ul {
            padding-left: 20px;
        }
        .terms-container ul li {
            margin-bottom: 10px;
        }
        @media (max-width: 768px) {
            .terms-container {
                padding: 15px;
            }
        }
    </style>

@endsection