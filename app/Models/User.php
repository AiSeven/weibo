<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    public function gravatar($size = '100')
    {
        $hash = md5(strtolower(trim($this->attributes['email'])));
        return "http://www.gravatar.com/avatar/$hash?s=$size";
    }
}
