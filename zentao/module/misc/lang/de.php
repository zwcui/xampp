<?php
/**
 * The misc module English file of ZenTaoPMS.
 *
 * @copyright   Copyright 2009-2015 青岛易软天创网络科技有限公司(QingDao Nature Easy Soft Network Technology Co,LTD, www.cnezsoft.com)
 * @license     ZPL (http://zpl.pub/page/zplv12.html)
 * @author      Chunsheng Wang <chunsheng@cnezsoft.com>
 * @package     misc
 * @version     $Id: English.php 824 2010-05-02 15:32:06Z wwccss $
 * @link        http://www.zentao.net
 */
$lang->misc = new stdclass();
$lang->misc->common = 'Sonstiges';
$lang->misc->ping   = 'Ping';
$lang->misc->api    = 'http://api.zentao.net';
$lang->misc->enApi  = 'http://api.zentao.pm';

$lang->misc->zentao = new stdclass();
$lang->misc->zentao->version           = 'Version %s';
$lang->misc->zentao->labels['about']   = 'Über';
$lang->misc->zentao->labels['support'] = 'Support';
$lang->misc->zentao->labels['cowin']   = 'Hilf uns';
$lang->misc->zentao->labels['service'] = 'Service';
$lang->misc->zentao->labels['others']  = 'Others';

$lang->misc->zentao->icons['about']   = 'group';
$lang->misc->zentao->icons['support'] = 'question-sign';
$lang->misc->zentao->icons['cowin']   = 'hand-right';
$lang->misc->zentao->icons['service'] = 'heart';

$lang->misc->zentao->about['proversion']   = 'ZenTao Pro';
$lang->misc->zentao->about['official']     = "Offizielle Webseite";
$lang->misc->zentao->about['changelog']    = "Change Log";
$lang->misc->zentao->about['license']      = "Lizenz";



$lang->misc->zentao->support['vip']        = "VIP Technischer Support";
$lang->misc->zentao->support['manual']     = "Benutzer Handbuch";





$lang->misc->zentao->cowin['reportbug']    = "Bug melden ";
$lang->misc->zentao->cowin['feedback']     = "Feedback";
$lang->misc->zentao->cowin['translate']    = "Translate";
$lang->misc->zentao->cowin['recommend']    = "More";

$lang->misc->zentao->service['zentaotrain']= 'Zentao Training';
$lang->misc->zentao->service['idc']        = 'Zentao Cloud';
$lang->misc->zentao->service['custom']     = 'Zentao Custom';
$lang->misc->zentao->service['servicemore']= 'Mehr';

global $config;
$lang->misc->zentao->others['chanzhi']  = "<img src='{$config->webRoot}theme/default/images/main/chanzhi.ico' /> Zsite";
$lang->misc->zentao->others['ranzhi']   = "<img src='{$config->webRoot}theme/default/images/main/ranzhi.ico' /> Zdoo";

$lang->misc->zentao->others['ydisk']    = "<img src='{$config->webRoot}theme/default/images/main/ydisk.ico' /> Y Disk";
$lang->misc->zentao->others['meshiot' ] = "<img src='{$config->webRoot}theme/default/images/main/meshiot.ico' /> MeshioT";

$lang->misc->mobile      = "Mobiler Zugriff";
$lang->misc->noGDLib     = "Bitte benutzen Sie den Browser Ihres Telefons um die Seite <strong>%s</strong> aufzurufen";
$lang->misc->copyright   = "&copy; 2009 - 2018 <a href='http://easysoft.ltd' target='_blank'>Nature Easy Soft Network Technology Co,LTD</a> Email <a href='mailto:Max@easysoft.ltd'>Max@easysoft.ltd</a>";
$lang->misc->checkTable  = "Prüfe Datentabellen";
$lang->misc->needRepair  = "Repariere Datentabellen";
$lang->misc->repairTable = "Datenbank íst beschädigt. Bitte brüfen und reparieren!";
$lang->misc->repairFail  = "Reparatur fehlgeschlagen. Bitte wechseln Sie in das Verzeichnis der Datenbank, und versuchen Sie folgenden Befehl <code>myisamchk -r -f %s.MYI</code> zum reparieren der DB.";
$lang->misc->connectFail = "Failed to connect to the database. Error: %s，<br/> Please check the MySQL error log and troubleshoot.";
$lang->misc->tableName   = "Tabellenname";
$lang->misc->tableStatus = "Status";
$lang->misc->novice      = "Erstes mal bei ZenTao? Möchten Sie den Beginner Modus starten?";

