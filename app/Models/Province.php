<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Province extends Model
{
    //
    protected $table ='province';

    protected $primaryKey = 'pr_id';

    public $incrementing = false;

    protected $fillable = [
        'pr_id',
        'pr_name',
        'pr_name_en'
    ];
}
