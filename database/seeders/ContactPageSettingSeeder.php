<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Seeder;

class ContactPageSettingSeeder extends Seeder
{
    public function run(): void
    {
        $settings = [
            // SEO Settings
            [
                'key' => 'contact_seo_title',
                'value' => 'Contact Us - Rigor Equity',
                'group' => 'contact_seo',
                'type' => 'text',
                'label' => 'SEO Title',
            ],
            [
                'key' => 'contact_seo_description',
                'value' => 'Get in touch with Rigor Equity. We are here to answer your questions and explore how we can work together.',
                'group' => 'contact_seo',
                'type' => 'textarea',
                'label' => 'SEO Description',
            ],
            [
                'key' => 'contact_seo_keywords',
                'value' => 'contact, rigor equity, real estate, investment, chicago',
                'group' => 'contact_seo',
                'type' => 'textarea',
                'label' => 'SEO Keywords',
            ],

            // Hero Section
            [
                'key' => 'contact_hero_title',
                'value' => 'Contact Us',
                'group' => 'contact_hero',
                'type' => 'text',
                'label' => 'Hero Title',
            ],
            [
                'key' => 'contact_hero_text',
                'value' => "Get in touch with our team. We're here to answer your questions and explore how we can work together.",
                'group' => 'contact_hero',
                'type' => 'richtext',
                'label' => 'Hero Text',
            ],

            // Contact Information
            [
                'key' => 'contact_email',
                'value' => 'info@rigorequity.com',
                'group' => 'contact_info',
                'type' => 'text',
                'label' => 'Email Address',
            ],
            [
                'key' => 'contact_phone',
                'value' => '(312) 777-9783',
                'group' => 'contact_info',
                'type' => 'text',
                'label' => 'Phone Number',
            ],
            [
                'key' => 'contact_address',
                'value' => '11 E Hubbard St Suite 501<br>Chicago, IL 60611',
                'group' => 'contact_info',
                'type' => 'richtext',
                'label' => 'Physical Address',
            ],

            // Office Hours
            [
                'key' => 'contact_hours_weekdays',
                'value' => 'Monday - Saturday: 8:00 AM - 8:00 PM',
                'group' => 'contact_hours',
                'type' => 'text',
                'label' => 'Weekday Hours',
            ],
            [
                'key' => 'contact_hours_weekend',
                'value' => 'Sunday: By appointment',
                'group' => 'contact_hours',
                'type' => 'text',
                'label' => 'Weekend Hours',
            ],

            // CTA Section
            [
                'key' => 'contact_cta_title',
                'value' => 'Looking to Schedule?',
                'group' => 'contact_cta',
                'type' => 'text',
                'label' => 'CTA Title',
            ],
            [
                'key' => 'contact_cta_text',
                'value' => "If you'd like to schedule a meeting with our team, use our dedicated meeting scheduler.",
                'group' => 'contact_cta',
                'type' => 'richtext',
                'label' => 'CTA Text',
            ],
            [
                'key' => 'contact_cta_button_text',
                'value' => 'Schedule a Meeting',
                'group' => 'contact_cta',
                'type' => 'text',
                'label' => 'Button Text',
            ],
            [
                'key' => 'contact_cta_button_url',
                'value' => '#',
                'group' => 'contact_cta',
                'type' => 'text',
                'label' => 'Button URL',
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
