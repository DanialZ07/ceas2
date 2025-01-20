<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * SemestersFixture
 */
class SemestersFixture extends TestFixture
{
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'id' => 1,
                'name' => 1,
                'status' => 1,
                'created' => '2025-01-19 17:41:21',
                'modified' => '2025-01-19 17:41:21',
            ],
        ];
        parent::init();
    }
}
