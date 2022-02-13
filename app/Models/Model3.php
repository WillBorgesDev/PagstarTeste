<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Model3 extends Model
{
    use HasFactory;
    protected $fillable = [
        'type',
        'carteira_id',
        'value'
    ];

    public function model2()
    {
        return $this->belongsTo(Model2::class);
    }
}
