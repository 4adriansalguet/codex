<?php

namespace App\Models;

use App\Models\Admin\InboxReply;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactUs extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'phone',
        'email',
        'message',
        'reference_id'
    ];

    public function reply(){
        return $this->hasOne(Admin\InboxReply::class, 'ref_id', 'id'); // 'user_id', 'id'
    }
}
