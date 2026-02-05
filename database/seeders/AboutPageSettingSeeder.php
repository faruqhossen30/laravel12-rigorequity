<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Seeder;

class AboutPageSettingSeeder extends Seeder
{
    public function run(): void
    {
        $settings = [
            // SEO Settings
            [
                'key' => 'about_seo_title',
                'value' => 'About Us - Rigor Equity',
                'group' => 'about_seo',
                'type' => 'text',
                'label' => 'SEO Title',
            ],
            [
                'key' => 'about_seo_description',
                'value' => 'Rigor Equity is a vertically integrated operator-led real estate investment and development firm.',
                'group' => 'about_seo',
                'type' => 'textarea',
                'label' => 'SEO Description',
            ],
            [
                'key' => 'about_seo_keywords',
                'value' => 'real estate, investment, development, rigor equity, about us',
                'group' => 'about_seo',
                'type' => 'textarea',
                'label' => 'SEO Keywords',
            ],

            // Hero Section
            [
                'key' => 'about_hero_title',
                'value' => 'About Rigor Equity',
                'group' => 'about_hero',
                'type' => 'text',
                'label' => 'Hero Title',
            ],
            [
                'key' => 'about_hero_subtitle',
                'value' => 'A vertically integrated operator-led real estate investment and development firm',
                'group' => 'about_hero',
                'type' => 'richtext',
                'label' => 'Hero Subtitle',
            ],
            [
                'key' => 'about_hero_image',
                'value' => 'https://images.unsplash.com/photo-1555109307-f7d9da25c244?q=80&w=2073&auto=format&fit=crop',
                'group' => 'about_hero',
                'type' => 'text',
                'label' => 'Hero Image URL',
            ],
            [
                'key' => 'about_hero_image_caption',
                'value' => 'Featured in Times Square, New York',
                'group' => 'about_hero',
                'type' => 'text',
                'label' => 'Hero Image Caption',
            ],

            // Main Content
            [
                'key' => 'about_intro_text',
                'value' => 'Rigor Equity is a vertically integrated operator-led real estate investment and development firm that focuses on acquiring, repositioning, and building undervalued multifamily and MDU assets in overlooked and underserved submarkets. The firm specializes in urban infill development and value-add strategies through hands-on asset management, efficient construction oversight, and full alignment of investor and operator interests.',
                'group' => 'about_content',
                'type' => 'richtext',
                'label' => 'Intro Text',
            ],
            [
                'key' => 'about_approach_title',
                'value' => 'Our Approach',
                'group' => 'about_content',
                'type' => 'text',
                'label' => 'Approach Title',
            ],
            [
                'key' => 'about_approach_text',
                'value' => 'Founded by a new generation of operators, Rigor Equity uses a data-informed acquisition approach that targets transitional neighborhoods with strong demographic trends, infrastructure investment, and meaningful upside potential. As actual developers, the company manages projects from concept to completion, ensuring disciplined underwriting, community-focused design, and capital-efficient execution that produces above-market, risk-adjusted returns while supporting long-term neighborhood revitalization.',
                'group' => 'about_content',
                'type' => 'richtext',
                'label' => 'Approach Text',
            ],
            [
                'key' => 'about_advantage_title',
                'value' => 'Competitive Advantage',
                'group' => 'about_content',
                'type' => 'text',
                'label' => 'Advantage Title',
            ],
            [
                'key' => 'about_advantage_text',
                'value' => 'Rigor Equity leverages private capital partnerships, public sector collaboration, local municipal partnerships, vertically controlled renovation pipelines, and off-market deal flow to compress timelines and deliver institutional-quality assets at below-market bases.',
                'group' => 'about_content',
                'type' => 'richtext',
                'label' => 'Advantage Text',
            ],

            // Differentiators
            [
                'key' => 'about_differentiators_title',
                'value' => 'Key Differentiators',
                'group' => 'about_differentiators',
                'type' => 'text',
                'label' => 'Section Title',
            ],
            [
                'key' => 'about_diff_1_title',
                'value' => 'Operator-Led',
                'group' => 'about_differentiators',
                'type' => 'text',
                'label' => 'Differentiator 1 Title',
            ],
            [
                'key' => 'about_diff_1_text',
                'value' => 'Founded and managed by actual developers who oversee every aspect of the investment lifecycle from acquisition to disposition.',
                'group' => 'about_differentiators',
                'type' => 'textarea',
                'label' => 'Differentiator 1 Text',
            ],
            [
                'key' => 'about_diff_2_title',
                'value' => 'Vertically Integrated',
                'group' => 'about_differentiators',
                'type' => 'text',
                'label' => 'Differentiator 2 Title',
            ],
            [
                'key' => 'about_diff_2_text',
                'value' => 'Full control over construction, development, and asset management ensures quality, efficiency, and cost control.',
                'group' => 'about_differentiators',
                'type' => 'textarea',
                'label' => 'Differentiator 2 Text',
            ],
            [
                'key' => 'about_diff_3_title',
                'value' => 'Data-Informed Strategy',
                'group' => 'about_differentiators',
                'type' => 'text',
                'label' => 'Differentiator 3 Title',
            ],
            [
                'key' => 'about_diff_3_text',
                'value' => 'Rigorous market analysis and demographic research identify high-potential submarkets before institutional capital arrives.',
                'group' => 'about_differentiators',
                'type' => 'textarea',
                'label' => 'Differentiator 3 Text',
            ],
            [
                'key' => 'about_diff_4_title',
                'value' => 'Community-Focused',
                'group' => 'about_differentiators',
                'type' => 'text',
                'label' => 'Differentiator 4 Title',
            ],
            [
                'key' => 'about_diff_4_text',
                'value' => 'Investments designed to revitalize neighborhoods while delivering superior risk-adjusted returns to investors.',
                'group' => 'about_differentiators',
                'type' => 'textarea',
                'label' => 'Differentiator 4 Text',
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
