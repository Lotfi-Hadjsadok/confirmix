<?php

namespace App\Livewire\Employee\Order;

use App\Models\Order;
use Livewire\Component;
use Livewire\WithPagination;
use Livewire\Attributes\Computed;
use Livewire\WithoutUrlPagination;

class ToConfirmPage extends Component
{
    use WithPagination,WithoutUrlPagination;

    public $parent_id = 'to-confirm-page';

    #[Computed]
    public function orders(){
       return  Order::query()->with('client')->whereIn('status',['pending', 'to_recall'])->orderBy('updated_at','asc')->simplePaginate(10);
    }

    public function updateStatus(Order $order,$status){
        $order->status=$status;
        $order->save();
    }
}
