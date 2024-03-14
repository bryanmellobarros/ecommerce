<?php

namespace Hcode\Model;

use \Hcode\Model;

use \Hcode\DB\Sql;
use \Hcode\DB\Sqle;

class Estoque extends Model {

    public static function listAll(){

        $sql = new Sqle();

        return $sql->select("SELECT * FROM tb_estoque ORDER BY deslocal");

    }

    public function save(){

        $sql = new Sqle();

        $results = $sql->select("CALL sp_users_save(:destag, :descricao, :desnf, :deslocal)", array(
            ":destag"=>$this->getdestag(),
            ":descricao"=>$this->getdescricao(),
            ":desnf"=>$this->getdesnf(),
            ":deslocal"=>$this->getdeslocal()
        ));

        //return $results;

        $this->setData($results[0]);

    }

}

?>