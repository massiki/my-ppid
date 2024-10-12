<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class KategoriInformasi extends Model
{
    use HasFactory;

    protected $table = 'kategori_informasi';

    public function informasipublik(): HasMany
    {
        return $this->hasMany(InformasiPublik::class);
    }
}
