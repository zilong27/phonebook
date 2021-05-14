<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory; 
    
   protected $fillable = [
       'name','contact_number','image_path','user_id'
    ];
   
}
