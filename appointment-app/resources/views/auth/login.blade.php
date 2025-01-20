<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Super Admin & Admin Login</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f5f5f5;
        }
    </style>
</head>
<body class="flex justify-center items-center h-screen">

    <div class="w-full max-w-sm p-8 bg-white rounded-lg shadow-lg">
        <h2 class="text-2xl font-semibold text-center mb-6">Login to your account</h2>
        
        <form id="login-form">
            <!-- Email and Password Form Fields -->
            <div class="mb-4">
                <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                <input type="email" id="email" class="mt-1 p-2 w-full border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Email" required>
            </div>
            
            <div class="mb-4">
                <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                <input type="password" id="password" class="mt-1 p-2 w-full border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Password" required>
            </div>

            <div class="mb-6">
                <button type="submit" class="w-full bg-blue-500 text-white p-2 rounded-md hover:bg-blue-600 transition-colors">Login</button>
            </div>
            
            <!-- Google Login Button -->
            <div class="flex items-center justify-center">
                <button id="google-login" class="w-full bg-red-500 text-white p-2 rounded-md hover:bg-red-600 transition-colors">
                    Login with Google
                </button>
            </div>
        </form>
        
        <div class="mt-4 text-center">
            <p class="text-sm">Don't have an account? <a href="#" class="text-blue-500">Register</a></p>
        </div>
    </div>
    </body>
    </html>