<?php

namespace Miaoxing\Dict;

use Miaoxing\Admin\Service\AdminMenu;
use Miaoxing\Plugin\BasePlugin;

class DictPlugin extends BasePlugin
{
    protected $name = '字典';

    public function onAdminMenuGetMenus(AdminMenu $menu)
    {
        $system = $menu->child('system');
        $dicts = $system->addChild()->setLabel('字典管理')->setUrl('admin/dicts');
        $dicts->addChild()->setLabel('添加')->setUrl('admin/dicts/new');
        $dicts->addChild()->setLabel('编辑')->setUrl('admin/dicts/[id]/edit');

        $items = $dicts->addChild()->setLabel('数据管理')->setUrl('admin/dict-items');
        $items->addChild()->setLabel('添加')->setUrl('admin/dict-items/new');
        $items->addChild()->setLabel('编辑')->setUrl('admin/dict-items/[id]/edit');
    }
}
