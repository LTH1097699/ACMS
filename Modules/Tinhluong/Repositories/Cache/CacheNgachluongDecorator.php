<?php

namespace Modules\Tinhluong\Repositories\Cache;

use Modules\Tinhluong\Repositories\NgachluongRepository;
use Modules\Core\Repositories\Cache\BaseCacheDecorator;

class CacheNgachluongDecorator extends BaseCacheDecorator implements NgachluongRepository
{
    public function __construct(NgachluongRepository $ngachluong)
    {
        parent::__construct();
        $this->entityName = 'tinhluong.ngachluongs';
        $this->repository = $ngachluong;
    }
}
