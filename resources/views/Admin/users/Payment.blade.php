@extends('layouts.admin')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Payment</h1>
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
        <form class="form-horizontal" action="/action_page.php">
            <div class="form-group">
            <label class="control-label col-sm-4" for="email">Enter Application No:</label>
            <div class="col-sm-8">
                <input type="number" class="form-control" id="App_no." placeholder="Application No" name="App_num">
            </div>
            </div>
            <div class="form-group">
            <label class="control-label col-sm-4" for="email">Card No.:</label>
            <div class="col-sm-8">
                <input type="number" class="form-control" id="card_number" placeholder="Card No." name="card_number">
            </div>
            </div>
            <div class="form-group">
            <label class="control-label col-sm-4" for="pwd">Exp Date:</label>
            <div class="col-sm-8">          
                <input type="date" class="form-control" id="exp_date" placeholder="Exp Date" name="exp_date">
            </div>
            </div>
            <div class="form-group">
            <label class="control-label col-sm-4" for="pwd">Security Code:</label>
            <div class="col-sm-8">          
                <input type="number" class="form-control" id="scode" placeholder="Security Code" name="scode">
            </div>
            </div>
            <div class="form-group">
            <label class="control-label col-sm-4" for="pwd">Card Holder Name :</label>
            <div class="col-sm-8">          
                <input type="text" class="form-control" id="chname" placeholder="Card Holder Name" name="chname">
            </div>
            </div>
            <div class="form-group">        
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-success">Make Payment</button>
            </div>
            </div>
           </form>
      </div>
    </section>
</div>
@endsection;