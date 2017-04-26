@extends('layouts.app')

@section('nav')
    <body class="page-blog-open">
        <nav class="main-nav main-nav--content page-blog-open__nav">
            <a href="/">
                <div id="main-nav__logo"></div>
            </a>
            <span class="main-nav__h1">Sergey Gromov</span>
            <span class="main-nav__h2">Front-end developer</span>

            <a href="{{ route('list_posts') }}" class="main-nav__item">blog</a>
            <a href="portfolio.html" class="main-nav__item">portfolio</a>
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
                <a href="{{ route('create_post') }}" class="main-nav__item">Новая статья</a>
            @endcan

            @can('update-post')
                <a href="{{ route('list_drafts') }}" class="main-nav__item">Черновики</a>
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
    <main class="post">
        <h1 class="h1 post__h1">{{ $post->title }}</h1>
        <div class="post__author">Автор:<span>{{ $post->owner->name }}</span></div>
        <time class="post__date" datetime="23.12.2017">Дата:<span>{{ $post->updated_at }}</span></time>
        <a class="main-nav__item" href="{{ route('list_posts') }}">Назад</a>
        <div class="post__text">{{ $post->body }}</div>



        <!-- ==================================
        //
        //		Счетчики
        //
        //==================================-->

        <div class="post__counter">
            <div class="post__counter-views">
                <svg role="img" class="post__counter-icon">
                    <use xlink:href="#eye"></use>
                </svg>
                <span>{{ $post->views }}</span>
            </div>
            <div class="post__counter-comments">
                <svg role="img" class="post__counter-icon">
                    <use xlink:href="#comments"></use>
                </svg>
                <span>12</span>
            </div>
        </div>


        <!-- ==================================
        //
        //		Комментарии
        //
        //==================================-->

        <div class="comments">
            <h2 class="h2 comments__h2">Комментарии</h2>

            <div class="comments__item">
                <div class="comments__main-comments-wrap">
                    <img src="img/comments/anon.png" alt="" class="comments__photo">
                    <header class="comments__header">
                        <div class="comments__name">Анонимный комментарий</div>
                        <div class="comments__controll">
                            <div class="comments__date">23.07.17</div>
                            <button class="comments__reply">
                                <svg role="img" class="comments__reply-icon">
                                    <use xlink:href="#reply"></use>
                                </svg>Ответить
                            </button>
                        </div>
                    </header>
                    <div class="comments__message">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.<pre class="post__block-code"><code class="language-stylus">.post
	display block
	margin 0 auto
	padding 0 1.5rem
	min-height calc(100vh - 8.8rem)

	+media-query(tablet)
		max-width 76rem
	+media-query(desktop)
		max-width 96rem
</code></pre></div>
                </div>

                <div class="comments__item comments__item--sub-comments comments__item--main-reply">
                    <img src="https://pp.userapi.com/c604619/v604619354/34c31/m0JlkuSypzI.jpg" alt="" class="comments__photo">
                    <header class="comments__header">
                        <div class="comments__name">reskwer</div>
                        <div class="comments__controll">
                            <div class="comments__date">23.07.17</div>
                            <button class="comments__reply">
                                <svg role="img" class="comments__reply-icon">
                                    <use xlink:href="#reply"></use>
                                </svg>Ответить
                            </button>
                        </div>
                    </header>
                    <div class="comments__message">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis <code class="language-stylus">if(production)</code> dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.</div>
                </div>

                <div class="comments__item comments__item--sub-comments comments__item--main-reply comments__item--reply">
                    <img src="http://podrobnosti.ua/media/pictures/2016/1/16/thumbs/740x415/di-kaprio-javljaetsja-na-opredelennuju-dolju-russkim_rect_73964f9ad23fe44bdccc31d53472a745.jpg" alt="" class="comments__photo">
                    <header class="comments__header">
                        <div class="comments__name">Дикаприо <span class="comments__to"><b>для</b> reskwer</span></div>
                        <div class="comments__controll">
                            <div class="comments__date">23.07.17</div>
                            <button class="comments__reply">
                                <svg role="img" class="comments__reply-icon">
                                    <use xlink:href="#reply"></use>
                                </svg>Ответить
                            </button>
                        </div>
                    </header>
                    <div class="comments__message">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.
                        <pre class="post__block-code"><code class="language-javascript">
import $ from 'jquery';
import Vivus from 'vivus';

