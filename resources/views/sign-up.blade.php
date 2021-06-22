@extends('layouts.layout')

@section('content')
    <section class="signup">
        <div class="container">
            @if (session('success'))
            <div class="alert alert-success">
                Ваша заявка успешно принята. <br>
                Ожидайте звонка администратора для подтверждения записи.
            </div>
            @endif

            <h1>
                Запись на услугу
            </h1>

            <form action="{{ route('signup_create') }}" method="POST">
                @csrf
                <div class="field">
                    <label for="name">
                        Ваше имя
                    </label>
                    <input id="name" name="name" required>
                </div>

                <div class="field">
                    <label for="phone">
                        Телефон
                    </label>
                    <input id="phone" name="phone" required>
                </div>

                <div class="field">
                    <legend>Услуги</legend>
                    <div class="item">
                        <input type="checkbox"
                               id="service-0"
                               name="service"
                               value="0" @if ($service_type == 0) checked @endif>
                        <label for="service-0">Парикмахерские услуги</label>
                    </div>
                    <div class="item">
                        <input type="checkbox"
                               id="service-1"
                               name="service"
                               value="0" @if ($service_type == 1) checked @endif>
                        <label for="service-1">Косметология</label>
                    </div>
                    <div class="item">
                        <input type="checkbox"
                               id="service-2"
                               name="service"
                               value="0" @if ($service_type == 2) checked @endif>
                        <label for="service-2">Ногтевой сервис</label>
                    </div>
                    <div class="item">
                        <input type="checkbox"
                               id="service-3"
                               name="service"
                               value="0" @if ($service_type == 3) checked @endif>
                        <label for="service-3">Депиляция</label>
                    </div>
                </div>

                <div class="field">
                    <label for="datetime">
                        Желаемая дата и вермя
                    </label>
                    <input id="datetime" name="datetime" type="datetime-local" required>
                </div>

                <button type="submit" class="signup-btn">Записаться</button>
            </form>
        </div>
    </section>
@endsection
