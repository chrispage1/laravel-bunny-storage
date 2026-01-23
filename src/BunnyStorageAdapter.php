<?php

namespace Bangnokia\LaravelBunnyStorage;

use Carbon\CarbonInterface;
use League\Flysystem\Config;
use PlatformCommunity\Flysystem\BunnyCDN\BunnyCDNAdapter;

class BunnyStorageAdapter extends BunnyCDNAdapter
{
    public function getUrl(?string $path = null): string
    {
        return parent::publicUrl((string) $path, new Config());
    }

    public function getTemporaryUrl(string $path, CarbonInterface $carbon, array $options)
    {
        return parent::temporaryUrl($path, $carbon->toDateTime(), new Config($options));
    }
}