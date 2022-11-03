<div class="status-box-{{ ($status->status === 1) ? 'on' : 'off' }}" wire:poll.keep-alive>
    <div class="title-status">
        {{ ($status->status === 1) ? 'Status On' : 'Status Off' }}
    </div>
</div>