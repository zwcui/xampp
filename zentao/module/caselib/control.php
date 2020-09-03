<?php
/**
 * The control file of caselib module of ZenTaoPMS.
 *
 * @copyright   Copyright 2009-2015 青岛易软天创网络科技有限公司(QingDao Nature Easy Soft Network Technology Co,LTD, www.cnezsoft.com)
 * @license     ZPL (http://zpl.pub/page/zplv12.html)
 * @author      Chunsheng Wang <chunsheng@cnezsoft.com>
 * @package     caselib
 * @version     $Id: control.php 5114 2013-07-12 06:02:59Z chencongzhi520@gmail.com $
 * @link        http://www.zentao.net
 */
class caselib extends control
{
    public $products = array();

    /**
     * Index page, header to browse.
     *
     * @access public
     * @return void
     */
    public function index()
    {
        $this->locate($this->createLink('caselib', 'browse'));
    }

    /**
     * Create lib
     *
     * @access public
     * @return void
     */
    public function create()
    {
        if(!empty($_POST))
        {
            $response['result']  = 'success';
            $response['message'] = $this->lang->saveSuccess;
            $libID = $this->caselib->create();
            if(dao::isError())
            {
                $response['result']  = 'fail';
                $response['message'] = dao::getError();
                $this->send($response);
            }
            $this->loadModel('action')->create('caselib', $libID, 'opened');
            $response['locate']  = $this->createLink('caselib', 'browse', "libID=$libID");
            $this->send($response);
        }

        /* Set menu. */
        $libraries = $this->caselib->getLibraries();
        $libID     = $this->caselib->saveLibState(0, $libraries);
        $this->caselib->setLibMenu($libraries, $libID);

        $this->view->title      = $this->lang->caselib->common . $this->lang->colon . $this->lang->caselib->create;
        $this->view->position[] = $this->lang->caselib->common;
        $this->view->position[] = $this->lang->caselib->create;
        $this->display();
    }

    /**
     * Edit a case lib.
     *
     * @param  int    $lib
     * @access public
     * @return void
     */
    public function edit($libID)
    {
        $lib = $this->caselib->getById($libID);
        if(!empty($_POST))
        {
            $response['result']  = 'success';
            $response['message'] = $this->lang->saveSuccess;
            $changes = $this->caselib->update($libID);
            if(dao::isError())
            {
                $response['result']  = 'fail';
                $response['message'] = dao::getError();
                $this->send($response);
            }
            if($changes)
            {
                $actionID = $this->loadModel('action')->create('caselib', $libID, 'edited');
                $this->action->logHistory($actionID, $changes);
            }

            $this->executeHooks($libID);

            $response['locate']  = inlink('view', "libID=$libID");
            $this->send($response);
        }

        /* Set lib menu. */
        $libraries = $this->caselib->getLibraries();
        $libID     = $this->caselib->saveLibState($libID, $libraries);
        $this->caselib->setLibMenu($libraries, $libID);

        $this->view->title      = $libraries[$libID] . $this->lang->colon . $this->lang->caselib->edit;
        $this->view->position[] = html::a($this->createLink('caselib', 'browse', "libID=$libID"), $libraries[$libID]);
        $this->view->position[] = $this->lang->caselib->common;
        $this->view->position[] = $this->lang->caselib->edit;

        $this->view->lib = $lib;
        $this->display();
    }

    /**
     * Delete a case lib.
     *
     * @param  int    $libID
     * @param  string $confirm yes|no
     * @access public
     * @return void
     */
    public function delete($libID, $confirm = 'no')
    {
        if($confirm == 'no')
        {
            die(js::confirm($this->lang->caselib->libraryDelete, inlink('delete', "libID=$libID&confirm=yes")));
        }
        else
        {
            $this->caselib->delete($libID);

            $this->executeHooks($libID);

            /* if ajax request, send result. */
            if($this->server->ajax)
            {
                if(dao::isError())
                {
                    $response['result']  = 'fail';
                    $response['message'] = dao::getError();
                }
                else
                {
                    $response['result']  = 'success';
                    $response['message'] = '';
                }
                $this->send($response);
            }
            die(js::reload('parent'));
        }
    }

