<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

class Category extends Model
{
    use HasFactory;

    protected $fillable = ['name','slug'];

    protected $allowFilter = ['id','name','slug'];

    public function posts()
    {
        return $this->hasmany(Post::class);
    }

    public function scopeInclude(Builder $query){
        $relations = explode('',request('included')) ;
        $query->with($relations);
    }
}
