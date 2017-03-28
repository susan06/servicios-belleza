<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Packages extends Model
{
    protected $table = "packages";
    protected $primaryKey = 'id';
    
    protected $fillable = [
        'id',
        'company_id',
        'name',
    ];


}