    /**
     * Show library case.
     *
     * @param  int    $libID
     * @param  string $browseType
     * @param  int    $param
     * @param  string $orderBy
     * @param  int    $recTotal
     * @param  int    $recPerPage
     * @param  int    $pageID
     * @access public
     * @return void
     */
    public function browse($libID = 0, $browseType = 'all', $param = 0, $orderBy = 'id_desc', $recTotal = 0, $recPerPage = 20, $pageID = 1)
    {
        /* Set browse type. */
        $browseType = strtolower($browseType);

        $libraries = $this->caselib->getLibraries();
        if(empty($libraries)) $this->locate(inlink('create'));

        /* Save session. */
        $this->session->set('caseList', $this->app->getURI(true));

        /* Set menu. */
        $libID = $this->caselib->saveLibState($libID, $libraries);
        setcookie('preCaseLibID', $libID, $this->config->cookieLife, $this->config->webRoot, '', false, true);
        if($this->cookie->preCaseLibID != $libID)
        {
            $_COOKIE['libCaseModule'] = 0;
            setcookie('libCaseModule', 0, 0, $this->config->webRoot, '', false, true);
        }

        if($browseType == 'bymodule') setcookie('libCaseModule', (int)$param, 0, $this->config->webRoot, '', false, true);
        if($browseType != 'bymodule') $this->session->set('libBrowseType', $browseType);
        $moduleID = ($browseType == 'bymodule') ? (int)$param : ($browseType == 'bysearch' ? 0 : ($this->cookie->libCaseModule ? $this->cookie->libCaseModule : 0));
        $queryID  = ($browseType == 'bysearch') ? (int)$param : 0;

        /* Set lib menu. */
        $this->caselib->setLibMenu($libraries, $libID, $moduleID);

        /* Load pager. */
        $this->app->loadClass('pager', $static = true);
        $pager = pager::init($recTotal, $recPerPage, $pageID);

        /* Build the search form. */
        $this->loadModel('testcase');
        $actionURL = $this->createLink('caselib', 'browse', "libID=$libID&browseType=bySearch&queryID=myQueryID");
        $this->caselib->buildSearchForm($libID, $libraries, $queryID, $actionURL);

        /* Append id for secend sort. */
        $sort = $this->loadModel('common')->appendOrder($orderBy);

        /* save session .*/
        $cases = $this->caselib->getLibCases($libID, $browseType, $queryID, $moduleID, $sort, $pager);
        $this->loadModel('common')->saveQueryCondition($this->dao->get(), 'testcase', true);

        $this->loadModel('datatable');
        $this->loadModel('tree');
        $showModule = !empty($this->config->datatable->caselibLibrary->showModule) ? $this->config->datatable->caselibLibrary->showModule : '';
        $this->view->modulePairs = $showModule ? $this->tree->getModulePairs($libID, 'caselib', $showModule) : array();

        $this->view->title      = $this->lang->caselib->common . $this->lang->colon . $libraries[$libID];
        $this->view->position[] = html::a($this->createLink('caselib', 'browse', "libID=$libID"), $libraries[$libID]);

        $this->view->libID         = $libID;
        $this->view->libName       = $libraries[$libID];
        $this->view->cases         = $cases;
        $this->view->orderBy       = $orderBy;
        $this->view->users         = $this->loadModel('user')->getPairs('noclosed|noletter');
        $this->view->modules       = $this->tree->getOptionMenu($libID, $viewType = 'caselib', $startModuleID = 0);
        $this->view->moduleTree    = $this->tree->getTreeMenu($libID, $viewType = 'caselib', $startModuleID = 0, array('treeModel', 'createCaseLibLink'));
        $this->view->pager         = $pager;
        $this->view->browseType    = $browseType;
        $this->view->moduleID      = $moduleID;
        $this->view->moduleName    = $moduleID ? $this->tree->getById($moduleID)->name : $this->lang->tree->all;
        $this->view->param         = $param;
        $this->view->setModule     = true;

        $this->display();
    }

