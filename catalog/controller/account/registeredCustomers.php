<?php
class ControllerAccountRegisteredCustomers extends Controller
{
    
    public function index(){

        $this->load->language('account/registeredCustomers');
        $this->document->setTitle($this->language->get('meta_title'));
        $this->document->setDescription($this->language->get('meta_description'));
        $this->document->setKeywords($this->language->get('meta_keyword'));

        $data['breadcrumbs'] = array();
        $data['breadcrumbs'][] = array(
            'text' => $this->language->get('text_home'),
            'href' => $this->url->link('common/home')
        );

        $data['breadcrumbs'][] = array(
            'text' => $this->language->get('title'),
            'href' => $this->url->link('account/registeredCustomers')
        );

        $data['customers'] = array();
        
        $this->load->model('account/registeredCustomerList');
        $results = $this->model_account_registeredCustomerList->getRegisteredCustomers();

        foreach ($results as $key => $result) {
            $data['customers'][] = $result;
        }
        
        
        $data['column_left'] = $this->load->controller('common/column_left');
        $data['column_right'] = $this->load->controller('common/column_right');
        $data['content_top'] = $this->load->controller('common/content_top');
        $data['content_bottom'] = $this->load->controller('common/content_bottom');
        $data['footer'] = $this->load->controller('common/footer');
        $data['header'] = $this->load->controller('common/header');

        
        $this->response->setOutput($this->load->view('account/registeredCustomers', $data));
    }
}