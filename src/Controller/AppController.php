<?php
declare(strict_types=1);

namespace ValiAdmin\Controller;

use App\Controller\AppController as BaseController;
//use Cake\Core\Configure;

class AppController extends BaseController
{
    /**
     * Initialization hook method.
     *
     * Use this method to add common initialization code like loading components.
     *
     * e.g. `$this->loadComponent('FormProtection');`
     *
     * @return void
     */
	
	//$this->request->getUri()->getScheme()	
    public function initialize(): void
    {
        parent::initialize();
        $this->loadComponent('Flash');

		$this->viewBuilder()->setLayout('ValiAdmin.default');

/*
		//$this->lang = 'hu';
		$this->session = $this->getRequest()->getSession();
		
		$this->host = $this->request->getUri()->getHost();
		$this->shema = $this->request->getUri()->getScheme();
		
		$this->set('host', $this->host);
		$this->set('shema', $this->shema);
*/

	}
}
