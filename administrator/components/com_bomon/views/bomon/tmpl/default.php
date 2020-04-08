<?php
defined('_JEXEC') or die;
use Joomla\CMS\Uri\Uri;

$uri = Uri::getInstance();
?>

<table class="table table-striped">
    <thead>
    <tr>
        <th>STT</th>
        <th>Tên bộ môn</th>
        <th>Tên khoa</th>
        <th>Trưởng bộ môn</th>
    </tr>
    </thead>
    <tbody>
    <?php
    foreach ($this->items as $i=>$item)
    {?>
        <tr class="row<?php echo $i%2;?>">
            <td><?php echo $i+1; ?></td>
            <td>
                <a href="<?php echo $uri->toString(); ?>&view=monhoc&id_bo_mon=<?php echo $item->id; ?>"><?php echo $item->ten_bo_mon;?></a>
            </td>
            <td><?php echo $item->ten_khoa;?></td>
            <td><?php echo $item->username;?></td>
        </tr>
    <?php } ?>
    </tbody>
</table>