{{-- <h2 class="text-2xl">{{ $this->startsAt->format('M Y') }}</h2> --}}

<div class="">
    <div class="">
        <button wire:click="goToPreviousMonth"></button>
        <h2 class=" text-2xl">{{ $this->startsAt->format('F Y') }} </h2>
        <button wire:click="goToNextMonth"></button>
    </div>  
    <p class="mt-2"></p>
</div>
