<?php

$this->get("home", "App\\Controllers\\IndexController@index")->as("home");

// Landing page routes
$this->get("landing", "App\\Controllers\\LandingPageController@landing")->as("landing.page");

// 404 page not found
$this->get("404", "App\\Controllers\\LandingPageController@notFound")->as("404.page");

// Login Auth
$this->get("login", "App\\Controllers\\LoginController@getLogin")->as("get.login.page");
$this->post("login", "App\\Controllers\\LoginController@postLogin")->as("post.login.page");

// Admin zone
$this->group([
    "name" => "admin-group",
    "prefix" => "admin",
    "rules" => ["LoginRule" => "App\\Rules\\AdminRule"]
]);

$this->get("main", "App\\Controllers\\AdminController@index")->as("404.page")->belongsTo("admin-group");
