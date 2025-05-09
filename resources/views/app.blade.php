<!DOCTYPE html>
<!-- saved from url=(0048)https://getbootstrap.com/docs/5.0/examples/blog/ -->
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <title>Blog Template · Bootstrap v5.0</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/blog/">



    <!-- Bootstrap core CSS -->
<link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Favicons -->
<link rel="apple-touch-icon" href="https://getbootstrap.com/docs/5.0/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
<link rel="icon" href="https://getbootstrap.com/docs/5.0/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
<link rel="icon" href="https://getbootstrap.com/docs/5.0/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
<link rel="manifest" href="https://getbootstrap.com/docs/5.0/assets/img/favicons/manifest.json">
<link rel="mask-icon" href="https://getbootstrap.com/docs/5.0/assets/img/favicons/safari-pinned-tab.svg" color="#7952b3">
<link rel="icon" href="https://getbootstrap.com/docs/5.0/assets/img/favicons/favicon.ico">
<meta name="theme-color" content="#7952b3">


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>


    <!-- Custom styles for this template -->
    <link href="{{asset('css/css')}}" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="{{asset('css/blog.css')}}" rel="stylesheet">
  </head>
  <body>

<div class="container">
  <header class="blog-header py-3">
    <div class="row flex-nowrap justify-content-between align-items-center">
      <div class="col-4 pt-1">
        <a class="link-secondary" href="https://getbootstrap.com/docs/5.0/examples/blog/#">Subscribe</a>
      </div>
      <div class="col-4 text-center">
        <a class="blog-header-logo text-dark" href="https://getbootstrap.com/docs/5.0/examples/blog/#">Large</a>
      </div>
      <div class="col-4 d-flex justify-content-end align-items-center">
        <a class="link-secondary" href="https://getbootstrap.com/docs/5.0/examples/blog/#" aria-label="Search">
          <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="mx-3" role="img" viewBox="0 0 24 24"><title>Search</title><circle cx="10.5" cy="10.5" r="7.5"></circle><path d="M21 21l-5.2-5.2"></path></svg>
        </a>
        <a class="btn btn-sm btn-outline-secondary" href="https://getbootstrap.com/docs/5.0/examples/blog/#">Sign up</a>
      </div>
    </div>
  </header>

  <div class="nav-scroller py-1 mb-2">
    <nav class="nav d-flex justify-content-between">
      <a class="p-2 link-secondary" href="https://getbootstrap.com/docs/5.0/examples/blog/#">World</a>
      <a class="p-2 link-secondary" href="https://getbootstrap.com/docs/5.0/examples/blog/#">U.S.</a>
      <a class="p-2 link-secondary" href="https://getbootstrap.com/docs/5.0/examples/blog/#">Technology</a>
      <a class="p-2 link-secondary" href="https://getbootstrap.com/docs/5.0/examples/blog/#">Design</a>
      <a class="p-2 link-secondary" href="https://getbootstrap.com/docs/5.0/examples/blog/#">Culture</a>
      <a class="p-2 link-secondary" href="https://getbootstrap.com/docs/5.0/examples/blog/#">Business</a>
      <a class="p-2 link-secondary" href="https://getbootstrap.com/docs/5.0/examples/blog/#">Politics</a>
      <a class="p-2 link-secondary" href="https://getbootstrap.com/docs/5.0/examples/blog/#">Opinion</a>
      <a class="p-2 link-secondary" href="https://getbootstrap.com/docs/5.0/examples/blog/#">Science</a>
      <a class="p-2 link-secondary" href="https://getbootstrap.com/docs/5.0/examples/blog/#">Health</a>
      <a class="p-2 link-secondary" href="https://getbootstrap.com/docs/5.0/examples/blog/#">Style</a>
      <a class="p-2 link-secondary" href="https://getbootstrap.com/docs/5.0/examples/blog/#">Travel</a>
    </nav>
  </div>
</div>

<main class="container">
    <div>
        @yield('content')
    </div>
</main>

<footer class="blog-footer">
  <p>Blog template built for <a href="https://getbootstrap.com/">Bootstrap</a> by <a href="https://twitter.com/mdo">@mdo</a>.</p>
  <p>
    <a href="https://getbootstrap.com/docs/5.0/examples/blog/#">Back to top</a>
  </p>
</footer>





</body></html>
