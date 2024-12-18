<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>App - @yield('title')</title>
</head>
<body>
  <nav>
    <ul>
    @include('layouts.menu')
    </ul>
  </nav>
  <h1>@yield('title')</h1>
  <main>
    @section('content')
      <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Deserunt quod veritatis unde labore quos architecto provident voluptates impedit laboriosam optio ipsa, soluta ratione amet quisquam eveniet earum qui. Architecto, nemo.</p>
      @show
  </main>
</body>
</html>