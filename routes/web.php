<?php

// Main home route "/"
$this->get("", "App\\Controllers\\LoginController@getLogin")->as("get.login.page");

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
    "rules" => ["LoginRule" => "App\\Rules\\LoginRule", "AdminRule" => "App\\Rules\\AdminRule"]
]);

// Program's CRUD operations
$this->get("main", "App\\Controllers\\AdminController@index")
     ->as("admin.home.page")
     ->belongsTo("admin-group");

$this->get("programs", "App\\Controllers\\ProductController@products")
     ->as("admin.products.page")
     ->belongsTo("admin-group");

$this->get("program/create", "App\\Controllers\\ProductController@product")
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

$this->get("client/:client", "App\\Controllers\\ClientController@client")
     ->bind(["client" => "User"])
     ->as("admin.client.page")
     ->belongsTo("admin-group");

$this->get("client/delete/:client", "App\\Controllers\\ClientController@delete")
     ->bind(["client" => "User"])
     ->as("delete.client.page")
     ->belongsTo("admin-group");

$this->post("client/update", "App\\Controllers\\ClientController@update")
     ->as("update.client.page")
     ->belongsTo("admin-group");

$this->get("client/create/new", "App\\Controllers\\ClientController@getCreate")
     ->as("create.client.page")
     ->belongsTo("admin-group");

$this->post("client/create", "App\\Controllers\\ClientController@postCreate")
     ->belongsTo("admin-group");

// Show and sort transactions
$this->get("transactions", "App\\Controllers\\TransactionController@transactions")
     ->as("admin.transactions.page")
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

// Analytics zone for analizing traffic sources
$this->get("analytics", "App\\Controllers\\GoogleApiController@display")
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

$this->get("member/account", "App\\Controllers\\MembershipController@getAccount")
     ->rules(["LoginRule" => "App\\Rules\\LoginRule"]);

$this->post("member/account", "App\\Controllers\\MembershipController@postAccount")
     ->rules(["LoginRule" => "App\\Rules\\LoginRule"]);

$this->get(":program/:slug", "App\\Controllers\\MembershipController@page")
     ->bind(["program" => "Program"])
     ->as("membership.page")
     ->belongsTo("member-group");

$this->get("ebook/:program/:extension/:file", "App\\Controllers\\MembershipController@ebook")
     ->rules(["LoginRule" => "App\\Rules\\LoginRule"]);

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

$this->get(":tag", "App\\Controllers\\LandingPageController@landing")
     ->bind(["tag" => "Program"])
     ->as("landing.page")
     ->belongsTo("landing-group");

// Send tracking to this link
// $this->post("tracking/receive", "App\\Controllers\\LandingPageController@receive");


// Admin API - just get requests for data json
$this->group([
    "name" => "api-group",
    "prefix" => "api"
]);

$this->get("get/transactions", "App\\Controllers\\ApiController@getTransactions")
     ->belongsTo("api-group");

$this->post("autoresponder/catch", "App\\Controllers\\ApiController@autoresponder")
     ->belongsTo("api-group");

$this->post("sale-pages", "App\\Controllers\\GoogleApiController@customSegment")
     ->belongsTo("api-group");


// Cron Job - all the paths for cron job
$this->group([
    "name" => "cron-group",
    "prefix" => "cron"
]);

$this->get("email/daily", "App\\Controllers\\CronController@sendDailyEmailToAdmin")
     ->belongsTo("cron-group");

$this->get("delete/recover-password", "App\\Controllers\\CronController@deleteRecoverPasswordTokens")
     ->belongsTo("cron-group");

// Weebhooks and othe misc requests
$this->group([
    "name" => "webhook-group",
    "prefix" => "webhook"
]);

$this->post("subscription/braintree", "App\\Controllers\\WebhookController@webhookBraintree")
     ->belongsTo("webhook-group");

$this->post("update/active-campaign", "App\\Controllers\\WebhookController@webhookActiveCampaign")
     ->belongsTo("webhook-group");

// Burn after using (temp routes)
$this->get("temp/update/accounts", "App\\Controllers\\IndexController@updateAccounts");

$this->get("temp/google-api", "App\\Controllers\\GoogleApiController@display");
