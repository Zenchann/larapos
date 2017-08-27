@extends('layouts.backend')
@section('content')
<div class="row">

    <div class="col-lg-3 col-md-6">
        <div class="card-box widget-box-two widget-two-custom">
            <i class="mdi mdi-currency-usd widget-two-icon"></i>
            <div class="wigdet-two-content">
                <p class="m-0 text-uppercase font-bold font-secondary text-overflow" title="Statistics">Total Revenue</p>
                <h2 class="font-600"><span><i class="mdi mdi-arrow-up"></i></span> <span data-plugin="counterup">65841</span></h2>
                <p class="m-0">Jan - Apr 2017</p>
            </div>
        </div>
    </div><!-- end col -->

    <div class="col-lg-3 col-md-6">
        <div class="card-box widget-box-two widget-two-custom">
            <i class="mdi mdi-account-multiple widget-two-icon"></i>
            <div class="wigdet-two-content">
                <p class="m-0 text-uppercase font-bold font-secondary text-overflow" title="Statistics">Total Unique Visitors</p>
                <h2 class="font-600"><span><i class="mdi mdi-arrow-up"></i></span> <span data-plugin="counterup">236521</span></h2>
                <p class="m-0">Jan - Apr 2017</p>
            </div>
        </div>
    </div><!-- end col -->

    <div class="col-lg-3 col-md-6">
        <div class="card-box widget-box-two widget-two-custom">
            <i class="mdi mdi-crown widget-two-icon"></i>
            <div class="wigdet-two-content">
                <p class="m-0 text-uppercase font-bold font-secondary text-overflow" title="Statistics">Number of Transactions</p>
                <h2 class="font-600"><span><i class="mdi mdi-arrow-up"></i></span> <span data-plugin="counterup">563698</span></h2>
                <p class="m-0">Jan - Apr 2017</p>
            </div>
        </div>
    </div><!-- end col -->

    <div class="col-lg-3 col-md-6">
        <div class="card-box widget-box-two widget-two-custom">
            <i class="mdi mdi-auto-fix widget-two-icon"></i>
            <div class="wigdet-two-content">
                <p class="m-0 text-uppercase font-bold font-secondary text-overflow" title="Statistics">Conversation Rate</p>
                <h2 class="font-600"><span><i class="mdi mdi-arrow-up"></i></span> <span data-plugin="counterup">2.07</span>%</h2>
                <p class="m-0">Jan - Apr 2017</p>
            </div>
        </div>
    </div><!-- end col -->

</div>
@endsection