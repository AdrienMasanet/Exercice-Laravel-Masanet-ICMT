<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;

class DataTable extends Component
{
    use WithPagination;

    public $search = '';
    public $modelName;
    public $indexFields;

    public function render()
    {
        $elementsQuery = $this->modelName::latest();

        if ($this->search != '') {
            $search = '%' . $this->search . '%';
            $elementsQuery->where('name', 'LIKE', $search);
        }

        $elements = $elementsQuery->paginate(20);

        return view('livewire.data-table', compact('elements'));
    }
}
