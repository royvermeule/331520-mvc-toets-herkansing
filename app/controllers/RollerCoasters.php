<?php
class RollerCoasters extends Controller {

    public function __construct() {
        $this->RollerCoasterModel = $this->model('RollerCoaster');
      }

    public function index() {
        // echo "Hoi";exit();
        $rollercoaster = $this->RollerCoasterModel->getRollerCoasters();

        /**
         * Maak de inhoud voor de tbody in de view
         */

        $data = [
            'title' => 'Roller Coasters',
            'rollercoaster' => $rollercoaster
        ];
        $this->view('rollercoasters/index', $data);
    }
}

?>