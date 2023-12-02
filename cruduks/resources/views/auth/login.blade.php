<!-- resources/views/auth/login.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Document</title>
</head>
<body>
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<div class="bg-white-100 flex justify-center items-center h-screen">
        <!-- Left: Image -->
    <div class="w-1/2 h-screen hidden lg:block">
      <img src="img/login4.jpg" alt="Placeholder Image" class="object-cover w-full h-full">
    </div>
    <!-- Right: Login Form -->
    <div class="lg:p-36 md:p-52 sm:20 p-8 w-full lg:w-1/2">
      <h1 class="text-3xl font-semibold text-center ">UKS SMK TELKOM BANJARBARU</h1>
      <hr class="h-px mt-4 bg-gray-200 border-0 dark:bg-gray-700">
      <h1 class="text-2xl font-medium mt-8">Login</h1>
      <form method="POST" action="{{ url('/login') }}">
    @csrf
        <!-- Username Input -->
        <div class="mb-4 mt-4">
          <label for="username" class="block font-semibold text-black-600">Username</label>
          <input type="text" id="username" name="username" class="w-full border border-black box-shadow rounded-md py-2 px-3 focus:outline-none focus:border-green-500" autocomplete="off" placeholder="Username">
        </div>
        <!-- Password Input -->
        <div class="mb-4">
          <label for="password" class="block font-semibold text-black-600">Password</label>
          <input type="password" id="password" name="password" class="w-full border box-shadow border-black rounded-md py-2 px-3 focus:outline-none focus:border-green-500" autocomplete="off" placeholder="Password">
        </div>
        <!-- Remember Me Checkbox -->
        <div class="mb-4 flex items-center">
          <input type="checkbox" id="remember" name="remember" class="text-blue-500">
          <label for="remember" class="text-gray-600 ml-2">Remember Me</label>
        </div>
        <!-- Login Button -->
        <button type="submit" class="bg-[#1b2e34] hover:bg-[#4fc38f] text-white font-semibold rounded-md py-2 px-4 w-full mt-4">Login</button>
    </form>
    </div>
    </div>

@if(session('error'))
    <p>{{ session('error') }}</p>
@endif

</body>
</html>