<?php
    
    namespace App\Model;
    
    use Illuminate\Database\Eloquent\Model;
    
    class Reservations extends Model {
        protected $table      = "reservations";
        protected $primaryKey = 'id';
        
        protected $fillable = [
            'id',
            'name',
            'client_id',
            'local_id',
        
        ];
        
    }
