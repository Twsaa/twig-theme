<?php

function auth() {
    return [
        "id" => 1, 
        "first_name" => "Demo", 
        "last_name" => "User", 
        "gender" => "Male", 
        "city" => "", 
        "country" => "SA", 
        "preferred_language" => null, 
        "date_of_birth" => null, 
        "email" => "demo@twsaa.com", 
        "points" => "0", 
        "status" => 1, 
        "customer_group_id" => null, 
        "thawani_id" => "cus_NUFcfYZyH9vwtRQA", 
        "subscribed_to_news_letter" => 0, 
        "created_at" => "2022-06-30T09:57:02.000000Z", 
        "updated_at" => "2024-11-10T08:20:01.000000Z", 
        "is_verified" => 1, 
        "token" => "3bf2b48b67a6caa7517f4d6657d2429d", 
        "notes" => null, 
        "phone" => "+966 57 291 8538", 
        "affiliate_id" => null 
    ]; 
}

function menu() {
    return [
        "items" => [
            "account" => [
                "children" => [
                    "notifications" => [
                        "key" => "account.notifications", 
                        "name" => "shop::app.layouts.notifications", 
                        "route" => "customer.notifications.index", 
                        "icon" => "icon-bell", 
                        "sort" => 1, 
                        "children" => [], 
                        "url" => "/customer/account/notifications" 
                    ], 
                    "profile" => [
                        "key" => "account.profile", 
                        "name" => "shop::app.layouts.profile", 
                        "route" => "customer.profile.index", 
                        "icon" => "icon-user-list", 
                        "sort" => 3, 
                        "children" => [], 
                        "url" => "/customer/account/profile" 
                    ], 
                    "address" => [
                        "key" => "account.address", 
                        "name" => "shop::app.layouts.address", 
                        "route" => "customer.address.index", 
                        "icon" => "icon-map-location", 
                        "sort" => 4, 
                        "children" => [], 
                        "url" => "/customer/account/addresses" 
                    ], 
                    "reviews" => [
                        "key" => "account.reviews", 
                        "name" => "shop::app.layouts.reviews", 
                        "icon" => "icon-chat-alert-alt", 
                        "route" => "customer.reviews.index", 
                        "sort" => 5, 
                        "children" => [], 
                        "url" => "/customer/account/reviews" 
                    ], 
                    "wishlist" => [
                        "key" => "account.wishlist", 
                        "name" => "shop::app.layouts.wishlist", 
                        "icon" => "icon-heart", 
                        "route" => "customer.wishlist.index", 
                        "sort" => 6, 
                        "children" => [], 
                        "url" => "/customer/account/wishlist" 
                    ], 
                    "orders" => [
                        "key" => "account.orders", 
                        "name" => "shop::app.layouts.orders", 
                        "icon" => "icon-packed-box", 
                        "route" => "customer.orders.index", 
                        "sort" => 8, 
                        "children" => [], 
                        "url" => "/customer/account/orders" 
                    ], 
                    "downloadables" => [
                        "key" => "account.downloadables", 
                        "name" => "shop::app.layouts.downloadable-products", 
                        "route" => "customer.downloadable_products.index", 
                        "icon" => "icon-cloud-download", 
                        "sort" => 9, 
                        "children" => [], 
                        "url" => "/customer/account/downloadable-products" 
                    ], 
                    "wallet" => [
                        "key" => "account.wallet", 
                        "name" => "shop::app.layouts.wallet", 
                        "route" => "customer.wallet.index", 
                        "icon" => "icon-special-money", 
                        "sort" => 10, 
                        "role" => "pro", 
                        "children" => [], 
                        "url" => "/customer/account/wallet" 
                    ] 
                ], 
                "key" => "account", 
                "name" => "shop::app.layouts.my-account", 
                "route" => "customer.profile.index", 
                "icon" => "icon-minus", 
                "sort" => 2, 
                "url" => "/customer/account/profile" 
            ] 
        ], 
        "roles" => [], 
        "current" => "/customer/account/notifications", 
        "currentKey" => "account.notifications" 
    ]; 
}

function homePage() {
    $context['authUser'] = auth();
    $context['homeContent'] = [
        [
              "slug" => "fixed_products", 
              "sort" => null, 
              "block_id" => 155712, 
              "settings" => [
                 "list_type" => "chosen_products", 
                 "category_id" => "2120", 
                 "sku_text" => "N2-4-5-3,sku-ABC,", 
                 "limit" => "28", 
                 "type" => "slider", 
                 "products_title" => "المنتجات", 
                 "link" => "/تخفيضات", 
                 "products" => [
                    [
                       "id" => 106891, 
                       "product_id" => 55668, 
                       "sku" => "2G663YZ", 
                       "name" => "configurable", 
                       "url_key" => "2g663yz", 
                       "html_price" => "<span class='price'>‏٣٦٧٫٣٥ ر.س.‏</span>", 
                       "product" => [
                          "base_image_url" => "https://cdn.twsaa.com/product/55668/a16626c7-40a0-42f9-954f-5e1b25159fc1.png" 
                       ] 
                    ], 
                    [
                        "id" => 106919, 
                        "product_id" => 55682, 
                        "parent_id" => null, 
                        "sku" => "customizable", 
                        "name" => "customizable", 
                        "url_key" => "customizable", 
                        "html_price" => "<span class='price'>‏٣٦٧٫٣٥ ر.س.‏</span>", 
                        "product" => [
                        "base_image_url" => "https://cdn.twsaa.com/product/55682/aa97d069-649f-41d3-bf95-a66addfc903c.jpg" 
                        ] 
                    ], 
                    [
                        "id" => 107663, 
                        "product_id" => 56116, 
                        "parent_id" => null, 
                        "sku" => "N2-4-5-3", 
                        "name" => "simple", 
                        "url_key" => "n2-4-5-3", 
                        "html_price" => "<span class='price'>‏٣٦٧٫٣٥ ر.س.‏</span>", 
                        "product" => [
                            "base_image_url" => "https://cdn.twsaa.com/product/56116/0592b342-84cb-44f6-8d29-1328e332c9fd.png" 
                        ] 
                    ], 
                    [
                        "id" => 107667, 
                        "product_id" => 56118, 
                        "parent_id" => null, 
                        "sku" => "OUU1RO7", 
                        "name" => "downloadable", 
                        "url_key" => "ouu1ro7", 
                        "html_price" => "<span class='price'>‏٣٦٧٫٣٥ ر.س.‏</span>", 
                        "product" => [
                        "base_image_url" => "https://cdn.twsaa.com/product/56118/medium-68fc0441-483a-4167-a993-22d76d82b494.jpg" 
                        ] 
                    ], 
                    [
                        "id" => 107859, 
                        "product_id" => 56219, 
                        "parent_id" => null, 
                        "sku" => "K6P8ATO", 
                        "name" => "digital", 
                        "url_key" => "k6p8ato", 
                        "html_price" => "<span class='price'>‏٣٦٧٫٣٥ ر.س.‏</span>", 
                        "product" => [
                            "base_image_url" => "https://cdn.twsaa.com/product/56219/large-b5a93051-3cc1-4d62-8b7f-2cd7897b9581.jpg" 
                        ] 
                    ] 
                 ] 
              ] 
           ], 
        [
            "slug" => "wide_banner", 
            "sort" => null, 
            "block_id" => 295765, 
            "settings" => [
                "image" => "https://cdn.twsaa.com/home/23/cd2eeaba-784a-4272-a3f7-3e78262846d0.png", 
            ] 
        ], 
        [
            "slug" => "fixed_products", 
            "sort" => null, 
            "block_id" => 634494, 
            "settings" => [
                "list_type" => "category", 
                "category_id" => "2122", 
                "limit" => "8", 
                "type" => "list", 
                "products_title" => "Makeup", 
                "link" => "/المكياج", 
                "products" => 
                [
                    [
                        "id" => 48111, 
                        "product_id" => 24300, 
                        "parent_id" => null, 
                        "sku" => "L2-2-4-4-M5AZN", 
                        "name" => "يولاند بيوتي - احمر خدود 24", 
                        "url_key" => "l2-2-4-4-m5azn", 

                        "saleable" => 1, 
                        "html_price" => "<span class='price'>‏٣٦٧٫٣٥ ر.س.‏</span>", 
                        "product" => [
                            "base_image_url" => "https://cdn.twsaa.com/home/23/cd2eeaba-784a-4272-a3f7-3e78262846d0.png" 
                        ] 
                    ], 
                    [
                        "id" => 48163, 
                        "product_id" => 24326, 
                        "parent_id" => null, 
                        "sku" => "K3-9-4-6", 
                        "name" => "تكنيك - باليت ظلال عيون بانوفي 7 الوان", 
                        "url_key" => "k3-9-4-6", 
                        "saleable" => 1, 
                        "html_price" => "<span class='price'>‏٣٦٧٫٣٥ ر.س.‏</span>", 
                        "product" => [
                            "base_image_url" => "https://cdn.twsaa.com/home/23/cd2eeaba-784a-4272-a3f7-3e78262846d0.png" 
                        ] 
                    ], 
                    [
                        "id" => 48149, 
                        "product_id" => 24319, 
                        "parent_id" => null, 
                        "sku" => "K3-9-5-4", 
                        "name" => "تكنيك - باليت ظلال عيون بوجي 15 لون  30 جم", 
                        "url_key" => "k3-9-5-4", 
                        "saleable" => 1, 
                        "html_price" => "<span class='price'>‏٣٦٧٫٣٥ ر.س.‏</span>", 
                        "product" => [
                            "base_image_url" => "https://cdn.twsaa.com/home/23/cd2eeaba-784a-4272-a3f7-3e78262846d0.png" 
                        ] 
                    ], 
                    [
                        "id" => 48123, 
                        "product_id" => 24306, 
                        "parent_id" => null, 
                        "sku" => "L2-2-3-2-M5AZN", 
                        "url_key" => "L2-2-3-2-M5AZN", 
                        "name" => "يولاند بيوتي - قلم كحل كريمي اسود 030 - YB-35", 
                        "saleable" => 1, 
                        "html_price" => "<span class='price'>‏٣٦٧٫٣٥ ر.س.‏</span>", 
                        "product" => [
                            "base_image_url" => "https://cdn.twsaa.com/home/23/cd2eeaba-784a-4272-a3f7-3e78262846d0.png" 
                        ] 
                    ], 
                    [
                        "id" => 48049, 
                        "product_id" => 24269, 
                        "parent_id" => null, 
                        "sku" => "A2 5-3-7", 
                        "name" => "رفليوشن - باليت ظلال العيون فيلفت روز", 
                        "url_key" => "a2-5-3-7", 
                        "saleable" => 1, 
                        "html_price" => "<span class='price'>‏٣٦٧٫٣٥ ر.س.‏</span>", 
                        "product" => [
                            "base_image_url" => "https://cdn.twsaa.com/home/23/cd2eeaba-784a-4272-a3f7-3e78262846d0.png" 
                        ] 
                    ], 
                    [
                        "id" => 48155, 
                        "product_id" => 24322, 
                        "parent_id" => null, 
                        "sku" => "K3-9-5-1", 
                        "name" => "تكنيك - باليت ظلال عيون بلوبيري بي 7 الوان", 
                        "url_key" => "k3-9-5-1", 
                        "saleable" => 1, 
                        "html_price" => "<span class='price'>‏٣٦٧٫٣٥ ر.س.‏</span>", 
                        "product" => [
                            "base_image_url" => "https://cdn.twsaa.com/home/23/cd2eeaba-784a-4272-a3f7-3e78262846d0.png" 
                        ] 
                    ], 
                    [
                        "id" => 48133, 
                        "product_id" => 24311, 
                        "parent_id" => null, 
                        "sku" => "L2-2-1-3-M5AZN", 
                        "name" => "تكنيك - باليت ظلال عيون اكسبوسد 16 لون 29.6 جم", 
                        "url_key" => "l2-2-1-3-m5azn", 
                        "saleable" => 1, 
                        "html_price" => "<span class='price'>‏٣٦٧٫٣٥ ر.س.‏</span>", 
                        "product" => [
                            "base_image_url" => "https://cdn.twsaa.com/home/23/cd2eeaba-784a-4272-a3f7-3e78262846d0.png" 
                        ] 
                    ], 
                    [
                        "id" => 48131, 
                        "product_id" => 24310, 
                        "parent_id" => null, 
                        "sku" => "L2-2-1-4-M5AZN", 
                        "name" => "تكنيك - باليت ظلال عيون لندن 35 لون 42 جم", 
                        "url_key" => "l2-2-1-4-m5azn",                                                                                 
                        "saleable" => 1, 
                        "html_price" => "<span class='price'>‏٣٦٧٫٣٥ ر.س.‏</span>", 
                        "product" => [
                            "base_image_url" => "https://cdn.twsaa.com/home/23/cd2eeaba-784a-4272-a3f7-3e78262846d0.png" 
                        ] 
                    ] 
                ] 
            ] 
        ], 
        [
            "slug" => "list_of_items", 
            "sort" => null, 
            "block_id" => 718904, 
            "settings" => [
                "items" => [
                    [
                        "image" => "https://cdn.twsaa.com/home/23/27a0a324-e308-440e-a05f-64690299b948.png", 
                        "name" => "أحمر الشفاه", 
                        "link_type" => "category", 
                        "category_id" => "2122", 
                        "link" => "/المكياج" 
                    ], 
                    [
                        "image" => "https://cdn.twsaa.com/home/23/6f09f49f-e2f6-4b86-86aa-68ca55595d1b.png", 
                        "name" => "أقلام الكحل", 
                        "link_type" => "category", 
                        "category_id" => "2122", 
                        "link" => "/المكياج" 
                    ], 
                    [
                        "image" => "https://cdn.twsaa.com/home/23/2c1c0a95-c1cc-4918-b56f-f8ddf479032d.png", 
                        "name" => "كونسيلر", 
                        "link_type" => "category", 
                        "category_id" => "2122", 
                        "link" => "/المكياج" 
                    ], 
                    [
                        "image" => "https://cdn.twsaa.com/home/23/d86d7b8a-2d4b-4e0f-95a6-5b2dc607ca70.png", 
                        "name" => "ظلال عيون", 
                        "link_type" => "category", 
                        "category_id" => "2122", 
                        "link" => "/المكياج" 
                    ] 
                ], 
                "title" => "", 
                "type" => "slider" 
            ] 
        ], 
        [
            "slug" => "list_of_items", 
            "sort" => null, 
            "block_id" => 478402, 
            "settings" => [
            "items" => [
                [
                    "image" => "https://cdn.twsaa.com/home/23/b8c2b86d-f1df-4ffa-9acc-46257a9ec848.png", 
                    "name" => "", 
                    "link_type" => "category", 
                    "category_id" => "2121", 
                    "link" => "/العناية" 
                ], 
                [
                    "image" => "https://cdn.twsaa.com/home/23/7718c30c-e8e6-4afc-baa6-4e3d32374ec2.png", 
                    "name" => "", 
                    "link_type" => "category", 
                    "category_id" => "2175", 
                    "link" => "/منتجات-يوسرين" 
                ] 
            ], 
            "title" => "" 
            ] 
        ], 
        [
            "slug" => "fixed_products", 
            "sort" => null, 
            "block_id" => 518164, 
            "settings" => [
                "list_type" => "category", 
                "category_id" => "2175", 
                "limit" => "12", 
                "type" => "list", 
                "link" => "/منتجات-يوسرين", 
                "products" => [
                    [
                        "id" => 48755, 
                        "product_id" => 24624, 
                        "parent_id" => null, 
                        "sku" => "G2 5-1-3", 
                        "name" => "يوسيرين - كريم ليلي مضاد للتجاعيد غني بالريتينول ومساعد 48جرام", 
                        "url_key" => "g2-5-1-3", 
                        "saleable" => 1, 
                        "html_price" => "<span class='price'>‏٣٦٧٫٣٥ ر.س.‏</span>", 
                        "product" => [
                        "base_image_url" => "https://cdn.twsaa.com/home/23/cd2eeaba-784a-4272-a3f7-3e78262846d0.png" 
                        ] 
                    ], 
                    [
                        "id" => 48691, 
                        "product_id" => 24592, 
                        "parent_id" => null, 
                        "sku" => "EUC9853", 
                        "name" => "يوسيرين بيبي كريم للاطفال مع برو فيتامين ب5 وزبدة الشيا الطبيعية، 141 جم", 
                        "url_key" => "euc9853", 
                        "saleable" => 1, 
                        "html_price" => "<span class='price'>‏٣٦٧٫٣٥ ر.س.‏</span>", 
                        "product" => [
                            "base_image_url" => "https://cdn.twsaa.com/home/23/cd2eeaba-784a-4272-a3f7-3e78262846d0.png" 
                        ] 
                    ], 
                    [
                        "id" => 48753, 
                        "product_id" => 24623, 
                        "parent_id" => null, 
                        "sku" => "G2-8-3-9", 
                        "name" => "يوسرين - لوشن للبشرة الجافة والخشنة -500مل", 
                        "url_key" => "g2-8-3-9", 
                        "saleable" => 1, 
                        "html_price" => "<span class='price'>‏٣٦٧٫٣٥ ر.س.‏</span>", 
                        "product" => [
                        "base_image_url" => "https://cdn.twsaa.com/home/23/cd2eeaba-784a-4272-a3f7-3e78262846d0.png" 
                        ] 
                    ], 
                    [
                        "id" => 48261, 
                        "product_id" => 24375, 
                        "parent_id" => null, 
                        "sku" => "I3-4-2-1", 
                        "name" => "جليتز - اظافر صناعية لصق ذاتي لون فضي لماع - 10", 
                        "url_key" => "i3-4-2-1", 
                        "saleable" => 1, 
                        "html_price" => "<span class='price'>‏٣٦٧٫٣٥ ر.س.‏</span>", 
                        "product" => [
                            "base_image_url" => "https://cdn.twsaa.com/home/23/cd2eeaba-784a-4272-a3f7-3e78262846d0.png" 
                        ] 
                    ], 
                    [
                        "id" => 48693, 
                        "product_id" => 24593, 
                        "parent_id" => null, 
                        "sku" => "EUC3148", 
                        "name" => "يوسيرين - ماء ميسيلار مرطب 3 في 1، مركب من حمض الهيالورونيك، 200مل", 
                        "url_key" => "euc3148", 

                        "saleable" => 1, 
                        "html_price" => "<span class='price'>‏٣٦٧٫٣٥ ر.س.‏</span>", 
                        "product" => [
                        "base_image_url" => "https://cdn.twsaa.com/home/23/cd2eeaba-784a-4272-a3f7-3e78262846d0.png" 
                        ] 
                    ], 
                    [
                        "id" => 48793, 
                        "product_id" => 24643, 
                        "parent_id" => null, 
                        "sku" => "C3-5-2-4", 
                        "name" => "ميلي - قناع تقوية الشعر بأكليل الجبل والنعناع 340 جم", 
                        "url_key" => "c3-5-2-4", 
                        "saleable" => 1, 
                        "html_price" => "<span class='price'>‏٣٦٧٫٣٥ ر.س.‏</span>", 
                        "product" => [
                            "base_image_url" => "https://cdn.twsaa.com/home/23/cd2eeaba-784a-4272-a3f7-3e78262846d0.png" 
                        ] 
                    ], 
                    [
                        "id" => 48729, 
                        "product_id" => 24611, 
                        "parent_id" => null, 
                        "sku" => "P3-8-4-6", 
                        "name" => "يوسيرين - لوشن الترطيب اليومي خال من العطور - 500مل", 
                        "url_key" => "p3-8-4-6", 
                        "saleable" => 1, 
                        "html_price" => "<span class='price'>‏٣٦٧٫٣٥ ر.س.‏</span>", 
                        "product" => [
                        "base_image_url" => "https://cdn.twsaa.com/home/23/cd2eeaba-784a-4272-a3f7-3e78262846d0.png" 
                        ] 
                    ], 
                    [
                        "id" => 48761, 
                        "product_id" => 24627, 
                        "parent_id" => null, 
                        "sku" => "C2 4-4-4", 
                        "name" => "يوسرين -  زيت الاستحمام أتوبي كونترول أوميغا - 400مل", 
                        "url_key" => "c2-4-4-4", 

                        "saleable" => 1, 
                        "html_price" => "<span class='price'>‏٣٦٧٫٣٥ ر.س.‏</span>", 
                        "product" => [
                            "base_image_url" => "https://cdn.twsaa.com/home/23/cd2eeaba-784a-4272-a3f7-3e78262846d0.png" 
                        ] 
                    ], 
                    [
                        "id" => 48765, 
                        "product_id" => 24629, 
                        "parent_id" => null, 
                        "sku" => "J1 3-2-2", 
                        "name" => "يوسرين - إيفن بيغمنت بير فكتور كريم النهار للبشرة - 50 مل", 
                        "url_key" => "j1-3-2-2", 
                        "new" => null, 
                        "saleable" => 1, 
                        "html_price" => "<span class='price'>‏٣٦٧٫٣٥ ر.س.‏</span>", 
                        "product" => [
                        "base_image_url" => "https://cdn.twsaa.com/home/23/cd2eeaba-784a-4272-a3f7-3e78262846d0.png" 
                        ] 
                    ], 
                    [
                        "id" => 48737, 
                        "product_id" => 24615, 
                        "parent_id" => null, 
                        "sku" => "P3-8-5-2", 
                        "name" => "يوسيرن - كريم ترطيب باليوريا 5٪ للأيدي", 
                        "url_key" => "p3-8-5-2", 

                        "saleable" => 1, 
                        "html_price" => "<span class='price'>‏٣٦٧٫٣٥ ر.س.‏</span>", 
                        "product" => [
                            "base_image_url" => "https://cdn.twsaa.com/home/23/cd2eeaba-784a-4272-a3f7-3e78262846d0.png" 
                        ] 
                    ], 
                    [
                        "id" => 48687, 
                        "product_id" => 24590, 
                        "parent_id" => null, 
                        "sku" => "EUC0148", 
                        "name" => "يوسيرين - جل تنظيف الوجه المرطب٢٠٠مل", 
                        "url_key" => "euc0148", 
                        "saleable" => 1, 
                        "html_price" => "<span class='price'>‏٣٦٧٫٣٥ ر.س.‏</span>", 
                        "product" => [
                        "base_image_url" => "https://cdn.twsaa.com/home/23/cd2eeaba-784a-4272-a3f7-3e78262846d0.png" 
                        ] 
                    ], 
                    [
                        "id" => 48789, 
                        "product_id" => 24641, 
                        "parent_id" => null, 
                        "sku" => "C3-5-5-7", 
                        "name" => "ميلي - بلسم مقوي للشعر باكليل الجبل والنعناع 355 مل", 
                        "url_key" => "c3-5-5-7", 
                        "saleable" => 1, 
                        "html_price" => "<span class='price'>‏٣٦٧٫٣٥ ر.س.‏</span>", 
                        "product" => [
                            "base_image_url" => "https://cdn.twsaa.com/home/23/cd2eeaba-784a-4272-a3f7-3e78262846d0.png" 
                        ] 
                    ] 
                ] 
            ] 
        ], 
        [
            "slug" => "wide_banner", 
            "sort" => null, 
            "block_id" => 298292, 
            "settings" => [
                "image" => "https://cdn.twsaa.com/home/23/d081acbf-e5ab-4bce-b1c8-0bd9f906c081.png", 
            ] 
        ], 
        [
            "slug" => "fixed_products", 
            "sort" => null, 
            "block_id" => 271789, 
            "settings" => [
                "list_type" => "category", 
                "category_id" => "2125", 
                "limit" => "20", 
                "type" => "list", 
                "products_title" => "العدسات", 
                "link" => "/العدسات", 
                "products" => [
                    [
                        "id" => 48207, 
                        "product_id" => 24348, 
                        "parent_id" => null, 
                        "sku" => "L3-9-5-1", 
                        "name" => "دايا - عدسات لاصقة يومية آش 10 حبات", 
                        "url_key" => "l3-9-5-1", 
                        "saleable" => 1, 
                        "html_price" => "<span class='price'>‏٣٦٧٫٣٥ ر.س.‏</span>", 
                        "product" => [
                            "base_image_url" => "https://cdn.twsaa.com/home/23/cd2eeaba-784a-4272-a3f7-3e78262846d0.png" 
                        ] 
                    ], 
                    [
                        "id" => 48215, 
                        "product_id" => 24352, 
                        "parent_id" => null, 
                        "sku" => "L3-9-4-2", 
                        "name" => "دايا - عدسات لاصقة يومية مينت 10 حبات", 
                        "url_key" => "l3-9-4-2",                         
                        "saleable" => 1, 
                        "html_price" => "<span class='price'>‏٣٦٧٫٣٥ ر.س.‏</span>", 
                        "product" => [
                            "base_image_url" => "https://cdn.twsaa.com/home/23/cd2eeaba-784a-4272-a3f7-3e78262846d0.png" 
                        ] 
                    ], 
                    [
                        "id" => 48191, 
                        "product_id" => 24340, 
                        "parent_id" => null, 
                        "sku" => "J3-9-4-7", 
                        "name" => "دفرنت كلر - محلول عدسات متعدد الاغراض الكل في واحد 130مل", 
                        "url_key" => "j3-9-4-7", 
                        "saleable" => 1, 
                        "html_price" => "<span class='price'>‏٣٦٧٫٣٥ ر.س.‏</span>", 
                        "product" => [
                            "base_image_url" => "https://cdn.twsaa.com/home/23/cd2eeaba-784a-4272-a3f7-3e78262846d0.png" 
                        ] 
                    ], 
                    [
                        "id" => 48205, 
                        "product_id" => 24347, 
                        "parent_id" => null, 
                        "sku" => "L3-9-5-2", 
                        "name" => "دايا - عدسات لاصقة يومية انديقو 10 حبات",                                                                                                                                                                                                                                                                           "url_key" => "l3-9-5-2", 
                        "new" => null, 
                        "saleable" => 1, 
                        "html_price" => "<span class='price'>‏٣٦٧٫٣٥ ر.س.‏</span>", 
                        "product" => [
                            "base_image_url" => "https://cdn.twsaa.com/home/23/cd2eeaba-784a-4272-a3f7-3e78262846d0.png" 
                        ] 
                    ], 
                    [
                        "id" => 48221, 
                        "product_id" => 24355, 
                        "parent_id" => null, 
                        "sku" => "L3-3-2-2", 
                        "name" => "عدسات لنس مي كنتور - contour", 
                        "url_key" => "l3-3-2-2", 
                        "saleable" => 1, 
                        "html_price" => "<span class='price'>‏٣٦٧٫٣٥ ر.س.‏</span>", 
                        "product" => [
                            "base_image_url" => "https://cdn.twsaa.com/home/23/cd2eeaba-784a-4272-a3f7-3e78262846d0.png" 
                        ] 
                    ], 
                    [
                        "id" => 48197, 
                        "product_id" => 24343, 
                        "parent_id" => null, 
                        "sku" => "L3-9-4-9", 
                        "name" => "عدسات ديفا - كريم Cream", 
                        "url_key" => "l3-9-4-9", 
                        "saleable" => 1, 
                        "html_price" => "<span class='price'>‏٣٦٧٫٣٥ ر.س.‏</span>", 
                        "product" => [
                            "base_image_url" => "https://cdn.twsaa.com/home/23/cd2eeaba-784a-4272-a3f7-3e78262846d0.png" 
                        ] 
                    ], 
                    [
                        "id" => 48227, 
                        "product_id" => 24358, 
                        "parent_id" => null, 
                        "sku" => "L3-3-2-1", 
                        "name" => "عدسات لنس مي تي - TEA", 
                        "url_key" => "l3-3-2-1", 
                        "saleable" => 1, 
                        "html_price" => "<span class='price'>‏٣٦٧٫٣٥ ر.س.‏</span>", 
                        "product" => [
                            "base_image_url" => "https://cdn.twsaa.com/home/23/cd2eeaba-784a-4272-a3f7-3e78262846d0.png" 
                        ] 
                    ], 
                    [
                        "id" => 48209, 
                        "product_id" => 24349, 
                        "parent_id" => null, 
                        "sku" => "L3-9-4-5", 
                        "name" => "دايا - عدسات لاصقة يومية جايد 10 حبات", 
                        "url_key" => "l3-9-4-5", 
                        "saleable" => 1, 
                        "html_price" => "<span class='price'>‏٣٦٧٫٣٥ ر.س.‏</span>", 
                        "product" => [
                            "base_image_url" => "https://cdn.twsaa.com/home/23/cd2eeaba-784a-4272-a3f7-3e78262846d0.png" 
                        ] 
                    ], 
                    [
                        "id" => 48219, 
                        "product_id" => 24354, 
                        "parent_id" => null, 
                        "sku" => "L3-2-5-1", 
                        "name" => "ديفا - محلول عدسات  طبي متعدد الأغراض 100 مل", 
                        "url_key" => "l3-2-5-1", 
                        "saleable" => 1, 
                        "html_price" => "<span class='price'>‏٣٦٧٫٣٥ ر.س.‏</span>", 
                        "product" => [
                            "base_image_url" => "https://cdn.twsaa.com/home/23/cd2eeaba-784a-4272-a3f7-3e78262846d0.png" 
                        ] 
                    ], 
                    [
                        "id" => 48193, 
                        "product_id" => 24341, 
                        "parent_id" => null, 
                        "sku" => "B3-5-4-4", 
                        "name" => "عدسات لنس مي ارابيا آي - Arabia Eye", 
                        "url_key" => "b3-5-4-4", 
                        "saleable" => 1, 
                        "html_price" => "<span class='price'>‏٣٦٧٫٣٥ ر.س.‏</span>", 
                        "product" => [
                            "base_image_url" => "https://cdn.twsaa.com/home/23/cd2eeaba-784a-4272-a3f7-3e78262846d0.png" 
                        ] 
                    ], 
                    [
                        "id" => 48195, 
                        "product_id" => 24342, 
                        "parent_id" => null, 
                        "sku" => "B3-5-4-3", 
                        "name" => "عدسات لنس مي دراما - Drama", 
                        "url_key" => "b3-5-4-3", 
                        "saleable" => 1, 
                        "html_price" => "<span class='price'>‏٣٦٧٫٣٥ ر.س.‏</span>", 
                        "product" => [
                            "base_image_url" => "https://cdn.twsaa.com/home/23/cd2eeaba-784a-4272-a3f7-3e78262846d0.png" 
                        ] 
                    ], 
                    [
                        "id" => 48211, 
                        "product_id" => 24350, 
                        "parent_id" => null, 
                        "sku" => "L3-9-4-4", 
                        "name" => "دايا - عدسات لاصقة يومية بيكان 10 حبات", 
                        "url_key" => "l3-9-4-4", 
                        "saleable" => 1, 
                        "html_price" => "<span class='price'>‏٣٦٧٫٣٥ ر.س.‏</span>", 
                        "product" => [
                            "base_image_url" => "https://cdn.twsaa.com/home/23/cd2eeaba-784a-4272-a3f7-3e78262846d0.png" 
                        ] 
                    ], 
                    [
                        "id" => 48203, 
                        "product_id" => 24346, 
                        "parent_id" => null, 
                        "sku" => "L3-9-4-6", 
                        "name" => "عدسات ديفا - لامير Lamir", 
                        "url_key" => "l3-9-4-6", 
                        "saleable" => 1, 
                        "html_price" => "<span class='price'>‏٣٦٧٫٣٥ ر.س.‏</span>", 
                        "product" => [
                            "base_image_url" => "https://cdn.twsaa.com/home/23/cd2eeaba-784a-4272-a3f7-3e78262846d0.png" 
                        ] 
                    ], 
                    [
                        "id" => 48189, 
                        "product_id" => 24339, 
                        "parent_id" => null, 
                        "sku" => "C3-5-2-9", 
                        "name" => "عدسات لنس مي تان - TAN", 
                        "url_key" => "c3-5-2-9", 
                        "saleable" => 1, 
                        "html_price" => "<span class='price'>‏٣٦٧٫٣٥ ر.س.‏</span>", 
                        "product" => [
                            "base_image_url" => "https://cdn.twsaa.com/home/23/cd2eeaba-784a-4272-a3f7-3e78262846d0.png" 
                        ] 
                    ] 
                ] 
            ] 
        ], 
        [
            "slug" => "brands", 
            "sort" => null, 
            "block_id" => 662754, 
            "settings" => [
                "brand_ids" => [
                    "18", 
                    "20", 
                    "21", 
                    "131" 
                ], 
                "brands_title" => "الماركات", 
                "link" => "/brands/prada/brand-18", 
                "brands" => [
                    [
                        "id" => 18, 
                        "name" => "prada", 
                        "description" => "                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                ", 
                        "logo" => "brand/18/logo/5082c95f-123b-4028-bd30-2e4688e2c089.png", 
                        "banner" => "brand/18/banner/252c5314-9ca3-4661-8fbe-53cfa1c53599.png", 
                        "meta_title" => "prada", 
                        "meta_url" => "prada", 
                        "meta_description" => "prada", 
                    ], 
                    [
                        "id" => 20, 
                        "name" => "Dior", 
                        "description" => "", 
                        "logo" => "brand/20/logo/e3a9da61-0052-411a-b9ce-400ed43b2357.png", 
                        "banner" => "brand/20/banner/ca4760cb-d70b-49d4-b82f-e9fc8d60438e.png", 
                        "meta_title" => "عطر ديور", 
                        "meta_url" => "DIOR", 
                        "meta_description" => "عطر ديور", 
                        "is_active" => 1, 
                    ], 
                    [
                        "id" => 21, 
                        "name" => "Guerlan", 
                        "description" => "Guerlan", 
                        "logo" => "brand/21/logo/c4f4aab0-1e0b-401e-88d0-8abb7008ca0a.png", 
                        "banner" => "brand/21/banner/ecbfd4a1-ba19-49d1-9e9c-3cf6bb6d34ca.png", 
                        "meta_title" => "Guerlan", 
                        "meta_url" => "Guerlan", 
                        "meta_description" => "Guerlan", 
                        "is_active" => 1, 
                    ], 
                    [
                        "id" => 131, 
                        "name" => "Givenchy", 
                        "description" => "", 
                        "logo" => "brand/131/logo/1d93f00a-e4c1-418d-8908-653a881d6c63.png", 
                        "banner" => "brand/131/banner/2617d5c3-aec8-42f6-80ed-c8f502662c14.txt", 
                        "meta_title" => "Givenchy", 
                        "meta_url" => "Givenchy", 
                        "meta_description" => "", 
                        "is_active" => 1, 
                    ] 
                ] 
            ] 
        ], 
        [
            "slug" => "customer_options", 
            "sort" => null, 
            "block_id" => 303733, 
            "settings" => [
                "display_all" => "true", 
                "hide_user" => "", 
                "limit" => "5", 
                "customer_options_list_type" => "randomly", 
                "reviews" => [
                    [
                        "id" => 228, 
                        "reply" => "", 
                        "rating" => 5, 
                        "comment" => "asdf", 
                        "status" => "1", 
                        "type" => "store", 
                        "product_id" => null, 
                        "order_id" => 1693, 
                        "customer_id" => 1, 
                        "name" => "Demo User" 
                    ] 
                ] 
            ] 
        ], 
        [
            "slug" => "store_features", 
            "sort" => null, 
            "block_id" => 692849, 
            "settings" => [
                "items" => [
                    [
                        "icon" => "icon-store", 
                        "main_title" => "a", 
                        "sub_title" => "a1111" 
                    ], 
                    [
                        "icon" => "icon-cart", 
                        "main_title" => "b", 
                        "sub_title" => "b22222" 
                    ], 
                    [
                        "icon" => "icon-watch", 
                        "main_title" => "c", 
                        "sub_title" => "c33333" 
                    ] 
                ] 
            ] 
        ], 
        [
            "slug" => "store_features", 
            "sort" => null, 
            "block_id" => 21375, 
            "settings" => [
                "items" => [
                [
                    "icon" => "icon-store", 
                    "main_title" => "1", 
                    "sub_title" => "4" 
                ], 
                [
                    "icon" => "icon-store", 
                    "main_title" => "2", 
                    "sub_title" => "5" 
                ], 
                [
                    "icon" => "icon-store", 
                    "main_title" => "3", 
                    "sub_title" => "6" 
                ] 
                ] 
            ] 
        ], 
        [
            "slug" => "fixed_products", 
            "sort" => null, 
            "block_id" => 798954, 
            "settings" => [
               "list_type" => "chosen_products", 
               "category_id" => "2120", 
               "sku_text" => "N2-4-5-3,GFAF0U23,GFAF0U2", 
               "limit" => "-1", 
               "type" => "slider", 
               "products_title" => "", 
               "link" => "/تخفيضات", 
               "products" => [
                [
                    "id" => 106921, 
                    "product_id" => 55683, 
                    "parent_id" => null, 
                    "sku" => "GFAF0U2", 
                    "name" => "vir", 
                    "url_key" => "gfaf0u2", 
                    "saleable" => 1, 
                    "html_price" => "<span class='price'>‏٣٦٧٫٣٥ ر.س.‏</span>", 
                    "product" => [
                        "base_image_url" => "https://cdn.twsaa.com/home/23/cd2eeaba-784a-4272-a3f7-3e78262846d0.png" 
                    ] 
                ], 
                [
                    "id" => 107017, 
                    "product_id" => 55731, 
                    "parent_id" => null, 
                    "sku" => "GFAF0U23", 
                    "name" => "Testing API Mobile", 
                    "url_key" => "ssdfasdss", 
                    "saleable" => 1, 
                    "html_price" => "<span class='price'>‏٣٦٧٫٣٥ ر.س.‏</span>", 
                    "product" => [
                        "base_image_url" => "https://cdn.twsaa.com/home/23/cd2eeaba-784a-4272-a3f7-3e78262846d0.png" 
                    ] 
                ], 
                [
                    "id" => 107663, 
                    "product_id" => 56116, 
                    "parent_id" => null, 
                    "sku" => "N2-4-5-3", 
                    "name" => "ثلاجة الجمال سباركلنق لافندر 4 لتر", 
                    "url_key" => "n2-4-5-3", 
                    "saleable" => 1, 
                    "html_price" => "<span class='price'>‏٣٦٧٫٣٥ ر.س.‏</span>", 
                    "product" => [
                    "base_image_url" => "https://cdn.twsaa.com/home/23/cd2eeaba-784a-4272-a3f7-3e78262846d0.png" 
                    ] 
                ] 
                ] 
            ] 
        ] 
    ]; 
    return $context;
}

function notifications() {
    $context['authUser'] = auth();
    $context['menu'] = menu();
    $context['notifications'] = [
        [
            "id" => 634, 
            "type" => "order-comment", 
            "comment" => "order status updated", 
            "is_notified" => "0", 
            "is_read" => "0", 
            "customer_id" => 1, 
            "order_id" => 1696, 
            "order_comment_id" => 1913, 
            "product_id" => null, 
            "product_review_id" => null, 
            "created_at" => "2024-11-03T15:03:50.000000Z", 
            "updated_at" => "2024-11-03T15:03:50.000000Z" 
        ], 
        [
            "id" => 633, 
            "type" => "order-comment", 
            "comment" => "order status updated", 
            "is_notified" => "0", 
            "is_read" => "0", 
            "customer_id" => 1, 
            "order_id" => 1696, 
            "order_comment_id" => 1912, 
            "product_id" => null, 
            "product_review_id" => null, 
            "created_at" => "2024-11-03T12:05:28.000000Z", 
            "updated_at" => "2024-11-03T12:05:28.000000Z" 
        ], 
        [
            "id" => 632, 
            "type" => "order-comment", 
            "comment" => "order status updated", 
            "is_notified" => "0", 
            "is_read" => "1", 
            "customer_id" => 1, 
            "order_id" => 1578, 
            "order_comment_id" => 1865, 
            "product_id" => null, 
            "product_review_id" => null, 
            "created_at" => "2024-08-25T08:21:04.000000Z", 
            "updated_at" => "2024-10-31T14:08:32.000000Z" 
        ], 
        [
            "id" => 631, 
            "type" => "order-comment", 
            "comment" => "order status updated", 
            "is_notified" => "0", 
            "is_read" => "0", 
            "customer_id" => 1, 
            "order_id" => 1578, 
            "order_comment_id" => 1864, 
            "product_id" => null, 
            "product_review_id" => null, 
            "created_at" => "2024-08-25T08:13:13.000000Z", 
            "updated_at" => "2024-08-25T08:13:13.000000Z" 
        ], 
        [
            "id" => 630, 
            "type" => "order-comment", 
            "comment" => "order status updated", 
            "is_notified" => "0", 
            "is_read" => "0", 
            "customer_id" => 1, 
            "order_id" => 1578, 
            "order_comment_id" => 1863, 
            "product_id" => null, 
            "product_review_id" => null, 
            "created_at" => "2024-08-25T08:10:46.000000Z", 
            "updated_at" => "2024-08-25T08:10:46.000000Z" 
        ], 
        [
            "id" => 629, 
            "type" => "order-comment", 
            "comment" => "order status updated", 
            "is_notified" => "0", 
            "is_read" => "0", 
            "customer_id" => 1, 
            "order_id" => 1578, 
            "order_comment_id" => 1862, 
            "product_id" => null, 
            "product_review_id" => null, 
            "created_at" => "2024-08-25T08:10:06.000000Z", 
            "updated_at" => "2024-08-25T08:10:06.000000Z" 
        ], 
        [
            "id" => 628, 
            "type" => "order-comment", 
            "comment" => "order status updated", 
            "is_notified" => "0", 
            "is_read" => "0", 
            "customer_id" => 1, 
            "order_id" => 1578, 
            "order_comment_id" => 1861, 
            "product_id" => null, 
            "product_review_id" => null, 
            "created_at" => "2024-08-25T08:08:47.000000Z", 
            "updated_at" => "2024-08-25T08:08:47.000000Z" 
        ], 
        [
            "id" => 627, 
            "type" => "order-comment", 
            "comment" => "order status updated", 
            "is_notified" => "0", 
            "is_read" => "0", 
            "customer_id" => 1, 
            "order_id" => 1578, 
            "order_comment_id" => 1860, 
            "product_id" => null, 
            "product_review_id" => null, 
            "created_at" => "2024-08-25T08:07:06.000000Z", 
            "updated_at" => "2024-08-25T08:07:06.000000Z" 
        ], 
        [
            "id" => 626, 
            "type" => "order-comment", 
            "comment" => "order status updated", 
            "is_notified" => "0", 
            "is_read" => "0", 
            "customer_id" => 1, 
            "order_id" => 1578, 
            "order_comment_id" => 1859, 
            "product_id" => null, 
            "product_review_id" => null, 
            "created_at" => "2024-08-25T08:04:01.000000Z", 
            "updated_at" => "2024-08-25T08:04:01.000000Z" 
        ], 
        [
            "id" => 625, 
            "type" => "order-comment", 
            "comment" => "order status updated", 
            "is_notified" => "0", 
            "is_read" => "0", 
            "customer_id" => 1, 
            "order_id" => 1578, 
            "order_comment_id" => 1858, 
            "product_id" => null, 
            "product_review_id" => null, 
            "created_at" => "2024-08-25T07:58:01.000000Z", 
            "updated_at" => "2024-08-25T07:58:01.000000Z" 
        ], 
        [
            "id" => 624, 
            "type" => "order-comment", 
            "comment" => "order status updated", 
            "is_notified" => "0", 
            "is_read" => "0", 
            "customer_id" => 1, 
            "order_id" => 1578, 
            "order_comment_id" => 1857, 
            "product_id" => null, 
            "product_review_id" => null, 
            "created_at" => "2024-08-25T07:56:58.000000Z", 
            "updated_at" => "2024-08-25T07:56:58.000000Z" 
        ], 
        [
            "id" => 623, 
            "type" => "order-comment", 
            "comment" => "order status updated", 
            "is_notified" => "0", 
            "is_read" => "1", 
            "customer_id" => 1, 
            "order_id" => 1578, 
            "order_comment_id" => 1856, 
            "product_id" => null, 
            "product_review_id" => null, 
            "created_at" => "2024-08-25T07:55:31.000000Z", 
            "updated_at" => "2024-10-29T12:24:03.000000Z" 
        ], 
        [
            "id" => 622, 
            "type" => "order-comment", 
            "comment" => "order status updated", 
            "is_notified" => "0", 
            "is_read" => "1", 
            "customer_id" => 1, 
            "order_id" => 1573, 
            "order_comment_id" => 1847, 
            "product_id" => null, 
            "product_review_id" => null, 
            "created_at" => "2024-07-03T13:15:00.000000Z", 
            "updated_at" => "2024-07-23T08:45:45.000000Z" 
        ], 
        [
            "id" => 620, 
            "type" => "order-comment", 
            "comment" => "order status updated", 
            "is_notified" => "0", 
            "is_read" => "0", 
            "customer_id" => 1, 
            "order_id" => 1572, 
            "order_comment_id" => 1844, 
            "product_id" => null, 
            "product_review_id" => null, 
            "created_at" => "2024-07-03T10:01:23.000000Z", 
            "updated_at" => "2024-07-03T10:01:23.000000Z" 
        ], 
        [
            "id" => 619, 
            "type" => "order-comment", 
            "comment" => "order status updated", 
            "is_notified" => "0", 
            "is_read" => "0", 
            "customer_id" => 1, 
            "order_id" => 1572, 
            "order_comment_id" => 1843, 
            "product_id" => null, 
            "product_review_id" => null, 
            "created_at" => "2024-07-03T10:01:20.000000Z", 
            "updated_at" => "2024-07-03T10:01:20.000000Z" 
        ], 
        [
            "id" => 606, 
            "type" => "order-comment", 
            "comment" => "order status updated", 
            "is_notified" => "0", 
            "is_read" => "0", 
            "customer_id" => 1, 
            "order_id" => 1558, 
            "order_comment_id" => 1819, 
            "product_id" => null, 
            "product_review_id" => null, 
            "created_at" => "2024-07-03T08:32:58.000000Z", 
            "updated_at" => "2024-07-03T08:32:58.000000Z" 
        ], 
        [
            "id" => 605, 
            "type" => "order-comment", 
            "comment" => "order status updated", 
            "is_notified" => "0", 
            "is_read" => "0", 
            "customer_id" => 1, 
            "order_id" => 1557, 
            "order_comment_id" => 1814, 
            "product_id" => null, 
            "product_review_id" => null, 
            "created_at" => "2024-06-24T09:51:24.000000Z", 
            "updated_at" => "2024-06-24T09:51:24.000000Z" 
        ], 
        [
            "id" => 604, 
            "type" => "order-comment", 
            "comment" => "order status updated", 
            "is_notified" => "0", 
            "is_read" => "0", 
            "customer_id" => 1, 
            "order_id" => 1557, 
            "order_comment_id" => 1813, 
            "product_id" => null, 
            "product_review_id" => null, 
            "created_at" => "2024-06-24T09:51:19.000000Z", 
            "updated_at" => "2024-06-24T09:51:19.000000Z" 
        ], 
        [
            "id" => 603, 
            "type" => "order-comment", 
            "comment" => "order status updated", 
            "is_notified" => "0", 
            "is_read" => "0", 
            "customer_id" => 1, 
            "order_id" => 1557, 
            "order_comment_id" => 1812, 
            "product_id" => null, 
            "product_review_id" => null, 
            "created_at" => "2024-06-24T09:50:23.000000Z", 
            "updated_at" => "2024-06-24T09:50:23.000000Z" 
        ], 
        [
            "id" => 602, 
            "type" => "order-comment", 
            "comment" => "order status updated", 
            "is_notified" => "0", 
            "is_read" => "0", 
            "customer_id" => 1, 
            "order_id" => 1557, 
            "order_comment_id" => 1811, 
            "product_id" => null, 
            "product_review_id" => null, 
            "created_at" => "2024-06-24T09:50:15.000000Z", 
            "updated_at" => "2024-06-24T09:50:15.000000Z" 
        ] 
    ];
    return $context;
}

function profile() {
    $context['authUser'] = auth();
    $context['menu'] = menu();
    $context['customer'] = [
        "id" => 1, 
        "first_name" => "Demo", 
        "last_name" => "User", 
        "gender" => "Male", 
        "city" => "", 
        "country" => "SA", 
        "preferred_language" => null, 
        "date_of_birth" => "1992-02-14", 
        "email" => "demo@twsaa.com", 
        "points" => "0", 
        "status" => 1, 
        "customer_group_id" => null, 
        "thawani_id" => "cus_NUFcfYZyH9vwtRQA", 
        "subscribed_to_news_letter" => 0, 
        "created_at" => "2022-06-30T09:57:02.000000Z", 
        "updated_at" => "2024-11-10T08:20:01.000000Z", 
        "is_verified" => 1, 
        "token" => "3bf2b48b67a6caa7517f4d6657d2429d", 
        "notes" => null, 
        "phone" => "+966 57 291 8538", 
        "affiliate_id" => null 
    ];
    return $context;
}

function profileEdit() {
    $context['authUser'] = auth();
    $context['menu'] = menu();
    $context['customer'] = [
        "id" => 1, 
        "first_name" => "Demo", 
        "last_name" => "User", 
        "gender" => "Male", 
        "city" => "", 
        "country" => "SA", 
        "preferred_language" => null, 
        "date_of_birth" => "1992-02-14", 
        "email" => "demo@twsaa.com", 
        "points" => "0", 
        "status" => 1, 
        "customer_group_id" => null, 
        "thawani_id" => "cus_NUFcfYZyH9vwtRQA", 
        "subscribed_to_news_letter" => 0, 
        "created_at" => "2022-06-30T09:57:02.000000Z", 
        "updated_at" => "2024-11-10T08:20:01.000000Z", 
        "is_verified" => 1, 
        "token" => "3bf2b48b67a6caa7517f4d6657d2429d", 
        "notes" => null, 
        "phone" => "+966 57 291 8538", 
        "affiliate_id" => null 
    ];
    
    return $context;
}

function addresses() {
    $context['authUser'] = auth();
    $context['menu'] = menu();
    $context['addresses'] =  
    [
        [
            "id" => 3152, 
            "address_type" => "customer", 
            "customer_id" => 1, 
            "carrier_id" => null, 
            "cart_id" => null, 
            "order_id" => null, 
            "first_name" => "Demo", 
            "last_name" => "User", 
            "gender" => null, 
            "company_name" => null, 
            "address1" => "dafc", 
            "address2" => "sfcb", 
            "postcode" => "12345", 
            "area" => "210", 
            "city" => "Mahda", 
            "state" => "580", 
            "country" => "SA", 
            "email" => null, 
            "phone" => "+966 57 291 8538", 
            "vat_id" => null, 
            "default_address" => 0, 
            "additional" => null, 
            "created_at" => "2023-11-05T15:12:20.000000Z", 
            "updated_at" => "2024-11-03T11:58:23.000000Z" 
        ], 
        [
            "id" => 4491, 
            "address_type" => "customer", 
            "customer_id" => 1, 
            "carrier_id" => null, 
            "cart_id" => null, 
            "order_id" => null, 
            "first_name" => "Demo", 
            "last_name" => "User", 
            "gender" => null, 
            "company_name" => null, 
            "address1" => "asdf", 
            "address2" => null, 
            "postcode" => "", 
            "area" => null, 
            "city" => "3", 
            "state" => "580", 
            "country" => "SA", 
            "email" => null, 
            "phone" => "+966 57 291 8538", 
            "vat_id" => null, 
            "default_address" => 0, 
            "additional" => null, 
            "created_at" => "2024-02-01T09:26:09.000000Z", 
            "updated_at" => "2024-02-01T09:26:09.000000Z" 
        ], 
        [
            "id" => 6528, 
            "address_type" => "customer", 
            "customer_id" => 1, 
            "carrier_id" => null, 
            "cart_id" => null, 
            "order_id" => null, 
            "first_name" => "Demo", 
            "last_name" => "User", 
            "gender" => null, 
            "company_name" => null, 
            "address1" => "yaseen", 
            "address2" => null, 
            "postcode" => "asdf", 
            "area" => null, 
            "city" => "18", 
            "state" => "581", 
            "country" => "SA", 
            "email" => null, 
            "phone" => "+966 57 291 8538", 
            "vat_id" => null, 
            "default_address" => 0, 
            "additional" => null, 
            "created_at" => "2024-04-15T13:50:40.000000Z", 
            "updated_at" => "2024-04-15T13:50:40.000000Z" 
        ], 
        [
            "id" => 8275, 
            "address_type" => "customer", 
            "customer_id" => 1, 
            "carrier_id" => null, 
            "cart_id" => null, 
            "order_id" => null, 
            "first_name" => "Demo", 
            "last_name" => "User", 
            "gender" => null, 
            "company_name" => null, 
            "address1" => "yaseen", 
            "address2" => null, 
            "postcode" => "asdf", 
            "area" => null, 
            "city" => "5505", 
            "state" => "615", 
            "country" => "AE", 
            "email" => null, 
            "phone" => "+971 57 291 8538", 
            "vat_id" => null, 
            "default_address" => 0, 
            "additional" => null, 
            "created_at" => "2024-07-11T13:19:19.000000Z", 
            "updated_at" => "2024-07-11T13:19:19.000000Z" 
        ], 
        [
            "id" => 8356, 
            "address_type" => "customer", 
            "customer_id" => 1, 
            "carrier_id" => null, 
            "cart_id" => null, 
            "order_id" => null, 
            "first_name" => "Demo", 
            "last_name" => "User", 
            "gender" => null, 
            "company_name" => null, 
            "address1" => "yaseen", 
            "address2" => null, 
            "postcode" => "asdf", 
            "area" => null, 
            "city" => "5003", 
            "state" => "612", 
            "country" => "AE", 
            "email" => null, 
            "phone" => "+971 57 291 8538", 
            "vat_id" => null, 
            "default_address" => 0, 
            "additional" => null, 
            "created_at" => "2024-07-11T14:32:21.000000Z", 
            "updated_at" => "2024-07-11T14:32:21.000000Z" 
        ], 
        [
            "id" => 8657, 
            "address_type" => "customer", 
            "customer_id" => 1, 
            "carrier_id" => null, 
            "cart_id" => null, 
            "order_id" => null, 
            "first_name" => "Demo", 
            "last_name" => "User", 
            "gender" => null, 
            "company_name" => null, 
            "address1" => "asdfasdf", 
            "address2" => null, 
            "postcode" => "asdf", 
            "area" => "325", 
            "city" => "4583", 
            "state" => "573", 
            "country" => "OM", 
            "email" => null, 
            "phone" => "+966 57 291 8538", 
            "vat_id" => null, 
            "default_address" => 0, 
            "additional" => null, 
            "created_at" => "2024-10-08T15:24:34.000000Z", 
            "updated_at" => "2024-10-08T15:24:34.000000Z" 
        ] 
    ]; 

    return $context;
}

function addressesCreate() {
    $context['authUser'] = auth();
    $context['menu'] = menu();

    return $context;
}

function addressesEdit() {
    $context['authUser'] = auth();
    $context['menu'] = menu();
    $context['address'] =  
    [
        "id" => 3152, 
        "address_type" => "customer", 
        "customer_id" => 1, 
        "carrier_id" => null, 
        "cart_id" => null, 
        "order_id" => null, 
        "first_name" => "Demo", 
        "last_name" => "User", 
        "gender" => null, 
        "company_name" => null, 
        "address1" => "dafc", 
        "address2" => "sfcb", 
        "postcode" => "12345", 
        "area" => "210", 
        "city" => "Mahda", 
        "state" => "580", 
        "country" => "SA", 
        "email" => null, 
        "phone" => "+966 57 291 8538", 
        "vat_id" => null, 
        "default_address" => 0, 
        "additional" => null, 
        "created_at" => "2023-11-05T15:12:20.000000Z", 
        "updated_at" => "2024-11-03T11:58:23.000000Z" 

    ]; 

    return $context;
}

function cart() {
    $context['authUser'] = auth();
    $context['cart'] = [
        "id" => 5855, 
        "customer_email" => "demo@twsaa.com", 
        "customer_first_name" => "Demo", 
        "customer_last_name" => "User", 
        "shipping_method" => null, 
        "coupon_code" => null, 
        "prize" => null, 
        "is_gift" => 0, 
        "use_wallet" => 0, 
        "items_count" => 5, 
        "items_qty" => "5", 
        "exchange_rate" => null, 
        "global_currency_code" => "SAR", 
        "base_currency_code" => "SAR", 
        "channel_currency_code" => "SAR", 
        "cart_currency_code" => "SAR", 
        "grand_total" => "659.4500", 
        "base_grand_total" => "659.4500", 
        "sub_total" => "601.3500", 
        "base_sub_total" => "601.3500", 
        "tax_total" => "35.1000", 
        "base_tax_total" => "35.1000", 
        "discount_amount" => "0.0000", 
        "base_discount_amount" => "0.0000", 
        "wallet_discount" => "0.0000", 
        "base_wallet_discount" => "0.0000", 
        "total_shipping_amount" => "23.0000", 
        "base_shipping_amount" => "23.0000", 
        "cod_amount" => "0.0000", 
        "base_cod_amount" => "0.0000", 
        "total_weight" => "0.0000", 
        "checkout_method" => null, 
        "is_guest" => 0, 
        "is_active" => 1, 
        "conversion_time" => null, 
        "customer_id" => 1, 
        "channel_id" => 23, 
        "created_at" => "2024-11-11T08:38:19.000000Z", 
        "updated_at" => "2024-11-18T11:42:22.000000Z", 
        "applied_cart_rule_ids" => "", 
        "items" => [
              [
                 "id" => 8198, 
                 "quantity" => 1, 
                 "sku" => "K6P8ATO", 
                 "type" => "virtual", 
                 "name" => "digital", 
                 "coupon_code" => null, 
                 "prize" => null, 
                 "weight" => "0.0000", 
                 "total_weight" => "0.0000", 
                 "base_total_weight" => "0.0000", 
                 "price" => "5.0000", 
                 "base_price" => "5.0000", 
                 "formated_price" => "5 SAR", 
                 "total" => "5.0000", 
                 "base_total" => "5.0000", 
                 "tax_percent" => "15.0000", 
                 "tax_amount" => "0.7500", 
                 "base_tax_amount" => "0.7500", 
                 "discount_percent" => "0.0000", 
                 "discount_amount" => "0.0000", 
                 "base_discount_amount" => "0.0000", 
                 "additional" => [
                    "_token" => "49KhTfh7mslpUD73L1aJnUnJ6e9aluflxLv7Xekw", 
                    "product_id" => 56219, 
                    "quantity" => "1" 
                 ], 
                 "parent_id" => null, 
                 "product_id" => 56219, 
                 "cart_id" => 5855, 
                 "tax_category_id" => null, 
                 "created_at" => "2024-11-18T09:12:51.000000Z", 
                 "updated_at" => "2024-11-18T11:42:22.000000Z", 
                 "custom_price" => null, 
                 "applied_cart_rule_ids" => "", 
                 "show_quantity_box" => true,
                 "item_have_qty" => true,
                 "children" => [
                    ], 
                 "product" => [
                        "id" => 56219, 
                        "parent_id" => null, 
                        "attribute_family_id" => 21, 
                        "sku" => "K6P8ATO", 
                        "type" => "virtual", 
                        "from" => null, 
                        "pin" => 0, 
                        "created_at" => "2024-11-10T06:30:59.000000Z", 
                        "updated_at" => "2024-11-10T06:30:59.000000Z", 
                        "status" => 1, 
                        "short_description" => null, 
                        "description" => null, 
                        "name" => "digital", 
                        "url_key" => "k6p8ato", 
                        "tax_category_id" => null, 
                        "new" => 0, 
                        "featured" => 0, 
                        "visible_individually" => 1, 
                        "color" => null, 
                        "text" => null, 
                        "image" => null, 
                        "size" => null, 
                        "brand" => null, 
                        "guest_checkout" => 0, 
                        "brand_name" => null, 
                        "barcode" => null, 
                        "unlimited_quantity" => 0, 
                        "require_shipping" => 0, 
                        "is_vat" => 1, 
                        "notify_quantity" => null, 
                        "delivery_time" => null, 
                        "subtitle" => null, 
                        "promotion_title" => null, 
                        "meta_title" => null, 
                        "meta_keywords" => null, 
                        "meta_description" => null, 
                        "price" => "5.0000", 
                        "cost" => null, 
                        "special_price" => null, 
                        "special_price_from" => null, 
                        "special_price_to" => null, 
                        "width" => null, 
                        "height" => null, 
                        "depth" => null, 
                        "weight" => null, 
                        "attribute_family" => [
                            "id" => 21, 
                            "code" => "default", 
                            "name" => "Default", 
                            "status" => 0, 
                            "is_user_defined" => 1 
                        ],
                        "base_image_url" => "https://cdn.twsaa.com/product/56219/large-b5a93051-3cc1-4d62-8b7f-2cd7897b9581.jpg"
                    ] 
              ], 
              [
                                "id" => 8199, 
                                "quantity" => 1, 
                                "sku" => "OUU1RO7", 
                                "type" => "downloadable", 
                                "name" => "ebook", 
                                "coupon_code" => null,
                                "type" => "downloadable",
                                "prize" => null, 
                                "weight" => "0.0000", 
                                "total_weight" => "0.0000", 
                                "base_total_weight" => "0.0000", 
                                "price" => "1.0000", 
                                "base_price" => "1.0000", 
                                "formated_price" => "1 SAR", 
                                "total" => "1.0000", 
                                "base_total" => "1.0000", 
                                "tax_percent" => "15.0000", 
                                "tax_amount" => "0.1500", 
                                "base_tax_amount" => "0.1500", 
                                "discount_percent" => "0.0000", 
                                "discount_amount" => "0.0000", 
                                "base_discount_amount" => "0.0000", 
                                "additional" => [
                                   "_token" => "49KhTfh7mslpUD73L1aJnUnJ6e9aluflxLv7Xekw", 
                                   "product_id" => 56118, 
                                   "quantity" => "1", 
                                   "links" => [
                                      145, 
                                      146 
                                   ], 
                                   "attributes" => [
                                         [
                                            "attribute_name" => "Downloads", 
                                            "option_id" => 145, 
                                            "option_label" => "asdf" 
                                         ], 
                                         [
                                               "attribute_name" => "Downloads", 
                                               "option_id" => 146, 
                                               "option_label" => "previousLinkIds" 
                                            ] 
                                      ] 
                                ], 
                                "parent_id" => null, 
                                "product_id" => 56118, 
                                "cart_id" => 5855, 
                                "tax_category_id" => null, 
                                "created_at" => "2024-11-18T09:12:54.000000Z", 
                                "updated_at" => "2024-11-18T11:42:22.000000Z", 
                                "custom_price" => null, 
                                "applied_cart_rule_ids" => "", 
                                "show_quantity_box" => true,
                                "item_have_qty" => true,
                                "children" => [
                                               ], 
                                "product" => [
                                                     "id" => 56118, 
                                                     "parent_id" => null, 
                                                     "attribute_family_id" => 21, 
                                                     "sku" => "OUU1RO7", 
                                                     "type" => "downloadable", 
                                                     "from" => null, 
                                                     "pin" => 0, 
                                                     "created_at" => "2024-09-12T11:10:05.000000Z", 
                                                     "updated_at" => "2024-09-12T11:10:05.000000Z", 
                                                     "status" => 1, 
                                                     "short_description" => null, 
                                                     "description" => null, 
                                                     "name" => "ebook", 
                                                     "url_key" => "ouu1ro7", 
                                                     "tax_category_id" => null, 
                                                     "new" => 0, 
                                                     "featured" => 0, 
                                                     "visible_individually" => 1, 
                                                     "color" => null, 
                                                     "text" => null, 
                                                     "image" => null, 
                                                     "size" => null, 
                                                     "brand" => null, 
                                                     "guest_checkout" => 0, 
                                                     "brand_name" => "12", 
                                                     "barcode" => null, 
                                                     "unlimited_quantity" => 0, 
                                                     "require_shipping" => 0, 
                                                     "is_vat" => 1, 
                                                     "notify_quantity" => null, 
                                                     "delivery_time" => null, 
                                                     "subtitle" => null, 
                                                     "promotion_title" => null, 
                                                     "meta_title" => null, 
                                                     "meta_keywords" => null, 
                                                     "meta_description" => null, 
                                                     "price" => "1.0000", 
                                                     "cost" => null, 
                                                     "special_price" => null, 
                                                     "special_price_from" => null, 
                                                     "special_price_to" => null, 
                                                     "width" => null, 
                                                     "height" => null, 
                                                     "depth" => null, 
                                                     "weight" => null, 
                                                     "attribute_family" => [
                                                        "id" => 21, 
                                                        "code" => "default", 
                                                        "name" => "Default", 
                                                        "status" => 0, 
                                                        "is_user_defined" => 1 
                                                     ],
                                                     "base_image_url" => "https://cdn.twsaa.com/product/56118/medium-68fc0441-483a-4167-a993-22d76d82b494.jpg"

                                                  ] 
                             ], 
              [
                                                           "id" => 8200, 
                                                           "quantity" => 1, 
                                                           "sku" => "customizable", 
                                                           "type" => "customizable", 
                                                           "name" => "customizable product", 
                                                           "coupon_code" => null, 
                                                           "prize" => null, 
                                                           "weight" => "0.0000", 
                                                           "total_weight" => "0.0000", 
                                                           "base_total_weight" => "0.0000", 
                                                           "price" => "222.0000", 
                                                           "base_price" => "222.0000", 
                                                           "formated_price" => "222 SAR", 
                                                           "total" => "222.0000", 
                                                           "base_total" => "222.0000", 
                                                           "tax_percent" => "15.0000", 
                                                           "tax_amount" => "33.3000", 
                                                           "base_tax_amount" => "33.3000", 
                                                           "discount_percent" => "0.0000", 
                                                           "discount_amount" => "0.0000", 
                                                           "base_discount_amount" => "0.0000", 
                                                           "additional" => [
                                                              "_token" => "49KhTfh7mslpUD73L1aJnUnJ6e9aluflxLv7Xekw", 
                                                              "product_id" => 55682, 
                                                              "quantity" => "1", 
                                                              "options" => [
                                                                 [
                                                                    "", 
                                                                    "", 
                                                                    "", 
                                                                    [
                                                                    ], 
                                                                    [
                                                                       ], 
                                                                    "", 
                                                                    "", 
                                                                    "" 
                                                                 ] 
                                                              ], 
                                                              "option_labels" => [
                                                                             [
                                                                                "a", 
                                                                                "b", 
                                                                                "c", 
                                                                                "d", 
                                                                                "e", 
                                                                                "f", 
                                                                                "g", 
                                                                                "h" 
                                                                             ] 
                                                                          ], 
                                                              "option_label_values" => [
                                                                                   [
                                                                                      [
                                                                                         "d1 (‏١ ر.س.‏ )", 
                                                                                         "d2 (‏٢ ر.س.‏ )" 
                                                                                      ], 
                                                                                      [
                                                                                            "e1 (‏١ ر.س.‏ )", 
                                                                                            "e2 (‏٢ ر.س.‏ )" 
                                                                                         ] 
                                                                                   ] 
                                                                                ], 
                                                              "quantities" => [
                                                                                               "1" 
                                                                                            ], 
                                                              "additiona_price" => [
                                                                                               ], 
                                                              "total_additional_price" => 0 
                                                           ], 
                                                           "parent_id" => null, 
                                                           "product_id" => 55682, 
                                                           "cart_id" => 5855, 
                                                           "tax_category_id" => null, 
                                                           "created_at" => "2024-11-18T09:13:00.000000Z", 
                                                           "updated_at" => "2024-11-18T11:42:22.000000Z", 
                                                           "custom_price" => null, 
                                                           "applied_cart_rule_ids" => "", 
                                                           "show_quantity_box" => true,
                                                           "item_have_qty" => true,
                                                           "children" => [
                                                                                                  ], 
                                                           "product" => [
                                                                                                        "id" => 55682, 
                                                                                                        "parent_id" => null, 
                                                                                                        "attribute_family_id" => 21, 
                                                                                                        "sku" => "customizable", 
                                                                                                        "type" => "customizable", 
                                                                                                        "from" => null, 
                                                                                                        "pin" => 0, 
                                                                                                        "created_at" => "2024-06-03T12:33:15.000000Z", 
                                                                                                        "updated_at" => "2024-06-03T12:33:15.000000Z", 
                                                                                                        "status" => 1, 
                                                                                                        "short_description" => null, 
                                                                                                        "description" => "This is testing Mobile", 
                                                                                                        "name" => "customizable product", 
                                                                                                        "url_key" => "customizable", 
                                                                                                        "tax_category_id" => null, 
                                                                                                        "new" => 0, 
                                                                                                        "featured" => 0, 
                                                                                                        "visible_individually" => 1, 
                                                                                                        "color" => null, 
                                                                                                        "text" => null, 
                                                                                                        "image" => null, 
                                                                                                        "size" => null, 
                                                                                                        "brand" => null, 
                                                                                                        "guest_checkout" => 0, 
                                                                                                        "brand_name" => "12", 
                                                                                                        "barcode" => null, 
                                                                                                        "unlimited_quantity" => 0, 
                                                                                                        "require_shipping" => 0, 
                                                                                                        "is_vat" => 1, 
                                                                                                        "notify_quantity" => null, 
                                                                                                        "delivery_time" => null, 
                                                                                                        "subtitle" => null, 
                                                                                                        "promotion_title" => null, 
                                                                                                        "meta_title" => null, 
                                                                                                        "meta_keywords" => null, 
                                                                                                        "meta_description" => null, 
                                                                                                        "price" => "222.0000", 
                                                                                                        "cost" => null, 
                                                                                                        "special_price" => null, 
                                                                                                        "special_price_from" => null, 
                                                                                                        "special_price_to" => null, 
                                                                                                        "width" => null, 
                                                                                                        "height" => null, 
                                                                                                        "depth" => null, 
                                                                                                        "weight" => null, 
                                                                                                        "attribute_family" => [
                                                                                                           "id" => 21, 
                                                                                                           "code" => "default", 
                                                                                                           "name" => "Default", 
                                                                                                           "status" => 0, 
                                                                                                           "is_user_defined" => 1 
                                                                                                        ],
                                                                                                        "base_image_url" => "https://cdn.twsaa.com/product/55682/medium-aa97d069-649f-41d3-bf95-a66addfc903c.jpg",
                                                                                                        "customizable" => [
                                                                                                            [
                                                                                                                  "id" => 157, 
                                                                                                                  "type" => "text", 
                                                                                                                  "sort" => "0", 
                                                                                                                  "required" => "off", 
                                                                                                                  "option_name" => "a", 
                                                                                                                  "description" => "aa", 
                                                                                                                  "associated_with_order_time" => null, 
                                                                                                                  "availability_duration" => null, 
                                                                                                                  "option_details_name" => null, 
                                                                                                                  "show_condition" => "on_condition", 
                                                                                                                  "condition_field_name" => null, 
                                                                                                                  "field_condition" => "=", 
                                                                                                                  "condition_field_value" => "0", 
                                                                                                                  "options" => null, 
                                                                                                                  "product_id" => 55682, 
                                                                                                                  "created_at" => "2024-06-03T13:04:12.000000Z", 
                                                                                                                  "updated_at" => "2024-07-02T11:46:57.000000Z" 
                                                                                                               ], 
                                                                                                            [
                                                                                                                     "id" => 158, 
                                                                                                                     "type" => "textarea", 
                                                                                                                     "sort" => "0", 
                                                                                                                     "required" => "off", 
                                                                                                                     "option_name" => "b", 
                                                                                                                     "description" => "bb", 
                                                                                                                     "associated_with_order_time" => null, 
                                                                                                                     "availability_duration" => null, 
                                                                                                                     "option_details_name" => null, 
                                                                                                                     "show_condition" => "on_condition", 
                                                                                                                     "condition_field_name" => null, 
                                                                                                                     "field_condition" => "=", 
                                                                                                                     "condition_field_value" => "0", 
                                                                                                                     "options" => null, 
                                                                                                                     "product_id" => 55682, 
                                                                                                                     "created_at" => "2024-06-03T13:04:12.000000Z", 
                                                                                                                     "updated_at" => "2024-07-02T11:46:57.000000Z" 
                                                                                                                  ], 
                                                                                                            [
                                                                                                                        "id" => 159, 
                                                                                                                        "type" => "number", 
                                                                                                                        "sort" => "0", 
                                                                                                                        "required" => "off", 
                                                                                                                        "option_name" => "c", 
                                                                                                                        "description" => "cc", 
                                                                                                                        "associated_with_order_time" => null, 
                                                                                                                        "availability_duration" => null, 
                                                                                                                        "option_details_name" => null, 
                                                                                                                        "show_condition" => "on_condition", 
                                                                                                                        "condition_field_name" => null, 
                                                                                                                        "field_condition" => "=", 
                                                                                                                        "condition_field_value" => "0", 
                                                                                                                        "options" => null, 
                                                                                                                        "product_id" => 55682, 
                                                                                                                        "created_at" => "2024-06-03T13:04:12.000000Z", 
                                                                                                                        "updated_at" => "2024-07-02T11:46:19.000000Z" 
                                                                                                                     ], 
                                                                                                            [
                                                                                                                           "id" => 160, 
                                                                                                                           "type" => "radio", 
                                                                                                                           "sort" => "0", 
                                                                                                                           "required" => "off", 
                                                                                                                           "option_name" => "d", 
                                                                                                                           "description" => "dd", 
                                                                                                                           "associated_with_order_time" => null, 
                                                                                                                           "availability_duration" => null, 
                                                                                                                           "option_details_name" => null, 
                                                                                                                           "show_condition" => "on_condition", 
                                                                                                                           "condition_field_name" => null, 
                                                                                                                           "field_condition" => "=", 
                                                                                                                           "condition_field_value" => "0", 
                                                                                                                           "options" => null, 
                                                                                                                           "product_id" => 55682, 
                                                                                                                           "created_at" => "2024-06-03T13:04:12.000000Z", 
                                                                                                                           "updated_at" => "2024-07-02T11:46:19.000000Z" 
                                                                                                                        ], 
                                                                                                            [
                                                                                                                              "id" => 161, 
                                                                                                                              "type" => "checkbox", 
                                                                                                                              "sort" => "0", 
                                                                                                                              "required" => "off", 
                                                                                                                              "option_name" => "e", 
                                                                                                                              "description" => "ee", 
                                                                                                                              "associated_with_order_time" => null, 
                                                                                                                              "availability_duration" => null, 
                                                                                                                              "option_details_name" => null, 
                                                                                                                              "show_condition" => "on_condition", 
                                                                                                                              "condition_field_name" => null, 
                                                                                                                              "field_condition" => "=", 
                                                                                                                              "condition_field_value" => "0", 
                                                                                                                              "options" => null, 
                                                                                                                              "product_id" => 55682, 
                                                                                                                              "created_at" => "2024-06-03T13:04:12.000000Z", 
                                                                                                                              "updated_at" => "2024-07-02T11:46:19.000000Z" 
                                                                                                                           ], 
                                                                                                            [
                                                                                                                                 "id" => 162, 
                                                                                                                                 "type" => "image", 
                                                                                                                                 "sort" => "0", 
                                                                                                                                 "required" => "off", 
                                                                                                                                 "option_name" => "f", 
                                                                                                                                 "description" => "", 
                                                                                                                                 "associated_with_order_time" => null, 
                                                                                                                                 "availability_duration" => null, 
                                                                                                                                 "option_details_name" => null, 
                                                                                                                                 "show_condition" => "on_condition", 
                                                                                                                                 "condition_field_name" => null, 
                                                                                                                                 "field_condition" => "=", 
                                                                                                                                 "condition_field_value" => "0", 
                                                                                                                                 "options" => null, 
                                                                                                                                 "product_id" => 55682, 
                                                                                                                                 "created_at" => "2024-06-03T13:04:13.000000Z", 
                                                                                                                                 "updated_at" => "2024-07-02T11:46:19.000000Z" 
                                                                                                                              ], 
                                                                                                            [
                                                                                                                                    "id" => 163, 
                                                                                                                                    "type" => "file", 
                                                                                                                                    "sort" => "0", 
                                                                                                                                    "required" => "off", 
                                                                                                                                    "option_name" => "g", 
                                                                                                                                    "description" => "gg", 
                                                                                                                                    "associated_with_order_time" => null, 
                                                                                                                                    "availability_duration" => null, 
                                                                                                                                    "option_details_name" => null, 
                                                                                                                                    "show_condition" => "on_condition", 
                                                                                                                                    "condition_field_name" => null, 
                                                                                                                                    "field_condition" => "=", 
                                                                                                                                    "condition_field_value" => "0", 
                                                                                                                                    "options" => null, 
                                                                                                                                    "product_id" => 55682, 
                                                                                                                                    "created_at" => "2024-06-03T13:04:13.000000Z", 
                                                                                                                                    "updated_at" => "2024-07-02T11:46:19.000000Z" 
                                                                                                                                 ], 
                                                                                                            [
                                                                                                                                       "id" => 164, 
                                                                                                                                       "type" => "color_picker", 
                                                                                                                                       "sort" => "0", 
                                                                                                                                       "required" => "off", 
                                                                                                                                       "option_name" => "h", 
                                                                                                                                       "description" => "hh", 
                                                                                                                                       "associated_with_order_time" => null, 
                                                                                                                                       "availability_duration" => null, 
                                                                                                                                       "option_details_name" => null, 
                                                                                                                                       "show_condition" => "on_condition", 
                                                                                                                                       "condition_field_name" => null, 
                                                                                                                                       "field_condition" => "=", 
                                                                                                                                       "condition_field_value" => "0", 
                                                                                                                                       "options" => null, 
                                                                                                                                       "product_id" => 55682, 
                                                                                                                                       "created_at" => "2024-06-03T13:04:13.000000Z", 
                                                                                                                                       "updated_at" => "2024-07-02T11:46:19.000000Z" 
                                                                                                                                    ] 
                                                                                                        ],                                                                                                         

                                                                                                    ] 
                                                        ], 
              [
                                                                                                              "id" => 8201, 
                                                                                                              "quantity" => 1, 
                                                                                                              "sku" => "2G663YZ", 
                                                                                                              "type" => "configurable", 
                                                                                                              "name" => "asdf asdf2", 
                                                                                                              "coupon_code" => null, 
                                                                                                              "prize" => null, 
                                                                                                              "weight" => "0.0000", 
                                                                                                              "total_weight" => "0.0000", 
                                                                                                              "base_total_weight" => "0.0000", 
                                                                                                              "price" => "6.0000", 
                                                                                                              "base_price" => "6.0000", 
                                                                                                              "formated_price" => "6 SAR", 
                                                                                                              "total" => "6.0000", 
                                                                                                              "base_total" => "6.0000", 
                                                                                                              "tax_percent" => "15.0000", 
                                                                                                              "tax_amount" => "0.9000", 
                                                                                                              "base_tax_amount" => "0.9000", 
                                                                                                              "discount_percent" => "0.0000", 
                                                                                                              "discount_amount" => "0.0000", 
                                                                                                              "base_discount_amount" => "0.0000", 
                                                                                                              "additional" => [
                                                                                                                 "is_buy_now" => "0", 
                                                                                                                 "_token" => "49KhTfh7mslpUD73L1aJnUnJ6e9aluflxLv7Xekw", 
                                                                                                                 "product_id" => "55668", 
                                                                                                                 "selected_configurable_option" => "55678", 
                                                                                                                 "super_attribute" => [
                                                                                                                    "4", 
                                                                                                                    "6", 
                                                                                                                    "6" 
                                                                                                                 ], 
                                                                                                                 "quantity" => "1" 
                                                                                                              ], 
                                                                                                              "parent_id" => null, 
                                                                                                              "product_id" => 55668, 
                                                                                                              "cart_id" => 5855, 
                                                                                                              "tax_category_id" => null, 
                                                                                                              "created_at" => "2024-11-18T09:13:16.000000Z", 
                                                                                                              "updated_at" => "2024-11-18T11:42:22.000000Z", 
                                                                                                              "custom_price" => null, 
                                                                                                              "applied_cart_rule_ids" => "", 
                                                                                                              "show_quantity_box" => true,
                                                                                                              "item_have_qty" => true,
                                                                                                              "children" => [
                                                                                                                       [
                                                                                                                          "id" => 8202, 
                                                                                                                          "quantity" => 0, 
                                                                                                                          "sku" => "JE8G231", 
                                                                                                                          "type" => "simple", 
                                                                                                                          "name" => "", 
                                                                                                                          "coupon_code" => null, 
                                                                                                                          "prize" => null, 
                                                                                                                          "weight" => "0.0000", 
                                                                                                                          "total_weight" => "0.0000", 
                                                                                                                          "base_total_weight" => "0.0000", 
                                                                                                                          "price" => "1.0000", 
                                                                                                                          "base_price" => "0.0000", 
                                                                                                                          "total" => "0.0000", 
                                                                                                                          "base_total" => "0.0000", 
                                                                                                                          "tax_percent" => "0.0000", 
                                                                                                                          "tax_amount" => "0.0000", 
                                                                                                                          "base_tax_amount" => "0.0000", 
                                                                                                                          "discount_percent" => "0.0000", 
                                                                                                                          "discount_amount" => "0.0000", 
                                                                                                                          "base_discount_amount" => "0.0000", 
                                                                                                                          "additional" => [
                                                                                                                             "product_id" => 55678, 
                                                                                                                             "parent_id" => 55668 
                                                                                                                          ], 
                                                                                                                          "parent_id" => 8201, 
                                                                                                                          "product_id" => 55678, 
                                                                                                                          "cart_id" => 5855, 
                                                                                                                          "tax_category_id" => null, 
                                                                                                                          "created_at" => "2024-11-18T09:13:17.000000Z", 
                                                                                                                          "updated_at" => "2024-11-18T09:13:17.000000Z", 
                                                                                                                          "custom_price" => null, 
                                                                                                                          "applied_cart_rule_ids" => null 
                                                                                                                       ] 
                                                                                                                    ], 
                                                                                                              "product" => [
                                                                                                                                "id" => 55668, 
                                                                                                                                "parent_id" => null, 
                                                                                                                                "attribute_family_id" => 21, 
                                                                                                                                "sku" => "2G663YZ", 
                                                                                                                                "type" => "configurable", 
                                                                                                                                "from" => null, 
                                                                                                                                "pin" => 0, 
                                                                                                                                "created_at" => "2024-05-08T12:58:59.000000Z", 
                                                                                                                                "updated_at" => "2024-05-08T12:58:59.000000Z", 
                                                                                                                                "status" => 1, 
                                                                                                                                "short_description" => null, 
                                                                                                                                "description" => "<p>محافظ نسائية على الموضة ، محفظة طويلة ثلاثية الطي ذات جودة عالية من جلد البولي يوريثان ، حامل بطاقات كلاتش للنساء ، حامل بطاقات</p><p><br></p>", 
                                                                                                                                "name" => "asdf asdf2", 
                                                                                                                                "url_key" => "2g663yz", 
                                                                                                                                "tax_category_id" => null, 
                                                                                                                                "new" => 0, 
                                                                                                                                "featured" => 0, 
                                                                                                                                "visible_individually" => 1, 
                                                                                                                                "color" => null, 
                                                                                                                                "text" => null, 
                                                                                                                                "image" => null, 
                                                                                                                                "size" => null, 
                                                                                                                                "brand" => null, 
                                                                                                                                "guest_checkout" => 0, 
                                                                                                                                "brand_name" => "12", 
                                                                                                                                "barcode" => null, 
                                                                                                                                "unlimited_quantity" => 0, 
                                                                                                                                "require_shipping" => 0, 
                                                                                                                                "is_vat" => 1, 
                                                                                                                                "notify_quantity" => null, 
                                                                                                                                "delivery_time" => null, 
                                                                                                                                "subtitle" => null, 
                                                                                                                                "promotion_title" => null, 
                                                                                                                                "meta_title" => null, 
                                                                                                                                "meta_keywords" => null, 
                                                                                                                                "meta_description" => null, 
                                                                                                                                "price" => "0.0000", 
                                                                                                                                "cost" => null, 
                                                                                                                                "special_price" => null, 
                                                                                                                                "special_price_from" => null, 
                                                                                                                                "special_price_to" => null, 
                                                                                                                                "width" => null, 
                                                                                                                                "height" => null, 
                                                                                                                                "depth" => null, 
                                                                                                                                "weight" => null, 
                                                                                                                                "show_quantity_box" => true,
                                                                                                                                "item_have_qty" => true,
                                                                                                                                "attribute_family" => [
                                                                                                                                   "id" => 21, 
                                                                                                                                   "code" => "default", 
                                                                                                                                   "name" => "Default", 
                                                                                                                                   "status" => 0, 
                                                                                                                                   "is_user_defined" => 1 
                                                                                                                                ],
                                                                                                                                "base_image_url" => "https://cdn.twsaa.com/product/55668/small-a16626c7-40a0-42f9-954f-5e1b25159fc1.png"

                                                                                                                             ], 
                                                                                                              "child" => [
                                                                                                                                      "id" => 8202, 
                                                                                                                                      "quantity" => 0, 
                                                                                                                                      "sku" => "JE8G231", 
                                                                                                                                      "type" => "simple", 
                                                                                                                                      "name" => "", 
                                                                                                                                      "coupon_code" => null, 
                                                                                                                                      "prize" => null, 
                                                                                                                                      "weight" => "0.0000", 
                                                                                                                                      "total_weight" => "0.0000", 
                                                                                                                                      "base_total_weight" => "0.0000", 
                                                                                                                                      "price" => "1.0000", 
                                                                                                                                      "base_price" => "0.0000", 
                                                                                                                                      "total" => "0.0000", 
                                                                                                                                      "base_total" => "0.0000", 
                                                                                                                                      "tax_percent" => "0.0000", 
                                                                                                                                      "tax_amount" => "0.0000", 
                                                                                                                                      "base_tax_amount" => "0.0000", 
                                                                                                                                      "discount_percent" => "0.0000", 
                                                                                                                                      "discount_amount" => "0.0000", 
                                                                                                                                      "base_discount_amount" => "0.0000", 
                                                                                                                                      "additional" => [
                                                                                                                                         "product_id" => 55678, 
                                                                                                                                         "parent_id" => 55668 
                                                                                                                                      ], 
                                                                                                                                      "parent_id" => 8201, 
                                                                                                                                      "product_id" => 55678, 
                                                                                                                                      "cart_id" => 5855, 
                                                                                                                                      "tax_category_id" => null, 
                                                                                                                                      "created_at" => "2024-11-18T09:13:17.000000Z", 
                                                                                                                                      "updated_at" => "2024-11-18T09:13:17.000000Z", 
                                                                                                                                      "custom_price" => null, 
                                                                                                                                      "applied_cart_rule_ids" => null, 
                                                                                                                                      "product" => [
                                                                                                                                            "id" => 55678, 
                                                                                                                                            "parent_id" => 55668, 
                                                                                                                                            "attribute_family_id" => 21, 
                                                                                                                                            "sku" => "JE8G231", 
                                                                                                                                            "type" => "simple", 
                                                                                                                                            "from" => null, 
                                                                                                                                            "pin" => 0, 
                                                                                                                                            "created_at" => "2024-05-12T08:24:35.000000Z", 
                                                                                                                                            "updated_at" => "2024-05-12T08:24:35.000000Z", 
                                                                                                                                            "status" => 1, 
                                                                                                                                            "short_description" => null, 
                                                                                                                                            "description" => null, 
                                                                                                                                            "name" => "", 
                                                                                                                                            "url_key" => null, 
                                                                                                                                            "tax_category_id" => null, 
                                                                                                                                            "new" => null, 
                                                                                                                                            "featured" => null, 
                                                                                                                                            "visible_individually" => null, 
                                                                                                                                            "color" => 0, 
                                                                                                                                            "text" => "text", 
                                                                                                                                            "image" => "image", 
                                                                                                                                            "size" => null, 
                                                                                                                                            "brand" => null, 
                                                                                                                                            "guest_checkout" => null, 
                                                                                                                                            "brand_name" => null, 
                                                                                                                                            "barcode" => "", 
                                                                                                                                            "unlimited_quantity" => 0, 
                                                                                                                                            "require_shipping" => null, 
                                                                                                                                            "is_vat" => null, 
                                                                                                                                            "notify_quantity" => "0", 
                                                                                                                                            "delivery_time" => null, 
                                                                                                                                            "subtitle" => null, 
                                                                                                                                            "promotion_title" => null, 
                                                                                                                                            "meta_title" => null, 
                                                                                                                                            "meta_keywords" => null, 
                                                                                                                                            "meta_description" => null, 
                                                                                                                                            "price" => "6.0000", 
                                                                                                                                            "cost" => "0.0000", 
                                                                                                                                            "special_price" => "0.0000", 
                                                                                                                                            "special_price_from" => null, 
                                                                                                                                            "special_price_to" => null, 
                                                                                                                                            "width" => null, 
                                                                                                                                            "height" => null, 
                                                                                                                                            "depth" => null, 
                                                                                                                                            "weight" => "0", 
                                                                                                                                            "attribute_family" => [
                                                                                                                                               "id" => 21, 
                                                                                                                                               "code" => "default", 
                                                                                                                                               "name" => "Default", 
                                                                                                                                               "status" => 0, 
                                                                                                                                               "is_user_defined" => 1 
                                                                                                                                            ],
                                                                                                                                            "base_image_url" => "https://cdn.twsaa.com/product/56116/medium-0592b342-84cb-44f6-8d29-1328e332c9fd.png",
                                                                                                                                            "child_product_string" => "sizes | m colors | red images | 2"
                                                                                                                                         ] 
                                                                                                                                   ] 
                                                                                                           ], 
              [
                                                                                                                                                  "id" => 8203, 
                                                                                                                                                  "quantity" => 1, 
                                                                                                                                                  "sku" => "N2-4-5-3", 
                                                                                                                                                  "type" => "simple", 
                                                                                                                                                  "name" => "ثلاجة الجمال سباركلنق لافندر 4 لتر", 
                                                                                                                                                  "coupon_code" => null, 
                                                                                                                                                  "prize" => null, 
                                                                                                                                                  "weight" => "0.0000", 
                                                                                                                                                  "total_weight" => "0.0000", 
                                                                                                                                                  "base_total_weight" => "0.0000", 
                                                                                                                                                  "price" => "367.3500", 
                                                                                                                                                  "base_price" => "367.3500", 
                                                                                                                                                  "formated_price" => "367.35 SAR", 
                                                                                                                                                  "total" => "367.3500", 
                                                                                                                                                  "base_total" => "367.3500", 
                                                                                                                                                  "tax_percent" => "0.0000", 
                                                                                                                                                  "tax_amount" => "0.0000", 
                                                                                                                                                  "base_tax_amount" => "0.0000", 
                                                                                                                                                  "discount_percent" => "0.0000", 
                                                                                                                                                  "discount_amount" => "0.0000", 
                                                                                                                                                  "base_discount_amount" => "0.0000", 
                                                                                                                                                  "additional" => [
                                                                                                                                                     "is_buy_now" => "0", 
                                                                                                                                                     "_token" => "49KhTfh7mslpUD73L1aJnUnJ6e9aluflxLv7Xekw", 
                                                                                                                                                     "product_id" => 56116, 
                                                                                                                                                     "quantity" => "1" 
                                                                                                                                                  ], 
                                                                                                                                                  "parent_id" => null, 
                                                                                                                                                  "product_id" => 56116, 
                                                                                                                                                  "cart_id" => 5855, 
                                                                                                                                                  "tax_category_id" => null, 
                                                                                                                                                  "created_at" => "2024-11-18T09:13:33.000000Z", 
                                                                                                                                                  "updated_at" => "2024-11-18T11:42:22.000000Z", 
                                                                                                                                                  "custom_price" => null, 
                                                                                                                                                  "applied_cart_rule_ids" => "", 
                                                                                                                                                  "show_quantity_box" => true,
                                                                                                                                                  "item_have_qty" => true,
                                                                                                                                                  "children" => [
                                                                                                                                                     ], 
                                                                                                                                                  "product" => [
                                                                                                                                                           "id" => 56116, 
                                                                                                                                                           "parent_id" => null, 
                                                                                                                                                           "attribute_family_id" => 21, 
                                                                                                                                                           "sku" => "N2-4-5-3", 
                                                                                                                                                           "type" => "simple", 
                                                                                                                                                           "from" => "m5azn-123678", 
                                                                                                                                                           "pin" => 1, 
                                                                                                                                                           "created_at" => "2024-08-21T13:41:44.000000Z", 
                                                                                                                                                           "updated_at" => "2024-10-14T11:29:50.000000Z", 
                                                                                                                                                           "status" => 1, 
                                                                                                                                                           "short_description" => " ", 
                                                                                                                                                           "description" => " ", 
                                                                                                                                                           "name" => "ثلاجة الجمال سباركلنق لافندر 4 لتر", 
                                                                                                                                                           "url_key" => "n2-4-5-3", 
                                                                                                                                                           "tax_category_id" => null, 
                                                                                                                                                           "new" => 0, 
                                                                                                                                                           "featured" => 0, 
                                                                                                                                                           "visible_individually" => 1, 
                                                                                                                                                           "color" => null, 
                                                                                                                                                           "text" => null, 
                                                                                                                                                           "image" => null, 
                                                                                                                                                           "size" => null, 
                                                                                                                                                           "brand" => null, 
                                                                                                                                                           "guest_checkout" => 0, 
                                                                                                                                                           "brand_name" => "12", 
                                                                                                                                                           "barcode" => null, 
                                                                                                                                                           "unlimited_quantity" => 0, 
                                                                                                                                                           "require_shipping" => 0, 
                                                                                                                                                           "is_vat" => 0, 
                                                                                                                                                           "notify_quantity" => null, 
                                                                                                                                                           "delivery_time" => null, 
                                                                                                                                                           "subtitle" => null, 
                                                                                                                                                           "promotion_title" => null, 
                                                                                                                                                           "meta_title" => "ثلاجة الجمال سباركلنق لافندر 4 لتر", 
                                                                                                                                                           "meta_keywords" => null, 
                                                                                                                                                           "meta_description" => "<p>حافظي على منتجاتك المفضلة للعناية بجمال بشرتك مع ثلاجة الجمال الحجم الكلاسيكي الأنيق لوضعه أينما رغبت في غرفتك&nbsp;</p>
     
     <p>- أبعاد الثلاجة: العرض: 24 سم، الطول: 31.8سم، القطر: 32.2 سم
     - رف واحد يفصل بين حجرتين تخزين رئيسية
     - متوفرة بخاصية التبريد حتى 5 درجات مئوية&nbsp;
     - متوفرة بخاصية التدفئة &nbsp;حتى 50 درجة مئوية&nbsp;
     - درج خاص في باب الثلاجة
     - محول DC5V 2A &nbsp;
     - محول 100-240 فولت&nbsp;
     - اللون: سباركلينج لافندر</p>
     
     <p>- ضعي قابس الكهرباء في في تيار 110 فولت أو 220 فولت ودعيها تعمل بشكل مستمر.
     - بإمكانك تشغيل الثلاجة عبر أي محول USB بقوة 2 مل أمبير مما يجعلها تعمل داخل السيارة أو على بطاريات الطاقة (ننصح ببطارية طاقة تفوق 1000مل أمبير)</p>
     
     <p>التحذيرات والاحتياطات:
     - قومي بتنظيف الثلاجة وتهويتها بمنشفة بشكل مستمر لمنع تشكل قطرات الماء داخلها.
     - دعي مسافة فراغ 20سم بين الثلاجة والحائط.</p>
     
     <p>&nbsp;</p>
     
     <p>- محول كهربائي 220-110 فولت&nbsp;
     - محول DC5V 2A &nbsp;
     - قوة 5 فولت *2 مل أمبير
     - سلك كهربائي USB
     -ستيكرات زينة</p>", 
                                                                                                                                                           "price" => "367.3500", 
                                                                                                                                                           "cost" => "216.0900", 
                                                                                                                                                           "special_price" => null, 
                                                                                                                                                           "special_price_from" => null, 
                                                                                                                                                           "special_price_to" => null, 
                                                                                                                                                           "width" => null, 
                                                                                                                                                           "height" => null, 
                                                                                                                                                           "depth" => null, 
                                                                                                                                                           "weight" => null, 
                                                                                                                                                           "attribute_family" => [
                                                                                                                                                              "id" => 21, 
                                                                                                                                                              "code" => "default", 
                                                                                                                                                              "name" => "Default", 
                                                                                                                                                              "status" => 0, 
                                                                                                                                                              "is_user_defined" => 1 
                                                                                                                                                           ],
                                                                                                                                                           "base_image_url" => "https://cdn.twsaa.com/product/56219/large-b5a93051-3cc1-4d62-8b7f-2cd7897b9581.jpg"

                                                                                                                                                        ] 
                                                                                                                                               ] 
           ] 
    ];
    return $context;
}

function reviews() {
    $context['authUser'] = auth();
    $context['menu'] = menu();
    $context['reviews'] = [
        [
            "id" => 224, 
            "reply" => "", 
            "rating" => 4, 
            "comment" => "asdf", 
            "status" => "1", 
            "type" => "product", 
            "created_at" => "2024-10-30T14:02:29.000000Z", 
            "updated_at" => "2024-10-30T14:02:29.000000Z", 
            "product_id" => 56116, 
            "order_id" => null, 
            "customer_id" => 1, 
            "name" => "Demo User", 
            "product" => [
                "id" => 56116, 
                "parent_id" => null, 
                "attribute_family_id" => 21, 
                "sku" => "N2-4-5-3", 
                "type" => "simple", 
                "from" => "m5azn-123678", 
                "pin" => 1, 
                "created_at" => "2024-08-21T13:41:44.000000Z", 
                "updated_at" => "2024-10-14T11:29:50.000000Z", 
                "short_description" => " ", 
                "description" => "", 
                "name" => "ثلاجة الجمال سباركلنق لافندر 4 لتر", 
                "url_key" => "n2-4-5-3", 
                "tax_category_id" => null, 
                "new" => 0, 
                "featured" => 0, 
                "visible_individually" => 1, 
                "status" => 1, 
                "color" => null, 
                "text" => null, 
                "image" => null, 
                "size" => null, 
                "brand" => null, 
                "guest_checkout" => 0, 
                "brand_name" => "12", 
                "barcode" => null, 
                "unlimited_quantity" => 0, 
                "require_shipping" => 0, 
                "is_vat" => 0, 
                "notify_quantity" => null, 
                "delivery_time" => null, 
                "subtitle" => null, 
                "promotion_title" => null, 
                "meta_title" => "", 
                "meta_keywords" => null, 
                "meta_description" => "", 
                "price" => "367.3500", 
                "cost" => "216.0900", 
                "special_price" => null, 
                "special_price_from" => null, 
                "special_price_to" => null, 
                "width" => null, 
                "height" => null, 
                "depth" => null, 
                "weight" => null, 
                "base_image_url" => 'https://cdn.twsaa.com/product/56116/small-0592b342-84cb-44f6-8d29-1328e332c9fd.png',
                "attribute_family" => [
                    "id" => 21, 
                    "code" => "default", 
                    "name" => "Default", 
                    "status" => 0, 
                    "is_user_defined" => 1 
                ] 
            ] 
        ], 
        [
            "id" => 229, 
            "reply" => "", 
            "rating" => 5, 
            "comment" => "asdf", 
            "status" => "1", 
            "type" => "product", 
            "created_at" => "2024-11-04T08:05:09.000000Z", 
            "updated_at" => "2024-11-04T08:05:09.000000Z", 
            "product_id" => 56116, 
            "order_id" => 1693, 
            "customer_id" => 1, 
            "name" => "Demo User", 
            "product" => [
                "id" => 56116, 
                "parent_id" => null, 
                "attribute_family_id" => 21, 
                "sku" => "N2-4-5-3", 
                "type" => "simple", 
                "from" => "m5azn-123678", 
                "pin" => 1, 
                "created_at" => "2024-08-21T13:41:44.000000Z", 
                "updated_at" => "2024-10-14T11:29:50.000000Z", 
                "short_description" => " ", 
                "description" => "", 
                "name" => "ثلاجة الجمال سباركلنق لافندر 4 لتر", 
                "url_key" => "n2-4-5-3", 
                "tax_category_id" => null, 
                "new" => 0, 
                "featured" => 0, 
                "visible_individually" => 1, 
                "status" => 1, 
                "color" => null, 
                "text" => null, 
                "image" => null, 
                "size" => null, 
                "brand" => null, 
                "guest_checkout" => 0, 
                "brand_name" => "12", 
                "barcode" => null, 
                "unlimited_quantity" => 0, 
                "require_shipping" => 0, 
                "is_vat" => 0, 
                "notify_quantity" => null, 
                "delivery_time" => null, 
                "subtitle" => null, 
                "promotion_title" => null, 
                "meta_title" => "", 
                "meta_keywords" => null, 
                "meta_description" => "", 
                "price" => "367.3500", 
                "cost" => "216.0900", 
                "special_price" => null, 
                "special_price_from" => null, 
                "special_price_to" => null, 
                "width" => null, 
                "height" => null, 
                "depth" => null, 
                "weight" => null, 
                "base_image_url" => 'https://cdn.twsaa.com/product/56116/small-0592b342-84cb-44f6-8d29-1328e332c9fd.png',
                "attribute_family" => [
                    "id" => 21, 
                    "code" => "default", 
                    "name" => "Default", 
                    "status" => 0, 
                    "is_user_defined" => 1 
                ] 
            ] 
        ] 
    ];

    return $context;
}

function wishlist() {
    $context['authUser'] = auth();
    $context['menu'] = menu();
    $context['items'] =  [
        [
            "id" => 846, 
            "channel_id" => 23, 
            "product_id" => 55683, 
            "customer_id" => 1, 
            "item_options" => null, 
            "moved_to_cart" => null, 
            "shared" => null, 
            "time_of_moving" => null, 
            "created_at" => "2024-10-30T13:48:23.000000Z", 
            "updated_at" => "2024-10-30T13:48:23.000000Z", 
            "additional" => null ,
            "product" => [
                "name" => "Product 1",
                "base_image_url" => "https://cdn.twsaa.com/product/55683/small-cfa4c806-7949-4a3b-838d-d2b43d5f1c72.png",
                "average_rating" => "4"
            ]
        ], 
        [
            "id" => 850, 
            "channel_id" => 23, 
            "product_id" => 55668, 
            "customer_id" => 1, 
            "item_options" => null, 
            "moved_to_cart" => null, 
            "shared" => null, 
            "time_of_moving" => null, 
            "created_at" => "2024-11-10T06:42:31.000000Z", 
            "updated_at" => "2024-11-10T06:42:31.000000Z", 
            "additional" => null,
            "product" => [
                "name" => "Product 2",
                "base_image_url" => "https://cdn.twsaa.com/product/55683/small-cfa4c806-7949-4a3b-838d-d2b43d5f1c72.png",
                "average_rating" => "5"
            ]
        ]    
    ];

    return $context;
}

function wallet() {
    $context['authUser'] = auth();
    $context['menu'] = menu();
    $context['adminCustomer'] =  [
        "id" => 241, 
        "points" => "3500", 
        "wallet" => "111.26", 
        "affiliate_id" => null, 
        "customer_group_id" => 62, 
        "customer_id" => 1, 
        "is_delete" => 0, 
        "created_at" => "2023-11-07T14:03:53.000000Z", 
        "updated_at" => "2024-07-03T13:15:01.000000Z" 
    ];

    return $context;
}

function orderView() {
    $context['authUser'] = auth();
    $context['menu'] = menu();
    $context['order'] = [
        "id" => 1696, 
        "channel_id" => 23, 
        "channel_name" => "LAMHA", 
        "customer_id" => 1, 
        "status" => "processed", 
        "status_label" => "Processed", 
        "rating" => 0, 
        "paid" => 0, 
        "dispatched" => 0, 
        "cancelled" => 0, 
        "return" => 0, 
        "refunded" => 0, 
        "customer_email" => "demo@twsaa.com", 
        "customer_first_name" => "Demo", 
        "customer_last_name" => "User", 
        "customer_company_name" => null, 
        "customer_vat_id" => null, 
        "shipping_method" => null, 
        "shipping_title" => null, 
        "shipping_description" => null, 
        "coupon_code" => null, 
        "total_item_count" => 1, 
        "total_qty_ordered" => 1, 
        "weight_ordered" => "0.00", 
        "base_currency_code" => "SAR", 
        "base_cost" => "0.00", 
        "channel_currency_code" => "SAR", 
        "order_currency_code" => "SAR", 
        "grand_total" => "1.20", 
        "base_grand_total" => "1.20", 
        "grand_total_invoiced" => "0.00", 
        "base_grand_total_invoiced" => "0.00", 
        "grand_total_refunded" => "0.00", 
        "base_grand_total_refunded" => "0.00", 
        "sub_total" => "1.00", 
        "base_sub_total" => "1.00", 
        "sub_total_invoiced" => "0.00", 
        "base_sub_total_invoiced" => "0.00", 
        "sub_total_refunded" => "0.00", 
        "base_sub_total_refunded" => "0.00", 
        "discount_percent" => "0.00", 
        "discount_amount" => "0.00", 
        "base_discount_amount" => "0.00", 
        "wallet_discount" => "0.00", 
        "base_wallet_discount" => "0.00", 
        "discount_invoiced" => "0.00", 
        "base_discount_invoiced" => "0.00", 
        "discount_refunded" => "0.00", 
        "base_discount_refunded" => "0.00", 
        "tax_amount" => "0.20", 
        "base_tax_amount" => "0.20", 
        "tax_amount_invoiced" => "0.00", 
        "base_tax_amount_invoiced" => "0.00", 
        "tax_amount_refunded" => "0.00", 
        "base_tax_amount_refunded" => "0.00", 
        "base_cod_amount" => "0.00", 
        "cod_amount" => "0.00", 
        "shipping_amount" => "0.00", 
        "base_shipping_amount" => "0.00", 
        "shipping_invoiced" => "0.00", 
        "base_shipping_invoiced" => "0.00", 
        "cod_invoiced" => "0.00", 
        "base_cod_invoiced" => "0.00", 
        "shipping_refunded" => "0.00", 
        "base_shipping_refunded" => "0.00", 
        "customer_type" => "Webkul\Customer\Models\Customer", 
        "channel_type" => "Webkul\SAASCustomizer\Models\Core\Channel", 
        "is_gift" => 0, 
        "is_guest" => 0, 
        "new_order" => 0, 
        "increment_id" => 1696, 
        "created_at" => "2024-11-03T12:05:16.000000Z", 
        "updated_at" => "2024-11-03T15:03:50.000000Z", 
        "cart_id" => 5841, 
        "applied_cart_rule_ids" => "", 
        "shipping_discount_amount" => "0.00", 
        "base_shipping_discount_amount" => "0.00", 
        "deleted_at" => null,
        "payment_method_name" => "Money Transfer",
        "items" => [
            [
                "id" => 2411, 
                "sku" => "OUU1RO7", 
                "type" => "downloadable", 
                "name" => "ebook", 
                "coupon_code" => null, 
                "weight" => "0.0000", 
                "total_weight" => "0.0000", 
                "qty_ordered" => 1, 
                "qty_shipped" => 0, 
                "qty_invoiced" => 0, 
                "qty_canceled" => 0, 
                "qty_refunded" => 0, 
                "base_cost" => "0.0000", 
                "price" => "1.0000", 
                "base_price" => "1.0000", 
                "total" => "1.0000", 
                "base_total" => "1.0000", 
                "total_invoiced" => "0.0000", 
                "base_total_invoiced" => "0.0000", 
                "amount_refunded" => "0.0000", 
                "base_amount_refunded" => "0.0000", 
                "discount_percent" => "0.0000", 
                "discount_amount" => "0.0000", 
                "base_discount_amount" => "0.0000", 
                "discount_invoiced" => "0.0000", 
                "base_discount_invoiced" => "0.0000", 
                "discount_refunded" => "0.0000", 
                "base_discount_refunded" => "0.0000", 
                "tax_percent" => "20.0000", 
                "tax_amount" => "0.2000", 
                "base_tax_amount" => "0.2000", 
                "tax_amount_invoiced" => "0.0000", 
                "base_tax_amount_invoiced" => "0.0000", 
                "tax_amount_refunded" => "0.0000", 
                "base_tax_amount_refunded" => "0.0000", 
                "product_id" => 56118, 
                "product_type" => "Webkul\SAASCustomizer\Models\Product\Product", 
                "order_id" => 1696, 
                "parent_id" => null, 
                "additional" => [
                    "is_buy_now" => "0", 
                    "_token" => "cNMCzm6Njhkebuwb2kmxJfVfSojfF8ZWQBGQZDqM", 
                    "product_id" => 56118, 
                    "quantity" => 2, 
                    "links" => [
                    145, 
                    146 
                    ], 
                    "attributes" => [
                        [
                            "attribute_name" => "Downloads", 
                            "option_id" => 145, 
                            "option_label" => "asdf" 
                        ], 
                        [
                            "attribute_name" => "Downloads", 
                            "option_id" => 146, 
                            "option_label" => "previousLinkIds" 
                        ] 
                    ], 
                    "locale" => "en" 
                ], 
                "created_at" => "2024-11-03T12:05:16.000000Z", 
                "updated_at" => "2024-11-03T12:05:16.000000Z", 
                "qty_to_ship" => 0, 
                "qty_to_invoice" => 1, 
                "qty_to_cancel" => 1, 
                "qty_to_refund" => 1, 
                "downloadable_links" => [
                [
                    "id" => 96, 
                    "product_name" => "ebook", 
                    "name" => null, 
                    "url" => "https://cdn.twsaa.com/product_digital_image/56118/3924c8e5-1ad1-46cc-b935-cb77b4e65620.png", 
                    "file" => "450266", 
                    "file_name" => "asdf", 
                    "type" => "image", 
                    "download_bought" => 0, 
                    "download_used" => 0, 
                    "status" => "paid", 
                    "customer_id" => 1, 
                    "order_id" => 1696, 
                    "order_item_id" => 2411, 
                    "created_at" => "2024-11-03T12:05:16.000000Z", 
                    "updated_at" => "2024-11-03T15:03:50.000000Z", 
                    "product_downloadable_link_id" => 145 
                ], 
                [
                        "id" => 97, 
                        "product_name" => "ebook", 
                        "name" => null, 
                        "url" => "https://www.google.com/", 
                        "file" => "", 
                        "file_name" => "previousLinkIds", 
                        "type" => "", 
                        "download_bought" => 0, 
                        "download_used" => 0, 
                        "status" => "paid", 
                        "customer_id" => 1, 
                        "order_id" => 1696, 
                        "order_item_id" => 2411, 
                        "created_at" => "2024-11-03T12:05:16.000000Z", 
                        "updated_at" => "2024-11-03T15:03:50.000000Z", 
                        "product_downloadable_link_id" => 146 
                    ] 
                ] 
            ] 
        ]
    ]; 

    return $context;
}

function orders() {
    $context['authUser'] = auth();
    $context['menu'] = menu();

    return $context;
}

function downloadableProducts() {
    $context['authUser'] = auth();
    $context['menu'] = menu();

    return $context;
}

function brands() {
    $context['authUser'] = auth();
    $context['brands'] = [
        "ا" => [
            [
                "id" => 12, 
                "name" => "اجمل للعطور", 
                "description" => "                                                                                                                                                                                                                                                                                                                                                                ", 
                "logo" => "brand/12/logo/a5cfbaa2-26b1-48d2-b7cf-ba491b541195.png", 
                "banner" => "brand/12/banner/c1086ae2-4501-4b5c-a108-872490ee6705.jpg", 
                "meta_title" => "اجمل", 
                "meta_url" => "bushra", 
                "meta_description" => "اجمل تحتوي على ازكى روائح العطور من البهارات العالمية ذات الجودة العالية ", 
                "is_active" => 1, 
                "translations" => [
                    [
                        "id" => 23, 
                        "locale" => "ar", 
                        "name" => "اجمل للعطور", 
                        "brand_id" => 12, 
                    ], 
                    [
                        "id" => 24, 
                        "locale" => "en", 
                        "name" => "اجمل للعطور", 
                        "brand_id" => 12, 
                    ] 
                ] 
            ] 
        ], 
        "P" => [
                [
                    "id" => 18, 
                    "name" => "prada", 
                    "description" => "                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                ", 
                    "logo" => "brand/18/logo/5082c95f-123b-4028-bd30-2e4688e2c089.png", 
                    "banner" => "brand/18/banner/252c5314-9ca3-4661-8fbe-53cfa1c53599.png", 
                    "meta_title" => "prada", 
                    "meta_url" => "prada", 
                    "meta_description" => "prada", 
                    "is_active" => 1, 
                    "translations" => [
                        [
                            "id" => 35, 
                            "locale" => "ar", 
                            "name" => "prada", 
                            "brand_id" => 18, 
                        ], 
                        [
                            "id" => 36, 
                            "locale" => "en", 
                            "name" => "prada", 
                            "brand_id" => 18, 
                        ] 
                    ] 
                ] 
            ], 
        "D" => [
            [
                "id" => 20, 
                "name" => "Dior", 
                "description" => "                                                                                                                                    ", 
                "logo" => "brand/20/logo/e3a9da61-0052-411a-b9ce-400ed43b2357.png", 
                "banner" => "brand/20/banner/ca4760cb-d70b-49d4-b82f-e9fc8d60438e.png", 
                "meta_title" => "عطر ديور", 
                "meta_url" => "DIOR", 
                "meta_description" => "عطر ديور", 
                "is_active" => 1, 
                "translations" => [
                    [
                        "id" => 39, 
                        "locale" => "ar", 
                        "name" => "Dior", 
                        "brand_id" => 20, 
                    ], 
                    [
                        "id" => 40, 
                        "locale" => "en", 
                        "name" => "Dior", 
                        "brand_id" => 20, 
                    ] 
                ] 
            ] 
        ], 
        "G" => [
                [
                    "id" => 21, 
                    "name" => "Guerlan", 
                    "description" => "                                                                                                               Guerlan                   ", 
                    "logo" => "brand/21/logo/c4f4aab0-1e0b-401e-88d0-8abb7008ca0a.png", 
                    "banner" => "brand/21/banner/ecbfd4a1-ba19-49d1-9e9c-3cf6bb6d34ca.png", 
                    "meta_title" => "Guerlan", 
                    "meta_url" => "Guerlan", 
                    "meta_description" => "Guerlan", 
                    "is_active" => 1, 
                    "translations" => [
                        [
                            "id" => 41, 
                            "locale" => "ar", 
                            "name" => "Guerlan", 
                            "brand_id" => 21, 
                            ], 
                            [
                                "id" => 42, 
                                "locale" => "en", 
                                "name" => "Guerlan", 
                                "brand_id" => 21, 
                            ] 
                        ] 
                ], 
                [
                    "id" => 131, 
                    "name" => "Givenchy", 
                    "description" => "", 
                    "logo" => "brand/131/logo/1d93f00a-e4c1-418d-8908-653a881d6c63.png", 
                    "banner" => "brand/131/banner/2617d5c3-aec8-42f6-80ed-c8f502662c14.txt", 
                    "meta_title" => "Givenchy", 
                    "meta_url" => "Givenchy", 
                    "meta_description" => "", 
                    "is_active" => 1, 
                    "translations" => [
                        [
                            "id" => 261, 
                            "locale" => "ar", 
                            "name" => "Givenchy", 
                            "brand_id" => 131, 
                        ], 
                        [
                            "id" => 262, 
                            "locale" => "en", 
                            "name" => "Givenchy", 
                            "brand_id" => 131, 
                        ] 
                    ] 
                ] 
            ], 
        "R" => [
                [
                    "id" => 29, 
                    "name" => "roberto cavalli", 
                    "description" => "                                            ", 
                    "logo" => "brand/29/logo/574b9b2c-56ca-455e-9414-e6acad870078.png", 
                    "banner" => "brand/29/banner/895f8194-4f03-4888-9564-2d207f9c8076.png", 
                    "meta_title" => "roberto cavalli", 
                    "meta_url" => "roberto cavalli", 
                    "meta_description" => "roberto cavalli", 
                    "is_active" => 1, 
                    "translations" => [
                        [
                            "id" => 57, 
                            "locale" => "ar", 
                            "name" => "roberto cavalli", 
                            "brand_id" => 29, 
                        ], 
                        [
                            "id" => 58, 
                            "locale" => "en", 
                            "name" => "roberto cavalli", 
                            "brand_id" => 29, 
                        ] 
                    ] 
                ] 
            ], 
        "V" => [
            [
                "id" => 33, 
                "name" => "valentino", 
                "description" => "                                            ", 
                "logo" => "brand/33/logo/6d49934c-e834-4a43-be1f-6f99b484ffed.jpg", 
                "banner" => "brand/33/banner/4b624440-1726-47fa-b369-b215de909e9a.png", 
                "meta_title" => "valentino", 
                "meta_url" => "valentino", 
                "meta_description" => "valentino", 
                "is_active" => 1, 
                "translations" => [
                    [
                        "id" => 65, 
                        "locale" => "ar", 
                        "name" => "valentino", 
                        "brand_id" => 33, 
                    ], 
                    [
                        "id" => 66, 
                        "locale" => "en", 
                        "name" => "valentino", 
                        "brand_id" => 33, 
                    ] 
                ] 
            ] 
        ] 
    ]; 

    return $context;
}

function brandView() {

    $context['authUser'] = auth();
    $context['brand'] = [
        "id" => 12, 
        "name" => "اجمل للعطور", 
        "description" => "                                                                                                                                                                                                                                                                                                                                                                ", 
        "logo" => "brand/12/logo/a5cfbaa2-26b1-48d2-b7cf-ba491b541195.png", 
        "banner" => "brand/12/banner/c1086ae2-4501-4b5c-a108-872490ee6705.jpg", 
        "meta_title" => "اجمل", 
        "meta_url" => "bushra", 
        "meta_description" => "اجمل تحتوي على ازكى روائح العطور من البهارات العالمية ذات الجودة العالية ", 
        "is_active" => 1, 
        "translations" => [
            [
                "id" => 23, 
                "locale" => "ar", 
                "name" => "اجمل للعطور", 
                "brand_id" => 12, 
            ], 
            [
                "id" => 24, 
                "locale" => "en", 
                "name" => "اجمل للعطور", 
                "brand_id" => 12, 
            ] 
        ] 
    ];
    $context['products'] = [
        [
            'product' => [
                "id" => 107667, 
                "product_id" => 56118, 
                "parent_id" => null, 
                "sku" => "OUU1RO7", 
                "name" => "ebook", 
                "description" => null, 
                "url_key" => "ouu1ro7", 
                "new" => null, 
                "featured" => null, 
                "status" => 1, 
                "thumbnail" => null, 
                "price" => "1.00", 
                "cost" => null, 
                "special_price" => null, 
                "special_price_from" => null, 
                "special_price_to" => null, 
                "delivery_time" => null, 
                "visible_individually" => 1, 
                "min_price" => "1.00", 
                "max_price" => "1.00", 
                "is_vat" => 1, 
                "short_description" => null, 
                "meta_title" => null, 
                "meta_keywords" => null, 
                "meta_description" => null, 
                "width" => 0, 
                "height" => 0, 
                "depth" => 0, 
                "weight" => 0, 
                "unlimited_quantity" => "0", 
                "barcode" => null, 
                "brand_name" => "12", 
                "promotion_title" => null, 
                "subtitle" => null, 
                "image" => "", 
                "image_name" => "", 
                "image_label" => "", 
                "image_value" => "", 
                "image_url" => null, 
                "text" => "", 
                "text_name" => "", 
                "text_label" => "", 
                "text_value" => "", 
                "color" => "", 
                "color_name" => "", 
                "color_label" => "", 
                "color_value" => "", 
                "size" => null, 
                "size_label" => null, 
                "created_at" => "2024-09-12 14:10:05", 
                "updated_at" => "2024-10-15 17:33:53", 
                "deleted_at" => null, 
                "enable_note" => null, 
                "enable_upload_image" => null, 
                "maximum_quantity_per_order" => null, 
                "notify_quantity" => null, 
                "require_shipping" => 0,
                "saleable" => 1,
                "html_price" => '<span class="price">‏٣٦٧٫٣٥ ر.س.‏</span>',
                "product" => [
                    "base_image_url" => "https://cdn.twsaa.com/home/23/cd2eeaba-784a-4272-a3f7-3e78262846d0.png"
                ],
            ]
        ],
        [
            'product' => [
                "id" => 107663, 
                "product_id" => 56116, 
                "parent_id" => null, 
                "sku" => "N2-4-5-3", 
                "name" => "ثلاجة الجمال سباركلنق لافندر 4 لتر", 
                "description" => " ", 
                "url_key" => "n2-4-5-3", 
                "new" => null, 
                "featured" => 1, 
                "status" => 1, 
                "thumbnail" => null, 
                "price" => "367.35", 
                "cost" => "216.09", 
                "special_price" => null, 
                "special_price_from" => null, 
                "special_price_to" => null, 
                "delivery_time" => null, 
                "visible_individually" => 1, 
                "min_price" => "367.35", 
                "max_price" => "367.35", 
                "is_vat" => 0, 
                "short_description" => " ", 
                "meta_title" => "ثلاجة الجمال سباركلنق لافندر 4 لتر", 
                "meta_keywords" => null, 
                "meta_description" => "<p>حافظي على منتجاتك المفضلة للعناية بجمال بشرتك مع ثلاجة الجمال الحجم الكلاسيكي الأنيق لوضعه أينما رغبت في غرفتك&nbsp;</p>
    
                <p>- أبعاد الثلاجة: العرض: 24 سم، الطول: 31.8سم، القطر: 32.2 سم
                - رف واحد يفصل بين حجرتين تخزين رئيسية
                - متوفرة بخاصية التبريد حتى 5 درجات مئوية&nbsp;
                - متوفرة بخاصية التدفئة &nbsp;حتى 50 درجة مئوية&nbsp;
                - درج خاص في باب الثلاجة
                - محول DC5V 2A &nbsp;
                - محول 100-240 فولت&nbsp;
                - اللون: سباركلينج لافندر</p>
                
                <p>- ضعي قابس الكهرباء في في تيار 110 فولت أو 220 فولت ودعيها تعمل بشكل مستمر.
                - بإمكانك تشغيل الثلاجة عبر أي محول USB بقوة 2 مل أمبير مما يجعلها تعمل داخل السيارة أو على بطاريات الطاقة (ننصح ببطارية طاقة تفوق 1000مل أمبير)</p>
                
                <p>التحذيرات والاحتياطات:
                - قومي بتنظيف الثلاجة وتهويتها بمنشفة بشكل مستمر لمنع تشكل قطرات الماء داخلها.
                - دعي مسافة فراغ 20سم بين الثلاجة والحائط.</p>
                
                <p>&nbsp;</p>
                
                <p>- محول كهربائي 220-110 فولت&nbsp;
                - محول DC5V 2A &nbsp;
                - قوة 5 فولت *2 مل أمبير
                - سلك كهربائي USB
                -ستيكرات زينة</p>", 
                "width" => 0, 
                "height" => 0, 
                "depth" => 0, 
                "weight" => 0, 
                "unlimited_quantity" => "0", 
                "barcode" => null, 
                "brand_name" => "12", 
                "promotion_title" => null, 
                "subtitle" => null, 
                "image" => "", 
                "image_name" => "", 
                "image_label" => "", 
                "image_value" => "", 
                "image_url" => null, 
                "text" => "", 
                "text_name" => "", 
                "text_label" => "", 
                "text_value" => "", 
                "color" => "", 
                "color_name" => "", 
                "color_label" => "", 
                "color_value" => "", 
                "size" => null, 
                "size_label" => null, 
                "created_at" => "2024-08-21 16:41:44", 
                "updated_at" => "2024-10-15 17:33:59", 
                "deleted_at" => null, 
                "enable_note" => null, 
                "enable_upload_image" => null, 
                "maximum_quantity_per_order" => null, 
                "notify_quantity" => null, 
                "require_shipping" => 0,
                "saleable" => 1,
                "html_price" => '<span class="price">‏٣٦٧٫٣٥ ر.س.‏</span>',
                "product" => [
                    "base_image_url" => "https://cdn.twsaa.com/home/23/cd2eeaba-784a-4272-a3f7-3e78262846d0.png"
                ],
            ]
        ],
        [
            'product' => [
                "id" => 107661, 
                "product_id" => 56115, 
                "parent_id" => null, 
                "sku" => "sku-ABC", 
                "name" => null, 
                "description" => null, 
                "url_key" => "sku-abc", 
                "new" => null, 
                "featured" => null, 
                "status" => 1, 
                "thumbnail" => null, 
                "price" => null, 
                "cost" => null, 
                "special_price" => null, 
                "special_price_from" => null, 
                "special_price_to" => null, 
                "delivery_time" => null, 
                "visible_individually" => 1, 
                "min_price" => null, 
                "max_price" => null, 
                "is_vat" => 0, 
                "short_description" => null, 
                "meta_title" => null, 
                "meta_keywords" => null, 
                "meta_description" => null, 
                "width" => 0, 
                "height" => 0, 
                "depth" => 0, 
                "weight" => 0, 
                "unlimited_quantity" => "0", 
                "barcode" => null, 
                "brand_name" => "12", 
                "promotion_title" => null, 
                "subtitle" => null, 
                "image" => "", 
                "image_name" => "", 
                "image_label" => "", 
                "image_value" => "", 
                "image_url" => null, 
                "text" => "", 
                "text_name" => "", 
                "text_label" => "", 
                "text_value" => "", 
                "color" => "", 
                "color_name" => "", 
                "color_label" => "", 
                "color_value" => "", 
                "size" => null, 
                "size_label" => null, 
                "created_at" => "2024-08-06 11:30:32", 
                "updated_at" => "2024-10-15 17:34:04", 
                "deleted_at" => null, 
                "enable_note" => null, 
                "enable_upload_image" => null, 
                "maximum_quantity_per_order" => null, 
                "notify_quantity" => null, 
                "require_shipping" => 0,
                "saleable" => 1,
                "html_price" => '<span class="price">‏٣٦٧٫٣٥ ر.س.‏</span>',
                "product" => [
                    "base_image_url" => "https://cdn.twsaa.com/home/23/cd2eeaba-784a-4272-a3f7-3e78262846d0.png"
                ],
            ]
        ],
        [
            'product' => [
                "id" => 106921, 
                "product_id" => 55683, 
                "parent_id" => null, 
                "sku" => "GFAF0U2", 
                "name" => "vir", 
                "description" => null, 
                "url_key" => "gfaf0u2", 
                "new" => null, 
                "featured" => 1, 
                "status" => 1, 
                "thumbnail" => null, 
                "price" => "1.00", 
                "cost" => null, 
                "special_price" => null, 
                "special_price_from" => null, 
                "special_price_to" => null, 
                "delivery_time" => null, 
                "visible_individually" => 1, 
                "min_price" => "1.00", 
                "max_price" => "1.00", 
                "is_vat" => 1, 
                "short_description" => null, 
                "meta_title" => null, 
                "meta_keywords" => null, 
                "meta_description" => null, 
                "width" => 0, 
                "height" => 0, 
                "depth" => 0, 
                "weight" => 0, 
                "unlimited_quantity" => "0", 
                "barcode" => null, 
                "brand_name" => "12", 
                "promotion_title" => null, 
                "subtitle" => null, 
                "image" => "", 
                "image_name" => "", 
                "image_label" => "", 
                "image_value" => "", 
                "image_url" => null, 
                "text" => "", 
                "text_name" => "", 
                "text_label" => "", 
                "text_value" => "", 
                "color" => "", 
                "color_name" => "", 
                "color_label" => "", 
                "color_value" => "", 
                "size" => null, 
                "size_label" => null, 
                "created_at" => "2024-06-04 10:45:29", 
                "updated_at" => "2024-10-15 17:34:16", 
                "deleted_at" => null, 
                "enable_note" => null, 
                "enable_upload_image" => null, 
                "maximum_quantity_per_order" => null, 
                "notify_quantity" => null, 
                "require_shipping" => 0,
                "saleable" => 1,
                "html_price" => '<span class="price">‏٣٦٧٫٣٥ ر.س.‏</span>',
                "product" => [
                    "base_image_url" => "https://cdn.twsaa.com/home/23/cd2eeaba-784a-4272-a3f7-3e78262846d0.png"
                ],
            ]
        ],
        [
            'product' => [
                "id" => 106919, 
                "product_id" => 55682, 
                "parent_id" => null, 
                "sku" => "customizable", 
                "name" => "customizable product", 
                "description" => "This is testing Mobile", 
                "url_key" => "customizable", 
                "new" => null, 
                "featured" => null, 
                "status" => 1, 
                "thumbnail" => null, 
                "price" => "222.00", 
                "cost" => null, 
                "special_price" => null, 
                "special_price_from" => null, 
                "special_price_to" => null, 
                "delivery_time" => null, 
                "visible_individually" => 1, 
                "min_price" => "222.00", 
                "max_price" => "222.00", 
                "is_vat" => 1, 
                "short_description" => null, 
                "meta_title" => null, 
                "meta_keywords" => null, 
                "meta_description" => null, 
                "width" => 0, 
                "height" => 0, 
                "depth" => 0, 
                "weight" => 0, 
                "unlimited_quantity" => "0", 
                "barcode" => null, 
                "brand_name" => "12", 
                "promotion_title" => null, 
                "subtitle" => null, 
                "image" => "", 
                "image_name" => "", 
                "image_label" => "", 
                "image_value" => "", 
                "image_url" => null, 
                "text" => "", 
                "text_name" => "", 
                "text_label" => "", 
                "text_value" => "", 
                "color" => "", 
                "color_name" => "", 
                "color_label" => "", 
                "color_value" => "", 
                "size" => null, 
                "size_label" => null, 
                "created_at" => "2024-06-03 15:33:15", 
                "updated_at" => "2024-10-15 17:34:22", 
                "deleted_at" => null, 
                "enable_note" => null, 
                "enable_upload_image" => null, 
                "maximum_quantity_per_order" => null, 
                "notify_quantity" => null, 
                "require_shipping" => 0,
                "saleable" => 1,
                "html_price" => '<span class="price">‏٣٦٧٫٣٥ ر.س.‏</span>',
                "product" => [
                    "base_image_url" => "https://cdn.twsaa.com/home/23/cd2eeaba-784a-4272-a3f7-3e78262846d0.png"
                ],
            ]
        ],
        [
            'product' => [
                "id" => 106891, 
                "product_id" => 55668, 
                "parent_id" => null, 
                "sku" => "2G663YZ", 
                "name" => "asdf asdf2", 
                "description" => "<p>محافظ نسائية على الموضة ، محفظة طويلة ثلاثية الطي ذات جودة عالية من جلد البولي يوريثان ، حامل بطاقات كلاتش للنساء ، حامل بطاقات</p><p><br></p>", 
                "url_key" => "2g663yz", 
                "new" => null, 
                "featured" => null, 
                "status" => 1, 
                "thumbnail" => null, 
                "price" => "0.00", 
                "cost" => null, 
                "special_price" => null, 
                "special_price_from" => null, 
                "special_price_to" => null, 
                "delivery_time" => null, 
                "visible_individually" => 1, 
                "min_price" => "1.00", 
                "max_price" => "8.00", 
                "is_vat" => 1, 
                "short_description" => null, 
                "meta_title" => null, 
                "meta_keywords" => null, 
                "meta_description" => null, 
                "width" => 0, 
                "height" => 0, 
                "depth" => 0, 
                "weight" => 0, 
                "unlimited_quantity" => "0", 
                "barcode" => null, 
                "brand_name" => "12", 
                "promotion_title" => null, 
                "subtitle" => null, 
                "image" => "", 
                "image_name" => "", 
                "image_label" => "", 
                "image_value" => "", 
                "image_url" => null, 
                "text" => "", 
                "text_name" => "", 
                "text_label" => "", 
                "text_value" => "", 
                "color" => "", 
                "color_name" => "", 
                "color_label" => "", 
                "color_value" => "", 
                "size" => null, 
                "size_label" => null, 
                "created_at" => "2024-05-08 15:58:59", 
                "updated_at" => "2024-10-15 17:34:30", 
                "deleted_at" => null, 
                "enable_note" => null, 
                "enable_upload_image" => null, 
                "maximum_quantity_per_order" => null, 
                "notify_quantity" => null, 
                "require_shipping" => 0,
                "saleable" => 1,
                "html_price" => '<span class="price">‏٣٦٧٫٣٥ ر.س.‏</span>',
                "product" => [
                    "base_image_url" => "https://cdn.twsaa.com/home/23/cd2eeaba-784a-4272-a3f7-3e78262846d0.png"
                ],
            ]
        ],
        [
            'product' => [
                "id" => 103671, 
                "product_id" => 54040, 
                "parent_id" => null, 
                "sku" => "W1MDRT4", 
                "name" => "tryme", 
                "description" => "", 
                "url_key" => "w1mdrt4", 
                "new" => null, 
                "featured" => null, 
                "status" => 1, 
                "thumbnail" => null, 
                "price" => "1.00", 
                "cost" => null, 
                "special_price" => null, 
                "special_price_from" => null, 
                "special_price_to" => null, 
                "delivery_time" => null, 
                "visible_individually" => 1, 
                "min_price" => "1.00", 
                "max_price" => "1.00", 
                "is_vat" => 1, 
                "short_description" => null, 
                "meta_title" => "", 
                "meta_keywords" => null, 
                "meta_description" => "", 
                "width" => 0, 
                "height" => 0, 
                "depth" => 0, 
                "weight" => 0, 
                "unlimited_quantity" => "0", 
                "barcode" => null, 
                "brand_name" => "12", 
                "promotion_title" => null, 
                "subtitle" => null, 
                "image" => "", 
                "image_name" => "", 
                "image_label" => "", 
                "image_value" => "", 
                "image_url" => null, 
                "text" => "", 
                "text_name" => "", 
                "text_label" => "", 
                "text_value" => "", 
                "color" => "", 
                "color_name" => "", 
                "color_label" => "", 
                "color_value" => "", 
                "size" => null, 
                "size_label" => null, 
                "created_at" => "2024-04-22 15:35:12", 
                "updated_at" => "2024-07-25 12:32:10", 
                "deleted_at" => null, 
                "enable_note" => null, 
                "enable_upload_image" => null, 
                "maximum_quantity_per_order" => null, 
                "notify_quantity" => null, 
                "require_shipping" => 0,
                "saleable" => 1,
                "html_price" => '<span class="price">‏٣٦٧٫٣٥ ر.س.‏</span>',
                "product" => [
                    "base_image_url" => "https://cdn.twsaa.com/home/23/cd2eeaba-784a-4272-a3f7-3e78262846d0.png"
                ],
            ]
        ],
        [
            'product' => [
                "id" => 103667, 
                "product_id" => 54038, 
                "parent_id" => null, 
                "sku" => "059347", 
                "name" => "موزع روائح الزيوت العطرية", 
                "description" => "<p>موزع روائح الزيوت العطرية</p>

                <p>اضاءة داخلية مع اللهب - 4 الوان</p>
                
                <p>مرطب بالموجات فوق الصوتية</p>
                
                <p>&nbsp;</p>
                
                <p>ضمان سنتين&nbsp;</p>", 
                "url_key" => "059347", 
                "new" => null, 
                "featured" => null, 
                "status" => 1, 
                "thumbnail" => null, 
                "price" => "142.80", 
                "cost" => "84.00", 
                "special_price" => null, 
                "special_price_from" => null, 
                "special_price_to" => null, 
                "delivery_time" => null, 
                "visible_individually" => 1, 
                "min_price" => "142.80", 
                "max_price" => "142.80", 
                "is_vat" => 1, 
                "short_description" => "<p>موزع روائح الزيوت العطرية</p>

                <p>اضاءة داخلية مع اللهب - 4 الوان</p>
                
                <p>مرطب بالموجات فوق الصوتية</p>
                
                <p>&nbsp;</p>
                
                <p>ضمان سنتين&nbsp;</p>", 
                "meta_title" => "موزع روائح الزيوت العطرية", 
                "meta_keywords" => null, 
                "meta_description" => "<p>موزع روائح الزيوت العطرية</p>

                <p>اضاءة داخلية مع اللهب - 4 الوان</p>
                
                <p>مرطب بالموجات فوق الصوتية</p>
                
                <p>&nbsp;</p>
                
                <p>ضمان سنتين&nbsp;</p>", 
                "width" => 0, 
                "height" => 0, 
                "depth" => 0, 
                "weight" => 0.1, 
                "unlimited_quantity" => "0", 
                "barcode" => "059347", 
                "brand_name" => "12", 
                "promotion_title" => null, 
                "subtitle" => null, 
                "image" => "", 
                "image_name" => "", 
                "image_label" => "", 
                "image_value" => "", 
                "image_url" => null, 
                "text" => "", 
                "text_name" => "", 
                "text_label" => "", 
                "text_value" => "", 
                "color" => "", 
                "color_name" => "", 
                "color_label" => "", 
                "color_value" => "", 
                "size" => null, 
                "size_label" => null, 
                "created_at" => "2024-04-22 14:53:31", 
                "updated_at" => "2024-10-15 17:35:00", 
                "deleted_at" => null, 
                "enable_note" => null, 
                "enable_upload_image" => null, 
                "maximum_quantity_per_order" => null, 
                "notify_quantity" => null, 
                "require_shipping" => 0,
                "saleable" => 1,
                "html_price" => '<span class="price">‏٣٦٧٫٣٥ ر.س.‏</span>',
                "product" => [
                    "base_image_url" => "https://cdn.twsaa.com/home/23/cd2eeaba-784a-4272-a3f7-3e78262846d0.png"
                ],
            ]
        ],
        [
            'product' => [
                "id" => 103665, 
                "product_id" => 54037, 
                "parent_id" => null, 
                "sku" => "300130", 
                "name" => "ساعه انمر مان الرجالية 300130", 
                "description" => '<p dir="RTL">ساعه رجاليه فخمه من ماركة انمر مان&nbsp;</p>

                <p dir="RTL">صنقل ستيل كامل</p>
                
                <p dir="RTL">قفل ستيل</p>
                
                <p dir="RTL">تصميم رائع وجذاب</p>
                
                <p dir="RTL">مكينه ياباني</p>
                
                <p dir="RTL">لمعه ثابته</p>
                
                <p dir="RTL">علبه بنفس اسم الماركه</p>
                
                <p dir="RTL">ضمان ثلاث سنوات</p>", 
                "url_key" => "300130", 
                "new" => null, 
                "featured" => null, 
                "status" => 1, 
                "thumbnail" => null, 
                "price" => "160.65", 
                "cost" => "94.50", 
                "special_price" => null, 
                "special_price_from" => null, 
                "special_price_to" => null, 
                "delivery_time" => null, 
                "visible_individually" => 1, 
                "min_price" => "160.65", 
                "max_price" => "160.65", 
                "is_vat" => 1, 
                "short_description" => "<p dir="RTL">ساعه رجاليه فخمه من ماركة انمر مان&nbsp;</p>

                <p dir="RTL">صنقل ستيل كامل</p>
                
                <p dir="RTL">قفل ستيل</p>
                
                <p dir="RTL">تصميم رائع وجذاب</p>
                
                <p dir="RTL">مكينه ياباني</p>
                
                <p dir="RTL">لمعه ثابته</p>
                
                <p dir="RTL">علبه بنفس اسم الماركه</p>
                
                <p dir="RTL">ضمان ثلاث سنوات</p>", 
                "meta_title" => "ساعه انمر مان الرجالية 300130", 
                "meta_keywords" => null, 
                "meta_description" => "<p dir="RTL">ساعه رجاليه فخمه من ماركة انمر مان&nbsp;</p>

                <p dir="RTL">صنقل ستيل كامل</p>
                
                <p dir="RTL">قفل ستيل</p>
                
                <p dir="RTL">تصميم رائع وجذاب</p>
                
                <p dir="RTL">مكينه ياباني</p>
                
                <p dir="RTL">لمعه ثابته</p>
                
                <p dir="RTL">علبه بنفس اسم الماركه</p>
                                        
                <p dir="RTL">ضمان ثلاث سنوات</p>', 
                "width" => 0, 
                "height" => 0, 
                "depth" => 0, 
                "weight" => 0.6, 
                "unlimited_quantity" => "0", 
                "barcode" => "7788997788", 
                "brand_name" => "12", 
                "promotion_title" => null, 
                "subtitle" => null, 
                "image" => "", 
                "image_name" => "", 
                "image_label" => "", 
                "image_value" => "", 
                "image_url" => null, 
                "text" => "", 
                "text_name" => "", 
                "text_label" => "", 
                "text_value" => "", 
                "color" => "", 
                "color_name" => "", 
                "color_label" => "", 
                "color_value" => "", 
                "size" => null, 
                "size_label" => null, 
                "created_at" => "2024-04-22 14:53:27", 
                "updated_at" => "2024-10-15 17:35:07", 
                "deleted_at" => null, 
                "enable_note" => null, 
                "enable_upload_image" => null, 
                "maximum_quantity_per_order" => null, 
                "notify_quantity" => null, 
                "require_shipping" => 1,
                "saleable" => 1,
                "html_price" => '<span class="price">‏٣٦٧٫٣٥ ر.س.‏</span>',
                "product" => [
                    "base_image_url" => "https://cdn.twsaa.com/home/23/cd2eeaba-784a-4272-a3f7-3e78262846d0.png"
                ],
            ]
        ],
        [
            'product' => [
                "id" => 102523, 
                "product_id" => 53483, 
                "parent_id" => null, 
                "sku" => "MSKUAE1005006629609421", 
                "name" => "مجموعة مسحوق مجفف مجمد مضاد للتجاعيد ، خميرة للإصلاح ، مصل مغذي ، كرياتين لتعزيز إنتاج الكولاجين", 
                "description" => '<div class="detailmodule_html"><div class="detail-desc-decorate-richtext"><p><img src="https://ae01.alicdn.com/kf/Sbca62263df6e44d9916a0a3ad441d085h.jpg" slate-data-type="image" /><img src="https://ae01.alicdn.com/kf/S635c7aebc8fe4393a93593d41362b68e7.jpg" slate-data-type="image" /><img src="https://ae01.alicdn.com/kf/S0210767bca5e48189f751176a99ffb1dS.jpg" slate-data-type="image" /><img src="https://ae01.alicdn.com/kf/S6d44ece12bcf407bba64bf3f31b3b7daP.jpg" slate-data-type="image" /><img src="https://ae01.alicdn.com/kf/S1ac24a381f3740eb88b3a18e36a6f4a4g.jpg" slate-data-type="image" /><img src="https://ae01.alicdn.com/kf/S537206bb81f14efbbc423901aad8923de.jpg" slate-data-type="image" /><img src="https://ae01.alicdn.com/kf/Se52ebe59427648bf8e84305c39564c83v.jpg" slate-data-type="image" /><img src="https://ae01.alicdn.com/kf/S88ca6f916b1840bda759fdd7556f26cdw.jpg" slate-data-type="image" /><img src="https://ae01.alicdn.com/kf/Saf2e2587072841bc92da588588dff5feK.jpg" slate-data-type="image" /><img src="https://ae01.alicdn.com/kf/Sb9407490af5647a6b1daf61c361576e50.jpg" slate-data-type="image" /><img src="https://ae01.alicdn.com/kf/S7556e22c080145459d4de2a31e379fbaN.jpg" slate-data-type="image" /><img src="https://ae01.alicdn.com/kf/S3d106311a0e4431f938d6a6bdc87ce12l.jpg" slate-data-type="image" /><img src="https://ae01.alicdn.com/kf/S54005c6d105649b582a00fd961fdce65K.jpg" slate-data-type="image" /><img src="https://ae01.alicdn.com/kf/S20ecd5f1d6454e16af3caee0efc72b71I.jpg" slate-data-type="image" /></p></div></div>', 
                "url_key" => "mskuae1005006629609421", 
                "new" => null, 
                "featured" => null, 
                "status" => 1, 
                "thumbnail" => null, 
                "price" => null, 
                "cost" => null, 
                "special_price" => null, 
                "special_price_from" => null, 
                "special_price_to" => null, 
                "delivery_time" => null, 
                "visible_individually" => 1, 
                "min_price" => "424.51", 
                "max_price" => "1061.28", 
                "is_vat" => 1, 
                "short_description" => '<div class="detailmodule_html"><div class="detail-desc-decorate-richtext"><p><img src="https://ae01.alicdn.com/kf/Sbca62263df6e44d9916a0a3ad441d085h.jpg" slate-data-type="image" /><img src="https://ae01.alicdn.com/kf/S635c7aebc8fe4393a93593d41362b68e7.jpg" slate-data-type="image" /><img src="https://ae01.alicdn.com/kf/S0210767bca5e48189f751176a99ffb1dS.jpg" slate-data-type="image" /><img src="https://ae01.alicdn.com/kf/S6d44ece12bcf407bba64bf3f31b3b7daP.jpg" slate-data-type="image" /><img src="https://ae01.alicdn.com/kf/S1ac24a381f3740eb88b3a18e36a6f4a4g.jpg" slate-data-type="image" /><img src="https://ae01.alicdn.com/kf/S537206bb81f14efbbc423901aad8923de.jpg" slate-data-type="image" /><img src="https://ae01.alicdn.com/kf/Se52ebe59427648bf8e84305c39564c83v.jpg" slate-data-type="image" /><img src="https://ae01.alicdn.com/kf/S88ca6f916b1840bda759fdd7556f26cdw.jpg" slate-data-type="image" /><img src="https://ae01.alicdn.com/kf/Saf2e2587072841bc92da588588dff5feK.jpg" slate-data-type="image" /><img src="https://ae01.alicdn.com/kf/Sb9407490af5647a6b1daf61c361576e50.jpg" slate-data-type="image" /><img src="https://ae01.alicdn.com/kf/S7556e22c080145459d4de2a31e379fbaN.jpg" slate-data-type="image" /><img src="https://ae01.alicdn.com/kf/S3d106311a0e4431f938d6a6bdc87ce12l.jpg" slate-data-type="image" /><img src="https://ae01.alicdn.com/kf/S54005c6d105649b582a00fd961fdce65K.jpg" slate-data-type="image" /><img src="https://ae01.alicdn.com/kf/S20ecd5f1d6454e16af3caee0efc72b71I.jpg" slate-data-type="image" /></p></div></div>', 
                "meta_title" => "مجموعة مسحوق مجفف مجمد مضاد للتجاعيد ، خميرة للإصلاح ، مصل مغذي ، كرياتين لتعزيز إنتاج الكولاجين", 
                "meta_keywords" => null, 
                "meta_description" => '<div class="detailmodule_html"><div class="detail-desc-decorate-richtext"><p><img src="https://ae01.alicdn.com/kf/Sbca62263df6e44d9916a0a3ad441d085h.jpg" slate-data-type="image" /><img src="https://ae01.alicdn.com/kf/S635c7aebc8fe4393a93593d41362b68e7.jpg" slate-data-type="image" /><img src="https://ae01.alicdn.com/kf/S0210767bca5e48189f751176a99ffb1dS.jpg" slate-data-type="image" /><img src="https://ae01.alicdn.com/kf/S6d44ece12bcf407bba64bf3f31b3b7daP.jpg" slate-data-type="image" /><img src="https://ae01.alicdn.com/kf/S1ac24a381f3740eb88b3a18e36a6f4a4g.jpg" slate-data-type="image" /><img src="https://ae01.alicdn.com/kf/S537206bb81f14efbbc423901aad8923de.jpg" slate-data-type="image" /><img src="https://ae01.alicdn.com/kf/Se52ebe59427648bf8e84305c39564c83v.jpg" slate-data-type="image" /><img src="https://ae01.alicdn.com/kf/S88ca6f916b1840bda759fdd7556f26cdw.jpg" slate-data-type="image" /><img src="https://ae01.alicdn.com/kf/Saf2e2587072841bc92da588588dff5feK.jpg" slate-data-type="image" /><img src="https://ae01.alicdn.com/kf/Sb9407490af5647a6b1daf61c361576e50.jpg" slate-data-type="image" /><img src="https://ae01.alicdn.com/kf/S7556e22c080145459d4de2a31e379fbaN.jpg" slate-data-type="image" /><img src="https://ae01.alicdn.com/kf/S3d106311a0e4431f938d6a6bdc87ce12l.jpg" slate-data-type="image" /><img src="https://ae01.alicdn.com/kf/S54005c6d105649b582a00fd961fdce65K.jpg" slate-data-type="image" /><img src="https://ae01.alicdn.com/kf/S20ecd5f1d6454e16af3caee0efc72b71I.jpg" slate-data-type="image" /></p></div></div>', 
                "width" => 0, 
                "height" => 0, 
                "depth" => 0, 
                "weight" => 0, 
                "unlimited_quantity" => "0", 
                "barcode" => null, 
                "brand_name" => "12", 
                "promotion_title" => null, 
                "subtitle" => null, 
                "image" => "", 
                "image_name" => "", 
                "image_label" => "", 
                "image_value" => "", 
                "image_url" => null, 
                "text" => "", 
                "text_name" => "", 
                "text_label" => "", 
                "text_value" => "", 
                "color" => "", 
                "color_name" => "", 
                "color_label" => "", 
                "color_value" => "", 
                "size" => null, 
                "size_label" => null, 
                "created_at" => "2024-04-16 18:25:06", 
                "updated_at" => "2024-10-15 17:35:16", 
                "deleted_at" => null, 
                "enable_note" => null, 
                "enable_upload_image" => null, 
                "maximum_quantity_per_order" => null, 
                "notify_quantity" => null, 
                "require_shipping" => 0,
                "saleable" => 1,
                "html_price" => '<span class="price">‏٣٦٧٫٣٥ ر.س.‏</span>',
                "product" => [
                    "base_image_url" => "https://cdn.twsaa.com/home/23/cd2eeaba-784a-4272-a3f7-3e78262846d0.png"
                ],
            ]
        ],
        [
            'product' => [
                "id" => 102497, 
                "product_id" => 53470, 
                "parent_id" => null, 
                "sku" => "MSKUAE1005006608665729", 
                "name" => "سوار زوجين من الصلب الكلاسيكي الفاخر من التيتانيوم ، سوار عالي الجودة للرجال والنساء ، هدايا الحفلات", 
                "description" => '<div class="detailmodule_html"><div class="detail-desc-decorate-richtext"><p>
                        <kse:widget data-widget-type="customText" id="1005000011207205" type="relation"></kse:widget></p>
                    <p><span style="font-size:16px" id="tl_1">لمزيد من المعلومات والصور ، يرجى الاتصال بخدمة العملاء.</span></p>
                    <p><br /></p>
                    <p style="font-family:&quot;Open Sans&quot;, Roboto, Arial, Helvetica, sans-serif, SimSun;font-size:14px;font-weight:400;letter-spacing:normal;line-height:inherit;text-align:start;white-space:normal;color:rgb(34, 34, 34);margin:0px;margin-bottom:0px;margin-top:0px;margin-left:0px;margin-right:0px;padding:0px;padding-bottom:0px;padding-top:0px;padding-left:0px;padding-right:0px;box-sizing:border-box" align="start"><span style="font-size:16px" id="tl_2">لمزيد من المعلومات والصور ، يرجى الاتصال بخدمة العملاء.</span></p>
                    <p><br /></p>
                    <p style="font-family:&quot;Open Sans&quot;, Roboto, Arial, Helvetica, sans-serif, SimSun;font-size:14px;font-weight:400;letter-spacing:normal;line-height:inherit;text-align:start;white-space:normal;color:rgb(34, 34, 34);margin:0px;margin-bottom:0px;margin-top:0px;margin-left:0px;margin-right:0px;padding:0px;padding-bottom:0px;padding-top:0px;padding-left:0px;padding-right:0px;box-sizing:border-box" align="start"><span style="font-size:16px" id="tl_3">لمزيد من المعلومات والصور ، يرجى الاتصال بخدمة العملاء.</span></p>
                    <p><br /></p>
                    <div>
                        <span style="font-size:24px" id="tl_4">نصائح:</span>
                    </div>
                    <div>
                        <span style="font-size:18px" id="tl_5">يرجى استخدام شريط قياس ناعم لتأكيد محيط اليد الفعلي قبل الشراء ، وإضافة سنتيمتر واحد لتحديد الحجم المناسب للارتداء</span>
                    </div>
                    <div>
                        &nbsp;
                    </div>
                    <p style="font-family:&quot;Open Sans&quot;, Roboto, Arial, Helvetica, sans-serif, SimSun;font-size:14px;font-weight:400;letter-spacing:normal;line-height:inherit;text-align:start;white-space:normal;color:rgb(34, 34, 34);margin:0px;margin-bottom:0px;margin-top:0px;margin-left:0px;margin-right:0px;padding:0px;padding-bottom:0px;padding-top:0px;padding-left:0px;padding-right:0px;box-sizing:border-box" align="start"><img src="https://ae01.alicdn.com/kf/Sdc7eb0d7addd4f3faf38db4e0b0eef45x.jpg" slate-data-type="image" /></p></div></div>
                    ', 
                "url_key" => "mskuae1005006608665729", 
                "new" => null, 
                "featured" => null, 
                "status" => 1, 
                "thumbnail" => null, 
                "price" => null, 
                "cost" => null, 
                "special_price" => null, 
                "special_price_from" => null, 
                "special_price_to" => null, 
                "delivery_time" => null, 
                "visible_individually" => 1, 
                "min_price" => "330.58", 
                "max_price" => "330.58", 
                "is_vat" => 1, 
                "short_description" => '<div class="detailmodule_html"><div class="detail-desc-decorate-richtext"><p>
                    <kse:widget data-widget-type="customText" id="1005000011207205" type="relation"></kse:widget></p>
                <p><span style="font-size:16px" id="tl_1">لمزيد من المعلومات والصور ، يرجى الاتصال بخدمة العملاء.</span></p>
                <p><br /></p>
                <p style="font-family:&quot;Open Sans&quot;, Roboto, Arial, Helvetica, sans-serif, SimSun;font-size:14px;font-weight:400;letter-spacing:normal;line-height:inherit;text-align:start;white-space:normal;color:rgb(34, 34, 34);margin:0px;margin-bottom:0px;margin-top:0px;margin-left:0px;margin-right:0px;padding:0px;padding-bottom:0px;padding-top:0px;padding-left:0px;padding-right:0px;box-sizing:border-box" align="start"><span style="font-size:16px" id="tl_2">لمزيد من المعلومات والصور ، يرجى الاتصال بخدمة العملاء.</span></p>
                <p><br /></p>
                <p style="font-family:&quot;Open Sans&quot;, Roboto, Arial, Helvetica, sans-serif, SimSun;font-size:14px;font-weight:400;letter-spacing:normal;line-height:inherit;text-align:start;white-space:normal;color:rgb(34, 34, 34);margin:0px;margin-bottom:0px;margin-top:0px;margin-left:0px;margin-right:0px;padding:0px;padding-bottom:0px;padding-top:0px;padding-left:0px;padding-right:0px;box-sizing:border-box" align="start"><span style="font-size:16px" id="tl_3">لمزيد من المعلومات والصور ، يرجى الاتصال بخدمة العملاء.</span></p>
                <p><br /></p>
                <div>
                    <span style="font-size:24px" id="tl_4">نصائح:</span>
                </div>
                <div>
                    <span style="font-size:18px" id="tl_5">يرجى استخدام شريط قياس ناعم لتأكيد محيط اليد الفعلي قبل الشراء ، وإضافة سنتيمتر واحد لتحديد الحجم المناسب للارتداء</span>
                </div>
                <div>
                    &nbsp;
                </div>
                <p style="font-family:&quot;Open Sans&quot;, Roboto, Arial, Helvetica, sans-serif, SimSun;font-size:14px;font-weight:400;letter-spacing:normal;line-height:inherit;text-align:start;white-space:normal;color:rgb(34, 34, 34);margin:0px;margin-bottom:0px;margin-top:0px;margin-left:0px;margin-right:0px;padding:0px;padding-bottom:0px;padding-top:0px;padding-left:0px;padding-right:0px;box-sizing:border-box" align="start"><img src="https://ae01.alicdn.com/kf/Sdc7eb0d7addd4f3faf38db4e0b0eef45x.jpg" slate-data-type="image" /></p></div></div>
                ', 
                "meta_title" => "سوار زوجين من الصلب الكلاسيكي الفاخر من التيتانيوم ، سوار عالي الجودة للرجال والنساء ، هدايا الحفلات", 
                "meta_keywords" => null, 
                "meta_description" => '<div class="detailmodule_html"><div class="detail-desc-decorate-richtext"><p>
                        <kse:widget data-widget-type="customText" id="1005000011207205" type="relation"></kse:widget></p>
                    <p><span style="font-size:16px" id="tl_1">لمزيد من المعلومات والصور ، يرجى الاتصال بخدمة العملاء.</span></p>
                    <p><br /></p>
                    <p style="font-family:&quot;Open Sans&quot;, Roboto, Arial, Helvetica, sans-serif, SimSun;font-size:14px;font-weight:400;letter-spacing:normal;line-height:inherit;text-align:start;white-space:normal;color:rgb(34, 34, 34);margin:0px;margin-bottom:0px;margin-top:0px;margin-left:0px;margin-right:0px;padding:0px;padding-bottom:0px;padding-top:0px;padding-left:0px;padding-right:0px;box-sizing:border-box" align="start"><span style="font-size:16px" id="tl_2">لمزيد من المعلومات والصور ، يرجى الاتصال بخدمة العملاء.</span></p>
                    <p><br /></p>
                    <p style="font-family:&quot;Open Sans&quot;, Roboto, Arial, Helvetica, sans-serif, SimSun;font-size:14px;font-weight:400;letter-spacing:normal;line-height:inherit;text-align:start;white-space:normal;color:rgb(34, 34, 34);margin:0px;margin-bottom:0px;margin-top:0px;margin-left:0px;margin-right:0px;padding:0px;padding-bottom:0px;padding-top:0px;padding-left:0px;padding-right:0px;box-sizing:border-box" align="start"><span style="font-size:16px" id="tl_3">لمزيد من المعلومات والصور ، يرجى الاتصال بخدمة العملاء.</span></p>
                    <p><br /></p>
                    <div>
                        <span style="font-size:24px" id="tl_4">نصائح:</span>
                    </div>
                    <div>
                        <span style="font-size:18px" id="tl_5">يرجى استخدام شريط قياس ناعم لتأكيد محيط اليد الفعلي قبل الشراء ، وإضافة سنتيمتر واحد لتحديد الحجم المناسب للارتداء</span>
                    </div>
                    <div>
                        &nbsp;
                    </div>
                    <p style="font-family:&quot;Open Sans&quot;, Roboto, Arial, Helvetica, sans-serif, SimSun;font-size:14px;font-weight:400;letter-spacing:normal;line-height:inherit;text-align:start;white-space:normal;color:rgb(34, 34, 34);margin:0px;margin-bottom:0px;margin-top:0px;margin-left:0px;margin-right:0px;padding:0px;padding-bottom:0px;padding-top:0px;padding-left:0px;padding-right:0px;box-sizing:border-box" align="start"><img src="https://ae01.alicdn.com/kf/Sdc7eb0d7addd4f3faf38db4e0b0eef45x.jpg" slate-data-type="image" /></p></div></div>
                    ', 
                "width" => 0, 
                "height" => 0, 
                "depth" => 0, 
                "weight" => 0, 
                "unlimited_quantity" => "0", 
                "barcode" => null, 
                "brand_name" => "12", 
                "promotion_title" => null, 
                "subtitle" => null, 
                "image" => "", 
                "image_name" => "", 
                "image_label" => "", 
                "image_value" => "", 
                "image_url" => null, 
                "text" => "", 
                "text_name" => "", 
                "text_label" => "", 
                "text_value" => "", 
                "color" => "", 
                "color_name" => "", 
                "color_label" => "", 
                "color_value" => "", 
                "size" => null, 
                "size_label" => null, 
                "created_at" => "2024-04-16 18:25:00", 
                "updated_at" => "2024-10-15 17:35:42", 
                "deleted_at" => null, 
                "enable_note" => null, 
                "enable_upload_image" => null, 
                "maximum_quantity_per_order" => null, 
                "notify_quantity" => null, 
                "require_shipping" => 0,
                "saleable" => 1,
                "html_price" => '<span class="price">‏٣٦٧٫٣٥ ر.س.‏</span>',
                "product" => [
                    "base_image_url" => "https://cdn.twsaa.com/home/23/cd2eeaba-784a-4272-a3f7-3e78262846d0.png"
                ],
            ]
        ],
        [
            'product' => [
                "id" => 102485, 
                "product_id" => 53464, 
                "parent_id" => null, 
                "sku" => "MSKUAE1005006682900581", 
                "name" => "نظارات شمسية مستطيلة سوداء للنساء ، نظارات شمسية نسائية غريبة ، أزياء الحفلات ، مصمم العلامة التجارية ، UV400 ، بيع", 
                "description" => '<div class="detailmodule_html"><div class="detail-desc-decorate-richtext"><p><img src="https://ae01.alicdn.com/kf/S9e1b89e74cc740028300c1333a81390b5.png" slate-data-type="image" /></p> 
                    <p id="tl_1">انقر على المجموعة اتبع متجرنا ، وذلك للعثور على أسرع وإذا كان المتجر قد حدّث المنتج الجديد ، يمكنك الحصول عليه في المرة الأولى.</p> 
                    <p id="tl_2">إذا لم تتمكن من العثور على الموديل الذي تريده ، يرجى الاتصال بنا للحصول على المزيد من الطراز.</p> 
                    <p id="tl_3">لأن هناك العديد من النماذج ، ما زلنا نقوم بالتحميل ، ولم يتم تحميلها كلها.</p> 
                    <p id="tl_4">لذلك إذا كنت بحاجة إلى رؤية المزيد من النماذج ، يرجى الاتصال بنا.</p> 
                    <p><img src="https://ae01.alicdn.com/kf/Saa929797a7ee4aeaaf9d63d9d4c403c7O.png" slate-data-type="image" /></p> 
                    <p><img src="https://ae01.alicdn.com/kf/Sc89d251c03b84aa8b7bbc7c4e237ee57P.jpg" slate-data-type="image" /><img src="https://ae01.alicdn.com/kf/S9a70b16f6969449f8f27df7047a0c5cfS.jpg" slate-data-type="image" /><img src="https://ae01.alicdn.com/kf/S65a6ec4e10f24b28839d041c98b8360cY.jpg" slate-data-type="image" /><img src="https://ae01.alicdn.com/kf/S212f00319bfd46c2b78bfc1f9ed2b975G.jpg" slate-data-type="image" /><img src="https://ae01.alicdn.com/kf/Sb939841c93524c9d83f7f79ccc696d80a.jpg" slate-data-type="image" /><img src="https://ae01.alicdn.com/kf/Sf6b5fd5a090b4703a9e22b9314a39ddd3.jpg" slate-data-type="image" /></p> 
                    <p><img src="https://ae01.alicdn.com/kf/S32e12f6e8df344c0a000e1657965ae1al.png" slate-data-type="image" /></p> 
                    <p id="tl_5">موضع ترحيب انخفاض الشحن.</p> 
                    <p><br /></p> 
                    <p id="tl_6">للشحن المباشر ، يمكننا إرسال البضائع إلى عملائك مباشرة ولن نترك معلومات عنا إذا كنت ترغب في ذلك.</p> 
                    <p><br /></p> 
                    <p id="tl_7">كيف يمكنني تتبع الطرد الخاص بي ؟</p> 
                    <p><br /><br /></p> 
                    <p id="tl_8">يمكنك تتبع الطرد الخاص بك على الموقع الإلكتروني التالي باستخدام رقم التتبع الخاص بك: www.17track.net.en</p> 
                    <p><br /></p> 
                    <p id="tl_9">ماذا يمكنني أن أفعل عندما ينفد وقت حماية الشراء ؟</p> 
                    <p><br /></p> 
                    <p id="tl_10">إذا كان وقت حماية الشراء ينفد ، يرجى الاتصال بنا ويمكننا مساعدتك على تمديده. لذلك لن تذهب أموالك إلى حسابي.</p> 
                    <p><br /></p> 
                    <p id="tl_11">ملاحظات</p> 
                    <p><br /></p> 
                    <p id="tl_12">1. إذا كنت راضيًا عن منتجاتنا وخدماتنا ، يرجى ترك تعليقك الإيجابي و 5 نجوم. و 5 نجوم للحصول على تصنيف مفصل لطلبك.</p> 
                    <p><br /></p> 
                    <p id="tl_13">2. إذا لم تكن راضيًا عن منتجاتنا ، الرجاء الاتصال بنا قبل ترك تعليقات سلبية أو إجراء التقييم التفصيلي ، ونحن نضمن أننا سنحل أي مشاكل لك.</p></div></div>
                    ', 
                "url_key" => "mskuae1005006682900581", 
                "new" => null, 
                "featured" => null, 
                "status" => 1, 
                "thumbnail" => null, 
                "price" => null, 
                "cost" => null, 
                "special_price" => null, 
                "special_price_from" => null, 
                "special_price_to" => null, 
                "delivery_time" => null, 
                "visible_individually" => 1, 
                "min_price" => "431.44", 
                "max_price" => "431.44", 
                "is_vat" => 1, 
                "short_description" => '<div class="detailmodule_html"><div class="detail-desc-decorate-richtext"><p><img src="https://ae01.alicdn.com/kf/S9e1b89e74cc740028300c1333a81390b5.png" slate-data-type="image" /></p> 
                    <p id="tl_1">انقر على المجموعة اتبع متجرنا ، وذلك للعثور على أسرع وإذا كان المتجر قد حدّث المنتج الجديد ، يمكنك الحصول عليه في المرة الأولى.</p> 
                    <p id="tl_2">إذا لم تتمكن من العثور على الموديل الذي تريده ، يرجى الاتصال بنا للحصول على المزيد من الطراز.</p> 
                    <p id="tl_3">لأن هناك العديد من النماذج ، ما زلنا نقوم بالتحميل ، ولم يتم تحميلها كلها.</p> 
                    <p id="tl_4">لذلك إذا كنت بحاجة إلى رؤية المزيد من النماذج ، يرجى الاتصال بنا.</p> 
                    <p><img src="https://ae01.alicdn.com/kf/Saa929797a7ee4aeaaf9d63d9d4c403c7O.png" slate-data-type="image" /></p> 
                    <p><img src="https://ae01.alicdn.com/kf/Sc89d251c03b84aa8b7bbc7c4e237ee57P.jpg" slate-data-type="image" /><img src="https://ae01.alicdn.com/kf/S9a70b16f6969449f8f27df7047a0c5cfS.jpg" slate-data-type="image" /><img src="https://ae01.alicdn.com/kf/S65a6ec4e10f24b28839d041c98b8360cY.jpg" slate-data-type="image" /><img src="https://ae01.alicdn.com/kf/S212f00319bfd46c2b78bfc1f9ed2b975G.jpg" slate-data-type="image" /><img src="https://ae01.alicdn.com/kf/Sb939841c93524c9d83f7f79ccc696d80a.jpg" slate-data-type="image" /><img src="https://ae01.alicdn.com/kf/Sf6b5fd5a090b4703a9e22b9314a39ddd3.jpg" slate-data-type="image" /></p> 
                    <p><img src="https://ae01.alicdn.com/kf/S32e12f6e8df344c0a000e1657965ae1al.png" slate-data-type="image" /></p> 
                    <p id="tl_5">موضع ترحيب انخفاض الشحن.</p> 
                    <p><br /></p> 
                    <p id="tl_6">للشحن المباشر ، يمكننا إرسال البضائع إلى عملائك مباشرة ولن نترك معلومات عنا إذا كنت ترغب في ذلك.</p> 
                    <p><br /></p> 
                    <p id="tl_7">كيف يمكنني تتبع الطرد الخاص بي ؟</p> 
                    <p><br /><br /></p> 
                    <p id="tl_8">يمكنك تتبع الطرد الخاص بك على الموقع الإلكتروني التالي باستخدام رقم التتبع الخاص بك: www.17track.net.en</p> 
                    <p><br /></p> 
                    <p id="tl_9">ماذا يمكنني أن أفعل عندما ينفد وقت حماية الشراء ؟</p> 
                    <p><br /></p> 
                    <p id="tl_10">إذا كان وقت حماية الشراء ينفد ، يرجى الاتصال بنا ويمكننا مساعدتك على تمديده. لذلك لن تذهب أموالك إلى حسابي.</p> 
                    <p><br /></p> 
                    <p id="tl_11">ملاحظات</p> 
                    <p><br /></p> 
                    <p id="tl_12">1. إذا كنت راضيًا عن منتجاتنا وخدماتنا ، يرجى ترك تعليقك الإيجابي و 5 نجوم. و 5 نجوم للحصول على تصنيف مفصل لطلبك.</p> 
                    <p><br /></p> 
                    <p id="tl_13">2. إذا لم تكن راضيًا عن منتجاتنا ، الرجاء الاتصال بنا قبل ترك تعليقات سلبية أو إجراء التقييم التفصيلي ، ونحن نضمن أننا سنحل أي مشاكل لك.</p></div></div>
                    ', 
                "meta_title" => "نظارات شمسية مستطيلة سوداء للنساء ، نظارات شمسية نسائية غريبة ، أزياء الحفلات ، مصمم العلامة التجارية ، UV400 ، بيع", 
                "meta_keywords" => null, 
                "meta_description" => '<div class="detailmodule_html"><div class="detail-desc-decorate-richtext"><p><img src="https://ae01.alicdn.com/kf/S9e1b89e74cc740028300c1333a81390b5.png" slate-data-type="image" /></p> 
                        <p id="tl_1">انقر على المجموعة اتبع متجرنا ، وذلك للعثور على أسرع وإذا كان المتجر قد حدّث المنتج الجديد ، يمكنك الحصول عليه في المرة الأولى.</p> 
                        <p id="tl_2">إذا لم تتمكن من العثور على الموديل الذي تريده ، يرجى الاتصال بنا للحصول على المزيد من الطراز.</p> 
                        <p id="tl_3">لأن هناك العديد من النماذج ، ما زلنا نقوم بالتحميل ، ولم يتم تحميلها كلها.</p> 
                        <p id="tl_4">لذلك إذا كنت بحاجة إلى رؤية المزيد من النماذج ، يرجى الاتصال بنا.</p> 
                        <p><img src="https://ae01.alicdn.com/kf/Saa929797a7ee4aeaaf9d63d9d4c403c7O.png" slate-data-type="image" /></p> 
                        <p><img src="https://ae01.alicdn.com/kf/Sc89d251c03b84aa8b7bbc7c4e237ee57P.jpg" slate-data-type="image" /><img src="https://ae01.alicdn.com/kf/S9a70b16f6969449f8f27df7047a0c5cfS.jpg" slate-data-type="image" /><img src="https://ae01.alicdn.com/kf/S65a6ec4e10f24b28839d041c98b8360cY.jpg" slate-data-type="image" /><img src="https://ae01.alicdn.com/kf/S212f00319bfd46c2b78bfc1f9ed2b975G.jpg" slate-data-type="image" /><img src="https://ae01.alicdn.com/kf/Sb939841c93524c9d83f7f79ccc696d80a.jpg" slate-data-type="image" /><img src="https://ae01.alicdn.com/kf/Sf6b5fd5a090b4703a9e22b9314a39ddd3.jpg" slate-data-type="image" /></p> 
                        <p><img src="https://ae01.alicdn.com/kf/S32e12f6e8df344c0a000e1657965ae1al.png" slate-data-type="image" /></p> 
                        <p id="tl_5">موضع ترحيب انخفاض الشحن.</p> 
                        <p><br /></p> 
                        <p id="tl_6">للشحن المباشر ، يمكننا إرسال البضائع إلى عملائك مباشرة ولن نترك معلومات عنا إذا كنت ترغب في ذلك.</p> 
                        <p><br /></p> 
                        <p id="tl_7">كيف يمكنني تتبع الطرد الخاص بي ؟</p> 
                        <p><br /><br /></p> 
                        <p id="tl_8">يمكنك تتبع الطرد الخاص بك على الموقع الإلكتروني التالي باستخدام رقم التتبع الخاص بك: www.17track.net.en</p> 
                        <p><br /></p> 
                        <p id="tl_9">ماذا يمكنني أن أفعل عندما ينفد وقت حماية الشراء ؟</p> 
                        <p><br /></p> 
                        <p id="tl_10">إذا كان وقت حماية الشراء ينفد ، يرجى الاتصال بنا ويمكننا مساعدتك على تمديده. لذلك لن تذهب أموالك إلى حسابي.</p> 
                        <p><br /></p> 
                        <p id="tl_11">ملاحظات</p> 
                        <p><br /></p> 
                        <p id="tl_12">1. إذا كنت راضيًا عن منتجاتنا وخدماتنا ، يرجى ترك تعليقك الإيجابي و 5 نجوم. و 5 نجوم للحصول على تصنيف مفصل لطلبك.</p> 
                        <p><br /></p> 
                        <p id="tl_13">2. إذا لم تكن راضيًا عن منتجاتنا ، الرجاء الاتصال بنا قبل ترك تعليقات سلبية أو إجراء التقييم التفصيلي ، ونحن نضمن أننا سنحل أي مشاكل لك.</p></div></div>
                        ', 
                "width" => 0, 
                "height" => 0, 
                "depth" => 0, 
                "weight" => 0, 
                "unlimited_quantity" => "0", 
                "barcode" => null, 
                "brand_name" => "12", 
                "promotion_title" => null, 
                "subtitle" => null, 
                "image" => "", 
                "image_name" => "", 
                "image_label" => "", 
                "image_value" => "", 
                "image_url" => null, 
                "text" => "", 
                "text_name" => "", 
                "text_label" => "", 
                "text_value" => "", 
                "color" => "", 
                "color_name" => "", 
                "color_label" => "", 
                "color_value" => "", 
                "size" => null, 
                "size_label" => null, 
                "created_at" => "2024-04-16 18:23:28", 
                "updated_at" => "2024-10-15 17:36:56", 
                "deleted_at" => null, 
                "enable_note" => null, 
                "enable_upload_image" => null, 
                "maximum_quantity_per_order" => null, 
                "notify_quantity" => null, 
                "require_shipping" => 0,
                "saleable" => 1,
                "html_price" => '<span class="price">‏٣٦٧٫٣٥ ر.س.‏</span>',
                "product" => [
                    "base_image_url" => "https://cdn.twsaa.com/home/23/cd2eeaba-784a-4272-a3f7-3e78262846d0.png"
                ],
            ]
        ],
        [
            'product' => [
                "id" => 99206, 
                "product_id" => 51762, 
                "parent_id" => null, 
                "sku" => "RUIQBH6", 
                "name" => "منتج", 
                "description" => "", 
                "url_key" => "ruiqbh6", 
                "new" => null, 
                "featured" => null, 
                "status" => 1, 
                "thumbnail" => null, 
                "price" => "5.00", 
                "cost" => null, 
                "special_price" => null, 
                "special_price_from" => null, 
                "special_price_to" => null, 
                "delivery_time" => null, 
                "visible_individually" => 1, 
                "min_price" => "5.00", 
                "max_price" => "5.00", 
                "is_vat" => 1, 
                "short_description" => null, 
                "meta_title" => "", 
                "meta_keywords" => null, 
                "meta_description" => "", 
                "width" => 0, 
                "height" => 0, 
                "depth" => 0, 
                "weight" => 0, 
                "unlimited_quantity" => "0", 
                "barcode" => null, 
                "brand_name" => "12", 
                "promotion_title" => null, 
                "subtitle" => null, 
                "image" => "", 
                "image_name" => "", 
                "image_label" => "", 
                "image_value" => "", 
                "image_url" => null, 
                "text" => "", 
                "text_name" => "", 
                "text_label" => "", 
                "text_value" => "", 
                "color" => "", 
                "color_name" => "", 
                "color_label" => "", 
                "color_value" => "", 
                "size" => null, 
                "size_label" => null, 
                "created_at" => "2024-03-31 13:04:01", 
                "updated_at" => "2024-10-15 17:37:18", 
                "deleted_at" => null, 
                "enable_note" => null, 
                "enable_upload_image" => null, 
                "maximum_quantity_per_order" => null, 
                "notify_quantity" => null, 
                "require_shipping" => 0,
                "saleable" => 1,
                "html_price" => '<span class="price">‏٣٦٧٫٣٥ ر.س.‏</span>',
                "product" => [
                    "base_image_url" => "https://cdn.twsaa.com/home/23/cd2eeaba-784a-4272-a3f7-3e78262846d0.png"
                ],
            ]
        ],
        [
            'product' => [
                "id" => 74870, 
                "product_id" => 37810, 
                "parent_id" => null, 
                "sku" => "ven-con-1", 
                "name" => "ven-configurable", 
                "description" => "<p>ven-configurableven-configurable</p>", 
                "url_key" => "ven-con-1", 
                "new" => null, 
                "featured" => null, 
                "status" => 1, 
                "thumbnail" => null, 
                "price" => null, 
                "cost" => null, 
                "special_price" => null, 
                "special_price_from" => null, 
                "special_price_to" => null, 
                "delivery_time" => null, 
                "visible_individually" => 1, 
                "min_price" => "7.14", 
                "max_price" => "7.14", 
                "is_vat" => 1, 
                "short_description" => "<p>ven-configurableven-configurable</p>", 
                "meta_title" => "ven-configurable", 
                "meta_keywords" => null, 
                "meta_description" => "<p>ven-configurableven-configurable</p>", 
                "width" => 0, 
                "height" => 0, 
                "depth" => 0, 
                "weight" => 0, 
                "unlimited_quantity" => "0", 
                "barcode" => null, 
                "brand_name" => "12", 
                "promotion_title" => null, 
                "subtitle" => null, 
                "image" => "", 
                "image_name" => "", 
                "image_label" => "", 
                "image_value" => "", 
                "image_url" => null, 
                "text" => "", 
                "text_name" => "", 
                "text_label" => "", 
                "text_value" => "", 
                "color" => "", 
                "color_name" => "", 
                "color_label" => "", 
                "color_value" => "", 
                "size" => null, 
                "size_label" => null, 
                "created_at" => "2024-03-21 12:20:24", 
                "updated_at" => "2024-10-15 17:37:24", 
                "deleted_at" => null, 
                "enable_note" => null, 
                "enable_upload_image" => null, 
                "maximum_quantity_per_order" => null, 
                "notify_quantity" => null, 
                "require_shipping" => 0,
                "saleable" => 1,
                "html_price" => '<span class="price">‏٣٦٧٫٣٥ ر.س.‏</span>',
                "product" => [
                    "base_image_url" => "https://cdn.twsaa.com/home/23/cd2eeaba-784a-4272-a3f7-3e78262846d0.png"
                ],
            ]
        ],
        [
            'product' => [
                "id" => 74868, 
                "product_id" => 37809, 
                "parent_id" => null, 
                "sku" => "TBS50100", 
                "name" => "ورلد كير مناشف للاستعمال مرة واحدة 50×100، 50 قطعة", 
                "description" => "<p>النوع: مناشف للاستعمال مرة واحدة ناعمة على البشرة قدرة عالية على الامتصاص 50 قطعة</p>", 
                "url_key" => "tbs50100", 
                "new" => null, 
                "featured" => null, 
                "status" => 1, 
                "thumbnail" => null, 
                "price" => "73.86", 
                "cost" => "43.45", 
                "special_price" => null, 
                "special_price_from" => null, 
                "special_price_to" => null, 
                "delivery_time" => null, 
                "visible_individually" => 1, 
                "min_price" => "73.86", 
                "max_price" => "73.86", 
                "is_vat" => 1, 
                "short_description" => "<p>النوع: مناشف للاستعمال مرة واحدة ناعمة على البشرة قدرة عالية على الامتصاص 50 قطعة</p>", 
                "meta_title" => "ورلد كير مناشف للاستعمال مرة واحدة 50×100، 50 قطعة", 
                "meta_keywords" => null, 
                "meta_description" => "<p>النوع: مناشف للاستعمال مرة واحدة ناعمة على البشرة قدرة عالية على الامتصاص 50 قطعة</p>", 
                "width" => 0, 
                "height" => 0, 
                "depth" => 0, 
                "weight" => 0.1, 
                "unlimited_quantity" => "0", 
                "barcode" => null, 
                "brand_name" => "12", 
                "promotion_title" => null, 
                "subtitle" => null, 
                "image" => "", 
                "image_name" => "", 
                "image_label" => "", 
                "image_value" => "", 
                "image_url" => null, 
                "text" => "", 
                "text_name" => "", 
                "text_label" => "", 
                "text_value" => "", 
                "color" => "", 
                "color_name" => "", 
                "color_label" => "", 
                "color_value" => "", 
                "size" => null, 
                "size_label" => null, 
                "created_at" => "2024-03-21 12:19:51", 
                "updated_at" => "2024-10-15 17:37:32", 
                "deleted_at" => null, 
                "enable_note" => null, 
                "enable_upload_image" => null, 
                "maximum_quantity_per_order" => null, 
                "notify_quantity" => null, 
                "require_shipping" => 0,
                "saleable" => 1,
                "html_price" => '<span class="price">‏٣٦٧٫٣٥ ر.س.‏</span>',
                "product" => [
                    "base_image_url" => "https://cdn.twsaa.com/home/23/cd2eeaba-784a-4272-a3f7-3e78262846d0.png"
                ],
            ]
        ],
        [
            'product' => [
                "id" => 74866, 
                "product_id" => 37808, 
                "parent_id" => null, 
                "sku" => "QV-0766", 
                "name" => "كريم مرطب للبشرة الحساسة من كيو في 100 جم", 
                "description" => "<p>كريم ترطيب البشرة من كيو في، لتجديد البشرة الجافة بترطيب عالي التركيز. يحتوي على السكوالين ودهون طبيعية التي تمنحك بشره ناعمة ومرنة. الحل الامثل لمناطق الجسم شديدة الجفاف.</p>", 
                "url_key" => "qv-0766", 
                "new" => null, 
                "featured" => null, 
                "status" => 1, 
                "thumbnail" => null, 
                "price" => "68.46", 
                "cost" => "40.27", 
                "special_price" => null, 
                "special_price_from" => null, 
                "special_price_to" => null, 
                "delivery_time" => null, 
                "visible_individually" => 1, 
                "min_price" => "68.46", 
                "max_price" => "68.46", 
                "is_vat" => 1, 
                "short_description" => "<p>كريم ترطيب البشرة من كيو في، لتجديد البشرة الجافة بترطيب عالي التركيز. يحتوي على السكوالين ودهون طبيعية التي تمنحك بشره ناعمة ومرنة. الحل الامثل لمناطق الجسم شديدة الجفاف.</p>", 
                "meta_title" => "كريم مرطب للبشرة الحساسة من كيو في 100 جم", 
                "meta_keywords" => null, 
                "meta_description" => "<p>كريم ترطيب البشرة من كيو في، لتجديد البشرة الجافة بترطيب عالي التركيز. يحتوي على السكوالين ودهون طبيعية التي تمنحك بشره ناعمة ومرنة. الحل الامثل لمناطق الجسم شديدة الجفاف.</p>", 
                "width" => 0, 
                "height" => 0, 
                "depth" => 0, 
                "weight" => 0.1, 
                "unlimited_quantity" => "0", 
                "barcode" => null, 
                "brand_name" => "12", 
                "promotion_title" => null, 
                "subtitle" => null, 
                "image" => "", 
                "image_name" => "", 
                "image_label" => "", 
                "image_value" => "", 
                "image_url" => null, 
                "text" => "", 
                "text_name" => "", 
                "text_label" => "", 
                "text_value" => "", 
                "color" => "", 
                "color_name" => "", 
                "color_label" => "", 
                "color_value" => "", 
                "size" => null, 
                "size_label" => null, 
                "created_at" => "2024-03-21 12:19:47", 
                "updated_at" => "2024-10-15 17:37:39", 
                "deleted_at" => null, 
                "enable_note" => null, 
                "enable_upload_image" => null, 
                "maximum_quantity_per_order" => null, 
                "notify_quantity" => null, 
                "require_shipping" => 0,
                "saleable" => 1,
                "html_price" => '<span class="price">‏٣٦٧٫٣٥ ر.س.‏</span>',
                "product" => [
                    "base_image_url" => "https://cdn.twsaa.com/home/23/cd2eeaba-784a-4272-a3f7-3e78262846d0.png"
                ],
            ]
        ],
        [
            'product' => [
                "id" => 48795, 
                "product_id" => 24644, 
                "parent_id" => null, 
                "sku" => "C3-5-2-3", 
                "name" => "ميلي - شامبو أكليل الجبل والنعناع لتقوية الشعر 355 مل", 
                "description" => "<p>- شامبو تقوية الشعر بأكليل الجبل والنعناع من ميلي أورجانيكس، مملوء بالبيوتين، ينظف ويساعد على تقوية الشعر الضعيف والهش .</p>

                <p>- يغذي وينظف الشعر الجاف أو الضعيف أو الهش باستخدام هذا الشامبو المقوي للشعر الذي يعمل على تنشيط بصيلات الشعر .</p>
                
                <p>- يوفر رطوبة مكثفة لجميع أنواع الشعر بتركيبة لطيفة تغذي وتنظف وتساعد على تقوية الشعر الضعيف والهش .</p>
                
                <p>- مناسبة لمستويات الشعر ذات المسامية المنخفضة والعالية .</p>
                
                <p>- تم تطوير شامبو تقوية الشعر بالروزماري والنعناع من ميلي أورجانيكس لتنظيف شعرك بلطف مع توفير العناصر الغذائية الأساسية .</p>
                
                <p>- مناسب لجميع أنواع الشعر .</p>
                
                <p>المكونات : ماء (أكوا، أو)، الصوديوم C14-16 أوليفين سلفونات، كوكاميدوبروبيل البيتين، بولي كواترنيوم-7، كوكاميد MIPA، جليكول ستيرات، بوليكواترنيوم-10، بانثينول، بروبيلين جليكول، زيت النعناع بيبيريتا (النعناع)، زيت أوراق إكليل الجبل (إكليل الجبل). ، ثنائي الصوديومEDTA، فيتانتريول، * زيت بذور الأوربينيا أوليفيرا (الباباسو)، * زيت جذر الزنجبيل (الزنجبيل)، * زيت جوز الهند نوسيفيرا (جوز الهند)، مستخلص عشبة ذيل الحصان (Equisetum Arvense)، مستخلص لوسونيا إنيرميس (الحناء)، روزمارينوس أوفيسيناليس ( مستخلصأوراق إكليل الجبل، مستخلص زهرة أنثيميس نوبيليس (البابونج)، مستخلص أوراق سيمفيتوم أوفيسينال (السنفيتون)، مستخلص هومولوس لوبولوس (الجنجل)، مستخلص أورتيك ديويكا (نبات القراص)، العسل، البيوتين، زيت بذور ريسينوس كومونيس (الخروع)، فينوكسيإيثانول، البنزويك. حمض، إيثيل هكسيل جليسرين، جليسيريث-2 كاكاو، عطر (عطر) *مكونات عضوية معتمدة</p>
                
                <p>طريقة الاستخدام : وزعي كمية بسيطة على اليدين ودلكيها على فروة الراس المبللة بالماء للحصول على رغوة غنية</p>
                
                <p>ثم يشطف الشعر جيداً بالماء &nbsp;</p>", 
                "url_key" => "c3-5-2-3", 
                "new" => null, 
                "featured" => null, 
                "status" => 1, 
                "thumbnail" => null, 
                "price" => "67.83", 
                "cost" => "39.90", 
                "special_price" => null, 
                "special_price_from" => null, 
                "special_price_to" => null, 
                "delivery_time" => null, 
                "visible_individually" => 1, 
                "min_price" => "67.83", 
                "max_price" => "67.83", 
                "is_vat" => 1, 
                "short_description" => "<p>- شامبو تقوية الشعر بأكليل الجبل والنعناع من ميلي أورجانيكس، مملوء بالبيوتين، ينظف ويساعد على تقوية الشعر الضعيف والهش .</p>

                    <p>- يغذي وينظف الشعر الجاف أو الضعيف أو الهش باستخدام هذا الشامبو المقوي للشعر الذي يعمل على تنشيط بصيلات الشعر .</p>
                    
                    <p>- يوفر رطوبة مكثفة لجميع أنواع الشعر بتركيبة لطيفة تغذي وتنظف وتساعد على تقوية الشعر الضعيف والهش .</p>
                    
                    <p>- مناسبة لمستويات الشعر ذات المسامية المنخفضة والعالية .</p>
                    
                    <p>- تم تطوير شامبو تقوية الشعر بالروزماري والنعناع من ميلي أورجانيكس لتنظيف شعرك بلطف مع توفير العناصر الغذائية الأساسية .</p>
                    
                    <p>- مناسب لجميع أنواع الشعر .</p>
                    
                    <p>المكونات : ماء (أكوا، أو)، الصوديوم C14-16 أوليفين سلفونات، كوكاميدوبروبيل البيتين، بولي كواترنيوم-7، كوكاميد MIPA، جليكول ستيرات، بوليكواترنيوم-10، بانثينول، بروبيلين جليكول، زيت النعناع بيبيريتا (النعناع)، زيت أوراق إكليل الجبل (إكليل الجبل). ، ثنائي الصوديومEDTA، فيتانتريول، * زيت بذور الأوربينيا أوليفيرا (الباباسو)، * زيت جذر الزنجبيل (الزنجبيل)، * زيت جوز الهند نوسيفيرا (جوز الهند)، مستخلص عشبة ذيل الحصان (Equisetum Arvense)، مستخلص لوسونيا إنيرميس (الحناء)، روزمارينوس أوفيسيناليس ( مستخلصأوراق إكليل الجبل، مستخلص زهرة أنثيميس نوبيليس (البابونج)، مستخلص أوراق سيمفيتوم أوفيسينال (السنفيتون)، مستخلص هومولوس لوبولوس (الجنجل)، مستخلص أورتيك ديويكا (نبات القراص)، العسل، البيوتين، زيت بذور ريسينوس كومونيس (الخروع)، فينوكسيإيثانول، البنزويك. حمض، إيثيل هكسيل جليسرين، جليسيريث-2 كاكاو، عطر (عطر) *مكونات عضوية معتمدة</p>
                    
                    <p>طريقة الاستخدام : وزعي كمية بسيطة على اليدين ودلكيها على فروة الراس المبللة بالماء للحصول على رغوة غنية</p>
                    
                    <p>ثم يشطف الشعر جيداً بالماء &nbsp;</p>", 
                "meta_title" => "ميلي - شامبو أكليل الجبل والنعناع لتقوية الشعر 355 مل", 
                "meta_keywords" => null, 
                "meta_description" => "<p>- شامبو تقوية الشعر بأكليل الجبل والنعناع من ميلي أورجانيكس، مملوء بالبيوتين، ينظف ويساعد على تقوية الشعر الضعيف والهش .</p>

                <p>- يغذي وينظف الشعر الجاف أو الضعيف أو الهش باستخدام هذا الشامبو المقوي للشعر الذي يعمل على تنشيط بصيلات الشعر .</p>
                
                <p>- يوفر رطوبة مكثفة لجميع أنواع الشعر بتركيبة لطيفة تغذي وتنظف وتساعد على تقوية الشعر الضعيف والهش .</p>
                
                <p>- مناسبة لمستويات الشعر ذات المسامية المنخفضة والعالية .</p>
                
                <p>- تم تطوير شامبو تقوية الشعر بالروزماري والنعناع من ميلي أورجانيكس لتنظيف شعرك بلطف مع توفير العناصر الغذائية الأساسية .</p>
                
                <p>- مناسب لجميع أنواع الشعر .</p>
                
                <p>المكونات : ماء (أكوا، أو)، الصوديوم C14-16 أوليفين سلفونات، كوكاميدوبروبيل البيتين، بولي كواترنيوم-7، كوكاميد MIPA، جليكول ستيرات، بوليكواترنيوم-10، بانثينول، بروبيلين جليكول، زيت النعناع بيبيريتا (النعناع)، زيت أوراق إكليل الجبل (إكليل الجبل). ، ثنائي الصوديومEDTA، فيتانتريول، * زيت بذور الأوربينيا أوليفيرا (الباباسو)، * زيت جذر الزنجبيل (الزنجبيل)، * زيت جوز الهند نوسيفيرا (جوز الهند)، مستخلص عشبة ذيل الحصان (Equisetum Arvense)، مستخلص لوسونيا إنيرميس (الحناء)، روزمارينوس أوفيسيناليس ( مستخلصأوراق إكليل الجبل، مستخلص زهرة أنثيميس نوبيليس (البابونج)، مستخلص أوراق سيمفيتوم أوفيسينال (السنفيتون)، مستخلص هومولوس لوبولوس (الجنجل)، مستخلص أورتيك ديويكا (نبات القراص)، العسل، البيوتين، زيت بذور ريسينوس كومونيس (الخروع)، فينوكسيإيثانول، البنزويك. حمض، إيثيل هكسيل جليسرين، جليسيريث-2 كاكاو، عطر (عطر) *مكونات عضوية معتمدة</p>
                
                <p>طريقة الاستخدام : وزعي كمية بسيطة على اليدين ودلكيها على فروة الراس المبللة بالماء للحصول على رغوة غنية</p>
                
                <p>ثم يشطف الشعر جيداً بالماء &nbsp;</p>", 
                "width" => 0, 
                "height" => 0, 
                "depth" => 0, 
                "weight" => 0.3, 
                "unlimited_quantity" => "0", 
                "barcode" => null, 
                "brand_name" => "12", 
                "promotion_title" => null, 
                "subtitle" => null, 
                "image" => "", 
                "image_name" => "", 
                "image_label" => "", 
                "image_value" => "", 
                "image_url" => null, 
                "text" => "", 
                "text_name" => "", 
                "text_label" => "", 
                "text_value" => "", 
                "color" => "", 
                "color_name" => "", 
                "color_label" => "", 
                "color_value" => "", 
                "size" => null, 
                "size_label" => null, 
                "created_at" => "2024-02-08 15:39:54", 
                "updated_at" => "2024-10-15 17:37:44", 
                "deleted_at" => null, 
                "enable_note" => null, 
                "enable_upload_image" => null, 
                "maximum_quantity_per_order" => null, 
                "notify_quantity" => null, 
                "require_shipping" => 0,
                "saleable" => 1,
                "html_price" => '<span class="price">‏٣٦٧٫٣٥ ر.س.‏</span>',
                "product" => [
                    "base_image_url" => "https://cdn.twsaa.com/home/23/cd2eeaba-784a-4272-a3f7-3e78262846d0.png"
                ],
            ]
        ],
        [
            'product' => [
                "id" => 48793, 
                "product_id" => 24643, 
                "parent_id" => null, 
                "sku" => "C3-5-2-4", 
                "name" => "ميلي - قناع تقوية الشعر بأكليل الجبل والنعناع 340 جم", 
                "description" => "<p>تغذية عميقة للشعر التالف: يدمج قناعنا الغني بالمغذيات بالبيوتين بالصبار والعسل ومزيج من الزيوت العطرية المغذية لخلق مظهر مكثف</p>

                    <p>قومي بتغذية وترطيب وتقوية شعرك في وقت واحد مع هذه التركيبة الغنية بالمغذيات مع مكونات عضوية طبيعية مثل إكليل الجبل وزيت المنثا.</p>
                    
                    <p>قناع مجدد ومرطب عميق للشعر الجاف المتعطش.</p>
                    
                    <p>تغذي وترطب وتقوي كل ذلك في وقت واحد مع هذه التركيبة الغنية بالمغذيات.</p>
                    
                    <p>تم تطويره لتلبية احتياجات شعرك</p>
                    
                    <p>مصنوع من مكونات عضوية معتمدة ومحمل بالبيوتين</p>
                    
                    <p>تم تطوير قناع تقوية الشعر بالروزماري والنعناع مع وضع أكبر احتياجات شعرك في الاعتبار.</p>
                    
                    <p>طريقة الاستخدام:</p>
                    
                    <p>بعد غسل الشعر بالشامبو بشامبو مقوي بالروزماري والنعناع ، قم بتنعيمه بالتساوي من خلال الشعر الرطب من الجذور إلى الأطراف. اتركيه خلال 15-20 دقيقة. شطف جيدا.</p>
                    
                    <p>المكونات:</p>
                    
                    <p>ماء (أكوا ، ماء) ، بهينتريمونيوم ميثوسلفات ، كحول سيتريل ، عصير أوراق الصبار بربادنسيس (مزوَّد اللون) ، زيت اللوز الحلو (اللوز الحلو) ، زيت بذور هيليانثوس أنوس (دوار الشمس) ، زيت فاكهة أوليا يوروبا (زيتون) ، كوبرنيكوبا سيريفيرا ) الشمع ، بولي سوربات -20 ، زيت بذور المكاديميا إنتجريفوليا ، جليسريل ستيرات ، زبدة بوتيروسبيرموم باركي (الشيا) ، توكوفيريل أسيتات ، * زيت بذور Orbignya Oleifera (باباسو) ، * Zingiber Officinale (الزنجبيل) زيت الجذر ، * جوز الهند Nucifera ، بانثينول ، فيتانتريول ، زيت النعناع ، زيت أوراق إكليل الجبل (إكليل الجبل) ، زيت بذور سيموندسيا تشينينسيس (الجوجوبا) ، زيت بذور ريسينوس كومونيس (خروع) ، مستخلص عشب ذيل الحصان ، مستخلص لاوسونيا إنرميس (حناء) (إكليل الجبل) مستخلص أوراق الشجر ، مستخلص زهرة Anthemis Nobilis (البابونج) ، مستخلص السيمفيتم الرسمي (أوراق الكومفري) ، مستخلص Humulus Lupulus (القفزات) ، خلاصة Urtica Dioica (نبات القراص) ، العسل ، البيوتين ، كلوريد السيتريمونيوم ، Sesamum Indicum ( السمسم) زيت بذور ، فينوكسي إيثانول ، حمض البنزويك ، إيثيل هكسيل جليسرين ، جلسريث -2 كوكوات &nbsp;</p>", 
                "url_key" => "c3-5-2-4", 
                "new" => null, 
                "featured" => null, 
                "status" => 1, 
                "thumbnail" => null, 
                "price" => "71.50", 
                "cost" => "42.06", 
                "special_price" => null, 
                "special_price_from" => null, 
                "special_price_to" => null, 
                "delivery_time" => null, 
                "visible_individually" => 1, 
                "min_price" => "71.50", 
                "max_price" => "71.50", 
                "is_vat" => 1, 
                "short_description" => "<p>تغذية عميقة للشعر التالف: يدمج قناعنا الغني بالمغذيات بالبيوتين بالصبار والعسل ومزيج من الزيوت العطرية المغذية لخلق مظهر مكثف</p>

                    <p>قومي بتغذية وترطيب وتقوية شعرك في وقت واحد مع هذه التركيبة الغنية بالمغذيات مع مكونات عضوية طبيعية مثل إكليل الجبل وزيت المنثا.</p>
                    
                    <p>قناع مجدد ومرطب عميق للشعر الجاف المتعطش.</p>
                    
                    <p>تغذي وترطب وتقوي كل ذلك في وقت واحد مع هذه التركيبة الغنية بالمغذيات.</p>
                    
                    <p>تم تطويره لتلبية احتياجات شعرك</p>
                    
                    <p>مصنوع من مكونات عضوية معتمدة ومحمل بالبيوتين</p>
                    
                    <p>تم تطوير قناع تقوية الشعر بالروزماري والنعناع مع وضع أكبر احتياجات شعرك في الاعتبار.</p>
                    
                    <p>طريقة الاستخدام:</p>
                    
                    <p>بعد غسل الشعر بالشامبو بشامبو مقوي بالروزماري والنعناع ، قم بتنعيمه بالتساوي من خلال الشعر الرطب من الجذور إلى الأطراف. اتركيه خلال 15-20 دقيقة. شطف جيدا.</p>
                    
                    <p>المكونات:</p>
                    
                    <p>ماء (أكوا ، ماء) ، بهينتريمونيوم ميثوسلفات ، كحول سيتريل ، عصير أوراق الصبار بربادنسيس (مزوَّد اللون) ، زيت اللوز الحلو (اللوز الحلو) ، زيت بذور هيليانثوس أنوس (دوار الشمس) ، زيت فاكهة أوليا يوروبا (زيتون) ، كوبرنيكوبا سيريفيرا ) الشمع ، بولي سوربات -20 ، زيت بذور المكاديميا إنتجريفوليا ، جليسريل ستيرات ، زبدة بوتيروسبيرموم باركي (الشيا) ، توكوفيريل أسيتات ، * زيت بذور Orbignya Oleifera (باباسو) ، * Zingiber Officinale (الزنجبيل) زيت الجذر ، * جوز الهند Nucifera ، بانثينول ، فيتانتريول ، زيت النعناع ، زيت أوراق إكليل الجبل (إكليل الجبل) ، زيت بذور سيموندسيا تشينينسيس (الجوجوبا) ، زيت بذور ريسينوس كومونيس (خروع) ، مستخلص عشب ذيل الحصان ، مستخلص لاوسونيا إنرميس (حناء) (إكليل الجبل) مستخلص أوراق الشجر ، مستخلص زهرة Anthemis Nobilis (البابونج) ، مستخلص السيمفيتم الرسمي (أوراق الكومفري) ، مستخلص Humulus Lupulus (القفزات) ، خلاصة Urtica Dioica (نبات القراص) ، العسل ، البيوتين ، كلوريد السيتريمونيوم ، Sesamum Indicum ( السمسم) زيت بذور ، فينوكسي إيثانول ، حمض البنزويك ، إيثيل هكسيل جليسرين ، جلسريث -2 كوكوات &nbsp;</p>", 
                "meta_title" => "ميلي - قناع تقوية الشعر بأكليل الجبل والنعناع 340 جم", 
                "meta_keywords" => null, 
                "meta_description" => "<p>تغذية عميقة للشعر التالف: يدمج قناعنا الغني بالمغذيات بالبيوتين بالصبار والعسل ومزيج من الزيوت العطرية المغذية لخلق مظهر مكثف</p>

                    <p>قومي بتغذية وترطيب وتقوية شعرك في وقت واحد مع هذه التركيبة الغنية بالمغذيات مع مكونات عضوية طبيعية مثل إكليل الجبل وزيت المنثا.</p>
                    
                    <p>قناع مجدد ومرطب عميق للشعر الجاف المتعطش.</p>
                    
                    <p>تغذي وترطب وتقوي كل ذلك في وقت واحد مع هذه التركيبة الغنية بالمغذيات.</p>
                    
                    <p>تم تطويره لتلبية احتياجات شعرك</p>
                    
                    <p>مصنوع من مكونات عضوية معتمدة ومحمل بالبيوتين</p>
                    
                    <p>تم تطوير قناع تقوية الشعر بالروزماري والنعناع مع وضع أكبر احتياجات شعرك في الاعتبار.</p>
                    
                    <p>طريقة الاستخدام:</p>
                    
                    <p>بعد غسل الشعر بالشامبو بشامبو مقوي بالروزماري والنعناع ، قم بتنعيمه بالتساوي من خلال الشعر الرطب من الجذور إلى الأطراف. اتركيه خلال 15-20 دقيقة. شطف جيدا.</p>
                    
                    <p>المكونات:</p>
                    
                    <p>ماء (أكوا ، ماء) ، بهينتريمونيوم ميثوسلفات ، كحول سيتريل ، عصير أوراق الصبار بربادنسيس (مزوَّد اللون) ، زيت اللوز الحلو (اللوز الحلو) ، زيت بذور هيليانثوس أنوس (دوار الشمس) ، زيت فاكهة أوليا يوروبا (زيتون) ، كوبرنيكوبا سيريفيرا ) الشمع ، بولي سوربات -20 ، زيت بذور المكاديميا إنتجريفوليا ، جليسريل ستيرات ، زبدة بوتيروسبيرموم باركي (الشيا) ، توكوفيريل أسيتات ، * زيت بذور Orbignya Oleifera (باباسو) ، * Zingiber Officinale (الزنجبيل) زيت الجذر ، * جوز الهند Nucifera ، بانثينول ، فيتانتريول ، زيت النعناع ، زيت أوراق إكليل الجبل (إكليل الجبل) ، زيت بذور سيموندسيا تشينينسيس (الجوجوبا) ، زيت بذور ريسينوس كومونيس (خروع) ، مستخلص عشب ذيل الحصان ، مستخلص لاوسونيا إنرميس (حناء) (إكليل الجبل) مستخلص أوراق الشجر ، مستخلص زهرة Anthemis Nobilis (البابونج) ، مستخلص السيمفيتم الرسمي (أوراق الكومفري) ، مستخلص Humulus Lupulus (القفزات) ، خلاصة Urtica Dioica (نبات القراص) ، العسل ، البيوتين ، كلوريد السيتريمونيوم ، Sesamum Indicum ( السمسم) زيت بذور ، فينوكسي إيثانول ، حمض البنزويك ، إيثيل هكسيل جليسرين ، جلسريث -2 كوكوات &nbsp;</p>", 
                "width" => 0, 
                "height" => 0, 
                "depth" => 0, 
                "weight" => 0.3, 
                "unlimited_quantity" => "0", 
                "barcode" => null, 
                "brand_name" => "12", 
                "promotion_title" => null, 
                "subtitle" => null, 
                "image" => "", 
                "image_name" => "", 
                "image_label" => "", 
                "image_value" => "", 
                "image_url" => null, 
                "text" => "", 
                "text_name" => "", 
                "text_label" => "", 
                "text_value" => "", 
                "color" => "", 
                "color_name" => "", 
                "color_label" => "", 
                "color_value" => "", 
                "size" => null, 
                "size_label" => null, 
                "created_at" => "2024-02-08 15:39:42", 
                "updated_at" => "2024-10-15 17:37:50", 
                "deleted_at" => null, 
                "enable_note" => null, 
                "enable_upload_image" => null, 
                "maximum_quantity_per_order" => null, 
                "notify_quantity" => null, 
                "require_shipping" => 0,
                "saleable" => 1,
                "html_price" => '<span class="price">‏٣٦٧٫٣٥ ر.س.‏</span>',
                "product" => [
                    "base_image_url" => "https://cdn.twsaa.com/home/23/cd2eeaba-784a-4272-a3f7-3e78262846d0.png"
                ],
            ]
        ],
        [
            'product' => [
                "id" => 48791, 
                "product_id" => 24642, 
                "parent_id" => null, 
                "sku" => "C3-5-2-5", 
                "name" => "ميلي - بلسم أكليل الجبل والنعناع لتقوية الشعر 355 مل", 
                "description" => "<p>تم تطوير بلسم تقوية الشعر الذي لا يحتاج إلى شطفه بإكليل الجبل والنعناع لتلبية احتياجات شعرك.</p>

                    <p>&bull; محمل بالبيوتين &bull; تألق مذهل &bull; يحبس الرطوبة</p>
                    
                    <p>غني بالبيوتين وإكليل الجبل، هذا الترطيب الذي لا يترك أثراً مع الحماية والترطيب.</p>
                    
                    <p>المكونات: ماء، جليسرين، بيهنتريمونيوم ميثوسولفات، كحول سيتريل، كحول ستياريلي، زيت برونوس أميغدالوس دولسيس (اللوز الحلو)، كحول سيتيل، سيترات ثلاثي إيثيل، زيت فاكهة أوليا يوروبيا (الزيتون)، عطر، بيوتين، زيت بيرسي جراتيسيما (الأفوكادو)، سمسم. زيت بذور إنديكوم (السمسم)، سيتيريث-20، زيت أوراق إكليل الجبل (إكليل الجبل)، زيت جذر الزنجبيل (الزنجبيل)، زيت النعناع بيبيريتا (النعناع)، البروبيلين جليكول، مستخلص زهرة البابونج ريكوتيتا (ماتريكاريا)، فاكهة/أوراق نبات فاكسينيوم ميرتيلوس. مستخلص، مستخلص Saccharum Officinarum (قصب السكر)، مستخلص فاكهة Citrus Aurantium Dulcis (البرتقال)، مستخلص فاكهة الليمون الحمضي (الليمون)، مستخلص Acer Saccharum (سكر القيقب)، فينوكسي إيثانول، كابريليل جلايكول، بوليسوربات 20.</p>", 
                "url_key" => "c3-5-2-5", 
                "new" => null, 
                "featured" => null, 
                "status" => 1, 
                "thumbnail" => null, 
                "price" => "67.83", 
                "cost" => "39.90", 
                "special_price" => null, 
                "special_price_from" => null, 
                "special_price_to" => null, 
                "delivery_time" => null, 
                "visible_individually" => 1, 
                "min_price" => "67.83", 
                "max_price" => "67.83", 
                "is_vat" => 1, 
                "short_description" => "<p>تم تطوير بلسم تقوية الشعر الذي لا يحتاج إلى شطفه بإكليل الجبل والنعناع لتلبية احتياجات شعرك.</p>

                    <p>&bull; محمل بالبيوتين &bull; تألق مذهل &bull; يحبس الرطوبة</p>
                    
                    <p>غني بالبيوتين وإكليل الجبل، هذا الترطيب الذي لا يترك أثراً مع الحماية والترطيب.</p>
                    
                    <p>المكونات: ماء، جليسرين، بيهنتريمونيوم ميثوسولفات، كحول سيتريل، كحول ستياريلي، زيت برونوس أميغدالوس دولسيس (اللوز الحلو)، كحول سيتيل، سيترات ثلاثي إيثيل، زيت فاكهة أوليا يوروبيا (الزيتون)، عطر، بيوتين، زيت بيرسي جراتيسيما (الأفوكادو)، سمسم. زيت بذور إنديكوم (السمسم)، سيتيريث-20، زيت أوراق إكليل الجبل (إكليل الجبل)، زيت جذر الزنجبيل (الزنجبيل)، زيت النعناع بيبيريتا (النعناع)، البروبيلين جليكول، مستخلص زهرة البابونج ريكوتيتا (ماتريكاريا)، فاكهة/أوراق نبات فاكسينيوم ميرتيلوس. مستخلص، مستخلص Saccharum Officinarum (قصب السكر)، مستخلص فاكهة Citrus Aurantium Dulcis (البرتقال)، مستخلص فاكهة الليمون الحمضي (الليمون)، مستخلص Acer Saccharum (سكر القيقب)، فينوكسي إيثانول، كابريليل جلايكول، بوليسوربات 20.</p>", 
                "meta_title" => "ميلي - بلسم أكليل الجبل والنعناع لتقوية الشعر 355 مل", 
                "meta_keywords" => null, 
                "meta_description" => "<p>تم تطوير بلسم تقوية الشعر الذي لا يحتاج إلى شطفه بإكليل الجبل والنعناع لتلبية احتياجات شعرك.</p>

                    <p>&bull; محمل بالبيوتين &bull; تألق مذهل &bull; يحبس الرطوبة</p>
                    
                    <p>غني بالبيوتين وإكليل الجبل، هذا الترطيب الذي لا يترك أثراً مع الحماية والترطيب.</p>
                    
                    <p>المكونات: ماء، جليسرين، بيهنتريمونيوم ميثوسولفات، كحول سيتريل، كحول ستياريلي، زيت برونوس أميغدالوس دولسيس (اللوز الحلو)، كحول سيتيل، سيترات ثلاثي إيثيل، زيت فاكهة أوليا يوروبيا (الزيتون)، عطر، بيوتين، زيت بيرسي جراتيسيما (الأفوكادو)، سمسم. زيت بذور إنديكوم (السمسم)، سيتيريث-20، زيت أوراق إكليل الجبل (إكليل الجبل)، زيت جذر الزنجبيل (الزنجبيل)، زيت النعناع بيبيريتا (النعناع)، البروبيلين جليكول، مستخلص زهرة البابونج ريكوتيتا (ماتريكاريا)، فاكهة/أوراق نبات فاكسينيوم ميرتيلوس. مستخلص، مستخلص Saccharum Officinarum (قصب السكر)، مستخلص فاكهة Citrus Aurantium Dulcis (البرتقال)، مستخلص فاكهة الليمون الحمضي (الليمون)، مستخلص Acer Saccharum (سكر القيقب)، فينوكسي إيثانول، كابريليل جلايكول، بوليسوربات 20.</p>", 
                "width" => 0, 
                "height" => 0, 
                "depth" => 0, 
                "weight" => 0.3, 
                "unlimited_quantity" => "0", 
                "barcode" => null, 
                "brand_name" => "12", 
                "promotion_title" => null, 
                "subtitle" => null, 
                "image" => "", 
                "image_name" => "", 
                "image_label" => "", 
                "image_value" => "", 
                "image_url" => null, 
                "text" => "", 
                "text_name" => "", 
                "text_label" => "", 
                "text_value" => "", 
                "color" => "", 
                "color_name" => "", 
                "color_label" => "", 
                "color_value" => "", 
                "size" => null, 
                "size_label" => null, 
                "created_at" => "2024-02-08 15:39:37", 
                "updated_at" => "2024-10-15 17:37:55", 
                "deleted_at" => null, 
                "enable_note" => null, 
                "enable_upload_image" => null, 
                "maximum_quantity_per_order" => null, 
                "notify_quantity" => null, 
                "require_shipping" => 0,
                "saleable" => 1,
                "html_price" => '<span class="price">‏٣٦٧٫٣٥ ر.س.‏</span>',
                "product" => [
                    "base_image_url" => "https://cdn.twsaa.com/home/23/cd2eeaba-784a-4272-a3f7-3e78262846d0.png"
                ],
            ]
        ],
        [
            'product' => [
                "id" => 48789, 
                "product_id" => 24641, 
                "parent_id" => null, 
                "sku" => "C3-5-5-7", 
                "name" => "ميلي - بلسم مقوي للشعر باكليل الجبل والنعناع 355 مل", 
                "description" => "<p>يوفر بلسم تقوية الروزماري والنعناع التوازن المثالي بين القوة والرطوبة لتحسين الحالة العامة للشعر وفروة الرأس. ينعم ويفك التشابك على الفور لزيادة سهولة التحكم. يدعم شعر أطول وأكثر صحة.</p>

                <ul>
                    <li>يوفر التوازن المثالي بين القوة والرطوبة.</li>
                    <li>غني بالبيوتين ويمنحك لمعاناً مذهلاً.</li>
                    <li>ينعم ويفك التشابك على الفور.</li>
                    <li>يدعم شعر أطول وأكثر صحة.</li>
                    <li>خالي من البارابين، الكبريتات، البارافينات، الزيوت المعدنية، DEA.</li>
                    <li>تركيبه لجميع أنواع الشعر.</li>
                </ul>", 
                "url_key" => "c3-5-5-7", 
                "new" => null, 
                "featured" => null, 
                "status" => 1, 
                "thumbnail" => null, 
                "price" => "73.25", 
                "cost" => "43.09", 
                "special_price" => null, 
                "special_price_from" => null, 
                "special_price_to" => null, 
                "delivery_time" => null, 
                "visible_individually" => 1, 
                "min_price" => "73.25", 
                "max_price" => "73.25", 
                "is_vat" => 1, 
                "short_description" => "<p>يوفر بلسم تقوية الروزماري والنعناع التوازن المثالي بين القوة والرطوبة لتحسين الحالة العامة للشعر وفروة الرأس. ينعم ويفك التشابك على الفور لزيادة سهولة التحكم. يدعم شعر أطول وأكثر صحة.</p>

                <ul>
                    <li>يوفر التوازن المثالي بين القوة والرطوبة.</li>
                    <li>غني بالبيوتين ويمنحك لمعاناً مذهلاً.</li>
                    <li>ينعم ويفك التشابك على الفور.</li>
                    <li>يدعم شعر أطول وأكثر صحة.</li>
                    <li>خالي من البارابين، الكبريتات، البارافينات، الزيوت المعدنية، DEA.</li>
                    <li>تركيبه لجميع أنواع الشعر.</li>
                </ul>", 
                "meta_title" => "ميلي - بلسم مقوي للشعر باكليل الجبل والنعناع 355 مل", 
                "meta_keywords" => null, 
                "meta_description" => "<p>يوفر بلسم تقوية الروزماري والنعناع التوازن المثالي بين القوة والرطوبة لتحسين الحالة العامة للشعر وفروة الرأس. ينعم ويفك التشابك على الفور لزيادة سهولة التحكم. يدعم شعر أطول وأكثر صحة.</p>

                <ul>
                    <li>يوفر التوازن المثالي بين القوة والرطوبة.</li>
                    <li>غني بالبيوتين ويمنحك لمعاناً مذهلاً.</li>
                    <li>ينعم ويفك التشابك على الفور.</li>
                    <li>يدعم شعر أطول وأكثر صحة.</li>
                    <li>خالي من البارابين، الكبريتات، البارافينات، الزيوت المعدنية، DEA.</li>
                    <li>تركيبه لجميع أنواع الشعر.</li>
                </ul>", 
                "width" => 0, 
                "height" => 0, 
                "depth" => 0, 
                "weight" => 0.4, 
                "unlimited_quantity" => "0", 
                "barcode" => null, 
                "brand_name" => "12", 
                "promotion_title" => null, 
                "subtitle" => null, 
                "image" => "", 
                "image_name" => "", 
                "image_label" => "", 
                "image_value" => "", 
                "image_url" => null, 
                "text" => "", 
                "text_name" => "", 
                "text_label" => "", 
                "text_value" => "", 
                "color" => "", 
                "color_name" => "", 
                "color_label" => "", 
                "color_value" => "", 
                "size" => null, 
                "size_label" => null, 
                "created_at" => "2024-02-08 15:39:33", 
                "updated_at" => "2024-10-15 17:38:00", 
                "deleted_at" => null, 
                "enable_note" => null, 
                "enable_upload_image" => null, 
                "maximum_quantity_per_order" => null, 
                "notify_quantity" => null, 
                "require_shipping" => 0,
                "saleable" => 1,
                "html_price" => '<span class="price">‏٣٦٧٫٣٥ ر.س.‏</span>',
                "product" => [
                    "base_image_url" => "https://cdn.twsaa.com/home/23/cd2eeaba-784a-4272-a3f7-3e78262846d0.png"
                ],
            ]
        ]
    ]; 
    return $context;
}

function products() {
    $context['authUser'] = auth();
    $context['products'] = [
        [
            'product' => [
                "id" => 107667, 
                "product_id" => 56118, 
                "parent_id" => null, 
                "sku" => "OUU1RO7", 
                "name" => "ebook", 
                "description" => null, 
                "url_key" => "ouu1ro7", 
                "new" => null, 
                "featured" => null, 
                "status" => 1, 
                "thumbnail" => null, 
                "price" => "1.00", 
                "cost" => null, 
                "special_price" => null, 
                "special_price_from" => null, 
                "special_price_to" => null, 
                "delivery_time" => null, 
                "visible_individually" => 1, 
                "min_price" => "1.00", 
                "max_price" => "1.00", 
                "is_vat" => 1, 
                "short_description" => null, 
                "meta_title" => null, 
                "meta_keywords" => null, 
                "meta_description" => null, 
                "width" => 0, 
                "height" => 0, 
                "depth" => 0, 
                "weight" => 0, 
                "unlimited_quantity" => "0", 
                "barcode" => null, 
                "brand_name" => "12", 
                "promotion_title" => null, 
                "subtitle" => null, 
                "image" => "", 
                "image_name" => "", 
                "image_label" => "", 
                "image_value" => "", 
                "image_url" => null, 
                "text" => "", 
                "text_name" => "", 
                "text_label" => "", 
                "text_value" => "", 
                "color" => "", 
                "color_name" => "", 
                "color_label" => "", 
                "color_value" => "", 
                "size" => null, 
                "size_label" => null, 
                "created_at" => "2024-09-12 14:10:05", 
                "updated_at" => "2024-10-15 17:33:53", 
                "deleted_at" => null, 
                "enable_note" => null, 
                "enable_upload_image" => null, 
                "maximum_quantity_per_order" => null, 
                "notify_quantity" => null, 
                "require_shipping" => 0,
                "saleable" => 1,
                "html_price" => '<span class="price">‏٣٦٧٫٣٥ ر.س.‏</span>',
                "product" => [
                    "base_image_url" => "https://cdn.twsaa.com/home/23/cd2eeaba-784a-4272-a3f7-3e78262846d0.png"
                ],
            ]
        ],
        [
            'product' => [
                "id" => 107663, 
                "product_id" => 56116, 
                "parent_id" => null, 
                "sku" => "N2-4-5-3", 
                "name" => "ثلاجة الجمال سباركلنق لافندر 4 لتر", 
                "description" => " ", 
                "url_key" => "n2-4-5-3", 
                "new" => null, 
                "featured" => 1, 
                "status" => 1, 
                "thumbnail" => null, 
                "price" => "367.35", 
                "cost" => "216.09", 
                "special_price" => null, 
                "special_price_from" => null, 
                "special_price_to" => null, 
                "delivery_time" => null, 
                "visible_individually" => 1, 
                "min_price" => "367.35", 
                "max_price" => "367.35", 
                "is_vat" => 0, 
                "short_description" => " ", 
                "meta_title" => "ثلاجة الجمال سباركلنق لافندر 4 لتر", 
                "meta_keywords" => null, 
                "meta_description" => "<p>حافظي على منتجاتك المفضلة للعناية بجمال بشرتك مع ثلاجة الجمال الحجم الكلاسيكي الأنيق لوضعه أينما رغبت في غرفتك&nbsp;</p>
    
                <p>- أبعاد الثلاجة: العرض: 24 سم، الطول: 31.8سم، القطر: 32.2 سم
                - رف واحد يفصل بين حجرتين تخزين رئيسية
                - متوفرة بخاصية التبريد حتى 5 درجات مئوية&nbsp;
                - متوفرة بخاصية التدفئة &nbsp;حتى 50 درجة مئوية&nbsp;
                - درج خاص في باب الثلاجة
                - محول DC5V 2A &nbsp;
                - محول 100-240 فولت&nbsp;
                - اللون: سباركلينج لافندر</p>
                
                <p>- ضعي قابس الكهرباء في في تيار 110 فولت أو 220 فولت ودعيها تعمل بشكل مستمر.
                - بإمكانك تشغيل الثلاجة عبر أي محول USB بقوة 2 مل أمبير مما يجعلها تعمل داخل السيارة أو على بطاريات الطاقة (ننصح ببطارية طاقة تفوق 1000مل أمبير)</p>
                
                <p>التحذيرات والاحتياطات:
                - قومي بتنظيف الثلاجة وتهويتها بمنشفة بشكل مستمر لمنع تشكل قطرات الماء داخلها.
                - دعي مسافة فراغ 20سم بين الثلاجة والحائط.</p>
                
                <p>&nbsp;</p>
                
                <p>- محول كهربائي 220-110 فولت&nbsp;
                - محول DC5V 2A &nbsp;
                - قوة 5 فولت *2 مل أمبير
                - سلك كهربائي USB
                -ستيكرات زينة</p>", 
                "width" => 0, 
                "height" => 0, 
                "depth" => 0, 
                "weight" => 0, 
                "unlimited_quantity" => "0", 
                "barcode" => null, 
                "brand_name" => "12", 
                "promotion_title" => null, 
                "subtitle" => null, 
                "image" => "", 
                "image_name" => "", 
                "image_label" => "", 
                "image_value" => "", 
                "image_url" => null, 
                "text" => "", 
                "text_name" => "", 
                "text_label" => "", 
                "text_value" => "", 
                "color" => "", 
                "color_name" => "", 
                "color_label" => "", 
                "color_value" => "", 
                "size" => null, 
                "size_label" => null, 
                "created_at" => "2024-08-21 16:41:44", 
                "updated_at" => "2024-10-15 17:33:59", 
                "deleted_at" => null, 
                "enable_note" => null, 
                "enable_upload_image" => null, 
                "maximum_quantity_per_order" => null, 
                "notify_quantity" => null, 
                "require_shipping" => 0,
                "saleable" => 1,
                "html_price" => '<span class="price">‏٣٦٧٫٣٥ ر.س.‏</span>',
                "product" => [
                    "base_image_url" => "https://cdn.twsaa.com/home/23/cd2eeaba-784a-4272-a3f7-3e78262846d0.png"
                ],
            ]
        ],
        [
            'product' => [
                "id" => 107661, 
                "product_id" => 56115, 
                "parent_id" => null, 
                "sku" => "sku-ABC", 
                "name" => null, 
                "description" => null, 
                "url_key" => "sku-abc", 
                "new" => null, 
                "featured" => null, 
                "status" => 1, 
                "thumbnail" => null, 
                "price" => null, 
                "cost" => null, 
                "special_price" => null, 
                "special_price_from" => null, 
                "special_price_to" => null, 
                "delivery_time" => null, 
                "visible_individually" => 1, 
                "min_price" => null, 
                "max_price" => null, 
                "is_vat" => 0, 
                "short_description" => null, 
                "meta_title" => null, 
                "meta_keywords" => null, 
                "meta_description" => null, 
                "width" => 0, 
                "height" => 0, 
                "depth" => 0, 
                "weight" => 0, 
                "unlimited_quantity" => "0", 
                "barcode" => null, 
                "brand_name" => "12", 
                "promotion_title" => null, 
                "subtitle" => null, 
                "image" => "", 
                "image_name" => "", 
                "image_label" => "", 
                "image_value" => "", 
                "image_url" => null, 
                "text" => "", 
                "text_name" => "", 
                "text_label" => "", 
                "text_value" => "", 
                "color" => "", 
                "color_name" => "", 
                "color_label" => "", 
                "color_value" => "", 
                "size" => null, 
                "size_label" => null, 
                "created_at" => "2024-08-06 11:30:32", 
                "updated_at" => "2024-10-15 17:34:04", 
                "deleted_at" => null, 
                "enable_note" => null, 
                "enable_upload_image" => null, 
                "maximum_quantity_per_order" => null, 
                "notify_quantity" => null, 
                "require_shipping" => 0,
                "saleable" => 1,
                "html_price" => '<span class="price">‏٣٦٧٫٣٥ ر.س.‏</span>',
                "product" => [
                    "base_image_url" => "https://cdn.twsaa.com/home/23/cd2eeaba-784a-4272-a3f7-3e78262846d0.png"
                ],
            ]
        ],
        [
            'product' => [
                "id" => 106921, 
                "product_id" => 55683, 
                "parent_id" => null, 
                "sku" => "GFAF0U2", 
                "name" => "vir", 
                "description" => null, 
                "url_key" => "gfaf0u2", 
                "new" => null, 
                "featured" => 1, 
                "status" => 1, 
                "thumbnail" => null, 
                "price" => "1.00", 
                "cost" => null, 
                "special_price" => null, 
                "special_price_from" => null, 
                "special_price_to" => null, 
                "delivery_time" => null, 
                "visible_individually" => 1, 
                "min_price" => "1.00", 
                "max_price" => "1.00", 
                "is_vat" => 1, 
                "short_description" => null, 
                "meta_title" => null, 
                "meta_keywords" => null, 
                "meta_description" => null, 
                "width" => 0, 
                "height" => 0, 
                "depth" => 0, 
                "weight" => 0, 
                "unlimited_quantity" => "0", 
                "barcode" => null, 
                "brand_name" => "12", 
                "promotion_title" => null, 
                "subtitle" => null, 
                "image" => "", 
                "image_name" => "", 
                "image_label" => "", 
                "image_value" => "", 
                "image_url" => null, 
                "text" => "", 
                "text_name" => "", 
                "text_label" => "", 
                "text_value" => "", 
                "color" => "", 
                "color_name" => "", 
                "color_label" => "", 
                "color_value" => "", 
                "size" => null, 
                "size_label" => null, 
                "created_at" => "2024-06-04 10:45:29", 
                "updated_at" => "2024-10-15 17:34:16", 
                "deleted_at" => null, 
                "enable_note" => null, 
                "enable_upload_image" => null, 
                "maximum_quantity_per_order" => null, 
                "notify_quantity" => null, 
                "require_shipping" => 0,
                "saleable" => 1,
                "html_price" => '<span class="price">‏٣٦٧٫٣٥ ر.س.‏</span>',
                "product" => [
                    "base_image_url" => "https://cdn.twsaa.com/home/23/cd2eeaba-784a-4272-a3f7-3e78262846d0.png"
                ],
            ]
        ],
        [
            'product' => [
                "id" => 106919, 
                "product_id" => 55682, 
                "parent_id" => null, 
                "sku" => "customizable", 
                "name" => "customizable product", 
                "description" => "This is testing Mobile", 
                "url_key" => "customizable", 
                "new" => null, 
                "featured" => null, 
                "status" => 1, 
                "thumbnail" => null, 
                "price" => "222.00", 
                "cost" => null, 
                "special_price" => null, 
                "special_price_from" => null, 
                "special_price_to" => null, 
                "delivery_time" => null, 
                "visible_individually" => 1, 
                "min_price" => "222.00", 
                "max_price" => "222.00", 
                "is_vat" => 1, 
                "short_description" => null, 
                "meta_title" => null, 
                "meta_keywords" => null, 
                "meta_description" => null, 
                "width" => 0, 
                "height" => 0, 
                "depth" => 0, 
                "weight" => 0, 
                "unlimited_quantity" => "0", 
                "barcode" => null, 
                "brand_name" => "12", 
                "promotion_title" => null, 
                "subtitle" => null, 
                "image" => "", 
                "image_name" => "", 
                "image_label" => "", 
                "image_value" => "", 
                "image_url" => null, 
                "text" => "", 
                "text_name" => "", 
                "text_label" => "", 
                "text_value" => "", 
                "color" => "", 
                "color_name" => "", 
                "color_label" => "", 
                "color_value" => "", 
                "size" => null, 
                "size_label" => null, 
                "created_at" => "2024-06-03 15:33:15", 
                "updated_at" => "2024-10-15 17:34:22", 
                "deleted_at" => null, 
                "enable_note" => null, 
                "enable_upload_image" => null, 
                "maximum_quantity_per_order" => null, 
                "notify_quantity" => null, 
                "require_shipping" => 0,
                "saleable" => 1,
                "html_price" => '<span class="price">‏٣٦٧٫٣٥ ر.س.‏</span>',
                "product" => [
                    "base_image_url" => "https://cdn.twsaa.com/home/23/cd2eeaba-784a-4272-a3f7-3e78262846d0.png"
                ],
            ]
        ],
        [
            'product' => [
                "id" => 106891, 
                "product_id" => 55668, 
                "parent_id" => null, 
                "sku" => "2G663YZ", 
                "name" => "asdf asdf2", 
                "description" => "<p>محافظ نسائية على الموضة ، محفظة طويلة ثلاثية الطي ذات جودة عالية من جلد البولي يوريثان ، حامل بطاقات كلاتش للنساء ، حامل بطاقات</p><p><br></p>", 
                "url_key" => "2g663yz", 
                "new" => null, 
                "featured" => null, 
                "status" => 1, 
                "thumbnail" => null, 
                "price" => "0.00", 
                "cost" => null, 
                "special_price" => null, 
                "special_price_from" => null, 
                "special_price_to" => null, 
                "delivery_time" => null, 
                "visible_individually" => 1, 
                "min_price" => "1.00", 
                "max_price" => "8.00", 
                "is_vat" => 1, 
                "short_description" => null, 
                "meta_title" => null, 
                "meta_keywords" => null, 
                "meta_description" => null, 
                "width" => 0, 
                "height" => 0, 
                "depth" => 0, 
                "weight" => 0, 
                "unlimited_quantity" => "0", 
                "barcode" => null, 
                "brand_name" => "12", 
                "promotion_title" => null, 
                "subtitle" => null, 
                "image" => "", 
                "image_name" => "", 
                "image_label" => "", 
                "image_value" => "", 
                "image_url" => null, 
                "text" => "", 
                "text_name" => "", 
                "text_label" => "", 
                "text_value" => "", 
                "color" => "", 
                "color_name" => "", 
                "color_label" => "", 
                "color_value" => "", 
                "size" => null, 
                "size_label" => null, 
                "created_at" => "2024-05-08 15:58:59", 
                "updated_at" => "2024-10-15 17:34:30", 
                "deleted_at" => null, 
                "enable_note" => null, 
                "enable_upload_image" => null, 
                "maximum_quantity_per_order" => null, 
                "notify_quantity" => null, 
                "require_shipping" => 0,
                "saleable" => 1,
                "html_price" => '<span class="price">‏٣٦٧٫٣٥ ر.س.‏</span>',
                "product" => [
                    "base_image_url" => "https://cdn.twsaa.com/home/23/cd2eeaba-784a-4272-a3f7-3e78262846d0.png"
                ],
            ]
        ],
        [
            'product' => [
                "id" => 103671, 
                "product_id" => 54040, 
                "parent_id" => null, 
                "sku" => "W1MDRT4", 
                "name" => "tryme", 
                "description" => "", 
                "url_key" => "w1mdrt4", 
                "new" => null, 
                "featured" => null, 
                "status" => 1, 
                "thumbnail" => null, 
                "price" => "1.00", 
                "cost" => null, 
                "special_price" => null, 
                "special_price_from" => null, 
                "special_price_to" => null, 
                "delivery_time" => null, 
                "visible_individually" => 1, 
                "min_price" => "1.00", 
                "max_price" => "1.00", 
                "is_vat" => 1, 
                "short_description" => null, 
                "meta_title" => "", 
                "meta_keywords" => null, 
                "meta_description" => "", 
                "width" => 0, 
                "height" => 0, 
                "depth" => 0, 
                "weight" => 0, 
                "unlimited_quantity" => "0", 
                "barcode" => null, 
                "brand_name" => "12", 
                "promotion_title" => null, 
                "subtitle" => null, 
                "image" => "", 
                "image_name" => "", 
                "image_label" => "", 
                "image_value" => "", 
                "image_url" => null, 
                "text" => "", 
                "text_name" => "", 
                "text_label" => "", 
                "text_value" => "", 
                "color" => "", 
                "color_name" => "", 
                "color_label" => "", 
                "color_value" => "", 
                "size" => null, 
                "size_label" => null, 
                "created_at" => "2024-04-22 15:35:12", 
                "updated_at" => "2024-07-25 12:32:10", 
                "deleted_at" => null, 
                "enable_note" => null, 
                "enable_upload_image" => null, 
                "maximum_quantity_per_order" => null, 
                "notify_quantity" => null, 
                "require_shipping" => 0,
                "saleable" => 1,
                "html_price" => '<span class="price">‏٣٦٧٫٣٥ ر.س.‏</span>',
                "product" => [
                    "base_image_url" => "https://cdn.twsaa.com/home/23/cd2eeaba-784a-4272-a3f7-3e78262846d0.png"
                ],
            ]
        ],
        [
            'product' => [
                "id" => 103667, 
                "product_id" => 54038, 
                "parent_id" => null, 
                "sku" => "059347", 
                "name" => "موزع روائح الزيوت العطرية", 
                "description" => "<p>موزع روائح الزيوت العطرية</p>

                <p>اضاءة داخلية مع اللهب - 4 الوان</p>
                
                <p>مرطب بالموجات فوق الصوتية</p>
                
                <p>&nbsp;</p>
                
                <p>ضمان سنتين&nbsp;</p>", 
                "url_key" => "059347", 
                "new" => null, 
                "featured" => null, 
                "status" => 1, 
                "thumbnail" => null, 
                "price" => "142.80", 
                "cost" => "84.00", 
                "special_price" => null, 
                "special_price_from" => null, 
                "special_price_to" => null, 
                "delivery_time" => null, 
                "visible_individually" => 1, 
                "min_price" => "142.80", 
                "max_price" => "142.80", 
                "is_vat" => 1, 
                "short_description" => "<p>موزع روائح الزيوت العطرية</p>

                <p>اضاءة داخلية مع اللهب - 4 الوان</p>
                
                <p>مرطب بالموجات فوق الصوتية</p>
                
                <p>&nbsp;</p>
                
                <p>ضمان سنتين&nbsp;</p>", 
                "meta_title" => "موزع روائح الزيوت العطرية", 
                "meta_keywords" => null, 
                "meta_description" => "<p>موزع روائح الزيوت العطرية</p>

                <p>اضاءة داخلية مع اللهب - 4 الوان</p>
                
                <p>مرطب بالموجات فوق الصوتية</p>
                
                <p>&nbsp;</p>
                
                <p>ضمان سنتين&nbsp;</p>", 
                "width" => 0, 
                "height" => 0, 
                "depth" => 0, 
                "weight" => 0.1, 
                "unlimited_quantity" => "0", 
                "barcode" => "059347", 
                "brand_name" => "12", 
                "promotion_title" => null, 
                "subtitle" => null, 
                "image" => "", 
                "image_name" => "", 
                "image_label" => "", 
                "image_value" => "", 
                "image_url" => null, 
                "text" => "", 
                "text_name" => "", 
                "text_label" => "", 
                "text_value" => "", 
                "color" => "", 
                "color_name" => "", 
                "color_label" => "", 
                "color_value" => "", 
                "size" => null, 
                "size_label" => null, 
                "created_at" => "2024-04-22 14:53:31", 
                "updated_at" => "2024-10-15 17:35:00", 
                "deleted_at" => null, 
                "enable_note" => null, 
                "enable_upload_image" => null, 
                "maximum_quantity_per_order" => null, 
                "notify_quantity" => null, 
                "require_shipping" => 0,
                "saleable" => 1,
                "html_price" => '<span class="price">‏٣٦٧٫٣٥ ر.س.‏</span>',
                "product" => [
                    "base_image_url" => "https://cdn.twsaa.com/home/23/cd2eeaba-784a-4272-a3f7-3e78262846d0.png"
                ],
            ]
        ],
        [
            'product' => [
                "id" => 103665, 
                "product_id" => 54037, 
                "parent_id" => null, 
                "sku" => "300130", 
                "name" => "ساعه انمر مان الرجالية 300130", 
                "description" => '<p dir="RTL">ساعه رجاليه فخمه من ماركة انمر مان&nbsp;</p>

                <p dir="RTL">صنقل ستيل كامل</p>
                
                <p dir="RTL">قفل ستيل</p>
                
                <p dir="RTL">تصميم رائع وجذاب</p>
                
                <p dir="RTL">مكينه ياباني</p>
                
                <p dir="RTL">لمعه ثابته</p>
                
                <p dir="RTL">علبه بنفس اسم الماركه</p>
                
                <p dir="RTL">ضمان ثلاث سنوات</p>", 
                "url_key" => "300130", 
                "new" => null, 
                "featured" => null, 
                "status" => 1, 
                "thumbnail" => null, 
                "price" => "160.65", 
                "cost" => "94.50", 
                "special_price" => null, 
                "special_price_from" => null, 
                "special_price_to" => null, 
                "delivery_time" => null, 
                "visible_individually" => 1, 
                "min_price" => "160.65", 
                "max_price" => "160.65", 
                "is_vat" => 1, 
                "short_description" => "<p dir="RTL">ساعه رجاليه فخمه من ماركة انمر مان&nbsp;</p>

                <p dir="RTL">صنقل ستيل كامل</p>
                
                <p dir="RTL">قفل ستيل</p>
                
                <p dir="RTL">تصميم رائع وجذاب</p>
                
                <p dir="RTL">مكينه ياباني</p>
                
                <p dir="RTL">لمعه ثابته</p>
                
                <p dir="RTL">علبه بنفس اسم الماركه</p>
                
                <p dir="RTL">ضمان ثلاث سنوات</p>", 
                "meta_title" => "ساعه انمر مان الرجالية 300130", 
                "meta_keywords" => null, 
                "meta_description" => "<p dir="RTL">ساعه رجاليه فخمه من ماركة انمر مان&nbsp;</p>

                <p dir="RTL">صنقل ستيل كامل</p>
                
                <p dir="RTL">قفل ستيل</p>
                
                <p dir="RTL">تصميم رائع وجذاب</p>
                
                <p dir="RTL">مكينه ياباني</p>
                
                <p dir="RTL">لمعه ثابته</p>
                
                <p dir="RTL">علبه بنفس اسم الماركه</p>
                                        
                <p dir="RTL">ضمان ثلاث سنوات</p>', 
                "width" => 0, 
                "height" => 0, 
                "depth" => 0, 
                "weight" => 0.6, 
                "unlimited_quantity" => "0", 
                "barcode" => "7788997788", 
                "brand_name" => "12", 
                "promotion_title" => null, 
                "subtitle" => null, 
                "image" => "", 
                "image_name" => "", 
                "image_label" => "", 
                "image_value" => "", 
                "image_url" => null, 
                "text" => "", 
                "text_name" => "", 
                "text_label" => "", 
                "text_value" => "", 
                "color" => "", 
                "color_name" => "", 
                "color_label" => "", 
                "color_value" => "", 
                "size" => null, 
                "size_label" => null, 
                "created_at" => "2024-04-22 14:53:27", 
                "updated_at" => "2024-10-15 17:35:07", 
                "deleted_at" => null, 
                "enable_note" => null, 
                "enable_upload_image" => null, 
                "maximum_quantity_per_order" => null, 
                "notify_quantity" => null, 
                "require_shipping" => 1,
                "saleable" => 1,
                "html_price" => '<span class="price">‏٣٦٧٫٣٥ ر.س.‏</span>',
                "product" => [
                    "base_image_url" => "https://cdn.twsaa.com/home/23/cd2eeaba-784a-4272-a3f7-3e78262846d0.png"
                ],
            ]
        ],
        [
            'product' => [
                "id" => 102523, 
                "product_id" => 53483, 
                "parent_id" => null, 
                "sku" => "MSKUAE1005006629609421", 
                "name" => "مجموعة مسحوق مجفف مجمد مضاد للتجاعيد ، خميرة للإصلاح ، مصل مغذي ، كرياتين لتعزيز إنتاج الكولاجين", 
                "description" => '<div class="detailmodule_html"><div class="detail-desc-decorate-richtext"><p><img src="https://ae01.alicdn.com/kf/Sbca62263df6e44d9916a0a3ad441d085h.jpg" slate-data-type="image" /><img src="https://ae01.alicdn.com/kf/S635c7aebc8fe4393a93593d41362b68e7.jpg" slate-data-type="image" /><img src="https://ae01.alicdn.com/kf/S0210767bca5e48189f751176a99ffb1dS.jpg" slate-data-type="image" /><img src="https://ae01.alicdn.com/kf/S6d44ece12bcf407bba64bf3f31b3b7daP.jpg" slate-data-type="image" /><img src="https://ae01.alicdn.com/kf/S1ac24a381f3740eb88b3a18e36a6f4a4g.jpg" slate-data-type="image" /><img src="https://ae01.alicdn.com/kf/S537206bb81f14efbbc423901aad8923de.jpg" slate-data-type="image" /><img src="https://ae01.alicdn.com/kf/Se52ebe59427648bf8e84305c39564c83v.jpg" slate-data-type="image" /><img src="https://ae01.alicdn.com/kf/S88ca6f916b1840bda759fdd7556f26cdw.jpg" slate-data-type="image" /><img src="https://ae01.alicdn.com/kf/Saf2e2587072841bc92da588588dff5feK.jpg" slate-data-type="image" /><img src="https://ae01.alicdn.com/kf/Sb9407490af5647a6b1daf61c361576e50.jpg" slate-data-type="image" /><img src="https://ae01.alicdn.com/kf/S7556e22c080145459d4de2a31e379fbaN.jpg" slate-data-type="image" /><img src="https://ae01.alicdn.com/kf/S3d106311a0e4431f938d6a6bdc87ce12l.jpg" slate-data-type="image" /><img src="https://ae01.alicdn.com/kf/S54005c6d105649b582a00fd961fdce65K.jpg" slate-data-type="image" /><img src="https://ae01.alicdn.com/kf/S20ecd5f1d6454e16af3caee0efc72b71I.jpg" slate-data-type="image" /></p></div></div>', 
                "url_key" => "mskuae1005006629609421", 
                "new" => null, 
                "featured" => null, 
                "status" => 1, 
                "thumbnail" => null, 
                "price" => null, 
                "cost" => null, 
                "special_price" => null, 
                "special_price_from" => null, 
                "special_price_to" => null, 
                "delivery_time" => null, 
                "visible_individually" => 1, 
                "min_price" => "424.51", 
                "max_price" => "1061.28", 
                "is_vat" => 1, 
                "short_description" => '<div class="detailmodule_html"><div class="detail-desc-decorate-richtext"><p><img src="https://ae01.alicdn.com/kf/Sbca62263df6e44d9916a0a3ad441d085h.jpg" slate-data-type="image" /><img src="https://ae01.alicdn.com/kf/S635c7aebc8fe4393a93593d41362b68e7.jpg" slate-data-type="image" /><img src="https://ae01.alicdn.com/kf/S0210767bca5e48189f751176a99ffb1dS.jpg" slate-data-type="image" /><img src="https://ae01.alicdn.com/kf/S6d44ece12bcf407bba64bf3f31b3b7daP.jpg" slate-data-type="image" /><img src="https://ae01.alicdn.com/kf/S1ac24a381f3740eb88b3a18e36a6f4a4g.jpg" slate-data-type="image" /><img src="https://ae01.alicdn.com/kf/S537206bb81f14efbbc423901aad8923de.jpg" slate-data-type="image" /><img src="https://ae01.alicdn.com/kf/Se52ebe59427648bf8e84305c39564c83v.jpg" slate-data-type="image" /><img src="https://ae01.alicdn.com/kf/S88ca6f916b1840bda759fdd7556f26cdw.jpg" slate-data-type="image" /><img src="https://ae01.alicdn.com/kf/Saf2e2587072841bc92da588588dff5feK.jpg" slate-data-type="image" /><img src="https://ae01.alicdn.com/kf/Sb9407490af5647a6b1daf61c361576e50.jpg" slate-data-type="image" /><img src="https://ae01.alicdn.com/kf/S7556e22c080145459d4de2a31e379fbaN.jpg" slate-data-type="image" /><img src="https://ae01.alicdn.com/kf/S3d106311a0e4431f938d6a6bdc87ce12l.jpg" slate-data-type="image" /><img src="https://ae01.alicdn.com/kf/S54005c6d105649b582a00fd961fdce65K.jpg" slate-data-type="image" /><img src="https://ae01.alicdn.com/kf/S20ecd5f1d6454e16af3caee0efc72b71I.jpg" slate-data-type="image" /></p></div></div>', 
                "meta_title" => "مجموعة مسحوق مجفف مجمد مضاد للتجاعيد ، خميرة للإصلاح ، مصل مغذي ، كرياتين لتعزيز إنتاج الكولاجين", 
                "meta_keywords" => null, 
                "meta_description" => '<div class="detailmodule_html"><div class="detail-desc-decorate-richtext"><p><img src="https://ae01.alicdn.com/kf/Sbca62263df6e44d9916a0a3ad441d085h.jpg" slate-data-type="image" /><img src="https://ae01.alicdn.com/kf/S635c7aebc8fe4393a93593d41362b68e7.jpg" slate-data-type="image" /><img src="https://ae01.alicdn.com/kf/S0210767bca5e48189f751176a99ffb1dS.jpg" slate-data-type="image" /><img src="https://ae01.alicdn.com/kf/S6d44ece12bcf407bba64bf3f31b3b7daP.jpg" slate-data-type="image" /><img src="https://ae01.alicdn.com/kf/S1ac24a381f3740eb88b3a18e36a6f4a4g.jpg" slate-data-type="image" /><img src="https://ae01.alicdn.com/kf/S537206bb81f14efbbc423901aad8923de.jpg" slate-data-type="image" /><img src="https://ae01.alicdn.com/kf/Se52ebe59427648bf8e84305c39564c83v.jpg" slate-data-type="image" /><img src="https://ae01.alicdn.com/kf/S88ca6f916b1840bda759fdd7556f26cdw.jpg" slate-data-type="image" /><img src="https://ae01.alicdn.com/kf/Saf2e2587072841bc92da588588dff5feK.jpg" slate-data-type="image" /><img src="https://ae01.alicdn.com/kf/Sb9407490af5647a6b1daf61c361576e50.jpg" slate-data-type="image" /><img src="https://ae01.alicdn.com/kf/S7556e22c080145459d4de2a31e379fbaN.jpg" slate-data-type="image" /><img src="https://ae01.alicdn.com/kf/S3d106311a0e4431f938d6a6bdc87ce12l.jpg" slate-data-type="image" /><img src="https://ae01.alicdn.com/kf/S54005c6d105649b582a00fd961fdce65K.jpg" slate-data-type="image" /><img src="https://ae01.alicdn.com/kf/S20ecd5f1d6454e16af3caee0efc72b71I.jpg" slate-data-type="image" /></p></div></div>', 
                "width" => 0, 
                "height" => 0, 
                "depth" => 0, 
                "weight" => 0, 
                "unlimited_quantity" => "0", 
                "barcode" => null, 
                "brand_name" => "12", 
                "promotion_title" => null, 
                "subtitle" => null, 
                "image" => "", 
                "image_name" => "", 
                "image_label" => "", 
                "image_value" => "", 
                "image_url" => null, 
                "text" => "", 
                "text_name" => "", 
                "text_label" => "", 
                "text_value" => "", 
                "color" => "", 
                "color_name" => "", 
                "color_label" => "", 
                "color_value" => "", 
                "size" => null, 
                "size_label" => null, 
                "created_at" => "2024-04-16 18:25:06", 
                "updated_at" => "2024-10-15 17:35:16", 
                "deleted_at" => null, 
                "enable_note" => null, 
                "enable_upload_image" => null, 
                "maximum_quantity_per_order" => null, 
                "notify_quantity" => null, 
                "require_shipping" => 0,
                "saleable" => 1,
                "html_price" => '<span class="price">‏٣٦٧٫٣٥ ر.س.‏</span>',
                "product" => [
                    "base_image_url" => "https://cdn.twsaa.com/home/23/cd2eeaba-784a-4272-a3f7-3e78262846d0.png"
                ],
            ]
        ],
        [
            'product' => [
                "id" => 102497, 
                "product_id" => 53470, 
                "parent_id" => null, 
                "sku" => "MSKUAE1005006608665729", 
                "name" => "سوار زوجين من الصلب الكلاسيكي الفاخر من التيتانيوم ، سوار عالي الجودة للرجال والنساء ، هدايا الحفلات", 
                "description" => '<div class="detailmodule_html"><div class="detail-desc-decorate-richtext"><p>
                        <kse:widget data-widget-type="customText" id="1005000011207205" type="relation"></kse:widget></p>
                    <p><span style="font-size:16px" id="tl_1">لمزيد من المعلومات والصور ، يرجى الاتصال بخدمة العملاء.</span></p>
                    <p><br /></p>
                    <p style="font-family:&quot;Open Sans&quot;, Roboto, Arial, Helvetica, sans-serif, SimSun;font-size:14px;font-weight:400;letter-spacing:normal;line-height:inherit;text-align:start;white-space:normal;color:rgb(34, 34, 34);margin:0px;margin-bottom:0px;margin-top:0px;margin-left:0px;margin-right:0px;padding:0px;padding-bottom:0px;padding-top:0px;padding-left:0px;padding-right:0px;box-sizing:border-box" align="start"><span style="font-size:16px" id="tl_2">لمزيد من المعلومات والصور ، يرجى الاتصال بخدمة العملاء.</span></p>
                    <p><br /></p>
                    <p style="font-family:&quot;Open Sans&quot;, Roboto, Arial, Helvetica, sans-serif, SimSun;font-size:14px;font-weight:400;letter-spacing:normal;line-height:inherit;text-align:start;white-space:normal;color:rgb(34, 34, 34);margin:0px;margin-bottom:0px;margin-top:0px;margin-left:0px;margin-right:0px;padding:0px;padding-bottom:0px;padding-top:0px;padding-left:0px;padding-right:0px;box-sizing:border-box" align="start"><span style="font-size:16px" id="tl_3">لمزيد من المعلومات والصور ، يرجى الاتصال بخدمة العملاء.</span></p>
                    <p><br /></p>
                    <div>
                        <span style="font-size:24px" id="tl_4">نصائح:</span>
                    </div>
                    <div>
                        <span style="font-size:18px" id="tl_5">يرجى استخدام شريط قياس ناعم لتأكيد محيط اليد الفعلي قبل الشراء ، وإضافة سنتيمتر واحد لتحديد الحجم المناسب للارتداء</span>
                    </div>
                    <div>
                        &nbsp;
                    </div>
                    <p style="font-family:&quot;Open Sans&quot;, Roboto, Arial, Helvetica, sans-serif, SimSun;font-size:14px;font-weight:400;letter-spacing:normal;line-height:inherit;text-align:start;white-space:normal;color:rgb(34, 34, 34);margin:0px;margin-bottom:0px;margin-top:0px;margin-left:0px;margin-right:0px;padding:0px;padding-bottom:0px;padding-top:0px;padding-left:0px;padding-right:0px;box-sizing:border-box" align="start"><img src="https://ae01.alicdn.com/kf/Sdc7eb0d7addd4f3faf38db4e0b0eef45x.jpg" slate-data-type="image" /></p></div></div>
                    ', 
                "url_key" => "mskuae1005006608665729", 
                "new" => null, 
                "featured" => null, 
                "status" => 1, 
                "thumbnail" => null, 
                "price" => null, 
                "cost" => null, 
                "special_price" => null, 
                "special_price_from" => null, 
                "special_price_to" => null, 
                "delivery_time" => null, 
                "visible_individually" => 1, 
                "min_price" => "330.58", 
                "max_price" => "330.58", 
                "is_vat" => 1, 
                "short_description" => '<div class="detailmodule_html"><div class="detail-desc-decorate-richtext"><p>
                    <kse:widget data-widget-type="customText" id="1005000011207205" type="relation"></kse:widget></p>
                <p><span style="font-size:16px" id="tl_1">لمزيد من المعلومات والصور ، يرجى الاتصال بخدمة العملاء.</span></p>
                <p><br /></p>
                <p style="font-family:&quot;Open Sans&quot;, Roboto, Arial, Helvetica, sans-serif, SimSun;font-size:14px;font-weight:400;letter-spacing:normal;line-height:inherit;text-align:start;white-space:normal;color:rgb(34, 34, 34);margin:0px;margin-bottom:0px;margin-top:0px;margin-left:0px;margin-right:0px;padding:0px;padding-bottom:0px;padding-top:0px;padding-left:0px;padding-right:0px;box-sizing:border-box" align="start"><span style="font-size:16px" id="tl_2">لمزيد من المعلومات والصور ، يرجى الاتصال بخدمة العملاء.</span></p>
                <p><br /></p>
                <p style="font-family:&quot;Open Sans&quot;, Roboto, Arial, Helvetica, sans-serif, SimSun;font-size:14px;font-weight:400;letter-spacing:normal;line-height:inherit;text-align:start;white-space:normal;color:rgb(34, 34, 34);margin:0px;margin-bottom:0px;margin-top:0px;margin-left:0px;margin-right:0px;padding:0px;padding-bottom:0px;padding-top:0px;padding-left:0px;padding-right:0px;box-sizing:border-box" align="start"><span style="font-size:16px" id="tl_3">لمزيد من المعلومات والصور ، يرجى الاتصال بخدمة العملاء.</span></p>
                <p><br /></p>
                <div>
                    <span style="font-size:24px" id="tl_4">نصائح:</span>
                </div>
                <div>
                    <span style="font-size:18px" id="tl_5">يرجى استخدام شريط قياس ناعم لتأكيد محيط اليد الفعلي قبل الشراء ، وإضافة سنتيمتر واحد لتحديد الحجم المناسب للارتداء</span>
                </div>
                <div>
                    &nbsp;
                </div>
                <p style="font-family:&quot;Open Sans&quot;, Roboto, Arial, Helvetica, sans-serif, SimSun;font-size:14px;font-weight:400;letter-spacing:normal;line-height:inherit;text-align:start;white-space:normal;color:rgb(34, 34, 34);margin:0px;margin-bottom:0px;margin-top:0px;margin-left:0px;margin-right:0px;padding:0px;padding-bottom:0px;padding-top:0px;padding-left:0px;padding-right:0px;box-sizing:border-box" align="start"><img src="https://ae01.alicdn.com/kf/Sdc7eb0d7addd4f3faf38db4e0b0eef45x.jpg" slate-data-type="image" /></p></div></div>
                ', 
                "meta_title" => "سوار زوجين من الصلب الكلاسيكي الفاخر من التيتانيوم ، سوار عالي الجودة للرجال والنساء ، هدايا الحفلات", 
                "meta_keywords" => null, 
                "meta_description" => '<div class="detailmodule_html"><div class="detail-desc-decorate-richtext"><p>
                        <kse:widget data-widget-type="customText" id="1005000011207205" type="relation"></kse:widget></p>
                    <p><span style="font-size:16px" id="tl_1">لمزيد من المعلومات والصور ، يرجى الاتصال بخدمة العملاء.</span></p>
                    <p><br /></p>
                    <p style="font-family:&quot;Open Sans&quot;, Roboto, Arial, Helvetica, sans-serif, SimSun;font-size:14px;font-weight:400;letter-spacing:normal;line-height:inherit;text-align:start;white-space:normal;color:rgb(34, 34, 34);margin:0px;margin-bottom:0px;margin-top:0px;margin-left:0px;margin-right:0px;padding:0px;padding-bottom:0px;padding-top:0px;padding-left:0px;padding-right:0px;box-sizing:border-box" align="start"><span style="font-size:16px" id="tl_2">لمزيد من المعلومات والصور ، يرجى الاتصال بخدمة العملاء.</span></p>
                    <p><br /></p>
                    <p style="font-family:&quot;Open Sans&quot;, Roboto, Arial, Helvetica, sans-serif, SimSun;font-size:14px;font-weight:400;letter-spacing:normal;line-height:inherit;text-align:start;white-space:normal;color:rgb(34, 34, 34);margin:0px;margin-bottom:0px;margin-top:0px;margin-left:0px;margin-right:0px;padding:0px;padding-bottom:0px;padding-top:0px;padding-left:0px;padding-right:0px;box-sizing:border-box" align="start"><span style="font-size:16px" id="tl_3">لمزيد من المعلومات والصور ، يرجى الاتصال بخدمة العملاء.</span></p>
                    <p><br /></p>
                    <div>
                        <span style="font-size:24px" id="tl_4">نصائح:</span>
                    </div>
                    <div>
                        <span style="font-size:18px" id="tl_5">يرجى استخدام شريط قياس ناعم لتأكيد محيط اليد الفعلي قبل الشراء ، وإضافة سنتيمتر واحد لتحديد الحجم المناسب للارتداء</span>
                    </div>
                    <div>
                        &nbsp;
                    </div>
                    <p style="font-family:&quot;Open Sans&quot;, Roboto, Arial, Helvetica, sans-serif, SimSun;font-size:14px;font-weight:400;letter-spacing:normal;line-height:inherit;text-align:start;white-space:normal;color:rgb(34, 34, 34);margin:0px;margin-bottom:0px;margin-top:0px;margin-left:0px;margin-right:0px;padding:0px;padding-bottom:0px;padding-top:0px;padding-left:0px;padding-right:0px;box-sizing:border-box" align="start"><img src="https://ae01.alicdn.com/kf/Sdc7eb0d7addd4f3faf38db4e0b0eef45x.jpg" slate-data-type="image" /></p></div></div>
                    ', 
                "width" => 0, 
                "height" => 0, 
                "depth" => 0, 
                "weight" => 0, 
                "unlimited_quantity" => "0", 
                "barcode" => null, 
                "brand_name" => "12", 
                "promotion_title" => null, 
                "subtitle" => null, 
                "image" => "", 
                "image_name" => "", 
                "image_label" => "", 
                "image_value" => "", 
                "image_url" => null, 
                "text" => "", 
                "text_name" => "", 
                "text_label" => "", 
                "text_value" => "", 
                "color" => "", 
                "color_name" => "", 
                "color_label" => "", 
                "color_value" => "", 
                "size" => null, 
                "size_label" => null, 
                "created_at" => "2024-04-16 18:25:00", 
                "updated_at" => "2024-10-15 17:35:42", 
                "deleted_at" => null, 
                "enable_note" => null, 
                "enable_upload_image" => null, 
                "maximum_quantity_per_order" => null, 
                "notify_quantity" => null, 
                "require_shipping" => 0,
                "saleable" => 1,
                "html_price" => '<span class="price">‏٣٦٧٫٣٥ ر.س.‏</span>',
                "product" => [
                    "base_image_url" => "https://cdn.twsaa.com/home/23/cd2eeaba-784a-4272-a3f7-3e78262846d0.png"
                ],
            ]
        ],
        [
            'product' => [
                "id" => 102485, 
                "product_id" => 53464, 
                "parent_id" => null, 
                "sku" => "MSKUAE1005006682900581", 
                "name" => "نظارات شمسية مستطيلة سوداء للنساء ، نظارات شمسية نسائية غريبة ، أزياء الحفلات ، مصمم العلامة التجارية ، UV400 ، بيع", 
                "description" => '<div class="detailmodule_html"><div class="detail-desc-decorate-richtext"><p><img src="https://ae01.alicdn.com/kf/S9e1b89e74cc740028300c1333a81390b5.png" slate-data-type="image" /></p> 
                    <p id="tl_1">انقر على المجموعة اتبع متجرنا ، وذلك للعثور على أسرع وإذا كان المتجر قد حدّث المنتج الجديد ، يمكنك الحصول عليه في المرة الأولى.</p> 
                    <p id="tl_2">إذا لم تتمكن من العثور على الموديل الذي تريده ، يرجى الاتصال بنا للحصول على المزيد من الطراز.</p> 
                    <p id="tl_3">لأن هناك العديد من النماذج ، ما زلنا نقوم بالتحميل ، ولم يتم تحميلها كلها.</p> 
                    <p id="tl_4">لذلك إذا كنت بحاجة إلى رؤية المزيد من النماذج ، يرجى الاتصال بنا.</p> 
                    <p><img src="https://ae01.alicdn.com/kf/Saa929797a7ee4aeaaf9d63d9d4c403c7O.png" slate-data-type="image" /></p> 
                    <p><img src="https://ae01.alicdn.com/kf/Sc89d251c03b84aa8b7bbc7c4e237ee57P.jpg" slate-data-type="image" /><img src="https://ae01.alicdn.com/kf/S9a70b16f6969449f8f27df7047a0c5cfS.jpg" slate-data-type="image" /><img src="https://ae01.alicdn.com/kf/S65a6ec4e10f24b28839d041c98b8360cY.jpg" slate-data-type="image" /><img src="https://ae01.alicdn.com/kf/S212f00319bfd46c2b78bfc1f9ed2b975G.jpg" slate-data-type="image" /><img src="https://ae01.alicdn.com/kf/Sb939841c93524c9d83f7f79ccc696d80a.jpg" slate-data-type="image" /><img src="https://ae01.alicdn.com/kf/Sf6b5fd5a090b4703a9e22b9314a39ddd3.jpg" slate-data-type="image" /></p> 
                    <p><img src="https://ae01.alicdn.com/kf/S32e12f6e8df344c0a000e1657965ae1al.png" slate-data-type="image" /></p> 
                    <p id="tl_5">موضع ترحيب انخفاض الشحن.</p> 
                    <p><br /></p> 
                    <p id="tl_6">للشحن المباشر ، يمكننا إرسال البضائع إلى عملائك مباشرة ولن نترك معلومات عنا إذا كنت ترغب في ذلك.</p> 
                    <p><br /></p> 
                    <p id="tl_7">كيف يمكنني تتبع الطرد الخاص بي ؟</p> 
                    <p><br /><br /></p> 
                    <p id="tl_8">يمكنك تتبع الطرد الخاص بك على الموقع الإلكتروني التالي باستخدام رقم التتبع الخاص بك: www.17track.net.en</p> 
                    <p><br /></p> 
                    <p id="tl_9">ماذا يمكنني أن أفعل عندما ينفد وقت حماية الشراء ؟</p> 
                    <p><br /></p> 
                    <p id="tl_10">إذا كان وقت حماية الشراء ينفد ، يرجى الاتصال بنا ويمكننا مساعدتك على تمديده. لذلك لن تذهب أموالك إلى حسابي.</p> 
                    <p><br /></p> 
                    <p id="tl_11">ملاحظات</p> 
                    <p><br /></p> 
                    <p id="tl_12">1. إذا كنت راضيًا عن منتجاتنا وخدماتنا ، يرجى ترك تعليقك الإيجابي و 5 نجوم. و 5 نجوم للحصول على تصنيف مفصل لطلبك.</p> 
                    <p><br /></p> 
                    <p id="tl_13">2. إذا لم تكن راضيًا عن منتجاتنا ، الرجاء الاتصال بنا قبل ترك تعليقات سلبية أو إجراء التقييم التفصيلي ، ونحن نضمن أننا سنحل أي مشاكل لك.</p></div></div>
                    ', 
                "url_key" => "mskuae1005006682900581", 
                "new" => null, 
                "featured" => null, 
                "status" => 1, 
                "thumbnail" => null, 
                "price" => null, 
                "cost" => null, 
                "special_price" => null, 
                "special_price_from" => null, 
                "special_price_to" => null, 
                "delivery_time" => null, 
                "visible_individually" => 1, 
                "min_price" => "431.44", 
                "max_price" => "431.44", 
                "is_vat" => 1, 
                "short_description" => '<div class="detailmodule_html"><div class="detail-desc-decorate-richtext"><p><img src="https://ae01.alicdn.com/kf/S9e1b89e74cc740028300c1333a81390b5.png" slate-data-type="image" /></p> 
                    <p id="tl_1">انقر على المجموعة اتبع متجرنا ، وذلك للعثور على أسرع وإذا كان المتجر قد حدّث المنتج الجديد ، يمكنك الحصول عليه في المرة الأولى.</p> 
                    <p id="tl_2">إذا لم تتمكن من العثور على الموديل الذي تريده ، يرجى الاتصال بنا للحصول على المزيد من الطراز.</p> 
                    <p id="tl_3">لأن هناك العديد من النماذج ، ما زلنا نقوم بالتحميل ، ولم يتم تحميلها كلها.</p> 
                    <p id="tl_4">لذلك إذا كنت بحاجة إلى رؤية المزيد من النماذج ، يرجى الاتصال بنا.</p> 
                    <p><img src="https://ae01.alicdn.com/kf/Saa929797a7ee4aeaaf9d63d9d4c403c7O.png" slate-data-type="image" /></p> 
                    <p><img src="https://ae01.alicdn.com/kf/Sc89d251c03b84aa8b7bbc7c4e237ee57P.jpg" slate-data-type="image" /><img src="https://ae01.alicdn.com/kf/S9a70b16f6969449f8f27df7047a0c5cfS.jpg" slate-data-type="image" /><img src="https://ae01.alicdn.com/kf/S65a6ec4e10f24b28839d041c98b8360cY.jpg" slate-data-type="image" /><img src="https://ae01.alicdn.com/kf/S212f00319bfd46c2b78bfc1f9ed2b975G.jpg" slate-data-type="image" /><img src="https://ae01.alicdn.com/kf/Sb939841c93524c9d83f7f79ccc696d80a.jpg" slate-data-type="image" /><img src="https://ae01.alicdn.com/kf/Sf6b5fd5a090b4703a9e22b9314a39ddd3.jpg" slate-data-type="image" /></p> 
                    <p><img src="https://ae01.alicdn.com/kf/S32e12f6e8df344c0a000e1657965ae1al.png" slate-data-type="image" /></p> 
                    <p id="tl_5">موضع ترحيب انخفاض الشحن.</p> 
                    <p><br /></p> 
                    <p id="tl_6">للشحن المباشر ، يمكننا إرسال البضائع إلى عملائك مباشرة ولن نترك معلومات عنا إذا كنت ترغب في ذلك.</p> 
                    <p><br /></p> 
                    <p id="tl_7">كيف يمكنني تتبع الطرد الخاص بي ؟</p> 
                    <p><br /><br /></p> 
                    <p id="tl_8">يمكنك تتبع الطرد الخاص بك على الموقع الإلكتروني التالي باستخدام رقم التتبع الخاص بك: www.17track.net.en</p> 
                    <p><br /></p> 
                    <p id="tl_9">ماذا يمكنني أن أفعل عندما ينفد وقت حماية الشراء ؟</p> 
                    <p><br /></p> 
                    <p id="tl_10">إذا كان وقت حماية الشراء ينفد ، يرجى الاتصال بنا ويمكننا مساعدتك على تمديده. لذلك لن تذهب أموالك إلى حسابي.</p> 
                    <p><br /></p> 
                    <p id="tl_11">ملاحظات</p> 
                    <p><br /></p> 
                    <p id="tl_12">1. إذا كنت راضيًا عن منتجاتنا وخدماتنا ، يرجى ترك تعليقك الإيجابي و 5 نجوم. و 5 نجوم للحصول على تصنيف مفصل لطلبك.</p> 
                    <p><br /></p> 
                    <p id="tl_13">2. إذا لم تكن راضيًا عن منتجاتنا ، الرجاء الاتصال بنا قبل ترك تعليقات سلبية أو إجراء التقييم التفصيلي ، ونحن نضمن أننا سنحل أي مشاكل لك.</p></div></div>
                    ', 
                "meta_title" => "نظارات شمسية مستطيلة سوداء للنساء ، نظارات شمسية نسائية غريبة ، أزياء الحفلات ، مصمم العلامة التجارية ، UV400 ، بيع", 
                "meta_keywords" => null, 
                "meta_description" => '<div class="detailmodule_html"><div class="detail-desc-decorate-richtext"><p><img src="https://ae01.alicdn.com/kf/S9e1b89e74cc740028300c1333a81390b5.png" slate-data-type="image" /></p> 
                        <p id="tl_1">انقر على المجموعة اتبع متجرنا ، وذلك للعثور على أسرع وإذا كان المتجر قد حدّث المنتج الجديد ، يمكنك الحصول عليه في المرة الأولى.</p> 
                        <p id="tl_2">إذا لم تتمكن من العثور على الموديل الذي تريده ، يرجى الاتصال بنا للحصول على المزيد من الطراز.</p> 
                        <p id="tl_3">لأن هناك العديد من النماذج ، ما زلنا نقوم بالتحميل ، ولم يتم تحميلها كلها.</p> 
                        <p id="tl_4">لذلك إذا كنت بحاجة إلى رؤية المزيد من النماذج ، يرجى الاتصال بنا.</p> 
                        <p><img src="https://ae01.alicdn.com/kf/Saa929797a7ee4aeaaf9d63d9d4c403c7O.png" slate-data-type="image" /></p> 
                        <p><img src="https://ae01.alicdn.com/kf/Sc89d251c03b84aa8b7bbc7c4e237ee57P.jpg" slate-data-type="image" /><img src="https://ae01.alicdn.com/kf/S9a70b16f6969449f8f27df7047a0c5cfS.jpg" slate-data-type="image" /><img src="https://ae01.alicdn.com/kf/S65a6ec4e10f24b28839d041c98b8360cY.jpg" slate-data-type="image" /><img src="https://ae01.alicdn.com/kf/S212f00319bfd46c2b78bfc1f9ed2b975G.jpg" slate-data-type="image" /><img src="https://ae01.alicdn.com/kf/Sb939841c93524c9d83f7f79ccc696d80a.jpg" slate-data-type="image" /><img src="https://ae01.alicdn.com/kf/Sf6b5fd5a090b4703a9e22b9314a39ddd3.jpg" slate-data-type="image" /></p> 
                        <p><img src="https://ae01.alicdn.com/kf/S32e12f6e8df344c0a000e1657965ae1al.png" slate-data-type="image" /></p> 
                        <p id="tl_5">موضع ترحيب انخفاض الشحن.</p> 
                        <p><br /></p> 
                        <p id="tl_6">للشحن المباشر ، يمكننا إرسال البضائع إلى عملائك مباشرة ولن نترك معلومات عنا إذا كنت ترغب في ذلك.</p> 
                        <p><br /></p> 
                        <p id="tl_7">كيف يمكنني تتبع الطرد الخاص بي ؟</p> 
                        <p><br /><br /></p> 
                        <p id="tl_8">يمكنك تتبع الطرد الخاص بك على الموقع الإلكتروني التالي باستخدام رقم التتبع الخاص بك: www.17track.net.en</p> 
                        <p><br /></p> 
                        <p id="tl_9">ماذا يمكنني أن أفعل عندما ينفد وقت حماية الشراء ؟</p> 
                        <p><br /></p> 
                        <p id="tl_10">إذا كان وقت حماية الشراء ينفد ، يرجى الاتصال بنا ويمكننا مساعدتك على تمديده. لذلك لن تذهب أموالك إلى حسابي.</p> 
                        <p><br /></p> 
                        <p id="tl_11">ملاحظات</p> 
                        <p><br /></p> 
                        <p id="tl_12">1. إذا كنت راضيًا عن منتجاتنا وخدماتنا ، يرجى ترك تعليقك الإيجابي و 5 نجوم. و 5 نجوم للحصول على تصنيف مفصل لطلبك.</p> 
                        <p><br /></p> 
                        <p id="tl_13">2. إذا لم تكن راضيًا عن منتجاتنا ، الرجاء الاتصال بنا قبل ترك تعليقات سلبية أو إجراء التقييم التفصيلي ، ونحن نضمن أننا سنحل أي مشاكل لك.</p></div></div>
                        ', 
                "width" => 0, 
                "height" => 0, 
                "depth" => 0, 
                "weight" => 0, 
                "unlimited_quantity" => "0", 
                "barcode" => null, 
                "brand_name" => "12", 
                "promotion_title" => null, 
                "subtitle" => null, 
                "image" => "", 
                "image_name" => "", 
                "image_label" => "", 
                "image_value" => "", 
                "image_url" => null, 
                "text" => "", 
                "text_name" => "", 
                "text_label" => "", 
                "text_value" => "", 
                "color" => "", 
                "color_name" => "", 
                "color_label" => "", 
                "color_value" => "", 
                "size" => null, 
                "size_label" => null, 
                "created_at" => "2024-04-16 18:23:28", 
                "updated_at" => "2024-10-15 17:36:56", 
                "deleted_at" => null, 
                "enable_note" => null, 
                "enable_upload_image" => null, 
                "maximum_quantity_per_order" => null, 
                "notify_quantity" => null, 
                "require_shipping" => 0,
                "saleable" => 1,
                "html_price" => '<span class="price">‏٣٦٧٫٣٥ ر.س.‏</span>',
                "product" => [
                    "base_image_url" => "https://cdn.twsaa.com/home/23/cd2eeaba-784a-4272-a3f7-3e78262846d0.png"
                ],
            ]
        ],
        [
            'product' => [
                "id" => 99206, 
                "product_id" => 51762, 
                "parent_id" => null, 
                "sku" => "RUIQBH6", 
                "name" => "منتج", 
                "description" => "", 
                "url_key" => "ruiqbh6", 
                "new" => null, 
                "featured" => null, 
                "status" => 1, 
                "thumbnail" => null, 
                "price" => "5.00", 
                "cost" => null, 
                "special_price" => null, 
                "special_price_from" => null, 
                "special_price_to" => null, 
                "delivery_time" => null, 
                "visible_individually" => 1, 
                "min_price" => "5.00", 
                "max_price" => "5.00", 
                "is_vat" => 1, 
                "short_description" => null, 
                "meta_title" => "", 
                "meta_keywords" => null, 
                "meta_description" => "", 
                "width" => 0, 
                "height" => 0, 
                "depth" => 0, 
                "weight" => 0, 
                "unlimited_quantity" => "0", 
                "barcode" => null, 
                "brand_name" => "12", 
                "promotion_title" => null, 
                "subtitle" => null, 
                "image" => "", 
                "image_name" => "", 
                "image_label" => "", 
                "image_value" => "", 
                "image_url" => null, 
                "text" => "", 
                "text_name" => "", 
                "text_label" => "", 
                "text_value" => "", 
                "color" => "", 
                "color_name" => "", 
                "color_label" => "", 
                "color_value" => "", 
                "size" => null, 
                "size_label" => null, 
                "created_at" => "2024-03-31 13:04:01", 
                "updated_at" => "2024-10-15 17:37:18", 
                "deleted_at" => null, 
                "enable_note" => null, 
                "enable_upload_image" => null, 
                "maximum_quantity_per_order" => null, 
                "notify_quantity" => null, 
                "require_shipping" => 0,
                "saleable" => 1,
                "html_price" => '<span class="price">‏٣٦٧٫٣٥ ر.س.‏</span>',
                "product" => [
                    "base_image_url" => "https://cdn.twsaa.com/home/23/cd2eeaba-784a-4272-a3f7-3e78262846d0.png"
                ],
            ]
        ],
        [
            'product' => [
                "id" => 74870, 
                "product_id" => 37810, 
                "parent_id" => null, 
                "sku" => "ven-con-1", 
                "name" => "ven-configurable", 
                "description" => "<p>ven-configurableven-configurable</p>", 
                "url_key" => "ven-con-1", 
                "new" => null, 
                "featured" => null, 
                "status" => 1, 
                "thumbnail" => null, 
                "price" => null, 
                "cost" => null, 
                "special_price" => null, 
                "special_price_from" => null, 
                "special_price_to" => null, 
                "delivery_time" => null, 
                "visible_individually" => 1, 
                "min_price" => "7.14", 
                "max_price" => "7.14", 
                "is_vat" => 1, 
                "short_description" => "<p>ven-configurableven-configurable</p>", 
                "meta_title" => "ven-configurable", 
                "meta_keywords" => null, 
                "meta_description" => "<p>ven-configurableven-configurable</p>", 
                "width" => 0, 
                "height" => 0, 
                "depth" => 0, 
                "weight" => 0, 
                "unlimited_quantity" => "0", 
                "barcode" => null, 
                "brand_name" => "12", 
                "promotion_title" => null, 
                "subtitle" => null, 
                "image" => "", 
                "image_name" => "", 
                "image_label" => "", 
                "image_value" => "", 
                "image_url" => null, 
                "text" => "", 
                "text_name" => "", 
                "text_label" => "", 
                "text_value" => "", 
                "color" => "", 
                "color_name" => "", 
                "color_label" => "", 
                "color_value" => "", 
                "size" => null, 
                "size_label" => null, 
                "created_at" => "2024-03-21 12:20:24", 
                "updated_at" => "2024-10-15 17:37:24", 
                "deleted_at" => null, 
                "enable_note" => null, 
                "enable_upload_image" => null, 
                "maximum_quantity_per_order" => null, 
                "notify_quantity" => null, 
                "require_shipping" => 0,
                "saleable" => 1,
                "html_price" => '<span class="price">‏٣٦٧٫٣٥ ر.س.‏</span>',
                "product" => [
                    "base_image_url" => "https://cdn.twsaa.com/home/23/cd2eeaba-784a-4272-a3f7-3e78262846d0.png"
                ],
            ]
        ],
        [
            'product' => [
                "id" => 74868, 
                "product_id" => 37809, 
                "parent_id" => null, 
                "sku" => "TBS50100", 
                "name" => "ورلد كير مناشف للاستعمال مرة واحدة 50×100، 50 قطعة", 
                "description" => "<p>النوع: مناشف للاستعمال مرة واحدة ناعمة على البشرة قدرة عالية على الامتصاص 50 قطعة</p>", 
                "url_key" => "tbs50100", 
                "new" => null, 
                "featured" => null, 
                "status" => 1, 
                "thumbnail" => null, 
                "price" => "73.86", 
                "cost" => "43.45", 
                "special_price" => null, 
                "special_price_from" => null, 
                "special_price_to" => null, 
                "delivery_time" => null, 
                "visible_individually" => 1, 
                "min_price" => "73.86", 
                "max_price" => "73.86", 
                "is_vat" => 1, 
                "short_description" => "<p>النوع: مناشف للاستعمال مرة واحدة ناعمة على البشرة قدرة عالية على الامتصاص 50 قطعة</p>", 
                "meta_title" => "ورلد كير مناشف للاستعمال مرة واحدة 50×100، 50 قطعة", 
                "meta_keywords" => null, 
                "meta_description" => "<p>النوع: مناشف للاستعمال مرة واحدة ناعمة على البشرة قدرة عالية على الامتصاص 50 قطعة</p>", 
                "width" => 0, 
                "height" => 0, 
                "depth" => 0, 
                "weight" => 0.1, 
                "unlimited_quantity" => "0", 
                "barcode" => null, 
                "brand_name" => "12", 
                "promotion_title" => null, 
                "subtitle" => null, 
                "image" => "", 
                "image_name" => "", 
                "image_label" => "", 
                "image_value" => "", 
                "image_url" => null, 
                "text" => "", 
                "text_name" => "", 
                "text_label" => "", 
                "text_value" => "", 
                "color" => "", 
                "color_name" => "", 
                "color_label" => "", 
                "color_value" => "", 
                "size" => null, 
                "size_label" => null, 
                "created_at" => "2024-03-21 12:19:51", 
                "updated_at" => "2024-10-15 17:37:32", 
                "deleted_at" => null, 
                "enable_note" => null, 
                "enable_upload_image" => null, 
                "maximum_quantity_per_order" => null, 
                "notify_quantity" => null, 
                "require_shipping" => 0,
                "saleable" => 1,
                "html_price" => '<span class="price">‏٣٦٧٫٣٥ ر.س.‏</span>',
                "product" => [
                    "base_image_url" => "https://cdn.twsaa.com/home/23/cd2eeaba-784a-4272-a3f7-3e78262846d0.png"
                ],
            ]
        ],
        [
            'product' => [
                "id" => 74866, 
                "product_id" => 37808, 
                "parent_id" => null, 
                "sku" => "QV-0766", 
                "name" => "كريم مرطب للبشرة الحساسة من كيو في 100 جم", 
                "description" => "<p>كريم ترطيب البشرة من كيو في، لتجديد البشرة الجافة بترطيب عالي التركيز. يحتوي على السكوالين ودهون طبيعية التي تمنحك بشره ناعمة ومرنة. الحل الامثل لمناطق الجسم شديدة الجفاف.</p>", 
                "url_key" => "qv-0766", 
                "new" => null, 
                "featured" => null, 
                "status" => 1, 
                "thumbnail" => null, 
                "price" => "68.46", 
                "cost" => "40.27", 
                "special_price" => null, 
                "special_price_from" => null, 
                "special_price_to" => null, 
                "delivery_time" => null, 
                "visible_individually" => 1, 
                "min_price" => "68.46", 
                "max_price" => "68.46", 
                "is_vat" => 1, 
                "short_description" => "<p>كريم ترطيب البشرة من كيو في، لتجديد البشرة الجافة بترطيب عالي التركيز. يحتوي على السكوالين ودهون طبيعية التي تمنحك بشره ناعمة ومرنة. الحل الامثل لمناطق الجسم شديدة الجفاف.</p>", 
                "meta_title" => "كريم مرطب للبشرة الحساسة من كيو في 100 جم", 
                "meta_keywords" => null, 
                "meta_description" => "<p>كريم ترطيب البشرة من كيو في، لتجديد البشرة الجافة بترطيب عالي التركيز. يحتوي على السكوالين ودهون طبيعية التي تمنحك بشره ناعمة ومرنة. الحل الامثل لمناطق الجسم شديدة الجفاف.</p>", 
                "width" => 0, 
                "height" => 0, 
                "depth" => 0, 
                "weight" => 0.1, 
                "unlimited_quantity" => "0", 
                "barcode" => null, 
                "brand_name" => "12", 
                "promotion_title" => null, 
                "subtitle" => null, 
                "image" => "", 
                "image_name" => "", 
                "image_label" => "", 
                "image_value" => "", 
                "image_url" => null, 
                "text" => "", 
                "text_name" => "", 
                "text_label" => "", 
                "text_value" => "", 
                "color" => "", 
                "color_name" => "", 
                "color_label" => "", 
                "color_value" => "", 
                "size" => null, 
                "size_label" => null, 
                "created_at" => "2024-03-21 12:19:47", 
                "updated_at" => "2024-10-15 17:37:39", 
                "deleted_at" => null, 
                "enable_note" => null, 
                "enable_upload_image" => null, 
                "maximum_quantity_per_order" => null, 
                "notify_quantity" => null, 
                "require_shipping" => 0,
                "saleable" => 1,
                "html_price" => '<span class="price">‏٣٦٧٫٣٥ ر.س.‏</span>',
                "product" => [
                    "base_image_url" => "https://cdn.twsaa.com/home/23/cd2eeaba-784a-4272-a3f7-3e78262846d0.png"
                ],
            ]
        ],
        [
            'product' => [
                "id" => 48795, 
                "product_id" => 24644, 
                "parent_id" => null, 
                "sku" => "C3-5-2-3", 
                "name" => "ميلي - شامبو أكليل الجبل والنعناع لتقوية الشعر 355 مل", 
                "description" => "<p>- شامبو تقوية الشعر بأكليل الجبل والنعناع من ميلي أورجانيكس، مملوء بالبيوتين، ينظف ويساعد على تقوية الشعر الضعيف والهش .</p>

                <p>- يغذي وينظف الشعر الجاف أو الضعيف أو الهش باستخدام هذا الشامبو المقوي للشعر الذي يعمل على تنشيط بصيلات الشعر .</p>
                
                <p>- يوفر رطوبة مكثفة لجميع أنواع الشعر بتركيبة لطيفة تغذي وتنظف وتساعد على تقوية الشعر الضعيف والهش .</p>
                
                <p>- مناسبة لمستويات الشعر ذات المسامية المنخفضة والعالية .</p>
                
                <p>- تم تطوير شامبو تقوية الشعر بالروزماري والنعناع من ميلي أورجانيكس لتنظيف شعرك بلطف مع توفير العناصر الغذائية الأساسية .</p>
                
                <p>- مناسب لجميع أنواع الشعر .</p>
                
                <p>المكونات : ماء (أكوا، أو)، الصوديوم C14-16 أوليفين سلفونات، كوكاميدوبروبيل البيتين، بولي كواترنيوم-7، كوكاميد MIPA، جليكول ستيرات، بوليكواترنيوم-10، بانثينول، بروبيلين جليكول، زيت النعناع بيبيريتا (النعناع)، زيت أوراق إكليل الجبل (إكليل الجبل). ، ثنائي الصوديومEDTA، فيتانتريول، * زيت بذور الأوربينيا أوليفيرا (الباباسو)، * زيت جذر الزنجبيل (الزنجبيل)، * زيت جوز الهند نوسيفيرا (جوز الهند)، مستخلص عشبة ذيل الحصان (Equisetum Arvense)، مستخلص لوسونيا إنيرميس (الحناء)، روزمارينوس أوفيسيناليس ( مستخلصأوراق إكليل الجبل، مستخلص زهرة أنثيميس نوبيليس (البابونج)، مستخلص أوراق سيمفيتوم أوفيسينال (السنفيتون)، مستخلص هومولوس لوبولوس (الجنجل)، مستخلص أورتيك ديويكا (نبات القراص)، العسل، البيوتين، زيت بذور ريسينوس كومونيس (الخروع)، فينوكسيإيثانول، البنزويك. حمض، إيثيل هكسيل جليسرين، جليسيريث-2 كاكاو، عطر (عطر) *مكونات عضوية معتمدة</p>
                
                <p>طريقة الاستخدام : وزعي كمية بسيطة على اليدين ودلكيها على فروة الراس المبللة بالماء للحصول على رغوة غنية</p>
                
                <p>ثم يشطف الشعر جيداً بالماء &nbsp;</p>", 
                "url_key" => "c3-5-2-3", 
                "new" => null, 
                "featured" => null, 
                "status" => 1, 
                "thumbnail" => null, 
                "price" => "67.83", 
                "cost" => "39.90", 
                "special_price" => null, 
                "special_price_from" => null, 
                "special_price_to" => null, 
                "delivery_time" => null, 
                "visible_individually" => 1, 
                "min_price" => "67.83", 
                "max_price" => "67.83", 
                "is_vat" => 1, 
                "short_description" => "<p>- شامبو تقوية الشعر بأكليل الجبل والنعناع من ميلي أورجانيكس، مملوء بالبيوتين، ينظف ويساعد على تقوية الشعر الضعيف والهش .</p>

                    <p>- يغذي وينظف الشعر الجاف أو الضعيف أو الهش باستخدام هذا الشامبو المقوي للشعر الذي يعمل على تنشيط بصيلات الشعر .</p>
                    
                    <p>- يوفر رطوبة مكثفة لجميع أنواع الشعر بتركيبة لطيفة تغذي وتنظف وتساعد على تقوية الشعر الضعيف والهش .</p>
                    
                    <p>- مناسبة لمستويات الشعر ذات المسامية المنخفضة والعالية .</p>
                    
                    <p>- تم تطوير شامبو تقوية الشعر بالروزماري والنعناع من ميلي أورجانيكس لتنظيف شعرك بلطف مع توفير العناصر الغذائية الأساسية .</p>
                    
                    <p>- مناسب لجميع أنواع الشعر .</p>
                    
                    <p>المكونات : ماء (أكوا، أو)، الصوديوم C14-16 أوليفين سلفونات، كوكاميدوبروبيل البيتين، بولي كواترنيوم-7، كوكاميد MIPA، جليكول ستيرات، بوليكواترنيوم-10، بانثينول، بروبيلين جليكول، زيت النعناع بيبيريتا (النعناع)، زيت أوراق إكليل الجبل (إكليل الجبل). ، ثنائي الصوديومEDTA، فيتانتريول، * زيت بذور الأوربينيا أوليفيرا (الباباسو)، * زيت جذر الزنجبيل (الزنجبيل)، * زيت جوز الهند نوسيفيرا (جوز الهند)، مستخلص عشبة ذيل الحصان (Equisetum Arvense)، مستخلص لوسونيا إنيرميس (الحناء)، روزمارينوس أوفيسيناليس ( مستخلصأوراق إكليل الجبل، مستخلص زهرة أنثيميس نوبيليس (البابونج)، مستخلص أوراق سيمفيتوم أوفيسينال (السنفيتون)، مستخلص هومولوس لوبولوس (الجنجل)، مستخلص أورتيك ديويكا (نبات القراص)، العسل، البيوتين، زيت بذور ريسينوس كومونيس (الخروع)، فينوكسيإيثانول، البنزويك. حمض، إيثيل هكسيل جليسرين، جليسيريث-2 كاكاو، عطر (عطر) *مكونات عضوية معتمدة</p>
                    
                    <p>طريقة الاستخدام : وزعي كمية بسيطة على اليدين ودلكيها على فروة الراس المبللة بالماء للحصول على رغوة غنية</p>
                    
                    <p>ثم يشطف الشعر جيداً بالماء &nbsp;</p>", 
                "meta_title" => "ميلي - شامبو أكليل الجبل والنعناع لتقوية الشعر 355 مل", 
                "meta_keywords" => null, 
                "meta_description" => "<p>- شامبو تقوية الشعر بأكليل الجبل والنعناع من ميلي أورجانيكس، مملوء بالبيوتين، ينظف ويساعد على تقوية الشعر الضعيف والهش .</p>

                <p>- يغذي وينظف الشعر الجاف أو الضعيف أو الهش باستخدام هذا الشامبو المقوي للشعر الذي يعمل على تنشيط بصيلات الشعر .</p>
                
                <p>- يوفر رطوبة مكثفة لجميع أنواع الشعر بتركيبة لطيفة تغذي وتنظف وتساعد على تقوية الشعر الضعيف والهش .</p>
                
                <p>- مناسبة لمستويات الشعر ذات المسامية المنخفضة والعالية .</p>
                
                <p>- تم تطوير شامبو تقوية الشعر بالروزماري والنعناع من ميلي أورجانيكس لتنظيف شعرك بلطف مع توفير العناصر الغذائية الأساسية .</p>
                
                <p>- مناسب لجميع أنواع الشعر .</p>
                
                <p>المكونات : ماء (أكوا، أو)، الصوديوم C14-16 أوليفين سلفونات، كوكاميدوبروبيل البيتين، بولي كواترنيوم-7، كوكاميد MIPA، جليكول ستيرات، بوليكواترنيوم-10، بانثينول، بروبيلين جليكول، زيت النعناع بيبيريتا (النعناع)، زيت أوراق إكليل الجبل (إكليل الجبل). ، ثنائي الصوديومEDTA، فيتانتريول، * زيت بذور الأوربينيا أوليفيرا (الباباسو)، * زيت جذر الزنجبيل (الزنجبيل)، * زيت جوز الهند نوسيفيرا (جوز الهند)، مستخلص عشبة ذيل الحصان (Equisetum Arvense)، مستخلص لوسونيا إنيرميس (الحناء)، روزمارينوس أوفيسيناليس ( مستخلصأوراق إكليل الجبل، مستخلص زهرة أنثيميس نوبيليس (البابونج)، مستخلص أوراق سيمفيتوم أوفيسينال (السنفيتون)، مستخلص هومولوس لوبولوس (الجنجل)، مستخلص أورتيك ديويكا (نبات القراص)، العسل، البيوتين، زيت بذور ريسينوس كومونيس (الخروع)، فينوكسيإيثانول، البنزويك. حمض، إيثيل هكسيل جليسرين، جليسيريث-2 كاكاو، عطر (عطر) *مكونات عضوية معتمدة</p>
                
                <p>طريقة الاستخدام : وزعي كمية بسيطة على اليدين ودلكيها على فروة الراس المبللة بالماء للحصول على رغوة غنية</p>
                
                <p>ثم يشطف الشعر جيداً بالماء &nbsp;</p>", 
                "width" => 0, 
                "height" => 0, 
                "depth" => 0, 
                "weight" => 0.3, 
                "unlimited_quantity" => "0", 
                "barcode" => null, 
                "brand_name" => "12", 
                "promotion_title" => null, 
                "subtitle" => null, 
                "image" => "", 
                "image_name" => "", 
                "image_label" => "", 
                "image_value" => "", 
                "image_url" => null, 
                "text" => "", 
                "text_name" => "", 
                "text_label" => "", 
                "text_value" => "", 
                "color" => "", 
                "color_name" => "", 
                "color_label" => "", 
                "color_value" => "", 
                "size" => null, 
                "size_label" => null, 
                "created_at" => "2024-02-08 15:39:54", 
                "updated_at" => "2024-10-15 17:37:44", 
                "deleted_at" => null, 
                "enable_note" => null, 
                "enable_upload_image" => null, 
                "maximum_quantity_per_order" => null, 
                "notify_quantity" => null, 
                "require_shipping" => 0,
                "saleable" => 1,
                "html_price" => '<span class="price">‏٣٦٧٫٣٥ ر.س.‏</span>',
                "product" => [
                    "base_image_url" => "https://cdn.twsaa.com/home/23/cd2eeaba-784a-4272-a3f7-3e78262846d0.png"
                ],
            ]
        ],
        [
            'product' => [
                "id" => 48793, 
                "product_id" => 24643, 
                "parent_id" => null, 
                "sku" => "C3-5-2-4", 
                "name" => "ميلي - قناع تقوية الشعر بأكليل الجبل والنعناع 340 جم", 
                "description" => "<p>تغذية عميقة للشعر التالف: يدمج قناعنا الغني بالمغذيات بالبيوتين بالصبار والعسل ومزيج من الزيوت العطرية المغذية لخلق مظهر مكثف</p>

                    <p>قومي بتغذية وترطيب وتقوية شعرك في وقت واحد مع هذه التركيبة الغنية بالمغذيات مع مكونات عضوية طبيعية مثل إكليل الجبل وزيت المنثا.</p>
                    
                    <p>قناع مجدد ومرطب عميق للشعر الجاف المتعطش.</p>
                    
                    <p>تغذي وترطب وتقوي كل ذلك في وقت واحد مع هذه التركيبة الغنية بالمغذيات.</p>
                    
                    <p>تم تطويره لتلبية احتياجات شعرك</p>
                    
                    <p>مصنوع من مكونات عضوية معتمدة ومحمل بالبيوتين</p>
                    
                    <p>تم تطوير قناع تقوية الشعر بالروزماري والنعناع مع وضع أكبر احتياجات شعرك في الاعتبار.</p>
                    
                    <p>طريقة الاستخدام:</p>
                    
                    <p>بعد غسل الشعر بالشامبو بشامبو مقوي بالروزماري والنعناع ، قم بتنعيمه بالتساوي من خلال الشعر الرطب من الجذور إلى الأطراف. اتركيه خلال 15-20 دقيقة. شطف جيدا.</p>
                    
                    <p>المكونات:</p>
                    
                    <p>ماء (أكوا ، ماء) ، بهينتريمونيوم ميثوسلفات ، كحول سيتريل ، عصير أوراق الصبار بربادنسيس (مزوَّد اللون) ، زيت اللوز الحلو (اللوز الحلو) ، زيت بذور هيليانثوس أنوس (دوار الشمس) ، زيت فاكهة أوليا يوروبا (زيتون) ، كوبرنيكوبا سيريفيرا ) الشمع ، بولي سوربات -20 ، زيت بذور المكاديميا إنتجريفوليا ، جليسريل ستيرات ، زبدة بوتيروسبيرموم باركي (الشيا) ، توكوفيريل أسيتات ، * زيت بذور Orbignya Oleifera (باباسو) ، * Zingiber Officinale (الزنجبيل) زيت الجذر ، * جوز الهند Nucifera ، بانثينول ، فيتانتريول ، زيت النعناع ، زيت أوراق إكليل الجبل (إكليل الجبل) ، زيت بذور سيموندسيا تشينينسيس (الجوجوبا) ، زيت بذور ريسينوس كومونيس (خروع) ، مستخلص عشب ذيل الحصان ، مستخلص لاوسونيا إنرميس (حناء) (إكليل الجبل) مستخلص أوراق الشجر ، مستخلص زهرة Anthemis Nobilis (البابونج) ، مستخلص السيمفيتم الرسمي (أوراق الكومفري) ، مستخلص Humulus Lupulus (القفزات) ، خلاصة Urtica Dioica (نبات القراص) ، العسل ، البيوتين ، كلوريد السيتريمونيوم ، Sesamum Indicum ( السمسم) زيت بذور ، فينوكسي إيثانول ، حمض البنزويك ، إيثيل هكسيل جليسرين ، جلسريث -2 كوكوات &nbsp;</p>", 
                "url_key" => "c3-5-2-4", 
                "new" => null, 
                "featured" => null, 
                "status" => 1, 
                "thumbnail" => null, 
                "price" => "71.50", 
                "cost" => "42.06", 
                "special_price" => null, 
                "special_price_from" => null, 
                "special_price_to" => null, 
                "delivery_time" => null, 
                "visible_individually" => 1, 
                "min_price" => "71.50", 
                "max_price" => "71.50", 
                "is_vat" => 1, 
                "short_description" => "<p>تغذية عميقة للشعر التالف: يدمج قناعنا الغني بالمغذيات بالبيوتين بالصبار والعسل ومزيج من الزيوت العطرية المغذية لخلق مظهر مكثف</p>

                    <p>قومي بتغذية وترطيب وتقوية شعرك في وقت واحد مع هذه التركيبة الغنية بالمغذيات مع مكونات عضوية طبيعية مثل إكليل الجبل وزيت المنثا.</p>
                    
                    <p>قناع مجدد ومرطب عميق للشعر الجاف المتعطش.</p>
                    
                    <p>تغذي وترطب وتقوي كل ذلك في وقت واحد مع هذه التركيبة الغنية بالمغذيات.</p>
                    
                    <p>تم تطويره لتلبية احتياجات شعرك</p>
                    
                    <p>مصنوع من مكونات عضوية معتمدة ومحمل بالبيوتين</p>
                    
                    <p>تم تطوير قناع تقوية الشعر بالروزماري والنعناع مع وضع أكبر احتياجات شعرك في الاعتبار.</p>
                    
                    <p>طريقة الاستخدام:</p>
                    
                    <p>بعد غسل الشعر بالشامبو بشامبو مقوي بالروزماري والنعناع ، قم بتنعيمه بالتساوي من خلال الشعر الرطب من الجذور إلى الأطراف. اتركيه خلال 15-20 دقيقة. شطف جيدا.</p>
                    
                    <p>المكونات:</p>
                    
                    <p>ماء (أكوا ، ماء) ، بهينتريمونيوم ميثوسلفات ، كحول سيتريل ، عصير أوراق الصبار بربادنسيس (مزوَّد اللون) ، زيت اللوز الحلو (اللوز الحلو) ، زيت بذور هيليانثوس أنوس (دوار الشمس) ، زيت فاكهة أوليا يوروبا (زيتون) ، كوبرنيكوبا سيريفيرا ) الشمع ، بولي سوربات -20 ، زيت بذور المكاديميا إنتجريفوليا ، جليسريل ستيرات ، زبدة بوتيروسبيرموم باركي (الشيا) ، توكوفيريل أسيتات ، * زيت بذور Orbignya Oleifera (باباسو) ، * Zingiber Officinale (الزنجبيل) زيت الجذر ، * جوز الهند Nucifera ، بانثينول ، فيتانتريول ، زيت النعناع ، زيت أوراق إكليل الجبل (إكليل الجبل) ، زيت بذور سيموندسيا تشينينسيس (الجوجوبا) ، زيت بذور ريسينوس كومونيس (خروع) ، مستخلص عشب ذيل الحصان ، مستخلص لاوسونيا إنرميس (حناء) (إكليل الجبل) مستخلص أوراق الشجر ، مستخلص زهرة Anthemis Nobilis (البابونج) ، مستخلص السيمفيتم الرسمي (أوراق الكومفري) ، مستخلص Humulus Lupulus (القفزات) ، خلاصة Urtica Dioica (نبات القراص) ، العسل ، البيوتين ، كلوريد السيتريمونيوم ، Sesamum Indicum ( السمسم) زيت بذور ، فينوكسي إيثانول ، حمض البنزويك ، إيثيل هكسيل جليسرين ، جلسريث -2 كوكوات &nbsp;</p>", 
                "meta_title" => "ميلي - قناع تقوية الشعر بأكليل الجبل والنعناع 340 جم", 
                "meta_keywords" => null, 
                "meta_description" => "<p>تغذية عميقة للشعر التالف: يدمج قناعنا الغني بالمغذيات بالبيوتين بالصبار والعسل ومزيج من الزيوت العطرية المغذية لخلق مظهر مكثف</p>

                    <p>قومي بتغذية وترطيب وتقوية شعرك في وقت واحد مع هذه التركيبة الغنية بالمغذيات مع مكونات عضوية طبيعية مثل إكليل الجبل وزيت المنثا.</p>
                    
                    <p>قناع مجدد ومرطب عميق للشعر الجاف المتعطش.</p>
                    
                    <p>تغذي وترطب وتقوي كل ذلك في وقت واحد مع هذه التركيبة الغنية بالمغذيات.</p>
                    
                    <p>تم تطويره لتلبية احتياجات شعرك</p>
                    
                    <p>مصنوع من مكونات عضوية معتمدة ومحمل بالبيوتين</p>
                    
                    <p>تم تطوير قناع تقوية الشعر بالروزماري والنعناع مع وضع أكبر احتياجات شعرك في الاعتبار.</p>
                    
                    <p>طريقة الاستخدام:</p>
                    
                    <p>بعد غسل الشعر بالشامبو بشامبو مقوي بالروزماري والنعناع ، قم بتنعيمه بالتساوي من خلال الشعر الرطب من الجذور إلى الأطراف. اتركيه خلال 15-20 دقيقة. شطف جيدا.</p>
                    
                    <p>المكونات:</p>
                    
                    <p>ماء (أكوا ، ماء) ، بهينتريمونيوم ميثوسلفات ، كحول سيتريل ، عصير أوراق الصبار بربادنسيس (مزوَّد اللون) ، زيت اللوز الحلو (اللوز الحلو) ، زيت بذور هيليانثوس أنوس (دوار الشمس) ، زيت فاكهة أوليا يوروبا (زيتون) ، كوبرنيكوبا سيريفيرا ) الشمع ، بولي سوربات -20 ، زيت بذور المكاديميا إنتجريفوليا ، جليسريل ستيرات ، زبدة بوتيروسبيرموم باركي (الشيا) ، توكوفيريل أسيتات ، * زيت بذور Orbignya Oleifera (باباسو) ، * Zingiber Officinale (الزنجبيل) زيت الجذر ، * جوز الهند Nucifera ، بانثينول ، فيتانتريول ، زيت النعناع ، زيت أوراق إكليل الجبل (إكليل الجبل) ، زيت بذور سيموندسيا تشينينسيس (الجوجوبا) ، زيت بذور ريسينوس كومونيس (خروع) ، مستخلص عشب ذيل الحصان ، مستخلص لاوسونيا إنرميس (حناء) (إكليل الجبل) مستخلص أوراق الشجر ، مستخلص زهرة Anthemis Nobilis (البابونج) ، مستخلص السيمفيتم الرسمي (أوراق الكومفري) ، مستخلص Humulus Lupulus (القفزات) ، خلاصة Urtica Dioica (نبات القراص) ، العسل ، البيوتين ، كلوريد السيتريمونيوم ، Sesamum Indicum ( السمسم) زيت بذور ، فينوكسي إيثانول ، حمض البنزويك ، إيثيل هكسيل جليسرين ، جلسريث -2 كوكوات &nbsp;</p>", 
                "width" => 0, 
                "height" => 0, 
                "depth" => 0, 
                "weight" => 0.3, 
                "unlimited_quantity" => "0", 
                "barcode" => null, 
                "brand_name" => "12", 
                "promotion_title" => null, 
                "subtitle" => null, 
                "image" => "", 
                "image_name" => "", 
                "image_label" => "", 
                "image_value" => "", 
                "image_url" => null, 
                "text" => "", 
                "text_name" => "", 
                "text_label" => "", 
                "text_value" => "", 
                "color" => "", 
                "color_name" => "", 
                "color_label" => "", 
                "color_value" => "", 
                "size" => null, 
                "size_label" => null, 
                "created_at" => "2024-02-08 15:39:42", 
                "updated_at" => "2024-10-15 17:37:50", 
                "deleted_at" => null, 
                "enable_note" => null, 
                "enable_upload_image" => null, 
                "maximum_quantity_per_order" => null, 
                "notify_quantity" => null, 
                "require_shipping" => 0,
                "saleable" => 1,
                "html_price" => '<span class="price">‏٣٦٧٫٣٥ ر.س.‏</span>',
                "product" => [
                    "base_image_url" => "https://cdn.twsaa.com/home/23/cd2eeaba-784a-4272-a3f7-3e78262846d0.png"
                ],
            ]
        ],
        [
            'product' => [
                "id" => 48791, 
                "product_id" => 24642, 
                "parent_id" => null, 
                "sku" => "C3-5-2-5", 
                "name" => "ميلي - بلسم أكليل الجبل والنعناع لتقوية الشعر 355 مل", 
                "description" => "<p>تم تطوير بلسم تقوية الشعر الذي لا يحتاج إلى شطفه بإكليل الجبل والنعناع لتلبية احتياجات شعرك.</p>

                    <p>&bull; محمل بالبيوتين &bull; تألق مذهل &bull; يحبس الرطوبة</p>
                    
                    <p>غني بالبيوتين وإكليل الجبل، هذا الترطيب الذي لا يترك أثراً مع الحماية والترطيب.</p>
                    
                    <p>المكونات: ماء، جليسرين، بيهنتريمونيوم ميثوسولفات، كحول سيتريل، كحول ستياريلي، زيت برونوس أميغدالوس دولسيس (اللوز الحلو)، كحول سيتيل، سيترات ثلاثي إيثيل، زيت فاكهة أوليا يوروبيا (الزيتون)، عطر، بيوتين، زيت بيرسي جراتيسيما (الأفوكادو)، سمسم. زيت بذور إنديكوم (السمسم)، سيتيريث-20، زيت أوراق إكليل الجبل (إكليل الجبل)، زيت جذر الزنجبيل (الزنجبيل)، زيت النعناع بيبيريتا (النعناع)، البروبيلين جليكول، مستخلص زهرة البابونج ريكوتيتا (ماتريكاريا)، فاكهة/أوراق نبات فاكسينيوم ميرتيلوس. مستخلص، مستخلص Saccharum Officinarum (قصب السكر)، مستخلص فاكهة Citrus Aurantium Dulcis (البرتقال)، مستخلص فاكهة الليمون الحمضي (الليمون)، مستخلص Acer Saccharum (سكر القيقب)، فينوكسي إيثانول، كابريليل جلايكول، بوليسوربات 20.</p>", 
                "url_key" => "c3-5-2-5", 
                "new" => null, 
                "featured" => null, 
                "status" => 1, 
                "thumbnail" => null, 
                "price" => "67.83", 
                "cost" => "39.90", 
                "special_price" => null, 
                "special_price_from" => null, 
                "special_price_to" => null, 
                "delivery_time" => null, 
                "visible_individually" => 1, 
                "min_price" => "67.83", 
                "max_price" => "67.83", 
                "is_vat" => 1, 
                "short_description" => "<p>تم تطوير بلسم تقوية الشعر الذي لا يحتاج إلى شطفه بإكليل الجبل والنعناع لتلبية احتياجات شعرك.</p>

                    <p>&bull; محمل بالبيوتين &bull; تألق مذهل &bull; يحبس الرطوبة</p>
                    
                    <p>غني بالبيوتين وإكليل الجبل، هذا الترطيب الذي لا يترك أثراً مع الحماية والترطيب.</p>
                    
                    <p>المكونات: ماء، جليسرين، بيهنتريمونيوم ميثوسولفات، كحول سيتريل، كحول ستياريلي، زيت برونوس أميغدالوس دولسيس (اللوز الحلو)، كحول سيتيل، سيترات ثلاثي إيثيل، زيت فاكهة أوليا يوروبيا (الزيتون)، عطر، بيوتين، زيت بيرسي جراتيسيما (الأفوكادو)، سمسم. زيت بذور إنديكوم (السمسم)، سيتيريث-20، زيت أوراق إكليل الجبل (إكليل الجبل)، زيت جذر الزنجبيل (الزنجبيل)، زيت النعناع بيبيريتا (النعناع)، البروبيلين جليكول، مستخلص زهرة البابونج ريكوتيتا (ماتريكاريا)، فاكهة/أوراق نبات فاكسينيوم ميرتيلوس. مستخلص، مستخلص Saccharum Officinarum (قصب السكر)، مستخلص فاكهة Citrus Aurantium Dulcis (البرتقال)، مستخلص فاكهة الليمون الحمضي (الليمون)، مستخلص Acer Saccharum (سكر القيقب)، فينوكسي إيثانول، كابريليل جلايكول، بوليسوربات 20.</p>", 
                "meta_title" => "ميلي - بلسم أكليل الجبل والنعناع لتقوية الشعر 355 مل", 
                "meta_keywords" => null, 
                "meta_description" => "<p>تم تطوير بلسم تقوية الشعر الذي لا يحتاج إلى شطفه بإكليل الجبل والنعناع لتلبية احتياجات شعرك.</p>

                    <p>&bull; محمل بالبيوتين &bull; تألق مذهل &bull; يحبس الرطوبة</p>
                    
                    <p>غني بالبيوتين وإكليل الجبل، هذا الترطيب الذي لا يترك أثراً مع الحماية والترطيب.</p>
                    
                    <p>المكونات: ماء، جليسرين، بيهنتريمونيوم ميثوسولفات، كحول سيتريل، كحول ستياريلي، زيت برونوس أميغدالوس دولسيس (اللوز الحلو)، كحول سيتيل، سيترات ثلاثي إيثيل، زيت فاكهة أوليا يوروبيا (الزيتون)، عطر، بيوتين، زيت بيرسي جراتيسيما (الأفوكادو)، سمسم. زيت بذور إنديكوم (السمسم)، سيتيريث-20، زيت أوراق إكليل الجبل (إكليل الجبل)، زيت جذر الزنجبيل (الزنجبيل)، زيت النعناع بيبيريتا (النعناع)، البروبيلين جليكول، مستخلص زهرة البابونج ريكوتيتا (ماتريكاريا)، فاكهة/أوراق نبات فاكسينيوم ميرتيلوس. مستخلص، مستخلص Saccharum Officinarum (قصب السكر)، مستخلص فاكهة Citrus Aurantium Dulcis (البرتقال)، مستخلص فاكهة الليمون الحمضي (الليمون)، مستخلص Acer Saccharum (سكر القيقب)، فينوكسي إيثانول، كابريليل جلايكول، بوليسوربات 20.</p>", 
                "width" => 0, 
                "height" => 0, 
                "depth" => 0, 
                "weight" => 0.3, 
                "unlimited_quantity" => "0", 
                "barcode" => null, 
                "brand_name" => "12", 
                "promotion_title" => null, 
                "subtitle" => null, 
                "image" => "", 
                "image_name" => "", 
                "image_label" => "", 
                "image_value" => "", 
                "image_url" => null, 
                "text" => "", 
                "text_name" => "", 
                "text_label" => "", 
                "text_value" => "", 
                "color" => "", 
                "color_name" => "", 
                "color_label" => "", 
                "color_value" => "", 
                "size" => null, 
                "size_label" => null, 
                "created_at" => "2024-02-08 15:39:37", 
                "updated_at" => "2024-10-15 17:37:55", 
                "deleted_at" => null, 
                "enable_note" => null, 
                "enable_upload_image" => null, 
                "maximum_quantity_per_order" => null, 
                "notify_quantity" => null, 
                "require_shipping" => 0,
                "saleable" => 1,
                "html_price" => '<span class="price">‏٣٦٧٫٣٥ ر.س.‏</span>',
                "product" => [
                    "base_image_url" => "https://cdn.twsaa.com/home/23/cd2eeaba-784a-4272-a3f7-3e78262846d0.png"
                ],
            ]
        ],
        [
            'product' => [
                "id" => 48789, 
                "product_id" => 24641, 
                "parent_id" => null, 
                "sku" => "C3-5-5-7", 
                "name" => "ميلي - بلسم مقوي للشعر باكليل الجبل والنعناع 355 مل", 
                "description" => "<p>يوفر بلسم تقوية الروزماري والنعناع التوازن المثالي بين القوة والرطوبة لتحسين الحالة العامة للشعر وفروة الرأس. ينعم ويفك التشابك على الفور لزيادة سهولة التحكم. يدعم شعر أطول وأكثر صحة.</p>

                <ul>
                    <li>يوفر التوازن المثالي بين القوة والرطوبة.</li>
                    <li>غني بالبيوتين ويمنحك لمعاناً مذهلاً.</li>
                    <li>ينعم ويفك التشابك على الفور.</li>
                    <li>يدعم شعر أطول وأكثر صحة.</li>
                    <li>خالي من البارابين، الكبريتات، البارافينات، الزيوت المعدنية، DEA.</li>
                    <li>تركيبه لجميع أنواع الشعر.</li>
                </ul>", 
                "url_key" => "c3-5-5-7", 
                "new" => null, 
                "featured" => null, 
                "status" => 1, 
                "thumbnail" => null, 
                "price" => "73.25", 
                "cost" => "43.09", 
                "special_price" => null, 
                "special_price_from" => null, 
                "special_price_to" => null, 
                "delivery_time" => null, 
                "visible_individually" => 1, 
                "min_price" => "73.25", 
                "max_price" => "73.25", 
                "is_vat" => 1, 
                "short_description" => "<p>يوفر بلسم تقوية الروزماري والنعناع التوازن المثالي بين القوة والرطوبة لتحسين الحالة العامة للشعر وفروة الرأس. ينعم ويفك التشابك على الفور لزيادة سهولة التحكم. يدعم شعر أطول وأكثر صحة.</p>

                <ul>
                    <li>يوفر التوازن المثالي بين القوة والرطوبة.</li>
                    <li>غني بالبيوتين ويمنحك لمعاناً مذهلاً.</li>
                    <li>ينعم ويفك التشابك على الفور.</li>
                    <li>يدعم شعر أطول وأكثر صحة.</li>
                    <li>خالي من البارابين، الكبريتات، البارافينات، الزيوت المعدنية، DEA.</li>
                    <li>تركيبه لجميع أنواع الشعر.</li>
                </ul>", 
                "meta_title" => "ميلي - بلسم مقوي للشعر باكليل الجبل والنعناع 355 مل", 
                "meta_keywords" => null, 
                "meta_description" => "<p>يوفر بلسم تقوية الروزماري والنعناع التوازن المثالي بين القوة والرطوبة لتحسين الحالة العامة للشعر وفروة الرأس. ينعم ويفك التشابك على الفور لزيادة سهولة التحكم. يدعم شعر أطول وأكثر صحة.</p>

                <ul>
                    <li>يوفر التوازن المثالي بين القوة والرطوبة.</li>
                    <li>غني بالبيوتين ويمنحك لمعاناً مذهلاً.</li>
                    <li>ينعم ويفك التشابك على الفور.</li>
                    <li>يدعم شعر أطول وأكثر صحة.</li>
                    <li>خالي من البارابين، الكبريتات، البارافينات، الزيوت المعدنية، DEA.</li>
                    <li>تركيبه لجميع أنواع الشعر.</li>
                </ul>", 
                "width" => 0, 
                "height" => 0, 
                "depth" => 0, 
                "weight" => 0.4, 
                "unlimited_quantity" => "0", 
                "barcode" => null, 
                "brand_name" => "12", 
                "promotion_title" => null, 
                "subtitle" => null, 
                "image" => "", 
                "image_name" => "", 
                "image_label" => "", 
                "image_value" => "", 
                "image_url" => null, 
                "text" => "", 
                "text_name" => "", 
                "text_label" => "", 
                "text_value" => "", 
                "color" => "", 
                "color_name" => "", 
                "color_label" => "", 
                "color_value" => "", 
                "size" => null, 
                "size_label" => null, 
                "created_at" => "2024-02-08 15:39:33", 
                "updated_at" => "2024-10-15 17:38:00", 
                "deleted_at" => null, 
                "enable_note" => null, 
                "enable_upload_image" => null, 
                "maximum_quantity_per_order" => null, 
                "notify_quantity" => null, 
                "require_shipping" => 0,
                "saleable" => 1,
                "html_price" => '<span class="price">‏٣٦٧٫٣٥ ر.س.‏</span>',
                "product" => [
                    "base_image_url" => "https://cdn.twsaa.com/home/23/cd2eeaba-784a-4272-a3f7-3e78262846d0.png"
                ],
            ]
        ]
    ]; 

    return $context;
}

function category() {
    $context['authUser'] = auth();
    $context['categories'] =  [
        [
              "id" => 2120, 
              "position" => 0, 
              "image" => null, 
              "icon" => null, 
              "status" => 1, 
              "product_status" => 0, 
              "show_in_app" => 0, 
              "_lft" => 15, 
              "_rgt" => 16, 
              "parent_id" => null, 
              "created_at" => "2024-02-05T07:39:49.000000Z", 
              "updated_at" => "2024-09-12T09:03:20.000000Z", 
              "display_mode" => "products_and_description", 
              "category_icon_path" => null, 
              "additional" => null, 
              "name" => "تخفيضات", 
              "description" => null, 
              "slug" => "تخفيضات", 
              "url_path" => "تخفيضات", 
              "meta_title" => null, 
              "meta_description" => null, 
              "meta_keywords" => null, 
              "translations" => [
                 [
                    "id" => 4242, 
                    "name" => "تخفيضات", 
                    "slug" => "تخفيضات", 
                    "description" => null, 
                    "meta_title" => null, 
                    "meta_description" => null, 
                    "meta_keywords" => null, 
                    "category_id" => 2120, 
                    "locale" => "ar", 
                    "locale_id" => 54, 
                    "url_path" => "تخفيضات" 
                 ], 
                 [
                       "id" => 4243, 
                       "name" => "تخفيضات", 
                       "slug" => "تخفيضات", 
                       "description" => null, 
                       "meta_title" => null, 
                       "meta_description" => null, 
                       "meta_keywords" => null, 
                       "category_id" => 2120, 
                       "locale" => "en", 
                       "locale_id" => 55, 
                       "url_path" => "تخفيضات" 
                    ] 
              ], 
              "children" => [] 
        ], 
        [
            "id" => 2569, 
            "position" => 1, 
            "image" => null, 
            "icon" => null, 
            "status" => 1, 
            "product_status" => 1, 
            "show_in_app" => 0, 
            "_lft" => 33, 
            "_rgt" => 42, 
            "parent_id" => null, 
            "created_at" => "2024-02-28T06:28:40.000000Z", 
            "updated_at" => "2024-09-12T12:20:51.000000Z", 
            "display_mode" => "products_and_description", 
            "category_icon_path" => null, 
            "additional" => null, 
            "name" => "mob", 
            "description" => null, 
            "slug" => "mob", 
            "url_path" => "mob", 
            "meta_title" => null, 
            "meta_description" => null, 
            "meta_keywords" => null, 
            "translations" => [
            [
                "id" => 5141, 
                "name" => "mob", 
                "slug" => "mob", 
                "description" => null, 
                "meta_title" => null, 
                "meta_description" => null, 
                "meta_keywords" => null, 
                "category_id" => 2569, 
                "locale" => "ar", 
                "locale_id" => 54, 
                "url_path" => "mob" 
            ], 
            [
                    "id" => 5140, 
                    "name" => "mob", 
                    "slug" => "mob", 
                    "description" => null, 
                    "meta_title" => null, 
                    "meta_description" => null, 
                    "meta_keywords" => null, 
                    "category_id" => 2569, 
                    "locale" => "en", 
                    "locale_id" => 55, 
                    "url_path" => "mob" 
                ] 
            ], 
            "children" => [
                [
                    "id" => 2571, 
                    "position" => 0, 
                    "image" => null, 
                    "icon" => null, 
                    "status" => 1, 
                    "product_status" => 0, 
                    "show_in_app" => 0, 
                    "_lft" => 38, 
                    "_rgt" => 41, 
                    "parent_id" => 2569, 
                    "created_at" => "2024-02-28T06:29:15.000000Z", 
                    "updated_at" => "2024-10-15T09:30:38.000000Z", 
                    "display_mode" => "products_and_description", 
                    "category_icon_path" => null, 
                    "additional" => null, 
                    "name" => "Samsung", 
                    "description" => null, 
                    "slug" => "samsung", 
                    "url_path" => "samsung", 
                    "meta_title" => null, 
                    "meta_description" => null, 
                    "meta_keywords" => null, 
                    "translations" => 
                    [
                        [
                            "id" => 5145, 
                            "name" => "Samsung", 
                            "slug" => "samsung", 
                            "description" => null, 
                            "meta_title" => null, 
                            "meta_description" => null, 
                            "meta_keywords" => null, 
                            "category_id" => 2571, 
                            "locale" => "ar", 
                            "locale_id" => 54, 
                            "url_path" => "samsung" 
                        ], 
                        [
                            "id" => 5144, 
                            "name" => "Samsung", 
                            "slug" => "samsung", 
                            "description" => null, 
                            "meta_title" => null, 
                            "meta_description" => null, 
                            "meta_keywords" => null, 
                            "category_id" => 2571, 
                            "locale" => "en", 
                            "locale_id" => 55, 
                            "url_path" => "samsung" 
                        ] 
                    ], 
                    "children" => 
                    [
                        [
                            "id" => 4360, 
                            "position" => 0, 
                            "image" => null, 
                            "icon" => null, 
                            "status" => 1, 
                            "product_status" => 0, 
                            "show_in_app" => 0, 
                            "_lft" => 39, 
                            "_rgt" => 40, 
                            "parent_id" => 2571, 
                            "created_at" => "2024-10-15T09:30:41.000000Z", 
                            "updated_at" => "2024-10-15T09:30:41.000000Z", 
                            "display_mode" => "products_and_description", 
                            "category_icon_path" => null, 
                            "additional" => null, 
                            "name" => "s25", 
                            "description" => null, 
                            "slug" => "s25", 
                            "url_path" => "s25", 
                            "meta_title" => null, 
                            "meta_description" => null, 
                            "meta_keywords" => null, 
                            "translations" => [
                                [
                                    "id" => 8723, 
                                    "name" => "s25", 
                                    "slug" => "s25", 
                                    "description" => null, 
                                    "meta_title" => null, 
                                    "meta_description" => null, 
                                    "meta_keywords" => null, 
                                    "category_id" => 4360, 
                                    "locale" => "ar", 
                                    "locale_id" => 54, 
                                    "url_path" => "s25" 
                                ], 
                                [
                                    "id" => 8722, 
                                    "name" => "s25", 
                                    "slug" => "s25", 
                                    "description" => null, 
                                    "meta_title" => null, 
                                    "meta_description" => null, 
                                    "meta_keywords" => null, 
                                    "category_id" => 4360, 
                                    "locale" => "en", 
                                    "locale_id" => 55, 
                                    "url_path" => "s25" 
                                ] 
                            ], 
                            "children" => [] 
                        ] 
                    ] 
                ], 
                [
                    "id" => 2570, 
                    "position" => 1, 
                    "image" => null, 
                    "icon" => null, 
                    "status" => 1, 
                    "product_status" => 0, 
                    "show_in_app" => 0, 
                    "_lft" => 34, 
                    "_rgt" => 37, 
                    "parent_id" => 2569, 
                    "created_at" => "2024-02-28T06:28:58.000000Z", 
                    "updated_at" => "2024-10-15T09:30:38.000000Z", 
                    "display_mode" => "products_and_description", 
                    "category_icon_path" => null, 
                    "additional" => null, 
                    "name" => "Iphones", 
                    "description" => null, 
                    "slug" => "iphones", 
                    "url_path" => "iphones", 
                    "meta_title" => null, 
                    "meta_description" => null, 
                    "meta_keywords" => null, 
                    "translations" => [
                        [
                        "id" => 5143, 
                        "name" => "Iphones", 
                        "slug" => "iphones", 
                        "description" => null, 
                        "meta_title" => null, 
                        "meta_description" => null, 
                        "meta_keywords" => null, 
                        "category_id" => 2570, 
                        "locale" => "ar", 
                        "locale_id" => 54, 
                        "url_path" => "iphones" 
                        ], 
                        [
                            "id" => 5142, 
                            "name" => "Iphones", 
                            "slug" => "iphones", 
                            "description" => null, 
                            "meta_title" => null, 
                            "meta_description" => null, 
                            "meta_keywords" => null, 
                            "category_id" => 2570, 
                            "locale" => "en", 
                            "locale_id" => 55, 
                            "url_path" => "iphones" 
                        ] 
                    ], 
                    "children" => 
                    [
                        [
                            "id" => 4359, 
                            "position" => 0, 
                            "image" => null, 
                            "icon" => null, 
                            "status" => 1, 
                            "product_status" => 0, 
                            "show_in_app" => 0, 
                            "_lft" => 35, 
                            "_rgt" => 36, 
                            "parent_id" => 2570, 
                            "created_at" => "2024-09-12T09:20:28.000000Z", 
                            "updated_at" => "2024-10-15T09:30:38.000000Z", 
                            "display_mode" => "products_and_description", 
                            "category_icon_path" => null, 
                            "additional" => null, 
                            "name" => "asdf", 
                            "description" => null, 
                            "slug" => "asdf", 
                            "url_path" => "asdf", 
                            "meta_title" => null, 
                            "meta_description" => null, 
                            "meta_keywords" => null, 
                            "translations" => 
                            [
                                [
                                    "id" => 8720, 
                                    "name" => "15", 
                                    "slug" => "15", 
                                    "description" => null, 
                                    "meta_title" => null, 
                                    "meta_description" => null, 
                                    "meta_keywords" => null, 
                                    "category_id" => 4359, 
                                    "locale" => "en", 
                                    "locale_id" => 55, 
                                    "url_path" => "15" 
                                ], 
                                [
                                    "id" => 8721, 
                                    "name" => "asdf", 
                                    "slug" => "asdf", 
                                    "description" => null, 
                                    "meta_title" => null, 
                                    "meta_description" => null, 
                                    "meta_keywords" => null, 
                                    "category_id" => 4359, 
                                    "locale" => "ar", 
                                    "locale_id" => 54, 
                                    "url_path" => "asdf" 
                                ] 
                            ], 
                            "children" => [] 
                        ] 
                    ] 
                ] 
            ] 
        ], 
        [
            "id" => 182, 
            "position" => 2, 
            "image" => null, 
            "icon" => null, 
            "status" => 1, 
            "product_status" => 0, 
            "show_in_app" => 0, 
            "_lft" => 1, 
            "_rgt" => 10, 
            "parent_id" => null, 
            "created_at" => "2023-08-24T06:28:34.000000Z", 
            "updated_at" => "2024-09-12T08:57:42.000000Z", 
            "display_mode" => "products_and_description", 
            "category_icon_path" => null, 
            "additional" => null, 
            "name" => "العطور ", 
            "description" => null, 
            "slug" => "العطور", 
            "url_path" => "العطور", 
            "meta_title" => null, 
            "meta_description" => null, 
            "meta_keywords" => null, 
            "translations" => [
                [
                    "id" => 366, 
                    "name" => "العطور ", 
                    "slug" => "العطور", 
                    "description" => null, 
                    "meta_title" => null, 
                    "meta_description" => null, 
                    "meta_keywords" => null, 
                    "category_id" => 182, 
                    "locale" => "ar", 
                    "locale_id" => 54, 
                    "url_path" => "العطور" 
                ], 
                [
                    "id" => 367, 
                    "name" => "عطور نسائية", 
                    "slug" => "عطور-نسائية", 
                    "description" => null, 
                    "meta_title" => null, 
                    "meta_description" => null, 
                    "meta_keywords" => null, 
                    "category_id" => 182, 
                    "locale" => "en", 
                    "locale_id" => 55, 
                    "url_path" => "عطور-نسائية" 
                ] 
            ], 
            "children" => [
                [
                    "id" => 195, 
                    "position" => 0, 
                    "image" => null, 
                    "icon" => null, 
                    "status" => 1, 
                    "product_status" => 0, 
                    "show_in_app" => 0, 
                    "_lft" => 2, 
                    "_rgt" => 3, 
                    "parent_id" => 182, 
                    "created_at" => "2023-08-27T08:27:53.000000Z", 
                    "updated_at" => "2023-08-27T08:27:53.000000Z", 
                    "display_mode" => "products_and_description", 
                    "category_icon_path" => null, 
                    "additional" => null, 
                    "name" => "عطور نسائية", 
                    "description" => null, 
                    "slug" => "عطور-نسائية", 
                    "url_path" => "عطور-نسائية", 
                    "meta_title" => null, 
                    "meta_description" => null, 
                    "meta_keywords" => null, 
                    "translations" => [
                        [
                            "id" => 393, 
                            "name" => "عطور للشعر", 
                            "slug" => "عطور-للشعر", 
                            "description" => null, 
                            "meta_title" => null, 
                            "meta_description" => null, 
                            "meta_keywords" => null, 
                            "category_id" => 195, 
                            "locale" => "en", 
                            "locale_id" => 55, 
                            "url_path" => "عطور-للشعر" 
                        ], 
                        [
                            "id" => 392, 
                            "name" => "عطور نسائية", 
                            "slug" => "عطور-نسائية", 
                            "description" => null, 
                            "meta_title" => null, 
                            "meta_description" => null, 
                            "meta_keywords" => null, 
                            "category_id" => 195, 
                            "locale" => "ar", 
                            "locale_id" => 54, 
                            "url_path" => "عطور-نسائية" 
                        ] 
                    ], 
                    "children" => [] 
                ], 
                [
                    "id" => 196, 
                    "position" => 1, 
                    "image" => null, 
                    "icon" => null, 
                    "status" => 1, 
                    "product_status" => 0, 
                    "show_in_app" => 0, 
                    "_lft" => 4, 
                    "_rgt" => 5, 
                    "parent_id" => 182, 
                    "created_at" => "2023-08-27T08:28:24.000000Z", 
                    "updated_at" => "2023-08-28T09:46:02.000000Z", 
                    "display_mode" => "products_and_description", 
                    "category_icon_path" => null, 
                    "additional" => null, 
                    "name" => "عطور رجالية ", 
                    "description" => null, 
                    "slug" => "عطور-رجالية", 
                    "url_path" => "عطور-رجالية", 
                    "meta_title" => null, 
                    "meta_description" => null, 
                    "meta_keywords" => null, 
                    "translations" => [
                        [
                        "id" => 394, 
                        "name" => "عطور رجالية ", 
                        "slug" => "عطور-رجالية", 
                        "description" => null, 
                        "meta_title" => null, 
                        "meta_description" => null, 
                        "meta_keywords" => null, 
                        "category_id" => 196, 
                        "locale" => "ar", 
                        "locale_id" => 54, 
                        "url_path" => "عطور-رجالية" 
                        ], 
                        [
                            "id" => 395, 
                            "name" => "عطور للجسم", 
                            "slug" => "عطور-للجسم", 
                            "description" => null, 
                            "meta_title" => null, 
                            "meta_description" => null, 
                            "meta_keywords" => null, 
                            "category_id" => 196, 
                            "locale" => "en", 
                            "locale_id" => 55, 
                            "url_path" => "عطور-للجسم" 
                        ] 
                    ], 
                    "children" => [
                            ] 
                ], 
                [
                    "id" => 2123, 
                    "position" => 2, 
                    "image" => null, 
                    "icon" => null, 
                    "status" => 1, 
                    "product_status" => 0, 
                    "show_in_app" => 0, 
                    "_lft" => 6, 
                    "_rgt" => 7, 
                    "parent_id" => 182, 
                    "created_at" => "2024-02-05T07:46:36.000000Z", 
                    "updated_at" => "2024-02-05T07:48:02.000000Z", 
                    "display_mode" => "products_and_description", 
                    "category_icon_path" => null, 
                    "additional" => null, 
                    "name" => "عطور للشعر ", 
                    "description" => null, 
                    "slug" => "عطور-للشعر", 
                    "url_path" => "عطور-للشعر", 
                    "meta_title" => null, 
                    "meta_description" => null, 
                    "meta_keywords" => null, 
                    "translations" => [
                    [
                        "id" => 4248, 
                        "name" => "عطور للشعر ", 
                        "slug" => "عطور-للشعر", 
                        "description" => null, 
                        "meta_title" => null, 
                        "meta_description" => null, 
                        "meta_keywords" => null, 
                        "category_id" => 2123, 
                        "locale" => "ar", 
                        "locale_id" => 54, 
                        "url_path" => "عطور-للشعر" 
                    ], 
                    [
                            "id" => 4249, 
                            "name" => "عطور للشعر ", 
                            "slug" => "عطور-للشعر", 
                            "description" => null, 
                            "meta_title" => null, 
                            "meta_description" => null, 
                            "meta_keywords" => null, 
                            "category_id" => 2123, 
                            "locale" => "en", 
                            "locale_id" => 55, 
                            "url_path" => "عطور-للشعر" 
                        ] 
                    ], 
                    "children" => [
                            ] 
                ], 
                [
                    "id" => 2124, 
                    "position" => 3, 
                    "image" => null, 
                    "icon" => null, 
                    "status" => 1, 
                    "product_status" => 0, 
                    "show_in_app" => 0, 
                    "_lft" => 8, 
                    "_rgt" => 9, 
                    "parent_id" => 182, 
                    "created_at" => "2024-02-05T07:47:03.000000Z", 
                    "updated_at" => "2024-02-05T07:48:02.000000Z", 
                    "display_mode" => "products_and_description", 
                    "category_icon_path" => null, 
                    "additional" => null, 
                    "name" => "عطور للمنزل ", 
                    "description" => null, 
                    "slug" => "عطور-للمنزل", 
                    "url_path" => "عطور-للمنزل", 
                    "meta_title" => null, 
                    "meta_description" => null, 
                    "meta_keywords" => null, 
                    "translations" => [
                        [
                            "id" => 4250, 
                            "name" => "عطور للمنزل ", 
                            "slug" => "عطور-للمنزل", 
                            "description" => null, 
                            "meta_title" => null, 
                            "meta_description" => null, 
                            "meta_keywords" => null, 
                            "category_id" => 2124, 
                            "locale" => "ar", 
                            "locale_id" => 54, 
                            "url_path" => "عطور-للمنزل" 
                        ], 
                        [
                                "id" => 4251, 
                                "name" => "عطور للمنزل ", 
                                "slug" => "عطور-للمنزل", 
                                "description" => null, 
                                "meta_title" => null, 
                                "meta_description" => null, 
                                "meta_keywords" => null, 
                                "category_id" => 2124, 
                                "locale" => "en", 
                                "locale_id" => 55, 
                                "url_path" => "عطور-للمنزل" 
                            ] 
                    ], 
                    "children" => [] 
                ] 
            ] 
        ], 
        [
            "id" => 2122, 
            "position" => 3, 
            "image" => null, 
            "icon" => null, 
            "status" => 1, 
            "product_status" => 0, 
            "show_in_app" => 0, 
            "_lft" => 17, 
            "_rgt" => 20, 
            "parent_id" => null, 
            "created_at" => "2024-02-05T07:45:52.000000Z", 
            "updated_at" => "2024-09-11T15:20:50.000000Z", 
            "display_mode" => "products_and_description", 
            "category_icon_path" => null, 
            "additional" => null, 
            "name" => "المكياج ", 
            "description" => null, 
            "slug" => "المكياج", 
            "url_path" => "المكياج", 
            "meta_title" => null, 
            "meta_description" => null, 
            "meta_keywords" => null, 
            "translations" => [
                [
                    "id" => 4246, 
                    "name" => "المكياج ", 
                    "slug" => "المكياج", 
                    "description" => null, 
                    "meta_title" => null, 
                    "meta_description" => null, 
                    "meta_keywords" => null, 
                    "category_id" => 2122, 
                    "locale" => "ar", 
                    "locale_id" => 54, 
                    "url_path" => "المكياج" 
                ], 
                [
                    "id" => 4247, 
                    "name" => "المكياج ", 
                    "slug" => "المكياج", 
                    "description" => null, 
                    "meta_title" => null, 
                    "meta_description" => null, 
                    "meta_keywords" => null, 
                    "category_id" => 2122, 
                    "locale" => "en", 
                    "locale_id" => 55, 
                    "url_path" => "المكياج" 
                ] 
            ], 
            "children" => [
                [
                    "id" => 2127, 
                    "position" => 0, 
                    "image" => null, 
                    "icon" => null, 
                    "status" => 1, 
                    "product_status" => 0, 
                    "show_in_app" => 0, 
                    "_lft" => 18, 
                    "_rgt" => 19, 
                    "parent_id" => 2122, 
                    "created_at" => "2024-02-05T07:48:55.000000Z", 
                    "updated_at" => "2024-09-11T15:20:50.000000Z", 
                    "display_mode" => "products_and_description", 
                    "category_icon_path" => null, 
                    "additional" => null, 
                    "name" => "new", 
                    "description" => null, 
                    "slug" => "new", 
                    "url_path" => "new", 
                    "meta_title" => null, 
                    "meta_description" => null, 
                    "meta_keywords" => null, 
                    "translations" => [
                        [
                            "id" => 4256, 
                            "name" => "new", 
                            "slug" => "new", 
                            "description" => null, 
                            "meta_title" => null, 
                            "meta_description" => null, 
                            "meta_keywords" => null, 
                            "category_id" => 2127, 
                            "locale" => "ar", 
                            "locale_id" => 54, 
                            "url_path" => "new" 
                        ], 
                        [
                            "id" => 4257, 
                            "name" => "new", 
                            "slug" => "new", 
                            "description" => null, 
                            "meta_title" => null, 
                            "meta_description" => null, 
                            "meta_keywords" => null, 
                            "category_id" => 2127, 
                            "locale" => "en", 
                            "locale_id" => 55, 
                            "url_path" => "new" 
                        ] 
                    ], 
                    "children" => [] 
                ] 
            ] 
        ], 
        [
            "id" => 2121, 
            "position" => 4, 
            "image" => null, 
            "icon" => null, 
            "status" => 1, 
            "product_status" => 0, 
            "show_in_app" => 0, 
            "_lft" => 11, 
            "_rgt" => 14, 
            "parent_id" => null, 
            "created_at" => "2024-02-05T07:45:20.000000Z", 
            "updated_at" => "2024-09-11T15:20:50.000000Z", 
            "display_mode" => "products_and_description", 
            "category_icon_path" => null, 
            "additional" => null, 
            "name" => "العناية ", 
            "description" => null, 
            "slug" => "العناية", 
            "url_path" => "العناية", 
            "meta_title" => null, 
            "meta_description" => null, 
            "meta_keywords" => null, 
            "translations" => [
                [
                    "id" => 4244, 
                    "name" => "العناية ", 
                    "slug" => "العناية", 
                    "description" => null, 
                    "meta_title" => null, 
                    "meta_description" => null, 
                    "meta_keywords" => null, 
                    "category_id" => 2121, 
                    "locale" => "ar", 
                    "locale_id" => 54, 
                    "url_path" => "العناية" 
                ], 
                [
                    "id" => 4245, 
                    "name" => "العناية ", 
                    "slug" => "العناية", 
                    "description" => null, 
                    "meta_title" => null, 
                    "meta_description" => null, 
                    "meta_keywords" => null, 
                    "category_id" => 2121, 
                    "locale" => "en", 
                    "locale_id" => 55, 
                    "url_path" => "العناية" 
                ] 
            ], 
            "children" => [
                [
                    "id" => 2176, 
                    "position" => 0, 
                    "image" => null, 
                    "icon" => null, 
                    "status" => 1, 
                    "product_status" => 0, 
                    "show_in_app" => 0, 
                    "_lft" => 12, 
                    "_rgt" => 13, 
                    "parent_id" => 2121, 
                    "created_at" => "2024-02-08T08:53:34.000000Z", 
                    "updated_at" => "2024-09-11T15:20:50.000000Z", 
                    "display_mode" => "products_and_description", 
                    "category_icon_path" => null, 
                    "additional" => null, 
                    "name" => "منتجات ميلي ", 
                    "description" => null, 
                    "slug" => "منتجات-ميلي", 
                    "url_path" => "منتجات-ميلي", 
                    "meta_title" => null, 
                    "meta_description" => null, 
                    "meta_keywords" => null, 
                    "translations" => [
                        [
                            "id" => 4354, 
                            "name" => "منتجات ميلي ", 
                            "slug" => "منتجات-ميلي", 
                            "description" => null, 
                            "meta_title" => null, 
                            "meta_description" => null, 
                            "meta_keywords" => null, 
                            "category_id" => 2176, 
                            "locale" => "ar", 
                            "locale_id" => 54, 
                            "url_path" => "منتجات-ميلي" 
                        ], 
                        [
                            "id" => 4355, 
                            "name" => "منتجات ميلي ", 
                            "slug" => "منتجات-ميلي", 
                            "description" => null, 
                            "meta_title" => null, 
                            "meta_description" => null, 
                            "meta_keywords" => null, 
                            "category_id" => 2176, 
                            "locale" => "en", 
                            "locale_id" => 55, 
                            "url_path" => "منتجات-ميلي" 
                        ] 
                ], 
                "children" => [] 
                ] 
            ] 
        ], 
        [
            "id" => 2125, 
            "position" => 5, 
            "image" => null, 
            "icon" => null, 
            "status" => 1, 
            "product_status" => 0, 
            "show_in_app" => 0, 
            "_lft" => 21, 
            "_rgt" => 22, 
            "parent_id" => null, 
            "created_at" => "2024-02-05T07:48:32.000000Z", 
            "updated_at" => "2024-09-11T15:20:50.000000Z", 
            "display_mode" => "products_and_description", 
            "category_icon_path" => null, 
            "additional" => null, 
            "name" => "العدسات", 
            "description" => null, 
            "slug" => "العدسات", 
            "url_path" => "العدسات", 
            "meta_title" => null, 
            "meta_description" => null, 
            "meta_keywords" => null, 
            "translations" => [
                [
                    "id" => 4252, 
                    "name" => "العدسات", 
                    "slug" => "العدسات", 
                    "description" => null, 
                    "meta_title" => null, 
                    "meta_description" => null, 
                    "meta_keywords" => null, 
                    "category_id" => 2125, 
                    "locale" => "ar", 
                    "locale_id" => 54, 
                    "url_path" => "العدسات" 
                ], 
                [
                    "id" => 4253, 
                    "name" => "العدسات", 
                    "slug" => "العدسات", 
                    "description" => null, 
                    "meta_title" => null, 
                    "meta_description" => null, 
                    "meta_keywords" => null, 
                    "category_id" => 2125, 
                    "locale" => "en", 
                    "locale_id" => 55, 
                    "url_path" => "العدسات" 
                ] 
            ], 
            "children" => [] 
        ], 
        [
            "id" => 2175, 
            "position" => 6, 
            "image" => null, 
            "icon" => null, 
            "status" => 1, 
            "product_status" => 0, 
            "show_in_app" => 0, 
            "_lft" => 23, 
            "_rgt" => 24, 
            "parent_id" => null, 
            "created_at" => "2024-02-08T08:53:28.000000Z", 
            "updated_at" => "2024-02-08T08:53:28.000000Z", 
            "display_mode" => "products_and_description", 
            "category_icon_path" => null, 
            "additional" => null, 
            "name" => "منتجات يوسرين", 
            "description" => null, 
            "slug" => "منتجات-يوسرين", 
            "url_path" => "منتجات-يوسرين", 
            "meta_title" => null, 
            "meta_description" => null, 
            "meta_keywords" => null, 
            "translations" => [
                [
                    "id" => 4352, 
                    "name" => "منتجات يوسرين", 
                    "slug" => "منتجات-يوسرين", 
                    "description" => null, 
                    "meta_title" => null, 
                    "meta_description" => null, 
                    "meta_keywords" => null, 
                    "category_id" => 2175, 
                    "locale" => "ar", 
                    "locale_id" => 54, 
                    "url_path" => "منتجات-يوسرين" 
                ], 
                [
                    "id" => 4353, 
                    "name" => "منتجات يوسرين", 
                    "slug" => "منتجات-يوسرين", 
                    "description" => null, 
                    "meta_title" => null, 
                    "meta_description" => null, 
                    "meta_keywords" => null, 
                    "category_id" => 2175, 
                    "locale" => "en", 
                    "locale_id" => 55, 
                    "url_path" => "منتجات-يوسرين" 
                ] 
            ], 
            "children" => [] 
        ], 
        [
            "id" => 2205, 
            "position" => 7, 
            "image" => null, 
            "icon" => null, 
            "status" => 1, 
            "product_status" => 0, 
            "show_in_app" => 0, 
            "_lft" => 25, 
            "_rgt" => 26, 
            "parent_id" => null, 
            "created_at" => "2024-02-08T12:40:30.000000Z", 
            "updated_at" => "2024-02-08T12:40:30.000000Z", 
            "display_mode" => "products_and_description", 
            "category_icon_path" => null, 
            "additional" => null, 
            "name" => "الأظافر", 
            "description" => null, 
            "slug" => "الأظافر", 
            "url_path" => "الأظافر", 
            "meta_title" => null, 
            "meta_description" => null, 
            "meta_keywords" => null, 
            "translations" => [
                [
                    "id" => 4412, 
                    "name" => "الأظافر", 
                    "slug" => "الأظافر", 
                    "description" => null, 
                    "meta_title" => null, 
                    "meta_description" => null, 
                    "meta_keywords" => null, 
                    "category_id" => 2205, 
                    "locale" => "ar", 
                    "locale_id" => 54, 
                    "url_path" => "الأظافر" 
                ], 
                [
                    "id" => 4413, 
                    "name" => "الأظافر", 
                    "slug" => "الأظافر", 
                    "description" => null, 
                    "meta_title" => null, 
                    "meta_description" => null, 
                    "meta_keywords" => null, 
                    "category_id" => 2205, 
                    "locale" => "en", 
                    "locale_id" => 55, 
                    "url_path" => "الأظافر" 
                ] 
            ], 
            "children" => [] 
        ], 
        [
            "id" => 2554, 
            "position" => 8, 
            "image" => null, 
            "icon" => null, 
            "status" => 1, 
            "product_status" => 0, 
            "show_in_app" => 0, 
            "_lft" => 27, 
            "_rgt" => 32, 
            "parent_id" => null, 
            "created_at" => "2024-02-27T12:06:01.000000Z", 
            "updated_at" => "2024-02-27T12:06:01.000000Z", 
            "display_mode" => "products_and_description", 
            "category_icon_path" => null, 
            "additional" => null, 
            "name" => "العطور ", 
            "description" => null, 
            "slug" => "العطور", 
            "url_path" => "العطور", 
            "meta_title" => null, 
            "meta_description" => null, 
            "meta_keywords" => null, 
            "translations" => [
                [
                    "id" => 5110, 
                    "name" => "العطور ", 
                    "slug" => "العطور", 
                    "description" => null, 
                    "meta_title" => null, 
                    "meta_description" => null, 
                    "meta_keywords" => null, 
                    "category_id" => 2554, 
                    "locale" => "ar", 
                    "locale_id" => 54, 
                    "url_path" => "العطور" 
                ], 
                [
                    "id" => 5111, 
                    "name" => "العطور ", 
                    "slug" => "العطور", 
                    "description" => null, 
                    "meta_title" => null, 
                    "meta_description" => null, 
                    "meta_keywords" => null, 
                    "category_id" => 2554, 
                    "locale" => "en", 
                    "locale_id" => 55, 
                    "url_path" => "العطور" 
                ] 
            ], 
            "children" => [
                [
                    "id" => 2555, 
                    "position" => 0, 
                    "image" => null, 
                    "icon" => null, 
                    "status" => 1, 
                    "product_status" => 0, 
                    "show_in_app" => 0, 
                    "_lft" => 28, 
                    "_rgt" => 29, 
                    "parent_id" => 2554, 
                    "created_at" => "2024-02-27T12:06:36.000000Z", 
                    "updated_at" => "2024-09-11T15:20:50.000000Z", 
                    "display_mode" => "products_and_description", 
                    "category_icon_path" => null, 
                    "additional" => null, 
                    "name" => "عطور نسائية ", 
                    "description" => null, 
                    "slug" => "عطور-نسائية", 
                    "url_path" => "عطور-نسائية", 
                    "meta_title" => null, 
                    "meta_description" => null, 
                    "meta_keywords" => null, 
                    "translations" => [
                        [
                            "id" => 5112, 
                            "name" => "عطور نسائية ", 
                            "slug" => "عطور-نسائية", 
                            "description" => null, 
                            "meta_title" => null, 
                            "meta_description" => null, 
                            "meta_keywords" => null, 
                            "category_id" => 2555, 
                            "locale" => "ar", 
                            "locale_id" => 54, 
                            "url_path" => "عطور-نسائية" 
                        ], 
                        [
                            "id" => 5113, 
                            "name" => "عطور نسائية ", 
                            "slug" => "عطور-نسائية", 
                            "description" => null, 
                            "meta_title" => null, 
                            "meta_description" => null, 
                            "meta_keywords" => null, 
                            "category_id" => 2555, 
                            "locale" => "en", 
                            "locale_id" => 55, 
                            "url_path" => "عطور-نسائية" 
                        ] 
                    ], 
                    "children" => [] 
                ], 
                [
                    "id" => 2556, 
                    "position" => 1, 
                    "image" => null, 
                    "icon" => null, 
                    "status" => 1, 
                    "product_status" => 0, 
                    "show_in_app" => 0, 
                    "_lft" => 30, 
                    "_rgt" => 31, 
                    "parent_id" => 2554, 
                    "created_at" => "2024-02-27T12:06:47.000000Z", 
                    "updated_at" => "2024-09-11T15:20:50.000000Z", 
                    "display_mode" => "products_and_description", 
                    "category_icon_path" => null, 
                    "additional" => null, 
                    "name" => "عطور رجالية", 
                    "description" => null, 
                    "slug" => "عطور-رجالية", 
                    "url_path" => "عطور-رجالية", 
                    "meta_title" => null, 
                    "meta_description" => null, 
                    "meta_keywords" => null, 
                    "translations" => [
                        [
                        "id" => 5114, 
                        "name" => "عطور رجالية", 
                        "slug" => "عطور-رجالية", 
                        "description" => null, 
                        "meta_title" => null, 
                        "meta_description" => null, 
                        "meta_keywords" => null, 
                        "category_id" => 2556, 
                        "locale" => "ar", 
                        "locale_id" => 54, 
                        "url_path" => "عطور-رجالية" 
                        ], 
                        [
                            "id" => 5115, 
                            "name" => "عطور رجالية", 
                            "slug" => "عطور-رجالية", 
                            "description" => null, 
                            "meta_title" => null, 
                            "meta_description" => null, 
                            "meta_keywords" => null, 
                            "category_id" => 2556, 
                            "locale" => "en", 
                            "locale_id" => 55, 
                            "url_path" => "عطور-رجالية" 
                        ] 
                    ], 
                    "children" => [
                            ] 
                ] 
            ] 
        ], 
        [
            "id" => 2700, 
            "position" => 9, 
            "image" => null, 
            "icon" => null, 
            "status" => 1, 
            "product_status" => 0, 
            "show_in_app" => 0, 
            "_lft" => 43, 
            "_rgt" => 48, 
            "parent_id" => null, 
            "created_at" => "2024-03-05T13:13:22.000000Z", 
            "updated_at" => "2024-09-11T15:20:50.000000Z", 
            "display_mode" => "products_and_description", 
            "category_icon_path" => null, 
            "additional" => null, 
            "name" => "الملابس ", 
            "description" => null, 
            "slug" => "الملابس", 
            "url_path" => "الملابس", 
            "meta_title" => null, 
            "meta_description" => null, 
            "meta_keywords" => null, 
            "translations" => 
            [
                [
                    "id" => 5402, 
                    "name" => "الملابس ", 
                    "slug" => "الملابس", 
                    "description" => null, 
                    "meta_title" => null, 
                    "meta_description" => null, 
                    "meta_keywords" => null, 
                    "category_id" => 2700, 
                    "locale" => "ar", 
                    "locale_id" => 54, 
                    "url_path" => "الملابس" 
                ], 
                [
                    "id" => 5403, 
                    "name" => "الملابس ", 
                    "slug" => "الملابس", 
                    "description" => null, 
                    "meta_title" => null, 
                    "meta_description" => null, 
                    "meta_keywords" => null, 
                    "category_id" => 2700, 
                    "locale" => "en", 
                    "locale_id" => 55, 
                    "url_path" => "الملابس" 
                ] 
            ], 
            "children" => 
            [
                [
                    "id" => 2701, 
                    "position" => 0, 
                    "image" => null, 
                    "icon" => null, 
                    "status" => 1, 
                    "product_status" => 0, 
                    "show_in_app" => 0, 
                    "_lft" => 44, 
                    "_rgt" => 45, 
                    "parent_id" => 2700, 
                    "created_at" => "2024-03-05T13:13:38.000000Z", 
                    "updated_at" => "2024-09-11T15:20:50.000000Z", 
                    "display_mode" => "products_and_description", 
                    "category_icon_path" => null, 
                    "additional" => null, 
                    "name" => "ملابس اطفال", 
                    "description" => null, 
                    "slug" => "ملابس-اطفال", 
                    "url_path" => "ملابس-اطفال", 
                    "meta_title" => null, 
                    "meta_description" => null, 
                    "meta_keywords" => null, 
                    "translations" => 
                    [
                        [
                            "id" => 5404, 
                            "name" => "ملابس اطفال", 
                            "slug" => "ملابس-اطفال", 
                            "description" => null, 
                            "meta_title" => null, 
                            "meta_description" => null, 
                            "meta_keywords" => null, 
                            "category_id" => 2701, 
                            "locale" => "ar", 
                            "locale_id" => 54, 
                            "url_path" => "ملابس-اطفال" 
                        ], 
                        [
                            "id" => 5405, 
                            "name" => "ملابس اطفال", 
                            "slug" => "ملابس-اطفال", 
                            "description" => null, 
                            "meta_title" => null, 
                            "meta_description" => null, 
                            "meta_keywords" => null, 
                            "category_id" => 2701, 
                            "locale" => "en", 
                            "locale_id" => 55, 
                            "url_path" => "ملابس-اطفال" 
                        ] 
                    ], 
                    "children" => [] 
                ], 
                [
                    "id" => 2702, 
                    "position" => 1, 
                    "image" => null, 
                    "icon" => null, 
                    "status" => 1, 
                    "product_status" => 0, 
                    "show_in_app" => 0, 
                    "_lft" => 46, 
                    "_rgt" => 47, 
                    "parent_id" => 2700, 
                    "created_at" => "2024-03-05T13:13:50.000000Z", 
                    "updated_at" => "2024-09-11T15:20:50.000000Z", 
                    "display_mode" => "products_and_description", 
                    "category_icon_path" => null, 
                    "additional" => null, 
                    "name" => "ملابس رجالية", 
                    "description" => null, 
                    "slug" => "ملابس-رجالية", 
                    "url_path" => "ملابس-رجالية", 
                    "meta_title" => null, 
                    "meta_description" => null, 
                    "meta_keywords" => null, 
                    "translations" => 
                    [
                        [
                            "id" => 5406, 
                            "name" => "ملابس رجالية", 
                            "slug" => "ملابس-رجالية", 
                            "description" => null, 
                            "meta_title" => null, 
                            "meta_description" => null, 
                            "meta_keywords" => null, 
                            "category_id" => 2702, 
                            "locale" => "ar", 
                            "locale_id" => 54, 
                            "url_path" => "ملابس-رجالية" 
                        ], 
                        [
                            "id" => 5407, 
                            "name" => "ملابس رجالية", 
                            "slug" => "ملابس-رجالية", 
                            "description" => null, 
                            "meta_title" => null, 
                            "meta_description" => null, 
                            "meta_keywords" => null, 
                            "category_id" => 2702, 
                            "locale" => "en", 
                            "locale_id" => 55, 
                            "url_path" => "ملابس-رجالية" 
                        ] 
                    ], 
                    "children" => [] 
                ] 
            ] 
        ],
        [
            "id" => '', 
            "name" => "brands ", 
            "slug" => "brands", 
            "url_path" => "brands",             
        ],
        [
            "id" => '', 
            "name" => "products ", 
            "slug" => "products", 
            "url_path" => "products",             
        ]
    ];

    return $context;
}

function blogsAuthor() {
    $context['authUser'] = auth();
    $context['blogs'] = [
        [
              "id" => 23, 
              "name" => "blog", 
              "promotion_title" => "blog", 
              "description" => '<p><br></p><p class="ql-align-right"><strong style="color: rgb(0, 0, 0); background-color: transparent;">قم بإضافة الرابط التالي لأسعار الشحن الدولي:&nbsp;</strong></p><p><a href="https://www.swftbox.com/standardinternationaldelivery" target="_blank" style="color: rgb(0, 0, 255); background-color: transparent;"><strong>https://www.swftbox.com/standardinternationaldelivery</strong></a></p><p><br></p><p class="ql-align-center ql-direction-rtl"><span style="color: rgb(32, 33, 36);">النص الذي سيظهر هنا:</span></p><p class="ql-align-right ql-direction-rtl"><br></p><p class="ql-align-right ql-direction-rtl"><strong style="color: rgb(32, 33, 36);">&nbsp;للتوصيل</strong></p><p class="ql-align-right ql-direction-rtl"><br></p><p class="ql-align-right ql-direction-rtl"><strong style="color: rgb(32, 33, 36);">الدفع الفوري:</strong></p><p class="ql-align-right ql-direction-rtl"><br></p><p class="ql-align-right ql-direction-rtl"><span style="color: rgb(32, 33, 36);">- السعر: 25 درهم</span></p><p class="ql-align-right ql-direction-rtl"><span style="color: rgb(32, 33, 36);">- مدة الشحن: 2,3 أيام</span></p><p class="ql-align-right ql-direction-rtl"><span style="color: rgb(32, 33, 36);">- الشحن لخارج دبي: 30 درهماً</span></p><p class="ql-align-right ql-direction-rtl"><span style="color: rgb(32, 33, 36);">- الدفع عند الاستلام: 3.5% من إجمالي تكلفة المنتج + 1 درهم</span></p><p class="ql-align-right ql-direction-rtl"><br></p><p class="ql-align-right ql-direction-rtl"><strong style="color: rgb(32, 33, 36);">نموذج الباقات:&nbsp;</strong></p><p class="ql-align-right ql-direction-rtl"><br></p><p class="ql-align-right ql-direction-rtl"><span style="color: rgb(32, 33, 36);">- السعر: 18 درهم</span></p><p class="ql-align-right ql-direction-rtl"><span style="color: rgb(32, 33, 36);">&nbsp;مدة الشحن: اليوم التالي&nbsp;</span></p><p class="ql-align-right ql-direction-rtl"><span style="color: rgb(32, 33, 36);">- رسوم الاشتراك داخل دبي: 200 درهم</span></p><p class="ql-align-right ql-direction-rtl"><span style="color: rgb(32, 33, 36);">- رسوم الاشتراك خارج دبي: 350 درهماً</span></p><p class="ql-align-right ql-direction-rtl"><span style="color: rgb(32, 33, 36);">- الدفع عند الاستلام: 3.5% من إجمالي تكلفة المنتج + 1 درهم</span></p><p class="ql-align-right ql-direction-rtl"><br></p><p class="ql-align-right ql-direction-rtl"><br></p><p class="ql-align-right ql-direction-rtl"><strong style="color: rgb(32, 33, 36);">تخزين المنتجات:</strong></p><p class="ql-align-right ql-direction-rtl"><br></p><p class="ql-align-right ql-direction-rtl"><span style="color: rgb(32, 33, 36);">- رسوم استقبال المنتجات وبدء التخزين والاشتراك: 250 درهم</span></p><p class="ql-align-right ql-direction-rtl"><span style="color: rgb(32, 33, 36);">- سعر التوصيل: 20 درهم&nbsp;</span></p><p class="ql-align-right ql-direction-rtl"><span style="color: rgb(32, 33, 36);">مدة الشحن: في نفس اليوم&nbsp;</span></p><p class="ql-align-right ql-direction-rtl"><span style="color: rgb(32, 33, 36);">-100 درهم اماراتي لكل CBM في حال تجاوز عدد الطلبات بالشهر لأكثر من ٣٠ طلب</span></p><p class="ql-align-right ql-direction-rtl"><span style="color: rgb(32, 33, 36);">- 300 درهم اماراتي لكل CBM في حال كانت عدد الطلبات اقل من&nbsp;٣٠&nbsp;طلب&nbsp;بالشهر</span></p><p class="ql-align-right ql-direction-rtl"><span style="color: rgb(32, 33, 36);">- 4 درهم اماراتي لكل تغليف وتهيئة الطلب&nbsp;للشحن</span></p><p class="ql-align-right ql-direction-rtl"><span style="color: rgb(32, 33, 36);">- الدفع عند الاستلام: 3.5% من إجمالي تكلفة المنتج + 1 درهم</span></p><p><br></p><p><br></p>',
              "meta_title" => "blog", 
              "meta_url" => "blog", 
              "meta_description" => "blog", 
              "image" => "blog/23/6d4e5034-293c-41ab-abe7-c170e48de7dc.jpg", 
              "categories" => '["3"]', 
              "tags" => null, 
              "is_active" => 1, 
              "author_id" => 38, 
              "created_at" => "2024-07-07T14:51:01.000000Z", 
              "updated_at" => "2024-10-29T08:18:55.000000Z", 
              "locale" => "ar", 
              "getUser" => [
                "id" => 38, 
                "parent_id" => null, 
                "name" => "Test", 
                "email" => "admin@twsaa.com", 
                "status" => 1, 
                "role_id" => 38, 
                "access_code" => null, 
                "super_affiliate_id" => null, 
                "created_at" => "2022-09-11T13:15:28.000000Z", 
                "updated_at" => "2024-08-20T09:24:58.000000Z", 
                "is_verified" => 1 
            ],
            "blog_categories" =>
            [
                [
                    "id" => 3, 
                    "name" => "عامss", 
                    "is_active" => "1", 
                    "created_at" => "2024-08-07T14:59:34.000000Z", 
                    "updated_at" => "2024-08-07T14:59:34.000000Z", 
                    "translations" => [
                       [
                          "id" => 5, 
                          "locale" => "en", 
                          "name" => "General", 
                          "blog_category_id" => 3, 
                       ], 
                       [
                             "id" => 6, 
                             "locale" => "ar", 
                             "name" => "عامss", 
                             "blog_category_id" => 3, 
                          ] 
                    ] 
                 ] 
            ],
            
           
              "translations" => [
                 [
                    "id" => 45, 
                    "locale" => "en", 
                    "name" => "blog", 
                    "promotion_title" => "blog", 
                    "description" => '<p><br></p><p class="ql-align-right"><strong style="color: rgb(0, 0, 0); background-color: transparent;">قم بإضافة الرابط التالي لأسعار الشحن الدولي:&nbsp;</strong></p><p><a href="https://www.swftbox.com/standardinternationaldelivery" target="_blank" style="color: rgb(0, 0, 255); background-color: transparent;"><strong>https://www.swftbox.com/standardinternationaldelivery</strong></a></p><p><br></p><p class="ql-align-center ql-direction-rtl"><span style="color: rgb(32, 33, 36);">النص الذي سيظهر هنا:</span></p><p class="ql-align-right ql-direction-rtl"><br></p><p class="ql-align-right ql-direction-rtl"><strong style="color: rgb(32, 33, 36);">&nbsp;للتوصيل</strong></p><p class="ql-align-right ql-direction-rtl"><br></p><p class="ql-align-right ql-direction-rtl"><strong style="color: rgb(32, 33, 36);">الدفع الفوري:</strong></p><p class="ql-align-right ql-direction-rtl"><br></p><p class="ql-align-right ql-direction-rtl"><span style="color: rgb(32, 33, 36);">- السعر: 25 درهم</span></p><p class="ql-align-right ql-direction-rtl"><span style="color: rgb(32, 33, 36);">- مدة الشحن: 2,3 أيام</span></p><p class="ql-align-right ql-direction-rtl"><span style="color: rgb(32, 33, 36);">- الشحن لخارج دبي: 30 درهماً</span></p><p class="ql-align-right ql-direction-rtl"><span style="color: rgb(32, 33, 36);">- الدفع عند الاستلام: 3.5% من إجمالي تكلفة المنتج + 1 درهم</span></p><p class="ql-align-right ql-direction-rtl"><br></p><p class="ql-align-right ql-direction-rtl"><strong style="color: rgb(32, 33, 36);">نموذج الباقات:&nbsp;</strong></p><p class="ql-align-right ql-direction-rtl"><br></p><p class="ql-align-right ql-direction-rtl"><span style="color: rgb(32, 33, 36);">- السعر: 18 درهم</span></p><p class="ql-align-right ql-direction-rtl"><span style="color: rgb(32, 33, 36);">&nbsp;مدة الشحن: اليوم التالي&nbsp;</span></p><p class="ql-align-right ql-direction-rtl"><span style="color: rgb(32, 33, 36);">- رسوم الاشتراك داخل دبي: 200 درهم</span></p><p class="ql-align-right ql-direction-rtl"><span style="color: rgb(32, 33, 36);">- رسوم الاشتراك خارج دبي: 350 درهماً</span></p><p class="ql-align-right ql-direction-rtl"><span style="color: rgb(32, 33, 36);">- الدفع عند الاستلام: 3.5% من إجمالي تكلفة المنتج + 1 درهم</span></p><p class="ql-align-right ql-direction-rtl"><br></p><p class="ql-align-right ql-direction-rtl"><br></p><p class="ql-align-right ql-direction-rtl"><strong style="color: rgb(32, 33, 36);">تخزين المنتجات:</strong></p><p class="ql-align-right ql-direction-rtl"><br></p><p class="ql-align-right ql-direction-rtl"><span style="color: rgb(32, 33, 36);">- رسوم استقبال المنتجات وبدء التخزين والاشتراك: 250 درهم</span></p><p class="ql-align-right ql-direction-rtl"><span style="color: rgb(32, 33, 36);">- سعر التوصيل: 20 درهم&nbsp;</span></p><p class="ql-align-right ql-direction-rtl"><span style="color: rgb(32, 33, 36);">مدة الشحن: في نفس اليوم&nbsp;</span></p><p class="ql-align-right ql-direction-rtl"><span style="color: rgb(32, 33, 36);">-100 درهم اماراتي لكل CBM في حال تجاوز عدد الطلبات بالشهر لأكثر من ٣٠ طلب</span></p><p class="ql-align-right ql-direction-rtl"><span style="color: rgb(32, 33, 36);">- 300 درهم اماراتي لكل CBM في حال كانت عدد الطلبات اقل من&nbsp;٣٠&nbsp;طلب&nbsp;بالشهر</span></p><p class="ql-align-right ql-direction-rtl"><span style="color: rgb(32, 33, 36);">- 4 درهم اماراتي لكل تغليف وتهيئة الطلب&nbsp;للشحن</span></p><p class="ql-align-right ql-direction-rtl"><span style="color: rgb(32, 33, 36);">- الدفع عند الاستلام: 3.5% من إجمالي تكلفة المنتج + 1 درهم</span></p><p><br></p><p><br></p>', 
                    "categories" => null, 
                    "tags" => null, 
                    "blog_id" => 23, 
                 ], 
                 [
                       "id" => 46, 
                       "locale" => "ar", 
                       "name" => "blog", 
                       "promotion_title" => "blog", 
                       "description" => '<p><br></p><p class="ql-align-right"><strong style="color: rgb(0, 0, 0); background-color: transparent;">قم بإضافة الرابط التالي لأسعار الشحن الدولي:&nbsp;</strong></p><p><a href="https://www.swftbox.com/standardinternationaldelivery" target="_blank" style="color: rgb(0, 0, 255); background-color: transparent;"><strong>https://www.swftbox.com/standardinternationaldelivery</strong></a></p><p><br></p><p class="ql-align-center ql-direction-rtl"><span style="color: rgb(32, 33, 36);">النص الذي سيظهر هنا:</span></p><p class="ql-align-right ql-direction-rtl"><br></p><p class="ql-align-right ql-direction-rtl"><strong style="color: rgb(32, 33, 36);">&nbsp;للتوصيل</strong></p><p class="ql-align-right ql-direction-rtl"><br></p><p class="ql-align-right ql-direction-rtl"><strong style="color: rgb(32, 33, 36);">الدفع الفوري:</strong></p><p class="ql-align-right ql-direction-rtl"><br></p><p class="ql-align-right ql-direction-rtl"><span style="color: rgb(32, 33, 36);">- السعر: 25 درهم</span></p><p class="ql-align-right ql-direction-rtl"><span style="color: rgb(32, 33, 36);">- مدة الشحن: 2,3 أيام</span></p><p class="ql-align-right ql-direction-rtl"><span style="color: rgb(32, 33, 36);">- الشحن لخارج دبي: 30 درهماً</span></p><p class="ql-align-right ql-direction-rtl"><span style="color: rgb(32, 33, 36);">- الدفع عند الاستلام: 3.5% من إجمالي تكلفة المنتج + 1 درهم</span></p><p class="ql-align-right ql-direction-rtl"><br></p><p class="ql-align-right ql-direction-rtl"><strong style="color: rgb(32, 33, 36);">نموذج الباقات:&nbsp;</strong></p><p class="ql-align-right ql-direction-rtl"><br></p><p class="ql-align-right ql-direction-rtl"><span style="color: rgb(32, 33, 36);">- السعر: 18 درهم</span></p><p class="ql-align-right ql-direction-rtl"><span style="color: rgb(32, 33, 36);">&nbsp;مدة الشحن: اليوم التالي&nbsp;</span></p><p class="ql-align-right ql-direction-rtl"><span style="color: rgb(32, 33, 36);">- رسوم الاشتراك داخل دبي: 200 درهم</span></p><p class="ql-align-right ql-direction-rtl"><span style="color: rgb(32, 33, 36);">- رسوم الاشتراك خارج دبي: 350 درهماً</span></p><p class="ql-align-right ql-direction-rtl"><span style="color: rgb(32, 33, 36);">- الدفع عند الاستلام: 3.5% من إجمالي تكلفة المنتج + 1 درهم</span></p><p class="ql-align-right ql-direction-rtl"><br></p><p class="ql-align-right ql-direction-rtl"><br></p><p class="ql-align-right ql-direction-rtl"><strong style="color: rgb(32, 33, 36);">تخزين المنتجات:</strong></p><p class="ql-align-right ql-direction-rtl"><br></p><p class="ql-align-right ql-direction-rtl"><span style="color: rgb(32, 33, 36);">- رسوم استقبال المنتجات وبدء التخزين والاشتراك: 250 درهم</span></p><p class="ql-align-right ql-direction-rtl"><span style="color: rgb(32, 33, 36);">- سعر التوصيل: 20 درهم&nbsp;</span></p><p class="ql-align-right ql-direction-rtl"><span style="color: rgb(32, 33, 36);">مدة الشحن: في نفس اليوم&nbsp;</span></p><p class="ql-align-right ql-direction-rtl"><span style="color: rgb(32, 33, 36);">-100 درهم اماراتي لكل CBM في حال تجاوز عدد الطلبات بالشهر لأكثر من ٣٠ طلب</span></p><p class="ql-align-right ql-direction-rtl"><span style="color: rgb(32, 33, 36);">- 300 درهم اماراتي لكل CBM في حال كانت عدد الطلبات اقل من&nbsp;٣٠&nbsp;طلب&nbsp;بالشهر</span></p><p class="ql-align-right ql-direction-rtl"><span style="color: rgb(32, 33, 36);">- 4 درهم اماراتي لكل تغليف وتهيئة الطلب&nbsp;للشحن</span></p><p class="ql-align-right ql-direction-rtl"><span style="color: rgb(32, 33, 36);">- الدفع عند الاستلام: 3.5% من إجمالي تكلفة المنتج + 1 درهم</span></p><p><br></p><p><br></p>', 
                       "categories" => null, 
                       "tags" => null, 
                       "blog_id" => 23, 
                    ] 
              ] 
           ] 
     ]; 
    

    return $context;
}

function blogsCategory() {
    $context['authUser'] = auth();
    $context['blogCategories'] = [
        [
            "id" => 2, 
            "name" => "عامs", 
            "is_active" => "1", 
            "created_at" => "2024-08-07T14:58:12.000000Z", 
            "updated_at" => "2024-08-07T14:58:12.000000Z", 
            "translations" => [
               [
                  "id" => 3, 
                  "locale" => "en", 
                  "name" => "General", 
                  "blog_category_id" => 2, 
               ], 
               [
                     "id" => 4, 
                     "locale" => "ar", 
                     "name" => "عامs", 
                     "blog_category_id" => 2, 
                  ] 
            ] 
        ], 
        [
            "id" => 3, 
            "name" => "عامss", 
            "is_active" => "1", 
            "created_at" => "2024-08-07T14:59:34.000000Z", 
            "updated_at" => "2024-08-07T14:59:34.000000Z", 
            "translations" => [
                [
                    "id" => 5, 
                    "locale" => "en", 
                    "name" => "General", 
                    "blog_category_id" => 3, 
                ], 
                [
                        "id" => 6, 
                        "locale" => "ar", 
                        "name" => "عامss", 
                        "blog_category_id" => 3, 
                    ] 
            ] 
        ], 
        [
            "id" => 4, 
            "name" => "عامsss", 
            "is_active" => "1", 
            "created_at" => "2024-08-07T15:13:06.000000Z", 
            "updated_at" => "2024-08-07T15:13:06.000000Z", 
            "translations" => [
                [
                    "id" => 7, 
                    "locale" => "en", 
                    "name" => "General", 
                    "blog_category_id" => 4, 
                ], 
                [
                        "id" => 8, 
                        "locale" => "ar", 
                        "name" => "عامsss", 
                        "blog_category_id" => 4, 
                    ] 
            ] 
        ], 
        [
            "id" => 7, 
            "name" => "ar", 
            "is_active" => "1", 
            "created_at" => "2024-08-07T15:32:23.000000Z", 
            "updated_at" => "2024-08-07T15:32:23.000000Z", 
            "translations" => [
                [
                    "id" => 13, 
                    "locale" => "en", 
                    "name" => "en", 
                    "blog_category_id" => 7, 
                ], 
                [
                    "id" => 14, 
                    "locale" => "ar", 
                    "name" => "ar", 
                    "blog_category_id" => 7, 
                ] 
            ] 
        ] 
     ];
    $context['blogs'] = 
    [
        2 => [], 
        3 =>[
            [
            "id" => 23, 
            "name" => "blog", 
            "promotion_title" => "blog", 
            "description" => '<p><br></p><p class="ql-align-right"><strong style="color: rgb(0, 0, 0); background-color: transparent;">قم بإضافة الرابط التالي لأسعار الشحن الدولي:&nbsp;</strong></p><p><a href="https://www.swftbox.com/standardinternationaldelivery" target="_blank" style="color: rgb(0, 0, 255); background-color: transparent;"><strong>https://www.swftbox.com/standardinternationaldelivery</strong></a></p><p><br></p><p class="ql-align-center ql-direction-rtl"><span style="color: rgb(32, 33, 36);">النص الذي سيظهر هنا:</span></p><p class="ql-align-right ql-direction-rtl"><br></p><p class="ql-align-right ql-direction-rtl"><strong style="color: rgb(32, 33, 36);">&nbsp;للتوصيل</strong></p><p class="ql-align-right ql-direction-rtl"><br></p><p class="ql-align-right ql-direction-rtl"><strong style="color: rgb(32, 33, 36);">الدفع الفوري:</strong></p><p class="ql-align-right ql-direction-rtl"><br></p><p class="ql-align-right ql-direction-rtl"><span style="color: rgb(32, 33, 36);">- السعر: 25 درهم</span></p><p class="ql-align-right ql-direction-rtl"><span style="color: rgb(32, 33, 36);">- مدة الشحن: 2,3 أيام</span></p><p class="ql-align-right ql-direction-rtl"><span style="color: rgb(32, 33, 36);">- الشحن لخارج دبي: 30 درهماً</span></p><p class="ql-align-right ql-direction-rtl"><span style="color: rgb(32, 33, 36);">- الدفع عند الاستلام: 3.5% من إجمالي تكلفة المنتج + 1 درهم</span></p><p class="ql-align-right ql-direction-rtl"><br></p><p class="ql-align-right ql-direction-rtl"><strong style="color: rgb(32, 33, 36);">نموذج الباقات:&nbsp;</strong></p><p class="ql-align-right ql-direction-rtl"><br></p><p class="ql-align-right ql-direction-rtl"><span style="color: rgb(32, 33, 36);">- السعر: 18 درهم</span></p><p class="ql-align-right ql-direction-rtl"><span style="color: rgb(32, 33, 36);">&nbsp;مدة الشحن: اليوم التالي&nbsp;</span></p><p class="ql-align-right ql-direction-rtl"><span style="color: rgb(32, 33, 36);">- رسوم الاشتراك داخل دبي: 200 درهم</span></p><p class="ql-align-right ql-direction-rtl"><span style="color: rgb(32, 33, 36);">- رسوم الاشتراك خارج دبي: 350 درهماً</span></p><p class="ql-align-right ql-direction-rtl"><span style="color: rgb(32, 33, 36);">- الدفع عند الاستلام: 3.5% من إجمالي تكلفة المنتج + 1 درهم</span></p><p class="ql-align-right ql-direction-rtl"><br></p><p class="ql-align-right ql-direction-rtl"><br></p><p class="ql-align-right ql-direction-rtl"><strong style="color: rgb(32, 33, 36);">تخزين المنتجات:</strong></p><p class="ql-align-right ql-direction-rtl"><br></p><p class="ql-align-right ql-direction-rtl"><span style="color: rgb(32, 33, 36);">- رسوم استقبال المنتجات وبدء التخزين والاشتراك: 250 درهم</span></p><p class="ql-align-right ql-direction-rtl"><span style="color: rgb(32, 33, 36);">- سعر التوصيل: 20 درهم&nbsp;</span></p><p class="ql-align-right ql-direction-rtl"><span style="color: rgb(32, 33, 36);">مدة الشحن: في نفس اليوم&nbsp;</span></p><p class="ql-align-right ql-direction-rtl"><span style="color: rgb(32, 33, 36);">-100 درهم اماراتي لكل CBM في حال تجاوز عدد الطلبات بالشهر لأكثر من ٣٠ طلب</span></p><p class="ql-align-right ql-direction-rtl"><span style="color: rgb(32, 33, 36);">- 300 درهم اماراتي لكل CBM في حال كانت عدد الطلبات اقل من&nbsp;٣٠&nbsp;طلب&nbsp;بالشهر</span></p><p class="ql-align-right ql-direction-rtl"><span style="color: rgb(32, 33, 36);">- 4 درهم اماراتي لكل تغليف وتهيئة الطلب&nbsp;للشحن</span></p><p class="ql-align-right ql-direction-rtl"><span style="color: rgb(32, 33, 36);">- الدفع عند الاستلام: 3.5% من إجمالي تكلفة المنتج + 1 درهم</span></p><p><br></p><p><br></p>', 
            "meta_title" => "blog", 
            "meta_url" => "blog", 
            "meta_description" => "blog", 
            "image" => "blog/23/6d4e5034-293c-41ab-abe7-c170e48de7dc.jpg", 
            "categories" => '["3"]', 
            "tags" => null, 
            "is_active" => 1, 
            "author_id" => 38, 
            "created_at" => "2024-07-07T14:51:01.000000Z", 
            "updated_at" => "2024-10-29T08:18:55.000000Z", 
            "locale" => "ar",
            "getUser" => [
                "id" => 38, 
                "parent_id" => null, 
                "name" => "Test", 
                "email" => "admin@twsaa.com", 
                "status" => 1, 
                "role_id" => 38, 
                "access_code" => null, 
                "super_affiliate_id" => null, 
                "created_at" => "2022-09-11T13:15:28.000000Z", 
                "updated_at" => "2024-08-20T09:24:58.000000Z", 
                "is_verified" => 1 
            ],
            "translations" => [
                [
                    "id" => 45, 
                    "locale" => "en", 
                    "name" => "blog", 
                    "promotion_title" => "blog", 
                    "description" => '<p><br></p><p class="ql-align-right"><strong style="color: rgb(0, 0, 0); background-color: transparent;">قم بإضافة الرابط التالي لأسعار الشحن الدولي:&nbsp;</strong></p><p><a href="https://www.swftbox.com/standardinternationaldelivery" target="_blank" style="color: rgb(0, 0, 255); background-color: transparent;"><strong>https://www.swftbox.com/standardinternationaldelivery</strong></a></p><p><br></p><p class="ql-align-center ql-direction-rtl"><span style="color: rgb(32, 33, 36);">النص الذي سيظهر هنا:</span></p><p class="ql-align-right ql-direction-rtl"><br></p><p class="ql-align-right ql-direction-rtl"><strong style="color: rgb(32, 33, 36);">&nbsp;للتوصيل</strong></p><p class="ql-align-right ql-direction-rtl"><br></p><p class="ql-align-right ql-direction-rtl"><strong style="color: rgb(32, 33, 36);">الدفع الفوري:</strong></p><p class="ql-align-right ql-direction-rtl"><br></p><p class="ql-align-right ql-direction-rtl"><span style="color: rgb(32, 33, 36);">- السعر: 25 درهم</span></p><p class="ql-align-right ql-direction-rtl"><span style="color: rgb(32, 33, 36);">- مدة الشحن: 2,3 أيام</span></p><p class="ql-align-right ql-direction-rtl"><span style="color: rgb(32, 33, 36);">- الشحن لخارج دبي: 30 درهماً</span></p><p class="ql-align-right ql-direction-rtl"><span style="color: rgb(32, 33, 36);">- الدفع عند الاستلام: 3.5% من إجمالي تكلفة المنتج + 1 درهم</span></p><p class="ql-align-right ql-direction-rtl"><br></p><p class="ql-align-right ql-direction-rtl"><strong style="color: rgb(32, 33, 36);">نموذج الباقات:&nbsp;</strong></p><p class="ql-align-right ql-direction-rtl"><br></p><p class="ql-align-right ql-direction-rtl"><span style="color: rgb(32, 33, 36);">- السعر: 18 درهم</span></p><p class="ql-align-right ql-direction-rtl"><span style="color: rgb(32, 33, 36);">&nbsp;مدة الشحن: اليوم التالي&nbsp;</span></p><p class="ql-align-right ql-direction-rtl"><span style="color: rgb(32, 33, 36);">- رسوم الاشتراك داخل دبي: 200 درهم</span></p><p class="ql-align-right ql-direction-rtl"><span style="color: rgb(32, 33, 36);">- رسوم الاشتراك خارج دبي: 350 درهماً</span></p><p class="ql-align-right ql-direction-rtl"><span style="color: rgb(32, 33, 36);">- الدفع عند الاستلام: 3.5% من إجمالي تكلفة المنتج + 1 درهم</span></p><p class="ql-align-right ql-direction-rtl"><br></p><p class="ql-align-right ql-direction-rtl"><br></p><p class="ql-align-right ql-direction-rtl"><strong style="color: rgb(32, 33, 36);">تخزين المنتجات:</strong></p><p class="ql-align-right ql-direction-rtl"><br></p><p class="ql-align-right ql-direction-rtl"><span style="color: rgb(32, 33, 36);">- رسوم استقبال المنتجات وبدء التخزين والاشتراك: 250 درهم</span></p><p class="ql-align-right ql-direction-rtl"><span style="color: rgb(32, 33, 36);">- سعر التوصيل: 20 درهم&nbsp;</span></p><p class="ql-align-right ql-direction-rtl"><span style="color: rgb(32, 33, 36);">مدة الشحن: في نفس اليوم&nbsp;</span></p><p class="ql-align-right ql-direction-rtl"><span style="color: rgb(32, 33, 36);">-100 درهم اماراتي لكل CBM في حال تجاوز عدد الطلبات بالشهر لأكثر من ٣٠ طلب</span></p><p class="ql-align-right ql-direction-rtl"><span style="color: rgb(32, 33, 36);">- 300 درهم اماراتي لكل CBM في حال كانت عدد الطلبات اقل من&nbsp;٣٠&nbsp;طلب&nbsp;بالشهر</span></p><p class="ql-align-right ql-direction-rtl"><span style="color: rgb(32, 33, 36);">- 4 درهم اماراتي لكل تغليف وتهيئة الطلب&nbsp;للشحن</span></p><p class="ql-align-right ql-direction-rtl"><span style="color: rgb(32, 33, 36);">- الدفع عند الاستلام: 3.5% من إجمالي تكلفة المنتج + 1 درهم</span></p><p><br></p><p><br></p>', 
                    "categories" => null, 
                    "tags" => null, 
                    "blog_id" => 23, 
                ], 
                [
                        "id" => 46, 
                        "locale" => "ar", 
                        "name" => "blog", 
                        "promotion_title" => "blog", 
                        "description" => '<p><br></p><p class="ql-align-right"><strong style="color: rgb(0, 0, 0); background-color: transparent;">قم بإضافة الرابط التالي لأسعار الشحن الدولي:&nbsp;</strong></p><p><a href="https://www.swftbox.com/standardinternationaldelivery" target="_blank" style="color: rgb(0, 0, 255); background-color: transparent;"><strong>https://www.swftbox.com/standardinternationaldelivery</strong></a></p><p><br></p><p class="ql-align-center ql-direction-rtl"><span style="color: rgb(32, 33, 36);">النص الذي سيظهر هنا:</span></p><p class="ql-align-right ql-direction-rtl"><br></p><p class="ql-align-right ql-direction-rtl"><strong style="color: rgb(32, 33, 36);">&nbsp;للتوصيل</strong></p><p class="ql-align-right ql-direction-rtl"><br></p><p class="ql-align-right ql-direction-rtl"><strong style="color: rgb(32, 33, 36);">الدفع الفوري:</strong></p><p class="ql-align-right ql-direction-rtl"><br></p><p class="ql-align-right ql-direction-rtl"><span style="color: rgb(32, 33, 36);">- السعر: 25 درهم</span></p><p class="ql-align-right ql-direction-rtl"><span style="color: rgb(32, 33, 36);">- مدة الشحن: 2,3 أيام</span></p><p class="ql-align-right ql-direction-rtl"><span style="color: rgb(32, 33, 36);">- الشحن لخارج دبي: 30 درهماً</span></p><p class="ql-align-right ql-direction-rtl"><span style="color: rgb(32, 33, 36);">- الدفع عند الاستلام: 3.5% من إجمالي تكلفة المنتج + 1 درهم</span></p><p class="ql-align-right ql-direction-rtl"><br></p><p class="ql-align-right ql-direction-rtl"><strong style="color: rgb(32, 33, 36);">نموذج الباقات:&nbsp;</strong></p><p class="ql-align-right ql-direction-rtl"><br></p><p class="ql-align-right ql-direction-rtl"><span style="color: rgb(32, 33, 36);">- السعر: 18 درهم</span></p><p class="ql-align-right ql-direction-rtl"><span style="color: rgb(32, 33, 36);">&nbsp;مدة الشحن: اليوم التالي&nbsp;</span></p><p class="ql-align-right ql-direction-rtl"><span style="color: rgb(32, 33, 36);">- رسوم الاشتراك داخل دبي: 200 درهم</span></p><p class="ql-align-right ql-direction-rtl"><span style="color: rgb(32, 33, 36);">- رسوم الاشتراك خارج دبي: 350 درهماً</span></p><p class="ql-align-right ql-direction-rtl"><span style="color: rgb(32, 33, 36);">- الدفع عند الاستلام: 3.5% من إجمالي تكلفة المنتج + 1 درهم</span></p><p class="ql-align-right ql-direction-rtl"><br></p><p class="ql-align-right ql-direction-rtl"><br></p><p class="ql-align-right ql-direction-rtl"><strong style="color: rgb(32, 33, 36);">تخزين المنتجات:</strong></p><p class="ql-align-right ql-direction-rtl"><br></p><p class="ql-align-right ql-direction-rtl"><span style="color: rgb(32, 33, 36);">- رسوم استقبال المنتجات وبدء التخزين والاشتراك: 250 درهم</span></p><p class="ql-align-right ql-direction-rtl"><span style="color: rgb(32, 33, 36);">- سعر التوصيل: 20 درهم&nbsp;</span></p><p class="ql-align-right ql-direction-rtl"><span style="color: rgb(32, 33, 36);">مدة الشحن: في نفس اليوم&nbsp;</span></p><p class="ql-align-right ql-direction-rtl"><span style="color: rgb(32, 33, 36);">-100 درهم اماراتي لكل CBM في حال تجاوز عدد الطلبات بالشهر لأكثر من ٣٠ طلب</span></p><p class="ql-align-right ql-direction-rtl"><span style="color: rgb(32, 33, 36);">- 300 درهم اماراتي لكل CBM في حال كانت عدد الطلبات اقل من&nbsp;٣٠&nbsp;طلب&nbsp;بالشهر</span></p><p class="ql-align-right ql-direction-rtl"><span style="color: rgb(32, 33, 36);">- 4 درهم اماراتي لكل تغليف وتهيئة الطلب&nbsp;للشحن</span></p><p class="ql-align-right ql-direction-rtl"><span style="color: rgb(32, 33, 36);">- الدفع عند الاستلام: 3.5% من إجمالي تكلفة المنتج + 1 درهم</span></p><p><br></p><p><br></p>', 
                        "categories" => null, 
                        "tags" => null, 
                        "blog_id" => 23, 
                    ] 
            ] 
            ] 
        ], 
        4 => [], 
        5 => [] 
    ]; 

    return $context;
}

function blog() {
    $context['authUser'] = auth();
    $context['blog'] = [
        "id" => 23, 
        "name" => "blog", 
        "promotion_title" => "blog", 
        "description" => '<p><br></p><p class="ql-align-right"><strong style="color: rgb(0, 0, 0); background-color: transparent;">قم بإضافة الرابط التالي لأسعار الشحن الدولي:&nbsp;</strong></p><p><a href="https://www.swftbox.com/standardinternationaldelivery" target="_blank" style="color: rgb(0, 0, 255); background-color: transparent;"><strong>https://www.swftbox.com/standardinternationaldelivery</strong></a></p><p><br></p><p class="ql-align-center ql-direction-rtl"><span style="color: rgb(32, 33, 36);">النص الذي سيظهر هنا:</span></p><p class="ql-align-right ql-direction-rtl"><br></p><p class="ql-align-right ql-direction-rtl"><strong style="color: rgb(32, 33, 36);">&nbsp;للتوصيل</strong></p><p class="ql-align-right ql-direction-rtl"><br></p><p class="ql-align-right ql-direction-rtl"><strong style="color: rgb(32, 33, 36);">الدفع الفوري:</strong></p><p class="ql-align-right ql-direction-rtl"><br></p><p class="ql-align-right ql-direction-rtl"><span style="color: rgb(32, 33, 36);">- السعر: 25 درهم</span></p><p class="ql-align-right ql-direction-rtl"><span style="color: rgb(32, 33, 36);">- مدة الشحن: 2,3 أيام</span></p><p class="ql-align-right ql-direction-rtl"><span style="color: rgb(32, 33, 36);">- الشحن لخارج دبي: 30 درهماً</span></p><p class="ql-align-right ql-direction-rtl"><span style="color: rgb(32, 33, 36);">- الدفع عند الاستلام: 3.5% من إجمالي تكلفة المنتج + 1 درهم</span></p><p class="ql-align-right ql-direction-rtl"><br></p><p class="ql-align-right ql-direction-rtl"><strong style="color: rgb(32, 33, 36);">نموذج الباقات:&nbsp;</strong></p><p class="ql-align-right ql-direction-rtl"><br></p><p class="ql-align-right ql-direction-rtl"><span style="color: rgb(32, 33, 36);">- السعر: 18 درهم</span></p><p class="ql-align-right ql-direction-rtl"><span style="color: rgb(32, 33, 36);">&nbsp;مدة الشحن: اليوم التالي&nbsp;</span></p><p class="ql-align-right ql-direction-rtl"><span style="color: rgb(32, 33, 36);">- رسوم الاشتراك داخل دبي: 200 درهم</span></p><p class="ql-align-right ql-direction-rtl"><span style="color: rgb(32, 33, 36);">- رسوم الاشتراك خارج دبي: 350 درهماً</span></p><p class="ql-align-right ql-direction-rtl"><span style="color: rgb(32, 33, 36);">- الدفع عند الاستلام: 3.5% من إجمالي تكلفة المنتج + 1 درهم</span></p><p class="ql-align-right ql-direction-rtl"><br></p><p class="ql-align-right ql-direction-rtl"><br></p><p class="ql-align-right ql-direction-rtl"><strong style="color: rgb(32, 33, 36);">تخزين المنتجات:</strong></p><p class="ql-align-right ql-direction-rtl"><br></p><p class="ql-align-right ql-direction-rtl"><span style="color: rgb(32, 33, 36);">- رسوم استقبال المنتجات وبدء التخزين والاشتراك: 250 درهم</span></p><p class="ql-align-right ql-direction-rtl"><span style="color: rgb(32, 33, 36);">- سعر التوصيل: 20 درهم&nbsp;</span></p><p class="ql-align-right ql-direction-rtl"><span style="color: rgb(32, 33, 36);">مدة الشحن: في نفس اليوم&nbsp;</span></p><p class="ql-align-right ql-direction-rtl"><span style="color: rgb(32, 33, 36);">-100 درهم اماراتي لكل CBM في حال تجاوز عدد الطلبات بالشهر لأكثر من ٣٠ طلب</span></p><p class="ql-align-right ql-direction-rtl"><span style="color: rgb(32, 33, 36);">- 300 درهم اماراتي لكل CBM في حال كانت عدد الطلبات اقل من&nbsp;٣٠&nbsp;طلب&nbsp;بالشهر</span></p><p class="ql-align-right ql-direction-rtl"><span style="color: rgb(32, 33, 36);">- 4 درهم اماراتي لكل تغليف وتهيئة الطلب&nbsp;للشحن</span></p><p class="ql-align-right ql-direction-rtl"><span style="color: rgb(32, 33, 36);">- الدفع عند الاستلام: 3.5% من إجمالي تكلفة المنتج + 1 درهم</span></p><p><br></p><p><br></p>', 
        "meta_title" => "blog", 
        "meta_url" => "blog", 
        "meta_description" => "blog", 
        "image" => "blog/23/6d4e5034-293c-41ab-abe7-c170e48de7dc.jpg", 
        "categories" => '["3"]', 
        "tags" => null, 
        "is_active" => 1, 
        "author_id" => 38, 
        "created_at" => "2024-07-07T14:51:01.000000Z", 
        "updated_at" => "2024-10-29T08:18:55.000000Z", 
        "locale" => "ar", 
        "getUser" => [
            "id" => 38, 
            "parent_id" => null, 
            "name" => "Test", 
            "email" => "admin@twsaa.com", 
            "status" => 1, 
            "role_id" => 38, 
            "access_code" => null, 
            "super_affiliate_id" => null, 
            "created_at" => "2022-09-11T13:15:28.000000Z", 
            "updated_at" => "2024-08-20T09:24:58.000000Z", 
            "is_verified" => 1 
        ],
        "translations" => [
            [
                "id" => 45, 
                "locale" => "en", 
                "name" => "blog", 
                "promotion_title" => "blog", 
                "description" => '<p><br></p><p class="ql-align-right"><strong style="color: rgb(0, 0, 0); background-color: transparent;">قم بإضافة الرابط التالي لأسعار الشحن الدولي:&nbsp;</strong></p><p><a href="https://www.swftbox.com/standardinternationaldelivery" target="_blank" style="color: rgb(0, 0, 255); background-color: transparent;"><strong>https://www.swftbox.com/standardinternationaldelivery</strong></a></p><p><br></p><p class="ql-align-center ql-direction-rtl"><span style="color: rgb(32, 33, 36);">النص الذي سيظهر هنا:</span></p><p class="ql-align-right ql-direction-rtl"><br></p><p class="ql-align-right ql-direction-rtl"><strong style="color: rgb(32, 33, 36);">&nbsp;للتوصيل</strong></p><p class="ql-align-right ql-direction-rtl"><br></p><p class="ql-align-right ql-direction-rtl"><strong style="color: rgb(32, 33, 36);">الدفع الفوري:</strong></p><p class="ql-align-right ql-direction-rtl"><br></p><p class="ql-align-right ql-direction-rtl"><span style="color: rgb(32, 33, 36);">- السعر: 25 درهم</span></p><p class="ql-align-right ql-direction-rtl"><span style="color: rgb(32, 33, 36);">- مدة الشحن: 2,3 أيام</span></p><p class="ql-align-right ql-direction-rtl"><span style="color: rgb(32, 33, 36);">- الشحن لخارج دبي: 30 درهماً</span></p><p class="ql-align-right ql-direction-rtl"><span style="color: rgb(32, 33, 36);">- الدفع عند الاستلام: 3.5% من إجمالي تكلفة المنتج + 1 درهم</span></p><p class="ql-align-right ql-direction-rtl"><br></p><p class="ql-align-right ql-direction-rtl"><strong style="color: rgb(32, 33, 36);">نموذج الباقات:&nbsp;</strong></p><p class="ql-align-right ql-direction-rtl"><br></p><p class="ql-align-right ql-direction-rtl"><span style="color: rgb(32, 33, 36);">- السعر: 18 درهم</span></p><p class="ql-align-right ql-direction-rtl"><span style="color: rgb(32, 33, 36);">&nbsp;مدة الشحن: اليوم التالي&nbsp;</span></p><p class="ql-align-right ql-direction-rtl"><span style="color: rgb(32, 33, 36);">- رسوم الاشتراك داخل دبي: 200 درهم</span></p><p class="ql-align-right ql-direction-rtl"><span style="color: rgb(32, 33, 36);">- رسوم الاشتراك خارج دبي: 350 درهماً</span></p><p class="ql-align-right ql-direction-rtl"><span style="color: rgb(32, 33, 36);">- الدفع عند الاستلام: 3.5% من إجمالي تكلفة المنتج + 1 درهم</span></p><p class="ql-align-right ql-direction-rtl"><br></p><p class="ql-align-right ql-direction-rtl"><br></p><p class="ql-align-right ql-direction-rtl"><strong style="color: rgb(32, 33, 36);">تخزين المنتجات:</strong></p><p class="ql-align-right ql-direction-rtl"><br></p><p class="ql-align-right ql-direction-rtl"><span style="color: rgb(32, 33, 36);">- رسوم استقبال المنتجات وبدء التخزين والاشتراك: 250 درهم</span></p><p class="ql-align-right ql-direction-rtl"><span style="color: rgb(32, 33, 36);">- سعر التوصيل: 20 درهم&nbsp;</span></p><p class="ql-align-right ql-direction-rtl"><span style="color: rgb(32, 33, 36);">مدة الشحن: في نفس اليوم&nbsp;</span></p><p class="ql-align-right ql-direction-rtl"><span style="color: rgb(32, 33, 36);">-100 درهم اماراتي لكل CBM في حال تجاوز عدد الطلبات بالشهر لأكثر من ٣٠ طلب</span></p><p class="ql-align-right ql-direction-rtl"><span style="color: rgb(32, 33, 36);">- 300 درهم اماراتي لكل CBM في حال كانت عدد الطلبات اقل من&nbsp;٣٠&nbsp;طلب&nbsp;بالشهر</span></p><p class="ql-align-right ql-direction-rtl"><span style="color: rgb(32, 33, 36);">- 4 درهم اماراتي لكل تغليف وتهيئة الطلب&nbsp;للشحن</span></p><p class="ql-align-right ql-direction-rtl"><span style="color: rgb(32, 33, 36);">- الدفع عند الاستلام: 3.5% من إجمالي تكلفة المنتج + 1 درهم</span></p><p><br></p><p><br></p>', 
                "categories" => null, 
                "tags" => null, 
                "blog_id" => 23, 
            ], 
            [
                    "id" => 46, 
                    "locale" => "ar", 
                    "name" => "blog", 
                    "promotion_title" => "blog", 
                    "description" => '<p><br></p><p class="ql-align-right"><strong style="color: rgb(0, 0, 0); background-color: transparent;">قم بإضافة الرابط التالي لأسعار الشحن الدولي:&nbsp;</strong></p><p><a href="https://www.swftbox.com/standardinternationaldelivery" target="_blank" style="color: rgb(0, 0, 255); background-color: transparent;"><strong>https://www.swftbox.com/standardinternationaldelivery</strong></a></p><p><br></p><p class="ql-align-center ql-direction-rtl"><span style="color: rgb(32, 33, 36);">النص الذي سيظهر هنا:</span></p><p class="ql-align-right ql-direction-rtl"><br></p><p class="ql-align-right ql-direction-rtl"><strong style="color: rgb(32, 33, 36);">&nbsp;للتوصيل</strong></p><p class="ql-align-right ql-direction-rtl"><br></p><p class="ql-align-right ql-direction-rtl"><strong style="color: rgb(32, 33, 36);">الدفع الفوري:</strong></p><p class="ql-align-right ql-direction-rtl"><br></p><p class="ql-align-right ql-direction-rtl"><span style="color: rgb(32, 33, 36);">- السعر: 25 درهم</span></p><p class="ql-align-right ql-direction-rtl"><span style="color: rgb(32, 33, 36);">- مدة الشحن: 2,3 أيام</span></p><p class="ql-align-right ql-direction-rtl"><span style="color: rgb(32, 33, 36);">- الشحن لخارج دبي: 30 درهماً</span></p><p class="ql-align-right ql-direction-rtl"><span style="color: rgb(32, 33, 36);">- الدفع عند الاستلام: 3.5% من إجمالي تكلفة المنتج + 1 درهم</span></p><p class="ql-align-right ql-direction-rtl"><br></p><p class="ql-align-right ql-direction-rtl"><strong style="color: rgb(32, 33, 36);">نموذج الباقات:&nbsp;</strong></p><p class="ql-align-right ql-direction-rtl"><br></p><p class="ql-align-right ql-direction-rtl"><span style="color: rgb(32, 33, 36);">- السعر: 18 درهم</span></p><p class="ql-align-right ql-direction-rtl"><span style="color: rgb(32, 33, 36);">&nbsp;مدة الشحن: اليوم التالي&nbsp;</span></p><p class="ql-align-right ql-direction-rtl"><span style="color: rgb(32, 33, 36);">- رسوم الاشتراك داخل دبي: 200 درهم</span></p><p class="ql-align-right ql-direction-rtl"><span style="color: rgb(32, 33, 36);">- رسوم الاشتراك خارج دبي: 350 درهماً</span></p><p class="ql-align-right ql-direction-rtl"><span style="color: rgb(32, 33, 36);">- الدفع عند الاستلام: 3.5% من إجمالي تكلفة المنتج + 1 درهم</span></p><p class="ql-align-right ql-direction-rtl"><br></p><p class="ql-align-right ql-direction-rtl"><br></p><p class="ql-align-right ql-direction-rtl"><strong style="color: rgb(32, 33, 36);">تخزين المنتجات:</strong></p><p class="ql-align-right ql-direction-rtl"><br></p><p class="ql-align-right ql-direction-rtl"><span style="color: rgb(32, 33, 36);">- رسوم استقبال المنتجات وبدء التخزين والاشتراك: 250 درهم</span></p><p class="ql-align-right ql-direction-rtl"><span style="color: rgb(32, 33, 36);">- سعر التوصيل: 20 درهم&nbsp;</span></p><p class="ql-align-right ql-direction-rtl"><span style="color: rgb(32, 33, 36);">مدة الشحن: في نفس اليوم&nbsp;</span></p><p class="ql-align-right ql-direction-rtl"><span style="color: rgb(32, 33, 36);">-100 درهم اماراتي لكل CBM في حال تجاوز عدد الطلبات بالشهر لأكثر من ٣٠ طلب</span></p><p class="ql-align-right ql-direction-rtl"><span style="color: rgb(32, 33, 36);">- 300 درهم اماراتي لكل CBM في حال كانت عدد الطلبات اقل من&nbsp;٣٠&nbsp;طلب&nbsp;بالشهر</span></p><p class="ql-align-right ql-direction-rtl"><span style="color: rgb(32, 33, 36);">- 4 درهم اماراتي لكل تغليف وتهيئة الطلب&nbsp;للشحن</span></p><p class="ql-align-right ql-direction-rtl"><span style="color: rgb(32, 33, 36);">- الدفع عند الاستلام: 3.5% من إجمالي تكلفة المنتج + 1 درهم</span></p><p><br></p><p><br></p>', 
                    "categories" => null, 
                    "tags" => null, 
                    "blog_id" => 23, 
                ] 
            ] 
    ]; 
    $context['relatedBlogs'] = [
        [
            "id" => 23, 
            "name" => "blog", 
            "promotion_title" => "blog", 
            "description" => '<p><br></p><p class="ql-align-right"><strong style="color: rgb(0, 0, 0); background-color: transparent;">قم بإضافة الرابط التالي لأسعار الشحن الدولي:&nbsp;</strong></p><p><a href="https://www.swftbox.com/standardinternationaldelivery" target="_blank" style="color: rgb(0, 0, 255); background-color: transparent;"><strong>https://www.swftbox.com/standardinternationaldelivery</strong></a></p><p><br></p><p class="ql-align-center ql-direction-rtl"><span style="color: rgb(32, 33, 36);">النص الذي سيظهر هنا:</span></p><p class="ql-align-right ql-direction-rtl"><br></p><p class="ql-align-right ql-direction-rtl"><strong style="color: rgb(32, 33, 36);">&nbsp;للتوصيل</strong></p><p class="ql-align-right ql-direction-rtl"><br></p><p class="ql-align-right ql-direction-rtl"><strong style="color: rgb(32, 33, 36);">الدفع الفوري:</strong></p><p class="ql-align-right ql-direction-rtl"><br></p><p class="ql-align-right ql-direction-rtl"><span style="color: rgb(32, 33, 36);">- السعر: 25 درهم</span></p><p class="ql-align-right ql-direction-rtl"><span style="color: rgb(32, 33, 36);">- مدة الشحن: 2,3 أيام</span></p><p class="ql-align-right ql-direction-rtl"><span style="color: rgb(32, 33, 36);">- الشحن لخارج دبي: 30 درهماً</span></p><p class="ql-align-right ql-direction-rtl"><span style="color: rgb(32, 33, 36);">- الدفع عند الاستلام: 3.5% من إجمالي تكلفة المنتج + 1 درهم</span></p><p class="ql-align-right ql-direction-rtl"><br></p><p class="ql-align-right ql-direction-rtl"><strong style="color: rgb(32, 33, 36);">نموذج الباقات:&nbsp;</strong></p><p class="ql-align-right ql-direction-rtl"><br></p><p class="ql-align-right ql-direction-rtl"><span style="color: rgb(32, 33, 36);">- السعر: 18 درهم</span></p><p class="ql-align-right ql-direction-rtl"><span style="color: rgb(32, 33, 36);">&nbsp;مدة الشحن: اليوم التالي&nbsp;</span></p><p class="ql-align-right ql-direction-rtl"><span style="color: rgb(32, 33, 36);">- رسوم الاشتراك داخل دبي: 200 درهم</span></p><p class="ql-align-right ql-direction-rtl"><span style="color: rgb(32, 33, 36);">- رسوم الاشتراك خارج دبي: 350 درهماً</span></p><p class="ql-align-right ql-direction-rtl"><span style="color: rgb(32, 33, 36);">- الدفع عند الاستلام: 3.5% من إجمالي تكلفة المنتج + 1 درهم</span></p><p class="ql-align-right ql-direction-rtl"><br></p><p class="ql-align-right ql-direction-rtl"><br></p><p class="ql-align-right ql-direction-rtl"><strong style="color: rgb(32, 33, 36);">تخزين المنتجات:</strong></p><p class="ql-align-right ql-direction-rtl"><br></p><p class="ql-align-right ql-direction-rtl"><span style="color: rgb(32, 33, 36);">- رسوم استقبال المنتجات وبدء التخزين والاشتراك: 250 درهم</span></p><p class="ql-align-right ql-direction-rtl"><span style="color: rgb(32, 33, 36);">- سعر التوصيل: 20 درهم&nbsp;</span></p><p class="ql-align-right ql-direction-rtl"><span style="color: rgb(32, 33, 36);">مدة الشحن: في نفس اليوم&nbsp;</span></p><p class="ql-align-right ql-direction-rtl"><span style="color: rgb(32, 33, 36);">-100 درهم اماراتي لكل CBM في حال تجاوز عدد الطلبات بالشهر لأكثر من ٣٠ طلب</span></p><p class="ql-align-right ql-direction-rtl"><span style="color: rgb(32, 33, 36);">- 300 درهم اماراتي لكل CBM في حال كانت عدد الطلبات اقل من&nbsp;٣٠&nbsp;طلب&nbsp;بالشهر</span></p><p class="ql-align-right ql-direction-rtl"><span style="color: rgb(32, 33, 36);">- 4 درهم اماراتي لكل تغليف وتهيئة الطلب&nbsp;للشحن</span></p><p class="ql-align-right ql-direction-rtl"><span style="color: rgb(32, 33, 36);">- الدفع عند الاستلام: 3.5% من إجمالي تكلفة المنتج + 1 درهم</span></p><p><br></p><p><br></p>',
            "meta_title" => "blog", 
            "meta_url" => "blog", 
            "meta_description" => "blog", 
            "image" => "blog/23/6d4e5034-293c-41ab-abe7-c170e48de7dc.jpg", 
            "categories" => '["3"]', 
            "tags" => null, 
            "is_active" => 1, 
            "author_id" => 38, 
            "created_at" => "2024-07-07T14:51:01.000000Z", 
            "updated_at" => "2024-10-29T08:18:55.000000Z", 
            "locale" => "ar", 
            "getUser" => [
                "id" => 38, 
                "parent_id" => null, 
                "name" => "Test", 
                "email" => "admin@twsaa.com", 
                "status" => 1, 
                "role_id" => 38, 
                "access_code" => null, 
                "super_affiliate_id" => null, 
                "created_at" => "2022-09-11T13:15:28.000000Z", 
                "updated_at" => "2024-08-20T09:24:58.000000Z", 
                "is_verified" => 1 
            ],
            "translations" => [
                [
                "id" => 45, 
                "locale" => "en", 
                "name" => "blog", 
                "promotion_title" => "blog", 
                "description" => '<p><br></p><p class="ql-align-right"><strong style="color: rgb(0, 0, 0); background-color: transparent;">قم بإضافة الرابط التالي لأسعار الشحن الدولي:&nbsp;</strong></p><p><a href="https://www.swftbox.com/standardinternationaldelivery" target="_blank" style="color: rgb(0, 0, 255); background-color: transparent;"><strong>https://www.swftbox.com/standardinternationaldelivery</strong></a></p><p><br></p><p class="ql-align-center ql-direction-rtl"><span style="color: rgb(32, 33, 36);">النص الذي سيظهر هنا:</span></p><p class="ql-align-right ql-direction-rtl"><br></p><p class="ql-align-right ql-direction-rtl"><strong style="color: rgb(32, 33, 36);">&nbsp;للتوصيل</strong></p><p class="ql-align-right ql-direction-rtl"><br></p><p class="ql-align-right ql-direction-rtl"><strong style="color: rgb(32, 33, 36);">الدفع الفوري:</strong></p><p class="ql-align-right ql-direction-rtl"><br></p><p class="ql-align-right ql-direction-rtl"><span style="color: rgb(32, 33, 36);">- السعر: 25 درهم</span></p><p class="ql-align-right ql-direction-rtl"><span style="color: rgb(32, 33, 36);">- مدة الشحن: 2,3 أيام</span></p><p class="ql-align-right ql-direction-rtl"><span style="color: rgb(32, 33, 36);">- الشحن لخارج دبي: 30 درهماً</span></p><p class="ql-align-right ql-direction-rtl"><span style="color: rgb(32, 33, 36);">- الدفع عند الاستلام: 3.5% من إجمالي تكلفة المنتج + 1 درهم</span></p><p class="ql-align-right ql-direction-rtl"><br></p><p class="ql-align-right ql-direction-rtl"><strong style="color: rgb(32, 33, 36);">نموذج الباقات:&nbsp;</strong></p><p class="ql-align-right ql-direction-rtl"><br></p><p class="ql-align-right ql-direction-rtl"><span style="color: rgb(32, 33, 36);">- السعر: 18 درهم</span></p><p class="ql-align-right ql-direction-rtl"><span style="color: rgb(32, 33, 36);">&nbsp;مدة الشحن: اليوم التالي&nbsp;</span></p><p class="ql-align-right ql-direction-rtl"><span style="color: rgb(32, 33, 36);">- رسوم الاشتراك داخل دبي: 200 درهم</span></p><p class="ql-align-right ql-direction-rtl"><span style="color: rgb(32, 33, 36);">- رسوم الاشتراك خارج دبي: 350 درهماً</span></p><p class="ql-align-right ql-direction-rtl"><span style="color: rgb(32, 33, 36);">- الدفع عند الاستلام: 3.5% من إجمالي تكلفة المنتج + 1 درهم</span></p><p class="ql-align-right ql-direction-rtl"><br></p><p class="ql-align-right ql-direction-rtl"><br></p><p class="ql-align-right ql-direction-rtl"><strong style="color: rgb(32, 33, 36);">تخزين المنتجات:</strong></p><p class="ql-align-right ql-direction-rtl"><br></p><p class="ql-align-right ql-direction-rtl"><span style="color: rgb(32, 33, 36);">- رسوم استقبال المنتجات وبدء التخزين والاشتراك: 250 درهم</span></p><p class="ql-align-right ql-direction-rtl"><span style="color: rgb(32, 33, 36);">- سعر التوصيل: 20 درهم&nbsp;</span></p><p class="ql-align-right ql-direction-rtl"><span style="color: rgb(32, 33, 36);">مدة الشحن: في نفس اليوم&nbsp;</span></p><p class="ql-align-right ql-direction-rtl"><span style="color: rgb(32, 33, 36);">-100 درهم اماراتي لكل CBM في حال تجاوز عدد الطلبات بالشهر لأكثر من ٣٠ طلب</span></p><p class="ql-align-right ql-direction-rtl"><span style="color: rgb(32, 33, 36);">- 300 درهم اماراتي لكل CBM في حال كانت عدد الطلبات اقل من&nbsp;٣٠&nbsp;طلب&nbsp;بالشهر</span></p><p class="ql-align-right ql-direction-rtl"><span style="color: rgb(32, 33, 36);">- 4 درهم اماراتي لكل تغليف وتهيئة الطلب&nbsp;للشحن</span></p><p class="ql-align-right ql-direction-rtl"><span style="color: rgb(32, 33, 36);">- الدفع عند الاستلام: 3.5% من إجمالي تكلفة المنتج + 1 درهم</span></p><p><br></p><p><br></p>', 
                "categories" => null, 
                "tags" => null, 
                "blog_id" => 23, 
                ], 
                [
                    "id" => 46, 
                    "locale" => "ar", 
                    "name" => "blog", 
                    "promotion_title" => "blog", 
                    "description" => '<p><br></p><p class="ql-align-right"><strong style="color: rgb(0, 0, 0); background-color: transparent;">قم بإضافة الرابط التالي لأسعار الشحن الدولي:&nbsp;</strong></p><p><a href="https://www.swftbox.com/standardinternationaldelivery" target="_blank" style="color: rgb(0, 0, 255); background-color: transparent;"><strong>https://www.swftbox.com/standardinternationaldelivery</strong></a></p><p><br></p><p class="ql-align-center ql-direction-rtl"><span style="color: rgb(32, 33, 36);">النص الذي سيظهر هنا:</span></p><p class="ql-align-right ql-direction-rtl"><br></p><p class="ql-align-right ql-direction-rtl"><strong style="color: rgb(32, 33, 36);">&nbsp;للتوصيل</strong></p><p class="ql-align-right ql-direction-rtl"><br></p><p class="ql-align-right ql-direction-rtl"><strong style="color: rgb(32, 33, 36);">الدفع الفوري:</strong></p><p class="ql-align-right ql-direction-rtl"><br></p><p class="ql-align-right ql-direction-rtl"><span style="color: rgb(32, 33, 36);">- السعر: 25 درهم</span></p><p class="ql-align-right ql-direction-rtl"><span style="color: rgb(32, 33, 36);">- مدة الشحن: 2,3 أيام</span></p><p class="ql-align-right ql-direction-rtl"><span style="color: rgb(32, 33, 36);">- الشحن لخارج دبي: 30 درهماً</span></p><p class="ql-align-right ql-direction-rtl"><span style="color: rgb(32, 33, 36);">- الدفع عند الاستلام: 3.5% من إجمالي تكلفة المنتج + 1 درهم</span></p><p class="ql-align-right ql-direction-rtl"><br></p><p class="ql-align-right ql-direction-rtl"><strong style="color: rgb(32, 33, 36);">نموذج الباقات:&nbsp;</strong></p><p class="ql-align-right ql-direction-rtl"><br></p><p class="ql-align-right ql-direction-rtl"><span style="color: rgb(32, 33, 36);">- السعر: 18 درهم</span></p><p class="ql-align-right ql-direction-rtl"><span style="color: rgb(32, 33, 36);">&nbsp;مدة الشحن: اليوم التالي&nbsp;</span></p><p class="ql-align-right ql-direction-rtl"><span style="color: rgb(32, 33, 36);">- رسوم الاشتراك داخل دبي: 200 درهم</span></p><p class="ql-align-right ql-direction-rtl"><span style="color: rgb(32, 33, 36);">- رسوم الاشتراك خارج دبي: 350 درهماً</span></p><p class="ql-align-right ql-direction-rtl"><span style="color: rgb(32, 33, 36);">- الدفع عند الاستلام: 3.5% من إجمالي تكلفة المنتج + 1 درهم</span></p><p class="ql-align-right ql-direction-rtl"><br></p><p class="ql-align-right ql-direction-rtl"><br></p><p class="ql-align-right ql-direction-rtl"><strong style="color: rgb(32, 33, 36);">تخزين المنتجات:</strong></p><p class="ql-align-right ql-direction-rtl"><br></p><p class="ql-align-right ql-direction-rtl"><span style="color: rgb(32, 33, 36);">- رسوم استقبال المنتجات وبدء التخزين والاشتراك: 250 درهم</span></p><p class="ql-align-right ql-direction-rtl"><span style="color: rgb(32, 33, 36);">- سعر التوصيل: 20 درهم&nbsp;</span></p><p class="ql-align-right ql-direction-rtl"><span style="color: rgb(32, 33, 36);">مدة الشحن: في نفس اليوم&nbsp;</span></p><p class="ql-align-right ql-direction-rtl"><span style="color: rgb(32, 33, 36);">-100 درهم اماراتي لكل CBM في حال تجاوز عدد الطلبات بالشهر لأكثر من ٣٠ طلب</span></p><p class="ql-align-right ql-direction-rtl"><span style="color: rgb(32, 33, 36);">- 300 درهم اماراتي لكل CBM في حال كانت عدد الطلبات اقل من&nbsp;٣٠&nbsp;طلب&nbsp;بالشهر</span></p><p class="ql-align-right ql-direction-rtl"><span style="color: rgb(32, 33, 36);">- 4 درهم اماراتي لكل تغليف وتهيئة الطلب&nbsp;للشحن</span></p><p class="ql-align-right ql-direction-rtl"><span style="color: rgb(32, 33, 36);">- الدفع عند الاستلام: 3.5% من إجمالي تكلفة المنتج + 1 درهم</span></p><p><br></p><p><br></p>', 
                    "categories" => null, 
                    "tags" => null, 
                    "blog_id" => 23, 
                ] 
            ] 
        ] 
    ]; 

    return $context;
}

function blogs() {
    $context['authUser'] = auth();
    $context['blogCategories'] = [
        [
            "id" => 2, 
            "name" => "عامs", 
            "is_active" => "1", 
            "created_at" => "2024-08-07T14:58:12.000000Z", 
            "updated_at" => "2024-08-07T14:58:12.000000Z", 
            "translations" => [
               [
                  "id" => 3, 
                  "locale" => "en", 
                  "name" => "General", 
                  "blog_category_id" => 2, 
               ], 
               [
                     "id" => 4, 
                     "locale" => "ar", 
                     "name" => "عامs", 
                     "blog_category_id" => 2, 
                  ] 
            ] 
        ], 
        [
            "id" => 3, 
            "name" => "عامss", 
            "is_active" => "1", 
            "created_at" => "2024-08-07T14:59:34.000000Z", 
            "updated_at" => "2024-08-07T14:59:34.000000Z", 
            "translations" => [
                [
                    "id" => 5, 
                    "locale" => "en", 
                    "name" => "General", 
                    "blog_category_id" => 3, 
                ], 
                [
                        "id" => 6, 
                        "locale" => "ar", 
                        "name" => "عامss", 
                        "blog_category_id" => 3, 
                    ] 
            ] 
        ], 
        [
            "id" => 4, 
            "name" => "عامsss", 
            "is_active" => "1", 
            "created_at" => "2024-08-07T15:13:06.000000Z", 
            "updated_at" => "2024-08-07T15:13:06.000000Z", 
            "translations" => [
                [
                    "id" => 7, 
                    "locale" => "en", 
                    "name" => "General", 
                    "blog_category_id" => 4, 
                ], 
                [
                        "id" => 8, 
                        "locale" => "ar", 
                        "name" => "عامsss", 
                        "blog_category_id" => 4, 
                    ] 
            ] 
        ], 
        [
            "id" => 7, 
            "name" => "ar", 
            "is_active" => "1", 
            "created_at" => "2024-08-07T15:32:23.000000Z", 
            "updated_at" => "2024-08-07T15:32:23.000000Z", 
            "translations" => [
                [
                    "id" => 13, 
                    "locale" => "en", 
                    "name" => "en", 
                    "blog_category_id" => 7, 
                ], 
                [
                    "id" => 14, 
                    "locale" => "ar", 
                    "name" => "ar", 
                    "blog_category_id" => 7, 
                ] 
            ] 
        ] 
    ];
    $context['blogs'] = [
        2 => [], 
        3 =>[
            [
            "id" => 23, 
            "name" => "blog", 
            "promotion_title" => "blog", 
            "description" => '<p><br></p><p class="ql-align-right"><strong style="color: rgb(0, 0, 0); background-color: transparent;">قم بإضافة الرابط التالي لأسعار الشحن الدولي:&nbsp;</strong></p><p><a href="https://www.swftbox.com/standardinternationaldelivery" target="_blank" style="color: rgb(0, 0, 255); background-color: transparent;"><strong>https://www.swftbox.com/standardinternationaldelivery</strong></a></p><p><br></p><p class="ql-align-center ql-direction-rtl"><span style="color: rgb(32, 33, 36);">النص الذي سيظهر هنا:</span></p><p class="ql-align-right ql-direction-rtl"><br></p><p class="ql-align-right ql-direction-rtl"><strong style="color: rgb(32, 33, 36);">&nbsp;للتوصيل</strong></p><p class="ql-align-right ql-direction-rtl"><br></p><p class="ql-align-right ql-direction-rtl"><strong style="color: rgb(32, 33, 36);">الدفع الفوري:</strong></p><p class="ql-align-right ql-direction-rtl"><br></p><p class="ql-align-right ql-direction-rtl"><span style="color: rgb(32, 33, 36);">- السعر: 25 درهم</span></p><p class="ql-align-right ql-direction-rtl"><span style="color: rgb(32, 33, 36);">- مدة الشحن: 2,3 أيام</span></p><p class="ql-align-right ql-direction-rtl"><span style="color: rgb(32, 33, 36);">- الشحن لخارج دبي: 30 درهماً</span></p><p class="ql-align-right ql-direction-rtl"><span style="color: rgb(32, 33, 36);">- الدفع عند الاستلام: 3.5% من إجمالي تكلفة المنتج + 1 درهم</span></p><p class="ql-align-right ql-direction-rtl"><br></p><p class="ql-align-right ql-direction-rtl"><strong style="color: rgb(32, 33, 36);">نموذج الباقات:&nbsp;</strong></p><p class="ql-align-right ql-direction-rtl"><br></p><p class="ql-align-right ql-direction-rtl"><span style="color: rgb(32, 33, 36);">- السعر: 18 درهم</span></p><p class="ql-align-right ql-direction-rtl"><span style="color: rgb(32, 33, 36);">&nbsp;مدة الشحن: اليوم التالي&nbsp;</span></p><p class="ql-align-right ql-direction-rtl"><span style="color: rgb(32, 33, 36);">- رسوم الاشتراك داخل دبي: 200 درهم</span></p><p class="ql-align-right ql-direction-rtl"><span style="color: rgb(32, 33, 36);">- رسوم الاشتراك خارج دبي: 350 درهماً</span></p><p class="ql-align-right ql-direction-rtl"><span style="color: rgb(32, 33, 36);">- الدفع عند الاستلام: 3.5% من إجمالي تكلفة المنتج + 1 درهم</span></p><p class="ql-align-right ql-direction-rtl"><br></p><p class="ql-align-right ql-direction-rtl"><br></p><p class="ql-align-right ql-direction-rtl"><strong style="color: rgb(32, 33, 36);">تخزين المنتجات:</strong></p><p class="ql-align-right ql-direction-rtl"><br></p><p class="ql-align-right ql-direction-rtl"><span style="color: rgb(32, 33, 36);">- رسوم استقبال المنتجات وبدء التخزين والاشتراك: 250 درهم</span></p><p class="ql-align-right ql-direction-rtl"><span style="color: rgb(32, 33, 36);">- سعر التوصيل: 20 درهم&nbsp;</span></p><p class="ql-align-right ql-direction-rtl"><span style="color: rgb(32, 33, 36);">مدة الشحن: في نفس اليوم&nbsp;</span></p><p class="ql-align-right ql-direction-rtl"><span style="color: rgb(32, 33, 36);">-100 درهم اماراتي لكل CBM في حال تجاوز عدد الطلبات بالشهر لأكثر من ٣٠ طلب</span></p><p class="ql-align-right ql-direction-rtl"><span style="color: rgb(32, 33, 36);">- 300 درهم اماراتي لكل CBM في حال كانت عدد الطلبات اقل من&nbsp;٣٠&nbsp;طلب&nbsp;بالشهر</span></p><p class="ql-align-right ql-direction-rtl"><span style="color: rgb(32, 33, 36);">- 4 درهم اماراتي لكل تغليف وتهيئة الطلب&nbsp;للشحن</span></p><p class="ql-align-right ql-direction-rtl"><span style="color: rgb(32, 33, 36);">- الدفع عند الاستلام: 3.5% من إجمالي تكلفة المنتج + 1 درهم</span></p><p><br></p><p><br></p>', 
            "meta_title" => "blog", 
            "meta_url" => "blog", 
            "meta_description" => "blog", 
            "image" => "blog/23/6d4e5034-293c-41ab-abe7-c170e48de7dc.jpg", 
            "categories" => '["3"]', 
            "tags" => null, 
            "is_active" => 1, 
            "author_id" => 38, 
            "created_at" => "2024-07-07T14:51:01.000000Z", 
            "updated_at" => "2024-10-29T08:18:55.000000Z", 
            "locale" => "ar",
            "getUser" => [
                "id" => 38, 
                "parent_id" => null, 
                "name" => "Test", 
                "email" => "admin@twsaa.com", 
                "status" => 1, 
                "role_id" => 38, 
                "access_code" => null, 
                "super_affiliate_id" => null, 
                "created_at" => "2022-09-11T13:15:28.000000Z", 
                "updated_at" => "2024-08-20T09:24:58.000000Z", 
                "is_verified" => 1 
            ],
            "translations" => [
                [
                    "id" => 45, 
                    "locale" => "en", 
                    "name" => "blog", 
                    "promotion_title" => "blog", 
                    "description" => '<p><br></p><p class="ql-align-right"><strong style="color: rgb(0, 0, 0); background-color: transparent;">قم بإضافة الرابط التالي لأسعار الشحن الدولي:&nbsp;</strong></p><p><a href="https://www.swftbox.com/standardinternationaldelivery" target="_blank" style="color: rgb(0, 0, 255); background-color: transparent;"><strong>https://www.swftbox.com/standardinternationaldelivery</strong></a></p><p><br></p><p class="ql-align-center ql-direction-rtl"><span style="color: rgb(32, 33, 36);">النص الذي سيظهر هنا:</span></p><p class="ql-align-right ql-direction-rtl"><br></p><p class="ql-align-right ql-direction-rtl"><strong style="color: rgb(32, 33, 36);">&nbsp;للتوصيل</strong></p><p class="ql-align-right ql-direction-rtl"><br></p><p class="ql-align-right ql-direction-rtl"><strong style="color: rgb(32, 33, 36);">الدفع الفوري:</strong></p><p class="ql-align-right ql-direction-rtl"><br></p><p class="ql-align-right ql-direction-rtl"><span style="color: rgb(32, 33, 36);">- السعر: 25 درهم</span></p><p class="ql-align-right ql-direction-rtl"><span style="color: rgb(32, 33, 36);">- مدة الشحن: 2,3 أيام</span></p><p class="ql-align-right ql-direction-rtl"><span style="color: rgb(32, 33, 36);">- الشحن لخارج دبي: 30 درهماً</span></p><p class="ql-align-right ql-direction-rtl"><span style="color: rgb(32, 33, 36);">- الدفع عند الاستلام: 3.5% من إجمالي تكلفة المنتج + 1 درهم</span></p><p class="ql-align-right ql-direction-rtl"><br></p><p class="ql-align-right ql-direction-rtl"><strong style="color: rgb(32, 33, 36);">نموذج الباقات:&nbsp;</strong></p><p class="ql-align-right ql-direction-rtl"><br></p><p class="ql-align-right ql-direction-rtl"><span style="color: rgb(32, 33, 36);">- السعر: 18 درهم</span></p><p class="ql-align-right ql-direction-rtl"><span style="color: rgb(32, 33, 36);">&nbsp;مدة الشحن: اليوم التالي&nbsp;</span></p><p class="ql-align-right ql-direction-rtl"><span style="color: rgb(32, 33, 36);">- رسوم الاشتراك داخل دبي: 200 درهم</span></p><p class="ql-align-right ql-direction-rtl"><span style="color: rgb(32, 33, 36);">- رسوم الاشتراك خارج دبي: 350 درهماً</span></p><p class="ql-align-right ql-direction-rtl"><span style="color: rgb(32, 33, 36);">- الدفع عند الاستلام: 3.5% من إجمالي تكلفة المنتج + 1 درهم</span></p><p class="ql-align-right ql-direction-rtl"><br></p><p class="ql-align-right ql-direction-rtl"><br></p><p class="ql-align-right ql-direction-rtl"><strong style="color: rgb(32, 33, 36);">تخزين المنتجات:</strong></p><p class="ql-align-right ql-direction-rtl"><br></p><p class="ql-align-right ql-direction-rtl"><span style="color: rgb(32, 33, 36);">- رسوم استقبال المنتجات وبدء التخزين والاشتراك: 250 درهم</span></p><p class="ql-align-right ql-direction-rtl"><span style="color: rgb(32, 33, 36);">- سعر التوصيل: 20 درهم&nbsp;</span></p><p class="ql-align-right ql-direction-rtl"><span style="color: rgb(32, 33, 36);">مدة الشحن: في نفس اليوم&nbsp;</span></p><p class="ql-align-right ql-direction-rtl"><span style="color: rgb(32, 33, 36);">-100 درهم اماراتي لكل CBM في حال تجاوز عدد الطلبات بالشهر لأكثر من ٣٠ طلب</span></p><p class="ql-align-right ql-direction-rtl"><span style="color: rgb(32, 33, 36);">- 300 درهم اماراتي لكل CBM في حال كانت عدد الطلبات اقل من&nbsp;٣٠&nbsp;طلب&nbsp;بالشهر</span></p><p class="ql-align-right ql-direction-rtl"><span style="color: rgb(32, 33, 36);">- 4 درهم اماراتي لكل تغليف وتهيئة الطلب&nbsp;للشحن</span></p><p class="ql-align-right ql-direction-rtl"><span style="color: rgb(32, 33, 36);">- الدفع عند الاستلام: 3.5% من إجمالي تكلفة المنتج + 1 درهم</span></p><p><br></p><p><br></p>', 
                    "categories" => null, 
                    "tags" => null, 
                    "blog_id" => 23, 
                ], 
                [
                        "id" => 46, 
                        "locale" => "ar", 
                        "name" => "blog", 
                        "promotion_title" => "blog", 
                        "description" => '<p><br></p><p class="ql-align-right"><strong style="color: rgb(0, 0, 0); background-color: transparent;">قم بإضافة الرابط التالي لأسعار الشحن الدولي:&nbsp;</strong></p><p><a href="https://www.swftbox.com/standardinternationaldelivery" target="_blank" style="color: rgb(0, 0, 255); background-color: transparent;"><strong>https://www.swftbox.com/standardinternationaldelivery</strong></a></p><p><br></p><p class="ql-align-center ql-direction-rtl"><span style="color: rgb(32, 33, 36);">النص الذي سيظهر هنا:</span></p><p class="ql-align-right ql-direction-rtl"><br></p><p class="ql-align-right ql-direction-rtl"><strong style="color: rgb(32, 33, 36);">&nbsp;للتوصيل</strong></p><p class="ql-align-right ql-direction-rtl"><br></p><p class="ql-align-right ql-direction-rtl"><strong style="color: rgb(32, 33, 36);">الدفع الفوري:</strong></p><p class="ql-align-right ql-direction-rtl"><br></p><p class="ql-align-right ql-direction-rtl"><span style="color: rgb(32, 33, 36);">- السعر: 25 درهم</span></p><p class="ql-align-right ql-direction-rtl"><span style="color: rgb(32, 33, 36);">- مدة الشحن: 2,3 أيام</span></p><p class="ql-align-right ql-direction-rtl"><span style="color: rgb(32, 33, 36);">- الشحن لخارج دبي: 30 درهماً</span></p><p class="ql-align-right ql-direction-rtl"><span style="color: rgb(32, 33, 36);">- الدفع عند الاستلام: 3.5% من إجمالي تكلفة المنتج + 1 درهم</span></p><p class="ql-align-right ql-direction-rtl"><br></p><p class="ql-align-right ql-direction-rtl"><strong style="color: rgb(32, 33, 36);">نموذج الباقات:&nbsp;</strong></p><p class="ql-align-right ql-direction-rtl"><br></p><p class="ql-align-right ql-direction-rtl"><span style="color: rgb(32, 33, 36);">- السعر: 18 درهم</span></p><p class="ql-align-right ql-direction-rtl"><span style="color: rgb(32, 33, 36);">&nbsp;مدة الشحن: اليوم التالي&nbsp;</span></p><p class="ql-align-right ql-direction-rtl"><span style="color: rgb(32, 33, 36);">- رسوم الاشتراك داخل دبي: 200 درهم</span></p><p class="ql-align-right ql-direction-rtl"><span style="color: rgb(32, 33, 36);">- رسوم الاشتراك خارج دبي: 350 درهماً</span></p><p class="ql-align-right ql-direction-rtl"><span style="color: rgb(32, 33, 36);">- الدفع عند الاستلام: 3.5% من إجمالي تكلفة المنتج + 1 درهم</span></p><p class="ql-align-right ql-direction-rtl"><br></p><p class="ql-align-right ql-direction-rtl"><br></p><p class="ql-align-right ql-direction-rtl"><strong style="color: rgb(32, 33, 36);">تخزين المنتجات:</strong></p><p class="ql-align-right ql-direction-rtl"><br></p><p class="ql-align-right ql-direction-rtl"><span style="color: rgb(32, 33, 36);">- رسوم استقبال المنتجات وبدء التخزين والاشتراك: 250 درهم</span></p><p class="ql-align-right ql-direction-rtl"><span style="color: rgb(32, 33, 36);">- سعر التوصيل: 20 درهم&nbsp;</span></p><p class="ql-align-right ql-direction-rtl"><span style="color: rgb(32, 33, 36);">مدة الشحن: في نفس اليوم&nbsp;</span></p><p class="ql-align-right ql-direction-rtl"><span style="color: rgb(32, 33, 36);">-100 درهم اماراتي لكل CBM في حال تجاوز عدد الطلبات بالشهر لأكثر من ٣٠ طلب</span></p><p class="ql-align-right ql-direction-rtl"><span style="color: rgb(32, 33, 36);">- 300 درهم اماراتي لكل CBM في حال كانت عدد الطلبات اقل من&nbsp;٣٠&nbsp;طلب&nbsp;بالشهر</span></p><p class="ql-align-right ql-direction-rtl"><span style="color: rgb(32, 33, 36);">- 4 درهم اماراتي لكل تغليف وتهيئة الطلب&nbsp;للشحن</span></p><p class="ql-align-right ql-direction-rtl"><span style="color: rgb(32, 33, 36);">- الدفع عند الاستلام: 3.5% من إجمالي تكلفة المنتج + 1 درهم</span></p><p><br></p><p><br></p>', 
                        "categories" => null, 
                        "tags" => null, 
                        "blog_id" => 23, 
                    ] 
            ] 
            ] 
        ], 
        4 => [], 
        5 => [] 
    ];

    return $context;
}

function page() {
    $context['authUser'] = auth();
    $context['page']['html_content'] ='<div class="mb-5">Return policy page content</div>';

    return $context;
}

function customizable() {
    $context['authUser'] = auth();
    $context['sales_count'] = 5;
    $context['product'] = [
        "id" => 106919, 
        "type" => "customizable", 
        "product_id" => 55682, 
        "parent_id" => null, 
        "sku" => "customizable", 
        "name" => "customizable product", 
        "description" => "This is testing Mobile", 
        "url_key" => "customizable", 
        "new" => null, 
        "featured" => null, 
        "status" => 1, 
        "thumbnail" => null, 
        "price" => "222.00", 
        "cost" => null, 
        "special_price" => null, 
        "special_price_from" => null, 
        "special_price_to" => null, 
        "delivery_time" => null, 
        "visible_individually" => 1, 
        "min_price" => "222.00", 
        "max_price" => "222.00", 
        "is_vat" => 1, 
        "short_description" => null, 
        "meta_title" => null, 
        "meta_keywords" => null, 
        "meta_description" => null, 
        "width" => 0, 
        "height" => 0, 
        "depth" => 0, 
        "weight" => 0, 
        "unlimited_quantity" => "0", 
        "barcode" => null, 
        "brand_name" => "12", 
        "promotion_title" => null, 
        "subtitle" => null, 
        "image" => "", 
        "image_name" => "", 
        "image_label" => "", 
        "image_value" => "", 
        "image_url" => null, 
        "text" => "", 
        "text_name" => "", 
        "text_label" => "", 
        "text_value" => "", 
        "color" => "", 
        "color_name" => "", 
        "color_label" => "", 
        "color_value" => "", 
        "size" => null, 
        "size_label" => null, 
        "created_at" => "2024-06-03 15:33:15", 
        "updated_at" => "2024-10-15 17:34:22", 
        "deleted_at" => null, 
        "enable_note" => null, 
        "enable_upload_image" => null, 
        "maximum_quantity_per_order" => null, 
        "notify_quantity" => null, 
        "require_shipping" => 0, 
        "images" => [
        [
            "id" => 37959, 
            "type" => "image", 
            "path" => "product/55682/aa97d069-649f-41d3-bf95-a66addfc903c.jpg", 
            "product_id" => 55682, 
            "main" => 1, 
            "url" => "https://cdn.twsaa.com/product/55682/aa97d069-649f-41d3-bf95-a66addfc903c.jpg" 
            ] 
        ],
        "product" => [
            "id" => 55682, 
            "parent_id" => null, 
            "attribute_family_id" => 21, 
            "sku" => "customizable", 
            "type" => "customizable", 
            "from" => null, 
            "pin" => 0, 
            "created_at" => "2024-06-03T12:33:15.000000Z", 
            "updated_at" => "2024-06-03T12:33:15.000000Z", 
            "short_description" => null, 
            "description" => "This is testing Mobile", 
            "name" => "customizable product", 
            "url_key" => "customizable", 
            "tax_category_id" => null, 
            "new" => 0, 
            "featured" => 0, 
            "visible_individually" => 1, 
            "status" => 1, 
            "color" => null, 
            "text" => null, 
            "image" => null, 
            "size" => null, 
            "brand" => null, 
            "guest_checkout" => 0, 
            "brand_name" => "12", 
            "barcode" => null, 
            "unlimited_quantity" => 0, 
            "require_shipping" => 0, 
            "is_vat" => 1, 
            "notify_quantity" => null, 
            "delivery_time" => null, 
            "subtitle" => null, 
            "promotion_title" => null, 
            "meta_title" => null, 
            "meta_keywords" => null, 
            "meta_description" => null, 
            "price" => "222.0000", 
            "cost" => null, 
            "special_price" => null, 
            "special_price_from" => null, 
            "special_price_to" => null, 
            "width" => null, 
            "height" => null, 
            "depth" => null, 
            "weight" => null, 
            "variants" => [
            ], 
            "attribute_family" => [
                "id" => 21, 
                "code" => "default", 
                "name" => "Default", 
                "status" => 0, 
                "is_user_defined" => 1 
            ],
            "customizable" => [
                [
                    "id" => 157, 
                    "type" => "text", 
                    "sort" => "0", 
                    "required" => "off", 
                    "option_name" => "a", 
                    "description" => "aa", 
                    "associated_with_order_time" => null, 
                    "availability_duration" => null, 
                    "option_details_name" => null, 
                    "show_condition" => "on_condition", 
                    "condition_field_name" => null, 
                    "field_condition" => "=", 
                    "condition_field_value" => "0", 
                    "options" => null, 
                    "product_id" => 55682, 
                    "created_at" => "2024-06-03T13:04:12.000000Z", 
                    "updated_at" => "2024-07-02T11:46:57.000000Z" 
                ], 
                [
                    "id" => 158, 
                    "type" => "textarea", 
                    "sort" => "0", 
                    "required" => "off", 
                    "option_name" => "b", 
                    "description" => "bb", 
                    "associated_with_order_time" => null, 
                    "availability_duration" => null, 
                    "option_details_name" => null, 
                    "show_condition" => "on_condition", 
                    "condition_field_name" => null, 
                    "field_condition" => "=", 
                    "condition_field_value" => "0", 
                    "options" => null, 
                    "product_id" => 55682, 
                    "created_at" => "2024-06-03T13:04:12.000000Z", 
                    "updated_at" => "2024-07-02T11:46:57.000000Z" 
                ], 
                [
                    "id" => 159, 
                    "type" => "number", 
                    "sort" => "0", 
                    "required" => "off", 
                    "option_name" => "c", 
                    "description" => "cc", 
                    "associated_with_order_time" => null, 
                    "availability_duration" => null, 
                    "option_details_name" => null, 
                    "show_condition" => "on_condition", 
                    "condition_field_name" => null, 
                    "field_condition" => "=", 
                    "condition_field_value" => "0", 
                    "options" => null, 
                    "product_id" => 55682, 
                    "created_at" => "2024-06-03T13:04:12.000000Z", 
                    "updated_at" => "2024-07-02T11:46:19.000000Z" 
                    ], 
                [
                    "id" => 160, 
                    "type" => "radio", 
                    "sort" => "0", 
                    "required" => "off", 
                    "option_name" => "d", 
                    "description" => "dd", 
                    "associated_with_order_time" => null, 
                    "availability_duration" => null, 
                    "option_details_name" => null, 
                    "show_condition" => "on_condition", 
                    "condition_field_name" => null, 
                    "field_condition" => "=", 
                    "condition_field_value" => "0", 
                    "options" => null, 
                    "product_id" => 55682, 
                    "created_at" => "2024-06-03T13:04:12.000000Z", 
                    "updated_at" => "2024-07-02T11:46:19.000000Z" 
                ], 
                [
                    "id" => 161, 
                    "type" => "checkbox", 
                    "sort" => "0", 
                    "required" => "off", 
                    "option_name" => "e", 
                    "description" => "ee", 
                    "associated_with_order_time" => null, 
                    "availability_duration" => null, 
                    "option_details_name" => null, 
                    "show_condition" => "on_condition", 
                    "condition_field_name" => null, 
                    "field_condition" => "=", 
                    "condition_field_value" => "0", 
                    "options" => null, 
                    "product_id" => 55682, 
                    "created_at" => "2024-06-03T13:04:12.000000Z", 
                    "updated_at" => "2024-07-02T11:46:19.000000Z" 
                ], 
                [
                    "id" => 162, 
                    "type" => "image", 
                    "sort" => "0", 
                    "required" => "off", 
                    "option_name" => "f", 
                    "description" => "", 
                    "associated_with_order_time" => null, 
                    "availability_duration" => null, 
                    "option_details_name" => null, 
                    "show_condition" => "on_condition", 
                    "condition_field_name" => null, 
                    "field_condition" => "=", 
                    "condition_field_value" => "0", 
                    "options" => null, 
                    "product_id" => 55682, 
                    "created_at" => "2024-06-03T13:04:13.000000Z", 
                    "updated_at" => "2024-07-02T11:46:19.000000Z" 
                ], 
                [
                    "id" => 163, 
                    "type" => "file", 
                    "sort" => "0", 
                    "required" => "off", 
                    "option_name" => "g", 
                    "description" => "gg", 
                    "associated_with_order_time" => null, 
                    "availability_duration" => null, 
                    "option_details_name" => null, 
                    "show_condition" => "on_condition", 
                    "condition_field_name" => null, 
                    "field_condition" => "=", 
                    "condition_field_value" => "0", 
                    "options" => null, 
                    "product_id" => 55682, 
                    "created_at" => "2024-06-03T13:04:13.000000Z", 
                    "updated_at" => "2024-07-02T11:46:19.000000Z" 
                    ], 
                [
                    "id" => 164, 
                    "type" => "color_picker", 
                    "sort" => "0", 
                    "required" => "off", 
                    "option_name" => "h", 
                    "description" => "hh", 
                    "associated_with_order_time" => null, 
                    "availability_duration" => null, 
                    "option_details_name" => null, 
                    "show_condition" => "on_condition", 
                    "condition_field_name" => null, 
                    "field_condition" => "=", 
                    "condition_field_value" => "0", 
                    "options" => null, 
                    "product_id" => 55682, 
                    "created_at" => "2024-06-03T13:04:13.000000Z", 
                    "updated_at" => "2024-07-02T11:46:19.000000Z" 
                ] 
            ]
        ],
        "up_sells" => [
            [
                "id" => 107859, 
                "product_id" => 56219, 
                "parent_id" => null, 
                "sku" => "K6P8ATO", 
                "name" => "digital", 
                "description" => null, 
                "url_key" => "k6p8ato", 
                "new" => null, 
                "featured" => null, 
                "status" => 1, 
                "thumbnail" => null, 
                "price" => "5.00", 
                "cost" => null, 
                "special_price" => null, 
                "special_price_from" => null, 
                "special_price_to" => null, 
                "delivery_time" => null, 
                "visible_individually" => 1, 
                "min_price" => "5.00", 
                "max_price" => "5.00", 
                "is_vat" => 1, 
                "short_description" => null, 
                "meta_title" => null, 
                "meta_keywords" => null, 
                "meta_description" => null, 
                "width" => 0, 
                "height" => 0, 
                "depth" => 0, 
                "weight" => 0, 
                "unlimited_quantity" => "0", 
                "barcode" => null, 
                "brand_name" => null, 
                "promotion_title" => null, 
                "subtitle" => null, 
                "image" => "", 
                "image_name" => "", 
                "image_label" => "", 
                "image_value" => "", 
                "image_url" => null, 
                "text" => "", 
                "text_name" => "", 
                "text_label" => "", 
                "text_value" => "", 
                "color" => "", 
                "color_name" => "", 
                "color_label" => "", 
                "color_value" => "", 
                "size" => null, 
                "size_label" => null, 
                "created_at" => "2024-11-10 09:30:59", 
                "updated_at" => "2024-11-10 09:31:39", 
                "deleted_at" => null, 
                "enable_note" => null, 
                "enable_upload_image" => null, 
                "maximum_quantity_per_order" => null, 
                "notify_quantity" => null, 
                "require_shipping" => 0 ,
                "html_price" => '<span class="product-price"><span class="price">٥٫٧٥&nbsp;ر.س.</span></span>',
                "product" => [
                    "base_image_url" => "https://cdn.twsaa.com/home/23/cd2eeaba-784a-4272-a3f7-3e78262846d0.png"
                ]
            ], 
            [
                "id" => 107833, 
                "product_id" => 56206, 
                "parent_id" => null, 
                "sku" => "sku-test-101", 
                "name" => "ملابس سباحة", 
                "description" => "", 
                "url_key" => "sku-test-101", 
                "new" => null, 
                "featured" => null, 
                "status" => 1, 
                "thumbnail" => null, 
                "price" => "45.00", 
                "cost" => "40.90", 
                "special_price" => "35.00", 
                "special_price_from" => "2026-07-31", 
                "special_price_to" => "2025-07-31", 
                "delivery_time" => null, 
                "visible_individually" => 1, 
                "min_price" => "55.00", 
                "max_price" => "100.00", 
                "is_vat" => 1, 
                "short_description" => null, 
                "meta_title" => null, 
                "meta_keywords" => null, 
                "meta_description" => null, 
                "width" => 0, 
                "height" => 0, 
                "depth" => 0, 
                "weight" => 10, 
                "unlimited_quantity" => "0", 
                "barcode" => "2", 
                "brand_name" => null, 
                "promotion_title" => null, 
                "subtitle" => null, 
                "image" => "", 
                "image_name" => "", 
                "image_label" => "", 
                "image_value" => "", 
                "image_url" => null, 
                "text" => "", 
                "text_name" => "", 
                "text_label" => "", 
                "text_value" => "", 
                "color" => "", 
                "color_name" => "", 
                "color_label" => "", 
                "color_value" => "", 
                "size" => null, 
                "size_label" => null, 
                "created_at" => "2024-10-21 11:44:47", 
                "updated_at" => "2024-10-21 11:45:07", 
                "deleted_at" => null, 
                "enable_note" => null, 
                "enable_upload_image" => null, 
                "maximum_quantity_per_order" => null, 
                "notify_quantity" => null, 
                "require_shipping" => 0 ,
                "html_price" => '<span class="product-price"><span class="special-price"> ‏٥١٫٧٥ ر.س.‏</span></span>',
                "product" => [
                    "base_image_url" => "https://cdn.twsaa.com/home/23/cd2eeaba-784a-4272-a3f7-3e78262846d0.png"
                ]
            ], 
            [
                "id" => 107667, 
                "product_id" => 56118, 
                "parent_id" => null, 
                "sku" => "OUU1RO7", 
                "name" => "ebook", 
                "description" => null, 
                "url_key" => "ouu1ro7", 
                "new" => null, 
                "featured" => null, 
                "status" => 1, 
                "thumbnail" => null, 
                "price" => "1.00", 
                "cost" => null, 
                "special_price" => null, 
                "special_price_from" => null, 
                "special_price_to" => null, 
                "delivery_time" => null, 
                "visible_individually" => 1, 
                "min_price" => "1.00", 
                "max_price" => "1.00", 
                "is_vat" => 1, 
                "short_description" => null, 
                "meta_title" => null, 
                "meta_keywords" => null, 
                "meta_description" => null, 
                "width" => 0, 
                "height" => 0, 
                "depth" => 0, 
                "weight" => 0, 
                "unlimited_quantity" => "0", 
                "barcode" => null, 
                "brand_name" => "12", 
                "promotion_title" => null, 
                "subtitle" => null, 
                "image" => "", 
                "image_name" => "", 
                "image_label" => "", 
                "image_value" => "", 
                "image_url" => null, 
                "text" => "", 
                "text_name" => "", 
                "text_label" => "", 
                "text_value" => "", 
                "color" => "", 
                "color_name" => "", 
                "color_label" => "", 
                "color_value" => "", 
                "size" => null, 
                "size_label" => null, 
                "created_at" => "2024-09-12 14:10:05", 
                "updated_at" => "2024-10-15 17:33:53", 
                "deleted_at" => null, 
                "enable_note" => null, 
                "enable_upload_image" => null, 
                "maximum_quantity_per_order" => null, 
                "notify_quantity" => null, 
                "require_shipping" => 0,
                "html_price" => '<span class="product-price"><span class="price">‏١٫١٥ ر.س.‏</span></span>',
                "product" => [
                    "base_image_url" => "https://cdn.twsaa.com/home/23/cd2eeaba-784a-4272-a3f7-3e78262846d0.png"
                ]
            ], 
            [
                "id" => 107663, 
                "product_id" => 56116, 
                "parent_id" => null, 
                "sku" => "N2-4-5-3", 
                "name" => "ثلاجة الجمال سباركلنق لافندر 4 لتر", 
                "description" => " ", 
                "url_key" => "n2-4-5-3", 
                "new" => null, 
                "featured" => 1, 
                "status" => 1, 
                "thumbnail" => null, 
                "price" => "367.35", 
                "cost" => "216.09", 
                "special_price" => null, 
                "special_price_from" => null, 
                "special_price_to" => null, 
                "delivery_time" => null, 
                "visible_individually" => 1, 
                "min_price" => "367.35", 
                "max_price" => "367.35", 
                "is_vat" => 0, 
                "short_description" => " ", 
                "meta_title" => "ثلاجة الجمال سباركلنق لافندر 4 لتر", 
                "meta_keywords" => null, 
                
                "width" => 0, 
                "height" => 0, 
                "depth" => 0, 
                "weight" => 0, 
                "unlimited_quantity" => "0", 
                "barcode" => null, 
                "brand_name" => "12", 
                "promotion_title" => null, 
                "subtitle" => null, 
                "image" => "", 
                "image_name" => "", 
                "image_label" => "", 
                "image_value" => "", 
                "image_url" => null, 
                "text" => "", 
                "text_name" => "", 
                "text_label" => "", 
                "text_value" => "", 
                "color" => "", 
                "color_name" => "", 
                "color_label" => "", 
                "color_value" => "", 
                "size" => null, 
                "size_label" => null, 
                "created_at" => "2024-08-21 16:41:44", 
                "updated_at" => "2024-10-15 17:33:59", 
                "deleted_at" => null, 
                "enable_note" => null, 
                "enable_upload_image" => null, 
                "maximum_quantity_per_order" => null, 
                "notify_quantity" => null, 
                "require_shipping" => 0,
                "html_price" => '<span class="product-price"><span class="price">‏٣٦٧٫٣٥ ر.س.‏</span></span>',
                "product" => [
                    "base_image_url" => "https://cdn.twsaa.com/home/23/cd2eeaba-784a-4272-a3f7-3e78262846d0.png"
                ]
            ]
        ],
        "images" =>  [
            [
                  "id" => 37959, 
                  "type" => "image", 
                  "path" => "product/55682/aa97d069-649f-41d3-bf95-a66addfc903c.jpg", 
                  "product_id" => 55682, 
                  "main" => 1, 
                  "url" => "https://cdn.twsaa.com/product/55682/aa97d069-649f-41d3-bf95-a66addfc903c.jpg" 
               ] 
            ],
        "html_price" => '<span class="product-price"><span class="price">‏١٫١٥&nbsp;ر.س.‏</span></span>', 
        "show_sku" => true, 
        "show_purchase_count" => true, 
        "show_weight" => true, 
        "show_quantity_box" => true, 
        "show_purchase_count" => true, 
        "sufficient_quantity" => true, 
        "enable_product_reviews" => true, 
        "guest_review" => true, 
        "quantity_manually" => 2, 
        "remaning_quantity" => 2, 
        "total_quantity" => 2,
    ]; 

    return $context;
}

function configurable() {
    $context['authUser'] = auth();
    $context['sales_count'] = 5;
    $context['childAttributes'] = [
        "attributes" => [
              [
                 "id" => 583, 
                 "code" => "color", 
                 "label" => "colors", 
                 "swatch_type" => null, 
                 "options" => [
                    [
                       "id" => 6, 
                       "label" => "black", 
                       "swatch_value" => "#000000", 
                       "products" => [
                          55674, 
                          55676, 
                          55679, 
                          55680 
                       ] 
                    ], 
                    [
                             "id" => 4, 
                             "label" => "red", 
                             "swatch_value" => "#c70000", 
                             "products" => [
                                55677, 
                                55678 
                             ] 
                          ] 
                 ] 
              ], 
              [
                                   "id" => 584, 
                                   "code" => "text", 
                                   "label" => "sizes", 
                                   "swatch_type" => null, 
                                   "options" => [
                                      [
                                         "id" => 5, 
                                         "label" => "s", 
                                         "swatch_value" => "s", 
                                         "products" => [
                                            55674, 
                                            55677, 
                                            55679 
                                         ] 
                                      ], 
                                      [
                                               "id" => 6, 
                                               "label" => "m", 
                                               "swatch_value" => "m", 
                                               "products" => [
                                                  55676, 
                                                  55678, 
                                                  55680 
                                               ] 
                                            ] 
                                   ] 
                                ], 
              [
                                                     "id" => 585, 
                                                     "code" => "image", 
                                                     "label" => "images", 
                                                     "swatch_type" => null, 
                                                     "options" => [
                                                        [
                                                           "id" => 2, 
                                                           "label" => "1", 
                                                           "swatch_value" => "1", 
                                                           "products" => [
                                                              55674, 
                                                              55676 
                                                           ], 
                                                           "swatch_url" => "https://cdn.twsaa.com/product/55668/1d3c32b0-8c59-40e5-ad5a-26ae3d58572c.jpg" 
                                                        ], 
                                                        [
                                                                 "id" => 6, 
                                                                 "label" => "2", 
                                                                 "swatch_value" => "2", 
                                                                 "products" => [
                                                                    55677, 
                                                                    55678, 
                                                                    55679, 
                                                                    55680 
                                                                 ], 
                                                                 "swatch_url" => "https://cdn.twsaa.com/product/55668/a16626c7-40a0-42f9-954f-5e1b25159fc1.png" 
                                                              ] 
                                                     ] 
                                                  ] 
           ], 
        "index" => [
                                                                    ], 
        "regular_price" => [
                                                                          "formated_price" => "‏١ ر.س.‏", 
                                                                          "price" => "1.00" 
                                                                       ], 
        "variant_prices" => [
                                                                             [
                                                                                "regular_price" => [
                                                                                   "price" => 2, 
                                                                                   "formated_price" => "‏٢ ر.س.‏" 
                                                                                ], 
                                                                                "final_price" => [
                                                                                      "price" => 2, 
                                                                                      "formated_price" => "‏٢ ر.س.‏" 
                                                                                   ], 
                                                                                "qty" => 1, 
                                                                                "weight" => "0" 
                                                                             ], 
                                                                             [
                                                                                         "regular_price" => [
                                                                                            "price" => 4, 
                                                                                            "formated_price" => "‏٤ ر.س.‏" 
                                                                                         ], 
                                                                                         "final_price" => [
                                                                                               "price" => 4, 
                                                                                               "formated_price" => "‏٤ ر.س.‏" 
                                                                                            ], 
                                                                                         "qty" => 2, 
                                                                                         "weight" => "0" 
                                                                                      ], 
                                                                             [
                                                                                                  "regular_price" => [
                                                                                                     "price" => 5, 
                                                                                                     "formated_price" => "‏٥ ر.س.‏" 
                                                                                                  ], 
                                                                                                  "final_price" => [
                                                                                                        "price" => 5, 
                                                                                                        "formated_price" => "‏٥ ر.س.‏" 
                                                                                                     ], 
                                                                                                  "qty" => 2, 
                                                                                                  "weight" => "0" 
                                                                                               ], 
                                                                             [
                                                                                                           "regular_price" => [
                                                                                                              "price" => 6, 
                                                                                                              "formated_price" => "‏٦ ر.س.‏" 
                                                                                                           ], 
                                                                                                           "final_price" => [
                                                                                                                 "price" => 6, 
                                                                                                                 "formated_price" => "‏٦ ر.س.‏" 
                                                                                                              ], 
                                                                                                           "qty" => 2, 
                                                                                                           "weight" => "0" 
                                                                                                        ], 
                                                                             [
                                                                                                                    "regular_price" => [
                                                                                                                       "price" => 7, 
                                                                                                                       "formated_price" => "‏٧ ر.س.‏" 
                                                                                                                    ], 
                                                                                                                    "final_price" => [
                                                                                                                          "price" => 7, 
                                                                                                                          "formated_price" => "‏٧ ر.س.‏" 
                                                                                                                       ], 
                                                                                                                    "qty" => 2, 
                                                                                                                    "weight" => "0" 
                                                                                                                 ], 
                                                                             [
                                                                                                                             "regular_price" => [
                                                                                                                                "price" => 8, 
                                                                                                                                "formated_price" => "‏٨ ر.س.‏" 
                                                                                                                             ], 
                                                                                                                             "final_price" => [
                                                                                                                                   "price" => 8, 
                                                                                                                                   "formated_price" => "‏٨ ر.س.‏" 
                                                                                                                                ], 
                                                                                                                             "qty" => 1, 
                                                                                                                             "weight" => "0" 
                                                                                                                          ] 
                                                                          ], 
        "variant_images" => [
                                                                                                                                      [
                                                                                                                                         [
                                                                                                                                            "small_image_url" => "https://lamhha.tawasa.test/admin-themes/mbotiq/assets/images/placeholder.png", 
                                                                                                                                            "medium_image_url" => "https://lamhha.tawasa.test/admin-themes/mbotiq/assets/images/placeholder.png", 
                                                                                                                                            "large_image_url" => "https://lamhha.tawasa.test/admin-themes/mbotiq/assets/images/placeholder.png", 
                                                                                                                                            "original_image_url" => "https://lamhha.tawasa.test/admin-themes/mbotiq/assets/images/placeholder.png" 
                                                                                                                                         ] 
                                                                                                                                      ], 
                                                                                                                                      [
                                                                                                                                               [
                                                                                                                                                  "small_image_url" => "https://lamhha.tawasa.test/admin-themes/mbotiq/assets/images/placeholder.png", 
                                                                                                                                                  "medium_image_url" => "https://lamhha.tawasa.test/admin-themes/mbotiq/assets/images/placeholder.png", 
                                                                                                                                                  "large_image_url" => "https://lamhha.tawasa.test/admin-themes/mbotiq/assets/images/placeholder.png", 
                                                                                                                                                  "original_image_url" => "https://lamhha.tawasa.test/admin-themes/mbotiq/assets/images/placeholder.png" 
                                                                                                                                               ] 
                                                                                                                                            ], 
                                                                                                                                      [
                                                                                                                                                     [
                                                                                                                                                        "small_image_url" => "https://lamhha.tawasa.test/admin-themes/mbotiq/assets/images/placeholder.png", 
                                                                                                                                                        "medium_image_url" => "https://lamhha.tawasa.test/admin-themes/mbotiq/assets/images/placeholder.png", 
                                                                                                                                                        "large_image_url" => "https://lamhha.tawasa.test/admin-themes/mbotiq/assets/images/placeholder.png", 
                                                                                                                                                        "original_image_url" => "https://lamhha.tawasa.test/admin-themes/mbotiq/assets/images/placeholder.png" 
                                                                                                                                                     ] 
                                                                                                                                                  ], 
                                                                                                                                      [
                                                                                                                                                           [
                                                                                                                                                              "small_image_url" => "https://lamhha.tawasa.test/admin-themes/mbotiq/assets/images/placeholder.png", 
                                                                                                                                                              "medium_image_url" => "https://lamhha.tawasa.test/admin-themes/mbotiq/assets/images/placeholder.png", 
                                                                                                                                                              "large_image_url" => "https://lamhha.tawasa.test/admin-themes/mbotiq/assets/images/placeholder.png", 
                                                                                                                                                              "original_image_url" => "https://lamhha.tawasa.test/admin-themes/mbotiq/assets/images/placeholder.png" 
                                                                                                                                                           ] 
                                                                                                                                                        ], 
                                                                                                                                      [
                                                                                                                                                                 [
                                                                                                                                                                    "small_image_url" => "https://lamhha.tawasa.test/admin-themes/mbotiq/assets/images/placeholder.png", 
                                                                                                                                                                    "medium_image_url" => "https://lamhha.tawasa.test/admin-themes/mbotiq/assets/images/placeholder.png", 
                                                                                                                                                                    "large_image_url" => "https://lamhha.tawasa.test/admin-themes/mbotiq/assets/images/placeholder.png", 
                                                                                                                                                                    "original_image_url" => "https://lamhha.tawasa.test/admin-themes/mbotiq/assets/images/placeholder.png" 
                                                                                                                                                                 ] 
                                                                                                                                                              ], 
                                                                                                                                      [
                                                                                                                                                                       [
                                                                                                                                                                          "small_image_url" => "https://lamhha.tawasa.test/admin-themes/mbotiq/assets/images/placeholder.png", 
                                                                                                                                                                          "medium_image_url" => "https://lamhha.tawasa.test/admin-themes/mbotiq/assets/images/placeholder.png", 
                                                                                                                                                                          "large_image_url" => "https://lamhha.tawasa.test/admin-themes/mbotiq/assets/images/placeholder.png", 
                                                                                                                                                                          "original_image_url" => "https://lamhha.tawasa.test/admin-themes/mbotiq/assets/images/placeholder.png" 
                                                                                                                                                                       ] 
                                                                                                                                                                    ] 
                                                                                                                                   ], 
        "chooseText" => "اختر " 
    ]; 
    $context['product'] = [
        "id" => 106891, 
        "type" => "configurable", 
        "product_id" => 55668, 
        "parent_id" => null, 
        "sku" => "2G663YZ", 
        "name" => "configurable", 
        "description" => "<p>محافظ نسائية على الموضة ، محفظة طويلة ثلاثية الطي ذات جودة عالية من جلد البولي يوريثان ، حامل بطاقات كلاتش للنساء ، حامل بطاقات</p><p><br></p>", 
        "url_key" => "2g663yz", 
        "new" => null, 
        "featured" => null, 
        "status" => 1, 
        "thumbnail" => null, 
        "price" => "0.00", 
        "cost" => null, 
        "special_price" => null, 
        "special_price_from" => null, 
        "special_price_to" => null, 
        "delivery_time" => null, 
        "visible_individually" => 1, 
        "min_price" => "1.00", 
        "max_price" => "8.00", 
        "is_vat" => 1, 
        "short_description" => null, 
        "meta_title" => null, 
        "meta_keywords" => null, 
        "meta_description" => null, 
        "width" => 0, 
        "height" => 0, 
        "depth" => 0, 
        "weight" => 0, 
        "unlimited_quantity" => "0", 
        "barcode" => null, 
        "brand_name" => "12", 
        "promotion_title" => null, 
        "subtitle" => null, 
        "image" => "", 
        "image_name" => "", 
        "image_label" => "", 
        "image_value" => "", 
        "image_url" => null, 
        "text" => "", 
        "text_name" => "", 
        "text_label" => "", 
        "text_value" => "", 
        "color" => "", 
        "color_name" => "", 
        "color_label" => "", 
        "color_value" => "", 
        "size" => null, 
        "size_label" => null, 
        "created_at" => "2024-05-08 15:58:59", 
        "updated_at" => "2024-10-15 17:34:30", 
        "deleted_at" => null, 
        "enable_note" => null, 
        "enable_upload_image" => null, 
        "maximum_quantity_per_order" => null, 
        "notify_quantity" => null, 
        "require_shipping" => 0, 
        "product" => [
            "id" => 55668, 
            "parent_id" => null, 
            "attribute_family_id" => 21, 
            "sku" => "2G663YZ", 
            "type" => "configurable", 
            "from" => null, 
            "pin" => 0, 
            "created_at" => "2024-05-08T12:58:59.000000Z", 
            "updated_at" => "2024-05-08T12:58:59.000000Z", 
            "short_description" => null, 
            "description" => "<p>محافظ نسائية على الموضة ، محفظة طويلة ثلاثية الطي ذات جودة عالية من جلد البولي يوريثان ، حامل بطاقات كلاتش للنساء ، حامل بطاقات</p><p><br></p>", 
            "name" => "asdf asdf2", 
            "url_key" => "2g663yz", 
            "tax_category_id" => null, 
            "new" => 0, 
            "featured" => 0, 
            "visible_individually" => 1, 
            "status" => 1, 
            "color" => null, 
            "text" => null, 
            "image" => null, 
            "size" => null, 
            "brand" => null, 
            "guest_checkout" => 0, 
            "brand_name" => "12", 
            "barcode" => null, 
            "unlimited_quantity" => 0, 
            "require_shipping" => 0, 
            "is_vat" => 1, 
            "notify_quantity" => null, 
            "delivery_time" => null, 
            "subtitle" => null, 
            "promotion_title" => null, 
            "meta_title" => null, 
            "meta_keywords" => null, 
            "meta_description" => null, 
            "price" => "0.0000", 
            "cost" => null, 
            "special_price" => null, 
            "special_price_from" => null, 
            "special_price_to" => null, 
            "width" => null, 
            "height" => null, 
            "depth" => null, 
            "weight" => null, 
            "super_attributes" => [], 
            "attribute_family" => [
                "id" => 21, 
                "code" => "default", 
                "name" => "Default", 
                "status" => 0, 
                "is_user_defined" => 1 
            ], 
            "variants" => [
                [
                    "id" => 55669, 
                    "parent_id" => 55668, 
                    "attribute_family_id" => 21, 
                    "sku" => "8VQT21Q", 
                    "type" => "simple", 
                    "from" => null, 
                    "pin" => 0, 
                    "created_at" => "2024-05-08T13:11:44.000000Z", 
                    "updated_at" => "2024-05-08T13:11:44.000000Z", 
                    "short_description" => null, 
                    "description" => null, 
                    "name" => "", 
                    "url_key" => null, 
                    "tax_category_id" => null, 
                    "new" => null, 
                    "featured" => null, 
                    "visible_individually" => null, 
                    "status" => 1, 
                    "color" => 0, 
                    "text" => "text", 
                    "image" => "image", 
                    "size" => null, 
                    "brand" => null, 
                    "guest_checkout" => null, 
                    "brand_name" => null, 
                    "barcode" => "", 
                    "unlimited_quantity" => 0, 
                    "require_shipping" => null, 
                    "is_vat" => null, 
                    "notify_quantity" => "0", 
                    "delivery_time" => null, 
                    "subtitle" => null, 
                    "promotion_title" => null, 
                    "meta_title" => null, 
                    "meta_keywords" => null, 
                    "meta_description" => null, 
                    "price" => "1.0000", 
                    "cost" => "0.0000", 
                    "special_price" => "0.0000", 
                    "special_price_from" => null, 
                    "special_price_to" => null, 
                    "width" => null, 
                    "height" => null, 
                    "depth" => null, 
                    "weight" => "0", 
                    "attribute_family" => [
                        "id" => 21, 
                        "code" => "default", 
                        "name" => "Default", 
                        "status" => 0, 
                        "is_user_defined" => 1 
                    ] 
                ], 
                [
                    "id" => 55670, 
                    "parent_id" => 55668, 
                    "attribute_family_id" => 21, 
                    "sku" => "V3J9GDS", 
                    "type" => "simple", 
                    "from" => null, 
                    "pin" => 0, 
                    "created_at" => "2024-05-08T13:11:44.000000Z", 
                    "updated_at" => "2024-05-08T13:11:44.000000Z", 
                    "short_description" => null, 
                    "description" => null, 
                    "name" => "", 
                    "url_key" => null, 
                    "tax_category_id" => null, 
                    "new" => null, 
                    "featured" => null, 
                    "visible_individually" => null, 
                    "status" => 1, 
                    "color" => 0, 
                    "text" => "text", 
                    "image" => "image", 
                    "size" => null, 
                    "brand" => null, 
                    "guest_checkout" => null, 
                    "brand_name" => null, 
                    "barcode" => "", 
                    "unlimited_quantity" => 0, 
                    "require_shipping" => null, 
                    "is_vat" => null, 
                    "notify_quantity" => "0", 
                    "delivery_time" => null, 
                    "subtitle" => null, 
                    "promotion_title" => null, 
                    "meta_title" => null, 
                    "meta_keywords" => null, 
                    "meta_description" => null, 
                    "price" => "2.0000", 
                    "cost" => "0.0000", 
                    "special_price" => "0.0000", 
                    "special_price_from" => null, 
                    "special_price_to" => null, 
                    "width" => null, 
                    "height" => null, 
                    "depth" => null, 
                    "weight" => "0", 
                    "attribute_family" => [
                        "id" => 21, 
                        "code" => "default", 
                        "name" => "Default", 
                        "status" => 0, 
                        "is_user_defined" => 1 
                    ] 
                ], 
                [
                    "id" => 55671, 
                    "parent_id" => 55668, 
                    "attribute_family_id" => 21, 
                    "sku" => "5F8L8VI", 
                    "type" => "simple", 
                    "from" => null, 
                    "pin" => 0, 
                    "created_at" => "2024-05-08T13:11:44.000000Z", 
                    "updated_at" => "2024-05-08T13:11:44.000000Z", 
                    "short_description" => null, 
                    "description" => null, 
                    "name" => "", 
                    "url_key" => null, 
                    "tax_category_id" => null, 
                    "new" => null, 
                    "featured" => null, 
                    "visible_individually" => null, 
                    "status" => 1, 
                    "color" => 0, 
                    "text" => "text", 
                    "image" => "image", 
                    "size" => null, 
                    "brand" => null, 
                    "guest_checkout" => null, 
                    "brand_name" => null, 
                    "barcode" => "", 
                    "unlimited_quantity" => 0, 
                    "require_shipping" => null, 
                    "is_vat" => null, 
                    "notify_quantity" => "0", 
                    "delivery_time" => null, 
                    "subtitle" => null, 
                    "promotion_title" => null, 
                    "meta_title" => null, 
                    "meta_keywords" => null, 
                    "meta_description" => null, 
                    "price" => "3.0000", 
                    "cost" => "0.0000", 
                    "special_price" => "0.0000", 
                    "special_price_from" => null, 
                    "special_price_to" => null, 
                    "width" => null, 
                    "height" => null, 
                    "depth" => null, 
                    "weight" => "0", 
                    "attribute_family" => [
                        "id" => 21, 
                        "code" => "default", 
                        "name" => "Default", 
                        "status" => 0, 
                        "is_user_defined" => 1 
                    ] 
                ], 
                [
                    "id" => 55672, 
                    "parent_id" => 55668, 
                    "attribute_family_id" => 21, 
                    "sku" => "Y7NVJZB", 
                    "type" => "simple", 
                    "from" => null, 
                    "pin" => 0, 
                    "created_at" => "2024-05-08T13:11:44.000000Z", 
                    "updated_at" => "2024-05-08T13:11:44.000000Z", 
                    "short_description" => null, 
                    "description" => null, 
                    "name" => "", 
                    "url_key" => null, 
                    "tax_category_id" => null, 
                    "new" => null, 
                    "featured" => null, 
                    "visible_individually" => null, 
                    "status" => 1, 
                    "color" => 0, 
                    "text" => "text", 
                    "image" => "image", 
                    "size" => null, 
                    "brand" => null, 
                    "guest_checkout" => null, 
                    "brand_name" => null, 
                    "barcode" => "", 
                    "unlimited_quantity" => 0, 
                    "require_shipping" => null, 
                    "is_vat" => null, 
                    "notify_quantity" => "0", 
                    "delivery_time" => null, 
                    "subtitle" => null, 
                    "promotion_title" => null, 
                    "meta_title" => null, 
                    "meta_keywords" => null, 
                    "meta_description" => null, 
                    "price" => "4.0000", 
                    "cost" => "0.0000", 
                    "special_price" => "0.0000", 
                    "special_price_from" => null, 
                    "special_price_to" => null, 
                    "width" => null, 
                    "height" => null, 
                    "depth" => null, 
                    "weight" => "0", 
                    "attribute_family" => [
                        "id" => 21, 
                        "code" => "default", 
                        "name" => "Default", 
                        "status" => 0, 
                        "is_user_defined" => 1 
                    ] 
                ], 
                [
                    "id" => 55673, 
                    "parent_id" => 55668, 
                    "attribute_family_id" => 21, 
                    "sku" => "K37T5BY", 
                    "type" => "simple", 
                    "from" => null, 
                    "pin" => 0, 
                    "created_at" => "2024-05-08T13:11:44.000000Z", 
                    "updated_at" => "2024-05-08T13:11:44.000000Z", 
                    "short_description" => null, 
                    "description" => null, 
                    "name" => "", 
                    "url_key" => null, 
                    "tax_category_id" => null, 
                    "new" => null, 
                    "featured" => null, 
                    "visible_individually" => null, 
                    "status" => 1, 
                    "color" => 0, 
                    "text" => "text", 
                    "image" => "image", 
                    "size" => null, 
                    "brand" => null, 
                    "guest_checkout" => null, 
                    "brand_name" => null, 
                    "barcode" => "", 
                    "unlimited_quantity" => 0, 
                    "require_shipping" => null, 
                    "is_vat" => null, 
                    "notify_quantity" => "0", 
                    "delivery_time" => null, 
                    "subtitle" => null, 
                    "promotion_title" => null, 
                    "meta_title" => null, 
                    "meta_keywords" => null, 
                    "meta_description" => null, 
                    "price" => "1.0000", 
                    "cost" => "0.0000", 
                    "special_price" => "0.0000", 
                    "special_price_from" => null, 
                    "special_price_to" => null, 
                    "width" => null, 
                    "height" => null, 
                    "depth" => null, 
                    "weight" => "0", 
                    "attribute_family" => [
                        "id" => 21, 
                        "code" => "default", 
                        "name" => "Default", 
                        "status" => 0, 
                        "is_user_defined" => 1 
                    ] 
                ], 
                [
                    "id" => 55674, 
                    "parent_id" => 55668, 
                    "attribute_family_id" => 21, 
                    "sku" => "Y7FL1PL", 
                    "type" => "simple", 
                    "from" => null, 
                    "pin" => 0, 
                    "created_at" => "2024-05-08T13:11:44.000000Z", 
                    "updated_at" => "2024-05-08T13:11:44.000000Z", 
                    "short_description" => null, 
                    "description" => null, 
                    "name" => "", 
                    "url_key" => null, 
                    "tax_category_id" => null, 
                    "new" => null, 
                    "featured" => null, 
                    "visible_individually" => null, 
                    "status" => 1, 
                    "color" => 0, 
                    "text" => "text", 
                    "image" => "image", 
                    "size" => null, 
                    "brand" => null, 
                    "guest_checkout" => null, 
                    "brand_name" => null, 
                    "barcode" => "", 
                    "unlimited_quantity" => 0, 
                    "require_shipping" => null, 
                    "is_vat" => null, 
                    "notify_quantity" => "0", 
                    "delivery_time" => null, 
                    "subtitle" => null, 
                    "promotion_title" => null, 
                    "meta_title" => null, 
                    "meta_keywords" => null, 
                    "meta_description" => null, 
                    "price" => "2.0000", 
                    "cost" => "0.0000", 
                    "special_price" => "0.0000", 
                    "special_price_from" => null, 
                    "special_price_to" => null, 
                    "width" => null, 
                    "height" => null, 
                    "depth" => null, 
                    "weight" => "0", 
                    "attribute_family" => [
                        "id" => 21, 
                        "code" => "default", 
                        "name" => "Default", 
                        "status" => 0, 
                        "is_user_defined" => 1 
                    ] 
                ], 
                [
                    "id" => 55675, 
                    "parent_id" => 55668, 
                    "attribute_family_id" => 21, 
                    "sku" => "PJUVBQX", 
                    "type" => "simple", 
                    "from" => null, 
                    "pin" => 0, 
                    "created_at" => "2024-05-08T13:11:44.000000Z", 
                    "updated_at" => "2024-05-08T13:11:44.000000Z", 
                    "short_description" => null, 
                    "description" => null, 
                    "name" => "", 
                    "url_key" => null, 
                    "tax_category_id" => null, 
                    "new" => null, 
                    "featured" => null, 
                    "visible_individually" => null, 
                    "status" => 1, 
                    "color" => 0, 
                    "text" => "text", 
                    "image" => "image", 
                    "size" => null, 
                    "brand" => null, 
                    "guest_checkout" => null, 
                    "brand_name" => null, 
                    "barcode" => "", 
                    "unlimited_quantity" => 0, 
                    "require_shipping" => null, 
                    "is_vat" => null, 
                    "notify_quantity" => "0", 
                    "delivery_time" => null, 
                    "subtitle" => null, 
                    "promotion_title" => null, 
                    "meta_title" => null, 
                    "meta_keywords" => null, 
                    "meta_description" => null, 
                    "price" => "3.0000", 
                    "cost" => "0.0000", 
                    "special_price" => "0.0000", 
                    "special_price_from" => null, 
                    "special_price_to" => null, 
                    "width" => null, 
                    "height" => null, 
                    "depth" => null, 
                    "weight" => "0", 
                    "attribute_family" => [
                        "id" => 21, 
                        "code" => "default", 
                        "name" => "Default", 
                        "status" => 0, 
                        "is_user_defined" => 1 
                    ] 
                ], 
                [
                    "id" => 55676, 
                    "parent_id" => 55668, 
                    "attribute_family_id" => 21, 
                    "sku" => "M73WSIH", 
                    "type" => "simple", 
                    "from" => null, 
                    "pin" => 0, 
                    "created_at" => "2024-05-08T13:11:45.000000Z", 
                    "updated_at" => "2024-05-08T13:11:45.000000Z", 
                    "short_description" => null, 
                    "description" => null, 
                    "name" => "", 
                    "url_key" => null, 
                    "tax_category_id" => null, 
                    "new" => null, 
                    "featured" => null, 
                    "visible_individually" => null, 
                    "status" => 1, 
                    "color" => 0, 
                    "text" => "text", 
                    "image" => "image", 
                    "size" => null, 
                    "brand" => null, 
                    "guest_checkout" => null, 
                    "brand_name" => null, 
                    "barcode" => "", 
                    "unlimited_quantity" => 0, 
                    "require_shipping" => null, 
                    "is_vat" => null, 
                    "notify_quantity" => "0", 
                    "delivery_time" => null, 
                    "subtitle" => null, 
                    "promotion_title" => null, 
                    "meta_title" => null, 
                    "meta_keywords" => null, 
                    "meta_description" => null, 
                    "price" => "4.0000", 
                    "cost" => "0.0000", 
                    "special_price" => "0.0000", 
                    "special_price_from" => null, 
                    "special_price_to" => null, 
                    "width" => null, 
                    "height" => null, 
                    "depth" => null, 
                    "weight" => "0", 
                    "attribute_family" => [
                        "id" => 21, 
                        "code" => "default", 
                        "name" => "Default", 
                        "status" => 0, 
                        "is_user_defined" => 1 
                    ] 
                ], 
                [
                    "id" => 55677, 
                    "parent_id" => 55668, 
                    "attribute_family_id" => 21, 
                    "sku" => "V3WNTRF", 
                    "type" => "simple", 
                    "from" => null, 
                    "pin" => 0, 
                    "created_at" => "2024-05-12T08:24:35.000000Z", 
                    "updated_at" => "2024-05-12T08:24:35.000000Z", 
                    "short_description" => null, 
                    "description" => null, 
                    "name" => "", 
                    "url_key" => null, 
                    "tax_category_id" => null, 
                    "new" => null, 
                    "featured" => null, 
                    "visible_individually" => null, 
                    "status" => 1, 
                    "color" => 0, 
                    "text" => "text", 
                    "image" => "image", 
                    "size" => null, 
                    "brand" => null, 
                    "guest_checkout" => null, 
                    "brand_name" => null, 
                    "barcode" => "", 
                    "unlimited_quantity" => 0, 
                    "require_shipping" => null, 
                    "is_vat" => null, 
                    "notify_quantity" => "0", 
                    "delivery_time" => null, 
                    "subtitle" => null, 
                    "promotion_title" => null, 
                    "meta_title" => null, 
                    "meta_keywords" => null, 
                    "meta_description" => null, 
                    "price" => "5.0000", 
                    "cost" => "0.0000", 
                    "special_price" => "0.0000", 
                    "special_price_from" => null, 
                    "special_price_to" => null, 
                    "width" => null, 
                    "height" => null, 
                    "depth" => null, 
                    "weight" => "0", 
                    "attribute_family" => [
                        "id" => 21, 
                        "code" => "default", 
                        "name" => "Default", 
                        "status" => 0, 
                        "is_user_defined" => 1 
                    ] 
                ], 
                [
                    "id" => 55678, 
                    "parent_id" => 55668, 
                    "attribute_family_id" => 21, 
                    "sku" => "JE8G231", 
                    "type" => "simple", 
                    "from" => null, 
                    "pin" => 0, 
                    "created_at" => "2024-05-12T08:24:35.000000Z", 
                    "updated_at" => "2024-05-12T08:24:35.000000Z", 
                    "short_description" => null, 
                    "description" => null, 
                    "name" => "", 
                    "url_key" => null, 
                    "tax_category_id" => null, 
                    "new" => null, 
                    "featured" => null, 
                    "visible_individually" => null, 
                    "status" => 1, 
                    "color" => 0, 
                    "text" => "text", 
                    "image" => "image", 
                    "size" => null, 
                    "brand" => null, 
                    "guest_checkout" => null, 
                    "brand_name" => null, 
                    "barcode" => "", 
                    "unlimited_quantity" => 0, 
                    "require_shipping" => null, 
                    "is_vat" => null, 
                    "notify_quantity" => "0", 
                    "delivery_time" => null, 
                    "subtitle" => null, 
                    "promotion_title" => null, 
                    "meta_title" => null, 
                    "meta_keywords" => null, 
                    "meta_description" => null, 
                    "price" => "6.0000", 
                    "cost" => "0.0000", 
                    "special_price" => "0.0000", 
                    "special_price_from" => null, 
                    "special_price_to" => null, 
                    "width" => null, 
                    "height" => null, 
                    "depth" => null, 
                    "weight" => "0", 
                    "attribute_family" => [
                        "id" => 21, 
                        "code" => "default", 
                        "name" => "Default", 
                        "status" => 0, 
                        "is_user_defined" => 1 
                    ] 
                ], 
                [
                    "id" => 55679, 
                    "parent_id" => 55668, 
                    "attribute_family_id" => 21, 
                    "sku" => "H2KOONB", 
                    "type" => "simple", 
                    "from" => null, 
                    "pin" => 0, 
                    "created_at" => "2024-05-12T08:24:35.000000Z", 
                    "updated_at" => "2024-05-12T08:24:35.000000Z", 
                    "short_description" => null, 
                    "description" => null, 
                    "name" => "", 
                    "url_key" => null, 
                    "tax_category_id" => null, 
                    "new" => null, 
                    "featured" => null, 
                    "visible_individually" => null, 
                    "status" => 1, 
                    "color" => 0, 
                    "text" => "text", 
                    "image" => "image", 
                    "size" => null, 
                    "brand" => null, 
                    "guest_checkout" => null, 
                    "brand_name" => null, 
                    "barcode" => "", 
                    "unlimited_quantity" => 0, 
                    "require_shipping" => null, 
                    "is_vat" => null, 
                    "notify_quantity" => "0", 
                    "delivery_time" => null, 
                    "subtitle" => null, 
                    "promotion_title" => null, 
                    "meta_title" => null, 
                    "meta_keywords" => null, 
                    "meta_description" => null, 
                    "price" => "7.0000", 
                    "cost" => "0.0000", 
                    "special_price" => "0.0000", 
                    "special_price_from" => null, 
                    "special_price_to" => null, 
                    "width" => null, 
                    "height" => null, 
                    "depth" => null, 
                    "weight" => "0", 
                    "attribute_family" => [
                        "id" => 21, 
                        "code" => "default", 
                        "name" => "Default", 
                        "status" => 0, 
                        "is_user_defined" => 1 
                    ] 
                ], 
                [
                    "id" => 55680, 
                    "parent_id" => 55668, 
                    "attribute_family_id" => 21, 
                    "sku" => "I7CG6K1", 
                    "type" => "simple", 
                    "from" => null, 
                    "pin" => 0, 
                    "created_at" => "2024-05-12T08:24:35.000000Z", 
                    "updated_at" => "2024-05-12T08:24:35.000000Z", 
                    "short_description" => null, 
                    "description" => null, 
                    "name" => "", 
                    "url_key" => null, 
                    "tax_category_id" => null, 
                    "new" => null, 
                    "featured" => null, 
                    "visible_individually" => null, 
                    "status" => 1, 
                    "color" => 0, 
                    "text" => "text", 
                    "image" => "image", 
                    "size" => null, 
                    "brand" => null, 
                    "guest_checkout" => null, 
                    "brand_name" => null, 
                    "barcode" => "", 
                    "unlimited_quantity" => 0, 
                    "require_shipping" => null, 
                    "is_vat" => null, 
                    "notify_quantity" => "0", 
                    "delivery_time" => null, 
                    "subtitle" => null, 
                    "promotion_title" => null, 
                    "meta_title" => null, 
                    "meta_keywords" => null, 
                    "meta_description" => null, 
                    "price" => "8.0000", 
                    "cost" => "0.0000", 
                    "special_price" => "0.0000", 
                    "special_price_from" => null, 
                    "special_price_to" => null, 
                    "width" => null, 
                    "height" => null, 
                    "depth" => null, 
                    "weight" => "0", 
                    "attribute_family" => [
                        "id" => 21, 
                        "code" => "default", 
                        "name" => "Default", 
                        "status" => 0, 
                        "is_user_defined" => 1 
                    ] 
                ] 
            ] 
        ], 
        "variants" => [
            [
                "id" => 106893, 
                "product_id" => 55669, 
                "parent_id" => 106891, 
                "sku" => "8VQT21Q", 
                "name" => "", 
                "description" => null, 
                "url_key" => null, 
                "new" => null, 
                "featured" => null, 
                "status" => 1, 
                "thumbnail" => null, 
                "price" => "1.00", 
                "cost" => "0.00", 
                "special_price" => "0.00", 
                "special_price_from" => null, 
                "special_price_to" => null, 
                "delivery_time" => null, 
                "visible_individually" => 0, 
                "min_price" => "1.00", 
                "max_price" => "1.00", 
                "is_vat" => 0, 
                "short_description" => null, 
                "meta_title" => null, 
                "meta_keywords" => null, 
                "meta_description" => null, 
                "width" => 0, 
                "height" => 0, 
                "depth" => 0, 
                "weight" => 0, 
                "unlimited_quantity" => "0", 
                "barcode" => "", 
                "brand_name" => null, 
                "promotion_title" => null, 
                "subtitle" => null, 
                "image" => "image", 
                "image_name" => "images", 
                "image_label" => "1", 
                "image_value" => "1", 
                "image_url" => "https://cdn.twsaa.com/product/55668/1d3c32b0-8c59-40e5-ad5a-26ae3d58572c.jpg", 
                "text" => "text", 
                "text_name" => "sizes", 
                "text_label" => "s", 
                "text_value" => "s", 
                "color" => "color", 
                "color_name" => "colors", 
                "color_label" => "red", 
                "color_value" => "#c70000", 
                "size" => null, 
                "size_label" => null, 
                "created_at" => "2024-05-08 16:11:44", 
                "updated_at" => "2024-07-25 14:10:43", 
                "deleted_at" => null, 
                "enable_note" => null, 
                "enable_upload_image" => null, 
                "maximum_quantity_per_order" => null, 
                "notify_quantity" => 0, 
                "require_shipping" => null, 
                "product" => [
                "id" => 55669, 
                "parent_id" => 55668, 
                "attribute_family_id" => 21, 
                "sku" => "8VQT21Q", 
                "type" => "simple", 
                "from" => null, 
                "pin" => 0, 
                "created_at" => "2024-05-08T13:11:44.000000Z", 
                "updated_at" => "2024-05-08T13:11:44.000000Z", 
                "status" => 1, 
                "unlimited_quantity" => 0, 
                "short_description" => null, 
                "description" => null, 
                "name" => "", 
                "url_key" => null, 
                "tax_category_id" => null, 
                "new" => null, 
                "featured" => null, 
                "visible_individually" => null, 
                "color" => 0, 
                "text" => "text", 
                "image" => "image", 
                "size" => null, 
                "brand" => null, 
                "guest_checkout" => null, 
                "brand_name" => null, 
                "barcode" => "", 
                "require_shipping" => null, 
                "is_vat" => null, 
                "notify_quantity" => "0", 
                "delivery_time" => null, 
                "subtitle" => null, 
                "promotion_title" => null, 
                "meta_title" => null, 
                "meta_keywords" => null, 
                "meta_description" => null, 
                "price" => "1.0000", 
                "cost" => "0.0000", 
                "special_price" => "0.0000", 
                "special_price_from" => null, 
                "special_price_to" => null, 
                "width" => null, 
                "height" => null, 
                "depth" => null, 
                "weight" => "0", 
                "inventories" => [
                    [
                        "id" => 57654, 
                        "qty" => 0, 
                        "product_id" => 55669, 
                        "inventory_source_id" => 24, 
                        "vendor_id" => 0, 
                    ] 
                ], 
                "attribute_family" => [
                            "id" => 21, 
                            "code" => "default", 
                            "name" => "Default", 
                            "status" => 0, 
                            "is_user_defined" => 1 
                        ] 
                ] 
            ], 
            [
                "id" => 106895, 
                "product_id" => 55670, 
                "parent_id" => 106891, 
                "sku" => "V3J9GDS", 
                "name" => "", 
                "description" => null, 
                "url_key" => null, 
                "new" => null, 
                "featured" => null, 
                "status" => 1, 
                "thumbnail" => null, 
                "price" => "2.00", 
                "cost" => "0.00", 
                "special_price" => "0.00", 
                "special_price_from" => null, 
                "special_price_to" => null, 
                "delivery_time" => null, 
                "visible_individually" => 0, 
                "min_price" => "2.00", 
                "max_price" => "2.00", 
                "is_vat" => 0, 
                "short_description" => null, 
                "meta_title" => null, 
                "meta_keywords" => null, 
                "meta_description" => null, 
                "width" => 0, 
                "height" => 0, 
                "depth" => 0, 
                "weight" => 0, 
                "unlimited_quantity" => "0", 
                "barcode" => "", 
                "brand_name" => null, 
                "promotion_title" => null, 
                "subtitle" => null, 
                "image" => "image", 
                "image_name" => "images", 
                "image_label" => "1", 
                "image_value" => "1", 
                "image_url" => "https://cdn.twsaa.com/product/55668/1d3c32b0-8c59-40e5-ad5a-26ae3d58572c.jpg", 
                "text" => "text", 
                "text_name" => "sizes", 
                "text_label" => "m", 
                "text_value" => "m", 
                "color" => "color", 
                "color_name" => "colors", 
                "color_label" => "red", 
                "color_value" => "#c70000", 
                "size" => null, 
                "size_label" => null, 
                "created_at" => "2024-05-08 16:11:44", 
                "updated_at" => "2024-07-25 14:10:43", 
                "deleted_at" => null, 
                "enable_note" => null, 
                "enable_upload_image" => null, 
                "maximum_quantity_per_order" => null, 
                "notify_quantity" => 0, 
                "require_shipping" => null, 
                "product" => [
                "id" => 55670, 
                "parent_id" => 55668, 
                "attribute_family_id" => 21, 
                "sku" => "V3J9GDS", 
                "type" => "simple", 
                "from" => null, 
                "pin" => 0, 
                "created_at" => "2024-05-08T13:11:44.000000Z", 
                "updated_at" => "2024-05-08T13:11:44.000000Z", 
                "status" => 1, 
                "unlimited_quantity" => 0, 
                "short_description" => null, 
                "description" => null, 
                "name" => "", 
                "url_key" => null, 
                "tax_category_id" => null, 
                "new" => null, 
                "featured" => null, 
                "visible_individually" => null, 
                "color" => 0, 
                "text" => "text", 
                "image" => "image", 
                "size" => null, 
                "brand" => null, 
                "guest_checkout" => null, 
                "brand_name" => null, 
                "barcode" => "", 
                "require_shipping" => null, 
                "is_vat" => null, 
                "notify_quantity" => "0", 
                "delivery_time" => null, 
                "subtitle" => null, 
                "promotion_title" => null, 
                "meta_title" => null, 
                "meta_keywords" => null, 
                "meta_description" => null, 
                "price" => "2.0000", 
                "cost" => "0.0000", 
                "special_price" => "0.0000", 
                "special_price_from" => null, 
                "special_price_to" => null, 
                "width" => null, 
                "height" => null, 
                "depth" => null, 
                "weight" => "0", 
                "inventories" => [
                    [
                    "id" => 57655, 
                    "qty" => 0, 
                    "product_id" => 55670, 
                    "inventory_source_id" => 24, 
                    "vendor_id" => 0, 
                    ] 
                ], 
                "attribute_family" => [
                    "id" => 21, 
                    "code" => "default", 
                    "name" => "Default", 
                    "status" => 0, 
                    "is_user_defined" => 1 
                ] 
            ] 
            ], 
                [
                "id" => 106897, 
                "product_id" => 55671, 
                "parent_id" => 106891, 
                "sku" => "5F8L8VI", 
                "name" => "", 
                "description" => null, 
                "url_key" => null, 
                "new" => null, 
                "featured" => null, 
                "status" => 1, 
                "thumbnail" => null, 
                "price" => "3.00", 
                "cost" => "0.00", 
                "special_price" => "0.00", 
                "special_price_from" => null, 
                "special_price_to" => null, 
                "delivery_time" => null, 
                "visible_individually" => 0, 
                "min_price" => "3.00", 
                "max_price" => "3.00", 
                "is_vat" => 0, 
                "short_description" => null, 
                "meta_title" => null, 
                "meta_keywords" => null, 
                "meta_description" => null, 
                "width" => 0, 
                "height" => 0, 
                "depth" => 0, 
                "weight" => 0, 
                "unlimited_quantity" => "0", 
                "barcode" => "", 
                "brand_name" => null, 
                "promotion_title" => null, 
                "subtitle" => null, 
                "image" => "image", 
                "image_name" => "images", 
                "image_label" => "1", 
                "image_value" => "1", 
                "image_url" => "https://cdn.twsaa.com/product/55668/1d3c32b0-8c59-40e5-ad5a-26ae3d58572c.jpg", 
                "text" => "text", 
                "text_name" => "sizes", 
                "text_label" => "s", 
                "text_value" => "s", 
                "color" => "color", 
                "color_name" => "colors", 
                "color_label" => "black", 
                "color_value" => "#000000", 
                "size" => null, 
                "size_label" => null, 
                "created_at" => "2024-05-08 16:11:44", 
                "updated_at" => "2024-07-25 14:10:43", 
                "deleted_at" => null, 
                "enable_note" => null, 
                "enable_upload_image" => null, 
                "maximum_quantity_per_order" => null, 
                "notify_quantity" => 0, 
                "require_shipping" => null, 
                "product" => [
                "id" => 55671, 
                "parent_id" => 55668, 
                "attribute_family_id" => 21, 
                "sku" => "5F8L8VI", 
                "type" => "simple", 
                "from" => null, 
                "pin" => 0, 
                "created_at" => "2024-05-08T13:11:44.000000Z", 
                "updated_at" => "2024-05-08T13:11:44.000000Z", 
                "status" => 1, 
                "unlimited_quantity" => 0, 
                "short_description" => null, 
                "description" => null, 
                "name" => "", 
                "url_key" => null, 
                "tax_category_id" => null, 
                "new" => null, 
                "featured" => null, 
                "visible_individually" => null, 
                "color" => 0, 
                "text" => "text", 
                "image" => "image", 
                "size" => null, 
                "brand" => null, 
                "guest_checkout" => null, 
                "brand_name" => null, 
                "barcode" => "", 
                "require_shipping" => null, 
                "is_vat" => null, 
                "notify_quantity" => "0", 
                "delivery_time" => null, 
                "subtitle" => null, 
                "promotion_title" => null, 
                "meta_title" => null, 
                "meta_keywords" => null, 
                "meta_description" => null, 
                "price" => "3.0000", 
                "cost" => "0.0000", 
                "special_price" => "0.0000", 
                "special_price_from" => null, 
                "special_price_to" => null, 
                "width" => null, 
                "height" => null, 
                "depth" => null, 
                "weight" => "0", 
                "inventories" => [
                [
                "id" => 57656, 
                "qty" => 0, 
                "product_id" => 55671, 
                "inventory_source_id" => 24, 
                "vendor_id" => 0, 
                ] 
                ], 
                "attribute_family" => [
                "id" => 21, 
                "code" => "default", 
                "name" => "Default", 
                "status" => 0, 
                "is_user_defined" => 1 
                ] 
                ] 
                ], 
                [
                "id" => 106899, 
                "product_id" => 55672, 
                "parent_id" => 106891, 
                "sku" => "Y7NVJZB", 
                "name" => "", 
                "description" => null, 
                "url_key" => null, 
                "new" => null, 
                "featured" => null, 
                "status" => 1, 
                "thumbnail" => null, 
                "price" => "4.00", 
                "cost" => "0.00", 
                "special_price" => "0.00", 
                "special_price_from" => null, 
                "special_price_to" => null, 
                "delivery_time" => null, 
                "visible_individually" => 0, 
                "min_price" => "4.00", 
                "max_price" => "4.00", 
                "is_vat" => 0, 
                "short_description" => null, 
                "meta_title" => null, 
                "meta_keywords" => null, 
                "meta_description" => null, 
                "width" => 0, 
                "height" => 0, 
                "depth" => 0, 
                "weight" => 0, 
                "unlimited_quantity" => "0", 
                "barcode" => "", 
                "brand_name" => null, 
                "promotion_title" => null, 
                "subtitle" => null, 
                "image" => "image", 
                "image_name" => "images", 
                "image_label" => "1", 
                "image_value" => "1", 
                "image_url" => "https://cdn.twsaa.com/product/55668/1d3c32b0-8c59-40e5-ad5a-26ae3d58572c.jpg", 
                "text" => "text", 
                "text_name" => "sizes", 
                "text_label" => "m", 
                "text_value" => "m", 
                "color" => "color", 
                "color_name" => "colors", 
                "color_label" => "black", 
                "color_value" => "#000000", 
                "size" => null, 
                "size_label" => null, 
                "created_at" => "2024-05-08 16:11:44", 
                "updated_at" => "2024-07-25 14:10:43", 
                "deleted_at" => null, 
                "enable_note" => null, 
                "enable_upload_image" => null, 
                "maximum_quantity_per_order" => null, 
                "notify_quantity" => 0, 
                "require_shipping" => null, 
                "product" => [
                "id" => 55672, 
                "parent_id" => 55668, 
                "attribute_family_id" => 21, 
                "sku" => "Y7NVJZB", 
                "type" => "simple", 
                "from" => null, 
                "pin" => 0, 
                "created_at" => "2024-05-08T13:11:44.000000Z", 
                "updated_at" => "2024-05-08T13:11:44.000000Z", 
                "status" => 1, 
                "unlimited_quantity" => 0, 
                "short_description" => null, 
                "description" => null, 
                "name" => "", 
                "url_key" => null, 
                "tax_category_id" => null, 
                "new" => null, 
                "featured" => null, 
                "visible_individually" => null, 
                "color" => 0, 
                "text" => "text", 
                "image" => "image", 
                "size" => null, 
                "brand" => null, 
                "guest_checkout" => null, 
                "brand_name" => null, 
                "barcode" => "", 
                "require_shipping" => null, 
                "is_vat" => null, 
                "notify_quantity" => "0", 
                "delivery_time" => null, 
                "subtitle" => null, 
                "promotion_title" => null, 
                "meta_title" => null, 
                "meta_keywords" => null, 
                "meta_description" => null, 
                "price" => "4.0000", 
                "cost" => "0.0000", 
                "special_price" => "0.0000", 
                "special_price_from" => null, 
                "special_price_to" => null, 
                "width" => null, 
                "height" => null, 
                "depth" => null, 
                "weight" => "0", 
                "inventories" => [
                [
                "id" => 57657, 
                "qty" => 0, 
                "product_id" => 55672, 
                "inventory_source_id" => 24, 
                "vendor_id" => 0, 
                ] 
                ], 
                "attribute_family" => [
                "id" => 21, 
                "code" => "default", 
                "name" => "Default", 
                "status" => 0, 
                "is_user_defined" => 1 
                ] 
                ] 
                ], 
                [
                "id" => 106901, 
                "product_id" => 55673, 
                "parent_id" => 106891, 
                "sku" => "K37T5BY", 
                "name" => "", 
                "description" => null, 
                "url_key" => null, 
                "new" => null, 
                "featured" => null, 
                "status" => 1, 
                "thumbnail" => null, 
                "price" => "1.00", 
                "cost" => "0.00", 
                "special_price" => "0.00", 
                "special_price_from" => null, 
                "special_price_to" => null, 
                "delivery_time" => null, 
                "visible_individually" => 0, 
                "min_price" => "1.00", 
                "max_price" => "1.00", 
                "is_vat" => 0, 
                "short_description" => null, 
                "meta_title" => null, 
                "meta_keywords" => null, 
                "meta_description" => null, 
                "width" => 0, 
                "height" => 0, 
                "depth" => 0, 
                "weight" => 0, 
                "unlimited_quantity" => "0", 
                "barcode" => "", 
                "brand_name" => null, 
                "promotion_title" => null, 
                "subtitle" => null, 
                "image" => "image", 
                "image_name" => "images", 
                "image_label" => "1", 
                "image_value" => "1", 
                "image_url" => "https://cdn.twsaa.com/product/55668/1d3c32b0-8c59-40e5-ad5a-26ae3d58572c.jpg", 
                "text" => "text", 
                "text_name" => "sizes", 
                "text_label" => "s", 
                "text_value" => "s", 
                "color" => "color", 
                "color_name" => "colors", 
                "color_label" => "red", 
                "color_value" => "#c70000", 
                "size" => null, 
                "size_label" => null, 
                "created_at" => "2024-05-08 16:11:44", 
                "updated_at" => "2024-07-25 14:10:43", 
                "deleted_at" => null, 
                "enable_note" => null, 
                "enable_upload_image" => null, 
                "maximum_quantity_per_order" => null, 
                "notify_quantity" => 0, 
                "require_shipping" => null, 
                "product" => [
                "id" => 55673, 
                "parent_id" => 55668, 
                "attribute_family_id" => 21, 
                "sku" => "K37T5BY", 
                "type" => "simple", 
                "from" => null, 
                "pin" => 0, 
                "created_at" => "2024-05-08T13:11:44.000000Z", 
                "updated_at" => "2024-05-08T13:11:44.000000Z", 
                "status" => 1, 
                "unlimited_quantity" => 0, 
                "short_description" => null, 
                "description" => null, 
                "name" => "", 
                "url_key" => null, 
                "tax_category_id" => null, 
                "new" => null, 
                "featured" => null, 
                "visible_individually" => null, 
                "color" => 0, 
                "text" => "text", 
                "image" => "image", 
                "size" => null, 
                "brand" => null, 
                "guest_checkout" => null, 
                "brand_name" => null, 
                "barcode" => "", 
                "require_shipping" => null, 
                "is_vat" => null, 
                "notify_quantity" => "0", 
                "delivery_time" => null, 
                "subtitle" => null, 
                "promotion_title" => null, 
                "meta_title" => null, 
                "meta_keywords" => null, 
                "meta_description" => null, 
                "price" => "1.0000", 
                "cost" => "0.0000", 
                "special_price" => "0.0000", 
                "special_price_from" => null, 
                "special_price_to" => null, 
                "width" => null, 
                "height" => null, 
                "depth" => null, 
                "weight" => "0", 
                "inventories" => [
                [
                "id" => 57658, 
                "qty" => 0, 
                "product_id" => 55673, 
                "inventory_source_id" => 24, 
                "vendor_id" => 0, 
                ] 
                ], 
                "attribute_family" => [
                "id" => 21, 
                "code" => "default", 
                "name" => "Default", 
                "status" => 0, 
                "is_user_defined" => 1 
                ] 
                ] 
                ], 
                [
                "id" => 106903, 
                "product_id" => 55674, 
                "parent_id" => 106891, 
                "sku" => "Y7FL1PL", 
                "name" => "", 
                "description" => null, 
                "url_key" => null, 
                "new" => null, 
                "featured" => null, 
                "status" => 1, 
                "thumbnail" => null, 
                "price" => "2.00", 
                "cost" => "0.00", 
                "special_price" => "0.00", 
                "special_price_from" => null, 
                "special_price_to" => null, 
                "delivery_time" => null, 
                "visible_individually" => 0, 
                "min_price" => "2.00", 
                "max_price" => "2.00", 
                "is_vat" => 0, 
                "short_description" => null, 
                "meta_title" => null, 
                "meta_keywords" => null, 
                "meta_description" => null, 
                "width" => 0, 
                "height" => 0, 
                "depth" => 0, 
                "weight" => 0, 
                "unlimited_quantity" => "0", 
                "barcode" => "", 
                "brand_name" => null, 
                "promotion_title" => null, 
                "subtitle" => null, 
                "image" => "image", 
                "image_name" => "images", 
                "image_label" => "1", 
                "image_value" => "1", 
                "image_url" => "https://cdn.twsaa.com/product/55668/1d3c32b0-8c59-40e5-ad5a-26ae3d58572c.jpg", 
                "text" => "text", 
                "text_name" => "sizes", 
                "text_label" => "s", 
                "text_value" => "s", 
                "color" => "color", 
                "color_name" => "colors", 
                "color_label" => "black", 
                "color_value" => "#000000", 
                "size" => null, 
                "size_label" => null, 
                "created_at" => "2024-05-08 16:11:44", 
                "updated_at" => "2024-07-25 14:10:43", 
                "deleted_at" => null, 
                "enable_note" => null, 
                "enable_upload_image" => null, 
                "maximum_quantity_per_order" => null, 
                "notify_quantity" => 0, 
                "require_shipping" => null, 
                "product" => [
                "id" => 55674, 
                "parent_id" => 55668, 
                "attribute_family_id" => 21, 
                "sku" => "Y7FL1PL", 
                "type" => "simple", 
                "from" => null, 
                "pin" => 0, 
                "created_at" => "2024-05-08T13:11:44.000000Z", 
                "updated_at" => "2024-05-08T13:11:44.000000Z", 
                "status" => 1, 
                "unlimited_quantity" => 0, 
                "price" => "2.0000", 
                "special_price" => "0.0000", 
                "weight" => "0", 
                "short_description" => null, 
                "description" => null, 
                "name" => "", 
                "url_key" => null, 
                "tax_category_id" => null, 
                "new" => null, 
                "featured" => null, 
                "visible_individually" => null, 
                "color" => 0, 
                "text" => "text", 
                "image" => "image", 
                "size" => null, 
                "brand" => null, 
                "guest_checkout" => null, 
                "brand_name" => null, 
                "barcode" => "", 
                "require_shipping" => null, 
                "is_vat" => null, 
                "notify_quantity" => "0", 
                "delivery_time" => null, 
                "subtitle" => null, 
                "promotion_title" => null, 
                "meta_title" => null, 
                "meta_keywords" => null, 
                "meta_description" => null, 
                "cost" => "0.0000", 
                "special_price_from" => null, 
                "special_price_to" => null, 
                "width" => null, 
                "height" => null, 
                "depth" => null, 
                "inventories" => [
                [
                "id" => 57659, 
                "qty" => 1, 
                "product_id" => 55674, 
                "inventory_source_id" => 24, 
                "vendor_id" => 0, 
                ] 
                ], 
                "attribute_family" => [
                "id" => 21, 
                "code" => "default", 
                "name" => "Default", 
                "status" => 0, 
                "is_user_defined" => 1 
                ] 
                ] 
                ], 
                [
                "id" => 106905, 
                "product_id" => 55675, 
                "parent_id" => 106891, 
                "sku" => "PJUVBQX", 
                "name" => "", 
                "description" => null, 
                "url_key" => null, 
                "new" => null, 
                "featured" => null, 
                "status" => 1, 
                "thumbnail" => null, 
                "price" => "3.00", 
                "cost" => "0.00", 
                "special_price" => "0.00", 
                "special_price_from" => null, 
                "special_price_to" => null, 
                "delivery_time" => null, 
                "visible_individually" => 0, 
                "min_price" => "3.00", 
                "max_price" => "3.00", 
                "is_vat" => 0, 
                "short_description" => null, 
                "meta_title" => null, 
                "meta_keywords" => null, 
                "meta_description" => null, 
                "width" => 0, 
                "height" => 0, 
                "depth" => 0, 
                "weight" => 0, 
                "unlimited_quantity" => "0", 
                "barcode" => "", 
                "brand_name" => null, 
                "promotion_title" => null, 
                "subtitle" => null, 
                "image" => "image", 
                "image_name" => "images", 
                "image_label" => "1", 
                "image_value" => "1", 
                "image_url" => "https://cdn.twsaa.com/product/55668/1d3c32b0-8c59-40e5-ad5a-26ae3d58572c.jpg", 
                "text" => "text", 
                "text_name" => "sizes", 
                "text_label" => "m", 
                "text_value" => "m", 
                "color" => "color", 
                "color_name" => "colors", 
                "color_label" => "red", 
                "color_value" => "#c70000", 
                "size" => null, 
                "size_label" => null, 
                "created_at" => "2024-05-08 16:11:44", 
                "updated_at" => "2024-07-25 14:10:43", 
                "deleted_at" => null, 
                "enable_note" => null, 
                "enable_upload_image" => null, 
                "maximum_quantity_per_order" => null, 
                "notify_quantity" => 0, 
                "require_shipping" => null, 
                "product" => [
                "id" => 55675, 
                "parent_id" => 55668, 
                "attribute_family_id" => 21, 
                "sku" => "PJUVBQX", 
                "type" => "simple", 
                "from" => null, 
                "pin" => 0, 
                "created_at" => "2024-05-08T13:11:44.000000Z", 
                "updated_at" => "2024-05-08T13:11:44.000000Z", 
                "status" => 1, 
                "unlimited_quantity" => 0, 
                "short_description" => null, 
                "description" => null, 
                "name" => "", 
                "url_key" => null, 
                "tax_category_id" => null, 
                "new" => null, 
                "featured" => null, 
                "visible_individually" => null, 
                "color" => 0, 
                "text" => "text", 
                "image" => "image", 
                "size" => null, 
                "brand" => null, 
                "guest_checkout" => null, 
                "brand_name" => null, 
                "barcode" => "", 
                "require_shipping" => null, 
                "is_vat" => null, 
                "notify_quantity" => "0", 
                "delivery_time" => null, 
                "subtitle" => null, 
                "promotion_title" => null, 
                "meta_title" => null, 
                "meta_keywords" => null, 
                "meta_description" => null, 
                "price" => "3.0000", 
                "cost" => "0.0000", 
                "special_price" => "0.0000", 
                "special_price_from" => null, 
                "special_price_to" => null, 
                "width" => null, 
                "height" => null, 
                "depth" => null, 
                "weight" => "0", 
                "inventories" => [
                [
                "id" => 57660, 
                "qty" => 0, 
                "product_id" => 55675, 
                "inventory_source_id" => 24, 
                "vendor_id" => 0, 
                ] 
                ], 
                "attribute_family" => [
                "id" => 21, 
                "code" => "default", 
                "name" => "Default", 
                "status" => 0, 
                "is_user_defined" => 1 
                ] 
                ] 
                ], 
                [
                "id" => 106907, 
                "product_id" => 55676, 
                "parent_id" => 106891, 
                "sku" => "M73WSIH", 
                "name" => "", 
                "description" => null, 
                "url_key" => null, 
                "new" => null, 
                "featured" => null, 
                "status" => 1, 
                "thumbnail" => null, 
                "price" => "4.00", 
                "cost" => "0.00", 
                "special_price" => "0.00", 
                "special_price_from" => null, 
                "special_price_to" => null, 
                "delivery_time" => null, 
                "visible_individually" => 0, 
                "min_price" => "4.00", 
                "max_price" => "4.00", 
                "is_vat" => 0, 
                "short_description" => null, 
                "meta_title" => null, 
                "meta_keywords" => null, 
                "meta_description" => null, 
                "width" => 0, 
                "height" => 0, 
                "depth" => 0, 
                "weight" => 0, 
                "unlimited_quantity" => "0", 
                "barcode" => "", 
                "brand_name" => null, 
                "promotion_title" => null, 
                "subtitle" => null, 
                "image" => "image", 
                "image_name" => "images", 
                "image_label" => "1", 
                "image_value" => "1", 
                "image_url" => "https://cdn.twsaa.com/product/55668/1d3c32b0-8c59-40e5-ad5a-26ae3d58572c.jpg", 
                "text" => "text", 
                "text_name" => "sizes", 
                "text_label" => "m", 
                "text_value" => "m", 
                "color" => "color", 
                "color_name" => "colors", 
                "color_label" => "black", 
                "color_value" => "#000000", 
                "size" => null, 
                "size_label" => null, 
                "created_at" => "2024-05-08 16:11:45", 
                "updated_at" => "2024-07-25 14:10:43", 
                "deleted_at" => null, 
                "enable_note" => null, 
                "enable_upload_image" => null, 
                "maximum_quantity_per_order" => null, 
                "notify_quantity" => 0, 
                "require_shipping" => null, 
                "product" => [
                "id" => 55676, 
                "parent_id" => 55668, 
                "attribute_family_id" => 21, 
                "sku" => "M73WSIH", 
                "type" => "simple", 
                "from" => null, 
                "pin" => 0, 
                "created_at" => "2024-05-08T13:11:45.000000Z", 
                "updated_at" => "2024-05-08T13:11:45.000000Z", 
                "status" => 1, 
                "unlimited_quantity" => 0, 
                "price" => "4.0000", 
                "special_price" => "0.0000", 
                "weight" => "0", 
                "short_description" => null, 
                "description" => null, 
                "name" => "", 
                "url_key" => null, 
                "tax_category_id" => null, 
                "new" => null, 
                "featured" => null, 
                "visible_individually" => null, 
                "color" => 0, 
                "text" => "text", 
                "image" => "image", 
                "size" => null, 
                "brand" => null, 
                "guest_checkout" => null, 
                "brand_name" => null, 
                "barcode" => "", 
                "require_shipping" => null, 
                "is_vat" => null, 
                "notify_quantity" => "0", 
                "delivery_time" => null, 
                "subtitle" => null, 
                "promotion_title" => null, 
                "meta_title" => null, 
                "meta_keywords" => null, 
                "meta_description" => null, 
                "cost" => "0.0000", 
                "special_price_from" => null, 
                "special_price_to" => null, 
                "width" => null, 
                "height" => null, 
                "depth" => null, 
                "inventories" => [
                [
                "id" => 57661, 
                "qty" => 2, 
                "product_id" => 55676, 
                "inventory_source_id" => 24, 
                "vendor_id" => 0, 
                ] 
                ], 
                "attribute_family" => [
                "id" => 21, 
                "code" => "default", 
                "name" => "Default", 
                "status" => 0, 
                "is_user_defined" => 1 
                ] 
                ] 
                ], 
                [
                "id" => 106909, 
                "product_id" => 55677, 
                "parent_id" => 106891, 
                "sku" => "V3WNTRF", 
                "name" => "", 
                "description" => null, 
                "url_key" => null, 
                "new" => null, 
                "featured" => null, 
                "status" => 1, 
                "thumbnail" => null, 
                "price" => "5.00", 
                "cost" => "0.00", 
                "special_price" => "0.00", 
                "special_price_from" => null, 
                "special_price_to" => null, 
                "delivery_time" => null, 
                "visible_individually" => 0, 
                "min_price" => "5.00", 
                "max_price" => "5.00", 
                "is_vat" => 0, 
                "short_description" => null, 
                "meta_title" => null, 
                "meta_keywords" => null, 
                "meta_description" => null, 
                "width" => 0, 
                "height" => 0, 
                "depth" => 0, 
                "weight" => 0, 
                "unlimited_quantity" => "0", 
                "barcode" => "", 
                "brand_name" => null, 
                "promotion_title" => null, 
                "subtitle" => null, 
                "image" => "image", 
                "image_name" => "images", 
                "image_label" => "2", 
                "image_value" => "2", 
                "image_url" => "https://cdn.twsaa.com/product/55668/a16626c7-40a0-42f9-954f-5e1b25159fc1.png", 
                "text" => "text", 
                "text_name" => "sizes", 
                "text_label" => "s", 
                "text_value" => "s", 
                "color" => "color", 
                "color_name" => "colors", 
                "color_label" => "red", 
                "color_value" => "#c70000", 
                "size" => null, 
                "size_label" => null, 
                "created_at" => "2024-05-12 11:24:35", 
                "updated_at" => "2024-07-25 14:10:43", 
                "deleted_at" => null, 
                "enable_note" => null, 
                "enable_upload_image" => null, 
                "maximum_quantity_per_order" => null, 
                "notify_quantity" => 0, 
                "require_shipping" => null, 
                "product" => [
                "id" => 55677, 
                "parent_id" => 55668, 
                "attribute_family_id" => 21, 
                "sku" => "V3WNTRF", 
                "type" => "simple", 
                "from" => null, 
                "pin" => 0, 
                "created_at" => "2024-05-12T08:24:35.000000Z", 
                "updated_at" => "2024-05-12T08:24:35.000000Z", 
                "status" => 1, 
                "unlimited_quantity" => 0, 
                "price" => "5.0000", 
                "special_price" => "0.0000", 
                "weight" => "0", 
                "short_description" => null, 
                "description" => null, 
                "name" => "", 
                "url_key" => null, 
                "tax_category_id" => null, 
                "new" => null, 
                "featured" => null, 
                "visible_individually" => null, 
                "color" => 0, 
                "text" => "text", 
                "image" => "image", 
                "size" => null, 
                "brand" => null, 
                "guest_checkout" => null, 
                "brand_name" => null, 
                "barcode" => "", 
                "require_shipping" => null, 
                "is_vat" => null, 
                "notify_quantity" => "0", 
                "delivery_time" => null, 
                "subtitle" => null, 
                "promotion_title" => null, 
                "meta_title" => null, 
                "meta_keywords" => null, 
                "meta_description" => null, 
                "cost" => "0.0000", 
                "special_price_from" => null, 
                "special_price_to" => null, 
                "width" => null, 
                "height" => null, 
                "depth" => null, 
                "inventories" => [
                [
                "id" => 57662, 
                "qty" => 2, 
                "product_id" => 55677, 
                "inventory_source_id" => 24, 
                "vendor_id" => 0, 
                ] 
                ], 
                "attribute_family" => [
                "id" => 21, 
                "code" => "default", 
                "name" => "Default", 
                "status" => 0, 
                "is_user_defined" => 1 
                ] 
                ] 
                ], 
                [
                "id" => 106911, 
                "product_id" => 55678, 
                "parent_id" => 106891, 
                "sku" => "JE8G231", 
                "name" => "", 
                "description" => null, 
                "url_key" => null, 
                "new" => null, 
                "featured" => null, 
                "status" => 1, 
                "thumbnail" => null, 
                "price" => "6.00", 
                "cost" => "0.00", 
                "special_price" => "0.00", 
                "special_price_from" => null, 
                "special_price_to" => null, 
                "delivery_time" => null, 
                "visible_individually" => 0, 
                "min_price" => "6.00", 
                "max_price" => "6.00", 
                "is_vat" => 0, 
                "short_description" => null, 
                "meta_title" => null, 
                "meta_keywords" => null, 
                "meta_description" => null, 
                "width" => 0, 
                "height" => 0, 
                "depth" => 0, 
                "weight" => 0, 
                "unlimited_quantity" => "0", 
                "barcode" => "", 
                "brand_name" => null, 
                "promotion_title" => null, 
                "subtitle" => null, 
                "image" => "image", 
                "image_name" => "images", 
                "image_label" => "2", 
                "image_value" => "2", 
                "image_url" => "https://cdn.twsaa.com/product/55668/a16626c7-40a0-42f9-954f-5e1b25159fc1.png", 
                "text" => "text", 
                "text_name" => "sizes", 
                "text_label" => "m", 
                "text_value" => "m", 
                "color" => "color", 
                "color_name" => "colors", 
                "color_label" => "red", 
                "color_value" => "#c70000", 
                "size" => null, 
                "size_label" => null, 
                "created_at" => "2024-05-12 11:24:35", 
                "updated_at" => "2024-07-25 14:10:44", 
                "deleted_at" => null, 
                "enable_note" => null, 
                "enable_upload_image" => null, 
                "maximum_quantity_per_order" => null, 
                "notify_quantity" => 0, 
                "require_shipping" => null, 
                "product" => [
                "id" => 55678, 
                "parent_id" => 55668, 
                "attribute_family_id" => 21, 
                "sku" => "JE8G231", 
                "type" => "simple", 
                "from" => null, 
                "pin" => 0, 
                "created_at" => "2024-05-12T08:24:35.000000Z", 
                "updated_at" => "2024-05-12T08:24:35.000000Z", 
                "status" => 1, 
                "unlimited_quantity" => 0, 
                "price" => "6.0000", 
                "special_price" => "0.0000", 
                "weight" => "0", 
                "short_description" => null, 
                "description" => null, 
                "name" => "", 
                "url_key" => null, 
                "tax_category_id" => null, 
                "new" => null, 
                "featured" => null, 
                "visible_individually" => null, 
                "color" => 0, 
                "text" => "text", 
                "image" => "image", 
                "size" => null, 
                "brand" => null, 
                "guest_checkout" => null, 
                "brand_name" => null, 
                "barcode" => "", 
                "require_shipping" => null, 
                "is_vat" => null, 
                "notify_quantity" => "0", 
                "delivery_time" => null, 
                "subtitle" => null, 
                "promotion_title" => null, 
                "meta_title" => null, 
                "meta_keywords" => null, 
                "meta_description" => null, 
                "cost" => "0.0000", 
                "special_price_from" => null, 
                "special_price_to" => null, 
                "width" => null, 
                "height" => null, 
                "depth" => null, 
                "inventories" => [
                [
                "id" => 57663, 
                "qty" => 2, 
                "product_id" => 55678, 
                "inventory_source_id" => 24, 
                "vendor_id" => 0, 
                ] 
                ], 
                "attribute_family" => [
                "id" => 21, 
                "code" => "default", 
                "name" => "Default", 
                "status" => 0, 
                "is_user_defined" => 1 
                ] 
                ] 
                ], 
                [
                "id" => 106913, 
                "product_id" => 55679, 
                "parent_id" => 106891, 
                "sku" => "H2KOONB", 
                "name" => "", 
                "description" => null, 
                "url_key" => null, 
                "new" => null, 
                "featured" => null, 
                "status" => 1, 
                "thumbnail" => null, 
                "price" => "7.00", 
                "cost" => "0.00", 
                "special_price" => "0.00", 
                "special_price_from" => null, 
                "special_price_to" => null, 
                "delivery_time" => null, 
                "visible_individually" => 0, 
                "min_price" => "7.00", 
                "max_price" => "7.00", 
                "is_vat" => 0, 
                "short_description" => null, 
                "meta_title" => null, 
                "meta_keywords" => null, 
                "meta_description" => null, 
                "width" => 0, 
                "height" => 0, 
                "depth" => 0, 
                "weight" => 0, 
                "unlimited_quantity" => "0", 
                "barcode" => "", 
                "brand_name" => null, 
                "promotion_title" => null, 
                "subtitle" => null, 
                "image" => "image", 
                "image_name" => "images", 
                "image_label" => "2", 
                "image_value" => "2", 
                "image_url" => "https://cdn.twsaa.com/product/55668/a16626c7-40a0-42f9-954f-5e1b25159fc1.png", 
                "text" => "text", 
                "text_name" => "sizes", 
                "text_label" => "s", 
                "text_value" => "s", 
                "color" => "color", 
                "color_name" => "colors", 
                "color_label" => "black", 
                "color_value" => "#000000", 
                "size" => null, 
                "size_label" => null, 
                "created_at" => "2024-05-12 11:24:35", 
                "updated_at" => "2024-07-25 14:10:44", 
                "deleted_at" => null, 
                "enable_note" => null, 
                "enable_upload_image" => null, 
                "maximum_quantity_per_order" => null, 
                "notify_quantity" => 0, 
                "require_shipping" => null, 
                "product" => [
                "id" => 55679, 
                "parent_id" => 55668, 
                "attribute_family_id" => 21, 
                "sku" => "H2KOONB", 
                "type" => "simple", 
                "from" => null, 
                "pin" => 0, 
                "created_at" => "2024-05-12T08:24:35.000000Z", 
                "updated_at" => "2024-05-12T08:24:35.000000Z", 
                "status" => 1, 
                "unlimited_quantity" => 0, 
                "price" => "7.0000", 
                "special_price" => "0.0000", 
                "weight" => "0", 
                "short_description" => null, 
                "description" => null, 
                "name" => "", 
                "url_key" => null, 
                "tax_category_id" => null, 
                "new" => null, 
                "featured" => null, 
                "visible_individually" => null, 
                "color" => 0, 
                "text" => "text", 
                "image" => "image", 
                "size" => null, 
                "brand" => null, 
                "guest_checkout" => null, 
                "brand_name" => null, 
                "barcode" => "", 
                "require_shipping" => null, 
                "is_vat" => null, 
                "notify_quantity" => "0", 
                "delivery_time" => null, 
                "subtitle" => null, 
                "promotion_title" => null, 
                "meta_title" => null, 
                "meta_keywords" => null, 
                "meta_description" => null, 
                "cost" => "0.0000", 
                "special_price_from" => null, 
                "special_price_to" => null, 
                "width" => null, 
                "height" => null, 
                "depth" => null, 
                "inventories" => [
                [
                "id" => 57664, 
                "qty" => 2, 
                "product_id" => 55679, 
                "inventory_source_id" => 24, 
                "vendor_id" => 0, 
                ] 
                ], 
                "attribute_family" => [
                "id" => 21, 
                "code" => "default", 
                "name" => "Default", 
                "status" => 0, 
                "is_user_defined" => 1 
                ] 
                ] 
                ], 
                [
                    "id" => 106915, 
                    "product_id" => 55680, 
                    "parent_id" => 106891, 
                    "sku" => "I7CG6K1", 
                    "name" => "", 
                    "description" => null, 
                    "url_key" => null, 
                    "new" => null, 
                    "featured" => null, 
                    "status" => 1, 
                    "thumbnail" => null, 
                    "price" => "8.00", 
                    "cost" => "0.00", 
                    "special_price" => "0.00", 
                    "special_price_from" => null, 
                    "special_price_to" => null, 
                    "delivery_time" => null, 
                    "visible_individually" => 0, 
                    "min_price" => "8.00", 
                    "max_price" => "8.00", 
                    "is_vat" => 0, 
                    "short_description" => null, 
                    "meta_title" => null, 
                    "meta_keywords" => null, 
                    "meta_description" => null, 
                    "width" => 0, 
                    "height" => 0, 
                    "depth" => 0, 
                    "weight" => 0, 
                    "unlimited_quantity" => "0", 
                    "barcode" => "", 
                    "brand_name" => null, 
                    "promotion_title" => null, 
                    "subtitle" => null, 
                    "image" => "image", 
                    "image_name" => "images", 
                    "image_label" => "2", 
                    "image_value" => "2", 
                    "image_url" => "https://cdn.twsaa.com/product/55668/a16626c7-40a0-42f9-954f-5e1b25159fc1.png", 
                    "text" => "text", 
                    "text_name" => "sizes", 
                    "text_label" => "m", 
                    "text_value" => "m", 
                    "color" => "color", 
                    "color_name" => "colors", 
                    "color_label" => "black", 
                    "color_value" => "#000000", 
                    "size" => null, 
                    "size_label" => null, 
                    "created_at" => "2024-05-12 11:24:35", 
                    "updated_at" => "2024-07-25 14:10:44", 
                    "deleted_at" => null, 
                    "enable_note" => null, 
                    "enable_upload_image" => null, 
                    "maximum_quantity_per_order" => null, 
                    "notify_quantity" => 0, 
                    "require_shipping" => null, 
                    "product" => [
                        "id" => 55680, 
                        "parent_id" => 55668, 
                        "attribute_family_id" => 21, 
                        "sku" => "I7CG6K1", 
                        "type" => "simple", 
                        "from" => null, 
                        "pin" => 0, 
                        "created_at" => "2024-05-12T08:24:35.000000Z", 
                        "updated_at" => "2024-05-12T08:24:35.000000Z", 
                        "status" => 1, 
                        "unlimited_quantity" => 0, 
                        "price" => "8.0000", 
                        "special_price" => "0.0000", 
                        "weight" => "0", 
                        "short_description" => null, 
                        "description" => null, 
                        "name" => "", 
                        "url_key" => null, 
                        "tax_category_id" => null, 
                        "new" => null, 
                        "featured" => null, 
                        "visible_individually" => null, 
                        "color" => 0, 
                        "text" => "text", 
                        "image" => "image", 
                        "size" => null, 
                        "brand" => null, 
                        "guest_checkout" => null, 
                        "brand_name" => null, 
                        "barcode" => "", 
                        "require_shipping" => null, 
                        "is_vat" => null, 
                        "notify_quantity" => "0", 
                        "delivery_time" => null, 
                        "subtitle" => null, 
                        "promotion_title" => null, 
                        "meta_title" => null, 
                        "meta_keywords" => null, 
                        "meta_description" => null, 
                        "cost" => "0.0000", 
                        "special_price_from" => null, 
                        "special_price_to" => null, 
                        "width" => null, 
                        "height" => null, 
                        "depth" => null, 
                        "inventories" => [
                        [
                            "id" => 57665, 
                            "qty" => 1, 
                            "product_id" => 55680, 
                            "inventory_source_id" => 24, 
                            "vendor_id" => 0, 
                        ] 
                        ], 
                        "attribute_family" => [
                                "id" => 21, 
                                "code" => "default", 
                                "name" => "Default", 
                                "status" => 0, 
                                "is_user_defined" => 1 
                            ] 
                    ] 
                ] 
        ],
        "up_sells" => [
            [
                "id" => 107859, 
                "product_id" => 56219, 
                "parent_id" => null, 
                "sku" => "K6P8ATO", 
                "name" => "digital", 
                "description" => null, 
                "url_key" => "k6p8ato", 
                "new" => null, 
                "featured" => null, 
                "status" => 1, 
                "thumbnail" => null, 
                "price" => "5.00", 
                "cost" => null, 
                "special_price" => null, 
                "special_price_from" => null, 
                "special_price_to" => null, 
                "delivery_time" => null, 
                "visible_individually" => 1, 
                "min_price" => "5.00", 
                "max_price" => "5.00", 
                "is_vat" => 1, 
                "short_description" => null, 
                "meta_title" => null, 
                "meta_keywords" => null, 
                "meta_description" => null, 
                "width" => 0, 
                "height" => 0, 
                "depth" => 0, 
                "weight" => 0, 
                "unlimited_quantity" => "0", 
                "barcode" => null, 
                "brand_name" => null, 
                "promotion_title" => null, 
                "subtitle" => null, 
                "image" => "", 
                "image_name" => "", 
                "image_label" => "", 
                "image_value" => "", 
                "image_url" => null, 
                "text" => "", 
                "text_name" => "", 
                "text_label" => "", 
                "text_value" => "", 
                "color" => "", 
                "color_name" => "", 
                "color_label" => "", 
                "color_value" => "", 
                "size" => null, 
                "size_label" => null, 
                "created_at" => "2024-11-10 09:30:59", 
                "updated_at" => "2024-11-10 09:31:39", 
                "deleted_at" => null, 
                "enable_note" => null, 
                "enable_upload_image" => null, 
                "maximum_quantity_per_order" => null, 
                "notify_quantity" => null, 
                "require_shipping" => 0 ,
                "html_price" => '<span class="product-price"><span class="price">٥٫٧٥&nbsp;ر.س.</span></span>',
                "product" => [
                    "base_image_url" => "https://cdn.twsaa.com/home/23/cd2eeaba-784a-4272-a3f7-3e78262846d0.png"
                ]
            ], 
            [
                "id" => 107833, 
                "product_id" => 56206, 
                "parent_id" => null, 
                "sku" => "sku-test-101", 
                "name" => "ملابس سباحة", 
                "description" => "", 
                "url_key" => "sku-test-101", 
                "new" => null, 
                "featured" => null, 
                "status" => 1, 
                "thumbnail" => null, 
                "price" => "45.00", 
                "cost" => "40.90", 
                "special_price" => "35.00", 
                "special_price_from" => "2026-07-31", 
                "special_price_to" => "2025-07-31", 
                "delivery_time" => null, 
                "visible_individually" => 1, 
                "min_price" => "55.00", 
                "max_price" => "100.00", 
                "is_vat" => 1, 
                "short_description" => null, 
                "meta_title" => null, 
                "meta_keywords" => null, 
                "meta_description" => null, 
                "width" => 0, 
                "height" => 0, 
                "depth" => 0, 
                "weight" => 10, 
                "unlimited_quantity" => "0", 
                "barcode" => "2", 
                "brand_name" => null, 
                "promotion_title" => null, 
                "subtitle" => null, 
                "image" => "", 
                "image_name" => "", 
                "image_label" => "", 
                "image_value" => "", 
                "image_url" => null, 
                "text" => "", 
                "text_name" => "", 
                "text_label" => "", 
                "text_value" => "", 
                "color" => "", 
                "color_name" => "", 
                "color_label" => "", 
                "color_value" => "", 
                "size" => null, 
                "size_label" => null, 
                "created_at" => "2024-10-21 11:44:47", 
                "updated_at" => "2024-10-21 11:45:07", 
                "deleted_at" => null, 
                "enable_note" => null, 
                "enable_upload_image" => null, 
                "maximum_quantity_per_order" => null, 
                "notify_quantity" => null, 
                "require_shipping" => 0 ,
                "html_price" => '<span class="product-price"><span class="special-price"> ‏٥١٫٧٥ ر.س.‏</span></span>',
                "product" => [
                    "base_image_url" => "https://cdn.twsaa.com/home/23/cd2eeaba-784a-4272-a3f7-3e78262846d0.png"
                ]
            ], 
            [
                "id" => 107667, 
                "product_id" => 56118, 
                "parent_id" => null, 
                "sku" => "OUU1RO7", 
                "name" => "ebook", 
                "description" => null, 
                "url_key" => "ouu1ro7", 
                "new" => null, 
                "featured" => null, 
                "status" => 1, 
                "thumbnail" => null, 
                "price" => "1.00", 
                "cost" => null, 
                "special_price" => null, 
                "special_price_from" => null, 
                "special_price_to" => null, 
                "delivery_time" => null, 
                "visible_individually" => 1, 
                "min_price" => "1.00", 
                "max_price" => "1.00", 
                "is_vat" => 1, 
                "short_description" => null, 
                "meta_title" => null, 
                "meta_keywords" => null, 
                "meta_description" => null, 
                "width" => 0, 
                "height" => 0, 
                "depth" => 0, 
                "weight" => 0, 
                "unlimited_quantity" => "0", 
                "barcode" => null, 
                "brand_name" => "12", 
                "promotion_title" => null, 
                "subtitle" => null, 
                "image" => "", 
                "image_name" => "", 
                "image_label" => "", 
                "image_value" => "", 
                "image_url" => null, 
                "text" => "", 
                "text_name" => "", 
                "text_label" => "", 
                "text_value" => "", 
                "color" => "", 
                "color_name" => "", 
                "color_label" => "", 
                "color_value" => "", 
                "size" => null, 
                "size_label" => null, 
                "created_at" => "2024-09-12 14:10:05", 
                "updated_at" => "2024-10-15 17:33:53", 
                "deleted_at" => null, 
                "enable_note" => null, 
                "enable_upload_image" => null, 
                "maximum_quantity_per_order" => null, 
                "notify_quantity" => null, 
                "require_shipping" => 0,
                "html_price" => '<span class="product-price"><span class="price">‏١٫١٥ ر.س.‏</span></span>',
                "product" => [
                    "base_image_url" => "https://cdn.twsaa.com/home/23/cd2eeaba-784a-4272-a3f7-3e78262846d0.png"
                ]
            ], 
            [
                "id" => 107663, 
                "product_id" => 56116, 
                "parent_id" => null, 
                "sku" => "N2-4-5-3", 
                "name" => "ثلاجة الجمال سباركلنق لافندر 4 لتر", 
                "description" => " ", 
                "url_key" => "n2-4-5-3", 
                "new" => null, 
                "featured" => 1, 
                "status" => 1, 
                "thumbnail" => null, 
                "price" => "367.35", 
                "cost" => "216.09", 
                "special_price" => null, 
                "special_price_from" => null, 
                "special_price_to" => null, 
                "delivery_time" => null, 
                "visible_individually" => 1, 
                "min_price" => "367.35", 
                "max_price" => "367.35", 
                "is_vat" => 0, 
                "short_description" => " ", 
                "meta_title" => "ثلاجة الجمال سباركلنق لافندر 4 لتر", 
                "meta_keywords" => null, 
                
                "width" => 0, 
                "height" => 0, 
                "depth" => 0, 
                "weight" => 0, 
                "unlimited_quantity" => "0", 
                "barcode" => null, 
                "brand_name" => "12", 
                "promotion_title" => null, 
                "subtitle" => null, 
                "image" => "", 
                "image_name" => "", 
                "image_label" => "", 
                "image_value" => "", 
                "image_url" => null, 
                "text" => "", 
                "text_name" => "", 
                "text_label" => "", 
                "text_value" => "", 
                "color" => "", 
                "color_name" => "", 
                "color_label" => "", 
                "color_value" => "", 
                "size" => null, 
                "size_label" => null, 
                "created_at" => "2024-08-21 16:41:44", 
                "updated_at" => "2024-10-15 17:33:59", 
                "deleted_at" => null, 
                "enable_note" => null, 
                "enable_upload_image" => null, 
                "maximum_quantity_per_order" => null, 
                "notify_quantity" => null, 
                "require_shipping" => 0,
                "html_price" => '<span class="product-price"><span class="price">‏٣٦٧٫٣٥ ر.س.‏</span></span>',
                "product" => [
                    "base_image_url" => "https://cdn.twsaa.com/home/23/cd2eeaba-784a-4272-a3f7-3e78262846d0.png"
                ]
            ]
        ],
        "images" => [
            [
                "id" => 37957, 
                "type" => "image", 
                "path" => "product/55668/a16626c7-40a0-42f9-954f-5e1b25159fc1.png", 
                "product_id" => 55668, 
                "main" => 0, 
                "url" => "https://cdn.twsaa.com/product/55668/a16626c7-40a0-42f9-954f-5e1b25159fc1.png" 
            ], 
            [
                "id" => 37958, 
                "type" => "image", 
                "path" => "product/55668/1d3c32b0-8c59-40e5-ad5a-26ae3d58572c.jpg", 
                "product_id" => 55668, 
                "main" => 0, 
                "url" => "https://cdn.twsaa.com/product/55668/1d3c32b0-8c59-40e5-ad5a-26ae3d58572c.jpg" 
            ] 
        ],
        "html_price" => '<span class="product-price"><span class="price">‏١٫١٥&nbsp;ر.س.‏</span></span>', 
        "show_sku" => true, 
        "show_purchase_count" => true, 
        "show_weight" => true, 
        "show_quantity_box" => true, 
        "show_purchase_count" => true, 
        "sufficient_quantity" => true, 
        "enable_product_reviews" => true, 
        "guest_review" => true, 
        "quantity_manually" => 2, 
        "remaning_quantity" => 2, 
        "total_quantity" => 2,
    ];
    
    return $context;
}

function simple() {
    $context['authUser'] = auth();
    $context['sales_count'] = 5;
    $context['product'] = [
        "id" => 107663, 
        "product_id" => 56116, 
        "parent_id" => null, 
        "sku" => "N2-4-5-3", 
        "name" => "simple", 
        "description" => " ", 
        "url_key" => "n2-4-5-3", 
        "new" => null, 
        "featured" => 1, 
        "status" => 1, 
        "thumbnail" => null, 
        "price" => "367.35", 
        "cost" => "216.09", 
        "special_price" => null, 
        "special_price_from" => null, 
        "special_price_to" => null, 
        "delivery_time" => null, 
        "visible_individually" => 1, 
        "min_price" => "367.35", 
        "max_price" => "367.35", 
        "is_vat" => 0, 
        "short_description" => " ", 
        "meta_title" => "ثلاجة الجمال سباركلنق لافندر 4 لتر", 
        "meta_keywords" => null, 
        "meta_description" => "", 
        "width" => 0, 
        "height" => 0, 
        "depth" => 0, 
        "weight" => 0, 
        "unlimited_quantity" => "0", 
        "barcode" => null, 
        "brand_name" => "12", 
        "promotion_title" => null, 
        "subtitle" => null, 
        "image" => "", 
        "image_name" => "", 
        "image_label" => "", 
        "image_value" => "", 
        "image_url" => null, 
        "text" => "", 
        "text_name" => "", 
        "text_label" => "", 
        "text_value" => "", 
        "color" => "", 
        "color_name" => "", 
        "color_label" => "", 
        "color_value" => "", 
        "size" => null, 
        "size_label" => null, 
        "created_at" => "2024-08-21 16:41:44", 
        "updated_at" => "2024-10-15 17:33:59", 
        "deleted_at" => null, 
        "enable_note" => null, 
        "enable_upload_image" => null, 
        "maximum_quantity_per_order" => null, 
        "notify_quantity" => null, 
        "require_shipping" => 0, 
        "product" => [
              "id" => 56116, 
              "parent_id" => null, 
              "attribute_family_id" => 21, 
              "sku" => "N2-4-5-3", 
              "type" => "simple", 
              "from" => "m5azn-123678", 
              "pin" => 1, 
              "created_at" => "2024-08-21T13:41:44.000000Z", 
              "updated_at" => "2024-10-14T11:29:50.000000Z", 
              "short_description" => " ", 
              "description" => " ", 
              "name" => "ثلاجة الجمال سباركلنق لافندر 4 لتر", 
              "url_key" => "n2-4-5-3", 
              "tax_category_id" => null, 
              "new" => 0, 
              "featured" => 0, 
              "visible_individually" => 1, 
              "status" => 1, 
              "color" => null, 
              "text" => null, 
              "image" => null, 
              "size" => null, 
              "brand" => null, 
              "guest_checkout" => 0, 
              "brand_name" => "12", 
              "barcode" => null, 
              "unlimited_quantity" => 0, 
              "require_shipping" => 0, 
              "is_vat" => 0, 
              "notify_quantity" => null, 
              "delivery_time" => null, 
              "subtitle" => null, 
              "promotion_title" => null, 
              "meta_title" => "ثلاجة الجمال سباركلنق لافندر 4 لتر", 
              "meta_keywords" => null, 
              "price" => "367.3500", 
              "cost" => "216.0900", 
              "special_price" => null, 
              "special_price_from" => null, 
              "special_price_to" => null, 
              "width" => null, 
              "height" => null, 
              "depth" => null, 
              "weight" => null, 
              "variants" => [
              ], 
              "attribute_family" => [
                    "id" => 21, 
                    "code" => "default", 
                    "name" => "Default", 
                    "status" => 0, 
                    "is_user_defined" => 1 
                 ] 
        ],
        "up_sells" => [
            [
                "id" => 107859, 
                "product_id" => 56219, 
                "parent_id" => null, 
                "sku" => "K6P8ATO", 
                "name" => "digital", 
                "description" => null, 
                "url_key" => "k6p8ato", 
                "new" => null, 
                "featured" => null, 
                "status" => 1, 
                "thumbnail" => null, 
                "price" => "5.00", 
                "cost" => null, 
                "special_price" => null, 
                "special_price_from" => null, 
                "special_price_to" => null, 
                "delivery_time" => null, 
                "visible_individually" => 1, 
                "min_price" => "5.00", 
                "max_price" => "5.00", 
                "is_vat" => 1, 
                "short_description" => null, 
                "meta_title" => null, 
                "meta_keywords" => null, 
                "meta_description" => null, 
                "width" => 0, 
                "height" => 0, 
                "depth" => 0, 
                "weight" => 0, 
                "unlimited_quantity" => "0", 
                "barcode" => null, 
                "brand_name" => null, 
                "promotion_title" => null, 
                "subtitle" => null, 
                "image" => "", 
                "image_name" => "", 
                "image_label" => "", 
                "image_value" => "", 
                "image_url" => null, 
                "text" => "", 
                "text_name" => "", 
                "text_label" => "", 
                "text_value" => "", 
                "color" => "", 
                "color_name" => "", 
                "color_label" => "", 
                "color_value" => "", 
                "size" => null, 
                "size_label" => null, 
                "created_at" => "2024-11-10 09:30:59", 
                "updated_at" => "2024-11-10 09:31:39", 
                "deleted_at" => null, 
                "enable_note" => null, 
                "enable_upload_image" => null, 
                "maximum_quantity_per_order" => null, 
                "notify_quantity" => null, 
                "require_shipping" => 0 ,
                "html_price" => '<span class="product-price"><span class="price">٥٫٧٥&nbsp;ر.س.</span></span>',
                "product" => [
                    "base_image_url" => "https://cdn.twsaa.com/home/23/cd2eeaba-784a-4272-a3f7-3e78262846d0.png"
                ]
            ], 
            [
                "id" => 107833, 
                "product_id" => 56206, 
                "parent_id" => null, 
                "sku" => "sku-test-101", 
                "name" => "ملابس سباحة", 
                "description" => "", 
                "url_key" => "sku-test-101", 
                "new" => null, 
                "featured" => null, 
                "status" => 1, 
                "thumbnail" => null, 
                "price" => "45.00", 
                "cost" => "40.90", 
                "special_price" => "35.00", 
                "special_price_from" => "2026-07-31", 
                "special_price_to" => "2025-07-31", 
                "delivery_time" => null, 
                "visible_individually" => 1, 
                "min_price" => "55.00", 
                "max_price" => "100.00", 
                "is_vat" => 1, 
                "short_description" => null, 
                "meta_title" => null, 
                "meta_keywords" => null, 
                "meta_description" => null, 
                "width" => 0, 
                "height" => 0, 
                "depth" => 0, 
                "weight" => 10, 
                "unlimited_quantity" => "0", 
                "barcode" => "2", 
                "brand_name" => null, 
                "promotion_title" => null, 
                "subtitle" => null, 
                "image" => "", 
                "image_name" => "", 
                "image_label" => "", 
                "image_value" => "", 
                "image_url" => null, 
                "text" => "", 
                "text_name" => "", 
                "text_label" => "", 
                "text_value" => "", 
                "color" => "", 
                "color_name" => "", 
                "color_label" => "", 
                "color_value" => "", 
                "size" => null, 
                "size_label" => null, 
                "created_at" => "2024-10-21 11:44:47", 
                "updated_at" => "2024-10-21 11:45:07", 
                "deleted_at" => null, 
                "enable_note" => null, 
                "enable_upload_image" => null, 
                "maximum_quantity_per_order" => null, 
                "notify_quantity" => null, 
                "require_shipping" => 0 ,
                "html_price" => '<span class="product-price"><span class="special-price"> ‏٥١٫٧٥ ر.س.‏</span></span>',
                "product" => [
                    "base_image_url" => "https://cdn.twsaa.com/home/23/cd2eeaba-784a-4272-a3f7-3e78262846d0.png"
                ]
            ], 
            [
                "id" => 107667, 
                "product_id" => 56118, 
                "parent_id" => null, 
                "sku" => "OUU1RO7", 
                "name" => "ebook", 
                "description" => null, 
                "url_key" => "ouu1ro7", 
                "new" => null, 
                "featured" => null, 
                "status" => 1, 
                "thumbnail" => null, 
                "price" => "1.00", 
                "cost" => null, 
                "special_price" => null, 
                "special_price_from" => null, 
                "special_price_to" => null, 
                "delivery_time" => null, 
                "visible_individually" => 1, 
                "min_price" => "1.00", 
                "max_price" => "1.00", 
                "is_vat" => 1, 
                "short_description" => null, 
                "meta_title" => null, 
                "meta_keywords" => null, 
                "meta_description" => null, 
                "width" => 0, 
                "height" => 0, 
                "depth" => 0, 
                "weight" => 0, 
                "unlimited_quantity" => "0", 
                "barcode" => null, 
                "brand_name" => "12", 
                "promotion_title" => null, 
                "subtitle" => null, 
                "image" => "", 
                "image_name" => "", 
                "image_label" => "", 
                "image_value" => "", 
                "image_url" => null, 
                "text" => "", 
                "text_name" => "", 
                "text_label" => "", 
                "text_value" => "", 
                "color" => "", 
                "color_name" => "", 
                "color_label" => "", 
                "color_value" => "", 
                "size" => null, 
                "size_label" => null, 
                "created_at" => "2024-09-12 14:10:05", 
                "updated_at" => "2024-10-15 17:33:53", 
                "deleted_at" => null, 
                "enable_note" => null, 
                "enable_upload_image" => null, 
                "maximum_quantity_per_order" => null, 
                "notify_quantity" => null, 
                "require_shipping" => 0,
                "html_price" => '<span class="product-price"><span class="price">‏١٫١٥ ر.س.‏</span></span>',
                "product" => [
                    "base_image_url" => "https://cdn.twsaa.com/home/23/cd2eeaba-784a-4272-a3f7-3e78262846d0.png"
                ]
            ], 
            [
                "id" => 107663, 
                "product_id" => 56116, 
                "parent_id" => null, 
                "sku" => "N2-4-5-3", 
                "name" => "ثلاجة الجمال سباركلنق لافندر 4 لتر", 
                "description" => " ", 
                "url_key" => "n2-4-5-3", 
                "new" => null, 
                "featured" => 1, 
                "status" => 1, 
                "thumbnail" => null, 
                "price" => "367.35", 
                "cost" => "216.09", 
                "special_price" => null, 
                "special_price_from" => null, 
                "special_price_to" => null, 
                "delivery_time" => null, 
                "visible_individually" => 1, 
                "min_price" => "367.35", 
                "max_price" => "367.35", 
                "is_vat" => 0, 
                "short_description" => " ", 
                "meta_title" => "ثلاجة الجمال سباركلنق لافندر 4 لتر", 
                "meta_keywords" => null, 
                
                "width" => 0, 
                "height" => 0, 
                "depth" => 0, 
                "weight" => 0, 
                "unlimited_quantity" => "0", 
                "barcode" => null, 
                "brand_name" => "12", 
                "promotion_title" => null, 
                "subtitle" => null, 
                "image" => "", 
                "image_name" => "", 
                "image_label" => "", 
                "image_value" => "", 
                "image_url" => null, 
                "text" => "", 
                "text_name" => "", 
                "text_label" => "", 
                "text_value" => "", 
                "color" => "", 
                "color_name" => "", 
                "color_label" => "", 
                "color_value" => "", 
                "size" => null, 
                "size_label" => null, 
                "created_at" => "2024-08-21 16:41:44", 
                "updated_at" => "2024-10-15 17:33:59", 
                "deleted_at" => null, 
                "enable_note" => null, 
                "enable_upload_image" => null, 
                "maximum_quantity_per_order" => null, 
                "notify_quantity" => null, 
                "require_shipping" => 0,
                "html_price" => '<span class="product-price"><span class="price">‏٣٦٧٫٣٥ ر.س.‏</span></span>',
                "product" => [
                    "base_image_url" => "https://cdn.twsaa.com/home/23/cd2eeaba-784a-4272-a3f7-3e78262846d0.png"
                ]
            ]
        ],
        "images" => [
            [
                  "id" => 38105, 
                  "type" => "image", 
                  "path" => "product/56116/0592b342-84cb-44f6-8d29-1328e332c9fd.png", 
                  "product_id" => 56116, 
                  "main" => 1, 
                  "url" => "https://cdn.twsaa.com/product/56116/0592b342-84cb-44f6-8d29-1328e332c9fd.png" 
               ], 
            [
                     "id" => 38106, 
                     "type" => "image", 
                     "path" => "product/56116/dc4ae137-feba-4d5a-82e1-be617eb59274.png", 
                     "product_id" => 56116, 
                     "main" => 0, 
                     "url" => "https://cdn.twsaa.com/product/56116/dc4ae137-feba-4d5a-82e1-be617eb59274.png" 
                  ] 
         ],
        "html_price" => '<span class="product-price"><span class="price">‏١٫١٥&nbsp;ر.س.‏</span></span>', 
        "show_sku" => true, 
        "show_purchase_count" => true, 
        "show_weight" => true, 
        "show_quantity_box" => true, 
        "show_purchase_count" => true, 
        "sufficient_quantity" => true, 
        "enable_product_reviews" => true, 
        "guest_review" => true, 
        "quantity_manually" => 2, 
        "remaning_quantity" => 2, 
        "total_quantity" => 2,

    ];
    
    return $context;
}

function digital() {
    $context['authUser'] = auth();
    $context['sales_count'] = 5;
    $context['product'] = [
        "id" => 107663, 
        "product_id" => 56116, 
        "parent_id" => null, 
        "sku" => "N2-4-5-3", 
        "name" => "digital", 
        "description" => " ", 
        "url_key" => "n2-4-5-3", 
        "new" => null, 
        "featured" => 1, 
        "status" => 1, 
        "thumbnail" => null, 
        "price" => "367.35", 
        "cost" => "216.09", 
        "special_price" => null, 
        "special_price_from" => null, 
        "special_price_to" => null, 
        "delivery_time" => null, 
        "visible_individually" => 1, 
        "min_price" => "367.35", 
        "max_price" => "367.35", 
        "is_vat" => 0, 
        "short_description" => " ", 
        "meta_title" => "digital", 
        "meta_keywords" => null, 
        "meta_description" => "", 
        "width" => 0, 
        "height" => 0, 
        "depth" => 0, 
        "weight" => 0, 
        "unlimited_quantity" => "0", 
        "barcode" => null, 
        "brand_name" => "12", 
        "promotion_title" => null, 
        "subtitle" => null, 
        "image" => "", 
        "image_name" => "", 
        "image_label" => "", 
        "image_value" => "", 
        "image_url" => null, 
        "text" => "", 
        "text_name" => "", 
        "text_label" => "", 
        "text_value" => "", 
        "color" => "", 
        "color_name" => "", 
        "color_label" => "", 
        "color_value" => "", 
        "size" => null, 
        "size_label" => null, 
        "created_at" => "2024-08-21 16:41:44", 
        "updated_at" => "2024-10-15 17:33:59", 
        "deleted_at" => null, 
        "enable_note" => null, 
        "enable_upload_image" => null, 
        "maximum_quantity_per_order" => null, 
        "notify_quantity" => null, 
        "require_shipping" => 0, 
        "product" => [
              "id" => 56116, 
              "parent_id" => null, 
              "attribute_family_id" => 21, 
              "sku" => "N2-4-5-3", 
              "type" => "simple", 
              "from" => "m5azn-123678", 
              "pin" => 1, 
              "created_at" => "2024-08-21T13:41:44.000000Z", 
              "updated_at" => "2024-10-14T11:29:50.000000Z", 
              "short_description" => " ", 
              "description" => " ", 
              "name" => "ثلاجة الجمال سباركلنق لافندر 4 لتر", 
              "url_key" => "n2-4-5-3", 
              "tax_category_id" => null, 
              "new" => 0, 
              "featured" => 0, 
              "visible_individually" => 1, 
              "status" => 1, 
              "color" => null, 
              "text" => null, 
              "image" => null, 
              "size" => null, 
              "brand" => null, 
              "guest_checkout" => 0, 
              "brand_name" => "12", 
              "barcode" => null, 
              "unlimited_quantity" => 0, 
              "require_shipping" => 0, 
              "is_vat" => 0, 
              "notify_quantity" => null, 
              "delivery_time" => null, 
              "subtitle" => null, 
              "promotion_title" => null, 
              "meta_title" => "ثلاجة الجمال سباركلنق لافندر 4 لتر", 
              "meta_keywords" => null, 
              "price" => "367.3500", 
              "cost" => "216.0900", 
              "special_price" => null, 
              "special_price_from" => null, 
              "special_price_to" => null, 
              "width" => null, 
              "height" => null, 
              "depth" => null, 
              "weight" => null, 
              "variants" => [
              ], 
              "attribute_family" => [
                    "id" => 21, 
                    "code" => "default", 
                    "name" => "Default", 
                    "status" => 0, 
                    "is_user_defined" => 1 
                 ] 
        ],
        "up_sells" => [
            [
                "id" => 107859, 
                "product_id" => 56219, 
                "parent_id" => null, 
                "sku" => "K6P8ATO", 
                "name" => "digital", 
                "description" => null, 
                "url_key" => "k6p8ato", 
                "new" => null, 
                "featured" => null, 
                "status" => 1, 
                "thumbnail" => null, 
                "price" => "5.00", 
                "cost" => null, 
                "special_price" => null, 
                "special_price_from" => null, 
                "special_price_to" => null, 
                "delivery_time" => null, 
                "visible_individually" => 1, 
                "min_price" => "5.00", 
                "max_price" => "5.00", 
                "is_vat" => 1, 
                "short_description" => null, 
                "meta_title" => null, 
                "meta_keywords" => null, 
                "meta_description" => null, 
                "width" => 0, 
                "height" => 0, 
                "depth" => 0, 
                "weight" => 0, 
                "unlimited_quantity" => "0", 
                "barcode" => null, 
                "brand_name" => null, 
                "promotion_title" => null, 
                "subtitle" => null, 
                "image" => "", 
                "image_name" => "", 
                "image_label" => "", 
                "image_value" => "", 
                "image_url" => null, 
                "text" => "", 
                "text_name" => "", 
                "text_label" => "", 
                "text_value" => "", 
                "color" => "", 
                "color_name" => "", 
                "color_label" => "", 
                "color_value" => "", 
                "size" => null, 
                "size_label" => null, 
                "created_at" => "2024-11-10 09:30:59", 
                "updated_at" => "2024-11-10 09:31:39", 
                "deleted_at" => null, 
                "enable_note" => null, 
                "enable_upload_image" => null, 
                "maximum_quantity_per_order" => null, 
                "notify_quantity" => null, 
                "require_shipping" => 0 ,
                "html_price" => '<span class="product-price"><span class="price">٥٫٧٥&nbsp;ر.س.</span></span>',
                "product" => [
                    "base_image_url" => "https://cdn.twsaa.com/home/23/cd2eeaba-784a-4272-a3f7-3e78262846d0.png"
                ]
            ], 
            [
                "id" => 107833, 
                "product_id" => 56206, 
                "parent_id" => null, 
                "sku" => "sku-test-101", 
                "name" => "ملابس سباحة", 
                "description" => "", 
                "url_key" => "sku-test-101", 
                "new" => null, 
                "featured" => null, 
                "status" => 1, 
                "thumbnail" => null, 
                "price" => "45.00", 
                "cost" => "40.90", 
                "special_price" => "35.00", 
                "special_price_from" => "2026-07-31", 
                "special_price_to" => "2025-07-31", 
                "delivery_time" => null, 
                "visible_individually" => 1, 
                "min_price" => "55.00", 
                "max_price" => "100.00", 
                "is_vat" => 1, 
                "short_description" => null, 
                "meta_title" => null, 
                "meta_keywords" => null, 
                "meta_description" => null, 
                "width" => 0, 
                "height" => 0, 
                "depth" => 0, 
                "weight" => 10, 
                "unlimited_quantity" => "0", 
                "barcode" => "2", 
                "brand_name" => null, 
                "promotion_title" => null, 
                "subtitle" => null, 
                "image" => "", 
                "image_name" => "", 
                "image_label" => "", 
                "image_value" => "", 
                "image_url" => null, 
                "text" => "", 
                "text_name" => "", 
                "text_label" => "", 
                "text_value" => "", 
                "color" => "", 
                "color_name" => "", 
                "color_label" => "", 
                "color_value" => "", 
                "size" => null, 
                "size_label" => null, 
                "created_at" => "2024-10-21 11:44:47", 
                "updated_at" => "2024-10-21 11:45:07", 
                "deleted_at" => null, 
                "enable_note" => null, 
                "enable_upload_image" => null, 
                "maximum_quantity_per_order" => null, 
                "notify_quantity" => null, 
                "require_shipping" => 0 ,
                "html_price" => '<span class="product-price"><span class="special-price"> ‏٥١٫٧٥ ر.س.‏</span></span>',
                "product" => [
                    "base_image_url" => "https://cdn.twsaa.com/home/23/cd2eeaba-784a-4272-a3f7-3e78262846d0.png"
                ]
            ], 
            [
                "id" => 107667, 
                "product_id" => 56118, 
                "parent_id" => null, 
                "sku" => "OUU1RO7", 
                "name" => "ebook", 
                "description" => null, 
                "url_key" => "ouu1ro7", 
                "new" => null, 
                "featured" => null, 
                "status" => 1, 
                "thumbnail" => null, 
                "price" => "1.00", 
                "cost" => null, 
                "special_price" => null, 
                "special_price_from" => null, 
                "special_price_to" => null, 
                "delivery_time" => null, 
                "visible_individually" => 1, 
                "min_price" => "1.00", 
                "max_price" => "1.00", 
                "is_vat" => 1, 
                "short_description" => null, 
                "meta_title" => null, 
                "meta_keywords" => null, 
                "meta_description" => null, 
                "width" => 0, 
                "height" => 0, 
                "depth" => 0, 
                "weight" => 0, 
                "unlimited_quantity" => "0", 
                "barcode" => null, 
                "brand_name" => "12", 
                "promotion_title" => null, 
                "subtitle" => null, 
                "image" => "", 
                "image_name" => "", 
                "image_label" => "", 
                "image_value" => "", 
                "image_url" => null, 
                "text" => "", 
                "text_name" => "", 
                "text_label" => "", 
                "text_value" => "", 
                "color" => "", 
                "color_name" => "", 
                "color_label" => "", 
                "color_value" => "", 
                "size" => null, 
                "size_label" => null, 
                "created_at" => "2024-09-12 14:10:05", 
                "updated_at" => "2024-10-15 17:33:53", 
                "deleted_at" => null, 
                "enable_note" => null, 
                "enable_upload_image" => null, 
                "maximum_quantity_per_order" => null, 
                "notify_quantity" => null, 
                "require_shipping" => 0,
                "html_price" => '<span class="product-price"><span class="price">‏١٫١٥ ر.س.‏</span></span>',
                "product" => [
                    "base_image_url" => "https://cdn.twsaa.com/home/23/cd2eeaba-784a-4272-a3f7-3e78262846d0.png"
                ]
            ], 
            [
                "id" => 107663, 
                "product_id" => 56116, 
                "parent_id" => null, 
                "sku" => "N2-4-5-3", 
                "name" => "ثلاجة الجمال سباركلنق لافندر 4 لتر", 
                "description" => " ", 
                "url_key" => "n2-4-5-3", 
                "new" => null, 
                "featured" => 1, 
                "status" => 1, 
                "thumbnail" => null, 
                "price" => "367.35", 
                "cost" => "216.09", 
                "special_price" => null, 
                "special_price_from" => null, 
                "special_price_to" => null, 
                "delivery_time" => null, 
                "visible_individually" => 1, 
                "min_price" => "367.35", 
                "max_price" => "367.35", 
                "is_vat" => 0, 
                "short_description" => " ", 
                "meta_title" => "ثلاجة الجمال سباركلنق لافندر 4 لتر", 
                "meta_keywords" => null, 
                
                "width" => 0, 
                "height" => 0, 
                "depth" => 0, 
                "weight" => 0, 
                "unlimited_quantity" => "0", 
                "barcode" => null, 
                "brand_name" => "12", 
                "promotion_title" => null, 
                "subtitle" => null, 
                "image" => "", 
                "image_name" => "", 
                "image_label" => "", 
                "image_value" => "", 
                "image_url" => null, 
                "text" => "", 
                "text_name" => "", 
                "text_label" => "", 
                "text_value" => "", 
                "color" => "", 
                "color_name" => "", 
                "color_label" => "", 
                "color_value" => "", 
                "size" => null, 
                "size_label" => null, 
                "created_at" => "2024-08-21 16:41:44", 
                "updated_at" => "2024-10-15 17:33:59", 
                "deleted_at" => null, 
                "enable_note" => null, 
                "enable_upload_image" => null, 
                "maximum_quantity_per_order" => null, 
                "notify_quantity" => null, 
                "require_shipping" => 0,
                "html_price" => '<span class="product-price"><span class="price">‏٣٦٧٫٣٥ ر.س.‏</span></span>',
                "product" => [
                    "base_image_url" => "https://cdn.twsaa.com/home/23/cd2eeaba-784a-4272-a3f7-3e78262846d0.png"
                ]
            ]
        ],
        "images" => [
            [
                  "id" => 38134, 
                  "type" => "image", 
                  "path" => "product/56219/b5a93051-3cc1-4d62-8b7f-2cd7897b9581.jpg", 
                  "product_id" => 56219, 
                  "main" => 1, 
                  "url" => "https://cdn.twsaa.com/product/56219/b5a93051-3cc1-4d62-8b7f-2cd7897b9581.jpg" 
               ] 
        ],
        "html_price" => '<span class="product-price"><span class="price">‏١٫١٥&nbsp;ر.س.‏</span></span>', 
        "show_sku" => true, 
        "show_purchase_count" => true, 
        "show_weight" => true, 
        "show_quantity_box" => true, 
        "show_purchase_count" => true, 
        "sufficient_quantity" => true, 
        "enable_product_reviews" => true, 
        "guest_review" => true, 
        "quantity_manually" => 2, 
        "remaning_quantity" => 2, 
        "total_quantity" => 2,

    ];
    
    return $context;
}

function downloadable() {
    $context['authUser'] = auth();
    $context['sales_count'] = 5;
    $context['product'] = [
        "id" => 107667, 
        "product_id" => 56118, 
        "parent_id" => null, 
        "sku" => "OUU1RO7", 
        "name" => "downloadable", 
        "description" => null, 
        "url_key" => "ouu1ro7", 
        "new" => null, 
        "featured" => null, 
        "status" => 1, 
        "thumbnail" => null, 
        "price" => "1.00", 
        "cost" => null, 
        "special_price" => null, 
        "special_price_from" => null, 
        "special_price_to" => null, 
        "delivery_time" => null, 
        "visible_individually" => 1, 
        "min_price" => "1.00", 
        "max_price" => "1.00", 
        "is_vat" => 1, 
        "short_description" => null, 
        "meta_title" => null, 
        "meta_keywords" => null, 
        "meta_description" => null, 
        "width" => 0, 
        "height" => 0, 
        "depth" => 0, 
        "weight" => 1, 
        "unlimited_quantity" => "0", 
        "barcode" => null, 
        "brand_name" => "12", 
        "promotion_title" => null, 
        "subtitle" => null, 
        "image" => "", 
        "image_name" => "", 
        "image_label" => "", 
        "image_value" => "", 
        "image_url" => null, 
        "text" => "", 
        "text_name" => "", 
        "text_label" => "", 
        "text_value" => "", 
        "color" => "", 
        "color_name" => "", 
        "color_label" => "", 
        "color_value" => "", 
        "size" => null, 
        "size_label" => null, 
        "created_at" => "2024-09-12 14:10:05", 
        "updated_at" => "2024-10-15 17:33:53", 
        "deleted_at" => null, 
        "enable_note" => null, 
        "enable_upload_image" => null, 
        "maximum_quantity_per_order" => null, 
        "notify_quantity" => null, 
        "require_shipping" => 0, 
        "saleable" => 1,
        "product" => [
            "id" => 56118, 
            "parent_id" => null, 
            "attribute_family_id" => 21, 
            "sku" => "OUU1RO7", 
            "type" => "downloadable", 
            "from" => null, 
            "pin" => 0, 
            "created_at" => "2024-09-12T11:10:05.000000Z", 
            "updated_at" => "2024-09-12T11:10:05.000000Z", 
            "short_description" => null, 
            "description" => null, 
            "name" => "ebook", 
            "url_key" => "ouu1ro7", 
            "tax_category_id" => null, 
            "new" => 0, 
            "featured" => 0, 
            "visible_individually" => 1, 
            "status" => 1, 
            "color" => null, 
            "text" => null, 
            "image" => null, 
            "size" => null, 
            "brand" => null, 
            "guest_checkout" => 0, 
            "brand_name" => "12", 
            "barcode" => null, 
            "unlimited_quantity" => 0, 
            "require_shipping" => 0, 
            "is_vat" => 1, 
            "notify_quantity" => null, 
            "delivery_time" => null, 
            "subtitle" => null, 
            "promotion_title" => null, 
            "meta_title" => null, 
            "meta_keywords" => null, 
            "meta_description" => null, 
            "price" => "1.0000", 
            "cost" => null, 
            "special_price" => null, 
            "special_price_from" => null, 
            "special_price_to" => null, 
            "width" => null, 
            "height" => null, 
            "depth" => null, 
            "weight" => null, 
            "variants" => [], 
            "attribute_family" => [
                "id" => 21, 
                "code" => "default", 
                "name" => "Default", 
                "status" => 0, 
                "is_user_defined" => 1 
            ] 
        ],
        "up_sells" => [
            [
                "id" => 107859, 
                "product_id" => 56219, 
                "parent_id" => null, 
                "sku" => "K6P8ATO", 
                "name" => "digital", 
                "description" => null, 
                "url_key" => "k6p8ato", 
                "new" => null, 
                "featured" => null, 
                "status" => 1, 
                "thumbnail" => null, 
                "price" => "5.00", 
                "cost" => null, 
                "special_price" => null, 
                "special_price_from" => null, 
                "special_price_to" => null, 
                "delivery_time" => null, 
                "visible_individually" => 1, 
                "min_price" => "5.00", 
                "max_price" => "5.00", 
                "is_vat" => 1, 
                "short_description" => null, 
                "meta_title" => null, 
                "meta_keywords" => null, 
                "meta_description" => null, 
                "width" => 0, 
                "height" => 0, 
                "depth" => 0, 
                "weight" => 0, 
                "unlimited_quantity" => "0", 
                "barcode" => null, 
                "brand_name" => null, 
                "promotion_title" => null, 
                "subtitle" => null, 
                "image" => "", 
                "image_name" => "", 
                "image_label" => "", 
                "image_value" => "", 
                "image_url" => null, 
                "text" => "", 
                "text_name" => "", 
                "text_label" => "", 
                "text_value" => "", 
                "color" => "", 
                "color_name" => "", 
                "color_label" => "", 
                "color_value" => "", 
                "size" => null, 
                "size_label" => null, 
                "created_at" => "2024-11-10 09:30:59", 
                "updated_at" => "2024-11-10 09:31:39", 
                "deleted_at" => null, 
                "enable_note" => null, 
                "enable_upload_image" => null, 
                "maximum_quantity_per_order" => null, 
                "notify_quantity" => null, 
                "require_shipping" => 0 ,
                "html_price" => '<span class="product-price"><span class="price">٥٫٧٥&nbsp;ر.س.</span></span>',
                "product" => [
                    "base_image_url" => "https://cdn.twsaa.com/home/23/cd2eeaba-784a-4272-a3f7-3e78262846d0.png"
                ]
            ], 
            [
                "id" => 107833, 
                "product_id" => 56206, 
                "parent_id" => null, 
                "sku" => "sku-test-101", 
                "name" => "ملابس سباحة", 
                "description" => "", 
                "url_key" => "sku-test-101", 
                "new" => null, 
                "featured" => null, 
                "status" => 1, 
                "thumbnail" => null, 
                "price" => "45.00", 
                "cost" => "40.90", 
                "special_price" => "35.00", 
                "special_price_from" => "2026-07-31", 
                "special_price_to" => "2025-07-31", 
                "delivery_time" => null, 
                "visible_individually" => 1, 
                "min_price" => "55.00", 
                "max_price" => "100.00", 
                "is_vat" => 1, 
                "short_description" => null, 
                "meta_title" => null, 
                "meta_keywords" => null, 
                "meta_description" => null, 
                "width" => 0, 
                "height" => 0, 
                "depth" => 0, 
                "weight" => 10, 
                "unlimited_quantity" => "0", 
                "barcode" => "2", 
                "brand_name" => null, 
                "promotion_title" => null, 
                "subtitle" => null, 
                "image" => "", 
                "image_name" => "", 
                "image_label" => "", 
                "image_value" => "", 
                "image_url" => null, 
                "text" => "", 
                "text_name" => "", 
                "text_label" => "", 
                "text_value" => "", 
                "color" => "", 
                "color_name" => "", 
                "color_label" => "", 
                "color_value" => "", 
                "size" => null, 
                "size_label" => null, 
                "created_at" => "2024-10-21 11:44:47", 
                "updated_at" => "2024-10-21 11:45:07", 
                "deleted_at" => null, 
                "enable_note" => null, 
                "enable_upload_image" => null, 
                "maximum_quantity_per_order" => null, 
                "notify_quantity" => null, 
                "require_shipping" => 0 ,
                "html_price" => '<span class="product-price"><span class="special-price"> ‏٥١٫٧٥ ر.س.‏</span></span>',
                "product" => [
                    "base_image_url" => "https://cdn.twsaa.com/home/23/cd2eeaba-784a-4272-a3f7-3e78262846d0.png"
                ]
            ], 
            [
                "id" => 107667, 
                "product_id" => 56118, 
                "parent_id" => null, 
                "sku" => "OUU1RO7", 
                "name" => "ebook", 
                "description" => null, 
                "url_key" => "ouu1ro7", 
                "new" => null, 
                "featured" => null, 
                "status" => 1, 
                "thumbnail" => null, 
                "price" => "1.00", 
                "cost" => null, 
                "special_price" => null, 
                "special_price_from" => null, 
                "special_price_to" => null, 
                "delivery_time" => null, 
                "visible_individually" => 1, 
                "min_price" => "1.00", 
                "max_price" => "1.00", 
                "is_vat" => 1, 
                "short_description" => null, 
                "meta_title" => null, 
                "meta_keywords" => null, 
                "meta_description" => null, 
                "width" => 0, 
                "height" => 0, 
                "depth" => 0, 
                "weight" => 0, 
                "unlimited_quantity" => "0", 
                "barcode" => null, 
                "brand_name" => "12", 
                "promotion_title" => null, 
                "subtitle" => null, 
                "image" => "", 
                "image_name" => "", 
                "image_label" => "", 
                "image_value" => "", 
                "image_url" => null, 
                "text" => "", 
                "text_name" => "", 
                "text_label" => "", 
                "text_value" => "", 
                "color" => "", 
                "color_name" => "", 
                "color_label" => "", 
                "color_value" => "", 
                "size" => null, 
                "size_label" => null, 
                "created_at" => "2024-09-12 14:10:05", 
                "updated_at" => "2024-10-15 17:33:53", 
                "deleted_at" => null, 
                "enable_note" => null, 
                "enable_upload_image" => null, 
                "maximum_quantity_per_order" => null, 
                "notify_quantity" => null, 
                "require_shipping" => 0,
                "html_price" => '<span class="product-price"><span class="price">‏١٫١٥ ر.س.‏</span></span>',
                "product" => [
                    "base_image_url" => "https://cdn.twsaa.com/home/23/cd2eeaba-784a-4272-a3f7-3e78262846d0.png"
                ]
            ], 
            [
                "id" => 107663, 
                "product_id" => 56116, 
                "parent_id" => null, 
                "sku" => "N2-4-5-3", 
                "name" => "ثلاجة الجمال سباركلنق لافندر 4 لتر", 
                "description" => " ", 
                "url_key" => "n2-4-5-3", 
                "new" => null, 
                "featured" => 1, 
                "status" => 1, 
                "thumbnail" => null, 
                "price" => "367.35", 
                "cost" => "216.09", 
                "special_price" => null, 
                "special_price_from" => null, 
                "special_price_to" => null, 
                "delivery_time" => null, 
                "visible_individually" => 1, 
                "min_price" => "367.35", 
                "max_price" => "367.35", 
                "is_vat" => 0, 
                "short_description" => " ", 
                "meta_title" => "ثلاجة الجمال سباركلنق لافندر 4 لتر", 
                "meta_keywords" => null, 
                
                "width" => 0, 
                "height" => 0, 
                "depth" => 0, 
                "weight" => 0, 
                "unlimited_quantity" => "0", 
                "barcode" => null, 
                "brand_name" => "12", 
                "promotion_title" => null, 
                "subtitle" => null, 
                "image" => "", 
                "image_name" => "", 
                "image_label" => "", 
                "image_value" => "", 
                "image_url" => null, 
                "text" => "", 
                "text_name" => "", 
                "text_label" => "", 
                "text_value" => "", 
                "color" => "", 
                "color_name" => "", 
                "color_label" => "", 
                "color_value" => "", 
                "size" => null, 
                "size_label" => null, 
                "created_at" => "2024-08-21 16:41:44", 
                "updated_at" => "2024-10-15 17:33:59", 
                "deleted_at" => null, 
                "enable_note" => null, 
                "enable_upload_image" => null, 
                "maximum_quantity_per_order" => null, 
                "notify_quantity" => null, 
                "require_shipping" => 0,
                "html_price" => '<span class="product-price"><span class="price">‏٣٦٧٫٣٥ ر.س.‏</span></span>',
                "product" => [
                    "base_image_url" => "https://cdn.twsaa.com/home/23/cd2eeaba-784a-4272-a3f7-3e78262846d0.png"
                ]
            ]
        ],
        "images" => [
            [
                "id" => 37934, 
                "type" => "image", 
                "path" => "product/56118/68fc0441-483a-4167-a993-22d76d82b494.jpg", 
                "product_id" => 55668, 
                "main" => 1, 
                "url" => "https://cdn.twsaa.com/product/56118/large-68fc0441-483a-4167-a993-22d76d82b494.jpg" 
            ], 
         ],
        "html_price" => '<span class="product-price"><span class="price">‏١٫١٥&nbsp;ر.س.‏</span></span>', 
        "show_sku" => true, 
        "show_purchase_count" => true, 
        "show_weight" => true, 
        "show_quantity_box" => true, 
        "show_purchase_count" => true, 
        "sufficient_quantity" => true, 
        "enable_product_reviews" => true, 
        "guest_review" => true, 
        "quantity_manually" => 2, 
        "remaning_quantity" => 2, 
        "total_quantity" => 2,
    ]; 
    
    return $context;
}

function allProducts() {
    $context['authUser'] = auth();
    $context['products'] = [
        [
            'product' => [
                "id" => 107667, 
                "product_id" => 56118, 
                "parent_id" => null, 
                "sku" => "OUU1RO7", 
                "name" => "ebook", 
                "description" => null, 
                "url_key" => "ouu1ro7", 
                "new" => null, 
                "featured" => null, 
                "status" => 1, 
                "thumbnail" => null, 
                "price" => "1.00", 
                "cost" => null, 
                "special_price" => null, 
                "special_price_from" => null, 
                "special_price_to" => null, 
                "delivery_time" => null, 
                "visible_individually" => 1, 
                "min_price" => "1.00", 
                "max_price" => "1.00", 
                "is_vat" => 1, 
                "short_description" => null, 
                "meta_title" => null, 
                "meta_keywords" => null, 
                "meta_description" => null, 
                "width" => 0, 
                "height" => 0, 
                "depth" => 0, 
                "weight" => 0, 
                "unlimited_quantity" => "0", 
                "barcode" => null, 
                "brand_name" => "12", 
                "promotion_title" => null, 
                "subtitle" => null, 
                "image" => "", 
                "image_name" => "", 
                "image_label" => "", 
                "image_value" => "", 
                "image_url" => null, 
                "text" => "", 
                "text_name" => "", 
                "text_label" => "", 
                "text_value" => "", 
                "color" => "", 
                "color_name" => "", 
                "color_label" => "", 
                "color_value" => "", 
                "size" => null, 
                "size_label" => null, 
                "created_at" => "2024-09-12 14:10:05", 
                "updated_at" => "2024-10-15 17:33:53", 
                "deleted_at" => null, 
                "enable_note" => null, 
                "enable_upload_image" => null, 
                "maximum_quantity_per_order" => null, 
                "notify_quantity" => null, 
                "require_shipping" => 0,
                "saleable" => 1,
                "html_price" => '<span class="price">‏٣٦٧٫٣٥ ر.س.‏</span>',
                "product" => [
                    "base_image_url" => "https://cdn.twsaa.com/home/23/cd2eeaba-784a-4272-a3f7-3e78262846d0.png"
                ],
            ]
        ],
        [
            'product' => [
                "id" => 107663, 
                "product_id" => 56116, 
                "parent_id" => null, 
                "sku" => "N2-4-5-3", 
                "name" => "ثلاجة الجمال سباركلنق لافندر 4 لتر", 
                "description" => " ", 
                "url_key" => "n2-4-5-3", 
                "new" => null, 
                "featured" => 1, 
                "status" => 1, 
                "thumbnail" => null, 
                "price" => "367.35", 
                "cost" => "216.09", 
                "special_price" => null, 
                "special_price_from" => null, 
                "special_price_to" => null, 
                "delivery_time" => null, 
                "visible_individually" => 1, 
                "min_price" => "367.35", 
                "max_price" => "367.35", 
                "is_vat" => 0, 
                "short_description" => " ", 
                "meta_title" => "ثلاجة الجمال سباركلنق لافندر 4 لتر", 
                "meta_keywords" => null, 
                "meta_description" => "<p>حافظي على منتجاتك المفضلة للعناية بجمال بشرتك مع ثلاجة الجمال الحجم الكلاسيكي الأنيق لوضعه أينما رغبت في غرفتك&nbsp;</p>
    
                <p>- أبعاد الثلاجة: العرض: 24 سم، الطول: 31.8سم، القطر: 32.2 سم
                - رف واحد يفصل بين حجرتين تخزين رئيسية
                - متوفرة بخاصية التبريد حتى 5 درجات مئوية&nbsp;
                - متوفرة بخاصية التدفئة &nbsp;حتى 50 درجة مئوية&nbsp;
                - درج خاص في باب الثلاجة
                - محول DC5V 2A &nbsp;
                - محول 100-240 فولت&nbsp;
                - اللون: سباركلينج لافندر</p>
                
                <p>- ضعي قابس الكهرباء في في تيار 110 فولت أو 220 فولت ودعيها تعمل بشكل مستمر.
                - بإمكانك تشغيل الثلاجة عبر أي محول USB بقوة 2 مل أمبير مما يجعلها تعمل داخل السيارة أو على بطاريات الطاقة (ننصح ببطارية طاقة تفوق 1000مل أمبير)</p>
                
                <p>التحذيرات والاحتياطات:
                - قومي بتنظيف الثلاجة وتهويتها بمنشفة بشكل مستمر لمنع تشكل قطرات الماء داخلها.
                - دعي مسافة فراغ 20سم بين الثلاجة والحائط.</p>
                
                <p>&nbsp;</p>
                
                <p>- محول كهربائي 220-110 فولت&nbsp;
                - محول DC5V 2A &nbsp;
                - قوة 5 فولت *2 مل أمبير
                - سلك كهربائي USB
                -ستيكرات زينة</p>", 
                "width" => 0, 
                "height" => 0, 
                "depth" => 0, 
                "weight" => 0, 
                "unlimited_quantity" => "0", 
                "barcode" => null, 
                "brand_name" => "12", 
                "promotion_title" => null, 
                "subtitle" => null, 
                "image" => "", 
                "image_name" => "", 
                "image_label" => "", 
                "image_value" => "", 
                "image_url" => null, 
                "text" => "", 
                "text_name" => "", 
                "text_label" => "", 
                "text_value" => "", 
                "color" => "", 
                "color_name" => "", 
                "color_label" => "", 
                "color_value" => "", 
                "size" => null, 
                "size_label" => null, 
                "created_at" => "2024-08-21 16:41:44", 
                "updated_at" => "2024-10-15 17:33:59", 
                "deleted_at" => null, 
                "enable_note" => null, 
                "enable_upload_image" => null, 
                "maximum_quantity_per_order" => null, 
                "notify_quantity" => null, 
                "require_shipping" => 0,
                "saleable" => 1,
                "html_price" => '<span class="price">‏٣٦٧٫٣٥ ر.س.‏</span>',
                "product" => [
                    "base_image_url" => "https://cdn.twsaa.com/home/23/cd2eeaba-784a-4272-a3f7-3e78262846d0.png"
                ],
            ]
        ],
        [
            'product' => [
                "id" => 107661, 
                "product_id" => 56115, 
                "parent_id" => null, 
                "sku" => "sku-ABC", 
                "name" => null, 
                "description" => null, 
                "url_key" => "sku-abc", 
                "new" => null, 
                "featured" => null, 
                "status" => 1, 
                "thumbnail" => null, 
                "price" => null, 
                "cost" => null, 
                "special_price" => null, 
                "special_price_from" => null, 
                "special_price_to" => null, 
                "delivery_time" => null, 
                "visible_individually" => 1, 
                "min_price" => null, 
                "max_price" => null, 
                "is_vat" => 0, 
                "short_description" => null, 
                "meta_title" => null, 
                "meta_keywords" => null, 
                "meta_description" => null, 
                "width" => 0, 
                "height" => 0, 
                "depth" => 0, 
                "weight" => 0, 
                "unlimited_quantity" => "0", 
                "barcode" => null, 
                "brand_name" => "12", 
                "promotion_title" => null, 
                "subtitle" => null, 
                "image" => "", 
                "image_name" => "", 
                "image_label" => "", 
                "image_value" => "", 
                "image_url" => null, 
                "text" => "", 
                "text_name" => "", 
                "text_label" => "", 
                "text_value" => "", 
                "color" => "", 
                "color_name" => "", 
                "color_label" => "", 
                "color_value" => "", 
                "size" => null, 
                "size_label" => null, 
                "created_at" => "2024-08-06 11:30:32", 
                "updated_at" => "2024-10-15 17:34:04", 
                "deleted_at" => null, 
                "enable_note" => null, 
                "enable_upload_image" => null, 
                "maximum_quantity_per_order" => null, 
                "notify_quantity" => null, 
                "require_shipping" => 0,
                "saleable" => 1,
                "html_price" => '<span class="price">‏٣٦٧٫٣٥ ر.س.‏</span>',
                "product" => [
                    "base_image_url" => "https://cdn.twsaa.com/home/23/cd2eeaba-784a-4272-a3f7-3e78262846d0.png"
                ],
            ]
        ],
        [
            'product' => [
                "id" => 106921, 
                "product_id" => 55683, 
                "parent_id" => null, 
                "sku" => "GFAF0U2", 
                "name" => "vir", 
                "description" => null, 
                "url_key" => "gfaf0u2", 
                "new" => null, 
                "featured" => 1, 
                "status" => 1, 
                "thumbnail" => null, 
                "price" => "1.00", 
                "cost" => null, 
                "special_price" => null, 
                "special_price_from" => null, 
                "special_price_to" => null, 
                "delivery_time" => null, 
                "visible_individually" => 1, 
                "min_price" => "1.00", 
                "max_price" => "1.00", 
                "is_vat" => 1, 
                "short_description" => null, 
                "meta_title" => null, 
                "meta_keywords" => null, 
                "meta_description" => null, 
                "width" => 0, 
                "height" => 0, 
                "depth" => 0, 
                "weight" => 0, 
                "unlimited_quantity" => "0", 
                "barcode" => null, 
                "brand_name" => "12", 
                "promotion_title" => null, 
                "subtitle" => null, 
                "image" => "", 
                "image_name" => "", 
                "image_label" => "", 
                "image_value" => "", 
                "image_url" => null, 
                "text" => "", 
                "text_name" => "", 
                "text_label" => "", 
                "text_value" => "", 
                "color" => "", 
                "color_name" => "", 
                "color_label" => "", 
                "color_value" => "", 
                "size" => null, 
                "size_label" => null, 
                "created_at" => "2024-06-04 10:45:29", 
                "updated_at" => "2024-10-15 17:34:16", 
                "deleted_at" => null, 
                "enable_note" => null, 
                "enable_upload_image" => null, 
                "maximum_quantity_per_order" => null, 
                "notify_quantity" => null, 
                "require_shipping" => 0,
                "saleable" => 1,
                "html_price" => '<span class="price">‏٣٦٧٫٣٥ ر.س.‏</span>',
                "product" => [
                    "base_image_url" => "https://cdn.twsaa.com/home/23/cd2eeaba-784a-4272-a3f7-3e78262846d0.png"
                ],
            ]
        ],
        [
            'product' => [
                "id" => 106919, 
                "product_id" => 55682, 
                "parent_id" => null, 
                "sku" => "customizable", 
                "name" => "customizable product", 
                "description" => "This is testing Mobile", 
                "url_key" => "customizable", 
                "new" => null, 
                "featured" => null, 
                "status" => 1, 
                "thumbnail" => null, 
                "price" => "222.00", 
                "cost" => null, 
                "special_price" => null, 
                "special_price_from" => null, 
                "special_price_to" => null, 
                "delivery_time" => null, 
                "visible_individually" => 1, 
                "min_price" => "222.00", 
                "max_price" => "222.00", 
                "is_vat" => 1, 
                "short_description" => null, 
                "meta_title" => null, 
                "meta_keywords" => null, 
                "meta_description" => null, 
                "width" => 0, 
                "height" => 0, 
                "depth" => 0, 
                "weight" => 0, 
                "unlimited_quantity" => "0", 
                "barcode" => null, 
                "brand_name" => "12", 
                "promotion_title" => null, 
                "subtitle" => null, 
                "image" => "", 
                "image_name" => "", 
                "image_label" => "", 
                "image_value" => "", 
                "image_url" => null, 
                "text" => "", 
                "text_name" => "", 
                "text_label" => "", 
                "text_value" => "", 
                "color" => "", 
                "color_name" => "", 
                "color_label" => "", 
                "color_value" => "", 
                "size" => null, 
                "size_label" => null, 
                "created_at" => "2024-06-03 15:33:15", 
                "updated_at" => "2024-10-15 17:34:22", 
                "deleted_at" => null, 
                "enable_note" => null, 
                "enable_upload_image" => null, 
                "maximum_quantity_per_order" => null, 
                "notify_quantity" => null, 
                "require_shipping" => 0,
                "saleable" => 1,
                "html_price" => '<span class="price">‏٣٦٧٫٣٥ ر.س.‏</span>',
                "product" => [
                    "base_image_url" => "https://cdn.twsaa.com/home/23/cd2eeaba-784a-4272-a3f7-3e78262846d0.png"
                ],
            ]
        ],
        [
            'product' => [
                "id" => 106891, 
                "product_id" => 55668, 
                "parent_id" => null, 
                "sku" => "2G663YZ", 
                "name" => "asdf asdf2", 
                "description" => "<p>محافظ نسائية على الموضة ، محفظة طويلة ثلاثية الطي ذات جودة عالية من جلد البولي يوريثان ، حامل بطاقات كلاتش للنساء ، حامل بطاقات</p><p><br></p>", 
                "url_key" => "2g663yz", 
                "new" => null, 
                "featured" => null, 
                "status" => 1, 
                "thumbnail" => null, 
                "price" => "0.00", 
                "cost" => null, 
                "special_price" => null, 
                "special_price_from" => null, 
                "special_price_to" => null, 
                "delivery_time" => null, 
                "visible_individually" => 1, 
                "min_price" => "1.00", 
                "max_price" => "8.00", 
                "is_vat" => 1, 
                "short_description" => null, 
                "meta_title" => null, 
                "meta_keywords" => null, 
                "meta_description" => null, 
                "width" => 0, 
                "height" => 0, 
                "depth" => 0, 
                "weight" => 0, 
                "unlimited_quantity" => "0", 
                "barcode" => null, 
                "brand_name" => "12", 
                "promotion_title" => null, 
                "subtitle" => null, 
                "image" => "", 
                "image_name" => "", 
                "image_label" => "", 
                "image_value" => "", 
                "image_url" => null, 
                "text" => "", 
                "text_name" => "", 
                "text_label" => "", 
                "text_value" => "", 
                "color" => "", 
                "color_name" => "", 
                "color_label" => "", 
                "color_value" => "", 
                "size" => null, 
                "size_label" => null, 
                "created_at" => "2024-05-08 15:58:59", 
                "updated_at" => "2024-10-15 17:34:30", 
                "deleted_at" => null, 
                "enable_note" => null, 
                "enable_upload_image" => null, 
                "maximum_quantity_per_order" => null, 
                "notify_quantity" => null, 
                "require_shipping" => 0,
                "saleable" => 1,
                "html_price" => '<span class="price">‏٣٦٧٫٣٥ ر.س.‏</span>',
                "product" => [
                    "base_image_url" => "https://cdn.twsaa.com/home/23/cd2eeaba-784a-4272-a3f7-3e78262846d0.png"
                ],
            ]
        ],
        [
            'product' => [
                "id" => 103671, 
                "product_id" => 54040, 
                "parent_id" => null, 
                "sku" => "W1MDRT4", 
                "name" => "tryme", 
                "description" => "", 
                "url_key" => "w1mdrt4", 
                "new" => null, 
                "featured" => null, 
                "status" => 1, 
                "thumbnail" => null, 
                "price" => "1.00", 
                "cost" => null, 
                "special_price" => null, 
                "special_price_from" => null, 
                "special_price_to" => null, 
                "delivery_time" => null, 
                "visible_individually" => 1, 
                "min_price" => "1.00", 
                "max_price" => "1.00", 
                "is_vat" => 1, 
                "short_description" => null, 
                "meta_title" => "", 
                "meta_keywords" => null, 
                "meta_description" => "", 
                "width" => 0, 
                "height" => 0, 
                "depth" => 0, 
                "weight" => 0, 
                "unlimited_quantity" => "0", 
                "barcode" => null, 
                "brand_name" => "12", 
                "promotion_title" => null, 
                "subtitle" => null, 
                "image" => "", 
                "image_name" => "", 
                "image_label" => "", 
                "image_value" => "", 
                "image_url" => null, 
                "text" => "", 
                "text_name" => "", 
                "text_label" => "", 
                "text_value" => "", 
                "color" => "", 
                "color_name" => "", 
                "color_label" => "", 
                "color_value" => "", 
                "size" => null, 
                "size_label" => null, 
                "created_at" => "2024-04-22 15:35:12", 
                "updated_at" => "2024-07-25 12:32:10", 
                "deleted_at" => null, 
                "enable_note" => null, 
                "enable_upload_image" => null, 
                "maximum_quantity_per_order" => null, 
                "notify_quantity" => null, 
                "require_shipping" => 0,
                "saleable" => 1,
                "html_price" => '<span class="price">‏٣٦٧٫٣٥ ر.س.‏</span>',
                "product" => [
                    "base_image_url" => "https://cdn.twsaa.com/home/23/cd2eeaba-784a-4272-a3f7-3e78262846d0.png"
                ],
            ]
        ],
        [
            'product' => [
                "id" => 103667, 
                "product_id" => 54038, 
                "parent_id" => null, 
                "sku" => "059347", 
                "name" => "موزع روائح الزيوت العطرية", 
                "description" => "<p>موزع روائح الزيوت العطرية</p>

                <p>اضاءة داخلية مع اللهب - 4 الوان</p>
                
                <p>مرطب بالموجات فوق الصوتية</p>
                
                <p>&nbsp;</p>
                
                <p>ضمان سنتين&nbsp;</p>", 
                "url_key" => "059347", 
                "new" => null, 
                "featured" => null, 
                "status" => 1, 
                "thumbnail" => null, 
                "price" => "142.80", 
                "cost" => "84.00", 
                "special_price" => null, 
                "special_price_from" => null, 
                "special_price_to" => null, 
                "delivery_time" => null, 
                "visible_individually" => 1, 
                "min_price" => "142.80", 
                "max_price" => "142.80", 
                "is_vat" => 1, 
                "short_description" => "<p>موزع روائح الزيوت العطرية</p>

                <p>اضاءة داخلية مع اللهب - 4 الوان</p>
                
                <p>مرطب بالموجات فوق الصوتية</p>
                
                <p>&nbsp;</p>
                
                <p>ضمان سنتين&nbsp;</p>", 
                "meta_title" => "موزع روائح الزيوت العطرية", 
                "meta_keywords" => null, 
                "meta_description" => "<p>موزع روائح الزيوت العطرية</p>

                <p>اضاءة داخلية مع اللهب - 4 الوان</p>
                
                <p>مرطب بالموجات فوق الصوتية</p>
                
                <p>&nbsp;</p>
                
                <p>ضمان سنتين&nbsp;</p>", 
                "width" => 0, 
                "height" => 0, 
                "depth" => 0, 
                "weight" => 0.1, 
                "unlimited_quantity" => "0", 
                "barcode" => "059347", 
                "brand_name" => "12", 
                "promotion_title" => null, 
                "subtitle" => null, 
                "image" => "", 
                "image_name" => "", 
                "image_label" => "", 
                "image_value" => "", 
                "image_url" => null, 
                "text" => "", 
                "text_name" => "", 
                "text_label" => "", 
                "text_value" => "", 
                "color" => "", 
                "color_name" => "", 
                "color_label" => "", 
                "color_value" => "", 
                "size" => null, 
                "size_label" => null, 
                "created_at" => "2024-04-22 14:53:31", 
                "updated_at" => "2024-10-15 17:35:00", 
                "deleted_at" => null, 
                "enable_note" => null, 
                "enable_upload_image" => null, 
                "maximum_quantity_per_order" => null, 
                "notify_quantity" => null, 
                "require_shipping" => 0,
                "saleable" => 1,
                "html_price" => '<span class="price">‏٣٦٧٫٣٥ ر.س.‏</span>',
                "product" => [
                    "base_image_url" => "https://cdn.twsaa.com/home/23/cd2eeaba-784a-4272-a3f7-3e78262846d0.png"
                ],
            ]
        ],
        [
            'product' => [
                "id" => 103665, 
                "product_id" => 54037, 
                "parent_id" => null, 
                "sku" => "300130", 
                "name" => "ساعه انمر مان الرجالية 300130", 
                "description" => '<p dir="RTL">ساعه رجاليه فخمه من ماركة انمر مان&nbsp;</p>

                <p dir="RTL">صنقل ستيل كامل</p>
                
                <p dir="RTL">قفل ستيل</p>
                
                <p dir="RTL">تصميم رائع وجذاب</p>
                
                <p dir="RTL">مكينه ياباني</p>
                
                <p dir="RTL">لمعه ثابته</p>
                
                <p dir="RTL">علبه بنفس اسم الماركه</p>
                
                <p dir="RTL">ضمان ثلاث سنوات</p>", 
                "url_key" => "300130", 
                "new" => null, 
                "featured" => null, 
                "status" => 1, 
                "thumbnail" => null, 
                "price" => "160.65", 
                "cost" => "94.50", 
                "special_price" => null, 
                "special_price_from" => null, 
                "special_price_to" => null, 
                "delivery_time" => null, 
                "visible_individually" => 1, 
                "min_price" => "160.65", 
                "max_price" => "160.65", 
                "is_vat" => 1, 
                "short_description" => "<p dir="RTL">ساعه رجاليه فخمه من ماركة انمر مان&nbsp;</p>

                <p dir="RTL">صنقل ستيل كامل</p>
                
                <p dir="RTL">قفل ستيل</p>
                
                <p dir="RTL">تصميم رائع وجذاب</p>
                
                <p dir="RTL">مكينه ياباني</p>
                
                <p dir="RTL">لمعه ثابته</p>
                
                <p dir="RTL">علبه بنفس اسم الماركه</p>
                
                <p dir="RTL">ضمان ثلاث سنوات</p>", 
                "meta_title" => "ساعه انمر مان الرجالية 300130", 
                "meta_keywords" => null, 
                "meta_description" => "<p dir="RTL">ساعه رجاليه فخمه من ماركة انمر مان&nbsp;</p>

                <p dir="RTL">صنقل ستيل كامل</p>
                
                <p dir="RTL">قفل ستيل</p>
                
                <p dir="RTL">تصميم رائع وجذاب</p>
                
                <p dir="RTL">مكينه ياباني</p>
                
                <p dir="RTL">لمعه ثابته</p>
                
                <p dir="RTL">علبه بنفس اسم الماركه</p>
                                        
                <p dir="RTL">ضمان ثلاث سنوات</p>', 
                "width" => 0, 
                "height" => 0, 
                "depth" => 0, 
                "weight" => 0.6, 
                "unlimited_quantity" => "0", 
                "barcode" => "7788997788", 
                "brand_name" => "12", 
                "promotion_title" => null, 
                "subtitle" => null, 
                "image" => "", 
                "image_name" => "", 
                "image_label" => "", 
                "image_value" => "", 
                "image_url" => null, 
                "text" => "", 
                "text_name" => "", 
                "text_label" => "", 
                "text_value" => "", 
                "color" => "", 
                "color_name" => "", 
                "color_label" => "", 
                "color_value" => "", 
                "size" => null, 
                "size_label" => null, 
                "created_at" => "2024-04-22 14:53:27", 
                "updated_at" => "2024-10-15 17:35:07", 
                "deleted_at" => null, 
                "enable_note" => null, 
                "enable_upload_image" => null, 
                "maximum_quantity_per_order" => null, 
                "notify_quantity" => null, 
                "require_shipping" => 1,
                "saleable" => 1,
                "html_price" => '<span class="price">‏٣٦٧٫٣٥ ر.س.‏</span>',
                "product" => [
                    "base_image_url" => "https://cdn.twsaa.com/home/23/cd2eeaba-784a-4272-a3f7-3e78262846d0.png"
                ],
            ]
        ],
        [
            'product' => [
                "id" => 102523, 
                "product_id" => 53483, 
                "parent_id" => null, 
                "sku" => "MSKUAE1005006629609421", 
                "name" => "مجموعة مسحوق مجفف مجمد مضاد للتجاعيد ، خميرة للإصلاح ، مصل مغذي ، كرياتين لتعزيز إنتاج الكولاجين", 
                "description" => '<div class="detailmodule_html"><div class="detail-desc-decorate-richtext"><p><img src="https://ae01.alicdn.com/kf/Sbca62263df6e44d9916a0a3ad441d085h.jpg" slate-data-type="image" /><img src="https://ae01.alicdn.com/kf/S635c7aebc8fe4393a93593d41362b68e7.jpg" slate-data-type="image" /><img src="https://ae01.alicdn.com/kf/S0210767bca5e48189f751176a99ffb1dS.jpg" slate-data-type="image" /><img src="https://ae01.alicdn.com/kf/S6d44ece12bcf407bba64bf3f31b3b7daP.jpg" slate-data-type="image" /><img src="https://ae01.alicdn.com/kf/S1ac24a381f3740eb88b3a18e36a6f4a4g.jpg" slate-data-type="image" /><img src="https://ae01.alicdn.com/kf/S537206bb81f14efbbc423901aad8923de.jpg" slate-data-type="image" /><img src="https://ae01.alicdn.com/kf/Se52ebe59427648bf8e84305c39564c83v.jpg" slate-data-type="image" /><img src="https://ae01.alicdn.com/kf/S88ca6f916b1840bda759fdd7556f26cdw.jpg" slate-data-type="image" /><img src="https://ae01.alicdn.com/kf/Saf2e2587072841bc92da588588dff5feK.jpg" slate-data-type="image" /><img src="https://ae01.alicdn.com/kf/Sb9407490af5647a6b1daf61c361576e50.jpg" slate-data-type="image" /><img src="https://ae01.alicdn.com/kf/S7556e22c080145459d4de2a31e379fbaN.jpg" slate-data-type="image" /><img src="https://ae01.alicdn.com/kf/S3d106311a0e4431f938d6a6bdc87ce12l.jpg" slate-data-type="image" /><img src="https://ae01.alicdn.com/kf/S54005c6d105649b582a00fd961fdce65K.jpg" slate-data-type="image" /><img src="https://ae01.alicdn.com/kf/S20ecd5f1d6454e16af3caee0efc72b71I.jpg" slate-data-type="image" /></p></div></div>', 
                "url_key" => "mskuae1005006629609421", 
                "new" => null, 
                "featured" => null, 
                "status" => 1, 
                "thumbnail" => null, 
                "price" => null, 
                "cost" => null, 
                "special_price" => null, 
                "special_price_from" => null, 
                "special_price_to" => null, 
                "delivery_time" => null, 
                "visible_individually" => 1, 
                "min_price" => "424.51", 
                "max_price" => "1061.28", 
                "is_vat" => 1, 
                "short_description" => '<div class="detailmodule_html"><div class="detail-desc-decorate-richtext"><p><img src="https://ae01.alicdn.com/kf/Sbca62263df6e44d9916a0a3ad441d085h.jpg" slate-data-type="image" /><img src="https://ae01.alicdn.com/kf/S635c7aebc8fe4393a93593d41362b68e7.jpg" slate-data-type="image" /><img src="https://ae01.alicdn.com/kf/S0210767bca5e48189f751176a99ffb1dS.jpg" slate-data-type="image" /><img src="https://ae01.alicdn.com/kf/S6d44ece12bcf407bba64bf3f31b3b7daP.jpg" slate-data-type="image" /><img src="https://ae01.alicdn.com/kf/S1ac24a381f3740eb88b3a18e36a6f4a4g.jpg" slate-data-type="image" /><img src="https://ae01.alicdn.com/kf/S537206bb81f14efbbc423901aad8923de.jpg" slate-data-type="image" /><img src="https://ae01.alicdn.com/kf/Se52ebe59427648bf8e84305c39564c83v.jpg" slate-data-type="image" /><img src="https://ae01.alicdn.com/kf/S88ca6f916b1840bda759fdd7556f26cdw.jpg" slate-data-type="image" /><img src="https://ae01.alicdn.com/kf/Saf2e2587072841bc92da588588dff5feK.jpg" slate-data-type="image" /><img src="https://ae01.alicdn.com/kf/Sb9407490af5647a6b1daf61c361576e50.jpg" slate-data-type="image" /><img src="https://ae01.alicdn.com/kf/S7556e22c080145459d4de2a31e379fbaN.jpg" slate-data-type="image" /><img src="https://ae01.alicdn.com/kf/S3d106311a0e4431f938d6a6bdc87ce12l.jpg" slate-data-type="image" /><img src="https://ae01.alicdn.com/kf/S54005c6d105649b582a00fd961fdce65K.jpg" slate-data-type="image" /><img src="https://ae01.alicdn.com/kf/S20ecd5f1d6454e16af3caee0efc72b71I.jpg" slate-data-type="image" /></p></div></div>', 
                "meta_title" => "مجموعة مسحوق مجفف مجمد مضاد للتجاعيد ، خميرة للإصلاح ، مصل مغذي ، كرياتين لتعزيز إنتاج الكولاجين", 
                "meta_keywords" => null, 
                "meta_description" => '<div class="detailmodule_html"><div class="detail-desc-decorate-richtext"><p><img src="https://ae01.alicdn.com/kf/Sbca62263df6e44d9916a0a3ad441d085h.jpg" slate-data-type="image" /><img src="https://ae01.alicdn.com/kf/S635c7aebc8fe4393a93593d41362b68e7.jpg" slate-data-type="image" /><img src="https://ae01.alicdn.com/kf/S0210767bca5e48189f751176a99ffb1dS.jpg" slate-data-type="image" /><img src="https://ae01.alicdn.com/kf/S6d44ece12bcf407bba64bf3f31b3b7daP.jpg" slate-data-type="image" /><img src="https://ae01.alicdn.com/kf/S1ac24a381f3740eb88b3a18e36a6f4a4g.jpg" slate-data-type="image" /><img src="https://ae01.alicdn.com/kf/S537206bb81f14efbbc423901aad8923de.jpg" slate-data-type="image" /><img src="https://ae01.alicdn.com/kf/Se52ebe59427648bf8e84305c39564c83v.jpg" slate-data-type="image" /><img src="https://ae01.alicdn.com/kf/S88ca6f916b1840bda759fdd7556f26cdw.jpg" slate-data-type="image" /><img src="https://ae01.alicdn.com/kf/Saf2e2587072841bc92da588588dff5feK.jpg" slate-data-type="image" /><img src="https://ae01.alicdn.com/kf/Sb9407490af5647a6b1daf61c361576e50.jpg" slate-data-type="image" /><img src="https://ae01.alicdn.com/kf/S7556e22c080145459d4de2a31e379fbaN.jpg" slate-data-type="image" /><img src="https://ae01.alicdn.com/kf/S3d106311a0e4431f938d6a6bdc87ce12l.jpg" slate-data-type="image" /><img src="https://ae01.alicdn.com/kf/S54005c6d105649b582a00fd961fdce65K.jpg" slate-data-type="image" /><img src="https://ae01.alicdn.com/kf/S20ecd5f1d6454e16af3caee0efc72b71I.jpg" slate-data-type="image" /></p></div></div>', 
                "width" => 0, 
                "height" => 0, 
                "depth" => 0, 
                "weight" => 0, 
                "unlimited_quantity" => "0", 
                "barcode" => null, 
                "brand_name" => "12", 
                "promotion_title" => null, 
                "subtitle" => null, 
                "image" => "", 
                "image_name" => "", 
                "image_label" => "", 
                "image_value" => "", 
                "image_url" => null, 
                "text" => "", 
                "text_name" => "", 
                "text_label" => "", 
                "text_value" => "", 
                "color" => "", 
                "color_name" => "", 
                "color_label" => "", 
                "color_value" => "", 
                "size" => null, 
                "size_label" => null, 
                "created_at" => "2024-04-16 18:25:06", 
                "updated_at" => "2024-10-15 17:35:16", 
                "deleted_at" => null, 
                "enable_note" => null, 
                "enable_upload_image" => null, 
                "maximum_quantity_per_order" => null, 
                "notify_quantity" => null, 
                "require_shipping" => 0,
                "saleable" => 1,
                "html_price" => '<span class="price">‏٣٦٧٫٣٥ ر.س.‏</span>',
                "product" => [
                    "base_image_url" => "https://cdn.twsaa.com/home/23/cd2eeaba-784a-4272-a3f7-3e78262846d0.png"
                ],
            ]
        ],
        [
            'product' => [
                "id" => 102497, 
                "product_id" => 53470, 
                "parent_id" => null, 
                "sku" => "MSKUAE1005006608665729", 
                "name" => "سوار زوجين من الصلب الكلاسيكي الفاخر من التيتانيوم ، سوار عالي الجودة للرجال والنساء ، هدايا الحفلات", 
                "description" => '<div class="detailmodule_html"><div class="detail-desc-decorate-richtext"><p>
                        <kse:widget data-widget-type="customText" id="1005000011207205" type="relation"></kse:widget></p>
                    <p><span style="font-size:16px" id="tl_1">لمزيد من المعلومات والصور ، يرجى الاتصال بخدمة العملاء.</span></p>
                    <p><br /></p>
                    <p style="font-family:&quot;Open Sans&quot;, Roboto, Arial, Helvetica, sans-serif, SimSun;font-size:14px;font-weight:400;letter-spacing:normal;line-height:inherit;text-align:start;white-space:normal;color:rgb(34, 34, 34);margin:0px;margin-bottom:0px;margin-top:0px;margin-left:0px;margin-right:0px;padding:0px;padding-bottom:0px;padding-top:0px;padding-left:0px;padding-right:0px;box-sizing:border-box" align="start"><span style="font-size:16px" id="tl_2">لمزيد من المعلومات والصور ، يرجى الاتصال بخدمة العملاء.</span></p>
                    <p><br /></p>
                    <p style="font-family:&quot;Open Sans&quot;, Roboto, Arial, Helvetica, sans-serif, SimSun;font-size:14px;font-weight:400;letter-spacing:normal;line-height:inherit;text-align:start;white-space:normal;color:rgb(34, 34, 34);margin:0px;margin-bottom:0px;margin-top:0px;margin-left:0px;margin-right:0px;padding:0px;padding-bottom:0px;padding-top:0px;padding-left:0px;padding-right:0px;box-sizing:border-box" align="start"><span style="font-size:16px" id="tl_3">لمزيد من المعلومات والصور ، يرجى الاتصال بخدمة العملاء.</span></p>
                    <p><br /></p>
                    <div>
                        <span style="font-size:24px" id="tl_4">نصائح:</span>
                    </div>
                    <div>
                        <span style="font-size:18px" id="tl_5">يرجى استخدام شريط قياس ناعم لتأكيد محيط اليد الفعلي قبل الشراء ، وإضافة سنتيمتر واحد لتحديد الحجم المناسب للارتداء</span>
                    </div>
                    <div>
                        &nbsp;
                    </div>
                    <p style="font-family:&quot;Open Sans&quot;, Roboto, Arial, Helvetica, sans-serif, SimSun;font-size:14px;font-weight:400;letter-spacing:normal;line-height:inherit;text-align:start;white-space:normal;color:rgb(34, 34, 34);margin:0px;margin-bottom:0px;margin-top:0px;margin-left:0px;margin-right:0px;padding:0px;padding-bottom:0px;padding-top:0px;padding-left:0px;padding-right:0px;box-sizing:border-box" align="start"><img src="https://ae01.alicdn.com/kf/Sdc7eb0d7addd4f3faf38db4e0b0eef45x.jpg" slate-data-type="image" /></p></div></div>
                    ', 
                "url_key" => "mskuae1005006608665729", 
                "new" => null, 
                "featured" => null, 
                "status" => 1, 
                "thumbnail" => null, 
                "price" => null, 
                "cost" => null, 
                "special_price" => null, 
                "special_price_from" => null, 
                "special_price_to" => null, 
                "delivery_time" => null, 
                "visible_individually" => 1, 
                "min_price" => "330.58", 
                "max_price" => "330.58", 
                "is_vat" => 1, 
                "short_description" => '<div class="detailmodule_html"><div class="detail-desc-decorate-richtext"><p>
                    <kse:widget data-widget-type="customText" id="1005000011207205" type="relation"></kse:widget></p>
                <p><span style="font-size:16px" id="tl_1">لمزيد من المعلومات والصور ، يرجى الاتصال بخدمة العملاء.</span></p>
                <p><br /></p>
                <p style="font-family:&quot;Open Sans&quot;, Roboto, Arial, Helvetica, sans-serif, SimSun;font-size:14px;font-weight:400;letter-spacing:normal;line-height:inherit;text-align:start;white-space:normal;color:rgb(34, 34, 34);margin:0px;margin-bottom:0px;margin-top:0px;margin-left:0px;margin-right:0px;padding:0px;padding-bottom:0px;padding-top:0px;padding-left:0px;padding-right:0px;box-sizing:border-box" align="start"><span style="font-size:16px" id="tl_2">لمزيد من المعلومات والصور ، يرجى الاتصال بخدمة العملاء.</span></p>
                <p><br /></p>
                <p style="font-family:&quot;Open Sans&quot;, Roboto, Arial, Helvetica, sans-serif, SimSun;font-size:14px;font-weight:400;letter-spacing:normal;line-height:inherit;text-align:start;white-space:normal;color:rgb(34, 34, 34);margin:0px;margin-bottom:0px;margin-top:0px;margin-left:0px;margin-right:0px;padding:0px;padding-bottom:0px;padding-top:0px;padding-left:0px;padding-right:0px;box-sizing:border-box" align="start"><span style="font-size:16px" id="tl_3">لمزيد من المعلومات والصور ، يرجى الاتصال بخدمة العملاء.</span></p>
                <p><br /></p>
                <div>
                    <span style="font-size:24px" id="tl_4">نصائح:</span>
                </div>
                <div>
                    <span style="font-size:18px" id="tl_5">يرجى استخدام شريط قياس ناعم لتأكيد محيط اليد الفعلي قبل الشراء ، وإضافة سنتيمتر واحد لتحديد الحجم المناسب للارتداء</span>
                </div>
                <div>
                    &nbsp;
                </div>
                <p style="font-family:&quot;Open Sans&quot;, Roboto, Arial, Helvetica, sans-serif, SimSun;font-size:14px;font-weight:400;letter-spacing:normal;line-height:inherit;text-align:start;white-space:normal;color:rgb(34, 34, 34);margin:0px;margin-bottom:0px;margin-top:0px;margin-left:0px;margin-right:0px;padding:0px;padding-bottom:0px;padding-top:0px;padding-left:0px;padding-right:0px;box-sizing:border-box" align="start"><img src="https://ae01.alicdn.com/kf/Sdc7eb0d7addd4f3faf38db4e0b0eef45x.jpg" slate-data-type="image" /></p></div></div>
                ', 
                "meta_title" => "سوار زوجين من الصلب الكلاسيكي الفاخر من التيتانيوم ، سوار عالي الجودة للرجال والنساء ، هدايا الحفلات", 
                "meta_keywords" => null, 
                "meta_description" => '<div class="detailmodule_html"><div class="detail-desc-decorate-richtext"><p>
                        <kse:widget data-widget-type="customText" id="1005000011207205" type="relation"></kse:widget></p>
                    <p><span style="font-size:16px" id="tl_1">لمزيد من المعلومات والصور ، يرجى الاتصال بخدمة العملاء.</span></p>
                    <p><br /></p>
                    <p style="font-family:&quot;Open Sans&quot;, Roboto, Arial, Helvetica, sans-serif, SimSun;font-size:14px;font-weight:400;letter-spacing:normal;line-height:inherit;text-align:start;white-space:normal;color:rgb(34, 34, 34);margin:0px;margin-bottom:0px;margin-top:0px;margin-left:0px;margin-right:0px;padding:0px;padding-bottom:0px;padding-top:0px;padding-left:0px;padding-right:0px;box-sizing:border-box" align="start"><span style="font-size:16px" id="tl_2">لمزيد من المعلومات والصور ، يرجى الاتصال بخدمة العملاء.</span></p>
                    <p><br /></p>
                    <p style="font-family:&quot;Open Sans&quot;, Roboto, Arial, Helvetica, sans-serif, SimSun;font-size:14px;font-weight:400;letter-spacing:normal;line-height:inherit;text-align:start;white-space:normal;color:rgb(34, 34, 34);margin:0px;margin-bottom:0px;margin-top:0px;margin-left:0px;margin-right:0px;padding:0px;padding-bottom:0px;padding-top:0px;padding-left:0px;padding-right:0px;box-sizing:border-box" align="start"><span style="font-size:16px" id="tl_3">لمزيد من المعلومات والصور ، يرجى الاتصال بخدمة العملاء.</span></p>
                    <p><br /></p>
                    <div>
                        <span style="font-size:24px" id="tl_4">نصائح:</span>
                    </div>
                    <div>
                        <span style="font-size:18px" id="tl_5">يرجى استخدام شريط قياس ناعم لتأكيد محيط اليد الفعلي قبل الشراء ، وإضافة سنتيمتر واحد لتحديد الحجم المناسب للارتداء</span>
                    </div>
                    <div>
                        &nbsp;
                    </div>
                    <p style="font-family:&quot;Open Sans&quot;, Roboto, Arial, Helvetica, sans-serif, SimSun;font-size:14px;font-weight:400;letter-spacing:normal;line-height:inherit;text-align:start;white-space:normal;color:rgb(34, 34, 34);margin:0px;margin-bottom:0px;margin-top:0px;margin-left:0px;margin-right:0px;padding:0px;padding-bottom:0px;padding-top:0px;padding-left:0px;padding-right:0px;box-sizing:border-box" align="start"><img src="https://ae01.alicdn.com/kf/Sdc7eb0d7addd4f3faf38db4e0b0eef45x.jpg" slate-data-type="image" /></p></div></div>
                    ', 
                "width" => 0, 
                "height" => 0, 
                "depth" => 0, 
                "weight" => 0, 
                "unlimited_quantity" => "0", 
                "barcode" => null, 
                "brand_name" => "12", 
                "promotion_title" => null, 
                "subtitle" => null, 
                "image" => "", 
                "image_name" => "", 
                "image_label" => "", 
                "image_value" => "", 
                "image_url" => null, 
                "text" => "", 
                "text_name" => "", 
                "text_label" => "", 
                "text_value" => "", 
                "color" => "", 
                "color_name" => "", 
                "color_label" => "", 
                "color_value" => "", 
                "size" => null, 
                "size_label" => null, 
                "created_at" => "2024-04-16 18:25:00", 
                "updated_at" => "2024-10-15 17:35:42", 
                "deleted_at" => null, 
                "enable_note" => null, 
                "enable_upload_image" => null, 
                "maximum_quantity_per_order" => null, 
                "notify_quantity" => null, 
                "require_shipping" => 0,
                "saleable" => 1,
                "html_price" => '<span class="price">‏٣٦٧٫٣٥ ر.س.‏</span>',
                "product" => [
                    "base_image_url" => "https://cdn.twsaa.com/home/23/cd2eeaba-784a-4272-a3f7-3e78262846d0.png"
                ],
            ]
        ],
        [
            'product' => [
                "id" => 102485, 
                "product_id" => 53464, 
                "parent_id" => null, 
                "sku" => "MSKUAE1005006682900581", 
                "name" => "نظارات شمسية مستطيلة سوداء للنساء ، نظارات شمسية نسائية غريبة ، أزياء الحفلات ، مصمم العلامة التجارية ، UV400 ، بيع", 
                "description" => '<div class="detailmodule_html"><div class="detail-desc-decorate-richtext"><p><img src="https://ae01.alicdn.com/kf/S9e1b89e74cc740028300c1333a81390b5.png" slate-data-type="image" /></p> 
                    <p id="tl_1">انقر على المجموعة اتبع متجرنا ، وذلك للعثور على أسرع وإذا كان المتجر قد حدّث المنتج الجديد ، يمكنك الحصول عليه في المرة الأولى.</p> 
                    <p id="tl_2">إذا لم تتمكن من العثور على الموديل الذي تريده ، يرجى الاتصال بنا للحصول على المزيد من الطراز.</p> 
                    <p id="tl_3">لأن هناك العديد من النماذج ، ما زلنا نقوم بالتحميل ، ولم يتم تحميلها كلها.</p> 
                    <p id="tl_4">لذلك إذا كنت بحاجة إلى رؤية المزيد من النماذج ، يرجى الاتصال بنا.</p> 
                    <p><img src="https://ae01.alicdn.com/kf/Saa929797a7ee4aeaaf9d63d9d4c403c7O.png" slate-data-type="image" /></p> 
                    <p><img src="https://ae01.alicdn.com/kf/Sc89d251c03b84aa8b7bbc7c4e237ee57P.jpg" slate-data-type="image" /><img src="https://ae01.alicdn.com/kf/S9a70b16f6969449f8f27df7047a0c5cfS.jpg" slate-data-type="image" /><img src="https://ae01.alicdn.com/kf/S65a6ec4e10f24b28839d041c98b8360cY.jpg" slate-data-type="image" /><img src="https://ae01.alicdn.com/kf/S212f00319bfd46c2b78bfc1f9ed2b975G.jpg" slate-data-type="image" /><img src="https://ae01.alicdn.com/kf/Sb939841c93524c9d83f7f79ccc696d80a.jpg" slate-data-type="image" /><img src="https://ae01.alicdn.com/kf/Sf6b5fd5a090b4703a9e22b9314a39ddd3.jpg" slate-data-type="image" /></p> 
                    <p><img src="https://ae01.alicdn.com/kf/S32e12f6e8df344c0a000e1657965ae1al.png" slate-data-type="image" /></p> 
                    <p id="tl_5">موضع ترحيب انخفاض الشحن.</p> 
                    <p><br /></p> 
                    <p id="tl_6">للشحن المباشر ، يمكننا إرسال البضائع إلى عملائك مباشرة ولن نترك معلومات عنا إذا كنت ترغب في ذلك.</p> 
                    <p><br /></p> 
                    <p id="tl_7">كيف يمكنني تتبع الطرد الخاص بي ؟</p> 
                    <p><br /><br /></p> 
                    <p id="tl_8">يمكنك تتبع الطرد الخاص بك على الموقع الإلكتروني التالي باستخدام رقم التتبع الخاص بك: www.17track.net.en</p> 
                    <p><br /></p> 
                    <p id="tl_9">ماذا يمكنني أن أفعل عندما ينفد وقت حماية الشراء ؟</p> 
                    <p><br /></p> 
                    <p id="tl_10">إذا كان وقت حماية الشراء ينفد ، يرجى الاتصال بنا ويمكننا مساعدتك على تمديده. لذلك لن تذهب أموالك إلى حسابي.</p> 
                    <p><br /></p> 
                    <p id="tl_11">ملاحظات</p> 
                    <p><br /></p> 
                    <p id="tl_12">1. إذا كنت راضيًا عن منتجاتنا وخدماتنا ، يرجى ترك تعليقك الإيجابي و 5 نجوم. و 5 نجوم للحصول على تصنيف مفصل لطلبك.</p> 
                    <p><br /></p> 
                    <p id="tl_13">2. إذا لم تكن راضيًا عن منتجاتنا ، الرجاء الاتصال بنا قبل ترك تعليقات سلبية أو إجراء التقييم التفصيلي ، ونحن نضمن أننا سنحل أي مشاكل لك.</p></div></div>
                    ', 
                "url_key" => "mskuae1005006682900581", 
                "new" => null, 
                "featured" => null, 
                "status" => 1, 
                "thumbnail" => null, 
                "price" => null, 
                "cost" => null, 
                "special_price" => null, 
                "special_price_from" => null, 
                "special_price_to" => null, 
                "delivery_time" => null, 
                "visible_individually" => 1, 
                "min_price" => "431.44", 
                "max_price" => "431.44", 
                "is_vat" => 1, 
                "short_description" => '<div class="detailmodule_html"><div class="detail-desc-decorate-richtext"><p><img src="https://ae01.alicdn.com/kf/S9e1b89e74cc740028300c1333a81390b5.png" slate-data-type="image" /></p> 
                    <p id="tl_1">انقر على المجموعة اتبع متجرنا ، وذلك للعثور على أسرع وإذا كان المتجر قد حدّث المنتج الجديد ، يمكنك الحصول عليه في المرة الأولى.</p> 
                    <p id="tl_2">إذا لم تتمكن من العثور على الموديل الذي تريده ، يرجى الاتصال بنا للحصول على المزيد من الطراز.</p> 
                    <p id="tl_3">لأن هناك العديد من النماذج ، ما زلنا نقوم بالتحميل ، ولم يتم تحميلها كلها.</p> 
                    <p id="tl_4">لذلك إذا كنت بحاجة إلى رؤية المزيد من النماذج ، يرجى الاتصال بنا.</p> 
                    <p><img src="https://ae01.alicdn.com/kf/Saa929797a7ee4aeaaf9d63d9d4c403c7O.png" slate-data-type="image" /></p> 
                    <p><img src="https://ae01.alicdn.com/kf/Sc89d251c03b84aa8b7bbc7c4e237ee57P.jpg" slate-data-type="image" /><img src="https://ae01.alicdn.com/kf/S9a70b16f6969449f8f27df7047a0c5cfS.jpg" slate-data-type="image" /><img src="https://ae01.alicdn.com/kf/S65a6ec4e10f24b28839d041c98b8360cY.jpg" slate-data-type="image" /><img src="https://ae01.alicdn.com/kf/S212f00319bfd46c2b78bfc1f9ed2b975G.jpg" slate-data-type="image" /><img src="https://ae01.alicdn.com/kf/Sb939841c93524c9d83f7f79ccc696d80a.jpg" slate-data-type="image" /><img src="https://ae01.alicdn.com/kf/Sf6b5fd5a090b4703a9e22b9314a39ddd3.jpg" slate-data-type="image" /></p> 
                    <p><img src="https://ae01.alicdn.com/kf/S32e12f6e8df344c0a000e1657965ae1al.png" slate-data-type="image" /></p> 
                    <p id="tl_5">موضع ترحيب انخفاض الشحن.</p> 
                    <p><br /></p> 
                    <p id="tl_6">للشحن المباشر ، يمكننا إرسال البضائع إلى عملائك مباشرة ولن نترك معلومات عنا إذا كنت ترغب في ذلك.</p> 
                    <p><br /></p> 
                    <p id="tl_7">كيف يمكنني تتبع الطرد الخاص بي ؟</p> 
                    <p><br /><br /></p> 
                    <p id="tl_8">يمكنك تتبع الطرد الخاص بك على الموقع الإلكتروني التالي باستخدام رقم التتبع الخاص بك: www.17track.net.en</p> 
                    <p><br /></p> 
                    <p id="tl_9">ماذا يمكنني أن أفعل عندما ينفد وقت حماية الشراء ؟</p> 
                    <p><br /></p> 
                    <p id="tl_10">إذا كان وقت حماية الشراء ينفد ، يرجى الاتصال بنا ويمكننا مساعدتك على تمديده. لذلك لن تذهب أموالك إلى حسابي.</p> 
                    <p><br /></p> 
                    <p id="tl_11">ملاحظات</p> 
                    <p><br /></p> 
                    <p id="tl_12">1. إذا كنت راضيًا عن منتجاتنا وخدماتنا ، يرجى ترك تعليقك الإيجابي و 5 نجوم. و 5 نجوم للحصول على تصنيف مفصل لطلبك.</p> 
                    <p><br /></p> 
                    <p id="tl_13">2. إذا لم تكن راضيًا عن منتجاتنا ، الرجاء الاتصال بنا قبل ترك تعليقات سلبية أو إجراء التقييم التفصيلي ، ونحن نضمن أننا سنحل أي مشاكل لك.</p></div></div>
                    ', 
                "meta_title" => "نظارات شمسية مستطيلة سوداء للنساء ، نظارات شمسية نسائية غريبة ، أزياء الحفلات ، مصمم العلامة التجارية ، UV400 ، بيع", 
                "meta_keywords" => null, 
                "meta_description" => '<div class="detailmodule_html"><div class="detail-desc-decorate-richtext"><p><img src="https://ae01.alicdn.com/kf/S9e1b89e74cc740028300c1333a81390b5.png" slate-data-type="image" /></p> 
                        <p id="tl_1">انقر على المجموعة اتبع متجرنا ، وذلك للعثور على أسرع وإذا كان المتجر قد حدّث المنتج الجديد ، يمكنك الحصول عليه في المرة الأولى.</p> 
                        <p id="tl_2">إذا لم تتمكن من العثور على الموديل الذي تريده ، يرجى الاتصال بنا للحصول على المزيد من الطراز.</p> 
                        <p id="tl_3">لأن هناك العديد من النماذج ، ما زلنا نقوم بالتحميل ، ولم يتم تحميلها كلها.</p> 
                        <p id="tl_4">لذلك إذا كنت بحاجة إلى رؤية المزيد من النماذج ، يرجى الاتصال بنا.</p> 
                        <p><img src="https://ae01.alicdn.com/kf/Saa929797a7ee4aeaaf9d63d9d4c403c7O.png" slate-data-type="image" /></p> 
                        <p><img src="https://ae01.alicdn.com/kf/Sc89d251c03b84aa8b7bbc7c4e237ee57P.jpg" slate-data-type="image" /><img src="https://ae01.alicdn.com/kf/S9a70b16f6969449f8f27df7047a0c5cfS.jpg" slate-data-type="image" /><img src="https://ae01.alicdn.com/kf/S65a6ec4e10f24b28839d041c98b8360cY.jpg" slate-data-type="image" /><img src="https://ae01.alicdn.com/kf/S212f00319bfd46c2b78bfc1f9ed2b975G.jpg" slate-data-type="image" /><img src="https://ae01.alicdn.com/kf/Sb939841c93524c9d83f7f79ccc696d80a.jpg" slate-data-type="image" /><img src="https://ae01.alicdn.com/kf/Sf6b5fd5a090b4703a9e22b9314a39ddd3.jpg" slate-data-type="image" /></p> 
                        <p><img src="https://ae01.alicdn.com/kf/S32e12f6e8df344c0a000e1657965ae1al.png" slate-data-type="image" /></p> 
                        <p id="tl_5">موضع ترحيب انخفاض الشحن.</p> 
                        <p><br /></p> 
                        <p id="tl_6">للشحن المباشر ، يمكننا إرسال البضائع إلى عملائك مباشرة ولن نترك معلومات عنا إذا كنت ترغب في ذلك.</p> 
                        <p><br /></p> 
                        <p id="tl_7">كيف يمكنني تتبع الطرد الخاص بي ؟</p> 
                        <p><br /><br /></p> 
                        <p id="tl_8">يمكنك تتبع الطرد الخاص بك على الموقع الإلكتروني التالي باستخدام رقم التتبع الخاص بك: www.17track.net.en</p> 
                        <p><br /></p> 
                        <p id="tl_9">ماذا يمكنني أن أفعل عندما ينفد وقت حماية الشراء ؟</p> 
                        <p><br /></p> 
                        <p id="tl_10">إذا كان وقت حماية الشراء ينفد ، يرجى الاتصال بنا ويمكننا مساعدتك على تمديده. لذلك لن تذهب أموالك إلى حسابي.</p> 
                        <p><br /></p> 
                        <p id="tl_11">ملاحظات</p> 
                        <p><br /></p> 
                        <p id="tl_12">1. إذا كنت راضيًا عن منتجاتنا وخدماتنا ، يرجى ترك تعليقك الإيجابي و 5 نجوم. و 5 نجوم للحصول على تصنيف مفصل لطلبك.</p> 
                        <p><br /></p> 
                        <p id="tl_13">2. إذا لم تكن راضيًا عن منتجاتنا ، الرجاء الاتصال بنا قبل ترك تعليقات سلبية أو إجراء التقييم التفصيلي ، ونحن نضمن أننا سنحل أي مشاكل لك.</p></div></div>
                        ', 
                "width" => 0, 
                "height" => 0, 
                "depth" => 0, 
                "weight" => 0, 
                "unlimited_quantity" => "0", 
                "barcode" => null, 
                "brand_name" => "12", 
                "promotion_title" => null, 
                "subtitle" => null, 
                "image" => "", 
                "image_name" => "", 
                "image_label" => "", 
                "image_value" => "", 
                "image_url" => null, 
                "text" => "", 
                "text_name" => "", 
                "text_label" => "", 
                "text_value" => "", 
                "color" => "", 
                "color_name" => "", 
                "color_label" => "", 
                "color_value" => "", 
                "size" => null, 
                "size_label" => null, 
                "created_at" => "2024-04-16 18:23:28", 
                "updated_at" => "2024-10-15 17:36:56", 
                "deleted_at" => null, 
                "enable_note" => null, 
                "enable_upload_image" => null, 
                "maximum_quantity_per_order" => null, 
                "notify_quantity" => null, 
                "require_shipping" => 0,
                "saleable" => 1,
                "html_price" => '<span class="price">‏٣٦٧٫٣٥ ر.س.‏</span>',
                "product" => [
                    "base_image_url" => "https://cdn.twsaa.com/home/23/cd2eeaba-784a-4272-a3f7-3e78262846d0.png"
                ],
            ]
        ],
        [
            'product' => [
                "id" => 99206, 
                "product_id" => 51762, 
                "parent_id" => null, 
                "sku" => "RUIQBH6", 
                "name" => "منتج", 
                "description" => "", 
                "url_key" => "ruiqbh6", 
                "new" => null, 
                "featured" => null, 
                "status" => 1, 
                "thumbnail" => null, 
                "price" => "5.00", 
                "cost" => null, 
                "special_price" => null, 
                "special_price_from" => null, 
                "special_price_to" => null, 
                "delivery_time" => null, 
                "visible_individually" => 1, 
                "min_price" => "5.00", 
                "max_price" => "5.00", 
                "is_vat" => 1, 
                "short_description" => null, 
                "meta_title" => "", 
                "meta_keywords" => null, 
                "meta_description" => "", 
                "width" => 0, 
                "height" => 0, 
                "depth" => 0, 
                "weight" => 0, 
                "unlimited_quantity" => "0", 
                "barcode" => null, 
                "brand_name" => "12", 
                "promotion_title" => null, 
                "subtitle" => null, 
                "image" => "", 
                "image_name" => "", 
                "image_label" => "", 
                "image_value" => "", 
                "image_url" => null, 
                "text" => "", 
                "text_name" => "", 
                "text_label" => "", 
                "text_value" => "", 
                "color" => "", 
                "color_name" => "", 
                "color_label" => "", 
                "color_value" => "", 
                "size" => null, 
                "size_label" => null, 
                "created_at" => "2024-03-31 13:04:01", 
                "updated_at" => "2024-10-15 17:37:18", 
                "deleted_at" => null, 
                "enable_note" => null, 
                "enable_upload_image" => null, 
                "maximum_quantity_per_order" => null, 
                "notify_quantity" => null, 
                "require_shipping" => 0,
                "saleable" => 1,
                "html_price" => '<span class="price">‏٣٦٧٫٣٥ ر.س.‏</span>',
                "product" => [
                    "base_image_url" => "https://cdn.twsaa.com/home/23/cd2eeaba-784a-4272-a3f7-3e78262846d0.png"
                ],
            ]
        ],
        [
            'product' => [
                "id" => 74870, 
                "product_id" => 37810, 
                "parent_id" => null, 
                "sku" => "ven-con-1", 
                "name" => "ven-configurable", 
                "description" => "<p>ven-configurableven-configurable</p>", 
                "url_key" => "ven-con-1", 
                "new" => null, 
                "featured" => null, 
                "status" => 1, 
                "thumbnail" => null, 
                "price" => null, 
                "cost" => null, 
                "special_price" => null, 
                "special_price_from" => null, 
                "special_price_to" => null, 
                "delivery_time" => null, 
                "visible_individually" => 1, 
                "min_price" => "7.14", 
                "max_price" => "7.14", 
                "is_vat" => 1, 
                "short_description" => "<p>ven-configurableven-configurable</p>", 
                "meta_title" => "ven-configurable", 
                "meta_keywords" => null, 
                "meta_description" => "<p>ven-configurableven-configurable</p>", 
                "width" => 0, 
                "height" => 0, 
                "depth" => 0, 
                "weight" => 0, 
                "unlimited_quantity" => "0", 
                "barcode" => null, 
                "brand_name" => "12", 
                "promotion_title" => null, 
                "subtitle" => null, 
                "image" => "", 
                "image_name" => "", 
                "image_label" => "", 
                "image_value" => "", 
                "image_url" => null, 
                "text" => "", 
                "text_name" => "", 
                "text_label" => "", 
                "text_value" => "", 
                "color" => "", 
                "color_name" => "", 
                "color_label" => "", 
                "color_value" => "", 
                "size" => null, 
                "size_label" => null, 
                "created_at" => "2024-03-21 12:20:24", 
                "updated_at" => "2024-10-15 17:37:24", 
                "deleted_at" => null, 
                "enable_note" => null, 
                "enable_upload_image" => null, 
                "maximum_quantity_per_order" => null, 
                "notify_quantity" => null, 
                "require_shipping" => 0,
                "saleable" => 1,
                "html_price" => '<span class="price">‏٣٦٧٫٣٥ ر.س.‏</span>',
                "product" => [
                    "base_image_url" => "https://cdn.twsaa.com/home/23/cd2eeaba-784a-4272-a3f7-3e78262846d0.png"
                ],
            ]
        ],
        [
            'product' => [
                "id" => 74868, 
                "product_id" => 37809, 
                "parent_id" => null, 
                "sku" => "TBS50100", 
                "name" => "ورلد كير مناشف للاستعمال مرة واحدة 50×100، 50 قطعة", 
                "description" => "<p>النوع: مناشف للاستعمال مرة واحدة ناعمة على البشرة قدرة عالية على الامتصاص 50 قطعة</p>", 
                "url_key" => "tbs50100", 
                "new" => null, 
                "featured" => null, 
                "status" => 1, 
                "thumbnail" => null, 
                "price" => "73.86", 
                "cost" => "43.45", 
                "special_price" => null, 
                "special_price_from" => null, 
                "special_price_to" => null, 
                "delivery_time" => null, 
                "visible_individually" => 1, 
                "min_price" => "73.86", 
                "max_price" => "73.86", 
                "is_vat" => 1, 
                "short_description" => "<p>النوع: مناشف للاستعمال مرة واحدة ناعمة على البشرة قدرة عالية على الامتصاص 50 قطعة</p>", 
                "meta_title" => "ورلد كير مناشف للاستعمال مرة واحدة 50×100، 50 قطعة", 
                "meta_keywords" => null, 
                "meta_description" => "<p>النوع: مناشف للاستعمال مرة واحدة ناعمة على البشرة قدرة عالية على الامتصاص 50 قطعة</p>", 
                "width" => 0, 
                "height" => 0, 
                "depth" => 0, 
                "weight" => 0.1, 
                "unlimited_quantity" => "0", 
                "barcode" => null, 
                "brand_name" => "12", 
                "promotion_title" => null, 
                "subtitle" => null, 
                "image" => "", 
                "image_name" => "", 
                "image_label" => "", 
                "image_value" => "", 
                "image_url" => null, 
                "text" => "", 
                "text_name" => "", 
                "text_label" => "", 
                "text_value" => "", 
                "color" => "", 
                "color_name" => "", 
                "color_label" => "", 
                "color_value" => "", 
                "size" => null, 
                "size_label" => null, 
                "created_at" => "2024-03-21 12:19:51", 
                "updated_at" => "2024-10-15 17:37:32", 
                "deleted_at" => null, 
                "enable_note" => null, 
                "enable_upload_image" => null, 
                "maximum_quantity_per_order" => null, 
                "notify_quantity" => null, 
                "require_shipping" => 0,
                "saleable" => 1,
                "html_price" => '<span class="price">‏٣٦٧٫٣٥ ر.س.‏</span>',
                "product" => [
                    "base_image_url" => "https://cdn.twsaa.com/home/23/cd2eeaba-784a-4272-a3f7-3e78262846d0.png"
                ],
            ]
        ],
        [
            'product' => [
                "id" => 74866, 
                "product_id" => 37808, 
                "parent_id" => null, 
                "sku" => "QV-0766", 
                "name" => "كريم مرطب للبشرة الحساسة من كيو في 100 جم", 
                "description" => "<p>كريم ترطيب البشرة من كيو في، لتجديد البشرة الجافة بترطيب عالي التركيز. يحتوي على السكوالين ودهون طبيعية التي تمنحك بشره ناعمة ومرنة. الحل الامثل لمناطق الجسم شديدة الجفاف.</p>", 
                "url_key" => "qv-0766", 
                "new" => null, 
                "featured" => null, 
                "status" => 1, 
                "thumbnail" => null, 
                "price" => "68.46", 
                "cost" => "40.27", 
                "special_price" => null, 
                "special_price_from" => null, 
                "special_price_to" => null, 
                "delivery_time" => null, 
                "visible_individually" => 1, 
                "min_price" => "68.46", 
                "max_price" => "68.46", 
                "is_vat" => 1, 
                "short_description" => "<p>كريم ترطيب البشرة من كيو في، لتجديد البشرة الجافة بترطيب عالي التركيز. يحتوي على السكوالين ودهون طبيعية التي تمنحك بشره ناعمة ومرنة. الحل الامثل لمناطق الجسم شديدة الجفاف.</p>", 
                "meta_title" => "كريم مرطب للبشرة الحساسة من كيو في 100 جم", 
                "meta_keywords" => null, 
                "meta_description" => "<p>كريم ترطيب البشرة من كيو في، لتجديد البشرة الجافة بترطيب عالي التركيز. يحتوي على السكوالين ودهون طبيعية التي تمنحك بشره ناعمة ومرنة. الحل الامثل لمناطق الجسم شديدة الجفاف.</p>", 
                "width" => 0, 
                "height" => 0, 
                "depth" => 0, 
                "weight" => 0.1, 
                "unlimited_quantity" => "0", 
                "barcode" => null, 
                "brand_name" => "12", 
                "promotion_title" => null, 
                "subtitle" => null, 
                "image" => "", 
                "image_name" => "", 
                "image_label" => "", 
                "image_value" => "", 
                "image_url" => null, 
                "text" => "", 
                "text_name" => "", 
                "text_label" => "", 
                "text_value" => "", 
                "color" => "", 
                "color_name" => "", 
                "color_label" => "", 
                "color_value" => "", 
                "size" => null, 
                "size_label" => null, 
                "created_at" => "2024-03-21 12:19:47", 
                "updated_at" => "2024-10-15 17:37:39", 
                "deleted_at" => null, 
                "enable_note" => null, 
                "enable_upload_image" => null, 
                "maximum_quantity_per_order" => null, 
                "notify_quantity" => null, 
                "require_shipping" => 0,
                "saleable" => 1,
                "html_price" => '<span class="price">‏٣٦٧٫٣٥ ر.س.‏</span>',
                "product" => [
                    "base_image_url" => "https://cdn.twsaa.com/home/23/cd2eeaba-784a-4272-a3f7-3e78262846d0.png"
                ],
            ]
        ],
        [
            'product' => [
                "id" => 48795, 
                "product_id" => 24644, 
                "parent_id" => null, 
                "sku" => "C3-5-2-3", 
                "name" => "ميلي - شامبو أكليل الجبل والنعناع لتقوية الشعر 355 مل", 
                "description" => "<p>- شامبو تقوية الشعر بأكليل الجبل والنعناع من ميلي أورجانيكس، مملوء بالبيوتين، ينظف ويساعد على تقوية الشعر الضعيف والهش .</p>

                <p>- يغذي وينظف الشعر الجاف أو الضعيف أو الهش باستخدام هذا الشامبو المقوي للشعر الذي يعمل على تنشيط بصيلات الشعر .</p>
                
                <p>- يوفر رطوبة مكثفة لجميع أنواع الشعر بتركيبة لطيفة تغذي وتنظف وتساعد على تقوية الشعر الضعيف والهش .</p>
                
                <p>- مناسبة لمستويات الشعر ذات المسامية المنخفضة والعالية .</p>
                
                <p>- تم تطوير شامبو تقوية الشعر بالروزماري والنعناع من ميلي أورجانيكس لتنظيف شعرك بلطف مع توفير العناصر الغذائية الأساسية .</p>
                
                <p>- مناسب لجميع أنواع الشعر .</p>
                
                <p>المكونات : ماء (أكوا، أو)، الصوديوم C14-16 أوليفين سلفونات، كوكاميدوبروبيل البيتين، بولي كواترنيوم-7، كوكاميد MIPA، جليكول ستيرات، بوليكواترنيوم-10، بانثينول، بروبيلين جليكول، زيت النعناع بيبيريتا (النعناع)، زيت أوراق إكليل الجبل (إكليل الجبل). ، ثنائي الصوديومEDTA، فيتانتريول، * زيت بذور الأوربينيا أوليفيرا (الباباسو)، * زيت جذر الزنجبيل (الزنجبيل)، * زيت جوز الهند نوسيفيرا (جوز الهند)، مستخلص عشبة ذيل الحصان (Equisetum Arvense)، مستخلص لوسونيا إنيرميس (الحناء)، روزمارينوس أوفيسيناليس ( مستخلصأوراق إكليل الجبل، مستخلص زهرة أنثيميس نوبيليس (البابونج)، مستخلص أوراق سيمفيتوم أوفيسينال (السنفيتون)، مستخلص هومولوس لوبولوس (الجنجل)، مستخلص أورتيك ديويكا (نبات القراص)، العسل، البيوتين، زيت بذور ريسينوس كومونيس (الخروع)، فينوكسيإيثانول، البنزويك. حمض، إيثيل هكسيل جليسرين، جليسيريث-2 كاكاو، عطر (عطر) *مكونات عضوية معتمدة</p>
                
                <p>طريقة الاستخدام : وزعي كمية بسيطة على اليدين ودلكيها على فروة الراس المبللة بالماء للحصول على رغوة غنية</p>
                
                <p>ثم يشطف الشعر جيداً بالماء &nbsp;</p>", 
                "url_key" => "c3-5-2-3", 
                "new" => null, 
                "featured" => null, 
                "status" => 1, 
                "thumbnail" => null, 
                "price" => "67.83", 
                "cost" => "39.90", 
                "special_price" => null, 
                "special_price_from" => null, 
                "special_price_to" => null, 
                "delivery_time" => null, 
                "visible_individually" => 1, 
                "min_price" => "67.83", 
                "max_price" => "67.83", 
                "is_vat" => 1, 
                "short_description" => "<p>- شامبو تقوية الشعر بأكليل الجبل والنعناع من ميلي أورجانيكس، مملوء بالبيوتين، ينظف ويساعد على تقوية الشعر الضعيف والهش .</p>

                    <p>- يغذي وينظف الشعر الجاف أو الضعيف أو الهش باستخدام هذا الشامبو المقوي للشعر الذي يعمل على تنشيط بصيلات الشعر .</p>
                    
                    <p>- يوفر رطوبة مكثفة لجميع أنواع الشعر بتركيبة لطيفة تغذي وتنظف وتساعد على تقوية الشعر الضعيف والهش .</p>
                    
                    <p>- مناسبة لمستويات الشعر ذات المسامية المنخفضة والعالية .</p>
                    
                    <p>- تم تطوير شامبو تقوية الشعر بالروزماري والنعناع من ميلي أورجانيكس لتنظيف شعرك بلطف مع توفير العناصر الغذائية الأساسية .</p>
                    
                    <p>- مناسب لجميع أنواع الشعر .</p>
                    
                    <p>المكونات : ماء (أكوا، أو)، الصوديوم C14-16 أوليفين سلفونات، كوكاميدوبروبيل البيتين، بولي كواترنيوم-7، كوكاميد MIPA، جليكول ستيرات، بوليكواترنيوم-10، بانثينول، بروبيلين جليكول، زيت النعناع بيبيريتا (النعناع)، زيت أوراق إكليل الجبل (إكليل الجبل). ، ثنائي الصوديومEDTA، فيتانتريول، * زيت بذور الأوربينيا أوليفيرا (الباباسو)، * زيت جذر الزنجبيل (الزنجبيل)، * زيت جوز الهند نوسيفيرا (جوز الهند)، مستخلص عشبة ذيل الحصان (Equisetum Arvense)، مستخلص لوسونيا إنيرميس (الحناء)، روزمارينوس أوفيسيناليس ( مستخلصأوراق إكليل الجبل، مستخلص زهرة أنثيميس نوبيليس (البابونج)، مستخلص أوراق سيمفيتوم أوفيسينال (السنفيتون)، مستخلص هومولوس لوبولوس (الجنجل)، مستخلص أورتيك ديويكا (نبات القراص)، العسل، البيوتين، زيت بذور ريسينوس كومونيس (الخروع)، فينوكسيإيثانول، البنزويك. حمض، إيثيل هكسيل جليسرين، جليسيريث-2 كاكاو، عطر (عطر) *مكونات عضوية معتمدة</p>
                    
                    <p>طريقة الاستخدام : وزعي كمية بسيطة على اليدين ودلكيها على فروة الراس المبللة بالماء للحصول على رغوة غنية</p>
                    
                    <p>ثم يشطف الشعر جيداً بالماء &nbsp;</p>", 
                "meta_title" => "ميلي - شامبو أكليل الجبل والنعناع لتقوية الشعر 355 مل", 
                "meta_keywords" => null, 
                "meta_description" => "<p>- شامبو تقوية الشعر بأكليل الجبل والنعناع من ميلي أورجانيكس، مملوء بالبيوتين، ينظف ويساعد على تقوية الشعر الضعيف والهش .</p>

                <p>- يغذي وينظف الشعر الجاف أو الضعيف أو الهش باستخدام هذا الشامبو المقوي للشعر الذي يعمل على تنشيط بصيلات الشعر .</p>
                
                <p>- يوفر رطوبة مكثفة لجميع أنواع الشعر بتركيبة لطيفة تغذي وتنظف وتساعد على تقوية الشعر الضعيف والهش .</p>
                
                <p>- مناسبة لمستويات الشعر ذات المسامية المنخفضة والعالية .</p>
                
                <p>- تم تطوير شامبو تقوية الشعر بالروزماري والنعناع من ميلي أورجانيكس لتنظيف شعرك بلطف مع توفير العناصر الغذائية الأساسية .</p>
                
                <p>- مناسب لجميع أنواع الشعر .</p>
                
                <p>المكونات : ماء (أكوا، أو)، الصوديوم C14-16 أوليفين سلفونات، كوكاميدوبروبيل البيتين، بولي كواترنيوم-7، كوكاميد MIPA، جليكول ستيرات، بوليكواترنيوم-10، بانثينول، بروبيلين جليكول، زيت النعناع بيبيريتا (النعناع)، زيت أوراق إكليل الجبل (إكليل الجبل). ، ثنائي الصوديومEDTA، فيتانتريول، * زيت بذور الأوربينيا أوليفيرا (الباباسو)، * زيت جذر الزنجبيل (الزنجبيل)، * زيت جوز الهند نوسيفيرا (جوز الهند)، مستخلص عشبة ذيل الحصان (Equisetum Arvense)، مستخلص لوسونيا إنيرميس (الحناء)، روزمارينوس أوفيسيناليس ( مستخلصأوراق إكليل الجبل، مستخلص زهرة أنثيميس نوبيليس (البابونج)، مستخلص أوراق سيمفيتوم أوفيسينال (السنفيتون)، مستخلص هومولوس لوبولوس (الجنجل)، مستخلص أورتيك ديويكا (نبات القراص)، العسل، البيوتين، زيت بذور ريسينوس كومونيس (الخروع)، فينوكسيإيثانول، البنزويك. حمض، إيثيل هكسيل جليسرين، جليسيريث-2 كاكاو، عطر (عطر) *مكونات عضوية معتمدة</p>
                
                <p>طريقة الاستخدام : وزعي كمية بسيطة على اليدين ودلكيها على فروة الراس المبللة بالماء للحصول على رغوة غنية</p>
                
                <p>ثم يشطف الشعر جيداً بالماء &nbsp;</p>", 
                "width" => 0, 
                "height" => 0, 
                "depth" => 0, 
                "weight" => 0.3, 
                "unlimited_quantity" => "0", 
                "barcode" => null, 
                "brand_name" => "12", 
                "promotion_title" => null, 
                "subtitle" => null, 
                "image" => "", 
                "image_name" => "", 
                "image_label" => "", 
                "image_value" => "", 
                "image_url" => null, 
                "text" => "", 
                "text_name" => "", 
                "text_label" => "", 
                "text_value" => "", 
                "color" => "", 
                "color_name" => "", 
                "color_label" => "", 
                "color_value" => "", 
                "size" => null, 
                "size_label" => null, 
                "created_at" => "2024-02-08 15:39:54", 
                "updated_at" => "2024-10-15 17:37:44", 
                "deleted_at" => null, 
                "enable_note" => null, 
                "enable_upload_image" => null, 
                "maximum_quantity_per_order" => null, 
                "notify_quantity" => null, 
                "require_shipping" => 0,
                "saleable" => 1,
                "html_price" => '<span class="price">‏٣٦٧٫٣٥ ر.س.‏</span>',
                "product" => [
                    "base_image_url" => "https://cdn.twsaa.com/home/23/cd2eeaba-784a-4272-a3f7-3e78262846d0.png"
                ],
            ]
        ],
        [
            'product' => [
                "id" => 48793, 
                "product_id" => 24643, 
                "parent_id" => null, 
                "sku" => "C3-5-2-4", 
                "name" => "ميلي - قناع تقوية الشعر بأكليل الجبل والنعناع 340 جم", 
                "description" => "<p>تغذية عميقة للشعر التالف: يدمج قناعنا الغني بالمغذيات بالبيوتين بالصبار والعسل ومزيج من الزيوت العطرية المغذية لخلق مظهر مكثف</p>

                    <p>قومي بتغذية وترطيب وتقوية شعرك في وقت واحد مع هذه التركيبة الغنية بالمغذيات مع مكونات عضوية طبيعية مثل إكليل الجبل وزيت المنثا.</p>
                    
                    <p>قناع مجدد ومرطب عميق للشعر الجاف المتعطش.</p>
                    
                    <p>تغذي وترطب وتقوي كل ذلك في وقت واحد مع هذه التركيبة الغنية بالمغذيات.</p>
                    
                    <p>تم تطويره لتلبية احتياجات شعرك</p>
                    
                    <p>مصنوع من مكونات عضوية معتمدة ومحمل بالبيوتين</p>
                    
                    <p>تم تطوير قناع تقوية الشعر بالروزماري والنعناع مع وضع أكبر احتياجات شعرك في الاعتبار.</p>
                    
                    <p>طريقة الاستخدام:</p>
                    
                    <p>بعد غسل الشعر بالشامبو بشامبو مقوي بالروزماري والنعناع ، قم بتنعيمه بالتساوي من خلال الشعر الرطب من الجذور إلى الأطراف. اتركيه خلال 15-20 دقيقة. شطف جيدا.</p>
                    
                    <p>المكونات:</p>
                    
                    <p>ماء (أكوا ، ماء) ، بهينتريمونيوم ميثوسلفات ، كحول سيتريل ، عصير أوراق الصبار بربادنسيس (مزوَّد اللون) ، زيت اللوز الحلو (اللوز الحلو) ، زيت بذور هيليانثوس أنوس (دوار الشمس) ، زيت فاكهة أوليا يوروبا (زيتون) ، كوبرنيكوبا سيريفيرا ) الشمع ، بولي سوربات -20 ، زيت بذور المكاديميا إنتجريفوليا ، جليسريل ستيرات ، زبدة بوتيروسبيرموم باركي (الشيا) ، توكوفيريل أسيتات ، * زيت بذور Orbignya Oleifera (باباسو) ، * Zingiber Officinale (الزنجبيل) زيت الجذر ، * جوز الهند Nucifera ، بانثينول ، فيتانتريول ، زيت النعناع ، زيت أوراق إكليل الجبل (إكليل الجبل) ، زيت بذور سيموندسيا تشينينسيس (الجوجوبا) ، زيت بذور ريسينوس كومونيس (خروع) ، مستخلص عشب ذيل الحصان ، مستخلص لاوسونيا إنرميس (حناء) (إكليل الجبل) مستخلص أوراق الشجر ، مستخلص زهرة Anthemis Nobilis (البابونج) ، مستخلص السيمفيتم الرسمي (أوراق الكومفري) ، مستخلص Humulus Lupulus (القفزات) ، خلاصة Urtica Dioica (نبات القراص) ، العسل ، البيوتين ، كلوريد السيتريمونيوم ، Sesamum Indicum ( السمسم) زيت بذور ، فينوكسي إيثانول ، حمض البنزويك ، إيثيل هكسيل جليسرين ، جلسريث -2 كوكوات &nbsp;</p>", 
                "url_key" => "c3-5-2-4", 
                "new" => null, 
                "featured" => null, 
                "status" => 1, 
                "thumbnail" => null, 
                "price" => "71.50", 
                "cost" => "42.06", 
                "special_price" => null, 
                "special_price_from" => null, 
                "special_price_to" => null, 
                "delivery_time" => null, 
                "visible_individually" => 1, 
                "min_price" => "71.50", 
                "max_price" => "71.50", 
                "is_vat" => 1, 
                "short_description" => "<p>تغذية عميقة للشعر التالف: يدمج قناعنا الغني بالمغذيات بالبيوتين بالصبار والعسل ومزيج من الزيوت العطرية المغذية لخلق مظهر مكثف</p>

                    <p>قومي بتغذية وترطيب وتقوية شعرك في وقت واحد مع هذه التركيبة الغنية بالمغذيات مع مكونات عضوية طبيعية مثل إكليل الجبل وزيت المنثا.</p>
                    
                    <p>قناع مجدد ومرطب عميق للشعر الجاف المتعطش.</p>
                    
                    <p>تغذي وترطب وتقوي كل ذلك في وقت واحد مع هذه التركيبة الغنية بالمغذيات.</p>
                    
                    <p>تم تطويره لتلبية احتياجات شعرك</p>
                    
                    <p>مصنوع من مكونات عضوية معتمدة ومحمل بالبيوتين</p>
                    
                    <p>تم تطوير قناع تقوية الشعر بالروزماري والنعناع مع وضع أكبر احتياجات شعرك في الاعتبار.</p>
                    
                    <p>طريقة الاستخدام:</p>
                    
                    <p>بعد غسل الشعر بالشامبو بشامبو مقوي بالروزماري والنعناع ، قم بتنعيمه بالتساوي من خلال الشعر الرطب من الجذور إلى الأطراف. اتركيه خلال 15-20 دقيقة. شطف جيدا.</p>
                    
                    <p>المكونات:</p>
                    
                    <p>ماء (أكوا ، ماء) ، بهينتريمونيوم ميثوسلفات ، كحول سيتريل ، عصير أوراق الصبار بربادنسيس (مزوَّد اللون) ، زيت اللوز الحلو (اللوز الحلو) ، زيت بذور هيليانثوس أنوس (دوار الشمس) ، زيت فاكهة أوليا يوروبا (زيتون) ، كوبرنيكوبا سيريفيرا ) الشمع ، بولي سوربات -20 ، زيت بذور المكاديميا إنتجريفوليا ، جليسريل ستيرات ، زبدة بوتيروسبيرموم باركي (الشيا) ، توكوفيريل أسيتات ، * زيت بذور Orbignya Oleifera (باباسو) ، * Zingiber Officinale (الزنجبيل) زيت الجذر ، * جوز الهند Nucifera ، بانثينول ، فيتانتريول ، زيت النعناع ، زيت أوراق إكليل الجبل (إكليل الجبل) ، زيت بذور سيموندسيا تشينينسيس (الجوجوبا) ، زيت بذور ريسينوس كومونيس (خروع) ، مستخلص عشب ذيل الحصان ، مستخلص لاوسونيا إنرميس (حناء) (إكليل الجبل) مستخلص أوراق الشجر ، مستخلص زهرة Anthemis Nobilis (البابونج) ، مستخلص السيمفيتم الرسمي (أوراق الكومفري) ، مستخلص Humulus Lupulus (القفزات) ، خلاصة Urtica Dioica (نبات القراص) ، العسل ، البيوتين ، كلوريد السيتريمونيوم ، Sesamum Indicum ( السمسم) زيت بذور ، فينوكسي إيثانول ، حمض البنزويك ، إيثيل هكسيل جليسرين ، جلسريث -2 كوكوات &nbsp;</p>", 
                "meta_title" => "ميلي - قناع تقوية الشعر بأكليل الجبل والنعناع 340 جم", 
                "meta_keywords" => null, 
                "meta_description" => "<p>تغذية عميقة للشعر التالف: يدمج قناعنا الغني بالمغذيات بالبيوتين بالصبار والعسل ومزيج من الزيوت العطرية المغذية لخلق مظهر مكثف</p>

                    <p>قومي بتغذية وترطيب وتقوية شعرك في وقت واحد مع هذه التركيبة الغنية بالمغذيات مع مكونات عضوية طبيعية مثل إكليل الجبل وزيت المنثا.</p>
                    
                    <p>قناع مجدد ومرطب عميق للشعر الجاف المتعطش.</p>
                    
                    <p>تغذي وترطب وتقوي كل ذلك في وقت واحد مع هذه التركيبة الغنية بالمغذيات.</p>
                    
                    <p>تم تطويره لتلبية احتياجات شعرك</p>
                    
                    <p>مصنوع من مكونات عضوية معتمدة ومحمل بالبيوتين</p>
                    
                    <p>تم تطوير قناع تقوية الشعر بالروزماري والنعناع مع وضع أكبر احتياجات شعرك في الاعتبار.</p>
                    
                    <p>طريقة الاستخدام:</p>
                    
                    <p>بعد غسل الشعر بالشامبو بشامبو مقوي بالروزماري والنعناع ، قم بتنعيمه بالتساوي من خلال الشعر الرطب من الجذور إلى الأطراف. اتركيه خلال 15-20 دقيقة. شطف جيدا.</p>
                    
                    <p>المكونات:</p>
                    
                    <p>ماء (أكوا ، ماء) ، بهينتريمونيوم ميثوسلفات ، كحول سيتريل ، عصير أوراق الصبار بربادنسيس (مزوَّد اللون) ، زيت اللوز الحلو (اللوز الحلو) ، زيت بذور هيليانثوس أنوس (دوار الشمس) ، زيت فاكهة أوليا يوروبا (زيتون) ، كوبرنيكوبا سيريفيرا ) الشمع ، بولي سوربات -20 ، زيت بذور المكاديميا إنتجريفوليا ، جليسريل ستيرات ، زبدة بوتيروسبيرموم باركي (الشيا) ، توكوفيريل أسيتات ، * زيت بذور Orbignya Oleifera (باباسو) ، * Zingiber Officinale (الزنجبيل) زيت الجذر ، * جوز الهند Nucifera ، بانثينول ، فيتانتريول ، زيت النعناع ، زيت أوراق إكليل الجبل (إكليل الجبل) ، زيت بذور سيموندسيا تشينينسيس (الجوجوبا) ، زيت بذور ريسينوس كومونيس (خروع) ، مستخلص عشب ذيل الحصان ، مستخلص لاوسونيا إنرميس (حناء) (إكليل الجبل) مستخلص أوراق الشجر ، مستخلص زهرة Anthemis Nobilis (البابونج) ، مستخلص السيمفيتم الرسمي (أوراق الكومفري) ، مستخلص Humulus Lupulus (القفزات) ، خلاصة Urtica Dioica (نبات القراص) ، العسل ، البيوتين ، كلوريد السيتريمونيوم ، Sesamum Indicum ( السمسم) زيت بذور ، فينوكسي إيثانول ، حمض البنزويك ، إيثيل هكسيل جليسرين ، جلسريث -2 كوكوات &nbsp;</p>", 
                "width" => 0, 
                "height" => 0, 
                "depth" => 0, 
                "weight" => 0.3, 
                "unlimited_quantity" => "0", 
                "barcode" => null, 
                "brand_name" => "12", 
                "promotion_title" => null, 
                "subtitle" => null, 
                "image" => "", 
                "image_name" => "", 
                "image_label" => "", 
                "image_value" => "", 
                "image_url" => null, 
                "text" => "", 
                "text_name" => "", 
                "text_label" => "", 
                "text_value" => "", 
                "color" => "", 
                "color_name" => "", 
                "color_label" => "", 
                "color_value" => "", 
                "size" => null, 
                "size_label" => null, 
                "created_at" => "2024-02-08 15:39:42", 
                "updated_at" => "2024-10-15 17:37:50", 
                "deleted_at" => null, 
                "enable_note" => null, 
                "enable_upload_image" => null, 
                "maximum_quantity_per_order" => null, 
                "notify_quantity" => null, 
                "require_shipping" => 0,
                "saleable" => 1,
                "html_price" => '<span class="price">‏٣٦٧٫٣٥ ر.س.‏</span>',
                "product" => [
                    "base_image_url" => "https://cdn.twsaa.com/home/23/cd2eeaba-784a-4272-a3f7-3e78262846d0.png"
                ],
            ]
        ],
        [
            'product' => [
                "id" => 48791, 
                "product_id" => 24642, 
                "parent_id" => null, 
                "sku" => "C3-5-2-5", 
                "name" => "ميلي - بلسم أكليل الجبل والنعناع لتقوية الشعر 355 مل", 
                "description" => "<p>تم تطوير بلسم تقوية الشعر الذي لا يحتاج إلى شطفه بإكليل الجبل والنعناع لتلبية احتياجات شعرك.</p>

                    <p>&bull; محمل بالبيوتين &bull; تألق مذهل &bull; يحبس الرطوبة</p>
                    
                    <p>غني بالبيوتين وإكليل الجبل، هذا الترطيب الذي لا يترك أثراً مع الحماية والترطيب.</p>
                    
                    <p>المكونات: ماء، جليسرين، بيهنتريمونيوم ميثوسولفات، كحول سيتريل، كحول ستياريلي، زيت برونوس أميغدالوس دولسيس (اللوز الحلو)، كحول سيتيل، سيترات ثلاثي إيثيل، زيت فاكهة أوليا يوروبيا (الزيتون)، عطر، بيوتين، زيت بيرسي جراتيسيما (الأفوكادو)، سمسم. زيت بذور إنديكوم (السمسم)، سيتيريث-20، زيت أوراق إكليل الجبل (إكليل الجبل)، زيت جذر الزنجبيل (الزنجبيل)، زيت النعناع بيبيريتا (النعناع)، البروبيلين جليكول، مستخلص زهرة البابونج ريكوتيتا (ماتريكاريا)، فاكهة/أوراق نبات فاكسينيوم ميرتيلوس. مستخلص، مستخلص Saccharum Officinarum (قصب السكر)، مستخلص فاكهة Citrus Aurantium Dulcis (البرتقال)، مستخلص فاكهة الليمون الحمضي (الليمون)، مستخلص Acer Saccharum (سكر القيقب)، فينوكسي إيثانول، كابريليل جلايكول، بوليسوربات 20.</p>", 
                "url_key" => "c3-5-2-5", 
                "new" => null, 
                "featured" => null, 
                "status" => 1, 
                "thumbnail" => null, 
                "price" => "67.83", 
                "cost" => "39.90", 
                "special_price" => null, 
                "special_price_from" => null, 
                "special_price_to" => null, 
                "delivery_time" => null, 
                "visible_individually" => 1, 
                "min_price" => "67.83", 
                "max_price" => "67.83", 
                "is_vat" => 1, 
                "short_description" => "<p>تم تطوير بلسم تقوية الشعر الذي لا يحتاج إلى شطفه بإكليل الجبل والنعناع لتلبية احتياجات شعرك.</p>

                    <p>&bull; محمل بالبيوتين &bull; تألق مذهل &bull; يحبس الرطوبة</p>
                    
                    <p>غني بالبيوتين وإكليل الجبل، هذا الترطيب الذي لا يترك أثراً مع الحماية والترطيب.</p>
                    
                    <p>المكونات: ماء، جليسرين، بيهنتريمونيوم ميثوسولفات، كحول سيتريل، كحول ستياريلي، زيت برونوس أميغدالوس دولسيس (اللوز الحلو)، كحول سيتيل، سيترات ثلاثي إيثيل، زيت فاكهة أوليا يوروبيا (الزيتون)، عطر، بيوتين، زيت بيرسي جراتيسيما (الأفوكادو)، سمسم. زيت بذور إنديكوم (السمسم)، سيتيريث-20، زيت أوراق إكليل الجبل (إكليل الجبل)، زيت جذر الزنجبيل (الزنجبيل)، زيت النعناع بيبيريتا (النعناع)، البروبيلين جليكول، مستخلص زهرة البابونج ريكوتيتا (ماتريكاريا)، فاكهة/أوراق نبات فاكسينيوم ميرتيلوس. مستخلص، مستخلص Saccharum Officinarum (قصب السكر)، مستخلص فاكهة Citrus Aurantium Dulcis (البرتقال)، مستخلص فاكهة الليمون الحمضي (الليمون)، مستخلص Acer Saccharum (سكر القيقب)، فينوكسي إيثانول، كابريليل جلايكول، بوليسوربات 20.</p>", 
                "meta_title" => "ميلي - بلسم أكليل الجبل والنعناع لتقوية الشعر 355 مل", 
                "meta_keywords" => null, 
                "meta_description" => "<p>تم تطوير بلسم تقوية الشعر الذي لا يحتاج إلى شطفه بإكليل الجبل والنعناع لتلبية احتياجات شعرك.</p>

                    <p>&bull; محمل بالبيوتين &bull; تألق مذهل &bull; يحبس الرطوبة</p>
                    
                    <p>غني بالبيوتين وإكليل الجبل، هذا الترطيب الذي لا يترك أثراً مع الحماية والترطيب.</p>
                    
                    <p>المكونات: ماء، جليسرين، بيهنتريمونيوم ميثوسولفات، كحول سيتريل، كحول ستياريلي، زيت برونوس أميغدالوس دولسيس (اللوز الحلو)، كحول سيتيل، سيترات ثلاثي إيثيل، زيت فاكهة أوليا يوروبيا (الزيتون)، عطر، بيوتين، زيت بيرسي جراتيسيما (الأفوكادو)، سمسم. زيت بذور إنديكوم (السمسم)، سيتيريث-20، زيت أوراق إكليل الجبل (إكليل الجبل)، زيت جذر الزنجبيل (الزنجبيل)، زيت النعناع بيبيريتا (النعناع)، البروبيلين جليكول، مستخلص زهرة البابونج ريكوتيتا (ماتريكاريا)، فاكهة/أوراق نبات فاكسينيوم ميرتيلوس. مستخلص، مستخلص Saccharum Officinarum (قصب السكر)، مستخلص فاكهة Citrus Aurantium Dulcis (البرتقال)، مستخلص فاكهة الليمون الحمضي (الليمون)، مستخلص Acer Saccharum (سكر القيقب)، فينوكسي إيثانول، كابريليل جلايكول، بوليسوربات 20.</p>", 
                "width" => 0, 
                "height" => 0, 
                "depth" => 0, 
                "weight" => 0.3, 
                "unlimited_quantity" => "0", 
                "barcode" => null, 
                "brand_name" => "12", 
                "promotion_title" => null, 
                "subtitle" => null, 
                "image" => "", 
                "image_name" => "", 
                "image_label" => "", 
                "image_value" => "", 
                "image_url" => null, 
                "text" => "", 
                "text_name" => "", 
                "text_label" => "", 
                "text_value" => "", 
                "color" => "", 
                "color_name" => "", 
                "color_label" => "", 
                "color_value" => "", 
                "size" => null, 
                "size_label" => null, 
                "created_at" => "2024-02-08 15:39:37", 
                "updated_at" => "2024-10-15 17:37:55", 
                "deleted_at" => null, 
                "enable_note" => null, 
                "enable_upload_image" => null, 
                "maximum_quantity_per_order" => null, 
                "notify_quantity" => null, 
                "require_shipping" => 0,
                "saleable" => 1,
                "html_price" => '<span class="price">‏٣٦٧٫٣٥ ر.س.‏</span>',
                "product" => [
                    "base_image_url" => "https://cdn.twsaa.com/home/23/cd2eeaba-784a-4272-a3f7-3e78262846d0.png"
                ],
            ]
        ],
        [
            'product' => [
                "id" => 48789, 
                "product_id" => 24641, 
                "parent_id" => null, 
                "sku" => "C3-5-5-7", 
                "name" => "ميلي - بلسم مقوي للشعر باكليل الجبل والنعناع 355 مل", 
                "description" => "<p>يوفر بلسم تقوية الروزماري والنعناع التوازن المثالي بين القوة والرطوبة لتحسين الحالة العامة للشعر وفروة الرأس. ينعم ويفك التشابك على الفور لزيادة سهولة التحكم. يدعم شعر أطول وأكثر صحة.</p>

                <ul>
                    <li>يوفر التوازن المثالي بين القوة والرطوبة.</li>
                    <li>غني بالبيوتين ويمنحك لمعاناً مذهلاً.</li>
                    <li>ينعم ويفك التشابك على الفور.</li>
                    <li>يدعم شعر أطول وأكثر صحة.</li>
                    <li>خالي من البارابين، الكبريتات، البارافينات، الزيوت المعدنية، DEA.</li>
                    <li>تركيبه لجميع أنواع الشعر.</li>
                </ul>", 
                "url_key" => "c3-5-5-7", 
                "new" => null, 
                "featured" => null, 
                "status" => 1, 
                "thumbnail" => null, 
                "price" => "73.25", 
                "cost" => "43.09", 
                "special_price" => null, 
                "special_price_from" => null, 
                "special_price_to" => null, 
                "delivery_time" => null, 
                "visible_individually" => 1, 
                "min_price" => "73.25", 
                "max_price" => "73.25", 
                "is_vat" => 1, 
                "short_description" => "<p>يوفر بلسم تقوية الروزماري والنعناع التوازن المثالي بين القوة والرطوبة لتحسين الحالة العامة للشعر وفروة الرأس. ينعم ويفك التشابك على الفور لزيادة سهولة التحكم. يدعم شعر أطول وأكثر صحة.</p>

                <ul>
                    <li>يوفر التوازن المثالي بين القوة والرطوبة.</li>
                    <li>غني بالبيوتين ويمنحك لمعاناً مذهلاً.</li>
                    <li>ينعم ويفك التشابك على الفور.</li>
                    <li>يدعم شعر أطول وأكثر صحة.</li>
                    <li>خالي من البارابين، الكبريتات، البارافينات، الزيوت المعدنية، DEA.</li>
                    <li>تركيبه لجميع أنواع الشعر.</li>
                </ul>", 
                "meta_title" => "ميلي - بلسم مقوي للشعر باكليل الجبل والنعناع 355 مل", 
                "meta_keywords" => null, 
                "meta_description" => "<p>يوفر بلسم تقوية الروزماري والنعناع التوازن المثالي بين القوة والرطوبة لتحسين الحالة العامة للشعر وفروة الرأس. ينعم ويفك التشابك على الفور لزيادة سهولة التحكم. يدعم شعر أطول وأكثر صحة.</p>

                <ul>
                    <li>يوفر التوازن المثالي بين القوة والرطوبة.</li>
                    <li>غني بالبيوتين ويمنحك لمعاناً مذهلاً.</li>
                    <li>ينعم ويفك التشابك على الفور.</li>
                    <li>يدعم شعر أطول وأكثر صحة.</li>
                    <li>خالي من البارابين، الكبريتات، البارافينات، الزيوت المعدنية، DEA.</li>
                    <li>تركيبه لجميع أنواع الشعر.</li>
                </ul>", 
                "width" => 0, 
                "height" => 0, 
                "depth" => 0, 
                "weight" => 0.4, 
                "unlimited_quantity" => "0", 
                "barcode" => null, 
                "brand_name" => "12", 
                "promotion_title" => null, 
                "subtitle" => null, 
                "image" => "", 
                "image_name" => "", 
                "image_label" => "", 
                "image_value" => "", 
                "image_url" => null, 
                "text" => "", 
                "text_name" => "", 
                "text_label" => "", 
                "text_value" => "", 
                "color" => "", 
                "color_name" => "", 
                "color_label" => "", 
                "color_value" => "", 
                "size" => null, 
                "size_label" => null, 
                "created_at" => "2024-02-08 15:39:33", 
                "updated_at" => "2024-10-15 17:38:00", 
                "deleted_at" => null, 
                "enable_note" => null, 
                "enable_upload_image" => null, 
                "maximum_quantity_per_order" => null, 
                "notify_quantity" => null, 
                "require_shipping" => 0,
                "saleable" => 1,
                "html_price" => '<span class="price">‏٣٦٧٫٣٥ ر.س.‏</span>',
                "product" => [
                    "base_image_url" => "https://cdn.twsaa.com/home/23/cd2eeaba-784a-4272-a3f7-3e78262846d0.png"
                ],
            ]
        ]
    ]; 

    return $context;
}
