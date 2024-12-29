<?php

namespace App\Filament\Resources\HttpResource\Pages\Respon;

use App\Filament\Resources\HttpResource;
use Filament\Resources\Pages\Page;

class Response extends Page
{
    protected static string $resource = HttpResource::class;

    protected static string $view = 'filament.resources.http-resource.pages.respon.response';
}
