<?php

namespace App\Models;

use App\Models\ObjekPenilaian;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class PenilaianPeserta extends Model
{
    protected $guarded = ['id'];

    /**
     * Get the objek_penilaian that owns the PenilaianPeserta
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function objek_penilaian(): BelongsTo
    {
        return $this->belongsTo(ObjekPenilaian::class);
    }
}
