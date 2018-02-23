@extends('layouts.app')

@section('content')

<form action="{{ route('sites.save') }}" method="POST">
    <input type="hidden" name="_token" value="{{csrf_token()}}"/>
    <div class="form-group">
        <input type="text" name="title" class="form-control" placeholder="Podaj tytuł">
    </div>

    <div class="form-group">
        <textarea name="description" class="form-control" placeholder="Podaj treść"></textarea>
    </div>

    <div class="form-group">
        <button class="btn btn-primary">Zapisz</button>
    </div>
</form>

@endsection