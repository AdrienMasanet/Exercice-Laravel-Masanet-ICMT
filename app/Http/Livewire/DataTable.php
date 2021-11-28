<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Support\Str;


class DataTable extends Component
{
    use WithPagination;

    public $search = '';
    public $modelName;
    public $indexFields;
    public $showFields;
    public $canCreate;
    public $buttonCallbackArgs;

    public $listeners = [
        'onCreateNewElement',
        'onOpenViewModal',
        'onOpenEditModal',
        'onOpenRemoveModal',
        'onDataTableActionShowElement',
        'onDataTableActionEditElement',
        'onDataTableActionRemoveElement'
    ];

    public function render()
    {
        $elementsQuery = $this->modelName::latest();

        if ($this->search != '') {
            $search = '%' . $this->search . '%';
            foreach ($this->indexFields as $field) {
                $elementsQuery->orWhere($field, 'LIKE', $search);
            }
        }

        $elements = $elementsQuery->paginate(20);

        return view('livewire.data-table', compact('elements'));
    }

    public function onCreateNewElement()
    {
        $this->emitSelf('onOpenEditModal');
    }

    public function onOpenViewModal($showFields, $elementId)
    {
        $element = $this->modelName::find($elementId)->first();
        $modalText = '';

        foreach (json_decode($showFields) as $field) {
            $methodToCheck = 'getFormatted' . ucfirst(Str::camel($field));

            if (method_exists($element, $methodToCheck)) {
                $modalText = $modalText . '<p> ' . trans('datatables.' . $field) . ' : <span class="color-orange">' . $element->$methodToCheck() . '</span></p>';
            } else {
                $modalText = $modalText . '<p> ' . trans('datatables.' . $field) . ' : <span class="color-orange">' . $element->$field . '</span></p>';
            }
        }

        $this->emitTo('modal', 'onOpenModal', [
            'modalId' => 'view',
            'componentToEmitTo' => 'modal',
            'modalDismissText' => 'Fermer',
            'modalText' => $modalText
        ]);
    }

    public function onOpenEditModal()
    {
        $this->emitTo('modal', 'onOpenModal', [
            'modalId' => 'edit',
            'modalStyle' => 'edit',
            'modalType' => 'action',
            'componentToEmitTo' => 'data-table',
            'buttonCallback' => 'onDataTableActionEditElement',
            'modalActionText' => 'Enregistrer',
            'modalDismissText' => 'Annuler'
        ]);
    }

    public function onOpenRemoveModal($elementId)
    {
        $this->emitTo('modal', 'onOpenModal', [
            'modalId' => 'remove',
            'modalStyle' => 'remove',
            'modalType' => 'action',
            'componentToEmitTo' => 'data-table',
            'buttonCallback' => 'onDataTableActionRemoveElement',
            'buttonCallbackArgs' => $elementId,
            'modalActionText' => 'Supprimer',
            'modalDismissText' => 'Annuler',
            'modalTitle' => 'Supprimer',
            'modalText' => 'Êtes vous sûr(e) de vouloir supprimer cet élément ?'
        ]);
    }

    public function onDataTableActionEditElement()
    {
        dd('édition !'); // TODO
    }

    public function onDataTableActionRemoveElement($elementId)
    {
        $this->modelName::find($elementId)->delete();
        $this->emitTo('modal', 'onCloseModal');
    }
}
