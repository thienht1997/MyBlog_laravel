@extends('layouts.master')
@section('title')
    Contact
@endsection
@section('content')


    <!-- ##### Google Map ##### -->
    <div class="map-area">
        <div id="googleMap" class="googleMap"></div>
    </div>

    <!-- ##### Contact Area End ##### -->

    <!-- ##### Instagram Feed Area Start ##### -->
    <div class="instagram-feed-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="insta-title">
                        <h5>Follow us @ Instagram</h5>
                    </div>
                </div>
            </div>
        </div>
        <!-- Instagram Slides -->
        <div class="instagram-slides owl-carousel">
            <h4 class="text-center">{{$post->name}}</h4><br>
            <p class="p-5">{!!nl2br($post->content) !!}</p>
        </div>
    </div>
    <!-- ##### Instagram Feed Area End ##### -->

@endsection
