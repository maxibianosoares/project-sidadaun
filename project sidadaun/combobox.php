<?php
function combodata($iniciu, $fim, $var, $hili){
  echo "<select name='$var' class='form-control'>";
  for ($i=$iniciu; $i<=$fim; $i++){
    $luan=strlen($i);
    switch($luan){
      case 1:
      {
        $g="0".$i;
        break;     
      }
      case 2:
      {
        $g=$i;
        break;     
      }      
    }  
    if ($i==$hili)
      echo "<option value=$g selected>$g</option>";
    else
      echo "<option value=$g>$g</option>";
  }
  echo "</select> ";
}
function combotinan($iniciu, $fim, $var, $hili){
  echo "<select name='$var' class='form-control'>";
  for ($i=$iniciu; $i<=$fim; $i++){
    if ($i==$hili)
      echo "<option value=$i selected>$i</option>";
    else
      echo "<option value=$i>$i</option>";
  }
  echo "</select> ";
}
function combofulan($iniciu, $fim, $var, $hili){
  $naran_fln=array(1=> "Janeiru", "Fevereiru", "Marsu", "Abril", "Maiu", 
                      "Junhu", "Julhu", "Agostu", "Setembru", 
                      "Outubru", "Novembru", "Dezembru");
  echo "<select name='$var' class='form-control'>";
  for ($fln=$iniciu; $fln<=$fim; $fln++){
      if ($fln==$hili)
         echo "<option value=$fln selected>$naran_fln[$fln]</option>";
      else
        echo "<option value=$fln>$naran_fln[$fln]</option>";
  }
  echo "</select> ";
}

?>
