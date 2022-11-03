<div>
    <input class="onoffswitch-checkbox" role="switch" type="checkbox" id="{{ $model->id }}" wire:model.lazy="status"
        @if($status) checked @endif>
    <label class="onoffswitch-label" for="{{ $model->id }}"></label>
</div>