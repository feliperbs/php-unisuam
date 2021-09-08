<?php

namespace Database\Seeders;

use App\Models\Status;
use Exception;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $description = array('iniciada','em processo','finalizada');
        try{
            for ($i=0; $i<=2; $i++){
                $status = new Status();
                $status->description = $description[$i];
                $status->save();
            }
        }catch(Exception $e){
            echo $e;
        }
    }
}
