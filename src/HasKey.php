<?php

namespace Assumilhig\LaravelKeyGenerator;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

trait HasKey
{
    public static function bootHasKey(): void
    {
        static::creating(function (Model $model) {
            return $model->key = Str::key(substr(strtolower(class_basename($model)), 0, 3).'_');
        });
    }
}
