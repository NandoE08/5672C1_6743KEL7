@extends('dashboard')
@section('section')
<div class="col-sm-12">
    <div class="panel-heading">
        <h3>Data Pengguna</h3>
    </div>
    <div class="panel-body">
        <ul class="nav nav-tabs">
            <li class=""><a href="{{ url('admin/pengguna') }}">Data</a>
            </li>
            <li class=""><a href="{{ url('admin/pengguna/tambah') }}">Tambah</a>
            </li>
            <li class="active"><a href="{{ url('admin/pengguna/edit') }}">Edit</a>
            </li>
        </ul>

        <div class="tab-content">

            <div class="tab-pane fade active in">
                <div class="col-sm-12">
                <div class="clearfix"><h2></h2></div>
                    <div class="col-sm-6">
                    {{ csrf_field() }}
                        {!! Form::model($pengguna,['url'=>'admin/pengguna/edit/'.$pengguna->id,'class'=>'form-horizontal']) !!}
                    <div class="form-group">
                        <label>Email :</label>
                            {!! Form::email('email',null,['class'=>'form-control','placeholder'=>"Email"]) !!}
                    </div>
                    <div class="form-group">
                        <label>Password :</label>
                        {!! Form::password('password',['class'=>'form-control','placeholder'=>"Password"]) !!}
                    </div>
                    <div class="form-group">
                        <label>Level :</label>
                        <label>Level :</label>
                            <select class="form-control" id="level" name="level">
                            <option>admin</option>
                            <option>member</option>
                            </select>
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