@extends('layouts.app')
@section('title', 'Create a Category')
@section('content')
    {{ Form::open(['route' => 'categories.store']) }}
    <div class="form-group">
        {{ Form::label('name', 'Category Name:') }}
        {{ Form::text('name', null, ['class' => 'form-control']) }}
        @if ($errors->first('name'))
            <p class="validation">※{{$errors->first('name')}}</p>
        @endif
    </div>
    <div class="form-group">
        {{ Form::submit('登録', ['class' => 'btn btn-primary form-control']) }}
    </div>
    {{ Form::close() }}
@endsection
