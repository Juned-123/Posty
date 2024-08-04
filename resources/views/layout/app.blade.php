<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Posty</title>
</head>
<body class="bg-gray-200">
  <nav class="p-6 bg-white flex justify-between mb-8">
    <ul class="flex item-center">
      <li><a href="" class="p-6">Home</a></li>
      <li><a href="" class="p-6">Dashboard</a></li>
      <li><a href="" class="p-6">Post</a></li>
    </ul>
    <ul class="flex item-center">
      @auth
        <li><a href="" class="p-6">Juned Shaikh</a></li>
        <li><a href="" class="p-6">Login</a></li>
      @endauth

      @guest
        <li><a href="{{route('register')}}" class="p-6">Register</a></li>
        <li><a href="" class="p-6">Logout</a></li>
      @endguest
      
      
    </ul>

  </nav>
    @yield('content')
   
</body>
</html>