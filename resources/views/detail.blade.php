@extends('user.layouts.master')
@section('content')

    <section class="sec-product-detail bg0 p-t-65 p-b-60">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-7 p-b-30">
                    <div class="p-l-25 p-r-30 p-lr-0-lg">
                        <div class="wrap-slick3 flex-sb flex-w">
                            <div class="wrap-slick3-dots"></div>
                            <div class="wrap-slick3-arrows flex-sb-m flex-w"></div>

                            <div class="slick3 gallery-lb">
                                @foreach( $Products->image as $key => $image)

                                <div class="item-slick3" data-thumb="images/product-detail-01.jpg">
                                    <div class="wrap-pic-w pos-relative">
                                        <img src="{{ getMultipleImage($image) }}" alt="IMG-PRODUCT">

                                        <a class="flex-c-m size-108 how-pos1 bor0 fs-16 cl10 bg0 hov-btn3 trans-04" href="{{ getMultipleImage($image) }}">
                                            <i class="fa fa-expand"></i>
                                        </a>
                                    </div>
                                </div>
                                @endforeach

                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-5 p-b-30">
                    <div class="p-r-50 p-t-5 p-lr-0-lg">
                        <label><h5 class="text-primary">Product Name</h5></label>
                        <h4 class="mtext-105 cl2 js-name-detail ">
                           {{ $Products->name }}
                        </h4>
                        <div class="mt-5">
                            <h5 class="text-primary">Product Price:</h5>
                            <span class="mtext-106 cl2">
							{{ 'PKR: '.$Products->price }}
						</span>
                        </div>



                        <div class="mt-5">
                            <h5 class="text-primary">Color</h5>
                            <span class="mtext-106 cl2">
							{{ ' '.$Products->color }}
						</span>
                        </div>

                        <div class="mt-5">
                            <h5 class="text-primary">Description</h5>
                            <span class="mtext-106 cl3 ">
                                {{ ucfirst($Products->description) }}
                            </span>
                        </div>
                        <div class="p-t-33">


                            <div class="flex-w flex-r-m p-b-10">
                                <div class="size-204 flex-w flex-m respon6-next">


                                    <a href="{{ route('order.show',$Products->id) }}"  class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 ">
                                       Buy Now
                                    </a>
                                </div>
                            </div>
                        </div>

                        <!-- Mpdal -->

                    </div>
                </div>
            </div>
        </div>


    </section>

@endsection
