<?php   
function input($placeholder, $name,$value,$type="text"){
   $ele = "<div class=\"input-group mb-2\">
        <input autocomplete=\"off\" type='$type' name='$name' class=\"form-control\" value='$value'  placeholder='$placeholder' />
      </div>";

    echo($ele);
}


function button($text,$id,$class,$name){
    $btn = "
         <button name='$name' class='$class' value='' id='$id' > $text </button>
       ";
 
       echo($name);
     echo($btn);
 }
 

