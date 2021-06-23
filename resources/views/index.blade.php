@extends('layouts.layout')

@section('content')
    <section class="hero">
        <div class="container">
            <div class="hero-content">
                <span class="hero-subtitle">Центр красоты "ЗОЯ"</span>
                <h1 class="hero-title">Получи все виды услуг в&nbsp;нашем центре</h1>
                <p class="hero-descr">Наши услуги доступны для всех слоёв населения и&nbsp;для разных возрастов. Мы&nbsp;не&nbsp;ориентируемся на&nbsp;молодёжь или на&nbsp;средний возраст, наши услуги могут получить все, кто хочет изменений в&nbsp;своей внешности.</p>

            </div>
        </div>
    </section>
    <section class="services">
        <a id="services"></a>
        <div class="container">
            <h2 class="site-title services-title">
                В&nbsp;нашем центре красоты именно клиент является не&nbsp;только главным объектом внимания всей команды, но&nbsp;и&nbsp;вдохновением для творчества, и&nbsp;нашим главным произведением искусства.
            </h2>
            <ul class="services-list list-reset">
                <li class="services-item">
                    <h3 class="services-subtitle">Парикмахерские услуги</h3>
                    <p class="services-descr">
                        Создаём образы от&nbsp;классических до&nbsp;ультрамодных, адаптируясь к&nbsp;вашей структуре волос. Парикмахера центра красоты &laquo;ЗОЯ&raquo; сравнивают с&nbsp;портным, который выполняет стрижку &laquo;по&nbsp;индивидуальной выкройке&raquo;. Стрижка в&nbsp;&laquo;ЗОЯ&raquo;&nbsp;&mdash; персонализированный подход к&nbsp;каждому клиенту, учитывая стиль и&nbsp;индивидуальные черты лица. На&nbsp;консультации мастер предложит и&nbsp;обсудит с&nbsp;вами стрижку или цвет.
                    </p>
                    <a href="{{ route('signup', ['service_type' => 0]) }}" class="services-link link">Записаться</a>
                </li>
                <li class="services-item">
                    <h3 class="services-subtitle"> <br>Косметология</h3>
                    <p class="services-descr">
                        В&nbsp;центре красоты &laquo;ЗОЯ&raquo; вам предложат современные косметологические услуги&nbsp;&mdash; методы классической, эстетической, инъекционной и&nbsp;аппаратной косметологии. На&nbsp;первой консультации косметолог подберет оптимальный уход для решения проблем Вашей кожи, рекомендует действующие процедуры, существующие на&nbsp;сегодняшний день в&nbsp;мировой косметологии.
                    </p>
                    <a href="{{ route('signup', ['service_type' => 1]) }}" class="services-link link">Записаться</a>
                </li>
                <li class="services-item">
                    <h3 class="services-subtitle">Ногтевой сервис</h3>
                    <p class="services-descr">
                        Мастера ногтевого сервиса создадут маникюр и&nbsp;педикюр, который идеально впишется в&nbsp;образ. В&nbsp;центре красоты посетителей ждут классические и&nbsp;аппаратные технологии и&nbsp;необычайно изысканное декоративное покрытие. Инструменты стерилизуются специально для каждого клиента, максимально широко применяются одноразовые материалы.
                    </p>
                    <a href="{{ route('signup', ['service_type' => 2]) }}" class="services-link link">Записаться</a>
                </li>
                <li class="services-item">
                    <h3 class="services-subtitle"> <br>Депиляция</h3>
                    <p class="services-descr">
                        Согласитесь что гладкая кожа без волос более притягательна для прикосновений. Она всегда выглядит красиво и&nbsp;эстетично. Специалисты нашего центра помогут вам добиться наиболее гладкого результата.
                    </p>
                    <a href="{{ route('signup', ['service_type' => 3]) }}" class="services-link link">Записаться</a>
                </li>
            </ul>
        </div>
    </section>
    <section class="get-story">
        <a id="about-us"></a>
        <div class="container">
            <h2 class="get-story-title">
                О&nbsp;центре красоты &laquo;ЗОЯ&raquo;
            </h2>
            <div class="clearfix">
                <img src="/img/zoya_vhod.JPG" class="col-md-6 float-md-end mb-3 ms-md-3" alt="zoya">
                <p class="g-story-descr">Начиналось все со&nbsp;школы парикмахерского искусства и&nbsp;в&nbsp;дальнейшем мы&nbsp;задумались о&nbsp;том, чтобы открыть свой салон с&nbsp;целью практического обучения наших учеников. Сейчас в&nbsp;нашем центре работают 6&nbsp;мастеров высокого профиля со&nbsp;стажем от&nbsp;2х&nbsp;до&nbsp;10&nbsp;лет.На&nbsp;протяжении 4х&nbsp;лет мы&nbsp;открываем двери нашего салона красоты для того, чтобы подарить нашим клиентам удовольствие быть красивыми!</p>
            </div>
        </div>
    </section>
    <section class="price">
        <a id="prices"></a>
        <div class="container">
            <h2 class="price-title">Цены</h2>
            <div class="table-responsive">
                <table class="table text-center">
                    <tbody>
                    <tr>
                        <th scope="row" class="text-start">Стрижка женская</th>
                        <td>
                            <p class="bi">400 рублей</p>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row" class="text-start">Укладки женские</th>
                        <td>
                            <p class="bi">от 150 до 1300 рублей</p>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row" class="text-start">Стрижка мужская</th>
                        <td>
                            <p class="bi">350 рублей</p>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row" class="text-start">Классический маникюр</th>
                        <td>
                            <p class="bi">250 рублей</p>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row" class="text-start">Наращивание ногтей</th>
                        <td>
                            <p class="bi">1300 рублей</p>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row" class="text-start">Эпиляция</th>
                        <td>
                            <p class="bi">от 200 до 650 рублей</p>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row" class="text-start">Контурная пластика</th>
                        <td>
                            <p class="bi">от 3000 рублей</p>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row" class="text-start">Жидкие нити</th>
                        <td>
                            <p class="bi">от 3000 рублей</p>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row" class="text-start">Коррекция губ</th>
                        <td>
                            <p class="bi">от 3000 рублей</p>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row" class="text-start">Карбоновый пилинг+лифтинг+уход</th>
                        <td>
                            <p class="bi">от 1800 рублей</p>
                        </td>
                    </tr>

                    </tbody>
                </table>
            </div>

        </div>
    </section>
@endsection
