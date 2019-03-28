<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Testlist Model
 *
 * @method \App\Model\Entity\Testlist get($primaryKey, $options = [])
 * @method \App\Model\Entity\Testlist newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Testlist[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Testlist|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Testlist|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Testlist patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Testlist[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Testlist findOrCreate($search, callable $callback = null, $options = [])
 */
class TestlistTable extends Table
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

        $this->setTable('testlist');
        $this->setDisplayField('name');
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
            ->scalar('name')
            ->maxLength('name', 100)
            ->requirePresence('name', 'create')
            ->allowEmptyString('name', false);

        $validator
            ->scalar('author')
            ->maxLength('author', 100)
            ->requirePresence('author', 'create')
            ->allowEmptyString('author', false);

        $validator
            ->integer('level')
            ->requirePresence('level', 'create')
            ->allowEmptyString('level', false);

        return $validator;
    }
}
