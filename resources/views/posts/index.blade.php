@extends('layouts.app')

@section('content')
        <h1 class="h1 page-portfolio__h1">Блог</h1>
        <div class="blog">
            @if(is_object($posts))
                @foreach($posts as $post)
                    <div class="blog__post">
                        <a href="{{ route('show_post', ['slug' => $post->slug]) }}" class="blog__title">{{ $post->title }}</a>
                        <div class="blog__author">Автор:<span>{{ $post->owner->name }}</span></div>
                        <div class="blog__date">Дата:<span>{{ $post->updated_at }}</span></div>
                        <div class="blog__text">{{ str_limit($post->body, 50) }}</div>
                    </div>
                    @can('update-post', $post)
                        <a href="{{ route('edit_post', ['id' => $post->id]) }}" class="main-nav__item">Редактировать</a>
                    @endcan
                @endforeach
                {{ $posts->links() }}
            @else
                <div class="blog__text">{{ $posts }}</div>
            @endif
        </div>
    </div>
@endsection