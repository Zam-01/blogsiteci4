<nav class="m-2 p-3 border-bottom border-white ">
  <ul class="nav justify-content-end me-3">
    <li class="nav-item">
      <a class="nav-link active" aria-current="page" href="/home">Home</a>
    </li>
    <li class="nav-item me-2">
      <a class="nav-link" href="/about">About My Blogs</a>
    </li>
    <li class="nav-item me-2">
      <a class="nav-link" href="/blogs">Blogs</a>
    </li>
    <li class="nav-item me-2">
      <a class="nav-link" href="/create">Create your Blogs</a>
    </li>
    <?php if (session()->get('login') === true): ?>
      <li class="nav-item me-2">
        <a class="nav-link" href="/Logout">Logout</a>
      </li>
    <?php endif ?>
  </ul>
</nav>