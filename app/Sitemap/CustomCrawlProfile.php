<?php

namespace App\Sitemap;

use Spatie\Crawler\CrawlProfiles\CrawlProfile;
use Psr\Http\Message\UriInterface;

class CustomCrawlProfile extends CrawlProfile
{
    public function shouldCrawl(UriInterface $url): bool
    {
        if ($url->getHost() !== 'localhost') {
            return false;
        }

        return $url->getPath() === '/';
    }
}
