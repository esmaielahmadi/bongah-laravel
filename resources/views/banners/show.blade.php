@extends('layout')
@section('content')
<div class="row">
<div class="col-md-3">
    <h1>{{$banner->street}}</h1>
    <h2>{{$banner->price}}</h2>
    <div class="description">{!!  $banner->description !!}</div>
</div>
    <div class="col-md-9">
        @foreach( $banner->photos as $photo)

            <img src="/{{$photo->path}}" alt="">
            @endforeach



    </div>

</div>
@if(auth()->check())
<hr>
<h2>Add Photo</h2>


    <form class="dropzone"  id="addPhotosForm" action="{{route('addPhotos',[$banner->zip, $banner->street])}}" method="POST">
        {{csrf_field()}}



    </form>
@endif
<script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.4.0/min/dropzone.min.js"></script>
<script>
    Dropzone.options.addPhotosFrom={
        paramName: "file",
        maxFilesize: 3,
        acceptedFiles :'.jpg, .jpeg, .png'
    }
</script>
    @stop
