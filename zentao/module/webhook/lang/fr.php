<?php
$lang->webhook->common   = 'Webhook';
$lang->webhook->list     = 'Liste de Flux';
$lang->webhook->api      = 'API';
$lang->webhook->entry    = 'Entr�e';
$lang->webhook->log      = 'Log';
$lang->webhook->bind     = 'Bind User';
$lang->webhook->assigned = 'Assign';
$lang->webhook->setting  = 'Param�trages';

$lang->webhook->browse = 'Consulter';
$lang->webhook->create = 'Cr�er';
$lang->webhook->edit   = 'Modifier';
$lang->webhook->delete = 'Supprimer';

$lang->webhook->id          = 'ID';
$lang->webhook->type        = 'Type';
$lang->webhook->name        = 'Nom';
$lang->webhook->url         = 'Webhook URL';
$lang->webhook->domain      = 'ZenTao Domain';
$lang->webhook->contentType = 'Type de contenu';
$lang->webhook->sendType    = "Type d'envoi";
$lang->webhook->secret      = 'Secret';
$lang->webhook->product     = "{$lang->productCommon}";
$lang->webhook->project     = "{$lang->projectCommon}";
$lang->webhook->params      = 'Param�tres';
$lang->webhook->action      = 'Action captur�e';
$lang->webhook->desc        = 'Description';
$lang->webhook->createdBy   = 'Cr�� par';
$lang->webhook->createdDate = 'Date Cr�ation';
$lang->webhook->editedby    = 'Modifi� par';
$lang->webhook->editedDate  = 'DateEditedDate';
$lang->webhook->date        = 'Date envoi';
$lang->webhook->data        = 'Donn�e';
$lang->webhook->result      = 'R�sultat';

$lang->webhook->typeList['']          = '';
$lang->webhook->typeList['dingding']  = 'Dingding Robot';
$lang->webhook->typeList['dingapi']   = 'Dingding Notifier';
$lang->webhook->typeList['weixin']    = 'Enterprise WeChat';
$lang->webhook->typeList['default']   = 'Autre';

$lang->webhook->sendTypeList['sync']  = 'Synchrone';
$lang->webhook->sendTypeList['async'] = 'Asynchrone';

$lang->webhook->dingAgentId    = 'AgentID';
$lang->webhook->dingAppKey     = 'AppKey';
$lang->webhook->dingAppSecret  = 'AppSecret';
$lang->webhook->dingUserid     = 'UserID';
$lang->webhook->dingBindStatus = 'Bind Status';

$lang->webhook->dingBindStatusList['0'] = 'No';
$lang->webhook->dingBindStatusList['1'] = 'Yes';

$lang->webhook->paramsList['objectType'] = "Type d'objet";
$lang->webhook->paramsList['objectID']   = 'ID Objet';
$lang->webhook->paramsList['product']    = "{$lang->productCommon}";
$lang->webhook->paramsList['project']    = "{$lang->projectCommon}";
$lang->webhook->paramsList['action']     = 'Action';
$lang->webhook->paramsList['actor']      = 'Accomplie par';
$lang->webhook->paramsList['date']       = 'le';
$lang->webhook->paramsList['comment']    = 'Commentaire';
$lang->webhook->paramsList['text']       = "Description de l'Action";

$lang->webhook->confirmDelete = 'Voulez-vous vraiment supprimer ce flux ?';

$lang->webhook->trimWords = '';

$lang->webhook->note = new stdClass();
$lang->webhook->note->async   = "Si le type d'envoi est asynchrone, vous devez aller dans la console d'administration pour lancer la t�che cron.";
$lang->webhook->note->bind    = 'Bind User is only required for Dingding Notifier.';
$lang->webhook->note->product = "Toutes les actions vont d�clencher le flux si {$lang->productCommon} est vide, ou seulement les actions du {$lang->productCommon} s�lectionn� vont le d�clencher.";
$lang->webhook->note->project = "Toutes les actions vont d�clencher le flux si {$lang->projectCommon} est vide, ou seulement les actions du {$lang->projectCommon} s�lectionn� vont le d�clencher.";
$lang->webhook->note->dingKey = " <a href='http://www.zentao.net/book/zentaopmshelp/358.html' target='_blank'><i class='icon-help'></i></a>";

$lang->webhook->note->typeList['bearychat'] = "Ajout d'un bot a ZenTao dans bearychat et obtenez l'url du flux.";
$lang->webhook->note->typeList['dingding']  = "Ajout d'un bot personnalis� dans dingding et obtenez l'url du flux.";
$lang->webhook->note->typeList['default']   = "Obtenir les url d'autres flux webhook.";

$lang->webhook->error = new stdclass();
$lang->webhook->error->curl = 'Chargez php-curl dans php.ini.';
