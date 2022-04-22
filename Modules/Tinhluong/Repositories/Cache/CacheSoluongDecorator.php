<?php

namespace Modules\Tinhluong\Repositories\Cache;

use Modules\Tinhluong\Repositories\SoluongRepository;
use Modules\Core\Repositories\Cache\BaseCacheDecorator;

class CacheSoluongDecorator extends BaseCacheDecorator implements SoluongRepository
{
    public function __construct(SoluongRepository $soluong)
    {
        parent::__construct();
        $this->entityName = 'tinhluong.soluongs';
        $this->repository = $soluong;
    }
}
