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
            <li class="active"><a href="{{ url('admin/penginapan/lihat/') }}">Lihat</a>
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
                    <td>{{$penginapan->nama_penginapan}}</td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td>:</td>
                    <td>{{$penginapan->alamat}}</td>
                </tr>
                <tr>
                    <td>Fasilitas</td>
                    <td>:</td>
                    <td>{{$penginapan->fasilitas}}</td>
                </tr>
                <tr>
                    <td>File</td>
                    <td>:</td>
                    <td>{{$penginapan->file}}</td>
                </tr>
                <tr>
                    <td>Tipe Penginapan</td>
                    <td>:</td>
                    <td>{{$penginapan->jenis_penginapan->nama}}</td>
                </tr>
                <tr>
                    <td class="col-xs-4">Dibuat Tanggal</td>
                    <td class="col-xs-1">:</td>
                    <td>{{$penginapan->created_at}}</td>
                </tr>
                <tr>
                    <td class="col-xs-4">Diperbarui Tanggal</td>
                    <td class="col-xs-1">:</td>
                    <td>{{$penginapan->updated_at}}</td>
                </tr>
            </table>
        </div>
    </div>
</div>
@stop