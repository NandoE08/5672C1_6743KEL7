@extends('dashboard')
@section('section')
<div class="col-sm-12">
    <div class="panel-heading">
        <h3>Data Admins</h3>
    </div>
    <div class="panel-body">
        <ul class="nav nav-tabs">
            <li class=""><a href="{{ url('admin/admins') }}">Data</a>
            </li>
            <li class="active"><a href="{{ url('admin/admins/tambah') }}">Tambah</a>
            </li>
        </ul>

        <div class="tab-content">

            <div class="tab-pane fade active in">
                <div class="col-sm-12">
                <div class="clearfix"><h2></h2></div>
                    <div class="col-sm-6">
                    {{ csrf_field() }}
                        {!! Form::open(['url'=>'admin/admins/save','class'=>'form-horizontal']) !!}
                        <div class="form-group">
                            <label>Nama :</label>
                            {!! Form::text('nama',null,['class'=>'form-control','id'=>'nama','placeholder'=>"Nama"]) !!}
                        </div>
                        <div class="form-group">
                            <label>Alamat :</label>
                            {!! Form::text('alamat',null,['class'=>'form-control','id'=>'alamat','placeholder'=>"Alamat"]) !!}
                        </div>
                        <div class="form-group">
                            <label>Pekerjaan :</label>
                            {!! Form::text('pekerjaan',null,['class'=>'form-control','id'=>'pekerjaan','placeholder'=>"Pekerjaan"]) !!}
                        </div>
                        <div class="form-group">
                            <label>Email :</label>
                            {!! Form::email('email',null,['class'=>'form-control','id'=>'email','placeholder'=>"Email"]) !!}
                        </div>
                        <div class="form-group">
                            <label>Password :</label>
                            {!! Form::password('password',['class'=>'form-control','id'=>'password','placeholder'=>"Password"]) !!}
                        </div>
                        <div class="form-group">
                            <label>Level :</label>
                            {!! Form::text('level',null,['class'=>'form-control','placeholder'=>"admin", 'disabled']) !!}
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