<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class VelosipedisDarbinieks extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = 'velosipedis_darbinieks';
    protected $guarded = false;
    protected $dates = ['deleted_at'];
#    protected $filliable = [''];

    public function braucamais()
    {
        return $this->belongsToMany(VelosipedisDarbinieks::class, 'velosipedis_darbinieks', 'darbinieki_id', 'velosipedi_id');
    }

    public function darbinieks()
    {
        return $this->belongsTo(darbiniek::class, 'darbinieki_id', 'id');
    }

    public function velosipeds()
    {
        return $this->belongsTo(velosipedi::class, 'velosipedi_id', 'id');
    }

}
