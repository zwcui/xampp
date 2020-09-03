<?php
global $app;
helper::cd($app->getBasePath());
helper::import('module\im\model.php');
helper::cd();
class extimModel extends imModel 
{
public function getExtensionList($userID)
{
    return $this->loadExtension('xuanxuan')->getExtensionList($userID);
}

public function editUser($user = null)
{
    return $this->loadExtension('xuanxuan')->editUser($user);
}

public function getServer($backend = 'xxb')
{
    return $this->loadExtension('xuanxuan')->getServer($backend);
}

public function uploadFile($fileName, $path, $size, $time, $userID, $users, $chat)
{
    return $this->loadExtension('xuanxuan')->uploadFile($fileName, $path, $size, $time, $userID, $users, $chat);
}
//**//
}