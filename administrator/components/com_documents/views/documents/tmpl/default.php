<?php
    defined('_JEXEC') or die;
    use Joomla\CMS\Uri\Uri;

    $uri = Uri::getInstance();

    $user = JFactory::getUser();
//    Lay info nguoi dang nhap
//    $user->get('id');
//    var_dump($user);
//    die();
?>

<table class="table table-striped" style="font-size: 16px;">
    <thead>
    <tr>
        <th colspan="7" style="text-align: center;">Documents Management</th>
    </tr>
    </thead>
    <tbody>
        <tr>
            <?php
            if ($user->get('name')=="Super User"){
                ?>
                <td style="text-align: center"><a href="<?php echo $uri->toString(); ?>&view=subjects">Subjects</a></td>
            <?php
            }
            ?>
            <td style="text-align: center"><a href="<?php echo $uri->toString(); ?>&view=subjectmanagement">Subject Management</a></td>
            <td style="text-align: center"><a href="<?php echo $uri->toString(); ?>&view=slides">Slides</a></td>
            <td style="text-align: center"><a href="<?php echo $uri->toString(); ?>&view=curriculums">Curriculums</a></td>
            <td style="text-align: center"><a href="<?php echo $uri->toString(); ?>&view=booksarticles">Books and Articles</a></td>
            <td style="text-align: center"><a href="<?php echo $uri->toString(); ?>&view=document">Documentation</a></td>
            <td style="text-align: center"><a href="<?php echo $uri->toString(); ?>&view=slides">Labs</a></td>
        </tr>
    </tbody>
</table>
