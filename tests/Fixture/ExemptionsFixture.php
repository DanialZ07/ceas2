<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ExemptionsFixture
 */
class ExemptionsFixture extends TestFixture
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
                'user_id' => 1,
                'faculty_id' => 1,
                'program_id' => 1,
                'semester_id' => 1,
                'campus_id' => 1,
                'matrix' => 1,
                'ic_number' => 1,
                'address' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
                'phone' => 1,
                'transcript' => 'Lorem ipsum dolor sit amet',
                'transcript_dir' => 'Lorem ipsum dolor sit amet',
                'kod_kursus_dipohon_1' => 'Lorem ip',
                'nama_kursus_dipohon_1' => 'Lorem ipsum dolor sit amet',
                'kod_terdahulu_1' => 'Lorem ip',
                'nama_kursus_terdahulu_1' => 'Lorem ipsum dolor sit amet',
                'kod_kursus_dipohon_2' => 'Lorem ip',
                'nama_kursus_dipohon_2' => 'Lorem ipsum dolor sit amet',
                'kod_terdahulu_2' => 'Lorem ip',
                'nama_kursus_terdahulu_2' => 'Lorem ipsum dolor sit amet',
                'kod_kursus_dipohon_3' => 'Lorem ip',
                'nama_kursus_dipohon_3' => 'Lorem ipsum dolor sit amet',
                'kod_terdahulu_3' => 'Lorem ip',
                'nama_kursus_terdahulu_3' => 'Lorem ipsum dolor sit amet',
                'kod_kursus_dipohon_4' => 'Lorem ip',
                'nama_kursus_dipohon_4' => 'Lorem ipsum dolor sit amet',
                'kod_terdahulu_4' => 'Lorem ip',
                'nama_kursus_terdahulu_4' => 'Lorem ipsum dolor sit amet',
                'kod_kursus_dipohon_5' => 'Lorem ip',
                'nama_kursus_dipohon_5' => 'Lorem ipsum dolor sit amet',
                'kod_terdahulu_5' => 'Lorem ip',
                'nama_kursus_terdahulu_5' => 'Lorem ipsum dolor sit amet',
                'kod_kursus_dipohon_6' => 'Lorem ip',
                'nama_kursus_dipohon_6' => 'Lorem ipsum dolor sit amet',
                'kod_terdahulu_6' => 'Lorem ip',
                'nama_kursus_terdahulu_6' => 'Lorem ipsum dolor sit amet',
                'status' => 1,
                'created' => '2025-01-19 23:10:39',
                'modified' => '2025-01-19 23:10:39',
            ],
        ];
        parent::init();
    }
}
