<div class="flex items-center flex-col my-10">
    <div class="flex items-center justify-center gap-6">
        <button class=" text-2xl" wire:click="goToPreviousMonth"><i class="bx bx-chevron-left"></i></button>
        <h2 class=" text-2xl">{{ $this->startsAt->format('F Y') }} </h2>
        <button class=" text-2xl" wire:click="goToNextMonth"><i class="bx bx-chevron-right"></i></button>
    </div>
</div>
<div class="flex w-full -mb-4 pr-7 justify-end -translate-y-8">
    <div
        class="flex justify-center items-center bg-blue-700 text-white dark:bg-blue-700 hover:bg-blue-600 border  rounded-md border-blue-700 w-36 h-10">
        <a href="{{ route('export') }}" class=""> Export Schedule </a>
    </div>
</div>
