<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * CategoriasUsers Model
 *
 * @property \App\Model\Table\CategoriasTable&\Cake\ORM\Association\BelongsTo $Categorias
 * @property \App\Model\Table\UsersTable&\Cake\ORM\Association\BelongsTo $Users
 *
 * @method \App\Model\Entity\CategoriasUser get($primaryKey, $options = [])
 * @method \App\Model\Entity\CategoriasUser newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\CategoriasUser[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\CategoriasUser|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\CategoriasUser saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\CategoriasUser patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\CategoriasUser[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\CategoriasUser findOrCreate($search, callable $callback = null, $options = [])
 */
class CategoriasUsersTable extends Table
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

        $this->setTable('categorias_users');
        $this->setDisplayField('id_prod');
        $this->setPrimaryKey('id_prod');

        $this->belongsTo('Categorias', [
            'foreignKey' => 'categorias_id',
        ]);
        $this->belongsTo('Users', [
            'foreignKey' => 'users_id',
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

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules): RulesChecker
    {
        $rules->add($rules->existsIn(['categorias_id'], 'Categorias'));
        $rules->add($rules->existsIn(['users_id'], 'Users'));

        return $rules;
    }
}
