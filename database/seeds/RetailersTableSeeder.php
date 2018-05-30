<?php

use Illuminate\Database\Seeder;

class RetailersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('retailers')->insert([
            'name' => 'Hays Trailer Sales',
            'website' => 'https://www.haystrailersales.com',
            'logo_url' => '/img/retailers/hays-trailer-sales.jpg'
        ]);

        DB::table('retailers')->insert([
            'name' => 'CANADA - 2W Livestock Equipment',
            'website' => 'https://www.2wequipment.com',
            'logo_url' => '/img/retailers/canada-livestock-equipment.jpg'
        ]);

        DB::table('retailers')->insert([
            'name' => 'NRS World',
            'website' => 'http://www.nrsworld.com/all-products/browse/keyword/chute/brand/chute-help',
            'logo_url' => '/img/retailers/nrsworld.png'
        ]);

        DB::table('retailers')->insert([
            'name' => 'Teskey\'s',
            'website' => 'http://www.teskeys.com',
            'logo_url' => '/img/retailers/teskeys.png'
        ]);

        DB::table('retailers')->insert([
            'name' => 'Ag-Med Supply Company, LLC',
            'website' => 'https://www.agmedsupply.com',
            'logo_url' => '/img/retailers/ag-med.png'
        ]);

        DB::table('retailers')->insert([
            'name' => 'Western Ranch Supply',
            'website' => 'http://www.westernranchsupply.com/index.html',
            'logo_url' => '/img/retailers/western-ranch-supply.png'
        ]);

        DB::table('retailers')->insert([
            'name' => 'Dennards',
            'website' => 'http://dennards.net',
            'logo_url' => '/img/retailers/dennards.png'
        ]);

        DB::table('retailers')->insert([
            'name' => 'Korral Supply',
            'website' => 'http://www.korralsupply.com/inventory/?catid=5',
            'logo_url' => '/img/retailers/korralsupply.jpg'
        ]);

        DB::table('retailers')->insert([
            'name' => 'Double D Western World',
            'website' => 'https://www.facebook.com/doubledwickenburg/',
            'logo_url' => '/img/retailers/double-d.png'
        ]);

        DB::table('retailers')->insert([
            'name' => 'Jax Mercantile',
            'website' => 'https://www.jaxmercantile.com/stores/',
            'logo_url' => '/img/retailers/jax.png'
        ]);

        DB::table('retailers')->insert([
            'name' => 'C-A-L Ranch',
            'website' => 'http://www.calranch.com/search/?keyword=chute%20help%20and%20easy%20now&operator=OR',
            'logo_url' => '/img/retailers/cal-ranch.png'
        ]);

        DB::table('retailers')->insert([
            'name' => 'Diamond B Tractors',
            'website' => 'http://diamondbtractors.com/DBT/Home',
            'logo_url' => '/img/retailers/diamond-b.jpg'
        ]);
        
        DB::table('retailers')->insert([
            'name' => 'North Country Mercantile',
            'website' => 'http://northcountrysupply.com/',
            'logo_url' => '/img/retailers/north-country.png'
        ]);
        
        DB::table('retailers')->insert([
            'name' => 'Monighetti\'s One Stop Livestock Supplies, Inc.',
            'website' => 'https://www.facebook.com/Monighettis-One-Stop-Livestock-Supplies-Inc-117578912109/',
            'logo_url' => '/img/retailers/monighettis.png'
        ]);

        DB::table('retailers')->insert([
            'name' => 'P&P Trailer Sales',
            'website' => 'http://www.pandpsales.com',
            'logo_url' => '/img/retailers/p-and-p.png'
        ]);

        DB::table('retailers')->insert([
            'name' => 'Circle P Ranch Supply',
            'website' => 'https://www.facebook.com/pages/Circle-P-Ranch-Supply/232084476827237',
            'logo_url' => '/img/retailers/circle-p.jpg'
        ]);

        DB::table('retailers')->insert([
            'name' => 'Kovac Ranch Equipment',
            'website' => 'http://kovacranchequipment.com/fully-automatic-chute-help/',
            'logo_url' => '/img/retailers/kovac.png'
        ]);

        DB::table('retailers')->insert([
            'name' => 'Landmark Mercantile',
            'website' => 'http://www.landmarkmercantile.com',
            'logo_url' => '/img/retailers/landmark.png'
        ]);

        DB::table('retailers')->insert([
            'name' => 'Champion Ranchers Construction & Store',
            'website' => 'http://champranchconstruct.com',
            'logo_url' => '/img/retailers/crc.png'
        ]);

        DB::table('retailers')->insert([
            'name' => 'Big R Stores',
            'website' => 'http://www.bigr.com',
            'logo_url' => '/img/retailers/bigr.png'
        ]);

        DB::table('retailers')->insert([
            'name' => 'Dyer Equipment Sales',
            'website' => 'http://www.dyerequipmentsales.com',
            'logo_url' => '/img/retailers/dyerequipment.png'
        ]);

        DB::table('retailers')->insert([
            'name' => 'Triple R Tack',
            'website' => 'https://www.facebook.com/pages/Triple-R-Tack/133460086704378',
            'logo_url' => '/img/retailers/triple-r-tack.jpg'
        ]);

        DB::table('retailers')->insert([
            'name' => 'S & G Sales',
            'website' => 'https://www.chutehelp.com',
            'logo_url' => '/img/retailers/s-and-g.png'
        ]);

        DB::table('retailers')->insert([
            'name' => 'Stillwater Milling',
            'website' => 'http://www.stillwatermill.com',
            'logo_url' => '/img/retailers/a-and-m.jpg'
        ]);

        DB::table('retailers')->insert([
            'name' => 'Steve Regan Company',
            'website' => 'http://www.steveregan.com',
            'logo_url' => '/img/retailers/steve-regan.png'
        ]);

        DB::table('retailers')->insert([
            'name' => 'K Ranch Arena Australia',
            'website' => 'https://www.facebook.com/K-Ranch-Arena-583186025157393/?fref=ts',
            'logo_url' => '/img/retailers/k-arena.png'
        ]);
    }
}
