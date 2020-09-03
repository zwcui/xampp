<?php
global $app;
helper::cd($app->getBasePath());
helper::import('module\action\model.php');
helper::cd();
class extactionModel extends actionModel 
{

    public function create($objectType, $objectID, $actionType, $comment = '', $extra = '', $actor = '', $autoDelete = true)
    {
if(strtolower($actionType) == 'reconnectxuanxuan' or strtolower($actionType) == 'loginxuanxuan')
{
    $ip   = $this->server->remote_addr;
    $last = $this->server->request_time;
    $this->dao->update(TABLE_USER)->set('visits = visits + 1')->set('ip')->eq($ip)->set('last')->eq($last)->where('account')->eq($actor)->exec();
}
        if(strtolower($actionType) == 'commented' and empty($comment)) return false;
        $actor      = $actor ? $actor : $this->app->user->account;
        $actionType = strtolower($actionType);
        if($actor == 'guest' and $actionType == 'logout') return false;
        
        $action = new stdclass();

        $objectType = str_replace('`', '', $objectType);
        $action->objectType = strtolower($objectType);
        $action->objectID   = $objectID;
        $action->actor      = $actor;
        $action->action     = $actionType;
        $action->date       = helper::now();
        $action->extra      = $extra;

        /* Use purifier to process comment. Fix bug #2683. */
        $action->comment  = fixer::dataStripTags($comment);

        /* Process action. */
        $action = $this->loadModel('file')->processImgURL($action, 'comment', $this->post->uid);
        if($autoDelete) $this->file->autoDelete($this->post->uid);

        /* Get product and project for this object. */
        $productAndProject = $this->getProductAndProject($action->objectType, $objectID);
        $action->product   = $productAndProject['product'];
        $action->project   = (int) $productAndProject['project'];

        $this->dao->insert(TABLE_ACTION)->data($action)->autoCheck()->exec();
        $actionID = $this->dbh->lastInsertID();

        $this->file->updateObjectID($this->post->uid, $objectID, $objectType);

        $this->loadModel('message')->send($objectType, $objectID, $actionType, $actionID);

        return $actionID;
    }

//**//
}