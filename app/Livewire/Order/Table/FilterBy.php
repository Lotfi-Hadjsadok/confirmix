<?php

namespace App\Livewire\Order\Table;

use Livewire\Component;
use Livewire\Attributes\Modelable;

class FilterBy extends Component
{
    #[Modelable]
    public $filter_by;
    public $parent_id;


    public function render()
    {
        return view('livewire.order.table.filter-by');
    }


}
