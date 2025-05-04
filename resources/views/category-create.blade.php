@extends('app')
@section('content')
<form class="form-signin" action="/categories" method="POST">
    @csrf
    <img class="mb-4" src="https://getbootstrap.com/docs/4.0/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
    <h1 class="h3 mb-3 font-weight-normal">Creating a new category</h1>
    <label for="name" class="sr-only">Category name</label>
    <input type="name" name="name" id="name" class="form-control" placeholder="Name" required="" autofocus="">
<br>
    <button class="btn btn-lg btn-primary btn-block" type="submit">Save</button>
    <p class="mt-5 mb-3 text-muted">© 2017-2018</p>
  </form>
@endsection
