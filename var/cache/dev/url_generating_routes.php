<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], []],
    '_wdt' => [['token'], ['_controller' => 'web_profiler.controller.profiler::toolbarAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_wdt']], [], []],
    '_profiler_home' => [[], ['_controller' => 'web_profiler.controller.profiler::homeAction'], [], [['text', '/_profiler/']], [], []],
    '_profiler_search' => [[], ['_controller' => 'web_profiler.controller.profiler::searchAction'], [], [['text', '/_profiler/search']], [], []],
    '_profiler_search_bar' => [[], ['_controller' => 'web_profiler.controller.profiler::searchBarAction'], [], [['text', '/_profiler/search_bar']], [], []],
    '_profiler_phpinfo' => [[], ['_controller' => 'web_profiler.controller.profiler::phpinfoAction'], [], [['text', '/_profiler/phpinfo']], [], []],
    '_profiler_search_results' => [['token'], ['_controller' => 'web_profiler.controller.profiler::searchResultsAction'], [], [['text', '/search/results'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_open_file' => [[], ['_controller' => 'web_profiler.controller.profiler::openAction'], [], [['text', '/_profiler/open']], [], []],
    '_profiler' => [['token'], ['_controller' => 'web_profiler.controller.profiler::panelAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_router' => [['token'], ['_controller' => 'web_profiler.controller.router::panelAction'], [], [['text', '/router'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_exception' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::body'], [], [['text', '/exception'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_exception_css' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::stylesheet'], [], [['text', '/exception.css'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    'home' => [[], ['_controller' => 'App\\Controller\\StudentsController::index'], [], [['text', '/']], [], []],
    'Student' => [['st'], ['_controller' => 'App\\Controller\\StudentsController::Student'], [], [['variable', '/', '[^/]++', 'st', true], ['text', '/Home']], [], []],
    'new' => [['name'], ['_controller' => 'App\\Controller\\StudentsController::New'], [], [['variable', '/', '[^/]++', 'name', true], ['text', '/Home/student']], [], []],
    'update' => [['id'], ['_controller' => 'App\\Controller\\StudentsController::Update'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/Home/student/edit']], [], []],
    'Remove' => [['id'], ['_controller' => 'App\\Controller\\StudentsController::Delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/Home/student/Remove']], [], []],
    'Show' => [['id'], ['_controller' => 'App\\Controller\\StudentsController::Show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/Home/student/show']], [], []],
    'grade' => [['name'], ['_controller' => 'App\\Controller\\StudentsController::grade'], [], [['variable', '/', '[^/]++', 'name', true], ['text', '/home/student']], [], []],
    'new_course' => [['id'], ['_controller' => 'App\\Controller\\StudentsController::new_course'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/Home/student/new_course']], [], []],
    'new_student_course' => [['id'], ['_controller' => 'App\\Controller\\StudentsController::new_student_course'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/Home/student/new_student_course']], [], []],
    'update_classes' => [['id'], ['_controller' => 'App\\Controller\\StudentsController::Update_Classes'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/Home/classes/edit']], [], []],
    'insert_classes' => [['name'], ['_controller' => 'App\\Controller\\StudentsController::insert_class'], [], [['variable', '/', '[^/]++', 'name', true], ['text', '/Home/classes']], [], []],
    'Remove_classes' => [['id'], ['_controller' => 'App\\Controller\\StudentsController::Remove_Delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/Home/classes/Remove']], [], []],
    'update_course' => [['id'], ['_controller' => 'App\\Controller\\StudentsController::Update_Course'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/student/courses/edit']], [], []],
    'insert_course' => [['name'], ['_controller' => 'App\\Controller\\StudentsController::insert_Course'], [], [['variable', '/', '[^/]++', 'name', true], ['text', '/Student/course']], [], []],
    'Remove_course' => [['id'], ['_controller' => 'App\\Controller\\StudentsController::Remove_Course'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/Home/course/Remove']], [], []],
    'Filter' => [['student', 'filter'], ['_controller' => 'App\\Controller\\StudentsController::Filter'], [], [['variable', '/', '[^/]++', 'filter', true], ['variable', '/', '[^/]++', 'student', true], ['text', '/home']], [], []],
    'sonata_admin_redirect' => [[], ['route' => 'sonata_admin_dashboard', 'permanent' => 'true', '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController::redirectAction'], [], [['text', '/admin/']], [], []],
    'sonata_admin_dashboard' => [[], ['_controller' => 'sonata.admin.action.dashboard'], [], [['text', '/admin/dashboard']], [], []],
    'sonata_admin_retrieve_form_element' => [[], ['_controller' => 'sonata.admin.action.retrieve_form_field_element'], [], [['text', '/admin/core/get-form-field-element']], [], []],
    'sonata_admin_append_form_element' => [[], ['_controller' => 'sonata.admin.action.append_form_field_element'], [], [['text', '/admin/core/append-form-field-element']], [], []],
    'sonata_admin_short_object_information' => [['_format'], ['_controller' => 'sonata.admin.action.get_short_object_description', '_format' => 'html'], ['_format' => 'html|json'], [['variable', '.', 'html|json', '_format', true], ['text', '/admin/core/get-short-object-description']], [], []],
    'sonata_admin_set_object_field_value' => [[], ['_controller' => 'sonata.admin.action.set_object_field_value'], [], [['text', '/admin/core/set-object-field-value']], [], []],
    'sonata_admin_search' => [[], ['_controller' => 'sonata.admin.action.search'], [], [['text', '/admin/search']], [], []],
    'sonata_admin_retrieve_autocomplete_items' => [[], ['_controller' => 'sonata.admin.action.retrieve_autocomplete_items'], [], [['text', '/admin/core/get-autocomplete-items']], [], []],
    'admin_app_student_list' => [[], ['_controller' => 'sonata.admin.controller.crud:listAction', '_sonata_admin' => 'admin.student', '_sonata_name' => 'admin_app_student_list'], [], [['text', '/admin/app/student/list']], [], []],
    'admin_app_student_create' => [[], ['_controller' => 'sonata.admin.controller.crud:createAction', '_sonata_admin' => 'admin.student', '_sonata_name' => 'admin_app_student_create'], [], [['text', '/admin/app/student/create']], [], []],
    'admin_app_student_batch' => [[], ['_controller' => 'sonata.admin.controller.crud:batchAction', '_sonata_admin' => 'admin.student', '_sonata_name' => 'admin_app_student_batch'], [], [['text', '/admin/app/student/batch']], [], []],
    'admin_app_student_edit' => [['id'], ['_controller' => 'sonata.admin.controller.crud:editAction', '_sonata_admin' => 'admin.student', '_sonata_name' => 'admin_app_student_edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/admin/app/student']], [], []],
    'admin_app_student_delete' => [['id'], ['_controller' => 'sonata.admin.controller.crud:deleteAction', '_sonata_admin' => 'admin.student', '_sonata_name' => 'admin_app_student_delete'], [], [['text', '/delete'], ['variable', '/', '[^/]++', 'id', true], ['text', '/admin/app/student']], [], []],
    'admin_app_student_show' => [['id'], ['_controller' => 'sonata.admin.controller.crud:showAction', '_sonata_admin' => 'admin.student', '_sonata_name' => 'admin_app_student_show'], [], [['text', '/show'], ['variable', '/', '[^/]++', 'id', true], ['text', '/admin/app/student']], [], []],
    'admin_app_student_export' => [[], ['_controller' => 'sonata.admin.controller.crud:exportAction', '_sonata_admin' => 'admin.student', '_sonata_name' => 'admin_app_student_export'], [], [['text', '/admin/app/student/export']], [], []],
    'admin_app_clase_list' => [[], ['_controller' => 'sonata.admin.controller.crud:listAction', '_sonata_admin' => 'admin.clase', '_sonata_name' => 'admin_app_clase_list'], [], [['text', '/admin/app/clase/list']], [], []],
    'admin_app_clase_create' => [[], ['_controller' => 'sonata.admin.controller.crud:createAction', '_sonata_admin' => 'admin.clase', '_sonata_name' => 'admin_app_clase_create'], [], [['text', '/admin/app/clase/create']], [], []],
    'admin_app_clase_batch' => [[], ['_controller' => 'sonata.admin.controller.crud:batchAction', '_sonata_admin' => 'admin.clase', '_sonata_name' => 'admin_app_clase_batch'], [], [['text', '/admin/app/clase/batch']], [], []],
    'admin_app_clase_edit' => [['id'], ['_controller' => 'sonata.admin.controller.crud:editAction', '_sonata_admin' => 'admin.clase', '_sonata_name' => 'admin_app_clase_edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/admin/app/clase']], [], []],
    'admin_app_clase_delete' => [['id'], ['_controller' => 'sonata.admin.controller.crud:deleteAction', '_sonata_admin' => 'admin.clase', '_sonata_name' => 'admin_app_clase_delete'], [], [['text', '/delete'], ['variable', '/', '[^/]++', 'id', true], ['text', '/admin/app/clase']], [], []],
    'admin_app_clase_show' => [['id'], ['_controller' => 'sonata.admin.controller.crud:showAction', '_sonata_admin' => 'admin.clase', '_sonata_name' => 'admin_app_clase_show'], [], [['text', '/show'], ['variable', '/', '[^/]++', 'id', true], ['text', '/admin/app/clase']], [], []],
    'admin_app_clase_export' => [[], ['_controller' => 'sonata.admin.controller.crud:exportAction', '_sonata_admin' => 'admin.clase', '_sonata_name' => 'admin_app_clase_export'], [], [['text', '/admin/app/clase/export']], [], []],
    'admin_app_course_list' => [[], ['_controller' => 'sonata.admin.controller.crud:listAction', '_sonata_admin' => 'admin.course', '_sonata_name' => 'admin_app_course_list'], [], [['text', '/admin/app/course/list']], [], []],
    'admin_app_course_create' => [[], ['_controller' => 'sonata.admin.controller.crud:createAction', '_sonata_admin' => 'admin.course', '_sonata_name' => 'admin_app_course_create'], [], [['text', '/admin/app/course/create']], [], []],
    'admin_app_course_batch' => [[], ['_controller' => 'sonata.admin.controller.crud:batchAction', '_sonata_admin' => 'admin.course', '_sonata_name' => 'admin_app_course_batch'], [], [['text', '/admin/app/course/batch']], [], []],
    'admin_app_course_edit' => [['id'], ['_controller' => 'sonata.admin.controller.crud:editAction', '_sonata_admin' => 'admin.course', '_sonata_name' => 'admin_app_course_edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/admin/app/course']], [], []],
    'admin_app_course_delete' => [['id'], ['_controller' => 'sonata.admin.controller.crud:deleteAction', '_sonata_admin' => 'admin.course', '_sonata_name' => 'admin_app_course_delete'], [], [['text', '/delete'], ['variable', '/', '[^/]++', 'id', true], ['text', '/admin/app/course']], [], []],
    'admin_app_course_show' => [['id'], ['_controller' => 'sonata.admin.controller.crud:showAction', '_sonata_admin' => 'admin.course', '_sonata_name' => 'admin_app_course_show'], [], [['text', '/show'], ['variable', '/', '[^/]++', 'id', true], ['text', '/admin/app/course']], [], []],
    'admin_app_course_export' => [[], ['_controller' => 'sonata.admin.controller.crud:exportAction', '_sonata_admin' => 'admin.course', '_sonata_name' => 'admin_app_course_export'], [], [['text', '/admin/app/course/export']], [], []],
    'admin_app_baseentity_list' => [[], ['_controller' => 'sonata.admin.controller.crud:listAction', '_sonata_admin' => 'admin.base_entity', '_sonata_name' => 'admin_app_baseentity_list'], [], [['text', '/admin/app/baseentity/list']], [], []],
    'admin_app_baseentity_create' => [[], ['_controller' => 'sonata.admin.controller.crud:createAction', '_sonata_admin' => 'admin.base_entity', '_sonata_name' => 'admin_app_baseentity_create'], [], [['text', '/admin/app/baseentity/create']], [], []],
    'admin_app_baseentity_batch' => [[], ['_controller' => 'sonata.admin.controller.crud:batchAction', '_sonata_admin' => 'admin.base_entity', '_sonata_name' => 'admin_app_baseentity_batch'], [], [['text', '/admin/app/baseentity/batch']], [], []],
    'admin_app_baseentity_edit' => [['id'], ['_controller' => 'sonata.admin.controller.crud:editAction', '_sonata_admin' => 'admin.base_entity', '_sonata_name' => 'admin_app_baseentity_edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/admin/app/baseentity']], [], []],
    'admin_app_baseentity_delete' => [['id'], ['_controller' => 'sonata.admin.controller.crud:deleteAction', '_sonata_admin' => 'admin.base_entity', '_sonata_name' => 'admin_app_baseentity_delete'], [], [['text', '/delete'], ['variable', '/', '[^/]++', 'id', true], ['text', '/admin/app/baseentity']], [], []],
    'admin_app_baseentity_show' => [['id'], ['_controller' => 'sonata.admin.controller.crud:showAction', '_sonata_admin' => 'admin.base_entity', '_sonata_name' => 'admin_app_baseentity_show'], [], [['text', '/show'], ['variable', '/', '[^/]++', 'id', true], ['text', '/admin/app/baseentity']], [], []],
    'admin_app_baseentity_export' => [[], ['_controller' => 'sonata.admin.controller.crud:exportAction', '_sonata_admin' => 'admin.base_entity', '_sonata_name' => 'admin_app_baseentity_export'], [], [['text', '/admin/app/baseentity/export']], [], []],
];
