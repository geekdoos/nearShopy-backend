<?php

use Illuminate\Database\Seeder;

class ShopsSeeder extends Seeder
{
    /**
     * This method will seed the shops table on the database.
     *
     * @return void
     */
    public function run()
    {
        \App\Shop::query()->truncate();
        DB::table('shops')->insert(
            [
                'name' => 'Heir Apparel',
                'address' => 'Crowea Pl, Frenchs Forest NSW 2086',
                'lat' => '-33.737885',
                'lng' => '151.235260',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ]);
        DB::table('shops')->insert(
            [
                'name' => 'BeeYourself Clothing',
                'address' => 'Thalia St, Hassall Grove NSW 2761',
                'lat' => '-33.729752',
                'lng' => '150.836090',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ]);
        DB::table('shops')->insert(
            [
                'name' => 'Dress Code',
                'address' => 'Glenview Avenue, Revesby, NSW 2212',
                'lat' => '-33.949448',
                'lng' => '151.008591',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ]);
        DB::table('shops')->insert(
            [
                'name' => 'The Legacy',
                'address' => 'Charlotte Ln, Chatswood NSW 2067',
                'lat' => '-33.796669',
                'lng' => '151.183609',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ]);
        DB::table('shops')->insert(
            [
                'name' => 'Fashiontasia',
                'address' => 'Braidwood Dr, Prestons NSW 2170',
                'lat' => '-33.944489',
                'lng' => '150.854706',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ]);
        DB::table('shops')->insert(
            [
                'name' => 'Trish & Tash',
                'address' => 'Lincoln St, Lane Cove West NSW 2066',
                'lat' => '-33.812222',
                'lng' => '151.143707',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ]);
        DB::table('shops')->insert(
            [
                'name' => 'Perfect Fit',
                'address' => 'Darley Rd, Randwick NSW 2031',
                'lat' => '-33.903557',
                'lng' => '151.237732',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ]);
        DB::table('shops')->insert(
            [
                'name' => 'Buena Ropa!',
                'address' => 'Brodie St, Rydalmere NSW 2116',
                'lat' => '-33.815521',
                'lng' => '151.026642',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ]);
        DB::table('shops')->insert(
            [
                'name' => 'Coxcomb and Lily Boutique',
                'address' => 'Ferrers Rd, Horsley Park NSW 2175',
                'lat' => '-33.829525',
                'lng' => '150.873764',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ]);
        DB::table('shops')->insert(
            [
                'name' => 'Moda Couture',
                'address' => 'Northcote Rd, Glebe NSW 2037',
                'lat' => '-33.873882',
                'lng' => '151.177460',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ]);
        DB::table('shops')->insert(
            [
                'name' => 'Zlaq surfboard',
                'address' => 'Rabat, Zlaq surfboard',
                'lat' => '-6.837670',
                'lng' => '34.000285',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ]);
        DB::table('shops')->insert(
            [
                'name' => 'Galaxy Shop',
                'address' => 'Rabat, Galaxy Shop',
                'lat' => '-6.860678',
                'lng' => '33.995026',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ]);
        DB::table('shops')->insert(
            [
                'name' => 'Animal shop',
                'address' => 'Rabat, Animal shop',
                'lat' => '-6.818608',
                'lng' => '34.023910',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ]);
        DB::table('shops')->insert(
            [
                'name' => 'Rabat shop',
                'address' => 'Rabat, Rabat shop',
                'lat' => '-6.849335',
                'lng' => '34.023012',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ]);
        DB::table('shops')->insert(
            [
                'name' => 'Mega mall',
                'address' => 'Rabat, Mega mall',
                'lat' => '-6.829277',
                'lng' => '33.969821',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ]);
    }
}
