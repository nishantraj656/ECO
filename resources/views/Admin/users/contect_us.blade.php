@extends('layouts.admin')
@section('content')

    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Contect US</h1>
          </div><!-- /.col -->
         
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <section class="content">
      <div class="container">
        <form class="form" mrthod="get" action="{{route('contactUs')}}">
          <div class="form-group">
            <label for="name">Full Name:</label>
            <input type="text" class="form-control" id="fname" name="name" placeholder="Enter your Name">
          </div>

          <div class="form-group">
            <label for="email">Email : </label>
            <input type="email" class="form-control" name="email" require>
          </div>

          <div class="form-group">
            <label for="subject">Subject : </label>
            <input type="text" class="form-control" name="subject" require>
          </div>

          <div class="form-group">
            <label for="msg">Message : </label>
            <textarea class="form-control" rows="5" name="msg" rquired></textarea> 
          </div>

          <button type="submit" class="btn btn-success">Submit</button>
        </form>
      </div>
    </section>

@endsection;