<?php declare(strict_types=1); ?>
<div>
    
<input wire:model.live="search">

<br>

<ul>

@foreach ($users as $user)
    <li>{{ $user->name }}</li>
@endforeach

</ul>


</div>
