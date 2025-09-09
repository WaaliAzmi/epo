<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CreditSaleRequest extends Model
{
    protected $fillable = [
        'credits',
        'verification_image',
        'contact',
        'bank',
        'user_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
