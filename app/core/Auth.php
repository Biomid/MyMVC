<?php
namespace Bio\MyMvc\core;

use Bio\MyMvc\core\Model\ModelDataBase;

class Auth
{
    private ModelDataBase $dataBase;

    /**
     * @param ModelDataBase $dataBase
     */
    public function __construct(ModelDataBase $dataBase)
    {
        $this->dataBase = $dataBase;
    }

    public function login($email, $password)
    {
        $loginResult = $this->dataBase->select('');
    }
}
