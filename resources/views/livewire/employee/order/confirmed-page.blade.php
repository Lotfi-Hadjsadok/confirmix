<div>
    <div class="px-4 py-10 max-w-[1200px] mx-auto">
        <div class="max-w-[85rem] pb-10 mx-auto">
            <x-order.filter :$parent_id class="pb-4"></x-order.filter>
            <div class="grid grid-cols-2 gap-4">
                <x-order.table.stat-card stonks="up" headline="Confirmed Orders"
                    :data="$this->orders_count(['confirmed'])"></x-order.table.stat-card>

                <x-order.table.stat-card stonks="down" headline="Faild Orders"
                    :data="$this->orders_count(['cancelled', 'not_delivered'])"></x-order.table.stat-card>
            </div>
        </div>

        <div class="flex flex-col">
            <div class="-m-1.5 overflow-x-scroll scrollbar-hide">
                <div class="p-1.5 min-w-full inline-block align-middle">
                    <div
                        class="overflow-hidden bg-white border border-gray-200 shadow-sm rounded-xl dark:bg-neutral-800 dark:border-neutral-700 ">
                        <x-order.table.table :$parent_id :orders="$this->orders" />
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