// ===========================================
//
//		Анимация логотипа
//
// ===========================================
$(function() {

	if ($('.main-nav').length !== 0) {

		window.logo = new Vivus('main-nav__logo', {type: 'scenario-sync', duration: 80, start: 'autostart', file: '/img/logo.svg'});

		const thisPageName = location.pathname;
		const itemArray = document.querySelectorAll('.main-nav__item');

		itemArray.forEach(function(item) {
			if (item.getAttribute('href') === thisPageName) {
				item.classList.add('main-nav__item--active');
			}
		});
	}
});
</code></pre>
                    </div>
                </div>

                <div class="comments__item comments__item--sub-comments comments__item--reply">
                    <img src="img/comments/anon.png" alt="" class="comments__photo">
                    <header class="comments__header">
                        <div class="comments__name">Анонимный комментарий</div>
                        <div class="comments__controll">
                            <div class="comments__date">23.07.17</div>
                            <button class="comments__reply">
                                <svg role="img" class="comments__reply-icon">
                                    <use xlink:href="#reply"></use>
                                </svg>Ответить
                            </button>
                        </div>
                    </header>
                    <div class="comments__message">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.</div>
                </div>

                <div class="comments__item comments__item--sub-comments">
                    <img src="img/comments/anon.png" alt="" class="comments__photo">
                    <header class="comments__header">
                        <div class="comments__name">Анонимный комментарий</div>
                        <div class="comments__controll">
                            <div class="comments__date">23.07.17</div>
                            <button class="comments__reply">
                                <svg role="img" class="comments__reply-icon">
                                    <use xlink:href="#reply"></use>
                                </svg>Ответить
                            </button>
                        </div>
                    </header>
                    <div class="comments__message">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.</div>
                </div>

                <div class="comments__item comments__item--sub-comments">
                    <img src="img/comments/anon.png" alt="" class="comments__photo">
                    <header class="comments__header">
                        <div class="comments__name">Анонимный комментарий</div>
                        <div class="comments__controll">
                            <div class="comments__date">23.07.17</div>
                            <button class="comments__reply">
                                <svg role="img" class="comments__reply-icon">
                                    <use xlink:href="#reply"></use>
                                </svg>Ответить
                            </button>
                        </div>
                    </header>
                    <div class="comments__message">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.</div>
                </div>

            </div>

            <div class="comments__item">
                <img src="https://pp.userapi.com/c604619/v604619354/34c31/m0JlkuSypzI.jpg" alt="" class="comments__photo">
                <header class="comments__header">
                    <div class="comments__name">reskwer</div>
                    <div class="comments__controll">
                        <div class="comments__date">23.07.17</div>
                        <button class="comments__reply">
                            <svg role="img" class="comments__reply-icon">
                                <use xlink:href="#reply"></use>
                            </svg>Ответить
                        </button>
                    </div>
                </header>
                <div class="comments__message">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.</div>
            </div>
            <h2 class="h2 comments__h2-editor">Оставить комментарий</h2>

            <!-- ==================================
            //
            //		Добавление комментария / редактор
            //
            //==================================-->

            <div class="editor">
                <img src="https://pp.userapi.com/c604619/v604619354/34c31/m0JlkuSypzI.jpg" alt="" class="editor__photo">
                <div class="editor__wrap">
                    <header class="editor__header">
                        <div class="editor__btn-wrap">
                            <i class="editor__btn editor__btn--bold">
                                <svg role="img" class="editor__svg-icon">
                                    <use xlink:href="#bold"></use>
                                </svg>
                            </i>
                            <i class="editor__btn editor__btn--italic">
                                <svg role="img" class="editor__svg-icon">
                                    <use xlink:href="#italic"></use>
                                </svg>
                            </i>
                            <i class="editor__btn editor__btn--list">
                                <svg role="img" class="editor__svg-icon">
                                    <use xlink:href="#list-ul"></use>
                                </svg>
                            </i>
                            <i class="editor__btn editor__btn--img">
                                <svg role="img" class="editor__svg-icon">
                                    <use xlink:href="#img"></use>
                                </svg>
                            </i>
                            <i class="editor__btn editor__btn--link">
                                <svg role="img" class="editor__svg-icon">
                                    <use xlink:href="#link"></use>
                                </svg>
                            </i>
                            <i class="editor__btn editor__btn--quote">
                                <svg role="img" class="editor__svg-icon">
                                    <use xlink:href="#quote-right"></use>
                                </svg>
                            </i>
                            <i class="editor__btn editor__btn--code">
                                <svg role="img" class="editor__svg-icon">
                                    <use xlink:href="#code"></use>
                                </svg>
                            </i>
                        </div>
                        <div class="editor__auth">
                            <div class="checkbox editor__auth-wrap">
                                <input class="checkbox__input" type="checkbox" name="" id="anon-comments" checked>
                                <label class="checkbox__label" for="anon-comments">Анонимный комментарий</label>
                                <div class="editor__auth-other">
                                    <div class="editor__auth-other-title">Войти с помощью</div>
                                    <svg role="img" class="editor__auth-icon">
                                        <use xlink:href="#vk"></use>
                                    </svg>
                                    <svg role="img" class="editor__auth-icon">
                                        <use xlink:href="#github"></use>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </header>
                    <textarea class="editor__textarea" placeholder="Текст вашего комментария" name=""></textarea>
                </div>
            </div>
        </div>

    </main>
