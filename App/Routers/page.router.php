<?php
/**
 * Created by PhpStorm.
 * User: theovandersluijs
 * Date: 16/01/2017
 * Time: 22:11
 */
$app->get('/{name}', function($name) use($app) {
    $secret_fields = NULL;
    $enc_form = NULL;

    $post = new \App\Models\Markdown\Markdown($name, $app['menu']);
    $post->getMarkDownFile();

    if(!$post->readMarkdown()){
        // no markdown file? then go 404!
        //return new Response('Error', 404 /* ignored */, array('X-Status-Code' => 200));
        $app->abort(404);
    }


    $post->getPostMetaData();
    $app['metaData'] = $post->metaData;
    $app['message'] = $post->getHTML();

    $schema = new App\Models\SchemaOrg\SchemaOrg($app);
    $schemaorg = $schema->schemaType();

    $twig = 1;
    $params = array();

    if(isset($metaData['post_contact_form']) && $metaData['post_contact_form']){
        $contact = new \App\Models\Contact\Contact();
        $contact->ObfuscateMe();
        $secret_fields = $contact->secret_fields;
        $enc_form = $contact->enc_form;
        unset($contact);

        if(isset($_REQUEST['send']) && $_REQUEST['send'] == 1){
            $contact = new \App\Models\Contact\Contact();
            if($contact->DeObfuscateMe()){ //false? Then dont send mail!!!
                echo $contact->sendMail();
            }
            $twig = 0;
        }else{
            $params['form_fields']  = (isset($secret_fields)) ? $secret_fields : NULL;
            $params['enc_form']     = (isset($enc_form)) ? $enc_form : NULL;
        }
    }

    //don't show on subpage, only on homepage
//    $app['config']['sitedata']['sitesubname'] = NULL;

    if($twig){
        $params['message']      = (isset($app['message'])) ? $app['message'] : NULL;
        $params['sitedata']     = (isset($app['config']['sitedata'])) ? $app['config']['sitedata'] : NULL;
        $params['metaData']     = (isset($app['metaData'])) ? $app['metaData'] : NULL;
        $params['menu']         = (isset($app['menu'])) ? $app['menu'] : NULL;
        $params['schema']       = (isset($schemaorg)) ? $schemaorg : NULL;
        $params['theme']        = (isset($app['theme'])) ? $app['theme']: NULL;
        $params['url']        = (isset($app['url'])) ? $app['url']: NULL;
        
        return $app['twig']->render('contact.twig', $params);

    }
});