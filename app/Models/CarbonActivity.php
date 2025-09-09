<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CarbonActivity extends Model
{
    protected $fillable = [
        'activity_type', 'quantity', 'unit', 'carbon_credits'
    ];
}
