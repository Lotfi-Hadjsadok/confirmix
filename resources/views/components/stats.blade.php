<div class="max-w-[85rem] pb-10 mx-auto">
    <div class="grid grid-cols-2 gap-4">
        <x-order.table.stat-card stonks="up" headline="Pending Orders" :data="Order::where('status', 'pending')->count()"></x-order.table.stat-card>

        <x-order.table.stat-card stonks="up" headline="Orders To Recall" :data="Order::where('status', 'to_recall')->count()"></x-order.table.stat-card>
    </div>
</div>
