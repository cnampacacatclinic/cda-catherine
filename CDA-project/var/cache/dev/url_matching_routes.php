<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/about' => [[['_route' => 'app_about', '_controller' => 'App\\Controller\\AboutController::index'], null, null, null, false, false, null]],
        '/admin' => [[['_route' => 'app_admin', '_controller' => 'App\\Controller\\AdminController::index'], null, null, null, false, false, null]],
        '/aider' => [[['_route' => 'app_aider', '_controller' => 'App\\Controller\\AiderController::index'], null, null, null, false, false, null]],
        '/article' => [[['_route' => 'app_article', '_controller' => 'App\\Controller\\ArticleController::index'], null, null, null, false, false, null]],
        '/confidentialite' => [[['_route' => 'app_confidentialite', '_controller' => 'App\\Controller\\ConfidentialiteController::index'], null, null, null, false, false, null]],
        '/contact' => [[['_route' => 'app_contact', '_controller' => 'App\\Controller\\ContactController::index'], null, null, null, false, false, null]],
        '/cookies' => [[['_route' => 'app_cookies', '_controller' => 'App\\Controller\\CookiesController::index'], null, null, null, false, false, null]],
        '/event' => [[['_route' => 'app_event_page', '_controller' => 'App\\Controller\\EventPageController::index'], null, null, null, false, false, null]],
        '/events' => [[['_route' => 'app_events', '_controller' => 'App\\Controller\\EventsController::index'], null, null, null, false, false, null]],
        '/faq' => [[['_route' => 'app_faq', '_controller' => 'App\\Controller\\FAQController::index'], null, null, null, false, false, null]],
        '/gestion-centre' => [[['_route' => 'app_gestion_centre', '_controller' => 'App\\Controller\\GestionCentreController::index'], null, null, null, false, false, null]],
        '/gestioncomment' => [[['_route' => 'app_gestion_comment', '_controller' => 'App\\Controller\\GestionCommentController::index'], null, null, null, false, false, null]],
        '/gestionevent' => [[['_route' => 'app_gestion_event', '_controller' => 'App\\Controller\\GestionEventController::index'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'app_home', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/insert-article' => [[['_route' => 'app_insert_article', '_controller' => 'App\\Controller\\InsertArticleController::createArticle'], null, null, null, false, false, null]],
        '/insertcontact' => [[['_route' => 'app_insert_contact', '_controller' => 'App\\Controller\\InsertContactController::createContact'], null, null, null, false, false, null]],
        '/insertevent' => [[['_route' => 'app_insert_event', '_controller' => 'App\\Controller\\InsertEventController::createEvent'], null, null, null, false, false, null]],
        '/insertphone' => [[['_route' => 'app_insert_phone', '_controller' => 'App\\Controller\\InsertPhoneController::createPhone'], null, null, null, false, false, null]],
        '/management-other-people-content' => [[['_route' => 'app_management_other_people_content', '_controller' => 'App\\Controller\\ManagementOtherPeopleContentController::index'], null, null, null, false, false, null]],
        '/management-page' => [[['_route' => 'app_management_page', '_controller' => 'App\\Controller\\ManagementPageController::index'], null, null, null, false, false, null]],
        '/management-user' => [[['_route' => 'app_management_user', '_controller' => 'App\\Controller\\ManagementUserController::managmentUser'], null, null, null, false, false, null]],
        '/mentionslegales' => [[['_route' => 'app_mentionslegales', '_controller' => 'App\\Controller\\MentionslegalesController::index'], null, null, null, false, false, null]],
        '/news' => [[['_route' => 'app_news', '_controller' => 'App\\Controller\\NewsController::index'], null, null, null, false, false, null]],
        '/page404' => [[['_route' => 'app_page404', '_controller' => 'App\\Controller\\Page404Controller::index'], null, null, null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/verify-email' => [[['_route' => 'app_verify_email', '_controller' => 'App\\Controller\\RegistrationController::verifyUserEmail'], null, null, null, false, false, null]],
        '/registration-event' => [[['_route' => 'app_registration_event', '_controller' => 'App\\Controller\\RegistrationEventController::index'], null, null, null, false, false, null]],
        '/reset-password' => [[['_route' => 'app_forgot_password_request', '_controller' => 'App\\Controller\\ResetPasswordController::request'], null, null, null, false, false, null]],
        '/reset-password/check-email' => [[['_route' => 'app_check_email', '_controller' => 'App\\Controller\\ResetPasswordController::checkEmail'], null, null, null, false, false, null]],
        '/search' => [[['_route' => 'app_search', '_controller' => 'App\\Controller\\SearchController::index'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/superadmin' => [[['_route' => 'app_superadmin', '_controller' => 'App\\Controller\\SuperadminController::index'], null, null, null, false, false, null]],
        '/update-article' => [[['_route' => 'app_update_article', '_controller' => 'App\\Controller\\UpdateArticleController::yourAction'], null, null, null, false, false, null]],
        '/update-center' => [[['_route' => 'app_update_center', '_controller' => 'App\\Controller\\UpdateCenterController::index'], null, null, null, false, false, null]],
        '/update-event' => [[['_route' => 'app_update_event', '_controller' => 'App\\Controller\\UpdateEventController::index'], null, null, null, false, false, null]],
        '/update-phone' => [[['_route' => 'app_update_phone', '_controller' => 'App\\Controller\\UpdatePhoneController::index'], null, null, null, false, false, null]],
        '/user' => [[['_route' => 'app_user', '_controller' => 'App\\Controller\\UserController::index'], null, null, null, false, false, null]],
        '/visit' => [[['_route' => 'app_visit', '_controller' => 'App\\Controller\\VisitController::index'], null, null, null, false, false, null]],
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/reset\\-password/reset(?:/([^/]++))?(*:43)'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:81)'
                    .'|wdt/([^/]++)(*:100)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:146)'
                            .'|router(*:160)'
                            .'|exception(?'
                                .'|(*:180)'
                                .'|\\.css(*:193)'
                            .')'
                        .')'
                        .'|(*:203)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        43 => [[['_route' => 'app_reset_password', 'token' => null, '_controller' => 'App\\Controller\\ResetPasswordController::reset'], ['token'], null, null, false, true, null]],
        81 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        100 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        146 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        160 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        180 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        193 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        203 => [
            [['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