    /**
     * Create case for library.
     *
     * @param  int    $libID
     * @param  int    $moduleID
     * @access public
     * @return void
     */
    public function createCase($libID, $moduleID = 0, $param = 0)
    {
        if(!empty($_POST))
        {
            $this->loadModel('testcase');
            $this->config->testcase->create->requiredFields = $this->config->caselib->createcase->requiredFields;
            $caseResult = $this->testcase->create($bugID = 0);
            if(!$caseResult or dao::isError()) die(js::error(dao::getError()));

            $caseID = $caseResult['id'];
            if($caseResult['status'] == 'exists')
            {
                echo js::alert(sprintf($this->lang->duplicate, $this->lang->testcase->common));
                die(js::locate($this->createLink('testcase', 'view', "caseID=$caseID"), 'parent'));
            }

            $this->loadModel('action')->create('case', $caseID, 'Opened');

            /* If link from no head then reload. */
            if(isonlybody()) die(js::reload('parent'));
            die(js::locate($this->createLink('caselib', 'browse', "libID={$libID}&browseType=byModule&param={$_POST['module']}"), 'parent'));
        }
        /* Set lib menu. */
        $libraries = $this->caselib->getLibraries();
        $libID     = $this->caselib->saveLibState($libID, $libraries);
        $this->caselib->setLibMenu($libraries, $libID);

        $type         = 'feature';
        $stage        = '';
        $pri          = 3;
        $caseTitle    = '';
        $precondition = '';
        $keywords     = '';
        $steps        = array();

        $this->loadModel('testcase');
        if($param)
        {
            $testcase     = $this->testcase->getById((int)$param);
            $type         = $testcase->type ? $testcase->type : 'feature';
            $stage        = $testcase->stage;
            $pri          = $testcase->pri;
            $storyID      = $testcase->story;
            $caseTitle    = $testcase->title;
            $precondition = $testcase->precondition;
            $keywords     = $testcase->keywords;
            $steps        = $testcase->steps;
        }

        if(count($steps) < $this->config->testcase->defaultSteps)
        {
            $paddingCount = $this->config->testcase->defaultSteps - count($steps);
            $step = new stdclass();
            $step->type   = 'item';
            $step->desc   = '';
            $step->expect = '';
            for($i = 1; $i <= $paddingCount; $i ++) $steps[] = $step;
        }

        $this->view->title      = $libraries[$libID] . $this->lang->colon . $this->lang->testcase->create;
        $this->view->position[] = html::a($this->createLink('caselib', 'browse', "libID=$libID"), $libraries[$libID]);
        $this->view->position[] = $this->lang->caselib->common;
        $this->view->position[] = $this->lang->testcase->create;

        foreach(explode(',', $this->config->caselib->customCreateFields) as $field) $customFields[$field] = $this->lang->testcase->$field;
        $this->view->showFields       = $this->config->caselib->custom->createFields;
        $this->view->customFields     = $customFields;
        $this->view->libraries        = $libraries;
        $this->view->libID            = $libID;
        $this->view->currentModuleID  = (int)$moduleID;
        $this->view->caseTitle        = $caseTitle;
        $this->view->type             = $type;
        $this->view->stage            = $stage;
        $this->view->pri              = $pri;
        $this->view->precondition     = $precondition;
        $this->view->keywords         = $keywords;
        $this->view->steps            = $steps;
        $this->view->moduleOptionMenu = $this->loadModel('tree')->getOptionMenu($libID, $viewType = 'caselib', $startModuleID = 0);
        $this->display();
    }

    /**
     * Batch create case.
     *
     * @param  int    $libID
     * @param  int    $moduleID
     * @access public
     * @return void
     */
    public function batchCreateCase($libID, $moduleID = 0)
    {
        $this->loadModel('testcase');
        if(!empty($_POST))
        {
            $caseID = $this->caselib->batchCreateCase($libID);
            if(dao::isError()) die(js::error(dao::getError()));
            if(isonlybody()) die(js::closeModal('parent.parent', 'this'));
            die(js::locate($this->createLink('caselib', 'browse', "libID=$libID&browseType=byModule&param=$moduleID"), 'parent'));
        }

        $libraries = $this->caselib->getLibraries();
        if(empty($libraries)) $this->locate(inlink('create'));

        /* Set lib menu. */
        $this->caselib->setLibMenu($libraries, $libID);

        $currentModuleID = (int)$moduleID;

        /* Set module option menu. */
        $moduleOptionMenu          = $this->loadModel('tree')->getOptionMenu($libID, $viewType = 'caselib', $startModuleID = 0);
        $moduleOptionMenu['ditto'] = $this->lang->testcase->ditto;

        $this->view->title            = $libraries[$libID] . $this->lang->colon . $this->lang->testcase->batchCreate;
        $this->view->position[]       = html::a($this->createLink('caselib', 'browse', "libID=$libID"), $libraries[$libID]);
        $this->view->position[]       = $this->lang->testcase->batchCreate;
        $this->view->libID            = $libID;
        $this->view->moduleOptionMenu = $moduleOptionMenu;
        $this->view->currentModuleID  = $currentModuleID;

        $this->display();
    }

