<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Seeder;

class InvestmentManagementPageSettingSeeder extends Seeder
{
    public function run(): void
    {
        $settings = [
            // SEO Settings
            [
                'key' => 'investment_seo_title',
                'value' => 'Investment Management - Rigor Equity',
                'group' => 'investment_seo',
                'type' => 'text',
                'label' => 'SEO Title',
            ],
            [
                'key' => 'investment_seo_description',
                'value' => 'Expert real estate investment strategies that deliver consistent, long-term value for our partners and stakeholders.',
                'group' => 'investment_seo',
                'type' => 'textarea',
                'label' => 'SEO Description',
            ],
            [
                'key' => 'investment_seo_keywords',
                'value' => 'investment management, real estate, strategies, rigor equity, ROI, asset management',
                'group' => 'investment_seo',
                'type' => 'textarea',
                'label' => 'SEO Keywords',
            ],

            // Hero Section
            [
                'key' => 'investment_hero_title',
                'value' => 'Investment Management',
                'group' => 'investment_hero',
                'type' => 'text',
                'label' => 'Hero Title',
            ],
            [
                'key' => 'investment_hero_description',
                'value' => 'Expert real estate investment strategies that deliver consistent, long-term value for our partners and stakeholders.',
                'group' => 'investment_hero',
                'type' => 'textarea',
                'label' => 'Hero Description',
            ],
            [
                'key' => 'investment_hero_button_text',
                'value' => 'Schedule a Consultation',
                'group' => 'investment_hero',
                'type' => 'text',
                'label' => 'Hero Button Text',
            ],
            [
                'key' => 'investment_hero_button_url',
                'value' => '/contact',
                'group' => 'investment_hero',
                'type' => 'text',
                'label' => 'Hero Button URL',
            ],

            // Stats Bar
            [
                'key' => 'investment_stat_1_value',
                'value' => '$45M+',
                'group' => 'investment_stats',
                'type' => 'text',
                'label' => 'Stat 1 Value',
            ],
            [
                'key' => 'investment_stat_1_label',
                'value' => 'Projects Under Management',
                'group' => 'investment_stats',
                'type' => 'text',
                'label' => 'Stat 1 Label',
            ],
            [
                'key' => 'investment_stat_2_value',
                'value' => '19%',
                'group' => 'investment_stats',
                'type' => 'text',
                'label' => 'Stat 2 Value',
            ],
            [
                'key' => 'investment_stat_2_label',
                'value' => 'Avg. Annual Return',
                'group' => 'investment_stats',
                'type' => 'text',
                'label' => 'Stat 2 Label',
            ],
            [
                'key' => 'investment_stat_3_value',
                'value' => '90%',
                'group' => 'investment_stats',
                'type' => 'text',
                'label' => 'Stat 3 Value',
            ],
            [
                'key' => 'investment_stat_3_label',
                'value' => 'LP Retention Rate',
                'group' => 'investment_stats',
                'type' => 'text',
                'label' => 'Stat 3 Label',
            ],

            // Investment Philosophy Section
            [
                'key' => 'investment_philosophy_title',
                'value' => 'Investment Philosophy',
                'group' => 'investment_philosophy',
                'type' => 'text',
                'label' => 'Philosophy Section Title',
            ],
            [
                'key' => 'investment_philosophy_description',
                'value' => 'Our disciplined approach combines institutional rigor with entrepreneurial agility to deliver superior risk-adjusted returns.',
                'group' => 'investment_philosophy',
                'type' => 'textarea',
                'label' => 'Philosophy Section Description',
            ],
            [
                'key' => 'investment_phil_1_title',
                'value' => 'Data-Driven Decisions',
                'group' => 'investment_philosophy_cards',
                'type' => 'text',
                'label' => 'Card 1 Title',
            ],
            [
                'key' => 'investment_phil_1_text',
                'value' => 'Advanced analytics and market intelligence guide every investment decision, ensuring opportunities are backed by rigorous research.',
                'group' => 'investment_philosophy_cards',
                'type' => 'textarea',
                'label' => 'Card 1 Text',
            ],
            [
                'key' => 'investment_phil_2_title',
                'value' => 'Operator-Led Expertise',
                'group' => 'investment_philosophy_cards',
                'type' => 'text',
                'label' => 'Card 2 Title',
            ],
            [
                'key' => 'investment_phil_2_text',
                'value' => 'Real estate operators with hands-on experience managing complex assets across all market cycles.',
                'group' => 'investment_philosophy_cards',
                'type' => 'textarea',
                'label' => 'Card 2 Text',
            ],
            [
                'key' => 'investment_phil_3_title',
                'value' => 'Risk-Adjusted Returns',
                'group' => 'investment_philosophy_cards',
                'type' => 'text',
                'label' => 'Card 3 Title',
            ],
            [
                'key' => 'investment_phil_3_text',
                'value' => 'Focus on sustainable returns that balance growth potential with prudent risk management and capital preservation.',
                'group' => 'investment_philosophy_cards',
                'type' => 'textarea',
                'label' => 'Card 3 Text',
            ],
            [
                'key' => 'investment_phil_4_title',
                'value' => 'Long-Term Value Creation',
                'group' => 'investment_philosophy_cards',
                'type' => 'text',
                'label' => 'Card 4 Title',
            ],
            [
                'key' => 'investment_phil_4_text',
                'value' => 'Patient capital approach prioritizing asset quality, operational excellence, and strategic positioning for enduring value.',
                'group' => 'investment_philosophy_cards',
                'type' => 'textarea',
                'label' => 'Card 4 Text',
            ],

            // How We Execute Section
            [
                'key' => 'investment_execute_title',
                'value' => 'How We Execute',
                'group' => 'investment_execute',
                'type' => 'text',
                'label' => 'Execute Section Title',
            ],
            [
                'key' => 'investment_exec_1_title',
                'value' => 'Deal Sourcing & Acquisition',
                'group' => 'investment_execute_cards',
                'type' => 'text',
                'label' => 'Execute Card 1 Title',
            ],
            [
                'key' => 'investment_exec_1_text',
                'value' => 'Proprietary deal flow and off-market opportunities through our extensive network of brokers, developers, institutional partners, and municipal partnerships.',
                'group' => 'investment_execute_cards',
                'type' => 'textarea',
                'label' => 'Execute Card 1 Text',
            ],
            [
                'key' => 'investment_exec_2_title',
                'value' => 'Rigorous Underwriting',
                'group' => 'investment_execute_cards',
                'type' => 'text',
                'label' => 'Execute Card 2 Title',
            ],
            [
                'key' => 'investment_exec_2_text',
                'value' => 'Comprehensive financial modeling, market analysis, and due diligence to validate every investment thesis before deployment.',
                'group' => 'investment_execute_cards',
                'type' => 'textarea',
                'label' => 'Execute Card 2 Text',
            ],
            [
                'key' => 'investment_exec_3_title',
                'value' => 'Active Asset Management',
                'group' => 'investment_execute_cards',
                'type' => 'text',
                'label' => 'Execute Card 3 Title',
            ],
            [
                'key' => 'investment_exec_3_text',
                'value' => 'Hands-on operational oversight with dedicated property management teams driving NOI growth and value creation.',
                'group' => 'investment_execute_cards',
                'type' => 'textarea',
                'label' => 'Execute Card 3 Text',
            ],
            [
                'key' => 'investment_exec_4_title',
                'value' => 'Transparent Reporting',
                'group' => 'investment_execute_cards',
                'type' => 'text',
                'label' => 'Execute Card 4 Title',
            ],
            [
                'key' => 'investment_exec_4_text',
                'value' => 'Regular performance updates, detailed financial statements, and direct access to portfolio managers for all investors.',
                'group' => 'investment_execute_cards',
                'type' => 'textarea',
                'label' => 'Execute Card 4 Text',
            ],

            // Investment Strategies Section
            [
                'key' => 'investment_strategies_title',
                'value' => 'Investment Strategies',
                'group' => 'investment_strategies',
                'type' => 'text',
                'label' => 'Strategies Section Title',
            ],
            [
                'key' => 'investment_strategies_description',
                'value' => 'Diversified approaches designed to meet varying risk profiles and investment objectives.',
                'group' => 'investment_strategies',
                'type' => 'textarea',
                'label' => 'Strategies Section Description',
            ],
            // Strategy 1
            [
                'key' => 'investment_strat_1_title',
                'value' => 'Quick Turnaround Equity',
                'group' => 'investment_strategies_cards',
                'type' => 'text',
                'label' => 'Strategy 1 Title',
            ],
            [
                'key' => 'investment_strat_1_text',
                'value' => 'Short-term equity investments in opportunistic and value-add multifamily dwelling units (MDU) with rapid deployment and exit strategies.',
                'group' => 'investment_strategies_cards',
                'type' => 'textarea',
                'label' => 'Strategy 1 Text',
            ],
            [
                'key' => 'investment_strat_1_list',
                'value' => "Opportunistic & value-add MDU\nShort-term hold periods\nQuick turnaround strategy\nHigher velocity returns",
                'group' => 'investment_strategies_cards',
                'type' => 'textarea',
                'label' => 'Strategy 1 List (One per line)',
            ],
            // Strategy 2
            [
                'key' => 'investment_strat_2_title',
                'value' => 'Residential Value-Add & Development',
                'group' => 'investment_strategies_cards',
                'type' => 'text',
                'label' => 'Strategy 2 Title',
            ],
            [
                'key' => 'investment_strat_2_text',
                'value' => 'Equity investments in multifamily value-add opportunities and ground-up residential development projects.',
                'group' => 'investment_strategies_cards',
                'type' => 'textarea',
                'label' => 'Strategy 2 Text',
            ],
            [
                'key' => 'investment_strat_2_list',
                'value' => "Multifamily value-add assets\nResidential development equity\nOperational improvements\nMedium-term appreciation",
                'group' => 'investment_strategies_cards',
                'type' => 'textarea',
                'label' => 'Strategy 2 List (One per line)',
            ],
            // Strategy 3
            [
                'key' => 'investment_strat_3_title',
                'value' => 'Public Sector Construction',
                'group' => 'investment_strategies_cards',
                'type' => 'text',
                'label' => 'Strategy 3 Title',
            ],
            [
                'key' => 'investment_strat_3_text',
                'value' => 'Low-risk investment opportunities in federal, city, and municipal construction projects with stable returns.',
                'group' => 'investment_strategies_cards',
                'type' => 'textarea',
                'label' => 'Strategy 3 Text',
            ],
            [
                'key' => 'investment_strat_3_list',
                'value' => "Federal construction projects\nCity & municipal partnerships\nLow-risk profile\nGovernment-backed stability",
                'group' => 'investment_strategies_cards',
                'type' => 'textarea',
                'label' => 'Strategy 3 List (One per line)',
            ],

            // Bottom CTA Section
            [
                'key' => 'investment_cta_title',
                'value' => 'Ready to Invest with Confidence?',
                'group' => 'investment_cta',
                'type' => 'text',
                'label' => 'CTA Title',
            ],
            [
                'key' => 'investment_cta_text',
                'value' => 'Partner with Rigor Equity to access institutional-quality investment opportunities and expert portfolio management.',
                'group' => 'investment_cta',
                'type' => 'textarea',
                'label' => 'CTA Text',
            ],
            [
                'key' => 'investment_cta_button_1_text',
                'value' => 'Contact Our Team',
                'group' => 'investment_cta',
                'type' => 'text',
                'label' => 'CTA Button 1 Text',
            ],
            [
                'key' => 'investment_cta_button_1_url',
                'value' => '/contact',
                'group' => 'investment_cta',
                'type' => 'text',
                'label' => 'CTA Button 1 URL',
            ],
            [
                'key' => 'investment_cta_button_2_text',
                'value' => 'Download Investment Overview',
                'group' => 'investment_cta',
                'type' => 'text',
                'label' => 'CTA Button 2 Text',
            ],
            [
                'key' => 'investment_cta_button_2_url',
                'value' => '#',
                'group' => 'investment_cta',
                'type' => 'text',
                'label' => 'CTA Button 2 URL',
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
