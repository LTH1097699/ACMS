<?php

namespace Modules\Quanlychung\Repositories\Cache;

use Modules\Quanlychung\Repositories\ChucdanhRepository;
use Modules\Core\Repositories\Cache\BaseCacheDecorator;

class CacheChucdanhDecorator extends BaseCacheDecorator implements ChucdanhRepository
{
    public function __construct(ChucdanhRepository $chucdanh)
    {
        parent::__construct();
        $this->entityName = 'quanlychung.chucdanhs';
        $this->repository = $chucdanh;
    }
}
