<?php

namespace Modules\Quanlychung\Repositories\Cache;

use Modules\Quanlychung\Repositories\noibodonviRepository;
use Modules\Core\Repositories\Cache\BaseCacheDecorator;

class CachenoibodonviDecorator extends BaseCacheDecorator implements noibodonviRepository
{
    public function __construct(noibodonviRepository $noibodonvi)
    {
        parent::__construct();
        $this->entityName = 'quanlychung.noibodonvis';
        $this->repository = $noibodonvi;
    }
}
