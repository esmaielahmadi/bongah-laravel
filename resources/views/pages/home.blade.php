@extends('layout')
@section('content')

    <div class="jumbotron">
        <div class="container">
            <h1 class="display-3">Bongah</h1>
            <p>This is a template for a simple marketing or informational website. It includes a large callout called a jumbotron and three supporting pieces of content. Use it as a starting point to create something more unique.</p>
            <p><a class="btn btn-primary btn-lg" href="{{route('banners.create')}}" role="button">Sing Up</a></p>
        </div>
    </div>

    @stop