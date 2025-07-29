<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $fillable = [
        'name',
        'description',
        'status',
        'priority',
        'id_user',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
