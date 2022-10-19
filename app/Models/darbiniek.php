<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class darbiniek extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = 'darbinieks';
    protected $guarded = false;
    protected $dates = ['deleted_at'];
#    protected $filliable = [''];

public function darbinieks()
{
        return $this->belongsToMany(Darbiniek::class, 'velosipedis_darbinieks', 'velosipedi_id', 'darbinieki_id');
}




}
