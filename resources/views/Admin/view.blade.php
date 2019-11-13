@extends('layouts.admin')
@section('content')
  <!-- Content Header (Page header) -->
  <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('home')}}">Dashboard</a></li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <section class="content">
      <div class="container-fluid">
        <h3 class="m-0 text-dark">Details</h3>
       
        <div class="row">
          <div class="col-sm-4">
              <span>Application No. :</span>
          </div>
          <div class="col-sm-8">
            <strong>{{$data->id}}</strong>
          </div>
        </div>

        <div class="row">
          <div class="col-sm-4">
              <span>Name :</span>
          </div>
          <div class="col-sm-8">
            <strong>{{$data->name}}</strong>
          </div>
        </div>

        <div class="row">
          <div class="col-sm-4">
              <span>Passport No. :</span>
          </div>
          <div class="col-sm-8">
            <strong>{{$data->passportnumber}}</strong>
          </div>
        </div>

        <div class="row">
          <div class="col-sm-4">
              <span>Address :</span>
          </div>
          <div class="col-sm-8">
            <strong>{{$data->address}}</strong>
          </div>
        </div>

        <div class="row">
          <div class="col-sm-4">
              <span> Application Type:</span>
          </div>
          <div class="col-sm-8">
            <strong>{{$type}}</strong>
          </div>
        </div>
        <br>
        <div class="row">
          <div class="col-sm-6">
              <form method="get" action="{{route('updateViewData')}}">
                  <input type="hidden"  name="type" value="{{$type}}" />
                  <input type="hidden"  name="id" value="{{$data->id}}" />  
                  <input type="hidden"  name="status" value="Accepted" />
                  <button class="btn btn-success" type="submit">Approve</button></td>
                  
              </form>
          </div>
          <div class="col-sm-6">
              <form method="get" action="{{route('updateViewData')}}">
                  <input type="hidden"  name="type" value="{{$type}}" />
                  <input type="hidden"  name="id" value="{{$data->id}}" />
                  <input type="hidden"  name="status" value="Decline" /> 
                  <button class="btn btn-danger" type="submit">Decline</button></td>
              </form>
          </div>
        </div>

      </div>
</section>
@endsection;