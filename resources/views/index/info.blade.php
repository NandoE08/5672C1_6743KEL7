@extends('master')
@section('section')

<div class="container">

	<h1 class="title">{{$wisata->nama or 'Unknown' }}</h1>

	 <!-- RoomDetails -->
           <!--  <div id="RoomDetails" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                <div class="item active"><img src="{{ asset('image/wisata/'.$wisata->file) }}" class="img-responsive" alt="slide"></div>
                <div class="item  height-full"><img src="{{ asset('image/penginapan/'.$wisata->penginapan->file) }}"  class="img-responsive" alt="slide"></div>
                <div class="item  height-full"><img src="images/photos/10.jpg"  class="img-responsive" alt="slide"></div>
                </div> -->
                <!-- Controls -->
                <!-- <a class="left carousel-control" href="#RoomDetails" role="button" data-slide="prev"><i class="fa fa-angle-left"></i></a>
                <a class="right carousel-control" href="#RoomDetails" role="button" data-slide="next"><i class="fa fa-angle-right"></i></a>
            </div>  -->
  <!-- RoomCarousel-->

<!--   <div class="room-features spacer">
    <div class="row">
      	<div class="col-sm-12 col-md-5"> 
       	<p>Space in your house How to sell faster than your neighbors How to make a strategic use. To discourage you by telling. To discourage you by telling. I m going to outline 14 different ways that I ve found you. The real goal of any talk or speech. The real goal of any talk or speech. I m going to outline 14 different ways that I ve found you. The real goal of any talk or speech. I m going to outline 14 different ways that I ve found you. The real goal of any talk or speech. To discourage you by telling. To discourage you by telling. Space in your house How to sell faster than your neighbors How to make a strategic use. The real goal of any talk or speech.</p>
       	<p>By Learning Ways To Become Peaceful. One of the greatest barriers to making the sale is your prospect's natural. Don't stubbornly. Don't stubbornly. Don't stubbornly. -And Gain Power By Learning Ways To Become Peaceful. </p>
    </div> -->

    <div class="col-sm-6 col-md-3 amenitites"> 
        
    </div>

	<div class="room-features spacer"><img src="{{ asset('image/wisata/'.$wisata->file) }}" class="img-responsive">
		<div class="row">
			<div class="col-sm-12 col-md-5"> 
				<br>
				<p>Harga Paket Tour Wisata:</p>
				<p>Tiket Wisata Rp. {{ $wisata->tarif }}</p>
				<p>Penginapan Rp. {{ $wisata->penginapan->tarif }}</p>
				<p>Transportasi Rp. {{ $wisata->transportasi->tarif }}</p>
				<!-- $num = "3.14"; // input from form field
				$int = (int)$num; // integer version of the form input -->
    			
			</div>

			<div class="col-sm-6 col-md-3"> 
				<h3>Fasilitas yang Ada</h3>    
				<ul>
					<li>{{$wisata->fasilitas or 'Unknown'}}</li>
					<li>{{$wisata->penginapan->nama_penginapan or 'Unknown'}}</li>
					<li>{{$wisata->penginapan->fasilitas or 'Unknown'}}</li>
					<li>{{$wisata->transportasi->nama or 'Unknown'}}</li>
				</ul>
			</div> 
			<div class="col-sm-3 col-md-2">
				<br>
				<img src="{{ asset('image/penginapan/'.$wisata->penginapan->file) }}" class="img-responsive"> 
			</div>
			<div class="col-sm-3 col-md-2">
				<br>
				<img src="{{ asset('image/transportasi/'.$wisata->transportasi->file) }}" class="img-responsive">
			</div>
		</div> 
	</div>
</div>
@stop