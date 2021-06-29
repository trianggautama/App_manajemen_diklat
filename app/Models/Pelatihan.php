<?php

namespace App\Models;

use App\Models\JenisDiklat;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Pelatihan extends Model
{
    protected $guarded = [''];

    /**
     * Get the jenis_diklat that owns the Pelatihan
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function jenis_diklat(): BelongsTo
    {
        return $this->belongsTo(JenisDiklat::class);
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
