# MetaTags

Mediawiki extension.

## Description

* Extension adds custom meta tags to articles' headers (keywords, author, description).
* Extension is based on [Add Metas extension](https://www.mediawiki.org/wiki/Extension:Add_Metas)


## Installation

* Make sure you have MediaWiki 1.29+ installed.
* Download and place the extension to your _/extensions/_ folder.
* Add the following code to your LocalSettings.php: 
```
wfLoadExtension( 'MetaTags' );
```
* Define _MediaWiki:Head-author, MediaWiki:Head-keywords, MediaWiki:Head-description_ 


## Authors and license

* [Josef Martiňák](https://www.wikiskripta.eu/w/User:Josmart), Luis Diaz
* MIT License, Copyright (c) 2023 First Faculty of Medicine, Charles University
