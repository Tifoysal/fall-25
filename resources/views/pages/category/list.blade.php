@extends('master')


@section('content')
<h1>Category list</h1>

<a href="{{route('category.create.form')}}" class="btn btn-primary">Add new Category</a>


<div class="table-responsive">
  <table class="table table-striped table-hover">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Category Name</th>
        <th scope="col">Category Description</th>
        <th scope="col">Status</th>
        <th scope="col">Actions</th>
      </tr>
    </thead>
    <tbody>

    @foreach($puddingBox as $category) 

      <tr>
        <th scope="row">{{$category->id}}</th>
        <td>{{ $category->name }}</td>
        <td>{{ $category->description }}</td>
        <td>{{ $category->status }}</td>
        <td>
          <a href="{{route('category.view',$category->id)}}" class="btn btn-primary">View</a>
          <a href="" class="btn btn-warning">Edit</a>
          <a href="" class="btn btn-danger">Delete</a>
        </td>
      </tr>

    @endforeach
 

    </tbody>
  </table>
</div>

@endsection