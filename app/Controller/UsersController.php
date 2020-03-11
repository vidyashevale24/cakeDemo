<?php
App::uses('AppController', 'Controller');
/**
 * Users Controller
 *
 * @property User $User
 * @property PaginatorComponent $Paginator
 */
class UsersController extends AppController {
	


/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator','Session');
	

/**
 * index method
 *
 * @return void
 */
	public function login()
	{
		$this->layout = 'login';
		//if already logged-in, redirect
        if($this->Session->check('Auth.User')){
            $this->redirect(array('action' => 'index'));      
        }

		if($this->request->is('post')){
			if($this->Auth->login()){
				$this->Flash->success(__('Welcome'));
				$this->redirect($this->Auth->redirectUrl());
			}else{
				//echo "in else";
				$this->Flash->error(__('Invalid email or password'));
			}
		}
	}

	public function logout()
	{
		$this->Auth->logout();
		$this->redirect('/users/login');
	}

	public function index() {
		$this->layout = 'dashboard';
		$this->User->recursive = 0;
		$this->set('users', $this->Paginator->paginate());

	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->User->exists($id)) {
			throw new NotFoundException(__('Invalid user'));
		}
		$options = array('conditions' => array('User.' . $this->User->primaryKey => $id));
		$this->set('user', $this->User->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		$this->layout = 'dashboard';
		$this->set('role', array('admin' => 'Admin', 'user' => 'User'));
		$this->set('status', array('active' => 'Active', 'Inactive' => 'Inactive'));
		if ($this->request->is('post')) {
			/*echo "<pre>";
			print_r($this->request->data);
			die;*/
			$this->User->create();
			
			//$post = $this->request->data;
			//$post['User']['createdDate'] = date('Y:m:d H:m:s');

			$this->request->data['User']['createdDate'] = date('Y:m:d H:m:s');
			$this->request->data['User']['password'] 	= AuthComponent::password($this->request->data['User']['password']);

			
			if ($this->User->save($this->request->data)) {

				$this->Flash->success(__('The user has been saved.'));
				//$this->Session->setFlash(__('The user has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The user could not be saved. Please, try again.'));
				//$this->Session->setFlash(__('The user could not be saved. Please, try again.'));
			}
		}
		$posts = $this->User->Post->find('list');
		$this->set(compact('posts'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->User->exists($id)) {
			throw new NotFoundException(__('Invalid user'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->User->save($this->request->data)) {
				$this->Flash->success(__('The user has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The user could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('User.' . $this->User->primaryKey => $id));
			$this->request->data = $this->User->find('first', $options);
		}
		$posts = $this->User->Post->find('list');
		$this->set(compact('posts'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		if (!$this->User->exists($id)) {
			throw new NotFoundException(__('Invalid user'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->User->delete($id)) {
			$this->Flash->success(__('The user has been deleted.'));
		} else {
			$this->Flash->error(__('The user could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
