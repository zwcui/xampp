<?php
/**
 * The extension module en file of ZenTaoPMS.
 *
 * @copyright   Copyright 2009-2015 青岛易软天创网络科技有限公司(QingDao Nature Easy Soft Network Technology Co,LTD, www.cnezsoft.com)
 * @license     ZPL (http://zpl.pub/page/zplv12.html)
 * @author      Chunsheng Wang <chunsheng@cnezsoft.com>
 * @package     extension
 * @version     $Id$
 * @link        https://www.zentao.pm
 */
$lang->extension->common           = 'Extension';
$lang->extension->browse           = 'Extensions';
$lang->extension->install          = 'Installer Extension';
$lang->extension->installAuto      = 'Auto Installation';
$lang->extension->installForce     = 'Forcer Installation';
$lang->extension->uninstall        = 'Désinstaller';
$lang->extension->uninstallAction  = 'Désinstaller Extension';
$lang->extension->activate         = 'Activer';
$lang->extension->activateAction   = 'Activer Extension';
$lang->extension->deactivate       = 'Désactiver';
$lang->extension->deactivateAction = 'Désactiver Extension';
$lang->extension->obtain           = 'Obtenir Extension';
$lang->extension->view             = 'Détail';
$lang->extension->downloadAB       = 'Téléchargement';
$lang->extension->upload           = 'Installation Locale';
$lang->extension->erase            = 'Effacer';
$lang->extension->eraseAction      = 'Effacer Extension';
$lang->extension->upgrade          = 'Upgrade Extension';
$lang->extension->agreeLicense     = 'Accepter le contrat de license.';

$lang->extension->structure        = 'Structure Extension';
$lang->extension->structureAction  = 'Extension Structure';
$lang->extension->installed        = 'Installée';
$lang->extension->deactivated      = 'Désctivatée';
$lang->extension->available        = 'Téléchargée';

$lang->extension->name        = 'Nom Extension';
$lang->extension->code        = 'Code';
$lang->extension->desc        = 'Description';
$lang->extension->type        = 'Type';
$lang->extension->dirs        = 'Répertoire Installation';
$lang->extension->files       = 'Fichiers Installation';
$lang->extension->status      = 'Statut';
$lang->extension->version     = 'Version';
$lang->extension->latest      = '<small>Dernière:<strong><a href="%s" target="_blank" class="extension">%s</a></strong>，a besoin de zentao <a href="https://api.zentao.pm/goto.php?item=latest" target="_blank"><strong>%s</strong></small>';
$lang->extension->author      = 'Auteur';
$lang->extension->license     = 'License';
$lang->extension->site        = 'Website';
$lang->extension->downloads   = 'Téléchargements';
$lang->extension->compatible  = 'Compatibilité';
$lang->extension->grade       = 'Score';
$lang->extension->depends     = 'Dépendence';
$lang->extension->expireDate  = 'Expire le';
$lang->extension->zentaoCompatible  = 'Version Compatible';
$lang->extension->installedTime     = 'Date Installation';

$lang->extension->publicList[0] = 'Manuel';
$lang->extension->publicList[1] = 'Auto';

$lang->extension->compatibleList[0] = 'Inconnu';
$lang->extension->compatibleList[1] = 'Compatible';

$lang->extension->obtainOfficial[0] = 'Third-party';
$lang->extension->obtainOfficial[1] = 'Officiel';

$lang->extension->byDownloads   = 'Téléchargements';
$lang->extension->byAddedTime   = 'Derniers Ajouts';
$lang->extension->byUpdatedTime = 'Dernier Update';
$lang->extension->bySearch      = 'Rechercher';
$lang->extension->byCategory    = 'Category';

