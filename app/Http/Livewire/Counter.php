<?php

namespace App\Http\Livewire;

use App\Events\QueroUmNumeroAleatorio;
use Livewire\Component;

class Counter extends Component
{
    public $count = 0;
    public $message = 'Aguardando acontecer alguma coisa...';



    public function increment()
    {
        $this->count++;

        // todo: gerar um evento aqui, passando o contador como parâmetro
        QueroUmNumeroAleatorio::dispatch($this->count);

    }

    public function render()
    {
        return view('livewire.counter');
    }


}
