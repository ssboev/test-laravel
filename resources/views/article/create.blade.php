@extends('article.master')
@section('title','Create Articles')
@section('content')
    <div class="article-form">
        <form action="{{route('article.store')}}" method="POST">
            @csrf
            @method('POST')
            <ul class="form__list">
                <li class="form__item">
                    <label class='form__label' for="title">Title</label>
                    <input class='form__input' id='title' name='title' type="text">
                </li>
                <li class="form__item">
                    <label class='form__label' for="text">Text</label>
                    <textarea class="form__input" name="text"></textarea>
                </li>
                <li class="form__item">
                    <label class='form__label' for="authors">Authors</label>
                    <select class='form__input' id='authors' name="authors[]" type="text" multiple>
                        @foreach($users as $user)
                            <option value="{{$user->id}}">{{$user->nickname}}</option>
                        @endforeach
                    </select>
                </li>
            </ul>
            <button type="submit">Create</button>
        </form>
    </div>
@endsection
