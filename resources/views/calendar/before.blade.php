<div class="flex items-center flex-col my-10">
    <div class="flex items-center justify-center gap-6">
        <button class=" text-2xl" wire:click="goToPreviousMonth"><i class="bx bx-chevron-left"></i></button>
        <h2 class=" text-2xl">{{ $this->startsAt->format('F Y') }} </h2>
        <button class=" text-2xl" wire:click="goToNextMonth"><i class="bx bx-chevron-right"></i></button>
    </div>
    <p class="mt-2">Click a date with sales to view the list of transaction for that day</p>
</div>