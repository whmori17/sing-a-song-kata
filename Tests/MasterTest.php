<?php

namespace Tests\MainTest;


use PHPUnit\Framework\TestCase;

class MasterTest extends TestCase
{
    public function testGoldenMaster() {
        $goldenMaster = require_once __DIR__ . './../src/song_original.php';
        $newOutput = require_once __DIR__ . './../src/main.php';

        $this->assertEquals($goldenMaster, $newOutput);
    }
}
