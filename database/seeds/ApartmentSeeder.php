<?php

use Illuminate\Database\Seeder;
use App\Apartment;

class ApartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      
      $apt_values = [
        148000000,
        148000000,
        157000000,
        157000000,
        157000000,
        157000000,
      ];

      $instalments = [
        25,
        25,
        28,
        28,
        28,
        28,
      ];

      $release_dates = [
        "2022-09-01 00:00:00",
        "2022-09-01 00:00:00",
        "2023-01-01 00:00:00",
        "2023-01-01 00:00:00",
        "2023-01-01 00:00:00",
        "2023-01-01 00:00:00",
      ];
      
      for ($i=2; $i < 8; $i++) {
        $number = 1;
        for ($ii=1; $ii < 15; $ii++) {
          $apt = Apartment::create([
            'number' => ($i * 100) + $ii,
            'floor'  => $i,
            'type'   => $ii,
            'apt_value'    => $apt_values[ $i - 2 ],
            'instalment'   => $instalments[ $i - 2 ],
            'release_date' => $release_dates[ $i - 2 ],
          ]);
        }
      }
    }
}
