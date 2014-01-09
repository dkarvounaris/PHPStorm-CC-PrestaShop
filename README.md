## PHPStorm Code Completion for PrestaShop classes

Adds code auto completion for all classes, properties and methods of PrestaShop in PHPStorm.

The reason why PHPStorm can't autocomplete PrestaShop's core classes by default, is the way PrestaShop's
intelligent override mechanism works. PHPStorm has no knowledge of this mechanism and PrestaShop's class
naming scheme of core classes, to make overriding them possible. 

I'm closing this gap and PHPStorm can not only auto complete class names, methods and properties, 
but can also find and point us to their definitions correct (something many other custom code completion
solutions for other frameworks I have seen do not). 

## How to make it work


### Method A (preferred)

- Clone this repository into it's own folder.
- In your PHPStorm Project, go in File|Settings|Directories.
- Add the folder where you cloned as Content Root and apply changes.
- Refresh the index by using File|Invalidate Caches...

#### Pros:
- No integration with the project, clean separation. 

#### Cons:
- If you have overriden any class and want autocompletion for your own methods and properties in the overriden class, you have to "Mark as plain text" the class file in this repository in PHPStorm.
 

### Method B

- Clone this repository into it's own folder or download the files.
- Copy all downloaded PHP files into the override folder of your PrestaShop, without overriding any existing files. 
- Refresh the index by using File|Invalidate Caches...


#### Pros:
- You don't need to mark any files as plain text, to have any custom methods's auto completion working.

#### Cons:
- The classes will be loaded by PrestaShop, even if empty, which might add some ms on execution time. 

