@extends('dashboard')
@section('section')
<div class="col-sm-12">
    <div class="panel-heading">
        <h3>Data transportasi</h3>
    </div>
    <div class="panel-body">
        <ul class="nav nav-tabs">
            <li class=""><a href="{{ url('admin/transportasi') }}">Data</a>
            </li>
            <li class=""><a href="{{ url('admin/transportasi/tambah') }}">Tambah</a>
            </li>
            <li class="active"><a href="{{ url('admin/transportasi/edit') }}">Edit</a>
            </li>
        </ul>

        <div class="tab-content">

            <div class="tab-pane fade active in">
                <div class="col-sm-12">
                <div class="clearfix"><h2></h2></div>
                    <div class="col-sm-6">
                    {{ csrf_field() }}
                        {!! Form::model($transportasi,['url'=>'admin/transportasi/edit/'.$transportasi->id,'class'=>'form-horizontal','enctype'=>'multipart/form-data']) !!}
                    <div class="form-group">
                        <label>Nama :</label>
                        {!! Form::text('nama',null,['class'=>'form-control','placeholder'=>"Nama"]) !!}
                    </div>
                    <div class="form-group">
                        <label>Tarif :</label>
                        {!! Form::number('tarif',null,['class'=>'form-control','placeholder'=>"Tarif"]) !!}
                    </div>
                    <div class="form-group">
                        <label>File : {!! Form::file('file',null,['class'=>'form-control']) !!}</label>
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