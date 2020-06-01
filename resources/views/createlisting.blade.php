@extends('layouts.app')
@section('content')

<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">Create Listing </div>

            <div class="card-body">

                <h1>Create Listing</h1>
                {!! Form::open(['action' => 'ListingsController@store','method'=>'Post']) !!}
                <div class="form-group">
                    {{Form::Label('name')}}
                    {{Form::text('name','',['class'=>'form-control','placeholder'=>'Enter name'])}}

                </div>
                <div class="form-group">
                    {{Form::Label('Text')}}
                    {{Form::email('email','',['class'=>'form-control','placeholder'=>'Enter email'])}}

                </div>
                <div class="form-group">
                    {{Form::Label('Phone')}}
                    {{Form::text('phone','',['class'=>'form-control','placeholder'=>'Enter Phone'])}}

                </div>
                <div class="form-group">
                    {{Form::Label('Website')}}
                    {{Form::text('website','',['class'=>'form-control','placeholder'=>'Enter Website'])}}

                </div>
                <div class="form-group">
                    {{Form::Label('Adress')}}
                    {{Form::text('adress','',['class'=>'form-control','placeholder'=>'Enter Adress'])}}

                </div>
                <div class="form-group">
                    {{Form::label('bio',)}}
                    {{ Form::textarea('bio', '',['class'=>'form-control','placeholder'=>'Enter bio'])}}

                </div>

                <div>
                    {{form::submit('submit',['class'=> 'btn btn-primary'])}}
                </div>

                {!! Form::close() !!}

            </div>
        </div>
    </div>
</div>










@endsection