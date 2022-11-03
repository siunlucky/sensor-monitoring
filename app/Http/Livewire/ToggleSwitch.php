<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Http;
use Illuminate\Database\Eloquent\Model;

class ToggleSwitch extends Component
{
    public Model $model;
    public string $field;

    public bool $status;
    public string $request;

    public function mount()
    {
        $this->status = (bool) $this->model->getAttribute($this->field);
    }

    public function render()
    {
        return view('livewire.toggle-switch');
    }

    public function updating($field, $value)
    {
        $this->model->setAttribute($this->field, $value)->save();

        $this->request = Http::withHeaders([
            'X-M2M-Origin' => 'fe3b96d7daf1a178:3ac0dce97c6a7c85',
            'Content-Type' => 'application/json;ty=4',
            'Accept' => 'application/json'
        ])->post('https://platform.antares.id:8443/~/antares-cse/antares-id/sandoff1/sensor1', [
            'm2m:cin' => array(
                'con' => json_encode(
                    array(
                        'Name' => $this->model->sensor_name,
                        'Status' => ($this->model->status === true) ? "on" : "off"
                    )
                )
            )
        ]);
    }
}
