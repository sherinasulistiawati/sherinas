<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Orangtua extends Model
{
    //
    protected $table='orangtuas';
    protected $fillable=['nama_ibu','nama_ayah','umur_ibu','umur_ayah','alamat'];
    protected $visible=['nama_ibu','nama_ayah','umur_ibu','umur_ayah','alamat'];
    public $timestamps= true ;

    public function anak()
    {
    	return $this->hasMany('App\anak','Orangtua_id');
    }

}
