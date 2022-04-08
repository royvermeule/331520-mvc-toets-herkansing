<?php
class RollerCoasters extends Controller {

  public function __construct() {
    $this->RollerCoasterModel = $this->model('RollerCoaster');
  }

  public function index() {
    /**
     * Haal via de method getFruits() uit de model Fruit de records op
     * uit de database
     */
    $rollercoaster = $this->RollerCoasterModel->getRollerCoasters();

    /**
     * Maak de inhoud voor de tbody in de view
     */
    $rows = '';
    foreach ($rollercoaster as $value){
      $rows .= "<tr>
                  <td>$value->id</td>
                  <td>" . htmlentities($value->nameRollerCoaster) . "</td>
                  <td>" . htmlentities($value->NameAmusementPark) . "</td>
                  <td>" . htmlentities($value->country) . "</td>
                  <td>" . htmlentities($value->topspeed) . "</td>
                  <td>" . htmlentities($value->height) . "</td>
                </tr>";
    }


    $data = [
      'title' => '<h1>Roller Coasters</h1>',
      'rollercoaster' => $rows
    ];
    $this->view('rollercoasters/index', $data);
  }
  public function update($id){
    var_dump($id);exit();
  }
}

?>