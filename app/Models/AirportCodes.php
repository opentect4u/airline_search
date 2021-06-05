<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class AirportCodes extends Model
{
    use HasFactory,Notifiable;
    // protected $primaryKey = 'sl_no';
    protected $table='airport_codes';
    protected $fillable = [
        'id','name','code',
    ]; 
}
