<x-app-layout>
    <x-slot name="header"><h2 class="font-semibold text-xl">Orders</h2></x-slot>
    <div class="py-8">
        <div class="bg-white rounded shadow overflow-hidden">
            <table class="w-full">
                <thead class="bg-gray-100">
                    <tr><th class="p-3">ID</th><th class="p-3">Customer</th><th class="p-3">Product</th><th class="p-3">Qty</th><th class="p-3">Total</th><th class="p-3">Status</th></tr>
                </thead>
                <tbody>
                @foreach($orders as $item)
                    <tr class="border-t">
                        <td class="p-3">{{ $item->id }}</td>
                        <td class="p-3">{{ $item->customer->name ?? '-' }}</td>
                        <td class="p-3">{{ $item->product->name ?? '-' }}</td>
                        <td class="p-3">{{ $item->quantity }}</td>
                        <td class="p-3">{{ number_format($item->total_price, 2) }}</td>
                        <td class="p-3">{{ $item->status }}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        <div class="mt-4">{{ $orders->links() }}</div>
    </div>
</x-app-layout>
