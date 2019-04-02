<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Filequestion Entity
 *
 * @property int $id
 * @property string $name
 * @property int $authorId
 * @property int $level
 * @property \Cake\I18n\FrozenDate $created
 * @property int $type
 */
class Filequestion extends Entity
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
        'name' => true,
        'authorId' => true,
        'level' => true,
        'created' => true,
        'type' => true
    ];
}
