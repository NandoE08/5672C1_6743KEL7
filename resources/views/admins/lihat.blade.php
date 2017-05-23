@extends('dashboard')
@section('section')
<div class="col-sm-12">
    <div class="panel-heading">
        <h3>Data Admin</h3>
    </div>
    <div class="panel-body">
        <ul class="nav nav-tabs">
            <li class=""><a href="{{ url('admin/admins') }}">Data</a>
            </li>
            <li class=""><a href="{{ url('admin/admins/tambah') }}">Tambah</a>
            </li>
            <li class="active"><a href="{{ url('admin/admins/lihat/') }}">Lihat</a>
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
                    <td>{{$admins->nama}}</td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td>:</td>
                    <td>{{$admins->alamat}}</td>
                </tr>
                <tr>
                    <td>Pekerjaan</td>
                    <td>:</td>
                    <td>{{$admins->pekerjaan}}</td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td>:</td>
                    <td>{{$admins->pengguna->email}}</td>
                </tr>
                <tr>
                    <td>Password</td>
                    <td>:</td>
                    <td>{{$admins->pengguna->password}}</td>
                </tr>
                <tr>
                    <td>Level</td>
                    <td>:</td>
                    <td>{{$admins->pengguna->level->tingkat}}</td>
                </tr>
                <tr>
                    <td class="col-xs-4">Dibuat Tanggal</td>
                    <td class="col-xs-1">:</td>
                    <td>{{$admins->created_at}}</td>
                </tr>
                <tr>
                    <td class="col-xs-4">Diperbarui Tanggal</td>
                    <td class="col-xs-1">:</td>
                    <td>{{$admins->updated_at}}</td>
                </tr>
            </table>
        </div>
    </div>
</div>
@stop