IntegerNet_AlternativeTaxConfiguration
=====================
Add a second tax configuration for special customer groups (i.e. for displaying net/gross prices depending on group)

Facts
-----
- version: 0.1.0
- extension key: IntegerNet_AlternativeTaxConfiguration
- [extension on GitHub](https://github.com/integer-net/AlternativeTaxConfiguration)
- [direct download link](https://github.com/integer-net/AlternativeTaxConfiguration/archive/master.zip)

Description
-----------
This modules creates a new configuration section just below "Tax":

![Configuration Navigation](https://www.integer-net.com/download/integernet-alternativetax-1.png)

Use it to create a different tax configuration for defined customer groups:

![New Configuration Page](https://www.integer-net.com/download/integernet-alternativetax-2.png)

The alternative configuration settings will overwrite the normal settings on the fly if a customer from one of the
configured customer groups is logged in.

Requirements
------------
- PHP >= 5.3.0

Compatibility
-------------
- Magento >= 1.6

Installation Instructions
-------------------------
1. Clone the module into your document root.
2. Clear cache, log out and log in again
3. Adjust the field in the new configuration page "Alternative Tax"

Uninstallation
--------------
1. Remove all extension files from your Magento installation

Support
-------
If you have any issues with this extension, open an issue on [GitHub](https://github.com/integer-net/AlternativeTaxConfiguration/issues).

Contribution
------------
Any contribution is highly appreciated. The best way to contribute code is to open a [pull request on GitHub](https://help.github.com/articles/using-pull-requests).

Developer
---------
Andreas von Studnitz, integer_net GmbH
[http://www.integer-net.de](http://www.integer-net.com)
[@integer_net](https://twitter.com/integer_net)

Licence
-------
[GNU General Public License 3.0](http://www.gnu.org/licenses/)

Copyright
---------
(c) 2016 integer_net GmbH
