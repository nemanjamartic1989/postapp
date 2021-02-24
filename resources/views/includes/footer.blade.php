<footer>
    <h1 class="pink-text">Last 3 posts</h1>
    <ul>
        @foreach($latestPosts as $post)
        <li><a href="/post/{{ $post->id }}">Post by {{ $post->user->name }} |</a></li>
        @endforeach
    </ul>
</footer>