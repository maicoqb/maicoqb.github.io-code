<div class="post">
    <h1 class="post-title">
        <a href="{{ $page->site->baseurl }}{{ $post->getUrl() }}">
            {{ $post->title }}
        </a>
    </h1>

    <span class="post-date">{{$post->date_formated()}}</span>

    {!! $post->first_hundread_words() !!}
</div>