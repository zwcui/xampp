<?php
/**
 * The build module English file of ZenTaoPMS.
 *
 * @copyright   Copyright 2009-2015 青岛易软天创网络科技有限公司(QingDao Nature Easy Soft Network Technology Co,LTD, www.cnezsoft.com)
 * @license     ZPL (http://zpl.pub/page/zplv12.html)
 * @author      Chunsheng Wang <chunsheng@cnezsoft.com>
 * @package     build
 * @version     $Id: en.php 4129 2013-01-18 01:58:14Z wwccss $
 * @link        https://www.zentao.pm
 */
$lang->build->common           = "Build";
$lang->build->create           = "Créer Build";
$lang->build->edit             = "Editer Build";
$lang->build->linkStory        = "Intégrer Story";
$lang->build->linkBug          = "Intégrer Bug";
$lang->build->delete           = "Supprimer Build";
$lang->build->deleted          = "Supprimé";
$lang->build->view             = "Détail Build";
$lang->build->batchUnlink      = 'Retirer par Lot';
$lang->build->batchUnlinkStory = 'Retirer Sories par Lot';
$lang->build->batchUnlinkBug   = 'Retirer Bugs par Lot';

$lang->build->confirmDelete      = "Voulez-vous supprimer ce build ?";
$lang->build->confirmUnlinkStory = "Voulez-vous retirer cette Story du Build ?";
$lang->build->confirmUnlinkBug   = "Voulez-vous retirer ce Bug du Build ?";

$lang->build->basicInfo = 'Infos de Base';

$lang->build->id            = 'ID';
$lang->build->product       = $lang->productCommon;
$lang->build->branch        = 'Platforme/Branche';
$lang->build->project       = $lang->projectCommon;
$lang->build->name          = 'Nom';
$lang->build->date          = 'Date';
$lang->build->builder       = 'Builder';
$lang->build->scmPath       = 'SCM Path';
$lang->build->filePath      = 'File Path';
$lang->build->desc          = 'Description';
$lang->build->files         = 'Fichiers';
$lang->build->last          = 'Dernier Build';
$lang->build->packageType   = 'Type de Package';
$lang->build->unlinkStory   = 'Retirer Story';
$lang->build->unlinkBug     = 'Retirer Bug';
$lang->build->stories       = 'Stories terminées';
$lang->build->bugs          = 'Bugs Résolus';
$lang->build->generatedBugs = 'Bugs signalés';
$lang->build->noProduct     = " <span style='color:red'>Ce {$lang->projectCommon} n'est pas associé à un {$lang->productCommon}, le Build ne peut pas être créé. Commencez par <a href='%s'>rattacher le projet à un {$lang->productCommon}</a></span>";
$lang->build->noBuild       = 'Aucun builds.';

$lang->build->finishStories = '  Stories Terminées %s';
$lang->build->resolvedBugs  = '  Bugs Résolus %s';
$lang->build->createdBugs   = '  Bugs Signalés %s';

$lang->build->placeholder = new stdclass();
$lang->build->placeholder->scmPath  = ' Source code repository, ex: Subversion/Git Library path';
$lang->build->placeholder->filePath = ' Chemin de téléchargement pour ce Build.';

$lang->build->action = new stdclass();
$lang->build->action->buildopened = '$date, Build <strong>$extra</strong> créé par <strong>$actor</strong>.' . "\n";
$lang->backhome = 'Retour';
