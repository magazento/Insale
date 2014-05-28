<?php
/**
 * 
 * @category  Magazento
 * @author    Ivan Proskuryakov http://www.magazento.com <volgodark@gmail.com>
 * @copyright Copyright (C)2013 Magazento
 *
 */

class Magazento_Headerslider_Model_Mysql4_Slide extends Mage_Core_Model_Mysql4_Abstract {

    protected function _construct() {
        $this->_init('headerslider/slide', 'slide_id');
    }

    protected function _beforeSave(Mage_Core_Model_Abstract $object) {
        $dateFormatIso = Mage::app()->getLocale()->getDateTimeFormat(Mage_Core_Model_Locale::FORMAT_TYPE_MEDIUM);
        if (!$object->getFromTime()) {
            $object->setFromTime(Mage::getSingleton('core/date')->gmtDate());
        } else {
            $object->setFromTime(Mage::app()->getLocale()->date($object->getFromTime(), $dateFormatIso));
            $object->setFromTime($object->getFromTime()->toString(Varien_Date::DATETIME_INTERNAL_FORMAT));
            $object->setFromTime(Mage::getSingleton('core/date')->gmtDate(null, $object->getFromTime()));
        }
        if (!$object->getToTime()) {
            $object->setToTime();
        } else {
            $object->setToTime(Mage::app()->getLocale()->date($object->getToTime(), $dateFormatIso));
            $object->setToTime($object->getToTime()->toString(Varien_Date::DATETIME_INTERNAL_FORMAT));
            $object->setToTime(Mage::getSingleton('core/date')->gmtDate(null, $object->getToTime()));
        }
        return $this;
    }

}