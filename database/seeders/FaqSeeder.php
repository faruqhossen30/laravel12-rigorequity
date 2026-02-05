<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Faq;

class FaqSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        if (Faq::count() > 0) {
            return;
        }

        $faqs = [
            [
                'question' => 'Property Management',
                'answer' => 'Our property management services ensure your assets are well-maintained, tenants are satisfied, and operations run smoothly. We handle everything from maintenance to tenant relations.'
            ],
            [
                'question' => 'Asset Management',
                'answer' => 'We provide strategic asset management to maximize the value of your real estate portfolio. Our approach focuses on long-term growth and risk mitigation.'
            ],
            [
                'question' => 'Financial Reporting & Compliance',
                'answer' => 'Accurate and timely financial reporting is crucial. We ensure full compliance with regulatory standards and provide transparent financial insights.'
            ],
            [
                'question' => 'Tenant Services & Experience',
                'answer' => 'We prioritize tenant satisfaction through exceptional service and community-building initiatives. Happy tenants lead to higher retention rates.'
            ],
        ];

        foreach ($faqs as $faq) {
            Faq::create($faq);
        }
    }
}
