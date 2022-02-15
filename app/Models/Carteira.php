<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Carteira extends Model
{
    use HasFactory;
    protected $fillable = ['id_usuario','saldo'] ;

    public function carteira()
    {
        return $this->belongsTo(Usuario::class);
    }
    public function movement()
    {
        return $this->hasOne(Carteira::class);
    }
}
