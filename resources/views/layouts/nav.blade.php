<div id="sidebar-wrapper">
    <ul class="sidebar-nav">
        <li class="sidebar-brand">
            <a href="#">
                Меню
            </a>
        </li>
        <li>
            <a href="/laravel-progect/public/listconfig">Конфигуратор маршрутов</a>
        </li>
        <li>
            <a href="/laravel-progect/public/list">Конфигуратор Гант</a>
        </li>
        <li>
            <a href="/laravel-progect/public/fleet">Конфигуратор расписания</a>
        </li>
        <li>
            <a href="/laravel-progect/public/listfleet">Расписания рейсов</a>
        </li>
        <li>
            <a href="/laravel-progect/public/aircraft">Конфигуратор ВС</a>
        </li>
        <a class="dropdown-item" href="{{ route('logout') }}"
           onclick="event.preventDefault();
                         document.getElementById('logout-form').submit();">
            {{ __('Выход') }}
        </a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>

    </ul>
</div>
