<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class anak extends Model
{
    //
    protected $table='anaks';
    protected $fillable=['nama','Orangtua_id','umur','alamat'];
    protected $visible=['nama','Orangtua_id','umur','alamat'];
    public $timestamps= true ;

    public function orangtua()
    {
    	return $this->belongsTo('App\Orangtua','Orangtua_id');
    }
}
