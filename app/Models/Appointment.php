<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    use HasFactory;

protected $table="appointments";
     /*protected $fillable=[ 
    	'id_mascota_fk',
    	'date_appoinment',
    	'time_appoinment'


    ];*/

    public function pet(){

    return $this->belongsTo('App\Models\Pets', 'id_mascota');


    }
}
