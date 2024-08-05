<?php

namespace App\Livewire\Employer\Order;

use App\Models\Order;
use Livewire\Component;
use Livewire\WithPagination;
use Livewire\Attributes\Computed;
use Livewire\WithoutUrlPagination;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

class ConfirmedPage extends Component
{


    use WithPagination, WithoutUrlPagination;
    public $parent_id = 'confirmed-page';
    public $filter_by = 'today';




    public function render()
    {
        return view('livewire.employer.order.confirmed-page', [
            'confirmed_orders_count' => $this->orders_count(['confirmed']),
            'failed_orders_count' => $this->orders_count(['cancelled', 'not_delivered'])
        ]);
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
            ->statuses(['confirmed'])
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



    public function updateStatus(Order $order, string $status): void
    {
        Gate::authorize('edit-order', $order);
        $order->status = $status;
        $order->save();
    }
}
