<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * CategoriasUser Entity
 *
 * @property int $id_prod
 * @property int|null $categorias_id
 * @property int|null $users_id
 *
 * @property \App\Model\Entity\Categoria $categoria
 * @property \App\Model\Entity\User $user
 */
class CategoriasUser extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'categorias_id' => true,
        'users_id' => true,
        'categoria' => true,
        'user' => true,
    ];
}
