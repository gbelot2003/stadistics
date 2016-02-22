<?php

use Illuminate\Database\Seeder;

class AgresorsTableSeeder extends Seeder {

	/**
	 * Auto generated seed file
	 *
	 * @return void
	 */
	public function run()
	{
		\DB::table('agresors')->delete();
        
		\DB::table('agresors')->insert(array (
			0 => 
			array (
				'id' => 1,
				'alertas_id' => 17,
				'name' => 'Juan Robando Todos',
				'tipoagresors_id' => 20,
				'estadojudicial_id' => 1,
			),
			1 => 
			array (
				'id' => 6,
				'alertas_id' => 20,
				'name' => 'Desconocido',
				'tipoagresors_id' => 18,
				'estadojudicial_id' => 1,
			),
			2 => 
			array (
				'id' => 7,
				'alertas_id' => 21,
				'name' => 'Joaquín Molina Andrade',
				'tipoagresors_id' => 21,
				'estadojudicial_id' => 1,
			),
			3 => 
			array (
				'id' => 8,
				'alertas_id' => 22,
				'name' => ' Roosevelt Avilés',
				'tipoagresors_id' => 13,
				'estadojudicial_id' => 1,
			),
			4 => 
			array (
				'id' => 9,
				'alertas_id' => 16,
				'name' => 'Roosevelt Avilés',
				'tipoagresors_id' => 13,
				'estadojudicial_id' => 1,
			),
			5 => 
			array (
				'id' => 10,
				'alertas_id' => 23,
				'name' => 'Desconocidos',
				'tipoagresors_id' => 18,
				'estadojudicial_id' => 1,
			),
			6 => 
			array (
				'id' => 11,
				'alertas_id' => 24,
				'name' => 'empleado de iglesia evangélica',
				'tipoagresors_id' => 18,
				'estadojudicial_id' => 1,
			),
			7 => 
			array (
				'id' => 12,
				'alertas_id' => 18,
				'name' => 'Desconocidos',
				'tipoagresors_id' => 18,
				'estadojudicial_id' => 1,
			),
			8 => 
			array (
				'id' => 13,
				'alertas_id' => 25,
				'name' => 'Desconocido',
				'tipoagresors_id' => 18,
				'estadojudicial_id' => 1,
			),
			9 => 
			array (
				'id' => 14,
				'alertas_id' => 26,
				'name' => 'Centro para Migrantes/Dirección General de Migración y Extranjerí',
				'tipoagresors_id' => 4,
				'estadojudicial_id' => 1,
			),
			10 => 
			array (
				'id' => 16,
				'alertas_id' => 27,
				'name' => 'Desconocidos',
				'tipoagresors_id' => 18,
				'estadojudicial_id' => 1,
			),
			11 => 
			array (
				'id' => 17,
				'alertas_id' => 28,
				'name' => 'Desconocidos',
				'tipoagresors_id' => 28,
				'estadojudicial_id' => 1,
			),
			12 => 
			array (
				'id' => 18,
				'alertas_id' => 29,
				'name' => 'Desconocido',
				'tipoagresors_id' => 28,
				'estadojudicial_id' => 1,
			),
			13 => 
			array (
				'id' => 19,
				'alertas_id' => 31,
				'name' => 'Estado y Empresarios',
				'tipoagresors_id' => 22,
				'estadojudicial_id' => 1,
			),
			14 => 
			array (
				'id' => 20,
				'alertas_id' => 32,
				'name' => 'Desconocidos',
				'tipoagresors_id' => 18,
				'estadojudicial_id' => 1,
			),
			15 => 
			array (
				'id' => 21,
				'alertas_id' => 35,
				'name' => 'Guardias de seguridad privados',
				'tipoagresors_id' => 1,
				'estadojudicial_id' => 1,
			),
			16 => 
			array (
				'id' => 22,
				'alertas_id' => 36,
				'name' => 'Juzgado Primero de lo Civil ',
				'tipoagresors_id' => 12,
				'estadojudicial_id' => 1,
			),
			17 => 
			array (
				'id' => 24,
				'alertas_id' => 38,
				'name' => 'Guardias de la Corte Suprema de Justicia',
				'tipoagresors_id' => 5,
				'estadojudicial_id' => 1,
			),
			18 => 
			array (
				'id' => 25,
				'alertas_id' => 39,
				'name' => 'Operativo Militar y Policial Xatruch',
				'tipoagresors_id' => 26,
				'estadojudicial_id' => 1,
			),
			19 => 
			array (
				'id' => 26,
				'alertas_id' => 40,
				'name' => 'Desconocidos',
				'tipoagresors_id' => 18,
				'estadojudicial_id' => 1,
			),
			20 => 
			array (
				'id' => 27,
				'alertas_id' => 41,
				'name' => 'Desconocidos',
				'tipoagresors_id' => 18,
				'estadojudicial_id' => 1,
			),
			21 => 
			array (
				'id' => 28,
				'alertas_id' => 42,
				'name' => 'Desconocidos',
				'tipoagresors_id' => 18,
				'estadojudicial_id' => 1,
			),
			22 => 
			array (
				'id' => 29,
				'alertas_id' => 43,
				'name' => 'Desconocidos',
				'tipoagresors_id' => 18,
				'estadojudicial_id' => 1,
			),
			23 => 
			array (
				'id' => 30,
				'alertas_id' => 44,
				'name' => 'Policías Municipales',
				'tipoagresors_id' => 17,
				'estadojudicial_id' => 1,
			),
			24 => 
			array (
				'id' => 31,
				'alertas_id' => 45,
				'name' => 'Padre Carlo Magno Núñez',
				'tipoagresors_id' => 1,
				'estadojudicial_id' => 1,
			),
			25 => 
			array (
				'id' => 32,
				'alertas_id' => 46,
				'name' => 'Alcalde y policías de Sabanagrande',
				'tipoagresors_id' => 3,
				'estadojudicial_id' => 1,
			),
			26 => 
			array (
				'id' => 33,
				'alertas_id' => 47,
				'name' => 'Desconocidos',
				'tipoagresors_id' => 18,
				'estadojudicial_id' => 1,
			),
			27 => 
			array (
				'id' => 34,
				'alertas_id' => 48,
				'name' => 'Desconocidos',
				'tipoagresors_id' => 18,
				'estadojudicial_id' => 1,
			),
			28 => 
			array (
				'id' => 35,
				'alertas_id' => 49,
				'name' => 'Desconocidos',
				'tipoagresors_id' => 18,
				'estadojudicial_id' => 1,
			),
			29 => 
			array (
				'id' => 36,
				'alertas_id' => 50,
				'name' => 'Carmen Canales Canales',
				'tipoagresors_id' => 12,
				'estadojudicial_id' => 1,
			),
			30 => 
			array (
				'id' => 37,
				'alertas_id' => 51,
				'name' => 'Desconocidos',
				'tipoagresors_id' => 18,
				'estadojudicial_id' => 1,
			),
			31 => 
			array (
				'id' => 38,
				'alertas_id' => 52,
				'name' => 'Juzgado de Paz de lo Criminal de la Capital de Honduras ',
				'tipoagresors_id' => 8,
				'estadojudicial_id' => 1,
			),
			32 => 
			array (
				'id' => 39,
				'alertas_id' => 53,
				'name' => 'Desconocidos',
				'tipoagresors_id' => 18,
				'estadojudicial_id' => 1,
			),
			33 => 
			array (
				'id' => 40,
				'alertas_id' => 54,
				'name' => 'Nora Urbina',
				'tipoagresors_id' => 22,
				'estadojudicial_id' => 1,
			),
			34 => 
			array (
				'id' => 41,
				'alertas_id' => 55,
				'name' => 'Wilfredo Benítez',
				'tipoagresors_id' => 20,
				'estadojudicial_id' => 1,
			),
			35 => 
			array (
				'id' => 42,
				'alertas_id' => 57,
				'name' => 'Desconocidos',
				'tipoagresors_id' => 18,
				'estadojudicial_id' => 1,
			),
			36 => 
			array (
				'id' => 43,
				'alertas_id' => 58,
				'name' => 'Congreso Nacional',
				'tipoagresors_id' => 22,
				'estadojudicial_id' => 1,
			),
			37 => 
			array (
				'id' => 44,
				'alertas_id' => 59,
				'name' => 'Desconocidos',
				'tipoagresors_id' => 18,
				'estadojudicial_id' => 1,
			),
			38 => 
			array (
				'id' => 45,
				'alertas_id' => 60,
			'name' => 'Universidad Pedagógica Nacional Francisco Morazán (UPNFM) ',
				'tipoagresors_id' => 15,
				'estadojudicial_id' => 1,
			),
			39 => 
			array (
				'id' => 46,
				'alertas_id' => 61,
				'name' => 'Activistas politicos',
				'tipoagresors_id' => 1,
				'estadojudicial_id' => 1,
			),
			40 => 
			array (
				'id' => 47,
				'alertas_id' => 62,
				'name' => 'Presidente del Congreso Nacional de Honduras',
				'tipoagresors_id' => 27,
				'estadojudicial_id' => 1,
			),
			41 => 
			array (
				'id' => 48,
				'alertas_id' => 63,
				'name' => 'Desconocidos',
				'tipoagresors_id' => 28,
				'estadojudicial_id' => 1,
			),
			42 => 
			array (
				'id' => 49,
				'alertas_id' => 64,
				'name' => 'Desconocidos',
				'tipoagresors_id' => 18,
				'estadojudicial_id' => 1,
			),
			43 => 
			array (
				'id' => 50,
				'alertas_id' => 65,
				'name' => 'Desconocidos',
				'tipoagresors_id' => 18,
				'estadojudicial_id' => 1,
			),
			44 => 
			array (
				'id' => 51,
				'alertas_id' => 66,
				'name' => 'Desconocidos',
				'tipoagresors_id' => 18,
				'estadojudicial_id' => 1,
			),
			45 => 
			array (
				'id' => 52,
				'alertas_id' => 68,
				'name' => 'Desconocidos',
				'tipoagresors_id' => 18,
				'estadojudicial_id' => 1,
			),
			46 => 
			array (
				'id' => 53,
				'alertas_id' => 69,
				'name' => 'Desconocidos',
				'tipoagresors_id' => 18,
				'estadojudicial_id' => 1,
			),
			47 => 
			array (
				'id' => 54,
				'alertas_id' => 70,
				'name' => 'Desconocidos',
				'tipoagresors_id' => 18,
				'estadojudicial_id' => 1,
			),
			48 => 
			array (
				'id' => 55,
				'alertas_id' => 71,
				'name' => 'Agente Policial',
				'tipoagresors_id' => 26,
				'estadojudicial_id' => 1,
			),
			49 => 
			array (
				'id' => 56,
				'alertas_id' => 72,
				'name' => 'Desconocidos',
				'tipoagresors_id' => 18,
				'estadojudicial_id' => 1,
			),
			50 => 
			array (
				'id' => 58,
				'alertas_id' => 74,
				'name' => 'Desconocidos',
				'tipoagresors_id' => 18,
				'estadojudicial_id' => 1,
			),
			51 => 
			array (
				'id' => 59,
				'alertas_id' => 75,
				'name' => 'Coronel retirado Guillermo Pinél Cálix',
				'tipoagresors_id' => 1,
				'estadojudicial_id' => 1,
			),
			52 => 
			array (
				'id' => 60,
				'alertas_id' => 76,
				'name' => 'Varios sospechosos',
				'tipoagresors_id' => 1,
				'estadojudicial_id' => 1,
			),
			53 => 
			array (
				'id' => 61,
				'alertas_id' => 77,
				'name' => 'Juzgado de Paz de lo Criminal ',
				'tipoagresors_id' => 12,
				'estadojudicial_id' => 1,
			),
			54 => 
			array (
				'id' => 62,
				'alertas_id' => 78,
				'name' => 'Criminalidad',
				'tipoagresors_id' => 18,
				'estadojudicial_id' => 1,
			),
			55 => 
			array (
				'id' => 63,
				'alertas_id' => 79,
			'name' => 'Compañía Azucarera Hondureña Sociedad Anónima (CAHSA)',
				'tipoagresors_id' => 1,
				'estadojudicial_id' => 1,
			),
			56 => 
			array (
				'id' => 64,
				'alertas_id' => 80,
				'name' => 'Hortensio Lindolfo López Silva ',
				'tipoagresors_id' => 26,
				'estadojudicial_id' => 1,
			),
			57 => 
			array (
				'id' => 65,
				'alertas_id' => 81,
				'name' => 'Policia Nacional',
				'tipoagresors_id' => 26,
				'estadojudicial_id' => 1,
			),
			58 => 
			array (
				'id' => 66,
				'alertas_id' => 82,
				'name' => 'Desconocidos',
				'tipoagresors_id' => 18,
				'estadojudicial_id' => 1,
			),
			59 => 
			array (
				'id' => 67,
				'alertas_id' => 83,
				'name' => 'Jhonny Alexander Carrasco Espinoza ',
				'tipoagresors_id' => 26,
				'estadojudicial_id' => 1,
			),
			60 => 
			array (
				'id' => 68,
				'alertas_id' => 84,
				'name' => 'compañía de cable Milicon ',
				'tipoagresors_id' => 20,
				'estadojudicial_id' => 1,
			),
			61 => 
			array (
				'id' => 69,
				'alertas_id' => 85,
				'name' => 'Héctor Rolando Hernández ',
				'tipoagresors_id' => 3,
				'estadojudicial_id' => 1,
			),
			62 => 
			array (
				'id' => 70,
				'alertas_id' => 86,
				'name' => 'Desconocidos',
				'tipoagresors_id' => 18,
				'estadojudicial_id' => 1,
			),
			63 => 
			array (
				'id' => 71,
				'alertas_id' => 87,
				'name' => 'Descoconicodos',
				'tipoagresors_id' => 1,
				'estadojudicial_id' => 1,
			),
			64 => 
			array (
				'id' => 72,
				'alertas_id' => 88,
				'name' => 'Joaquin Molina Andrade ',
				'tipoagresors_id' => 1,
				'estadojudicial_id' => 1,
			),
			65 => 
			array (
				'id' => 73,
				'alertas_id' => 89,
				'name' => 'Jueza Carmen Canales Canales',
				'tipoagresors_id' => 12,
				'estadojudicial_id' => 1,
			),
			66 => 
			array (
				'id' => 74,
				'alertas_id' => 90,
				'name' => 'Migración CR',
				'tipoagresors_id' => 22,
				'estadojudicial_id' => 1,
			),
			67 => 
			array (
				'id' => 75,
				'alertas_id' => 91,
				'name' => 'Roosvelt Avilés ',
				'tipoagresors_id' => 3,
				'estadojudicial_id' => 1,
			),
			68 => 
			array (
				'id' => 76,
				'alertas_id' => 92,
				'name' => 'Policías y desconocidos',
				'tipoagresors_id' => 1,
				'estadojudicial_id' => 1,
			),
			69 => 
			array (
				'id' => 77,
				'alertas_id' => 93,
				'name' => 'Héctor Guillen',
				'tipoagresors_id' => 22,
				'estadojudicial_id' => 1,
			),
			70 => 
			array (
				'id' => 78,
				'alertas_id' => 94,
				'name' => 'Activistas Alcalde MDC',
				'tipoagresors_id' => 1,
				'estadojudicial_id' => 1,
			),
			71 => 
			array (
				'id' => 79,
				'alertas_id' => 95,
				'name' => 'Presidente del Congreso Nacional',
				'tipoagresors_id' => 27,
				'estadojudicial_id' => 1,
			),
			72 => 
			array (
				'id' => 80,
				'alertas_id' => 96,
				'name' => 'Desconocidos',
				'tipoagresors_id' => 18,
				'estadojudicial_id' => 1,
			),
			73 => 
			array (
				'id' => 81,
				'alertas_id' => 97,
				'name' => 'José Antonio Laínez',
				'tipoagresors_id' => 3,
				'estadojudicial_id' => 1,
			),
			74 => 
			array (
				'id' => 82,
				'alertas_id' => 98,
				'name' => 'David Zacaro y Armando Ramírez',
				'tipoagresors_id' => 3,
				'estadojudicial_id' => 1,
			),
			75 => 
			array (
				'id' => 83,
				'alertas_id' => 99,
				'name' => 'Alexis García',
				'tipoagresors_id' => 1,
				'estadojudicial_id' => 1,
			),
			76 => 
			array (
				'id' => 84,
				'alertas_id' => 100,
				'name' => 'Alexis García',
				'tipoagresors_id' => 4,
				'estadojudicial_id' => 1,
			),
			77 => 
			array (
				'id' => 85,
				'alertas_id' => 101,
				'name' => 'Policías y Miliatres',
				'tipoagresors_id' => 26,
				'estadojudicial_id' => 1,
			),
			78 => 
			array (
				'id' => 86,
				'alertas_id' => 102,
				'name' => 'Desconocidos',
				'tipoagresors_id' => 18,
				'estadojudicial_id' => 1,
			),
			79 => 
			array (
				'id' => 87,
				'alertas_id' => 103,
				'name' => 'Corte Suprema de Justicia',
				'tipoagresors_id' => 5,
				'estadojudicial_id' => 1,
			),
			80 => 
			array (
				'id' => 88,
				'alertas_id' => 104,
				'name' => 'Desconocidos',
				'tipoagresors_id' => 18,
				'estadojudicial_id' => 1,
			),
			81 => 
			array (
				'id' => 89,
				'alertas_id' => 105,
				'name' => 'Empleados de Aguas de Choloma',
				'tipoagresors_id' => 1,
				'estadojudicial_id' => 1,
			),
			82 => 
			array (
				'id' => 90,
				'alertas_id' => 106,
				'name' => 'Desconocidos',
				'tipoagresors_id' => 18,
				'estadojudicial_id' => 1,
			),
			83 => 
			array (
				'id' => 91,
				'alertas_id' => 107,
				'name' => 'Desconocidos',
				'tipoagresors_id' => 18,
				'estadojudicial_id' => 1,
			),
			84 => 
			array (
				'id' => 92,
				'alertas_id' => 108,
				'name' => 'Cesar Romero',
				'tipoagresors_id' => 20,
				'estadojudicial_id' => 1,
			),
			85 => 
			array (
				'id' => 93,
				'alertas_id' => 109,
				'name' => 'Luis Alonzo Narvaez',
				'tipoagresors_id' => 22,
				'estadojudicial_id' => 1,
			),
			86 => 
			array (
				'id' => 94,
				'alertas_id' => 110,
				'name' => 'Decreto Ejecutivo',
				'tipoagresors_id' => 16,
				'estadojudicial_id' => 1,
			),
			87 => 
			array (
				'id' => 95,
				'alertas_id' => 111,
				'name' => 'Desconocidos',
				'tipoagresors_id' => 18,
				'estadojudicial_id' => 1,
			),
			88 => 
			array (
				'id' => 96,
				'alertas_id' => 112,
				'name' => 'Joaquin Molina Andrade ',
				'tipoagresors_id' => 1,
				'estadojudicial_id' => 1,
			),
			89 => 
			array (
				'id' => 97,
				'alertas_id' => 113,
				'name' => 'Roosevelt Avilés ',
				'tipoagresors_id' => 3,
				'estadojudicial_id' => 1,
			),
			90 => 
			array (
				'id' => 98,
				'alertas_id' => 114,
				'name' => '“Siriavision y Telecable”',
				'tipoagresors_id' => 20,
				'estadojudicial_id' => 1,
			),
			91 => 
			array (
				'id' => 99,
				'alertas_id' => 115,
				'name' => 'Uniformados de Policias',
				'tipoagresors_id' => 26,
				'estadojudicial_id' => 1,
			),
			92 => 
			array (
				'id' => 100,
				'alertas_id' => 116,
				'name' => 'Desconocidos',
				'tipoagresors_id' => 18,
				'estadojudicial_id' => 1,
			),
			93 => 
			array (
				'id' => 101,
				'alertas_id' => 117,
				'name' => 'empleado de la Iglesia evangélica ',
				'tipoagresors_id' => 1,
				'estadojudicial_id' => 1,
			),
			94 => 
			array (
				'id' => 102,
				'alertas_id' => 118,
				'name' => 'Desconocidos',
				'tipoagresors_id' => 23,
				'estadojudicial_id' => 1,
			),
			95 => 
			array (
				'id' => 103,
				'alertas_id' => 119,
				'name' => 'Radio America',
				'tipoagresors_id' => 20,
				'estadojudicial_id' => 1,
			),
			96 => 
			array (
				'id' => 104,
				'alertas_id' => 30,
				'name' => 'Desconocidos',
				'tipoagresors_id' => 18,
				'estadojudicial_id' => 1,
			),
			97 => 
			array (
				'id' => 105,
				'alertas_id' => 34,
				'name' => 'Desconocidos',
				'tipoagresors_id' => 18,
				'estadojudicial_id' => 1,
			),
			98 => 
			array (
				'id' => 106,
				'alertas_id' => 37,
				'name' => 'Operativo Militar y Policial Xatruch',
				'tipoagresors_id' => 26,
				'estadojudicial_id' => 1,
			),
			99 => 
			array (
				'id' => 107,
				'alertas_id' => 56,
				'name' => 'Desconocidos',
				'tipoagresors_id' => 18,
				'estadojudicial_id' => 1,
			),
			100 => 
			array (
				'id' => 108,
				'alertas_id' => 67,
				'name' => 'Desconocidos',
				'tipoagresors_id' => 18,
				'estadojudicial_id' => 1,
			),
			101 => 
			array (
				'id' => 109,
				'alertas_id' => 73,
				'name' => 'Desconocidos',
				'tipoagresors_id' => 18,
				'estadojudicial_id' => 1,
			),
			102 => 
			array (
				'id' => 110,
				'alertas_id' => 122,
				'name' => 'Desconocidos',
				'tipoagresors_id' => 18,
				'estadojudicial_id' => 1,
			),
			103 => 
			array (
				'id' => 111,
				'alertas_id' => 123,
				'name' => 'Policía Nacional',
				'tipoagresors_id' => 26,
				'estadojudicial_id' => 1,
			),
			104 => 
			array (
				'id' => 112,
				'alertas_id' => 124,
				'name' => 'Grupo empresarial Intur ',
				'tipoagresors_id' => 2,
				'estadojudicial_id' => 1,
			),
			105 => 
			array (
				'id' => 113,
				'alertas_id' => 125,
				'name' => 'Juan Orlando Herandez',
				'tipoagresors_id' => 27,
				'estadojudicial_id' => 1,
			),
			106 => 
			array (
				'id' => 114,
				'alertas_id' => 126,
				'name' => 'Desconocidos',
				'tipoagresors_id' => 18,
				'estadojudicial_id' => 1,
			),
			107 => 
			array (
				'id' => 115,
				'alertas_id' => 127,
				'name' => 'Desconocidos',
				'tipoagresors_id' => 18,
				'estadojudicial_id' => 1,
			),
			108 => 
			array (
				'id' => 116,
				'alertas_id' => 128,
				'name' => 'Franklin Neptali Escoto Cruz',
				'tipoagresors_id' => 1,
				'estadojudicial_id' => 1,
			),
			109 => 
			array (
				'id' => 117,
				'alertas_id' => 129,
				'name' => 'Agente de la Policía Nacional',
				'tipoagresors_id' => 26,
				'estadojudicial_id' => 1,
			),
			110 => 
			array (
				'id' => 118,
				'alertas_id' => 130,
				'name' => 'Fuerza de Tarea Conjunta Xatruch',
				'tipoagresors_id' => 26,
				'estadojudicial_id' => 1,
			),
			111 => 
			array (
				'id' => 119,
				'alertas_id' => 131,
				'name' => 'Empleado de la Corporación Dinant ',
				'tipoagresors_id' => 1,
				'estadojudicial_id' => 1,
			),
			112 => 
			array (
				'id' => 120,
				'alertas_id' => 132,
				'name' => 'Desconocidos',
				'tipoagresors_id' => 18,
				'estadojudicial_id' => 1,
			),
			113 => 
			array (
				'id' => 121,
				'alertas_id' => 133,
			'name' => 'Ministerio Publico (MP)',
				'tipoagresors_id' => 12,
				'estadojudicial_id' => 1,
			),
			114 => 
			array (
				'id' => 122,
				'alertas_id' => 134,
				'name' => 'Policía Nacional',
				'tipoagresors_id' => 26,
				'estadojudicial_id' => 1,
			),
			115 => 
			array (
				'id' => 123,
				'alertas_id' => 135,
				'name' => 'Javier López',
				'tipoagresors_id' => 20,
				'estadojudicial_id' => 1,
			),
			116 => 
			array (
				'id' => 124,
				'alertas_id' => 136,
				'name' => 'Activistas políticos ',
				'tipoagresors_id' => 1,
				'estadojudicial_id' => 1,
			),
			117 => 
			array (
				'id' => 125,
				'alertas_id' => 137,
				'name' => 'Guardias de seguridad del Hospital Escuela',
				'tipoagresors_id' => 5,
				'estadojudicial_id' => 1,
			),
			118 => 
			array (
				'id' => 126,
				'alertas_id' => 138,
				'name' => 'Desconocidos',
				'tipoagresors_id' => 18,
				'estadojudicial_id' => 1,
			),
			119 => 
			array (
				'id' => 127,
				'alertas_id' => 139,
				'name' => 'Elías Javier Chaín',
				'tipoagresors_id' => 20,
				'estadojudicial_id' => 1,
			),
			120 => 
			array (
				'id' => 128,
				'alertas_id' => 140,
				'name' => 'Ildez López',
				'tipoagresors_id' => 22,
				'estadojudicial_id' => 1,
			),
			121 => 
			array (
				'id' => 129,
				'alertas_id' => 142,
				'name' => 'Medios de Comunicación Locales',
				'tipoagresors_id' => 20,
				'estadojudicial_id' => 1,
			),
			122 => 
			array (
				'id' => 130,
				'alertas_id' => 143,
				'name' => 'Gobierno de Porfirio Lobo Sosa',
				'tipoagresors_id' => 22,
				'estadojudicial_id' => 1,
			),
			123 => 
			array (
				'id' => 131,
				'alertas_id' => 144,
			'name' => 'Tribunal Supremo Electoral (TSE)',
				'tipoagresors_id' => 22,
				'estadojudicial_id' => 1,
			),
			124 => 
			array (
				'id' => 132,
				'alertas_id' => 145,
			'name' => 'Dirección Nacional de Servicios Especiales de Investigación (DNSEI)',
				'tipoagresors_id' => 25,
				'estadojudicial_id' => 1,
			),
			125 => 
			array (
				'id' => 133,
				'alertas_id' => 146,
			'name' => 'Secretaría de Cultura, Artes y Deportes (SCAD)',
				'tipoagresors_id' => 25,
				'estadojudicial_id' => 1,
			),
			126 => 
			array (
				'id' => 134,
				'alertas_id' => 147,
				'name' => 'Desconocidos',
				'tipoagresors_id' => 18,
				'estadojudicial_id' => 1,
			),
			127 => 
			array (
				'id' => 135,
				'alertas_id' => 148,
				'name' => 'Desconocidos',
				'tipoagresors_id' => 18,
				'estadojudicial_id' => 1,
			),
			128 => 
			array (
				'id' => 136,
				'alertas_id' => 149,
				'name' => 'Desconocidos',
				'tipoagresors_id' => 18,
				'estadojudicial_id' => 1,
			),
			129 => 
			array (
				'id' => 137,
				'alertas_id' => 150,
				'name' => 'Desconocidos',
				'tipoagresors_id' => 18,
				'estadojudicial_id' => 1,
			),
			130 => 
			array (
				'id' => 138,
				'alertas_id' => 151,
				'name' => 'Desconocidos',
				'tipoagresors_id' => 18,
				'estadojudicial_id' => 1,
			),
			131 => 
			array (
				'id' => 139,
				'alertas_id' => 152,
				'name' => 'Diario La Tribuna ',
				'tipoagresors_id' => 33,
				'estadojudicial_id' => 1,
			),
			132 => 
			array (
				'id' => 140,
				'alertas_id' => 153,
				'name' => 'PIERCHO VISION ',
				'tipoagresors_id' => 33,
				'estadojudicial_id' => 1,
			),
			133 => 
			array (
				'id' => 141,
				'alertas_id' => 154,
			'name' => 'Dirección Nacional de Investigación Criminal (DNIC)',
				'tipoagresors_id' => 22,
				'estadojudicial_id' => 1,
			),
			134 => 
			array (
				'id' => 142,
				'alertas_id' => 155,
				'name' => 'Desconocidos',
				'tipoagresors_id' => 18,
				'estadojudicial_id' => 1,
			),
			135 => 
			array (
				'id' => 143,
				'alertas_id' => 156,
				'name' => 'Desconocidos',
				'tipoagresors_id' => 18,
				'estadojudicial_id' => 1,
			),
			136 => 
			array (
				'id' => 144,
				'alertas_id' => 157,
				'name' => 'Gobierno de Porfirio Lobo Sosa',
				'tipoagresors_id' => 22,
				'estadojudicial_id' => 1,
			),
			137 => 
			array (
				'id' => 145,
				'alertas_id' => 158,
				'name' => 'Comisión Nacional de Telecomunicaciones, CONATEL',
				'tipoagresors_id' => 25,
				'estadojudicial_id' => 1,
			),
			138 => 
			array (
				'id' => 146,
				'alertas_id' => 159,
				'name' => 'Desconocidos',
				'tipoagresors_id' => 1,
				'estadojudicial_id' => 1,
			),
			139 => 
			array (
				'id' => 147,
				'alertas_id' => 160,
				'name' => 'Desconocidos',
				'tipoagresors_id' => 18,
				'estadojudicial_id' => 1,
			),
			140 => 
			array (
				'id' => 148,
				'alertas_id' => 161,
				'name' => 'Desconocidos',
				'tipoagresors_id' => 1,
				'estadojudicial_id' => 1,
			),
			141 => 
			array (
				'id' => 149,
				'alertas_id' => 162,
				'name' => 'Desconocidos',
				'tipoagresors_id' => 18,
				'estadojudicial_id' => 1,
			),
			142 => 
			array (
				'id' => 150,
				'alertas_id' => 163,
				'name' => 'Desconocidos',
				'tipoagresors_id' => 18,
				'estadojudicial_id' => 1,
			),
			143 => 
			array (
				'id' => 151,
				'alertas_id' => 164,
				'name' => 'Héctor Hernández',
				'tipoagresors_id' => 3,
				'estadojudicial_id' => 1,
			),
			144 => 
			array (
				'id' => 152,
				'alertas_id' => 166,
				'name' => 'Desconocidos',
				'tipoagresors_id' => 18,
				'estadojudicial_id' => 1,
			),
			145 => 
			array (
				'id' => 153,
				'alertas_id' => 167,
				'name' => 'Osman Fernando Osorio Arguijo, Edgar Francisco Osorio Arguijo y Marvin Alonso Gómez',
				'tipoagresors_id' => 1,
				'estadojudicial_id' => 1,
			),
			146 => 
			array (
				'id' => 154,
				'alertas_id' => 168,
				'name' => 'Desconocidos',
				'tipoagresors_id' => 18,
				'estadojudicial_id' => 1,
			),
			147 => 
			array (
				'id' => 155,
				'alertas_id' => 169,
				'name' => 'Desconocidos',
				'tipoagresors_id' => 18,
				'estadojudicial_id' => 1,
			),
			148 => 
			array (
				'id' => 156,
				'alertas_id' => 170,
			'name' => 'Corte Suprema de Justicia (CSJ), a través del Tribunal de Sentencias',
				'tipoagresors_id' => 12,
				'estadojudicial_id' => 1,
			),
			149 => 
			array (
				'id' => 157,
				'alertas_id' => 171,
				'name' => 'Desconocidos',
				'tipoagresors_id' => 1,
				'estadojudicial_id' => 1,
			),
			150 => 
			array (
				'id' => 158,
				'alertas_id' => 172,
				'name' => 'Desconocidos',
				'tipoagresors_id' => 18,
				'estadojudicial_id' => 1,
			),
			151 => 
			array (
				'id' => 159,
				'alertas_id' => 173,
				'name' => 'Desconocidos',
				'tipoagresors_id' => 18,
				'estadojudicial_id' => 1,
			),
			152 => 
			array (
				'id' => 160,
				'alertas_id' => 174,
				'name' => 'Desconocidos',
				'tipoagresors_id' => 18,
				'estadojudicial_id' => 1,
			),
			153 => 
			array (
				'id' => 161,
				'alertas_id' => 175,
				'name' => 'Policía Nacional de Honduras',
				'tipoagresors_id' => 26,
				'estadojudicial_id' => 1,
			),
			154 => 
			array (
				'id' => 162,
				'alertas_id' => 176,
				'name' => 'Secretario de Estado en los Despachos de Educación ',
				'tipoagresors_id' => 22,
				'estadojudicial_id' => 1,
			),
			155 => 
			array (
				'id' => 163,
				'alertas_id' => 177,
				'name' => 'Sociedad Mercantil La Victoria ',
				'tipoagresors_id' => 2,
				'estadojudicial_id' => 1,
			),
			156 => 
			array (
				'id' => 164,
				'alertas_id' => 178,
				'name' => 'Policía Nacional de Honduras',
				'tipoagresors_id' => 26,
				'estadojudicial_id' => 1,
			),
			157 => 
			array (
				'id' => 165,
				'alertas_id' => 179,
				'name' => 'Alicia Lizeth Naigh Reyes ',
				'tipoagresors_id' => 12,
				'estadojudicial_id' => 1,
			),
			158 => 
			array (
				'id' => 166,
				'alertas_id' => 180,
				'name' => 'Gobierno de Porfirio Lobo Sosa',
				'tipoagresors_id' => 25,
				'estadojudicial_id' => 1,
			),
			159 => 
			array (
				'id' => 167,
				'alertas_id' => 181,
				'name' => 'Desconocidos',
				'tipoagresors_id' => 18,
				'estadojudicial_id' => 1,
			),
			160 => 
			array (
				'id' => 168,
				'alertas_id' => 182,
				'name' => 'Alfonso Navarrete Rivera',
				'tipoagresors_id' => 3,
				'estadojudicial_id' => 1,
			),
			161 => 
			array (
				'id' => 169,
				'alertas_id' => 183,
				'name' => 'Desconocidos',
				'tipoagresors_id' => 18,
				'estadojudicial_id' => 1,
			),
			162 => 
			array (
				'id' => 170,
				'alertas_id' => 184,
				'name' => 'Policía Nacional de Honduras',
				'tipoagresors_id' => 26,
				'estadojudicial_id' => 1,
			),
			163 => 
			array (
				'id' => 171,
				'alertas_id' => 185,
				'name' => 'Policía Nacional de Honduras',
				'tipoagresors_id' => 26,
				'estadojudicial_id' => 1,
			),
			164 => 
			array (
				'id' => 172,
				'alertas_id' => 186,
				'name' => 'Desconocidos',
				'tipoagresors_id' => 18,
				'estadojudicial_id' => 1,
			),
			165 => 
			array (
				'id' => 173,
				'alertas_id' => 187,
				'name' => 'Carlos Chinchilla',
				'tipoagresors_id' => 25,
				'estadojudicial_id' => 1,
			),
			166 => 
			array (
				'id' => 174,
				'alertas_id' => 188,
				'name' => 'Canal Telered 21',
				'tipoagresors_id' => 20,
				'estadojudicial_id' => 1,
			),
			167 => 
			array (
				'id' => 175,
				'alertas_id' => 189,
				'name' => 'Guardias de seguridad del Hospital Escuela',
				'tipoagresors_id' => 25,
				'estadojudicial_id' => 1,
			),
			168 => 
			array (
				'id' => 176,
				'alertas_id' => 190,
				'name' => 'Desconocidos',
				'tipoagresors_id' => 18,
				'estadojudicial_id' => 1,
			),
			169 => 
			array (
				'id' => 177,
				'alertas_id' => 191,
			'name' => 'Partido Nacional  y a las Fuerzas Armadas de Honduras (FFAA) ',
				'tipoagresors_id' => 22,
				'estadojudicial_id' => 1,
			),
			170 => 
			array (
				'id' => 178,
				'alertas_id' => 192,
				'name' => 'Esaú Gutiérrez ',
				'tipoagresors_id' => 22,
				'estadojudicial_id' => 1,
			),
			171 => 
			array (
				'id' => 179,
				'alertas_id' => 193,
				'name' => 'Desconocidos',
				'tipoagresors_id' => 18,
				'estadojudicial_id' => 1,
			),
			172 => 
			array (
				'id' => 180,
				'alertas_id' => 194,
				'name' => 'Desconocidos',
				'tipoagresors_id' => 18,
				'estadojudicial_id' => 1,
			),
			173 => 
			array (
				'id' => 181,
				'alertas_id' => 195,
				'name' => 'Policía Nacional de Honduras',
				'tipoagresors_id' => 26,
				'estadojudicial_id' => 1,
			),
			174 => 
			array (
				'id' => 182,
				'alertas_id' => 196,
				'name' => 'Desconocido',
				'tipoagresors_id' => 18,
				'estadojudicial_id' => 1,
			),
			175 => 
			array (
				'id' => 183,
				'alertas_id' => 197,
				'name' => 'Desconocido',
				'tipoagresors_id' => 18,
				'estadojudicial_id' => 1,
			),
			176 => 
			array (
				'id' => 184,
				'alertas_id' => 198,
				'name' => 'Desconocido',
				'tipoagresors_id' => 28,
				'estadojudicial_id' => 1,
			),
			177 => 
			array (
				'id' => 185,
				'alertas_id' => 199,
				'name' => 'desconocidos ',
				'tipoagresors_id' => 28,
				'estadojudicial_id' => 1,
			),
			178 => 
			array (
				'id' => 186,
				'alertas_id' => 200,
				'name' => 'desconocidos ',
				'tipoagresors_id' => 26,
				'estadojudicial_id' => 1,
			),
			179 => 
			array (
				'id' => 187,
				'alertas_id' => 201,
				'name' => 'Óscar Álvarez',
				'tipoagresors_id' => 27,
				'estadojudicial_id' => 1,
			),
			180 => 
			array (
				'id' => 188,
				'alertas_id' => 202,
				'name' => 'Guardias del Hospital Escuela Universitario',
				'tipoagresors_id' => 5,
				'estadojudicial_id' => 1,
			),
			181 => 
			array (
				'id' => 189,
				'alertas_id' => 203,
				'name' => 'antifem',
				'tipoagresors_id' => 18,
				'estadojudicial_id' => 1,
			),
			182 => 
			array (
				'id' => 190,
				'alertas_id' => 204,
				'name' => 'Sujetos no identificados/policias',
				'tipoagresors_id' => 26,
				'estadojudicial_id' => 1,
			),
			183 => 
			array (
				'id' => 191,
				'alertas_id' => 205,
				'name' => 'Policías Motorizados ',
				'tipoagresors_id' => 26,
				'estadojudicial_id' => 1,
			),
			184 => 
			array (
				'id' => 192,
				'alertas_id' => 206,
				'name' => 'desconocido',
				'tipoagresors_id' => 18,
				'estadojudicial_id' => 1,
			),
			185 => 
			array (
				'id' => 193,
				'alertas_id' => 207,
				'name' => 'Marlon Oniel Escoto Valerio',
				'tipoagresors_id' => 15,
				'estadojudicial_id' => 1,
			),
			186 => 
			array (
				'id' => 194,
				'alertas_id' => 208,
				'name' => 'Áfrico Madrid',
				'tipoagresors_id' => 25,
				'estadojudicial_id' => 1,
			),
			187 => 
			array (
				'id' => 195,
				'alertas_id' => 209,
				'name' => 'Juan Orlando Hernandez',
				'tipoagresors_id' => 26,
				'estadojudicial_id' => 1,
			),
			188 => 
			array (
				'id' => 196,
				'alertas_id' => 210,
				'name' => 'Belinda Flores',
				'tipoagresors_id' => 15,
				'estadojudicial_id' => 1,
			),
			189 => 
			array (
				'id' => 197,
				'alertas_id' => 211,
				'name' => 'Bernardo Alvarado',
				'tipoagresors_id' => 1,
				'estadojudicial_id' => 1,
			),
			190 => 
			array (
				'id' => 198,
				'alertas_id' => 212,
				'name' => 'Articulo 23 Diario Oficial La Gaceta ',
				'tipoagresors_id' => 27,
				'estadojudicial_id' => 1,
			),
			191 => 
			array (
				'id' => 199,
				'alertas_id' => 213,
				'name' => 'Ricardo Álvarez',
				'tipoagresors_id' => 22,
				'estadojudicial_id' => 1,
			),
			192 => 
			array (
				'id' => 200,
				'alertas_id' => 214,
				'name' => 'íctor Manuel Flores Montalván',
				'tipoagresors_id' => 3,
				'estadojudicial_id' => 1,
			),
			193 => 
			array (
				'id' => 201,
				'alertas_id' => 215,
				'name' => 'Eugenia Mourra ',
				'tipoagresors_id' => 22,
				'estadojudicial_id' => 1,
			),
			194 => 
			array (
				'id' => 202,
				'alertas_id' => 216,
				'name' => 'Juan Orlando Hernandez',
				'tipoagresors_id' => 16,
				'estadojudicial_id' => 1,
			),
			195 => 
			array (
				'id' => 203,
				'alertas_id' => 217,
				'name' => 'Canal 8',
				'tipoagresors_id' => 33,
				'estadojudicial_id' => 1,
			),
			196 => 
			array (
				'id' => 204,
				'alertas_id' => 218,
				'name' => 'Juan Orlando Hernandez',
				'tipoagresors_id' => 16,
				'estadojudicial_id' => 1,
			),
			197 => 
			array (
				'id' => 205,
				'alertas_id' => 219,
				'name' => 'No identificados',
				'tipoagresors_id' => 26,
				'estadojudicial_id' => 1,
			),
			198 => 
			array (
				'id' => 206,
				'alertas_id' => 220,
				'name' => 'Desconocido ',
				'tipoagresors_id' => 18,
				'estadojudicial_id' => 1,
			),
			199 => 
			array (
				'id' => 207,
				'alertas_id' => 221,
				'name' => 'desconocidos ',
				'tipoagresors_id' => 18,
				'estadojudicial_id' => 1,
			),
			200 => 
			array (
				'id' => 208,
				'alertas_id' => 222,
				'name' => 'Militares',
				'tipoagresors_id' => 26,
				'estadojudicial_id' => 1,
			),
			201 => 
			array (
				'id' => 209,
				'alertas_id' => 223,
				'name' => 'Sujeto desconocido',
				'tipoagresors_id' => 18,
				'estadojudicial_id' => 1,
			),
			202 => 
			array (
				'id' => 210,
				'alertas_id' => 224,
				'name' => 'Antonio Mejía',
				'tipoagresors_id' => 27,
				'estadojudicial_id' => 1,
			),
			203 => 
			array (
				'id' => 211,
				'alertas_id' => 225,
				'name' => 'Belinda Flores ',
				'tipoagresors_id' => 15,
				'estadojudicial_id' => 1,
			),
			204 => 
			array (
				'id' => 212,
				'alertas_id' => 226,
				'name' => 'Sujetos no identificados',
				'tipoagresors_id' => 18,
				'estadojudicial_id' => 1,
			),
			205 => 
			array (
				'id' => 213,
				'alertas_id' => 227,
				'name' => 'Maurico Oliva',
				'tipoagresors_id' => 27,
				'estadojudicial_id' => 1,
			),
			206 => 
			array (
				'id' => 214,
				'alertas_id' => 228,
				'name' => 'Policía Militar',
				'tipoagresors_id' => 26,
				'estadojudicial_id' => 1,
			),
			207 => 
			array (
				'id' => 215,
				'alertas_id' => 229,
				'name' => 'Olvin Mejía y  Denis Mejía.',
				'tipoagresors_id' => 22,
				'estadojudicial_id' => 1,
			),
			208 => 
			array (
				'id' => 216,
				'alertas_id' => 230,
				'name' => 'Juan Orlando Hernandez',
				'tipoagresors_id' => 16,
				'estadojudicial_id' => 1,
			),
			209 => 
			array (
				'id' => 217,
				'alertas_id' => 231,
				'name' => 'Sujetos no identificados',
				'tipoagresors_id' => 18,
				'estadojudicial_id' => 1,
			),
			210 => 
			array (
				'id' => 218,
				'alertas_id' => 232,
				'name' => 'Sujeto no identificado',
				'tipoagresors_id' => 18,
				'estadojudicial_id' => 1,
			),
			211 => 
			array (
				'id' => 219,
				'alertas_id' => 233,
				'name' => 'Sujeto desconocido',
				'tipoagresors_id' => 18,
				'estadojudicial_id' => 1,
			),
			212 => 
			array (
				'id' => 220,
				'alertas_id' => 234,
				'name' => 'Juan Orlando Hernandez',
				'tipoagresors_id' => 16,
				'estadojudicial_id' => 1,
			),
			213 => 
			array (
				'id' => 221,
				'alertas_id' => 235,
				'name' => 'Diario Tiempo',
				'tipoagresors_id' => 33,
				'estadojudicial_id' => 1,
			),
			214 => 
			array (
				'id' => 222,
				'alertas_id' => 236,
				'name' => ' Miguel Callejas',
				'tipoagresors_id' => 17,
				'estadojudicial_id' => 1,
			),
			215 => 
			array (
				'id' => 223,
				'alertas_id' => 237,
				'name' => 'José Socorro Sánchez',
				'tipoagresors_id' => 3,
				'estadojudicial_id' => 1,
			),
			216 => 
			array (
				'id' => 224,
				'alertas_id' => 238,
				'name' => 'Jonathan Joseph Cookborn Delgado',
				'tipoagresors_id' => 1,
				'estadojudicial_id' => 1,
			),
			217 => 
			array (
				'id' => 225,
				'alertas_id' => 239,
				'name' => 'Secretaría de Seguridad ',
				'tipoagresors_id' => 22,
				'estadojudicial_id' => 1,
			),
			218 => 
			array (
				'id' => 226,
				'alertas_id' => 240,
				'name' => 'Sujeto desconocido',
				'tipoagresors_id' => 18,
				'estadojudicial_id' => 1,
			),
			219 => 
			array (
				'id' => 227,
				'alertas_id' => 241,
				'name' => 'Juan Orlando Hernandez',
				'tipoagresors_id' => 16,
				'estadojudicial_id' => 1,
			),
			220 => 
			array (
				'id' => 228,
				'alertas_id' => 242,
				'name' => 'Sujetos no identificados',
				'tipoagresors_id' => 18,
				'estadojudicial_id' => 1,
			),
			221 => 
			array (
				'id' => 229,
				'alertas_id' => 243,
				'name' => 'Sujetos no identificados',
				'tipoagresors_id' => 18,
				'estadojudicial_id' => 1,
			),
			222 => 
			array (
				'id' => 230,
				'alertas_id' => 244,
				'name' => 'Sujetos no identificados',
				'tipoagresors_id' => 18,
				'estadojudicial_id' => 1,
			),
			223 => 
			array (
				'id' => 231,
				'alertas_id' => 245,
				'name' => 'Sujetos no identificados',
				'tipoagresors_id' => 18,
				'estadojudicial_id' => 1,
			),
			224 => 
			array (
				'id' => 232,
				'alertas_id' => 246,
				'name' => 'Leopoldo Crivelli',
				'tipoagresors_id' => 1,
				'estadojudicial_id' => 1,
			),
			225 => 
			array (
				'id' => 233,
				'alertas_id' => 247,
				'name' => 'José Antonio Laínez',
				'tipoagresors_id' => 3,
				'estadojudicial_id' => 1,
			),
			226 => 
			array (
				'id' => 234,
				'alertas_id' => 248,
				'name' => 'Rigoberto Cuellar y Sonia Gálvez',
				'tipoagresors_id' => 22,
				'estadojudicial_id' => 1,
			),
			227 => 
			array (
				'id' => 235,
				'alertas_id' => 249,
				'name' => 'Sujetos no identificados',
				'tipoagresors_id' => 18,
				'estadojudicial_id' => 1,
			),
			228 => 
			array (
				'id' => 236,
				'alertas_id' => 250,
				'name' => 'loco al volante y la negligencia médica ',
				'tipoagresors_id' => 1,
				'estadojudicial_id' => 1,
			),
			229 => 
			array (
				'id' => 237,
				'alertas_id' => 251,
				'name' => 'Gobierno de Honduras',
				'tipoagresors_id' => 18,
				'estadojudicial_id' => 1,
			),
			230 => 
			array (
				'id' => 238,
				'alertas_id' => 252,
				'name' => 'Sonia Inés Gálvez ',
				'tipoagresors_id' => 1,
				'estadojudicial_id' => 1,
			),
			231 => 
			array (
				'id' => 239,
				'alertas_id' => 253,
				'name' => 'Magistrados del Tribunal Superior de Cuentas',
				'tipoagresors_id' => 22,
				'estadojudicial_id' => 1,
			),
			232 => 
			array (
				'id' => 240,
				'alertas_id' => 254,
				'name' => 'Gilma Ondina Castillo ',
				'tipoagresors_id' => 3,
				'estadojudicial_id' => 1,
			),
			233 => 
			array (
				'id' => 241,
				'alertas_id' => 255,
				'name' => 'Comité Técnico de Fideicomiso ',
				'tipoagresors_id' => 22,
				'estadojudicial_id' => 1,
			),
			234 => 
			array (
				'id' => 242,
				'alertas_id' => 256,
				'name' => 'CONATEL',
				'tipoagresors_id' => 25,
				'estadojudicial_id' => 1,
			),
			235 => 
			array (
				'id' => 243,
				'alertas_id' => 257,
				'name' => 'Sujeto desconocido',
				'tipoagresors_id' => 18,
				'estadojudicial_id' => 1,
			),
			236 => 
			array (
				'id' => 244,
				'alertas_id' => 258,
				'name' => 'Carlos Acosta Meléndez',
				'tipoagresors_id' => 1,
				'estadojudicial_id' => 1,
			),
			237 => 
			array (
				'id' => 245,
				'alertas_id' => 259,
				'name' => 'FUSINA',
				'tipoagresors_id' => 26,
				'estadojudicial_id' => 1,
			),
			238 => 
			array (
				'id' => 246,
				'alertas_id' => 260,
				'name' => 'Belinda Flores',
				'tipoagresors_id' => 15,
				'estadojudicial_id' => 1,
			),
			239 => 
			array (
				'id' => 247,
				'alertas_id' => 261,
				'name' => 'Militar ',
				'tipoagresors_id' => 26,
				'estadojudicial_id' => 1,
			),
			240 => 
			array (
				'id' => 248,
				'alertas_id' => 262,
				'name' => 'Francisco Herrera',
				'tipoagresors_id' => 15,
				'estadojudicial_id' => 1,
			),
			241 => 
			array (
				'id' => 249,
				'alertas_id' => 263,
				'name' => 'Waldina Paz',
				'tipoagresors_id' => 29,
				'estadojudicial_id' => 1,
			),
			242 => 
			array (
				'id' => 250,
				'alertas_id' => 264,
				'name' => 'Sujetos no identificados',
				'tipoagresors_id' => 18,
				'estadojudicial_id' => 1,
			),
			243 => 
			array (
				'id' => 251,
				'alertas_id' => 265,
				'name' => 'Arturo Corrales',
				'tipoagresors_id' => 22,
				'estadojudicial_id' => 1,
			),
			244 => 
			array (
				'id' => 252,
				'alertas_id' => 266,
				'name' => 'Juan Orlando Hernandez',
				'tipoagresors_id' => 16,
				'estadojudicial_id' => 1,
			),
			245 => 
			array (
				'id' => 253,
				'alertas_id' => 267,
				'name' => 'Sujetos no identificados',
				'tipoagresors_id' => 15,
				'estadojudicial_id' => 1,
			),
			246 => 
			array (
				'id' => 254,
				'alertas_id' => 268,
				'name' => 'Sujeto desconocido',
				'tipoagresors_id' => 18,
				'estadojudicial_id' => 1,
			),
			247 => 
			array (
				'id' => 255,
				'alertas_id' => 269,
				'name' => 'Sujeto desconocido',
				'tipoagresors_id' => 18,
				'estadojudicial_id' => 1,
			),
			248 => 
			array (
				'id' => 256,
				'alertas_id' => 270,
				'name' => 'Sujeto desconocido',
				'tipoagresors_id' => 18,
				'estadojudicial_id' => 1,
			),
			249 => 
			array (
				'id' => 257,
				'alertas_id' => 271,
				'name' => 'Jerry Dave Hynds Julio',
				'tipoagresors_id' => 27,
				'estadojudicial_id' => 1,
			),
			250 => 
			array (
				'id' => 258,
				'alertas_id' => 272,
				'name' => 'Congreso Nacional de la República de Honduras',
				'tipoagresors_id' => 22,
				'estadojudicial_id' => 1,
			),
			251 => 
			array (
				'id' => 259,
				'alertas_id' => 273,
				'name' => 'Maurico Oliva',
				'tipoagresors_id' => 27,
				'estadojudicial_id' => 1,
			),
			252 => 
			array (
				'id' => 260,
				'alertas_id' => 274,
				'name' => 'Julieta Castellanos',
				'tipoagresors_id' => 15,
				'estadojudicial_id' => 1,
			),
			253 => 
			array (
				'id' => 261,
				'alertas_id' => 275,
				'name' => 'Policía Nacional',
				'tipoagresors_id' => 26,
				'estadojudicial_id' => 1,
			),
			254 => 
			array (
				'id' => 262,
				'alertas_id' => 276,
				'name' => 'Jesús Mejía',
				'tipoagresors_id' => 22,
				'estadojudicial_id' => 1,
			),
			255 => 
			array (
				'id' => 263,
				'alertas_id' => 277,
				'name' => 'Juan Orlando Hernandez y Hilda Hernández',
				'tipoagresors_id' => 16,
				'estadojudicial_id' => 1,
			),
			256 => 
			array (
				'id' => 264,
				'alertas_id' => 278,
				'name' => 'Sujeto desconocido',
				'tipoagresors_id' => 18,
				'estadojudicial_id' => 1,
			),
			257 => 
			array (
				'id' => 265,
				'alertas_id' => 279,
				'name' => 'Óscar Yánez',
				'tipoagresors_id' => 3,
				'estadojudicial_id' => 1,
			),
			258 => 
			array (
				'id' => 266,
				'alertas_id' => 280,
				'name' => 'Policía Nacional',
				'tipoagresors_id' => 26,
				'estadojudicial_id' => 1,
			),
			259 => 
			array (
				'id' => 267,
				'alertas_id' => 281,
				'name' => 'Policía Militar ',
				'tipoagresors_id' => 26,
				'estadojudicial_id' => 1,
			),
			260 => 
			array (
				'id' => 268,
				'alertas_id' => 282,
				'name' => 'Jefry Miguel López Ocampo',
				'tipoagresors_id' => 3,
				'estadojudicial_id' => 1,
			),
			261 => 
			array (
				'id' => 269,
				'alertas_id' => 283,
				'name' => 'Gilma Ondina Castillo Rodríguez',
				'tipoagresors_id' => 3,
				'estadojudicial_id' => 1,
			),
			262 => 
			array (
				'id' => 270,
				'alertas_id' => 284,
				'name' => 'gobierno y crimen organizado ',
				'tipoagresors_id' => 16,
				'estadojudicial_id' => 1,
			),
			263 => 
			array (
				'id' => 271,
				'alertas_id' => 285,
				'name' => 'Sujetos no identificados',
				'tipoagresors_id' => 18,
				'estadojudicial_id' => 1,
			),
			264 => 
			array (
				'id' => 272,
				'alertas_id' => 286,
				'name' => 'Gilma Ondina Castillo López',
				'tipoagresors_id' => 3,
				'estadojudicial_id' => 1,
			),
			265 => 
			array (
				'id' => 273,
				'alertas_id' => 287,
				'name' => 'Belinda Flores Mendoza',
				'tipoagresors_id' => 15,
				'estadojudicial_id' => 1,
			),
			266 => 
			array (
				'id' => 274,
				'alertas_id' => 288,
				'name' => 'Gobierno de Honduras',
				'tipoagresors_id' => 1,
				'estadojudicial_id' => 1,
			),
			267 => 
			array (
				'id' => 275,
				'alertas_id' => 289,
				'name' => 'Sujetos no identificados',
				'tipoagresors_id' => 18,
				'estadojudicial_id' => 1,
			),
			268 => 
			array (
				'id' => 276,
				'alertas_id' => 290,
				'name' => 'Abelino Martínez y Mauricio Gómez',
				'tipoagresors_id' => 1,
				'estadojudicial_id' => 1,
			),
			269 => 
			array (
				'id' => 277,
				'alertas_id' => 291,
				'name' => 'Juan Orlando Hernandez',
				'tipoagresors_id' => 16,
				'estadojudicial_id' => 1,
			),
			270 => 
			array (
				'id' => 278,
				'alertas_id' => 292,
				'name' => 'Óscar Yánez y  Donina Matamoros',
				'tipoagresors_id' => 3,
				'estadojudicial_id' => 1,
			),
			271 => 
			array (
				'id' => 279,
				'alertas_id' => 293,
				'name' => 'Julieta Castellanos',
				'tipoagresors_id' => 15,
				'estadojudicial_id' => 1,
			),
			272 => 
			array (
				'id' => 280,
				'alertas_id' => 294,
				'name' => 'Víctor Ventura',
				'tipoagresors_id' => 3,
				'estadojudicial_id' => 1,
			),
			273 => 
			array (
				'id' => 281,
				'alertas_id' => 295,
				'name' => 'Sujeto desconocido',
				'tipoagresors_id' => 18,
				'estadojudicial_id' => 1,
			),
			274 => 
			array (
				'id' => 282,
				'alertas_id' => 296,
				'name' => 'José Antonio Laínez',
				'tipoagresors_id' => 3,
				'estadojudicial_id' => 1,
			),
			275 => 
			array (
				'id' => 283,
				'alertas_id' => 297,
				'name' => 'Sujeto desconocido',
				'tipoagresors_id' => 18,
				'estadojudicial_id' => 1,
			),
			276 => 
			array (
				'id' => 284,
				'alertas_id' => 298,
				'name' => 'Sujeto desconocido',
				'tipoagresors_id' => 18,
				'estadojudicial_id' => 1,
			),
			277 => 
			array (
				'id' => 285,
				'alertas_id' => 299,
				'name' => 'Policía Militar',
				'tipoagresors_id' => 26,
				'estadojudicial_id' => 1,
			),
			278 => 
			array (
				'id' => 286,
				'alertas_id' => 300,
				'name' => 'Mayra Lizeth',
				'tipoagresors_id' => 12,
				'estadojudicial_id' => 1,
			),
			279 => 
			array (
				'id' => 287,
				'alertas_id' => 301,
				'name' => 'Juan Orlando Hernandez',
				'tipoagresors_id' => 16,
				'estadojudicial_id' => 1,
			),
			280 => 
			array (
				'id' => 288,
				'alertas_id' => 302,
				'name' => ' Juan Carlos Reyes',
				'tipoagresors_id' => 1,
				'estadojudicial_id' => 1,
			),
			281 => 
			array (
				'id' => 289,
				'alertas_id' => 303,
				'name' => 'Sánchez',
				'tipoagresors_id' => 34,
				'estadojudicial_id' => 1,
			),
			282 => 
			array (
				'id' => 290,
				'alertas_id' => 304,
				'name' => 'Juan Orlando Hernandez',
				'tipoagresors_id' => 16,
				'estadojudicial_id' => 1,
			),
			283 => 
			array (
				'id' => 291,
				'alertas_id' => 305,
				'name' => 'Hondureños por la Paz y la Seguridad',
				'tipoagresors_id' => 35,
				'estadojudicial_id' => 1,
			),
			284 => 
			array (
				'id' => 292,
				'alertas_id' => 306,
				'name' => 'CONATEL',
				'tipoagresors_id' => 22,
				'estadojudicial_id' => 1,
			),
			285 => 
			array (
				'id' => 293,
				'alertas_id' => 307,
				'name' => 'Víctor Mario Ávila Galeano',
				'tipoagresors_id' => 26,
				'estadojudicial_id' => 1,
			),
			286 => 
			array (
				'id' => 294,
				'alertas_id' => 308,
				'name' => 'Juan Carlos Reyes',
				'tipoagresors_id' => 35,
				'estadojudicial_id' => 1,
			),
			287 => 
			array (
				'id' => 295,
				'alertas_id' => 309,
				'name' => 'Héctor Iván Mejía Velásquez',
				'tipoagresors_id' => 34,
				'estadojudicial_id' => 1,
			),
			288 => 
			array (
				'id' => 296,
				'alertas_id' => 310,
				'name' => 'Sujeto desconocido',
				'tipoagresors_id' => 18,
				'estadojudicial_id' => 1,
			),
			289 => 
			array (
				'id' => 297,
				'alertas_id' => 311,
				'name' => 'Sujeto desconocido',
				'tipoagresors_id' => 18,
				'estadojudicial_id' => 1,
			),
			290 => 
			array (
				'id' => 298,
				'alertas_id' => 312,
				'name' => 'Sujeto desconocido',
				'tipoagresors_id' => 18,
				'estadojudicial_id' => 1,
			),
			291 => 
			array (
				'id' => 299,
				'alertas_id' => 313,
				'name' => 'Juan Orlando Hernandez',
				'tipoagresors_id' => 16,
				'estadojudicial_id' => 1,
			),
			292 => 
			array (
				'id' => 300,
				'alertas_id' => 314,
				'name' => 'Juan Orlando Hernandez',
				'tipoagresors_id' => 16,
				'estadojudicial_id' => 1,
			),
			293 => 
			array (
				'id' => 301,
				'alertas_id' => 315,
				'name' => 'Empleada del Dinaf',
				'tipoagresors_id' => 1,
				'estadojudicial_id' => 1,
			),
			294 => 
			array (
				'id' => 302,
				'alertas_id' => 316,
				'name' => 'Eduardo José López Gutiérrez',
				'tipoagresors_id' => 1,
				'estadojudicial_id' => 1,
			),
			295 => 
			array (
				'id' => 303,
				'alertas_id' => 317,
				'name' => 'Conadese',
				'tipoagresors_id' => 25,
				'estadojudicial_id' => 1,
			),
			296 => 
			array (
				'id' => 304,
				'alertas_id' => 317,
				'name' => 'Conadese',
				'tipoagresors_id' => 25,
				'estadojudicial_id' => 1,
			),
			297 => 
			array (
				'id' => 305,
				'alertas_id' => 318,
				'name' => 'Sujeto desconocido',
				'tipoagresors_id' => 18,
				'estadojudicial_id' => 1,
			),
			298 => 
			array (
				'id' => 306,
				'alertas_id' => 319,
				'name' => 'Sujeto desconocido',
				'tipoagresors_id' => 18,
				'estadojudicial_id' => 1,
			),
			299 => 
			array (
				'id' => 307,
				'alertas_id' => 320,
				'name' => 'Gilma Ondina Castillo Rodríguez',
				'tipoagresors_id' => 3,
				'estadojudicial_id' => 1,
			),
			300 => 
			array (
				'id' => 308,
				'alertas_id' => 321,
				'name' => 'Nelson René Chávez Hernández.',
				'tipoagresors_id' => 3,
				'estadojudicial_id' => 1,
			),
			301 => 
			array (
				'id' => 309,
				'alertas_id' => 322,
				'name' => 'Ebal Díaz',
				'tipoagresors_id' => 22,
				'estadojudicial_id' => 1,
			),
			302 => 
			array (
				'id' => 310,
				'alertas_id' => 323,
				'name' => 'Nasry Asfura',
				'tipoagresors_id' => 3,
				'estadojudicial_id' => 1,
			),
			303 => 
			array (
				'id' => 311,
				'alertas_id' => 324,
				'name' => 'Sujeto desconocido',
				'tipoagresors_id' => 18,
				'estadojudicial_id' => 1,
			),
			304 => 
			array (
				'id' => 312,
				'alertas_id' => 325,
				'name' => 'Policía Nacional',
				'tipoagresors_id' => 34,
				'estadojudicial_id' => 1,
			),
			305 => 
			array (
				'id' => 313,
				'alertas_id' => 326,
				'name' => 'Policía de Transito ',
				'tipoagresors_id' => 34,
				'estadojudicial_id' => 1,
			),
			306 => 
			array (
				'id' => 314,
				'alertas_id' => 327,
				'name' => 'Dagoberto Aspra Iglesias',
				'tipoagresors_id' => 37,
				'estadojudicial_id' => 1,
			),
			307 => 
			array (
				'id' => 315,
				'alertas_id' => 328,
				'name' => 'Policía Militar',
				'tipoagresors_id' => 26,
				'estadojudicial_id' => 1,
			),
			308 => 
			array (
				'id' => 316,
				'alertas_id' => 328,
				'name' => 'Policía Militar',
				'tipoagresors_id' => 26,
				'estadojudicial_id' => 1,
			),
			309 => 
			array (
				'id' => 317,
				'alertas_id' => 329,
				'name' => 'Marlon Oniel Escoto Valerio',
				'tipoagresors_id' => 15,
				'estadojudicial_id' => 1,
			),
			310 => 
			array (
				'id' => 318,
				'alertas_id' => 330,
				'name' => 'Gilma Ondina Castillo',
				'tipoagresors_id' => 3,
				'estadojudicial_id' => 1,
			),
			311 => 
			array (
				'id' => 319,
				'alertas_id' => 331,
				'name' => 'Miriam Rodríguez',
				'tipoagresors_id' => 3,
				'estadojudicial_id' => 1,
			),
			312 => 
			array (
				'id' => 320,
				'alertas_id' => 332,
				'name' => 'Evelyn Salgado',
				'tipoagresors_id' => 1,
				'estadojudicial_id' => 1,
			),
			313 => 
			array (
				'id' => 321,
				'alertas_id' => 333,
				'name' => 'Sujeto desconocido',
				'tipoagresors_id' => 18,
				'estadojudicial_id' => 1,
			),
			314 => 
			array (
				'id' => 322,
				'alertas_id' => 334,
				'name' => 'Policía Militar',
				'tipoagresors_id' => 26,
				'estadojudicial_id' => 1,
			),
			315 => 
			array (
				'id' => 323,
				'alertas_id' => 335,
				'name' => 'Sujetos no identificados',
				'tipoagresors_id' => 18,
				'estadojudicial_id' => 1,
			),
			316 => 
			array (
				'id' => 324,
				'alertas_id' => 336,
				'name' => 'Marlon Oniel Escoto Valerio',
				'tipoagresors_id' => 15,
				'estadojudicial_id' => 1,
			),
			317 => 
			array (
				'id' => 325,
				'alertas_id' => 337,
				'name' => 'Juan Carlos Reyes Flores',
				'tipoagresors_id' => 1,
				'estadojudicial_id' => 1,
			),
			318 => 
			array (
				'id' => 326,
				'alertas_id' => 338,
				'name' => 'Marlon Oniel Escoto Valerio',
				'tipoagresors_id' => 15,
				'estadojudicial_id' => 1,
			),
			319 => 
			array (
				'id' => 327,
				'alertas_id' => 339,
				'name' => 'Policía Nacional',
				'tipoagresors_id' => 26,
				'estadojudicial_id' => 1,
			),
			320 => 
			array (
				'id' => 328,
				'alertas_id' => 340,
				'name' => 'Marlon Oniel Escoto Valerio',
				'tipoagresors_id' => 15,
				'estadojudicial_id' => 1,
			),
			321 => 
			array (
				'id' => 329,
				'alertas_id' => 341,
				'name' => 'Reinaldo Sánchez',
				'tipoagresors_id' => 22,
				'estadojudicial_id' => 1,
			),
			322 => 
			array (
				'id' => 330,
				'alertas_id' => 342,
				'name' => 'Sujeto desconocido',
				'tipoagresors_id' => 18,
				'estadojudicial_id' => 1,
			),
			323 => 
			array (
				'id' => 331,
				'alertas_id' => 343,
				'name' => 'Óscar Álvarez',
				'tipoagresors_id' => 29,
				'estadojudicial_id' => 1,
			),
			324 => 
			array (
				'id' => 332,
				'alertas_id' => 344,
				'name' => 'Policía Nacional',
				'tipoagresors_id' => 26,
				'estadojudicial_id' => 1,
			),
			325 => 
			array (
				'id' => 333,
				'alertas_id' => 345,
				'name' => 'Geovanny Gómez',
				'tipoagresors_id' => 15,
				'estadojudicial_id' => 1,
			),
			326 => 
			array (
				'id' => 334,
				'alertas_id' => 346,
				'name' => 'Sujeto desconocido',
				'tipoagresors_id' => 18,
				'estadojudicial_id' => 1,
			),
			327 => 
			array (
				'id' => 335,
				'alertas_id' => 347,
				'name' => 'David Chavez',
				'tipoagresors_id' => 29,
				'estadojudicial_id' => 1,
			),
			328 => 
			array (
				'id' => 336,
				'alertas_id' => 348,
				'name' => 'Sujeto desconocido',
				'tipoagresors_id' => 18,
				'estadojudicial_id' => 1,
			),
			329 => 
			array (
				'id' => 337,
				'alertas_id' => 349,
			'name' => 'Militares de la Fuerza Aérea Hondureña (FAH).',
				'tipoagresors_id' => 26,
				'estadojudicial_id' => 1,
			),
			330 => 
			array (
				'id' => 340,
				'alertas_id' => 350,
				'name' => 'Fernando Francisco Díaz  y Fredy Rolando Pérez ',
				'tipoagresors_id' => 1,
				'estadojudicial_id' => 1,
			),
			331 => 
			array (
				'id' => 341,
				'alertas_id' => 351,
				'name' => 'Policía Militar',
				'tipoagresors_id' => 26,
				'estadojudicial_id' => 1,
			),
			332 => 
			array (
				'id' => 342,
				'alertas_id' => 352,
			'name' => 'Corte Suprema de Justicia (CSJ)',
				'tipoagresors_id' => 5,
				'estadojudicial_id' => 1,
			),
			333 => 
			array (
				'id' => 343,
				'alertas_id' => 353,
				'name' => 'Comisionado',
				'tipoagresors_id' => 41,
				'estadojudicial_id' => 1,
			),
			334 => 
			array (
				'id' => 344,
				'alertas_id' => 354,
				'name' => 'Sujeto desconocido',
				'tipoagresors_id' => 18,
				'estadojudicial_id' => 1,
			),
			335 => 
			array (
				'id' => 345,
				'alertas_id' => 355,
				'name' => 'Sujeto desconocido',
				'tipoagresors_id' => 28,
				'estadojudicial_id' => 1,
			),
			336 => 
			array (
				'id' => 346,
				'alertas_id' => 356,
				'name' => 'Poder Judicial',
				'tipoagresors_id' => 22,
				'estadojudicial_id' => 1,
			),
			337 => 
			array (
				'id' => 347,
				'alertas_id' => 357,
				'name' => 'Policia Municipal ',
				'tipoagresors_id' => 17,
				'estadojudicial_id' => 1,
			),
			338 => 
			array (
				'id' => 348,
				'alertas_id' => 358,
				'name' => 'Sujeto desconocido',
				'tipoagresors_id' => 18,
				'estadojudicial_id' => 1,
			),
			339 => 
			array (
				'id' => 349,
				'alertas_id' => 359,
				'name' => 'Partido Nacional de Honduras',
				'tipoagresors_id' => 16,
				'estadojudicial_id' => 1,
			),
			340 => 
			array (
				'id' => 350,
				'alertas_id' => 360,
				'name' => ', Carlos Rojas',
				'tipoagresors_id' => 34,
				'estadojudicial_id' => 1,
			),
			341 => 
			array (
				'id' => 351,
				'alertas_id' => 361,
				'name' => 'Sujeto desconocido',
				'tipoagresors_id' => 18,
				'estadojudicial_id' => 1,
			),
			342 => 
			array (
				'id' => 352,
				'alertas_id' => 362,
				'name' => 'Umanzor',
				'tipoagresors_id' => 34,
				'estadojudicial_id' => 1,
			),
			343 => 
			array (
				'id' => 353,
				'alertas_id' => 363,
				'name' => 'Marlon Oniel Escoto Valerio',
				'tipoagresors_id' => 15,
				'estadojudicial_id' => 1,
			),
			344 => 
			array (
				'id' => 354,
				'alertas_id' => 364,
				'name' => 'Mario Pérez',
				'tipoagresors_id' => 29,
				'estadojudicial_id' => 1,
			),
			345 => 
			array (
				'id' => 355,
				'alertas_id' => 365,
				'name' => 'Juan Orlando Hernandez',
				'tipoagresors_id' => 16,
				'estadojudicial_id' => 1,
			),
			346 => 
			array (
				'id' => 356,
				'alertas_id' => 366,
				'name' => 'Oscar Alvarez',
				'tipoagresors_id' => 29,
				'estadojudicial_id' => 1,
			),
			347 => 
			array (
				'id' => 357,
				'alertas_id' => 367,
				'name' => 'Cable Tigo',
				'tipoagresors_id' => 2,
				'estadojudicial_id' => 1,
			),
			348 => 
			array (
				'id' => 358,
				'alertas_id' => 368,
				'name' => 'Sujeto desconocido',
				'tipoagresors_id' => 18,
				'estadojudicial_id' => 1,
			),
			349 => 
			array (
				'id' => 359,
				'alertas_id' => 369,
				'name' => 'Sujeto desconocido',
				'tipoagresors_id' => 18,
				'estadojudicial_id' => 1,
			),
			350 => 
			array (
				'id' => 360,
				'alertas_id' => 370,
				'name' => 'Fredy Rolando Yánez',
				'tipoagresors_id' => 1,
				'estadojudicial_id' => 1,
			),
			351 => 
			array (
				'id' => 361,
				'alertas_id' => 371,
				'name' => 'Julieta Castellanos',
				'tipoagresors_id' => 15,
				'estadojudicial_id' => 1,
			),
			352 => 
			array (
				'id' => 362,
				'alertas_id' => 372,
				'name' => 'Sujeto desconocido',
				'tipoagresors_id' => 18,
				'estadojudicial_id' => 1,
			),
			353 => 
			array (
				'id' => 363,
				'alertas_id' => 373,
				'name' => 'Oscar Alvarez',
				'tipoagresors_id' => 29,
				'estadojudicial_id' => 1,
			),
			354 => 
			array (
				'id' => 364,
				'alertas_id' => 374,
			'name' => 'Ministerio Público (MP), ',
				'tipoagresors_id' => 18,
				'estadojudicial_id' => 1,
			),
			355 => 
			array (
				'id' => 365,
				'alertas_id' => 375,
				'name' => 'Sujeto desconocido',
				'tipoagresors_id' => 18,
				'estadojudicial_id' => 1,
			),
			356 => 
			array (
				'id' => 366,
				'alertas_id' => 376,
				'name' => 'Dorn A. Ebanks',
				'tipoagresors_id' => 3,
				'estadojudicial_id' => 1,
			),
			357 => 
			array (
				'id' => 367,
				'alertas_id' => 377,
				'name' => 'Embajada estadounidense ',
				'tipoagresors_id' => 44,
				'estadojudicial_id' => 1,
			),
			358 => 
			array (
				'id' => 368,
				'alertas_id' => 378,
				'name' => 'Juan Orlando Hernandez y Teodoro Bonilla',
				'tipoagresors_id' => 16,
				'estadojudicial_id' => 1,
			),
			359 => 
			array (
				'id' => 369,
				'alertas_id' => 379,
				'name' => 'Policía Nacional',
				'tipoagresors_id' => 34,
				'estadojudicial_id' => 1,
			),
			360 => 
			array (
				'id' => 370,
				'alertas_id' => 380,
				'name' => 'Sujeto desconocido',
				'tipoagresors_id' => 18,
				'estadojudicial_id' => 1,
			),
			361 => 
			array (
				'id' => 371,
				'alertas_id' => 381,
				'name' => 'Coronel de las Fuerzas Armadas ',
				'tipoagresors_id' => 26,
				'estadojudicial_id' => 1,
			),
			362 => 
			array (
				'id' => 372,
				'alertas_id' => 382,
				'name' => 'Policía Militar',
				'tipoagresors_id' => 26,
				'estadojudicial_id' => 1,
			),
			363 => 
			array (
				'id' => 373,
				'alertas_id' => 383,
				'name' => 'Juan Orlando Hernandez',
				'tipoagresors_id' => 16,
				'estadojudicial_id' => 1,
			),
			364 => 
			array (
				'id' => 374,
				'alertas_id' => 384,
				'name' => 'Sujeto desconocido',
				'tipoagresors_id' => 18,
				'estadojudicial_id' => 1,
			),
			365 => 
			array (
				'id' => 375,
				'alertas_id' => 385,
				'name' => 'Policía Nacional',
				'tipoagresors_id' => 34,
				'estadojudicial_id' => 1,
			),
			366 => 
			array (
				'id' => 376,
				'alertas_id' => 386,
				'name' => 'Comisión Interventora del IHSS',
				'tipoagresors_id' => 1,
				'estadojudicial_id' => 1,
			),
			367 => 
			array (
				'id' => 377,
				'alertas_id' => 387,
				'name' => 'Policía Nacional',
				'tipoagresors_id' => 18,
				'estadojudicial_id' => 1,
			),
			368 => 
			array (
				'id' => 378,
				'alertas_id' => 388,
				'name' => 'Sujeto desconocido',
				'tipoagresors_id' => 18,
				'estadojudicial_id' => 1,
			),
			369 => 
			array (
				'id' => 379,
				'alertas_id' => 389,
				'name' => 'Sujeto desconocido',
				'tipoagresors_id' => 18,
				'estadojudicial_id' => 1,
			),
			370 => 
			array (
				'id' => 380,
				'alertas_id' => 390,
				'name' => 'Sujeto desconocido',
				'tipoagresors_id' => 18,
				'estadojudicial_id' => 1,
			),
			371 => 
			array (
				'id' => 381,
				'alertas_id' => 391,
				'name' => 'Policía Nacional',
				'tipoagresors_id' => 34,
				'estadojudicial_id' => 1,
			),
			372 => 
			array (
				'id' => 382,
				'alertas_id' => 392,
				'name' => 'Policía Nacional',
				'tipoagresors_id' => 34,
				'estadojudicial_id' => 1,
			),
			373 => 
			array (
				'id' => 383,
				'alertas_id' => 393,
				'name' => 'Sujeto desconocido',
				'tipoagresors_id' => 18,
				'estadojudicial_id' => 1,
			),
			374 => 
			array (
				'id' => 384,
				'alertas_id' => 394,
				'name' => 'Franco Tirador',
				'tipoagresors_id' => 26,
				'estadojudicial_id' => 1,
			),
			375 => 
			array (
				'id' => 385,
				'alertas_id' => 395,
				'name' => 'Policía Nacional',
				'tipoagresors_id' => 34,
				'estadojudicial_id' => 1,
			),
			376 => 
			array (
				'id' => 386,
				'alertas_id' => 396,
				'name' => 'Docente del Centro Universitario Regional',
				'tipoagresors_id' => 1,
				'estadojudicial_id' => 1,
			),
			377 => 
			array (
				'id' => 387,
				'alertas_id' => 397,
				'name' => 'Sujetos desocidos',
				'tipoagresors_id' => 18,
				'estadojudicial_id' => 1,
			),
			378 => 
			array (
				'id' => 388,
				'alertas_id' => 398,
				'name' => 'Isopo Resort ',
				'tipoagresors_id' => 2,
				'estadojudicial_id' => 1,
			),
			379 => 
			array (
				'id' => 389,
				'alertas_id' => 399,
				'name' => 'Policía Militar',
				'tipoagresors_id' => 26,
				'estadojudicial_id' => 1,
			),
			380 => 
			array (
				'id' => 390,
				'alertas_id' => 400,
				'name' => 'Sujeto desconocido',
				'tipoagresors_id' => 18,
				'estadojudicial_id' => 1,
			),
			381 => 
			array (
				'id' => 391,
				'alertas_id' => 401,
				'name' => 'Policía Militar',
				'tipoagresors_id' => 26,
				'estadojudicial_id' => 1,
			),
			382 => 
			array (
				'id' => 392,
				'alertas_id' => 402,
				'name' => 'Sujetos desconocidos ',
				'tipoagresors_id' => 18,
				'estadojudicial_id' => 1,
			),
			383 => 
			array (
				'id' => 393,
				'alertas_id' => 403,
				'name' => 'Militares',
				'tipoagresors_id' => 26,
				'estadojudicial_id' => 1,
			),
			384 => 
			array (
				'id' => 394,
				'alertas_id' => 404,
				'name' => 'Policía Nacional ',
				'tipoagresors_id' => 34,
				'estadojudicial_id' => 1,
			),
			385 => 
			array (
				'id' => 395,
				'alertas_id' => 405,
			'name' => 'Universidad Nacional Autónoma de Honduras (UNAH) ',
				'tipoagresors_id' => 15,
				'estadojudicial_id' => 1,
			),
			386 => 
			array (
				'id' => 396,
				'alertas_id' => 406,
				'name' => 'Sujetos desconocidos ',
				'tipoagresors_id' => 18,
				'estadojudicial_id' => 1,
			),
			387 => 
			array (
				'id' => 397,
				'alertas_id' => 407,
				'name' => 'Acgtivista Molitar',
				'tipoagresors_id' => 43,
				'estadojudicial_id' => 1,
			),
			388 => 
			array (
				'id' => 398,
				'alertas_id' => 408,
				'name' => ' UNAH Jacinta Ruiz secretaria ejecutiva de Desarrollo de Personal',
				'tipoagresors_id' => 1,
				'estadojudicial_id' => 1,
			),
			389 => 
			array (
				'id' => 399,
				'alertas_id' => 409,
				'name' => 'Sujetos desconocidos ',
				'tipoagresors_id' => 18,
				'estadojudicial_id' => 1,
			),
			390 => 
			array (
				'id' => 400,
				'alertas_id' => 410,
			'name' => 'Universidad Nacional Autónoma de Honduras (UNAH) ',
				'tipoagresors_id' => 15,
				'estadojudicial_id' => 1,
			),
			391 => 
			array (
				'id' => 401,
				'alertas_id' => 411,
				'name' => 'Policía Nacional ',
				'tipoagresors_id' => 34,
				'estadojudicial_id' => 1,
			),
			392 => 
			array (
				'id' => 402,
				'alertas_id' => 412,
				'name' => 'Autoridades Universitarias de la UNAH',
				'tipoagresors_id' => 15,
				'estadojudicial_id' => 1,
			),
			393 => 
			array (
				'id' => 403,
				'alertas_id' => 413,
				'name' => 'Autoridades de la UNAH',
				'tipoagresors_id' => 15,
				'estadojudicial_id' => 1,
			),
			394 => 
			array (
				'id' => 404,
				'alertas_id' => 414,
				'name' => 'Policia Militar de Honduras',
				'tipoagresors_id' => 26,
				'estadojudicial_id' => 1,
			),
			395 => 
			array (
				'id' => 405,
				'alertas_id' => 415,
				'name' => 'Autoridades de la UNAH',
				'tipoagresors_id' => 15,
				'estadojudicial_id' => 1,
			),
			396 => 
			array (
				'id' => 406,
				'alertas_id' => 416,
				'name' => 'jueza Wendy Rivera ',
				'tipoagresors_id' => 22,
				'estadojudicial_id' => 1,
			),
			397 => 
			array (
				'id' => 407,
				'alertas_id' => 417,
				'name' => 'Sujetos desconocidos ',
				'tipoagresors_id' => 18,
				'estadojudicial_id' => 1,
			),
			398 => 
			array (
				'id' => 408,
				'alertas_id' => 418,
				'name' => 'Policia Cuello',
				'tipoagresors_id' => 34,
				'estadojudicial_id' => 1,
			),
			399 => 
			array (
				'id' => 409,
				'alertas_id' => 419,
				'name' => 'Guardia de Honor Presidencial y agentes de Fiscalía ',
				'tipoagresors_id' => 34,
				'estadojudicial_id' => 1,
			),
			400 => 
			array (
				'id' => 410,
				'alertas_id' => 420,
				'name' => 'Sujetos desconocidos ',
				'tipoagresors_id' => 18,
				'estadojudicial_id' => 1,
			),
			401 => 
			array (
				'id' => 411,
				'alertas_id' => 421,
				'name' => 'Autoridades de la UNAH',
				'tipoagresors_id' => 15,
				'estadojudicial_id' => 1,
			),
			402 => 
			array (
				'id' => 412,
				'alertas_id' => 422,
				'name' => 'Sonia Galvez',
				'tipoagresors_id' => 1,
				'estadojudicial_id' => 1,
			),
			403 => 
			array (
				'id' => 413,
				'alertas_id' => 423,
				'name' => 'Guardia de Honor Presidencial',
				'tipoagresors_id' => 26,
				'estadojudicial_id' => 1,
			),
			404 => 
			array (
				'id' => 414,
				'alertas_id' => 424,
				'name' => 'Belinda Flores',
				'tipoagresors_id' => 15,
				'estadojudicial_id' => 1,
			),
			405 => 
			array (
				'id' => 415,
				'alertas_id' => 425,
				'name' => 'Sujetos desconocidos ',
				'tipoagresors_id' => 18,
				'estadojudicial_id' => 1,
			),
			406 => 
			array (
				'id' => 416,
				'alertas_id' => 426,
				'name' => 'Teodoro Bonilla',
				'tipoagresors_id' => 22,
				'estadojudicial_id' => 1,
			),
			407 => 
			array (
				'id' => 417,
				'alertas_id' => 427,
				'name' => 'Cristian Erazo Delgado',
				'tipoagresors_id' => 1,
				'estadojudicial_id' => 1,
			),
			408 => 
			array (
				'id' => 418,
				'alertas_id' => 428,
				'name' => 'Sandra Pinel',
				'tipoagresors_id' => 1,
				'estadojudicial_id' => 1,
			),
			409 => 
			array (
				'id' => 419,
				'alertas_id' => 429,
				'name' => 'Sujetos desconocidos ',
				'tipoagresors_id' => 18,
				'estadojudicial_id' => 1,
			),
			410 => 
			array (
				'id' => 420,
				'alertas_id' => 430,
				'name' => 'Consejo de la Judicatura ',
				'tipoagresors_id' => 22,
				'estadojudicial_id' => 1,
			),
			411 => 
			array (
				'id' => 421,
				'alertas_id' => 431,
				'name' => 'Julieta Castellanos',
				'tipoagresors_id' => 15,
				'estadojudicial_id' => 1,
			),
			412 => 
			array (
				'id' => 422,
				'alertas_id' => 432,
				'name' => 'Seguridad privada UNAH',
				'tipoagresors_id' => 46,
				'estadojudicial_id' => 1,
			),
			413 => 
			array (
				'id' => 423,
				'alertas_id' => 433,
				'name' => 'Seguridad privada UNAH',
				'tipoagresors_id' => 46,
				'estadojudicial_id' => 1,
			),
			414 => 
			array (
				'id' => 424,
				'alertas_id' => 434,
				'name' => 'Sujetos desconocidos ',
				'tipoagresors_id' => 18,
				'estadojudicial_id' => 1,
			),
			415 => 
			array (
				'id' => 425,
				'alertas_id' => 435,
				'name' => 'Roger Aguilar Flores',
				'tipoagresors_id' => 46,
				'estadojudicial_id' => 1,
			),
			416 => 
			array (
				'id' => 426,
				'alertas_id' => 436,
				'name' => 'Antonio Caballero',
				'tipoagresors_id' => 43,
				'estadojudicial_id' => 1,
			),
			417 => 
			array (
				'id' => 427,
				'alertas_id' => 437,
				'name' => 'Sujetos desconocidos ',
				'tipoagresors_id' => 18,
				'estadojudicial_id' => 1,
			),
			418 => 
			array (
				'id' => 428,
				'alertas_id' => 438,
			'name' => 'Universidad Nacional Autónoma de Honduras (UNAH) ',
				'tipoagresors_id' => 15,
				'estadojudicial_id' => 1,
			),
			419 => 
			array (
				'id' => 429,
				'alertas_id' => 439,
				'name' => 'Sujetos desconocidos ',
				'tipoagresors_id' => 18,
				'estadojudicial_id' => 1,
			),
			420 => 
			array (
				'id' => 430,
				'alertas_id' => 440,
				'name' => 'Sujetos desconocidos ',
				'tipoagresors_id' => 18,
				'estadojudicial_id' => 1,
			),
			421 => 
			array (
				'id' => 431,
				'alertas_id' => 441,
				'name' => 'Yolany Batres',
				'tipoagresors_id' => 43,
				'estadojudicial_id' => 1,
			),
			422 => 
			array (
				'id' => 432,
				'alertas_id' => 442,
				'name' => 'Flerida Aída Silva, y Víctor Manuel Flores Montalván.',
				'tipoagresors_id' => 3,
				'estadojudicial_id' => 1,
			),
			423 => 
			array (
				'id' => 433,
				'alertas_id' => 443,
				'name' => 'Sujeto identificado ',
				'tipoagresors_id' => 1,
				'estadojudicial_id' => 1,
			),
			424 => 
			array (
				'id' => 434,
				'alertas_id' => 444,
				'name' => 'Policia Militar de Honduras',
				'tipoagresors_id' => 26,
				'estadojudicial_id' => 1,
			),
			425 => 
			array (
				'id' => 435,
				'alertas_id' => 445,
				'name' => 'Policias y Militares de Honduras',
				'tipoagresors_id' => 26,
				'estadojudicial_id' => 1,
			),
			426 => 
			array (
				'id' => 436,
				'alertas_id' => 446,
				'name' => 'José Luis Valladares',
				'tipoagresors_id' => 1,
				'estadojudicial_id' => 1,
			),
			427 => 
			array (
				'id' => 437,
				'alertas_id' => 447,
				'name' => 'Policía Nacional ',
				'tipoagresors_id' => 26,
				'estadojudicial_id' => 1,
			),
			428 => 
			array (
				'id' => 438,
				'alertas_id' => 448,
				'name' => 'Belinda Flores',
				'tipoagresors_id' => 15,
				'estadojudicial_id' => 1,
			),
			429 => 
			array (
				'id' => 439,
				'alertas_id' => 449,
				'name' => 'Sujetos desconocidos ',
				'tipoagresors_id' => 18,
				'estadojudicial_id' => 1,
			),
			430 => 
			array (
				'id' => 440,
				'alertas_id' => 450,
				'name' => 'Sujetos desconocidos ',
				'tipoagresors_id' => 18,
				'estadojudicial_id' => 1,
			),
			431 => 
			array (
				'id' => 441,
				'alertas_id' => 451,
				'name' => 'Recursos humanos DEI',
				'tipoagresors_id' => 1,
				'estadojudicial_id' => 1,
			),
			432 => 
			array (
				'id' => 442,
				'alertas_id' => 452,
				'name' => 'Julieta Castellanos',
				'tipoagresors_id' => 15,
				'estadojudicial_id' => 1,
			),
			433 => 
			array (
				'id' => 443,
				'alertas_id' => 453,
				'name' => 'Sujetos desconocidos ',
				'tipoagresors_id' => 18,
				'estadojudicial_id' => 1,
			),
			434 => 
			array (
				'id' => 444,
				'alertas_id' => 454,
				'name' => 'Policía Nacional ',
				'tipoagresors_id' => 34,
				'estadojudicial_id' => 1,
			),
			435 => 
			array (
				'id' => 445,
				'alertas_id' => 455,
				'name' => 'Juan Orlando Hernandez ',
				'tipoagresors_id' => 16,
				'estadojudicial_id' => 1,
			),
			436 => 
			array (
				'id' => 446,
				'alertas_id' => 456,
				'name' => 'Sonia Galvez',
				'tipoagresors_id' => 1,
				'estadojudicial_id' => 1,
			),
			437 => 
			array (
				'id' => 447,
				'alertas_id' => 457,
				'name' => 'Gabriela Castellanos',
				'tipoagresors_id' => 22,
				'estadojudicial_id' => 1,
			),
			438 => 
			array (
				'id' => 448,
				'alertas_id' => 458,
				'name' => 'Sujetos desconocidos ',
				'tipoagresors_id' => 18,
				'estadojudicial_id' => 1,
			),
			439 => 
			array (
				'id' => 449,
				'alertas_id' => 459,
				'name' => 'CONATEL',
				'tipoagresors_id' => 41,
				'estadojudicial_id' => 1,
			),
			440 => 
			array (
				'id' => 450,
				'alertas_id' => 460,
				'name' => 'Policía Nacional ',
				'tipoagresors_id' => 34,
				'estadojudicial_id' => 1,
			),
			441 => 
			array (
				'id' => 451,
				'alertas_id' => 461,
				'name' => 'Teodoro Bonilla',
				'tipoagresors_id' => 22,
				'estadojudicial_id' => 1,
			),
			442 => 
			array (
				'id' => 452,
				'alertas_id' => 462,
				'name' => 'Óscar Andrés Rodríguez Maradiaga',
				'tipoagresors_id' => 43,
				'estadojudicial_id' => 1,
			),
			443 => 
			array (
				'id' => 453,
				'alertas_id' => 463,
			'name' => 'Sistema Estratégico de Recolección, Cotejamiento, Análisis y Archivo de Información (Sercaa)',
				'tipoagresors_id' => 34,
				'estadojudicial_id' => 1,
			),
			444 => 
			array (
				'id' => 454,
				'alertas_id' => 464,
				'name' => 'Ebal Díaz',
				'tipoagresors_id' => 41,
				'estadojudicial_id' => 1,
			),
			445 => 
			array (
				'id' => 455,
				'alertas_id' => 465,
				'name' => 'Juan Orlando Hernandez ',
				'tipoagresors_id' => 16,
				'estadojudicial_id' => 1,
			),
			446 => 
			array (
				'id' => 456,
				'alertas_id' => 466,
				'name' => 'Sergio Fúnez',
				'tipoagresors_id' => 1,
				'estadojudicial_id' => 1,
			),
			447 => 
			array (
				'id' => 457,
				'alertas_id' => 467,
				'name' => 'Policía Nacional ',
				'tipoagresors_id' => 34,
				'estadojudicial_id' => 1,
			),
			448 => 
			array (
				'id' => 458,
				'alertas_id' => 468,
				'name' => 'Óscar Reyes',
				'tipoagresors_id' => 2,
				'estadojudicial_id' => 1,
			),
			449 => 
			array (
				'id' => 459,
				'alertas_id' => 469,
				'name' => 'Mario Pérez',
				'tipoagresors_id' => 29,
				'estadojudicial_id' => 1,
			),
			450 => 
			array (
				'id' => 460,
				'alertas_id' => 470,
				'name' => 'Sujetos desconocidos ',
				'tipoagresors_id' => 18,
				'estadojudicial_id' => 1,
			),
			451 => 
			array (
				'id' => 461,
				'alertas_id' => 471,
				'name' => 'Marco Midence Milla',
				'tipoagresors_id' => 41,
				'estadojudicial_id' => 1,
			),
			452 => 
			array (
				'id' => 462,
				'alertas_id' => 472,
				'name' => 'Ebal Díaz ',
				'tipoagresors_id' => 41,
				'estadojudicial_id' => 1,
			),
			453 => 
			array (
				'id' => 463,
				'alertas_id' => 473,
				'name' => 'Sujeto desconocido',
				'tipoagresors_id' => 18,
				'estadojudicial_id' => 1,
			),
			454 => 
			array (
				'id' => 464,
				'alertas_id' => 474,
			'name' => 'Instituto de Acceso a la Información Pública (IAIP).',
				'tipoagresors_id' => 43,
				'estadojudicial_id' => 1,
			),
			455 => 
			array (
				'id' => 465,
				'alertas_id' => 475,
				'name' => 'Yolany Batres',
				'tipoagresors_id' => 43,
				'estadojudicial_id' => 1,
			),
			456 => 
			array (
				'id' => 466,
				'alertas_id' => 476,
				'name' => 'Miembros del Partido Nacional',
				'tipoagresors_id' => 18,
				'estadojudicial_id' => 1,
			),
			457 => 
			array (
				'id' => 467,
				'alertas_id' => 477,
				'name' => 'Yolani Batres',
				'tipoagresors_id' => 43,
				'estadojudicial_id' => 1,
			),
			458 => 
			array (
				'id' => 468,
				'alertas_id' => 478,
				'name' => 'Sujeto desconocido',
				'tipoagresors_id' => 18,
				'estadojudicial_id' => 1,
			),
			459 => 
			array (
				'id' => 469,
				'alertas_id' => 479,
				'name' => 'Estados Unidos de Norte America, ley kingpin.',
				'tipoagresors_id' => 44,
				'estadojudicial_id' => 1,
			),
			460 => 
			array (
				'id' => 470,
				'alertas_id' => 480,
				'name' => 'Carlos Madero',
				'tipoagresors_id' => 49,
				'estadojudicial_id' => 1,
			),
			461 => 
			array (
				'id' => 471,
				'alertas_id' => 481,
				'name' => 'Policía Nacional',
				'tipoagresors_id' => 34,
				'estadojudicial_id' => 1,
			),
			462 => 
			array (
				'id' => 472,
				'alertas_id' => 482,
				'name' => 'Policía Nacional',
				'tipoagresors_id' => 34,
				'estadojudicial_id' => 1,
			),
			463 => 
			array (
				'id' => 473,
				'alertas_id' => 482,
				'name' => 'Policía Nacional',
				'tipoagresors_id' => 34,
				'estadojudicial_id' => 1,
			),
			464 => 
			array (
				'id' => 474,
				'alertas_id' => 483,
				'name' => 'Marco Midence',
				'tipoagresors_id' => 41,
				'estadojudicial_id' => 1,
			),
			465 => 
			array (
				'id' => 475,
				'alertas_id' => 484,
				'name' => 'Estado de Honduras',
				'tipoagresors_id' => 41,
				'estadojudicial_id' => 1,
			),
			466 => 
			array (
				'id' => 476,
				'alertas_id' => 485,
				'name' => 'Sonia Galvez y Rigoberto Cuellar.',
				'tipoagresors_id' => 22,
				'estadojudicial_id' => 1,
			),
			467 => 
			array (
				'id' => 477,
				'alertas_id' => 486,
				'name' => 'Policía Nacional',
				'tipoagresors_id' => 34,
				'estadojudicial_id' => 1,
			),
			468 => 
			array (
				'id' => 478,
				'alertas_id' => 487,
				'name' => 'Policía Militar',
				'tipoagresors_id' => 26,
				'estadojudicial_id' => 1,
			),
			469 => 
			array (
				'id' => 479,
				'alertas_id' => 488,
				'name' => 'Rosa Elena Bonilla',
				'tipoagresors_id' => 50,
				'estadojudicial_id' => 1,
			),
			470 => 
			array (
				'id' => 480,
				'alertas_id' => 489,
				'name' => 'Sonia Galvez y Rigoberto Cuellar.',
				'tipoagresors_id' => 22,
				'estadojudicial_id' => 1,
			),
			471 => 
			array (
				'id' => 481,
				'alertas_id' => 490,
				'name' => 'Sujeto desconocido',
				'tipoagresors_id' => 18,
				'estadojudicial_id' => 1,
			),
			472 => 
			array (
				'id' => 482,
				'alertas_id' => 491,
				'name' => 'Policía Nacional',
				'tipoagresors_id' => 34,
				'estadojudicial_id' => 1,
			),
			473 => 
			array (
				'id' => 483,
				'alertas_id' => 492,
				'name' => 'Policía Nacional',
				'tipoagresors_id' => 34,
				'estadojudicial_id' => 1,
			),
			474 => 
			array (
				'id' => 484,
				'alertas_id' => 493,
			'name' => 'Federación Nacional Autónoma de Futbol de Honduras (Fenafuth)',
				'tipoagresors_id' => 2,
				'estadojudicial_id' => 1,
			),
			475 => 
			array (
				'id' => 485,
				'alertas_id' => 494,
				'name' => 'Marlon Oniel Escoto Valerio',
				'tipoagresors_id' => 15,
				'estadojudicial_id' => 1,
			),
			476 => 
			array (
				'id' => 486,
				'alertas_id' => 495,
			'name' => 'Militares de la Fuerza Aérea Hondureña (FAH).',
				'tipoagresors_id' => 26,
				'estadojudicial_id' => 1,
			),
			477 => 
			array (
				'id' => 487,
				'alertas_id' => 496,
				'name' => 'Policía Nacional',
				'tipoagresors_id' => 34,
				'estadojudicial_id' => 1,
			),
			478 => 
			array (
				'id' => 488,
				'alertas_id' => 497,
				'name' => 'Yolani Batres',
				'tipoagresors_id' => 1,
				'estadojudicial_id' => 1,
			),
			479 => 
			array (
				'id' => 489,
				'alertas_id' => 498,
				'name' => 'Óscar Chinchilla',
				'tipoagresors_id' => 22,
				'estadojudicial_id' => 1,
			),
			480 => 
			array (
				'id' => 490,
				'alertas_id' => 499,
				'name' => 'Policía Militar',
				'tipoagresors_id' => 26,
				'estadojudicial_id' => 1,
			),
			481 => 
			array (
				'id' => 491,
				'alertas_id' => 500,
				'name' => 'Rigoberto Cuellar y Darío Roberto Cardona.',
				'tipoagresors_id' => 22,
				'estadojudicial_id' => 1,
			),
			482 => 
			array (
				'id' => 492,
				'alertas_id' => 501,
				'name' => 'Policía Militar',
				'tipoagresors_id' => 26,
				'estadojudicial_id' => 1,
			),
			483 => 
			array (
				'id' => 493,
				'alertas_id' => 502,
				'name' => 'Juan Carlos Reyes',
				'tipoagresors_id' => 43,
				'estadojudicial_id' => 1,
			),
			484 => 
			array (
				'id' => 494,
				'alertas_id' => 503,
			'name' => 'Junta Nominadora (JN) ',
				'tipoagresors_id' => 43,
				'estadojudicial_id' => 1,
			),
			485 => 
			array (
				'id' => 495,
				'alertas_id' => 504,
				'name' => 'Aline Flores',
				'tipoagresors_id' => 2,
				'estadojudicial_id' => 1,
			),
			486 => 
			array (
				'id' => 496,
				'alertas_id' => 505,
				'name' => 'Autoridades de la salud',
				'tipoagresors_id' => 43,
				'estadojudicial_id' => 1,
			),
			487 => 
			array (
				'id' => 497,
				'alertas_id' => 506,
				'name' => 'Óscar Andrés Rodríguez',
				'tipoagresors_id' => 43,
				'estadojudicial_id' => 1,
			),
			488 => 
			array (
				'id' => 498,
				'alertas_id' => 507,
				'name' => 'Delmer Omar Godoy Guifarro',
				'tipoagresors_id' => 34,
				'estadojudicial_id' => 1,
			),
			489 => 
			array (
				'id' => 499,
				'alertas_id' => 508,
				'name' => 'Sujeto desconocido',
				'tipoagresors_id' => 18,
				'estadojudicial_id' => 1,
			),
			490 => 
			array (
				'id' => 500,
				'alertas_id' => 509,
				'name' => 'Yolany Batres',
				'tipoagresors_id' => 43,
				'estadojudicial_id' => 1,
			),
			491 => 
			array (
				'id' => 501,
				'alertas_id' => 510,
				'name' => 'del Instituto María Regina',
				'tipoagresors_id' => 15,
				'estadojudicial_id' => 1,
			),
			492 => 
			array (
				'id' => 502,
				'alertas_id' => 511,
				'name' => 'Juan Orlando Hernandez',
				'tipoagresors_id' => 16,
				'estadojudicial_id' => 1,
			),
			493 => 
			array (
				'id' => 503,
				'alertas_id' => 512,
				'name' => 'Militares',
				'tipoagresors_id' => 26,
				'estadojudicial_id' => 1,
			),
			494 => 
			array (
				'id' => 504,
				'alertas_id' => 513,
				'name' => 'Militares',
				'tipoagresors_id' => 26,
				'estadojudicial_id' => 1,
			),
			495 => 
			array (
				'id' => 505,
				'alertas_id' => 514,
				'name' => 'Policía Militar',
				'tipoagresors_id' => 26,
				'estadojudicial_id' => 1,
			),
			496 => 
			array (
				'id' => 506,
				'alertas_id' => 515,
				'name' => 'Secretaria de seguridad ',
				'tipoagresors_id' => 25,
				'estadojudicial_id' => 1,
			),
			497 => 
			array (
				'id' => 507,
				'alertas_id' => 516,
				'name' => 'Policía Nacional',
				'tipoagresors_id' => 34,
				'estadojudicial_id' => 1,
			),
			498 => 
			array (
				'id' => 509,
				'alertas_id' => 517,
				'name' => 'Julieta Castellanos',
				'tipoagresors_id' => 15,
				'estadojudicial_id' => 1,
			),
			499 => 
			array (
				'id' => 510,
				'alertas_id' => 518,
				'name' => 'Maurico Oliva',
				'tipoagresors_id' => 27,
				'estadojudicial_id' => 1,
			),
		));
		\DB::table('agresors')->insert(array (
			0 => 
			array (
				'id' => 511,
				'alertas_id' => 519,
				'name' => 'Arturo W. Díaz SANAAA',
				'tipoagresors_id' => 1,
				'estadojudicial_id' => 1,
			),
			1 => 
			array (
				'id' => 512,
				'alertas_id' => 520,
				'name' => 'Víctor Manuel Lozano',
				'tipoagresors_id' => 22,
				'estadojudicial_id' => 1,
			),
			2 => 
			array (
				'id' => 513,
				'alertas_id' => 521,
				'name' => 'Javier Amador',
				'tipoagresors_id' => 1,
				'estadojudicial_id' => 1,
			),
			3 => 
			array (
				'id' => 514,
				'alertas_id' => 522,
			'name' => 'La Dirección Nacional de Investigación e Inteligencia (DNII)',
				'tipoagresors_id' => 43,
				'estadojudicial_id' => 1,
			),
			4 => 
			array (
				'id' => 515,
				'alertas_id' => 523,
			'name' => 'Junta Nominadora (JN) ',
				'tipoagresors_id' => 43,
				'estadojudicial_id' => 1,
			),
			5 => 
			array (
				'id' => 516,
				'alertas_id' => 524,
			'name' => 'Fuerza de Seguridad Interinstitucional Nacional (Fusina)',
				'tipoagresors_id' => 34,
				'estadojudicial_id' => 1,
			),
			6 => 
			array (
				'id' => 517,
				'alertas_id' => 525,
				'name' => 'Policía  y Militares',
				'tipoagresors_id' => 26,
				'estadojudicial_id' => 1,
			),
			7 => 
			array (
				'id' => 518,
				'alertas_id' => 526,
				'name' => 'Policía  y Militares',
				'tipoagresors_id' => 26,
				'estadojudicial_id' => 1,
			),
			8 => 
			array (
				'id' => 519,
				'alertas_id' => 527,
				'name' => 'Policía Nacional',
				'tipoagresors_id' => 34,
				'estadojudicial_id' => 1,
			),
			9 => 
			array (
				'id' => 520,
				'alertas_id' => 528,
				'name' => 'Redes Sociales',
				'tipoagresors_id' => 18,
				'estadojudicial_id' => 1,
			),
			10 => 
			array (
				'id' => 521,
				'alertas_id' => 529,
				'name' => 'Policía  y Militares',
				'tipoagresors_id' => 26,
				'estadojudicial_id' => 1,
			),
			11 => 
			array (
				'id' => 522,
				'alertas_id' => 530,
				'name' => 'Mario Pérez',
				'tipoagresors_id' => 29,
				'estadojudicial_id' => 1,
			),
		));
	}

}
