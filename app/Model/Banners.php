<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Banners extends Model
{
    protected $table = "banners";
    protected $primaryKey = 'id';
    
    protected $fillable = [
        'id',
        'priority',
        'status',
        'details'
    ];
    
    public function setDetailsAttribute($value) {
        $this->attributes['details'] = json_encode($value);
    }
    
    public function getDetailsAttribute($value) {
        return json_decode($value);
    }

}
