<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * TravelsHotels Controller
 *
 * @property \App\Model\Table\TravelsHotelsTable $TravelsHotels
 *
 * @method \App\Model\Entity\TravelsHotel[] paginate($object = null, array $settings = [])
 */
class TravelsHotelsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Travels', 'Hotels']
        ];
        $travelsHotels = $this->paginate($this->TravelsHotels);

        $this->set(compact('travelsHotels'));
        $this->set('_serialize', ['travelsHotels']);
    }

    /**
     * View method
     *
     * @param string|null $id Travels Hotel id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $travelsHotel = $this->TravelsHotels->get($id, [
            'contain' => ['Travels', 'Hotels']
        ]);

        $this->set('travelsHotel', $travelsHotel);
        $this->set('_serialize', ['travelsHotel']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $travelsHotel = $this->TravelsHotels->newEntity();
        if ($this->request->is('post')) {
            $travelsHotel = $this->TravelsHotels->patchEntity($travelsHotel, $this->request->getData());
            if ($this->TravelsHotels->save($travelsHotel)) {
                $this->Flash->success(__('The travels hotel has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The travels hotel could not be saved. Please, try again.'));
        }
        $travels = $this->TravelsHotels->Travels->find('list', ['limit' => 200]);
        $hotels = $this->TravelsHotels->Hotels->find('list', ['limit' => 200]);
        $this->set(compact('travelsHotel', 'travels', 'hotels'));
        $this->set('_serialize', ['travelsHotel']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Travels Hotel id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $travelsHotel = $this->TravelsHotels->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $travelsHotel = $this->TravelsHotels->patchEntity($travelsHotel, $this->request->getData());
            if ($this->TravelsHotels->save($travelsHotel)) {
                $this->Flash->success(__('The travels hotel has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The travels hotel could not be saved. Please, try again.'));
        }
        $travels = $this->TravelsHotels->Travels->find('list', ['limit' => 200]);
        $hotels = $this->TravelsHotels->Hotels->find('list', ['limit' => 200]);
        $this->set(compact('travelsHotel', 'travels', 'hotels'));
        $this->set('_serialize', ['travelsHotel']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Travels Hotel id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $travelsHotel = $this->TravelsHotels->get($id);
        if ($this->TravelsHotels->delete($travelsHotel)) {
            $this->Flash->success(__('The travels hotel has been deleted.'));
        } else {
            $this->Flash->error(__('The travels hotel could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
