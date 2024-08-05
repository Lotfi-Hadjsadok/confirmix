<?php

namespace App\Livewire\Employee\Order;

use App\Models\Order;
use Livewire\Component;
use Livewire\WithPagination;
use Livewire\Attributes\Computed;
use Livewire\WithoutUrlPagination;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

class FailedPage extends Component
{
    use WithPagination, WithoutUrlPagination;
    public $parent_id = 'failed-page';
    public $filter_by = 'today';


    #[Computed(persist: true)]
    public function user()
    {
        return Auth::user()->load('employee');
    }

    public function render()
    {
        return view('livewire.employee.order.failed-page', [
            'cancelled_orders_count' => $this->orders_count(['cancelled']),
            'not_delivered_orders_count' => $this->orders_count(['not_delivered']),
        ]);
    }

    #[Computed]
    public function orders()
    {
        return $this->user()->employee->orders()
            ->with('client')
            ->statuses(['cancelled', 'not_delivered'])
            ->orderBy('updated_at', 'desc')
            ->simplePaginate(10);
    }

    public function orders_count(array $statuses): int
    {
        return $this->user()->employee->orders()
            ->with('client')
            ->statuses($statuses)
            ->orderBy('updated_at', 'desc')
            ->count();
    }

    public function updateStatus(Order $order, $status)
    {
        Gate::authorize('edit-order', $order);
        $order->status = $status;
        $order->save();
    }
}
