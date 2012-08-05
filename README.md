TemplateTwig
============
Adds a Twig render method to Page  
Copyright (C) 2012 by Paul Sheean porl42@gmail.com  
Licensed under GNU/GPL v2, see LICENSE.TXT

Installation
------------
* Copy *TemplateTwig* directory to *site/modules*
* Download Twig from http://twig.sensiolabs.org/
* Extract and copy *Twig* directory from *lib* to *TemplateTwig* directory (ie. *TemplateTwig/Twig*)
* Ensure http daemon has write access to *site/assets/cache* dir (this should be the case anyway)
* Copy *templates* directory to *site* (this contains some sample Twig templates and views)  
	**Note:** By default these templates overwrite the standard site-default ones to use twig.
	If you don't want this then just create the *templates/views* directory and use the files
	from here as a guide to make your own.
* Enable *TemplateTwig* module in *ProcessWire*
* Create pages that use the twig templates.  
	**NOTE:** As Twig handles html escaping etc itself, you can usually remove any *htmlspecialchars* filters from your fields.
	If you don't do this you may run into double-escaping issues.