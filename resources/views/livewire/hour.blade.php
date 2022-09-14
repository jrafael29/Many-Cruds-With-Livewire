<div style="font-family: 'Allerta Stencil', sans-serif;" wire:poll.100ms class="p-3 fs-4 ">
    {{ date('d/m/y', strtotime('now')) }}

    <span class="text-warning"> {{ date('h:i:s', strtotime('now')) }} </span>
</div>
