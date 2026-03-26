<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inbizsys - Supplier Portal</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-slate-50 font-sans text-slate-900">
    <div class="flex min-h-screen">
        <aside class="w-64 bg-slate-900 text-white hidden md:block">
            <div class="p-6 text-xl font-bold tracking-tight">Inbizsys</div>
            <nav class="mt-6">
                <a href="{{ route('suppliers.index') }}" class="block px-6 py-3 bg-indigo-600">Suppliers</a>
            </nav>
        </aside>

        <main class="flex-1 p-8">
            @yield('content')
        </main>
    </div>
</body>
</html>