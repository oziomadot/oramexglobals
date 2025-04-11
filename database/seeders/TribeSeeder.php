<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TribeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tribes = [
            ["name" => "Abayon", "state" => "Cross River State"],
            ["name" => "Abua (Odual)", "state" => "Rivers State"],
            ["name" => "Achipa (Achipawa)", "state" => "Kebbi State"],
            ["name" => "Adim", "state" => "Cross River State"],
            ["name" => "Adun", "state" => "Cross River State"],
            ["name" => "Affade", "state" => "Yobe State"],
            ["name" => "Afizere", "state" => "Plateau State"],
            ["name" => "Afo", "state" => "Plateau State"],
            ["name" => "Agbo", "state" => "Cross River State"],
            ["name" => "Akaju-Ndem (Akajuk)", "state" => "Cross River State"],
            ["name" => "Akweya-Yachi", "state" => "Benue State"],
            ["name" => "Alago (Arago)", "state" => "Plateau State"],
            ["name" => "Amo", "state" => "Plateau State"],
            ["name" => "Anaguta", "state" => "Plateau State"],
            ["name" => "Anang", "state" => "Akwa Ibom State"],
            ["name" => "Andoni", "state" => "Akwa Ibom State, Rivers State"],
            ["name" => "Angas", "state" => "Bauchi State, Plateau State"],
            ["name" => "Ankwei", "state" => "Plateau State"],
            ["name" => "Anyima", "state" => "Cross River State"],
            ["name" => "Attakar (Ataka)", "state" => "Kaduna State"],
            ["name" => "Auyoka (Sub-Hausa)", "state" => "Jigawa State"],
            ["name" => "Awori", "state" => "Lagos State, Ogun State"],
            ["name" => "Ayu", "state" => "Kaduna State"],
            ["name" => "Babur (Pabir)/Bura", "state" => "Adamawa State, Borno State, Taraba State, Yobe State"],
            ["name" => "Bachama", "state" => "Adamawa State"],
            ["name" => "Bachere", "state" => "Cross River State"],
            ["name" => "Bada", "state" => "Plateau State"],
            ["name" => "Bade", "state" => "Yobe State"],
            ["name" => "Baggara Arabs", "state" => "Borno State"],
            ["name" => "Bahumono", "state" => "Cross River State"],
            ["name" => "Bakulung", "state" => "Taraba State"],
            ["name" => "Bali", "state" => "Taraba State"],
            ["name" => "Bambora (Bambarawa)", "state" => "Bauchi State"],
            ["name" => "Bambuko", "state" => "Taraba State"],
            ["name" => "Banda (Bandawa)", "state" => "Taraba State"],
            ["name" => "Banka (Bankalawa)", "state" => "Bauchi State"],
            ["name" => "Banso (Panso)", "state" => "Adamawa State"],
            ["name" => "Bara (Barawa)", "state" => "Bauchi State"],
            ["name" => "Barke", "state" => "Bauchi State"],
            ["name" => "Baruba (Barba)", "state" => "Niger State"],
            ["name" => "Bashiri (Bashirawa)", "state" => "Plateau State"],
            ["name" => "Bassa", "state" => "Kaduna State, Kogi State, Niger State, Plateau State"],
            ["name" => "Batta", "state" => "Adamawa State"],
            ["name" => "Baushi", "state" => "Niger State"],
            ["name" => "Baya", "state" => "Adamawa State"],
            ["name" => "Bekwarra", "state" => "Cross River State"],
            ["name" => "Bele (Buli, Belewa)", "state" => "Bauchi State"],
            ["name" => "Betso (Bete)", "state" => "Taraba State"],
            ["name" => "Bette", "state" => "Cross River State"],
            ["name" => "Bilei", "state" => "Adamawa State"],
            ["name" => "Bille", "state" => "Adamawa State"],
            ["name" => "Bina (Binawa)", "state" => "Kaduna State"],
            ["name" => "Bini (Edo)", "state" => "Edo State"],
            ["name" => "Birom", "state" => "Plateau State"],
            ["name" => "Bobua", "state" => "Taraba State"],
            ["name" => "Boki (Nki)", "state" => "Cross River State"],
            ["name" => "Bokkos", "state" => "Plateau State"],
            ["name" => "Boko (Bussawa, Bargawa)", "state" => "Niger State"],
            ["name" => "Bole (Bolewa)", "state" => "Bauchi State, Yobe State"],
            ["name" => "Botlere", "state" => "Adamawa State"],
            ["name" => "Boma (Bomawa, Burmano)", "state" => "Bauchi State"],
            ["name" => "Bomboro", "state" => "Bauchi State"],
            ["name" => "Buduma", "state" => "Borno State"],
            ["name" => "Buji", "state" => "Plateau State"],
            ["name" => "Buli", "state" => "Bauchi State"],
            ["name" => "Bunu", "state" => "Kogi State"],
            ["name" => "Bura/Babur (Pabir)", "state" => "Adamawa State, Borno State"],
            ["name" => "Burak", "state" => "Bauchi State"],
            ["name" => "Burma (Burmawa)", "state" => "Plateau State"],
            ["name" => "Buru", "state" => "Yobe State"],
            ["name" => "Buta (Butawa)", "state" => "Bauchi State"],
            ["name" => "Bwall", "state" => "Plateau State"],
        ];

        DB::table('tribes')->insert($tribes);
    }
}
