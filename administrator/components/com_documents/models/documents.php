<?php
defined('_JEXEC') or die;
class DocumentsModelDocuments extends JModelList
{
//    protected function getListQuery()
//    {
//        $db = $this->getDbo();
//        $query = $db->getQuery(true); //Create new query
//        $query->select(array('bm.*', 'k.ten_khoa', 'tk.username'));
//        $query->from($db->quoteName('#__documents_bo_mon', 'bm'));
//        $query->join('LEFT', $db->quoteName('#__documents_khoa', 'k') . ' ON ' . $db->quoteName('bm.id_khoa') . '=' . $db->quoteName('k.id'));
//        $query->join('LEFT', $db->quoteName('#__documents_tai_khoan', 'tk') . ' ON ' . $db->quoteName('bm.id_user') . '=' . $db->quoteName('tk.id'));
//
//        return $query;
//    }
}