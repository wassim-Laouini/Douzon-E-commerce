@extends('layouts.admin')
@section('content')

<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0 text-dark">Edit Categories</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href=" {{ route('admin.home') }}">Dashboard</a></li>
          <li class="breadcrumb-item active">Edit Categories</li>
        </ol>
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
</div>
    <!-- /.content-header -->
<section class="content">
  <div class="container-fluid">
    <form method="post" action="{{ route('admin.categories.update',$articles->id) }} " enctype="multipart/form-data" >
      @method('PUT')
      @csrf
      <div class="form-group">
        <div class="row">
          <label class="col-md-3">Title</label>
          <div class="col-md-6"><input type="text" name="title" value="{{ $articles->title }}" class="form-control"></div>
          @error('title')
          <div class="alert alert-danger">{{ $message }}</div>
          @enderror
          <div class="clearfix"></div>
        </div>
      </div>

      <div class="form-group">
        <div class="row">
          <label class="col-md-3">type</label>
          <div class="col-md-6"><input type="text" name="type" value="{{ $articles->type }}" class="form-control"></div>
          @error('type')
          <div class="alert alert-danger">{{ $message }}</div>
          @enderror 
          <div class="clearfix"></div>
        </div>
      </div>

      <div class="form-group">
        <div class="row">
          <label class="col-md-3">Image</label>
          <div class="col-md-6"><input type="file" name="image" value="{{ $articles->image }}"></div>
          @error('image')
          <div class="alert alert-danger">{{ $message }}</div>
          @enderror 
          <div class="clearfix"></div>
        </div>
      </div>
      <div class="form-group">
        <div class="row">
          <label class="col-md-3">price</label>
          <div class="col-md-6"><input type="text" name="price" value="{{ $articles->price }}" class="form-control"></div>
          @error('price')
          <div class="alert alert-danger">{{ $message }}</div>
          @enderror 
          <div class="clearfix"></div>
        </div>
      </div>
      <div class="form-group">
        <div class="row">
          <label class="col-md-3">comment</label>
          <div class="col-md-6"><input type="text" name="comment" value="{{ $articles->comment }}"class="form-control"></div>
          @error('comment')
          <div class="alert alert-danger">{{ $message }}</div>
          @enderror 
          <div class="clearfix"></div>
        </div>
      </div>

   


      <div class="form-group">
        <input type="submit" class="btn btn-info" value="Save">
      </div>
    </form>
  </div>

</section>  


@endsection