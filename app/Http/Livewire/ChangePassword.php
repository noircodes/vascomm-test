<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ChangePassword extends Component
{
    public $password = '123456789';

    public function render()
    {
        return view('livewire.change-password')->extends('layouts.app')->section('content');
    }
}
