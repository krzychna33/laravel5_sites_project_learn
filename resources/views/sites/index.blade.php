@extends('layouts.app')

@section('content')

<table class="table table-hover">

    @foreach($sites as $site)
    <tr>
        <td>{{$site->title}}</td>
        <td>{{$site->description}}</td>
    </tr>
    @endforeach

</table>
@endsection