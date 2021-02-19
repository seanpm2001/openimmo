<?php

namespace Ujamii\OpenImmo\Tests\Generator\ApiGenerator;

class TypeWithRestrictionsTest extends FileGeneratingTest
{

    public function testGenerateApiClassDefault(): void
    {
        $generatedClass = $this->getGeneratedClassFromFile(
            'type_with_restrictions'
        );
        $properties     = [
            self::getPropertyConfig('mwstSatz', 'float', true, []),
            self::getPropertyConfig('anzahlEtagen', 'int', true, []),
            self::getPropertyConfig('telDurchw', 'string', true, []),
        ];
        $this->assertClassHasProperties($generatedClass, $properties);
    }
}