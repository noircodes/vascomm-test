<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Profile extends Component
{

    public function render()
    {
        $data = [
            'name' => 'Ilham Izdhihar',
            'birth' => '20 Juli 1999',
            'city' => 'Salatiga',
            'email' => 'ilhamizdhihar2007@gmail.com'
        ];

        return view('livewire.profile', $data)->extends('layouts.app')->section('content');
    }
}
