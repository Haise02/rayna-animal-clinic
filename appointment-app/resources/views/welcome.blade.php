<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Form</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="flex items-center justify-center min-h-screen bg-gray-100">
  <div class="w-full max-w-sm p-6 m-8 bg-white rounded-lg shadow-md">
    <h2 class="mb-6 text-2xl font-semibold text-center text-gray-800">Login</h2>
    
    <form action="/login" method="POST">
      <!-- Username -->
      <div class="mb-4">
        <label for="username" class="block mb-2 text-sm font-medium text-gray-600">Username</label>
        <input 
          type="text" 
          id="username" 
          name="username" 
          class="w-full px-4 py-2 text-gray-800 bg-gray-100 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400 focus:border-transparent" 
          placeholder="Enter your username" 
          required>
      </div>

      <!-- Password -->
      <div class="mb-6">
        <label for="password" class="block mb-2 text-sm font-medium text-gray-600">Password</label>
        <input 
          type="password" 
          id="password" 
          name="password" 
          class="w-full px-4 py-2 text-gray-800 bg-gray-100 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400 focus:border-transparent" 
          placeholder="Enter your password" 
          required>
      </div>

      <!-- Login Button -->
      <button 
        type="submit" 
        class="w-full px-4 py-2 text-white bg-blue-500 rounded-lg hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-300">
        Login
      </button>
    </form>
  </div>
</body>
</html>

{{-- model for database --}}
{{-- controller for logic --}}
{{-- middleware for authetication check if the user is correct role and the next request --}}