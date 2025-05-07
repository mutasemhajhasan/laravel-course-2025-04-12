@extends('admin')
@section('content')
<form class="form-signin" action="{{route('categories.update',['id'=>$category->id])}}" method="POST">
    @csrf
    <h1 class="h3 mb-3 font-weight-normal">Creating a new category</h1>
    <label for="name" class="sr-only">Category name</label>
    <input type="name" value="{{$category->name}}" name="name" id="name" class="form-control" placeholder="Name" required="" autofocus="">
<br>
    <button class="btn btn-lg btn-primary btn-block" type="submit">Save</button>
    <p class="mt-5 mb-3 text-muted">© 2017-2018</p>
  </form>
@endsection
