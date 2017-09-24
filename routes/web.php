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

// Show and sort transactions
$this->get("transactions", "App\\Controllers\\TransactionController@transactions")
     ->as("admin.transactions.page")
     ->belongsTo("admin-group");

$this->get("transaction/search/:method/:id", "App\\Controllers\\TransactionController@search")
     ->as("search.transactions.page")
     ->belongsTo("admin-group");

// Show landing pages
$this->get("landings", "App\\Controllers\\LandingPageController@landings")
     ->as("admin.landings.page")
     ->belongsTo("admin-group");

$this->post("landing/update", "App\\Controllers\\LandingPageController@postUpdate")
     ->as("admin.update.landing.page")
     ->belongsTo("admin-group");

$this->get("landing/delete/:landing", "App\\Controllers\\LandingPageController@delete")
     ->bind(["landing" => "Landing"])
     ->as("admin.delete.landing.page")
     ->belongsTo("admin-group");

$this->get("landing/create", "App\\Controllers\\LandingPageController@getCreate")
     ->as("admin.create.landing.page")
     ->belongsTo("admin-group");

$this->post("landing/create", "App\\Controllers\\LandingPageController@postCreate")
     ->as("admin.create.landing.page")
     ->belongsTo("admin-group");

$this->get("landing/:code", "App\\Controllers\\LandingPageController@getUpdate")
     ->bind(["code" => "Landing"])
     ->as("admin.edit.landings.page")
     ->belongsTo("admin-group");

$this->get("landing/search/:id/:mode", "App\\Controllers\\LandingPageController@search")
     ->as("admin.search.landing.page")
     ->belongsTo("admin-group");

$this->get("landing/reset/:landing", "App\\Controllers\\LandingPageController@reset")
     ->bind(["landing" => "Landing"])
     ->as("admin.reset.landings.page")
     ->belongsTo("admin-group");

// Membership zone
$this->group([
    "name" => "member-group",
    "prefix" => "member",
    "rules" => ["LoginRule" => "App\\Rules\\LoginRule", "ProgramRule" => "App\\Rules\\ProgramRule"]
]);

$this->get("member/home", "App\\Controllers\\MembershipController@index")
     ->as("member.home.page")
     ->rules(["LoginRule" => "App\\Rules\\LoginRule"]);

$this->get(":program/:page", "App\\Controllers\\MembershipController@page")
     ->bind(["program" => "Program", "page" => "Page"])
     ->as("membership.page")
     ->belongsTo("member-group");

// Checkout zone
$this->group([
    "name" => "checkout-group",
    "prefix" => "checkout"
]);

$this->get(":program", "App\\Controllers\\CheckoutController@index")
     ->bind(["program" => "Program"])
     ->as("checkout.page")
     ->belongsTo("checkout-group");

$this->post("payment", "App\\Controllers\\CheckoutController@pay")
     ->belongsTo("checkout-group");

// Landing page Controllers
$this->group([
    "name" => "landing-group",
    "prefix" => "landing"
]);

$this->get(":program/:code", "App\\Controllers\\LandingPageController@landing")
     ->bind([
         "program" => "Program",
         "code"    => "Landing"
     ])
     ->as("landing.page")
     ->belongsTo("landing-group");

// Send tracking to this link
$this->post("tracking/receive", "App\\Controllers\\LandingPageController@receive");

// Send tracking to this link
$this->post("autoresponder/catch", "App\\Controllers\\LandingPageController@autoresponder");
