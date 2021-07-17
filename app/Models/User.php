<?php

namespace App\Models;

use App\Models\Skpd;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
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

}
