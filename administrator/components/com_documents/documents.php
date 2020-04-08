<?php
    defined("_JEXEC") or die;
    $controller = JControllerLegacy::getInstance('Documents');
    $task = JFactory::getApplication()->input->getCmd('task');
    $controller->execute($task);
    $controller->redirect();