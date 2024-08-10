<?php

use Miaoxing\Dict\Service\DictModel;
use Miaoxing\Plugin\BasePage;

return new class extends BasePage {
    public function get($req)
    {
        $dict = DictModel::findByOrFail('code', $req['id']);
        $dict->load('items');
        return $dict->toRet();
    }
};
