<?php /* copyright© Jhon S. Vique */
class Index extends Controller{

    function __construct(){
        parent::extendModel('IndexModel');
    }
    
    public function init(){
        $data = [];
        $cities = $this->model->showCities();
        $data["cities"] = $cities;

        parent::view('Index',$data);

    }
}
?>