<?php

namespace App\Http\Livewire\Admin\Users;

use Livewire\Component;
use App\Models\User;

class Index extends Component
{
    public $users=0;
    public function render()
    {
     $this->users=User::all();

        return view('livewire.admin.users.index')->extends('layouts.app');;
    }
    public function delete($id)
    {

        User::find($id)->delete();

        return true;

    }
}
