<x-app-layout>
    <x-slot name="header"><h2 class="font-semibold text-xl">Customers</h2></x-slot>
    <div class="py-8">
        <div class="bg-white rounded shadow overflow-hidden">
            <table class="w-full">
                <thead class="bg-gray-100">
                    <tr><th class="p-3">ID</th><th class="p-3">ชื่อ</th><th class="p-3">Email</th><th class="p-3">Phone</th><th class="p-3">Status</th></tr>
                </thead>
                <tbody>
                @foreach($customers as $item)
                    <tr class="border-t">
                        <td class="p-3">{{ $item->id }}</td>
                        <td class="p-3">{{ $item->name }}</td>
                        <td class="p-3">{{ $item->email }}</td>
                        <td class="p-3">{{ $item->phone }}</td>
                        <td class="p-3">{{ $item->status }}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        <div class="mt-4">{{ $customers->links() }}</div>
    </div>
</x-app-layout>
