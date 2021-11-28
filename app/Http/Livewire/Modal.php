<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Modal extends Component
{
    public $modalId;
    public $modalStyle;
    public $modalType;
    public $buttonUrl;
    public $componentToEmitTo;
    public $buttonCallback;
    public $buttonCallbackArgs;
    public $modalActionText;
    public $modalDismissText;
    public $modalTitle;
    public $modalText;
    public $active;

    public $listeners = [
        'onOpenModal',
        'onCloseModal'
    ];

    public function render()
    {
        return view('livewire.modal');
    }

    public function onOpenModal($properties)
    {
        $this->modalId = $properties['modalId'];
        $properties['modalStyle'] = $this->modalStyle = $properties['modalStyle'] ?? null;
        $properties['modalType'] = $this->modalType = $properties['modalType'] ?? null;
        $properties['componentToEmitTo'] = $this->componentToEmitTo = $properties['componentToEmitTo'] ?? null;
        $properties['buttonCallback'] = $this->buttonCallback = $properties['buttonCallback'] ?? null;
        $properties['buttonCallbackArgs'] = $this->buttonCallbackArgs = $properties['buttonCallbackArgs'] ?? null;
        $properties['modalActionText'] = $this->modalActionText = $properties['modalActionText'] ?? null;
        $properties['modalDismissText'] = $this->modalDismissText = $properties['modalDismissText'] ?? null;
        $properties['modalTitle'] = $this->modalTitle = $properties['modalTitle'] ?? null;
        $properties['modalText'] = $this->modalText = $properties['modalText'] ?? null;
        $this->active = true;
    }

    public function onCloseModal()
    {
        $this->active = false;
    }
}
