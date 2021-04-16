<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Contact;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         Contact::create([
            'name' => 'test',
            'contact_number' => '023123'
            
            ]);
         contact::create([

                'name' => 'james',
                'contact_number' => '091234'
            ]);

         contact::create([
                'name' => 'alpha',
                'contact_number' =>'064566'

            ]);

         contact::create([
                'name' => 'abc',
                'contact_number' => '031111'
            ]);

          contact::create([
                'name' => 'team',
                'contact_number' => '042222'


            ]);

         contact::create([
                'name' => 'beth',
                'contact_number' => '033456'

            ]);

         contact::create([
                'name' => 'anne',
                'contact_number' => '025678'
            ]);

         contact::create([
                'name' => 'john',
                'contact_number' => '044444'
            ]);

         contact::create([
                'name' => 'phil',
                'contact_number' => '01234'
            ]);

         contact::create([
                'name' => 'mars',
                'contact_number' => '023456'
            ]);

        
    }
}
