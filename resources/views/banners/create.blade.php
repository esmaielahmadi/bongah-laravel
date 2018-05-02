@extends('layout')
@section('content')
    <h1> Selling you home?</h1>


    <form action="{{route('banners.store')}}"
          method="POST"
          enctype="multipart/form-data"
          role="form">
        @include('banners.form')
    </form>
    @if(count($errors)>0)
        <div class="alert alert-danger">
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </div>
    @endif




@stop