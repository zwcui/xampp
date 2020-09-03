<?php
$lang->mail->common        = 'Param�trage Email';
$lang->mail->index         = 'Accueil Email';
$lang->mail->detect        = 'D�tecter';
$lang->mail->detectAction  = 'D�tecter par Adresse mail';
$lang->mail->edit          = 'Editer Param�trages';
$lang->mail->save          = 'Sauver';
$lang->mail->saveAction    = 'Saver Param�trages';
$lang->mail->test          = 'Test Envoi Email';
$lang->mail->reset         = 'R�initialiser';
$lang->mail->resetAction   = 'R�initialiser Param�trages';
$lang->mail->resend        = 'Renvoyer';
$lang->mail->resendAction  = 'Renvoyer mail';
$lang->mail->browse        = 'Liste Email';
$lang->mail->delete        = 'Supprimer mail';
$lang->mail->ztCloud       = 'ZenTao CloudMail';
$lang->mail->gmail         = 'Gmail';
$lang->mail->sendCloud     = 'Notice SendCloud';
$lang->mail->batchDelete   = 'Suppression par Lot';
$lang->mail->sendcloudUser = 'Sync. Contact';
$lang->mail->agreeLicense  = 'Oui';
$lang->mail->disagree      = 'Non';

$lang->mail->turnon      = 'Notification Email';
$lang->mail->async       = 'Envoi Async';
$lang->mail->fromAddress = 'Exp�diteur mail';
$lang->mail->fromName    = 'Exp�diteur';
$lang->mail->domain      = 'Domaine ZenTao';
$lang->mail->host        = 'Serveur SMTP';
$lang->mail->port        = 'Port SMTP';
$lang->mail->auth        = 'Validation SMTP';
$lang->mail->username    = 'Compte SMTP';
$lang->mail->password    = 'Mot de passe SMTP';
$lang->mail->secure      = 'Cryptage';
$lang->mail->debug       = 'Debug';
$lang->mail->charset     = 'Charset';
$lang->mail->accessKey   = "Cl� d'Acc�s";
$lang->mail->secretKey   = "Cl� Secr�te";
$lang->mail->license     = 'ZenTao CloudMail Notice';

$lang->mail->selectMTA = 'S�lect Type';
$lang->mail->smtp      = 'SMTP';

$lang->mail->syncedUser = 'Synchronis';
$lang->mail->unsyncUser = 'Non Synchronis';
$lang->mail->sync       = 'Synchronisation';
$lang->mail->remove     = 'Retirer';

$lang->mail->toList      = 'Destinataire';
$lang->mail->ccList      = 'Copie ';
$lang->mail->subject     = 'Sujet';
$lang->mail->createdBy   = 'Exp�diteur';
$lang->mail->createdDate = 'Cr�ation';
$lang->mail->sendTime    = 'Envoi';
$lang->mail->status      = 'Statut';
$lang->mail->failReason  = 'Raison';

$lang->mail->statusList['wait']   = 'Wait';
$lang->mail->statusList['sended'] = 'Envoy';
$lang->mail->statusList['fail']   = 'Echec';

$lang->mail->turnonList[1]  = 'On';
$lang->mail->turnonList[0] = 'Off';

$lang->mail->asyncList[1] = 'Oui';
$lang->mail->asyncList[0] = 'Non';

$lang->mail->debugList[0] = 'Off';
$lang->mail->debugList[1] = 'Normal';
$lang->mail->debugList[2] = 'Haute';

$lang->mail->authList[1]  = 'Oui';
$lang->mail->authList[0] = 'Non';

$lang->mail->secureList['']    = 'Plain';
$lang->mail->secureList['ssl'] = 'ssl';
$lang->mail->secureList['tls'] = 'tls';

$lang->mail->more           = 'Plus';
$lang->mail->noticeResend   = 'Le mail a �t� renvoy� !';
$lang->mail->inputFromEmail = 'Exp�diteur Email';
$lang->mail->nextStep       = 'Suivant';
$lang->mail->successSaved   = 'Param�trage Email sauvegard�s.';
$lang->mail->testSubject    = 'mail de test';
$lang->mail->testContent    = 'Les Param�trages Email sont ok !';
$lang->mail->successSended  = 'Envoy� !';
$lang->mail->confirmDelete  = 'Voulez-vous le supprimer ?';
$lang->mail->sendmailTips   = "Note : l'exp�diteur ne recevra pas ce mail.";
$lang->mail->needConfigure  = "Les param�trages Email n'ont pas �t� trouv�s. Commencez par param�trer l'Email.";
$lang->mail->connectFail    = 'Echec de Connexion � ZenTao.';
$lang->mail->centifyFail    = 'Echec de V�rification. La cl� secr�te peut avoir �t� chang�e. Essayez � nouveau !';
$lang->mail->nofsocket      = 'Les fonctions fsocket sont d�sactiv�es. Les mails ne peuvent pas �tre envoy�s. Modifiez allow_url_fopen dans php.ini pour ouvrir Onopenssl, et red�marrez Apache.';
$lang->mail->noOpenssl      = 'Activez Onopenssl, et red�marrez Apache.';
$lang->mail->disableSecure  = 'Pas de openssl. ssl et tls sont inactifs.';
$lang->mail->sendCloudFail  = 'Echec. Raison :';
$lang->mail->sendCloudHelp  = <<<EOD



EOD;
$lang->mail->sendCloudSuccess = 'Envoy';
$lang->mail->closeSendCloud   = 'Fermer SendCloud';
$lang->mail->addressWhiteList = "Ajoutez le � la liste blanche de votre serveur de mail pour �viter d'�tre bloqu�.";
$lang->mail->ztCloudNotice    = <<<EOD









EOD;

$lang->mail->placeholder = new stdclass();
$lang->mail->placeholder->password = "Certains serveurs de mails demandent un code d'autorisation, consultez le service d'Emails de votre provider.";
