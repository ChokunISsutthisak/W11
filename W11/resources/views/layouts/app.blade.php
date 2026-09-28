<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Smart Cafe' }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100 text-gray-800">
    <nav class="bg-gray-900 text-white">
        <div class="max-w-7xl mx-auto px-4 py-4 flex justify-between">
            <a href="{{ route('dashboard') }}" class="font-bold">Smart Cafe</a>
            <div class="flex gap-4">
                <a href="{{ route('products.index') }}">Products</a>
                @auth
                    <a href="{{ route('customers.index') }}">Customers</a>
                    <a href="{{ route('orders.index') }}">Orders</a>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button>Logout</button>
                    </form>
                @else
                    <a href="{{ route('login') }}">Login</a>
                    <a href="{{ route('register') }}">Register</a>
                @endauth
            </div>
        </div>
    </nav>

    <main class="max-w-7xl mx-auto p-6">
        @if(session('success'))
            <div class="mb-4 rounded bg-green-100 p-3 text-green-800">
                {{ session('success') }}
            </div>
        @endif

        {{ $slot ?? '' }}
        @yield('content')
    </main>
</body>
</html>
