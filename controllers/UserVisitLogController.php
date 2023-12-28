<?php

namespace vanterbit\modules\UserManagement\controllers;

use Yii;
use vanterbit\modules\UserManagement\models\UserVisitLog;
use vanterbit\modules\UserManagement\models\search\UserVisitLogSearch;
use vanterbit\components\AdminDefaultController;

/**
 * UserVisitLogController implements the CRUD actions for UserVisitLog model.
 */
class UserVisitLogController extends AdminDefaultController
{
	/**
	 * @var UserVisitLog
	 */
	public $modelClass = 'vanterbit\modules\UserManagement\models\UserVisitLog';

	/**
	 * @var UserVisitLogSearch
	 */
	public $modelSearchClass = 'vanterbit\modules\UserManagement\models\search\UserVisitLogSearch';

	public $enableOnlyActions = ['index', 'view', 'grid-page-size'];
}
