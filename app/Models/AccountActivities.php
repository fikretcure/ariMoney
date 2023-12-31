<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 *
 */
class AccountActivities extends Model
{
    use HasFactory;

    /**
     * @var string[]
     */
    protected $fillable = [
        'from_user',
        'to_user',
        'money',
        'status',
    ];
}
