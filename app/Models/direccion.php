<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class direccion extends Model
{	
	protected $fillable=[
    	'street',
		'city',
		'spa',
		'phone',
		'zipcode'
    ];
    use HasFactory;

    public function getFullnameAdress()
    {
        return $this->street . ' ' . $this->city . ' ' . $this->spa. ' '.$this->phone. ' '.$this->zipcode ;
    }
    public function getStreetWithotSpaces(){
        return str_replace(' ','',$this->street);
    }
      public function historial() {
            return $this->hasMany('App\Models\historial','direccion_id','id');
        }
}
