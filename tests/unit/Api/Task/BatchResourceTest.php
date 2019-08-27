<?php
namespace ShoppingFeed\Sdk\Test\Api\Task;

use ShoppingFeed\Sdk\Api\Task\BatchResource;
use ShoppingFeed\Sdk\Test\Api\AbstractResourceTest;

class BatchResourceTest extends AbstractResourceTest
{
    public function setUp()
    {
        $this->props = [
            'id' => '123abc',
        ];
    }

    public function testGetproperty()
    {
        $this->initHalResourceProperties();

        $instance = new BatchResource($this->halResource);

        $this->assertEquals($this->props['id'], $instance->getId());
    }
}
