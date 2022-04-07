<?php

namespace Modules\Bangchamcong\Repositories\Cache;

use Modules\Bangchamcong\Repositories\BangchamcongRepository;
use Modules\Core\Repositories\Cache\BaseCacheDecorator;

class CacheBangchamcongDecorator extends BaseCacheDecorator implements BangchamcongRepository
{
    public function __construct(BangchamcongRepository $bangchamcong)
    {
        parent::__construct();
        $this->entityName = 'bangchamcong.bangchamcongs';
        $this->repository = $bangchamcong;
    }
}
