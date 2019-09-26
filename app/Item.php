<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class Item extends Model
{
    use Searchable;
    protected $fillable = [
        'header',
        'content',
        'views'
    ];

    public function category()
    {
        return $this->belongsTo('App\Category', 'category_id');
    }


    public function toSearchableArray()
    {
        $array = $this->toArray();

        return array('id' => $array['id'], 'header' => $array['header'], 'content' => $array['content']);
    }
}
