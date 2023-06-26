<?php

namespace Miaoxing\Dict\Service;

use Miaoxing\Dict\Metadata\DictTrait;
use Miaoxing\Plugin\BaseModel;
use Miaoxing\Plugin\Model\ModelTrait;
use Miaoxing\Plugin\Model\ReqQueryTrait;
use Miaoxing\Plugin\Model\SnowflakeTrait;
use Wei\Model\SoftDeleteTrait;

class DictModel extends BaseModel
{
    use DictTrait;
    use ModelTrait;
    use ReqQueryTrait;
    use SnowflakeTrait;
    use SoftDeleteTrait;

    public function items(): DictItemModel
    {
        return $this->hasMany(DictItemModel::class);
    }
}
