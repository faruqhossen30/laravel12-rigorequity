<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Seeder;

class FooterSettingsSeeder extends Seeder
{
    public function run(): void
    {
        $settings = [
            // Brand Section
            [
                'key' => 'footer_brand_description',
                'value' => 'Modern Equity Management solutions for the next generation of real estate investment.',
                'group' => 'footer_brand',
                'type' => 'textarea',
                'label' => 'Brand Description',
            ],
            
            // Social Media
            [
                'key' => 'footer_social_facebook',
                'value' => '#',
                'group' => 'footer_social',
                'type' => 'text',
                'label' => 'Facebook URL',
            ],
            [
                'key' => 'footer_social_linkedin',
                'value' => '#',
                'group' => 'footer_social',
                'type' => 'text',
                'label' => 'Linkedin URL',
            ],
            [
                'key' => 'footer_social_instagram',
                'value' => '#',
                'group' => 'footer_social',
                'type' => 'text',
                'label' => 'Instagram URL',
            ],

            // Contact Info
            [
                'key' => 'footer_address',
                'value' => '1234 Investment Blvd, Suite 100<br>New York, NY 10001',
                'group' => 'footer_contact',
                'type' => 'textarea',
                'label' => 'Address',
            ],
            [
                'key' => 'footer_email',
                'value' => 'info@rigorequity.com',
                'group' => 'footer_contact',
                'type' => 'text',
                'label' => 'Email',
            ],
            [
                'key' => 'footer_phone',
                'value' => '+1 (234) 567-890',
                'group' => 'footer_contact',
                'type' => 'text',
                'label' => 'Phone',
            ],

            // Map
            [
                'key' => 'footer_map_iframe',
                'value' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3022.1422937950147!2d-73.98731968482413!3d40.75889497932681!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25855c6480299%3A0x55194ec5a1ae072e!2sTimes%20Square!5e0!3m2!1sen!2sus!4v1622207901399!5m2!1sen!2sus',
                'group' => 'footer_map',
                'type' => 'textarea',
                'label' => 'Map Iframe URL',
            ],

            // Copyright
            [
                'key' => 'footer_copyright_text',
                'value' => 'Rigor Equity Inc. All rights reserved.',
                'group' => 'footer_copyright',
                'type' => 'text',
                'label' => 'Copyright Text',
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
