<?php
    
    namespace App\Model;
    
    use Illuminate\Database\Eloquent\Model;
    
    class Favorites extends Model {
        protected $table      = "favorites";
        protected $primaryKey = 'id';
        
        protected $fillable = [
            'id',
            'name',
            'client_id',
            'local_id',
        
        ];
        
    }
