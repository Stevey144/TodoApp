@extends('layouts.app')
@section('content')
<a class="btn btn-light" href="/todo/{{$todo->id}}">Go Back</a>
<h1>Edit Todo</h1> 
{!! Form::open(['action' => ['TodoController@update',$todo->id],'method'=>'POST'])  !!}
       
{{ Form::bsText('text',$todo->text) }}
{{ Form::bsTextArea('body',$todo->body) }}
{{ Form::bsText('due',$todo->due) }} 
{{ Form::hidden('_method','PUT') }}
{{ Form::bsSubmit('Submit',['class'=>'btn btn-primary']) }}
{!! Form::close() !!}
@endsection
