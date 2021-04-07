<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Counter extends Component
{
    public $count = 0;
    public $message = 'Aguardando acontecer alguma coisa...';



    public function increment()
    {
        $this->count++;

        // todo: gerar um evento aqui, passando o contador como parâmetro

    }

    public function render()
    {
        return view('livewire.counter');
    }


}
