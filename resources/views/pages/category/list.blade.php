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
        <th scope="col">Status</th>
        <th scope="col">Actions</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row">1</th>
        <td>John</td>
        <td>Doe</td>
        <td>john@example.com</td>
      </tr>
      <tr>
        <th scope="row">2</th>
        <td>Jane</td>
        <td>Doe</td>
        <td>jane@example.com</td>
      </tr>
      <tr>
        <th scope="row">3</th>
        <td>Larry</td>
        <td>the Bird</td>
        <td>@twitter</td>
      </tr>
    </tbody>
  </table>
</div>

@endsection