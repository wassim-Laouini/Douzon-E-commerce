@extends('layouts.admin')
@section('content')

<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0 text-dark">Add News</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href=" {{ route('admin.home') }}">Dashboard</a></li>
          <li class="breadcrumb-item active">Add News</li>
        </ol>
      </div><!-- /.col -->
    
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
</div>
    <!-- /.content-header -->
<section class="content">
  <div class="container-fluid">
    <form method="post" action="{{ route('admin.news') }}" enctype="multipart/form-data">
      @csrf
      <div class="form-group">
        <div class="row">
          <label class="col-md-3">Title</label>
          <div class="col-md-6"><input type="text" name="title" class="form-control"></div>
          @error('title')
          <div class="alert alert-danger">{{ $message }}</div>
          @enderror
          <div class="clearfix"></div>
        </div>
      </div>

      <div class="form-group">
        <div class="row">
          <label class="col-md-3">type</label>
          <div class="col-md-6"><input type="text" name="type" class="form-control"></div>
          @error('type')
          <div class="alert alert-danger">{{ $message }}</div>
          @enderror 
          <div class="clearfix"></div>
        </div>
      </div>

      <div class="form-group">
        <div class="row">
          <label class="col-md-3">Image</label>
          <div class="col-md-6"><input type="file" name="image"></div>
          @error('image')
          <div class="alert alert-danger">{{ $message }}</div>
          @enderror 
          <div class="clearfix"></div>
        </div>
      </div>
      <div class="form-group">
        <div class="row">
          <label class="col-md-3">price</label>
          <div class="col-md-6"><input type="text" name="price" class="form-control"></div>
          @error('price')
          <div class="alert alert-danger">{{ $message }}</div>
          @enderror 
          <div class="clearfix"></div>
        </div>
      </div>
      <div class="form-group">
        <div class="row">
          <label class="col-md-3">comment</label>
          <div class="col-md-6"><input type="text" name="comment" class="form-control"></div>
          @error('comment')
          <div class="alert alert-danger">{{ $message }}</div>
          @enderror 
          <div class="clearfix"></div>
        </div>
      </div>

   
<div class="text-algrin-center">
  @if (session()->has('succes'))
  <div class="alert alert-success">{{ session()->get('succes') }}</div>
  @endif 
</div>

      <div class="form-group">
        <input type="submit" class="btn btn-info" value="Save">
      </div>
    </form>
  </div>
</section>  


@endsection