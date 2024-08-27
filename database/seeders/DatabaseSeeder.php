<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\ArivCity;
use App\Models\CarType;
use App\Models\DepCity;
use App\Models\TripData;
use App\Models\TripType;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\TripData::factory(10)->create();

        //=========================DEP CITIES==========================//

        $cairo = DepCity::factory()->create([
            'arname' => 'القاهرة',
            'enname' => 'Cairo',
        ]);

        //=========================ARIV CITIES==========================//

        $alex = ArivCity::factory()->create([
            'arname' => 'الإسكندرية',
            'enname' => 'Alexandria',
        ]);
        $mansoura = ArivCity::factory()->create([
            'arname' => 'المنصورة',
            'enname' => 'Mansoura',
        ]);
        $damietta = ArivCity::factory()->create([
            'arname' => 'دمياط',
            'enname' => 'Damietta',
        ]);
        $portSaid = ArivCity::factory()->create([
            'arname' => 'بور سعيد',
            'enname' => 'Port Said',
        ]);
        $suez = ArivCity::factory()->create([
            'arname' => 'السويس',
            'enname' => 'Suez',
        ]);
        $ismailia = ArivCity::factory()->create([
            'arname' => 'الإسماعلية',
            'enname' => 'Ismailia',
        ]);
        $zagazig = ArivCity::factory()->create([
            'arname' => 'الزقازيق',
            'enname' => 'Zagazig',
        ]);
        $tanta = ArivCity::factory()->create([
            'arname' => 'طنطا',
            'enname' => 'Tanta',
        ]);
        $kafrElSheikh = ArivCity::factory()->create([
            'arname' => 'كفر الشيخ',
            'enname' => 'Kafr El-Sheikh',
        ]);

        //=========================CAR TYPES==========================//

        $hiAce = CarType::factory()->create([
            'arname' => 'هـاى آيس',
            'enname' => 'Hi Ace',
            'seat' => 14,
            'bag' => 14,
            'image' => 'hiace'
        ]);
        $suv = CarType::factory()->create([
            'arname' => 'إس يو في',
            'enname' => 'S U V',
            'seat' => 7,
            'bag' => 7,
            'image' => 'sorento'
        ]);
        $sedan = CarType::factory()->create([
            'arname' => 'سيدان',
            'enname' => 'Sedan',
            'seat' => 3,
            'bag' => 3,
            'image' => 'toyota'
        ]);

        //=========================TRIP TYPES==========================//

        $oneWay = TripType::factory()->create([
            'arname' => 'ذهاب',
            'enname' => 'One Way'
        ]);
        $twoWays = TripType::factory()->create([
            'arname' => 'ذهاب وعودة',
            'enname' => 'Two Ways'
        ]);

        //=========================TRIP DATA==========================//

        //-------------Ciro to Alex -------------//

        TripData::factory()->create([
            'dep_cities_id' => $cairo->id,
            'ariv_cities_id' => $alex->id,
            'trip_types_id' => $oneWay->id,
            'car_types_id' => $sedan->id,
            'price' => 1100
        ]);
        TripData::factory()->create([
            'dep_cities_id' => $cairo->id,
            'ariv_cities_id' => $alex->id,
            'trip_types_id' => $twoWays->id,
            'car_types_id' => $sedan->id,
            'price' => 2200
        ]);

        TripData::factory()->create([
            'dep_cities_id' => $cairo->id,
            'ariv_cities_id' => $alex->id,
            'trip_types_id' => $oneWay->id,
            'car_types_id' => $suv->id,
            'price' => 1300
        ]);
        TripData::factory()->create([
            'dep_cities_id' => $cairo->id,
            'ariv_cities_id' => $alex->id,
            'trip_types_id' => $twoWays->id,
            'car_types_id' => $suv->id,
            'price' => 2650
        ]);

        TripData::factory()->create([
            'dep_cities_id' => $cairo->id,
            'ariv_cities_id' => $alex->id,
            'trip_types_id' => $oneWay->id,
            'car_types_id' => $hiAce->id,
            'price' => 2400
        ]);
        TripData::factory()->create([
            'dep_cities_id' => $cairo->id,
            'ariv_cities_id' => $alex->id,
            'trip_types_id' => $twoWays->id,
            'car_types_id' => $hiAce->id,
            'price' => 4800
        ]);

        //-------------Ciro to Mansoura -------------//

        TripData::factory()->create([
            'dep_cities_id' => $cairo->id,
            'ariv_cities_id' => $mansoura->id,
            'trip_types_id' => $oneWay->id,
            'car_types_id' => $sedan->id,
            'price' => 1000
        ]);
        TripData::factory()->create([
            'dep_cities_id' => $cairo->id,
            'ariv_cities_id' => $mansoura->id,
            'trip_types_id' => $twoWays->id,
            'car_types_id' => $sedan->id,
            'price' => 2000
        ]);

        TripData::factory()->create([
            'dep_cities_id' => $cairo->id,
            'ariv_cities_id' => $mansoura->id,
            'trip_types_id' => $oneWay->id,
            'car_types_id' => $suv->id,
            'price' => 1200
        ]);
        TripData::factory()->create([
            'dep_cities_id' => $cairo->id,
            'ariv_cities_id' => $mansoura->id,
            'trip_types_id' => $twoWays->id,
            'car_types_id' => $suv->id,
            'price' => 2400
        ]);

        TripData::factory()->create([
            'dep_cities_id' => $cairo->id,
            'ariv_cities_id' => $mansoura->id,
            'trip_types_id' => $oneWay->id,
            'car_types_id' => $hiAce->id,
            'price' => 2000
        ]);
        TripData::factory()->create([
            'dep_cities_id' => $cairo->id,
            'ariv_cities_id' => $mansoura->id,
            'trip_types_id' => $twoWays->id,
            'car_types_id' => $hiAce->id,
            'price' => 4000
        ]);

        //-------------Ciro to Damietta -------------//

        TripData::factory()->create([
            'dep_cities_id' => $cairo->id,
            'ariv_cities_id' => $damietta->id,
            'trip_types_id' => $oneWay->id,
            'car_types_id' => $sedan->id,
            'price' => 1350
        ]);
        TripData::factory()->create([
            'dep_cities_id' => $cairo->id,
            'ariv_cities_id' => $mansoura->id,
            'trip_types_id' => $twoWays->id,
            'car_types_id' => $sedan->id,
            'price' => 1700
        ]);

        TripData::factory()->create([
            'dep_cities_id' => $cairo->id,
            'ariv_cities_id' => $damietta->id,
            'trip_types_id' => $oneWay->id,
            'car_types_id' => $suv->id,
            'price' => 1600
        ]);
        TripData::factory()->create([
            'dep_cities_id' => $cairo->id,
            'ariv_cities_id' => $damietta->id,
            'trip_types_id' => $twoWays->id,
            'car_types_id' => $suv->id,
            'price' => 3200
        ]);

        TripData::factory()->create([
            'dep_cities_id' => $cairo->id,
            'ariv_cities_id' => $damietta->id,
            'trip_types_id' => $oneWay->id,
            'car_types_id' => $hiAce->id,
            'price' => 2700
        ]);
        TripData::factory()->create([
            'dep_cities_id' => $cairo->id,
            'ariv_cities_id' => $damietta->id,
            'trip_types_id' => $twoWays->id,
            'car_types_id' => $hiAce->id,
            'price' => 5400
        ]);

        //-------------Ciro to Port Said -------------//

        TripData::factory()->create([
            'dep_cities_id' => $cairo->id,
            'ariv_cities_id' => $portSaid->id,
            'trip_types_id' => $oneWay->id,
            'car_types_id' => $sedan->id,
            'price' => 1250
        ]);
        TripData::factory()->create([
            'dep_cities_id' => $cairo->id,
            'ariv_cities_id' => $portSaid->id,
            'trip_types_id' => $twoWays->id,
            'car_types_id' => $sedan->id,
            'price' => 2500
        ]);

        TripData::factory()->create([
            'dep_cities_id' => $cairo->id,
            'ariv_cities_id' => $portSaid->id,
            'trip_types_id' => $oneWay->id,
            'car_types_id' => $suv->id,
            'price' => 1500
        ]);
        TripData::factory()->create([
            'dep_cities_id' => $cairo->id,
            'ariv_cities_id' => $portSaid->id,
            'trip_types_id' => $twoWays->id,
            'car_types_id' => $suv->id,
            'price' => 3000
        ]);

        TripData::factory()->create([
            'dep_cities_id' => $cairo->id,
            'ariv_cities_id' => $portSaid->id,
            'trip_types_id' => $oneWay->id,
            'car_types_id' => $hiAce->id,
            'price' => 2500
        ]);
        TripData::factory()->create([
            'dep_cities_id' => $cairo->id,
            'ariv_cities_id' => $portSaid->id,
            'trip_types_id' => $twoWays->id,
            'car_types_id' => $hiAce->id,
            'price' => 5000
        ]);

        //-------------Ciro to Suez -------------//

        TripData::factory()->create([
            'dep_cities_id' => $cairo->id,
            'ariv_cities_id' => $suez->id,
            'trip_types_id' => $oneWay->id,
            'car_types_id' => $sedan->id,
            'price' => 1000
        ]);
        TripData::factory()->create([
            'dep_cities_id' => $cairo->id,
            'ariv_cities_id' => $suez->id,
            'trip_types_id' => $twoWays->id,
            'car_types_id' => $sedan->id,
            'price' => 2000
        ]);

        TripData::factory()->create([
            'dep_cities_id' => $cairo->id,
            'ariv_cities_id' => $suez->id,
            'trip_types_id' => $oneWay->id,
            'car_types_id' => $suv->id,
            'price' => 1200
        ]);
        TripData::factory()->create([
            'dep_cities_id' => $cairo->id,
            'ariv_cities_id' => $suez->id,
            'trip_types_id' => $twoWays->id,
            'car_types_id' => $suv->id,
            'price' => 2400
        ]);

        TripData::factory()->create([
            'dep_cities_id' => $cairo->id,
            'ariv_cities_id' => $suez->id,
            'trip_types_id' => $oneWay->id,
            'car_types_id' => $hiAce->id,
            'price' => 2000
        ]);
        TripData::factory()->create([
            'dep_cities_id' => $cairo->id,
            'ariv_cities_id' => $suez->id,
            'trip_types_id' => $twoWays->id,
            'car_types_id' => $hiAce->id,
            'price' => 4000
        ]);

        //-------------Ciro to Ismailia -------------//

        TripData::factory()->create([
            'dep_cities_id' => $cairo->id,
            'ariv_cities_id' => $ismailia->id,
            'trip_types_id' => $oneWay->id,
            'car_types_id' => $sedan->id,
            'price' => 1000
        ]);
        TripData::factory()->create([
            'dep_cities_id' => $cairo->id,
            'ariv_cities_id' => $ismailia->id,
            'trip_types_id' => $twoWays->id,
            'car_types_id' => $sedan->id,
            'price' => 2000
        ]);

        TripData::factory()->create([
            'dep_cities_id' => $cairo->id,
            'ariv_cities_id' => $ismailia->id,
            'trip_types_id' => $oneWay->id,
            'car_types_id' => $suv->id,
            'price' => 1200
        ]);
        TripData::factory()->create([
            'dep_cities_id' => $cairo->id,
            'ariv_cities_id' => $ismailia->id,
            'trip_types_id' => $twoWays->id,
            'car_types_id' => $suv->id,
            'price' => 2400
        ]);

        TripData::factory()->create([
            'dep_cities_id' => $cairo->id,
            'ariv_cities_id' => $ismailia->id,
            'trip_types_id' => $oneWay->id,
            'car_types_id' => $hiAce->id,
            'price' => 2000
        ]);
        TripData::factory()->create([
            'dep_cities_id' => $cairo->id,
            'ariv_cities_id' => $ismailia->id,
            'trip_types_id' => $twoWays->id,
            'car_types_id' => $hiAce->id,
            'price' => 4000
        ]);

        //-------------Ciro to Zagazig -------------//

        TripData::factory()->create([
            'dep_cities_id' => $cairo->id,
            'ariv_cities_id' => $zagazig->id,
            'trip_types_id' => $oneWay->id,
            'car_types_id' => $sedan->id,
            'price' => 1000
        ]);
        TripData::factory()->create([
            'dep_cities_id' => $cairo->id,
            'ariv_cities_id' => $zagazig->id,
            'trip_types_id' => $twoWays->id,
            'car_types_id' => $sedan->id,
            'price' => 2000
        ]);

        TripData::factory()->create([
            'dep_cities_id' => $cairo->id,
            'ariv_cities_id' => $zagazig->id,
            'trip_types_id' => $oneWay->id,
            'car_types_id' => $suv->id,
            'price' => 1200
        ]);
        TripData::factory()->create([
            'dep_cities_id' => $cairo->id,
            'ariv_cities_id' => $zagazig->id,
            'trip_types_id' => $twoWays->id,
            'car_types_id' => $suv->id,
            'price' => 2400
        ]);

        TripData::factory()->create([
            'dep_cities_id' => $cairo->id,
            'ariv_cities_id' => $zagazig->id,
            'trip_types_id' => $oneWay->id,
            'car_types_id' => $hiAce->id,
            'price' => 2000
        ]);
        TripData::factory()->create([
            'dep_cities_id' => $cairo->id,
            'ariv_cities_id' => $zagazig->id,
            'trip_types_id' => $twoWays->id,
            'car_types_id' => $hiAce->id,
            'price' => 4000
        ]);

        //-------------Ciro to Tanta -------------//

        TripData::factory()->create([
            'dep_cities_id' => $cairo->id,
            'ariv_cities_id' => $tanta->id,
            'trip_types_id' => $oneWay->id,
            'car_types_id' => $sedan->id,
            'price' => 1000
        ]);
        TripData::factory()->create([
            'dep_cities_id' => $cairo->id,
            'ariv_cities_id' => $tanta->id,
            'trip_types_id' => $twoWays->id,
            'car_types_id' => $sedan->id,
            'price' => 2000
        ]);

        TripData::factory()->create([
            'dep_cities_id' => $cairo->id,
            'ariv_cities_id' => $tanta->id,
            'trip_types_id' => $oneWay->id,
            'car_types_id' => $suv->id,
            'price' => 1200
        ]);
        TripData::factory()->create([
            'dep_cities_id' => $cairo->id,
            'ariv_cities_id' => $tanta->id,
            'trip_types_id' => $twoWays->id,
            'car_types_id' => $suv->id,
            'price' => 2400
        ]);

        TripData::factory()->create([
            'dep_cities_id' => $cairo->id,
            'ariv_cities_id' => $tanta->id,
            'trip_types_id' => $oneWay->id,
            'car_types_id' => $hiAce->id,
            'price' => 2000
        ]);
        TripData::factory()->create([
            'dep_cities_id' => $cairo->id,
            'ariv_cities_id' => $tanta->id,
            'trip_types_id' => $twoWays->id,
            'car_types_id' => $hiAce->id,
            'price' => 4000
        ]);

        //-------------Ciro to Kafr El-Sheikh -------------//

        TripData::factory()->create([
            'dep_cities_id' => $cairo->id,
            'ariv_cities_id' => $kafrElSheikh->id,
            'trip_types_id' => $oneWay->id,
            'car_types_id' => $sedan->id,
            'price' => 1250
        ]);
        TripData::factory()->create([
            'dep_cities_id' => $cairo->id,
            'ariv_cities_id' => $kafrElSheikh->id,
            'trip_types_id' => $twoWays->id,
            'car_types_id' => $sedan->id,
            'price' => 2500
        ]);

        TripData::factory()->create([
            'dep_cities_id' => $cairo->id,
            'ariv_cities_id' => $kafrElSheikh->id,
            'trip_types_id' => $oneWay->id,
            'car_types_id' => $suv->id,
            'price' => 1500
        ]);
        TripData::factory()->create([
            'dep_cities_id' => $cairo->id,
            'ariv_cities_id' => $kafrElSheikh->id,
            'trip_types_id' => $twoWays->id,
            'car_types_id' => $suv->id,
            'price' => 3000
        ]);

        TripData::factory()->create([
            'dep_cities_id' => $cairo->id,
            'ariv_cities_id' => $kafrElSheikh->id,
            'trip_types_id' => $oneWay->id,
            'car_types_id' => $hiAce->id,
            'price' => 2500
        ]);
        TripData::factory()->create([
            'dep_cities_id' => $cairo->id,
            'ariv_cities_id' => $kafrElSheikh->id,
            'trip_types_id' => $twoWays->id,
            'car_types_id' => $hiAce->id,
            'price' => 5000
        ]);

    }
}
