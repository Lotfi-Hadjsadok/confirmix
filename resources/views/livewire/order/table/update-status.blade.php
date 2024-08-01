<select class="absolute opacity-0" wire:change='$parent.updateStatus({{ $order->id }}, $event.target.value)'>
    @foreach (Status::cases() as $status)
        <option @selected($order->status == $status->value) value="{{ $status->value }}">
            {{ Status::tryFrom($status->value)->getName() }}
        </option>
    @endforeach
</select>
