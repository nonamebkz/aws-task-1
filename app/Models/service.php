<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class service extends Model
{
    use HasFactory;

    protected $table = "service";
    protected $fillable = [
        'service_name',
        'service_description',
        'service_image',
        'service_price'
    ];
}
