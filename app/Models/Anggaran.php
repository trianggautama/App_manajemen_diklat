<?php

namespace App\Models;

use App\Models\Pelatihan;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Anggaran extends Model
{
    protected $guarded = ['id'];

    /**
     * Get the pelatihan that owns the Anggaran
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function pelatihan(): BelongsTo
    {
        return $this->belongsTo(Pelatihan::class);
    }
}
