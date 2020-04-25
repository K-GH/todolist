@extends('layouts.app')

@section('content')
  <h1>Edit Todo</h1>
  <a href="/todo/{{$todo->id}}" class="btn btn-default">Go Back</a>
  <!--ana hena mezawd paramater al $todo->id 3lshan update function bt5od two paramater -->
  {!! Form::open(['action' => ['TodosController@update',$todo->id],'method'=>'POST']) !!}
        <!--
        //tb3n 2bl ay 7ga lazm a3ml update composer 3lshan yanzl laravel collective (html)=>Form
        //bdef kam line fil config=>app.php ( providers , alies)
        //kol 7aga mn dol bro7 a3del fil FormServiceProvider w b3d kda bcreate file fil view=>component=>Form=>filename bnfs alname 3lshan bs 2adr 2ast5dma hena
        -->
        {{ Form::bsText('text' ,$todo->text) }}
        {{ Form::bsTextArea('body',$todo->body) }}
        {{ Form::bsText('due',$todo->due )}}
        {{ Form::hidden('_method','PUT') }} <!--hidden m3 value PUT 3lshan 3lshan yaro7 3la resource fil route w b3d kda yaro7 3la update fil controller  -->
        {{ Form::bsSubmit('submit',['class'=>'btn btn-primary']) }}
  {!! Form::close() !!}
@endsection
