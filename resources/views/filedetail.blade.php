@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
        <h3><b>Upload Summary</b></h3>
      <div class="outer-box">

        @foreach($getData as $key=>$item)


        <div class="card" style="margin-bottom:1%;">
        <div class="card-body">
        <p id="demo"></p>


           <b> File Name:</b><p>{{$item->file_name}}</p>


            <audio id="audio{{$key}}" controls="" style="vertical-align: middle" src="{{ asset('public/images/'.$item->file_name) }}" type="audio/mp3" controlslist="nodownload">
                Your browser does not support the audio element.
            </audio>
            <input type="hidden" id="duration_in_sec{{$key}}" class="durValue"/>
             <b> File duration = <span id="duration{{$key}}" ></span> </b>
              <button style="visibility:hidden;" type="button" onclick="getDuration({{$key}})" class="getdur">Get Duration</button>

            </div>

            </div>


        @endforeach


       <b>Total duration = <span id="total-duration"></span></b> <br>
       <b>Total Cost =  <span id="total-cost"></span> </b><br>
       <b>($1 per minute) </b>


<!-- paypal code -->
<div class="flex-center position-ref full-height">
  <div class="content" >
      <a href="{{ route('payment') }}" class="btn btn-success" style="margin:1%;">Pay & Checkout</a>
      <a href="{{ url('file/fetch')}}" class="btn btn-success" style="margin:1%;">Cancel</a>

  </div>
</div>
<!-- end paypal code -->
        </div>
        </div>
        </div>
        </div>




@endsection

