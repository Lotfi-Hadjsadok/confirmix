<?php

namespace App\Livewire\Employee\Order;

use App\Models\Order;
use Livewire\Component;
use Livewire\WithPagination;
use Livewire\Attributes\Computed;
use Livewire\WithoutUrlPagination;

class FailedPage extends Component
{
    use WithPagination,WithoutUrlPagination;
    public $parent_id = 'failed-page';

    #[Computed]
    public function orders(){
       return  Order::with('client')->whereIn('status',['not_delivered', 'cancelled'])->orderBy('updated_at','desc')->simplePaginate(10);
    }

    public function updateStatus(Order $order,$status){
        $order->status=$status;
        $order->save();
    }
}
