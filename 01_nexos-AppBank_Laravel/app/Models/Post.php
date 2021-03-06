<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Post extends Model
{
    use Sluggable, HasFactory;

    protected $fillable = ['title', 'body'];

    /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title',
                'onUpdate' => true
            ]
        ];
    }

   
    //Un usurio pertenece a un post
    public function user(){
        return $this->belongsTo(User::class);
    }

    public function getGetExcerptAttribute(){
        return substr($this->body, 0, 140);
    }

}
