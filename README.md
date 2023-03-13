CAUTION: This hasn't been updated nor tested for PrestaShop v1.7 or v8. It is unchecked, if it contains all valid classes or not or if, because of technology changes (like namespaces), may not work as intended at all. It may, or it may not. Please test on your own.


## Code Completion for PrestaShop classes

Adds code auto completion for all classes, properties and methods of PrestaShop. Instructions for PHPStorm and Eclipse/PDT are included, but most other IDEs (ie. NetBeans) should work too. 

The reason why PHPStorm can't autocomplete PrestaShop's core classes by default, is the way PrestaShop's
intelligent override mechanism works. PHPStorm has no knowledge of this mechanism and PrestaShop's class
naming scheme of core classes, to make overriding them possible. 

I'm closing this gap and PHPStorm can not only auto complete class names, methods and properties, 
but can also find and point us to their definitions correct (something many other custom code completion
solutions for other frameworks I have seen do not). 

## How to make it work

### PHPStorm Method C (newest, now preferred over method A and B)

- Clone this repository into it's own folder. 
- In your PHPStorm Project, go in File|Settings|PHP
- Click the '+' and add the folder to your project. 
- If you work on a Prestashop module and have added a PrestaShop copy in 'Includes' too, make sure it is added after 
this one. This will avoid that classes like the ones in the profiling directory are selected wrongly for autocompletion.   

#### Pros:
- No extra steps ever to take. Just set and forget. 
- Will automatically look up a class here, when there is no other override in your project. 
- Will appear in your project view only under "External Libraries", separate from your project files.
- Will not be searched as part of your project.  
- You get less "Multiple declarations" warnings (see below). 

#### Cons:
- None 

### Eclipse/PDT

- Clone this repository into it's own folder. 
- In your Eclipse Project, go in Project|Properties|PHP|Build Path
- Click 'Link Source...' and add the folder to your project. 
- Choose 'Update exclusion filters in other source folders to solve nesting
- If you work on a Prestashop module and have added a PrestaShop copy in 'Includes' too, make sure it is added after 
this one. This will avoid that classes like the ones in the profiling directory are selected wrongly for autocompletion.   

#### Pros:
- No extra steps ever to take. Just set and forget. 
- Will automatically look up a class here, when there is no other override in your project. 
- Will appear in your project view only under "External Libraries", separate from your project files.
- Will not be searched as part of your project.  
- You get less "Multiple declarations" warnings (see below). 

#### Cons:
- None 

### PHPStorm Method A (old)

- Clone this repository into it's own folder.
- In your PHPStorm Project, go in File|Settings|Directories.
- Add the folder where you cloned as Content Root and apply changes.
- Refresh the index by using File|Invalidate Caches...

#### Pros:
- No integration with the project, clean separation. 

#### Cons:
- If you have overridden any class and want auto completion to work for your own methods and properties in the overridden class, you have to find the class file named like the overriden class and "Mark as plain text" in PHPStorm.
 

### PHPStorm Method B (old)

- Clone this repository into it's own folder or download the files.
- Copy all downloaded PHP files into the override folder of your PrestaShop, without overriding any existing files. 
- Refresh the index by using File|Invalidate Caches...


#### Pros:
- You don't need to mark any files as plain text, as you override classes, to have auto completion working on your custom methods and properties.

#### Cons:
- The classes will be loaded by PrestaShop, even if empty, which might add some ms on execution time. 


## Fixing "Multiple declarations" errors

PHPStorm might get falsely the wrong class file or show multiple declarations for a class. So it happens as example with Search::somestaticfunction() calls in classes/Search.php, with the Shop class elsewhere etc. 

You will have this happen also more often, if you include the PrestaShop-modules repository in your project. 

While in the latter case, these are class overrides from some modules, that might be the correct class to look for a definition, in some cases like Search:: it points to a file class.search.php in the folder admin/ajaxfilemanager/inc, which is absolutely not the correct definition. 

In cases like the described class.search.php, mark these files as Plain text. In cases where just an override declares the same class again, have either that override or the class file from this repository marked as plain text. 

