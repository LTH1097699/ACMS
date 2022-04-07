<?php

namespace Modules\Hopdong\Repositories\Cache;

use Modules\Hopdong\Repositories\HopdongRepository;
use Modules\Core\Repositories\Cache\BaseCacheDecorator;

class CacheHopdongDecorator extends BaseCacheDecorator implements HopdongRepository
{
    public function __construct(HopdongRepository $hopdong)
    {
        parent::__construct();
        $this->entityName = 'hopdong.hopdongs';
        $this->repository = $hopdong;
    }
}
