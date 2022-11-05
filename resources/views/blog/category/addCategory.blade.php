@extends('blog.base')

@section('script')
    <script src="{{ asset('js/scripts-category-create.js') }}"></script>
@endsection


@section('content')
    <section class="header_wrapper">
        <header>
            <h1>Создать категорию.</h1>
        </header>
    </section>
    <section class="category_add">
        <div>
            <label for="category_name">Имя новая категория:</label>
            <input id="category_name" />
            <button>Сохрнить</button>
        </div>
    </section>
@endsection
