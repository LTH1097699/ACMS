<?php

namespace Modules\Phatsinhtang\Repositories\Cache;

use Modules\Phatsinhtang\Repositories\chuyennoibotctRepository;
use Modules\Core\Repositories\Cache\BaseCacheDecorator;

class CachechuyennoibotctDecorator extends BaseCacheDecorator implements chuyennoibotctRepository
{
    public function __construct(chuyennoibotctRepository $chuyennoibotct)
    {
        parent::__construct();
        $this->entityName = 'phatsinhtang.chuyennoibotcts';
        $this->repository = $chuyennoibotct;
    }
}
