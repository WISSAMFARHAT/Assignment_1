<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'home', '_controller' => 'App\\Controller\\StudentsController::index'], null, null, null, false, false, null]],
        '/admin' => [[['_route' => 'sonata_admin_redirect', 'route' => 'sonata_admin_dashboard', 'permanent' => 'true', '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController::redirectAction'], null, null, null, true, false, null]],
        '/admin/dashboard' => [[['_route' => 'sonata_admin_dashboard', '_controller' => 'sonata.admin.action.dashboard'], null, null, null, false, false, null]],
        '/admin/core/get-form-field-element' => [[['_route' => 'sonata_admin_retrieve_form_element', '_controller' => 'sonata.admin.action.retrieve_form_field_element'], null, null, null, false, false, null]],
        '/admin/core/append-form-field-element' => [[['_route' => 'sonata_admin_append_form_element', '_controller' => 'sonata.admin.action.append_form_field_element'], null, null, null, false, false, null]],
        '/admin/core/set-object-field-value' => [[['_route' => 'sonata_admin_set_object_field_value', '_controller' => 'sonata.admin.action.set_object_field_value'], null, null, null, false, false, null]],
        '/admin/search' => [[['_route' => 'sonata_admin_search', '_controller' => 'sonata.admin.action.search'], null, null, null, false, false, null]],
        '/admin/core/get-autocomplete-items' => [[['_route' => 'sonata_admin_retrieve_autocomplete_items', '_controller' => 'sonata.admin.action.retrieve_autocomplete_items'], null, null, null, false, false, null]],
        '/admin/app/student/list' => [[['_route' => 'admin_app_student_list', '_controller' => 'sonata.admin.controller.crud:listAction', '_sonata_admin' => 'admin.student', '_sonata_name' => 'admin_app_student_list'], null, null, null, false, false, null]],
        '/admin/app/student/create' => [[['_route' => 'admin_app_student_create', '_controller' => 'sonata.admin.controller.crud:createAction', '_sonata_admin' => 'admin.student', '_sonata_name' => 'admin_app_student_create'], null, null, null, false, false, null]],
        '/admin/app/student/batch' => [[['_route' => 'admin_app_student_batch', '_controller' => 'sonata.admin.controller.crud:batchAction', '_sonata_admin' => 'admin.student', '_sonata_name' => 'admin_app_student_batch'], null, null, null, false, false, null]],
        '/admin/app/student/export' => [[['_route' => 'admin_app_student_export', '_controller' => 'sonata.admin.controller.crud:exportAction', '_sonata_admin' => 'admin.student', '_sonata_name' => 'admin_app_student_export'], null, null, null, false, false, null]],
        '/admin/app/clase/list' => [[['_route' => 'admin_app_clase_list', '_controller' => 'sonata.admin.controller.crud:listAction', '_sonata_admin' => 'admin.clase', '_sonata_name' => 'admin_app_clase_list'], null, null, null, false, false, null]],
        '/admin/app/clase/create' => [[['_route' => 'admin_app_clase_create', '_controller' => 'sonata.admin.controller.crud:createAction', '_sonata_admin' => 'admin.clase', '_sonata_name' => 'admin_app_clase_create'], null, null, null, false, false, null]],
        '/admin/app/clase/batch' => [[['_route' => 'admin_app_clase_batch', '_controller' => 'sonata.admin.controller.crud:batchAction', '_sonata_admin' => 'admin.clase', '_sonata_name' => 'admin_app_clase_batch'], null, null, null, false, false, null]],
        '/admin/app/clase/export' => [[['_route' => 'admin_app_clase_export', '_controller' => 'sonata.admin.controller.crud:exportAction', '_sonata_admin' => 'admin.clase', '_sonata_name' => 'admin_app_clase_export'], null, null, null, false, false, null]],
        '/admin/app/course/list' => [[['_route' => 'admin_app_course_list', '_controller' => 'sonata.admin.controller.crud:listAction', '_sonata_admin' => 'admin.course', '_sonata_name' => 'admin_app_course_list'], null, null, null, false, false, null]],
        '/admin/app/course/create' => [[['_route' => 'admin_app_course_create', '_controller' => 'sonata.admin.controller.crud:createAction', '_sonata_admin' => 'admin.course', '_sonata_name' => 'admin_app_course_create'], null, null, null, false, false, null]],
        '/admin/app/course/batch' => [[['_route' => 'admin_app_course_batch', '_controller' => 'sonata.admin.controller.crud:batchAction', '_sonata_admin' => 'admin.course', '_sonata_name' => 'admin_app_course_batch'], null, null, null, false, false, null]],
        '/admin/app/course/export' => [[['_route' => 'admin_app_course_export', '_controller' => 'sonata.admin.controller.crud:exportAction', '_sonata_admin' => 'admin.course', '_sonata_name' => 'admin_app_course_export'], null, null, null, false, false, null]],
        '/admin/app/baseentity/list' => [[['_route' => 'admin_app_baseentity_list', '_controller' => 'sonata.admin.controller.crud:listAction', '_sonata_admin' => 'admin.base_entity', '_sonata_name' => 'admin_app_baseentity_list'], null, null, null, false, false, null]],
        '/admin/app/baseentity/create' => [[['_route' => 'admin_app_baseentity_create', '_controller' => 'sonata.admin.controller.crud:createAction', '_sonata_admin' => 'admin.base_entity', '_sonata_name' => 'admin_app_baseentity_create'], null, null, null, false, false, null]],
        '/admin/app/baseentity/batch' => [[['_route' => 'admin_app_baseentity_batch', '_controller' => 'sonata.admin.controller.crud:batchAction', '_sonata_admin' => 'admin.base_entity', '_sonata_name' => 'admin_app_baseentity_batch'], null, null, null, false, false, null]],
        '/admin/app/baseentity/export' => [[['_route' => 'admin_app_baseentity_export', '_controller' => 'sonata.admin.controller.crud:exportAction', '_sonata_admin' => 'admin.base_entity', '_sonata_name' => 'admin_app_baseentity_export'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:102)'
                            .'|router(*:116)'
                            .'|exception(?'
                                .'|(*:136)'
                                .'|\\.css(*:149)'
                            .')'
                        .')'
                        .'|(*:159)'
                    .')'
                .')'
                .'|/Home/(?'
                    .'|([^/]++)(*:186)'
                    .'|student/(?'
                        .'|([^/]++)(*:213)'
                        .'|edit/([^/]++)(*:234)'
                        .'|Remove/([^/]++)(*:257)'
                        .'|show/([^/]++)(*:278)'
                        .'|new_(?'
                            .'|course/([^/]++)(*:308)'
                            .'|student_course/([^/]++)(*:339)'
                        .')'
                    .')'
                    .'|c(?'
                        .'|lasses/(?'
                            .'|edit/([^/]++)(*:376)'
                            .'|([^/]++)(*:392)'
                            .'|Remove/([^/]++)(*:415)'
                        .')'
                        .'|ourse/Remove/([^/]++)(*:445)'
                    .')'
                .')'
                .'|/home/(?'
                    .'|student/([^/]++)(*:480)'
                    .'|([^/]++)/([^/]++)(*:505)'
                .')'
                .'|/student/courses/edit/([^/]++)(*:544)'
                .'|/Student/course/([^/]++)(*:576)'
                .'|/admin/(?'
                    .'|core/get\\-short\\-object\\-description(?:\\.(html|json))?(*:648)'
                    .'|app/(?'
                        .'|student/([^/]++)/(?'
                            .'|edit(*:687)'
                            .'|delete(*:701)'
                            .'|show(*:713)'
                        .')'
                        .'|c(?'
                            .'|lase/([^/]++)/(?'
                                .'|edit(*:747)'
                                .'|delete(*:761)'
                                .'|show(*:773)'
                            .')'
                            .'|ourse/([^/]++)/(?'
                                .'|edit(*:804)'
                                .'|delete(*:818)'
                                .'|show(*:830)'
                            .')'
                        .')'
                        .'|baseentity/([^/]++)/(?'
                            .'|edit(*:867)'
                            .'|delete(*:881)'
                            .'|show(*:893)'
                        .')'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        186 => [[['_route' => 'Student', '_controller' => 'App\\Controller\\StudentsController::Student'], ['st'], null, null, false, true, null]],
        213 => [[['_route' => 'new', '_controller' => 'App\\Controller\\StudentsController::New'], ['name'], null, null, false, true, null]],
        234 => [[['_route' => 'update', '_controller' => 'App\\Controller\\StudentsController::Update'], ['id'], null, null, false, true, null]],
        257 => [[['_route' => 'Remove', '_controller' => 'App\\Controller\\StudentsController::Delete'], ['id'], null, null, false, true, null]],
        278 => [[['_route' => 'Show', '_controller' => 'App\\Controller\\StudentsController::Show'], ['id'], null, null, false, true, null]],
        308 => [[['_route' => 'new_course', '_controller' => 'App\\Controller\\StudentsController::new_course'], ['id'], null, null, false, true, null]],
        339 => [[['_route' => 'new_student_course', '_controller' => 'App\\Controller\\StudentsController::new_student_course'], ['id'], null, null, false, true, null]],
        376 => [[['_route' => 'update_classes', '_controller' => 'App\\Controller\\StudentsController::Update_Classes'], ['id'], null, null, false, true, null]],
        392 => [[['_route' => 'insert_classes', '_controller' => 'App\\Controller\\StudentsController::insert_class'], ['name'], null, null, false, true, null]],
        415 => [[['_route' => 'Remove_classes', '_controller' => 'App\\Controller\\StudentsController::Remove_Delete'], ['id'], null, null, false, true, null]],
        445 => [[['_route' => 'Remove_course', '_controller' => 'App\\Controller\\StudentsController::Remove_Course'], ['id'], null, null, false, true, null]],
        480 => [[['_route' => 'grade', '_controller' => 'App\\Controller\\StudentsController::grade'], ['name'], null, null, false, true, null]],
        505 => [[['_route' => 'Filter', '_controller' => 'App\\Controller\\StudentsController::Filter'], ['student', 'filter'], null, null, false, true, null]],
        544 => [[['_route' => 'update_course', '_controller' => 'App\\Controller\\StudentsController::Update_Course'], ['id'], null, null, false, true, null]],
        576 => [[['_route' => 'insert_course', '_controller' => 'App\\Controller\\StudentsController::insert_Course'], ['name'], null, null, false, true, null]],
        648 => [[['_route' => 'sonata_admin_short_object_information', '_controller' => 'sonata.admin.action.get_short_object_description', '_format' => 'html'], ['_format'], null, null, false, true, null]],
        687 => [[['_route' => 'admin_app_student_edit', '_controller' => 'sonata.admin.controller.crud:editAction', '_sonata_admin' => 'admin.student', '_sonata_name' => 'admin_app_student_edit'], ['id'], null, null, false, false, null]],
        701 => [[['_route' => 'admin_app_student_delete', '_controller' => 'sonata.admin.controller.crud:deleteAction', '_sonata_admin' => 'admin.student', '_sonata_name' => 'admin_app_student_delete'], ['id'], null, null, false, false, null]],
        713 => [[['_route' => 'admin_app_student_show', '_controller' => 'sonata.admin.controller.crud:showAction', '_sonata_admin' => 'admin.student', '_sonata_name' => 'admin_app_student_show'], ['id'], null, null, false, false, null]],
        747 => [[['_route' => 'admin_app_clase_edit', '_controller' => 'sonata.admin.controller.crud:editAction', '_sonata_admin' => 'admin.clase', '_sonata_name' => 'admin_app_clase_edit'], ['id'], null, null, false, false, null]],
        761 => [[['_route' => 'admin_app_clase_delete', '_controller' => 'sonata.admin.controller.crud:deleteAction', '_sonata_admin' => 'admin.clase', '_sonata_name' => 'admin_app_clase_delete'], ['id'], null, null, false, false, null]],
        773 => [[['_route' => 'admin_app_clase_show', '_controller' => 'sonata.admin.controller.crud:showAction', '_sonata_admin' => 'admin.clase', '_sonata_name' => 'admin_app_clase_show'], ['id'], null, null, false, false, null]],
        804 => [[['_route' => 'admin_app_course_edit', '_controller' => 'sonata.admin.controller.crud:editAction', '_sonata_admin' => 'admin.course', '_sonata_name' => 'admin_app_course_edit'], ['id'], null, null, false, false, null]],
        818 => [[['_route' => 'admin_app_course_delete', '_controller' => 'sonata.admin.controller.crud:deleteAction', '_sonata_admin' => 'admin.course', '_sonata_name' => 'admin_app_course_delete'], ['id'], null, null, false, false, null]],
        830 => [[['_route' => 'admin_app_course_show', '_controller' => 'sonata.admin.controller.crud:showAction', '_sonata_admin' => 'admin.course', '_sonata_name' => 'admin_app_course_show'], ['id'], null, null, false, false, null]],
        867 => [[['_route' => 'admin_app_baseentity_edit', '_controller' => 'sonata.admin.controller.crud:editAction', '_sonata_admin' => 'admin.base_entity', '_sonata_name' => 'admin_app_baseentity_edit'], ['id'], null, null, false, false, null]],
        881 => [[['_route' => 'admin_app_baseentity_delete', '_controller' => 'sonata.admin.controller.crud:deleteAction', '_sonata_admin' => 'admin.base_entity', '_sonata_name' => 'admin_app_baseentity_delete'], ['id'], null, null, false, false, null]],
        893 => [
            [['_route' => 'admin_app_baseentity_show', '_controller' => 'sonata.admin.controller.crud:showAction', '_sonata_admin' => 'admin.base_entity', '_sonata_name' => 'admin_app_baseentity_show'], ['id'], null, null, false, false, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
