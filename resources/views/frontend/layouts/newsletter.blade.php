
<!-- Start Shop Newsletter  -->
<section class="shop-newsletter section">
    <div class="container">
        <div class="inner-top">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 col-12">
                    <!-- Start Newsletter Inner -->
                    <div class="inner">
                        <h4>Newsletter</h4>
                        <p> Subscribe to our newsletter and get <span>10%</span> off your first purchase</p>
                        <form action="{{route('subscribe')}}" method="post" class="newsletter-inner">
                            @csrf
                            <input name="email" placeholder="Your email address" required="" type="email">
                            <button class="btn" type="submit">Subscribe</button>
                        </form>
                    </div>
                    <!-- End Newsletter Inner -->
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Shop Newsletter -->

<style>
/*======================================
   Start Shop Newsletter CSS
========================================*/
.shop-newsletter{
	background:#fff;
}
.shop-newsletter .inner{
	text-align:center;
}
.shop-newsletter .inner h4 {
	color: #333;
	font-size: 17px;
	font-weight: 600;
	margin-bottom: 5px;
	text-transform: uppercase;
}
.shop-newsletter .inner p{
	color:#777;
	font-size:14px;
	font-weight:400;
	margin-bottom:30px;
}
.shop-newsletter .inner p span{
	color:#db4444;
}
.shop-newsletter .newsletter-inner{
	position:relative;
	display: inline-block;
}
.shop-newsletter .newsletter-inner input {
	width: 480px;
	height: 55px;
	border-radius: 0px;
	padding: 0px 30px;
	font-weight: 400;
	display: inline-block;
	text-shadow: none;
	box-shadow: none;
	border-radius: 0;
	border: none;
	border: 1px solid #ececec;
	border-radius: 30px 0 0 30px;
}
.shop-newsletter .newsletter-inner button{
	border:none;
	text-shadow:none;
	box-shadow:none;
	border-radius:0;
}
.shop-newsletter .newsletter-inner .btn {
	display: inline-block;
	height: 55px;
	padding: 10px 30px;
	position: relative;
	top: 0;
	background: #db4444 !important;
	color: #fff;
	left: -4px;
	border-radius: 0 30px 30px 0;
	font-size: 14px;
	font-weight: 500;
	text-transform: uppercase;
}
.shop-newsletter .newsletter-inner .btn:hover{
	background:#E07575 !important;
	color:#fff;
}
/*======================================
   End Shop Newsletter CSS
========================================*/
</style>