<?php
defined('_JEXEC') or die;
class DocumentsViewDocuments extends JViewLegacy
{
    protected $items;
    public function display($tpl = null)
    {
        $this->items = $this->get('Items');
        JToolbarHelper::title("Documents Management");
        return parent::display($tpl);
    }
}