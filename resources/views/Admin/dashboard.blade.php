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
      <h3 class="m-0 text-dark">Ethiopian ID</h3>
        <table class="table table-bordered table-striped">
          <thead>
            <tr>
              <th scope="col" >App No.</th>
              <th scope="col" >Name</th>
              <th scope="col" >Passport No.</th>
              <th scope="col" >Payment</th>
              <th scope="col" >Status</th>
            </tr>
          </thead>
          <tbody>
            @foreach($ethiopian as $item)
            <tr>
              <td scope="row">{{$item->id}}</td>
              <td >@php
                 if($item->name != null)
                 {
                  $v = json_decode($item->name);
                  echo $v->fname.' '.$v->mname.' '.$v->lname;
               }
              @endphp </td>
              <td>{{$item->passportnumber}}</td>
              <td>{{($item->paymentID) ? __('Done') : __('Pending')}}</td>
              <td>{{$item->status}}</td>
            </tr>
           @endforeach
          </tbody>
        </table>
      </div>

      <div class="container-fluid">
      <h3 class="m-0 text-dark">Appointment</h3>
        <table class="table table-bordered table-striped">
          <thead>
            <tr>
              <th scope="col" >App No.</th>
              <th scope="col" >Name</th>
              <th scope="col" >Purpose</th>
              <th scope="col" >Status</th>
            </tr>
          </thead>
          <tbody>
            @foreach($shedule as $item)
            <tr>
              <td scope="row">{{$item->id}}</td>
              <td >@php
                  if($item->name != null)
                 {
                  $v = json_decode($item->name);
                  echo $v->fname.' '.$v->mname.' '.$v->lname;
               }
               @endphp </td>
              <td>{{$item->typeofService}}</td>
              <td>{{$item->status}}</td>
            </tr>
           @endforeach
          </tbody>
        </table>
      </div>

      <div class="container-fluid">
      <h3 class="m-0 text-dark">Passport</h3>
        <table class="table table-bordered table-striped">
          <thead>
            <tr>
              <th scope="col" >App No.</th>
              <th scope="col" >Name</th>
              <th scope="col" >Address</th>
              <th scope="col" >Payment</th>
              <th scope="col" >Status</th>
            </tr>
          </thead>
          <tbody>
            @foreach($passport as $item)
            <tr>
              {{-- {"base": "AT - KIRTANIYA,\r\nP.O - AMMAPALI ,\r\nP.S - PIRPAINTI\r\n
              Dist. - BHAGALPUR(BIHAR)", "city": "BHAGALPUR", "state": "BIHAR", "country": "India"} --}}
              <td scope="row">{{$item->id}}</td>
              <td >@php
                  if($item->name != null)
                 {
                  $v = json_decode($item->name);
                  echo $v->fname.' '.$v->mname.' '.$v->lname;
               }
               @endphp </td>
              <td>@php
                if($item->address != null)
                {
                  $v = json_decode($item->address);
                  echo 'Street : '. $v->base.'<br>';
                  echo 'City : '.$v->city.'<br>';
                  echo 'State : '.$v->state.'<br>';
                  echo 'Street : '.$v->country.'<br>';
                }
               @endphp </td>
              <td>{{($item->paymentID) ? __('Done') : __('Pending')}}</td>
              <td>{{$item->status}}</td>
            </tr>
           @endforeach
          </tbody>
        </table>
      </div>

      <div class="container-fluid">
      <h1 class="m-0 text-dark">Visa</h1>
        <table class="table table-bordered table-striped">
          <thead>
            <tr>
              <th scope="col" >App No.</th>
              <th scope="col" >Name</th>
              <th scope="col" >Passport No.</th>
              <th scope="col" >Payment</th>
              <th scope="col" >Status</th>
            </tr>
          </thead>
          <tbody>
            @foreach($visa as $item)
            <tr>
              <td scope="row">{{$item->id}}</td>
              <td >@php
                  if($item->name != null)
                 {
                  $v = json_decode($item->name);
                  echo $v->fname.' '.$v->mname.' '.$v->lname;
               }
               @endphp </td>
              <td>{{$item->passportnumber}}</td>
              <td>{{($item->paymentID) ? __('Done') : __('Pending')}}</td>
              <td>{{$item->status}}</td>
            </tr>
           @endforeach
          </tbody>
        </table>
      </div>

      <div class="container-fluid">
      <h1 class="m-0 text-dark">Authentication & legelization</h1>
        <table class="table table-bordered table-striped">
          <thead>
            <tr>
              <th scope="col" >App No.</th>
              <th scope="col" >Name</th>
              <th scope="col" >Passport No.</th>
              <th scope="col" >Payment</th>
              <th scope="col" >Status</th>
            </tr>
          </thead>
          <tbody>
            @foreach($legalization as $item)
            <tr>
              <td scope="row">{{$item->id}}</td>
              <td >@php
                  if($item->name != null)
                 {
                  $v = json_decode($item->name);
                  echo $v->fname.' '.$v->mname.' '.$v->lname;
               }
               @endphp </td>
              <td>{{$item->passportnumber}}</td>
              <td>{{($item->paymentID) ? __('Done') : __('Pending')}}</td>
              <td>{{$item->status}}</td>
            </tr>
           @endforeach
          </tbody>
        </table>
      </div>
</section>
@endsection;