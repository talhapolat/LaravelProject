@extends('layouts.master')
@section('title', 'Kategori')
@section('content')
    <!-- Title Page -->
    <section class="bg-title-page p-t-50 p-b-40 flex-col-c-m" style="background-image: url(/images/heading-pages-02.jpg);">
        <h2 class="l-text2 t-center">
            Collection
        </h2>
        <p class="m-text13 t-center">
            New Arrivals 2020
        </p>
    </section>

    <!-- Content page -->
    <section class="bgwhite p-t-55 p-b-65">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-md-4 col-lg-3 p-b-50">
                    <div class="leftbar p-r-20 p-r-0-sm">
                        <!--  -->
                        <h4 class="m-text14 p-b-7">
                            Categories
                        </h4>

                        <ul class="p-b-54">


                            @foreach($categoryList as $maincategory)
                                @if($maincategory->maincategory == null)
                                    <li class="p-t-4">
                                        <a class="" data-toggle="collapse" href="#collapse{{$maincategory->id}}" role="button" aria-expanded="false" aria-controls="collapseExample">
                                            {{$maincategory->title}}
                                        </a>
                                    </li>

                                    <div class="collapse" id="collapse{{$maincategory->id}}">
                                        <div class="" style="">
                                            <li class="p-t-4">
                                                <a href="/category/{{$maincategory->slug}}" class="s-text13 active1 ml-3">
                                                    All
                                                </a>
                                            </li>
                                            @foreach($categoryList as $category)
                                                @if($category->maincategory == $maincategory->id)
                                                    <li class="p-t-4">
                                                        <a href="/category/{{$category->slug}}" class="s-text13 active1 ml-3">
                                                            {{$category->title}}
                                                        </a>
                                                    </li>
                                                @endif
                                            @endforeach
                                        </div>
                                    </div>
                                @endif


                            @endforeach


                        </ul>

                        <!--  -->
                        <h4 class="m-text14 p-b-32">
                            Filters
                        </h4>

                        <div class="filter-price p-t-22 p-b-50 bo3">
                            <div class="m-text15 p-b-17">
                                Price
                            </div>

                            <div class="wra-filter-bar">
                                <div id="filter-bar"></div>
                            </div>

                            <div class="flex-sb-m flex-w p-t-16">
                                <div class="w-size11">
                                    <!-- Button -->
                                    <button class="flex-c-m size4 bg7 bo-rad-15 hov1 s-text14 trans-0-4">
                                        Filter
                                    </button>
                                </div>

                                <div class="s-text3 p-t-10 p-b-10">
                                    Range: $<span id="value-lower">610</span> - $<span id="value-upper">980</span>
                                </div>
                            </div>
                        </div>

                        <div class="filter-color p-t-22 p-b-50 bo3">
                            <div class="m-text15 p-b-12">
                                Color
                            </div>

                            <ul class="flex-w">
                                <li class="m-r-10">
                                    <input class="checkbox-color-filter" id="color-filter1" type="checkbox" name="color-filter1">
                                    <label class="color-filter color-filter1" for="color-filter1"></label>
                                </li>

                                <li class="m-r-10">
                                    <input class="checkbox-color-filter" id="color-filter2" type="checkbox" name="color-filter2">
                                    <label class="color-filter color-filter2" for="color-filter2"></label>
                                </li>

                                <li class="m-r-10">
                                    <input class="checkbox-color-filter" id="color-filter3" type="checkbox" name="color-filter3">
                                    <label class="color-filter color-filter3" for="color-filter3"></label>
                                </li>

                                <li class="m-r-10">
                                    <input class="checkbox-color-filter" id="color-filter4" type="checkbox" name="color-filter4">
                                    <label class="color-filter color-filter4" for="color-filter4"></label>
                                </li>

                                <li class="m-r-10">
                                    <input class="checkbox-color-filter" id="color-filter5" type="checkbox" name="color-filter5">
                                    <label class="color-filter color-filter5" for="color-filter5"></label>
                                </li>

                                <li class="m-r-10">
                                    <input class="checkbox-color-filter" id="color-filter6" type="checkbox" name="color-filter6">
                                    <label class="color-filter color-filter6" for="color-filter6"></label>
                                </li>

                                <li class="m-r-10">
                                    <input class="checkbox-color-filter" id="color-filter7" type="checkbox" name="color-filter7">
                                    <label class="color-filter color-filter7" for="color-filter7"></label>
                                </li>
                            </ul>
                        </div>

                        <div class="search-product pos-relative bo4 of-hidden">
                            <input class="s-text7 size6 p-l-23 p-r-50" type="text" name="search-product" placeholder="Search Products...">

                            <button class="flex-c-m size5 ab-r-m color2 color0-hov trans-0-4">
                                <i class="fs-12 fa fa-search" aria-hidden="true"></i>
                            </button>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-8 col-lg-9 p-b-50">
                    <!--  -->
                    <div class="flex-sb-m flex-w p-b-35">
                        <div class="flex-w">
                            <div class="rs2-select2 bo4 of-hidden w-size12 m-t-5 m-b-5 m-r-10">

                                <select class="selection-2" name="sorting" onchange="document.location.href=this.value">
                                    <option value="?order=default">Varsayılan Sıralama</option>
                                    <option value="?order=populer">Popülerlik</option>
                                    <option value="?order=cheap">Fiyat: ucuzdan pahalıya</option>
                                    <option value="?order=expensive">Fiyat: pahalıdan ucuza</option>
                                </select>
                            </div>
                        </div>

                        <span class="s-text8 p-t-5 p-b-5">
							16 üründen 1–9 gösteriliyor
						</span>
                    </div>


                    <!-- Product -->
                    <div class="row">
                        @foreach($products as $product)
                        <div class="col-sm-12 col-md-6 col-lg-4 p-b-50">
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
										{{$product->price}}
									</span>
                                </div>
                            </div>
                        </div>
                            @endforeach



                    </div>

                    <!-- Pagination -->
                    <div class="pagination flex-m flex-w p-t-26">
                        {{$products->appends(['order' => request('order')])->render()}}
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection

@section('footerjs')
    <div id="dropDownSelect1"></div>
    <div id="dropDownSelect2"></div>
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

        $(".selection-2").select2({
            minimumResultsForSearch: 20,
            dropdownParent: $('#dropDownSelect2')
        });
    </script>
    <!--===============================================================================================-->
    <script type="text/javascript" src="/vendor/daterangepicker/moment.min.js"></script>
    <script type="text/javascript" src="/vendor/daterangepicker/daterangepicker.js"></script>
    <!--===============================================================================================-->
    <script type="text/javascript" src="/vendor/slick/slick.min.js"></script>
    <script type="text/javascript" src="/js/slick-custom.js"></script>
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
    <script type="text/javascript" src="/vendor/noui/nouislider.min.js"></script>
    <script type="text/javascript">
        /*[ No ui ]
        ===========================================================*/
        var filterBar = document.getElementById('filter-bar');

        noUiSlider.create(filterBar, {
            start: [ 50, 200 ],
            connect: true,
            range: {
                'min': 50,
                'max': 200
            }
        });

        var skipValues = [
            document.getElementById('value-lower'),
            document.getElementById('value-upper')
        ];

        filterBar.noUiSlider.on('update', function( values, handle ) {
            skipValues[handle].innerHTML = Math.round(values[handle]) ;
        });
    </script>
    <!--===============================================================================================-->
    <script src="/js/main.js"></script>
@endsection
