@props(['orders', 'columns' => ['name', 'state', 'city', 'product', 'quantity', 'shipping', 'total', 'status', '']])
<table class="min-w-full divide-y divide-gray-200 dark:divide-neutral-700">
    <thead class="bg-gray-50 dark:bg-neutral-800">
        <tr>
            @foreach ($columns as $column)
                <th scope="col" class="px-3 py-3 text-start">
                    <div class="flex items-center gap-x-2">
                        <span class="text-xs font-semibold tracking-wide text-gray-800 uppercase dark:text-neutral-200">
                            {{ $column }}
                        </span>
                    </div>
                </th>
            @endforeach
        </tr>
    </thead>
    <tbody class="divide-y divide-gray-200 dark:divide-neutral-700">
        @foreach ($orders as $order)
            <x-order.table.row :order="$order" />
        @endforeach
        </tfoot>
    </tbody>
</table>

@if ($orders->hasPages())
    <div class="p-4 border-t border-neutral-700">
        <td>{{ $orders->links(data: ['scrollTo' => false]) }}</td>
    </div>
@endif
