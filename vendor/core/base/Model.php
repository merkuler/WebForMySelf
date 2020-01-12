<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace vendor\core\base;

use vendor\core\Db;
/**
 * Description of Model
 *
 * @author merkuler
 */
abstract class Model {
    
    protected $pdo;
    protected $table;
    protected $pk = 'id';
    
    public function __construct() {
        $this->pdo = Db::instance();
    }
    
    public function  query($sql){
        return $this->pdo->execute($sql);        
    }
    
    public function findAll(){
        $sql = "SELECT * FROM {$this->table}";
        return $this->pdo->query($sql);
    }
    
    public function findOne($id, $field=''){
        $field = $field ?: $this->pk;
        $sql="select * from {$this->table} where $field = ? limit 1";
        return $this->pdo->query($sql,[$id]);
    }

    public function findBySql($sql, $params=[]){
        return $this->pdo->query($sql,$params);
    }

    public function findLike($str, $field, $table = ''){
        $table = $table ?: $this->table;
        $sql = "select * from $table where $field like?";
        return $this->pdo->query($sql,['%'.$str.'%']);
    }
}
