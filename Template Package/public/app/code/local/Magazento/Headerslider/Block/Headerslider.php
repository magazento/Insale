<?php
/**
 * 
 * @category  Magazento
 * @author    Ivan Proskuryakov http://www.magazento.com <volgodark@gmail.com>
 * @copyright Copyright (C)2013 Magazento
 *
 */

Class Magazento_Headerslider_Block_Headerslider extends Mage_Core_Block_Template {

    public function getModel() {
        return Mage::getModel('headerslider/data');
    }

}