<header class="header shop">
    <!-- Topbar -->
    <div class="topbar">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-12">
                    <!-- Top Left -->
                    <div class="top-left">
                        <ul class="list-main">
                            @php
                                $settings=DB::table('settings')->get();
                                
                            @endphp
                            <li><i class="ti-headphone-alt" style="color: #db4444;"></i>@foreach($settings as $data) {{$data->phone}} @endforeach</li>
                            <li><i class="ti-email" style="color: #db4444;"></i> @foreach($settings as $data) {{$data->email}} @endforeach</li>
                        </ul>
                    </div>
                    <!--/ End Top Left -->
                </div>
                <div class="col-lg-6 col-md-12 col-12">
                    <!-- Top Right -->
                    <div class="right-content">
                        <ul class="list-main">
                        <li><i class="ti-location-pin"></i> <a href="{{route('order.track')}}">Track Order</a></li>
                            {{-- <li><i class="ti-alarm-clock"></i> <a href="#">Daily deal</a></li> --}}
                            @auth 
                                @if(Auth::user()->role=='admin')
                                    <li><i class="ti-user"></i> <a href="{{route('admin')}}"  target="_blank">Dashboard</a></li>
                                @else 
                                    <li><i class="ti-user"></i> <a href="{{route('user')}}"  target="_blank">Dashboard</a></li>
                                @endif
                                <li><i class="ti-power-off"></i> <a href="{{route('user.logout')}}">Logout</a></li>

                            @else
                                <li><i class="ti-power-off"></i><a href="{{route('login.form')}}">Login /</a> <a href="{{route('register.form')}}">Register</a></li>
                            @endauth
                        </ul>
                    </div>
                    <!-- End Top Right -->
                </div>
            </div>
        </div>
    </div>
    <!-- End Topbar -->
    <div class="middle-inner">
        <div class="container">
            <div class="row">
                <div class="col-lg-2 col-md-2 col-12">
                    <!-- Logo -->
                    <div class="logo">
                        @php
                            $settings=DB::table('settings')->get();
                        @endphp                    
                        <a href="{{route('home')}}"><img src="@foreach($settings as $data) {{$data->logo}} @endforeach" alt="logo"></a>
                    </div>
                    <!--/ End Logo -->
                    <!-- Search Form -->
                    <div class="search-top">
                        <div class="top-search"><a href="#0"><i class="ti-search" style="color: #db4444;"></i></a></div>
                        <!-- Search Form -->
                        <div class="search-top">
                            <form class="search-form">
                                <input type="text" placeholder="Search here..." name="search">
                                <button value="search" type="submit"><i class="ti-search" style="color: #db4444;" ></i></button>
                            </form>
                        </div>
                        <!--/ End Search Form -->
                    </div>
                    <!--/ End Search Form -->
                    <div class="mobile-nav"></div>
                </div>
                <div class="col-lg-8 col-md-7 col-12">
                    <div class="search-bar-top">
                        <div class="search-bar" style="color: #db4444;">
                            <form method="POST" action="{{route('product.search')}}">
                                @csrf
                                <input name="search" placeholder="Search Products Here....." type="search">
                                <button class="btnn" type="submit"><i class="ti-search" style="color: #db4444;"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-12">
                    <div class="right-bar">
                        <!-- Search Form -->
                        <div class="sinlge-bar shopping" style="color: #db4444;">
                            @php 
                                $total_prod=0;
                                $total_amount=0;
                            @endphp
                           @if(session('wishlist'))
                                @foreach(session('wishlist') as $wishlist_items)
                                    @php
                                        $total_prod+=$wishlist_items['quantity'];
                                        $total_amount+=$wishlist_items['amount'];
                                    @endphp
                                @endforeach
                           @endif
                            <a href="{{route('wishlist')}}" class="single-icon" style="color: #db4444;"><i class="fa fa-heart-o"></i> <span class="total-count">{{Helper::wishlistCount()}}</span></a>
                            <!-- Shopping Item -->
                            @auth
                                <div class="shopping-item">
                                    <div class="dropdown-cart-header">
                                        <span>{{count(Helper::getAllProductFromWishlist())}} Items</span>
                                        <a href="{{route('wishlist')}}">View Wishlist</a>
                                    </div>
                                    <ul class="shopping-list">
                                        {{-- {{Helper::getAllProductFromCart()}} --}}
                                            @foreach(Helper::getAllProductFromWishlist() as $data)
                                                    @php
                                                        $photo=explode(',',$data->product['photo']);
                                                    @endphp
                                                    <li>
                                                        <a href="{{route('wishlist-delete',$data->id)}}" class="remove" title="Remove this item"><i class="fa fa-remove"></i></a>
                                                        <a class="cart-img" href="#"><img src="{{$photo[0]}}" alt="{{$photo[0]}}"></a>
                                                        <h4><a href="{{route('product-detail',$data->product['slug'])}}" target="_blank">{{$data->product['title']}}</a></h4>
                                                        <p class="quantity">{{$data->quantity}} x - <span class="amount">₱{{number_format($data->price,2)}}</span></p>
                                                    </li>
                                            @endforeach
                                    </ul>
                                    <div class="bottom">
                                        <div class="total">
                                            <span>Total</span>
                                            <span class="total-amount">₱{{number_format(Helper::totalWishlistPrice(),2)}}</span>
                                        </div>
                                        <a href="{{route('cart')}}" class="btn animate">Cart</a>
                                    </div>
                                </div>
                            @endauth
                            <!--/ End Shopping Item -->
                        </div>
                        {{-- <div class="sinlge-bar">
                            <a href="{{route('wishlist')}}" class="single-icon" style="color: #db4444;"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                        </div> --}}
                        <div class="sinlge-bar shopping">
                            <a href="{{route('cart')}}" class="single-icon" style="color: #db4444;"><i class="ti-bag"></i> <span class="total-count">{{Helper::cartCount()}}</span></a>
                            <!-- Shopping Item -->
                            @auth
                                <div class="shopping-item">
                                    <div class="dropdown-cart-header">
                                        <span>{{count(Helper::getAllProductFromCart())}} Items</span>
                                        <a href="{{route('cart')}}">View Cart</a>
                                    </div>
                                    <ul class="shopping-list">
                                        {{-- {{Helper::getAllProductFromCart()}} --}}
                                            @foreach(Helper::getAllProductFromCart() as $data)
                                                    @php
                                                        $photo=explode(',',$data->product['photo']);
                                                    @endphp
                                                    <li>
                                                        <a href="{{route('cart-delete',$data->id)}}" class="remove" title="Remove this item"><i class="fa fa-remove"></i></a>
                                                        <a class="cart-img" href="#"><img src="{{$photo[0]}}" alt="{{$photo[0]}}"></a>
                                                        <h4><a href="{{route('product-detail',$data->product['slug'])}}" target="_blank">{{$data->product['title']}}</a></h4>
                                                        <p class="quantity">{{$data->quantity}} x - <span class="amount">₱{{number_format($data->price,2)}}</span></p>
                                                    </li>
                                            @endforeach
                                    </ul>
                                    <div class="bottom">
                                        <div class="total">
                                            <span>Total</span>
                                            <span class="total-amount">₱{{number_format(Helper::totalCartPrice(),2)}}</span>
                                        </div>
                                        <a href="{{route('checkout')}}" class="btn animate">Checkout</a>
                                    </div>
                                </div>
                            @endauth
                            <!--/ End Shopping Item -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Header Inner -->
    <div class="header-inner">
        <div class="container">
            <div class="cat-nav-head">
                <div class="row">
                    <div class="col-lg-12 col-12">
                        <div class="menu-area">
                            <!-- Main Menu -->
                            <nav class="navbar navbar-expand-lg">
                                <div class="navbar-collapse">	
                                    <div class="nav-inner">	
                                        <ul class="nav main-menu menu navbar-nav">
                                            <li class="{{Request::path()=='home' ? 'active' : ''}}"><a href="{{route('home')}}">Home</a></li>
                                            <li class="{{Request::path()=='about-us' ? 'active' : ''}}"><a href="{{route('about-us')}}">About Us</a></li>
                                            <li class="@if(Request::path()=='product-grids'||Request::path()=='product-lists')  active  @endif"><a href="{{route('product-grids')}}">Products</a></li>												
                                                {{Helper::getHeaderCategory()}}
                                            <li class="{{Request::path()=='blog' ? 'active' : ''}}"><a href="{{route('blog')}}">Events</a></li>									
                                               
                                            <li class="{{Request::path()=='contact' ? 'active' : ''}}"><a href="{{route('contact')}}">Contact Us</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </nav>
                            <!--/ End Main Menu -->	
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ End Header Inner -->
</header>

