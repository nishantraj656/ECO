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
       

        @foreach($data as $key => $value)
        
          @if($key != "id")
          <div class="row">
            <div class="col-sm-4">
                <span> {{$key}}</span>
            </div>
            <div class="col-sm-8">
              <strong>{{$value}}</strong>
            </div>
          </div>
          @endif

        @endforeach
        
        <div class="row">
          <div class="col-sm-6">
              <form method="get" action="{{route('updateViewData')}}">
                  <input type="hidden"  name="type" value="{{$type}}" />
                  <input type="hidden"  name="id" value="{{$data['id']}}" />  
                  <input type="hidden"  name="status" value="Accepted" />
                  <button class="btn btn-success" type="submit">Approve</button></td>
              </form>
          </div>
          <div class="col-sm-6">
              <form method="get" action="{{route('updateViewData')}}">
                  <input type="hidden"  name="type" value="{{$type}}" />
                  <input type="hidden"  name="id" value="{{$data['id']}}" />
                  <input type="hidden"  name="status" value="Decline" /> 
                  <button class="btn btn-danger" type="submit">Decline</button></td>
              </form>
          </div>
        </div>
      </div>
</section>
@endsection;