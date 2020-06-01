@extends('layouts.app')

@section('content')

<div class="row justify-content-center">
    <div class="col-md-8">


        <div class="card">

            <div class="card-header">
                Listing <span class=" float-right"> <a href="/" class="btn btn-success ">Go back</a></span>
            </div>

            <div class="card-body">

                <div style="text-align:center" class="alert alert-info">
                    {{$listing->name}}
                </div>
                <ul class="list-group">
                    <li class="list-group-item">Adress :{{$listing->adress}}</li>
                    <li class="list-group-item">Email :{{$listing->email}}</li>
                    <li class="list-group-item"> Website :{{$listing->website}}</< /li>
                    <li class="list-group-item">Phone :{{$listing->phone}}</< /li>
                </ul>
                <hr>

                <div>
              {{$listing->bio}}

                </div>
            </div>
        </div>
    </div>
</div>

@endsection