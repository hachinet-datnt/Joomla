<?php
defined('_JEXEC') or die;
class BomonModelMonhoc extends JModelList
{
    protected function getListQuery()
    {
        $db = $this->getDbo();
        $query = $db->getQuery(true); //Create new query
        $query->select(array('mh.*','bm.ten_bo_mon'));
        $query->from($db->quoteName('#__documents_bo_mon', 'bm'));
        $query->join('RIGHT', $db->quoteName('#__documents_mon_hoc', 'mh') . ' ON ' . $db->quoteName('bm.id') .'=' . $db->quoteName('mh.id_bo_mon'));
//        $query->where('bm.id = '.$id);
        return $query;
    }

    public function getListQueryById($id) {
        $db = $this->getDbo();
        $query = $db->getQuery(true); //Create new query
        $query->select('mh.*')->from($db->quoteName('#__documents_mon_hoc', 'mh'))->where('mh.id_bo_mon = '. $id);
        $db->setQuery($query);
        $res = $db->loadObjectList();
        return $res;
    }

    public function getNameById($id){
        $db = $this->getDbo();
        $query = $db->getQuery(true); //Create new query
        $query->select('ten_bo_mon')->from($db->quoteName('#__documents_bo_mon'))->where('id = '. $id);
        $db->setQuery($query);
        $res = $db->loadObject();
        return $res;
    }
}
