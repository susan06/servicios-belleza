<?php
    
    namespace App\Model;
    
    use Illuminate\Database\Eloquent\Model;
    
    class Comments extends Model {
        protected $table      = "comments";
        protected $primaryKey = 'id';
        
        protected $fillable = [
            'id',
            'name',
            'client_id',
            'local_id',
        
        ];
        
    }
