<?php 

namespace App\Controller;

use App\Model\SondageModel;

class SondageController {


    public function __construct()
    {
       $this->model = new SondageModel();
    }

    public function render()
    {
     $sondages = $this->model->recupSondage();
     $reponses = $this->model->recupReponse();


      require ROOT."/App/View/SondageView.php";

    }


}