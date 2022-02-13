<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Model2 extends Model
{
    use HasFactory;
    protected $fillable = ['id_usuario','carteira','saldo'] ;

    public function model1()
    {
        return $this->belongsTo(Model1::class);
    }
    public function model3()
    {
        return $this->hasOne(Model3::class);
    }
}
