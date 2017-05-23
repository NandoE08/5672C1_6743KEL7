@extends('master')
@section('section')
<div class="container">

	<h1 class="title"><br></h1>


	<!-- form -->
	<div class="contact">

		<div class="row">

			<div class="col-sm-12">
				<!-- <div class="map"> -->
				<!-- 	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d9933.460884430251!2d-0.13301252240929382!3d51.50651527467666!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47d8a00baf21de75%3A0x52963a5addd52a99!2sLondon%2C+UK!5e0!3m2!1sen!2snp!4v1414314152341" width="100%" height="300" frameborder="0"></iframe>	-->

			</div>
		</div>
	</div> 

	<div class="col-sm-6 col-sm-offset-3">
		<div class="spacer">   		
			{!! Form::open(['url'=>'pesan/add','class'=>'form-horizontal']) !!}
				<div class="embed-responsive-item">
                    <img src="{{ asset('image/wisata/'.$wisata->file) }}" class="img-responsive" >
                </div>
			<h4>Write Orders</h4>
				<div class="form-group">
					{!! Form::hidden('wisata_id',$wisata->id) !!}
				</div>
				<div class="form-group">
					{!! Form::text('nama',null,['class'=>'form-control','id'=>'nama','placeholder'=>'Nama Pemesan']) !!}
				</div>
				<div class="form-group">
					{!! Form::text('no_tlp',null,['class'=>'form-control','id'=>'no_tlp','placeholder'=>'Number Telp']) !!}
				</div>
				<div class="form-group">
					{!! Form::text('rekening',null,['class'=>'form-control','id'=>'rekekning','placeholder'=>'Credit Card']) !!}
				</div>
				<button class="btn btn-default">Send</button>
			</form>
			{!! Form::close() !!}
		</div>
	</div>
</div>
@stop