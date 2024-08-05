<?php

namespace App\Livewire\Employer\Order;

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
            'livewire.employer.order.to-confirm-page',
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
        return Order::query()
            ->with('client')
            ->where('employer_id', $this->user()->employer->id)
            ->statuses(['to_recall', 'pending'])
            ->orderBy('updated_at', 'asc')
            ->simplePaginate(10);
    }

    public function orders_count(array $statuses): int
    {
        return Order::query()
            ->where('employer_id', $this->user()->employer->id)
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
