<?php
namespace App\Controller;

use App\Controller\AppController;
use \Cake\ORM\TableRegistry;
/**
 * Testlist Controller
 *
 * @property \App\Model\Table\TestlistTable $Testlist
 *
 * @method \App\Model\Entity\Testlist[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class TestlistController extends AppController
{

    public $paginate = [
        'limit' => 10,
    ];

    public function initialize()
    {
        parent::initialize();
        $this->loadComponent('Paginator');
    }
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
         $testlist = $this->Testlist
        ->find('all')
        ->select($this->Testlist);
//        ->select([
//            'questionID'=>'c.id',
//            'content'=>'c.content',
//            'choiceA'=>'c.choiceA',
//            'choiceB'=>'c.choiceB',
//            'choiceC'=>'c.choiceC',
//            'choiceD'=>'c.choiceD',
//            'type'=>'c.type',
//            'level'=>'c.level',
//        ])
//        ->join([
//            'b' => [
//                'table' => 'testquestion',
//                'type' => 'INNER',
//                'conditions' => 'Testlist.id = b.testID',
//            ],
//            'c' => [
//                'table' => 'questions',
//                'type' => 'INNER',
//                'conditions' => 'b.questionID = c.id',
//            ]
//        ]); 
        $testlist = $this->paginate($testlist);
        $this->set([
            'testlist' => $testlist,
            '_serialize' => ['testlist']
        ]);
//        $this->set(compact('testlist'));
    }

    /**
     * View method
     *
     * @param string|null $id Testlist id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $testlist = $this->Testlist->get($id, [
            'contain' => []
        ]);
        $testquestion = TableRegistry::get('testquestion');
        $testDeatail =  $testquestion ->find('all')
        ->select([
            'questionID'=>'c.id',
            'content'=>'c.content',
            'choiceA'=>'c.choiceA',
            'choiceB'=>'c.choiceB',
            'choiceC'=>'c.choiceC',
            'choiceD'=>'c.choiceD',
            'type'=>'c.type',
            'level'=>'c.level',
        ])
        ->join([
            'c' => [
                'table' => 'questions',
                'type' => 'INNER',
                'conditions' => 'Testquestion.questionID = c.id',
            ]
        ])
        ->where(['Testquestion.testId'=>$id]); 
        $questions = $this->paginate($testDeatail);
        $this->set([
            'testlist' => $testlist,
            'questions' => $questions,
            '_serialize' => ['testlist', 'questions']
        ]);
    }

    /**
     * Add method   
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $testlist = $this->Testlist->newEntity();
        if ($this->request->is('post')) {
            $testlist = $this->Testlist->patchEntity($testlist, $this->request->getData());
            if ($this->Testlist->save($testlist)) {
                $this->Flash->success(__('The testlist has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The testlist could not be saved. Please, try again.'));
        }
        $this->set([
            'testlist' => $testlist,
            '_serialize' => ['testlist']
        ]);
    }

    /**
     * Edit method
     *
     * @param string|null $id Testlist id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $testlist = $this->Testlist->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $testlist = $this->Testlist->patchEntity($testlist, $this->request->getData());
            if ($this->Testlist->save($testlist)) {
                $this->Flash->success(__('The testlist has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The testlist could not be saved. Please, try again.'));
        }
        $testquestion = TableRegistry::get('questions');
        $testDeatail =  $testquestion ->find('all')
        ->select([
            'questionID'=>'Questions.id',
            'content'=>'Questions.content',
            'choiceA'=>'Questions.choiceA',
            'choiceB'=>'Questions.choiceB',
            'choiceC'=>'Questions.choiceC',
            'choiceD'=>'Questions.choiceD',
            'type'=>'Questions.type',
            'level'=>'Questions.level',
        ]); 
        $questions = $this->paginate($testDeatail);
        $this->set([
            'testlist' => $testlist,
            'questions' => $questions,
            '_serialize' => ['testlist', 'questions']
        ]);
    }
    public function getQuestionDetail($id){
        $draw = $this->request->getQuery('draw');
//        $this->request->params['page'] = $draw;
        $testquestion = TableRegistry::get('testquestion');
        $testDeatail =  $testquestion ->find('all')
        ->select([
            'questionID'=>'c.id',
            'content'=>'c.content',
            'choiceA'=>'c.choiceA',
            'choiceB'=>'c.choiceB',
            'choiceC'=>'c.choiceC',
            'choiceD'=>'c.choiceD',
            'type'=>'c.type',
            'level'=>'c.level',
        ])
        ->join([
            'c' => [
                'table' => 'questions',
                'type' => 'INNER',
                'conditions' => 'Testquestion.questionID = c.id',
            ]
        ])
        ->where(['Testquestion.testId'=>$id]); 
        $recordsTotal = $testDeatail->count();
//        dd($testDeatail->toArray());
//        $questions = $this->paginate($testDeatail);
        $data = [];
        foreach ($testDeatail as $key => $value) {
             $data[$key] = array_values($value->toArray());
        }
        $this->set([
            'data' =>$data,
             "draw" => 1,
            'recordsTotal'=> $recordsTotal,
             'recordsFiltered' => $recordsTotal,
            '_serialize' => [ 'draw', 'recordsTotal', 'recordsFiltered','data']
        ]);
    }
    /**
     * Delete method
     *
     * @param string|null $id Testlist id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $testlist = $this->Testlist->get($id);
        if ($this->Testlist->delete($testlist)) {
            $this->Flash->success(__('The testlist has been deleted.'));
        } else {
            $this->Flash->error(__('The testlist could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
