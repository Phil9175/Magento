<?php

class Learning_Merchant_Block_Adminhtml_Merchantman_Edit_Tabs extends Mage_Adminhtml_Block_Widget_Tabs
{

    public function __construct()
    {
        parent::__construct();
        $this->setId('merchantman_tabs');
        $this->setDestElementId('edit_form');
        $this->setTitle(Mage::helper('learning_merchant')->__('Merchantman Information'));


    }

    protected function _beforeToHtml()
    {
        $this->addTab('products', array(
            'label' => Mage::helper('learning_merchant')->__('Associated products'),
            'url'   => $this->getUrl('*/*/products', array('_current' => true)),
            'class'    => 'ajax'
        ));

        parent::_beforeToHtml();
    }
}
