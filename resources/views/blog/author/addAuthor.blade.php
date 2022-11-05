@extends('blog.base')

@section('script')
    <script src="{{ asset('js/scripts-author-create.js') }}"></script>
@endsection


@section('content')
    <section class="header_wrapper">
        <header>
            <h1>Добавить автора.</h1>
        </header>
    </section>
    <section class="author_add">
        <div class="author_add_wrapper">
            <div>
                <label for="author_first_name">Имя:</label>
                <input id="author_first_name" />
            </div>
            <div>
                <label for="author_last_name">Фамилия:</label>
                <input id="author_last_name" />
            </div>
            <div>
                <button>Сохрнить</button>
            </div>
        </div>
    </section>
@endsection
