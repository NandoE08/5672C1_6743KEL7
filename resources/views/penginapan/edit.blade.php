@extends('dashboard')
@section('section')
<div class="col-sm-12">
    <div class="panel-heading">
        <h3>Data Penginapan</h3>
    </div>
    <div class="panel-body">
        <ul class="nav nav-tabs">
            <li class=""><a href="{{ url('admin/penginapan') }}">Data</a>
            </li>
            <li class=""><a href="{{ url('admin/penginapan/tambah') }}">Tambah</a>
            </li>
            <li class="active"><a href="{{ url('admin/penginapan/edit') }}">Edit</a>
            </li>
        </ul>

        <div class="tab-content">

            <div class="tab-pane fade active in">
                <div class="col-sm-12">
                <div class="clearfix"><h2></h2></div>
                    <div class="col-sm-6">
                    {{ csrf_field() }}
                        {!! Form::model($penginapan,['url'=>'admin/penginapan/edit/'.$penginapan->id,'class'=>'form-horizontal','enctype'=>'multipart/form-data']) !!}
                        <div class="form-group">
                            <label>Tipe Penginapan :</label>
                            {!! Form::select('jenis_penginapan_id',$jenis_penginapan->lists('nama','id'),null,['class'=>'form-control','id'=>'jenis_peninapan_id','placeholder'=>"Tipe Penginapan"]) !!}
                        </div>
                        <div class="form-group">
                            <label>Nama :</label>
                            {!! Form::text('nama_penginapan',null,['class'=>'form-control','id'=>'nama','placeholder'=>"Nama"]) !!}
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
                            <label>Tarif :</label>
                            {!! Form::text('tarif',null,['class'=>'form-control','id'=>'tarif','placeholder'=>"Tarif"]) !!}
                        </div>
                        <div class="form-group">
                            <label>File :</label>
                            {!! Form::file('file',null,['class'=>'form-control','id'=>'file','placeholder'=>"File"]) !!}
                        </div>
                        <div class="col-sm-12">
                            <button class="btn btn-info"><i class="fa fa-save"></i>Update</button>
                            <button type="reset" class="btn btn-info"><i class="fa fa-undo"></i>Reset</button>
                        </div>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop