@extends('dashboard')
@section('section')
<div class="col-sm-12">
    <div class="panel-heading">
        <h3>Data Wisata</h3>
    </div>
    <div class="panel-body">
        <ul class="nav nav-tabs">
            <li class="active"><a href="{{ url('admin/wisata') }}">Data</a>
            </li>
            <li class=""><a href="{{ url('admin/wisata/tambah') }}">Tambah</a>
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
                                <th>Nama</th>
                                <th>Alamat</th>
                                <th>Fasilitas</th>
                                <th>Tarif</th>
                                <th>Penginapan</th>
                                <th>Transportasi</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($allwisata as $wisata)
                            <tr>
                                <td><img src="{{ asset('image/wisata/'.$wisata->file) }}" height="50" width="50"></td>
                                <td>{{$wisata->nama or 'Nama kosong'}}</td>
                                <td>{{$wisata->alamat or 'alamat kosong'}}</td>
                                <td>{{$wisata->fasilitas or 'fasilitas kosong'}}</td>
                                <td>{{$wisata->tarif or 'Tarif kosong'}}</td>
                                <td>{{$wisata->penginapan->nama_penginapan or 'Penginapan kosong'}}</td>
                                <td>{{$wisata->transportasi->nama or 'file kosong'}}</td>
                                <td>
                                    <div class="btn-group" role="group">
                                        <a href="{{url('admin/wisata/edit/'.$wisata->id)}}" class="btn btn-warning btn-xs" data-toggle="tooltip" data-placement="top" title="Ubah"><i class="fa fa-pencil"></i></a>
                                        <a href="{{url('admin/wisata/lihat/'.$wisata->id)}}" class="btn btn-info btn-xs" data-toggle="tooltip" data-placement="top" title="Lihat"><i class="fa fa-eye"></i></a>
                                        <a href="{{url('admin/wisata/hapus/'.$wisata->id)}}" class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="top" title="Hapus"><i class="fa fa-remove"></i></a>
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