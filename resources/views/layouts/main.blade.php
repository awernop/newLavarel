<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <!-- @vite(['resources/css/app.css', 'resources/js/app.js']) -->
  <link rel="stylesheet" href="{{ asset('style/app.css') }}">
  <link rel="stylesheet" href="{{ asset('style/reports.css') }}">
</head>
<body>
  <header>
    <h2>Нарушений.нет</h2>
  </header>
  <main>
      @yield('content')
  </main>

  <footer>
    <p>Борисова 2024</p>
  </footer>
</body>
</html>