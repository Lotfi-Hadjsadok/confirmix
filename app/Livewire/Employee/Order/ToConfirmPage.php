<?php

namespace App\Livewire\Employee\Order;

use App\Models\User;
use App\Models\Order;
use Livewire\Component;
use Livewire\WithPagination;
use Livewire\Attributes\Computed;
use Livewire\WithoutUrlPagination;

class ToConfirmPage extends Component
{
    use WithPagination, WithoutUrlPagination;

    public $parent_id = 'to-confirm-page';

    #[Computed(persist: true)]
    public function user()
    {
        return User::with('employee')->find(1);
    }

    #[Computed]
    public function orders()
    {
        return $this->user->employee->orders()
            ->with('client')
            ->statuses(['to_recall', 'pending'])
            ->orderBy('updated_at', 'desc')
            ->simplePaginate(10);
    }

    public function orders_count(array $statuses): int
    {
        return $this->user->employee->orders()
            ->statuses($statuses)
            ->count();
    }


    public function updateStatus(Order $order, $status)
    {
        $order->status = $status;
        $order->save();
    }


    public function render()
    {
        return view(
            'livewire.employee.order.to-confirm-page',
            [
                'pending_orders_count' => $this->orders_count(['pending']), 'to_recall_orders_count' => $this->orders_count(['to_recall'])
            ]
        );
    }
}
