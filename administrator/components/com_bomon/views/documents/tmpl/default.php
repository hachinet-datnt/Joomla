<?php
defined('_JEXEC') or die;
use Joomla\CMS\Uri\Uri;

$uri = Uri::getInstance();
?>
<h1 align="center">Giáo trình</h1>
<table class="table table-striped">
    <thead>
    <tr>
        <th>Tên giáo trình</th>
        <th>Mã giáo trình</th>
    </tr>
    </thead>
    <tbody>
    <?php
    foreach ($this->items_gt as $i=>$items_gt)
    {?>
        <tr class="row<?php echo $i%2; ?>">
            <td><?php echo $items_gt->ten_giao_trinh ;?></td>
            <td><?php echo $items_gt->ma_giao_trinh ;?></td>
        </tr>
    <?php } ?>
    </tbody>
</table>

<!------------------------------------------------------------------------>
<br><br>

<h1 align="center">Slide bài giảng</h1>
<table class="table table-striped">
    <thead>
    <tr>
        <th>STT buổi học</th>
        <th>Tên bài giảng</th>
        <th>Tên môn học</th>
        <th>Người tạo</th>
    </tr>
    </thead>
    <tbody>
    <?php
    foreach ($this->items_slides as $i=>$items_slides)
    {?>
        <tr class="row<?php echo $i%2;?>">
            <td><?php echo $items_slides->stt_buoi_hoc ?></td>
            <td><?php echo $items_slides->ten_slide ;?></td>
            <td><?php echo $items_slides->id_mon_hoc ;?></td>
            <td><?php echo $items_slides->id_nguoi_tao ;?></td>
        </tr>
    <?php } ?>
    </tbody>
</table>