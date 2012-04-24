<?php

App::uses('CroogoTestCase', 'TestSuite');
App::uses('Revision', 'Revisions.Model');
App::uses('Block', 'Model');
App::uses('Region', 'Model');
App::uses('Link', 'Model');
App::uses('Node', 'Model');
App::uses('Taxonomy', 'Model');
App::uses('Vocabulary', 'Model');

class RevisionTest extends CroogoTestCase {

	public $fixtures = array(
		'revisions.revision',
		'node',
		'user',
		'role',
		'block',
		'region',
		'link',
		'menu',
		'taxonomy',
		'nodes_taxonomy',
		'vocabulary',
		'setting',
	);

	public function setUp() {
		 $this->Revision =& ClassRegistry::init('Revision');
		 $this->Block =& ClassRegistry::init('Block');
		 $this->Link =& ClassRegistry::init('Link');
		 $this->Node =& ClassRegistry::init('Node');
	}

	public function endTest() {
		unset($this->Revision);
		ClassRegistry::flush();
	}

	public function testSaveRevision() {

		// Save invalid nodes
		//$this->assertFalse($this->Revision->saveRevision(null));
		//$this->assertFalse($this->Revision->saveRevision(new Node()));
		//$this->assertFalse($this->Revision->saveRevision('test'));

	}

}