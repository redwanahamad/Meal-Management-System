<?php
		
		/*if(strlen($_REQUEST["uname"])==0){
					echo "User name can't be empty!"."<br/>";
		}	

		else{
			if(strlen($_REQUEST["fname"])==0){
					echo "First name can't be empty!"."<br/>";
				}
				else
				{
					if(strlen($_REQUEST["lname"])==0){
					echo "Last name can't be empty!"."<br/>";
		            }
		            else{
		            	if(strlen($_REQUEST["email"])==0){
					echo "Email address can't be empty!"."<br/>";
				}
						else{
							$a=strcmp($_REQUEST["date"],"0");
	                       if($a==0){
	                        echo "Date can't be empty!"."<br/>";
                             }
                             else{
                             	  $a=strcmp($_REQUEST["month"],"0");
	                                if($a==0){
	                                echo "Month can't be empty!"."<br/>";
                                  } 
                                  else
		                          {
		                           $a=strcmp($_REQUEST["year"],"0");
	                                if($a==0){
	                               echo "Year can't be empty!"."<br/>";
                                     }
                                     else{
                                     	if(strlen($_REQUEST["phone"])==0){
				                    	echo "Phone can't be empty!"."<br/>";
		                                }	
		                                else{
		                                	if(isset($_REQUEST["gender"])==0){
											    echo "Gender can't be empty!"."<br/>";
										     } 
										     else{
										     	if(strlen($_REQUEST["pass"])!=4){
													echo "Password must contains more then 4 char!"."<br/>";	
													}
													else
													{
														if(strlen($_REQUEST["cpass"])==0){
						                                echo "Confirm password can't be empty!"."<br/>";
					                                    }
					                                    else{
					                                    	$a=strcmp($_REQUEST["pass"],$_REQUEST["cpass"]);
						                                    if($a!=0){
						                                    echo "Password & Confirm password did not match!"."<br/>";
					                                        }
															else
															{
																//echo"Registation complete successfully!!!!!!";
																require("function.php");
																//$file=fopen('record.txt','a') or die("fle open error");
																$t=$_REQUEST["uname"];
																insertIntoSQL();
																//write();
																//header('location:file:///C:/xampp/htdocs/project/home.html');
															}

					                                    }

										     }

		                                }

                                     }

                             }


						}
		}
		            }


				}
		}

		}	
*/

		


?>