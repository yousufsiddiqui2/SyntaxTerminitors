<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class addtour extends Model
{
    use HasFactory;

    protected $fillable = [
        'Listing_title',
        'Category',
        // location
        'City',
        'Address',
        'State',
        'Zip_code',
        // Gallery
        'upload_Gallery',
        // Details
        'Description',
        'Phone',
        'Website',
        'Email',
        // Pricing
        'Price_title',
        'Price_description',
        'Price',
    ];
}
