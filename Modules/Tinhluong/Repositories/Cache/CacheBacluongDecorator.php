<?php

namespace Modules\Tinhluong\Repositories\Cache;

use Modules\Tinhluong\Repositories\BacluongRepository;
use Modules\Core\Repositories\Cache\BaseCacheDecorator;

class CacheBacluongDecorator extends BaseCacheDecorator implements BacluongRepository
{
    public function __construct(BacluongRepository $bacluong)
    {
        parent::__construct();
        $this->entityName = 'tinhluong.bacluongs';
        $this->repository = $bacluong;
    }
}
