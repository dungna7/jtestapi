<?php

namespace App\Controller;

use App\Controller\AppController;
use Mike42\Escpos\PrintConnectors\FilePrintConnector;
use Mike42\Escpos\Printer;
use Mike42\Escpos\PrintConnectors\NetworkPrintConnector;

/**
 * Filequestion Controller
 *
 * @property \App\Model\Table\FilequestionTable $Filequestion
 *
 * @method \App\Model\Entity\Filequestion[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class FilequestionController extends AppController {
    /*
     * printer
     */

    public $printers = array();

    public function printerReceive() {

        $connector = new NetworkPrintConnector("192.168.77.17", 9100);
        $printer = new Printer($connector);
        try {
            $printer->textRaw(" 訪問していただきありがとうございます");
            $printer->cut();
            $printer->close();
        } finally {
            $printer->close();
        }

//        $connector = new FilePrintConnector("php://stdout");
//        $printer = new Printer($connector);
//        $printer->text("Hello World!\n");
//        $printer->cut();
//        $printer->close();
        return 0;
    }

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index() {
        $filequestion = $this->paginate($this->Filequestion);

        $this->set(compact('filequestion'));
    }

    /**
     * View method
     *
     * @param string|null $id Filequestion id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null) {
        $filequestion = $this->Filequestion->get($id, [
            'contain' => []
        ]);

        $this->set('filequestion', $filequestion);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add() {
        $filequestion = $this->Filequestion->newEntity();
        if ($this->request->is('post')) {
            $filequestion = $this->Filequestion->patchEntity($filequestion, $this->request->getData());
            if ($this->Filequestion->save($filequestion)) {
                $this->Flash->success(__('The filequestion has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The filequestion could not be saved. Please, try again.'));
        }
        $this->set(compact('filequestion'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Filequestion id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null) {
        $filequestion = $this->Filequestion->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $filequestion = $this->Filequestion->patchEntity($filequestion, $this->request->getData());
            if ($this->Filequestion->save($filequestion)) {
                $this->Flash->success(__('The filequestion has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The filequestion could not be saved. Please, try again.'));
        }
        $this->set(compact('filequestion'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Filequestion id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null) {
        $this->request->allowMethod(['post', 'delete']);
        $filequestion = $this->Filequestion->get($id);
        if ($this->Filequestion->delete($filequestion)) {
            $this->Flash->success(__('The filequestion has been deleted.'));
        } else {
            $this->Flash->error(__('The filequestion could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }

}
