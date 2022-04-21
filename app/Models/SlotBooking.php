<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laratrust\Traits\LaratrustUserTrait;
use Illuminate\Notifications\Notifiable;
use App\User;
use App\SaloonAvailability;

class SlotBooking extends Model
{
    use LaratrustUserTrait;
    use Notifiable;

    protected $table = 'slot_booking';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['availabilities_id', 'user_id','saloon_id','payment'];
    
    
    // create relation with database tables
    
    public function saloon(){
        return $this->belongsTo(Saloon::class);
    }
    public function customers(){
        return $this->belongsTo(User::class);
    }
    public function availability(){
        return $this->belongsTo(SaloonAvailability::class);
    }
       
}
