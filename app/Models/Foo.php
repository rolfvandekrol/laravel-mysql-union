<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Foo extends Model
{
    protected $fillable = [
        'a',
    ];

    public function bars()
    {
        return $this->hasMany(Bar::class);
    }

    public function bazs()
    {
        return $this->hasMany(Baz::class);
    }
}
