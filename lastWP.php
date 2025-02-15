<?php
/*
 Plugin Name: Last.wp
 Plugin URI: http://kylehotchkiss.com/blog/productions/last.wp/
 Description: Last.wp is a Wordpress widget that shows your guests what you've been listening to on Last.fm, via a jQuery plugin!
 Author: Kyle Hotchkiss [Productions]
 Version: 0.2
 Author URI: http://kylehotchkiss.com
*/

/*
 * The code skelton is based on the qTwit plugin, it works the same way basically. 
 * 
 * Naming convention:
 * - Last.wp is the human-readable name.
 * - lastWP is the code-readable name.
 * - lastwp for the folder name.
 * - lastfm is the name of the jQuery plugin.
 *
 */

class WP_Widget_lastWP extends WP_Widget {
 function WP_Widget_lastWP() {
  $widget_ops = array( 'classname' => 'widget_lastWP', 'description' => __( "Last.wp is a Wordpress widget that shows your guests what you've been listening to." ) );
  $this->WP_Widget('lastWP', __('Last.wp'), $widget_ops);
 }
    
 function widget($args, $instance) {
  extract($args);
  echo $before_widget;
  echo $before_title;
  if(!empty($instance['title'])){echo $instance['title'];}else{echo "Can you hear this?";}
  echo $after_title;
  ?>
  <script type="text/javascript">
   jQuery(document).ready(function($) {
    var instanceName = ".lastWP-<?php echo $args['widget_id']?>";
    var location = "<?php echo WP_PLUGIN_URL;?>";
    $(instanceName).nowPlaying({
     username:'<?php if(!empty($instance['username'])){echo $instance['username'];}else{echo "kylehotchkiss";}?>',
     apikey:'<?php echo $instance['apikey'];?>',
     number:<?php echo $instance['total'];?>,
     artSize:'medium',
     noart:location+'/lastwp/images/lfm_noart.png',
     onComplete: function() {
      $(instanceName).show();
     }
    });
   });
  </script>
  <div class="lastWP-<?php echo $args['widget_id'] ?>" style="display:hidden;margin-bottom:0;padding-bottom:0;">
   <div class="lfm_item">
    <div class="lfm_art">
     <a href="#"></a>
     <div class="lfm_playing" title="now playing!"></div>
    </div>
    <div class="lfm_song"></div>
    <div class="lfm_artist"></div>
    <div class="lfm_album"></div>
    <div class="clear"></div>
   </div>
  </div>
  <noscript>
   <div>
    Uh-Oh! In order to view this widget, you must enable Javascript.
   </div>
  </noscript>
  <div style="font-size:9px;font-style:italic;text-align:right;"><a href="http://last.fm/user/<?php echo $instance['username'];?>/">See more on Last.fm</a>.</div> 
  <?php echo $after_widget;
 }
 
 function update($new_instance, $old_instance) {
  return $new_instance;
 }

function form($instance) { ?>
 <div id="lastWP-admin-panel">
 <p>
  <label for="<?php echo $this->get_field_id("title") ?>" style="display:block;">Title:</label>
  <input type="text" id="<?php echo $this->get_field_id("title") ?>" name="<?php echo $this->get_field_name("title") ?>" value="<?php echo $instance["title"]; ?>" />
 </p>
 <p>
  <label for="<?php echo $this->get_field_id("username") ?>" style="display:block;">Your Last.fm Username:</label>
  <input type="text" id="<?php echo $this->get_field_id("username") ?>" name="<?php echo $this->get_field_name("username") ?>" value="<?php echo $instance["username"]; ?>" />
 </p>
 <p>
  <label for="<?php echo $this->get_field_id("apikey") ?>" style="display:block;">Your Last.fm API Key:</label>
  <input type="text" id="<?php echo $this->get_field_id("apikey") ?>" name="<?php echo $this->get_field_name("apikey") ?>" value="<?php echo $instance["apikey"]; ?>" />
 </p>
 <p>
  <label for="<?php echo $this->get_field_id("total") ?>" style="display:block;">Number of Songs:</label>
  <select id="<?php echo $this->get_field_id("total") ?>" name="<?php echo $this->get_field_name("total") ?>" default="<?php echo $instance["total"]; ?>">
   <option value="1" <?php if ($instance["total"] == 1){echo 'selected="selected"';}?>>1</option>
   <option value="2" <?php if ($instance["total"] == 2){echo 'selected="selected"';}?>>2</option>
   <option value="3" <?php if ($instance["total"] == 3){echo 'selected="selected"';}?>>3</option>
   <option value="4" <?php if ($instance["total"] == 4){echo 'selected="selected"';}?>>4</option>
   <option value="5" <?php if ($instance["total"] == 5){echo 'selected="selected"';}?>>5</option>
  </select>
 </p>
 <p>
  If you need help getting an API Key, please refer to the the readme.txt file.
 </p>
</div><?php
 } 
}

function widget_lastWP_jsInit() {
 wp_enqueue_script('lastFM', WP_PLUGIN_URL . '/lastwp/scripts/jquery.lastfm.js', array('jquery'));
 wp_enqueue_style('lastWP', WP_PLUGIN_URL . '/lastwp/css/lastwp.css');
}

add_action('widgets_init', create_function('', 'return register_widget("WP_Widget_lastWP");'));
add_action('init', 'widget_lastWP_jsInit');
?>
