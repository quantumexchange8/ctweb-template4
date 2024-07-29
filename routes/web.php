<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home.home');
});

// --------------home---------------

Route::get('/home', function () {
    return view('home.home');
});

Route::get('/home_carParts', function () {
    return view('home.carParts.carParts');
});

Route::get('/home_classicEcommerce', function () {
    return view('home.classicEcommerce.classicEcommerce');
});

Route::get('/home_creativeOneLook', function () {
    return view('home.creativeOneLook.creativeOneLook');
});

Route::get('/home_electronic', function () {
    return view('home.electronic.electronic');
});

Route::get('/home_fashion', function () {
    return view('home.fashion.fashion');
});

Route::get('/home_fashionMinimal', function () {
    return view('home.fashionMinimal.fashionMinimal');
});

Route::get('/home_furniture', function () {
    return view('home.furniture.furniture');
});

Route::get('/home_gadget', function () {
    return view('home.gadget.gadget');
});

Route::get('/home_lookBook_Creative', function () {
    return view('home.lookBook_Creative.lookBook_Creative');
});

Route::get('/home_lookBook_Slide', function () {
    return view('home.lookBook_Slide.lookBook_Slide');
});

Route::get('/home_medical', function () {
    return view('home.medical.medical');
});

Route::get('/home_modern', function () {
    return view('home.modern.modern');
});

Route::get('/home_modernMinimal', function () {
    return view('home.modernMinimal.modernMinimal');
});

Route::get('/home_motorcycle', function () {
    return view('home.motorcycle.motorcycle');
});

Route::get('/home_parallax_Shop', function () {
    return view('home.parallax.parallax_Shop');
});

Route::get('/home_simpleShop', function () {
    return view('home.simple.simpleShop');
});

Route::get('/home_singleStory_Black', function () {
    return view('home.singleStory_Black.singleStory_Black');
});

Route::get('/home_singleStory_White', function () {
    return view('home.singleStory_White.singleStory_White');
});

Route::get('/home_sportsShop', function () {
    return view('home.sports.sportsShop');
});

Route::get('/home_supermarket', function () {
    return view('home.supermarket.supermarket');
});

Route::get('/home_watch', function () {
    return view('home.watch.watch');
});



// --------------shop (Car parts)---------------
Route::get('/carParts_shopPage', function () {
    return view('shop.carParts.shopPage');
});

Route::get('/carParts_shopGrid', function () {
    return view('shop.carParts.shopGrid');
});

Route::get('/carParts_shopList', function () {
    return view('shop.carParts.shopList');
});

Route::get('/carParts_shopDetails', function () {
    return view('shop.carParts.shopDetails');
});



// --------------shop (Classic Ecommerce)---------------
Route::get('/classicEcommerce_shopPage', function () {
    return view('shop.classic_Ecommerce.shopPage');
});

Route::get('/classicEcommerce_shopDetails', function () {
    return view('shop.classic_Ecommerce.shopDetails');
});



// --------------shop (electronic)---------------
Route::get('/electronic_shopPage', function () {
    return view('shop.electronic.shopPage');
});

Route::get('/electronic_shopDetails', function () {
    return view('shop.electronic.shopDetails');
});


// --------------shop (fashion)---------------
Route::get('/fashion_shopPage', function () {
    return view('shop.fashion.shopPage');
});

Route::get('/fashion_shopDetails', function () {
    return view('shop.fashion.shopDetails');
});


// -----------shop (fashion minimal)------------
Route::get('/fashion_Minimal_shopPage', function () {
    return view('shop.fashion_Minimal.shopPage');
});

Route::get('/fashion_Minimal_shopDetails', function () {
    return view('shop.fashion_Minimal.shopDetails');
});


// -----------shop (furniture)------------
Route::get('/furniture_shopPage', function () {
    return view('shop.furniture.shopPage');
});

Route::get('/furniture_shopDetails', function () {
    return view('shop.furniture.shopDetails');
});



// -----------shop (gadget)------------
Route::get('/gadget_shopPage', function () {
    return view('shop.gadget.shopPage');
});

Route::get('/gadget_shopDetails', function () {
    return view('shop.gadget.shopDetails');
});



// -----------shop (medical)------------
Route::get('/medical_shopPage', function () {
    return view('shop.medical.shopPage');
});

Route::get('/medical_shopDetails', function () {
    return view('shop.medical.shopDetails');
});



// -----------shop (modern minimal)------------
Route::get('/modern_Minimal_shopPage', function () {
    return view('shop.modern_Minimal.shopPage');
});

Route::get('/modern_Minimal_shopDetails', function () {
    return view('shop.modern_Minimal.shopDetails');
});


// -----------shop (modern)------------
Route::get('/modern_shopPage', function () {
    return view('shop.modern.shopPage');
});

Route::get('/modern_shopDetails', function () {
    return view('shop.modern.shopDetails');
});



// -----------shop (motorcycle)------------
Route::get('/motorcycle_shopGrid', function () {
    return view('shop.motorcycle.shopGrid');
});

Route::get('/motorcycle_shopList', function () {
    return view('shop.motorcycle.shopList');
});

Route::get('/motorcycle_shopDetails', function () {
    return view('shop.motorcycle.shopDetails');
});


// -----------shop (simpleShop)------------
Route::get('/simpleShop_shopPage', function () {
    return view('shop.simpleShop.shopPage');
});

Route::get('/simpleShop_shopDetails', function () {
    return view('shop.simpleShop.shopDetails');
});



// -----------shop (sports)------------
Route::get('/sports_shopPage', function () {
    return view('shop.sports.shopPage');
});

Route::get('/sports_shopDetails', function () {
    return view('shop.sports.shopDetails');
});



// -----------shop (lookBook)------------
Route::get('/lookBook_shopPage', function () {
    return view('shop.lookBook.shopPage');
});

Route::get('/lookBook_shopDetails', function () {
    return view('shop.lookBook.shopDetails');
});

// -----------shop (shop_OtherPages)------------
Route::get('/OtherPages_shopDetails', function () {
    return view('shop.shop_OtherPages.shopDetails');
});



// -----------pages (shop Inner Page)------------
Route::get('/shopInnerPages_shoppingCart', function () {
    return view('pages.shop_InnerPages.shoppingCart');
});

Route::get('/shopInnerPages_checkout_Step1', function () {
    return view('pages.shop_InnerPages.checkout_Step1');
});

Route::get('/shopInnerPages_checkout_Step2', function () {
    return view('pages.shop_InnerPages.checkout_Step2');
});

Route::get('/shopInnerPages_checkout_Step3', function () {
    return view('pages.shop_InnerPages.checkout_Step3');
});



// -----------pages (404 Pages)------------
Route::get('/404_Page', function () {
    return view('pages.404Page.404_Page');
});



// -----------pages (Blogs)------------
Route::get('/blogs_blogPage', function () {
    return view('pages.blogs.blogPage');
});


Route::get('/blogs_blogDetails', function () {
    return view('pages.blogs.blogDetails');
});


// -----------pages (compare)------------
Route::get('/compare_V1', function () {
    return view('pages.compare.compare_V1');
});

Route::get('/compare_V2', function () {
    return view('pages.compare.compare_V2');
});



// -----------pages (register)------------
Route::get('/register_Login', function () {
    return view('pages.register.Login');
});

Route::get('/register_signUp', function () {
    return view('pages.register.signUp');
});



// ----------- About Us ------------
Route::get('/aboutUs', function () {
    return view('aboutUs.aboutUs');
});



// ----------- Contact Us ------------
Route::get('/contactUs', function () {
    return view('contactUs.contactUs');
});
