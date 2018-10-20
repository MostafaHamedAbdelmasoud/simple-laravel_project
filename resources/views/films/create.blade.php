@extends('layouts.app')

@section('title','Films')


@section('content')

@if($errors->any())
    @foreach($errors->all() as $error)
        <div class="alert alert-danger" >
            {{$error}}
        </div>
    @endforeach
@endif


{!!Form::open(['url'=>'films/storeFilm','enctype'=>'multipart/form-data'])!!}


    <div class="form-group">
    <label for="exampleInputEmail1">Film</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="filmname" placeholder="Enter film name" value="{{old('filmname')}}">
        

</div>


<div class="form-group">
    <label for="exampleInputEmail1">Film Description</label>
<textarea name="filmdescription" class="form-control" >{{old('filmdescription')}}</textarea>
</div>




<div class="form-group">
    <label  for="file">image:</label>
<input name="image" type="file" accept="image/*" class="form-control" />

</div>

        
        

<button type="submit" class="btn btn-primary">Submit</button>
{!!Form::close()!!}





@endsection