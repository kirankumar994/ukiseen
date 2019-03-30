<?php
class LoginUpdate
{
    protected $ci;

    public function __construct()
    {
        global $CI;
        $this->ci = $CI;
    }

    public function update_login_time()
    {
        if($this->ci->session->uki_logged_in)
        {
            $id = $this->ci->session->uki_logged_in['u_id'];
            $this->ci->load->model('common');
            $this->ci->common->updateLoginTime($id);
        }
        /*$adminControllers = array('iyadmin','iyadmin_accessories','iyadmin_products','iyadmin_services');
        $className = $this->ci->router->fetch_class();
        $function = $this->ci->router->fetch_method();

        if(!in_array($className, $adminControllers)) return;

        if($className == 'iyadmin' && $function == 'index') return;

        if(!$this->ci->session->iyadmin){ redirect('iy-admin','refresh'); }*/
    }
}