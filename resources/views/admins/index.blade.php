@extends('dashboard')
@section('section')
<div class="col-sm-12">
    <div class="panel-heading">
        <h3>Data Admins</h3>
    </div>
    <div class="panel-body">
        <ul class="nav nav-tabs">
            <li class="active"><a href="{{ url('admin/admins') }}">Data</a>
            </li>
            <li class=""><a href="{{ url('admin/admins/tambah') }}">Tambah</a>
            </li>
        </ul>

        <div class="tab-content">

            <div class="tab-pane fade active in">
                <div class="col-sm-12">
                <div class="clearfix"><h2></h2></div>
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>Nama</th>
                                <th>Alamat</th>
                                <th>Pekerjaan</th>
                                <th>Email</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($data as $admins)
                            <tr>
                                <td>{{$admins->nama or 'Nama kosong'}}</td>
                                <td>{{$admins->alamat or 'Alamat kosong'}}</td>
                                <td>{{$admins->pekerjaan or 'Pekerjaan kosong'}}</td>
                                <td>{{$admins->pengguna->email or 'Email kosong'}}</td>
                                <td>
                                    <div class="btn-group" role="group">
                                        <a href="{{url('admin/admins/edit/'.$admins->id)}}" class="btn btn-warning btn-xs" data-toggle="tooltip" data-placement="top" title="Ubah"><i class="fa fa-pencil"></i></a>
                                        <a href="{{url('admin/admins/lihat/'.$admins->id)}}" class="btn btn-info btn-xs" data-toggle="tooltip" data-placement="top" title="Lihat"><i class="fa fa-eye"></i></a>
                                        <!-- <a href="{{url('admin/admins/hapus/'.$admins->id)}}" class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="top" title="Hapus"><i class="fa fa-remove"></i></a> -->
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@stop