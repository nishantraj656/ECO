@extends('layouts.admin')
@section('content')
<section class="content">
      <div class="container-fluid">
        <table class="table table-bordered table-striped">
          <tr>
            <th>Name</th>
            <th>Email</th>
            <th>description</th>
            <th>date</th>
</tr>
  @foreach($datas as $data)
  <tr>
    <td>{{$data->name}}</td>
    <td><{{$data->Email}}/td>
    <td>{{$data->description}}</td>
    <td>{{$data->date}}</td>
    <td><a href="#" class="btn btn-info">Edit</a><a href="#" class="btn btn-danger">Delete</a></td>
</tr>
@endforeach
      </div>
      </section>
@endsection