@extends('frontend.layouts.master')
@section('title','Otaku Haven || HOME PAGE')
@section('main-content')

<!-- Carousel Section Begin -->
 <section class="carousel-section" style="margin-top: 15px; margin-bottom: 50px;">
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel" data-interval="2500">
            <div class="carousel-inner">
                <!-- Genshin Impact Banner Slide -->
                <div class="carousel-item selected">
                    <div class="genshin-banner">
                        <div class="text-content">
                            <h6>
                                <img src="{{ asset('frontend/img/logo/pyro.png') }}" alt="Pyro Logo" class="category-logo">
                                 Genshin Impact Figure
                            </h6>
                            <h2>Childe Genshin Impact Acrylic stand</h2>
                            <a href="{{ route('product-detail', 'childe-genshin-impact-acrylic-stand') }}" class="shop-now">Shop Now →</a>
                        </div>
                        <div class="image-content">
                            <img class="genshin-image" src="{{ asset('frontend/img/product/AS1.1.png') }}" alt="Genshin Impact Figure">
                        </div>
                    </div>
                </div>

                <div class="carousel-item">
                    <div class="genshin-banner">
                        <div class="text-content">
                            <h6>
                                <img src="{{ asset('frontend/img/logo/pyro.png') }}" alt="Pyro Logo" class="category-logo">
                                Genshin Impact Cosplay Hoodie
                            </h6>
                            <h2>Genshin Impact Hutao Cosplay Hoodie</h2>
                            <a href="{{ route('product-detail', 'huta-genshin-impact-cosplay-hoodie') }}" class="shop-now">Shop Now →</a>
                        </div>
                        <div class="image-content">
                            <img class="genshin-image" src="{{ asset('frontend/img/product/H-Huta.png') }}" alt="Genshin Impact Figure">
                        </div>
                    </div>
                </div>

                <div class="carousel-item">
                    <div class="genshin-banner">
                        <div class="text-content">
                            <h6>
                                <img src="{{ asset('frontend/img/logo/pyro.png') }}" alt="Pyro Logo" class="category-logo">
                                Genshin Impact Button Pin Badge
                            </h6>
                            <h2>TinPlate Pins Bag Badge Brooch</h2>
                            <a href="{{ route('product-grids') }}" class="shop-now">Shop Now →</a>
                        </div>
                        <div class="image-content">
                            <img class="genshin-image" src="{{ asset('frontend/img/product/sekiro_death.png') }}" alt="Genshin Impact Figure">
                        </div>
                    </div>
                </div>

                <div class="carousel-item">
                    <div class="genshin-banner">
                        <div class="text-content">
                            <h6>
                                <img src="{{ asset('frontend/img/logo/pyro.png') }}" alt="Pyro Logo" class="category-logo">
                                Genshin Impact Keqing Opulent Splendor
                            </h6>
                            <h2>Keqing New Skin Cosplay Costume</h2>
                            <a href="{{ route('product-detail', 'genshin-impact-cosplay-keqing-new-skin-cosplay-costume') }}" class="shop-now">Shop Now →</a>
                        </div>
                        <div class="image-content">
                            <img class="genshin-image" src="{{ asset('frontend/img/product/Keqing_Opulent.png') }}" alt="Genshin Impact Figure">
                        </div>
                    </div>
                </div>
            </div>

            <!-- Carousel Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleControls" data-slide-to="0" class="selected"></li>
                <li data-target="#carouselExampleControls" data-slide-to="1" ></li>
                <li data-target="#carouselExampleControls" data-slide-to="2" ></li>
                <li data-target="#carouselExampleControls" data-slide-to="3" ></li>
            </ol>
        </div>
    </section>
<!-- Carousel Section End -->

