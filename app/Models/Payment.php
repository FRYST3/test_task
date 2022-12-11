<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;

    protected $table = 'payment';

    protected $fillable = ['user_id', 'method', 'amount', 'status'];

    protected $hidden = ['created_at', 'updated_at'];

}
