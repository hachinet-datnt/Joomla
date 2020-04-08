<?php
    defined('_JEXEC') or die;
    use Joomla\CMS\Uri\Uri;


class BomonViewDocuments extends JViewLegacy
{
    protected $items_gt;
    protected $items_slides;
    protected $name;
    public function __construct()
    {
        $this->uri = Uri::getInstance();
        parent::__construct();
    }

    public function display($tpl = null)
    {
        $id_mon_hoc = $this->uri->getVar('id_mon_hoc');
        $items = $this->getModel('Documents');
        $this->items_gt = $items->getGiaotrinhById($id_mon_hoc);
        $this->items_slides = $items->getSlidesById($id_mon_hoc);
        $name = $items->getNameById($id_mon_hoc);
        JToolbarHelper::title("Danh sách giáo trình và slide của môn " . $name->ten_mon_hoc);
        return parent::display($tpl);
    }
}