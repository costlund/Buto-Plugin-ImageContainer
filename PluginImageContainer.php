<?php
class PluginImageContainer{
  public function widget_container($data){
    /**
     * 
     */
    $defalt = array(
      'fluid' => true,
      'height' => '400px', 
      'background-position' => 'center', 
      'image' => '/plugin/image/container/norway_montains.jpg',
      'innerHTML' => null
    );
    /**
     * 
     */
    $wData = wfWidget::handle_data($data, $defalt);
    $wData->set('url', "url('".$wData->get('image')."')");
    if($wData->get('fluid')){
      $wData->set('class', 'container-fluid bg-image');
    }else{
      $wData->set('class', 'container bg-image');
    }
    /**
     * 
     */
    wfPlugin::includeonce('wf/yml');
    $element = new PluginWfYml(__DIR__.'/element/widget_container.yml');
    $element->setByTag($wData->get());
    wfDocument::renderElement($element);
  }
}
