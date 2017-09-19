<?php

// $this->get("home", "App\\Controllers\\IndexController@index")->as("home");

// Landing page routes
$this->get("landing", "App\\Controllers\\LandingPageController@landing")->as("landing.page");

// 404 page not found
$this->get("404", "App\\Controllers\\LandingPageController@notFound")->as("404.page");

// Login Auth
$this->get("login", "App\\Controllers\\LoginController@getLogin")->as("get.login.page");
$this->post("login", "App\\Controllers\\LoginController@postLogin")->as("post.login.page");

$this->get("recover-password", "App\\Controllers\\LoginController@getRecover")->as("get.recover.page");
$this->post("recover-password", "App\\Controllers\\LoginController@postRecover")->as("post.recover.page");

$this->get("change-password/:code/:username", "App\\Controllers\\LoginController@getChangePassword")
     ->bind(["code" => "RecoverPassword"])
     ->as("get.change.password.page");
$this->post("change-password", "App\\Controllers\\LoginController@postChangePassword")->as("post.change.password.page");

$this->get("logout", "App\\Controllers\\LoginController@logout")->as("logout");

// Admin zone
$this->group([
    "name" => "admin-group",
    "prefix" => "admin",
    "rules" => ["LoginRule" => "App\\Rules\\AdminRule"]
]);

$this->get("main", "App\\Controllers\\AdminController@index")->as("admin.home.page")->belongsTo("admin-group");

$this->get("products", "App\\Controllers\\ProductController@getProducts")->as("admin.products.page")->belongsTo("admin-group");

$this->get("clients", "App\\Controllers\\AdminController@getPages")->as("admin.clients.page")->belongsTo("admin-group");

$this->get("transactions", "App\\Controllers\\AdminController@getTransactions")->as("admin.transactions.page")->belongsTo("admin-group");

// Membership zone
$this->group([
    "name" => "member-group",
    "prefix" => "member",
    "rules" => ["LoginRule" => "App\\Rules\\AdminRule"]
]);

$this->get("home", "App\\Controllers\\MembershipController@index")->as("member.home.page")->belongsTo("member-group");
