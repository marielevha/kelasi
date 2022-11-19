<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class InitRolesAndPermissions extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:roles';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Initialize roles and permissions';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $this->info('Database Begin: init roles an permissions');
        $actions = ['read', 'write', 'delete', 'restore', 'import', 'export'];
        $models = [
            'user', 'series', 'subject',
            'level', 'document', 'chapter',
            'preference', 'config', 'attachment',

            'city', 'country', 'event', 'post', 'category'
        ];

        $advanced_user_permissions = [
            'user.viewer.create',
            'user.viewer.update',
            'user.viewer.delete',
            'user.viewer.read',
            'user.viewer.restore',

            'user.enterprise.create',
            'user.enterprise.update',
            'user.enterprise.delete',
            'user.enterprise.read',
            'user.enterprise.restore',

            'user.admin.create',
            'user.admin.update',
            'user.admin.delete',
            'user.admin.read',
            'user.admin.restore',

            'user.super-admin.create',
            'user.super-admin.update',
            'user.super-admin.delete',
            'user.super-admin.read',
            'user.super-admin.restore',
        ];


        /**
         * Creation of permissions
         */
        $this->comment('CREATION OF PERMISSIONS');
        $progress1 = $this->output->createProgressBar(count($models) * count($actions));
        $i = 0;
        while ($i < count($models) * count($actions)) {
            foreach ($models as $model) {
                foreach ($actions as $action) {
                    Permission::create(['name' => "$model.$action"]);
                    //$this->info("Create permission: ``$model.$action``");
                    $i++;
                    $progress1->advance();
                }
            }
        }
        Permission::create(['name' => "filemanager"]);
        $progress1->advance();
        //$this->info("Create permission: ``filemanager``");
        $progress1->finish();
        $this->comment(' DONE. ' . PHP_EOL);

        /**
         * Creation of roles & assignment of permissions to different roles
         */
        $this->comment('CREATION OF ROLES & ASSIGNMENT OF PERMISSIONS ROLES');
        $progress2 = $this->output->createProgressBar(4);
        Role::create(['name' => env('PROFILE_VIEWER')])
            ->givePermissionTo([
                'document.read', 'chapter.read',
                'preference.read', 'preference.write',
            ]);
        $progress2->advance();
        //$this->info('Create role: ``' . env('PROFILE_VIEWER') . '``');

        Role::create(['name' => env('PROFILE_ENTERPRISE')])
            ->givePermissionTo([
                'filemanager',
                'document.read', 'document.write', 'document.delete', 'document.restore',
                'chapter.read', 'chapter.write', 'chapter.delete', 'chapter.restore',
            ]);
        $progress2->advance();
        //$this->info('Create role: ``' . env('PROFILE_ENTERPRISE') . '``');

        /*Role::create(['name' => env('PROFILE_ENTERPRISE')])
            ->givePermissionTo(['filemanager', 'document.read', 'chapter.read']);
        $progress2->advance();
        //$this->info('Create role: ``' . env('PROFILE_ENTERPRISE') . '``');*/

        Role::create(['name' => env('PROFILE_ADMIN')])
            ->givePermissionTo([
                'document.read', 'document.write', 'document.delete', 'document.restore',
                'chapter.read', 'chapter.write', 'chapter.delete', 'chapter.restore',
                'user.read', 'user.write', 'user.delete', 'filemanager',
            ]);
        $progress2->advance();
        //$this->info('Create role: ``' . env('PROFILE_ADMIN') . '``');

        Role::create(['name' => env('PROFILE_SUPER_ADMIN')])
            ->syncPermissions(Permission::all());
        $progress2->advance();
        //$this->info('Create role: ``' . env('PROFILE_SUPER_ADMIN') . '``');
        $progress2->finish();
        $this->comment(' DONE. ' . PHP_EOL);

        /**
         * Assigning super-admin and admin roles to users
         */
        $this->comment('ASSIGNING SUPER-ADMIN AND ADMIN ROLES TO USERS');
        $progress3 = $this->output->createProgressBar(4);
        User::find(1)->assignRole(env('PROFILE_SUPER_ADMIN'));
        $progress3->advance();
        $this->info(' Assign role: Assign ``' . env('PROFILE_SUPER_ADMIN') . '`` role to ' . User::find(1)->name);

        User::find(2)->assignRole(env('PROFILE_ADMIN'));
        $progress3->advance();
        $this->info(' Assign role: Assign ``' . env('PROFILE_ADMIN') . '`` role to ' . User::find(2)->name);

        User::find(3)->assignRole(env('PROFILE_VIEWER'));
        $progress3->advance();
        $this->info(' Assign role: Assign ``' . env('PROFILE_VIEWER') . '`` role to ' . User::find(3)->name);

        User::find(4)->assignRole(env('PROFILE_VIEWER'));
        $progress3->advance();
        $this->info(' Assign role: Assign ``' . env('PROFILE_VIEWER') . '`` role to ' . User::find(4)->name);
        $progress3->finish();
        $this->comment('DONE. ' . PHP_EOL);

        $this->info('Database End: init roles an permissions');
    }
}
