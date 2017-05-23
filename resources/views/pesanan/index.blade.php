@extends('dashboard')
@section('section')
<div class="col-sm-12">
    <div class="panel-heading">
        <h3>Data Pesanan</h3>
    </div>
    <div class="panel-body">
        <ul class="nav nav-tabs">
            <li class="active"><a href="{{ url('admin/pesanan') }}">Data</a>
            </li>
        </ul>

        <div class="tab-content">

            <div class="tab-pane fade active in">
                <div class="col-sm-12">
                <div class="clearfix"><h2></h2></div>
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>User</th>
                                <th>Paket Wisata</th>
                                <th>Nama Pemesan</th>
                                <th>No. Tlp</th>
                                <th>Credit Cart</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($allpesanan as $pesanan)
                            <tr>
                                <td>{{$pesanan->member->email or 'Email kosong'}}</td>
                                <td>{{$pesanan->wisata->nama or 'Wisata kosong'}}</td>
                                <td>{{$pesanan->nama or 'Nama kosong'}}</td>
                                <td>{{$pesanan->no_tlp or 'Number kosong'}}</td>
                                <td>{{$pesanan->rekening or 'Credit Card kosong'}}</td>
                                <td>
                                    <div class="btn-group" role="group">
                                        <a href="{{url('admin/pesanan/edit/'.$pesanan->id)}}" class="btn btn-warning btn-xs" data-toggle="tooltip" data-placement="top" title="Ubah"><i class="fa fa-pencil"></i></a>
                                        <a href="{{url('admin/pesanan/lihat/'.$pesanan->id)}}" class="btn btn-info btn-xs" data-toggle="tooltip" data-placement="top" title="Lihat"><i class="fa fa-eye"></i></a>
                                        <a href="{{url('admin/pesanan/hapus/'.$pesanan->id)}}" class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="top" title="Hapus"><i class="fa fa-remove"></i></a>
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