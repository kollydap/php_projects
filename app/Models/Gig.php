<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gig extends Model
{
    use HasFactory;

    //this are colums in the Gig table
    protected $fillable = ['company','title','location','website','email','description','tags'];

    //scope filter to filter by tag

    // This code defines a scope method called filter() on the Gig model,
    //  which is used to filter gigs based on a provided tag.

    // In this case, the filter() scope accepts two parameters:
    public function scopeFilter($query, array $filters)
    {
        //if this there is a tag do sth if not just move on
        if ($filters['tag'] ?? false) {
            $query->where('tags', 'like', '%' . request('tag') . '%');
        }
        if ($filters['search'] ?? false){
            $query->where('title', 'like', '%' . request('search') . '%')
            ->orWhere('description', 'like', '%' . request('search') . '%')
            ->orWhere('tags', 'like', '%' . request('search') . '%');
        }

    }
}