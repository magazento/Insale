<?php
/**
 * 
 * @category  Magazento
 * @author    Ivan Proskuryakov http://www.magazento.com <volgodark@gmail.com>
 * @copyright Copyright (C)2013 Magazento
 *
 */

class Magazento_Headerslider_Model_Mysql4_Slide_Collection extends Mage_Core_Model_Mysql4_Collection_Abstract {

    protected function _construct() {
        $this->_init('headerslider/slide');
    }

    public function toOptionArray() {
        return $this->_toOptionArray('slide_id', 'name');
    }

    public function addNowFilter() {
        $now = Mage::getSingleton('core/date')->gmtDate();
        $where = "from_time < '" . $now . "' AND ((to_time > '" . $now . "') OR (to_time IS NULL))";
        $this->getSelect()->where($where);
    }

}