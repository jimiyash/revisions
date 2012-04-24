<?php

// default Croogo Types
CroogoRouter::connect('/page/:slug/:revision', array(
	'controller' => 'revisions', 'plugin'=>'revisions', 'action' => 'view',
	'type' => 'page',
	));

CroogoRouter::connect('/blog/:slug/:revision', array(
	'controller' => 'revisions', 'plugin'=>'revisions', 'action' => 'view',
	'type' => 'blog',
	));

CroogoRouter::connect('/node/:slug/:revision', array(
	'controller' => 'revisions', 'plugin'=>'revisions', 'action' => 'view',
	'type' => 'node',
	));