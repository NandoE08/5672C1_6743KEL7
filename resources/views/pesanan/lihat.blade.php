@extends('dashboard')
@section('section')
<div class="col-sm-12">
    <div class="panel-heading">
        <h3>Data Pesanan</h3>
    </div>
    <div class="panel-body">
        <ul class="nav nav-tabs">
            <li class=""><a href="{{ url('admin/pesanan') }}">Data</a>
            </li>
            <li class="active"><a href="{{ url('admin/pesanan/lihat/') }}">Lihat</a>
            </li>
        </ul>
        <div class="tab-content">

            <div class="tab-pane fade active in">
                <div class="col-sm-12">
                <div class="devider"></div>
                <div class="clearfix"><h2></h2></div>
                    <table class="table table-hover">
                <tr>
                    <td>Paket Wisata</td>
                    <td>:</td>
                    <td>{{$pesanan->wisata->nama}}</td>
                </tr>
                <tr>
                    <td>Pengguna</td>
                    <td>:</td>
                    <td>{{$pesanan->member->pengguna->email}}</td>
                </tr>
                <tr>
                    <td>Nama Pemesan</td>
                    <td>:</td>
                    <td>{{$pesanan->nama}}</td>
                </tr>
                <tr>
                    <td>Number Telp</td>
                    <td>:</td>
                    <td>{{$pesanan->no_tlp}}</td>
                </tr>
                <tr>
                    <td>Credit Card</td>
                    <td>:</td>
                    <td>{{$pesanan->rekening}}</td>
                </tr>
                <tr>
                    <td class="col-xs-4">Dibuat Tanggal</td>
                    <td class="col-xs-1">:</td>
                    <td>{{$pesanan->created_at}}</td>
                </tr>
                <tr>
                    <td class="col-xs-4">Diperbarui Tanggal</td>
                    <td class="col-xs-1">:</td>
                    <td>{{$pesanan->updated_at}}</td>
                </tr>
            </table>
        </div>
    </div>
</div>
@stop