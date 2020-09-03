<?php
$lang->webhook->common   = 'Webhook';
$lang->webhook->list     = 'Hook List';
$lang->webhook->api      = 'API';
$lang->webhook->entry    = 'Entry';
$lang->webhook->log      = 'Log';
$lang->webhook->bind     = 'Bind User';
$lang->webhook->assigned = 'AssignedTo';
$lang->webhook->setting  = 'Settings';

$lang->webhook->browse = 'Browse';
$lang->webhook->create = 'Create';
$lang->webhook->edit   = 'Edit';
$lang->webhook->delete = 'Delete';

$lang->webhook->id          = 'ID';
$lang->webhook->type        = 'Type';
$lang->webhook->name        = 'Name';
$lang->webhook->url         = 'Webhook URL';
$lang->webhook->domain      = 'ZenTao Domain';
$lang->webhook->contentType = 'Content Type';
$lang->webhook->sendType    = 'Sending Type';
$lang->webhook->secret      = 'Secret';
$lang->webhook->product     = "{$lang->productCommon}";
$lang->webhook->project     = "{$lang->projectCommon}";
$lang->webhook->params      = 'Parameters';
$lang->webhook->action      = 'Trigger Action';
$lang->webhook->desc        = 'Description';
$lang->webhook->createdBy   = 'CreatedBy';
$lang->webhook->createdDate = 'CreatedDate';
$lang->webhook->editedby    = 'EditedBy';
$lang->webhook->editedDate  = 'EditedDate';
$lang->webhook->date        = 'Sent';
$lang->webhook->data        = 'Data';
$lang->webhook->result      = 'Result';

$lang->webhook->typeList['']          = '';
$lang->webhook->typeList['dingding']  = 'Dingding Robot';
$lang->webhook->typeList['dingapi']   = 'Dingding Notifier';
$lang->webhook->typeList['weixin']    = 'Enterprise WeChat';
$lang->webhook->typeList['default']   = 'Others';

$lang->webhook->sendTypeList['sync']  = 'Synchronous';
$lang->webhook->sendTypeList['async'] = 'Asynchronous';

$lang->webhook->dingAgentId    = 'AgentID';
$lang->webhook->dingAppKey     = 'AppKey';
$lang->webhook->dingAppSecret  = 'AppSecret';
$lang->webhook->dingUserid     = 'UserID';
$lang->webhook->dingBindStatus = 'Bind Status';

$lang->webhook->dingBindStatusList['0'] = 'No';
$lang->webhook->dingBindStatusList['1'] = 'Yes';

$lang->webhook->paramsList['objectType'] = 'Object Type';
$lang->webhook->paramsList['objectID']   = 'Object ID';
$lang->webhook->paramsList['product']    = "{$lang->productCommon}";
$lang->webhook->paramsList['project']    = "{$lang->projectCommon}";
$lang->webhook->paramsList['action']     = 'Action';
$lang->webhook->paramsList['actor']      = 'ActedBy';
$lang->webhook->paramsList['date']       = 'ActedDate';
$lang->webhook->paramsList['comment']    = 'Comment';
$lang->webhook->paramsList['text']       = 'Action Description';

$lang->webhook->confirmDelete = 'Do you want to delete this hook?';

$lang->webhook->trimWords = '';

$lang->webhook->note = new stdClass();
$lang->webhook->note->async   = 'If it is asynchronous, you have to go to Admin-System to turn on the cron.';
$lang->webhook->note->bind    = 'Bind User is only required for Dingding Notifier.';
$lang->webhook->note->product = "All actions will trigger the hook if {$lang->productCommon} is empty, or only actions of selected {$lang->productCommon} will trigger it.";
$lang->webhook->note->project = "All actions will trigger the hook if {$lang->projectCommon} is empty, or only actions of selected {$lang->projectCommon} will trigger it.";
$lang->webhook->note->dingKey = " <a href='http://www.zentao.net/book/zentaopmshelp/358.html' target='_blank'><i class='icon-help'></i></a>";

$lang->webhook->note->typeList['bearychat'] = 'Add a ZenTao bot in bearychat and get the webhook url.';
$lang->webhook->note->typeList['dingding']  = 'Add a customized bot in dingding and get the webhook url.';
$lang->webhook->note->typeList['default']   = 'Get a webhook url from others';

$lang->webhook->error = new stdclass();
$lang->webhook->error->curl = 'Load php-curl in php.ini.';
