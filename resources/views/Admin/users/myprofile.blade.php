@extends('layouts.admin')
@section('content')
    <div class="card mt-1">
        <div class="card-body ">
           <div class="row">
               <div class="col-sm-4">
                    <h5>Name</h5>
               </div>

               <div class="col-sm-6">
                   {{Auth::user()->name}}
                </div>
 
           </div>
          
        </div>
        <div>
            @yield('services')
        </div>

    </div>

@endsection;