$lang->misc->noticeRepair = "<h5>Wenn Sie kein Administrator sind, konaktieren Sie bitte den Administrator um die Tabelle zu reparieren.</h5>
    <h5>Wenn Sie Administrtor sind, melden Sie sich bitte am Host an und erstellen Sie eine Datei mit dem Namen <span>%s</span>.</h5>
    <p>Hinweis:</p>
    <ol>
    <li>Lassen Sie die Datei leer.</li>
    <li>Wenn die Datei bereits existiert löschen Sie diese und erstellen Sie die Datei anschließend neu.</li>
    </ol>";

$lang->misc->feature = new stdclass();
$lang->misc->feature->lastest  = 'Letzte Version';
$lang->misc->feature->detailed = 'Details';

$lang->misc->releaseDate['11.7']        = '2019-11-28';
$lang->misc->releaseDate['11.6.5']      = '2019-11-08';
$lang->misc->releaseDate['11.6.4']      = '2019-10-17';
$lang->misc->releaseDate['11.6.3']      = '2019-09-24';
$lang->misc->releaseDate['11.6.2']      = '2019-09-06';
$lang->misc->releaseDate['11.6.1']      = '2019-08-23';
$lang->misc->releaseDate['11.6.stable'] = '2019-07-12';
$lang->misc->releaseDate['11.5.2']      = '2019-06-26';
$lang->misc->releaseDate['11.5.1']      = '2019-06-24';
$lang->misc->releaseDate['11.5.stable'] = '2019-05-08';
$lang->misc->releaseDate['11.4.1']      = '2019-04-08';
$lang->misc->releaseDate['11.4.stable'] = '2019-03-25';
$lang->misc->releaseDate['11.3.stable'] = '2019-02-27';
$lang->misc->releaseDate['11.2.stable'] = '2019-01-30';
$lang->misc->releaseDate['11.1.stable'] = '2019-01-04';
$lang->misc->releaseDate['11.0.stable'] = '2018-12-21';
$lang->misc->releaseDate['10.6.stable'] = '2018-11-20';
$lang->misc->releaseDate['10.5.stable'] = '2018-10-25';
$lang->misc->releaseDate['10.4.stable'] = '2018-09-28';
$lang->misc->releaseDate['10.3.stable'] = '2018-08-10';
$lang->misc->releaseDate['10.2.stable'] = '2018-08-02';
$lang->misc->releaseDate['10.0.stable'] = '2018-06-26';
$lang->misc->releaseDate['9.8.stable']  = '2018-01-17';
$lang->misc->releaseDate['9.7.stable']  = '2017-12-22';
$lang->misc->releaseDate['9.6.stable']  = '2017-11-06';
$lang->misc->releaseDate['9.5.1']       = '2017-09-27';
$lang->misc->releaseDate['9.3.beta']    = '2017-06-21';
$lang->misc->releaseDate['9.1.stable']  = '2017-03-23';
$lang->misc->releaseDate['9.0.beta']    = '2017-01-03';
$lang->misc->releaseDate['8.3.stable']  = '2016-11-09';
$lang->misc->releaseDate['8.2.stable']  = '2016-05-17';
$lang->misc->releaseDate['7.4.beta']    = '2015-11-13';
$lang->misc->releaseDate['7.2.stable']  = '2015-05-22';
$lang->misc->releaseDate['7.1.stable']  = '2015-03-07';
$lang->misc->releaseDate['6.3.stable']  = '2014-11-07';

