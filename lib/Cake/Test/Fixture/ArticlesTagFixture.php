<?php
/**
 * Short description for file.
 *
 * CakePHP(tm) Tests <http://book.cakephp.org/2.0/en/development/testing.html>
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://book.cakephp.org/2.0/en/development/testing.html CakePHP(tm) Tests
 * @package       Cake.Test.Fixture
 * @since         CakePHP(tm) v 1.2.0.4667
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

/**
 * Short description for class.
 *
 * @package       Cake.Test.Fixture
 */
class ArticlesTagFixture extends CakeTestFixture {

/**
 * fields property
 *
 * @var array
 */
	public $fields = array(
		'article_id' => array('type' => 'integer', 'null' => false),
		'id_tag' => array('type' => 'integer', 'null' => false),
		'indexes' => array('UNIQUE_TAG2' => array('column' => array('article_id', 'id_tag'), 'unique' => 1))
	);

/**
 * records property
 *
 * @var array
 */
	public $records = array(
		array('article_id' => 1, 'id_tag' => 1),
		array('article_id' => 1, 'id_tag' => 2),
		array('article_id' => 2, 'id_tag' => 1),
		array('article_id' => 2, 'id_tag' => 3)
	);
}
