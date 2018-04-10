<?php namespace GoCart\Controller;
/**
 * AdminSettings Class
 *
 * @package     GoCart
 * @subpackage  Controllers
 * @category    AdminSettings
 * @author      Clear Sky Designs
 * @link        http://gocartdv.com
 */

class AdminSettings extends Admin {

    public function __construct()
    {
        parent::__construct();

        \CI::auth()->check_access('Admin', true);
        \CI::load()->model(['Messages', 'Pages', 'Locations']);
        \CI::lang()->load('settings');
        \CI::load()->helper('inflector');
    }

    public function index()
    {
        \CI::load()->helper('form');
        \CI::load()->library('form_validation');

        //set defaults
        $data = [
            'company_name' => '',
            'theme' => 'default',
            'homepage' => '',
            'products_per_page' => '24',
            'default_meta_keywords' => '',
            'default_meta_description' => '',

            'sendmail_path' => '/usr/sbin/sendmail -bs',
            'email_from' => '',
            'email_to' => '',
            'email_method' => 'Mail',
            'smtp_server' => '',
            'smtp_username' => '',
            'smtp_password' => '',
            'smtp_port' => '25',

            'country_id' => '',
            'city' => '',
            'address1' => '',
            'address2' => '',
            'zone_id' => '',
            'zip' => '',

            'locale' => locale_get_default(),
            'timezone' => date_default_timezone_get(),
            'currency_iso' => 'USD',

            'ssl_support' => '',
            'stage_username' => '',
            'stage_password' => '',
            'require_login' => '',
            'new_customer_status' => '1',

            'weight_unit' => 'LB',
            'dimension_unit' => 'IN',
            'order_status' => '',
            'inventory_enabled' => '',
            'allow_os_purchase' => '',
            'tax_address' => '',
            'tax_shipping' => ''
        ];

        \CI::form_validation()->set_rules('company_name', 'lang:company_name', 'required');
        \CI::form_validation()->set_rules('default_meta_keywords', 'lang:default_meta_keywords', 'trim|strip_tags');
        \CI::form_validation()->set_rules('default_meta_description', 'lang:default_meta_description', 'trim|strip_tags');

        \CI::form_validation()->set_rules('theme', 'lang:theme', 'required');
        \CI::form_validation()->set_rules('homepage', 'lang:select_homepage');
        \CI::form_validation()->set_rules('products_per_page', 'lang:products_per_page');

        \CI::form_validation()->set_rules('email_from', 'lang:email_from', 'required|valid_email');
        \CI::form_validation()->set_rules('email_to', 'lang:email_to', 'required|valid_email');
        \CI::form_validation()->set_rules('email_method', 'lang:email_method', 'required');

        if(\CI::input()->post('email_method') == 'smtp')
        {
            \CI::form_validation()->set_rules('smtp_server', 'lang:smtp_server', 'required');
            \CI::form_validation()->set_rules('smtp_username', 'lang:smtp_username', 'required');
            \CI::form_validation()->set_rules('smtp_password', 'lang:smtp_password', 'required');
            \CI::form_validation()->set_rules('smtp_port', 'lang:smtp_port', 'required');
        }
        elseif(\CI::input()->post('email_method') == 'sendmail')
        {
            \CI::form_validation()->set_rules('sendmail_path', 'lang:sendmail_path', 'required');
        }

        \CI::form_validation()->set_rules('country_id', 'lang:country');
        \CI::form_validation()->set_rules('address1', 'lang:address');
        \CI::form_validation()->set_rules('address2', 'lang:address');
        \CI::form_validation()->set_rules('zone_id', 'lang:state');
        \CI::form_validation()->set_rules('zip', 'lang:zip');

        \CI::form_validation()->set_rules('locale', 'lang:locale', 'required');
        \CI::form_validation()->set_rules('timezone', 'lang:timezone', 'required');
        \CI::form_validation()->set_rules('currency_iso', 'lang:currency', 'required');

        \CI::form_validation()->set_rules('ssl_support', 'lang:ssl_support');
        \CI::form_validation()->set_rules('stage', 'lang:stage');
        \CI::form_validation()->set_rules('stage_username', 'lang:stage_username');
        \CI::form_validation()->set_rules('stage_password', 'lang:stage_password');
        \CI::form_validation()->set_rules('require_login', 'lang:require_login');
        \CI::form_validation()->set_rules('new_customer_status', 'lang:new_customer_status');

        \CI::form_validation()->set_rules('weight_unit', 'lang:weight_unit');
        \CI::form_validation()->set_rules('order_status', 'lang:order_status');
        \CI::form_validation()->set_rules('inventory_enabled', 'lang:inventory_enabled');
        \CI::form_validation()->set_rules('allow_os_purchase', 'lang:allow_os_purchase');
        \CI::form_validation()->set_rules('tax_address', 'lang:tax_address');
        \CI::form_validation()->set_rules('tax_shipping', 'lang:tax_shipping');

        // get the values from the DB
        $data = array_merge( $data, \CI::Settings()->get_settings('gocart'));

        $data['config'] = $data;
        //break out order statuses to an array

        //get installed themes
        $data['themes'] = [];
        $themePath = FCPATH.'themes/';
        if ($handle = opendir($themePath)) {
            while (false !== ($entry = readdir($handle))) {
                if ($entry != "." && $entry != ".." && is_dir($themePath.$entry)) {
                    $data['themes'][$entry] = $entry;
                }
            }
            closedir($handle);
        }
        asort($data['themes']);

        //get locales
        $locales = \ResourceBundle::getLocales('');
        $data['locales'] = [];
        foreach($locales as $locale)
        {
            $data['locales'][$locale] = locale_get_display_name($locale);
        }
        asort($data['locales']);
        //get ISO 4217 codes
        $data['iso_4217'] = [];
        $iso_4217 =json_decode(json_encode(simplexml_load_file(FCPATH.'ISO_4217.xml')));
        $iso_4217 = $iso_4217->CcyTbl->CcyNtry;
        foreach($iso_4217 as $iso_code)
        {
            if(isset($iso_code->Ccy))
            {
                $data['iso_4217'][$iso_code->Ccy] = $iso_code->Ccy;
            }
        }
        asort($data['iso_4217']);

        $data['countries_menu'] = \CI::Locations()->get_countries_menu();
        if(!empty($data['country_id']))
        {
            $data['zones_menu'] = \CI::Locations()->get_zones_menu($data['country_id']);
        }
        else
        {
            $countries_menu = array_keys($data['countries_menu']);
            $data['zones_menu'] = \CI::Locations()->get_zones_menu(array_shift($countries_menu));
        }

        $data['page_title'] = lang('common_gocart_configuration');

        $pages = \CI::Pages()->get_pages_tiered();
        $data['pages'] = [];
        foreach($pages['all'] as $page)
        {
            if(empty($page->url))
            {
                $data['pages'][$page->id] = $page->title;
            }
        }


        if (\CI::form_validation()->run() == FALSE)
        {
            $data['error'] = validation_errors();
            $this->view('settings', $data);
        }
        else
        {
            \CI::session()->set_flashdata('message', lang('config_updated_message'));

            $save = \CI::input()->post();
            //fix boolean values
            $save['ssl_support'] = (bool)\CI::input()->post('ssl_support');
            $save['require_login'] = (bool)\CI::input()->post('require_login');
            $save['new_customer_status'] = \CI::input()->post('new_customer_status');
            $save['allow_os_purchase'] = (bool)\CI::input()->post('allow_os_purchase');
            $save['tax_shipping'] = (bool)\CI::input()->post('tax_shipping');
            $save['homepage'] = \CI::input()->post('homepage');

            \CI::Settings()->save_settings('gocart', $save);

            redirect('admin/settings');
        }

    }

