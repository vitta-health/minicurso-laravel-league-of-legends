<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

use App\Champion;
use App\Version;

class ChampionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$version = Version::all()->first();
    	$champions = $this->getChampions();

        Model::unguard();
        foreach($champions['keys'] as $key) {
        	$img = "http://ddragon.leagueoflegends.com/cdn/".$version->release."/img/champion/".$champions['data'][$key]['key'].".png";
        	Champion::create([
        		'riot_id' => $champions['data'][$key]['id'],
        		'name' => $champions['data'][$key]['name'],
        		'title' => $champions['data'][$key]['title'],
        		'key' => $champions['data'][$key]['key'],
        		'image' => $img,
        		'lore' => $champions['data'][$key]['lore'],
        	]);
        }
    }

    public function getChampions()
    {
    	$endpoint = 'https://global.api.pvp.net/api/lol/static-data/br/v1.2/champion?champData=all&api_key='.env('RIOT_KEY');
        return json_decode(file_get_contents($endpoint),TRUE);
    }
}
