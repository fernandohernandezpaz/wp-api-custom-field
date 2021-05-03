Wordpress project, which one use Custom field and add new fields to wordpress api
Step 1:
 Download your theme.
Step 2:
 Install the theme downloaded.
Step 3:
 Download and install in your wordpress project the plugin <a href="https://es.wordpress.org/plugins/advanced-custom-fields/">Custom Field</a>
Step 4:
 Create new field and implement in category as example.
Step 5:
 Create record in categories of Posts.
Step 6:
 Add oir create your php file with codo similar to the one in the MyFunctions.php
Step 7:
 Add in the functions.php file of the new theme installed 'require_once (ABSPATH . 'MyFunctions.php');' or 'require_once (ABSPATH . 'myfile.php');'
Step 8:
 Test the api wp-json/wp/v2/categories

