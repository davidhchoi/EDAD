<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main extends CI_Controller {

    /**
     * Displays a page. The main function currently
     * 
     * @param  string $page The name of the page to be displayed
     */
    function view($page = 'home')
    {
        if (!file_exists('application/views/' . $page . '.php')) {
            show_404();
        }

        $data['title'] = ucfirst($page); // Capitalize the first letter

        $this->load->view('templates/header', $data);
        $this->load->view($page, $data);
        $this->load->view('templates/footer', $data);
    }
}
