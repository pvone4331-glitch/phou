<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Village extends Model
{
    //
    protected $table = 'village';
    protected $primaryKey = 'vill_id';
    public $incrementing = false;
    protected $fillable = ['vill_id','vill_name','vill_name_en','dr_id'];
}
