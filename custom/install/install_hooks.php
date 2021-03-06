<?php
/**
 *
 * SugarCRM Community Edition is a customer relationship management program developed by
 * SugarCRM, Inc. Copyright (C) 2004-2013 SugarCRM Inc.
 *
 * SuiteCRM is an extension to SugarCRM Community Edition developed by SalesAgility Ltd.
 * Copyright (C) 2011 - 2017 SalesAgility Ltd.
 *
 * This program is free software; you can redistribute it and/or modify it under
 * the terms of the GNU Affero General Public License version 3 as published by the
 * Free Software Foundation with the addition of the following permission added
 * to Section 15 as permitted in Section 7(a): FOR ANY PART OF THE COVERED WORK
 * IN WHICH THE COPYRIGHT IS OWNED BY SUGARCRM, SUGARCRM DISCLAIMS THE WARRANTY
 * OF NON INFRINGEMENT OF THIRD PARTY RIGHTS.
 *
 * This program is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
 * FOR A PARTICULAR PURPOSE. See the GNU Affero General Public License for more
 * details.
 *
 * You should have received a copy of the GNU Affero General Public License along with
 * this program; if not, see http://www.gnu.org/licenses or write to the Free
 * Software Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA
 * 02110-1301 USA.
 *
 * You can contact SugarCRM, Inc. headquarters at 10050 North Wolfe Road,
 * SW2-130, Cupertino, CA 95014, USA. or at email address contact@sugarcrm.com.
 *
 * The interactive user interfaces in modified source and object code versions
 * of this program must display Appropriate Legal Notices, as required under
 * Section 5 of the GNU Affero General Public License version 3.
 *
 * In accordance with Section 7(b) of the GNU Affero General Public License version 3,
 * these Appropriate Legal Notices must retain the display of the "Powered by
 * SugarCRM" logo and "Supercharged by SuiteCRM" logo. If the display of the logos is not
 * reasonably feasible for technical reasons, the Appropriate Legal Notices must
 * display the words "Powered by SugarCRM" and "Supercharged by SuiteCRM".
 */

if (!defined('sugarEntry') || !sugarEntry) {
    die('Not A Valid Entry Point');
}

function post_installFileRequire($options)
{
    $GLOBALS['dictionary']['User']['custom_fields'] = true;
    $GLOBALS['dictionary']['Contact']['custom_fields'] = true;

    installLog("post_installFileRequire: update Users");
    $users = BeanFactory::getBean('Users');
    $userslist = $users->get_full_list();

    foreach( $userslist as $user ){
       $user->setupCustomFields($user->module_dir);
       $user->language_c = 'en';
       $user->field_defs["language_c"] = array( "name" => "language_c", "type" => "enum", "source" => "custom_fields");
       $user->custom_fields->bean = $user;
       $user->custom_fields->save( false );
    }

    installLog("post_installFileRequire: update Contacts");
    $contacts = BeanFactory::getBean('Contacts');
    $contactslist = $contacts->get_full_list();

    foreach( $contactslist as $contact ){
       $contact->setupCustomFields($contact->module_dir);
       $contact->language_c = 'en';
       $contact->field_defs["language_c"] = array( "name" => "language_c", "type" => "enum", "source" => "custom_fields");
       $contact->custom_fields->bean = $contact;
       $contact->custom_fields->save( false );
    }
}


?>
