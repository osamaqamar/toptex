@extends('user.layouts.master')
@section('content')
    <section class="bg0 p-t-60 p-b-60">
        <div class="container">
            <div class="flex-w flex-tr">
                <div class="size-210 bor10 p-lr-30 p-t-30 p-b-30 p-lr-10-lg w-full-md">
                    @if(count($errors) > 0 )
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            <ul class="p-0 m-0" style="list-style: none;">
                                @foreach($errors->all() as $error)
                                    <li>{{$error}}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                        @if(session()->has('message'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <strong>{{ session()->get('message') }}</strong>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        @endif
                        <a href="{{ route('home') }}" class="flex-c-m stext-101 cl0 size-121 bg3 bor1 hov-btn3 mt-2 p-lr-15 trans-04 pointer">
                            Back to Home
                        </a>
                    <form action="{{ route('order.store') }}" method="post" enctype="multipart/form-data">
                        @csrf

                        <h4 class="mtext-105 cl2 txt-center text-primary mt-2 p-b-30">
                            Add Shipping Detail
                        </h4>

                        <div class="bor8 m-b-20 how-pos4-parent">
                            <input class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30" type="text" name="name" placeholder="Your Name">
                        </div>
                                                            <input type="hidden" name="product_id" value="{{ $Products->id }}" class="form-control" id="recipient-name">

                        <div class="bor8 m-b-20 how-pos4-parent">
                            <input class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30" type="number" name="mobile" placeholder="Your Mobile Number">
                        </div>

                        <div class="bor8 m-b-20 how-pos4-parent">
                            <input class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30" type="number" name="quantity" placeholder="Quantity">
                        </div>

                        <div class="bor8 m-b-30">
                            <textarea class="stext-111 cl2 plh3 size-80 p-lr-28 p-tb-25" name="address" placeholder="Enter Your Shipping Address"></textarea>
                        </div>

                        <button class="flex-c-m stext-101 cl0 size-121 bg3 bor1 hov-btn3 p-lr-15 trans-04 pointer">
                            Submit
                        </button>

                    </form>
                </div>

            </div>
        </div>
    </section>

@endsection
