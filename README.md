Adds code auto completion for all classes, properties and methods of PrestaShop in PHPStorm.

The reason why PHPStorm can't autocomplete PrestaShop's core classes by default, is the way PrestaShop's
intelligent override mechanism works. PHPStorm has no knowledge of this mechanism and PrestaShop's class
naming scheme of core classes, to make overriding them possible. 

I'm closing this gap and PHPStorm can not only auto complete class names, methods and properties, 
but can also find and point us to their definitions correct (something many other custom code completion
solutions for other frameworks I have seen do not). 

