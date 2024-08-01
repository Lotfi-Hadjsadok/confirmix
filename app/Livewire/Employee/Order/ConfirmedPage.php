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

    #[Computed]
    public function orders(){
       return  Order::with('client')->where('status','confirmed')->orderBy('updated_at','desc')->simplePaginate(10);
    }


    public function render()
    {
        return view('livewire.employee.order.confirmed-page');
    }

    public function updateStatus(Order $order,$status){
        $order->status=$status;
        $order->save();
    }

}
