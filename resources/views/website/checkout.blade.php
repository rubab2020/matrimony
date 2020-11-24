@extends('layouts.web')

@section('content')
<div class="page-content">
    <div class="container">
        <!-- <h3>Search Profiles</h3> -->
        <!-- breadcrumb  -->
        <!-- <nav aria-label="breadcrumb">
			  <ol class="breadcrumb">
			    <li class="breadcrumb-item"><a href="#">Home</a></li>
			    <li class="breadcrumb-item active" aria-current="page">Search Profiles</li>
			  </ol>
			</nav> -->

        <div class="row">
            <div class="col-md-12 mb-12">
                <h4 class="d-flex justify-content-between align-items-center mb-3">
                    <span class="text-muted">Your cart</span>
                    <span class="badge badge-secondary badge-pill">3</span>
                </h4>
                <ul class="list-group mb-3">
                    <li class="list-group-item d-flex justify-content-between lh-condensed">
                        <div>
                            <h6 class="my-0">Product name</h6>
                            <small class="text-muted">Brief description</small>
                        </div>
                        <span class="text-muted">৳12</span>
                        <button type="button" class="close checkout-close" aria-label="Close"><span
                                aria-hidden="true">&times;</span></button>
                    </li>
                    <li class="list-group-item d-flex justify-content-between lh-condensed">
                        <div>
                            <h6 class="my-0">Third item</h6>
                            <small class="text-muted">Brief description</small>
                        </div>
                        <span class="text-muted">৳5</span>
                    </li>
                    {{-- <li class="list-group-item d-flex justify-content-between bg-light">
                        <div class="text-success">
                            <h6 class="my-0">Discount</h6>
                            <small>EXAMPLECODE</small>
                        </div>
                        <span class="text-success">-৳5</span>
                    </li> --}}
                    <li class="list-group-item d-flex justify-content-between">
                        <span>Total</span>
                        <strong>৳20</strong>
                    </li>
                </ul>
                <hr class="mb-4">
                <div class="row">
                    <div class="col-md-6">
                        <a href="{{ url('/') }}" class="btn btn-info btn-md btn-block">Check more profile</a>
                    </div>
                    <div class="col-md-6">
                        <button class="btn btn-primary btn-md btn-block" type="submit">Continue to checkout</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>