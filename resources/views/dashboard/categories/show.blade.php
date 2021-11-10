@extends('dashboard.master')
@section('content')
    <div class="form-group">
        <input readonly class="form-control" type="text" name="category" id="category"
            placeholder="Categoria" value="{{ $category->category_name }}">
    </div>
    <div class="form-group">
        <textarea readonly class="form-control" name="content_category" id="content_category" cols="30" rows="10"
            placeholder="Contenido de la publicacion">
                {{ $category->content_category }}
            </textarea>
    </div>
    <div>
        <button class="btn btn-danger btn-sm" href="{{ URL::previous() }}">Aceptar</button>
    </div>
@endsection
