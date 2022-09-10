@extends('user.layouts.master')
@section('content')
<!-- Slider -->
<section class="section-slide">
    <div class="wrap-slick1">
        @if(session()->has('message'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>{{ session()->get('message') }}</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif
        <div class="slick1">
            <div class="item-slick1" style="background-image: url({{ asset('images/slide-02.jpg') }});">
                <div class="container h-full">
                    <div class="flex-col-l-m h-full p-t-100 p-b-30 respon5">
                        <div class="layer-slick1 animated visible-false" data-appear="rollIn" data-delay="0">
								<span class="ltext-101 cl2 respon2">
									Men New-Season
								</span>
                        </div>

                        <div class="layer-slick1 animated visible-false" data-appear="lightSpeedIn" data-delay="800">
                            <h2 class="ltext-201 cl2 p-t-19 p-b-43 respon1">
                                 TopTex Collection
                            </h2>
                        </div>

                        <div class="layer-slick1 animated visible-false" data-appear="slideInUp" data-delay="1600">
                            <a href="/about" class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04">
                                Shop Now
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="item-slick1" style="background-image: url(images/slide-03.jpg);">
                <div class="container h-full">
                    <div class="flex-col-l-m h-full p-t-100 p-b-30 respon5">
                        <div class="layer-slick1 animated visible-false" data-appear="rotateInDownLeft" data-delay="0">
								<span class="ltext-101 cl2 respon2">
									Men Collection 2022
								</span>
                        </div>

                        <div class="layer-slick1 animated visible-false" data-appear="rotateInUpRight" data-delay="800">
                            <h2 class="ltext-201 cl2 p-t-19 p-b-43 respon1">
                                Gents Suit
                            </h2>
                        </div>

                        <div class="layer-slick1 animated visible-false" data-appear="rotateIn" data-delay="1600">
                            <a href="/about" class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04">
                                Shop Now
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="bg0 p-t-23 p-b-140">
    <div class="container">
        <section class="bg0 p-t-62 p-b-60">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-lg-3 p-b-10">
                        <div class="side-menu">
                            <div class="p-t-10">
                                <h4 class="mtext-112 cl2 p-b-33">
                                    All Collection
                                </h4>

                                <ul>
                                    <li class="bor18">
                                        <a href="{{ route('home') }}" class="dis-block mtext-112 cl2 cl6 hov-cl1 trans-04 p-tb-8 p-lr-4">
                                          All Product
                                        </a>
                                    </li>
                                    @foreach($catogeries as $catogery)
                                    <li class="bor18">
                                        <a href="{{ route('home',$catogery->id) }}" class="dis-block stext-115 cl6 hov-cl1 trans-04 p-tb-8 p-lr-4">
                                            {{ ucwords($catogery->name)  }}
                                        </a>
                                    </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8 col-lg-9 p-b-10">
                        <div class="p-r-45 p-r-0-lg">
                            <!-- item blog -->
                                <a href="blog-detail.html" class="hov-img0 how-pos5-parent">
                                    <img src="images/blog-04.jpg" alt="IMG-BLOG">
                                </a>
                        </div>
                    </div>

                    </div>


                </div>

        </section>



        <div class=" mb-4 p-b-10">
            <h3 class="  text-center ltext-103 cl5">
              Latest Products
            </h3>
        </div>
        <div class="row isotope-grid">
            @foreach($Products as $product)
            <div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item women">
                <!-- Block2 -->
                <div class="block2">
                    <div class="block2-pic hov-img0">
                        <img src="{{ getImage($product->image) }}"  style=" height: 350px" alt="IMG-PRODUCT"  />
                        <a href="{{route('detail.edit',$product->id)}}" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04">
                            View Product
                        </a>
                    </div>

                    <div class="block2-txt flex-w flex-t p-t-14">
                        <div class="block2-txt-child1 flex-col-l ">
                            <a href="/detail" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
                               <h5>{{ $product->name }}</h5>
                            </a>

                            <span class="stext-105 cl3">
									{{ 'PKR: '.$product->price }}
								</span>
                        </div>

{{--                        <div class="block2-txt-child2 flex-r p-t-3">--}}
{{--                            <a href="#" class="btn-addwish-b2 dis-block pos-relative js-addwish-b2">--}}
{{--                                <img class="icon-heart1 dis-block trans-04" src="{{ asset('images/icons/icon-heart-01.png') }}" alt="ICON">--}}
{{--                                <img class="icon-heart2 dis-block trans-04 ab-t-l" src="{{ asset('images/icons/icon-heart-02.png') }}" alt="ICON">--}}
{{--                            </a>--}}
{{--                        </div>--}}
                    </div>
                </div>
            </div>
            @endforeach
        </div>

    </div>
</section>

<!-- Back to top -->
<div class="btn-back-to-top" id="myBtn">
		<span class="symbol-btn-back-to-top">
			<i class="zmdi zmdi-chevron-up"></i>
		</span>
</div>


@endsection
