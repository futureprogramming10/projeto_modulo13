<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Prod Model
 *
 * @method \App\Model\Entity\Prod get($primaryKey, $options = [])
 * @method \App\Model\Entity\Prod newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Prod[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Prod|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Prod saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Prod patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Prod[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Prod findOrCreate($search, callable $callback = null, $options = [])
 */
class ProdTable extends Table
{
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('prod');
        $this->setDisplayField('id_prod');
        $this->setPrimaryKey('id_prod');

        $this->belongsTo('Users', [
            'foreignKey' => 'id_users',
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator): Validator
    {
        $validator
            ->integer('id_prod')
            ->allowEmptyString('id_prod', null, 'create');

        $validator
            ->integer('id_categorias')
            ->allowEmptyString('id_categorias');

        $validator
            ->integer('id_users')
            ->allowEmptyString('id_users');

        return $validator;
    }
}
