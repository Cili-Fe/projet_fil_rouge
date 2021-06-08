
<?php
function regle($date,$bnjr=28){
    $dt=new DateTime($date);

 $dpr=$dt->add(new DateIntervall("P".$bnjr."D"));
//  $cycle=$date+($bnjr-1);
//  $do=$cycle-14;
//  $pf=$do+6;
 return [
      "prochain_regles"=>$dpr,
    //  "cycle"=>$cycle,
    //  "ovulation"=>$do,
    //  "fertilite"=>$pf
 ];
 dd(regle("2021/03/26"));
}
