<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\PermissionRegistrar;

class PermissionSeeder extends Seeder
{
    public function run(): void
    {
        app()[PermissionRegistrar::class]->forgetCachedPermissions();

        $permissions = [
            // Dashboard
            'view_dashboard',

            // Authors
            'view_any_author',
            'view_author',
            'create_author',
            'update_author',
            'delete_author',
            'activate_author',

            // Tags
            'view_any_tag',
            'view_tag',
            'create_tag',
            'update_tag',
            'delete_tag',

            // Insight Categories
            'view_any_insight_category',
            'view_insight_category',
            'create_insight_category',
            'update_insight_category',
            'delete_insight_category',

            // Insights
            'view_any_insight',
            'view_insight',
            'create_insight',
            'update_insight',
            'delete_insight',
            'submit_insight',
            'review_insight',
            'publish_insight',
            'archive_insight',
            'feature_insight',

            // Publication Types
            'view_any_publication_type',
            'view_publication_type',
            'create_publication_type',
            'update_publication_type',
            'delete_publication_type',

            // Publications
            'view_any_publication',
            'view_publication',
            'create_publication',
            'update_publication',
            'delete_publication',
            'publish_publication',
            'archive_publication',
            'feature_publication',

            // Program Categories
            'view_any_program_category',
            'view_program_category',
            'create_program_category',
            'update_program_category',
            'delete_program_category',

            // Programs
            'view_any_program',
            'view_program',
            'create_program',
            'update_program',
            'delete_program',
            'archive_program',
            'feature_program',

            // Opportunities
            'view_any_opportunity',
            'view_opportunity',
            'create_opportunity',
            'update_opportunity',
            'delete_opportunity',
            'close_opportunity',
            'archive_opportunity',
            'feature_opportunity',

            // Multimedia
            'view_any_multimedia',
            'view_multimedia',
            'create_multimedia',
            'update_multimedia',
            'delete_multimedia',
            'publish_multimedia',
            'archive_multimedia',
            'feature_multimedia',

            // Collaboration Submissions
            'view_any_collaboration_submission',
            'view_collaboration_submission',
            'update_collaboration_submission',
            'delete_collaboration_submission',
            'handle_collaboration_submission',
            'archive_collaboration_submission',

            // Contact Messages
            'view_any_contact_message',
            'view_contact_message',
            'update_contact_message',
            'delete_contact_message',
            'handle_contact_message',
            'archive_contact_message',

            // Users
            'view_any_user',
            'view_user',
            'create_user',
            'update_user',
            'delete_user',
            'assign_user_role',
            'activate_user',
            'deactivate_user',

            // Roles
            'view_any_role',
            'view_role',
            'create_role',
            'update_role',
            'delete_role',
            'sync_role_permission',

            // Permissions
            'view_any_permission',
            'view_permission',
            'create_permission',
            'update_permission',
            'delete_permission',
        ];

        foreach ($permissions as $permission) {
            Permission::firstOrCreate([
                'name' => $permission,
                'guard_name' => 'web',
            ]);
        }

        app()[PermissionRegistrar::class]->forgetCachedPermissions();
    }
}