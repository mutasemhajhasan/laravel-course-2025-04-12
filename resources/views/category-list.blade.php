@extends('app')
@section('content')
<h1>Cateogries</h1><a href="{{route('categories.create')}}">Create</a>
<table>
    <th>Name</th>
@foreach ($categories as $cat)
    <tr>
        <td>
        {{$cat->name}}
        </td>
    </tr>
@endforeach
</table>
@endsection
