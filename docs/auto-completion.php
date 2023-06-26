<?php

/**
 * @property    Miaoxing\Dict\Service\DictItemModel $dictItemModel
 */
class DictItemModelMixin
{
}

/**
 * @property    Miaoxing\Dict\Service\DictItemModel $dictItemModel
 */
class DictItemModelPropMixin
{
}

/**
 * @property    Miaoxing\Dict\Service\DictModel $dictModel
 */
class DictModelMixin
{
}

/**
 * @property    Miaoxing\Dict\Service\DictModel $dictModel
 */
class DictModelPropMixin
{
}

/**
 * @mixin DictItemModelMixin
 * @mixin DictModelMixin
 */
class AutoCompletion
{
}

/**
 * @return AutoCompletion
 */
function wei()
{
    return new AutoCompletion();
}
