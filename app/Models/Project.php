<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'user_id',
        'status',
        'category',
        'description'
    ];

    // function relasi dari model project dengan model user
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function teams()
    {
        return $this->hasMany(Teams::class);
    }

    public function todos()
    {
        return $this->hasMany(Todo::class);
    }
}
