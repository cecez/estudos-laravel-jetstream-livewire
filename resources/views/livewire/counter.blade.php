<div style="text-align: center">
    <button wire:click="increment">+</button>
    <h1>{{ $count }}</h1>

    <p>
        {{ $message }}
    </p>


    @if ($mostraHash)
        <p>{{ $hash }}</p>
    @endif

</div>
