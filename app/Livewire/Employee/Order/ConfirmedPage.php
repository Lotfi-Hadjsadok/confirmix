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

        match($this->filter_by) {
            'today' => $query->whereDate('created_at', now()->toDateString()),
            'seven_last_days' => $query->whereBetween('created_at', [now()->subDays(7)->startOfDay(), now()->endOfDay()]),
            'thirty_last_days' => $query->whereBetween('created_at', [now()->subDays(30)->startOfDay(), now()->endOfDay()]),
            default => $query
        };
        echo($this->filter_by);
        return $query->simplePaginate(10);
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
