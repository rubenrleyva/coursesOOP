<?php

namespace Lesson_18;

class User extends Model
{

    public function getFirstNameAttribute($value): string
    {
        return strtoupper($value);
    }


}