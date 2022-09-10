@extends('user.layouts.master')
@section('content')

    <section class="bg0 p-t-23 p-b-140 mt-5">
        <div class="container">
            <div class="p-b-10">
                <h3 class="text-center ltext-103 cl5">
                   All Product
                </h3>
            </div>


            <div class="row isotope-grid mt-5">
                @foreach($Products as $product)
                    <div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item women">
                        <!-- Block2 -->
                        <div class="block2">
                            <div class="block2-pic hov-img0">
                                <img src="{{ getImage($product->image) }}" style=" height: 350px" alt="IMG-PRODUCT"  />
                                <a href="{{route('detail.edit',$product->id)}}" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04">
                                    View Product
                                </a>
                            </div>

                            <div class="block2-txt flex-w flex-t p-t-14">
                                <div class="block2-txt-child1 flex-col-l ">
                                    <a href="/detail" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
                                        {{ $product->name }}
                                    </a>

                                    <span class="stext-105 cl3">
									{{ $product->price }}
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

@endsection
