@extends('layouts.app')



@section('content')
<a href="/" class="btn btn-dark" style="margin-top:10px;">Go back</a>
<h1><a href="todo/{{$todo->id}}">{{$todo->text}}</a></h1>
<span class="badge badge-danger"> {{$todo->due}}</span>
<hr>
<p>{{$todo->body}}</p>
<br><br>
<a href="/todo/{{$todo->id}}/edit" class="btn btn-dark">Edit</a>
{!! Form::open(['action' => ['TodoController@destroy',$todo->id],'method'=>'POST','class'=>'float-sm-right'])  !!}
{{ Form::hidden('_method','DELETE') }}       

{{ Form::bsSubmit('Delete',['class'=>'btn btn-danger']) }}



{!! Form::close() !!}

@endsection