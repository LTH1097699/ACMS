<?php

namespace Modules\Tinhluong\Repositories\Cache;

use Modules\Tinhluong\Repositories\TinhluongRepository;
use Modules\Core\Repositories\Cache\BaseCacheDecorator;

class CacheTinhluongDecorator extends BaseCacheDecorator implements TinhluongRepository
{
    public function __construct(TinhluongRepository $tinhluong)
    {
        parent::__construct();
        $this->entityName = 'tinhluong.tinhluongs';
        $this->repository = $tinhluong;
    }
}
