<?php
/**
 * The view file of backup module of ZenTaoPMS.
 *
 * @copyright   Copyright 2009-2015 青岛易软天创网络科技有限公司(QingDao Nature Easy Soft Network Technology Co,LTD, www.cnezsoft.com)
 * @license     ZPL (http://zpl.pub/page/zplv12.html)
 * @author      Yidong Wang <yidong@cnezsoft.com>
 * @package     backup
 * @version     $Id: view.html.php 2568 2012-02-09 06:56:35Z shiyangyangwork@yahoo.cn $
 * @link        http://www.zentao.net
 */
?>
<?php include '../../common/view/header.html.php';?>
<?php if(!empty($error)):?>
<div id="notice" class='alert alert-success' style="margin-bottom:35px;">
  <div class="content"><i class='icon-exclamation-sign'></i> <?php echo $error;?></div>
</div>
<?php endif;?>
<div id='mainMenu' class='clearfix'>
  <div class='btn-toolbar pull-left'><?php common::printAdminSubMenu('data');?></div>
</div>

<div id='mainContent' class='main-content'>
  <div class='main-header'>
    <h2>
      <?php echo $lang->backup->history?>
    </h2>
    <div class='pull-right'>
      <?php common::printLink('backup', 'setting', '', "<i class='icon icon-cog'></i>" . $lang->backup->setting, '', "data-width='500' class='iframe btn btn-primary'");?>
      <?php common::printLink('backup', 'backup', 'reload=yes', "<i class='icon icon-copy'></i> " . $lang->backup->backup, 'hiddenwin', "class='btn btn-primary backup'");?>
    </div>
  </div>
  <table class='table table-condensed table-bordered active-disabled table-fixed'>
    <thead>
      <tr>
        <th class='w-150px'><?php echo $lang->backup->time?></th>
        <th><?php echo $lang->backup->files?></th>
        <th class='w-150px'><?php echo $lang->backup->size?></th>
        <th class='actionWidth'><?php echo $lang->actions?></th>
      </tr>
    </thead>
    <tbody class='text-center'>
    <?php foreach($backups as $backupFile):?>
      <?php $rowspan = count($backupFile->files);?>
      <?php $i = 0;?>
      <?php $isPHP = false;?>
      <?php foreach($backupFile->files as $file => $size):?>
      <?php if(!$isPHP) $isPHP = strpos($file, '.php') !== false;?>
      <tr>
        <?php if($i == 0):?>
        <td <?php if($rowspan > 1) echo "rowspan='$rowspan'"?>><?php echo date(DT_DATETIME1, $backupFile->time);?></td>
        <?php endif;?>
        <td class='text-left' style='padding-left:5px;'><?php echo $file;?></td>
        <td><?php echo $size / 1024 / 1024 >= 1024 ? round($size / 1024 / 1024 / 1024, 2) . 'GB' : ($size / 1024 >= 1024 ? round($size / 1024 / 1024, 2) . 'MB' : round($size / 1024, 2) . 'KB');?></td>
        <?php if($i == 0):?>
        <td <?php if($rowspan > 1) echo "rowspan='$rowspan'"?>>
          <?php
          if(common::hasPriv('backup', 'rmPHPHeader') and $isPHP)
          {
              echo html::a(inlink('rmPHPHeader', "file={$backupFile->name}"), $lang->backup->rmPHPHeader, 'hiddenwin', "class='rmPHPHeader'");
              echo "<br />";
          }
          if(common::hasPriv('backup', 'restore')) echo html::a(inlink('restore', "file={$backupFile->name}&confirm=yes"), $lang->backup->restore, 'hiddenwin', "class='restore'");
          if(common::hasPriv('backup', 'delete')) echo html::a(inlink('delete', "file=$backupFile->name"), $lang->delete, 'hiddenwin');
          ?>
        </td>
        <?php endif;?>
      </tr>
      <?php $i++;?>
      <?php endforeach;?>
    <?php endforeach;?>
    </tbody>
  </table>
  <h2>
    <span class='label label-info'>
    <?php echo $lang->backup->restoreTip;?>
    <?php printf($lang->backup->holdDays, $config->backup->holdDays)?>
    </span>
  </h2>
</div>
<div class="modal fade" id="waitting" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog w-300px">
    <div class="modal-content">
      <div class="modal-body">
        <p><?php echo $lang->backup->waitting?></p>
        <div id='message'><?php echo sprintf($lang->backup->progressSQL, 0);?></div>
      </div>
    </div>
  </div>
</div>
<?php js::set('backup', $lang->backup->common);?>
<?php js::set('rmPHPHeader', $lang->backup->rmPHPHeader);?>
<?php js::set('confirmRestore', $lang->backup->confirmRestore);?>
<?php js::set('restore', $lang->backup->restore);?>
<?php include '../../common/view/footer.html.php';?>
