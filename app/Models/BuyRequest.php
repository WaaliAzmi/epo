<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class BuyRequest extends Model
{
    protected $fillable = ['name', 'email', 'phone', 'credits','organization', 'reason'];
}