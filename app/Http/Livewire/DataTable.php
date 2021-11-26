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

    public $listeners = [
        'onOpenViewModal',
        'onOpenEditModal',
        'onOpenRemoveModal'
    ];

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

    public function onOpenViewModal()
    {
        $this->emitTo('modal', 'onOpenModal', [
            'modalId' => 'view',
            'buttonCallback' => 'onDataTableActionShowElement',
            'modalDismissText' => 'Fermer',
            'modalTitle' => 'Affichage de TODO',
        ]);
    }

    public function onOpenEditModal()
    {
        $this->emitTo('modal', 'onOpenModal', [
            'modalId' => 'edit',
            'modalStyle' => 'edit',
            'modalType' => 'action',
            'buttonCallback' => 'onDataTableActionEditElement',
            'modalActionText' => 'Enregistrer',
            'modalDismissText' => 'Annuler',
            'modalTitle' => 'Édition de TODO'
        ]);
    }

    public function onOpenRemoveModal()
    {
        $this->emitTo('modal', 'onOpenModal', [
            'modalId' => 'remove',
            'modalStyle' => 'remove',
            'modalType' => 'action',
            'buttonCallback' => 'onDataTableActionRemoveElement',
            'modalActionText' => 'Supprimer',
            'modalDismissText' => 'Annuler',
            'modalTitle' => 'Supprimer le truc',
            'modalText' => 'Êtes vous sûr(e) de supprimer le truc ?'
        ]);
    }
}
