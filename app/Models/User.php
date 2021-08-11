<?php

namespace App\Models;

use App\Models\Skpd;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $guarded = [''];

    /**
     * Get the skpd that owns the User
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function skpd(): BelongsTo
    {
        return $this->belongsTo(Skpd::class);
    }
    
    public function pelatihan(): BelongsTo
    {
        return $this->belongsTo(Pelatihan::class);
    }

    public function laporan(): HasOne
    {
        return $this->hasOne(LaporanAktualisasi::class);
    }

    public function penyakit(): BelongsTo
    {
        return $this->belongsTo(Penyakit::class);
    }
}
