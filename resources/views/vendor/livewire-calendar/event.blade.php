<div
    @if($eventClickEnabled)
        wire:click.stop="onEventClick('{{ $event['id']  }}')"
    @endif
    class="bg-white rounded-lg border py-2 px-3 shadow-md cursor-pointer">

    <p class="text-sm font-medium">
        {{ $event['title'] }}
    </p>
    <p class="mt-2 text-xs">
        {{ $event['start_time'] ?? 'No start_time' }} to
        {{ $event['end_time'] ?? 'No end_time' }}
    </p>
</div>
