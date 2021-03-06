<?php

declare(strict_types=1);

namespace App\Providers;

use App\Http\Resources\CafeResource;
use Illuminate\Support\ServiceProvider;

final class AppServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        CafeResource::withoutWrapping();
    }
}
