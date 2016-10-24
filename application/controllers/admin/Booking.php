<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Booking extends Admin_Controller {

    public function __construct() {
        parent::__construct();

        /* Load :: Common */
        $this->load->helper('number');
        $this->load->model('admin/dashboard_model');
    }

    public function index() {
        if (!$this->ion_auth->logged_in() OR ! $this->ion_auth->is_admin()) {
            redirect('auth/login', 'refresh');
        } else {
            /* Title Page */
            $this->page_title->push('Booking');
            $this->data['pagetitle'] = $this->page_title->show();

            /* Breadcrumbs */
            $this->data['breadcrumb'] = $this->breadcrumbs->show();

            /* Data */
            $this->data['que'] = $this->dashboard_model->getQueued();


            /* Load Template */
            $this->template->admin_render('admin/booking/index', $this->data);
        }
    }

    public function book_costumer() {
        /* Data */
        $p = $this->input->post();
        if ($p) {
            $data = array(
                'service' => $p['service'],
                'type' => $p['type'],
                'title' => $p['title'],
                'fname' => $p['fname'],
                'lname' => $p['lname']
            );
            if ($p['oname'] != '') {
                $data['fname'] = $p['oname'];
            }

            $this->dashboard_model->insertMeeting($data);
        } else {

            echo "You miss to fill some input, please back and fill all inputs!";
        }




        redirect('admin/booking/index', 'refresh');
    }

}
