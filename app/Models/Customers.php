<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Customers extends Model
{
    //
     protected $table = 'dristric';

     protected $primaryKey = 'id';

     public $incrementing = false;

     protected $fillable = ['id','name_lastname','vill_id','street_address'];
    
     public function village(){
        return  $this->delongsTo(Village::class,'vill_id','vill_id');
    }
}