<style>
.btn {
	position: relative;
	font-weight: 500;
	font-size:14px;
	color: #fff;
	background: #333;
	display: inline-block;
	-webkit-transition: all 0.4s ease;
	-moz-transition: all 0.4s ease;
	transition: all 0.4s ease;
	z-index: 5;
	display: inline-block;
	padding: 13px 32px;
	border-radius: 0px;
	text-transform:uppercase;
}
.btn:hover{
	color:#fff;
	background:#E07575;
}
#scrollUp {
	right: 10px;
	z-index: 33;
	bottom: 10px;
	text-align: center;
}
#scrollUp i{
	height: 40px;
    width: 40px;
    line-height: 40px;
	background:transparent;
    background:#222;
    border-radius: 0;
	font-size: 18px;
	-webkit-transition: all 500ms ease;
    -moz-transition: all 500ms ease;
    transition: all 500ms ease;
	display:block;
	color: #fff;
	box-shadow: 0px 4px 19px #00000038;
}
#scrollUp i:hover{
	background:#E07575 !important;
	color:#fff;
}
/*======================================
	01. Header CSS
========================================*/
/* Topbar */
.topbar {
	background-color: #fff;
	border-bottom: 1px solid #e2e2e2;
	padding: 15px 0;
}
/* Logo */
.header .logo {
	float: left;
	margin-top: 35px;
	-webkit-transition: all 0.4s ease;
	-moz-transition: all 0.4s ease;
	transition: all 0.4s ease;
}
.header .navbar {
	padding: 0;
}
/* Main Menu */
.navbar-expand-lg .navbar-collapse{
	display:block !important;
}
.header.v3 .navbar-expand-lg .navbar-collapse{
	display:block !important;
	background:#333;
}
.header .nav li a i {
	margin-left: 6px;
	font-size: 10px;
}
/* Dropdown Menu */
.header .nav li .dropdown {
	background: #fff;
	width: 220px;
	position: absolute;
	top: 100%;
	z-index: 999;
	-webkit-box-shadow: 0px 3px 5px #3333334d;
	-moz-box-shadow: 0px 3px 5px #3333334d;
	box-shadow: 0px 3px 5px #3333334d;
	transform-origin: 0 0 0;
	transform: scaleY(0.2);
	-webkit-transition: all 0.3s ease 0s;
	-moz-transition: all 0.3s ease 0s;
	transition: all 0.3s ease 0s;
	opacity: 0;
	visibility: hidden;
	padding: 10px;
	left: 0;
	margin: 0;
}
.header .nav li:hover .dropdown{
	opacity:1;
	visibility:visible;
	transform:translateY(0px);
}
.header .nav li .dropdown li{
	float:none;
	margin:0;
}
.header .nav li .dropdown li a {
	padding: 8px 15px;
	color: #666;
	display: block;
	font-weight: 400;
	text-transform: capitalize;
	background: transparent;
}
.header .nav li .dropdown li a:before{
	display:none;
}
.header .nav li .dropdown li:last-child a{
	border-bottom:0px;
}
.header .nav li .dropdown li:hover a{
	color:#fff;
	background:#E07575 !important;
}
.header .nav li .dropdown li a:hover{
	border-color:transparent;
}
.header .nav li .dropdown li i {
	float: right;
	margin-top: 8px;
	font-size:10px;
	z-index:5;
}
.header .nav li .dropdown.sub-dropdown {
	background: #fff;
    width: 220px;
    position: absolute;
    left: 200px;
    top: 0;
    z-index: 999;
   -webkit-box-shadow: 0px 3px 5px rgba(0, 0, 0, 0.2);
	-moz-box-shadow: 0px 3px 5px rgba(0, 0, 0, 0.2);
	box-shadow: 0px 3px 10px rgba(0, 0, 0, 0.2);
	box-shadow: 0px 3px 5px #3333334d;
    transform-origin: 0 0 0;
    transform: scaleY(0.2);
    -webkit-transition: all 0.3s ease 0s;
    -moz-transition: all 0.3s ease 0s;
    transition: all 0.3s ease 0s;
    opacity: 0;
    visibility: hidden;
    padding: 10px;
}
.header .nav li .dropdown li:hover .dropdown.sub-dropdown{
	opacity:1;
	visibility:visible;
	transform:translateY(0px);
}
.header .nav li .dropdown.sub-dropdown li a{
	padding: 8px 15px;
	color: #666;
	display: block;
	font-weight: 400;
	text-transform: capitalize;
	background: transparent;
}
.header .nav li .dropdown li:hover .dropdown.sub-dropdown li a{
	background:transparent;
}
.header .nav li .dropdown li .dropdown.sub-dropdown li a:hover{
	color:#fff;
	background: #E07575 !important;
}
.header .nav li .dropdown.sub-dropdown li:last-child a{
	border-bottom:0px solid;
}
.mobile-search{
	display:none;
}
.header.shop .topbar {
	border: none;
	padding: 12px 0px;
}
.header.shop .nav-inner {
	margin-right: 188px;
}
.header.shop .logo {
	float: left;
	margin-top: 35px;
}
.header.shop .top-contact {
	margin-top:0px;
}
.header.shop .topbar p {
	color: #ccc;
}
.header.shop .topbar .login a {
	color: #DB4444 !important;
}
/* Topbar Left Nav */
.header.shop .left-nav{
	
}
.header.shop .top-left .list-main li:first-child{
	padding-left:0;
}
.header.shop .top-left .list-main li i{
	display: inline-block;
	margin-right: 4px;
	font-size: 15px;
	color: #DB4444 !important;
	position: relative;
	top: 3px;
}
.header.shop .right-content{
	float:right;
}
.header.shop .list-main li {
	display: inline-block;
	color: #333;
	font-size: 13px;
	font-weight: 500;
	border-right: 1px solid #f0f0f0;
	padding: 0px 13px;
}
.header.shop .list-main li i {
	display: inline-block;
	margin-right: 4px;
	font-size: 15px;
	color: #DB4444 !important;
	position: relative;
	top: 1px;
}
.header.shop .list-main li:last-child{
	padding-right:0;
	border:none;
}
.header.shop .list-main li a{
	color:#333;
}
.header.shop .list-main li a:hover{
	color:#E07575;
}
.header.shop .nav li {
	margin-right: 40px;
	float: left;
	position: relative;
}
.header.shop .nav li {
	margin-right: 38px;
	position: relative;
}
.header.shop .nav li:last-child {
	margin: 0 !important;
}
.header.shop .nav li .new {
	background: #DB4444 !important;
	color: #fff;
	text-transform: uppercase;
	font-size: 10px;
	padding: 0px 9px;
	position: absolute;
	left: 0;
	top: 6px;
	font-weight: 500;
}
.header.shop .nav li .new::before {
	position: absolute;
	content: "";
	left: 4px;
	bottom: -8px;
	border: 4px solid #E07575 !important;
	border-bottom-color: transparent;
	border-left-color: transparent;
	border-right-color: transparent;
}
/* Shopping Cart */
.header .shopping {
	display: inline-block;
	z-index: 9999;
}
.header .shopping .icon {
	position: relative;
	cursor:pointer;
	color:#222;
}
.header .shopping .shopping-item {
	position: absolute;
	top: 68px;
	right: 0;
	width: 300px;
	background: #fff;
	padding: 20px 25px;
	-webkit-transition: all 0.3s ease 0s;
	-moz-transition: all 0.3s ease 0s;
	transition: all 0.3s ease 0s;
	-webkit-transform: translateY(10px);
	-moz-transform: translateY(10px);
	transform: translateY(10px);
	-webkit-box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.2);
	-moz-box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.2);
	box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
	opacity:0;
	visibility:hidden;
	z-index:99;
}
.header .shopping:hover .shopping-item{
	transform: translateY(0px);
	opacity:1;
	visibility:visible;
}
.header .shopping .dropdown-cart-header{
	padding-bottom: 10px;
    margin-bottom: 15px;
	border-bottom:1px solid #e6e6e6;
}
.header .shopping .dropdown-cart-header span {
	text-transform: uppercase;
	color: #222;
	font-size: 13px;
	font-weight: 600;
}
.header .shopping .dropdown-cart-header a {
	float: right;
	text-transform: uppercase;
	color: #222;
	font-size: 13px;
	font-weight: 600;
}
.header .shopping .dropdown-cart-header a:hover{
	color:#E07575;
}
.header .shopping-list li {
	overflow: hidden;
	border-bottom: 1px solid #e6e6e6;
	padding-bottom: 15px;
	margin-bottom: 15px;
	position:relative;
}
.header .shopping-list li .remove {
	position: absolute;
	left: 0;
	bottom: 16px;
	margin-top: -20px;
	height: 20px;
	width: 20px;
	line-height: 18px;
	text-align: center;
	background: #fff;
	color: #222;
	border-radius: 0;
	font-size: 11px;
	border: 1px solid #ededed;
}
.header .shopping-list li .remove:hover{
	background:#222;
	color:#fff !important;
	border-color:transparent;
}
.header .shopping-list .cart-img {
	float: right;
	border: 1px solid #ededed;
	overflow:hidden;
}
.header .shopping-list .cart-img img {
	width: 70px;
	height: 70px;
	border-radius:0;
	
}
.header .shopping-list .cart-img:hover img{
	transform:scale(1.09);
}
.header .shopping-list .quantity{
	line-height: 22px;
    font-size: 13px;
	padding-bottom: 30px;
}
.header .shopping-list h4 {
	font-size: 14px;
}
.header .shopping-list h4 a {
	font-weight: 600;
	font-size: 13px;
	color: #333;
}
.header .shopping-list h4 a:hover{
	color:#E07575;
}
.header .shopping-item .bottom {
	text-align: center;
}
.header .shopping-item .total {
	overflow:hidden;
	display: block;
    padding-bottom: 10px;
}
.header .shopping-item .total span {
	text-transform:uppercase;
	color:#222;
	font-size:13px;
	font-weight:600;
	float:left;
}
.header .shopping-item .total .total-amount {
	float:right;
	font-size:14px;
}
.header .shopping-item .bottom .btn {
	background: #222;
	padding: 10px 20px;
	display: block;
	color: #fff;
	margin-top: 10px;
	border-radius: 0px;
	text-transform: uppercase;
	font-size: 14px;
	font-weight: 500;
}
.header .shopping-item .bottom .btn:hover{
	background:#E07575;
	color:#fff;
}
.header.shop{
	background:#fff;
}
.header.shop .nav-inner {
	margin: 0;
	float: left;
}
.header.shop .topbar {
	background-color: #fff;
	border: none;
}
.header.shop.v3 .topbar{
	padding:0;
}
.header.shop.v3 .topbar .inner-content{
	border-bottom:1px solid #eee;
	padding: 12px 0px;
}
.header.shop .right-nav li a {
	color: #333;
}
.header.shop .logo {
	float: left;
	margin: 19px 0 0;
}
.header.shop .top-contact {
	margin-top:0px;
}
/* Header Middle */
.header.shop .search-bar-top {
	text-align: center;
	margin-top: 10px;
}
.header.shop .search-bar {
	margin-top: 33px;
	width: 460px;
	height: 40px;
	display: inline-block;
	background: #fff;
	position: relative;
}
.header.shop .search-bar {
	width: 535px;
	height: 50px;
	display: inline-block;
	background: #fff;
	position: relative;
	margin: 0;
	line-height: 45px;
	border-radius: 5px;
	border: 1px solid #ececec;
}
.header.shop .nice-select {
	clear: initial;
	margin: 0;
	height: 48px;
	width: 150px;
	border: none;
	text-align: center;
	background: transparent;
	text-transform: capitalize;
	padding: 0 0 0 20px;
	border-right: 1px solid #eee;
	line-height: 50px;
	font-size: 14px;
	font-weight: 400;
}
.header.shop .nice-select::after {
	border-color: #666;
	right: 20px;
}
.header.shop .nice-select .list {
	border-radius:0px;
}
.header.shop .nice-select .list li.focus{
	font-weight:400;
}
.header.shop .nice-select .list li {
	color: #666;
	border-radius: 0px;
	font-size: 14px;
	font-weight: 400;
}
.header.shop .nice-select .list li:hover{
	background:#E07575;
	color:#fff;
}
.header.shop .search-bar form {
	display: inline-block;
	float: left;
	width: 260px;
}
.header.shop .search-bar input {
	height: 48px;
	background: transparent;
	color: #666;
	border-radius: 0;
	border: none;
	font-size: 14px;
	font-weight: 400;
	padding: 0 25px 0 20px;
	width: 535px;
}
.header.shop .search-bar .btnn {
	height: 50px;
	line-height: 53px;
	width: 62px;
	text-align: center;
	font-size: 18px;
	color: #fff;
	background: transparent !important;
	position: absolute;
	right: -2px;
	top: -1px;
	border: none;
	border-radius: 0 5px 5px 0;
	-webkit-transition: all 0.4s ease;
	-moz-transition: all 0.4s ease;
	transition: all 0.4s ease;
}
.header.shop .search-bar .btnn:hover{
	color:#e07575 !important;
	background:#E07575;
}
/* Search Form */
.header.shop .search-top {
	opacity: 1;
	visibility: visible;
	top: 0;
	background: transparent;
	border: none;
	box-shadow: none;
	padding: 0;
	top: 0;
}
.header.shop .middle-inner {
	padding: 20px 0;
	background: #fff;
	border-top: 1px solid #eee;
}
.header.shop.v3 .middle-inner {
	border:none;
}
.header.shop .header-inner {
	background: #333;
}
.header.shop.v3 .header-inner {
	background: transparent;
}
.header.shop.v2 .header-inner {
	background: #fff;
	border-top:1px solid #eee;
}
.header.shop .topbar p {
	color: #333;
}
.header.shop .all-category {
	color: #fff;
	background: transparent;
	position: relative;
	background: #DB4444 !important;
}
.header.shop .all-category h3{
	padding: 20px 25px;
}
.header.shop .cat-heading {
	font-size: 20px;
	color: #fff;
}
.header.shop .cat-heading i {
	color: #fff;
	display: inline-block;
	margin-right: 15px;
	font-size: 22px;
}
.header.shop .main-category {
	position: absolute;
	left: 0;
	top: 64px;
	background: #fff;
	z-index: 1;
	width: 100%;
	-webkit-box-shadow: 0px 5px 15px #0000000a;
	-moz-box-shadow: 0px 5px 15px #0000000a;
	box-shadow: 0px 5px 15px #0000000a;
}
.header.shop .main-category li{
	display:block;
	border-bottom:1px solid #f6f6f6;
	position:relative;
}
.header.shop .main-category li:last-child{
	border:none;
}
.header.shop .main-category li a {
	font-size: 14px;
	font-weight: 600;
	color: #333;
	padding: 13px 25px 13px 25px;
	display: block;
	text-transform: uppercase;
}
.header.shop .main-category li a i{
	display:inline-block;
	float:right;
}
.header.shop .sub-category {
	background: #fff;
	width: 220px;
	position: absolute;
	left: 238px;
	top: 0;
	z-index: 999999;
	opacity: 0;
	visibility: hidden;
	-webkit-transition: all 0.4s ease;
	-moz-transition: all 0.4s ease;
	transition: all 0.4s ease;
	border-left: 3px solid #DB4444 !important;
	-webkit-box-shadow: 0px 5px 15px #0000000a;
	-moz-box-shadow: 0px 5px 15px #0000000a;
	box-shadow: 0px 5px 15px #0000000a;
}
.header.shop .main-category li:hover .sub-category{
	opacity:1;
	visibility:visible;
}
.header.shop .main-category li a{
	text-transform:capitalize;
	font-weight:400;
}
.header.shop .main-category li a:hover{
	color:#E07575;
}
.header.shop .main-category .main-mega{
	position:relative;
}
.header.shop .main-category li .mega-menu {
	width: 850px;
	display: inline-block;
	height: auto;
	position: absolute;
	left: 238px;
	top: 0;
	z-index: 99999;
	background: #fff;
	border: none;
	padding: 30px;
	border-left: 3px solid #DB4444 !important;
	opacity:0;
	visibility:hidden;
	-webkit-transition:all 0.4s ease;
	-moz-transition:all 0.4s ease;
	transition:all 0.4s ease;
}
.header.shop .main-category li:hover .mega-menu{
	opacity:1;
	visibility:visible;
}
.header.shop .main-category li .mega-menu .single-menu {
	width: 33%;
	display: inline-block;
	border: none;
	padding: 0;
	padding-right: 20px;
}
.header.shop .main-category li .mega-menu .single-menu a{
	padding:0;
}
.header.shop .main-category li .mega-menu .single-menu .image{
	overflow:hidden;
}
.header.shop .main-category li .mega-menu .single-menu img{
	display:block;
	height:100%;
	width:100%;
	cursor:pointer;
}
.header.shop .main-category li .mega-menu .single-menu .image:hover img{
	transform:scale(1.1);
}
.header.shop .main-category li .mega-menu .single-menu .title-link {
	margin-bottom: 20px;
	background: #DB4444 !important;
	color: #fff;
	padding: 2px 13px;
	border-radius: 3px;
	display: inline-block;
	font-size: 14px;
}
.header.shop .main-category li .mega-menu .single-menu .title-link:hover{
	background:#333;
	color:#fff;
}
.header.shop .main-category li .mega-menu .single-menu .inner-link{
	margin-top:25px;
}
.header.shop .main-category li .mega-menu .single-menu .inner-link a{
	margin-bottom:10px;
}
.header.shop .main-category li .mega-menu .single-menu .inner-link a:hover{
	color:#E07575;
	background:transparent;
}
.header.shop .main-category li .mega-menu .single-menu .inner-link a:last-child{
	margin-bottom:0px;
}
.header.shop .menu-origin {
	float:none;
	display: inline-block;
	float: right;
}
.header.shop .nav li {
	margin-right: 40px;
	float: left;
	position: relative;
}
.header.shop .nav li {
	margin-right:5px;
	position: relative;
	float: none;
}
.header.shop .nav li:last-child{
	margin-right:0;
}
.header.shop .nav li .new {
	background: #DB4444 !important;
	color: #fff;
	text-transform: uppercase;
	font-size: 9px;
	position: absolute;
	left: 21px;
	top: 2px;
	font-weight: 500;
	height: 18px;
	line-height: 18px;
	text-align: center;
	display: block;
}
.header.shop.v2 .nav li a{
	color:#333;
}
.header.shop .nav li a {
	color: #fff;
	text-transform: capitalize;
	font-size: 15px;
	padding: 20px 15px;
	font-weight: 500;
	display: block;
	position: relative;
	-webkit-transition: all 0.4s ease;
	-moz-transition: all 0.4s ease;
	transition: all 0.4s ease;
}
.header.shop .nav li:hover a{
	color:#fff;
	background:#E07575;
}
.header.shop.v2 .nav li:hover a{
	color:#E07575;
	background:transparent;
}
.header.shop .nav li.active a{
	color:#fff;
	background:#DB4444;
}
.header.shop.v2 .nav li.active a{
	color:#333 !important;
	background:transparent !important;
}
.header.shop.v2 .nav li.active a{
	color:#DB4444 !important;
}
.header.shop .nav .dropdown li{
	margin:0;
}
.header.shop .nav li .dropdown li:hover a{
	background:#E07575;
}
.header.shop.v2 .nav li.active .dropdown li a{
	color:#333 !important;
}
.header.shop.v2 .nav li.active .dropdown li a:hover{
	color:#fff !important;
	background:#E07575 !important;
}
.header.shop.v2 .nav li.active .dropdown li a:hover{
	color:#fff !important;
}
.header.shop.v2 .nav li .dropdown li:hover a{
	color:#E07575;
}
.header.shop .nav li .dropdown li a {
	color: #333;
	padding: 8px 15px;
	font-weight: 400;
	background:#fff;
}
.header.shop.v2 .nav li .dropdown li a {
	color: #333;
	background:#fff;
}
.header.shop .nav li .dropdown li a {
	font-weight: 400;
	font-size: 14px;
}
.header.shop .nav li .dropdown li a:hover{
	color:#fff;
}
.header.shop.v2 .nav li .dropdown li a:hover{
	color:#fff !important;
	background:#E07575;
}
.header.shop .nav li .dropdown li .dropdown.sub-dropdown li a:hover{
	background:#E07575;
}
.header.shop .right-bar {
	display: inline-block;
	padding: 0;
	margin: 0;
	top: 20px;
	float: right;
	position: relative;
}
.header.shop .right-bar .sinlge-bar.top-search a {
	transform: translateY(3px);
}
.header.shop .right-bar .sinlge-bar.top-search a:hover {
	color:#E07575;
}
.header.shop .right-bar .sinlge-bar .single-icon{
	color:#333;
	font-size:20px;
	position:relative;
}
.header.shop .right-bar .sinlge-bar .single-icon:hover{
	color:#E07575;
}
.header.shop .right-bar .sinlge-bar .single-icon .total-count {
	position: absolute;
	top: -7px;
	right: -8px;
	background: #DB4444;
	width: 18px;
	height: 18px;
	line-height: 18px;
	text-align: center;
	color: #fff;
	border-radius: 100%;
	font-size: 11px;
}
.header.shop .right-bar .sinlge-bar{
	display:inline-block;
	margin-right:25px;
}
.header.shop .right-bar .sinlge-bar:last-child{
	margin-right:0px;
}
.header.shop .right-bar .sinlge-bar li a:hover{
	color:#E07575;
}
.mobile-search{
	display:none;
}
/* Header Search */
/* Search */
.header .search-top{
	display:none;
}
.header .search-top a{
	font-size:17px;
}
.header .search-top a:hover{
	color:#E07575;
}
.header .search-form {
	position: absolute;
	left: -128px;
	z-index: 9999;
	opacity: 0;
	visibility: hidden;
	-webkit-transition: all 0.5s ease;
	-moz-transition: all 0.5s ease;
	transition: all 0.5s ease;
	top: 46px;
	background: #ffffff75;
	padding: 7px;
	border-radius: 5px;
	transform: scaleY(0);
	box-shadow: 0px 4px 7px #0000003b;
	padding: 0;
	border-radius: 0;
}
.header .search-top.active .search-form {
	opacity:1;
	visibility:visible;
	transform: scaleY(1);
}
.header .search-form input {
	width: 220px;
	height: 45px;
	line-height: 45px;
	padding: 0 60px 0 15px;
	-webkit-transition: all 0.4s ease;
	-moz-transition: all 0.4s ease;
	transition: all 0.4s ease;
	border-radius: 3px;
	border: none;
	background: #fff;
	color: #333;
	border-radius: 0;
}
.header .search-form button {
	position: absolute;
	right: 0;
	height: 45px;
	top: 0;
	width: 45px;
	background: transparent;
	border: none;
	color: #3353ea;
	border-radius: 0 3px 3px 0;
	border-radius: 0;
	border-left: 1px solid #eee;
	font-size: 15px;
	color: #333;
	-webkit-transition: all 0.4s ease;
	-moz-transition: all 0.4s ease;
	transition: all 0.4s ease;
}
.header .search-form button:hover{
	color:#fff;
	background:#E07575;
	border-color:transparent;
}
/* Header Sticky */
.header .header-inner{
	width:100%;
	z-index:999;
}
.header.sticky .all-category{}
.header.sticky .all-category h3{
	cursor:pointer;
	
}
.header.sticky .all-category .main-category{
	opacity:0;
	visibility:hidden;
	-webkit-transition:all 0.4s ease;
	-moz-transition:all 0.4s ease;
	transition:all 0.4s ease;
}
.header.sticky .all-category:hover .main-category{
	opacity:1;
	visibility:visible;
}
.header.sticky .header-inner .nav li a {
	color: #333;
}
.header.sticky.v3 .header-inner .nav li a {
	color: #fff;
}
.header.sticky .header-inner .nav li:hover a{
	color:#fff;
}
.header.sticky.v2 .header-inner .nav li:hover a{
	color:#E07575;
}
.header.sticky .header-inner .nav li .dropdown li a{
	color:#333;
}
.header.sticky.v2 .header-inner .nav li .dropdown li a{
	color:#333;
}
.header.sticky .header-inner .nav li .dropdown li a:hover{
	color:#fff;
}
.header.sticky .header-inner .nav li.active a {
	color: #fff;
}
.header.sticky .header-inner{
	position:fixed;
	top:0;
	left:0;
	background:#fff;
	animation: fadeInDown 1s both 0.2s;
	-webkit-box-shadow:0px 0px 10px rgba(0, 0, 0, 0.3);
	-moz-box-shadow:0px 0px 10px rgba(0, 0, 0, 0.3);
	box-shadow:0px 0px 10px rgba(0, 0, 0, 0.3);
	z-index:999;
}
.header.sticky.v3 .header-inner{
	box-shadow:none;
}
.header.sticky.v3 .navbar-expand-lg .navbar-collapse{
	animation: fadeInDown 1s both 0.2s;
	-webkit-box-shadow:0px 0px 10px rgba(0, 0, 0, 0.3);
	-moz-box-shadow:0px 0px 10px rgba(0, 0, 0, 0.3);
	box-shadow:0px 0px 10px rgba(0, 0, 0, 0.3);
}
/*======================================
	End Header CSS
========================================*/
</style>