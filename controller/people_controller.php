// just a comment

<?php
// Calling the model
require_once("model/people_model.php");
$per=new people_model();
$datos=$per->get_personas();
 
//Calling the view
require_once("view/people_view.html");
?>
