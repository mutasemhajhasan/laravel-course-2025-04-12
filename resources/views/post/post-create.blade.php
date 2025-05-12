@extends('admin')
@section('content')
    <form class="form-signin" action="/posts" method="POST" enctype="multipart/form-data">
        @csrf
        <h1 class="h3 mb-3 font-weight-normal">Creating a new post</h1>
        <label for="title" class="sr-only">Title</label>
        <input type="title" name="title" id="title" class="form-control" placeholder="title" required=""
            autofocus="">
        <br>
        <label for="content" class="sr-only">Content</label>
        <textarea rows="5" name="content" id="content" class="form-control" placeholder="content" required=""
            autofocus=""></textarea>
        <br>
        <label for="image" class="sr-only">Image</label>
        <input type="file" name="image" id="image" class="form-control" placeholder="image" required=""
            autofocus="">
            <br>
        <label for="category_id" class="sr-only">Catogry</label>
        <select name="category_id" id="category_id" class="form-control" placeholder="category_id" required=""
            autofocus="">
            @foreach ($cats as $c)
                <option value="{{ $c->id }}">
                    {{ $c->name }}
                </option>
            @endforeach
        </select>
        <br>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Save</button>
        <p class="mt-5 mb-3 text-muted">© 2017-2018</p>
    </form>
@endsection
