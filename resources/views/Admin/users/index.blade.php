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
      <h3 class="m-0 text-dark">Current Application</h3>
        <table class="table table-bordered table-striped">
          <thead>
            <tr>
              <th scope="col" >App No.</th>
              <th scope="col" >Name</th>
              <th scope="col" >Application</th>
              <th scope="col" >Payment</th>
              <th scope="col" ></th>
            </tr>
          </thead>
          <tbody>
            @foreach($ethiopian as $item)
            <tr>
              <td scope="row">{{$item->id}}</td>
              <td >{{$item->name}}</td>
              <td>Ethiopian ID</td>
              <td>{{($item->paymentID) ? __('Done') : __('Pending')}}</td>
              <td>
                  <form method="get" action="{{route('viewData')}}">
                      <input type="hidden"  name="type" value="ethiopian" />
                      <input type="hidden"  name="id" value="{{$item->id}}" />  
                      <button class="btn btn-success" type="submit">Open</button></td>
                  </form>
            </tr>
           @endforeach
           @foreach($passport as $item)
            <tr>
              <td scope="row">{{$item->id}}</td>
              <td >{{$item->name}}</td>
              <td>Passport</td>
              <td>{{($item->paymentID) ? __('Done') : __('Pending')}}</td>
              <td>
                <form method="get" action="{{route('viewData')}}">
                      <input type="hidden"  name="type" value="Passport" />
                      <input type="hidden"  name="id" value="{{$item->id}}" />  
                      <button class="btn btn-success" type="submit">Open</button></td>
                  </form>
                </td>
            </tr>
           @endforeach
           @foreach($legalization as $item)
            <tr>
              <td scope="row">{{$item->id}}</td>
              <td >{{$item->name}}</td>
              <td>Legalization</td>
              <td>{{($item->paymentID) ? __('Done') : __('Pending')}}</td>
              <td>
                  <form method="get" action="{{route('viewData')}}">
                      <input type="hidden"  name="type" value="Auth&legel" />
                      <input type="hidden"  name="id" value="{{$item->id}}" />  
                      <button class="btn btn-success" type="submit">Open</button></td>
                  </form>
              </td>
            </tr>
           @endforeach
           @foreach($visa as $item)
            <tr>
              <td scope="row">{{$item->id}}</td>
              <td >{{$item->name}}</td>
              <td>Visa</td>
              <td>{{($item->paymentID) ? __('Done') : __('Pending')}}</td>
              <td>
                  <form method="get" action="{{route('viewData')}}">
                      <input type="hidden"  name="type" value="Visa" />
                      <input type="hidden"  name="id" value="{{$item->id}}" />  
                      <button class="btn btn-success" type="submit">Open</button></td>
                  </form>
              </td>
            </tr>
           @endforeach
           @foreach($shedule as $item)
            <tr>
              <td scope="row">{{$item->id}}</td>
              <td >{{$item->name}}</td>
              <td>Shedule</td>
              <td>{{($item->paymentID) ? __('Done') : __('Pending')}}</td>
              <td>
                  <form method="get" action="{{route('viewData')}}">
                      <input type="hidden"  name="type" value="Shedule" />
                      <input type="hidden"  name="id" value="{{$item->id}}" />  
                      <button class="btn btn-success" type="submit">Open</button></td>
                  </form>
              </td>
            </tr>
           @endforeach
          </tbody>
        </table>
      </div>
</section>
@endsection;