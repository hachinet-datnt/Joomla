<?php
    defined('_JEXEC') or die;
?>


<form action="<?php echo JRoute::_('index.php?option=com_students'); ?>"
    name="adminForm" id="adminForm" method="POST">
    <table class="table table-striped">
        <thead>
        <tr>
            <th><input type="checkbox" onclick="Joomla.checkAll(this)"></th>
            <th>Họ và tên</th>
            <th>Năm sinh</th>
            <th>Điểm trung bình</th>
            <th>Hành động</th>
        </tr>
        </thead>
        <tbody>
        <?php
        foreach ($this->items as $i=>$item)
        {
            ?>
            <?php $urlEdit = JRoute::_('index.php?option=com_students&task=student.edit&id='.$item->id);?>
            <tr>
                <td><?php echo JHtml::_('grid.id', $i, $item->id); ?></td>
                <td><?php echo $item->name;?></td>
                <td><?php echo $item->year;?></td>
                <td><?php echo $item->avg;?></td>
                <td><a href="<?php echo $urlEdit;?>" title="Chỉnh sửa"><span class="icon-edit"></span></a></td>
            </tr>
            <?php
        }
        ?>
        </tbody>
    </table>
    <div>
        <?php echo $this->pagination->getLimitBox(); ?>
        <?php echo $this->pagination->getResultsCounter(); ?>
        <span class="icon-screen"></span>
        <?php echo $this->pagination->getPagesCounter(); ?>
        <?php echo $this->pagination->getListFooter(); ?>
    </div>
    <input type="hidden" name="task" value="" />
    <input type="hidden" name="boxchecked" value="0" />
    <?php echo JHtml::_('form.token'); ?>
</form>