@extends('layouts.app')
@section('content')

<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">Edit Listing </div>

            <div class="card-body">

                <h1>Create Listing</h1>
                {!! Form::open(['action' => ['ListingsController@update',$listing->id],'method'=>'Post']) !!}
                @csrf
                @method('PUT')
                <div class="form-group">
                    {{Form::Label('name')}}
                    {{Form::text('name',$listing->name,['class'=>'form-control','placeholder'=>'Enter name'])}}

                </div>
                <div class="form-group">
                    {{Form::Label('Text')}}
                    {{Form::email('email',$listing->email,['class'=>'form-control','placeholder'=>'Enter email'])}}

                </div>
                <div class="form-group">
                    {{Form::Label('Phone')}}
                    {{Form::text('phone',$listing->phone,['class'=>'form-control','placeholder'=>'Enter Phone'])}}

                </div>
                <div class="form-group">
                    {{Form::Label('Website')}}
                    {{Form::text('website',$listing->website,['class'=>'form-control','placeholder'=>'Enter Website'])}}

                </div>
                <div class="form-group">
                    {{Form::Label('Adress')}}
                    {{Form::text('adress',$listing->adress,['class'=>'form-control','placeholder'=>'Enter Adress'])}}

                </div>
                <div class="form-group">
                    {{Form::label('bio',)}}
                    {{ Form::textarea('bio', $listing->bio,['class'=>'form-control','placeholder'=>'Enter bio'])}}

                </div>

                <div>
                    {{form::submit('update',['class'=> 'btn btn-primary'])}}
                </div>

                {!! Form::close() !!}

            </div>
        </div>
    </div>
</div>










@endsection