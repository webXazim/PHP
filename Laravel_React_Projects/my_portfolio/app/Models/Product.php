<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'price',
        'off',
        'excerpt',
        'pvl',
        'slug',
        'image',
        'description',
        'image',
        'cetegory_id',
    ];


    protected $with = ['category', 'creator'];

    public function scopeFilter($query, array $filters)
    {
        $query->when(
            $filters['search'] ?? false,
            fn ($query, $search) =>
            $query->where(
                fn ($query) =>
                $query->where('name', 'like', '%' . $search . '%')
                    ->orWhere('description', 'like', '%' . $search . '%')
            )
        );

        $query->when(
            $filters['category'] ?? false,
            fn ($query, $category) =>
            $query->whereHas(
                'category',
                fn ($query) =>
                $query->where('slug', $category)
            )
        );

        $query->when(
            $filters['creator'] ?? false,
            fn ($query, $creator) =>
            $query->whereHas(
                'creator',
                fn ($query) =>
                $query->where('username', $creator)
            )
        );
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function category()
    {
        return $this->belongsTo(ProductCategory::class);
    }

    public function creator()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
