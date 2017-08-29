<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * HotelImages Controller
 *
 * @property \App\Model\Table\HotelImagesTable $HotelImages
 *
 * @method \App\Model\Entity\HotelImage[] paginate($object = null, array $settings = [])
 */
class HotelImagesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Hotels']
        ];
        $hotelImages = $this->paginate($this->HotelImages);

        $this->set(compact('hotelImages'));
        $this->set('_serialize', ['hotelImages']);
    }

    /**
     * View method
     *
     * @param string|null $id Hotel Image id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $hotelImage = $this->HotelImages->get($id, [
            'contain' => ['Hotels']
        ]);

        $this->set('hotelImage', $hotelImage);
        $this->set('_serialize', ['hotelImage']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $hotelImage = $this->HotelImages->newEntity();
        if ($this->request->is('post')) {
            $hotelImage = $this->HotelImages->patchEntity($hotelImage, $this->request->getData());
            if ($this->HotelImages->save($hotelImage)) {
                $this->Flash->success(__('The hotel image has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The hotel image could not be saved. Please, try again.'));
        }
        $hotels = $this->HotelImages->Hotels->find('list', ['limit' => 200]);
        $this->set(compact('hotelImage', 'hotels'));
        $this->set('_serialize', ['hotelImage']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Hotel Image id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $hotelImage = $this->HotelImages->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $hotelImage = $this->HotelImages->patchEntity($hotelImage, $this->request->getData());
            if ($this->HotelImages->save($hotelImage)) {
                $this->Flash->success(__('The hotel image has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The hotel image could not be saved. Please, try again.'));
        }
        $hotels = $this->HotelImages->Hotels->find('list', ['limit' => 200]);
        $this->set(compact('hotelImage', 'hotels'));
        $this->set('_serialize', ['hotelImage']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Hotel Image id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $hotelImage = $this->HotelImages->get($id);
        if ($this->HotelImages->delete($hotelImage)) {
            $this->Flash->success(__('The hotel image has been deleted.'));
        } else {
            $this->Flash->error(__('The hotel image could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
