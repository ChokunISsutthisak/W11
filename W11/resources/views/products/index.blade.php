<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">Products</h2>
    </x-slot>

    <div class="py-8">
        <div class="max-w-7xl mx-auto px-4">
            @auth
                <a href="{{ route('products.create') }}"
                   class="inline-block mb-4 bg-blue-600 text-white px-4 py-2 rounded">
                    + เพิ่มสินค้า
                </a>
            @endauth

            <div class="bg-white rounded-lg shadow overflow-hidden">
                <table class="w-full">
                    <thead class="bg-gray-100">
                        <tr>
                            <th class="p-3 text-left">ID</th>
                            <th class="p-3 text-left">ชื่อสินค้า</th>
                            <th class="p-3 text-left">ประเภท</th>
                            <th class="p-3 text-left">ราคา</th>
                            <th class="p-3 text-left">Stock</th>
                            <th class="p-3 text-left">สถานะ</th>
                            @auth
                                <th class="p-3 text-left">จัดการ</th>
                            @endauth
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($products as $product)
                            <tr class="border-t">
                                <td class="p-3">{{ $product->id }}</td>
                                <td class="p-3">{{ $product->name }}</td>
                                <td class="p-3">{{ $product->category }}</td>
                                <td class="p-3">{{ number_format($product->price, 2) }}</td>
                                <td class="p-3">{{ $product->stock }}</td>
                                <td class="p-3">{{ $product->status }}</td>
                                @auth
                                    <td class="p-3 flex gap-2">
                                        <a href="{{ route('products.edit', $product) }}"
                                           class="text-blue-600">Edit</a>
                                        <form action="{{ route('products.destroy', $product) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button class="text-red-600"
                                                    onclick="return confirm('ยืนยันการลบสินค้า?')">
                                                Delete
                                            </button>
                                        </form>
                                    </td>
                                @endauth
                            </tr>
                        @empty
                            <tr><td colspan="7" class="p-6 text-center">ยังไม่มีข้อมูล</td></tr>
                        @endforelse
                    </tbody>
                </table>
            </div>

            <div class="mt-4">{{ $products->links() }}</div>
        </div>
    </div>
</x-app-layout>
