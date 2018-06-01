<?php

use App\Retailer;
use App\Location;

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

        $retailer = new Retailer;
        $retailer->name = 'Hays Trailer Sales';
        $retailer->website = 'https://www.haystrailersales.com';
        $retailer->logo_url = '/img/retailers/hays-trailer-sales.jpg';
        $retailer->save();

        $location1 = new Location;
        $location1->retailer_id = $retailer->id;
        $location1->address = "8449 E Main St";
        $location1->city = "Mesa";
        $location1->state = "AZ";
        $location1->zip_code = "85206";
        $location1->phone = "(480) 357-1018";
        $location1->save();

        $retailer = new Retailer;
        $retailer->name = 'CANADA - 2W Livestock Equipment';
        $retailer->website = 'https://www.2wequipment.com';
        $retailer->logo_url = '/img/retailers/canada-livestock-equipment.jpg';
        $retailer->save();

        $location1 = new Location;
        $location1->retailer_id = $retailer->id;
        $location1->address = "1530 21 Ave";
        $location1->city = "Nanton";
        $location1->state = "AB";
        $location1->zip_code = "0";
        $location1->phone = "403-646-2133";
        $location1->save();

        $retailer = new Retailer;
        $retailer->name = 'NRS World';
        $retailer->website = 'http://www.nrsworld.com/all-products/browse/keyword/chute/brand/chute-help';
        $retailer->logo_url = '/img/retailers/nrsworld.png';
        $retailer->save();

        $retailer = new Retailer;
        $retailer->name = 'Teskey\'s';
        $retailer->website = 'http://www.teskeys.com';
        $retailer->logo_url = '/img/retailers/teskeys.png';
        $retailer->save();

        $location1 = new Location;
        $location1->retailer_id = $retailer->id;
        $location1->address = "3001 West I-20";
        $location1->city = "Weatherford";
        $location1->state = "TX";
        $location1->zip_code = "76087";
        $location1->phone = "888-955-2955";
        $location1->save();

        $retailer = new Retailer;
        $retailer->name = 'Ag-Med Supply Company, LLC';
        $retailer->website = 'https://www.agmedsupply.com';
        $retailer->logo_url = '/img/retailers/ag-med.png';
        $retailer->save();

        $location1 = new Location;
        $location1->retailer_id = $retailer->id;
        $location1->address = "1552 US Hwy 59 N.";
        $location1->city = "Goliad";
        $location1->state = "TX";
        $location1->zip_code = "77963";
        $location1->phone = "(361)645-2990";
        $location1->save();

        $retailer = new Retailer;
        $retailer->name = 'Western Ranch Supply';
        $retailer->website = 'http://www.westernranchsupply.com/index.html';
        $retailer->logo_url = '/img/retailers/western-ranch-supply.png';
        $retailer->save();

        $location1 = new Location;
        $location1->retailer_id = $retailer->id;
        $location1->address = "7305 Entry Way Dr.";
        $location1->city = "Billings";
        $location1->state = "MT";
        $location1->zip_code = "59101";
        $location1->phone = "800-548-7270";
        $location1->save();

        $location2 = new Location;
        $location2->retailer_id = $retailer->id;
        $location2->address = "1213 3rd St. North West";
        $location2->city = "Great Falls";
        $location2->state = "MT";
        $location2->zip_code = "59403";
        $location2->phone = "800-548-5855";
        $location2->save();

        $retailer = new Retailer;
        $retailer->name = 'Dennards';
        $retailer->website = 'http://dennards.net';
        $retailer->logo_url = '/img/retailers/dennards.png';
        $retailer->save();

        $location1 = new Location;
        $location1->retailer_id = $retailer->id;
        $location1->address = "8767 S. Hwy 377";
        $location1->city = "Pilot Point";
        $location1->state = "TX";
        $location1->zip_code = "76258";
        $location1->phone = "940-365-3636";
        $location1->save();

        $location2 = new Location;
        $location2->retailer_id = $retailer->id;
        $location2->address = "3716 Town Center";
        $location2->city = "Sherman";
        $location2->state = "TX";
        $location2->zip_code = "75092";
        $location2->phone = "903-870-1802";
        $location2->save();

        $location3 = new Location;
        $location3->retailer_id = $retailer->id;
        $location3->address = "541 Hwy 377 N";
        $location3->city = "Whitesboro";
        $location3->state = "TX";
        $location3->zip_code = "76273";
        $location3->phone = "903-564-3386";
        $location3->save();

        $retailer = new Retailer;
        $retailer->name = 'Korral Supply';
        $retailer->website = 'http://www.korralsupply.com/inventory/?catid=5';
        $retailer->logo_url = '/img/retailers/korralsupply.jpg';
        $retailer->save();

        $location1 = new Location;
        $location1->retailer_id = $retailer->id;
        $location1->address = "20501 72nd St SW";
        $location1->city = "Douglas";
        $location1->state = "ND";
        $location1->zip_code = "58735";
        $location1->phone = "(701) 722-3695";
        $location1->save();

        $retailer = new Retailer;
        $retailer->name = 'Double D Western World';
        $retailer->website = 'https://www.facebook.com/doubledwickenburg/';
        $retailer->logo_url = '/img/retailers/double-d.png';
        $retailer->save();

        $location1 = new Location;
        $location1->retailer_id = $retailer->id;
        $location1->address = "955 W Wickenburg Way";
        $location1->city = "Wickenburg";
        $location1->state = "AZ";
        $location1->zip_code = "85390";
        $location1->phone = "(928) 684-7987";
        $location1->save();

        $retailer = new Retailer;
        $retailer->name = 'Jax Mercantile';
        $retailer->website = 'https://www.jaxmercantile.com/stores/';
        $retailer->logo_url = '/img/retailers/jax.png';
        $retailer->save();

        $location1 = new Location;
        $location1->retailer_id = $retailer->id;
        $location1->address = "1000 N. US Highway 287";
        $location1->city = "Fort Collins";
        $location1->state = "CO";
        $location1->zip_code = "80524";
        $location1->phone = "970-484-2221";
        $location1->save();

        $location2 = new Location;
        $location2->retailer_id = $retailer->id;
        $location2->address = "5005 W. 120th Ave.";
        $location2->city = "Broomfield";
        $location2->state = "CO";
        $location2->zip_code = "80020";
        $location2->phone = "303-439-1000";
        $location2->save();

        $retailer = new Retailer;
        $retailer->name = 'C-A-L Ranch';
        $retailer->website = 'http://www.calranch.com/search/?keyword=chute%20help%20and%20easy%20now&operator=OR';
        $retailer->logo_url = '/img/retailers/cal-ranch.png';
        $retailer->save();

        $location = new Location;
        $location->retailer_id = $retailer->id;
        $location->address = "1116 E Florence Blvd";
        $location->city = "Casa Grande";
        $location->state = "AZ";
        $location->zip_code = "85122";
        $location->phone = "520-316-7980";
        $location->save();

        $location = new Location;
        $location->retailer_id = $retailer->id;
        $location->address = "2530 N. 4th Street";
        $location->city = "Flagstaff";
        $location->state = "AZ";
        $location->zip_code = "86004";
        $location->phone = "(928) 526-4300";
        $location->save();

        $location = new Location;
        $location->retailer_id = $retailer->id;
        $location->address = "2075 N Pebble Creek Parkway";
        $location->city = "Goodyear";
        $location->state = "AZ";
        $location->zip_code = "85395";
        $location->phone = "602-474-2270";
        $location->save();

        $location = new Location;
        $location->retailer_id = $retailer->id;
        $location->address = "1048 Willow Creek Road";
        $location->city = "Prescott";
        $location->state = "AZ";
        $location->zip_code = "86301";
        $location->phone = "(928) 717-5408";
        $location->save();

        $location = new Location;
        $location->retailer_id = $retailer->id;
        $location->address = "161 E. Deuce of Clubs Road";
        $location->city = "Show Low";
        $location->state = "AZ";
        $location->zip_code = "85901";
        $location->phone = "(928) 251-1315";
        $location->save();

        $location = new Location;
        $location->retailer_id = $retailer->id;
        $location->address = "2849 E 850 N";
        $location->city = "St George";
        $location->state = "UT";
        $location->zip_code = "84790";
        $location->phone = "(435) 634-6910";
        $location->save();

        $location = new Location;
        $location->retailer_id = $retailer->id;
        $location->address = "232 N. Jones Blvd";
        $location->city = "Las Vegas";
        $location->state = "NV";
        $location->zip_code = "89107";
        $location->phone = "(702) 430-7002";
        $location->save();
        
        $retailer = new Retailer;
        $retailer->name = 'Diamond B Tractors';
        $retailer->website = 'http://diamondbtractors.com/DBT/Home';
        $retailer->logo_url = '/img/retailers/diamond-b.jpg';
        $retailer->save();

        $location = new Location;
        $location->retailer_id = $retailer->id;
        $location->address = "16029 Northwest Blvd";
        $location->city = "Robstown";
        $location->state = "TX";
        $location->zip_code = "78380";
        $location->phone = "(361) 767-2223";
        $location->save();

        $retailer = new Retailer;
        $retailer->name = 'North Country Mercantile';
        $retailer->website = 'http://northcountrysupply.com/';
        $retailer->logo_url = '/img/retailers/north-country.png';
        $retailer->save();

        $location = new Location;
        $location->retailer_id = $retailer->id;
        $location->address = "2000 20th Ave. SE";
        $location->city = "Minot";
        $location->state = "ND";
        $location->zip_code = "58701";
        $location->phone = "701-838-0081";
        $location->save();

        $retailer = new Retailer;
        $retailer->name = 'Monighetti\'s One Stop Livestock Supplies, Inc.';
        $retailer->website = 'https://www.facebook.com/Monighettis-One-Stop-Livestock-Supplies-Inc-117578912109/';
        $retailer->logo_url = '/img/retailers/monighettis.png';
        $retailer->save();
        
        $location = new Location;
        $location->retailer_id = $retailer->id;
        $location->address = "545 Avenue of Flags";
        $location->city = "Buellton";
        $location->state = "CA";
        $location->zip_code = "93427";
        $location->phone = "(805) 688-1242";
        $location->save();

        $retailer = new Retailer;
        $retailer->name = 'P&P Trailer Sales';
        $retailer->website = 'http://www.pandpsales.com';
        $retailer->logo_url = '/img/retailers/p-and-p.png';
        $retailer->save();

        $location = new Location;
        $location->retailer_id = $retailer->id;
        $location->address = "33402 US 290 West";
        $location->city = "Hockley";
        $location->state = "TX";
        $location->zip_code = "77447";
        $location->phone = "(832) 334-0185";
        $location->save();

        $location = new Location;
        $location->retailer_id = $retailer->id;
        $location->address = "2890 Melba Lane Norman";
        $location->city = "Norman";
        $location->state = "OK";
        $location->zip_code = "73072";
        $location->phone = "(405) 488-2600";
        $location->save();

        $location = new Location;
        $location->retailer_id = $retailer->id;
        $location->address = "4212 Red Bluff Road";
        $location->city = "Pasadena";
        $location->state = "TX";
        $location->zip_code = "77503";
        $location->phone = "(713) 920-1000";
        $location->save();

        $location = new Location;
        $location->retailer_id = $retailer->id;
        $location->address = "23687 IH 10";
        $location->city = "Rose City";
        $location->state = "TX";
        $location->zip_code = "77662";
        $location->phone = "(409) 769-7992";
        $location->save();

        $location = new Location;
        $location->retailer_id = $retailer->id;
        $location->address = "14545 S IH 35";
        $location->city = "Salado";
        $location->state = "TX";
        $location->zip_code = "76571";
        $location->phone = "(254) 947-1525";
        $location->save();
        
        $retailer = new Retailer;
        $retailer->name = 'Circle P Ranch Supply';
        $retailer->website = 'https://www.facebook.com/pages/Circle-P-Ranch-Supply/232084476827237';
        $retailer->logo_url = '/img/retailers/circle-p.jpg';
        $retailer->save();
        
        $location = new Location;
        $location->retailer_id = $retailer->id;
        $location->address = "6200 Golder Rd";
        $location->city = "Odessa";
        $location->state = "TX";
        $location->zip_code = "79764";
        $location->phone = "432-362-3222";
        $location->save();

        $retailer = new Retailer;
        $retailer->name = 'Kovac Ranch Equipment';
        $retailer->website = 'http://kovacranchequipment.com/fully-automatic-chute-help/';
        $retailer->logo_url = '/img/retailers/kovac.png';
        $retailer->save();

        $location = new Location;
        $location->retailer_id = $retailer->id;
        $location->address = "2636 N. Argyle Ave #101";
        $location->city = "Fresno";
        $location->state = "CA";
        $location->zip_code = "93727";
        $location->phone = "844-268-0679";
        $location->save();

        $location = new Location;
        $location->retailer_id = $retailer->id;
        $location->address = "7985 Engineer Rd";
        $location->city = "San Diego";
        $location->state = "CA";
        $location->zip_code = "92111";
        $location->phone = "844-268-0679";
        $location->save();

        $retailer = new Retailer;
        $retailer->name = 'Landmark Mercantile';
        $retailer->website = 'http://www.landmarkmercantile.com';
        $retailer->logo_url = '/img/retailers/landmark.png';
        $retailer->save();

        $location = new Location;
        $location->retailer_id = $retailer->id;
        $location->address = "12000 Stern Dr.";
        $location->city = "Mesquite";
        $location->state = "NM";
        $location->zip_code = "88048";
        $location->phone = "575-993-0388";
        $location->save();

        $retailer = new Retailer;
        $retailer->name = 'Champion Ranchers Construction & Store';
        $retailer->website = 'http://champranchconstruct.com';
        $retailer->logo_url = '/img/retailers/crc.png';
        $retailer->save();

        $location = new Location;
        $location->retailer_id = $retailer->id;
        $location->address = "980 Bus 290";
        $location->city = "Hempstead";
        $location->state = "TX";
        $location->zip_code = "77445";
        $location->phone = "281-615-0299";
        $location->save();

        $retailer = new Retailer;
        $retailer->name = 'Big R Stores';
        $retailer->website = 'http://www.bigr.com';
        $retailer->logo_url = '/img/retailers/bigr.png';
        $retailer->save();
        
        $location = new Location;
        $location->retailer_id = $retailer->id;
        $location->address = "148 Craft Drive";
        $location->city = "Alamosa";
        $location->state = "CO";
        $location->zip_code = "81101";
        $location->phone = "719-587-0435";
        $location->save();

        $location = new Location;
        $location->retailer_id = $retailer->id;
        $location->address = "1711 Fremont Dr";
        $location->city = "Canon City";
        $location->state = "CO";
        $location->zip_code = "81212";
        $location->phone = "719-275-3250";
        $location->save();

        $location = new Location;
        $location->retailer_id = $retailer->id;
        $location->address = "307 Worth Street";
        $location->city = "Center";
        $location->state = "CO";
        $location->zip_code = "81125";
        $location->phone = "719-754-3983";
        $location->save();

        $location = new Location;
        $location->retailer_id = $retailer->id;
        $location->address = "5845 Constitution Ave";
        $location->city = "Colorado Springs";
        $location->state = "CO";
        $location->zip_code = "80915";
        $location->phone = "719-591-1830";
        $location->save();

        $location = new Location;
        $location->retailer_id = $retailer->id;
        $location->address = "165 Fontaine Blvd";
        $location->city = "Colorado Springs";
        $location->state = "CO";
        $location->zip_code = "80911";
        $location->phone = "719-390-9130";
        $location->save();

        $location = new Location;
        $location->retailer_id = $retailer->id;
        $location->address = "25557 Conifer Rd Building 7B";
        $location->city = "Conifer";
        $location->state = "CO";
        $location->zip_code = "80433";
        $location->phone = "303-816-7124";
        $location->save();

        $location = new Location;
        $location->retailer_id = $retailer->id;
        $location->address = "1319 Main Street";
        $location->city = "Cortez";
        $location->state = "CO";
        $location->zip_code = "81321";
        $location->phone = "970-564-5952";
        $location->save();

        $location = new Location;
        $location->retailer_id = $retailer->id;
        $location->address = "1400 Guylane Plaza";
        $location->city = "Dumas";
        $location->state = "TX";
        $location->zip_code = "79029";
        $location->phone = "806-935-7700";
        $location->save();

        $location = new Location;
        $location->retailer_id = $retailer->id;
        $location->address = "650 Beverly Street";
        $location->city = "Elizabeth";
        $location->state = "CO";
        $location->zip_code = "80107";
        $location->phone = "303-646-6936";
        $location->save();

        $location = new Location;
        $location->retailer_id = $retailer->id;
        $location->address = "30931 Stagecoach Blvd";
        $location->city = "Evergreen";
        $location->state = "CO";
        $location->zip_code = "80439";
        $location->phone = "303-674-6702";
        $location->save();

        $location = new Location;
        $location->retailer_id = $retailer->id;
        $location->address = "14155 East Hwy 24";
        $location->city = "Peyton";
        $location->state = "CO";
        $location->zip_code = "80831";
        $location->phone = "719-749-9136";
        $location->save();

        $location = new Location;
        $location->retailer_id = $retailer->id;
        $location->address = "908 E Main St";
        $location->city = "Farmington";
        $location->state = "NM";
        $location->zip_code = "87401";
        $location->phone = "505-326-7711";
        $location->save();

        $location = new Location;
        $location->retailer_id = $retailer->id;
        $location->address = "26980 West Hwy 50";
        $location->city = "La Junta";
        $location->state = "CO";
        $location->zip_code = "81050";
        $location->phone = "719-384-7721";
        $location->save();

        $location = new Location;
        $location->retailer_id = $retailer->id;
        $location->address = "1010 Cherry Street";
        $location->city = "La Veta";
        $location->state = "CO";
        $location->zip_code = "81055";
        $location->phone = "719-742-3071";
        $location->save();

        $location = new Location;
        $location->retailer_id = $retailer->id;
        $location->address = "8625 US Hwy 50";
        $location->city = "Lamar";
        $location->state = "CO";
        $location->zip_code = "81052";
        $location->phone = "719-336-7728";
        $location->save();

        $location = new Location;
        $location->retailer_id = $retailer->id;
        $location->address = "206 Mills Ave";
        $location->city = "Las Vegas";
        $location->state = "NV";
        $location->zip_code = "87701";
        $location->phone = "505-425-1111";
        $location->save();

        $location = new Location;
        $location->retailer_id = $retailer->id;
        $location->address = "150 7th Street";
        $location->city = "Limon";
        $location->state = "CO";
        $location->zip_code = "80828";
        $location->phone = "719-775-9321";
        $location->save();

        $location = new Location;
        $location->retailer_id = $retailer->id;
        $location->address = "840 Spanish Bit Drive";
        $location->city = "Monument";
        $location->state = "CO";
        $location->zip_code = "80921";
        $location->phone = "719-488-0000";
        $location->save();

        $location = new Location;
        $location->retailer_id = $retailer->id;
        $location->address = "1020 Bonforte Blvd";
        $location->city = "Pueblo";
        $location->state = "CO";
        $location->zip_code = "81001";
        $location->phone = "719-542-1835";
        $location->save();

        $location = new Location;
        $location->retailer_id = $retailer->id;
        $location->address = "725 St Michaels Drive";
        $location->city = "Santa Fe";
        $location->state = "NM";
        $location->zip_code = "87505";
        $location->phone = "505-820-0895";
        $location->save();

        $location = new Location;
        $location->retailer_id = $retailer->id;
        $location->address = "27520 US Hwy 287";
        $location->city = "Springfield";
        $location->state = "CO";
        $location->zip_code = "81073";
        $location->phone = "719-523-0137";
        $location->save();

        $location = new Location;
        $location->retailer_id = $retailer->id;
        $location->address = "2208 Freedom Rd";
        $location->city = "Trinidad";
        $location->state = "CO";
        $location->zip_code = "81082";
        $location->phone = "719-845-1587";
        $location->save();

        $retailer = new Retailer;
        $retailer->name = 'Dyer Equipment Sales';
        $retailer->website = 'http://www.dyerequipmentsales.com';
        $retailer->logo_url = '/img/retailers/dyerequipment.png';
        $retailer->save();

        $location = new Location;
        $location->retailer_id = $retailer->id;
        $location->address = "10600 I-40 East";
        $location->city = "Amarillo";
        $location->state = "TX";
        $location->zip_code = "79118";
        $location->phone = "888-335-1330";
        $location->save();

        $retailer = new Retailer;
        $retailer->name = 'Triple R Tack';
        $retailer->website = 'https://www.facebook.com/pages/Triple-R-Tack/133460086704378';
        $retailer->logo_url = '/img/retailers/triple-r-tack.jpg';
        $retailer->save();

        $location = new Location;
        $location->retailer_id = $retailer->id;
        $location->address = "625 Century Rd";
        $location->city = "Rapid City";
        $location->state = "SD";
        $location->zip_code = "57701";
        $location->phone = "(605) 343-5847";
        $location->save();

        $retailer = new Retailer;
        $retailer->name = 'S & G Sales';
        $retailer->website = 'https://www.chutehelp.com';
        $retailer->logo_url = '/img/retailers/s-and-g.png';
        $retailer->save();

        $retailer = new Retailer;
        $retailer->name = 'Stillwater Milling';
        $retailer->website = 'http://www.stillwatermill.com';
        $retailer->logo_url = '/img/retailers/a-and-m.jpg';
        $retailer->save();

        $location = new Location;
        $location->retailer_id = $retailer->id;
        $location->address = "502 E. 6th St.";
        $location->city = "Stillwater";
        $location->state = "OK";
        $location->zip_code = "74074";
        $location->phone = "405-372-2766";
        $location->save();

        $retailer = new Retailer;
        $retailer->name = 'Steve Regan Company';
        $retailer->website = 'http://www.steveregan.com';
        $retailer->logo_url = '/img/retailers/steve-regan.png';
        $retailer->save();

        $location = new Location;
        $location->retailer_id = $retailer->id;
        $location->address = "4215 S. 500 West";
        $location->city = "Salt Lake City";
        $location->state = "UT";
        $location->zip_code = "84123";
        $location->phone = "801-327-0235";
        $location->save();

        $location = new Location;
        $location->retailer_id = $retailer->id;
        $location->address = "1184 E. Main Street";
        $location->city = "Burley";
        $location->state = "ID";
        $location->zip_code = "83318";
        $location->phone = "208-878-9536";
        $location->save();

        $location = new Location;
        $location->retailer_id = $retailer->id;
        $location->address = "3801 Hwy 20/26";
        $location->city = "Caldwell";
        $location->state = "ID";
        $location->zip_code = "83605";
        $location->phone = "208-454-2051";
        $location->save();

        $location = new Location;
        $location->retailer_id = $retailer->id;
        $location->address = "2240 W Hwy 56";
        $location->city = "Cedar City";
        $location->state = "UT";
        $location->zip_code = "84720";
        $location->phone = "435-586-4469";
        $location->save();

        $location = new Location;
        $location->retailer_id = $retailer->id;
        $location->address = "69 North 3rd West";
        $location->city = "Delta";
        $location->state = "UT";
        $location->zip_code = "84624";
        $location->phone = "435-864-3011";
        $location->save();

        $location = new Location;
        $location->retailer_id = $retailer->id;
        $location->address = "765 West 200 North";
        $location->city = "Logan";
        $location->state = "UT";
        $location->zip_code = "84321";
        $location->phone = "435-752-0592";
        $location->save();

        $location = new Location;
        $location->retailer_id = $retailer->id;
        $location->address = "789 East 300 North";
        $location->city = "Richfield";
        $location->state = "UT";
        $location->zip_code = "84701";
        $location->phone = "435-893-0199";
        $location->save();

        $location = new Location;
        $location->retailer_id = $retailer->id;
        $location->address = "721 South Main";
        $location->city = "Spanish Fork";
        $location->state = "UT";
        $location->zip_code = "84660";
        $location->phone = "801-798-6474";
        $location->save();

        $location = new Location;
        $location->retailer_id = $retailer->id;
        $location->address = "725 N Industrial Rd";
        $location->city = "St. George";
        $location->state = "UT";
        $location->zip_code = "84770";
        $location->phone = "435-656-0030";
        $location->save();

        $retailer = new Retailer;
        $retailer->name = 'K Ranch Arena Australia';
        $retailer->website = 'https://www.facebook.com/K-Ranch-Arena-583186025157393/?fref=ts';
        $retailer->logo_url = '/img/retailers/k-arena.png';
        $retailer->save();
    }
}
