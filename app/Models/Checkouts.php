<?php

namespace App\Models;

use App\Traits\Uuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Checkouts extends Model
{
    use Uuids;
    use HasFactory;

    protected $table = 'checkouts';

    protected $fillable = [
        'id_user',
        'id_service',
        'biaya_jemput',
        'status',
    ];

    public function service()
    {
        return $this->belongsTo(ServisModel::class, 'id_service');
    }
}
