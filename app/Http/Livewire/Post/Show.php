<?php

namespace App\Http\Livewire\Post;

use Livewire\Component;

class Show extends Component
{
    public $user = '';
    public function render()
    {
        return view('livewire.post.show')->extends('layouts.app');
    }
}
