<?php

namespace App\Http\Livewire;

use App\Events\QueroUmNumeroAleatorio;
use Livewire\Component;

class Counter extends Component
{
    public $count       = 0;
    public $message     = 'Aguardando acontecer alguma coisa...';
    public $mostraHash  = false;
    public $hash        = '';



    public function increment()
    {
        $this->count++;

        QueroUmNumeroAleatorio::dispatch($this->count);

    }

    public function render()
    {
        return view('livewire.counter');
    }

    // Special Syntax: ['echo:{channel},{event}' => '{method}']
    protected $listeners = ['echo-private:canal-hash,QueroUmHash' => 'notificaHash'];

    public function notificaHash($e)
    {
        $this->mostraHash   = true;
        $this->hash         = $e['hash'];
    }


}
