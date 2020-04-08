<?php
defined('_JEXEC') or die;
use Joomla\CMS\Uri\Uri;

class BomonViewMonhoc extends JViewLegacy
{
    protected $items;
    protected $uri;
    protected $name;
    public function __construct()
    {
        $this->uri = Uri::getInstance();
        parent::__construct();
    }

    public function display($tpl = null)
    {
        $id_bo_mon = $this->uri->getVar('id_bo_mon');
        $monhoc = $this->getModel('Monhoc');
        $this->items = $monhoc->getListQueryById($id_bo_mon);
        $name = $monhoc->getNameById($id_bo_mon);
        JToolbarHelper::title("Danh sách môn học " . $name->ten_bo_mon );
        return parent::display($tpl);
    }
}