$lang->misc->feature->all['11.7'][]   = array('title'=>'Optimize details and fix bug.', 'desc' => '<p>Added choices for users to choose agile or not.</p><p>Added WeChat Enterprise to the types of webhook</p><p>Added the notifier of Dingding personal messages</p>');
$lang->misc->feature->all['11.6.5'][] = array('title'=>'Fix bug.', 'desc' => '');
$lang->misc->feature->all['11.6.4'][] = array('title'=>'Optimize details and fix bug.', 'desc' => '');
$lang->misc->feature->all['11.6.3'][] = array('title'=>'Fix bug.', 'desc' => '');
$lang->misc->feature->all['11.6.2'][] = array('title'=>'Optimize details and fix bug.', 'desc' => '');
$lang->misc->feature->all['11.6.1'][] = array('title'=>'Optimize details and fix bug.', 'desc' => '');

$lang->misc->feature->all['11.6.stable'][] = array('title'=>'Improving the International Edition Interface', 'desc' => '');
$lang->misc->feature->all['11.6.stable'][] = array('title'=>'Add translate function', 'desc' => '');

$lang->misc->feature->all['11.5.2'][] = array('title'=>'Increase the security of ZenTao and increase the login password for weak password check', 'desc' => '');
$lang->misc->feature->all['11.5.1'][] = array('title'=>'Add a third-party authentication and fix bugs.', 'desc' => '');

$lang->misc->feature->all['11.5.stable'][] = array('title'=>'Optimize details and fix bug.', 'desc' => '');
$lang->misc->feature->all['11.5.stable'][] = array('title'=>'Added filters to Dynamics', 'desc' => '');
$lang->misc->feature->all['11.5.stable'][] = array('title'=>'Integrated the latest ZenTao client', 'desc' => '');

$lang->misc->feature->all['11.4.1'][]      = array('title'=>'Optimize details and fix bug.', 'desc' => '');

$lang->misc->feature->all["11.4.stable"][] = array('title'=>'Optimize details and fix bug.', 'desc' => '<p>Enhanced test management.</p><p>Optimized the UI of Plan, Release, and Build linked stories and bugs.</p><p>Customize the feature whether to display files in child category.</p><p>Optimize details and fix bug.</p>');

$lang->misc->feature->all['11.3.stable'][] = array('title'=>'Optimize details and fix bug.', 'desc' => '<p>Add Child Plan to a Plan</p><p>Optimize the chosen</p><p>Add Timezone settings</p><p>Optimize Document Library and Document modules</p>');

$lang->misc->feature->all['11.2.stable'][] = array('title'=>'Optimize details and fix bug.', 'desc' => '<p>Add upgrade logs and database checkup after upgrading</p><p>Fixed ZenTao client and other bugs, and optimized details.</p>');

$lang->misc->feature->all['11.1.stable'][] = array('title'=>'Fix Bug.', 'desc' => '');

$lang->misc->feature->all['11.0.stable'][] = array('title'=>'ZenTao integrate Xuanxuan', 'desc' => '');

$lang->misc->feature->all['10.6.stable'][] = array('title'=>'Adjust backup mechanism', 'desc' => '<p>Increase backup settings and make backup more flexible</p><p>Show backup progress</p><p>Change the backup directory</p>');
$lang->misc->feature->all['10.6.stable'][] = array('title'=>'Optimize and adjust menu', 'desc' => '<p>Adjust admin menu</p><p>Adjust the secondary menu of My and Project</p>');

$lang->misc->feature->all['10.5.stable'][] = array('title'=>'Adjust document layout', 'desc' => "<p>Adjust the layout method on the left side of the document library.</p><p>Add filter conditions at the bottom of the document library menu.</p>");
$lang->misc->feature->all['10.5.stable'][] = array('title'=>'Adjust the child task logic and optimize the display of parent-child task.', 'desc' => '');