<!-- Category Section Begin -->
    <div class="label-container">
        <div class="label-icon"></div>
        <span>Categories</span>
    </div>

    <section class="product spad">
    <div class="container">
        <div class="row d-flex align-items-center justify-content-between">
            <div class="col-auto">
                <div class="shop-section-title" style="margin-bottom: 30px;">
                    <h3>Browse by Category</h3>
                </div>
            </div>
            <div class="col-auto">
                <a href="{{route('product-grids')}}">
                    <button class="view-all-btn text-white px-4 py-2 rounded">View All</button>
                </a>
            </div>
        </div>

        <div class="custom-category-wrapper">
            <div class="custom-category-list">
                <a href="{{ route('product-cat', 'keychain') }}" class="custom-category-item">
                    <img src="{{ asset('frontend/img/logo/keychain-logo.png') }}" alt="Keychain">
                    <span>Keychain</span>
                </a>
                <a href="{{ route('product-cat', 'tote-bags') }}" class="custom-category-item">
                    <img src="{{ asset('frontend/img/logo/tote bag logo.png') }}" alt="Tote Bags">
                    <span>Tote Bags</span>
                </a>
                <a href="{{ route('product-cat', 'hoodies') }}" class="custom-category-item">
                    <img src="{{ asset('frontend/img/logo/hoodies.png') }}" alt="Hoodies">
                    <span>Hoodies</span>
                </a>
                <a href="{{ route('product-cat', 'eyemask') }}" class="custom-category-item">
                    <img src="{{ asset('frontend/img/logo/eyemask.png') }}" alt="Eyemask">
                    <span>Eyemask</span>
                </a>
                <a href="{{ route('product-cat', 'plush-toys') }}" class="custom-category-item">
                    <img src="{{ asset('frontend/img/logo/bunny-logo.png') }}" alt="Plush Toys">
                    <span>Plush Toys</span>
                </a>
                <a href="{{ route('product-cat', 'footwear') }}" class="custom-category-item">
                    <img src="{{ asset('frontend/img/logo/footwear-logo.png') }}" alt="Footwear">
                    <span>Footwear</span>
                </a>
                <a href="{{ route('product-cat', 't-shirts-2503283106-187') }}" class="custom-category-item">
                    <img src="{{ asset('frontend/img/logo/tshirt-logo.png') }}" alt="T-Shirt">
                    <span>T-Shirt</span>
                </a>
            </div>
        </div>
    </div>
    </section>
<!-- Category Section End -->

<!-- Start Product Area -->
<div class="product-area section">

        <div class="label-container">
            <div class="label-icon"></div>
            <span>Our Products</span>
        </div>

        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-12 d-flex justify-content-between align-items-center">
                    <div class="shop-section-title">
                        <h3>Explore Our Products</h3>
                    </div>
                    <div>
                        <a href="{{ route('product-grids') }}">
                            <button class="view-all-btn text-white px-4 py-2 rounded">View All</button>
                        </a>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="product-info">
                        <div class="tab-content isotope-grid" id="myTabContent">
                             <!-- Start Single Tab -->
                            @if($product_lists)
                                @foreach($product_lists as $key=>$product)
                                <div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item {{$product->cat_id}}">
                                    <div class="single-product">
                                        <div class="product-img">
                                            <a href="{{route('product-detail',$product->slug)}}">
                                                @php
                                                    $photo=explode(',',$product->photo);
                                                // dd($photo);
                                                @endphp
                                                <img class="default-img" src="{{$photo[0]}}" alt="{{$photo[0]}}">
                                                <img class="hover-img" src="{{$photo[0]}}" alt="{{$photo[0]}}">
                                                @if($product->stock<=0)
                                                    <span class="out-of-stock">Sale out</span>
                                                @elseif($product->condition=='new')
                                                    <span class="new">New</span
                                                @elseif($product->condition=='hot')
                                                    <span class="hot">Hot</span>
                                                @else
                                                    <span class="price-dec">{{$product->discount}}% Off</span>
                                                @endif


                                            </a>
                                            <div class="button-head">
                                                <div class="product-action">
                                                    <a data-toggle="modal" data-target="#{{$product->id}}" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>
                                                    <a title="Wishlist" href="{{route('add-to-wishlist',$product->slug)}}" ><i class=" ti-heart "></i><span>Add to Wishlist</span></a>
                                                </div>
                                                <div class="product-action-2">
                                                    <a title="Add to cart" href="{{route('add-to-cart',$product->slug)}}">Add to cart</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <h3><a href="{{route('product-detail',$product->slug)}}">{{$product->title}}</a></h3>
                                            <div class="product-price">
                                                @php
                                                    $after_discount=($product->price-($product->price*$product->discount)/100);
                                                @endphp
                                                <span>₱{{number_format($after_discount,2)}}</span>
                                                <del style="padding-left:4%;">₱{{number_format($product->price,2)}}</del>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach

                             <!--/ End Single Tab -->
                            @endif

                        <!--/ End Single Tab -->

                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>
<!-- End Product Area -->
{{-- @php
    $featured=DB::table('products')->where('is_featured',1)->where('status','active')->orderBy('id','DESC')->limit(1)->get();
@endphp --}}

