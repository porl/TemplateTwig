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
* Ensure http daemon has write access to `site/assets/cache` dir (this should be the case anyway)
* Copy `templates` directory to `site` (this contains some sample Twig templates and views)  
	**Note:** By default these templates overwrite the standard site-default ones to use twig.
	If you don't want this then just create the `templates/views` directory and use the files
	from here as a guide to make your own.
* Enable `TemplateTwig` module in ProcessWire
* Create pages that use the twig templates.  
	**NOTE:** As Twig handles html escaping etc itself, you can usually remove any *htmlspecialchars* filters from your fields.
	If you don't do this you may run into double-escaping issues.