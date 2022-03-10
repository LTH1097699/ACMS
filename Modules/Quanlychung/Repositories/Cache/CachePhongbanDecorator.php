<?php

namespace Modules\Quanlychung\Repositories\Cache;

use Modules\Quanlychung\Repositories\PhongbanRepository;
use Modules\Core\Repositories\Cache\BaseCacheDecorator;

class CachePhongbanDecorator extends BaseCacheDecorator implements PhongbanRepository
{
    public function __construct(PhongbanRepository $phongban)
    {
        parent::__construct();
        $this->entityName = 'quanlychung.phongbans';
        $this->repository = $phongban;
    }
}
