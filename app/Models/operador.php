<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class operador extends Model
{	
	  protected $fillable=[
    	'id',
    	'nombre',
		'paterno',
		'materno'
    ];
    use HasFactory;

    public function getFullnameAttribute()
    {
        return $this->nombre . ' ' . $this->paterno . ' ' . $this->materno;
    }
     public function getFullnameWithoutSpaces()
    {
        return $this->nombre . '' . $this->paterno . '' . $this->materno;
    }
        
    public function historial() {
            return $this->hasMany(historial::class,'operador_id','id');
        }
}
