<?php

namespace Miaoxing\Dict\Service;

use Miaoxing\Plugin\BaseModel;
use Miaoxing\Plugin\Model\ModelTrait;
use Miaoxing\Plugin\Model\ReqQueryTrait;
use Miaoxing\Plugin\Model\SnowflakeTrait;
use Wei\Model\SoftDeleteTrait;

/**
 * @property string|null $id
 * @property string $name 名称
 * @property string $code 标识
 * @property bool $isBuiltIn 是否内置
 * @property string $remark 备注
 * @property string|null $createdAt
 * @property string|null $updatedAt
 * @property string $createdBy
 * @property string $updatedBy
 * @property string|null $deletedAt
 * @property string $deletedBy
 * @property DictItemModel $items
 */
class DictModel extends BaseModel
{
    use ModelTrait;
    use ReqQueryTrait;
    use SnowflakeTrait;
    use SoftDeleteTrait;

    public function items(): DictItemModel
    {
        return $this->hasMany(DictItemModel::class);
    }
}