<!-- Category Section Begin -->
<div class="game-banner">
        <div class="game-text-content">
            <p>Categories</p>
            <h2>Enhance Your Game Experience</h2>
            <div class="game-timer">
                <div><strong>23</strong><br>Hours</div>
                <div><strong>05</strong><br>Days</div>
                <div><strong>59</strong><br>Minutes</div>
                <div><strong>35</strong><br>Seconds</div>
            </div>
            <a href="{{route('product-grids')}}" class="game-btn">Buy Now!</a>
        </div>
        <div class="game-image-content">
            <img src="{{ asset('frontend/img/product/playmat.png') }}" alt="Game Cards">
        </div>
    </div>
<!-- Category Section End -->

<!-- Start Most Popular -->

<div class="product-area most-popular section">
    <div class="label-container">
        <div class="label-icon"></div>
        <span>This Month</span>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="shop-section-title">
                    <h3>Hot Items</h3>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="owl-carousel popular-slider">
                    @foreach($product_lists as $product)
                        @if($product->condition=='hot')
                            <!-- Start Single Product -->
                        <div class="single-product">
                            <div class="product-img">
                                <a href="{{route('product-detail',$product->slug)}}">
                                    @php
                                        $photo=explode(',',$product->photo);
                                    // dd($photo);
                                    @endphp
                                    <img class="default-img" src="{{$photo[0]}}" alt="{{$photo[0]}}">
                                    <img class="hover-img" src="{{$photo[0]}}" alt="{{$photo[0]}}">
                                    {{-- <span class="out-of-stock">Hot</span> --}}
                                </a>
                                <div class="button-head">
                                    <div class="product-action">
                                        <a data-toggle="modal" data-target="#{{$product->id}}" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>
                                        <a title="Wishlist" href="{{route('add-to-wishlist',$product->slug)}}" ><i class=" ti-heart "></i><span>Add to Wishlist</span></a>
                                    </div>
                                    <div class="product-action-2">
                                        <a href="{{route('add-to-cart',$product->slug)}}">Add to cart</a>
                                    </div>
                                </div>
                            </div>
                            <div class="product-content">
                                <h3><a href="{{route('product-detail',$product->slug)}}">{{$product->title}}</a></h3>
                                <div class="product-price">
                                    <span class="old">₱{{number_format($product->price,2)}}</span>
                                    @php
                                    $after_discount=($product->price-($product->price*$product->discount)/100)
                                    @endphp
                                    <span>₱{{number_format($after_discount,2)}}</span>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Product -->
                        @endif
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Most Popular Area -->

<!-- Start Shop Home List  -->

<section class="shop-home-list section">
    <div class="label-container">
        <div class="label-icon"></div>
        <span>Featured</span>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-12">
                <div class="row">
                    <div class="col-12">
                        <div class="shop-section-title">
                            <h3>New Arrival</h3>
                        </div>
                    </div>
                </div>
                <div class="row">
                    @php
                        $product_lists=DB::table('products')->where('status','active')->orderBy('id','DESC')->limit(6)->get();
                    @endphp
                    @foreach($product_lists as $product)
                        <div class="col-md-4">
                            <!-- Start Single List  -->
                            <div class="single-list">
                                <div class="row">
                                <div class="col-lg-6 col-md-6 col-12">
                                    <div class="list-image overlay">
                                        @php
                                            $photo=explode(',',$product->photo);
                                            // dd($photo);
                                        @endphp
                                        <img src="{{$photo[0]}}" alt="{{$photo[0]}}">
                                        <a href="{{route('add-to-cart',$product->slug)}}" class="buy"><i class="fa fa-shopping-bag"></i></a>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-12 no-padding">
                                    <div class="content">
                                        <h4 class="title"><a href="#">{{$product->title}}</a></h4>
                                        <p class="price with-discount">₱{{number_format($product->discount,2)}}</p>
                                    </div>
                                </div>
                                </div>
                            </div>
                            <!-- End Single List  -->
                        </div>
                    @endforeach

                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Shop Home List  -->

