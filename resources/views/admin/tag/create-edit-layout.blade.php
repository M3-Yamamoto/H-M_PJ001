@extends('admin/app')

@section('head')
@endsection

@section('left-side')
<b class="m-0 mr-1 text-dark">Tags</b>
<a href="{{route('tag.create')}}" class="btn-sm btn-primary">Create New &nbsp;<i class="fas fa-plus-square"></i> </a>
@endsection

@section('right-side')
<li class="breadcrumb-item"><a href="#">Dashboard</a></li>
<li class="breadcrumb-item active">Tags</li>
@endsection

@section('main-content')

<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <form action="@yield('action')" method="post">
            @csrf
            @yield('method')
            <!-- SELECT2 EXAMPLE -->
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">New Tag Form</h3>

                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
                        <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <div class="row justify-content-md-center">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Title</label>
                                <input type="text" value="@yield('title')" name='title' class="form-control" placeholder="Enter ...">
                            </div>
                            <!-- /.form-group -->
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                    @yield('back-button')
                </div>
                <!-- /.card-footer -->
        </form>
    </div>
    </div><!-- /.container-fluid -->
</section>
<!-- /.content -->
@endsection

@section('script')
@endsection