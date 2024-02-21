<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;

    protected $table = 'menus';

    protected $fillable = [
        'nama_menu',
        'harga',
        'deskripsi',
        'foto',
        'kategori',
        'ketersediaan',
        'pembayaraan',
        'supplier',
        'user_id',
        'penerima',
    ];

    public function getRouteKeyName()
    {
        return 'nama_menu';
    }

    public function transaksi()
    {
        return $this->hasMany(Transaksi::class);
    }
    public function pelanggan()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
