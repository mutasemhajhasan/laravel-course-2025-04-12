@extends('admin')
@section('content')
<h1>Cateogries <a href="{{route('categories.create')}}"><i class="fa fa-plus" aria-hidden="true"></i></a></h1>
<table class="data" border="1" >
    <th>Name</th>
@foreach ($categories as $cat)
    <tr>
        <td>
        {{$cat->name}}
        </td>
        <td>
            <a href="{{route('categories.delete',['id'=>$cat->id])}}"><i class="fa fa-trash" aria-hidden="true"></i></a>
        </td>
        <td>
            <a href="{{route('categories.edit',['id'=>$cat->id])}}"><i class="fa fa-pencil" aria-hidden="true"></i></a>
        </td>
    </tr>
@endforeach
</table>
<br>
{{ $categories->links('pagination::bootstrap-4') }}
@endsection