$lang->extension->installFailed            = '%s a choué. Erreur:';
$lang->extension->uninstallFailed          = 'Echec de désinstallation. Erreur:';
$lang->extension->confirmUninstall         = 'La désinstallation va supprimer ou changer la base de données. Voulez-vous la désinstaller malgré tout ?';
$lang->extension->installFinished          = "Bravo ! L'extension est %sée !";
$lang->extension->refreshPage              = 'Rafraichir';
$lang->extension->uninstallFinished        = 'Cette extension est désinstallée.';
$lang->extension->deactivateFinished       = 'Cette extension est désactivée.';
$lang->extension->activateFinished         = 'Cette extension est active.';
$lang->extension->eraseFinished            = 'Cette extension est supprimée.';
$lang->extension->unremovedFiles           = 'Fichier ou répertoire ne peuvent pas être supprimés. Vous devez le faire manuellement';
$lang->extension->executeCommands          = '<h3>Executez les lignes de commande ci-dessous pour résoudre le problème :</h3>';
$lang->extension->successDownloadedPackage = 'Cette extension est téléchargée !';
$lang->extension->successCopiedFiles       = 'Fichier copié !';
$lang->extension->successInstallDB         = 'Base de données installée !';
$lang->extension->viewInstalled            = 'Extensions Installées';
$lang->extension->viewAvailable            = 'Extensions Possibles';
$lang->extension->viewDeactivated          = 'Extensions Désactivées';
$lang->extension->backDBFile               = 'Les données de cette extension ont été sauvegardées dans %s!';
$lang->extension->noticeOkFile             = '<h5>Pour des raisons de sécurité, votre compte Administrateur doit être confirmé.</h5>
    <h5>Connectez-vous à votre serveur ZenTao et créez %s.</h5>
    <p>Note</p>
    <ol>
    <li>Le fichier que vous allez créer doit être vide.</li>
    <li>Si le fichier existe déjà, supprimez-le et créez-le à nouveau.</li>
    </ol>'; 

$lang->extension->upgradeExt     = 'Upgrader';
$lang->extension->installExt     = 'Installer';
$lang->extension->upgradeVersion = '(Upgrade %s vers %s.)';

$lang->extension->waring = 'Attention !';

$lang->extension->errorOccurs                  = 'Erreur:';
$lang->extension->errorGetModules              = 'Get Extension Category from www.zentao.pm failed. It could be network error. Plase check your network and refresh it.';
$lang->extension->errorGetExtensions           = 'Get Extensions from www.zentao.pm failed. It could be network error. Please go to <a href="https://www.zentao.pm/extension/" target="_blank" class="alert-link">www.zentao.pm</a> and download the extension, and then upload it to install.';
$lang->extension->errorDownloadPathNotFound    = 'Le répertoire de téléchargement <strong>%s</strong> semble inconnu.<br /> Please run <strong>mkdir -p %s</strong> in Linux to fix it.';
$lang->extension->errorDownloadPathNotWritable = 'Le chemin de téléchargement Extensions <strong>%s</strong> est non inscriptible. <br />Please run <strong>sudo chmod 777 %s</strong> in Linux to fix it.';
$lang->extension->errorPackageFileExists       = '<strong>%s</strong> existe déjà dans le répertoire de téléchargement.<h5> Please %s it again, <a href="%s" class="alert-link">CLICK HERE</a></h5>';
$lang->extension->errorDownloadFailed          = 'Echec au téléchargement. Réessayez. If still not OK, try to download it manually and upload it to install.';
$lang->extension->errorMd5Checking             = 'Fichier Incomplet. Téléchargez-le à nouveau. If still not OK, try to download it manually and upload it to install.';
$lang->extension->errorCheckIncompatible       = 'Incompatible avec votre ZenTao. It may not be used %s later.<h5>You can choose to <a href="%s" class="btn btn-sm">force%s</a> or <a href="#" onclick=parent.location.href="%s" class="btn btn-sm">cancel</a></h5>';
$lang->extension->errorFileConflicted          = '<br />%s <h5> est en conflit avec d\'autres. Choose <a href="%s" class="btn btn-sm">Override</a> or <a href="#" onclick=parent.location.href="%s" class="btn btn-sm">Cancel</a></h5>';
$lang->extension->errorPackageNotFound         = '<strong>%s </strong> non trouvé. Le téléchargement a peut-être échoué. Téléchargez à nouveau.';
$lang->extension->errorTargetPathNotWritable   = '<strong>%s </strong> non inscriptible.';
$lang->extension->errorTargetPathNotExists     = '<strong>%s </strong> non trouvé.';
$lang->extension->errorInstallDB               = 'Database report execution failed. Erreur: %s';
$lang->extension->errorConflicts               = 'Conflit avec “%s”!';
$lang->extension->errorDepends                 = 'Dependent extension has not been installed or the version is incorrect:<br /><br /> %s';
$lang->extension->errorIncompatible            = 'Incompatible avec votre ZenTao.';
$lang->extension->errorUninstallDepends        = '“%s” is dependent on ts extension. Please do not install it.';
