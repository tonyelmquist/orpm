<?php
$menu_title = SW_PROJECT_TITLE;
$menu = array (
	array ( "language" => "en_gb", "report" => ".*\.xml", "title" => "<AUTO>" )
	);

$dropdown_menu = array(
                    array ( 
                        "project" => "rentals",
                        "title" => "Financials",
                        "items" => array (
                            array ( "reportfile" => "invoice.xml" ),
                            array ( "reportfile" => "receipt.xml" ),
                            )
                        ),
                    array ( 
                        "project" => "rentals",
                        "title" => "Analysis Reports",
                        "items" => array (
                            array ( "reportfile" => "tenant.xml") ,
                            //array ( "reportfile" => "tut4_lateness.xml")
                            )
                        ),
                );
?>
