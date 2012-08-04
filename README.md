TemplateTwig
============

Copyright *Paul Sheean* 2012
Released under GPL License Version 2
See LICENSE.txt for details

Installation
------------

* Copy *TemplateTwig* directory to *site/modules*

* Download *Twig* from *http://twig.sensiolabs.org/*

* Extract and copy *Twig* directory from *lib* to *PageTwig* directory (ie. *PageTwig/Twig*)

* Ensure http daemon has write access to *site/assets/cache* dir (this should be the case anyway)

* Copy *templates* directory to *site* (this contains some sample Twig templates and views)

	**Note:** By default these templates overwrite the standard site-default ones to use twig.
	If you don't want this then just create the *templates* and *templates/views* directories
	and use the ones from here as a guide to make your own.
	
* Enable *TemplateTwig* module in *ProcessWire*

* Create pages that use the twig templates.

	**NOTE:** As Twig handles html escaping etc itself, you can usually remove any *htmlspecialchars* filters from your fields.
	If you don't do this you may run into double-escaping issues.