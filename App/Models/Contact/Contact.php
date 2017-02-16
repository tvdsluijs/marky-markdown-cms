<?php

/**
 * Created by PhpStorm.
 * User: theovandersluijs
 * Date: 12/02/2017
 * Time: 16:48
 */

namespace App\Models\Contact;

use App\Models\Obfuscator\Obfuscator;

class Contact
{

    public $form_fields = array('C_Name', 'C_Company', 'C_EmailAddress', 'C_BusPhone', 'Comments', 'contact_form');
    public $secret_key = 'My Secret Key - KJFOIRET8439FSKJ';
    public $secret_fields = NULL;
    public $enc_form = NULL;
    public $return_fields = array();

    public function __construct($form_fields = null, $secret_key = null){
        if(isset($form_fields)){
            $this->form_fields = $form_fields;
        }

        if(isset($secret_key)){
            $this->secret_key = $secret_key;
        }
    }

    public function ObfuscateMe(){
        $obfuscator     = new Obfuscator($this->form_fields);
        $obfuscator->set_secret_key($this->secret_key);
        $this->secret_fields   = $obfuscator->obfuscate();
        $this->enc_form = $obfuscator->encode_form();
    }

    public function DeObfuscateMe(){
        $obfuscator = new Obfuscator($this->form_fields);
        $obfuscator->set_secret_key($this->secret_key);

        foreach($_POST as $key => $value){
            $_POST[ $key ] = trim(strip_tags($value)); /* Filter input */
            if(isset($_POST['email']) && $_POST['email'] != ''){
                return false;
            }
        }

        $form = $obfuscator->decode_form($_POST['__A'], $_POST);

        foreach($form as $key => $value){
            $this->return_fields[ $key ] = htmlentities($value, ENT_QUOTES, 'utf-8'); /* Escape output */
        }
    }

    public function sendMail(){
        return "1";
    }
}

