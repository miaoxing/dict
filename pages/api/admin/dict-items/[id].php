<?php

use Miaoxing\Dict\Service\DictItemModel;
use Miaoxing\Dict\Service\DictModel;
use Miaoxing\Plugin\BasePage;
use Miaoxing\Services\Page\ItemTrait;
use Miaoxing\Services\Service\UpdateAction;
use Wei\V;

return new class extends BasePage {
    use ItemTrait;

    protected $className = '字典数据';

    public function patch()
    {
        return UpdateAction::new()
            ->validate(static function (DictItemModel $item, $req) {
                $v = V::defaultOptional()->defaultNotEmpty();
                $v->setModel($item);

                $query = DictItemModel::where('dictId', $req['dictId'])
                    ->where('id', '!=', $req['id']);

                $v->modelExists('dictId', '所属字典', DictModel::class);
                $v->notModelExists('name', '名称', $query, 'name')->requiredIfNew();
                $v->notModelExists('value', '值', clone $query, 'value')->requiredIfNew();
                $v->modelColumn('remark', '备注');
                $v->modelColumn('sort', '顺序');

                return $v->check($req);
            })
            ->exec($this);
    }
};
