<?php 

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model {

   protected $table = 'user';
   protected $primaryKey = 'id';
   protected $allowedFields = ['name', 'gender', 'date'];

   public function getUsers(){
      return $this->findAll();
   }

   // public function getDate(){
   public function getDate($startDate, $endDate){

      $query = $this->WHERE('date >=', $startDate)
         ->WHERE('date <=', $endDate)
         ->findAll();

      return $query;
   }
}
