@extends('layouts.admin')
@section('content')

<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0 text-dark">Categories</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href=" {{ route('admin.home') }}">Dashboard</a></li>
          <li class="breadcrumb-item active">Categories</li>
        </ol>
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
</div>
    <!-- /.content-header -->
<section class="content">
  <div class="container-fluid">
  	<p>
  		<a href="{{ route('admin.categories.create') }}" class="btn btn-primary">Add New Category</a>
  	</p>
  	<table class="table table-bordered table-striped">
  		<tr>
  			<th>ID</th>
  			<th>Title</th>
  			<th>Categories</th>
        <th>Images</th>
        <th>Prices</th>
        <th>Detait</th>
        <th>...</th>
  		</tr>
  		@foreach ($articles as $article )
  			<tr>
          
            
          
  				<td>{{ $article->id }}</td>
  				<td>{{ $article->title }}</td>
          <td>{{ $article->type }}</td>
          <td><img src= "{{ asset('./images/articles' . $article->image) }}" /></td>
          <td>{{ $article->price }}</td>
          <td>{{ $article->comment }}</td>
  				<td>
            <a href="{{ route('admin.categories.edit',$article->id) }}" class="btn btn-info">Edit</a> 
            <a href="javascript:void(0)" onclick="$(this).parent().find('form').submit()" class="btn btn-danger">Delete</a>
            <form action="" method="post">
              @method('DELETE')
              <input type="hidden" name="_token" value="{{ csrf_token() }}">
            </form>
          </td>
          
  			</tr>
  	@endforeach
  	</table>
  </div>
</section>	


@endsection