<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Questions Model
 *
 * @method \App\Model\Entity\Question get($primaryKey, $options = [])
 * @method \App\Model\Entity\Question newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Question[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Question|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Question|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Question patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Question[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Question findOrCreate($search, callable $callback = null, $options = [])
 */
class QuestionsTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('questions');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('id')
            ->allowEmptyString('id', 'create');

        $validator
            ->scalar('content')
            ->maxLength('content', 500)
            ->requirePresence('content', 'create')
            ->allowEmptyString('content', false);

        $validator
            ->scalar('choiceA')
            ->maxLength('choiceA', 200)
            ->requirePresence('choiceA', 'create')
            ->allowEmptyString('choiceA', false);

        $validator
            ->scalar('choiceB')
            ->maxLength('choiceB', 200)
            ->requirePresence('choiceB', 'create')
            ->allowEmptyString('choiceB', false);

        $validator
            ->scalar('choiceC')
            ->maxLength('choiceC', 200)
            ->requirePresence('choiceC', 'create')
            ->allowEmptyString('choiceC', false);

        $validator
            ->scalar('choiceD')
            ->maxLength('choiceD', 200)
            ->requirePresence('choiceD', 'create')
            ->allowEmptyString('choiceD', false);

        $validator
            ->integer('type')
            ->requirePresence('type', 'create')
            ->allowEmptyString('type', false);

        $validator
            ->integer('level')
            ->requirePresence('level', 'create')
            ->allowEmptyString('level', false);

        $validator
            ->integer('correctAnswer')
            ->requirePresence('correctAnswer', 'create')
            ->allowEmptyString('correctAnswer', false);

        return $validator;
    }
}
