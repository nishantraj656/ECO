@extends('layouts.admin')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Mailbox</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('home')}}">Dashboard</a></li>
              <li class="breadcrumb-item active">MailBox</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
 </div>
    <section class="content">
      <div class="container-fluid">
        <table class="table table-bordered table-striped">
          <tr>
            <th>Name</th>
            <th>Email</th>
            <th>description</th>
            <th>date</th>
</tr>
  @foreach($data as $data)
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
@endsection;