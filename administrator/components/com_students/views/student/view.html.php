<?php
defined("_JEXEC") or die;
class StudentsViewStudent extends JViewLegacy
{
    protected $form;
    protected $item;
    public function display($tpl = null)
    {
        $this->form = $this->get('Form');
        $this->item = $this->get('Item');
        $this->addToolbar();
        return parent::display($tpl);
    }

    public function addToolbar()
    {
        JFactory::getApplication()->input->set('hidemainmenu', true);
        $item = $this->get('Item');
        if(empty($item->id))
        {
            JToolbarHelper::title("Nhập thông tin sinh viên mới");
            JToolbarHelper::save("student.save", "Lưu mới");
        }
        else
        {
            JToolbarHelper::title("Chỉnh sửa thông tin sinh viên");
            JToolbarHelper::save("student.save", "Cập nhật");
        }
        JToolbarHelper::cancel("student.cancel","Hủy");
    }
}