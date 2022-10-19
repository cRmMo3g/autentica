<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class velosipedi extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = 'velosipedis';
    protected $guarded = false;
    protected $dates = ['deleted_at'];
#    protected $filliable = [''];

    public function velosipeds()
    {
        return $this->belongsToMany(velosipedi::class, 'velosipedis_darbinieks', 'darbinieki_id', 'velosipedi_id');
    }

}
