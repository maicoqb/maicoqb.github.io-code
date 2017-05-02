@extends('_layouts.master')

@section('body')
    <div class="post">
        <h1 class="post-title">{{ $page->title }}</h1>
        <span class="post-date">{{ $page->date_formated() }}</span>
        @yield('content')
    </div>

    @if(($related_posts = $page->get_related($posts)) && $related_posts->count())
        <div class="related">
            <h2>Posts Relacionados</h2>

            <ul class="related-posts">
                @foreach ($related_posts as $related_post)
                <li>
                    <h3>
                    <a href="{{ $page->site->baseurl }}{{ $related_post->getUrl() }}">
                        {{ $related_post->title }}
                        <small>{{ $related_post->date_formated() }}</small>
                    </a>
                    </h3>
                </li>
                @endforeach
            </ul>
        </div>
    @endif
@endsection