    /**
     * View library
     *
     * @param  int    $libID
     * @access public
     * @return void
     */
    public function view($libID)
    {
        $lib = $this->caselib->getById($libID, true);

        /* Set lib menu. */
        $libraries = $this->caselib->getLibraries();
        $this->caselib->setLibMenu($libraries, $libID);

        $this->loadModel('testcase');
        $this->view->title      = $lib->name . $this->lang->colon . $this->lang->caselib->view;
        $this->view->position[] = html::a($this->createLink('caselib', 'browse', "libID=$libID"), $lib->name);
        $this->view->position[] = $this->lang->caselib->common;
        $this->view->position[] = $this->lang->caselib->view;

        $this->view->lib     = $lib;
        $this->view->users   = $this->loadModel('user')->getPairs('noclosed|noletter');
        $this->view->actions = $this->loadModel('action')->getList('caselib', $libID);
        $this->display();
    }

    /**
     * Ajax get drop menu.
     *
     * @param  int    $libID
     * @param  string $module
     * @param  string $method
     * @param  string $extra
     * @access public
     * @return void
     */
    public function ajaxGetDropMenu($libID, $module, $method, $extra = '')
    {
        $this->view->link      = $this->caselib->getLibLink($module, $method, $extra);
        $this->view->libID     = $libID;
        $this->view->module    = $module;
        $this->view->method    = $method;
        $this->view->extra     = $extra;

        $libraries = $this->caselib->getLibraries();

        $this->view->libraries       = $libraries;
        $this->view->librariesPinyin = common::convert2Pinyin($libraries);
        $this->display();
    }

    /**
     * The results page of search.
     *
     * @param  string  $keywords
     * @param  string  $module
     * @param  string  $method
     * @param  mix     $extra
     * @access public
     * @return void
     */
    public function ajaxGetMatchedItems($keywords, $module, $method, $extra)
    {
        $libraries = $this->dao->select('*')->from(TABLE_TESTSUITE)->where('deleted')->eq(0)->andWhere('name')->like("%$keywords%")->andWhere('type')->eq('library')->orderBy('`id` desc')->fetchAll();
        $this->view->link      = $this->caselib->getLibLink($module, $method, $extra);
        $this->view->libraries = $libraries;
        $this->view->keywords  = $keywords;
        $this->display();
    }

    /**
     * Export templet.
     *
     * @param  int    $libID
     * @access public
     * @return void
     */
    public function exportTemplet($libID)
    {
        $this->loadModel('testcase');
        if($_POST)
        {
            $fields['module']       = $this->lang->testcase->module;
            $fields['title']        = $this->lang->testcase->title;
            $fields['precondition'] = $this->lang->testcase->precondition;
            $fields['stepDesc']     = $this->lang->testcase->stepDesc;
            $fields['stepExpect']   = $this->lang->testcase->stepExpect;
            $fields['keywords']     = $this->lang->testcase->keywords;
            $fields['pri']          = $this->lang->testcase->pri;
            $fields['type']         = $this->lang->testcase->type;
            $fields['stage']        = $this->lang->testcase->stage;

            $fields[''] = '';
            $fields['typeValue']   = $this->lang->testcase->lblTypeValue;
            $fields['stageValue']  = $this->lang->testcase->lblStageValue;

            $modules = $this->loadModel('tree')->getOptionMenu($libID, $viewType = 'caselib', $startModuleID = 0);
            $rows    = array();
            $num     = (int)$this->post->num;
            for($i = 0; $i < $num; $i++)
            {
                foreach($modules as $moduleID => $module)
                {
                    $row = new stdclass();
                    $row->module     = $module . "(#$moduleID)";
                    $row->stepDesc   = "1. \n2. \n3.";
                    $row->stepExpect = "1. \n2. \n3.";

                    if(empty($rows))
                    {
                        $row->typeValue   = join("\n", $this->lang->testcase->typeList);
                        $row->stageValue  = join("\n", $this->lang->testcase->stageList);
                    }
                    $rows[] = $row;
                }
            }

            $this->post->set('fields', $fields);
            $this->post->set('kind', 'testcase');
            $this->post->set('rows', $rows);
            $this->post->set('extraNum', $num);
            $this->post->set('fileName', 'templet');
            $this->fetch('file', 'export2csv', $_POST);
        }

        $this->display();
    }

