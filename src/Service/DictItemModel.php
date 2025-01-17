<?php

namespace Miaoxing\Dict\Service;

use Miaoxing\Plugin\BaseModel;
use Miaoxing\Plugin\Model\ModelTrait;
use Miaoxing\Plugin\Model\ReqQueryTrait;
use Miaoxing\Plugin\Model\SnowflakeTrait;
use Wei\Model\SoftDeleteTrait;

/**
 * @property string|null $id
 * @property string $dictId
 * @property string $name 名称
 * @property string $value 值
 * @property int $sort
 * @property bool $isEnabled 是否启用
 * @property string $remark 备注
 * @property string|null $createdAt
 * @property string|null $updatedAt
 * @property string $createdBy
 * @property string $updatedBy
 * @property string|null $deletedAt
 * @property string $deletedBy
 * @property DictModel $dict
 * @property string|null $id
 * @property string $dictId
 * @property string $name 名称
 * @property string $value 值
 * @property int $sort
 * @property bool $isEnabled 是否启用
 * @property string $remark 备注
 * @property string|null $createdAt
 * @property string|null $updatedAt
 * @property string $createdBy
 * @property string $updatedBy
 * @property string|null $deletedAt
 * @property string $deletedBy
 */
class DictItemModel extends BaseModel
{
    use ModelTrait;
    use ReqQueryTrait;
    use SnowflakeTrait;
    use SoftDeleteTrait;

    public function dict(): DictModel
    {
        return $this->belongsTo(DictModel::class);
    }
}
