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
    use WithPagination,WithoutUrlPagination;

    public $parent_id = 'to-confirm-page';
    public $user;

    public function mount(){
        $this->user = User::find(1);
    }

    #[Computed]
    public function orders() {
        return $this->user->employee->orders()
        ->with('client')
        ->statuses(['to_recall','pending'] )
        ->orderBy('updated_at', 'desc')
        ->simplePaginate(10);
    }

    #[Computed]
    public function orders_count(array $statuses):int{
        return $this->user->employee->orders()
        ->with('client')
        ->statuses($statuses)
        ->orderBy('updated_at', 'desc')
        ->count();
    }


    public function updateStatus(Order $order,$status){
        $order->status=$status;
        $order->save();
    }
}
