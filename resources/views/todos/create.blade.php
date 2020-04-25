@extends('layouts.app')

@section('content')
  <h1>Create Todo</h1>

  {!! Form::open(['action' => 'TodosController@store','method'=>'POST']) !!}
        <!--
        //tb3n 2bl ay 7ga lazm a3ml update composer 3lshan yanzl laravel collective (html)=>Form
        //bdef kam line fil config=>app.php ( providers , alies)
        //kol 7aga mn dol bro7 a3del fil FormServiceProvider w b3d kda bcreate file fil view=>component=>Form=>filename bnfs alname 3lshan bs 2adr 2ast5dma hena
        -->
        {{ Form::bsText('text') }}
        {{ Form::bsTextArea('body') }}
        {{ Form::bsText('due') }}
        {{ Form::bsSubmit('submit',['class'=>'btn btn-primary']) }}
  {!! Form::close() !!}
@endsection
