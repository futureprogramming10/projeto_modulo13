<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * CategoriasUsersFixture
 */
class CategoriasUsersFixture extends TestFixture
{
    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id_prod' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'categorias_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'users_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'id_categorias' => ['type' => 'index', 'columns' => ['categorias_id'], 'length' => []],
            'id_users' => ['type' => 'index', 'columns' => ['users_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id_prod'], 'length' => []],
            'user_categoria_ibfk_1' => ['type' => 'foreign', 'columns' => ['categorias_id'], 'references' => ['categorias', 'id_categorias'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'user_categoria_ibfk_2' => ['type' => 'foreign', 'columns' => ['users_id'], 'references' => ['users', 'id_users'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
        ],
        '_options' => [
            'engine' => 'InnoDB',
            'collation' => 'utf8mb4_general_ci'
        ],
    ];
    // @codingStandardsIgnoreEnd
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'id_prod' => 1,
                'categorias_id' => 1,
                'users_id' => 1,
            ],
        ];
        parent::init();
    }
}
