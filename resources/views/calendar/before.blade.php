<h2 class="">{{ $this->startsAt->format('M Y') }} </h2>
<button wire:click="goToPreviousMonth">Previous</button>
<button wire:click="goToCurrentMonth">Current</button>
<button wire:click="goToNextMonth">Next</button>
