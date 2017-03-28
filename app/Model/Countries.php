<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Countries extends Model
{
    protected $table = "countries";
    public $timestamps = false;
    public $incrementing = false;
    
    protected $primaryKey = 'iso';
    protected $fillable = [
        'name',
        'iso',
        'details'
    ];

    public function setDetailsAttribute($value) {
        $this->attributes['details'] = json_encode($value);
    }

    public function getDetailsAttribute($value) {
        return json_decode($value);
    }

}
