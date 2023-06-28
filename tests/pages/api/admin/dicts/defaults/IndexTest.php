<?php

namespace MiaoxingTest\Article\Pages\Api\Admin\Articles\Defaults;

use Miaoxing\Dict\Service\DictModel;
use Miaoxing\Plugin\Service\Tester;
use Miaoxing\Plugin\Test\BaseTestCase;

class IndexTest extends BaseTestCase
{
    public function testGet()
    {
        $ret = Tester::getAdminApi('dicts/defaults');

        $this->assertRetSuc($ret);

        $data = $ret['data'];

        $this->assertArrayContains(DictModel::toArray(), $data->toArray());
    }
}
