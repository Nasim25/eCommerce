<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as Middleware;

class VerifyCsrfToken extends Middleware
{
    /**
     * The URIs that should be excluded from CSRF verification.
     *
     * @var array
     */
    protected $except = [
        "/admin/check-password","admin/section-update-status","admin/category-update-status","admin/appand-subcategory","admin/product-update-status","admin/delete-attributes/{id}","admin/slider-update-status","append-subcategory",
    ];
}
