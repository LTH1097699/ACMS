<?php

namespace Modules\Phatsinhtang\Repositories\Cache;

use Modules\Phatsinhtang\Repositories\ThongtinnhanvienRepository;
use Modules\Core\Repositories\Cache\BaseCacheDecorator;

class CacheThongtinnhanvienDecorator extends BaseCacheDecorator implements ThongtinnhanvienRepository
{
    public function __construct(ThongtinnhanvienRepository $thongtinnhanvien)
    {
        parent::__construct();
        $this->entityName = 'phatsinhtang.thongtinnhanviens';
        $this->repository = $thongtinnhanvien;
    }
}
