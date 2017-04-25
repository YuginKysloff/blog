@extends('layouts.app')

<body>
    <div class="page-wrap">

        @section('content')
            <div class="blog">
                <div class="blog__post">
                    <a href="blog-open.html" class="blog__title">Сила цветовой CSS-функции rgba()</a>
                    <div class="blog__author">Автор:<span>С. Громов</span></div>
                    <div class="blog__date">Дата:<span>23.12.2017</span></div>
                    <div class="blog__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas, consequuntur alias expedita accusamus autem voluptatum modi facilis blanditiis? Natus, consequuntur. Suscipit aspernatur iusto ex placeat cum ipsam nemo voluptatem aliquid.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas, consequuntur alias expedita accusamus autem voluptatum modi facilis blanditiis? Natus, consequuntur. Suscipit aspernatur iusto ex placeat cum ipsam nemo voluptatem aliquid.</div>
                </div>
                <div class="blog__post">
                    <a href="blog-open.html" class="blog__title">Сила цветовой CSS-функции rgba()</a>
                    <div class="blog__author">Автор:<span>С. Громов</span></div>
                    <div class="blog__date">Дата:<span>23.12.2017</span></div>
                    <div class="blog__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas, consequuntur alias expedita accusamus autem voluptatum modi facilis blanditiis? Natus, consequuntur. Suscipit aspernatur iusto ex placeat cum ipsam nemo voluptatem aliquid.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas, consequuntur alias expedita accusamus autem voluptatum modi facilis blanditiis? Natus, consequuntur. Suscipit aspernatur iusto ex placeat cum ipsam nemo voluptatem aliquid.</div>
                </div>
                <div class="blog__post">
                    <a href="blog-open.html" class="blog__title">Сила цветовой CSS-функции rgba()</a>
                    <div class="blog__author">Автор:<span>С. Громов</span></div>
                    <div class="blog__date">Дата:<span>23.12.2017</span></div>
                    <div class="blog__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas, consequuntur alias expedita accusamus autem voluptatum modi facilis blanditiis? Natus, consequuntur. Suscipit aspernatur iusto ex placeat cum ipsam nemo voluptatem aliquid.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas, consequuntur alias expedita accusamus autem voluptatum modi facilis blanditiis? Natus, consequuntur. Suscipit aspernatur iusto ex placeat cum ipsam nemo voluptatem aliquid.</div>
                </div>
                <div class="blog__post">
                    <a href="blog-open.html" class="blog__title">Сила цветовой CSS-функции rgba()</a>
                    <div class="blog__author">Автор:<span>С. Громов</span></div>
                    <div class="blog__date">Дата:<span>23.12.2017</span></div>
                    <div class="blog__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas, consequuntur alias expedita accusamus autem voluptatum modi facilis blanditiis? Natus, consequuntur. Suscipit aspernatur iusto ex placeat cum ipsam nemo voluptatem aliquid.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas, consequuntur alias expedita accusamus autem voluptatum modi facilis blanditiis? Natus, consequuntur. Suscipit aspernatur iusto ex placeat cum ipsam nemo voluptatem aliquid.</div>
                </div>
                <div class="blog__post">
                    <a href="blog-open.html" class="blog__title">Сила цветовой CSS-функции rgba()</a>
                    <div class="blog__author">Автор:<span>С. Громов</span></div>
                    <div class="blog__date">Дата:<span>23.12.2017</span></div>
                    <div class="blog__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas, consequuntur alias expedita accusamus autem voluptatum modi facilis blanditiis? Natus, consequuntur. Suscipit aspernatur iusto ex placeat cum ipsam nemo voluptatem aliquid.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas, consequuntur alias expedita accusamus autem voluptatum modi facilis blanditiis? Natus, consequuntur. Suscipit aspernatur iusto ex placeat cum ipsam nemo voluptatem aliquid.</div>
                </div>
                <div class="pagination">
                    <a href="javascript:void(0)" class="pagination__item pagination__item--left"></a>
                    <a href="javascript:void(0)" class="pagination__item">1</a>
                    <a href="javascript:void(0)" class="pagination__item pagination__item--active">2</a>
                    <a href="javascript:void(0)" class="pagination__item">3</a>
                    <a href="javascript:void(0)" class="pagination__item">...</a>
                    <a href="javascript:void(0)" class="pagination__item">5</a>
                    <a href="javascript:void(0)" class="pagination__item pagination__item--right"></a>
                </div>
            </div>
        @endsection

    </div>


{{--@section('content')--}}
    {{--<div class="container">--}}
        {{--<div class="row">--}}
            {{--<div class="col-md-8 col-md-offset-2">--}}
                {{--<div class="panel panel-default">--}}
                    {{--<div class="panel-heading">--}}
                        {{--Posts--}}
                        {{--@can('create-post')--}}
                            {{--<a class="pull-right btn btn-sm btn-primary" href="{{ route('create_post') }}">New</a>--}}
                        {{--@endcan--}}
                    {{--</div>--}}

                    {{--<div class="panel-body">--}}
                        {{--<div class="row">--}}
                            {{--@foreach($posts as $post)--}}
                                {{--<div class="col-sm-6 col-md-4">--}}
                                    {{--<div class="thumbnail">--}}
                                        {{--<div class="caption">--}}
                                            {{--<h3><a href="{{ route('show_post', ['id' => $post->id]) }}">{{ $post->title }}</a></h3>--}}
                                            {{--<p>{{ str_limit($post->body, 50) }}</p>--}}
                                            {{--@can('update-post', $post)--}}
                                                {{--<p>--}}
                                                    {{--<a href="{{ route('edit_post', ['id' => $post->id]) }}" class="btn btn-sm btn-default" role="button">Edit</a>--}}
                                                {{--</p>--}}
                                            {{--@endcan--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--@endforeach--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
{{--@endsection--}}
