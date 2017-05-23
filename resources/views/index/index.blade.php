@extends('master')
@section('section')
<!-- banner -->
<div class="banner">    	   
    <img src="images/photos/banner.jpg"  class="img-responsive" alt="slide">
    <div class="welcome-message">
        <div class="wrap-info">
            <div class="information">
                <h1  class="animated fadeInDown">Pesan Paket Wisata Indonesia</h1>
                <p class="animated fadeInUp">Most luxurious tour of indonesia with the royal treatments and excellent customer service.</p>                
            </div>
            <a href="#information" class="arrow-nav scroll wowload fadeInDownBig"><i class="fa fa-angle-down"></i></a>
        </div>
    </div>
</div>
<!-- banner-->

@foreach($datawisata as $wisata)

<!-- services -->
<div id="information" class="spacer services">
    <div class="container">
        <div class="row">
            <div class="col-sm-4">
                <!-- RoomCarousel -->
                <div id="RoomCarousel" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="embed-responsive-item">
                            <img src="{{ asset('image/wisata/'.$wisata->file) }}" class="img-responsive" heght="300" width="100">
                        </div>
                    </div>
                </div>
                <!-- RoomCarousel-->
                <div class="caption">{{$wisata->nama}}<a href="{{ url ('/wisata') }}" class="pull-right"><i class="fa fa-edit"></i></a></div>
            </div>
            @endforeach
        </div>
    </div>
</div>
<!-- services -->
@stop