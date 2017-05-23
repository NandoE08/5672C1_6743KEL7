@extends('dashboard')
@section('section')
<div class="col-sm-12">
    <div class="panel-heading">
        <h3>Data Tipe Penginapan</h3>
    </div>
    <div class="panel-body">
        <ul class="nav nav-tabs">
            <li class="active"><a href="{{ url('admin/jenis_penginapan') }}">Data</a>
            </li>
            <li class=""><a href="{{ url('admin/jenis_penginapan/tambah') }}">Tambah</a>
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
                                <th>Keterangan</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($data as $jenis_penginapan)
                            <tr>
                                <td>{{$jenis_penginapan->nama or 'Nama kosong'}}</td>
                                <td>{{$jenis_penginapan->keterangan or 'Keterangan kosong'}}</td>
                                <td>
                                    <div class="btn-group" role="group">
                                        <a href="{{url('admin/jenis_penginapan/edit/'.$jenis_penginapan->id)}}" class="btn btn-warning btn-xs" data-toggle="tooltip" data-placement="top" title="Ubah"><i class="fa fa-pencil"></i></a>
                                        <a href="{{url('admin/jenis_penginapan/lihat/'.$jenis_penginapan->id)}}" class="btn btn-info btn-xs" data-toggle="tooltip" data-placement="top" title="Lihat"><i class="fa fa-eye"></i></a>
                                        <a href="{{url('admin/jenis_penginapan/hapus/'.$jenis_penginapan->id)}}" class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="top" title="Hapus"><i class="fa fa-remove"></i></a>
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