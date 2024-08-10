<?php

use Miaoxing\Dict\Service\DictItemModel;
use Miaoxing\Dict\Service\DictModel;
use Miaoxing\Plugin\BasePage;
use Miaoxing\Services\Page\PostToPatchTrait;
use Miaoxing\Services\Service\IndexAction;

return new class extends BasePage {
    use PostToPatchTrait;

    protected $className = '字典数据';

    protected $include = [
        'dict',
    ];

    public function get()
    {
        return IndexAction::new()
            ->beforeFind(static function (DictItemModel $items, $req) {
                if ($req['code']) {
                    $dict = DictModel::findByOrFail('code', $req['code']);
                    $items->where('dictId', $dict->id);
                }
            })
            ->exec($this);
    }
};
