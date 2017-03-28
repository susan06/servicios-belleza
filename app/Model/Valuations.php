<?php
    
    namespace App\Model;
    
    use Illuminate\Database\Eloquent\Model;
    
    class Valuations extends Model {
        protected $table      = "valuations";
        protected $primaryKey = 'id';
        
        protected $fillable = [
            'id',
            'name',
            'client_id',
            'local_id',
        
        ];
        
    }
