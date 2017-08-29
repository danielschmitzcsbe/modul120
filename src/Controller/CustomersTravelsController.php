<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * CustomersTravels Controller
 *
 * @property \App\Model\Table\CustomersTravelsTable $CustomersTravels
 *
 * @method \App\Model\Entity\CustomersTravel[] paginate($object = null, array $settings = [])
 */
class CustomersTravelsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Customers', 'Travels']
        ];
        $customersTravels = $this->paginate($this->CustomersTravels);

        $this->set(compact('customersTravels'));
        $this->set('_serialize', ['customersTravels']);
    }

    /**
     * View method
     *
     * @param string|null $id Customers Travel id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $customersTravel = $this->CustomersTravels->get($id, [
            'contain' => ['Customers', 'Travels']
        ]);

        $this->set('customersTravel', $customersTravel);
        $this->set('_serialize', ['customersTravel']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $customersTravel = $this->CustomersTravels->newEntity();
        if ($this->request->is('post')) {
            $customersTravel = $this->CustomersTravels->patchEntity($customersTravel, $this->request->getData());
            if ($this->CustomersTravels->save($customersTravel)) {
                $this->Flash->success(__('The customers travel has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The customers travel could not be saved. Please, try again.'));
        }
        $customers = $this->CustomersTravels->Customers->find('list', ['limit' => 200]);
        $travels = $this->CustomersTravels->Travels->find('list', ['limit' => 200]);
        $this->set(compact('customersTravel', 'customers', 'travels'));
        $this->set('_serialize', ['customersTravel']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Customers Travel id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $customersTravel = $this->CustomersTravels->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $customersTravel = $this->CustomersTravels->patchEntity($customersTravel, $this->request->getData());
            if ($this->CustomersTravels->save($customersTravel)) {
                $this->Flash->success(__('The customers travel has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The customers travel could not be saved. Please, try again.'));
        }
        $customers = $this->CustomersTravels->Customers->find('list', ['limit' => 200]);
        $travels = $this->CustomersTravels->Travels->find('list', ['limit' => 200]);
        $this->set(compact('customersTravel', 'customers', 'travels'));
        $this->set('_serialize', ['customersTravel']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Customers Travel id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $customersTravel = $this->CustomersTravels->get($id);
        if ($this->CustomersTravels->delete($customersTravel)) {
            $this->Flash->success(__('The customers travel has been deleted.'));
        } else {
            $this->Flash->error(__('The customers travel could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
