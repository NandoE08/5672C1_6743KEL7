@extends('dashboard')
@section('section')
<div class="col-sm-12">
    <div class="panel-heading">
        <h3>Data Transportasi</h3>
    </div>
    <div class="panel-body">
        <ul class="nav nav-tabs">
            <li class="active"><a href="{{ url('admin/transportasi') }}">Data</a>
            </li>
            <li class=""><a href="{{ url('admin/transportasi/tambah') }}">Tambah</a>
            </li>
        </ul>

        <div class="tab-content">

            <div class="tab-pane fade active in">
                <div class="col-sm-12">
                <div class="clearfix"><h2>
                <div class="modal" id="confirm">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title">Delete Confirmation</h4>
            </div>
            <div class="modal-body">
                <p>Are you sure you, want to delete?</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-sm btn-primary" id="delete-btn">Delete</button>
                <button type="button" class="btn btn-sm btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div></h2></div>
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>File</th>
                                <th>Nama</th>
                                <th>Tarif</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        
                            @foreach($data as $transportasi)
                            <tr>
                                <td><img src="{{ asset('image/transportasi/'.$transportasi->file) }}" height="50" width="50"></td>
                                <td>{{$transportasi->nama or 'Nama kosong'}}</td>
                                <td>{{$transportasi->tarif or 'Tarif kosong'}}</td>
                                <td>
                                    <div class="btn-group" role="group">
                                        <a href="{{url('admin/transportasi/edit/'.$transportasi->id)}}" class="btn btn-warning btn-xs" data-toggle="tooltip" data-placement="top" title="Ubah"><i class="fa fa-pencil"></i></a>
                                        <a href="{{url('admin/transportasi/lihat/'.$transportasi->id)}}" class="btn btn-info btn-xs" data-toggle="tooltip" data-placement="top" title="Lihat"><i class="fa fa-eye"></i></a>
                                        <a href="{{url('admin/transportasi/hapus/'.$transportasi->id)}}" class="btn btn-danger btn-xs" data-toggle="modal" data-placement="top" title="hapus" id="hapus" name="hapus"><i class="fa fa-remove"></i></a>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <script>
  @if(Session::has('notification'))
  alert("{{ Session::get('notification.alert-type') }}");
    var type = "{{ Session::get('notification.alert-type', 'info') }}";
    switch(type){
        case 'info':
            toastr.info("{{ Session::get('notification.message') }}");
            break;
        
        case 'warning':
            toastr.warning("{{ Session::get('notification.message') }}");
            break;
        case 'success':
            toastr.success("{{ Session::get('notification.message') }}");
            break;
        case 'error':
            toastr.error("{{ Session::get('notification.message') }}");
            break;
    }
  @endif
</script>
        <script>
    $(document).ready(function(){
    $("#hapus").click(function(){
        $("#modal").modal();
    });
});
</script>
    </div>
</div>
@stop