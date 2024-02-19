<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = "products";
//ชื่อคอลัมน์ในฐานข้อมูลที่อนุญาตให้แก้ไขข้อมูล
protected $fillable = ['title', 'content', 'price', 'photo', 'stock'];    
//Primary Key
 	protected $primaryKey = "id";
}
