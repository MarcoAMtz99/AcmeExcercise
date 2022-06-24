<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class historial extends Model
{
	protected $fillable=[
    	'operador_id',
		'direccion_id',
		'ss',
		'status'
    ];
    use HasFactory;

    public function operador()
			{
			  return $this->belongsTo(operador::class,'id','operador_id');
			}
	public function direccion()
			{
			  return $this->belongsTo('App\Models\direccion','id','direccion_id');
			}
}
