<?php

namespace Modules\Phatsinhtang\Repositories\Cache;

use Modules\Phatsinhtang\Repositories\trangthaiRepository;
use Modules\Core\Repositories\Cache\BaseCacheDecorator;

class CachetrangthaiDecorator extends BaseCacheDecorator implements trangthaiRepository
{
    public function __construct(trangthaiRepository $trangthai)
    {
        parent::__construct();
        $this->entityName = 'phatsinhtang.trangthais';
        $this->repository = $trangthai;
    }
}
