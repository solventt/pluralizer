This package converts a noun from singular to plural. Also supports:

- 286 uncountable nouns which have the same singular and plural form
- exceptions like "man - men", "tooth - teeth", etc.
- identical noun forms (sheep, swine, deer, etc.)

DOESN'T support compound nouns (e.g. head banger, son-in-law, etc.)

One of the grammar rules sources - https://en.wikipedia.org/wiki/English_plurals

If someone doubts about nouns ending in -o, there are links to wiktionary.org on https://www.wordexample.com/list/nouns-ending-o

### Installing
```
composer require solventt/pluralizer
```
### Usage
```php
$plural = (new Pluralizer())->convert('singular');
```