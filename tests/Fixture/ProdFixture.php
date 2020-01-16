<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ProdFixture
 */
class ProdFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'prod';
    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id_prod' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'id_categorias' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'id_users' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'id_categorias' => ['type' => 'index', 'columns' => ['id_categorias'], 'length' => []],
            'id_users' => ['type' => 'index', 'columns' => ['id_users'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id_prod'], 'length' => []],
            'user_categoria_ibfk_1' => ['type' => 'foreign', 'columns' => ['id_categorias'], 'references' => ['categorias', 'id_categorias'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'user_categoria_ibfk_2' => ['type' => 'foreign', 'columns' => ['id_users'], 'references' => ['users', 'id_users'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
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
                'id_categorias' => 1,
                'id_users' => 1,
            ],
        ];
        parent::init();
    }
}
