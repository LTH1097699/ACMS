<?php

namespace Modules\Quanlychung\Repositories\Cache;

use Modules\Quanlychung\Repositories\hopdongRepository;
use Modules\Core\Repositories\Cache\BaseCacheDecorator;

class CachehopdongDecorator extends BaseCacheDecorator implements hopdongRepository
{
    public function __construct(hopdongRepository $hopdong)
    {
        parent::__construct();
        $this->entityName = 'quanlychung.hopdongs';
        $this->repository = $hopdong;
    }
}
