<?php

namespace App\Livewire\Employee\Order;

use App\Models\Order;
use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;
use Livewire\Attributes\Computed;
use Livewire\WithoutUrlPagination;

class ConfirmedPage extends Component
{

    use WithPagination,WithoutUrlPagination;
    public $parent_id = 'confirmed-page';
    public $filter_by = 'today';
    public $user;


    public function mount(){
        $this->user = User::find(1);
    }

    #[Computed]
    public function orders() {
        return $this->user->employee->orders()
        ->with('client')
        ->statuses(['confirmed'] )
        ->orderBy('updated_at', 'desc')
        ->dateFilter($this->filter_by)
        ->simplePaginate(10);
    }


    #[Computed]
    public function orders_count(array $statuses):int{
        return $this->user->employee->orders()
        ->with('client')
        ->statuses($statuses)
        ->orderBy('updated_at', 'desc')
        ->dateFilter($this->filter_by)
        ->count();
    }

    public function render()
    {
        return view('livewire.employee.order.confirmed-page');
    }

    public function updateStatus(Order $order,string $status):void{
        $order->status=$status;
        $order->save();
    }


}
