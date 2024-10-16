<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body>
<header>
    @include('learnBlade.sections.header')
<!--
    <p class="h1 text-center mt-5 mb-5">Header</p>
-->
</header>
<nav class="navbar navbar-expand-lg navbar-light bg-body-tertiary">
    @include('learnBlade.sections.nav')
<!--
  <div class="container-fluid">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Home</a>
        </li>
        <li class="breadcrumb-item">
          <a href="#">Library</a>
        </li>
        <li class="breadcrumb-item active" aria-current="page">
          <a href="#">Data</a>
        </li>
      </ol>
    </nav>
  </div>
-->
</nav>

<main>
    @include('learnBlade.sections.main')
<!--
    <div
    class="bg-image card shadow-1-strong mt-5 mb-5"
    style="background-image: url('https://mdbcdn.b-cdn.net/img/new/slides/003.webp');"
    >
    <div class="card-body text-white">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">
        Some quick example text to build on the card title and make up the bulk of the
        card's content.
        </p>
        <a href="#!" class="btn btn-outline-light" data-mdb-ripple-init>Button</a>
    </div>
    </div>
-->
@yield('content')
</main>

<footer class="bg-body-tertiary text-center">
    @include('learnBlade.sections.footer')
<!--
  <div class="container p-4"></div>

  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.05);">
    © 2020 Copyright:
    <a class="text-body" href="https://mdbootstrap.com/">MDBootstrap.com</a>
  </div>
-->
</footer>
</body>
</html>