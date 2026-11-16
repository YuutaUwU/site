@extends('layouts.app')

@section('content')
<div class="container">
    <div class="d-flex justify-content-center align-content-center" style="width: 64rem; border: 1px solid grey; border-radius: 10px">

        <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A6b66280b83cdf1611d547ce5796e33a51a5b5e1228da0a1fe5beb70106635ee7&width=759&height=543&lang=ru_RU&scroll=true"></script>

        <div class="card-body" style="margin-left: 10px">
            <h5 class="card-title">Адрес</h5>
            <p class="card-text">улица пушкина дом колотушкина.</p>

            <h5 class="card-title">Номер телефона</h5>
            <p class="card-text">7 000 666 52 67</p>

            <h5 class="card-title">E-mail</h5>
            <p class="card-text">qwerty@mail.ru</p>
        </div>
    </div>
</div>
@endsection

