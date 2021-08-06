<?php

namespace App\Models;

use App\Models\Pelatihan;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class LaporanAktualisasi extends Model
{
    protected $guarded = ['id'];

    /**
     * Get the pelatihan that owns the LaporanAktualisasi
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function pelatihan(): BelongsTo
    {
        return $this->belongsTo(Pelatihan::class);
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
