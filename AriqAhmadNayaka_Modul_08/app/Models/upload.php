<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class upload extends Model
{
    protected $fillable = ['user_id', 'filename', 'filepath'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
