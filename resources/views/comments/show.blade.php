<article class="comment">
    <div class="content">
        {{ $comment->text }}
    </div>
    <footer class="meta">
        <a href="/users/{{ $comment->user->id }} " class="author">
            @<strong>{{ $comment->user->name }}</strong>
        </a>
        <time class="has-text-grey">
            {{ $comment->created_at->diffForHumans() }}
        </time>
    </footer>
</article>