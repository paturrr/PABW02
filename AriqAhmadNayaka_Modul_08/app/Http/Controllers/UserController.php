<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class UserController extends Controller
{
    public function destroy($user_id)
    {
        $user = User::findOrFail($user_id);
        if (Auth::check() && Auth::user()->role === 'admin' && Auth::id() !== $user->id) {
            $user->delete();
            return back()->with('success', 'User deleted successfully.');
        } else if (Auth::check() && Auth::id() === $user->id) {
            return back()->with('error', 'Cannot delete your own account!');
        } else {
            return back()->with('error', 'You do not have permission to delete this user.');
        }
    }
}
