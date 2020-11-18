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
    'blog-index' => [['_locale'], ['_controller' => 'App\\Controller\\BlogController::index', '_locale' => 'en'], ['_locale' => 'en|fr|nl'], [['text', '/blog/'], ['variable', '/', 'en|fr|nl', '_locale', true]], [], []],
    'blog-add' => [['_locale'], ['_controller' => 'App\\Controller\\BlogController::add', '_locale' => 'en'], ['_locale' => 'en|fr|nl'], [['text', '/blog/add'], ['variable', '/', 'en|fr|nl', '_locale', true]], [], []],
    'blog-show' => [['_locale', 'id'], ['_controller' => 'App\\Controller\\BlogController::show', '_locale' => 'en'], ['_locale' => 'en|fr|nl'], [['variable', '/', '[^/]++', 'id', true], ['text', '/blog/show'], ['variable', '/', 'en|fr|nl', '_locale', true]], [], []],
    'following_follow' => [['_locale', 'id'], ['_controller' => 'App\\Controller\\FollowingController::follow', '_locale' => 'en'], ['_locale' => 'en|fr|nl'], [['variable', '/', '[^/]++', 'id', true], ['text', '/following/follow'], ['variable', '/', 'en|fr|nl', '_locale', true]], [], []],
    'following_unfollow' => [['_locale', 'id'], ['_controller' => 'App\\Controller\\FollowingController::unfolow', '_locale' => 'en'], ['_locale' => 'en|fr|nl'], [['variable', '/', '[^/]++', 'id', true], ['text', '/following/unfollow'], ['variable', '/', 'en|fr|nl', '_locale', true]], [], []],
    'likes_like' => [['_locale', 'id'], ['_controller' => 'App\\Controller\\LikesController::like', '_locale' => 'en'], ['_locale' => 'en|fr|nl'], [['variable', '/', '[^/]++', 'id', true], ['text', '/likes/like'], ['variable', '/', 'en|fr|nl', '_locale', true]], [], []],
    'likes_unlike' => [['_locale', 'id'], ['_controller' => 'App\\Controller\\LikesController::unlike', '_locale' => 'en'], ['_locale' => 'en|fr|nl'], [['variable', '/', '[^/]++', 'id', true], ['text', '/likes/unlike'], ['variable', '/', 'en|fr|nl', '_locale', true]], [], []],
    'micro_post_index' => [['_locale'], ['_controller' => 'App\\Controller\\MicroPostController::index', '_locale' => 'en'], ['_locale' => 'en|fr|nl'], [['text', '/'], ['variable', '/', 'en|fr|nl', '_locale', true]], [], []],
    'micro_post_add' => [['_locale'], ['_controller' => 'App\\Controller\\MicroPostController::add', '_locale' => 'en'], ['_locale' => 'en|fr|nl'], [['text', '/add'], ['variable', '/', 'en|fr|nl', '_locale', true]], [], []],
    'micro_post_edit' => [['_locale', 'id'], ['_controller' => 'App\\Controller\\MicroPostController::edit', '_locale' => 'en'], ['_locale' => 'en|fr|nl'], [['variable', '/', '[^/]++', 'id', true], ['text', '/edit'], ['variable', '/', 'en|fr|nl', '_locale', true]], [], []],
    'micro_post_delete' => [['_locale', 'id'], ['_controller' => 'App\\Controller\\MicroPostController::delete', '_locale' => 'en'], ['_locale' => 'en|fr|nl'], [['variable', '/', '[^/]++', 'id', true], ['text', '/delete'], ['variable', '/', 'en|fr|nl', '_locale', true]], [], []],
    'micro_post_user' => [['_locale', 'username'], ['_controller' => 'App\\Controller\\MicroPostController::userPosts', '_locale' => 'en'], ['_locale' => 'en|fr|nl'], [['variable', '/', '[^/]++', 'username', true], ['text', '/user'], ['variable', '/', 'en|fr|nl', '_locale', true]], [], []],
    'micro_post_post' => [['_locale', 'id'], ['_controller' => 'App\\Controller\\MicroPostController::post', '_locale' => 'en'], ['_locale' => 'en|fr|nl'], [['variable', '/', '[^/]++', 'id', true], ['text', '/post'], ['variable', '/', 'en|fr|nl', '_locale', true]], [], []],
    'notification_unread' => [['_locale'], ['_controller' => 'App\\Controller\\NotificationController::unreadCount', '_locale' => 'en'], ['_locale' => 'en|fr|nl'], [['text', '/notification/unread-count'], ['variable', '/', 'en|fr|nl', '_locale', true]], [], []],
    'notification_all' => [['_locale'], ['_controller' => 'App\\Controller\\NotificationController::notifications', '_locale' => 'en'], ['_locale' => 'en|fr|nl'], [['text', '/notification/all'], ['variable', '/', 'en|fr|nl', '_locale', true]], [], []],
    'notification_acknowledge' => [['_locale', 'id'], ['_controller' => 'App\\Controller\\NotificationController::acknowledge', '_locale' => 'en'], ['_locale' => 'en|fr|nl'], [['variable', '/', '[^/]++', 'id', true], ['text', '/notification/acnowledge'], ['variable', '/', 'en|fr|nl', '_locale', true]], [], []],
    'notification_acknowledge_all' => [['_locale'], ['_controller' => 'App\\Controller\\NotificationController::acknoledgeAll', '_locale' => 'en'], ['_locale' => 'en|fr|nl'], [['text', '/notification/acnowledge-all'], ['variable', '/', 'en|fr|nl', '_locale', true]], [], []],
    'user_register' => [['_locale'], ['_controller' => 'App\\Controller\\RegisterController::register', '_locale' => 'en'], ['_locale' => 'en|fr|nl'], [['text', '/register'], ['variable', '/', 'en|fr|nl', '_locale', true]], [], []],
    'security_login' => [['_locale'], ['_controller' => 'App\\Controller\\SecurityController::login', '_locale' => 'en'], ['_locale' => 'en|fr|nl'], [['text', '/login'], ['variable', '/', 'en|fr|nl', '_locale', true]], [], []],
    'security_logout' => [['_locale'], ['_controller' => 'App\\Controller\\SecurityController::logout', '_locale' => 'en'], ['_locale' => 'en|fr|nl'], [['text', '/logout'], ['variable', '/', 'en|fr|nl', '_locale', true]], [], []],
    'security_confirm' => [['_locale', 'token'], ['_controller' => 'App\\Controller\\SecurityController::confirm', '_locale' => 'en'], ['_locale' => 'en|fr|nl'], [['variable', '/', '[^/]++', 'token', true], ['text', '/confirm'], ['variable', '/', 'en|fr|nl', '_locale', true]], [], []],
    'index' => [[], ['_controller' => 'App\\Controller\\MicroPostController::index'], [], [['text', '/']], [], []],
];