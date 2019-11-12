@extends('layouts.admin')
@section('content')

    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Passport</h1>
          </div><!-- /.col -->
          {{-- <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('home')}}">Dashboard</a></li>
              <li class="breadcrumb-item active">Passport</li>
            </ol>
          </div><!-- /.col --> --}}
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <section class="content">
      <div class="container">
        <form class="form" action="/action_page.php">
          <div class="form-group">
            <label for="name">Full Name:</label>
            <div class="row">
              <div class="col-sm-4">
                <input type="text" class="form-control" id="fname" name="fname" placeholder="First Name" required>             
              </div>
              <div class="col-sm-4">
                <input type="text" class="form-control" id="mname" name="mname" placeholder="Middle Name">             
              </div>
              <div class="col-sm-4">
                <input type="text" class="form-control" id="lname" name="lname" placeholder="Last Name" required>             
              </div>
            </div>
          </div>
          <div class="form-group">
            <label for="sex">Gender :</label>
            <select class="form-control" name="sex" required>
              <option>Male</option>
              <option>Female</option>
              <option>Transgender</option>
            </select>
          </div>

          <div class="form-group">
            <label for="dob">DOB : </label>
            <input type="date" class="form-control" name="dob" require> 
          </div>

          <div class="form-group">
            <label for="height">Height : </label>
            <input type="number" class="form-control" name="height" require>
          </div>

          <div class="form-group">
            <label for="ecolor">Eye Color : </label>
            <input type="text" class="form-control" name="ecolor" require>
          </div>
          <div class="form-group">
            <label for="hcolor">Hair Color : </label>
            <input type="text" class="form-control" name="hcolor" require>
          </div>

          <div class="form-group">
            <label for="occupation">Occupation : </label>
            <input type="text" class="form-control" name="occupation" require>
          </div>

          <div class="form-group">
            <label for="ppn">Previous Passport No. : </label>
            <input type="text" class="form-control" name="ppn">
          </div>

          <div class="form-group">
            <label for="poissue">Place of issue : </label>
            <input type="text" class="form-control" name="poissue">
          </div>

          <div class="form-group">
            <label for="mststus">Marital Status :</label>
            <select class="form-control" name="mststus">
              <option value="single">Single</option>
              <option value="merrid">Merrid</option>
              <option value="divorced">Divorced</option>
            </select>
          </div>

          <div class="form-group">
            <label for="address">Address :</label>
            <textarea class="form-control" rows="5" name="address" required></textarea>
          </div>
          
          <div class="form-group">
            <div class="row">
              <div class="col-sm-4">
                <input type="text" class="form-control"  name="City" placeholder="City" required>             
              </div>
              <div class="col-sm-4">
                <input type="text" class="form-control"  name="State" placeholder="State" required>             
              </div>
              <div class="col-sm-4">
                <input type="text" class="form-control" name="Country" placeholder="Country" required>             
              </div>
            </div>
          </div>

          <div class="form-group">
            <label for="POT">Purpose of Travel :</label>
            <select class="form-control" name="POT" required>
              <option value="renewal">Passport Renewal</option>
              <option value="Lost">Lost Passport</option>
            </select>
          </div>

          <button type="submit" class="btn btn-success">Submit</button>
        </form>
      </div>
    </section>
@endsection;