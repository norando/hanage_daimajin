<?php
echo '<br><br>下層で呼んだ場合';

echo '<br>plugin_dir_path( __FILE__ ) : ';
echo plugin_dir_path( __FILE__ );

echo '<br>plugin_dir_url( __FILE__ ) : ';
echo plugin_dir_url( __FILE__ );

echo '<br>plugins_url( __FILE__ ) : ';
echo plugins_url( __FILE__ );
