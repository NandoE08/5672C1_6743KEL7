@extends('dashboard')
@section('section')
<div class="col-sm-12">
    <div class="panel-heading">
        <h3>Kritik & Saran</h3>
    </div>
    <div class="panel-body">
        <ul class="nav nav-tabs">
            <li class="active"><a href="#data" data-toggle="tab">Saran Masukan</a>
            </li>
        </ul>

        <div class="tab-content">
        
            <div class="tab-pane fade active in" id="data">
                <div class="col-sm-12">
                    <h4></h4>
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>Pengguna</th>
                                <th>Saran</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($data as $saran)
                            <tr>
                                <td>{{$saran->member->nama or 'member kosong'}}</td>
                                <td>{{$saran->nama or 'member kosong'}}</td>
                                <td>{{$saran->saran or 'saran kosong'}}</td>
                                <td>
                                    <div class="btn-group" role="group">
                                        <a href="{{url('admin/saran/hapus/'.$saran->id)}}" class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="top" title="Hapus"><i class="fa fa-remove"></i></a>
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
</div>
@stop