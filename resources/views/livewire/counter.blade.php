<div style="text-align: center">
    <button wire:click="increment">+</button>
    <h1>{{ $count }}</h1>


    <input wire:model="resultado" type="text">
    <p>
        Resultado: {{ $resultado }}
    </p>
</div>
