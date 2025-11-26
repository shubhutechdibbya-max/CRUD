<!doctype html>
<html>
<head>
  <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="min-h-screen bg-gradient-to-br from-green-600 to-purple-700 flex items-center justify-center px-4">

  <div class="w-full max-w-md bg-white/10 backdrop-blur-lg shadow-2xl rounded-2xl p-8 border border-white/20">

      <h2 class="text-3xl font-bold text-white text-center mb-2">Create Account</h2>
      <p class="text-slate-200 text-center text-sm mb-6">Register to continue</p>

      <form action="{{ url('/register') }}" method="POST" class="space-y-4">
          @csrf

          <!-- Name -->
          <input type="text" name="name" placeholder="Full Name"
              class="w-full p-3 bg-white/20 text-white rounded-lg focus:ring-2 focus:ring-indigo-400 outline-none placeholder-gray-200">

          <!-- Email -->
          <input type="email" name="email" placeholder="Email Address"
              class="w-full p-3 bg-white/20 text-white rounded-lg focus:ring-2 focus:ring-indigo-400 outline-none placeholder-gray-200">

          <!-- Password -->
          <input type="password" name="password" placeholder="Password"
              class="w-full p-3 bg-white/20 text-white rounded-lg focus:ring-2 focus:ring-indigo-400 outline-none placeholder-gray-200">

          <!-- Confirm -->
          <input type="password" name="password_confirmation" placeholder="Confirm Password"
              class="w-full p-3 bg-white/20 text-white rounded-lg focus:ring-2 focus:ring-indigo-400 outline-none placeholder-gray-200">

          <!-- Button -->
          <button type="submit"
              class="w-full py-3 rounded-lg bg-gradient-to-r from-indigo-500 to-purple-500 text-white font-semibold text-lg hover:scale-105 transition">
              Register
          </button>
      </form>

      <p class="text-center text-gray-200 text-sm mt-4">
          Already have an account?
          <a href="/login" class="text-white font-semibold underline">Login</a>
      </p>
  </div>

</body>
</html>

