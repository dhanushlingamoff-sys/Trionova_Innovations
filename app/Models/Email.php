<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Email extends Model
{
    protected $table = 'emails';

    public $timestamps = false; // Since you’re using custom timestamps

    protected $fillable = [
        'name',
        'email',
        'phone_number',
        'refferal',
        'message',
        'status',
        'created_date_time',
        'updated_date_time',
    ];

    // You can also define the custom timestamps explicitly like this:
    const CREATED_AT = 'created_date_time';
    const UPDATED_AT = 'updated_date_time';
}
