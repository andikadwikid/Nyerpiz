<?php

namespace App\Models;

use App\Traits\Uuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServisModel extends Model
{
    use Uuids;
    use HasFactory;

    protected $table = 'services';
    protected $primaryKey = 'id';
    protected $guarded = [];

    protected $fillable = [
        'nomor_antri',
        'id_user',
        'layanan',
        'nama_barang',
        'merk_barang',
        'alamat',
        'no_telp',
        'keluhan',
        'image',
        'status',
        'tanggal_servis',
        'tindakan_servis',
    ];
    public $timestamps = false;

    public function scopeSearch($query, string $keyword)
    {
        return $query->where('nama_barang', 'like', "%{$keyword}%")
            ->orWhere('tanggal_servis', 'like', "%{$keyword}%")
            ->orWhere('status', 'like', "%{$keyword}%")
            ->latest('tanggal_servis')
            ->paginate(5);
    }

    public function checkout()
    {
        return $this->hasOne(Checkouts::class);
    }

    public function users()
    {
        return $this->belongsTo(User::class, 'id_user');
    }
}
