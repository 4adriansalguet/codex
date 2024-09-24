<?php

namespace App\Models\Admin;

use App\Models\QuoteRequest;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QuoteRequestReply extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'ref_id',
        'avatar_url',
        'receiver_email',
        'sender_email',
        'reference_id',
        'message'
    ];

    public function quoteRequested(){
        return $this->belongsTo(QuoteRequest::class);
    }
}
