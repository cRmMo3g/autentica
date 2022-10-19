<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Transports extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = 'transports';
    protected $guarded = false;
    protected $dates = ['deleted_at'];
#    protected $filliable = [''];

}
