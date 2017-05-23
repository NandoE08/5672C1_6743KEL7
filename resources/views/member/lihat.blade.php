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
            <li class="active"><a href="{{ url('admin/member/lihat/') }}">Lihat</a>
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
                    <td>{{$member->nama}}</td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td>:</td>
                    <td>{{$member->alamat}}</td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td>:</td>
                    <td>{{$member->pengguna->email}}</td>
                </tr>
                <tr>
                    <td>Password</td>
                    <td>:</td>
                    <td>{{$member->pengguna->password}}</td>
                </tr>
                <tr>
                    <td class="col-xs-4">Dibuat Tanggal</td>
                    <td class="col-xs-1">:</td>
                    <td>{{$member->created_at}}</td>
                </tr>
                <tr>
                    <td class="col-xs-4">Diperbarui Tanggal</td>
                    <td class="col-xs-1">:</td>
                    <td>{{$member->updated_at}}</td>
                </tr>
            </table>
        </div>
    </div>
</div>
@stop