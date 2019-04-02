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
class TestlistController extends AppController {

    public $paginate = [
        'limit' => 10,
    ];

    public function initialize() {
        parent::initialize();
        $this->loadComponent('Paginator');
    }

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index() {
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
    public function view($id = null) {
        $testlist = $this->Testlist->get($id, [
            'contain' => []
        ]);
        $testquestion = TableRegistry::get('testquestion');
        $testDeatail = $testquestion->find('all')
                ->select([
                    'questionID' => 'c.id',
                    'content' => 'c.content',
                    'choiceA' => 'c.choiceA',
                    'choiceB' => 'c.choiceB',
                    'choiceC' => 'c.choiceC',
                    'choiceD' => 'c.choiceD',
                    'type' => 'c.type',
                    'level' => 'c.level',
                ])
                ->join([
                    'c' => [
                        'table' => 'questions',
                        'type' => 'INNER',
                        'conditions' => 'Testquestion.questionID = c.id',
                    ]
                ])
                ->where(['Testquestion.testId' => $id]);
        $questions = $this->paginate($testDeatail);
        $this->set([
            'testlist' => $testlist,
            'questions' => $questions,
            'testID' => $id,
            '_serialize' => ['testlist', 'questions', 'testID']
        ]);
    }

    /**
     * Add method   
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add() {
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
    public function edit($id = null) {
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
        $testDeatail = $testquestion->find('all')
                ->select([
            'questionID' => 'Questions.id',
            'content' => 'Questions.content',
            'choiceA' => 'Questions.choiceA',
            'choiceB' => 'Questions.choiceB',
            'choiceC' => 'Questions.choiceC',
            'choiceD' => 'Questions.choiceD',
            'type' => 'Questions.type',
            'level' => 'Questions.level',
        ]);
        $questions = $this->paginate($testDeatail);
        $this->set([
            'testlist' => $testlist,
            'questions' => $questions,
            "testID" => $id,
            'uploadData' => '',
            '_serialize' => ['testlist', 'questions', "testID", 'uploadData']
        ]);
    }

    public function getQuestionDetail($id = null) {
        $draw = $this->request->getQuery('draw');
//        $this->request->params['page'] = $draw;
        $testquestion = TableRegistry::get('testquestion');
        $testDeatail = $testquestion->find('all')
                ->select([
                    'questionID' => 'c.id',
                    'content' => 'c.content',
                    'choiceA' => 'c.choiceA',
                    'choiceB' => 'c.choiceB',
                    'choiceC' => 'c.choiceC',
                    'choiceD' => 'c.choiceD',
                    'type' => 'c.type',
                    'level' => 'c.level',
                ])
                ->join([
                    'c' => [
                        'table' => 'questions',
                        'type' => 'INNER',
                        'conditions' => 'testquestion.questionID = c.id',
                    ]
                ])
                ->where(['testquestion.testID' => $id]);
        $recordsTotal = $testDeatail->count();
//        dd($testDeatail->toArray());
//        $questions = $this->paginate($testDeatail);
//        $data = [];
//        foreach ($testDeatail as $key => $value) {
//             $data[$key] = array_values($value->toArray());
//        }
        $this->set([
            'data' => $testDeatail,
            "draw" => 1,
            'recordsTotal' => $recordsTotal,
            'recordsFiltered' => $recordsTotal,
            '_serialize' => ['draw', 'recordsTotal', 'recordsFiltered', 'data']
        ]);
    }

    public function getAllQuestionDetail($id = null) {
        $draw = $this->request->getQuery('draw');
//        $this->request->params['page'] = $draw;
        $testquestion = TableRegistry::get('questions');
        $testDeatail = $testquestion->find('all')
                ->select([
            'questionID' => 'Questions.id',
            'content' => 'Questions.content',
            'choiceA' => 'Questions.choiceA',
            'choiceB' => 'Questions.choiceB',
            'choiceC' => 'Questions.choiceC',
            'choiceD' => 'Questions.choiceD',
            'type' => 'Questions.type',
            'level' => 'Questions.level',
        ]);
        $recordsTotal = $testDeatail->count();
//        dd($testDeatail->toArray());
//        $questions = $this->paginate($testDeatail);
//        $data = [];
//        foreach ($testDeatail as $key => $value) {
//             $data[$key] = array_values($value->toArray());
//        }
        $testquestionRegisted = TableRegistry::get('testquestion');
        $testDeatailRegisted = $testquestionRegisted->find('all')
                ->select([
                    "regist = 1",
                    'questionID' => 'c.id',
                    'content' => 'c.content',
                    'choiceA' => 'c.choiceA',
                    'choiceB' => 'c.choiceB',
                    'choiceC' => 'c.choiceC',
                    'choiceD' => 'c.choiceD',
                    'type' => 'c.type',
                    'level' => 'c.level',
                ])
                ->join([
                    'c' => [
                        'table' => 'questions',
                        'type' => 'INNER',
                        'conditions' => 'testquestion.questionID = c.id',
                    ]
                ])
                ->where(['testquestion.testID' => $id]);
        $this->set([
            'data' => $testDeatail,
            "draw" => 1,
            'recordsTotal' => $recordsTotal,
            'recordsFiltered' => $recordsTotal,
            '_serialize' => ['draw', 'recordsTotal', 'recordsFiltered', 'data']
        ]);
    }

    /**
     * Delete method
     *
     * @param string|null $id Testlist id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null) {
        $this->request->allowMethod(['post', 'delete']);
        $testlist = $this->Testlist->get($id);
        if ($this->Testlist->delete($testlist)) {
            $this->Flash->success(__('The testlist has been deleted.'));
        } else {
            $this->Flash->error(__('The testlist could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }

    public function uploadTestQuestions($param = null) {
        $uploadData = '';
        $filequestion = TableRegistry::get('filequestion');
        $data = $this->request->getData();
        if ($this->request->is('post')) {
            if (!empty($data['file']['name'])) {
                $fileName = $data['file']['name'];
                $uploadPath = '../uploads/files/';
                $uploadFile = $uploadPath . $fileName;
                if (move_uploaded_file($data['file']['tmp_name'], $uploadFile)) {

                    $uploadData = $filequestion->newEntity();
                    $uploadData->name = $fileName;
                    $uploadData->path = $uploadPath;
                    $uploadData->created = date("Y-m-d H:i:s");
                    $uploadData->modified = date("Y-m-d H:i:s");
                    if ($filequestion->save($uploadData)) {
                        $this->Flash->success(__('File has been uploaded and inserted successfully.'));
                    } else {
                        $this->Flash->error(__('Unable to upload file, please try again.'));
                    }
                    $dataexe = new Spreadsheet_Excel_Reader($uploadFile, true);
                    $temp = $dataexe->dumptoarray();
                    $this->log($temp, 'debug');
                } else {
                    $this->Flash->error(__('Unable to upload file, please try again.'));
                }
            } else {
                $this->Flash->error(__('Please choose a file to upload.'));
            }
        }
        
        $this->set('uploadData', $uploadData);

        $files = $filequestion->find('all', ['order' => ['filequestion.created' => 'DESC']]);
        $filesRowNum = $files->count();
        $this->set('files', $files);
        $this->set('filesRowNum', $filesRowNum);
        return $this->redirect(['action' => 'edit', $param]);
    }

    public function import() {
            if ($_FILES['file']['csv']) {
                $filename = explode('.', $_FILES['file']['csv']);
                debug($filename);
                if ($filename[1] == 'csv') {

                    $handle = fopen($_FILES['file']['csv'], "r");
                    while ($data = fgetcsv($handle)) {
                        $item1 = $data[0];

                        $data = array(
                            'fieldName' => $item1
                        );
                        //  $item2 = $data[1];
                        //  $item3 = $data[2];
                        //  $item4 = $data[3];
                        $Applicant = $this->Applicants->newEntity($data);
                        $this->Applicants->save($Applicant);
                    }
                    fclose($handle);
                }
            }
        $this->render(FALSE);
    }

}
