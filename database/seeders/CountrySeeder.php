<?php

namespace Database\Seeders;

use App\Models\Country;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CountrySeeder extends Seeder {

    public function run(): void {
        $countries = [
            [
                'name_ar' => 'البحرين',
                'name_en' => 'Bahrain',
                'flag' => 'bahrain_flag.png',
                'currency' => 'BHD',
            ],
            [
                'name_ar' => 'الإمارات العربية المتحدة',
                'name_en' => 'United Arab Emirates',
                'flag' => 'uae_flag.png',
                'currency' => 'AED',
            ],
            [
                'name_ar' => 'الكويت',
                'name_en' => 'Kuwait',
                'flag' => 'kuwait_flag.png',
                'currency' => 'KWD',
            ],
            [
                'name_ar' => 'عمان',
                'name_en' => 'Oman',
                'flag' => 'oman_flag.png',
                'currency' => ' عمانيOMR',
            ],
            [
                'name_ar' => 'قطر',
                'name_en' => 'Qatar',
                'flag' => 'qatar_flag.png',
                'currency' => 'QAR',
            ],
            [
                'name_ar' => 'المملكة العربية السعودية',
                'name_en' => 'Saudi Arabia',
                'flag' => 'saudi_flag.png',
                'currency' => 'SAR',
            ],
            [
                'name_ar' => 'مصر',
                'name_en' => 'Egypt',
                'flag' => 'egypt_flag.png',
                'currency' => 'EGP',
            ],
            // يمكنك إضافة المزيد من الدول هنا
        ];

        foreach($countries as $country) {
            Country::create([
                'name_ar' => $country['name_ar'],
                'name_en' => $country['name_en'],
                'flag' => $country['flag'],
                'currency' => $country['currency'],
            ]);
        }
    }
}
