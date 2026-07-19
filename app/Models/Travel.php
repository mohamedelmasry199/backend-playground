<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Travel extends Model
{
    use HasUuids , sluggable ,HasFactory;
    protected $table = 'travels';
    protected $fillable = [
        'is_public',
        'slug',
        'name',
        'description',
        'number_of_days',
    ];
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'name'
            ]
        ];
    }
    public function tours()
    {
        return $this->hasMany(Tour::class);
    }
    // public function numberOfNights()
    // {
    //     return $this->number_of_days - 1;
    // }
     protected function numberOfNights(): Attribute
{
    return Attribute::make(
        get: fn ($value, array $attributes) => $attributes['number_of_days'] - 1,
    );
}


}
