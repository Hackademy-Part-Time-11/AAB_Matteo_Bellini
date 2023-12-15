<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function makeUserAdmin(User $user)
    {
        $user->is_admin=true;
        $user->save();
        return redirect()->route('admin.dashboard');
    }

    public function makeUserRevisor(User $user)
    {
        $user->is_revisor =true;
        $user->save();
        return redirect()->route('admin.dashboard');
    }

    public function makeUserWriter(User $user){
        $user->is_writer=true;
        $user->save();

        return redirect()->route('admin.dashboard');
    }

    
}
