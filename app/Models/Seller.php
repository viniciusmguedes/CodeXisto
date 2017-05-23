<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Seller extends Model implements Transformable
{
    use TransformableTrait;

    protected $fillable = [
      'name',
      'email',
      'phone',
      'cell_phone',
      'address',
      'city',
      'state',
      'zipcode',
    ];

    public function products()
    {
      return $this->hasMany(Product::class);
    }
}
