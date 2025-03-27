<?php 
function InputComponent($typ, $place, $name, $value, $read, $limit  ){
    echo "<input style='font-family: ABeeZee, serif;'name='$name' type='$typ' class='input-field' placeholder='$place' value='$value' $read, maxlength='$limit'>";
}
?>