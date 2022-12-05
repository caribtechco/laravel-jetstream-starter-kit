<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use Osoobe\Livewire\BootstrapComponents\CardTiles;

class AdminTiles extends CardTiles
{
    public $search = '';
    public $cards = [];

    public function mount() {
        $this->cards = config('admin.dashboard_items');
    }

}
