<?php
if(!env('DISABLE_WEBSITE'))
{
    Route::get('/', 'HomeController@index')->name('homepage');
    Route::get('pricing', 'HomeController@pricing')->name('pricing');
    // Route::get('about', 'HomeController@about')->name('about');
    Route::get('contact', 'HomeController@contact')->name('contact');
    Route::post('contact', 'HomeController@handle_email_query')->name('handle_email_query');
    Route::get('instant-quote', 'OrderController@quote')->name('instant_quote');
    Route::get('about', 'HomeController@content')->name('about');
    Route::get('how-it-works', 'HomeController@content')->name('how_it_works');
    Route::get('privacy-policy', 'HomeController@content')->name('privacy_policy');
    Route::get('revision-policy', 'HomeController@content')->name('revision_policy');
    Route::get('disclaimer', 'HomeController@content')->name('disclaimer');
    Route::get('terms-and-conditions', 'HomeController@content')->name('terms_and_conditions');
    Route::get('money-back-guarantee', 'HomeController@content')->name('money_back_guarantee');

    Route::get('sitemap.xml', 'SitemapController@index')->name('sitemap.xml');
    Route::get('page-sitemap.xml', 'SitemapController@page')->name('page-sitemap.xml');
    Route::get('casestudy','CaseStudyController@casestudy')->name('casestudy');

    Route::get('dogcare','EbooksController@dogcare')->name('dogcare');
    Route::get('onlinereviews','EbooksController@onlinereviews')->name('onlinereviews');

    Route::get('mostexpensive','LongFormController@mostexpensive')->name('mostexpensive');
    Route::get('bestheadphone','LongFormController@bestheadphone')->name('bestheadphone');
    Route::get('durableearbuds','LongFormController@durableearbuds')->name('durableearbuds');
    Route::get('willowvsfreemie','LongFormController@willowvsfreemie')->name('willowvsfreemie');

    Route::get('b2b','SeoController@b2b')->name('b2b');
    Route::get('retrofit','SeoController@retrofit')->name('retrofit');
    Route::get('sleepwithheadphones','SeoController@sleepwithheadphones')->name('sleepwithheadphones');
    Route::get('salesenablement','SeoController@salesenablement')->name('salesenablement');
    Route::get('besttool','SeoController@besttool')->name('besttool');

    //websitecontent

    Route::get('autoseo','WebsiteContentController@autoseo')->name('autoseo');
    Route::get('creativeportfolio','WebsiteContentController@creativeportfolio')->name('creativeportfolio');
    Route::get('creativeproduct','WebsiteContentController@creativeproduct')->name('creativeproduct');
    Route::get('creativeservice','WebsiteContentController@creativeservice')->name('creativeservice');
    Route::get('digiirobe','WebsiteContentController@digiirobe')->name('digiirobe');
    Route::get('pricingpage','WebsiteContentController@pricingpage')->name('pricingpage');
    Route::get('vaperminute','WebsiteContentController@vaperminute')->name('vaperminute');
}
else
{
    Route::get('/', 'Auth\LoginController@showLoginForm')->name('homepage');
}

