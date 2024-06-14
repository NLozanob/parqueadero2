<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $table = 'sales';
    protected $fillable = [
        'sale_date',
        'total_sale',
        'customer_id',
        'status',
        'route',
    
        
    ];

    protected $guarded = ['id','status','registered_by','created_at','updated_at'];

   

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }

   
    public function saleDetails()
    {
        return $this->hasMany(Sale_detail::class);
    }
}