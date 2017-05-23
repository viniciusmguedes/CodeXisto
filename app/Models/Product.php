<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Product extends Model implements Transformable
{
    use TransformableTrait;

    protected $fillable = [
      'seller_id',
      'category_id',
      'status_id',
      'name',
      'description',
      'price',
      'featured'
    ];

    public function category()
    {
      return $this->belongsTo(Category::class);
    }

    public function seller()
    {
      return $this->belongsTo(Seller::class);
    }

    public function status()
    {
      return $this->belongsTo(Status::class);
    }

    public function photos()
    {
        return $this->hasMany(Photo::class);
    }

    public function scopeFeatured($query){
      return $query;
    }

    public function scopeNews($query){
      return $query->orderBy('id', 'desc')->all()->take(3);;
    }
}
