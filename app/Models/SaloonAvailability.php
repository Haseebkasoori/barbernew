<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SaloonAvailability extends Model
{
    protected $guarded = ['id'];
    
    public function saloon(){
        return $this->belongsTo(Saloon::class);
    }
    
    public function service(){
        return $this->belongsTo(BusinessService::class);
    }
}
