@extends('Admin.users.services')
@section('services')

    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Ethiopian</h1>
          </div><!-- /.col -->
          {{-- <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('home')}}">Dashboard</a></li>
              <li class="breadcrumb-item active">ethiopian</li>
            </ol>
          </div><!-- /.col --> --}}
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <section class="content">
      <div class="container">
        <form class="form"  method="POST" action="{{route('ethiopian')}}">
            @csrf
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
            <label for="bplace">Birth Place : </label>
            <input type="text" class="form-control" name="bplace" required>
          </div>
          
          <div class="form-group">
            <label for="nationality">Nationality : </label>
            <input type="nationality" class="form-control" name="nationality" required>
          </div>

          <div class="form-group">
            <label for="passport">Passport No. : </label>
            <input type="text" class="form-control" name="passport" required>
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
            <label for="phone">Phone No. : </label>
            <input type="number" class="form-control" name="phone" required>
          </div>

          <div class="form-group">
            <label for="email">Email : </label>
            <input type="email" class="form-control" name="email" required>
          </div>

          <div class="form-group">
            <label for="photo">Photo Upload: </label>
            <input type="file" class="form-control" name="photo" required>
          </div>

          <div class="form-group">
            <label for="sign">Signature Upload: </label>
            <input type="file" class="form-control" name="sign" required>
          </div>

          <button type="submit" class="btn btn-success">Submit</button>
        </form>
      </div>
    </section>

@endsection;