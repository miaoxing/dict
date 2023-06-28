<?php

namespace MiaoxingTest\Article\Pages\Api\Admin\Articles;

use Miaoxing\Dict\Service\DictModel;
use Miaoxing\Plugin\Service\Tester;
use Miaoxing\Plugin\Test\BaseTestCase;

/**
 * @mixin \ObjectReqMixin
 */
class IdTest extends BaseTestCase
{
    public function testPatch()
    {
        $code = mt_rand(0, mt_getrandmax());
        $dict = DictModel::save([
            'name' => '测试' . $code,
            'code' => 'test-' . $code,
        ]);

        $code2 = mt_rand(0, mt_getrandmax());
        $dict2 = DictModel::save([
            'name' => '测试' . $code2,
            'code' => 'test-' . $code2,
        ]);

        $ret = Tester::patchAdminApi('dicts/' . $dict->id, [
            'name' => $dict2->name,
        ]);
        $this->assertRetErr($ret, '名称已存在');

        $ret = Tester::patchAdminApi('dicts/' . $dict->id, [
            'code' => $dict2->code,
        ]);
        $this->assertRetErr($ret, '标识已存在');
    }
}
