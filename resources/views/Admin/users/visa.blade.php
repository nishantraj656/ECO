@extends('Admin.users.services')
@section('services')

    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Visa</h1>
          </div><!-- /.col -->
          {{-- <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('home')}}">Dashboard</a></li>
              <li class="breadcrumb-item active">Visa</li>
            </ol>
          </div><!-- /.col --> --}}
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <section class="content">
      <div class="container">
        <form class="form" method="POST" action="{{route('visaAdd')}}">
            @csrf
          <div class="form-group">
            <label for="name">Full Name:</label>
            <div class="row">
              <div class="col-sm-4">
                <input type="text" class="form-control" id="fname" name="fname" placeholder="First Name">             
              </div>
              <div class="col-sm-4">
                <input type="text" class="form-control" id="mname" name="mname" placeholder="Middle Name">             
              </div><!-- c   -->
              <div class="col-sm-4">
                <input type="text" class="form-control" id="lname" name="lname" placeholder="Last Name">             
              </div>
            </div>
          </div>
          <div class="form-group">
            <label for="sex">Gender :</label>
            <select class="form-control" name="sex">
              <option>Male</option>
              <option>Female</option>
              <option>Transgender</option>
            </select>
          </div>

          <div class="form-group">
            <label for="dob">DOB : </label>
            <input type="date" class="form-control" name="dob" required> 
          </div>

          <div class="form-group">
            <label for="nationality">Nationality : </label>
            <input type="nationality" class="form-control" name="nationality" required>
          </div>

          <div class="form-group">
            <label for="passport">Passport No. : </label>
            <input type="text" class="form-control" name="passport" required>
          </div>

          <!-- <div class="form-group">
            <label for="ecolor">Eye Color : </label>
            <input type="text" class="form-control" name="ecolor" require>
          </div> -->
          
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
                <input type="text" class="form-control"  name="City" placeholder="City">             
              </div>
              <div class="col-sm-4">
                <input type="text" class="form-control"  name="State" placeholder="State">             
              </div>
              <div class="col-sm-4">
                <input type="text" class="form-control" name="Country" placeholder="Country" >             
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
            <label for="pot">Purpose of Travel : </label>
            <input type="text" class="form-control" name="pot" required>
          </div>

          <div class="form-group">
            <label for="DFU">Departure From USA : </label>
            <input type="date" class="form-control" name="DFU" required> 
          </div>

          <div class="form-group">
            <label for="AIE">Date of Arrival in Ethiopia : </label>
            <input type="date" class="form-control" name="AIE" required> 
          </div>

          <div class="form-group">
            <label for="DSE">Duration of stay in Ethiopia : </label>
            <input type="text" class="form-control" name="DSE" required>
          </div>
          
          <button type="submit" class="btn btn-success">Submit</button>
        </form>
      </div>
    </section>

@endsection;