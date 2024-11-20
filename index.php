<?php
require 'vendor/autoload.php';
require_once 'data.php';

use App\Twig\CustomTwigExtensions;
use Twig\Environment;
use Twig\Loader\FilesystemLoader;
use App\Twig\Translator;

$baseUrl = 'http://twig.test';

// Set up Twig
$loader = new FilesystemLoader('views');
$twig = new Environment($loader, [
    'debug' => true,  // Enable debug mode
    'auto_reload' => true,
]);
$twig->addExtension(new \Twig\Extension\DebugExtension());

$translator = new Translator();

$twig->addExtension(new CustomTwigExtensions($translator));

$context = [];

$url = $_SERVER['REQUEST_URI'];

if ($url == '/') {
    $context = homePage();
    echo $twig->render('home/index.twig', $context);
} 
elseif ($url == '/customer/account/notifications') {
    $context = notifications();
    echo $twig->render('customers/account/notification/index.twig', $context);
}
elseif ($url == '/customer/account/profile') {
    $context = profile();
    echo $twig->render('customers/account/profile/index.twig', $context);
}
elseif ($url == '/customer/account/profile/edit') {
    $context = profileEdit();
    echo $twig->render('customers/account/profile/edit.twig', $context);
}
elseif ($url == '/customer/account/addresses') {
    $context = addresses();
    echo $twig->render('customers/account/address/index.twig', $context);
}
elseif ($url == '/customer/account/addresses/create') {
    $context = addressesCreate();
    echo $twig->render('customers/account/address/create.twig', $context);
}
elseif ($url == '/checkout/cart') {
    $context = cart();
    echo $twig->render('checkout/cart/index.twig', $context);
}
elseif (str_contains($url, '/customer/account/addresses/edit')) {
    $context = addressesEdit();
    echo $twig->render('customers/account/address/edit.twig', $context);
}
elseif (str_contains($url, '/customer/account/reviews')) {
    $context = reviews();
    echo $twig->render('customers/account/reviews/index.twig', $context);
}
elseif (str_contains($url, '/customer/account/wishlist')) {
    $context = wishlist();
    echo $twig->render('customers/account/wishlist/wishlist.twig', $context);
}
elseif (str_contains($url, '/customer/account/wallet')) {
    $context = wallet();
    echo $twig->render('customers/account/wallet/index.twig', $context);
}
elseif (str_contains($url, '/customer/account/orders/view')) {
    $context = orderView();
    echo $twig->render('customers/account/orders/view.twig', $context);
}
elseif (str_contains($url, '/customer/account/orders')) {
    $context = orders();
    echo $twig->render('customers/account/orders/index.twig', $context);
}
elseif (str_contains($url, '/customer/account/downloadable-products')) {
    $context = downloadableProducts();
    echo $twig->render('customers/account/downloadable_products/index.twig', $context);
}
elseif ($url == '/brands') {
    $context = brands();
    echo $twig->render('brands/listing.twig', $context);
} 
elseif (str_contains($url, '/brands/')) {
    $context = brandView();
    echo $twig->render('brands/show.twig', $context);
} 
elseif (str_contains($url, '/products')) {
    $context = products();
    echo $twig->render('products/products.twig', $context);
}
elseif ($url == '/category') {
    $context = category();
    echo $twig->render('category/index.twig', $context);
}
elseif (str_contains($url, '/blogs/author/')) {
    $context = blogsAuthor();
    echo $twig->render('cms/author.twig', $context);
}
elseif (str_contains($url, '/blogs/category/')) {
    $context = blogsCategory();
    echo $twig->render('cms/category.twig', $context);
}
elseif (str_contains($url, '/blog/')) {
    $context = blog();
    echo $twig->render('cms/blog.twig', $context);
}
elseif (str_contains($url, '/blogs/')) {
    $context = blogs();
    echo $twig->render('cms/blogs.twig', $context);
}
elseif (str_contains($url, '/page/')) {
    $context = page();
    echo $twig->render('cms/page.twig', $context);
}
elseif ($url == '/customizable') {
    $context = customizable();
    echo $twig->render('products/view.twig', $context);
}
elseif ($url == '/2g663yz') {
    $context = configurable();
    echo $twig->render('products/view.twig', $context);
}
elseif ($url == '/n2-4-5-3') {
    $context = simple();
    echo $twig->render('products/view.twig', $context);
}
elseif ($url == '/k6p8ato') {
    $context = digital();
    echo $twig->render('products/view.twig', $context);
}
elseif ($url == '/ouu1ro7') {
    $context = downloadable();
    echo $twig->render('products/view.twig', $context);
}
else{
    $context = allProducts();
    echo $twig->render('products/category.twig', $context);
}
