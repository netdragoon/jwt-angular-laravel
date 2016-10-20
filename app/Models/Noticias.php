<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Noticias extends Model
{

    protected $primaryKey = "id";
    protected $fillable = array(
        'titulo',
        'texto',
        'creditoid'
    );

    protected $table = "noticias";

    public $timestamps = false;


    public function credito()
    {
        return $this->belongsTo(Creditos::class, "creditoid", "id");
    }

}