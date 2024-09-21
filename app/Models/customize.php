<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class customize extends Model
{
    use HasFactory;
    protected $fillable = [
        
        'Destination', 
        'Days', 
        'Start_date', 
        'End_date',
        'Travelmode',
        'Vehicle',
        'Total_persons',
        'Adults',
        'Children',
        'Totalrooms',
        'Departure_location',
        'Tour_guide',
        'Group_category',
        'Services',
        'Requirements',
        'Full_name',
        'Email_Address',
        'WhatsApp_number'

    ];
}
