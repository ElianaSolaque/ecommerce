<?php
/**
 * Plugin Name:       Verificando Clientes
 * Plugin URI:        https://example.com/plugins/the-basics/
 * Description:       Verificando Clientes: este plugin permite tener un registro de clientes correcto donde no habrán campos con números, ya que no le permite al usuario colocar números en él, así tendrás una base de datos eficiente.
 * Version:           1.0.0
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * Author:            Eliana Solaque Rugeles
 * Author URI:        https://plugiselianasolaque/
 * License:           GPL v2 or later
 * License URI:       https://www.elianasolaque/licenses/gpl-2.0.html
 * Text Domain:       verificando-clientes-plugin
 * Domain Path:       /languages
 */



function validar()
{
    //Cargar sólo en las entradas
    wp_register_script('funciones', get_stylesheet_directory_uri() . 'funciones.js', array(), '1', true);
    wp_enqueue_script('funciones');
}


    ?>