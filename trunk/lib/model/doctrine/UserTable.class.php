<?php

class UserTable extends Doctrine_Table 
{

    public function getUser($username, $password) {
        $q = Doctrine_Query::create()
                ->from('User u')
                ->where('(u.username = ? OR u.email = ?) AND u.password = ?', array($username, $username, md5($password)));
        return $q->fetchOne();
    }

}