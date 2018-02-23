<?php

$cfAttitude   = $cf['attitude'];
$cfPenampilan = $cf['penampilan'];
$cfKeaktifan  = $cf['keaktifan'];
$cfEkonomi    = $cf['ekonomi'];
// die($cfAttitude.' '.$cfPenampilan.' '.$cfKeaktifan.' '.$cfEkonomi);
$classAttitude   = ($cfAttitude  ==1) ? 'class="red"' : '';
$classPenampilan = ($cfPenampilan==1) ? 'class="red"' : '';
$classKeaktifan  = ($cfKeaktifan ==1) ? 'class="red"' : '';
$classEkonomi    = ($cfEkonomi   ==1) ? 'class="red"' : '';

$banyak_cf = $cfAttitude+$cfPenampilan+$cfKeaktifan+$cfEkonomi;
$banyak_sf = 4-$banyak_cf;


?>
