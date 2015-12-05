<?php

use Illuminate\Database\Seeder;

class StocksTableSeeder extends Seeder {

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run() {
        \DB::table('stocks')->delete();

        \DB::table('stocks')->insert([
            0  =>
                [
                    'id'          => 1,
                    'descripcion' => 'Lamina Rh 15mm',
                    'marca'       => 'MadeColombia',
                    'referencia'  => 'RH150010',
                    'precio'      => '80000.00',
                    'email' => 'madeincolombia@unaldev.co'
                ],
            1  =>
                [
                    'id'          => 2,
                    'descripcion' => 'Lamina Melamina 153x244 15mm',
                    'marca'       => 'MadeColombia',
                    'referencia'  => 'ML150012',
                    'precio'      => '110000.00',
                    'email' => 'madeincolombia@unaldev.co'
                ],
            2  =>
                [
                    'id'          => 3,
                    'descripcion' => 'Tablex Enchapado',
                    'marca'       => 'MadeColombia',
                    'referencia'  => 'EC150021',
                    'precio'      => '110000.00',
                    'email' => 'madeincolombia@unaldev.co'
                ],
            3  =>
                [
                    'id'          => 4,
                    'descripcion' => 'Lamina Melamina 183x244 x15mm',
                    'marca'       => 'MadeColombia',
                    'referencia'  => 'ML150015',
                    'precio'      => '130000.00',
                    'email' => 'madeincolombia@unaldev.co'
                ],
            4  =>
                [
                    'id'          => 5,
                    'descripcion' => 'Estufa 4 Puestos',
                    'marca'       => 'ElectriColombia',
                    'referencia'  => 'G4504',
                    'precio'      => '160000.00',
                    'email' => 'electricol@unaldev.co'
                ],
            5  =>
                [
                    'id'          => 6,
                    'descripcion' => 'Estufa 6 Puestos',
                    'marca'       => 'ElectriColombia',
                    'referencia'  => 'G4506',
                    'precio'      => '190000.00',
                    'email' => 'electricol@unaldev.co'
                ],
            6  =>
                [
                    'id'          => 7,
                    'descripcion' => 'Extractor',
                    'marca'       => 'ElectriColombia',
                    'referencia'  => 'E2671',
                    'precio'      => '60000.00',
                    'email' => 'electricol@unaldev.co'
                ],
            7  =>
                [
                    'id'          => 8,
                    'descripcion' => 'Lavaplatos 1',
                    'marca'       => 'Inoxicentro',
                    'referencia'  => 'AIN0L10',
                    'precio'      => '200000.00',
                    'email' => 'inoxicentro@unaldev.co'
                ],
            8  =>
                [
                    'id'          => 9,
                    'descripcion' => 'Lavaplatos 2',
                    'marca'       => 'Inoxicentro',
                    'referencia'  => 'AIN0L11',
                    'precio'      => '240000.00',
                    'email' => 'inoxicentro@unaldev.co'
                ],
            9  =>
                [
                    'id'          => 10,
                    'descripcion' => 'Manija Sencilla',
                    'marca'       => 'FerreAcces',
                    'referencia'  => 'M0F015',
                    'precio'      => '2000.00',
                    'email' => 'ferreaccess@unaldev.co'
                ],
            10 =>
                [
                    'id'          => 11,
                    'descripcion' => 'Manija Plana',
                    'marca'       => 'FerreAcces',
                    'referencia'  => 'M0P022',
                    'precio'      => '2500.00',
                    'email' => 'ferreaccess@unaldev.co'
                ],
            11 =>
                [
                    'id'          => 12,
                    'descripcion' => 'Tornillo Autorroscante 2',
                    'marca'       => 'FerreAcces',
                    'referencia'  => 'T1502015',
                    'precio'      => '20.00',
                    'email' => 'ferreaccess@unaldev.co'
                ],
            12 =>
                [
                    'id'          => 13,
                    'descripcion' => 'Tornillo Autorroscante 1.5',
                    'marca'       => 'FerreAcces',
                    'referencia'  => 'T1501515',
                    'precio'      => '18.00',
                    'email' => 'ferreaccess@unaldev.co'
                ],
            13 =>
                [
                    'id'          => 14,
                    'descripcion' => 'Tornillo Autorroscante 1',
                    'marca'       => 'FerreAcces',
                    'referencia'  => 'T1501015',
                    'precio'      => '17.00',
                    'email' => 'ferreaccess@unaldev.co'
                ],
            14 =>
                [
                    'id'          => 15,
                    'descripcion' => 'Tornillo Bisagra 3/4',
                    'marca'       => 'FerreAcces',
                    'referencia'  => 'TS03981',
                    'precio'      => '10.00',
                    'email' => 'ferreaccess@unaldev.co'
                ],
            15 =>
                [
                    'id'          => 16,
                    'descripcion' => 'Bisagra parche (PAR)',
                    'marca'       => 'FerreAcces',
                    'referencia'  => 'BSCO0051',
                    'precio'      => '7500.00',
                    'email' => 'ferreaccess@unaldev.co'
                ],
            16 =>
                [
                    'id'          => 17,
                    'descripcion' => 'Bisagra semiparche (PAR)',
                    'marca'       => 'FerreAcces',
                    'referencia'  => 'BSCO0052',
                    'precio'      => '7500.00',
                    'email' => 'ferreaccess@unaldev.co'
                ],
            17 =>
                [
                    'id'          => 18,
                    'descripcion' => 'Bisagra interior (PAR)',
                    'marca'       => 'FerreAcces',
                    'referencia'  => 'BSCO0052',
                    'precio'      => '7500.00',
                    'email' => 'ferreaccess@unaldev.co'
                ],
            18 =>
                [
                    'id'          => 19,
                    'descripcion' => 'Soporte entrepanos',
                    'marca'       => 'FerreAcces',
                    'referencia'  => 'SP1',
                    'precio'      => '50.00',
                    'email' => 'ferreaccess@unaldev.co'
                ],
            19 =>
                [
                    'id'          => 20,
                    'descripcion' => 'Meson Granito x unidad de area',
                    'marca'       => 'HomeCenter',
                    'referencia'  => 'MG023',
                    'precio'      => '100000.00',
                    'email' => 'homecenter@unaldev.co'
                ],
            20 =>
                [
                    'id'          => 21,
                    'descripcion' => 'Meson Inoxidable x unidad de area',
                    'marca'       => 'HomeCenter',
                    'referencia'  => 'MINX10',
                    'precio'      => '50000.00',
                    'email' => 'homecenter@unaldev.co'
                ],
            21 =>
                [
                    'id'          => 22,
                    'descripcion' => 'Rojo',
                    'marca'       => 'PintuHogar',
                    'referencia'  => '#01',
                    'precio'      => '40000.00',
                    'email' => 'pintuhogar@unaldev.co'
                ],
            22 =>
                [
                    'id'          => 23,
                    'descripcion' => 'Negro',
                    'marca'       => 'PintuHogar',
                    'referencia'  => '#02',
                    'precio'      => '50000.00',
                    'email' => 'pintuhogar@unaldev.co'
                ],
            23 =>
                [
                    'id'          => 24,
                    'descripcion' => 'Blanco',
                    'marca'       => 'PintuHogar',
                    'referencia'  => '#03',
                    'precio'      => '30000.00',
                    'email' => 'pintuhogar@unaldev.co'
                ],
            24 =>
                [
                    'id'          => 25,
                    'descripcion' => 'Cafe',
                    'marca'       => 'PintuHogar',
                    'referencia'  => '#04',
                    'precio'      => '20000.00',
                    'email' => 'pintuhogar@unaldev.co'
                ],
            25 =>
                [
                    'id'          => 26,
                    'descripcion' => 'Soporte entrepanos',
                    'marca'       => 'FerreAcces',
                    'referencia'  => 'SP2',
                    'precio'      => '60.00',
                    'email' => 'ferreaccess@unaldev.co'

                ],
        ]);
    }

}
