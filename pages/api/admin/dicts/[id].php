<?php

use Miaoxing\Dict\Service\DictModel;
use Miaoxing\Plugin\BasePage;
use Miaoxing\Services\Page\ItemTrait;
use Miaoxing\Services\Service\UpdateAction;
use Wei\V;

return new class extends BasePage {
    use ItemTrait;

    protected $className = '字典';

    public function patch()
    {
        return UpdateAction::new()
            ->validate(static function (DictModel $dict, $req) {
                $v = V::defaultOptional()->defaultNotEmpty();
                $v->setModel($dict);
                $v->modelColumn('name', '名称')->requiredIfNew()->notModelDup();
                $v->modelColumn('code', '标识')->requiredIfNew()->notModelDup();
                return $v->check($req);
            })
            ->exec($this);
    }
};