    /**
     * Import case csv file.
     *
     * @param  int    $libID
     * @access public
     * @return void
     */
    public function import($libID)
    {
        $this->loadModel('testcase');
        if($_FILES)
        {
            $file = $this->loadModel('file')->getUpload('file');
            $file = $file[0];

            $fileName = $this->file->savePath . $this->file->getSaveName($file['pathname']);
            move_uploaded_file($file['tmpname'], $fileName);

            $rows     = $this->file->parseCSV($fileName);
            $fields   = $this->testcase->getImportFields($productID);
            $fields   = array_flip($fields);
            $header   = array();
            foreach($rows[0] as $i => $rowValue)
            {
                if(empty($rowValue)) break;
                $header[$i] = $rowValue;
            }
            unset($rows[0]);

            $columnKey = array();
            foreach($header as $title)
            {
                if(!isset($fields[$title])) continue;
                $columnKey[] = $fields[$title];
            }

            if(count($columnKey) != count($header) or $this->post->encode != 'utf-8')
            {
                $fc     = file_get_contents($fileName);
                $encode = $this->post->encode != "utf-8" ? $this->post->encode : 'gbk';
                $fc     = helper::convertEncoding($fc, $encode, 'utf-8');
                file_put_contents($fileName, $fc);

                $rows      = $this->file->parseCSV($fileName);
                $columnKey = array();
                $header   = array();
                foreach($rows[0] as $i => $rowValue)
                {
                    if(empty($rowValue)) break;
                    $header[$i] = $rowValue;
                }
                unset($rows[0]);
                foreach($header as $title)
                {
                    if(!isset($fields[$title])) continue;
                    $columnKey[] = $fields[$title];
                }
                if(count($columnKey) != count($header)) die(js::alert($this->lang->testcase->errorEncode));
            }

            $this->session->set('importFile', $fileName);

            die(js::locate(inlink('showImport', "libID=$libID"), 'parent.parent'));
        }
        $this->display();
    }

