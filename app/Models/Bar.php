<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Bar extends Model
{
    protected $fillable = [
        'foo_id',
        'b',
    ];

    public function foo()
    {
        return $this->belongsTo(Foo::class);
    }
}
