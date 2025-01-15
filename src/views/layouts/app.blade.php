<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>App - @yield('title')</title>
  <link rel="stylesheet" href="/style.css">
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
      <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptatibus voluptate in omnis, tempora incidunt eius doloribus sequi pariatur officiis sint hic harum culpa aliquam nobis est dolore accusamus nisi error!</p>
    @show
  </main>
</body>
</html>