$lang->misc->feature->all['10.4.stable'][] = array('title'=>'Optimize and adjust new interface', 'desc' => '<p>Detail page restore to the previous layout.</p><p>Refactore forms to add user pages</p><p>When use cases are executed, do not update the use case stause if the user manually chooses to pass and write the results.</p>');
$lang->misc->feature->all['10.4.stable'][] = array('title'=>'After the user machine hibernates and the login fails, the session will be refreshed again.', 'desc' => '');
$lang->misc->feature->all['10.4.stable'][] = array('title'=>'Upgrade existing interface mechanisms', 'desc' => '');

$lang->misc->feature->all['10.3.stable'][] = array('title'=>'Fix Bug.', 'desc' => '');
$lang->misc->feature->all['10.2.stable'][] = array('title'=>'Xuan.im is integrated!', 'desc' => '');

$lang->misc->feature->all['10.0.stable'][] = array('title'=>'New UI/UX and new experience', 'desc' => '<ol><li>My Dashboard</li><li>Dynamics</li><li>Product Home</li><li>Product Overview</li><li>Roadmap</li><li>Project Home</li><li>Project overview</li><li>QA Home</li><li>Document Home</li><li>Added work report on My Dashboard</li><li>Add/Edit/Finish todos on My Dashboard</li><li>Add prodcut report on Product Home</li><li>Add prodcut overview on Product Home</li><li>Add project report on Project Home</li><li>Add project overview on Project Home</li><li>Add Testing report on QA Home</li><li>All Product/product Home/All Project/Project Home/QA Home is moved from the right of the secondary Navbar to the left.</li><li>Kanban/Burndown/Tree/ByGroup of Project/Task has been moved from the third Navbar to the secondary one; Tree/ByGroup/Task List has been integrated to a drop-down.</li><li>Bug/Build of Project on the secondary Navbar has been integrated to a drop-down.</li><li>Display build and list by group, which is more reasonable.</li><li>Added tree to display document on the left of the page.</li><li>Added quick entry to document, including Last Update, My Doc and My Favorite</li><li>Added My Favorite to Doc module.</li></ol>');

$lang->misc->feature->all['9.8.stable'][] = array('title'=>'Message centralized management', 'desc' => '<p>Centring Mail，SMS，webhook into Message</p>');
$lang->misc->feature->all['9.8.stable'][] = array('title'=>'Add Periodic Todo function', 'desc' => '');
$lang->misc->feature->all['9.8.stable'][] = array('title'=>"Add Block of 'Assigned to Me'", 'desc' => '');
$lang->misc->feature->all['9.8.stable'][] = array('title'=>'Support Generating TestStatements of TestBuilds', 'desc' => '');

$lang->misc->feature->all['9.7.stable'][] = array('title'=>'optimize International package，Added Demo data。', 'desc' => '');

$lang->misc->feature->all['9.6.stable'][] = array('title'=>'added Webhook Interface feature', 'desc' => 'support communication with BearyChat,dingding');
$lang->misc->feature->all['9.6.stable'][] = array('title'=>'added Score feature', 'desc' => 'More skilled Use, More score');
$lang->misc->feature->all['9.6.stable'][] = array('title'=>'added Multiplayer task and subTask to project tasks', 'desc' => '');
$lang->misc->feature->all['9.6.stable'][] = array('title'=>'added Product line management to Product View', 'desc' => '');

$lang->misc->feature->all['9.5.1'][] = array('title'=>'added Restricted Operatio', 'desc' => '');

$lang->misc->feature->all['9.3.beta'][] = array('title'=>'upgraded framework，Enhanced security', 'desc' => '');

$lang->misc->feature->all['9.1.stable'][] = array('title'=>'optimize Test View', 'desc' => '<p>added TestSuite,CaseLib and Test Statements</p>');
$lang->misc->feature->all['9.1.stable'][] = array('title'=>'support Group steps of TestCase', 'desc' => '');