    public function canned_messages()
    {
        $data['canned_messages'] = \CI::Messages()->get_list();
        $data['page_title'] = lang('common_canned_messages');
        $this->view('canned_messages', $data);
    }


    public function canned_message_form($id=false)
    {
        $data['page_title'] = lang('canned_message_form');

        $data['id'] = $id;
        $data['name'] = '';
        $data['subject'] = '';
        $data['content'] = '';
        $data['deletable'] = 1;

        if($id)
        {
            $message = \CI::Messages()->get_message($id);
            $data = array_merge($data, $message);
        }

        \CI::load()->helper('form');
        \CI::load()->library('form_validation');

        \CI::form_validation()->set_rules('name', 'lang:message_name', 'trim|required|max_length[50]');
        \CI::form_validation()->set_rules('subject', 'lang:subject', 'trim|required|max_length[100]');
        \CI::form_validation()->set_rules('content', 'lang:message_content', 'trim|required');

        if (\CI::form_validation()->run() == FALSE)
        {
            $data['errors'] = validation_errors();

            $this->view('canned_message_form', $data);
        }
        else
        {

            $save['id']         = $id;
            $save['name']       = \CI::input()->post('name');
            $save['subject']    = \CI::input()->post('subject');
            $save['content']    = \CI::input()->post('content');

            //all created messages are typed to order so admins can send them from the view order page.
            if($data['deletable'])
            {
                $save['type'] = 'order';
            }
            \CI::Messages()->save_message($save);

            \CI::session()->set_flashdata('message', lang('message_saved_message'));
            redirect('admin/settings/canned_messages');
        }
    }
 public function send_messages($type = 'register', $field='firstname', $by = 'desc', $page=0)
    {

        $numrows = 500;
        \CI::load()->library('pagination');

        $config['base_url']         = site_url('/admin/settings/send_messages/'.$type.'/'.$field.'/'.$by.'/');
        $config['total_rows']       = \CI::Settings()->getlist(true, $type, 0, 0);


        $config['per_page']         = $numrows;
        $config['uri_segment']      = 7;
        $config['num_links']        = 4;  
        $config['first_link']       = 'First';
        $config['first_tag_open']   = '<li>';
        $config['first_tag_close']  = '</li>';
        $config['last_link']        = 'Last';
        $config['last_tag_open']    = '<li>';
        $config['last_tag_close']   = '</li>';

        $config['full_tag_open']    = '<nav><ul class="pagination">';
        $config['full_tag_close']   = '</ul></nav>';
        $config['cur_tag_open']     = '<li class="active"><a href="#">';
        $config['cur_tag_close']    = '</a></li>';
        
        $config['num_tag_open']     = '<li>';
        $config['num_tag_close']    = '</li>';
        
        $config['prev_link']        = '&laquo;';
        $config['prev_tag_open']    = '<li>';
        $config['prev_tag_close']   = '</li>';

        $config['next_link']        = '&raquo;';
        $config['next_tag_open']    = '<li>';
        $config['next_tag_close']   = '</li>';
        
        \CI::pagination()->initialize($config);
        $data['page'] = $page;
        $data['field'] = $field;
        $data['by'] = $by;

           // $data['page_links'] =  \CI::pagination->create_links();
        $data['listings']   = \CI::Settings()->getlist(false, $type, $config['per_page'], $page);
        
        
        $data['page_title'] = 'Send emails';
        $this->view('send_messages_list', $data);
    }

public function send_message_form($id=false)
    {
            $data['page_title'] = 'Send Messages';  

         if(\CI::input()->post('template_id') && \CI::input()->post('receivers')){
         require_once APPPATH.'third_party/sendgrid-php/sendgrid-php.php';
       
$sendgrid_apikey        = SENDGRID_APIKEY;
$sendgrid               = \CI::SendGrid($sendgrid_apikey);
$url                    = 'https://api.sendgrid.com/';
$pass                   = $sendgrid_apikey;
$template_id            = trim(\CI::input()->post('template_id'));
$count = 0;
foreach (\CI::input()->post('receivers')as $key => $value) {
$js = array(
  'sub' => array(':name' => array($value['customer_name'])),
  'filters' => array('templates' => array('settings' => array('enable' => 1, 'template_id' => $template_id)))
);

$params = array(
    'to'        => $value['email'],
    'toname'    => $value['customer_name'],
    'from'      => "connect@akashvaani.com",
    'fromname'  => "Akashvaani",
    'subject'   => 'Hi '. $value['customer_name'].', '.\CI::input()->post('subject'),
    'text'      => "I'm text!",
    'html'      => "<strong>I'm HTML!</strong>",
    'x-smtpapi' => json_encode($js),
  );

$request =  $url.'api/mail.send.json';

// Generate curl request
$session = curl_init($request);
// Tell PHP not to use SSLv3 (instead opting for TLS)
curl_setopt($session, CURLOPT_SSLVERSION, CURL_SSLVERSION_TLSv1_2);
curl_setopt($session, CURLOPT_HTTPHEADER, array('Authorization: Bearer ' . $sendgrid_apikey));
// Tell curl to use HTTP POST
curl_setopt ($session, CURLOPT_POST, true);
// Tell curl that this is the body of the POST
curl_setopt ($session, CURLOPT_POSTFIELDS, $params);
// Tell curl not to return headers, but do return the response
curl_setopt($session, CURLOPT_HEADER, false);
curl_setopt($session, CURLOPT_RETURNTRANSFER, true);

// obtain response
$response = curl_exec($session);
curl_close($session);
$count++;
}
// print everything out
//print_r($response);

  echo $count.' emails has been sent.'; exit;


         }  else{
            echo json_encode(array('error' => 'Please enter template id')); exit;


         } 

             
    }

    public function delete_message($id)
    {
        \CI::Messages()->delete_message($id);

        \CI::session()->set_flashdata('message', lang('message_deleted_message'));
        redirect('admin/settings/canned_messages');
    }

    
}
