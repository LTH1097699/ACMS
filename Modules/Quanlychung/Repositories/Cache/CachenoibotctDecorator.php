<?php

namespace Modules\Quanlychung\Repositories\Cache;

use Modules\Quanlychung\Repositories\noibotctRepository;
use Modules\Core\Repositories\Cache\BaseCacheDecorator;

class CachenoibotctDecorator extends BaseCacheDecorator implements noibotctRepository
{
    public function __construct(noibotctRepository $noibotct)
    {
        parent::__construct();
        $this->entityName = 'quanlychung.noibotcts';
        $this->repository = $noibotct;
    }
}
