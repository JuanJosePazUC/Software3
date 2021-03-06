@extends('dashboard.master')
@section('content')
    <div class="form-group">
        <input readonly class="form-control" type="text" name="category_name" id="category_name"
            placeholder="Categoria" value="{{ $category->category_name }}">
    </div>
    <div class="form-group">
        <textarea readonly class="form-control" name="content_publication" id="content_publication" cols="30" rows="10"
            placeholder="Descripcion">
                {{ $category->content_category }}
            </textarea>
    </div>
    <div>
        <a class="btn btn-danger btn-sm" href="{{ URL::previous() }}">Aceptar</a>
    </div>
@endsection