<!-- Start Shop Services Area -->
<section class="shop-services section home">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-12">
                <!-- Start Single Service -->
                <div class="single-service">
                    <i class="ti-rocket"></i>
                    <h4>Free shiping</h4>
                    <p>Orders over P500</p>
                </div>
                <!-- End Single Service -->
            </div>
            <div class="col-lg-3 col-md-6 col-12">
                <!-- Start Single Service -->
                <div class="single-service">
                    <i class="ti-reload"></i>
                    <h4>Free Return</h4>
                    <p>Within 30 days returns</p>
                </div>
                <!-- End Single Service -->
            </div>
            <div class="col-lg-3 col-md-6 col-12">
                <!-- Start Single Service -->
                <div class="single-service">
                    <i class="ti-lock"></i>
                    <h4>Sucure Payment</h4>
                    <p>100% secure payment</p>
                </div>
                <!-- End Single Service -->
            </div>
            <div class="col-lg-3 col-md-6 col-12">
                <!-- Start Single Service -->
                <div class="single-service">
                    <i class="ti-tag"></i>
                    <h4>Best Peice</h4>
                    <p>Guaranteed price</p>
                </div>
                <!-- End Single Service -->
            </div>
        </div>
    </div>
</section>
<!-- End Shop Services Area -->


<!-- Modal -->
@if($product_lists)
    @foreach($product_lists as $key=>$product)
        <div class="modal fade" id="{{$product->id}}" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span class="ti-close" aria-hidden="true"></span></button>
                        </div>
                        <div class="modal-body">
                            <div class="row no-gutters">
                                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                    <!-- Product Slider -->
                                        <div class="product-gallery">
                                            <div class="quickview-slider-active">
                                                @php
                                                    $photo=explode(',',$product->photo);
                                                // dd($photo);
                                                @endphp
                                                @foreach($photo as $data)
                                                    <div class="single-slider">
                                                        <img src="{{$data}}" alt="{{$data}}">
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    <!-- End Product slider -->
                                </div>
                                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                    <div class="quickview-content">
                                        <h2>{{$product->title}}</h2>
                                        <div class="quickview-ratting-review">
                                            <div class="quickview-ratting-wrap">
                                                <div class="quickview-ratting">
                                                    {{-- <i class="yellow fa fa-star"></i>
                                                    <i class="yellow fa fa-star"></i>
                                                    <i class="yellow fa fa-star"></i>
                                                    <i class="yellow fa fa-star"></i>
                                                    <i class="fa fa-star"></i> --}}
                                                    @php
                                                        $rate=DB::table('product_reviews')->where('product_id',$product->id)->avg('rate');
                                                        $rate_count=DB::table('product_reviews')->where('product_id',$product->id)->count();
                                                    @endphp
                                                    @for($i=1; $i<=5; $i++)
                                                        @if($rate>=$i)
                                                            <i class="yellow fa fa-star"></i>
                                                        @else
                                                        <i class="fa fa-star"></i>
                                                        @endif
                                                    @endfor
                                                </div>
                                                <a href="#"> ({{$rate_count}} customer review)</a>
                                            </div>
                                            <div class="quickview-stock">
                                                @if($product->stock >0)
                                                <span><i class="fa fa-check-circle-o"></i> {{$product->stock}} in stock</span>
                                                @else
                                                <span><i class="fa fa-times-circle-o text-danger"></i> {{$product->stock}} out stock</span>
                                                @endif
                                            </div>
                                        </div>
                                        @php
                                            $after_discount=($product->price-($product->price*$product->discount)/100);
                                        @endphp
                                        <h3><small><del class="text-muted">₱{{number_format($product->price,2)}}</del></small>    ₱{{number_format($after_discount,2)}}  </h3>
                                        <div class="quickview-peragraph">
                                            <p>{!! html_entity_decode($product->summary) !!}</p>
                                        </div>
                                        @if($product->size)
                                            <div class="size">
                                                <div class="row">
                                                    <div class="col-lg-6 col-12">
                                                        <h5 class="title">Size</h5>
                                                        <select>
                                                            @php
                                                            $sizes=explode(',',$product->size);
                                                            // dd($sizes);
                                                            @endphp
                                                            @foreach($sizes as $size)
                                                                <option>{{$size}}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                    {{-- <div class="col-lg-6 col-12">
                                                        <h5 class="title">Color</h5>
                                                        <select>
                                                            <option selected="selected">orange</option>
                                                            <option>purple</option>
                                                            <option>black</option>
                                                            <option>pink</option>
                                                        </select>
                                                    </div> --}}
                                                </div>
                                            </div>
                                        @endif
                                        <form action="{{route('single-add-to-cart')}}" method="POST" class="mt-4">
                                            @csrf
                                            <div class="quantity">
                                                <!-- Input Order -->
                                                <div class="input-group">
                                                    <div class="button minus">
                                                        <button type="button" class="btn btn-primary btn-number" disabled="disabled" data-type="minus" data-field="quant[1]">
                                                            <i class="ti-minus"></i>
                                                        </button>
                                                    </div>
													<input type="hidden" name="slug" value="{{$product->slug}}">
                                                    <input type="text" name="quant[1]" class="input-number"  data-min="1" data-max="1000" value="1">
                                                    <div class="button plus">
                                                        <button type="button" class="btn btn-primary btn-number" data-type="plus" data-field="quant[1]">
                                                            <i class="ti-plus"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                                <!--/ End Input Order -->
                                            </div>
                                            <div class="add-to-cart">
                                                <button type="submit" class="btn">Add to cart</button>
                                                <a href="{{route('add-to-wishlist',$product->slug)}}" class="btn min"><i class="ti-heart"></i></a>
                                            </div>
                                        </form>
                                        <div class="default-social">
                                        <!-- ShareThis BEGIN --><div class="sharethis-inline-share-buttons"></div><!-- ShareThis END -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    @endforeach