$lang->misc->feature->all['9.0.beta'][] = array('title'=>'ZenTao CloudMail has been added.', 'desc' => '<p>ZenTao CloudMail is a free Email service launched jointly with SendCloud. Once binded with ZenTao and passed verification, users can use this service.</p>');
$lang->misc->feature->all['9.0.beta'][] = array('title'=>'Optimized Rich Text Editor and Markdown Editor.', 'desc' => '');

$lang->misc->feature->all['8.3.stable'][] = array('title'=>'Improved Documentation.', 'desc' => '<p>Added Document Home, restructured document library, and added privileges.</p><p>Markdown Editor is supported，and privilege and version managment is added.</p>');

$lang->misc->feature->all['8.2.stable'][] = array('title'=>'Custom Home', 'desc' => '<p>You can add blocks to Dashboard and arrange the layout.</p><p> My Zone, Product, Project, and QA all support home custom mentioned before. </p>');
$lang->misc->feature->all['8.2.stable'][] = array('title'=>'Custom Navigation', 'desc' => '<p>You can decide which project show in navigation bar and the order of projects shown in the bar.</p><p> Hover on the navigation bar and a sign will show to its right. Click the sign and a dialog box "Custom Navigation" will show. Drag the block name to switch its order on navigation bar.</p>');
$lang->misc->feature->all['8.2.stable'][] = array('title'=>'Batch Add/Edit Custom', 'desc' => '<p>You can batch add and edit fields on custom pages.</p>');
$lang->misc->feature->all['8.2.stable'][] = array('title'=>'Custom Story/Task/Bug/Case', 'desc' => '<p>You can custom fileds when add a Story/Task/Bug/Case.</p>');
$lang->misc->feature->all['8.2.stable'][] = array('title'=>'Custom Export', 'desc' => '<p>You can custom fileds when export a Story/Task/Bug/Case pages. You can also save it as template for next export.</p>');
$lang->misc->feature->all['8.2.stable'][] = array('title'=>'Story/Task/Bug/Case Search ', 'desc' => '<p>On Story/Task/Bug/Case List page, you can do a combined search on Modules and Tabs.</p>');
$lang->misc->feature->all['8.2.stable'][] = array('title'=>"Rookie's Tutorial", 'desc' => '<p>Tutorial for Rookies is added for first-time users to know how to use ZenTao.</p>');

$lang->misc->feature->all['7.4.beta'][] = array('title'=>'Product branch feature is added.', 'desc' => '<p>Product branch/platform is added, and its related Story/Plan/Bug/Case/Module has Branch added too.</p>');
$lang->misc->feature->all['7.4.beta'][] = array('title'=>'Release Module is improved.', 'desc' => '<p>Stop action has been added. If Stop to manage it, the Release will not show when Report Bug.</p><p>Bugs that have been omitted in the Release will be related manually.</p>');
$lang->misc->feature->all['7.4.beta'][] = array('title'=>'Create pages of Story and Bug are improved.', 'desc' => '');

$lang->misc->feature->all['7.2.stable'][] = array('title'=>'Security Enhanced', 'desc' => '<p>Admin weak passwork check is enhanced.</p><p>ok file is required when code/upload an extension.</p><p>Sensitive action requires Admin password.</p><p>Do striptags, specialchars to content entered in ZenTao.</p>');
$lang->misc->feature->all['7.2.stable'][] = array('title'=>'Details Improved', 'desc' => '');

$lang->misc->feature->all['7.1.stable'][] = array('title'=>'Framework of scheduled tasks is added.', 'desc' => 'Framework of scheduled tasks is added. Daily notification, Burndown Update, Backup, Send Email and so on have been added.');
$lang->misc->feature->all['7.1.stable'][] = array('title'=>'rpm and deb packages are provided.', 'desc' => '');

$lang->misc->feature->all['6.3.stable'][] = array('title'=>'Data table is added.', 'desc' => '<p>Fields can be customized in data table and data will be displayed according to customized fields.</p>');
$lang->misc->feature->all['6.3.stable'][] = array('title'=>'Continue improving details', 'desc' => '');
