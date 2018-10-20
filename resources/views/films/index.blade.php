 @extends('layouts.app')

@section('title','Films')


@section('content')


@foreach($films as $film)
<h5><a style="font-size:42px; text-decoration:none;"  href="{{url('/films/show'.'/'.$film->id)}}"> 
    {{$film->filmname}} </a></h5> <br/>
<h3>{{$film->filmdescription}}</h3> <hr/>
@endforeach 

@endsection