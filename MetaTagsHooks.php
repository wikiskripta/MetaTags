<?php

/**
 * All hooked functions used by MetaTags
 */

class MetaTagsHooks {

	/**
	 * Add meta tags to a page
	 * @param object $out: instance of OutputPage
	 * @param object $skin: instance of Skin, unused
	 */
	public static function addMetaTags( &$out, &$skin ) {

		if( $out->isArticle() ) {
			$name = $out->getTitle()->getPrefixedDBKey();
			$out->addMeta( 'keywords', $out->msg('head-keywords')->text() );
			$out->addMeta( 'author', $out->msg('head-author')->text() );
			$out->addMeta( 'description', $out->msg('head-description')->text() );
		}
		return true;
		
	}
}