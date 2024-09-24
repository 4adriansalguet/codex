<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CodexTestimonials extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'star_count',
        'message',
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
