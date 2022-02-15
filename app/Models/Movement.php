<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movement extends Model
{
    use HasFactory;
    protected $fillable = [
        'type',
        'carteira_id',
        'value'
    ];

    public function carteira()
    {
        return $this->belongsTo(Carteira::class);
    }
}
