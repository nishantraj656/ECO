@extends('layouts.admin')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Users</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('home')}}">Dashboard</a></li>
              <li class="breadcrumb-item active">Users</li>
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
        <th>password</th>
      </tr>
      @foreach($listall_users as $u)
        <tr>
          <td>{{$u->name}}</td>
          <td><{{$u->email}}</td>
          <td>{{$u->password}}</td>
          <td><a href="#" class="btn btn-danger">Deative</a></td>
        </tr>
      @endforeach
    </table>
  </div>
</section>
@endsection;