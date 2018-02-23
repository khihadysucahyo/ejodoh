<!-- Author: Khihady Sucahyo -->

<?php
function hitungBobot($gap){
    switch ($gap) {
      case 0: return 5;
        break;
      case 1:
        return 4.5;
        break;
      case -1:
        return 4;
        break;
      case 2:
        return 3.5;
        break;
      case -2:
        return 3;
        break;
      case 3:
        return 2.5;
        break;
      case -3:
        return 2;
        break;
      case 4:
        return 1.5;
        break;
      case -4:
        return 1;
        break;
    }
}?>
