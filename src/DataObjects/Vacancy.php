<?php

namespace Eekhoorn\PhpSdk\DataObjects;

use Eekhoorn\PhpSdk\DataObjects\Relations\HasMany;
use Eekhoorn\PhpSdk\DataObjects\Relations\HasOne;

/**
 * @property string                             $title
 * @property string                             $description
 * @property null|Department                    $department
 * @property null|ResourceCollection|Location[] $locations
 */
class Vacancy extends AbstractResource
{
    protected $fillable = [
        'title',
        'description',
    ];

    public function department(): HasOne
    {
        return $this->hasOne(Department::class);
    }

    public function locations(): HasMany
    {
        return $this->hasMany(Location::class);
    }

}
