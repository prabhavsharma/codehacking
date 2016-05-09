@extends('layouts.admin')







@section('content')


    <h1>Create Posts</h1>
    {!! Form::open(['method'=>'POST','action'=>'AdminUsersController@store','files'=>true]) !!}
    <div class="form-group">
        {!! Form::label('title','Title:') !!}
        {!! Form ::text('title',null,['class'=>'form-control'])!!}
    </div>
    <div class="form-group">
        {!! Form::label('email','Email') !!}
        {!! Form ::email('email',null,['class'=>'form-control'])!!}
    </div>

    <div class="form-group">
        {!! Form::label('category_id','Category') !!}
        {!! Form ::select('category_id',array(''=>'options'),null,['class'=>'form-control'])!!}
    </div>
    <div class="form-group">
        {!! Form::label('photo_id','Title') !!}
        {!! Form ::file('photo_id',null,['class'=>'form-control'])!!}
    </div>
    <div class="form-group">
    {!! Form::label('body','Description:') !!}
    {!! Form ::textarea('title',null,['class'=>'form-control','rows'=>3])!!}
    </div>
{!! Form::close() !!}


@stop