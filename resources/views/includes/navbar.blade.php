<nav>
    <div class="nav-wrapper">
        <a href="/" class="brand-logo">Posts</a>
        <ul id="nav-mobile" class="right hide-on-med-and-down">
            <li class="{{ Request::path() == 'create' ? 'active' : ''}}"><a href="/create">New Post</a></li>
            <li class="{{ Request::path() == 'users' ? 'active' : ''}}"><a href="/users">Users</a></li>
        </ul>
    </div>
</nav>