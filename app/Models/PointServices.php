<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PointServices extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = array(
        'idPoint',
        'name',
        'enabled'
    );

    protected $attributes = array(
        'enabled' => 1
    );
}