    /**
     * Show import case.
     *
     * @param  int    $libID
     * @access public
     * @return void
     */
    public function showImport($libID)
    {
        $this->loadModel('testcase');
        if($_POST)
        {
            $this->caselib->createFromImport($libID);
            die(js::locate(inlink('browse', "libID=$libID"), 'parent'));
        }

        $libraries = $this->caselib->getLibraries();
        if(empty($libraries)) $this->locate(inlink('create'));

        $this->caselib->setLibMenu($libraries, $libID);

        $file       = $this->session->importFile;
        $caseLang   = $this->lang->testcase;
        $caseConfig = $this->config->testcase;
        $modules    = $this->loadModel('tree')->getOptionMenu($libID, $viewType = 'caselib', $startModuleID = 0);

        $fields = explode(',', $caseConfig->exportFields);
        foreach($fields as $key => $fieldName)
        {
            $fieldName = trim($fieldName);
            $fields[$fieldName] = isset($caseLang->$fieldName) ? $caseLang->$fieldName : $fieldName;
            unset($fields[$key]);
        }

        $fields = array_flip($fields);
        $rows   = $this->loadModel('file')->parseCSV($file);
        $header = array();
        foreach($rows[0] as $i => $rowValue)
        {
            if(empty($rowValue)) break;
            $header[$i] = $rowValue;
        }
        unset($rows[0]);

        foreach($header as $title)
        {
            if(!isset($fields[$title])) continue;
            $columnKey[] = $fields[$title];
        }

        $endField = end($fields);
        $caseData = array();
        $stepData = array();
        $stepVars = 0;
        foreach($rows as $row => $data)
        {
            $case = new stdclass();
            foreach($columnKey as $key => $field)
            {
                if(!isset($data[$key])) continue;
                $cellValue = $data[$key];
                if($field == 'module')
                {
                    $case->$field = 0;
                    if(strrpos($cellValue, '(#') !== false)
                    {
                        $id = trim(substr($cellValue, strrpos($cellValue,'(#') + 2), ')');
                        $case->$field = $id;
                    }
                }
                elseif(in_array($field, $caseConfig->export->listFields))
                {
                    if($field == 'stage')
                    {
                        $stages = explode("\n", $cellValue);
                        foreach($stages as $stage) $case->stage[] = array_search($stage, $caseLang->{$field . 'List'});
                        $case->stage = join(',', $case->stage);
                    }
                    else
                    {
                        $case->$field = array_search($cellValue, $caseLang->{$field . 'List'});
                    }
                }
                elseif($field != 'stepDesc' and $field != 'stepExpect')
                {
                    $case->$field = $cellValue;
                }
                else
                {
                    $steps = (array)$cellValue;
                    if(strpos($cellValue, "\n"))
                    {
                        $steps = explode("\n", $cellValue);
                    }
                    elseif(strpos($cellValue, "\r"))
                    {
                        $steps = explode("\r", $cellValue);
                    }

                    $stepKey  = str_replace('step', '', strtolower($field));
                    $caseStep = array();

                    foreach($steps as $step)
                    {
                        $step = trim($step);
                        if(empty($step)) continue;
                        if(preg_match('/^(([0-9]+)\.[0-9]+)([.、]{1})/U', $step, $out))
                        {
                            $num     = $out[1];
                            $parent  = $out[2];
                            $sign    = $out[3];
                            $signbit = $sign == '.' ? 1 : 3;
                            $step    = trim(substr($step, strlen($num) + $signbit));
                            if(!empty($step)) $caseStep[$num]['content'] = $step;
                            $caseStep[$num]['type']    = 'item';
                            $caseStep[$parent]['type'] = 'group';
                        }
                        elseif(preg_match('/^([0-9]+)([.、]{1})/U', $step, $out))
                        {
                            $num     = $out[1];
                            $sign    = $out[2];
                            $signbit = $sign == '.' ? 1 : 3;
                            $step    = trim(substr($step, strlen($num) + $signbit));
                            if(!empty($step)) $caseStep[$num]['content'] = $step;
                            $caseStep[$num]['type'] = 'step';
                        }
                        elseif(isset($num))
                        {
                            if(!isset($caseStep[$num]['content'])) $caseStep[$num]['content'] = '';
                            $caseStep[$num]['content'] .= "\n" . $step;
                        }
                        else
                        {
                            if($field == 'stepDesc')
                            {
                                $num = 1;
                                $caseStep[$num]['content'] = $step;
                                $caseStep[$num]['type']    = 'step';
                            }
                            if($field == 'stepExpect' and isset($stepData[$row]['desc']))
                            {
                                end($stepData[$row]['desc']);
                                $num = key($stepData[$row]['desc']);
                                $caseStep[$num]['content'] = $step;
                            }
                        }
                    }
                    unset($num);
                    unset($sign);
                    $stepVars += count($caseStep, COUNT_RECURSIVE) - count($caseStep);
                    $stepData[$row][$stepKey] = $caseStep;
                }
            }

            if(empty($case->title)) continue;
            $caseData[$row] = $case;
            unset($case);
        }

        if(empty($caseData))
        {
            unlink($this->session->importFile);
            unset($_SESSION['importFile']);
            echo js::alert($this->lang->error->noData);
            die(js::locate($this->createLink('caselib', 'browse', "libID=$libID")));
        }

        /* Judge whether the editedTasks is too large and set session. */
        $countInputVars  = count($caseData) * 9 + $stepVars;
        $showSuhosinInfo = common::judgeSuhosinSetting($countInputVars);
        if($showSuhosinInfo) $this->view->suhosinInfo = extension_loaded('suhosin') ? sprintf($this->lang->suhosinInfo, $countInputVars) : sprintf($this->lang->maxVarsInfo, $countInputVars);

        $this->view->title      = $this->lang->caselib->common . $this->lang->colon . $this->lang->testcase->showImport;
        $this->view->position[] = $this->lang->testcase->showImport;

        $this->view->modules   = $modules;
        $this->view->cases     = $this->dao->select('id,module,stage,status,pri,type')->from(TABLE_CASE)->where('lib')->eq($libID)->andWhere('deleted')->eq(0)->andWhere('product')->eq(0)->fetchAll('id');
        $this->view->caseData  = $caseData;
        $this->view->stepData  = $stepData;
        $this->view->libID     = $libID;
        $this->display();
    }
}
