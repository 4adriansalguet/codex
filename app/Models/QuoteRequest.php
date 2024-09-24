<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QuoteRequest extends Model
{
    use HasFactory;

    protected $fillable = [
        'model_firstname',
        'model_lastname',
        'model_email',
        'model_phone',
        'model_country',
        'model_projectType',
        'model_attachment_name',
        'model_message',
        'model_price_img_url',
        'model_price',
        'model_pricing_name',
        'model_reference_id',
        'model_status',
    ];

    public function reply(){
        return $this->hasOne(Admin\QuoteRequestReply::class, 'ref_id', 'id'); // 'user_id', 'id'
    }
}
