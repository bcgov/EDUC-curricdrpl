<?php

namespace Drupal\hello_world\Controller;

class HelloWorldController {
    public function HelloWorldController_update_8001() {
        /** @var \Drupal\Core\KeyValueStore\KeyValueFactoryInterface $key_value_factory */
        $key_value_factory = \Drupal::service('keyvalue');
        $field_map_kv_store = $key_value_factory->get('entity.definitions.bundle_field_map');
        $node_map = $field_map_kv_store->get('node');
        // Remove the field_dates field from the bundle field map for the page bundle.
        unset($node_map['field_dates']['bundles']['page']);
        $field_map_kv_store->set('node', $node_map);
      }
    public function hello() {

        /*
        $query = \Drupal::entityQuery('node')
        ->condition('status', 1) //published or not
        ->condition('type', 'big_idea'); //content type
        1270


        
        $query = \Drupal::entityQuery('node')
        ->condition('status', 1) //published or not
        ->condition('type', 'curricular_competency'); //content type
        6807

        $query = \Drupal::entityQuery('node')
        ->condition('status', 1) //published or not
        ->condition('type', 'concept_content'); //content type
        3933 French Transaltions added
   */
  $query = \Drupal::entityQuery('node')
  ->condition('status', 1) //published or not
  ->condition('type', 'subject'); //content type
        $nids = $query->execute();
        //ksm($nids);
   
      
       $count = 0;
       
        foreach($nids as $nid){
            $node = \Drupal\node\Entity\Node::load($nid); 
            
            if(!$node->hasTranslation("fr")){
                $node_trans = $node->addTranslation('fr'); // sample using Australian English
                $node_trans->setTitle($node->getTitle());
                $node_trans_fields = $node->getTranslatableFields();
                foreach ($node_trans_fields as $name => $field) {
                    if (substr($name, 0, 6) == 'field_' || in_array($name, ['body', 'path'])) {
                        $node_trans->set($name, $field->getValue());
                        //if($name == "field_big_idea"){
                        //    $node_trans->set($name,  $result[0]->en_content);
                        //}
                        //Set the French Translation for Keywords
                        
                        //if($name == "field_keywords"){
                        //    $node_trans->set("field_keywords",  [['value'=>"hello", 'format'=>"filtered_html"],['value'=>"world", 'format'=>"filtered_html"]]);
                        //}
                        //Set the Elaborations
                        //if($name == "field_elaboration"){
                        //    $trans = $field->getValue()[0]['value'];
                            //$node_trans->set($name,  "FRENCH ELAB" . $trans);
                        //}                    

                    }
                }

                try {
                    $node->save();
                    $count ++;
                    //print "nid " . $nid . " | French Translation Added<br/>";
                }
                    catch (\Exception $error) {
                    $add_status .= 'ERROR saving ';
                    
                }
            }
            
        
        }


              /*
        $database = \Drupal::database();
        $query = $database->query("SELECT * FROM {curric_migrate_translation}");
        $result = $query->fetchAll();
        */
        //$big_idea_fr = $result[0]->en_content;
  
        return array(
                '#title' => 'Hello World!',
                '#markup' => $count . ' French Transaltions added',
            );
            
    }
    
}
