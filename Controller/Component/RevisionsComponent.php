<?php

/**
 * Revisions Component
 *
 * An Revisions hook component for demonstrating hook system.
 *
 * @category Component
 * @package  Revisions
 * @version  1.0
 * @author   David Wu <david@marksweep.com>
 * @license  http://www.opensource.org/licenses/mit-license.php The MIT License
 * @link     http://github.com/marksweep/revisions
 */
class RevisionsComponent extends Component {

	protected $_controller;

/**
 * Called after the Controller::beforeFilter() and before the controller action
 *
 * @param object $controller Controller with components to startup
 * @return void
 */
	public function startup(Controller $controller) {
		$this->_controller = $controller;

		$controller->set('RevisionsComponent', 'RevisionsComponent startup');

		// Check the controller to see if it's an admin page
		// Set the behavior flag based on params
		if ($controller->request->params['controller'] == 'nodes' && $controller->request->params['action'] == 'admin_edit' ||
			$controller->request->params['controller'] == 'revisions') {
			$controller->Node->Behaviors->Revisions->attach = true;
		}
	}

/**
 * Called after the Controller::beforeRender(), after the view class is loaded, and before the
 * Controller::render()
 *
 * @param object $controller Controller with components to beforeRender
 * @return void
 */
	public function beforeRender(Controller $controller) {
	}

/**
 * Called after Controller::render() and before the output is printed to the browser.
 *
 * @param object $controller Controller with components to shutdown
 * @return void
 */
	public function shutdown(Controller $controller) {
	}

}