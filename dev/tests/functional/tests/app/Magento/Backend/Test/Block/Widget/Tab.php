<?php
/**
 * Magento
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@magentocommerce.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade Magento to newer
 * versions in the future. If you wish to customize Magento for your
 * needs please refer to http://www.magentocommerce.com for more information.
 *
 * @api
 * @copyright   Copyright (c) 2014 X.commerce, Inc. (http://www.magentocommerce.com)
 * @license     http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */

namespace Magento\Backend\Test\Block\Widget;

use Mtf\Block\Form as AbstractForm;
use Mtf\Client\Element;

/**
 * Class Tab
 * Is used to represent any tab on the page
 *
 */
class Tab extends AbstractForm
{
    /**
     * Fill data to fields on tab
     *
     * @param array $fields
     * @param Element $element
     * @return $this
     */
    public function fillFormTab(array $fields, Element $element)
    {
        $data = $this->dataMapping($fields);
        $this->_fill($data, $element);

        return $this;
    }

    /**
     * Verify data to fields on tab
     *
     * @param array $fields
     * @param Element $element
     *
     * @return bool
     */
    public function verifyFormTab(array $fields, Element $element)
    {
        $data = $this->dataMapping($fields);
        return $this->_verify($data, $element);
    }

    /**
     * Update data to fields on tab
     *
     * @param array $fields
     * @param Element $element
     */
    public function updateFormTab(array $fields, Element $element)
    {
        $this->fillFormTab($fields, $element);
    }
}
