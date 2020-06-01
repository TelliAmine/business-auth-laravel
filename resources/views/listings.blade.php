@extends('layouts.app')

@section('content')

<div class="row justify-content-center">
    <div class="col-md-8">
        <div>
            <h1 style="text-align: center">Welcome </h1>
        </div>
        <br>


        <div class="card">

            <div class="card-header">
                <h5>Latest basic listings</h5>
            </div>

            <div class="badge-body">


                @if(count($listings))
                <ul class="list-group">


                    @foreach($listings as $listing)

                    <li class="list-group-item"><a href="/listings/{{$listing->id}}">{{$listing->name}}</a></li>
                    @endforeach
                </ul>
                @else
                <p style="text-align: center">No Listings Found</p>

                @endif



            </div>
        </div>
    </div>
</div>

@endsection