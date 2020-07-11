@extends('admin/app')
@section('head')
<!-- Select2 -->
<link rel="stylesheet" href="{{asset('admin/plugins/select2/css/select2.min.css')}}">
@endsection

@section('left-side')
<b class="m-0 mr-1 text-dark">Posts</b>
<a href="{{route('post.create')}}" class="btn-sm btn-primary">Create New &nbsp;<i class="fas fa-plus-square"></i> </a>
@endsection

@section('right-side')
<li class="breadcrumb-item"><a href="#">Dashboard</a></li>
<li class="breadcrumb-item active">Post</li>
@endsection

@section('main-content')
<!-- Main content -->
<section class="content">
  <div class="container-fluid">
    @if (count($errors) > 0)
    @foreach ($errors->all() as $error)
    <p class="alert alert-danger">{{ $error }}</p>
    @endforeach
    @endif

    @if (session()->has('message'))
    <p class="alert alert-success">{{ session('message') }}</p>
    @endif
    <!-- SELECT2 EXAMPLE -->
    <form role='form' action="@yield('action')" method="post" enctype="multipart/form-data">
      @csrf
      @yield('method')
      <div class="card card-primary">
        <div class="card-header">
          <h3 class="card-title">@yield('card-title')</h3>
          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
            <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
          </div>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <div class="row">
            <div class="col-md-5">
              <div class="form-group">
                <label>Title</label>
                <input type="text" name='title' class="form-control" placeholder="Enter ..." value="@yield('title')">
              </div>
              <div class="form-group">
                <label>Sub-title</label>
                <input type="text" name='subtitle' class="form-control" placeholder="Enter ..." value="@yield('sub-title')">
              </div>
              <div class="form-group">
                <label>Catagory</label>
                <select class="select2" name="catagory[]" multiple="multiple" data-placeholder="Select a State" style="width: 100%;">
                  @yield('catagory')
                </select>
              </div>
            </div>
            <div class="col-md-3">
              <div class="form-group">
                <label>Tag</label>
                <select class="select2" name="tag[]" multiple="multiple" data-placeholder="Select a State" style="width: 100%;">
                @yield('tag')
                </select>
              </div>
              <div class="form-group">
                <label for="exampleInputFile">Image</label>
                <div class="input-group">
                  <div class="custom-file">
                    <input type="file" name='image' class="custom-file-input" id="exampleInputFile">
                    <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <div class="custom-control custom-switch">
                  <input type="checkbox" value="1" @yield('status') class="custom-control-input" id="customSwitch1">
                  <label class="custom-control-label" for="customSwitch1">Publish</label>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <!-- image display -->
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <label>Post Editor</label>
              <div class="mb-3">
                <textarea name='body' class="textarea" placeholder="Place some text here" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">
                  @yield('body')
                </textarea>
              </div>
            </div>
          </div>
        </div>
        <!-- /.card-body -->
        <!-- .card-footer -->
        <div class="card-footer">
          <button type="submit" class="btn btn-primary">Submit</button>
          @yield('back-button')
        </div>
    </form>
    <!-- /.card-footer -->
  </div><!-- /.container-fluid -->
</section>
<!-- /.content -->
@endsection

@section('script')
<!-- Select2 -->
<script src="{{asset('admin/plugins/select2/js/select2.full.min.js')}}"></script>
<!-- InputMask -->
<script src="{{asset('admin/plugins/moment/moment.min.js')}}"></script>
<script src="{{asset('admin/plugins/inputmask/min/jquery.inputmask.bundle.min.js')}}"></script>
<script src="{{asset('admin/plugins/bs-custom-file-input/bs-custom-file-input.min.js')}}"></script>
<!-- Page script -->
<script>
  $(function() {
    //Initialize Select2 Elements
    $('.select2').select2();

    // Summernote
    $('.textarea').summernote();

    //custome fileinput
    bsCustomFileInput.init();
  });
</script>
@endsection