<?php
namespace App\Twig;

use Twig\Extension\AbstractExtension;
use Twig\TwigFilter;
use Twig\TwigFunction;
use Twig\TwigTag;

class CustomTwigExtensions extends AbstractExtension
{
    private $translator;

    // Inject the translator instance via constructor
    public function __construct(Translator $translator)
    {
        $this->translator = $translator;
    }


    public function getFunctions()
    {
        return [
            new TwigFunction('getCompany', [$this, 'getCompany']),
            new TwigFunction('getConfig', [$this, 'getConfig']),
            new TwigFunction('getSuperConfig', [$this, 'getSuperConfig']),
            new TwigFunction('getFunction', [$this, 'getFunction']),
            new TwigFunction('jsonDecode', [$this, 'jsonDecode']),
            new TwigFunction('getDownloadableLinkItem', [$this, 'getDownloadableLinkItem']),
            new TwigFunction('formatPrice', [$this, 'formatPrice']),
            new TwigFunction('trans', [$this, 'translate']),
            new TwigFunction('csrf_token', [$this, 'csrf_token']),
            new TwigFunction('csrf_field', [$this, 'csrf_field']),
            new TwigFunction('route', [$this, 'route']),
        ];
    }

    public function getCompany()
    {
        // return company()->getCurrent();
    }

    public function getConfig($name)
    {
        // return core()->getConfigData($name);
    }
    
    public function getSuperConfig($name)
    {
        // return core()->superConfig($name);
    }
    
    public function getFunction($name)
    {
        // print_r($name);
        return $this->$name();
    }

    public function jsonDecode($name)
    {
        return(json_decode($name, true));
    }
    
    public function getDownloadableLinkItem($order_id,$id,$option_id)
    {
        // return core()->getDownloadableLinkItem($order_id,$id,$option_id);
    }
    
    public function formatPrice($price, $currency_code)
    {
        return $currency_code ." ". $price;
    }

    public function translate($message)
    {
        return $this->translator->translate($message);
    }

    public function csrf_token()
    {
        return '<input type="hidden" name="_token" value="">';
    }
    public function csrf_field()
    {
        return;
    }

    public function getFilters()
    {
        return [
            new \Twig\TwigFilter('trans', [$this, 'translate']),  // Register as a filter instead of a function
        ];
    }
    
    // return data
    public function locale()
    {
        return 'ar';
    }
    
    public function assets()
    {
        return '/assets/';
    }

    public function getAllLocales()
    {
        $data = [
            [
                "id" => 54, 
                "code" => "ar", 
                "name" => "Arabic", 
                "direction" => "rtl", 
            ], 
            [
                "id" => 55, 
                "code" => "en", 
                "name" => "English", 
                "direction" => "ltr", 
            ] 
        ]; 
        return $data;
        
    }

    public function getActiveChannelCurrency()
    {
        $data = [
            [
                "id" => 24,
                "code" => "SAR", 
                "name" => "سعودي ر.س", 
                "symbol" => "ر.س", 
            ], 
            [
                "id" => 73, 
                "code" => "EUR", 
                "name" => "يورو", 
                "symbol" => "€", 
            ], 
            [
               "id" => 74, 
               "code" => "AED", 
               "name" => "درهم اماراتي", 
               "symbol" => "د.إ", 
            ], 
            [
                "id" => 75, 
                "code" => "BHD", 
                "name" => "دينار بحريني", 
                "symbol" => "د.ب", 
            ], 
            [
                "id" => 76, 
                "code" => "OMR", 
                "name" => "ريال عماني", 
                "symbol" => "ر.ع", 
            ], 
            [
                "id" => 77, 
                "code" => "QAR", 
                "name" => "ريال قطري", 
                "symbol" => "ر.ق", 
            ] 
        ]; 
        return $data;
    }

