@extends('layouts.admin')
@section('content')
    <div class="card mt-1">
        <div class="card-body ">
           
                <form action="{{url('/services/get')}}" method="POST">
                        <div class="row">
                <div class="col-sm-6">
                <select name="services" class="form-control">
                    <option value="visa">Visa</option>
                    <option value="passport">Passport</option>
                    <option value="legalization&Authentication">Legalization&Authentication</option>
                    <option value="ScheduleAppointement">Schedule An Appointement</option>
                    <option value="ethiopian">Ethiopian</option>
                </select>
            </div>
            <div class="col-sm-2 ml-2">
                <button class="btn btn-primary border-dark ml-3">GO</button>
            </div>
               @csrf
            </div>
        </form> 
               
          
        </div>

        <div>
            @yield('services')
        </div>

    </div>

@endsection;