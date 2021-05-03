Wordpress project, which one use Custom field and add new fields to wordpress api

<h5>Step 1:</h5>
<p>Download your theme.</p>

<h5>Step 2:</h5>
<p>Install the theme downloaded.</p>

<h5>Step 3:</h5
<p>Download and install in your wordpress project the plugin <a href="https://es.wordpress.org/plugins/advanced-custom-fields/">Custom Field</a></p>

<h5>Step 4:</h5>
<p>Create new field and implement in category as example.</p>

<h5>Step 5:</h5>
<p>Create record in categories of Posts.</p>

<h5>Step 6:</h5>
<p>Add oir create your php file with codo similar to the one in the MyFunctions.php</p>

<h5>Step 7:</h5>
<p>Add in the functions.php file of the new theme installed 'require_once (ABSPATH . 'MyFunctions.php');' or 'require_once (ABSPATH . 'myfile.php');'</p>
<h5>Step 8:</h5>
<p>Test the api wp-json/wp/v2/categories</p>

