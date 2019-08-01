<?php
/**
 * @file ATTENTION!!! The code below was carefully crafted by a mean machine.
 * Please consider to NOT put any emotional human-generated modifications as the splendid AI will throw them away with no mercy.
 */

namespace AsyncAPI;

use Swaggest\JsonSchema\Constraint\Properties;
use Swaggest\JsonSchema\Schema;
use Swaggest\JsonSchema\Structure\ClassStructure;


/**
 * Built from #/definitions/Reference
 */
class Reference extends ClassStructure
{
    /** @var string */
    public $ref;

    /**
     * @param Properties|static $properties
     * @param Schema $ownerSchema
     */
    public static function setUpProperties($properties, Schema $ownerSchema)
    {
        $properties->ref = Schema::string();
        $properties->ref->format = "uri";
        $ownerSchema->addPropertyMapping('$ref', self::names()->ref);
        $ownerSchema->type = 'object';
        $ownerSchema->required = array(
            0 => '$ref',
        );
        $ownerSchema->setFromRef('#/definitions/Reference');
    }
}