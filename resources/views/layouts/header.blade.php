<header class="header">
    <div class="container header-container">
        <a href="/" class="logo">
            <img class="logo-zoya logotype" src="/img/zoya666.svg" alt="ЗОЯ logo">
        </a>
        <button class="burger btn-reset" type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="burger-line"></span>
            <span class="burger-line"></span>
            <span class="burger-line"></span>
        </button>
    </div>

    <div class="collapse" id="navbarToggleExternalContent">
        <div class="bg-dark p-4">
            <h5 class="text-white h4">Навигация по сайту</h5>
            <div class="menu-item">
                <a href="/">Главная</a>
            </div>
            <div class="menu-item">
                <a href="{{route('index')}}#services">Услуги</a>
            </div>
            <div class="menu-item">
                <a href="{{route('index')}}#prices">Цены</a>
            </div>
            <div class="menu-item">
                <a href="{{route('index')}}#about-us">О Нас</a>
            </div>
            <div class="menu-item">
                <a href="{{route('index')}}#contacts">Контакты</a>
            </div>
        </div>
    </div>
</header>
