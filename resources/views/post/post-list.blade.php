@extends('admin')
@section('content')
<h1>Posts <a href="{{route('posts.create')}}"><i class="fa fa-plus" aria-hidden="true"></i></a></h1>
<table class="data" border="1" >
    <th>tilte</th>
    <th>content</th>
    <th>image</th>
@foreach ($posts as $p)
    <tr>
        <td>
        {{$p->title}}
        </td>
         <td>
        {{$p->content}}
        </td>
         <td>
        {{-- {{$p->content}} --}}
        </td>
        {{-- <td>
            <a href="{{route('posts.delete',['id'=>$p->id])}}"><i class="fa fa-trash" aria-hidden="true"></i></a>
        </td>
        <td>
            <a href="{{route('posts.edit',['id'=>$p->id])}}"><i class="fa fa-pencil" aria-hidden="true"></i></a>
        </td> --}}
    </tr>
@endforeach
</table>
<br>
{{ $posts->links('pagination::bootstrap-4') }}
@endsection
