@extends('dashboard')
@section('section')
<div class="col-sm-12">
    <div class="panel-heading">
        <h3>Data Penginapan</h3>
    </div>
    <div class="panel-body">
        <ul class="nav nav-tabs">
            <li class="active"><a href="{{ url('admin/penginapan') }}">Data</a>
            </li>
            <li class=""><a href="{{ url('admin/penginapan/tambah') }}">Tambah</a>
            </li>
        </ul>

        <div class="tab-content">

            <div class="tab-pane fade active in">
                <div class="col-sm-12">
                <div class="clearfix"><h2></h2></div>
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>File</th>
                                <th>Jenis Penginapan</th>
                                <th>Nama</th>
                                <th>Alamat</th>
                                <th>Fasilitas</th>
                                <th>Tarif</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($allpenginapan as $penginapan)
                            <tr>
                                <td><img src="{{ asset('image/penginapan/'.$penginapan->file) }}" height="50" width="50"></td>
                                <td>{{$penginapan->jenis_penginapan->nama or 'Jenis Penginapan kosong'}}</td>
                                <td>{{$penginapan->nama_penginapan or 'Nama kosong'}}</td>
                                <td>{{$penginapan->alamat or 'alamat kosong'}}</td>
                                <td>{{$penginapan->fasilitas or 'fasilitas kosong'}}</td>
                                <td>{{$penginapan->tarif or 'Tarif kosong'}}</td>
                                <td>
                                    <div class="btn-group" role="group">
                                        <a href="{{url('admin/penginapan/edit/'.$penginapan->id)}}" class="btn btn-warning btn-xs" data-toggle="tooltip" data-placement="top" title="Ubah"><i class="fa fa-pencil"></i></a>
                                        <a href="{{url('admin/penginapan/lihat/'.$penginapan->id)}}" class="btn btn-info btn-xs" data-toggle="tooltip" data-placement="top" title="Lihat"><i class="fa fa-eye"></i></a>
                                        <a href="{{url('admin/penginapan/hapus/'.$penginapan->id)}}" class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="top" title="Hapus"><i class="fa fa-remove"></i></a>
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