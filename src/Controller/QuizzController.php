<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Quizz Controller
 *
 * @property \App\Model\Table\QuizzTable $Quizz
 */
class QuizzController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $quizz = $this->paginate($this->Quizz);

        $this->set(compact('quizz'));
        $this->set('_serialize', ['quizz']);
    }

    /**
     * View method
     *
     * @param string|null $id Quizz id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $quizz = $this->Quizz->get($id, [
            'contain' => []
        ]);

        $this->set('quizz', $quizz);
        $this->set('_serialize', ['quizz']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $quizz = $this->Quizz->newEntity();
        if ($this->request->is('post')) {
            $quizz = $this->Quizz->patchEntity($quizz, $this->request->data);
            if ($this->Quizz->save($quizz)) {
                $this->Flash->success(__('The quizz has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The quizz could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('quizz'));
        $this->set('_serialize', ['quizz']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Quizz id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $quizz = $this->Quizz->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $quizz = $this->Quizz->patchEntity($quizz, $this->request->data);
            if ($this->Quizz->save($quizz)) {
                $this->Flash->success(__('The quizz has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The quizz could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('quizz'));
        $this->set('_serialize', ['quizz']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Quizz id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $quizz = $this->Quizz->get($id);
        if ($this->Quizz->delete($quizz)) {
            $this->Flash->success(__('The quizz has been deleted.'));
        } else {
            $this->Flash->error(__('The quizz could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