    public function cartItemsCount()
    {
        return '0';
    }
    public function customerWallet()
    {
        return '0';
    }
    public function dataTableOrder()
    {
        return [
            [
               "id" => 1696, 
               "increment_id" => 1696, 
               "status" => "processed", 
               "created_at" => "2024-11-03T12:05:16.000000Z", 
               "grand_total" => "1.20", 
               "order_currency_code" => "SAR" 
            ], 
            [
                "id" => 1695, 
                "increment_id" => 1695, 
                "status" => "pending_payment", 
                "created_at" => "2024-10-23T08:10:47.000000Z", 
                "grand_total" => "283.04", 
                "order_currency_code" => "SAR" 
            ], 
            [
                "id" => 1694, 
                "increment_id" => 1694, 
                "status" => "pending_payment", 
                "created_at" => "2024-10-23T08:06:39.000000Z", 
                "grand_total" => "92.58", 
                "order_currency_code" => "SAR" 
            ], 
            [
                "id" => 1693, 
                "increment_id" => 1693, 
                "status" => "pending_payment", 
                "created_at" => "2024-10-17T08:23:24.000000Z", 
                "grand_total" => "369.85", 
                "order_currency_code" => "SAR" 
                ], 
            [
                "id" => 1692, 
                "increment_id" => 1692, 
                "status" => "pending_payment", 
                "created_at" => "2024-10-17T08:18:36.000000Z", 
                "grand_total" => "107.42", 
                "order_currency_code" => "SAR" 
            ], 
            [
                "id" => 1691, 
                "increment_id" => 1691, 
                "status" => "pending_payment", 
                "created_at" => "2024-10-09T09:08:41.000000Z", 
                "grand_total" => "369.85", 
                "order_currency_code" => "SAR" 
            ], 
            [
                "id" => 1690, 
                "increment_id" => 1690, 
                "status" => "pending_payment", 
                "created_at" => "2024-10-09T08:28:20.000000Z", 
                "grand_total" => "15.85", 
                "order_currency_code" => "SAR" 
            ], 
            [
                "id" => 1689, 
                "increment_id" => 1689, 
                "status" => "pending_payment", 
                "created_at" => "2024-10-09T08:24:44.000000Z", 
                "grand_total" => "247.98", 
                "order_currency_code" => "SAR" 
            ], 
            [
                "id" => 1617, 
                "increment_id" => 1617, 
                "status" => "processed", 
                "created_at" => "2024-09-03T13:07:43.000000Z", 
                "grand_total" => "220.38", 
                "order_currency_code" => "SAR" 
            ], 
            [
                "id" => 1616, 
                "increment_id" => 1616, 
                "status" => "pending_payment", 
                "created_at" => "2024-09-03T13:01:21.000000Z", 
                "grand_total" => "220.38", 
                "order_currency_code" => "SAR" 
            ] 
        ];
    }
    public function dataTableWallet()
    {
        return [
            [
               "id" => 19, 
               "type" => "credit", 
               "amount" => "40.26", 
               "status" => "approved", 
               "notes" => "asdf", 
               "customer_id" => 1, 
               "order_id" => 1573, 
               "created_at" => "2024-07-03T13:15:01.000000Z", 
               "updated_at" => "2024-07-03T13:15:01.000000Z", 
            ], 
            [
                "id" => 18, 
                "type" => "credit", 
                "amount" => "1.00", 
                "status" => "approved", 
                "notes" => "asdf", 
                "customer_id" => 1, 
                "order_id" => 1572, 
                "created_at" => "2024-07-03T13:06:54.000000Z", 
                "updated_at" => "2024-07-03T13:06:54.000000Z", 
            ], 
            [
                "id" => 17, 
                "type" => "credit", 
                "amount" => "10.00", 
                "status" => "approved", 
                "notes" => "adsf", 
                "customer_id" => 1, 
                "order_id" => 1572, 
                "created_at" => "2024-07-03T13:06:05.000000Z", 
                "updated_at" => "2024-07-03T13:06:05.000000Z", 
            ], 
            [
                "id" => 16, 
                "type" => "credit", 
                "amount" => "10.00", 
                "status" => "approved", 
                "notes" => "asdf", 
                "customer_id" => 1, 
                "order_id" => 1572, 
                "created_at" => "2024-07-03T13:05:45.000000Z", 
                "updated_at" => "2024-07-03T13:05:45.000000Z", 
            ], 
            [
                "id" => 15, 
                "type" => "credit", 
                "amount" => "10.00", 
                "status" => "approved", 
                "notes" => "asdf", 
                "customer_id" => 1, 
                "order_id" => 1572, 
                "created_at" => "2024-07-03T10:01:24.000000Z", 
                "updated_at" => "2024-07-03T10:01:24.000000Z", 
            ], 
            [
                "id" => 14, 
                "type" => "credit", 
                "amount" => "10.00", 
                "status" => "approved", 
                "notes" => "10", 
                "customer_id" => 1, 
                "order_id" => 1558, 
                "created_at" => "2024-07-03T08:18:23.000000Z", 
                "updated_at" => "2024-07-03T08:18:23.000000Z", 
            ], 
            [
                "id" => 13, 
                "type" => "credit", 
                "amount" => "10.00", 
                "status" => "approved", 
                "notes" => "card", 
                "customer_id" => 1, 
                "order_id" => 1558, 
                "created_at" => "2024-07-03T08:03:32.000000Z", 
                "updated_at" => "2024-07-03T08:03:32.000000Z", 
            ], 
            [
                "id" => 12, 
                "type" => "credit", 
                "amount" => "10.00", 
                "status" => "approved", 
                "notes" => "refund", 
                "customer_id" => 1, 
                "order_id" => 1561, 
                "created_at" => "2024-07-02T15:00:39.000000Z", 
                "updated_at" => "2024-07-02T15:00:39.000000Z", 
            ], 
            [
                "id" => 11, 
                "type" => "credit", 
                "amount" => "10.00", 
                "status" => "approved", 
                "notes" => "", 
                "customer_id" => 1, 
                "order_id" => 1561, 
                "created_at" => "2024-07-02T15:00:23.000000Z", 
                "updated_at" => "2024-07-02T15:00:23.000000Z", 
            ] 
        ];
    }
    public function getCurrentChannel()
    {
        $data = [
            "id" => 23, 
            "code" => "demo", 
            "name" => "Demo", 
            "description" => "PERFUMES AND MORE", 
            "location" => null, 
            "timezone" => null, 
            "theme" => "twig", 
            "hostname" => "demo.twsaa.com", 
            "logo" => "channel/23/higBri8RKyVhXXFjEyiMLkdOxUtPvwUee9ItQVzy.png", 
            "favicon" => "channel/23/vn0KJBO244RQ7xjHWDzjlmfYLpRejs6fm5vay8HV.png", 
            "store_menu" => null, 
            "color" => "#000000", 
            "secondary_color" => "#ff0000", 
            "bg_pattern" => "classic", 
            "default_locale_id" => 55, 
            "base_currency_id" => 24, 
            "menu_type" => 0, 
            "product" => 1, 
            "brand" => 1, 
            "created_at" => "2022-09-11T13:15:29.000000Z", 
            "updated_at" => "2024-11-11T13:30:36.000000Z", 
            "root_category_id" => null, 
            "getCompanyAddress" =>  [
                "id" => 5, 
                "address1" => "شسب", 
                "address2" => null, 
                "area" => "شسي", 
                "city" => "4691", 
                "state" => null, 
                "zip_code" => null, 
                "country" => "SA", 
                "email" => "demo@twsaa.com", 
                "phone" => "+968 9952 1113", 
                "phone_visibility" => 0, 
                "whatsapp" => "+966 58 374 5871", 
                "facebook" => "", 
                "youtube" => "", 
                "twitter" => "", 
                "tiktok" => "", 
                "snapchat" => "", 
                "instagram" => "", 
                "misc" => null, 
                "certificate_id" => "1231412341", 
                "created_at" => "2023-01-26T13:36:58.000000Z", 
                "updated_at" => "2024-10-28T14:09:16.000000Z" 
            ],
            "getCmsPages" => [
                [
                    "id" => 122, 
                    "layout" => null, 
                    "created_at" => "2022-09-11T13:15:29.000000Z", 
                    "updated_at" => "2022-09-11T13:15:29.000000Z", 
                    "content" => null, 
                    "meta_description" => "ok", 
                    "meta_title" => null, 
                    "page_title" => "Return Policy", 
                    "meta_keywords" => "return, policy", 
                    "html_content" => '<div class="static-container">                                   <div class="mb-5">Return policy page content</div>                                   </div>', 
                    "url_key" => "return-policy", 
                    "type" => "", 
                    "status" => 1, 
                    "translations" => [
                        [
                        "id" => 122, 
                        "page_title" => "Return Policy", 
                        "url_key" => "return-policy", 
                        "html_content" => '<div class="static-container">                                   <div class="mb-5">Return policy page content</div>                                   </div>', 
                        "meta_title" => null, 
                        "meta_description" => "ok", 
                        "meta_keywords" => "return, policy", 
                        "locale" => "ar", 
                        "status" => 1, 
                        "cms_page_id" => 122, 
                        "type" => "" 
                        ], 
                        [
                            "id" => 6983, 
                            "page_title" => "Refund Policy", 
                            "url_key" => "return-policy", 
                            "html_content" => "<ul><li>دليل التسوق المضمون&nbsp;</li><li>جوده عالية</li><li>توصيل سريع&nbsp;</li><li>اسعار مناسبه&nbsp;</li><li>واخيراً كُل ماتحتاج واكثر بضغطة زر</li><li>⭐️ضمان ذهبي&nbsp;</li></ul><p><br></p>", 
                            "meta_title" => null, 
                            "meta_description" => "Refund Policy Meta description", 
                            "meta_keywords" => null, 
                            "locale" => "en", 
                            "status" => 1, 
                            "cms_page_id" => 122, 
                            "type" => "return_policy" 
                        ] 
                    ] 
                ], 
                [
                    "id" => 123, 
                    "layout" => null, 
                    "created_at" => "2022-09-11T13:15:29.000000Z", 
                    "updated_at" => "2022-09-11T13:15:29.000000Z", 
                    "content" => null, 
                    "meta_description" => "", 
                    "meta_title" => "Refund policy", 
                    "page_title" => "Refund Policy", 
                    "meta_keywords" => "refund, policy", 
                    "html_content" => '<div class="static-container">
                                <div class="mb-5">Refund policy page content</div>
                                </div>', 
                    "url_key" => "refund-policy", 
                    "type" => "", 
                    "status" => 1, 
                    "translations" => [
                    [
                        "id" => 13625, 
                        "page_title" => "", 
                        "url_key" => "", 
                        "html_content" => null, 
                        "meta_title" => null, 
                        "meta_description" => null, 
                        "meta_keywords" => null, 
                        "locale" => "en", 
                        "status" => 1, 
                        "cms_page_id" => 123, 
                        "type" => "" 
                    ], 
                    [
                            "id" => 123, 
                            "page_title" => "Refund Policy", 
                            "url_key" => "refund-policy", 
                            "html_content" => '<div class="static-container">
                                <div class="mb-5">Refund policy page content</div>
                                </div>', 
                            "meta_title" => "Refund policy", 
                            "meta_description" => "", 
                            "meta_keywords" => "refund, policy", 
                            "locale" => "ar", 
                            "status" => 1, 
                            "cms_page_id" => 123, 
                            "type" => "" 
                        ] 
                    ] 
                ], 
                [
                    "id" => 124, 
                    "layout" => null, 
                    "created_at" => "2022-09-11T13:15:29.000000Z", 
                    "updated_at" => "2022-09-11T13:15:29.000000Z", 
                    "content" => null, 
                    "meta_description" => "", 
                    "meta_title" => "Terms & Conditions", 
                    "page_title" => "Terms & Conditions", 
                    "meta_keywords" => "term, conditions", 
                    "html_content" => '<div class="static-container">
                    <div class="mb-5">Terms & conditions page content</div>
                    </div>', 
                    "url_key" => "terms-conditions", 
                    "type" => "", 
                    "status" => 1, 
                    "translations" => [
                    [
                        "id" => 13626, 
                        "page_title" => "", 
                        "url_key" => "", 
                        "html_content" => null, 
                        "meta_title" => null, 
                        "meta_description" => null, 
                        "meta_keywords" => null, 
                        "locale" => "en", 
                        "status" => 1, 
                        "cms_page_id" => 124, 
                        "type" => "" 
                    ], 
                    [
                            "id" => 124, 
                            "page_title" => "Terms & Conditions", 
                            "url_key" => "terms-conditions", 
                            "html_content" => '<div class="static-container">
                    <div class="mb-5">Terms & conditions page content</div>
                    </div>', 
                            "meta_title" => "Terms & Conditions", 
                            "meta_description" => "", 
                            "meta_keywords" => "term, conditions", 
                            "locale" => "ar", 
                            "status" => 1, 
                            "cms_page_id" => 124, 
                            "type" => "" 
                        ] 
                    ] 
                ], 
                [
                    "id" => 125, 
                    "layout" => null, 
                    "created_at" => "2022-09-11T13:15:29.000000Z", 
                    "updated_at" => "2022-09-11T13:15:29.000000Z", 
                    "content" => null, 
                    "meta_description" => "", 
                    "meta_title" => "Terms of use", 
                    "page_title" => "Terms of use", 
                    "meta_keywords" => "term, use", 
                    "html_content" => '<div class="static-container">
                    <div class="mb-5">Terms of use page content</div>
                    </div>', 
                    "url_key" => "terms-of-use", 
                    "type" => "", 
                    "status" => 1, 
                    "translations" => [
                        [
                            "id" => 13627, 
                            "page_title" => "", 
                            "url_key" => "", 
                            "html_content" => null, 
                            "meta_title" => null, 
                            "meta_description" => null, 
                            "meta_keywords" => null, 
                            "locale" => "en", 
                            "status" => 1, 
                            "cms_page_id" => 125, 
                            "type" => "" 
                        ], 
                        [
                            "id" => 125, 
                            "page_title" => "Terms of use", 
                            "url_key" => "terms-of-use", 
                            "html_content" => '<div class="static-container">
                            <div class="mb-5">Terms of use page content</div>
                            </div>', 
                            "meta_title" => "Terms of use", 
                            "meta_description" => "", 
                            "meta_keywords" => "term, use", 
                            "locale" => "ar", 
                            "status" => 1, 
                            "cms_page_id" => 125, 
                            "type" => "" 
                        ] 
                    ] 
                ], 
                [
                    "id" => 345, 
                    "layout" => null, 
                    "created_at" => "2023-08-16T07:19:59.000000Z", 
                    "updated_at" => "2023-08-16T07:19:59.000000Z", 
                    "content" => null, 
                    "meta_description" => "", 
                    "meta_title" => null, 
                    "page_title" => "الشحن و التوصيل ", 
                    "meta_keywords" => null, 
                    "html_content" => '<p><br></p><p><br></p><p><span style="color: rgb(0, 0, 0);">بإمكانك الآن اختيار منتجاتك المفضلة، والاستمتاع بخدمة التوصيل حتى باب منزلك أو عملك، إن كنت تقع في كل من المملكة العربية السعودية، الكويت، الإمارات و عٌمان.</span></p><p><br></p><p><span style="color: rgb(0, 0, 0);">مع العلم، أن بعض المناطق التي تقع خارج حدود المدن الأساسية سيصعب الشحن إلى العنوان مباشرةً، لكننا سنعمل على تسليمها إلى أقرب مكتب شحن لك لتتمكن من استلامها شخصياً.</span></p><p><br></p><p><span style="color: rgb(0, 0, 0);">أما في حال كنت تقع خارج دول الخليج، نرغب بإعلامك أننا نعمل دائماً على توسيع خدماتنا، لذلك ابق على اطلاع، فقد نبدأ التوصيل إلى بلدك في أقرب وقت ممكن.</span></p><p><br></p>', 
                    "url_key" => "alshhn-o-altosyl", 
                    "type" => "-", 
                    "status" => 1, 
                    "translations" => [
                        [
                            "id" => 351, 
                            "page_title" => "الشحن و التوصيل ", 
                            "url_key" => "alshhn-o-altosyl", 
                            "html_content" => '<p><br></p><p><br></p><p><span style="color: rgb(0, 0, 0);">بإمكانك الآن اختيار منتجاتك المفضلة، والاستمتاع بخدمة التوصيل حتى باب منزلك أو عملك، إن كنت تقع في كل من المملكة العربية السعودية، الكويت، الإمارات و عٌمان.</span></p><p><br></p><p><span style="color: rgb(0, 0, 0);">مع العلم، أن بعض المناطق التي تقع خارج حدود المدن الأساسية سيصعب الشحن إلى العنوان مباشرةً، لكننا سنعمل على تسليمها إلى أقرب مكتب شحن لك لتتمكن من استلامها شخصياً.</span></p><p><br></p><p><span style="color: rgb(0, 0, 0);">أما في حال كنت تقع خارج دول الخليج، نرغب بإعلامك أننا نعمل دائماً على توسيع خدماتنا، لذلك ابق على اطلاع، فقد نبدأ التوصيل إلى بلدك في أقرب وقت ممكن.</span></p><p><br></p>', 
                            "meta_title" => null, 
                            "meta_description" => "", 
                            "meta_keywords" => null, 
                            "locale" => "ar", 
                            "status" => 1, 
                            "cms_page_id" => 345, 
                            "type" => "-" 
                        ], 
                        [
                            "id" => 352, 
                            "page_title" => "الشحن و التوصيل ", 
                            "url_key" => "alshhn-o-altosyl", 
                            "html_content" => "<p>نوفر التوصيل الآن على مستوى جميع دول الخليج!</p><p><br></p><p>بإمكانك الآن اختيار منتجاتك المفضلة، والاستمتاع بخدمة التوصيل حتى باب منزلك أو عملك، إن كنت تقع في كل من المملكة العربية السعودية، الكويت، الإمارات و عٌمان.</p><p><br></p><p>مع العلم، أن بعض المناطق التي تقع خارج حدود المدن الأساسية سيصعب الشحن إلى العنوان مباشرةً، لكننا سنعمل على تسليمها إلى أقرب مكتب شحن لك لتتمكن من استلامها شخصياً.</p><p><br></p><p>أما في حال كنت تقع خارج دول الخليج، نرغب بإعلامك أننا نعمل دائماً على توسيع خدماتنا، لذلك ابق على اطلاع، فقد نبدأ التوصيل إلى بلدك في أقرب وقت ممكن.</p><p><br></p>", 
                            "meta_title" => null, 
                            "meta_description" => "", 
                            "meta_keywords" => null, 
                            "locale" => "en", 
                            "status" => 1, 
                            "cms_page_id" => 345, 
                            "type" => "-" 
                        ] 
                    ] 
                ], 
                [
                    "id" => 346, 
                    "layout" => null, 
                    "created_at" => "2023-08-16T07:24:38.000000Z", 
                    "updated_at" => "2023-08-16T07:24:38.000000Z", 
                    "content" => null, 
                    "meta_description" => "", 
                    "meta_title" => null, 
                    "page_title" => "سياسية الإسترجاع  ", 
                    "meta_keywords" => null, 
                    "html_content" => '<p class="ql-align-right"><span style="background-color: rgb(249, 249, 249); color: rgb(130, 130, 130);">سياسة الاسترجاع</span></p><p class="ql-align-right">إذا كنت غير راض عن المنتج لوجود عيب حدث للمنتج خلال عملية الشحن أو وصلكم منتج مختلف عن طلبكم فكل ما تقوم به هو الاتصال بخدمة العملاء على 000000000 الرقم: </p><p><br></p>', 
                    "url_key" => "syasy-alastrgaaa", 
                    "type" => "return_policy", 
                    "status" => 1, 
                    "translations" => [
                        [
                            "id" => 353, 
                            "page_title" => "سياسية الإسترجاع  ", 
                            "url_key" => "syasy-alastrgaaa", 
                            "html_content" => '<p class="ql-align-right"><span style="background-color: rgb(249, 249, 249); color: rgb(130, 130, 130);">سياسة الاسترجاع</span></p><p class="ql-align-right">إذا كنت غير راض عن المنتج لوجود عيب حدث للمنتج خلال عملية الشحن أو وصلكم منتج مختلف عن طلبكم فكل ما تقوم به هو الاتصال بخدمة العملاء على 000000000 الرقم: </p><p><br></p>', 
                            "meta_title" => null, 
                            "meta_description" => "", 
                            "meta_keywords" => null, 
                            "locale" => "ar", 
                            "status" => 1, 
                            "cms_page_id" => 346, 
                            "type" => "return_policy" 
                        ], 
                        [
                            "id" => 354, 
                            "page_title" => "سياسية الإسترجاع  ", 
                            "url_key" => "syasy-alastrgaaa", 
                            "html_content" => '<p><strong>يمكنك الاسترجاع المشتريات  خلال 14 يوم  من تاريخ استلام الطلب وفق الشروط التالية:</strong></p><ol><li>يشترط ان يكون المنتج في حالته  , وان يكون مغلف .</li><li>في حال وصلنا منتج (مفتوح - منزوع الغلاف الخارجي ) فأنه يعد تالف ولا يمكننا إعادة الشحن .</li></ol><p><br></p>', 
                            "meta_title" => "", 
                            "meta_description" => "", 
                            "meta_keywords" => null, 
                            "locale" => "en", 
                            "status" => 1, 
                            "cms_page_id" => 346, 
                            "type" => "return_policy" 
                        ] 
                    ] 
                ], 
                [
                    "id" => 438, 
                    "layout" => null, 
                    "created_at" => "2023-08-24T09:06:09.000000Z", 
                    "updated_at" => "2023-08-24T09:06:09.000000Z", 
                    "content" => null, 
                    "meta_description" => "", 
                    "meta_title" => "", 
                    "page_title" => "سياسة الخصوصية ", 
                    "meta_keywords" => null, 
                    "html_content" => '<p><br></p><h4>سياسة الخصوصية</h4><p>نحن نأخذ خصوصيتك على محمل الجد وتعامل جميع المعلومات الشخصية الخاصة بك على أنها سرية. وتتعلق هذه السياسة باستخدامك لهذا الموقع؛ البيانات التي تزودنا بها واستخدامنا لهذه البيانات</p><p>عموما يمكنك استخدام موقعنا على الانترنت هو دون تقديم أية معلومات شخصية الا إذا طلبنا منك تقديم بيانات شخصية (مثل الاسم أو العنوان أو عنوان البريد الإلكتروني)، وهذا على أساس طوعي غير اجباري. لن يتم الكشف عن هذه البيانات إلى طرف ثالث دون موافقة صريحة منك.</p><h5>معلومات شخصية</h5><p>عندما&nbsp;تتسوق في هذا الموقع، قد يطلب منك إدخال معلوماتك الشخصية مثل الاسم وعنوان البريد الإلكتروني وعنوان الفواتير وعنوان التسليم ورقم الهاتف، وتحديد المنتج وكلمة مرور. التفاصيل الشخصية الأساسية، بما في ذلك اسمك وعنوان البريد الإلكتروني، تطلب أيضا منك عندما تقوم بالتسجيل لتلقي النشرة الإخبارية البريد الإلكتروني</p><p>قد نطلب من تاريخ ميلادك (اختياري)، والذي سيتم استخدامه لتحديد ما إذا كنت ترغب في إجراء تغييرات على حسابك أو طلبك عن طريق الهاتف</p><p>نحن لا نحتفظ ببيانات بطاقات الائتمان</p><p>قد نحتاج لجمع المعلومات الخاصة بكَ إذا أردت تسجيل طلبية شراءٍ لسلعةٍ من موقعنا ونقوم بجمع البيانات لآزمة أخرى لتأمين أية مطالب محتملة قد تظهر لاحقا ولتزويدكَ بالخدمات المتوفرة لدينا هنا بالحصول موافقتك قد نتصل بك عن طريق البريد الإلكتروني لنعرض لكم تفاصيل منتجات وخدمات أخرى. </p>', 
                    "url_key" => "syas-alkhsosy", 
                    "type" => "-", 
                    "status" => 1, 
                    "translations" => [
                        [
                            "id" => 447, 
                            "page_title" => "سياسة الخصوصية ", 
                            "url_key" => "syas-alkhsosy", 
                            "html_content" => '<p><br></p><h4>سياسة الخصوصية</h4><p>نحن نأخذ خصوصيتك على محمل الجد وتعامل جميع المعلومات الشخصية الخاصة بك على أنها سرية. وتتعلق هذه السياسة باستخدامك لهذا الموقع؛ البيانات التي تزودنا بها واستخدامنا لهذه البيانات</p><p>عموما يمكنك استخدام موقعنا على الانترنت هو دون تقديم أية معلومات شخصية الا إذا طلبنا منك تقديم بيانات شخصية (مثل الاسم أو العنوان أو عنوان البريد الإلكتروني)، وهذا على أساس طوعي غير اجباري. لن يتم الكشف عن هذه البيانات إلى طرف ثالث دون موافقة صريحة منك.</p><h5>معلومات شخصية</h5><p>عندما&nbsp;تتسوق في هذا الموقع، قد يطلب منك إدخال معلوماتك الشخصية مثل الاسم وعنوان البريد الإلكتروني وعنوان الفواتير وعنوان التسليم ورقم الهاتف، وتحديد المنتج وكلمة مرور. التفاصيل الشخصية الأساسية، بما في ذلك اسمك وعنوان البريد الإلكتروني، تطلب أيضا منك عندما تقوم بالتسجيل لتلقي النشرة الإخبارية البريد الإلكتروني</p><p>قد نطلب من تاريخ ميلادك (اختياري)، والذي سيتم استخدامه لتحديد ما إذا كنت ترغب في إجراء تغييرات على حسابك أو طلبك عن طريق الهاتف</p><p>نحن لا نحتفظ ببيانات بطاقات الائتمان</p><p>قد نحتاج لجمع المعلومات الخاصة بكَ إذا أردت تسجيل طلبية شراءٍ لسلعةٍ من موقعنا ونقوم بجمع البيانات لآزمة أخرى لتأمين أية مطالب محتملة قد تظهر لاحقا ولتزويدكَ بالخدمات المتوفرة لدينا هنا بالحصول موافقتك قد نتصل بك عن طريق البريد الإلكتروني لنعرض لكم تفاصيل منتجات وخدمات أخرى. </p>', 
                            "meta_title" => "", 
                            "meta_description" => "", 
                            "meta_keywords" => null, 
                            "locale" => "ar", 
                            "status" => 1, 
                            "cms_page_id" => 438, 
                            "type" => "-" 
                        ], 
                        [
                            "id" => 448, 
                            "page_title" => "سياسة الخصوصية ", 
                            "url_key" => "syas-alkhsosy", 
                            "html_content" => '<p><br></p><h4>سياسة الخصوصية</h4><p>نحن نأخذ خصوصيتك على محمل الجد وتعامل جميع المعلومات الشخصية الخاصة بك على أنها سرية. وتتعلق هذه السياسة باستخدامك لهذا الموقع؛ البيانات التي تزودنا بها واستخدامنا لهذه البيانات</p><p>عموما يمكنك استخدام موقعنا على الانترنت هو دون تقديم أية معلومات شخصية الا إذا طلبنا منك تقديم بيانات شخصية (مثل الاسم أو العنوان أو عنوان البريد الإلكتروني)، وهذا على أساس طوعي غير اجباري. لن يتم الكشف عن هذه البيانات إلى طرف ثالث دون موافقة صريحة منك.</p><h5>معلومات شخصية</h5><p>عندما&nbsp;تتسوق في هذا الموقع، قد يطلب منك إدخال معلوماتك الشخصية مثل الاسم وعنوان البريد الإلكتروني وعنوان الفواتير وعنوان التسليم ورقم الهاتف، وتحديد المنتج وكلمة مرور. التفاصيل الشخصية الأساسية، بما في ذلك اسمك وعنوان البريد الإلكتروني، تطلب أيضا منك عندما تقوم بالتسجيل لتلقي النشرة الإخبارية البريد الإلكتروني</p><p>قد نطلب من تاريخ ميلادك (اختياري)، والذي سيتم استخدامه لتحديد ما إذا كنت ترغب في إجراء تغييرات على حسابك أو طلبك عن طريق الهاتف</p><p>نحن لا نحتفظ ببيانات بطاقات الائتمان</p><p>قد نحتاج لجمع المعلومات الخاصة بكَ إذا أردت تسجيل طلبية شراءٍ لسلعةٍ من موقعنا ونقوم بجمع البيانات لآزمة أخرى لتأمين أية مطالب محتملة قد تظهر لاحقا ولتزويدكَ بالخدمات المتوفرة لدينا هنا بالحصول موافقتك قد نتصل بك عن طريق البريد الإلكتروني لنعرض لكم تفاصيل منتجات وخدمات أخرى. </p>', 
                            "meta_title" => "", 
                            "meta_description" => "", 
                            "meta_keywords" => null, 
                            "locale" => "en", 
                            "status" => 1, 
                            "cms_page_id" => 438, 
                            "type" => "-" 
                        ] 
                    ] 
                ], 
                [
                    "id" => 512, 
                    "layout" => null, 
                    "created_at" => "2023-09-04T07:02:20.000000Z", 
                    "updated_at" => "2023-09-04T07:02:20.000000Z", 
                    "content" => null, 
                    "meta_description" => "", 
                    "meta_title" => "", 
                    "page_title" => "من نحن", 
                    "meta_keywords" => null, 
                    "html_content" => '<p class="ql-align-right">ادخل عالم الجمال واستمتع برحلة تسوق تأخذك الى أشهر مجموعة من الماركات بكبسة زر.. الفرح وروح الشباب في قولدن سنت، لأننا نوفر لك كل اللي تحتاجه من منتجات ونصائح من احدث صيحات الجمال!</p><p class="ql-align-right">حقق المظهر المثالي الذي تريده واستلهم من أفضل المؤثرين المحليين وخبراء التجميل، و بمجموعة واسعة من منتجات الجمال&nbsp;.</p><p class="ql-align-right"><br></p><p class="ql-align-right"><br></p><h5 class="ql-align-right">ماركات جديدة</h5><p class="ql-align-right">مستمرون في إطلاق ماركات جديدة أسبوعياً محليّة وعالميّة مختارة بعناية. سندلك باختياراتنا المتنوعة ومن أحدث صيحات الجمال.</p><h5 class="ql-align-right">اختياراتنا</h5><p class="ql-align-right">أكثر من 800 ماركة عالمية ومحلية، بأكثر من 20,000 منتج على الموقع ، ستجدون في قولدن سنت المنتجات المثالية لك من العطور وصولاً إلى مستحضرات التجميل.</p><h5 class="ql-align-right">نحن نضمن...</h5><p class="ql-align-right">أن جميع المنتجات والماركات اصلية 100٪.</p><p><br></p>', 
                    "url_key" => "mn-nhn", 
                    "type" => "general", 
                    "status" => 1, 
                    "translations" => [
                        [
                            "id" => 523, 
                            "page_title" => "من نحن", 
                            "url_key" => "mn-nhn", 
                            "html_content" => '<p class="ql-align-right">ادخل عالم الجمال واستمتع برحلة تسوق تأخذك الى أشهر مجموعة من الماركات بكبسة زر.. الفرح وروح الشباب في قولدن سنت، لأننا نوفر لك كل اللي تحتاجه من منتجات ونصائح من احدث صيحات الجمال!</p><p class="ql-align-right">حقق المظهر المثالي الذي تريده واستلهم من أفضل المؤثرين المحليين وخبراء التجميل، و بمجموعة واسعة من منتجات الجمال&nbsp;.</p><p class="ql-align-right"><br></p><p class="ql-align-right"><br></p><h5 class="ql-align-right">ماركات جديدة</h5><p class="ql-align-right">مستمرون في إطلاق ماركات جديدة أسبوعياً محليّة وعالميّة مختارة بعناية. سندلك باختياراتنا المتنوعة ومن أحدث صيحات الجمال.</p><h5 class="ql-align-right">اختياراتنا</h5><p class="ql-align-right">أكثر من 800 ماركة عالمية ومحلية، بأكثر من 20,000 منتج على الموقع ، ستجدون في قولدن سنت المنتجات المثالية لك من العطور وصولاً إلى مستحضرات التجميل.</p><h5 class="ql-align-right">نحن نضمن...</h5><p class="ql-align-right">أن جميع المنتجات والماركات اصلية 100٪.</p><p><br></p>', 
                            "meta_title" => "", 
                            "meta_description" => "", 
                            "meta_keywords" => null, 
                            "locale" => "ar", 
                            "status" => 1, 
                            "cms_page_id" => 512, 
                            "type" => "general" 
                        ], 
                        [
                            "id" => 524, 
                            "page_title" => "من نحن", 
                            "url_key" => "mn-nhn", 
                            "html_content" => '<p class="ql-align-right">ادخل عالم الجمال واستمتع برحلة تسوق تأخذك الى أشهر مجموعة من الماركات بكبسة زر.. الفرح وروح الشباب في قولدن سنت، لأننا نوفر لك كل اللي تحتاجه من منتجات ونصائح من احدث صيحات الجمال!</p><p class="ql-align-right">حقق المظهر المثالي الذي تريده واستلهم من أفضل المؤثرين المحليين وخبراء التجميل، و بمجموعة واسعة من منتجات الجمال&nbsp;.</p><p class="ql-align-right"><br></p><p class="ql-align-right"><br></p><h5 class="ql-align-right">ماركات جديدة</h5><p class="ql-align-right">مستمرون في إطلاق ماركات جديدة أسبوعياً محليّة وعالميّة مختارة بعناية. سندلك باختياراتنا المتنوعة ومن أحدث صيحات الجمال.</p><h5 class="ql-align-right">اختياراتنا</h5><p class="ql-align-right">أكثر من 800 ماركة عالمية ومحلية، بأكثر من 20,000 منتج على الموقع ، ستجدون في قولدن سنت المنتجات المثالية لك من العطور وصولاً إلى مستحضرات التجميل.</p><h5 class="ql-align-right">نحن نضمن...</h5><p class="ql-align-right">أن جميع المنتجات والماركات اصلية 100٪.</p><p><br></p>', 
                            "meta_title" => "", 
                            "meta_description" => "", 
                            "meta_keywords" => null, 
                            "locale" => "en", 
                            "status" => 1, 
                            "cms_page_id" => 512, 
                            "type" => "general" 
                        ] 
                    ] 
                ], 
                [
                    "id" => 13508, 
                    "layout" => null, 
                    "created_at" => "2024-06-30T15:02:47.000000Z", 
                    "updated_at" => "2024-06-30T15:02:47.000000Z", 
                    "content" => null, 
                    "meta_description" => null, 
                    "meta_title" => null, 
                    "page_title" => "", 
                    "meta_keywords" => null, 
                    "html_content" => null, 
                    "url_key" => "", 
                    "type" => "category", 
                    "status" => 0, 
                    "translations" => [
                        [
                            "id" => 13600, 
                            "page_title" => "", 
                            "url_key" => "", 
                            "html_content" => null, 
                            "meta_title" => null, 
                            "meta_description" => null, 
                            "meta_keywords" => null, 
                            "locale" => "ar", 
                            "status" => 0, 
                            "cms_page_id" => 13508, 
                            "type" => "category" 
                        ], 
                        [
                            "id" => 13599, 
                            "page_title" => "", 
                            "url_key" => "", 
                            "html_content" => null, 
                            "meta_title" => null, 
                            "meta_description" => null, 
                            "meta_keywords" => null, 
                            "locale" => "en", 
                            "status" => 0, 
                            "cms_page_id" => 13508, 
                            "type" => "category" 
                        ] 
                    ] 
                ], 
                [
                    "id" => 13509, 
                    "layout" => null, 
                    "created_at" => "2024-06-30T15:02:55.000000Z", 
                    "updated_at" => "2024-06-30T15:02:55.000000Z", 
                    "content" => null, 
                    "meta_description" => null, 
                    "meta_title" => null, 
                    "page_title" => "", 
                    "meta_keywords" => null, 
                    "html_content" => null, 
                    "url_key" => "", 
                    "type" => "category", 
                    "status" => 0, 
                    "translations" => [
                        [
                            "id" => 13602, 
                            "page_title" => "", 
                            "url_key" => "", 
                            "html_content" => null, 
                            "meta_title" => null, 
                            "meta_description" => null, 
                            "meta_keywords" => null, 
                            "locale" => "ar", 
                            "status" => 0, 
                            "cms_page_id" => 13509, 
                            "type" => "category" 
                        ], 
                        [
                            "id" => 13601, 
                            "page_title" => "", 
                            "url_key" => "", 
                            "html_content" => null, 
                            "meta_title" => null, 
                            "meta_description" => null, 
                            "meta_keywords" => null, 
                            "locale" => "en", 
                            "status" => 0, 
                            "cms_page_id" => 13509, 
                            "type" => "category" 
                        ] 
                    ] 
                ], 
                [
                    "id" => 13510, 
                    "layout" => null, 
                    "created_at" => "2024-06-30T15:05:50.000000Z", 
                    "updated_at" => "2024-06-30T15:05:50.000000Z", 
                    "content" => null, 
                    "meta_description" => null, 
                    "meta_title" => null, 
                    "page_title" => null, 
                    "meta_keywords" => null, 
                    "html_content" => null, 
                    "url_key" => null, 
                    "type" => null, 
                    "status" => null, 
                    "translations" => [
                        [
                            "id" => 13603, 
                            "page_title" => "", 
                            "url_key" => "", 
                            "html_content" => null, 
                            "meta_title" => null, 
                            "meta_description" => null, 
                            "meta_keywords" => null, 
                            "locale" => "en", 
                            "status" => 0, 
                            "cms_page_id" => 13510, 
                            "type" => "category" 
                        ] 
                    ] 
                ], 
                [
                    "id" => 13511, 
                    "layout" => null, 
                    "created_at" => "2024-06-30T15:06:27.000000Z", 
                    "updated_at" => "2024-06-30T15:06:27.000000Z", 
                    "content" => null, 
                    "meta_description" => null, 
                    "meta_title" => null, 
                    "page_title" => null, 
                    "meta_keywords" => null, 
                    "html_content" => null, 
                    "url_key" => null, 
                    "type" => null, 
                    "status" => null, 
                    "translations" => [
                        [
                            "id" => 13604, 
                            "page_title" => "", 
                            "url_key" => "", 
                            "html_content" => null, 
                            "meta_title" => null, 
                            "meta_description" => null, 
                            "meta_keywords" => null, 
                            "locale" => "en", 
                            "status" => 0, 
                            "cms_page_id" => 13511, 
                            "type" => "category" 
                        ] 
                    ] 
                ], 
                [
                    "id" => 13512, 
                    "layout" => null, 
                    "created_at" => "2024-07-01T09:20:58.000000Z", 
                    "updated_at" => "2024-07-01T09:20:58.000000Z", 
                    "content" => null, 
                    "meta_description" => "asdf", 
                    "meta_title" => "asdf", 
                    "page_title" => "asdf", 
                    "meta_keywords" => null, 
                    "html_content" => "<p>asdf</p>", 
                    "url_key" => "asdf", 
                    "type" => "-", 
                    "status" => 1, 
                    "translations" => [
                        [
                            "id" => 13606, 
                            "page_title" => "asdf", 
                            "url_key" => "asdf", 
                            "html_content" => "<p>asdf</p>", 
                            "meta_title" => "asdf", 
                            "meta_description" => "asdf", 
                            "meta_keywords" => null, 
                            "locale" => "ar", 
                            "status" => 1, 
                            "cms_page_id" => 13512, 
                            "type" => "-" 
                        ], 
                        [
                            "id" => 13605, 
                            "page_title" => "asdf", 
                            "url_key" => "asdf", 
                            "html_content" => "<p>asdf</p>", 
                            "meta_title" => "asdf", 
                            "meta_description" => "asdf", 
                            "meta_keywords" => null, 
                            "locale" => "en", 
                            "status" => 1, 
                            "cms_page_id" => 13512, 
                            "type" => "-" 
                        ] 
                    ] 
                ] 
            ],
            "getBlogs" => [
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
                            "created_at" => null, 
                            "updated_at" => null 
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
                            "created_at" => null, 
                            "updated_at" => null 
                        ] 
                    ] 
                ] 
            ]
        ]; 
        return $data;
    }
    public function getCompanyTax()
    {
        $data = [
            "id" => 1, 
            "shipping_tax" => "1.00", 
            "product_tax" => "1.00", 
            "tax_no" => "42555555", 
            "show_tax_no" => 1, 
            "show_tax_cretificate" => 1, 
            "cretificate" => "tax/38/tax/14e457ea-3f6a-49d0-93d1-21b6c1aa19ad.png", 
            "verified" => 1, 
            "created_at" => "2023-08-30T13:08:16.000000Z", 
            "updated_at" => "2024-07-25T08:18:02.000000Z" 
        ]; 
        return $data;
    }
    public function getDefaultPaymentMethod()
    {
        $data = [
            "id" => 1, 
            "code" => "debit_card", 
            "title" => "admin::app.debit_card", 
            "type" => "default", 
            "subscription" => 0, 
            "logo" => null, 
            "description" => "admin::app.checkout_debit_card", 
            "active" => 1, 
            "sort" => 1, 
            "paid_order_status" => "pending", 
            "unpaid_order_status" => "pending_payment", 
            "rates" => [
                "fixed" => 1, 
                "percentage" => 2.2 
            ], 
            "service_charges" => 0, 
            "is_tax" => 0, 
            "pos" => 0, 
            "created_at" => "2022-10-30T13:11:02.000000Z", 
            "updated_at" => "2023-06-12T12:33:55.000000Z" ,
            "getAdminPaymentMethod" =>  [
                "id" => 696, 
                "payment_method_id" => 1, 
                "token" => null, 
                "authentications_values" => null, 
                "active" => 1, 
                "created_at" => "2024-07-28T13:57:26.000000Z", 
                "updated_at" => "2024-09-16T09:16:16.000000Z" 
            ]             
        ]; 
        return $data;
    }
    public function getInstallmentPaymentMethod()
    {
        $data = [
            "id" => 7, 
            "code" => "tabby", 
            "title" => "admin::app.tabby", 
            "type" => "installment", 
            "subscription" => 0, 
            "logo" => null, 
            "description" => "admin::app.checkout_debit_card", 
            "active" => 1, 
            "sort" => 1, 
            "paid_order_status" => "pending", 
            "unpaid_order_status" => "pending_payment", 
            "rates" => [
                "fixed" => 1, 
                "percentage" => 2.2 
            ], 
            "service_charges" => 0, 
            "is_tax" => 0, 
            "pos" => 0, 
            "created_at" => "2023-06-05T12:28:43.000000Z", 
            "updated_at" => "2023-06-05T12:28:43.000000Z",
            "getAdminPaymentMethod" =>  [
                "id" => 696, 
                "payment_method_id" => 1, 
                "token" => null, 
                "authentications_values" => null, 
                "active" => 1, 
                "created_at" => "2024-07-28T13:57:26.000000Z", 
                "updated_at" => "2024-09-16T09:16:16.000000Z" 
            ]             
        ]; 
        return $data;
    }
    public function getTabbyPaymentMethod()
    {
        $data = [
            "id" => 7, 
            "code" => "tabby", 
            "title" => "admin::app.tabby", 
            "type" => "installment", 
            "subscription" => 0, 
            "logo" => null, 
            "description" => "admin::app.checkout_debit_card", 
            "active" => 1, 
            "sort" => 1, 
            "paid_order_status" => "pending", 
            "unpaid_order_status" => "pending_payment", 
            "rates" => [
                    "fixed" => 1, 
                    "percentage" => 2.2 
                ], 
            "service_charges" => 0, 
            "is_tax" => 0, 
            "pos" => 0, 
            "created_at" => "2023-06-05T12:28:43.000000Z", 
            "updated_at" => "2023-06-05T12:28:43.000000Z",
            "getAdminPaymentMethod" =>  [
                "id" => 696, 
                "payment_method_id" => 1, 
                "token" => null, 
                "authentications_values" => null, 
                "active" => 1, 
                "created_at" => "2024-07-28T13:57:26.000000Z", 
                "updated_at" => "2024-09-16T09:16:16.000000Z" 
            ]
        ]; 
        return $data;
    }
    public function getTamaraPaymentMethod()
    {
        $data = [
            "id" => 9, 
            "code" => "tamara", 
            "title" => "admin::app.tamara", 
            "type" => "installment", 
            "subscription" => 0, 
            "logo" => null, 
            "description" => "admin::app.checkout_debit_card", 
            "active" => 1, 
            "sort" => 1, 
            "paid_order_status" => "pending", 
            "unpaid_order_status" => "pending_payment", 
            "rates" => [
                "fixed" => 0, 
                "percentage" => 0 
            ], 
            "service_charges" => 0, 
            "is_tax" => 0, 
            "pos" => 0, 
            "created_at" => "2023-06-05T12:28:43.000000Z", 
            "updated_at" => "2023-06-05T12:28:43.000000Z",
            "getAdminPaymentMethod" =>  [
                "id" => 696, 
                "payment_method_id" => 1, 
                "token" => null, 
                "authentications_values" => null, 
                "active" => 1, 
                "created_at" => "2024-07-28T13:57:26.000000Z", 
                "updated_at" => "2024-09-16T09:16:16.000000Z" 
            ]
        ]; 
 
 
        return $data;
    }

    public function getSuccess()
    {
        return;
    }
    public function getError()
    {
        return;
    }
    public function getErrors()
    {
        return;
    }
    public function getInfo()
    {
        return;
    }
    public function getWarning()
    {
        return;
    }
    public function getErrorMessage()
    {
        return;
    }
    public function countries()
    {
        return;
    }
    public function groupedStatesByCountries()
    {
        return;
    }
    public function getCategories()
    {
        $data = [
            "success" => true, 
            "html" => '    <li parent="0">
                    <a href="/تخفيضات">
                        تخفيضات
                    </a>
                        </li>
                <li parent="1">
                    <a href="/mob">
                        mob
                    </a>
                                <ul class="cat-sub">
                <li>
                    <a href="/samsung"><!---->
                    Samsung
                    </a>
                                <ul class="cat-sub">
                <li>
                    <a href="/s25"><!---->
                    s25
                    </a>
                        </li>
            </ul>            </li>
                <li>
                    <a href="/iphones"><!---->
                    Iphones
                    </a>
                                <ul class="cat-sub">
                <li>
                    <a href="/asdf"><!---->
                    asdf
                    </a>
                        </li>
            </ul>            </li>
            </ul>            </li>
                <li parent="2">
                    <a href="/العطور">
                        العطور 
                    </a>
                                <ul class="cat-sub">
                <li>
                    <a href="/عطور-نسائية"><!---->
                    عطور نسائية
                    </a>
                        </li>
                <li>
                    <a href="/عطور-رجالية"><!---->
                    عطور رجالية 
                    </a>
                        </li>
                <li>
                    <a href="/عطور-للشعر"><!---->
                    عطور للشعر 
                    </a>
                        </li>
                <li>
                    <a href="/عطور-للمنزل"><!---->
                    عطور للمنزل 
                    </a>
                        </li>
            </ul>            </li>
                <li parent="3">
                    <a href="/المكياج">
                        المكياج 
                    </a>
                                <ul class="cat-sub">
                <li>
                    <a href="/new"><!---->
                    new
                    </a>
                        </li>
            </ul>            </li>
                <li parent="4">
                    <a href="/العناية">
                        العناية 
                    </a>
                                <ul class="cat-sub">
                <li>
                    <a href="/منتجات-ميلي"><!---->
                    منتجات ميلي 
                    </a>
                        </li>
            </ul>            </li>
                <li parent="5">
                    <a href="/العدسات">
                        العدسات
                    </a>
                        </li>
                <li parent="6">
                    <a href="/منتجات-يوسرين">
                        منتجات يوسرين
                    </a>
                        </li>
                <li parent="7">
                    <a href="/الأظافر">
                        الأظافر
                    </a>
                        </li>
                <li parent="8">
                    <a href="/العطور">
                        العطور 
                    </a>
                                <ul class="cat-sub">
                <li>
                    <a href="/عطور-نسائية"><!---->
                    عطور نسائية 
                    </a>
                        </li>
                <li>
                    <a href="/عطور-رجالية"><!---->
                    عطور رجالية
                    </a>
                        </li>
            </ul>            </li>
                <li parent="9">
                    <a href="/الملابس">
                        الملابس 
                    </a>
                                <ul class="cat-sub">
                <li>
                    <a href="/ملابس-اطفال"><!---->
                    ملابس اطفال
                    </a>
                        </li>
                <li>
                    <a href="/ملابس-رجالية"><!---->
                    ملابس رجالية
                    </a>
                        </li>
            </ul>            </li>
                <li parent="10">
                    <a href="/brands">
                        الماركات
                    </a>
                        </li>
                <li parent="11">
                    <a href="/products">
                        المنتجات
                    </a>
                        </li>



            <script>
                $(document).ready(function(){
                    $(".owl-carousel").owlCarousel({
                        loop: false,
                        autoplay: true,
                        autoplayTimeout: 5000,
                        autoWidth: true,
                        rewind: true,
                        margin: 15,
                        nav: true,
                        rtl: false,
                    });
                    setTimeout(() => {
                        $("#block .product-group-arrow-prev").click(function() {
                            $("#block .owl-prev").click();
                        })

                        $("#block .product-group-arrow-next").click(function() {
                            $("#block .owl-next").click();
                        })
                    }, 1000);
                    $("#block .product-group").slideDown();
                });
            </script>'
        ]; 
        return $data;
    }

    public function getBrandProducts()
    {
        [
            "current_page" => 1, 
            "data" => [
                [
                    "id" => 107667, 
                    "product_id" => 56118, 
                    "parent_id" => null, 
                    "locale" => "ar", 
                    "channel" => "demo", 
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
                    "require_shipping" => 0 
                ], 
                [
                    "id" => 107663, 
                    "product_id" => 56116, 
                    "parent_id" => null, 
                    "locale" => "ar", 
                    "channel" => "demo", 
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
                    "require_shipping" => 0 
                ], 
                [
                    "id" => 107661, 
                    "product_id" => 56115, 
                    "parent_id" => null, 
                    "locale" => "ar", 
                    "channel" => "demo", 
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
                    "require_shipping" => 0 
                ], 
                [
                    "id" => 106921, 
                    "product_id" => 55683, 
                    "parent_id" => null, 
                    "locale" => "ar", 
                    "channel" => "demo", 
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
                    "require_shipping" => 0 
                ], 
                [
                    "id" => 106919, 
                    "product_id" => 55682, 
                    "parent_id" => null, 
                    "locale" => "ar", 
                    "channel" => "demo", 
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
                    "require_shipping" => 0 
                ], 
                [
                    "id" => 106891, 
                    "product_id" => 55668, 
                    "parent_id" => null, 
                    "locale" => "ar", 
                    "channel" => "demo", 
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
                    "require_shipping" => 0 
                ], 
                [
                    "id" => 103671, 
                    "product_id" => 54040, 
                    "parent_id" => null, 
                    "locale" => "ar", 
                    "channel" => "demo", 
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
                    "require_shipping" => 0 
                ], 
                [
                    "id" => 103667, 
                    "product_id" => 54038, 
                    "parent_id" => null, 
                    "locale" => "ar", 
                    "channel" => "demo", 
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
                    "require_shipping" => 0 
                ], 
                [
                    "id" => 103665, 
                    "product_id" => 54037, 
                    "parent_id" => null, 
                    "locale" => "ar", 
                    "channel" => "demo", 
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
                    "require_shipping" => 1 
                ], 
                [
                    "id" => 102523, 
                    "product_id" => 53483, 
                    "parent_id" => null, 
                    "locale" => "ar", 
                    "channel" => "demo", 
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
                    "require_shipping" => 0 
                ], 
                [
                    "id" => 102497, 
                    "product_id" => 53470, 
                    "parent_id" => null, 
                    "locale" => "ar", 
                    "channel" => "demo", 
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
                    "require_shipping" => 0 
                ], 
                [
                    "id" => 102485, 
                    "product_id" => 53464, 
                    "parent_id" => null, 
                    "locale" => "ar", 
                    "channel" => "demo", 
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
                    "require_shipping" => 0 
                ], 
                [
                    "id" => 99206, 
                    "product_id" => 51762, 
                    "parent_id" => null, 
                    "locale" => "ar", 
                    "channel" => "demo", 
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
                    "require_shipping" => 0 
                ], 
                [
                    "id" => 74870, 
                    "product_id" => 37810, 
                    "parent_id" => null, 
                    "locale" => "ar", 
                    "channel" => "demo", 
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
                    "require_shipping" => 0 
                ], 
                [
                    "id" => 74868, 
                    "product_id" => 37809, 
                    "parent_id" => null, 
                    "locale" => "ar", 
                    "channel" => "demo", 
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
                    "require_shipping" => 0 
                ], 
                [
                    "id" => 74866, 
                    "product_id" => 37808, 
                    "parent_id" => null, 
                    "locale" => "ar", 
                    "channel" => "demo", 
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
                    "require_shipping" => 0 
                ], 
                [
                    "id" => 48795, 
                    "product_id" => 24644, 
                    "parent_id" => null, 
                    "locale" => "ar", 
                    "channel" => "demo", 
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
                    "require_shipping" => 0 
                ], 
                [
                    "id" => 48793, 
                    "product_id" => 24643, 
                    "parent_id" => null, 
                    "locale" => "ar", 
                    "channel" => "demo", 
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
                    "require_shipping" => 0 
                ], 
                [
                    "id" => 48791, 
                    "product_id" => 24642, 
                    "parent_id" => null, 
                    "locale" => "ar", 
                    "channel" => "demo", 
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
                    "require_shipping" => 0 
                ], 
                [
                    "id" => 48789, 
                    "product_id" => 24641, 
                    "parent_id" => null, 
                    "locale" => "ar", 
                    "channel" => "demo", 
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
                    "require_shipping" => 0 
                ] 
            ], 
            "first_page_url" => "/brands/%D8%A7%D8%AC%D9%85%D9%84%20%D9%84%D9%84%D8%B9%D8%B7%D9%88%D8%B1/brand-12?page=1", 
            "from" => 1, 
            "last_page" => 2, 
            "last_page_url" => "/brands/%D8%A7%D8%AC%D9%85%D9%84%20%D9%84%D9%84%D8%B9%D8%B7%D9%88%D8%B1/brand-12?page=2", 
            "next_page_url" => "/brands/%D8%A7%D8%AC%D9%85%D9%84%20%D9%84%D9%84%D8%B9%D8%B7%D9%88%D8%B1/brand-12?page=2", 
            "path" => "/brands/%D8%A7%D8%AC%D9%85%D9%84%20%D9%84%D9%84%D8%B9%D8%B7%D9%88%D8%B1/brand-12", 
            "per_page" => 20, 
            "prev_page_url" => null, 
            "to" => 20, 
            "total" => 24 
        ]; 
    }

    public function dataTableDownloadable()
    {
        return  [
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
               "product_downloadable_link_id" => 146, 
               "invoice_state" => null, 
               "increment_id" => 1696, 
               "remaining_downloads" => 0 
            ], 
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
                "product_downloadable_link_id" => 145, 
                "invoice_state" => null, 
                "increment_id" => 1696, 
                "remaining_downloads" => 0 
            ] 
        ];
    }

    public function getTypeInstance()
    {
        return $this;
    }
    public function showQuantityBox()
    {
        return true;
    }
    public function route()
    {
        return;
    }
    public function canPlaceOrders()
    {
        return true;
    }
    public function getLoyaltyProgram()
    {
        return true;
    }
    public function getFreeShipping()
    {
        return true;
    }
    public function getFreeCoupons()
    {
        return true;
    }
    public function getFreeProducts()
    {
        return true;
    }
    public function getad()
    {
        return [
            "id" => 31,
            "icon" => "icon-bell",
            "title" => "asdf",
            "description" => "asdf",
            "expire_date" => "2025-04-30 00:00:00",
            "pages" => "all",
            "font_color" => " #ffffff",
            "background_color" => "#000000",
            "link" => '{"link_type":"category","type_id":"182","prod_name":null,"slug":"\u0639\u0637\u0648\u0631 \u0646\u0633\u0627\u0626\u064a\u0629"}',
            "is_active" => 1,
            "company_id" => 38,
            "created_at" => "2025-04-06 16:36:42",
            "updated_at" => "2025-04-06 17:25:48",
        ];
    }
    public function getPath()
    {
        return true;
    }



}
