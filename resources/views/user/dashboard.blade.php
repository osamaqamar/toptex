@extends('user.layouts.master')
@section('content')
<div class="col-12 py-4">
    <div class="row">
        <div class="col-md-4">
            <div class="card card-body border-0 shadow mb-4">
                <h2 class="h5 mb-4 font-weight-normal">{{ trans('sentence.Total Property')}}</h2>
                <div class="d-flex align-items-center">
                    <div class="file-field">
                        <div class="d-flex justify-content-xl-center ms-xl-3">
                            <div class="d-flex">
                                <h2>{{!empty($allProperties) ? $allProperties : 0}}</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card card-body border-0 shadow mb-4">
                <h2 class="h5 mb-4 font-weight-normal" >{{ trans('sentence.Available Property')}}</h2>
                <div class="d-flex align-items-center">
                    <div class="file-field">
                        <div class="d-flex justify-content-xl-center ms-xl-3">
                            <div class="d-flex">
                                <h2>{{ !empty($availableProperties) ? $availableProperties : 0 }}</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card card-body border-0 shadow mb-4">
                <h2 class="h5 mb-4 font-weight-normal"> {{ trans('sentence.Sold Property')}}</h2>
                <div class="d-flex align-items-center">
                    <div class="file-field">
                        <div class="d-flex justify-content-xl-center ms-xl-3">
                            <div class="d-flex">
                               <h2>{{ !empty($soldProperties) ? $soldProperties : 0}}</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card card-body border-0 shadow mb-4">
                <h2 class="h5 mb-4 font-weight-normal"> {{ trans('sentence.Off Market Property')}}</h2>
                <div class="d-flex align-items-center">
                    <div class="file-field">
                        <div class="d-flex justify-content-xl-center ms-xl-3">
                            <div class="d-flex">
                                <h2>{{ !empty($offMarketProperties) ? $offMarketProperties : 0}}</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card card-body border-0 shadow mb-4">
                <h2 class="h5 mb-4 font-weight-normal"> {{ trans('sentence.Unpublished Property')}}</h2>
                <div class="d-flex align-items-center">
                    <div class="file-field">
                        <div class="d-flex justify-content-xl-center ms-xl-3">
                            <div class="d-flex">
                                <h2>{{ !empty($unPublishedProperties) ? $unPublishedProperties : 0}}</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card card-body border-0 shadow mb-4">
                <h2 class="h5 mb-4 font-weight-normal"> {{ trans('sentence.Under Offer Property')}}</h2>
                <div class="d-flex align-items-center">
                    <div class="file-field">
                        <div class="d-flex justify-content-xl-center ms-xl-3">
                            <div class="d-flex">
                                <h2>{{ !empty($underOfferProperties) ? $underOfferProperties : 0}}</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div>
        <div class="mb-4">
            <h3 class="m-1 text-center font-weight-normal"> {{ trans('sentence.welcome')}}</h3>
        </div>
    </div>


    <div class="row">
        @foreach( $userProperties as $userProperty )

            <div class="col-md-6">
                <a href="{{ route('property.show',$userProperty->id) }}">
                <div class="card card-body border-0 shadow mb-4">
                    <h2 class="h5 mb-4">{{ $userProperty->post_title }}</h2>
                    <div class="d-xl-flex align-items-center">
                        <div>
                            <!-- Avatar -->
                            <img class="rounded avatar-xl" src="{{ $userProperty->photos[0] }}" alt="change cover photo">
                        </div>
                        <div class="file-field">
                            <div class="d-flex justify-content-xl-center ms-xl-3">
                                <div class="d-flex">
                                    <div class="d-md-block text-left">
                                        <div class="fw-normal text-dark mb-1">{{ trans('sentence.Reference no')}} : <b>{{ $userProperty->reference_no }}</b></div>
                                        <div class="fw-normal text-dark mb-1"> {{ trans('sentence.Agency Ref no')}} : <b>{{ $userProperty->agency_ref_no }}</b></div>
                                        <div class="fw-normal text-dark mb-1">{{ trans('sentence.Status')}}  : <b>{{ ucwords($userProperty->status) }}</b></div>
                                        <div class="fw-normal text-dark mb-1">{{ trans('sentence.Property Status')}} : <b>{{ $userProperty->property_status }}</b></div>
                                        <div class="text-gray small"> 🏠,<b>{{ $userProperty->beds }}</b>  🛁, <b>{{ $userProperty->baths }}</b> Plot Size. <b>{{ $userProperty->plot_size.'m²' }}</b> </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </a>
            </div>

        @endforeach
    </div>
</div>


@endsection
