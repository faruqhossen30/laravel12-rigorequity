<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Seeder;

class DevelopmentPageSettingSeeder extends Seeder
{
    public function run(): void
    {
        $settings = [
            // SEO Settings
            [
                'key' => 'development_seo_title',
                'value' => 'Development - Rigor Equity',
                'group' => 'development_seo',
                'type' => 'text',
                'label' => 'SEO Title',
            ],
            [
                'key' => 'development_seo_description',
                'value' => 'Transforming land and opportunity into thriving communities and high-performing assets through strategic development expertise.',
                'group' => 'development_seo',
                'type' => 'textarea',
                'label' => 'SEO Description',
            ],

            // Hero Section
            [
                'key' => 'development_hero_title',
                'value' => 'Development',
                'group' => 'development_hero',
                'type' => 'text',
                'label' => 'Hero Title',
            ],
            [
                'key' => 'development_hero_description',
                'value' => 'Transforming land and opportunity into thriving communities and high-performing assets through strategic development expertise.',
                'group' => 'development_hero',
                'type' => 'textarea',
                'label' => 'Hero Description',
            ],
            [
                'key' => 'development_hero_bg_image',
                'value' => 'https://images.unsplash.com/photo-1449157291145-7efd050a4d0e?q=80&w=2070&auto=format&fit=crop',
                'group' => 'development_hero',
                'type' => 'image',
                'label' => 'Hero Background Image',
            ],
            [
                'key' => 'development_hero_button_text',
                'value' => 'Discuss a Project',
                'group' => 'development_hero',
                'type' => 'text',
                'label' => 'Hero Button Text',
            ],
            [
                'key' => 'development_hero_button_url',
                'value' => '/contact',
                'group' => 'development_hero',
                'type' => 'text',
                'label' => 'Hero Button URL',
            ],

            // Stats Bar
            [
                'key' => 'development_stat_1_value',
                'value' => '200K SF',
                'group' => 'development_stats',
                'type' => 'text',
                'label' => 'Stat 1 Value',
            ],
            [
                'key' => 'development_stat_1_label',
                'value' => 'Under Development',
                'group' => 'development_stats',
                'type' => 'text',
                'label' => 'Stat 1 Label',
            ],
            [
                'key' => 'development_stat_2_value',
                'value' => '$60M',
                'group' => 'development_stats',
                'type' => 'text',
                'label' => 'Stat 2 Value',
            ],
            [
                'key' => 'development_stat_2_label',
                'value' => 'Development Pipeline',
                'group' => 'development_stats',
                'type' => 'text',
                'label' => 'Stat 2 Label',
            ],
            [
                'key' => 'development_stat_3_value',
                'value' => '20+',
                'group' => 'development_stats',
                'type' => 'text',
                'label' => 'Stat 3 Value',
            ],
            [
                'key' => 'development_stat_3_label',
                'value' => 'Projects Completed',
                'group' => 'development_stats',
                'type' => 'text',
                'label' => 'Stat 3 Label',
            ],

            // Strategic Approach Section
            [
                'key' => 'development_approach_title',
                'value' => 'Strategic Development Approach',
                'group' => 'development_approach',
                'type' => 'text',
                'label' => 'Approach Title',
            ],
            [
                'key' => 'development_approach_desc_1',
                'value' => 'At Rigor Equity, we take a disciplined, data-driven approach to real estate development. We identify emerging trends early, conduct rigorous due diligence, and execute with precision to deliver exceptional returns.',
                'group' => 'development_approach',
                'type' => 'textarea',
                'label' => 'Approach Description 1',
            ],
            [
                'key' => 'development_approach_desc_2',
                'value' => 'Our development team combines deep local market knowledge with institutional-grade processes to de-risk projects and create lasting value for our investors and communities.',
                'group' => 'development_approach',
                'type' => 'textarea',
                'label' => 'Approach Description 2',
            ],
            [
                'key' => 'development_approach_image',
                'value' => 'https://images.unsplash.com/photo-1503387762-592deb58ef4e?q=80&w=2089&auto=format&fit=crop',
                'group' => 'development_approach',
                'type' => 'image',
                'label' => 'Approach Image',
            ],
            // Approach Item 1
            [
                'key' => 'development_app_item_1_title',
                'value' => 'Sustainable Development',
                'group' => 'development_approach_items',
                'type' => 'text',
                'label' => 'Approach Item 1 Title',
            ],
            [
                'key' => 'development_app_item_1_text',
                'value' => 'ESG-focused approach with LEED and sustainability certifications.',
                'group' => 'development_approach_items',
                'type' => 'textarea',
                'label' => 'Approach Item 1 Text',
            ],
            // Approach Item 2
            [
                'key' => 'development_app_item_2_title',
                'value' => 'Speed to Market',
                'group' => 'development_approach_items',
                'type' => 'text',
                'label' => 'Approach Item 2 Title',
            ],
            [
                'key' => 'development_app_item_2_text',
                'value' => 'Streamlined processes and strong partner relationships accelerate development timelines.',
                'group' => 'development_approach_items',
                'type' => 'textarea',
                'label' => 'Approach Item 2 Text',
            ],

            // Services Section
            [
                'key' => 'development_services_title',
                'value' => 'Development Services',
                'group' => 'development_services',
                'type' => 'text',
                'label' => 'Services Section Title',
            ],
            // Service 1
            [
                'key' => 'development_serv_1_title',
                'value' => 'Site Selection & Analysis',
                'group' => 'development_services_list',
                'type' => 'text',
                'label' => 'Service 1 Title',
            ],
            [
                'key' => 'development_serv_1_text',
                'value' => 'Comprehensive market research and feasibility studies to identify optimal development opportunities.',
                'group' => 'development_services_list',
                'type' => 'textarea',
                'label' => 'Service 1 Text',
            ],
            // Service 2
            [
                'key' => 'development_serv_2_title',
                'value' => 'Entitlements & Approvals',
                'group' => 'development_services_list',
                'type' => 'text',
                'label' => 'Service 2 Title',
            ],
            [
                'key' => 'development_serv_2_text',
                'value' => 'Expert navigation of zoning, permitting, and regulatory processes to accelerate project timelines.',
                'group' => 'development_services_list',
                'type' => 'textarea',
                'label' => 'Service 2 Text',
            ],
            // Service 3
            [
                'key' => 'development_serv_3_title',
                'value' => 'Financial Structuring',
                'group' => 'development_services_list',
                'type' => 'text',
                'label' => 'Service 3 Title',
            ],
            [
                'key' => 'development_serv_3_text',
                'value' => 'Creative capital solutions including equity partnerships, debt financing, and tax incentive strategies.',
                'group' => 'development_services_list',
                'type' => 'textarea',
                'label' => 'Service 3 Text',
            ],
            // Service 4
            [
                'key' => 'development_serv_4_title',
                'value' => 'Master Planning',
                'group' => 'development_services_list',
                'type' => 'text',
                'label' => 'Service 4 Title',
            ],
            [
                'key' => 'development_serv_4_text',
                'value' => 'Strategic land use planning and design coordination to maximize value and community impact.',
                'group' => 'development_services_list',
                'type' => 'textarea',
                'label' => 'Service 4 Text',
            ],

            // Process Section
            [
                'key' => 'development_process_title',
                'value' => 'Our Development Process',
                'group' => 'development_process',
                'type' => 'text',
                'label' => 'Process Section Title',
            ],
            [
                'key' => 'development_process_description',
                'value' => 'A proven framework for successful project delivery from concept to completion.',
                'group' => 'development_process',
                'type' => 'textarea',
                'label' => 'Process Section Description',
            ],
            // Step 1
            [
                'key' => 'development_step_1_title',
                'value' => 'Acquisition',
                'group' => 'development_process_steps',
                'type' => 'text',
                'label' => 'Step 1 Title',
            ],
            [
                'key' => 'development_step_1_text',
                'value' => 'Identify and secure high-potential sites through market analysis and relationships.',
                'group' => 'development_process_steps',
                'type' => 'textarea',
                'label' => 'Step 1 Text',
            ],
            // Step 2
            [
                'key' => 'development_step_2_title',
                'value' => 'Entitlements',
                'group' => 'development_process_steps',
                'type' => 'text',
                'label' => 'Step 2 Title',
            ],
            [
                'key' => 'development_step_2_text',
                'value' => 'Secure necessary approvals, zoning, and permits for optimal project design.',
                'group' => 'development_process_steps',
                'type' => 'textarea',
                'label' => 'Step 2 Text',
            ],
            // Step 3
            [
                'key' => 'development_step_3_title',
                'value' => 'Design',
                'group' => 'development_process_steps',
                'type' => 'text',
                'label' => 'Step 3 Title',
            ],
            [
                'key' => 'development_step_3_text',
                'value' => 'Collaborate with architects and engineers to finalize project specifications.',
                'group' => 'development_process_steps',
                'type' => 'textarea',
                'label' => 'Step 3 Text',
            ],
            // Step 4
            [
                'key' => 'development_step_4_title',
                'value' => 'Construction',
                'group' => 'development_process_steps',
                'type' => 'text',
                'label' => 'Step 4 Title',
            ],
            [
                'key' => 'development_step_4_text',
                'value' => 'Execute build with rigorous oversight and quality control standards.',
                'group' => 'development_process_steps',
                'type' => 'textarea',
                'label' => 'Step 4 Text',
            ],
            // Step 5
            [
                'key' => 'development_step_5_title',
                'value' => 'Lease-Up',
                'group' => 'development_process_steps',
                'type' => 'text',
                'label' => 'Step 5 Title',
            ],
            [
                'key' => 'development_step_5_text',
                'value' => 'Marketing and leasing to achieve stabilized occupancy and optimize returns.',
                'group' => 'development_process_steps',
                'type' => 'textarea',
                'label' => 'Step 5 Text',
            ],

            // Partner/CTA Section
            [
                'key' => 'development_cta_title',
                'value' => 'Partner on Your Next Development',
                'group' => 'development_cta',
                'type' => 'text',
                'label' => 'CTA Title',
            ],
            [
                'key' => 'development_cta_text',
                'value' => 'Whether you have a site, an idea, or capital to deploy, let\'s explore how we can collaborate on your next development project.',
                'group' => 'development_cta',
                'type' => 'textarea',
                'label' => 'CTA Text',
            ],
            [
                'key' => 'development_cta_button_text',
                'value' => 'Discuss a Project',
                'group' => 'development_cta',
                'type' => 'text',
                'label' => 'CTA Button Text',
            ],
            [
                'key' => 'development_cta_button_url',
                'value' => '/contact',
                'group' => 'development_cta',
                'type' => 'text',
                'label' => 'CTA Button URL',
            ],
        ];

        foreach ($settings as $setting) {
            Setting::updateOrCreate(
                ['key' => $setting['key']],
                $setting
            );
        }
    }
}
