<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Creditos extends Model
{

    protected $primaryKey = "id";
    protected $fillable = array(
        'descricao',
        'status',
        'ordem'
    );
    protected $table = "creditos";
    public $timestamps = false;

    public function noticias()
    {
        return $this->hasMany(Noticias::class, "creditoid", "id");
    }

    public function getOrdemAttribute($value)
    {
        return $value > 1;
    }

    public function getDescricaoAttribute($value)
    {
        return strtoupper( $value );
    }
    
}
