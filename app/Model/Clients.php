<?php
    
    namespace App\Model;
    
    use Illuminate\Database\Eloquent\Model;
    
    class Clients extends Model {
        protected $table      = "clients";
        protected $primaryKey = 'id';
        
        protected $fillable = [
            'id',
            'local_id',
            'firstname',
            'lastname',
            'date_birth',
            'gender',
            'phone',
            'direction',
            'details',
            'status',
        ];
        
        public function setPhoneAttribute($value) {
            $this->attributes['phone'] = json_encode($value);
        }
        
        public function getPhoneAttribute($value) {
            return json_decode($value);
        }
    
        public function setDirectionAttribute($value) {
            $this->attributes['direction'] = json_encode($value);
        }
    
        public function getDirectionAttribute($value) {
            return json_decode($value);
        }
    
        public function setDetailsAttribute($value) {
            $this->attributes['details'] = json_encode($value);
        }
    
        public function getDetailsAttribute($value) {
            return json_decode($value);
        }
         
    }
