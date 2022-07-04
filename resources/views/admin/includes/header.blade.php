@section('header')

    <div class="adminPanel__nav">
        <div class="logo"><img src="{{ asset('images/logo.svg') }}" alt=""></div>
        <ul class="a-menu">
            <li class="a-menu-li">
                <div class="a-menu-name">
                    <div class="a-icon">
                        <img src="{{ asset('images/name-icon1.svg') }}" alt="">
                    </div>
                    Курьеры
                </div>
                <ul class="a-menu-inside">
                    <li><a href="#" class="a-menu-link">Список курьеров</a></li>
                    <li><a href="#" class="a-menu-link">Начисленная оплата</a></li>
                </ul>
            </li>
            <li class="a-menu-li">
                <div class="a-menu-name">
                    <div class="a-icon">
                        <img src="{{ asset('images/name-icon2.svg') }}" alt="">
                    </div>
                    Другой пункт
                </div>
                <ul class="a-menu-inside">
                    <li><a href="#" class="a-menu-link">пункт 1</a></li>
                    <li><a href="#" class="a-menu-link">пункт 2</a></li>
                </ul>
            </li>
            <li class="a-menu-li">
                <div class="a-menu-name">
                    <div class="a-icon">
                        <img src="{{ asset('images/name-icon3.svg') }}" alt="">
                    </div>
                    Пункт панели
                </div>
                <ul class="a-menu-inside">
                    <li><a href="#" class="a-menu-link">Пункт панели 1</a></li>
                    <li><a href="#" class="a-menu-link">Пункт панели 2</a></li>
                </ul>
            </li>
            <li class="a-menu-li">
                <div class="a-menu-name">
                    <div class="a-icon">
                        <img src="{{ asset('images/name-icon4.svg') }}" alt="">
                    </div>
                    Пример пункта
                </div>
                <ul class="a-menu-inside">
                    <li><a href="#" class="a-menu-link">Пример 1</a></li>
                    <li><a href="#" class="a-menu-link">Пример 2</a></li>
                </ul>
            </li>
        </ul>
    </div>

@stop
