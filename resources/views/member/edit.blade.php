@extends('dashboard')
@section('section')
<div class="col-sm-12">
    <div class="panel-heading">
        <h3>Data Member</h3>
    </div>
    <div class="panel-body">
        <ul class="nav nav-tabs">
            <li class=""><a href="{{ url('admin/member') }}">Data</a>
            </li>
            <li class=""><a href="{{ url('admin/member/tambah') }}">Tambah</a>
            </li>
            <li class="active"><a href="{{ url('admin/member/edit') }}">Edit</a>
            </li>
        </ul>

        <div class="tab-content">

            <div class="tab-pane fade active in">
                <div class="col-sm-12">
                <div class="clearfix"><h2></h2></div>
                    <div class="col-sm-6">
                    {{ csrf_field() }}
                        {!! Form::model($member,['url'=>'admin/member/edit/'.$member->id,'class'=>'form-horizontal']) !!}
                        <div class="form-group">
                            <label>Email :</label>
                            {!! Form::text('email',null,['class'=>'form-control','placeholder'=>"Email"]) !!}
                        </div>
                        <div class="form-group">
                            <label>Password :</label>
                            {!! Form::password('password',['class'=>'form-control','placeholder'=>"Password"]) !!}
                        </div>
                        <div class="form-group" disabled>
                            <label>Level :</label>
                            {!! Form::text('level',null,['class'=>'form-control','disabled']) !!}
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