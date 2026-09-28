<x-app-layout>
    <x-slot name="header"><h2 class="font-semibold text-xl">แก้ไขสินค้า</h2></x-slot>
    <div class="max-w-2xl mx-auto py-8">
        <form action="{{ route('products.update', $product) }}" method="POST" class="bg-white p-6 rounded shadow">
            @csrf
            @method('PUT')
            <div class="grid gap-4">
    <div>
        <label class="block mb-1">ชื่อสินค้า</label>
        <input name="name" value="{{ old('name', $product->name ?? '') }}"
               class="w-full border rounded p-2" required>
        @error('name') <p class="text-red-600 text-sm">{{ $message }}</p> @enderror
    </div>

    <div>
        <label class="block mb-1">ประเภท</label>
        <input name="category" value="{{ old('category', $product->category ?? '') }}"
               class="w-full border rounded p-2" required>
        @error('category') <p class="text-red-600 text-sm">{{ $message }}</p> @enderror
    </div>

    <div>
        <label class="block mb-1">รายละเอียด</label>
        <textarea name="description" class="w-full border rounded p-2">{{ old('description', $product->description ?? '') }}</textarea>
    </div>

    <div>
        <label class="block mb-1">ราคา</label>
        <input type="number" step="0.01" name="price"
               value="{{ old('price', $product->price ?? '') }}"
               class="w-full border rounded p-2" required>
        @error('price') <p class="text-red-600 text-sm">{{ $message }}</p> @enderror
    </div>

    <div>
        <label class="block mb-1">Stock</label>
        <input type="number" name="stock"
               value="{{ old('stock', $product->stock ?? 0) }}"
               class="w-full border rounded p-2" required>
    </div>

    <div>
        <label class="block mb-1">สถานะ</label>
        <select name="status" class="w-full border rounded p-2">
            <option value="available" @selected(old('status', $product->status ?? 'available') === 'available')>available</option>
            <option value="unavailable" @selected(old('status', $product->status ?? '') === 'unavailable')>unavailable</option>
        </select>
    </div>
</div>

            <button class="mt-6 bg-green-600 text-white px-5 py-2 rounded">บันทึกการแก้ไข</button>
            <a href="{{ route('products.index') }}" class="ml-2">ยกเลิก</a>
        </form>
    </div>
</x-app-layout>
