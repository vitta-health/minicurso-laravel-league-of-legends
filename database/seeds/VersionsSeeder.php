<?php

use Illuminate\Database\Seeder;
use App\Version;

class VersionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach($this->getVersions() as $version) {
        	Version::create(['release' => $version]);
        }
    }

    public function getVersions()
    {
    	$endpoint = 'https://global.api.pvp.net/api/lol/static-data/br/v1.2/versions?api_key='.env('RIOT_KEY');
        return json_decode(file_get_contents($endpoint),TRUE);
    }
}
