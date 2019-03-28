<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Question Entity
 *
 * @property int $id
 * @property string $content
 * @property string $choiceA
 * @property string $choiceB
 * @property string $choiceC
 * @property string $choiceD
 * @property int $type
 * @property int $level
 * @property int $correctAnswer
 */
class Question extends Entity
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
        'content' => true,
        'choiceA' => true,
        'choiceB' => true,
        'choiceC' => true,
        'choiceD' => true,
        'type' => true,
        'level' => true,
        'correctAnswer' => true
    ];
}
