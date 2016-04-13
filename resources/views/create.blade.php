@extends('layouts.app')
@section('content')
    <div class="container">
        <form class="form-horizontal" method="POST" action='/store'>
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <label class="control-label">Название статьи</label>
            <input type="text" class="form-control"  name="title">
            <label class="control-label">Статья</label>
            <textarea class="form-control" name="text"></textarea>
            <input class="btn btn-primary" type="submit" value="Создать">
        </form>
    </div>
@endsection