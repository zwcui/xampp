<?php
/**
 * The file module English file of ZenTaoPMS.
 *
 * @copyright   Copyright 2009-2015 青岛易软天创网络科技有限公司(QingDao Nature Easy Soft Network Technology Co,LTD, www.cnezsoft.com)
 * @license     ZPL (http://zpl.pub/page/zplv12.html)
 * @author      Chunsheng Wang <chunsheng@cnezsoft.com>
 * @package     file
 * @version     $Id: en.php 4129 2013-01-18 01:58:14Z wwccss $
 * @link        http://www.zentao.net
 */
$lang->file = new stdclass();
$lang->file->common        = 'File';
$lang->file->uploadImages  = 'Batch Upload Images';
$lang->file->download      = 'Download Files';
$lang->file->uploadDate    = 'Uploaded';
$lang->file->edit          = 'Rename File';
$lang->file->inputFileName = 'Enter File Name';
$lang->file->delete        = 'Delete File';
$lang->file->label         = 'Label:';
$lang->file->maxUploadSize = "<span class='text-red'>%s</span>";
$lang->file->applyTemplate = "Apply Template";
$lang->file->tplTitle      = "Template Name";
$lang->file->tplTitleAB    = "Templates";
$lang->file->setPublic     = "Set Public Template";
$lang->file->exportFields  = "Fields";
$lang->file->exportRange   = "Data";
$lang->file->defaultTPL    = "Default";
$lang->file->setExportTPL  = "Settings";
$lang->file->preview       = "Preview";
$lang->file->addFile       = 'Add';
$lang->file->beginUpload   = 'Click to Upload';
$lang->file->uploadSuccess = 'Uploaded!';

$lang->file->pathname  = 'Path Name';
$lang->file->title     = 'Title';
$lang->file->fileName  = 'File Name';
$lang->file->untitled  = 'Untitled';
$lang->file->extension = 'Format';
$lang->file->size      = 'Size';
$lang->file->encoding  = 'Encoding';
$lang->file->addedBy   = 'AddedBy';
$lang->file->addedDate = 'Added';
$lang->file->downloads = 'Downloads';
$lang->file->extra     = 'Comment';

$lang->file->dragFile            = 'Drag images here.';
$lang->file->childTaskTips       = 'It\'s a child task if there is a \'>\' before the name.';
$lang->file->errorNotExists      = "<span class='text-red'>'%s' is not found.</span>";
$lang->file->errorCanNotWrite    = "<span class='text-red'>'%s' is not writable. Please change its permission. Enter <span class='code'>sudo chmod -R 777 '%s'</span></span> in Linux.";
$lang->file->confirmDelete       = " Do you want to delete it?";
$lang->file->errorFileSize       = " File size exceeds the limit. It cannot be uploaded!";
$lang->file->errorFileUpload     = " Uploading failed. The file size might exceeds the limit.";
$lang->file->errorFileFormate    = " Uploading failed. The file format is not in the prescribed scope.";
$lang->file->errorFileMove       = " Uploading failed. An error prompts when moving file.";
$lang->file->dangerFile          = " The file failed to be uploaded for security reasons.";
$lang->file->errorSuffix         = 'Format is incorrect. .zip files ONLY!';
$lang->file->errorExtract        = 'Extracting files failed. Files might be damaged or there might be invalid files in the zip package.';
$lang->file->uploadImagesExplain = 'Note: upload .jpg, .jpeg, .gif, or .png images. The image name will be the name of the story and the image will be the description.';
$lang->file->fileNotFound        = 'The file was not found. The physical file might have been deleted!';
