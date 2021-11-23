<?php

namespace App\Http\Livewire;

use App\Models\Brand;
use Livewire\Component;
use Livewire\WithPagination;

class DataTable extends Component
{
    use WithPagination;

    public $search = '';
    public $modelName;
    public $fields;

    public function render()
    {
        $elementsQuery = $this->modelName::latest();

        if ($this->search != '') {
            $search = '%' . $this->search . '%';
            $elementsQuery->where('name', 'LIKE', $search);
        }

        $elements = $elementsQuery->paginate(50);

        return view('livewire.data-table', compact('elements'));
    }
}
