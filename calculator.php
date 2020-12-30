<?php
/**
 * Plugin Name: Calculator
 * Plugin URI: https://talandria.fr
 * Description: Calculator price based on conditionnal quantity cart with Vue Js
 * Version: 1.1
 * Author: Talandria
 * Author URI: https://talandria.fr
 * License: GPLv2 or later
 * Text Domain: JM Dandria
*/
 

add_shortcode('secret',"secret_content");
wp_enqueue_script('vue','https://unpkg.com/vue@next');

function secret_content(){ 
    echo("
            <div id='app'>
            <h4>Veuillez indiquer le nombre de paie à traiter</h4>
    <input type='number' v-model='proposition'/>
    <p>Votre tarif sera de:</p>
    <div v-if='proposition <= 25'>{{ calcmin }}</div>
    <div v-else-if='proposition > 25 && proposition < 51'>
      {{ calcmed }}
    </div>
    <div v-else>{{ calcsup }}</div>
  </div>
            
    ");
    wp_enqueue_script('app',plugin_dir_url(__FILE__).'app.js');
}

?>