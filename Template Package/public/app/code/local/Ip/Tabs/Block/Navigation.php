<?php
/**
 * 
 * @category  Magazento
 * @author    Ivan Proskuryakov http://www.magazento.com <volgodark@gmail.com>
 * @copyright Copyright (C)2013 Magazento
 *
 */
class Ip_Tabs_Block_Navigation extends Mage_Catalog_Block_Navigation {

    protected function _construct() {
            parent::_construct();
            $this->addData(array(
                    'cache_lifetime' => 86400,
                    'cache_tags' => array("iptabs_navigation" ."_".Mage::app()->getStore()->getId()),
                    'cache_key' => "iptabs_navigation".'_'.Mage::app()->getStore()->getId(),                    
            ));
    }
    
    public function drawTabsTabs() {
        $html = '';
        $data = Mage::getModel('tabs/data')->getTabs();
		$html='';
        $i=0;
        foreach ($data as $item) {
                $i++;
				$class="";$style="";	
                if ($i == (count($data))) $class= ' last';
                if ($i == 1 ) $class= ' first';
				if ($item->getcssClass()) $class = $class. ' '.$item->getcssClass(); 
				if ($item->getcssStyle()) $style = 'style="'.$item->getcssStyle().'"'; 
				
				if ($item->getType() == 1 ) 
					$html .= '<li id="tab'.$i.'" class="tab'. $class .' tab-item '.$item['align_tab'].'">
                                                    <a '.$style.' href="'.$item->getUrl().'">'.$item['title'].'</a>
                                                    
                                                  </li>';
				if ($item->getType() == 0 ) 
					$html .= '<li id="tab'.$i.'" class="tab'. $class .'  '.$item['align_tab'].'"><a  '.$style.' href="'.$item->getUrl().'">'.$item['title'].'</a></li>';

        }

        return $html;
    }
	
	public function drawTabsJs() {
		$html = '';
      	$data = Mage::getModel('tabs/data')->getTabs();		
		$i=0;
        foreach ($data as $item) {
        	$i++;
			$html.= "jQuery('#tab{$i}').mouseover(function(event) {";
			$html.= "	jQuery('#menu{$i}').show();";
			$html.= "	jQuery('#tab{$i} a').addClass('active');";
			$html.= "});";
			$html.= "jQuery('#tab{$i}').mouseout(function(event) {";
			$html.= "	jQuery('#menu{$i}').hide();";
			$html.= "	jQuery('#tab{$i} a').removeClass('active');";	  
			$html.= "});";
			$html.= "jQuery('#menu{$i}').mouseover(function(event) {";
			$html.= "	jQuery('#menu{$i}').show();";
			$html.= "	jQuery('#tab{$i} a').addClass('active');";
			$html.= "});";
			$html.= "jQuery('#menu{$i}').mouseout(function(event) {";
			$html.= "	jQuery('#menu{$i}').hide();";
			$html.= "	jQuery('#tab{$i} a').removeClass('active');";	 	  
			$html.= "});";		

        }
		$html ='<script type="text/javascript">'.$html.'</script>';
        return $html;
    }	
	
	public function drawTabsTabItems() {
		$html='';
      	$data = Mage::getModel('tabs/data')->getTabs();
		$i=0;
		$helper = Mage::helper('cms');
		$processor = $helper->getPageTemplateProcessor();
		
		
		foreach ($data as $item) {
			$i++;
     		$tab_id = $item->getId();
			if ($item->getType() == 1 ) {
						
				$footer = '<div class="menu-footer">';
				$footer.= '	<div class="footer-title"><a href="'.$item->getUrl().'"> '.Mage::helper('core')->__('Visit').' ' .$item->getTitle().' </a></div>';	
				$footer.= '</div>';						
				
				
				$class="";$style="";			
				if ($item->getcssClassContent()) $class = 'class="'.$item->getcssClassContent().'" '; 
				if ($item->getcssStyleContent()) $style = 'style="'.$item->getcssStyleContent().'" '; 	
				$display = '';
				$html.='<div style="display: none;" class="menuitem" id="menu'.$i.'" >
						<ul '.$class.$style.' id="menu">';
				$html.='<div class="menu-content">'.$processor->filter( $item->getContent() ).'</div>'.$footer;
				$html.= '</ul>';
				$html.= '</div> ';		
			}
		}		
		return $html;
	}			
	

}