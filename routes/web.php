<?php

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

// Program's CRUD operations
$this->get("main", "App\\Controllers\\AdminController@index")
     ->as("admin.home.page")
     ->belongsTo("admin-group");

$this->get("programs", "App\\Controllers\\ProductController@getProducts")
     ->as("admin.products.page")
     ->belongsTo("admin-group");

$this->get("program/:program", "App\\Controllers\\ProductController@product")
     ->bind(["program" => "Program"])
     ->as("admin.product.page")
     ->belongsTo("admin-group");

$this->post("program/update", "App\\Controllers\\ProductController@update")
     ->belongsTo("admin-group");

$this->get("program/delete/:program", "App\\Controllers\\ProductController@delete")
     ->bind(["program" => "Program"])
     ->as("delete.product")
     ->belongsTo("admin-group");

// Client CRUD operations
$this->get("clients", "App\\Controllers\\ClientController@clients")
     ->as("admin.clients.page")
     ->belongsTo("admin-group");

$this->get("client/:client/:search", "App\\Controllers\\ClientController@client")
     ->as("admin.client.page")
     ->belongsTo("admin-group");

$this->get("client/delete/:client", "App\\Controllers\\ClientController@delete")
     ->bind(["client" => "User"])
     ->as("delete.client.page")
     ->belongsTo("admin-group");

$this->post("client/update", "App\\Controllers\\ClientController@update")
     ->as("update.client.page")
     ->belongsTo("admin-group");

$this->get("client/create", "App\\Controllers\\ClientController@getCreate")
     ->as("create.client.page")
     ->belongsTo("admin-group");

$this->post("client/create", "App\\Controllers\\ClientController@postCreate")
     ->belongsTo("admin-group");

$this->get("transactions", "App\\Controllers\\AdminController@getTransactions")->as("admin.transactions.page")->belongsTo("admin-group");

// Membership zone
$this->group([
    "name" => "member-group",
    "prefix" => "member",
    "rules" => ["LoginRule" => "App\\Rules\\AdminRule"]
]);

$this->get("home", "App\\Controllers\\MembershipController@index")->as("member.home.page")->belongsTo("member-group");