@endif
<!-- Modal end -->
@endsection


@push('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>

<script>
        document.addEventListener("DOMContentLoaded", function () {
    let items = document.querySelectorAll(".carousel-item");
    let indicators = document.querySelectorAll(".carousel-indicators li");

    // Ensure Bootstrap 5 still recognizes the selected slide
    items[0].classList.add("active"); // Bootstrap requirement
    indicators[0].classList.add("active");

    // Listen for slide events and switch class
    let carousel = document.querySelector("#carouselExampleControls");
    carousel.addEventListener("slide.bs.carousel", function (event) {
        items.forEach(item => item.classList.remove("selected"));
        indicators.forEach(ind => ind.classList.remove("selected"));

        items[event.to].classList.add("selected");
        indicators[event.to].classList.add("selected");
    });
});
</script>

    <script>

        /*==================================================================
        [ Isotope ]*/
        var $topeContainer = $('.isotope-grid');
        var $filter = $('.filter-tope-group');

        // filter items on button click
        $filter.each(function () {
            $filter.on('click', 'button', function () {
                var filterValue = $(this).attr('data-filter');
                $topeContainer.isotope({filter: filterValue});
            });

        });

        // init Isotope
        $(window).on('load', function () {
            var $grid = $topeContainer.each(function () {
                $(this).isotope({
                    itemSelector: '.isotope-item',
                    layoutMode: 'fitRows',
                    percentPosition: true,
                    animationEngine : 'best-available',
                    masonry: {
                        columnWidth: '.isotope-item'
                    }
                });
            });
        });

        var isotopeButton = $('.filter-tope-group button');

        $(isotopeButton).each(function(){
            $(this).on('click', function(){
                for(var i=0; i<isotopeButton.length; i++) {
                    $(isotopeButton[i]).removeClass('how-active1');
                }

                $(this).addClass('how-active1');
            });
        });
    </script>
    <script>
         function cancelFullScreen(el) {
            var requestMethod = el.cancelFullScreen||el.webkitCancelFullScreen||el.mozCancelFullScreen||el.exitFullscreen;
            if (requestMethod) { // cancel full screen.
                requestMethod.call(el);
            } else if (typeof window.ActiveXObject !== "undefined") { // Older IE.
                var wscript = new ActiveXObject("WScript.Shell");
                if (wscript !== null) {
                    wscript.SendKeys("{F11}");
                }
            }
        }

        function requestFullScreen(el) {
            // Supports most browsers and their versions.
            var requestMethod = el.requestFullScreen || el.webkitRequestFullScreen || el.mozRequestFullScreen || el.msRequestFullscreen;

            if (requestMethod) { // Native full screen.
                requestMethod.call(el);
            } else if (typeof window.ActiveXObject !== "undefined") { // Older IE.
                var wscript = new ActiveXObject("WScript.Shell");
                if (wscript !== null) {
                    wscript.SendKeys("{F11}");
                }
            }
            return false
        }
    </script>

@endpush

<style>

.footer {
    margin-top: 100px;
}
/*---------------------
  CAROUSEL
-----------------------*/
  .carousel-section {
    height: auto;
    margin: 0 auto;
    margin-bottom: 50px; 
  }
  
  .carousel-indicators li {
    background-color: #C4C4C4;
    opacity: 50%;
    width: 18px!important;
    height: 5px; 
  }

  .carousel-indicators .selected {
    background-color: #db4444 !important;
  }

  /* Genshin Impact Banner Styling */
  .genshin-banner {
    display: flex;
    align-items: center;
    justify-content: space-between;
    background: black;
    color: white;
    padding: 40px;
    height: 370px;
    width: 85%;
    margin: 0 auto;
  }

  .category-logo {
    width: 40px; /* Adjust size as needed */
    height: auto;
    margin-right: 8px; /* Add spacing between logo and text */
    vertical-align: middle;
}


  .text-content {
    flex: 1;
    padding-left: 50px;
  }

  .text-content h6 {
    font-size: 14px;
    color: #ff4444;
    margin-bottom: 10px;
  }

  .text-content h2 {
    font-size: 40px;
    font-weight: bold;
    margin-bottom: 15px;
    color: white;
  }

  .shop-now {
    color: white;
    text-decoration: none;
    font-size: 16px;
    font-weight: bold;
  }

  .shop-now:hover {
    text-decoration: none;
    color: #E07575;
  }

  .image-content {
    flex: 1;
    text-align: right;
  }

  .genshin-image {
    width: auto;
    height: auto;
  }

/*---------------------
  LITTE TITLE
-----------------------*/

.label-container {
    display: flex;
    align-items: center;
    font-family: Arial, sans-serif;
    font-size: 16px;
    font-weight: bold;
    color: #DB4444; /* Adjusted to match the red shade */
    margin-bottom: 50px;
    }

    .label-icon {
        width: 12px;
        height: 24px;
        background-color: #DB4444;
        border-radius: 4px;
        margin-right: 8px;
        margin-left: 100px;
    }

/*---------------------
  CATEGORES
-----------------------*/
.custom-category-container {
    width: 90%;
    max-width: 900px;
    margin: auto;
    text-align: center;
}

.custom-category-title {
    font-size: 20px;
    font-weight: bold;
    margin-bottom: 15px;
    text-align: left;
}

.view-all-btn {
    background-color: #DB4444;
    color: white;
    border: none;
    font-size: 14px;
    font-weight: bold;
    cursor: pointer;
    transition: 0.3s ease;
    text-align: center;
    align-self: flex-end; /* Aligns button to the end */
}

.view-all-btn:hover {
    background-color: #e07575;
}

.custom-category-wrapper {
    display: flex;
    justify-content: center;
    margin-top: 20px; /* Add some spacing */
}

.custom-category-list {
    display: flex;
    gap: 30px; /* Space between items */
}

.custom-category-item {
    display: flex;
    flex-direction: column;
    align-items: center;
    border: 1px solid #ddd;
    padding: 15px;
    border-radius: 10px;
    transition: 0.3s ease-in-out;
    width: 120px;
    text-align: center;
}

.custom-category-item:hover {
    box-shadow: #e07575;
    background-color: #E07575;
}

.custom-category-item img {
    width: 50px;
    height: 50px;
    margin-bottom: 10px;
}

.custom-category-item span {
    font-size: 14px;
    font-weight: bold;
    color: #333;
}

/*---------------------
  GAME EXPERIENCE
-----------------------*/
        .game-banner {
            display: flex;
            align-items: center;
            background: linear-gradient(to right, #000, #222);
            color: white;
            padding: 20px;
            border-radius: 10px;
            width: 85%;
            justify-content: space-between;
            height: 60vh;
            margin: 0 auto;
            margin-bottom: 20px;
        }
        .game-text-content {
            flex: 1;
            padding: 20px;
        }
        .game-text-content h2 {
            font-size: 3em;
            color: white;
        }
        .game-text-content p {
            color: #db4444;
            font-weight: bold;
        }
        .game-timer {
            display: flex;
            gap: 10px;
            margin: 20px 0;
            font-size: 12px;
        }
        .game-timer div {
            background: white;
            color: black;
            padding: 10px;
            border-radius: 100%;
            text-align: center;
        }
        .game-btn {
            background: #db4444;
            color: black;
            padding: 10px 20px;
            border-radius: 5px;
            text-decoration: none;
            font-weight: bold;
        }
        .game-btn:hover {
            color: #E07575;
        }
        .game-image-content img {
            max-height: 380px;
            max-width: auto;
            border-radius: 5px;
            margin-left: 10px;
        }

@media (max-width: 768px) {
    .genshin-banner {
      flex-direction: column;
      text-align: center;
      height: auto;
    }
    
    .text-content {
      padding-left: 0;
    }
  }
  
</style>
