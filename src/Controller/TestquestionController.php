<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Testquestion Controller
 *
 * @property \App\Model\Table\TestquestionTable $Testquestion
 *
 * @method \App\Model\Entity\Testquestion[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class TestquestionController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $testquestion = $this->paginate($this->Testquestion);

        $this->set(compact('testquestion'));
    }

    /**
     * View method
     *
     * @param string|null $id Testquestion id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $testquestion = $this->Testquestion->get($id, [
            'contain' => []
        ]);

        $this->set('testquestion', $testquestion);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $testquestion = $this->Testquestion->newEntity();
        if ($this->request->is('post')) {
            $testquestion = $this->Testquestion->patchEntity($testquestion, $this->request->getData());
            if ($this->Testquestion->save($testquestion)) {
                $this->Flash->success(__('The testquestion has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The testquestion could not be saved. Please, try again.'));
        }
        $this->set(compact('testquestion'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Testquestion id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $testquestion = $this->Testquestion->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $testquestion = $this->Testquestion->patchEntity($testquestion, $this->request->getData());
            if ($this->Testquestion->save($testquestion)) {
                $this->Flash->success(__('The testquestion has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The testquestion could not be saved. Please, try again.'));
        }
        $this->set(compact('testquestion'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Testquestion id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $testquestion = $this->Testquestion->get($id);
        if ($this->Testquestion->delete($testquestion)) {
            $this->Flash->success(__('The testquestion has been deleted.'));
        } else {
            $this->Flash->error(__('The testquestion could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
