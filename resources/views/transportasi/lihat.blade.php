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
            <li class=""><a href="{{ url('admin/transportasi/tambah') }}">Tambah</a>
            </li>
            <li class="active"><a href="{{ url('admin/transportasi/lihat/') }}">Lihat</a>
            </li>
        </ul>
        <div class="tab-content">

            <div class="tab-pane fade active in">
                <div class="col-sm-12">
                <div class="devider"></div>
                <div class="clearfix"><h2></h2></div>
                    <table class="table table-hover">
                <tr>
                    <td>Nama</td>
                    <td>:</td>
                    <td>{{$transportasi->nama}}</td>
                </tr>
                <tr>
                    <td>Tarif</td>
                    <td>:</td>
                    <td>{{$transportasi->tarif}}</td>
                </tr>
                <tr>
                    <td>Fie</td>
                    <td>:</td>
                    <td>{{$transportasi->file}}</td>
                </tr>
                <tr>
                    <td class="col-xs-4">Dibuat Tanggal</td>
                    <td class="col-xs-1">:</td>
                    <td>{{$transportasi->created_at}}</td>
                </tr>
                <tr>
                    <td class="col-xs-4">Diperbarui Tanggal</td>
                    <td class="col-xs-1">:</td>
                    <td>{{$transportasi->updated_at}}</td>
                </tr>
            </table>
        </div>
    </div>
</div>
@stop