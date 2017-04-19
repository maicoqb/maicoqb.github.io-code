<!-- Target for toggling the sidebar `.sidebar-checkbox` is for regular
     styles, `#sidebar-checkbox` for behavior. -->
<input type="checkbox" class="sidebar-checkbox" id="sidebar-checkbox">

<!-- Toggleable sidebar -->
<div class="sidebar" id="sidebar">
    <div class="sidebar-item">
        <p>{!! $page->site->description !!}</p>
    </div>

    <nav class="sidebar-nav">
        <a class="sidebar-nav-item {{ $page->title == 'Home' ? 'active' : '' }}" href="{{ $page->site->baseurl }}/">
            Home
        </a>

        @foreach ($menu as $item)
            <a class="sidebar-nav-item {{ $page->getUrl() == $item->getUrl() ? 'active' : '' }}" 
                href="{{ $page->site->baseurl }}{{ $item->getUrl() }}">
                {{ $item->title }}
            </a>
        @endforeach

        <a class="sidebar-nav-item" href="{{ $page->author->github }}">GitHub</a>

        <a class="sidebar-nav-item" href="mailto:{{ $page->author->email }}">E-Mail</a>
    </nav>

    <div class="sidebar-item">
        <p> &copy; {{ date('Y') }}. {{ $page->author->name }}. </p>
        <p> Powered by <a href='http://maicoqb.github.io/jigsaw-piece/' target='_blank'>Jigsaw Piece</a> </p>
    </div>
</div>
