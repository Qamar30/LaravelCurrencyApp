<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
          
         DB::table('products')->insert([
           'name' => 'US Dollars(USD)',
           'description' => 'Currency of the United States OF America.',
           'photo' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSXuW4zobnFn2N5otA4DUSHQzLe79PvA3Wd3vcHT8WGkJpwe-tthQ',
           'price' => 14.78
        ]);

        DB::table('products')->insert([
            'name' => 'British Pound (GBP)',
            'description' => 'Currency of Great Britain.',
            'photo' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ4b8o_8_O0-eSwpc2xF3FEUmVxNu1bnVWD9PObtARtiBOojx19PA',
            'price' => 18.86
        ]);

        DB::table('products')->insert([
            'name' => 'Euro (EUR)',
            'description' => 'Currency of European Union members',
             'photo' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRWUj9UT44gYL8koE69hD8lo0s9EjEYPU12ybeVd6V_aOitk3UDcQ',
            'price' => 16.72
        ]);
         DB::table('products')->insert([
           'name' => 'Kenyain Shilling',
           'description' => 'Currency of Kenya.',
           'photo' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSmOmvd7lUCXOBDIncseWCaQpNz_GLHqXdfWCmq9Xi9H83GeIBx',
           'price' => .14
        ]);
    }
}
