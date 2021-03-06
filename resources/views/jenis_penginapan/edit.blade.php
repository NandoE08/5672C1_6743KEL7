@extends('dashboard')
@section('section')
<div class="col-sm-12">
    <div class="panel-heading">
        <h3>Data Tipe Penginapan</h3>
    </div>
    <div class="panel-body">
        <ul class="nav nav-tabs">
            <li class=""><a href="{{ url('admin/jenis_penginapan') }}">Data</a>
            </li>
            <li class=""><a href="{{ url('admin/jenis_penginapan/tambah') }}">Tambah</a>
            </li>
            <li class="active"><a href="{{ url('admin/jenis_penginapan/edit') }}">Edit</a>
            </li>
        </ul>

        <div class="tab-content">

            <div class="tab-pane fade active in">
                <div class="col-sm-12">
                <div class="clearfix"><h2></h2></div>
                    <div class="col-sm-6">
                        {{ csrf_field() }}
                        {!! Form::model($jenis_penginapan,['url'=>'admin/jenis_penginapan/edit/'.$jenis_penginapan->id,'class'=>'form-horizontal']) !!}
                        <div class="form-group">
                            <label>Nama :</label>
                            {!! Form::text('nama',null,['class'=>'form-control','placeholder'=>"Nama"]) !!}
                        </div>
                        <div class="form-group">
                            <label>Keterangan :</label>
                            {!! Form::textarea('keterangan',null,['class'=>'form-control','placeholder'=>"Keterangan"]) !!}
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