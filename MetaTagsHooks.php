<?php

declare( strict_types = 1 );

use MediaWiki\Output\OutputPage;
use MediaWiki\Skin\Skin;
use MediaWiki\Title\Title;

/**
 * Hook handlers for the MetaTags extension.
 */
class MetaTagsHooks {

	/**
	 * Adds standard meta tags to article pages.
	 *
	 * @param OutputPage $out
	 * @param Skin $skin
	 */
	public static function addMetaTags( OutputPage $out, Skin $skin ): void {
		$title = $out->getTitle();
		if ( !$title instanceof Title || !$out->isArticle() ) {
			return;
		}

		self::addMessageMetaTag( $out, 'keywords', 'head-keywords' );
		self::addMessageMetaTag( $out, 'author', 'head-author' );
		self::addMessageMetaTag( $out, 'description', 'head-description' );
	}

	/**
	 * Adds a meta tag when the message exists and is not blank.
	 *
	 * @param OutputPage $out
	 * @param string $name
	 * @param string $messageKey
	 */
	private static function addMessageMetaTag( OutputPage $out, string $name, string $messageKey ): void {
		$value = trim( $out->msg( $messageKey )->text() );
		if ( $value !== '' ) {
			$out->addMeta( $name, $value );
		}
	}
}
