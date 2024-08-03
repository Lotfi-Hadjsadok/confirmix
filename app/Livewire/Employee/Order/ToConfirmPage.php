<?php

namespace App\Livewire\Employee\Order;

use App\Models\Order;
use Livewire\Component;
use Livewire\WithPagination;
use Livewire\Attributes\Computed;
use Livewire\WithoutUrlPagination;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

class ToConfirmPage extends Component
{
    use WithPagination, WithoutUrlPagination;

    public $parent_id = 'to-confirm-page';


    public function render()
    {
        // Auth::attempt(['email' => 'jacobs.kolby@example.com', 'password' => 'admin']);

        return view(
            'livewire.employee.order.to-confirm-page',
            [
                'pending_orders_count' => $this->orders_count(['pending']), 'to_recall_orders_count' => $this->orders_count(['to_recall'])
            ]
        );
    }

    #[Computed(persist: true)]
    public function user()
    {
        return Auth::user()->load('employee');
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
        Gate::authorize('edit-order', $order);
        $order->status = $status;
        $order->save();
    }
}
