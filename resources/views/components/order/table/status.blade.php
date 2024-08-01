<label class="relative">
    <livewire:order.table.update-status wire:key="$parent.parent_id-{{ $order->id }}" :order="$order" />
    <span
        class="flex justify-center min-w-28 items-center gap-x-1.5 py-1.5 px-3  rounded-full text-xs font-medium bg-teal-100  {{ Status::tryFrom($order->status)->getBgColor() }}">
        {{ Status::tryFrom($order->status)->getName() }}
    </span>
</label>
