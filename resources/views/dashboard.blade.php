@extends('layouts.app')

@section('content')

<div class="row justify-content-center">
    <div class="col-md-8">
        <div>
            <h1 style="text-align: center">Welcome {{Auth::user()->name}}</h1>
        </div>
        <br>


        <div class="">

            <div class="card-header">Dashboard <span class=" float-right"> <a href="listings/create"
                        class="btn btn-success ">Add Listing</a></span></div>

            <div class="badge-body">

                <div >
                    <h3>Your Listings</h3>
                    @if(count($listings))
                    <table class="table">
                        <tr>
                            <th>Company</th>

                        </tr>
                        @foreach($listings as $listing)
                        <tr>
                            <td>{{$listing->name}} </td>
                            <td>{{$listing->email}}</td>
                            <td>{{$listing->adress}}</td>
                            <td>{{$listing->website}}</td>
                            <td>{{$listing->phone}}</td>
                            <td>{{$listing->bio}}</td>
                            <td> <a class="btn btn-primary" href="/listings/{{$listing->id}}/edit">Edit</a> </td>
                            <td><form style="display: inline" method="POST"
                            action="{{route('listings.destroy',['listing'=>$listing->id])}}">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                            </td>
                </div>
                </tr>

                @endforeach

                </table>
                @endif
            </div>

        </div>
    </div>
</div>
</div>

@endsection