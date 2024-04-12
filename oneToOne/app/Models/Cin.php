<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cin extends Model
{
    use HasFactory;

    protected $fillable = ['cin'];

    function user()
    {
        return $this->belongsTo(User::class);
    }
}
