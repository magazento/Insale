<?php
/**
 *
 * @category  Magazento
 * @author    Ivan Proskuryakov http://www.magazento.com <volgodark@gmail.com>
 * @copyright Copyright (C)2013 Magazento
 *
 */
class Magazento_Insale_Block_Adminhtml_Restore_Edit extends Mage_Adminhtml_Block_Widget_Form_Container
{
    public function __construct()
    {
        parent::__construct();
        $this->_objectId = 'id';
        $this->_blockGroup = 'insale';
        $this->_controller = 'adminhtml_restore';

        $this->_updateButton('save', 'label', Mage::helper('insale')->__('Restore'));
    }

    public function getHeaderText()
    {
        return Mage::helper('insale')->__('Theme Settings Restore');
    }





}