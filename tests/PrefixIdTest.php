<?php

declare(strict_types=1);

class PrefixIdTest extends \PHPUnit\Framework\TestCase
{
    public function test_prefix_id_is_generated()
    {
        $ids = [];
        for ($i = 0; $i < 100_000_000; $i++) {
            $id = prefix_id('test');

            $this->assertStringStartsWith('test_', $id);
            $this->assertNotContains($id, $ids);
            $this->assertStringMatchesFormat('%s', $id);
            $this->assertDoesNotMatchRegularExpression('/[+\/=]/', $id);
            $this->assertMatchesRegularExpression('/test_[^_]/', $id);

            $ids[] = $id;
        }
    }
}
