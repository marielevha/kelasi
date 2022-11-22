<?php

return [

    /*
    |--------------------------------------------------------------------------
    | User List & create lang file
    |--------------------------------------------------------------------------
    */

    'title' => 'New Member',
    'title_edit' => 'Edit Member',
    'dashboard' => 'Dashboard',
    'users' => 'Users',
    'audit_trails' => 'Audit Trails',
    'new_member' => 'New Member',
    'edit_member' => 'Edit Member',
    'adding_new_member' => 'Adding a new member',
    'updating_member' => 'Updating member',
    'import_new_members' => 'Import new members',
    'import_new_members_title' => 'Import an .csv file of the following format: name; email; phone; profile;',
    'account_information' => 'Account Information',
    'add_settings_account' => 'Add settings for this account',
    'update_settings_account' => 'Change settings of account ',

    'save_account' => 'Save Account',
    'reset' => 'Cancel',

    'account' => 'Account:',
    'name' => 'Name',
    'first_name' => 'First name',
    'last_name' => 'Last name',
    'enter_new_name' => 'Enter a new name',
    'enter_new_first_name' => 'Enter a new first name',
    'enter_new_last_name' => 'Enter a new last name',
    'email_address' => 'Email Address',
    'enter_new_email' => 'Enter a new email',
    'contact_phone' => 'Contact Phone',
    'region' => 'Region',
    'enter_new_phone' => 'Enter a new phone',

    'created_at' => 'Creation Date',

    'security' => 'Security:',
    'profile' => 'Profile',
    'commercial' => 'Commercial',
    'storekeeper' => 'Storekeeper',
    'viewer' => 'Viewer',
    'enterprise' => 'Enterprise',
    'administrator' => 'Administrator',

    'commercial_users' => 'List of Commercial users',
    'storekeeper_users' => 'List of Storekeeper users',
    'viewer_users' => 'List of Viewer users',
    'enterprise_users' => 'List of Enterprise users',
    'administrator_users' => 'List of Administrator users',
    'deleted_users' => 'List of deactivated members',



    'title_list' => 'List of Members',
    'list_organization_members' => 'List of organization members',

    'add_new_commercial' => 'Add a new commercial',
    'add_commercial' => 'Add Commercial',

    'add_new_viewer' => 'Add a new viewer',
    'add_viewer' => 'Add Viewer',

    'add_new_enterprise' => 'Add a new enterprise',
    'add_enterprise' => 'Add Enterprise',

    'add_new_storekeeper' => 'Add a new storekeeper',
    'add_storekeeper' => 'Add Storekeeper',

    'add_new_administrator' => 'Add a new administrator',
    'add_administrator' => 'Add Administrator',

    'list_users' => 'List of Uers',
    'total_users' => 'This organization currently has :number members',
    'commercial' => 'Commercial',
    'storekeeper' => 'Storekeeper',

    // 'enter_valid_phone_number' => 'Enter valid phone number(e.g: 5678967456).',
    // 'enter_valid_email' => 'Enter valid email.',
    'enter_displayble_name' => 'Name will be publicly displayed.',

    'show_phone' => 'Phone',

    'initial_password' => 'Initial Password',
    'enter_initial_password' => 'Enter a valid initial password',

    'current_initial_password' => 'The initial password will be emailed to email address provided.',

    'warning_profile_message' => 'Choose the profile you give to your user carefully. A different type of access will be provided to him depending on the profile he has.',
    'warning_profile_note' => 'The administrator profile is the most critical.',

    'list_empty' => 'This list is currently empty.',
    'be_careful' => 'Be careful',

    'see_changes' => 'Once your account update is complete, you will need to log out and back in to see the changes.',

    'enable_account' => 'Enable this account?',
    'activate_account' => 'Activate this account',
    'disable_account' => 'Disable this account?',
    'disable_account_message' => 'This user has been active since <code class="font-size-sm">:activatedAt</code>. If it is no longer used, you can deactivate it.',
    'enable_account_message' => 'This user has been inactive since <code class="font-size-sm">:deletedAt</code>. If it is useful, you can enable it.',

    'subtitle-enable-user' => '__',

    'subtitle-activation-user' => 'An email will be sent to the email address <code class="font-size-sm">:email</code> containing a link allowing the activation of the account.',

    'subtitle-download-import-model' => 'You must Import this .csv file in the following format: name; email; phone; profile. It will help you to facilitate the import of new members of the organization.',

    'subtitle-upload-import-model' => 'The file you upload must respect the imposed format. If there are users who do not follow this format, they will simply be <code class="font-size-sm">ignored</code>.',

    'subtitle-reset-password' => 'An email will be sent to the email address <code class="font-size-sm">:email</code> containing a link allowing the reset password of the account.',

    'send-change-password' => 'Send a email to reset this password?',

    'errors' => [
        'something-wrong' => 'Something went wrong. Please verify your information and try again.',
        'something-wrong-data-already-exist' => 'This region already exists. Please verify your information and try again.',
    ],

    'infos' => [
        'account-activate' => 'Your account has been successfully activated. Please log in again.',
        'account-reset-password' => 'Your password has been successfully updated. Please log in again.',
        'account-activate-confirm' => 'An email allowing the activation of the account has just been sent to the user :email.',
        'account-enabled-confirm' => 'The user ":email" has been successfully enabled.',
        'account-disabled-confirm' => 'The user ":email" has been successfully disabled.',
        'account-reset-password-confirm' => 'An email allowing to reset the password of the account has just been sent to the user ":email".',
        'user-created' => 'The user ":email" has been successfully created.',
        'user-updated' => 'The user ":email" has been successfully updated.',

        'region-created' => 'The region ":designation" has been successfully created.',

        'member-imported' => 'A batch of new object has just been added to the organization. Here is a report of the operations carried out.',
        'member-successfully-added' => 'Here are the objects that have been successfully added:',
        'member-fails-invalid' => 'Here are invalid records from csv file :',
        'member-fails-already-exist' => 'Here are the objects that already existed in the organization :',
    ]
];
