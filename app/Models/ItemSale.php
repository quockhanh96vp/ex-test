<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ItemSale extends Model
{
    protected $table = 'item_sale';
    
    protected $fillable = [
        'item_code',
        'item_name',
        'quantity',
        'expired_date',
        'note'
    ];

    public static $rules = [
        'item_code' => 'required|regex:/^[a-zA-Z0-9]+$/',
        'item_name' => 'required|regex:/^[a-zA-Z0-9\s]+$/',
        'quantity' => 'required|numeric',
        'expired_date' => 'required|date',
        'note' => 'nullable|max:60'
    ];
}
