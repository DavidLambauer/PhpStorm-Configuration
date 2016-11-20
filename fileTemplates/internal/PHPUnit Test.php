<?php
/**
 * @copyright Copyright (c) 1999-2016 netz98 new media GmbH (http://www.netz98.de)
 *
 * @see PROJECT_LICENSE.txt
 */
 
namespace ${NAMESPACE};

use N98\TestFramework\AbstractTestCase;
use ${TESTED_NAMESPACE}\\${TESTED_NAME};

/**
 * class ${NAME}
 */
class ${NAME} extends AbstractTestCase
{
    /**
     * System under Test
     * @var ${TESTED_NAME} $sut
     */ 
    private $sut;
    
    /**
     * Setup Unit Test Mocks
     */
    public function setUp()
    {
        parent::setUp();
        
        $this->sut = $this->objectManager->getObject(${TESTED_NAME}::class);
    }
    
    /**
     * @test
     */
    public function itShould()
    {
        $actual = $this->sut;
        $expected = '';
        
        self::assertEquals($expected, $actual);
    }
    
    /**
     * @test
     */
    public function isClassAvailable()
    {
        $actual = $this->sut;
        $expected = ${TESTED_NAME}::class;
        
        self::assertInstanceOf($expected, $actual);
    }
}
