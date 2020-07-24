<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Coupon extends Model
{

    /**
     * Méthode qui caste une chaine de caractère en décimal sans arrondi
     * @param $num
     * @return float
     */
    public function tofloat($num) {
        $dotPos = strrpos($num, '.');
        $commaPos = strrpos($num, ',');
        $sep = (($dotPos > $commaPos) && $dotPos) ? $dotPos :
            ((($commaPos > $dotPos) && $commaPos) ? $commaPos : false);

        if (!$sep) {
            return floatval(preg_replace("/[^0-9]/", "", $num));
        }

        return floatval(
            preg_replace("/[^0-9]/", "", substr($num, 0, $sep)) . '.' .
            preg_replace("/[^0-9]/", "", substr($num, $sep+1, strlen($num)))
        );
    }


    /**
     * Méthode qui nous retourne la remise correspondant grace au coupon
     * @param $subtotal
     * @return float|int
     */
    public function discount($subtotal)
    {
        return ($subtotal * ($this->percent_off / 100));
    }


}
