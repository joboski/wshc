<?php

	$speakers = [

		[
			'peter-andrew',
			'new_speaker/SPEAKER PHOTOS 1000W-07.jpg',
			'Mr Peter Andrew',
			'Director of Workplace Strategies, Asia Pacific<br> 
			 Advisory & Transactions, Commercial Real<br>
			 Estate Services (CBRE)',
			[
				'Speaker\'s biography to be provided at a later date.',
			]
			
		],

		[
			'franck-baron',
			'new_speaker/SPEAKER PHOTOS 1000W-05.jpg',
			'Mr Franck Baron',
			'Group General Manager, Risk Management & Insurance, International SOS<br> Chairman, Pan-Asia Risk & Insurance Management Association (PARIMA)<br> Vice-President, International Federation of Risk & <br>Insurance Management Associations (IFRIMA)',
			[
				'Speaker\'s biography to be provided at a later date.',
				'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate',
				'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate',

			]
			
		],

		[
			'david-chan',
			'new_speaker/SPEAKER PHOTOS 1000W-04.jpg',
			'Professor David Chan',
			'Lee Kuan Yew Fellow & Professor of Psychology<br> Director, Behavioural Sciences Institute<br> Singapore Management University',
			[
				'Speaker\'s biography to be provided at a later date.',
			]
		],

		[
			'chow-yuen',
			'new_speaker/SPEAKER PHOTOS 1000W-02.jpg',
			'Mr Chow Yew Yuen',
			'Chief Executive Officer, Keppel Offshore & Marine <br> President, Association of Singapore Marines Industries (ASMI)',
			[
				'Speaker\'s biography to be provided at a later date.',
			]
		],

		[
			'marie-larue',
			'new_speaker/SPEAKER PHOTOS 1000W-06.jpg',
			'Ms Marie Larue',
			'President and Chief Executive Officer,<br> Institut de recherche Robert-Sauvé en santé et en sécurité du travail (IRSST)',
			[
			 	'Speaker\'s biography to be provided at a later date.',
			]
		],

		[
			'nancy-leppink',
			'new_speaker/SPEAKER PHOTOS 1000W-01.jpg',
			'Ms Nancy J Leppink',
			'Chief of Labour Administration, Labour Inspection and <br>Occupational Safety and Health Branch <br> International Labour Organization',
			[
				'Speaker\'s biography to be provided at a later date.',
			]
		],

		[
			'ajay-mishra',
			'new_speaker/SPEAKER PHOTOS 1000W-08.jpg',
			'Mr Ajay Mishra',
			'Vice President, Risk and Safety Management<br>
			SATS Ltd',
			[
			 	'Speaker\'s biography to be provided at a later date.',
			]
		],

		[
			'lee-newman',
			'new_speaker/SPEAKER PHOTOS 1000W-03.jpg',
			'Dr Lee Newman, MD',
			'Professor, Colorado School of Public Health<br> Director, Center for Health, Work & Environment<br> University of Colorado Anschutz Medical Campus',
			[
			 	'Speaker\'s biography to be provided at a later date.',
			]
		],

	];

// Sectionalised speakers
	$keynote = [

		$speakers[5], // nancy leppink
	];

	$plenary = [
	
		$speakers[2], // david chan
		$speakers[1], // franck baron
	];

	$symposium = [
		
		$speakers[3], // chow yuen
		$speakers[7], // lee newman
		$speakers[4], // marie larue
	]; 

// Index speaker panning section

	$index_speakers = [

		$speakers[5], // nancy leppink
		$speakers[2], // david chan
		$speakers[1], // franck baron
		$speakers[3], // chow yuen
		$speakers[7], // lee newman
		$speakers[4], // marie larue
		$speakers[0], // peter andrew
		$speakers[6], // ajay mishra

	];

?>