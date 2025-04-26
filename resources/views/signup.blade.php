<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Login/Register UI</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

  <style>
    .custom-right-shape {
      border-top-right-radius: 90px;
      border-bottom-right-radius: 90px;
    }

    .social-icons {
      margin: 20px 0;
    }

    .social-icons a {
      border: 1px solid #ccc;
      border-radius: 20%;
      display: inline-flex;
      justify-content: center;
      align-items: center;
      margin: 0 3px;
      width: 40px;
      height: 40px;
    }
  </style>
</head>

<body class="bg-gradient-to-r from-gray-200 to-blue-100 min-h-screen flex items-center justify-center p-4">

  <div class="bg-white rounded-3xl shadow-lg w-full min-h-96 max-w-5xl flex flex-col md:flex-row overflow-hidden">

    <!-- Left Panel -->
    <div
      class="bg-gradient-to-br from-blue-700 to-blue-500 text-white p-10 flex flex-col justify-center items-center md:w-1/2 w-full custom-right-shape">
      <h2 class="text-3xl font-bold mb-4 text-center">Welcome Back!</h2>
      <p class="text-center mb-6 text-sm">Enter your personal details to use all of site features</p>
      <a href="{{route('login')}}"
        class="border border-white text-white px-6 py-2 rounded-lg hover:bg-white hover:text-blue-600 transition">SIGN
        IN</a>
    </div>

    <!-- Right Panel -->
    <div class="p-10 md:w-1/2 w-full flex flex-col justify-center items-center bg-white">
      <h2 class="text-2xl font-bold mb-4 text-center">Create Account</h2>

      <!-- Social Icons -->
      <div class="social-icons">
        <a href="#" class="icon"><i class="fa-brands fa-google-plus-g"></i></a>
        <a href="#" class="icon"><i class="fa-brands fa-facebook-f"></i></a>
        <a href="#" class="icon"><i class="fa-brands fa-github"></i></a>
        <a href="#" class="icon"><i class="fa-brands fa-linkedin-in"></i></a>
      </div>

      <p class="text-gray-500 text-sm mb-4">or use your email for registeration</p>

      <!-- Input Form -->

      <form class="w-full max-w-sm space-y-4" action="{{ route('signupPost') }}" method="POST">
        @csrf
        <input type="text" placeholder="Name" name="name" value="{{ old('name') }}"
          class="w-full px-4 py-2 border rounded bg-gray-100 focus:outline-none" />
        @error('name')
      <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
    @enderror
        <input type="email" placeholder="Email" name="email" value="{{ old('email') }}"
          class="w-full px-4 py-2 border rounded bg-gray-100 focus:outline-none" />
        @error('email')
      <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
    @enderror
        <div class="relative">
          <input type="password" id="password" placeholder="Password" name="password" value="{{ old('password') }}"
            class="w-full px-4 py-2 border rounded bg-gray-100 focus:outline-none pr-10" />
          @error('password')
        <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
      @enderror
          <span class="absolute right-3 top-1/2 transform -translate-y-1/2 cursor-pointer" onclick="togglePassword()">
            <i id="toggleIcon" class="fa-regular fa-eye-slash text-gray-600"></i>
          </span>


        </div>

        <button type="submit"
          class="w-full bg-blue-600 text-white font-semibold py-2 rounded hover:bg-blue-700 transition">SIGN UP</button>
      </form>
    </div>

  </div>


  <script>
    // Password Shor & Hide //
    function togglePassword() {
      const passwordField = document.getElementById("password");
      const icon = document.getElementById("toggleIcon");
      if (passwordField.type === "password") {
        passwordField.type = "text";
        icon.classList.remove("fa-eye-slash");
        icon.classList.add("fa-eye");
      } else {
        passwordField.type = "password";
        icon.classList.remove("fa-eye");
        icon.classList.add("fa-eye-slash");
      }
    }
  </script>
</body>

</html>