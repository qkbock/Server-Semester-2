<?php 
	header('Content-type: application/json');
	
	if(isset($_GET['request'])){
		
		if($_GET['request']=='resume'){
	
	
			$resume = 	array(
							"Education" => array(
								'Parsons The New School' => array(
									'New York, NY', '2012-present', 
									'Candidate for MFA in Design and Technology', 
									'current GPA: 4.0'
								),
								'Harvard University' => array(
									'Cambridge, MA', 
									'2007-11', 
									'BA in Visual and Environmental Studies', 
									'cum laude'
								),
								'The Bishop’s School' => array(
									'La Jolla, CA', 
									'2000-06', 
									'Summa cum laude'
								)
							),
							"Relevant Experience" => array(
								'Robin Baron Design' => array(
									'New York, NY', 
									'2011',
									'Marketing & Graphic Design',
								),
								'USA Science and Engineering Festival' => array(
									'San Diego, CA and Washington, DC', 
									'2010-present',
									'Graphic Design',
								),
								'Jean Efron Art Consultants' => array(
									'Washington, DC', 
									'2010',
									'Internship',
								),
								'Harvard Varsity Sailing Team' => array(
									'Cambridge, MA', 
									'2007-11',
									'Starting Member',
								)
							),
							"Skills" => array(
								'Fluent in:' => array(
									'Adobe Creative Suite', 
									'HTML 5', 
									'CSS', 
									'Processing', 
									'Java', 
									'C++',
									'OpenFrameworks', 
									'Motion', 
									'MS Office', 
									'File Maker Pro', 
									'Quicken'
								),
								'Working knowledge of:' => array(
									'Final Cut Pro', 
									'Maya', 
									'Adobe Flash AS3', 
									'Arduino',
									'JavaScript',
									'PHP'
								)
							),
							"Awards" => array(
								'Hoopes Prize' => 'Highest academic honor at Harvard College, awarded for the most outstanding undergraduate scholarly work or research.',
								'James Bryant Conant Prize' => 'For the best essay or project submitted as regular course work in General Education at Harvard on a subject of scientific interest.',
								'Albert Alcalay Prize' => 'Awarded to the best student in Visual and Environmental Studies as judged by the departmental committee.',
								'All-American Athlete' => 'Earned All-American honors for Sailing as well as one 2nd place and one 3rd place team finish nationally.'
							)
						);	
				
			echo json_encode($resume);

	
		}
	}
?>