@endsection

@section('footer')
    <footer class="footer">
        <span>© Sergey Gromov | Design by <a href="http://mozart.studio/" class="footer__link">Mozart studio</a> </span>
    </footer>

    <svg xmlns="http://www.w3.org/2000/svg" class="svg-sprite">
        <symbol id="bold" viewBox="596 -596 1792 1792">
            <path d="M1331 858.5c-2.7-31-4.2-58.8-4.5-83.5-.3-24.7-.2-56.8.5-96.5s1-62.2 1-67.5c0-34.7.2-87.3.5-158s.5-123.7.5-159c18.7-6.7 52.3-10 101-10 38.7 0 70.2.7 94.5 2 24.3 1.3 52.3 4.8 84 10.5 31.7 5.7 58.5 14 80.5 25s44.5 26.5 67.5 46.5 43.5 44.7 61.5 74c27.3 44 41 104 41 180 0 223.3-125.3 335-376 335-44 0-90.7-10.7-140-32-5.3-13.3-9.3-35.5-12-66.5zm-3-748.5c0-17.3.2-43.7.5-79s.5-62 .5-80c0-34-1.3-84.7-4-152s-4-117.7-4-151c53.3-8.7 96.7-13 130-13 44 0 85.3 4.7 124 14s74.7 23.8 108 43.5 59.7 47 79 82c19.3 35 29 75.8 29 122.5 0 56-8.5 103.3-25.5 142s-41.8 68.5-74.5 89.5-69.3 35.8-110 44.5c-40.7 8.7-88.3 13-143 13-44.7 0-81-2.3-109-7-.7-15.3-1-38.3-1-69zm-309 946c134-7.3 236.3-11 307-11 29.3 0 73.3 1 132 3s102.7 3 132 3c61.3 0 120-4.7 176-14s110.5-25.5 163.5-48.5 99-51.5 138-85.5 70.2-77.5 93.5-130.5c23.3-53 35-112.8 35-179.5 0-99.3-34.2-182-102.5-248S1939.7 234.3 1837 211c35.3-16 63.3-29.3 84-40s45-25.7 73-45 49.5-38.5 64.5-57.5 28-43 39-72S2114-64.3 2114-99c0-50-9.3-95.8-28-137.5s-43.3-76.5-74-104.5-66.7-51.7-108-71-84.2-33.3-128.5-42c-44.3-8.7-89.8-13-136.5-13-14.7 0-37.2-.2-67.5-.5-30.3-.3-53.2-.5-68.5-.5-87.3 0-211.7 3.2-373 9.5S855.3-448.3 790-447l4 83c3.3.7 13.5 1.7 30.5 3s33.2 2.8 48.5 4.5 31.8 4 49.5 7 32.5 6.7 44.5 11 19.3 9.2 22 14.5c14.7 28.7 22 370.3 22 1025v65.5c0 7-.2 18.3-.5 34s-1.3 28.2-3 37.5-3.5 20.2-5.5 32.5-4.8 23.5-8.5 33.5-7.8 19-12.5 27c-24 10-59.3 19-106 27s-75 13.3-85 16l-2 94c20-.7 97-4.7 231-12z" fill="currentColor"/>
        </symbol>
        <symbol id="code" viewBox="596 -596 1792 1792">
            <path d="M1159 716c0-8.7-3.3-16.3-10-23L756 300l393-393c6.7-6.7 10-14.3 10-23s-3.3-16.3-10-23l-50-50c-6.7-6.7-14.3-10-23-10s-16.3 3.3-23 10L587 277c-6.7 6.7-10 14.3-10 23s3.3 16.3 10 23l466 466c6.7 6.7 14.3 10 23 10s16.3-3.3 23-10l50-50c6.7-6.7 10-14.3 10-23zm578.5-1068.5c-4.3-7.7-10.8-12.8-19.5-15.5l-62-17c-8-2.7-15.8-1.8-23.5 2.5s-12.8 10.8-15.5 19.5L1244 928c-2.7 8.7-1.8 16.8 2.5 24.5 4.3 7.7 10.8 12.8 19.5 15.5l62 17c8 2.7 15.8 1.8 23.5-2.5 7.7-4.3 12.8-10.8 15.5-19.5l373-1291c2.7-8.7 1.8-16.8-2.5-24.5zM2407 300c0-8.7-3.3-16.3-10-23l-466-466c-6.7-6.7-14.3-10-23-10s-16.3 3.3-23 10l-50 50c-6.7 6.7-10 14.3-10 23s3.3 16.3 10 23l393 393-393 393c-6.7 6.7-10 14.3-10 23s3.3 16.3 10 23l50 50c6.7 6.7 14.3 10 23 10s16.3-3.3 23-10l466-466c6.7-6.7 10-14.3 10-23z" fill="currentColor"/>
        </symbol>
        <symbol id="comments" viewBox="596 -596 1792 1792">
            <path d="M2268-149.7c-80-98.3-188.7-176-326-233s-287.3-85.5-450-85.5c-121.3 0-237.3 16.8-348 50.5-110.7 33.7-206 79.2-286 136.5S714.3-155.7 667-76.7s-71 161.8-71 248.5c0 100 30.2 193.7 90.5 281s142.8 160.7 247.5 220c-7.3 26.7-16 52-26 76s-19 43.7-27 59c-8 15.3-18.8 32.3-32.5 51-13.7 18.7-24 31.8-31 39.5-7 7.7-18.5 20.3-34.5 38s-26.3 29.2-31 34.5c-.7.3-3.3 3.3-8 9s-7 8.5-7 8.5l-6 9c-3.3 5-4.8 8.2-4.5 9.5.3 1.3-.3 4.7-2 10s-1.5 9.3.5 12v1c2.7 12 8.5 21.7 17.5 29 9 7.3 19.2 10.3 30.5 9 43.3-5.3 81.3-12.7 114-22 174.7-44.7 328-125.3 460-242 50 5.3 98.3 8 145 8 162.7 0 312.7-28.5 450-85.5s246-134.7 326-233 120-205.5 120-321.5-40-223.1-120-321.5z" fill="currentColor"/>
        </symbol>
        <symbol id="eye" viewBox="596 -596 1792 1792">
            <path d="M1926.5 626.5C1792.8 707.5 1648 748 1492 748s-300.8-40.5-434.5-121.5S812.7 436.7 724 300C825.3 142.7 952.3 25 1105-53c-40.7 69.3-61 144.3-61 225 0 123.3 43.8 228.8 131.5 316.5S1368.7 620 1492 620s228.8-43.8 316.5-131.5S1940 295.3 1940 172c0-80.7-20.3-155.7-61-225 152.7 78 279.7 195.7 381 353-88.7 136.7-199.8 245.5-333.5 326.5zM1526-50c-9.3 9.3-20.7 14-34 14-57.3 0-106.3 20.3-147 61s-61 89.7-61 147c0 13.3-4.7 24.7-14 34s-20.7 14-34 14-24.7-4.7-34-14-14-20.7-14-34c0-83.3 29.8-154.8 89.5-214.5 59.7-59.7 131.2-89.5 214.5-89.5 13.3 0 24.7 4.7 34 14s14 20.7 14 34-4.7 24.7-14 34zm842 281c-93.3-152.7-218.8-275.3-376.5-368S1667.3-276 1492-276s-341.8 46.3-499.5 139S709.3 78.3 616 231c-13.3 23.3-20 46.3-20 69s6.7 45.7 20 69c93.3 152.7 218.8 275.3 376.5 368s324.2 139 499.5 139 341.8-46.2 499.5-138.5S2274.7 522.3 2368 369c13.3-23.3 20-46.3 20-69s-6.7-45.7-20-69z" fill="currentColor"/>
        </symbol>
        <symbol id="github" viewBox="596 -596 1792 1792">
            <path d="M1287.5 474c-8.3-28-22.7-53.3-43-76s-44.5-34-72.5-34-52.2 11.3-72.5 34-34.7 48-43 76-12.5 55.3-12.5 82c0 26.7 4.2 54 12.5 82s22.7 53.3 43 76 44.5 34 72.5 34 52.2-11.3 72.5-34c20.3-22.7 34.7-48 43-76 8.3-28 12.5-55.3 12.5-82 0-26.7-4.2-54-12.5-82zm640 0c-8.3-28-22.7-53.3-43-76s-44.5-34-72.5-34-52.2 11.3-72.5 34-34.7 48-43 76-12.5 55.3-12.5 82c0 26.7 4.2 54 12.5 82s22.7 53.3 43 76 44.5 34 72.5 34 52.2-11.3 72.5-34 34.7-48 43-76 12.5-55.3 12.5-82c0-26.7-4.2-54-12.5-82zM2068 709.5c-21.3 43.7-48.3 78-81 103s-73.3 45-122 60-95.3 24.8-140 29.5c-44.7 4.7-94.3 7-149 7h-168c-54.7 0-104.3-2.3-149-7s-91.3-14.5-140-29.5-89.3-35-122-60-59.7-59.3-81-103-32-94.8-32-153.5c0-80 23-148 69-204s108.3-84 187-84c28.7 0 93.7 7 195 21 47.3 7.3 99.7 11 157 11s109.7-3.7 157-11c102.7-14 167.7-21 195-21 78.7 0 141 28 187 84s69 124 69 204c0 58.7-10.7 109.8-32 153.5zM2188-18c18-54 27-110 27-168 0-77.3-17-150-51-218-71.3 0-134.3 13-189 39s-117 66.3-187 121c-88-21.3-181.3-32-280-32-108 0-211 11.7-309 35-71.3-56-134.3-97.2-189-123.5S892-404 820-404c-34 68-51 140.7-51 218 0 58.7 9 115.3 27 170-90.7 106-136 238-136 396 0 138.7 20.7 249 62 331 22 43.3 50.7 81.7 86 115s75.7 60.3 121 81 91 37.8 137 51.5 96.8 23.7 152.5 30S1323.3 999 1366 1001s90 3 142 3c61.3 0 117-1.5 167-4.5s107.2-10.3 171.5-22 121-27.5 170-47.5 96-48.7 141-86 80.2-81.7 105.5-133c40.7-82.7 61-193 61-331 0-158.7-45.3-291.3-136-398z" fill="currentColor"/>
        </symbol>
        <symbol id="img" viewBox="596 -596 1792 1792">
            <path d="M1116-156c-37.3-37.3-82.7-56-136-56s-98.7 18.7-136 56-56 82.7-56 136 18.7 98.7 56 136 82.7 56 136 56 98.7-18.7 136-56 56-82.7 56-136-18.7-98.7-56-136zm664 104l-512 512-160-160-320 320v192h1408V364L1780-52zm534.5-278.5c6.3 6.3 9.5 13.8 9.5 22.5V908c0 8.7-3.2 16.2-9.5 22.5-6.3 6.3-13.8 9.5-22.5 9.5H692c-8.7 0-16.2-3.2-22.5-9.5S660 916.7 660 908V-308c0-8.7 3.2-16.2 9.5-22.5s13.8-9.5 22.5-9.5h1600c8.7 0 16.2 3.2 22.5 9.5zM2405-421c-31.3-31.3-69-47-113-47H692c-44 0-81.7 15.7-113 47s-47 69-47 113V908c0 44 15.7 81.7 47 113 31.3 31.3 69 47 113 47h1600c44 0 81.7-15.7 113-47 31.3-31.3 47-69 47-113V-308c0-44-15.7-81.7-47-113z" fill="currentColor"/>
        </symbol>
        <symbol id="italic" viewBox="596 -596 1792 1792">
            <path d="M1101 1055c61.3-6 109-9 143-9 45.3 0 114 .7 206 2 18.7 0 47.3 3.3 86 10s67.7 10 87 10c7.3 0 18.2-.5 32.5-1.5s25.2-1.5 32.5-1.5c8.7-36.7 14-69.7 16-99-112-18-173.7-28.3-185-31l-1-18c-.7-10 1.3-29.2 6-57.5s10-56.2 16-83.5 12.7-57.3 20-90c7.3-32.7 11.7-52 13-58 11.3-56 37.2-174.5 77.5-355.5S1720-48.3 1738-147c1.3-8.7 3.5-22.7 6.5-42s5.5-34.5 7.5-45.5 5-24.3 9-40 8.7-29.8 14-42.5c24.7-10 60.8-21.2 108.5-33.5S1965-372.3 1985-379c9.3-33.3 15.7-63 19-89-18.7 1.3-51.5 3.5-98.5 6.5s-87.3 5.3-121 7c-33.7 1.7-66.5 2.5-98.5 2.5-38.7 0-78.8-.8-120.5-2.5s-91.5-4-149.5-7-98-5.2-120-6.5l-19 103c12.7 2 32 3.8 58 5.5s49.2 4.3 69.5 8 38.5 9.8 54.5 18.5v25c.7 23.3-16.7 122.2-52 296.5S1333.7 344 1293 532s-61.3 284.3-62 289c-8.7 44-22.3 77.7-41 101-24 12-61.2 24.5-111.5 37.5S1001 979.7 997 981l-17 85c19.3-1.3 59.7-5 121-11z" fill="currentColor"/>
        </symbol>
        <symbol id="link" viewBox="596 -596 1792 1792">
            <path d="M2088 751l-147 146c-18.7 17.3-41.3 26-68 26-27.3 0-50-9-68-27l-206-207c-18.7-18.7-28-41.3-28-68 0-28 11-52.3 33-73 2 2 8.2 8.3 18.5 19s17.5 17.8 21.5 21.5c4 3.7 10.3 8.7 19 15 8.7 6.3 17.2 10.7 25.5 13 8.3 2.3 17.5 3.5 27.5 3.5 26.7 0 49.3-9.3 68-28 18.7-18.7 28-41.3 28-68 0-10-1.2-19.2-3.5-27.5s-6.7-16.8-13-25.5-11.3-15-15-19-10.8-11.2-21.5-21.5-17-16.5-19-18.5c20-21.3 44-32 72-32 26.7 0 49.3 9.3 68 28l208 208c18.7 18.7 28 41.3 28 68 0 26-9.3 48.3-28 67zM1380 52c-2-2-8.2-8.3-18.5-19S1344 15.2 1340 11.5s-10.3-8.7-19-15c-8.7-6.3-17.2-10.7-25.5-13-8.3-2.3-17.5-3.5-27.5-3.5-26.7 0-49.3 9.3-68 28-18.7 18.7-28 41.3-28 68 0 10 1.2 19.2 3.5 27.5s6.7 16.8 13 25.5 11.3 15 15 19c3.7 4 10.8 11.2 21.5 21.5s17 16.5 19 18.5c-20 20.7-44 31-72 31-27.3 0-50-9-68-27L896-16c-18.7-18.7-28-41.3-28-68 0-26 9.3-48.3 28-67l147-146c19.3-18 42-27 68-27 26.7 0 49.3 9.3 68 28l206 207c18.7 18.7 28 41.3 28 68 0 28-11 52.3-33 73zm844 428l-208-208c-56-56-124-84-204-84-81.3 0-150.7 29.3-208 88l-88-88c58.7-57.3 88-127 88-209 0-80-27.7-147.7-83-203l-206-207c-55.3-56.7-123.3-85-204-85-80 0-147.7 27.7-203 83L761-287c-56.7 55.3-85 123-85 203s28 148 84 204l208 208c56 56 124 84 204 84 81.3 0 150.7-29.3 208-88l88 88c-58.7 57.3-88 127-88 209 0 80 27.7 147.7 83 203l206 207c55.3 56.7 123.3 85 204 85 80 0 147.7-27.7 203-83l147-146c56.7-55.3 85-123 85-203s-28-148-84-204z" fill="currentColor"/>
        </symbol>
        <symbol id="list-ul" viewBox="596 -596 1792 1792">
            <path d="M924 676c-37.3-37.3-82.7-56-136-56s-98.7 18.7-136 56-56 82.7-56 136 18.7 98.7 56 136 82.7 56 136 56 98.7-18.7 136-56 56-82.7 56-136-18.7-98.7-56-136zm0-512c-37.3-37.3-82.7-56-136-56s-98.7 18.7-136 56-56 82.7-56 136 18.7 98.7 56 136 82.7 56 136 56 98.7-18.7 136-56 56-82.7 56-136-18.7-98.7-56-136zm1454.5 529.5c-6.3-6.3-13.8-9.5-22.5-9.5H1140c-8.7 0-16.2 3.2-22.5 9.5-6.3 6.3-9.5 13.8-9.5 22.5v192c0 8.7 3.2 16.2 9.5 22.5 6.3 6.3 13.8 9.5 22.5 9.5h1216c8.7 0 16.2-3.2 22.5-9.5 6.3-6.3 9.5-13.8 9.5-22.5V716c0-8.7-3.2-16.2-9.5-22.5zM924-348c-37.3-37.3-82.7-56-136-56s-98.7 18.7-136 56-56 82.7-56 136 18.7 98.7 56 136 82.7 56 136 56 98.7-18.7 136-56 56-82.7 56-136-18.7-98.7-56-136zm1454.5 529.5c-6.3-6.3-13.8-9.5-22.5-9.5H1140c-8.7 0-16.2 3.2-22.5 9.5-6.3 6.3-9.5 13.8-9.5 22.5v192c0 8.7 3.2 16.2 9.5 22.5 6.3 6.3 13.8 9.5 22.5 9.5h1216c8.7 0 16.2-3.2 22.5-9.5 6.3-6.3 9.5-13.8 9.5-22.5V204c0-8.7-3.2-16.2-9.5-22.5zm0-512c-6.3-6.3-13.8-9.5-22.5-9.5H1140c-8.7 0-16.2 3.2-22.5 9.5-6.3 6.3-9.5 13.8-9.5 22.5v192c0 8.7 3.2 16.2 9.5 22.5 6.3 6.3 13.8 9.5 22.5 9.5h1216c8.7 0 16.2-3.2 22.5-9.5 6.3-6.3 9.5-13.8 9.5-22.5v-192c0-8.7-3.2-16.2-9.5-22.5z" fill="currentColor"/>
        </symbol>
        <symbol id="quote-left" viewBox="596 -596 1792 1792">
            <path d="M1372 292c-37.3-37.3-82.7-56-136-56h-224c-26.7 0-49.3-9.3-68-28-18.7-18.7-28-41.3-28-68v-32c0-70.7 25-131 75-181s110.3-75 181-75h64c17.3 0 32.3-6.3 45-19 12.7-12.7 19-27.7 19-45v-128c0-17.3-6.3-32.3-19-45-12.7-12.7-27.7-19-45-19h-64c-69.3 0-135.5 13.5-198.5 40.5S856-300 810-254 727.5-153.5 700.5-90.5 660 38.7 660 108v704c0 53.3 18.7 98.7 56 136s82.7 56 136 56h384c53.3 0 98.7-18.7 136-56s56-82.7 56-136V428c0-53.3-18.7-98.7-56-136zm896 0c-37.3-37.3-82.7-56-136-56h-224c-26.7 0-49.3-9.3-68-28s-28-41.3-28-68v-32c0-70.7 25-131 75-181s110.3-75 181-75h64c17.3 0 32.3-6.3 45-19 12.7-12.7 19-27.7 19-45v-128c0-17.3-6.3-32.3-19-45-12.7-12.7-27.7-19-45-19h-64c-69.3 0-135.5 13.5-198.5 40.5S1752-300 1706-254s-82.5 100.5-109.5 163.5S1556 38.7 1556 108v704c0 53.3 18.7 98.7 56 136s82.7 56 136 56h384c53.3 0 98.7-18.7 136-56s56-82.7 56-136V428c0-53.3-18.7-98.7-56-136z" fill="currentColor"/>
        </symbol>
        <symbol id="quote-right" viewBox="596 -596 1792 1792">
            <path d="M1372-348c-37.3-37.3-82.7-56-136-56H852c-53.3 0-98.7 18.7-136 56s-56 82.7-56 136v384c0 53.3 18.7 98.7 56 136s82.7 56 136 56h224c26.7 0 49.3 9.3 68 28s28 41.3 28 68v32c0 70.7-25 131-75 181s-110.3 75-181 75h-64c-17.3 0-32.3 6.3-45 19s-19 27.7-19 45v128c0 17.3 6.3 32.3 19 45s27.7 19 45 19h64c69.3 0 135.5-13.5 198.5-40.5S1232 900 1278 854s82.5-100.5 109.5-163.5S1428 561.3 1428 492v-704c0-53.3-18.7-98.7-56-136zm896 0c-37.3-37.3-82.7-56-136-56h-384c-53.3 0-98.7 18.7-136 56s-56 82.7-56 136v384c0 53.3 18.7 98.7 56 136s82.7 56 136 56h224c26.7 0 49.3 9.3 68 28 18.7 18.7 28 41.3 28 68v32c0 70.7-25 131-75 181s-110.3 75-181 75h-64c-17.3 0-32.3 6.3-45 19s-19 27.7-19 45v128c0 17.3 6.3 32.3 19 45s27.7 19 45 19h64c69.3 0 135.5-13.5 198.5-40.5S2128 900 2174 854s82.5-100.5 109.5-163.5S2324 561.3 2324 492v-704c0-53.3-18.7-98.7-56-136z" fill="currentColor"/>
        </symbol>
        <symbol id="reply" viewBox="596 -596 1792 1792">
            <path d="M2335 223c-108-268.7-399.7-403-875-403h-224v-256c0-17.3-6.3-32.3-19-45-12.7-12.7-27.7-19-45-19s-32.3 6.3-45 19L615 31c-12.7 12.7-19 27.7-19 45s6.3 32.3 19 45l512 512c12.7 12.7 27.7 19 45 19s32.3-6.3 45-19c12.7-12.7 19-27.7 19-45V332h224c65.3 0 123.8 2 175.5 6s103 11.2 154 21.5 95.3 24.5 133 42.5 72.8 41.2 105.5 69.5c32.7 28.3 59.3 62 80 101 20.7 39 36.8 85.2 48.5 138.5 11.7 53.3 17.5 113.7 17.5 181 0 36.7-1.7 77.7-5 123 0 4-.8 11.8-2.5 23.5s-2.5 20.5-2.5 26.5c0 10 2.8 18.3 8.5 25 5.7 6.7 13.5 10 23.5 10 10.7 0 20-5.7 28-17 4.7-6 9-13.3 13-22s8.5-18.7 13.5-30 8.5-19.3 10.5-24c84.7-190 127-340.3 127-451 0-132.7-17.7-243.7-53-333z" fill="currentColor"/>
        </symbol>
        <symbol id="search" viewBox="596 -596 1792 1792">
            <path fill="currentColor" d="M1680.5 488.5C1592.8 576.2 1487.3 620 1364 620s-228.8-43.8-316.5-131.5S916 295.3 916 172s43.8-228.8 131.5-316.5S1240.7-276 1364-276s228.8 43.8 316.5 131.5S1812 48.7 1812 172s-43.8 228.8-131.5 316.5zM2287 914l-343-343c82.7-119.3 124-252.3 124-399 0-95.3-18.5-186.5-55.5-273.5s-87-162-150-225-138-113-225-150S1459.3-532 1364-532c-95.3 0-186.5 18.5-273.5 55.5s-162 87-225 150-113 138-150 225S660 76.7 660 172s18.5 186.5 55.5 273.5 87 162 150 225 138 113 225 150S1268.7 876 1364 876c146.7 0 279.7-41.3 399-124l343 342c24 25.3 54 38 90 38 34.7 0 64.7-12.7 90-38 25.3-25.3 38-55.3 38-90 0-35.3-12.3-65.3-37-90z"/>
        </symbol>
        <symbol id="telegram" viewBox="596 -596 1792 1792">
            <path d="M1704 749l-224-165-108 104c-14.7 14.7-29.7 22-45 22l16-228 415-375c7.3-6.7 8.7-11.7 4-15-7.3-5.3-18-3.3-32 6l-513 323-221-69c-16-4.7-26.7-11.2-32-19.5-5.3-8.3-4.5-17.2 2.5-26.5s20.2-17.7 39.5-25l864-333c21.3-8 38.5-5.7 51.5 7s16.5 33.7 10.5 63l-147 693c-11.3 49.3-38.3 62-81 38zm613-797c-47.3-110.7-111-206-191-286s-175.3-143.7-286-191-226.7-71-348-71c-121.3 0-237.3 23.7-348 71-110.7 47.3-206 111-286 191S714.3-158.7 667-48s-71 226.7-71 348 23.7 237.3 71 348 111 206 191 286 175.3 143.7 286 191 226.7 71 348 71c121.3 0 237.3-23.7 348-71s206-111 286-191 143.7-175.3 191-286c47.3-110.7 71-226.7 71-348s-23.7-237.3-71-348z" fill="currentColor"/>
        </symbol>
        <symbol id="vk" viewBox="596 -596 1792 1792">
            <path d="M2443.7-178.8c-4-6-14.3-11.5-31-16.5s-38-5.8-64-2.5l-288 2c-4.7-1.7-11.3-1.5-20 .5s-13 3-13 3l-5 2.5-4 3c-3.3 2-7 5.5-11 10.5s-7.3 10.8-10 17.5c-31.3 80.7-67 155.7-107 225-24.7 41.3-47.3 77.2-68 107.5s-38 52.7-52 67-26.7 25.8-38 34.5-20 12.3-26 11-11.7-2.7-17-4c-9.3-6-16.8-14.2-22.5-24.5s-9.5-23.3-11.5-39-3.2-29.2-3.5-40.5-.2-27.3.5-48 1-34.7 1-42c0-25.3.5-52.8 1.5-82.5s1.8-53.2 2.5-70.5 1-35.7 1-55-1.2-34.5-3.5-45.5-5.8-21.7-10.5-32-11.5-18.3-20.5-24-20.2-10.2-33.5-13.5c-35.3-8-80.3-12.3-135-13-124-1.3-203.7 6.7-239 24-14 7.3-26.7 17.3-38 30-12 14.7-13.7 22.7-5 24 40 6 68.3 20.3 85 43l6 12c4.7 8.7 9.3 24 14 46 4.7 22 7.7 46.3 9 73 3.3 48.7 3.3 90.3 0 125s-6.5 61.7-9.5 81-7.5 35-13.5 47-10 19.3-12 22-3.7 4.3-5 5c-8.7 3.3-17.7 5-27 5s-20.7-4.7-34-14-27.2-22.2-41.5-38.5-30.5-39.2-48.5-68.5-36.7-64-56-104l-16-29c-10-18.7-23.7-45.8-41-81.5s-32.7-70.2-46-103.5c-5.3-14-13.3-24.7-24-32l-5-3c-3.3-2.7-8.7-5.5-16-8.5-7.3-3-15-5.2-23-6.5l-274 2c-28 0-47 6.3-57 19l-4 6c-2 3.3-3 8.7-3 16s2 16.3 6 27c40 94 83.5 184.7 130.5 272s87.8 157.7 122.5 211c34.7 53.3 70 103.7 106 151s59.8 77.7 71.5 91c11.7 13.3 20.8 23.3 27.5 30l25 24c16 16 39.5 35.2 70.5 57.5s65.3 44.3 103 66c37.7 21.7 81.5 39.3 131.5 53s98.7 19.2 146 16.5h115c23.3-2 41-9.3 53-22l4-5c2.7-4 5.2-10.2 7.5-18.5s3.5-17.5 3.5-27.5c-.7-28.7 1.5-54.5 6.5-77.5s10.7-40.3 17-52 13.5-21.5 21.5-29.5 13.7-12.8 17-14.5 6-2.8 8-3.5c16-5.3 34.8-.2 56.5 15.5s42 35 61 58 41.8 48.8 68.5 77.5 50 50 70 64l20 12c13.3 8 30.7 15.3 52 22 21.3 6.7 40 8.3 56 5l256-4c25.3 0 45-4.2 59-12.5s22.3-17.5 25-27.5c2.7-10 2.8-21.3.5-34s-4.7-21.5-7-26.5-4.5-9.2-6.5-12.5c-33.3-60-97-133.7-191-221l-2-2-1-1-1-1h-1c-42.7-40.7-69.7-68-81-82-20.7-26.7-25.3-53.7-14-81 8-20.7 38-64.3 90-131 27.3-35.3 49-63.7 65-85 115.3-153.3 165.3-251.3 150-294l-6-10z" fill="currentColor"/>
        </symbol>
    </svg>
@endsection