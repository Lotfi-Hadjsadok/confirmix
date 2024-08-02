<?php

namespace App\Livewire\Employee\Order;

use App\Models\Order;
use Livewire\Component;
use Livewire\WithPagination;
use Livewire\Attributes\Computed;
use Livewire\WithoutUrlPagination;

class ConfirmedPage extends Component
{

    use WithPagination,WithoutUrlPagination;
    public $parent_id = 'confirmed-page';
    public $filter_by = 'today';

    #[Computed]
    public function orders() {
        $query = Order::with('client')
            ->where('status', 'confirmed')
            ->orderBy('updated_at', 'desc');

        return  Order::date_filter($query,$this->filter_by)->simplePaginate(10);
    }

    #[Computed]
    public function completed_orders_count(){
        $query = Order::with('client')
        ->where('status', 'confirmed')
        ->orderBy('updated_at', 'desc');

        return  Order::date_filter($query,$this->filter_by)->count();
    }

    #[Computed]
    public function failed_orders_count(){
        $query = Order::with('client')
        ->whereIn('status', ['not_delivered','cancelled'])
        ->orderBy('updated_at', 'desc');

        return  Order::date_filter($query,$this->filter_by)->count();
    }
    public function render()
    {
        return view('livewire.employee.order.confirmed-page');
    }

    public function updateStatus(Order $order,$status){
        $order->status=$status;
        $order->save();
    }

    public function updateFilterBy($filter)
    {
        $this->filter_by = $filter;
    }

}
