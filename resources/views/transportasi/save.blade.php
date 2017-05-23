@extends('dashboard')
@section('section')
<div class="col-sm-12">
    <div class="panel-heading">
        <h3>Data Transportasi</h3>
    </div>
    <div class="panel-body">
        <ul class="nav nav-tabs">
            <li class=""><a href="{{ url('admin/transportasi') }}">Data</a>
            </li>
            <li class="active"><a href="{{ url('admin/transportasi/tambah') }}">Tambah</a>
            </li>
        </ul>

        <div class="tab-content">

            <div class="tab-pane fade active in">
                <div class="col-sm-12">
                <div class="clearfix"><h2></h2></div>
                    <div class="col-sm-6">
                    {{ csrf_field() }}
                        {!! Form::open(['url'=>'admin/transportasi/save','class'=>'form-horizontal','enctype'=>'multipart/form-data']) !!}
                        <div class="form-group">
                            <label>Nama :</label>
                            {!! Form::text('nama',null,['class'=>'form-control','placeholder'=>"Nama"]) !!}
                        </div>
                        <div class="form-group">
                            <label>Tarif :</label>
                            {!! Form::number('tarif',null,['class'=>'form-control','placeholder'=>"Tarif"]) !!}
                        </div>
                        <div class="form-group">
                            <label>File :</label>
                            {!! Form::file('file',null,['class'=>'form-control']) !!}
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