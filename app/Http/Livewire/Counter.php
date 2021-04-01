<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Counter extends Component
{
    public $count = 0;
    public $resultado = 'valor inicial';
    public $message = 'Mensagem inicial';

    protected $listeners = ['atualizaMensagem'];

    public function atualizaMensagem() {
        $this->message = 'A mensagem foi atualizada a partir do incremento!';
    }

    public function increment()
    {
        $this->count++;

        // chama outro
        $this->emit('atualizaMensagem');
    }

    public function render()
    {
        return view('livewire.counter');
    }
}
