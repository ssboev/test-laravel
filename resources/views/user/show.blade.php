@extends('user.master')
@section('title','Show User')

@section('content')
    <div class="wrapper">
        <main class="main-content">
            <div class="my-profile">
                <h2 class="heading">Мой профиль</h2>
                <div class="profile">
                    <div class="avatar">
                        <img src="{{asset($user->avatar)}}" alt="Аватар" class="avatar__pic">
                    </div>
                    <div class="information">
                        <div class="nickname">{{$user->nickname}}</div>
                        <div class="user-name">
                            <span class="name">{{$user->name}}</span>
                            <span class="surname">{{$user->surname}}</span>
                        </div>
                        <a href='tel:{{$user->phone}}' class="phone">{{$user->phone}}</a>
                    </div>
                </div>
            </div>
            <div class='edit-profile'>
                <h2 class="heading">Редактировать профиль</h2>
                <form class='form' id='form' method='POST' enctype='multipart/form-data'>
                    <ul class="form__list">
                        <li class="form__item">
                            <label class='form__label' for="nickname">Никнейм:</label>
                            <input class='form__input' id='nickname' type="text" value="{{$user->nickname}}" disabled>
                        </li>
                        <li class="form__item">
                            <label class='form__label' for="name">Имя:</label>
                            <input class='form__input' id='name' type="text" value="{{$user->name}}" disabled>
                        </li>
                        <li class="form__item">
                            <label class='form__label' for="surname">Фамилия:</label>
                            <input class='form__input' id='surname' type="text" value="{{$user->surname}}" disabled>
                        </li>
                        <li class="form__item">
                            <label class='form__inline-label' for="avatar">Аватар:</label>
                            <input class='form__inline-input' id='avatar' type="file" value='image/jpeg,image/png' value="{{$user->avatar}}" disabled>
                        </li>
                        <li class="form__item">
                            <label class='form__label' for="phone">Телефон:</label>
                            <input class='form__input' id='phone' type="text" value="{{$user->phone}}" disabled>
                        </li>
                        <li class="form__item">
                            <div class="form__title">Пол:</div>
                            <label class='form__inline-label' for="male">Мужской</label>
                            <input class='form__inline-input' name='sex' id='male' type="radio" disabled checked="{{$user->sex === 'male'}}">
                            <label class='form__inline-label' for="female">Женский</label>
                            <input class='form__inline-input' name='sex' id='female' type="radio"disabled checked="{{$user->sex === 'female'}}">
                        </li>
                        <li class="form__item">
                            <label class='form__inline-label' for="showPhone">Я согласен получать email-рассылку</label>
                            <input class='form__inline-input' id='showPhone' type="checkbox" disabled checked="{{$user->showPhone}}">
                        </li>
                        <li class="form__item">
                            <button class='form__button' type="submit">Отправить</button>
                        </li>
                    </ul>
                </form>
            </div>
        </main>
    </div>
@endsection
