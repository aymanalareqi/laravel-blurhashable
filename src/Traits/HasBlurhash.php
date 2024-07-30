<?php

namespace Alareqi\LaravelBlurhashable\Traits;

use Bepsvpt\Blurhash\Facades\BlurHash;
use Illuminate\Support\Facades\Storage;

trait HasBlurhash
{
    public function getBlurhashable(): ?array
    {
        return $this->blurhashable ?? [];
    }

    protected static function bootHasBlurhash(): void
    {
        static::creating(function (self $model) {
            foreach ($model->getBlurhashable() as $image_field => $blurhash_field) {
                if (!isset($model->{$image_field})) {
                    continue;
                }
                $model->{$blurhash_field} = BlurHash::encode(Storage::disk('uploads')->path($model->{$image_field}));
            }
        });
        static::updating(function (self $model) {
            foreach ($model->getBlurhashable() as $image_field => $blurhash_field) {
                if (!isset($model->{$image_field}) || !$model->isDirty($image_field)) {
                    continue;
                }
                $model->{$blurhash_field} = BlurHash::encode(Storage::disk('uploads')->path($model->{$image_field}));
            }
        });
    }
}
