<?php 

class work {

    public function isWorkable($age, $role, $gender){

        if (empty($gender) || empty($role) || empty($age)) {
            return false;
        }

        if ($role=="digger" && $gender=="male" && $age>=18 && $age<=50){
        return true;
        }
        elseif ($role=="IT" && $age>=20 && $age<= 50) {
        return true;
        }
        elseif ($role=="cleaner" && $gender=="female" && $age>=18 && $age<=60){
        return true;
}
        return false;
}
    
}
