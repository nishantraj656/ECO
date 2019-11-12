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
   



<section>
  <table class="table table-hover table-triped">
      <thead>
          <tr>
              <th scope="col">UserID</th>
              <th scope="col">UserName</th>
              <th scope="col">Email</th>
              <th scope="col">Delete</th>
          </tr>
      </thead>
      <tbody>

        @forelse ($data as $item)
          <tr>
              <th scope="row">{{$item->id}}</th>
              <th>{{$item->name}}</th>
              <th>{{$item->email}} </th>
              
              <th>
                  <form method="GET" action="{{url('/admin/users/deactive')}}"> 
                    @csrf
                    <input type="hidden" name="id" value="{{$item->id}}"/>
                    <input type="hidden" name="active" value="{{$item->active}}"/>
                    <button type="submit" 
                        @if ($item->active == 1)
                          class="btn btn-danger">Deactive
                        @else
                          class="btn btn-success">Active
                        @endif
                      
                    </button>
                  </form>
              </th>
              
          </tr>
        @empty
            <tr>
              <th>No Data Found</th>
            </tr>
        @endforelse 
          
          


      </tbody>

  </table>
</section>



  </div>
</section>
@endsection;