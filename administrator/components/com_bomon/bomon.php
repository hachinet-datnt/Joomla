<?php
    defined("_JEXEC") or die;
    $controller = JControllerLegacy::getInstance('Bomon');
    $task = JFactory::getApplication()->input->getCmd('task');
    $controller->execute($task);
    $controller->redirect();