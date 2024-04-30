<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    // اسم المودل لازم يكون اول حرف كابتل وبصيغة المفرد
    protected $table = "categories"; // هاد الكود يمكنك توصل للقواعد البيانات 
    protected  $guarded = [];// هدا نفس الشي 
}
