<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Seeder;

class HomePageSettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $settings = [
            // SEO
            [
                'key' => 'homepage_seo_title',
                'value' => 'Rigor Equity - Integrated Solutions. Lasting Impact.',
                'group' => 'seo',
                'label' => 'Homepage SEO Title',
                'type' => 'text',
            ],
            [
                'key' => 'homepage_seo_keywords',
                'value' => 'real estate, investment, construction, development, rigor equity',
                'group' => 'seo',
                'label' => 'Homepage SEO Keywords',
                'type' => 'textarea',
            ],
            [
                'key' => 'homepage_seo_description',
                'value' => 'Vertically integrated operator delivering end-to-end real estate solutions and building institutional-quality assets in overlooked urban submarkets.',
                'group' => 'seo',
                'label' => 'Homepage SEO Description',
                'type' => 'textarea',
            ],

            // Homepage Hero
            [
                'key' => 'homepage_hero_title',
                'value' => 'Integrated Solutions.<br>Lasting Impact. Test',
                'group' => 'homepage_hero',
                'label' => 'Hero Title (Supports HTML)',
                'type' => 'text',
            ],
            [
                'key' => 'homepage_hero_description',
                'value' => 'Vertically integrated operator delivering end-to-end real estate solutions and building institutional-quality assets in overlooked urban submarkets.',
                'group' => 'homepage_hero',
                'label' => 'Hero Description',
                'type' => 'richtext',
            ],

            // Homepage Stats
            [
                'key' => 'homepage_stat_1_value',
                'value' => '$60M+',
                'group' => 'homepage_stats',
                'label' => 'Stat 1 Value',
                'type' => 'text',
            ],
            [
                'key' => 'homepage_stat_1_label',
                'value' => 'Project Pipeline Value',
                'group' => 'homepage_stats',
                'label' => 'Stat 1 Label',
                'type' => 'text',
            ],
            [
                'key' => 'homepage_stat_2_value',
                'value' => '4',
                'group' => 'homepage_stats',
                'label' => 'Stat 2 Value',
                'type' => 'text',
            ],
            [
                'key' => 'homepage_stat_2_label',
                'value' => 'Integrated Service Lines',
                'group' => 'homepage_stats',
                'label' => 'Stat 2 Label',
                'type' => 'text',
            ],
            [
                'key' => 'homepage_stat_3_value',
                'value' => '12+',
                'group' => 'homepage_stats',
                'label' => 'Stat 3 Value',
                'type' => 'text',
            ],
            [
                'key' => 'homepage_stat_3_label',
                'value' => 'Capital Partners',
                'group' => 'homepage_stats',
                'label' => 'Stat 3 Label',
                'type' => 'text',
            ],

            // Homepage Services
        ];

        foreach ($settings as $setting) {
            Setting::updateOrCreate(['key' => $setting['key']], $setting);
        }
    }
}
