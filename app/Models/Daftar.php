<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Dotenv\Repository\Adapter\GuardedWriter;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Daftar extends Model
{
    use HasFactory;
    protected $guarded = [];


    /**
     * Get the user that owns the Daftar
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function pasien(): BelongsTo
    {
        return $this->belongsTo(Pasien::class)->withDefault();
    }
    public function poli(): BelongsTo
    {
        return $this->belongsTo(Poli::class)->withDefault();
    }


    //public function poli(): BelongsTo
    //{
    //    return $this->belongsTo(Poli::class);
    //}
}