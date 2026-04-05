<?php

namespace SmartCms\Seo\Traits;

use Illuminate\Database\Eloquent\Relations\MorphOne;
use SmartCms\Seo\Models\Seo;

/**
 * Trait HasSeo
 */
trait HasSeo
{
    protected static $requestCache = [];

    /**
     * Get the SEO relationship.
     *
     * @return MorphOne
     */
    public function seo()
    {
        return $this->morphOne(Seo::class, 'seoable');
    }
}
