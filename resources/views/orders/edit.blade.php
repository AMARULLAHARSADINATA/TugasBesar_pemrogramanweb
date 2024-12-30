<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>edit order</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js']) {{-- Sesuaikan dengan path CSS Tailwind Anda --}}
</head>
<body class="bg-gray-200">
    <div class="container mx-auto p-6 bg-white rounded-lg shadow-lg mt-10">
        <h1 class="text-2xl font-bold mb-6">Edit Order</h1>

        <form action="{{ route('orders.update', $order->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-4">
                <label for="order_date" class="block text-gray-600">Tanggal Pesan</label>
                <input type="date" id="order_date" name="order_date" value="{{ old('order_date', $order->order_date) }}" required class="mt-1 block w-full border border-gray-300 rounded-md p-2">
            </div>

            <div class="mb-4">
                <label for="tralis_type" class="block text-gray-600">Jenis Tralis</label>
                <input type="text" id="tralis_type" name="tralis_type" value="{{ old('tralis_type', $order->tralis_type) }}" required class="mt-1 block w-full border border-gray-300 rounded-md p-2">
            </div>

            <div class="mb-4">
                <label for="material" class="block text-gray-600">Material</label>
                <input type="text" id="material" name="material" value="{{ old('material', $order->material) }}" required class="mt-1 block w-full border border-gray-300 rounded-md p-2">
            </div>

            <div class="mb-4">
                <label for="color" class="block text-gray-600">Warna</label>
                <input type="text" id="color" name="color" value="{{ old('color', $order->color) }}" required class="mt-1 block w-full border border-gray-300 rounded-md p-2">
            </div>

            <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600">Update Order</button>
        </form>

        <div class="mt-4">
            <a href="{{ route('orders.index') }}" class="inline-block px-4 py-2 bg-gray-300 text-gray-800 rounded hover:bg-gray-400">Kembali ke Daftar Orders</a>
        </div>
    </div>
</body>
</html>