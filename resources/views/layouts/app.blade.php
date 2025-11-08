<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>EduFun | Learn IT the Fun Way</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="{{ asset('bootstrap5.2/css/bootstrap.min.css') }}" rel="stylesheet">

  <style>
    body {
      display: flex;
      flex-direction: column;
      min-height: 100vh;
      background-color: #f8f9fa;
    }
    main {
      flex: 1;
    }
    footer {
      background-color: #0d1b2a;
      color: #dbe2ef;
      text-align: center;
      padding: 10px 0;
      font-size: 0.9rem;
      letter-spacing: 0.5px;
    }
  </style>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-sm">
    <div class="container">
      <a class="navbar-brand fw-bold" href="/">EduFun</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item"><a class="nav-link" href="/">Home</a></li>
          <li class="nav-item"><a class="nav-link" href="/category">Category</a></li>
          <li class="nav-item"><a class="nav-link" href="/writers">Writers</a></li>
          <li class="nav-item"><a class="nav-link" href="/popular">Popular</a></li>
          <li class="nav-item"><a class="nav-link" href="/about">About</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <main class="container my-4">
    @yield('content')
  </main>

  <footer>
    © EduFun 2025 | Web Programming | <strong>Michael Antonius</strong> | <strong>2702296110</strong>
  </footer>

  <script src="{{ asset('bootstrap5.2/js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>
