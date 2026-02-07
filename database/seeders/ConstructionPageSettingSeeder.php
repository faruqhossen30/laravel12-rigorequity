<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Seeder;

class ConstructionPageSettingSeeder extends Seeder
{
    public function run(): void
    {
        $settings = [
            // SEO Settings
            [
                'key' => 'construction_seo_title',
                'value' => 'Construction - Rigor Equity',
                'group' => 'construction_seo',
                'type' => 'text',
                'label' => 'SEO Title',
            ],
            [
                'key' => 'construction_seo_description',
                'value' => 'Building excellence through innovative construction solutions, expert project management, and unwavering commitment to quality.',
                'group' => 'construction_seo',
                'type' => 'textarea',
                'label' => 'SEO Description',
            ],
            [
                'key' => 'construction_seo_keywords',
                'value' => 'construction, project management, rigor equity, development, building',
                'group' => 'construction_seo',
                'type' => 'textarea',
                'label' => 'SEO Keywords',
            ],

            // Hero Section
            [
                'key' => 'construction_hero_title',
                'value' => 'Construction',
                'group' => 'construction_hero',
                'type' => 'text',
                'label' => 'Hero Title',
            ],
            // [
            //     'key' => 'construction_hero_description',
            //     'value' => 'Building excellence through innovative construction solutions, expert project management, and unwavering commitment to quality.',
            //     'group' => 'construction_hero',
            //     'type' => 'textarea',
            //     'label' => 'Hero Description',
            // ],
            // [
            //     'key' => 'construction_hero_bg_image',
            //     'value' => 'https://images.unsplash.com/photo-1541888946425-d81bb19240f5?q=80&w=2070&auto=format&fit=crop',
            //     'group' => 'construction_hero',
            //     'type' => 'image',
            //     'label' => 'Hero Background Image',
            // ],
            // [
            //     'key' => 'construction_hero_button_text',
            //     'value' => 'Request a Quote',
            //     'group' => 'construction_hero',
            //     'type' => 'text',
            //     'label' => 'Hero Button Text',
            // ],
            // [
            //     'key' => 'construction_hero_button_url',
            //     'value' => '/contact',
            //     'group' => 'construction_hero',
            //     'type' => 'text',
            //     'label' => 'Hero Button URL',
            // ],

            // Stats Bar
            [
                'key' => 'construction_stat_1_value',
                'value' => '50+',
                'group' => 'construction_stats',
                'type' => 'text',
                'label' => 'Stat 1 Value',
            ],
            [
                'key' => 'construction_stat_1_label',
                'value' => 'Projects Completed',
                'group' => 'construction_stats',
                'type' => 'text',
                'label' => 'Stat 1 Label',
            ],
            [
                'key' => 'construction_stat_2_value',
                'value' => '98%',
                'group' => 'construction_stats',
                'type' => 'text',
                'label' => 'Stat 2 Value',
            ],
            [
                'key' => 'construction_stat_2_label',
                'value' => 'On-Time Delivery',
                'group' => 'construction_stats',
                'type' => 'text',
                'label' => 'Stat 2 Label',
            ],
            [
                'key' => 'construction_stat_3_value',
                'value' => '$50M+',
                'group' => 'construction_stats',
                'type' => 'text',
                'label' => 'Stat 3 Value',
            ],
            [
                'key' => 'construction_stat_3_label',
                'value' => 'Construction Value',
                'group' => 'construction_stats',
                'type' => 'text',
                'label' => 'Stat 3 Label',
            ],

            // Services Section
            [
                'key' => 'construction_services_title',
                'value' => 'Construction Services',
                'group' => 'construction_services',
                'type' => 'text',
                'label' => 'Services Section Title',
            ],
            [
                'key' => 'construction_services_description',
                'value' => 'Comprehensive construction capabilities to bring your vision to life with precision and expertise.',
                'group' => 'construction_services',
                'type' => 'textarea',
                'label' => 'Services Section Description',
            ],
            // Service 1
            [
                'key' => 'construction_serv_1_title',
                'value' => 'Ground-Up Development',
                'group' => 'construction_services_cards',
                'type' => 'text',
                'label' => 'Service 1 Title',
            ],
            [
                'key' => 'construction_serv_1_text',
                'value' => 'Full-service construction management from site preparation through final delivery.',
                'group' => 'construction_services_cards',
                'type' => 'textarea',
                'label' => 'Service 1 Text',
            ],
            // Service 2
            [
                'key' => 'construction_serv_2_title',
                'value' => 'Project Management',
                'group' => 'construction_services_cards',
                'type' => 'text',
                'label' => 'Service 2 Title',
            ],
            [
                'key' => 'construction_serv_2_text',
                'value' => 'Comprehensive oversight ensuring projects are delivered on time and within budget.',
                'group' => 'construction_services_cards',
                'type' => 'textarea',
                'label' => 'Service 2 Text',
            ],
            // Service 3
            [
                'key' => 'construction_serv_3_title',
                'value' => 'Logistics & Coordination',
                'group' => 'construction_services_cards',
                'type' => 'text',
                'label' => 'Service 3 Title',
            ],
            [
                'key' => 'construction_serv_3_text',
                'value' => 'Expert coordination of all trades, materials, and schedules for seamless execution.',
                'group' => 'construction_services_cards',
                'type' => 'textarea',
                'label' => 'Service 3 Text',
            ],

            // Process Section
            [
                'key' => 'construction_process_title',
                'value' => 'Our Process',
                'group' => 'construction_process',
                'type' => 'text',
                'label' => 'Process Section Title',
            ],
            [
                'key' => 'construction_process_description',
                'value' => 'A proven methodology that ensures every project is delivered with excellence.',
                'group' => 'construction_process',
                'type' => 'textarea',
                'label' => 'Process Section Description',
            ],
            // Step 1
            [
                'key' => 'construction_step_1_title',
                'value' => 'Planning & Design',
                'group' => 'construction_process_steps',
                'type' => 'text',
                'label' => 'Step 1 Title',
            ],
            [
                'key' => 'construction_step_1_text',
                'value' => 'Collaborative planning with architects, engineers, and stakeholders to refine project scope and specifications.',
                'group' => 'construction_process_steps',
                'type' => 'textarea',
                'label' => 'Step 1 Text',
            ],
            // Step 2
            [
                'key' => 'construction_step_2_title',
                'value' => 'Pre-Construction',
                'group' => 'construction_process_steps',
                'type' => 'text',
                'label' => 'Step 2 Title',
            ],
            [
                'key' => 'construction_step_2_text',
                'value' => 'Detailed budgeting, scheduling, and procurement to ensure efficient project execution.',
                'group' => 'construction_process_steps',
                'type' => 'textarea',
                'label' => 'Step 2 Text',
            ],
            // Step 3
            [
                'key' => 'construction_step_3_title',
                'value' => 'Construction',
                'group' => 'construction_process_steps',
                'type' => 'text',
                'label' => 'Step 3 Title',
            ],
            [
                'key' => 'construction_step_3_text',
                'value' => 'Expert management of all trades with rigorous quality control and safety protocols.',
                'group' => 'construction_process_steps',
                'type' => 'textarea',
                'label' => 'Step 3 Text',
            ],
            // Step 4
            [
                'key' => 'construction_step_4_title',
                'value' => 'Delivery & Closeout',
                'group' => 'construction_process_steps',
                'type' => 'text',
                'label' => 'Step 4 Title',
            ],
            [
                'key' => 'construction_step_4_text',
                'value' => 'Final inspections, documentation, and seamless handover to ensure complete satisfaction.',
                'group' => 'construction_process_steps',
                'type' => 'textarea',
                'label' => 'Step 4 Text',
            ],

            // Quality Section
            [
                'key' => 'construction_quality_title',
                'value' => 'Commitment to Quality & Safety',
                'group' => 'construction_quality',
                'type' => 'text',
                'label' => 'Quality Section Title',
            ],
            [
                'key' => 'construction_quality_description',
                'value' => 'Safety is our top priority on every job site. We maintain rigorous safety standards and training programs to protect our workers, partners, and communities.',
                'group' => 'construction_quality',
                'type' => 'textarea',
                'label' => 'Quality Section Description',
            ],
            // Quality Item 1
            [
                'key' => 'construction_qual_1_title',
                'value' => 'On-Time Performance',
                'group' => 'construction_quality_items',
                'type' => 'text',
                'label' => 'Quality Item 1 Title',
            ],
            [
                'key' => 'construction_qual_1_text',
                'value' => '98% of projects delivered on or ahead of schedule.',
                'group' => 'construction_quality_items',
                'type' => 'textarea',
                'label' => 'Quality Item 1 Text',
            ],
            // Quality Item 2
            [
                'key' => 'construction_qual_2_title',
                'value' => 'Quality Assurance',
                'group' => 'construction_quality_items',
                'type' => 'text',
                'label' => 'Quality Item 2 Title',
            ],
            [
                'key' => 'construction_qual_2_text',
                'value' => 'Comprehensive quality control at every phase of construction.',
                'group' => 'construction_quality_items',
                'type' => 'textarea',
                'label' => 'Quality Item 2 Text',
            ],
            // Quality Item 3
            [
                'key' => 'construction_qual_3_title',
                'value' => 'Safety First',
                'group' => 'construction_quality_items',
                'type' => 'text',
                'label' => 'Quality Item 3 Title',
            ],
            [
                'key' => 'construction_qual_3_text',
                'value' => 'Industry-leading safety record with continuous training programs.',
                'group' => 'construction_quality_items',
                'type' => 'textarea',
                'label' => 'Quality Item 3 Text',
            ],

            // Get Started Card
            [
                'key' => 'construction_cta_title',
                'value' => 'Get Started',
                'group' => 'construction_cta',
                'type' => 'text',
                'label' => 'CTA Title',
            ],
            [
                'key' => 'construction_cta_text',
                'value' => 'Ready to begin your construction project? Contact our team to discuss your needs and receive a detailed proposal.',
                'group' => 'construction_cta',
                'type' => 'textarea',
                'label' => 'CTA Text',
            ],
            [
                'key' => 'construction_cta_button_text',
                'value' => 'Request a Consultation',
                'group' => 'construction_cta',
                'type' => 'text',
                'label' => 'CTA Button Text',
            ],
            [
                'key' => 'construction_cta_button_url',
                'value' => '/contact',
                'group' => 'construction_cta',
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
