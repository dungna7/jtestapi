<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Filequestion Model
 *
 * @method \App\Model\Entity\Filequestion get($primaryKey, $options = [])
 * @method \App\Model\Entity\Filequestion newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Filequestion[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Filequestion|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Filequestion|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Filequestion patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Filequestion[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Filequestion findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class FilequestionTable extends Table
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

        $this->setTable('filequestion');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');
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
            ->maxLength('name', 50)
            ->requirePresence('name', 'create')
            ->allowEmptyString('name', false);

        $validator
            ->integer('authorId')
            ->requirePresence('authorId', 'create')
            ->allowEmptyString('authorId', false);

        $validator
            ->integer('level')
            ->requirePresence('level', 'create')
            ->allowEmptyString('level', false);

        $validator
            ->integer('type')
            ->requirePresence('type', 'create')
            ->allowEmptyString('type', false);

        return $validator;
    }
}
