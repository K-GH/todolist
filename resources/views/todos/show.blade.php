@extends('layouts.app')

@section('content')
    <h1>Show</h1>
    <a class="btn btn-default" href="/">Go Back</a>
    <h1>
        <a href="todo/{{$todo->id}}">{{$todo->text}}</a>
    </h1>
    <div class="badge badge-danger">{{$todo->due}}</div>
    <hr>
    <p>{{$todo->body}}</p>
    <br><br>
    <a href="/todo/{{$todo->id}}/edit" class="btn btn-default">Edit</a>
    {!! Form::open(['action' => ['TodosController@destroy',$todo->id],'method'=>'POST','class'=>'float-right']) !!}
          {{ Form::hidden('_method','DELETE') }}<!--hidden m3 value DELETE 3lshan 3lshan yaro7 3la resource fil route w b3d kda yaro7 3la destroy fil controller  -->
          {{ Form::bsSubmit('Delete',['class'=>'btn btn-danger']) }}
    {!! Form::close() !!}
@endsection
