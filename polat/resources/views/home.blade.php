@extends('layouts.master')
@section('title', 'Anasayfa')

@section('content')

    @if(session()->has('message'))
        <div class="container">
            <div class="alert alert-{{session('type')}} mt-3">
                {{session('message')}}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        </div>
        @endif

    <!-- Slider -->
    @include('layouts.partials.slider')


    <!-- Banner -->
    <div class="banner bgwhite p-t-40 p-b-40">
        <div class="container">
            <div class="row">

                @foreach($categoryList as $category)
                <div class="col-sm-10 col-md-6 col-lg-4 m-l-r-auto">
                    <!-- block1 -->
                    <div class="block1 hov-img-zoom pos-relative m-b-30">
                        <img src="{{$category->image}}" alt="IMG-BENNER">

                        <div class="block1-wrapbtn w-size2">
                            <!-- Button -->
                            <a href="/category/{{$category->slug}}" class="flex-c-m size2 m-text2 bg3 hov1 trans-0-4">
                                {{$category->title}}
                            </a>
                        </div>
                    </div>
                </div>
                    @endforeach

            </div>
        </div>
    </div>






    <!-- Our product -->
    <section class="bgwhite p-t-45 p-b-58">
        <div class="container">
            <div class="sec-title p-b-22">
                <h3 class="m-text5 t-center">
                    Our Products
                </h3>
            </div>

            <!-- Tab01 -->
            <div class="tab01">
                <!-- Nav tabs -->
{{--                <ul class="nav nav-tabs" role="tablist">--}}
{{--                    <li class="nav-item">--}}
{{--                        <a class="nav-link active" data-toggle="tab" href="#best-seller" role="tab">Best Seller</a>--}}
{{--                    </li>--}}
{{--                    <li class="nav-item">--}}
{{--                        <a class="nav-link" data-toggle="tab" href="#featured" role="tab">Featured</a>--}}
{{--                    </li>--}}
{{--                    <li class="nav-item">--}}
{{--                        <a class="nav-link" data-toggle="tab" href="#sale" role="tab">Sale</a>--}}
{{--                    </li>--}}
{{--                    <li class="nav-item">--}}
{{--                        <a class="nav-link" data-toggle="tab" href="#top-rate" role="tab">Top Rate</a>--}}
{{--                    </li>--}}
{{--                </ul>--}}


                <!-- Tab panes -->
                <div class="tab-content p-t-35">
                    <!-- - -->
                    <div class="tab-pane fade show active" id="best-seller" role="tabpanel">
                        <div class="row">
                            @foreach($products as $product)
                            <div class="col-sm-6 col-md-4 col-lg-3 p-b-50">
                                <!-- Block2 -->
                                <div class="block2">
                                    <div class="block2-img wrap-pic-w of-hidden pos-relative block2-labelnew">
                                        <img src="/images/{{$product->image}}" alt="IMG-PRODUCT">

                                        <div class="block2-overlay trans-0-4">
                                            <a href="#" class="block2-btn-addwishlist hov-pointer trans-0-4">
                                                <i class="icon-wishlist icon_heart_alt" aria-hidden="true"></i>
                                                <i class="icon-wishlist icon_heart dis-none" aria-hidden="true"></i>
                                            </a>

                                            <div class="block2-btn-addcart w-size1 trans-0-4">
                                                <!-- Button -->
                                                <button class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4">
                                                    Sepete Ekle
                                                </button>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="block2-txt p-t-20">
                                        <a href="/product/{{$product->slug}}" class="block2-name dis-block s-text3 p-b-5">
                                            {{$product->title}}
                                        </a>

                                        <span class="block2-price m-text6 p-r-5">
											{{$product->price}}₺
										</span>
                                    </div>
                                </div>
                            </div>
                                @endforeach
                        </div>
                    </div>



                </div>
            </div>
        </div>
    </section>

    @include('layouts.partials.lookbook')
    @include('layouts.partials.informblock')
    @include('layouts.partials.instagramblock')

@endsection

@section('footerjs')
    <!--===============================================================================================-->
    <script type="text/javascript" src="/vendor/jquery/jquery-3.2.1.min.js"></script>
    <!--===============================================================================================-->
    <script type="text/javascript" src="/vendor/animsition/js/animsition.min.js"></script>
    <!--===============================================================================================-->
    <script type="text/javascript" src="/vendor/bootstrap/js/popper.js"></script>
    <script type="text/javascript" src="/vendor/bootstrap/js/bootstrap.min.js"></script>
    <!--===============================================================================================-->
    <script type="text/javascript" src="/vendor/select2/select2.min.js"></script>
    <script type="text/javascript">
        $(".selection-1").select2({
            minimumResultsForSearch: 20,
            dropdownParent: $('#dropDownSelect1')
        });
    </script>
    <!--===============================================================================================-->
    <script type="text/javascript" src="/vendor/slick/slick.min.js"></script>
    <script type="text/javascript" src="/js/slick-custom.js"></script>
    <!--===============================================================================================-->
    <script type="text/javascript" src="/vendor/countdowntime/countdowntime.js"></script>
    <!--===============================================================================================-->
    <script type="text/javascript" src="/vendor/lightbox2/js/lightbox.min.js"></script>
    <!--===============================================================================================-->
    <script type="text/javascript" src="/vendor/sweetalert/sweetalert.min.js"></script>
    <script type="text/javascript">
        $('.block2-btn-addcart').each(function(){
            var nameProduct = $(this).parent().parent().parent().find('.block2-name').html();
            $(this).on('click', function(){
                swal(nameProduct, "is added to cart !", "success");
            });
        });

        $('.block2-btn-addwishlist').each(function(){
            var nameProduct = $(this).parent().parent().parent().find('.block2-name').html();
            $(this).on('click', function(){
                swal(nameProduct, "is added to wishlist !", "success");
            });
        });
    </script>

    <!--===============================================================================================-->
    <script src="/js/main.js"></script>
@endsection
