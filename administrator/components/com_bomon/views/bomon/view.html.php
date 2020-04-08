<?php
defined('_JEXEC') or die;
class BomonViewBomon extends JViewLegacy
{
    protected $items;
    public function display($tpl = null)
    {
        $this->items = $this->get('Items');
        JToolbarHelper::title("Danh sách bộ môn");
        return parent::display($tpl);
    }
}