@props(['parent_id', 'order'])
<tr wire:key='{{ $parent_id }}-{{ $order->id }}'>
    <td class="pl-3 text-sm text-gray-800 size-px whitespace-nowrap dark:text-neutral-200">
        <div class="py-3 ps-6 lg:ps-3 xl:ps-0 pe-6">
            <div class="flex items-center gap-x-3">
                {{ $order->client->name }}
            </div>
        </div>
    </td>
    <td class="text-sm text-gray-800 size-px whitespace-nowrap dark:text-neutral-200">
        <div class="py-3 ps-6 lg:ps-3 xl:ps-0 pe-6">
            <div class="flex items-center gap-x-3">
                {{ $order->client->state }}
            </div>
        </div>
    </td>
    <td class="text-sm text-gray-800 size-px whitespace-nowrap dark:text-neutral-200">
        <div class="py-3 ps-6 lg:ps-3 xl:ps-0 pe-6">
            <div class="flex items-center gap-x-3">
                {{ $order->client->city }}
            </div>
        </div>
    </td>
    <td class="text-sm text-gray-800 size-px whitespace-nowrap dark:text-neutral-200">
        <div class="py-3 ps-6 lg:ps-3 xl:ps-0 pe-6">
            <div class="flex items-center gap-x-3">
                {{ $order->product }}
            </div>
        </div>
    </td>
    <td class="text-sm text-gray-800 size-px whitespace-nowrap dark:text-neutral-200">
        <div class="py-3 ps-6 lg:ps-3 xl:ps-0 pe-6">
            <div class="flex items-center gap-x-3">
                {{ $order->quantity }}
            </div>
        </div>
    </td>
    <td class="text-sm text-gray-800 size-px whitespace-nowrap dark:text-neutral-200">
        <div class="py-3 ps-6 lg:ps-3 xl:ps-0 pe-6">
            <div class="flex flex-col gap-x-3">
                <span>{{ $order->shipping_method }}</span>
                <span class="font-bold text-primary">{{ $order->shipping_price }} {{ $order->currency }}</span>
            </div>
        </div>
    </td>
    <td class="text-sm text-gray-800 size-px whitespace-nowrap dark:text-neutral-200">
        <div class="py-3 ps-6 lg:ps-3 xl:ps-0 pe-6">
            <div class="flex items-center gap-x-3">
                {{ $order->total }} {{ $order->currency }}
            </div>
        </div>
    </td>

    <td class="text-sm text-gray-800 size-px whitespace-nowrap dark:text-neutral-200">
        <div class="py-3 ps-6 lg:ps-3 xl:ps-0 pe-6">
            <div class="flex items-center gap-x-3">
                <x-order.table.status :$parent_id :$order></x-order.table.status>
            </div>
        </div>
    </td>

    <x-order.table.call-btn :$order></x-order.table.call-btn>
</tr>
