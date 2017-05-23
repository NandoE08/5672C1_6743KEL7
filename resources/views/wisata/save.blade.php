@extends('dashboard')
@section('section')
<div class="col-sm-12">
    <div class="panel-heading">
        <h3>Data Wisata</h3>
    </div>
    <div class="panel-body">
        <ul class="nav nav-tabs">
            <li class=""><a href="{{ url('admin/wisata') }}">Data</a>
            </li>
            <li class="active"><a href="{{ url('admin/wisata/tambah') }}">Tambah</a>
            </li>
        </ul>

        <div class="tab-content">

            <div class="tab-pane fade active in">
                <div class="col-sm-12">
                <div class="clearfix"><h2></h2></div>
                    <div class="col-sm-6">
                    {{ csrf_field() }}
                        {!! Form::open(['url'=>'admin/wisata/save','class'=>'form-horizontal','enctype'=>'multipart/form-data']) !!}
                        <div class="form-group">
                            <label>Nama :</label>
                            {!! Form::text('nama',null,['class'=>'form-control','id'=>'nama','placeholder'=>"Nama"]) !!}
                        </div>
                        <div class="form-group">
                            <label>Alamat :</label>
                            {!! Form::text('alamat',null,['class'=>'form-control','id'=>'alamat','placeholder'=>"Alamat"]) !!}
                        </div>
                        <div class="form-group">
                            <label>Fasilitas :</label>
                            {!! Form::text('fasilitas',null,['class'=>'form-control','id'=>'fasilitas','placeholder'=>"Fasilitas"]) !!}
                        </div>
                        <div class="form-group">
                            <label>Tarif Tiket:</label>
                            {!! Form::number('tarif',null,['class'=>'form-control','id'=>'tarif','placeholder'=>"Tarif"]) !!}
                        </div>
                        <div class="form-group">
                            <label>File :</label>
                            {!! Form::file('file',null,['class'=>'form-control','id'=>'file','placeholder'=>"File"]) !!}
                        </div>
                        <div class="form-group">
                            <label>Penginapan :</label>
                            {!! Form::select('penginapan_id',$penginapan->lists('nama_penginapan','id'),null,['class'=>'form-control','id'=>'peninapan_id','placeholder'=>"Penginapan"]) !!}
                        </div>
                        <div class="form-group">
                            <label>Transportasi :</label>
                            {!! Form::select('transportasi_id',$transportasi->lists('nama','id'),null,['class'=>'form-control','id'=>'transportasi_id','placeholder'=>"Transportasi"]) !!}
                        </div>
                        <div class="col-sm-12">
                            <button class="btn btn-default"><i class="fa fa-save"></i>Save</button>
                            <button type="reset" class="btn btn-default"><i class="fa fa-undo"></i>Reset</button>
                        </div>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop