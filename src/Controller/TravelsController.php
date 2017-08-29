<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Travels Controller
 *
 * @property \App\Model\Table\TravelsTable $Travels
 *
 * @method \App\Model\Entity\Travel[] paginate($object = null, array $settings = [])
 */
class TravelsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Countries']
        ];
        $travels = $this->paginate($this->Travels);

        $this->set(compact('travels'));
        $this->set('_serialize', ['travels']);
    }

    /**
     * View method
     *
     * @param string|null $id Travel id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $travel = $this->Travels->get($id, [
            'contain' => ['Countries', 'Customers', 'Hotels']
        ]);

        $this->set('travel', $travel);
        $this->set('_serialize', ['travel']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $travel = $this->Travels->newEntity();
        if ($this->request->is('post')) {
            $travel = $this->Travels->patchEntity($travel, $this->request->getData());
            if ($this->Travels->save($travel)) {
                $this->Flash->success(__('The travel has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The travel could not be saved. Please, try again.'));
        }
        $countries = $this->Travels->Countries->find('list', ['limit' => 200]);
        $customers = $this->Travels->Customers->find('list', ['limit' => 200]);
        $hotels = $this->Travels->Hotels->find('list', ['limit' => 200]);
        $this->set(compact('travel', 'countries', 'customers', 'hotels'));
        $this->set('_serialize', ['travel']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Travel id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $travel = $this->Travels->get($id, [
            'contain' => ['Customers', 'Hotels']
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $travel = $this->Travels->patchEntity($travel, $this->request->getData());
            if ($this->Travels->save($travel)) {
                $this->Flash->success(__('The travel has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The travel could not be saved. Please, try again.'));
        }
        $countries = $this->Travels->Countries->find('list', ['limit' => 200]);
        $customers = $this->Travels->Customers->find('list', ['limit' => 200]);
        $hotels = $this->Travels->Hotels->find('list', ['limit' => 200]);
        $this->set(compact('travel', 'countries', 'customers', 'hotels'));
        $this->set('_serialize', ['travel']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Travel id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $travel = $this->Travels->get($id);
        if ($this->Travels->delete($travel)) {
            $this->Flash->success(__('The travel has been deleted.'));
        } else {
            $this->Flash->error(__('The travel could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
