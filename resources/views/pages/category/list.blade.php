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

    @foreach($puddingBox as $pudding) 

      <tr>
        <th scope="row">{{$pudding->id}}</th>
        <td>{{ $pudding->name }}</td>
        <td>{{ $pudding->description }}</td>
        <td>{{ $pudding->status }}</td>
        <td>
          <a href="" class="btn btn-primary">View</a>
          <a href="" class="btn btn-warning">Edit</a>
          <a href="" class="btn btn-danger">Delete</a>
        </td>
      </tr>

    @endforeach
 

    </tbody>
  </table>
</div>

@endsection