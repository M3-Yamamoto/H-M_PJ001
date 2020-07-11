@extends('admin/app')
@section('head')
<!-- DataTables -->
<link rel="stylesheet" href="{{asset('admin/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
<link rel="stylesheet" href="{{asset('admin/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
@endsection

@section('left-side')
<b class="m-0 mr-1 text-dark">Catagory</b>
<a href="{{route('catagory.create')}}" class="btn-sm btn-primary">Create New &nbsp;<i class="fas fa-plus-square"></i> </a>
@endsection

@section('right-side')
<li class="breadcrumb-item"><a href="#">Dashboard</a></li>
<li class="breadcrumb-item active">Catagory</li>
@endsection

@section('main-content')
<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Id</th>
                                    <th>Title</th>
                                    <th>Slug</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($catagories as $catagory)
                                <tr>
                                    <td>{{$loop->index+1}}</td>
                                    <td>{{$catagory->id}}</td>
                                    <td>{{$catagory->title}}</td>
                                    <td>{{$catagory->slug}}</td>
                                    <td><a href="{{ route('catagory.edit',$catagory->id) }}"><i class="fas fa-edit">&nbsp;</i>Edit</a></td>
                                    <form id="delete-form-{{$catagory->id}}" method="post" action="{{route('catagory.destroy',$catagory->id)}}" style="display: none">
                                        {{ csrf_field() }}
                                        {{ method_field('DELETE') }}
                                    </form>
                                    <td>
                                        <a href="" onclick="
                                        if(confirm('Are you sure, You Want to delete this?')){
                                            event.preventDefault();
                                            $('#delete-form-{{ $catagory->id }}').submit();    
                                        }else{
                                            event.preventDefault();
                                        } 
                                        "><i class="fas fa-trash-alt">&nbsp;</i>Delete</a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                            <tfoot></tfoot>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>
<!-- /.content -->
@endsection
@section('script')
<!-- DataTables -->
<script src="{{asset('admin/plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('admin/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{asset('admin/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{asset('admin/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
<script>
    $(function() {
        $("#example1").DataTable({
            "responsive": true,
            "autoWidth": false,
        });
        $('#example2').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": false,
            "ordering": true,
            "info": true,
            "autoWidth": false,
            "responsive": true,
        });
    });
</script>
@endsection