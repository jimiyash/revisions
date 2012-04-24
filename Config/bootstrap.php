<?php

Croogo::hookBehavior('Node', 'Revisions.Revisions', array());

Croogo::hookComponent('*', 'Revisions.Revisions');

Croogo::hookHelper('Nodes', 'Revisions.Revisions');

//Croogo::hookAdminRowAction('Nodes/admin_index', 'Revisions', 'controller:nodes/action:edit/:id#node-revisions');

Croogo::hookAdminTab('Nodes/admin_add', 'Revisions', 'Revisions.admin_tab_node');
Croogo::hookAdminTab('Nodes/admin_edit', 'Revisions', 'Revisions.admin_tab_node');

// loading tinymce and other plugin specific settings
Configure::load('Revisions.revisions');
