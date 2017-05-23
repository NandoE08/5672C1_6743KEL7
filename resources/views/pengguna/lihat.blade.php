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
            <li class="active"><a href="{{ url('admin/pengguna/lihat/') }}">Lihat</a>
            </li>
        </ul>
        <div class="tab-content">

            <div class="tab-pane fade active in">
                <div class="col-sm-12">
                <div class="devider"></div>
                <div class="clearfix"><h2></h2></div>
                    <table class="table table-hover">
                <tr>
                    <td>Email</td>
                    <td>:</td>
                    <td>{{$pengguna->email}}</td>
                </tr>
                <tr>
                    <td>Password</td>
                    <td>:</td>
                    <td>{{$pengguna->password}}</td>
                </tr>
                <tr>
                    <td>Level</td>
                    <td>:</td>
                    <td>{{$pengguna->level}}</td>
                </tr>
                <tr>
                    <td class="col-xs-4">Dibuat Tanggal</td>
                    <td class="col-xs-1">:</td>
                    <td>{{$pengguna->created_at}}</td>
                </tr>
                <tr>
                    <td class="col-xs-4">Diperbarui Tanggal</td>
                    <td class="col-xs-1">:</td>
                    <td>{{$pengguna->updated_at}}</td>
                </tr>
            </table>
        </div>
    </div>
</div>
@stop