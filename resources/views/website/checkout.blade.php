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
                    <span class="badge badge-secondary badge-pill">{{ Cart::count() }}</span>
                </h4>
                <ul class="list-group mb-3">
                    {{-- {{dd($items)}} --}}
                    @foreach ($items as $key => $item)
                    <li class="list-group-item d-flex justify-content-between lh-condensed">
                        <div>
                            <h6 class="my-0">{{$item->name}}</h6>
                            <small class="text-muted"></small>
                        </div>
                        <span class="text-muted">৳{{ $item->price }}</span>
                        {{-- <button type="button" class="close checkout-close" aria-label="Close"
                            onclick="$(this).closest('li').remove();"><span aria-hidden="true">&times;</span></button> --}}
                        <a href="{{ route('cart.item.remove', $item->rowId) }}" class="close" aria-label="Close"><span
                                aria-hidden="true">&times;</span></a>
                    </li>
                    @endforeach
                </ul>
                <li class="list-group-item d-flex justify-content-between">
                    <span>Total</span>
                    <strong>৳{{ Cart::total() }}</strong>
                </li>
                <hr class="mb-4">
                <div class="row">
                    <div class="col-md-6">
                        <a href="{{ url('/') }}" class="btn btn-info btn-md btn-block">Check more profile</a>
                    </div>
                    <div class="col-md-6">
                        <button class="btn btn-primary btn-md btn-block" id="bKash_button">Checkout</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')
<script id="myScript" src="https://scripts.sandbox.bka.sh/versions/1.2.0-beta/checkout/bKash-checkout-sandbox.js">
</script>

<script type="text/javascript">
    var accessToken = '';
            $(document).ready(function() {
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });

                $.ajax({
                    url: "{{ route('bkash.token') }}",
                    type: 'POST',
                    contentType: 'application/json',
                    success: function(data) {
                        console.log('got data from token  ..');
                        console.log(JSON.stringify(data));
    
                        accessToken = JSON.stringify(data);
                    },
                    error: function() {
                        console.log('error');
    
                    }
                });
    
                var paymentConfig = {
                    createCheckoutURL: "{{ route('bkash.payment.create') }}",
                    executeCheckoutURL: "{{ route('bkash.payment.execute') }}",
                };
    
    
                var paymentRequest;
                paymentRequest = {
                    amount: '{{ Cart::total() }}',
                    intent: 'sale',
                    items: {!! Cart::content()->toJson() !!},
                    uId: {{ auth()->user()->id ?? 1 }}
                };
                console.log(JSON.stringify(paymentRequest), 'Checkout Request');
    
                bKash.init({
                    paymentMode: 'checkout',
                    paymentRequest: paymentRequest,
                    createRequest: function(request) {
                        console.log('=> createRequest (request) :: ');
                        console.log(request);
    
                        $.ajax({
                            url: paymentConfig.createCheckoutURL,
                            type: 'GET',
                            data: paymentRequest,
                            contentType: 'application/json',
                            success: function(data) {
                                console.log('got data from create  ..');
                                console.log('data ::=>');
                                console.log(JSON.stringify(data), "Response");
    
                                var obj = JSON.parse(data);
    
                                if (data && obj.paymentID != null) {
                                    paymentID = obj.paymentID;
                                    invoice = obj.merchantInvoiceNumber;
                                    bKash.create().onSuccess(obj);
                                } else {
                                    console.log('error');
                                    bKash.create().onError();
                                }
                            },
                            error: function() {
                                console.log('error');
                                bKash.create().onError();
                            }
                        });
                    },
    
                    executeRequestOnAuthorization: function() {
                        console.log('=> executeRequestOnAuthorization');
                        $.ajax({
                            url: paymentConfig.executeCheckoutURL + "?paymentID=" + paymentID,
                            type: 'POST',
                            data: invoice,
                            contentType: 'application/json',
                            success: function(data) {
                                console.log('got data from execute  ..');
                                console.log('data ::=>');
                                console.log(JSON.stringify(data));
    
                                data = JSON.parse(data);
                                if (data && data.paymentID != null) {
                                    alert('[SUCCESS] data : ' + JSON.stringify(data));
                                    window.location.href = "success.html";
                                } else {
                                    bKash.execute().onError();
                                }
                            },
                            error: function() {
                                bKash.execute().onError();
                            }
                        });
                    }
                });
    
                console.log("Right after init ");
    
    
            });
    
            function callReconfigure(val) {
                bKash.reconfigure(val);
            }
    
            function clickPayButton() {
                $("#bKash_button").trigger('click');
            }
</script>
@endsection