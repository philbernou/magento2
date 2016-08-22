<?php
/**
 * Copyright © 2016 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Magento\Customer\Model\Customer\Source;

class GroupWithoutAllSources extends Group implements GroupSourceInterface
{
    /**
     * @var bool
     */
    protected $isShowAllGroupsValue = false;
}
