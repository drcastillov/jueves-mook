<?php

class Mook_Rene_Block_Adminhtml_Rene_Grid extends Mage_Adminhtml_Block_Widget_Grid
{
    public function _construct()
    {
        parent::__construct();
        $this->setId('reneGrid');
        $this->setDefaultSort('rene_id');
        $this->setDefaultDir('ASC');
        $this->setSaveParametersInSession(true);
        $this->setUseAjax(true);

    }

    protected function _prepareCollection()
    {
        $collection = Mage::getModel('rene/rene')->getCollection();
        $this->setCollection($collection);
        return parent::_prepareCollection();
    }

    protected function _prepareColumns()
    {
        $this->addColumn('rene_id', array(
            'header' => Mage::helper('mook_rene')->__('ID'),
            'align' => 'right',
            'width' => '50px',
            'index' => 'rene_id',
        ));

        $this->addColumn('title', array(
           'header' => Mage::helper('mook_rene')->__('Title'),
            'align' => 'left',
            'index' => 'title',
        ));

//coment
        $this->addColumn('content', array(
            'header'    => Mage::helper('mook_rene')->__('Item Content'),
            'width'     => '150px',
            'index'     => 'content',
        ));


        $this->addColumn('created_time', array(
            'header' => Mage::helper('mook_rene')->__('Creation Time'),
            'align' => 'left',
            'width' => '120px',
            'type' => 'date',
            'default' => '--',
            'index' => 'created_time',

        ));

        $this->addColumn('update_time', array(
            'header' => Mage::helper('mook_rene')->__('Update Time'),
            'align' => 'left',
            'width' => '120px',
            'type' => 'date',
            'default' => '--',
            'index' => 'update_time',
        ));

        $this->addColumn('status', array(
            'header' => Mage::helper('mook_rene')->__('Status'),
            'align' => 'left',
            'width' => '80px',
            'index' => 'status',
            'type' => 'options',
            'options' => array(
                1 => 'Active',
                0 => 'Inactive',
            ),
        ));

        return parent::_prepareColumns();

    }

    public function getRowUrl($row)
    {
        return $this->getUrl('*/*/edit',array('id' => $row->getId()));
    }

    public function getGridUrl()
    {
        return $this->getUrl('*/*/grid', array('_current' => true));
    }



}