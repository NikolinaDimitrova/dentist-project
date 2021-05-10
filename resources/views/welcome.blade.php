@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <img src="/banner/dentistry_1.jpg" class="img-fluid" style="border:1px solid #ccc;">
        </div>
        <div class="col-md-6">
            <h2>Make an Appointment for Your Smile! </h2>
            <p> We are proud to have a happy, established patient-base who we always listen to.
             We keep in touch with regular surveys and options to provide feedback so that we can maintain our excellent customer service. 
             We love hearing your opinions and suggestions! 
             Get in touch today to arrange a consultation so that we can discuss treatment options and pricing plans that suit you.
             We guarantee to put a smile on your face!</p>
            <div class="mt-5">
            @unless (Auth::check())
     
 
                <a href="{{url('/register')}}"> <button class="btn btn-success">Register as Patient</button></a>
                <a href="{{url('/login')}}"><button class="btn btn-secondary">Login</button></a>
                @endunless
            </div>
        </div>
    </div>
    <hr>
    
<div>


    <!--date picker component-->
    <find-doctor/>
</div>
   
</div>
@endsection


<style>
    body {
        background-color: #fff;
    }
</style>