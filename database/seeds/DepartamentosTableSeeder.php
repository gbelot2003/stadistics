<?php

use Illuminate\Database\Seeder;

class DepartamentosTableSeeder extends Seeder {

	/**
	 * Auto generated seed file
	 *
	 * @return void
	 */
	public function run()
	{
		\DB::table('departamentos')->delete();
        
		\DB::table('departamentos')->insert(array (
			0 => 
			array (
				'id' => '1',
				'departamento' => 'Atlántida',
				'zona' => 'hn-at',
			),
			1 => 
			array (
				'id' => '2',
				'departamento' => 'Colón',
				'zona' => 'hn-cl',
			),
			2 => 
			array (
				'id' => '3',
				'departamento' => 'Comayagua',
				'zona' => 'hn-cm',
			),
			3 => 
			array (
				'id' => '4',
				'departamento' => 'Copán',
				'zona' => 'hn-cp',
			),
			4 => 
			array (
				'id' => '5',
				'departamento' => 'Cortés',
				'zona' => 'hn-cr',
			),
			5 => 
			array (
				'id' => '6',
				'departamento' => 'Choluteca',
				'zona' => 'hn-ch',
			),
			6 => 
			array (
				'id' => '7',
				'departamento' => 'El Paraíso',
				'zona' => 'hn-ep',
			),
			7 => 
			array (
				'id' => '8',
				'departamento' => 'Francisco Morazán',
				'zona' => 'hn-fm',
			),
			8 => 
			array (
				'id' => '9',
				'departamento' => 'Gracias a Dios',
				'zona' => 'hn-gd',
			),
			9 => 
			array (
				'id' => '10',
				'departamento' => 'Intibucá',
				'zona' => 'hn-in',
			),
			10 => 
			array (
				'id' => '11',
				'departamento' => 'Islas de la Bahía',
				'zona' => 'hn-ib',
			),
			11 => 
			array (
				'id' => '12',
				'departamento' => 'La Paz',
				'zona' => 'hn-lp',
			),
			12 => 
			array (
				'id' => '13',
				'departamento' => 'Lempira',
				'zona' => 'hn-le',
			),
			13 => 
			array (
				'id' => '14',
				'departamento' => 'Ocotepeque',
				'zona' => 'hn-oc',
			),
			14 => 
			array (
				'id' => '15',
				'departamento' => 'Olancho',
				'zona' => 'hn-ol',
			),
			15 => 
			array (
				'id' => '16',
				'departamento' => 'Santa Bárbara',
				'zona' => 'hn-sb',
			),
			16 => 
			array (
				'id' => '17',
				'departamento' => 'Valle',
				'zona' => 'hn-va',
			),
			17 => 
			array (
				'id' => '18',
				'departamento' => 'Yoro',
				'zona' => 'hn-yo',
			),
		));
	}

}
