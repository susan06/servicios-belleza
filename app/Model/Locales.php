<?php
    
    namespace App\Model;
    
    use Illuminate\Database\Eloquent\Model;
    
    class Locales extends Model {
        protected $table      = "locales";
        protected $primaryKey = 'id';
        
        protected $fillable = [
            'id',
            'company_id',
            'name',
            'province',
            'location',
            'packages',
            'pryce',
            'phone',
            'description',
            'domicile',
            'email',
            'reservation_web',
            'method_pay',
            'status',
        
        ];
        
        public function setLocationAttribute($value) {
            $this->attributes['location'] = json_encode($value);
        }
        
        public function getLocationAttribute($value) {
            return json_decode($value);
        }
        
        public function setPhoneAttribute($value) {
            $this->attributes['phone'] = json_encode($value);
        }
        
        public function getPhoneAttribute($value) {
            return json_decode($value);
        }
        
    }
