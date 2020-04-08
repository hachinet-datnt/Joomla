<?php
defined('_JEXEC') or die;
class TableStudent extends JTable
{
    public function __construct($db)
    {
        parent::__construct('#__students', 'id', $db);
    }
}