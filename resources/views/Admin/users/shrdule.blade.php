@extends('Admin.users.services')
@section('services')

    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Shedule appointment</h1>
          </div><!-- /.col -->
          {{-- <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('home')}}">Dashboard</a></li>
              <li class="breadcrumb-item active">Shedule appointment</li>
            </ol>
          </div><!-- /.col --> --}}
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <section class="content">
      <div class="container">
        <form class="form" method="POST" action="{{route('sheduleAdd')}}">
          @csrf
          <div class="form-group">
            <label for="name">Full Name:</label>
            <div class="row">
              <div class="col-sm-6">
                <input type="text" class="form-control" id="fname" name="fname" placeholder="First Name" required>             
              </div>
              <div class="col-sm-6">
                <input type="text" class="form-control" id="lname" name="lname" placeholder="Last Name" required>             
              </div>
            </div>
          </div>
        
          <div class="form-group">
            <label for="phone">Phone No. : </label>
            <input type="number" class="form-control" name="phone" required>
          </div>

          <div class="form-group">
            <label for="email">Email : </label>
            <input type="email" class="form-control" name="email" required>
          </div>

          <div class="form-group">
            <label for="DFU">Departure From USA : </label>
            <input type="date" class="form-control" name="DFU" required> 
          </div>

          <div class="form-group">
            <label for="time">Time : </label>
            <input type="time" class="form-control" name="time" required> 
          </div>

          <div class="form-group">
            <label for="TOS">Types of Service :</label>
            <select class="form-control" name="TOS">
              <option value="Visa">Visa Service</option>
              <option value="Passport">Passport Service</option>
              <option value="EOI">Ethiopia Origional ID</option>
              <option value="Auth&legel"> Authentication And Ligalization</option>
            </select>
          </div>

          <button type="submit" class="btn btn-success">Submit</button>
        </form>
      </div>
    </section>

@endsection;