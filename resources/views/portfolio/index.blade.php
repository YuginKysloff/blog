@extends('layouts.app')

@section('nav')
    <body class="page-portfolio">
        <div class="page-wrap">
            <nav class="main-nav main-nav--content page-portfolio__nav">
                <a href="/">
                    <div id="main-nav__logo"></div>
                </a>
                <span class="main-nav__h1">Sergey Gromov</span>
                <span class="main-nav__h2">Front-end developer</span>

                <a href="{{ route('list_posts') }}" class="main-nav__item">blog</a>
                <a href="{{ route('list_works') }}" class="main-nav__item">portfolio</a>
                <a href="https://vk.com/reskwer" class="main-nav__item">
                    <svg role="img" class="main-nav__item-icon">
                        <use xlink:href="#vk"></use>
                    </svg>
                    <span>reskwer</span>
                </a>
                <a href="https://telegram.me/reskwer" class="main-nav__item">
                    <svg role="img" class="main-nav__item-icon">
                        <use xlink:href="#telegram"></use>
                    </svg>
                    <span>reskwer</span>
                </a>

                {{--Admin links--}}
                @can('create-post')
                    <a href="{{ route('create_work') }}" class="main-nav__item">Новая работа</a>
                @endcan

                @can('update-post')
                    <a href="{{ route('list_portfolio_drafts') }}" class="main-nav__item">Черновики</a>
                @endcan

            <!-- Authentication Links -->
                @if (Auth::guest())
                    <a href="{{ route('login') }}" class="main-nav__item">Вход</a>
                    <a href="{{ route('register') }}" class="main-nav__item">Регистрация</a>
                @else
                    <a href="{{ route('logout') }}" class="main-nav__item" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        Выход
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
                @endif
            </nav>
@endsection

@section('content')
        <h1 class="h1 page-portfolio__h1">Портфолио</h1>
        <div class="portfolio">
            @if(is_object($works))
                @foreach($works as $work)
                    <div class="portfolio__item">
                        <h2 class="h2 portfolio__title">{{ $work->title }}</h2>
                        <img src="/img/1.png" alt="{{ $work->title }}" class="portfolio__image">
                        <div class="portfolio__stec-wrap">
                            <div class="portfolio__stec">
                                @foreach($work->skills as $skill)
                                    <div class="portfolio__type">{{ $skill->name }}:<span class="portfolio__value">{{ $skill->value }}</span></div>
                                @endforeach
                            </div>
                            <div class="portfolio__btn-wrap">
                                <a href="{{ $work->github_link }}" class="portfolio__btn">Просмотреть на Github</a>
                                <a href="{{ $work->site_link }}" class="portfolio__btn">Демо</a>
                            </div>
                        </div>
                        <p class="portfolio__description">{{ $work->description }}</p>
                    </div>
                @endforeach
                {{ $works->links() }}
            @else
                <div class="blog__text">{{ $works }}</div>
            @endif
        </div>
    </div>
@endsection