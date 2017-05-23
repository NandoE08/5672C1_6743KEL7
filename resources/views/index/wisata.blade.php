@extends('master')
@section('section')
<div class="container">

	<h2>Paket Wisata</h2>

	<!-- form -->
@foreach($data as $wisata)
	<div class="row">
		<div class="col-sm-6 wowload fadeInUp">
		
			<div class="rooms">
				<img src="{{ asset('image/wisata/'.$wisata->file) }}" class="img-responsive">
				<div class="info">
					<h3>{{$wisata->nama or 'Nama kosong'}}</h3>
					<p>Lokasi :{{$wisata->alamat or 'Alamat kosong'}}</p>
					<p>Fasilitas :{{$wisata->fasilitas or 'Fasilitas kosong'}}</p>
					<p></p>
						<a href="{{ url('/pesan/'.$wisata->id) }}" class="btn btn-default">Cekout</a>

						<a href="{{ url('/info/'.$wisata->id) }}" class="btn btn-default">Check Details</a>

					</div>
				</div>
			</div>
@endforeach
	<!-- <div class="text-center">
		<ul class="pagination">
			<li class="disabled"><a href="#">«</a></li>
			<li class="active"><a href="#">1 <span class="sr-only">(current)</span></a></li>
			<li><a href="#">2</a></li>
			<li><a href="#">3</a></li>
			<li><a href="#">4</a></li>
			<li><a href="#">5</a></li>
			<li><a href="#">»</a></li>
		</ul>
	</div>	 -->	
</div>
@stop