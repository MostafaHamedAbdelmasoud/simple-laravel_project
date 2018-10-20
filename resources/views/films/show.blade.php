@extends('layouts.app')

@section('title','Film')


@section('content')


<div style="background-color:#245;" class="gft">
<a style="color:#894;font-size:22px;" class="p-4" href="{{url('/films/edit'.'/'.$film->id)}}">Edit</a>
 <a style="color:red;font-size:22px;" href="{{url('/films/destroy'.'/'.$film->id)}}">Delete</a>
</div>



<h2 style="color:#09c;" class="py-3">{{$film->filmname}}</h2> <br/>
<h3>{{$film->filmdescription}}</h3> <hr/>
<img src="{{asset('/assets/images/films'.'/'.$film->image)}}">

@endsection