<?php
defined('_JEXEC') or die;
class BomonModelDocuments extends JModelList
{
    protected function getListQuery()
    {
        $db = $this->getDbo();
        $query = $db->getQuery(true); //Create new query
        $query->select('*');
        $query->from($db->quoteName('#__documents_slides', 'sl'));
        $query->join('LEFT', $db->quoteName('#__documents_giao_trinh', 'gt') . ' ON ' . $db->quoteName('sl.id_bo_mon') . '=' . $db->quoteName('gt.id_bo_mon'));
        return $query;
    }

    public function getGiaotrinhById($id){
        $db = $this->getDbo();
        $query = $db->getQuery(true); //Create new query
        $query->select('*')->from($db->quoteName('#__documents_giao_trinh'))->where('id_mon_hoc = '. $id);
        $db->setQuery($query);
        $res = $db->loadObjectList();
        return $res;
    }

    public function getSlidesById($id){
        $db = $this->getDbo();
        $query = $db->getQuery(true); //Create new query
        $query->select('*')->from($db->quoteName('#__documents_slides'))->where('id_mon_hoc = '. $id);
        $query->order('stt_buoi_hoc ASC');
        $db->setQuery($query);
        $res = $db->loadObjectList();
        return $res;
    }

    public function getNameById($id){
        $db = $this->getDbo();
        $query = $db->getQuery(true); //Create new query
        $query->select('ten_mon_hoc')->from($db->quoteName('#__documents_mon_hoc'))->where('id = '. $id);
        $db->setQuery($query);
        $res = $db->loadObject();
        return $res;
    }
}