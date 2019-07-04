<?php

namespace Modules\ContentManagement\Entities;

use Illuminate\Database\Eloquent\Model;
// use Cviebrock\EloquentSluggable\Sluggable;

class Work extends Model
{
    // use Sluggable;

    protected $fillable = [
        'title',
        'category',
        'description',
        'attachment',
        'is_active',
        'created_by	',
        'updated_by'
    ];

    protected $hidden = ['created_at', 'updated_at'];

     /**
     * Return the sluggable configuration array for this model.
     * 
     * @return array
     */
    // public function sluggable()
    // {
    //     return [
    //         'slug' => [
    //             'source' => 'title'
    //         ]
    //     ];
    // }
}
