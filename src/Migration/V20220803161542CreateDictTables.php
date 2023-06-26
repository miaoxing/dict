<?php

namespace Miaoxing\Dict\Migration;

use Wei\Migration\BaseMigration;

class V20220803161542CreateDictTables extends BaseMigration
{
    /**
     * {@inheritdoc}
     */
    public function up()
    {
        $this->schema->table('dicts')->tableComment('字典')
            ->bigId()
            ->string('name')->comment('名称')
            ->string('code')->comment('标识')
            ->bool('is_built_in')->comment('是否内置')
            ->string('remark')->comment('备注')
            ->timestamps()
            ->userstamps()
            ->softDeletable()
            ->exec();

        $this->schema->table('dict_items')->tableComment('字典项目')
            ->bigId()
            ->bigInt('dict_id')
            ->string('name')->comment('名称')
            ->string('value')->comment('值')
            ->uMediumInt('sort')->defaults(50)->comment('顺序')
            ->bool('is_enabled')->defaults(1)->comment('是否启用')
            ->string('remark')->comment('备注')
            ->timestamps()
            ->userstamps()
            ->softDeletable()
            ->exec();
    }

    /**
     * {@inheritdoc}
     */
    public function down()
    {
        $this->schema->dropIfExists(['dicts', 'dist_items']);
    }
}
