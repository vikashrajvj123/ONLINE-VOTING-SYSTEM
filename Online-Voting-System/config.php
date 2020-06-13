				<?php

				$hostname="localhost";
				$username= "root";
				$password= "";
				$database="db_evoting";

				// UserInput Test
					function test_input($data) {
					  $data = trim($data);
					  $data = stripslashes($data);
					  $data = htmlspecialchars($data);
					
					  return $data;
					}	

								

?>