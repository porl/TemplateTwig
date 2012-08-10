TemplateTwig
============
Adds a Twig render method to Page  
For more information on Twig visit http://twig.sensiolabs.org/  
Copyright (C) 2012 by Paul Sheean porl42@gmail.com  
Licensed under GNU/GPL v2, see LICENSE.txt  
For Twig license see LICENSE.twig.txt

Installation
------------
* Copy `TemplateTwig` directory to `site/modules`
* Enable `TemplateTwig` module in ProcessWire
* Ensure module configuration (paths etc) is correct.
* Your templates now have access to a twig parameter that can be used as follows:

		$variables = array("foo" => "bar", "hello" => "world);
		echo $page->twig->render('basic-page.html.twig', $variables);

	The `templates` directory with this module contains sample Twig templates and views  
	that recreate the standard site-default templates with Twig. If you don't want to use  
	them then just create the `templates/views` directory and use the files from here  
	as a guide to make your own.
* Create pages that use the twig templates.  
	**NOTE:** As Twig handles html escaping etc itself, you can usually remove any *htmlspecialchars* filters from your fields.
	If you don't do this you may run into double-escaping issues.