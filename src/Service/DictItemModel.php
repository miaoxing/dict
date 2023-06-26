<?php

namespace Miaoxing\Dict\Service;

use Miaoxing\Dict\Metadata\DictItemTrait;
use Miaoxing\Plugin\BaseModel;
use Miaoxing\Plugin\Model\ModelTrait;
use Miaoxing\Plugin\Model\ReqQueryTrait;
use Miaoxing\Plugin\Model\SnowflakeTrait;
use Wei\Model\SoftDeleteTrait;

/**
 * @property DictModel $dict
 */
class DictItemModel extends BaseModel
{
    use DictItemTrait;
    use ModelTrait;
    use ReqQueryTrait;
    use SnowflakeTrait;
    use SoftDeleteTrait;

    public function dict(): DictModel
    {
        return $this->belongsTo(DictModel::class);
    }
}
