<?php
 
namespace App\Models;
 
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
 
class Product extends Model
{
    use HasFactory;
 
    protected $table = 'products';
    protected $fillable = [
        'name', 'detail', 'image' ,'user_id'
    ];
    
    public function User()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}