<?php

namespace App\Models\Admin;

use App\Models\ContactUs;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InboxReply extends Model
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

    public function contact(){
        return $this->belongsTo(ContactUs::class);
    }
}
