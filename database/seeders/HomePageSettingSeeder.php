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
                'value' => 'Integrated Solutions.<br>Lasting Impact.',
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
            [
                'key' => 'homepage_services_title',
                'value' => 'Vertically Integrated to Deliver Value',
                'group' => 'homepage_services',
                'label' => 'Services Section Title',
                'type' => 'text',
            ],
            [
                'key' => 'homepage_service_1_title',
                'value' => 'Investment Management',
                'group' => 'homepage_services',
                'label' => 'Service 1 Title (Investment Management)',
                'type' => 'text',
            ],
            [
                'key' => 'homepage_service_1_description',
                'value' => 'We manage real estate investments in Chicago to increase value through smart planning, careful oversight, and long-term growth strategies.',
                'group' => 'homepage_services',
                'label' => 'Service 1 Description',
                'type' => 'textarea',
            ],
            [
                'key' => 'homepage_service_1_button_text',
                'value' => 'Learn more',
                'group' => 'homepage_services',
                'label' => 'Service 1 Button Text',
                'type' => 'text',
            ],
            [
                'key' => 'homepage_service_2_title',
                'value' => 'Construction',
                'group' => 'homepage_services',
                'label' => 'Service 2 Title (Construction)',
                'type' => 'text',
            ],
            [
                'key' => 'homepage_service_2_description',
                'value' => 'We plan and develop residential projects from start to finish, turning ideas into well-built communities.',
                'group' => 'homepage_services',
                'label' => 'Service 2 Description',
                'type' => 'textarea',
            ],
            [
                'key' => 'homepage_service_2_button_text',
                'value' => 'Explore construction',
                'group' => 'homepage_services',
                'label' => 'Service 2 Button Text',
                'type' => 'text',
            ],
            [
                'key' => 'homepage_service_3_title',
                'value' => 'Development',
                'group' => 'homepage_services',
                'label' => 'Service 3 Title (Development)',
                'type' => 'text',
            ],
            [
                'key' => 'homepage_service_3_description',
                'value' => 'Identifying and executing high-impact development opportunities in emerging urban submarkets with institutional quality execution.',
                'group' => 'homepage_services',
                'label' => 'Service 3 Description',
                'type' => 'textarea',
            ],
            [
                'key' => 'homepage_service_3_button_text',
                'value' => 'View projects',
                'group' => 'homepage_services',
                'label' => 'Service 3 Button Text',
                'type' => 'text',
            ],
            [
                'key' => 'homepage_service_4_title',
                'value' => 'Public Sector',
                'group' => 'homepage_services',
                'label' => 'Service 4 Title (Public Sector)',
                'type' => 'text',
            ],
            [
                'key' => 'homepage_service_4_description',
                'value' => 'Partnering with municipalities and public entities to deliver community-focused real estate solutions and economic development.',
                'group' => 'homepage_services',
                'label' => 'Service 4 Description',
                'type' => 'textarea',
            ],
            [
                'key' => 'homepage_service_4_button_text',
                'value' => 'Our approach',
                'group' => 'homepage_services',
                'label' => 'Service 4 Button Text',
                'type' => 'text',
            ],
        ];

        foreach ($settings as $setting) {
            Setting::updateOrCreate(['key' => $setting['key']], $setting);
        }
    }
}
