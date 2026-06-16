<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\PermissionRegistrar;

class RoleSeeder extends Seeder
{
    public function run(): void
    {
        app()[PermissionRegistrar::class]->forgetCachedPermissions();

        $superAdmin = Role::firstOrCreate([
            'name' => 'Super Admin',
            'guard_name' => 'web',
        ]);

        $editor = Role::firstOrCreate([
            'name' => 'Editor',
            'guard_name' => 'web',
        ]);

        $writer = Role::firstOrCreate([
            'name' => 'Writer',
            'guard_name' => 'web',
        ]);

        $programAdmin = Role::firstOrCreate([
            'name' => 'Program Admin',
            'guard_name' => 'web',
        ]);

        // Super Admin mendapatkan semua permission.
        $superAdmin->syncPermissions(Permission::all());

        // Editor: fokus pada Insight, Publikasi, Author, Tag, dan kategori Insight.
        $editor->syncPermissions([
            'view_dashboard',

            'view_any_author',
            'view_author',
            'create_author',
            'update_author',
            'activate_author',

            'view_any_tag',
            'view_tag',
            'create_tag',
            'update_tag',

            'view_any_insight_category',
            'view_insight_category',
            'create_insight_category',
            'update_insight_category',

            'view_any_insight',
            'view_insight',
            'create_insight',
            'update_insight',
            'submit_insight',
            'review_insight',
            'publish_insight',
            'archive_insight',
            'feature_insight',

            'view_any_publication_type',
            'view_publication_type',
            'create_publication_type',
            'update_publication_type',

            'view_any_publication',
            'view_publication',
            'create_publication',
            'update_publication',
            'publish_publication',
            'archive_publication',
            'feature_publication',

            'view_any_multimedia',
            'view_multimedia',
            'create_multimedia',
            'update_multimedia',
            'publish_multimedia',
            'archive_multimedia',
            'feature_multimedia',

            'view_any_collaboration_submission',
            'view_collaboration_submission',
            'update_collaboration_submission',
            'handle_collaboration_submission',
            'archive_collaboration_submission',

            'view_any_contact_message',
            'view_contact_message',
            'update_contact_message',
            'handle_contact_message',
            'archive_contact_message',
        ]);

        // Writer: hanya mengelola Insight miliknya sendiri.
        $writer->syncPermissions([
            'view_dashboard',

            'view_any_author',
            'view_author',

            'view_any_tag',
            'view_tag',

            'view_any_insight_category',
            'view_insight_category',

            'view_any_insight',
            'view_insight',
            'create_insight',
            'update_insight',
            'delete_insight',
            'submit_insight',
        ]);

        // Program Admin: fokus Program, Opportunities, Multimedia, Inbox.
        $programAdmin->syncPermissions([
            'view_dashboard',

            'view_any_program_category',
            'view_program_category',
            'create_program_category',
            'update_program_category',
            'delete_program_category',

            'view_any_program',
            'view_program',
            'create_program',
            'update_program',
            'delete_program',
            'archive_program',
            'feature_program',

            'view_any_opportunity',
            'view_opportunity',
            'create_opportunity',
            'update_opportunity',
            'delete_opportunity',
            'close_opportunity',
            'archive_opportunity',
            'feature_opportunity',

            'view_any_multimedia',
            'view_multimedia',
            'create_multimedia',
            'update_multimedia',
            'delete_multimedia',
            'publish_multimedia',
            'archive_multimedia',
            'feature_multimedia',

            'view_any_collaboration_submission',
            'view_collaboration_submission',
            'update_collaboration_submission',
            'handle_collaboration_submission',
            'archive_collaboration_submission',

            'view_any_contact_message',
            'view_contact_message',
            'update_contact_message',
            'handle_contact_message',
            'archive_contact_message',
        ]);

        app()[PermissionRegistrar::class]->forgetCachedPermissions();
    }
}