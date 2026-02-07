<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Seeder;

class PublicSectorPageSettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $settings = [
            // SEO
            [
                'key' => 'public_sector_seo_title',
                'value' => 'Public Sector Development - Rigor Equity',
                'group' => 'public_sector_seo',
                'type' => 'text',
                'label' => 'SEO Title',
            ],
            [
                'key' => 'public_sector_seo_description',
                'value' => 'Partnering with municipalities and public agencies to deliver quality residential housing that serves communities for generations.',
                'group' => 'public_sector_seo',
                'type' => 'textarea',
                'label' => 'SEO Description',
            ],

            // Hero Section
            [
                'key' => 'public_sector_hero_title',
                'value' => 'Public Sector Development',
                'group' => 'public_sector_hero',
                'type' => 'text',
                'label' => 'Hero Title',
            ],
            [
                'key' => 'public_sector_hero_subtitle',
                'value' => 'Partnering with municipalities and public agencies to deliver quality residential housing that serves communities for generations.',
                'group' => 'public_sector_hero',
                'type' => 'textarea',
                'label' => 'Hero Subtitle',
            ],
            [
                'key' => 'public_sector_hero_image',
                'value' => 'https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?q=80&w=2070&auto=format&fit=crop',
                'group' => 'public_sector_hero',
                'type' => 'image',
                'label' => 'Hero Image URL',
            ],
            [
                'key' => 'public_sector_hero_cta_text',
                'value' => 'Explore Partnerships',
                'group' => 'public_sector_hero',
                'type' => 'text',
                'label' => 'Hero CTA Text',
            ],
            [
                'key' => 'public_sector_hero_cta_link',
                'value' => '/contact',
                'group' => 'public_sector_hero',
                'type' => 'text',
                'label' => 'Hero CTA Link',
            ],

            // Stats Section
            [
                'key' => 'public_sector_stats_1_value',
                'value' => '20+',
                'group' => 'public_sector_stats',
                'type' => 'text',
                'label' => 'Stat 1 Value',
            ],
            [
                'key' => 'public_sector_stats_1_label',
                'value' => 'Public Projects',
                'group' => 'public_sector_stats',
                'type' => 'text',
                'label' => 'Stat 1 Label',
            ],
            [
                'key' => 'public_sector_stats_2_value',
                'value' => '5',
                'group' => 'public_sector_stats',
                'type' => 'text',
                'label' => 'Stat 2 Value',
            ],
            [
                'key' => 'public_sector_stats_2_label',
                'value' => 'Municipality Partners',
                'group' => 'public_sector_stats',
                'type' => 'text',
                'label' => 'Stat 2 Label',
            ],
            [
                'key' => 'public_sector_stats_3_value',
                'value' => '100%',
                'group' => 'public_sector_stats',
                'type' => 'text',
                'label' => 'Stat 3 Value',
            ],
            [
                'key' => 'public_sector_stats_3_label',
                'value' => 'Compliance Record',
                'group' => 'public_sector_stats',
                'type' => 'text',
                'label' => 'Stat 3 Label',
            ],

            // Community Section
            [
                'key' => 'public_sector_community_title',
                'value' => 'Building for Communities',
                'group' => 'public_sector_community',
                'type' => 'text',
                'label' => 'Community Section Title',
            ],
            [
                'key' => 'public_sector_community_content',
                'value' => "Rigor Equity brings private sector efficiency and innovation to public sector residential development. We specialize in single-family homes, multi-dwelling units, and multifamily residential projects that serve community housing needs.\n\nOur public sector team has extensive experience working with housing authorities, municipalities, and government agencies to deliver quality residential developments that meet strict budgets, timelines, and regulatory requirements while enhancing community wellbeing.",
                'group' => 'public_sector_community',
                'type' => 'richtext',
                'label' => 'Community Section Content',
            ],
            [
                'key' => 'public_sector_community_image',
                'value' => 'https://images.unsplash.com/photo-1448630360428-65456885c650?q=80&w=2067&auto=format&fit=crop',
                'group' => 'public_sector_community',
                'type' => 'image',
                'label' => 'Community Section Image URL',
            ],
            [
                'key' => 'public_sector_community_cta_text',
                'value' => 'Learn About Our Process',
                'group' => 'public_sector_community',
                'type' => 'text',
                'label' => 'Community Section CTA Text',
            ],
            [
                'key' => 'public_sector_community_cta_link',
                'value' => '/process',
                'group' => 'public_sector_community',
                'type' => 'text',
                'label' => 'Community Section CTA Link',
            ],

            // Services Section
            [
                'key' => 'public_sector_services_1_title',
                'value' => 'Single Family Homes',
                'group' => 'public_sector_services',
                'type' => 'text',
                'label' => 'Service 1 Title',
            ],
            [
                'key' => 'public_sector_services_1_desc',
                'value' => 'Quality single-family residential construction for public housing initiatives and community development programs.',
                'group' => 'public_sector_services',
                'type' => 'textarea',
                'label' => 'Service 1 Description',
            ],
            [
                'key' => 'public_sector_services_2_title',
                'value' => 'Multi-Dwelling Units (MDU)',
                'group' => 'public_sector_services',
                'type' => 'text',
                'label' => 'Service 2 Title',
            ],
            [
                'key' => 'public_sector_services_2_desc',
                'value' => 'Multi-dwelling residential developments that balance community needs with efficient land use.',
                'group' => 'public_sector_services',
                'type' => 'textarea',
                'label' => 'Service 2 Description',
            ],
            [
                'key' => 'public_sector_services_3_title',
                'value' => 'Multifamily Residential',
                'group' => 'public_sector_services',
                'type' => 'text',
                'label' => 'Service 3 Title',
            ],
            [
                'key' => 'public_sector_services_3_desc',
                'value' => 'Large-scale multifamily projects including affordable housing and mixed-income communities.',
                'group' => 'public_sector_services',
                'type' => 'textarea',
                'label' => 'Service 3 Description',
            ],

            // Why Partner Section
            [
                'key' => 'public_sector_why_title',
                'value' => 'Why Partner with Rigor Equity?',
                'group' => 'public_sector_why',
                'type' => 'text',
                'label' => 'Why Partner Title',
            ],
            [
                'key' => 'public_sector_why_subtitle',
                'value' => 'We bring unique advantages to public sector development projects.',
                'group' => 'public_sector_why',
                'type' => 'textarea',
                'label' => 'Why Partner Subtitle',
            ],
            [
                'key' => 'public_sector_why_1_title',
                'value' => 'Regulatory Expertise',
                'group' => 'public_sector_why',
                'type' => 'text',
                'label' => 'Why Feature 1 Title',
            ],
            [
                'key' => 'public_sector_why_1_desc',
                'value' => 'Deep understanding of public procurement, compliance requirements, and government regulations.',
                'group' => 'public_sector_why',
                'type' => 'textarea',
                'label' => 'Why Feature 1 Description',
            ],
            [
                'key' => 'public_sector_why_2_title',
                'value' => 'Community Engagement',
                'group' => 'public_sector_why',
                'type' => 'text',
                'label' => 'Why Feature 2 Title',
            ],
            [
                'key' => 'public_sector_why_2_desc',
                'value' => 'Proven track record of working with stakeholders and community members throughout project lifecycles.',
                'group' => 'public_sector_why',
                'type' => 'textarea',
                'label' => 'Why Feature 2 Description',
            ],

            // P3 Section
            [
                'key' => 'public_sector_p3_title',
                'value' => 'Public-Private Partnerships (P3)',
                'group' => 'public_sector_p3',
                'type' => 'text',
                'label' => 'P3 Section Title',
            ],
            [
                'key' => 'public_sector_p3_desc',
                'value' => 'We specialize in innovative P3 structures that leverage private capital and expertise to deliver public infrastructure more efficiently.',
                'group' => 'public_sector_p3',
                'type' => 'textarea',
                'label' => 'P3 Section Description',
            ],
            [
                'key' => 'public_sector_p3_1_title',
                'value' => 'Design-Build-Finance',
                'group' => 'public_sector_p3',
                'type' => 'text',
                'label' => 'P3 Item 1 Title',
            ],
            [
                'key' => 'public_sector_p3_1_desc',
                'value' => 'Integrated delivery models that streamline project execution and transfer risk appropriately.',
                'group' => 'public_sector_p3',
                'type' => 'textarea',
                'label' => 'P3 Item 1 Description',
            ],
            [
                'key' => 'public_sector_p3_2_title',
                'value' => 'Long-Term Operations',
                'group' => 'public_sector_p3',
                'type' => 'text',
                'label' => 'P3 Item 2 Title',
            ],
            [
                'key' => 'public_sector_p3_2_desc',
                'value' => 'Operational partnerships that ensure sustained asset performance over decades.',
                'group' => 'public_sector_p3',
                'type' => 'textarea',
                'label' => 'P3 Item 2 Description',
            ],
            [
                'key' => 'public_sector_p3_cta_text',
                'value' => 'Discuss P3 Opportunities',
                'group' => 'public_sector_p3',
                'type' => 'text',
                'label' => 'P3 CTA Text',
            ],
            [
                'key' => 'public_sector_p3_cta_link',
                'value' => '/contact',
                'group' => 'public_sector_p3',
                'type' => 'text',
                'label' => 'P3 CTA Link',
            ],

            // CTA Section
            [
                'key' => 'public_sector_cta_title',
                'value' => "Let's Build Something Great Together",
                'group' => 'public_sector_cta',
                'type' => 'text',
                'label' => 'Footer CTA Title',
            ],
            [
                'key' => 'public_sector_cta_desc',
                'value' => "Contact our public sector team to discuss how we can support your community's infrastructure needs.",
                'group' => 'public_sector_cta',
                'type' => 'textarea',
                'label' => 'Footer CTA Description',
            ],
            [
                'key' => 'public_sector_cta_button_text',
                'value' => 'Schedule a Meeting',
                'group' => 'public_sector_cta',
                'type' => 'text',
                'label' => 'Footer CTA Button Text',
            ],
            [
                'key' => 'public_sector_cta_button_link',
                'value' => '/contact',
                'group' => 'public_sector_cta',
                'type' => 'text',
                'label' => 'Footer CTA Button Link',
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
