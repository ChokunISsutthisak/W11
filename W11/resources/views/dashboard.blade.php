<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Smart Cafe Dashboard
        </h2>
    </x-slot>

    <div class="py-8">
        <div class="max-w-7xl mx-auto px-4">
            <div class="grid md:grid-cols-3 gap-6">
                <div class="bg-white p-6 rounded-lg shadow">
                    <h3 class="text-gray-500">ระบบสินค้า</h3>
                    <p class="text-2xl font-bold mt-2">Products</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow">
                    <h3 class="text-gray-500">ระบบลูกค้า</h3>
                    <p class="text-2xl font-bold mt-2">Customers</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow">
                    <h3 class="text-gray-500">คำสั่งซื้อ</h3>
                    <p class="text-2xl font-bold mt-2">Orders</p>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
