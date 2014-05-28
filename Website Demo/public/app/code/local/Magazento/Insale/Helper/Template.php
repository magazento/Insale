<?php
/**
 * 
 * @category  Magazento
 * @author    Ivan Proskuryakov http://www.magazento.com <volgodark@gmail.com>
 * @copyright Copyright (C)2013 Magazento
 *
 */

class Magazento_Insale_Helper_Template extends Mage_Core_Helper_Abstract {

    function getInstallationContent() {
        $content = '
                    <strong>Pages:</strong>
                    <ul>
                        <li>home</li>
                    </ul><br/>
                    <strong>Static blocks:</strong>
                    <ul>
                        <li>footer_links_one</li>
                        <li>footer_links_two</li>
                        <li>footer_links_four</li>
                        <li>footer_links_three</li>
                        <li>footer_container_left</li>
                        <li>footer_container_right</li>
                        <li>footer_container_left_payment</li>
                        <li>footer_categoy_banners</li>
                        <li>sidebar_promo_banner</li>
                        <li>sidebar_info2</li>
                        <li>sidebar_info1</li>
                        <li>product_info1</li>
                        <li>product_info2</li>
                        <li>product_upsell</li>
                        <li>product_tabs_info1</li>
                        <li>product_tabs_info2</li>
                        <li>product_tabs_bottom</li>
                        <li>product_tabs_sidebar</li>
                        <li>checkout_promo</li>
                        <li>checkout_banner</li>
                        <li>new_products</li>
                        <li>sidebar_facebook</li>
                        <li>sale_products</li>
                        <li>no_products_category</li>
                        <li>no_products_cart</li>
                    </ul>';
        return $content;
    }
    function getInstallationNote() {
        $content = 'Make sure that you have at least 5 products marked as new and 5 products with special price to display widgets on pages correctly.';
        return $content;
    }
}
