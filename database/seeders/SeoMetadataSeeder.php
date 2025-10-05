<?php

namespace Database\Seeders;

use App\Models\SeoMetadata;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SeoMetadataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $pages = ['home'];

        foreach ($pages as $page) {
            SeoMetadata::updateOrCreate(
                ['page' => $page],
                SeoMetadata::getDefaultValues($page)
            );
        }
    }
}
