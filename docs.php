<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>توثيق Laravel | Laravel العربي</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        laravel: {
                            red: '#FB503B',
                            dark: '#292D32',
                            light: '#F0F4F8',
                            gray: '#64748B',
                            accent: '#0EA5E9'
                        }
                    }
                }
            }
        }
    </script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@300;400;500;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.8.0/styles/atom-one-dark.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.8.0/highlight.min.js"></script>
    <script>hljs.highlightAll();</script>
    <style>
        * {
            font-family: 'Tajawal', sans-serif;
        }
        
        .glow {
            box-shadow: 0 0 30px rgba(251, 80, 59, 0.15);
        }
        
        .nav-link {
            position: relative;
        }
        
        .nav-link::after {
            content: '';
            position: absolute;
            bottom: -5px;
            right: 0;
            width: 0;
            height: 2px;
            background: #FB503B;
            transition: width 0.3s ease;
        }
        
        .nav-link:hover::after {
            width: 100%;
        }
        
        .accent-gradient {
            background: linear-gradient(135deg, #FB503B 0%, #FF8A80 100%);
        }
        
        .second-gradient {
            background: linear-gradient(135deg, #0EA5E9 0%, #38BDF8 100%);
        }
        
        .code-block {
            direction: ltr;
            text-align: left;
            border-radius: 8px;
            margin: 20px 0;
            font-family: 'Courier New', monospace;
        }
        
        .sidebar {
            height: calc(100vh - 8rem);
            overflow-y: auto;
            position: sticky;
            top: 8rem;
            scrollbar-width: thin;
            scrollbar-color: #FB503B #F0F4F8;
        }
        
        .sidebar::-webkit-scrollbar {
            width: 6px;
        }
        
        .sidebar::-webkit-scrollbar-track {
            background: #F0F4F8;
        }
        
        .sidebar::-webkit-scrollbar-thumb {
            background-color: #FB503B;
            border-radius: 6px;
        }
        
        .doc-section {
            scroll-margin-top: 8rem;
        }
        
        code {
            font-family: 'Courier New', monospace;
            direction: ltr;
            unicode-bidi: bidi-override;
            display: inline-block;
        }
    </style>
</head>
<body class="bg-white">
    <!-- Top Bar -->
    <div class="bg-laravel-dark text-white text-sm py-2 sticky top-0 z-50">
        <div class="container mx-auto px-4 flex justify-between items-center">
            <div>
                <span>Laravel v10.x</span>
                <span class="mx-2">|</span>
                <a href="#" class="hover:text-laravel-red">
                    <i class="fab fa-github ml-1"></i>GitHub
                </a>
                <span class="mx-2">|</span>
                <a href="#" class="hover:text-laravel-red">
                    <i class="fab fa-telegram ml-1"></i>Telegram
                </a>
            </div>
            <div class="flex items-center">
                <a href="#" class="ml-4 hover:text-laravel-red">English</a>
                <a href="#" class="ml-4 hover:text-laravel-red">
                    <i class="fas fa-sun"></i>
                </a>
                <a href="#" class="ml-4 hover:text-laravel-red">
                    <i class="fas fa-search"></i>
                </a>
            </div>
        </div>
    </div>

    <!-- Header -->
    <header class="bg-white shadow-sm py-4 sticky top-8 z-40">
        <div class="container mx-auto px-4">
            <div class="flex justify-between items-center">
                <a href="index.php" class="flex items-center">
                    <svg class="h-10 w-10 text-laravel-red" viewBox="0 0 50 52" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M49.626 11.564a.809.809 0 0 1 .028.209v12.972a.8.8 0 0 1-.402.694l-9.209 5.302V39.25c0 .286-.152.55-.4.694L20.42 51.01c-.044.025-.092.041-.14.058-.018.006-.035.017-.054.022a.805.805 0 0 1-.41 0c-.022-.006-.042-.018-.063-.026-.044-.016-.09-.03-.132-.054L.402 39.944A.801.801 0 0 1 0 39.25V6.334c0-.072.01-.142.028-.21.006-.023.02-.044.028-.067.015-.042.029-.085.051-.124.015-.026.037-.047.055-.071.023-.032.044-.065.071-.093.023-.023.053-.04.079-.06.029-.024.055-.05.088-.069h.001l9.61-5.533a.802.802 0 0 1 .8 0l9.61 5.533h.002c.032.02.059.045.088.068.026.02.055.038.078.06.028.029.048.062.072.094.017.024.04.045.054.071.023.04.036.082.052.124.008.023.022.044.028.068a.809.809 0 0 1 .028.209v20.559l8.008-4.611v-10.51c0-.07.01-.141.028-.208.007-.024.02-.045.028-.068.016-.042.03-.085.052-.124.015-.026.037-.047.054-.071.024-.032.044-.065.072-.093.023-.023.052-.04.078-.06.03-.024.056-.05.088-.069h.001l9.611-5.533a.801.801 0 0 1 .8 0l9.61 5.533c.034.02.06.045.09.068.025.02.054.038.077.06.028.029.048.062.072.094.018.024.04.045.054.071.023.039.036.082.052.124.009.023.022.044.028.068z" fill="currentColor"/>
                    </svg>
                    <span class="text-2xl font-bold text-laravel-dark mr-2">Laravel <span class="text-laravel-red">العربي</span></span>
                </a>

                <nav class="hidden md:flex">
                    <a href="index.php" class="nav-link mx-4 text-laravel-dark hover:text-laravel-red font-medium">الرئيسية</a>
                    <a href="docs.php" class="nav-link mx-4 text-laravel-red font-medium border-b-2 border-laravel-red">التوثيق</a>
                    <a href="#" class="nav-link mx-4 text-laravel-dark hover:text-laravel-red font-medium">المكتبات</a>
                    <a href="#" class="nav-link mx-4 text-laravel-dark hover:text-laravel-red font-medium">الفيديوهات</a>
                    <a href="#" class="nav-link mx-4 text-laravel-dark hover:text-laravel-red font-medium">المجتمع</a>
                </nav>

                <div class="flex items-center">
                    <a href="#" class="hidden md:block py-2 px-4 bg-transparent border border-laravel-red text-laravel-red hover:bg-laravel-red hover:text-white rounded-lg mr-3 transition-colors duration-300">
                        تسجيل الدخول
                    </a>
                    <button class="md:hidden text-laravel-dark">
                        <i class="fas fa-bars text-xl"></i>
                    </button>
                </div>
            </div>
        </div>
    </header>

    <!-- Documentation Content -->
    <main class="container mx-auto px-4 py-8">
        <div class="flex flex-col md:flex-row">
            <!-- Sidebar -->
            <div class="md:w-1/4 lg:w-1/5 md:ml-6 mb-8 md:mb-0">
                <div class="sidebar bg-laravel-light p-4 rounded-lg">
                    <h3 class="text-lg font-bold text-laravel-dark mb-4">محتويات التوثيق</h3>
                    
                    <div class="mb-6">
                        <h4 class="font-bold text-laravel-red mb-2">البداية</h4>
                        <ul class="space-y-2">
                            <li><a href="#installation" class="text-laravel-dark hover:text-laravel-red">التثبيت</a></li>
                            <li><a href="#configuration" class="text-laravel-dark hover:text-laravel-red">الإعدادات</a></li>
                            <li><a href="#directory-structure" class="text-laravel-dark hover:text-laravel-red">هيكل المشروع</a></li>
                            <li><a href="#frontend" class="text-laravel-dark hover:text-laravel-red">واجهة المستخدم</a></li>
                        </ul>
                    </div>
                    
                    <div class="mb-6">
                        <h4 class="font-bold text-laravel-red mb-2">المفاهيم الأساسية</h4>
                        <ul class="space-y-2">
                            <li><a href="#routing" class="text-laravel-dark hover:text-laravel-red">التوجيه (Routing)</a></li>
                            <li><a href="#controllers" class="text-laravel-dark hover:text-laravel-red">المتحكمات (Controllers)</a></li>
                            <li><a href="#requests" class="text-laravel-dark hover:text-laravel-red">الطلبات (Requests)</a></li>
                            <li><a href="#responses" class="text-laravel-dark hover:text-laravel-red">الاستجابات (Responses)</a></li>
                            <li><a href="#views" class="text-laravel-dark hover:text-laravel-red">العروض (Views)</a></li>
                        </ul>
                    </div>
                    
                    <div class="mb-6">
                        <h4 class="font-bold text-laravel-red mb-2">قواعد البيانات</h4>
                        <ul class="space-y-2">
                            <li><a href="#database-config" class="text-laravel-dark hover:text-laravel-red">الإعدادات</a></li>
                            <li><a href="#migrations" class="text-laravel-dark hover:text-laravel-red">الترحيلات (Migrations)</a></li>
                            <li><a href="#eloquent" class="text-laravel-dark hover:text-laravel-red">Eloquent ORM</a></li>
                            <li><a href="#query-builder" class="text-laravel-dark hover:text-laravel-red">منشئ الاستعلامات</a></li>
                        </ul>
                    </div>
                    
                    <div class="mb-6">
                        <h4 class="font-bold text-laravel-red mb-2">الأمان</h4>
                        <ul class="space-y-2">
                            <li><a href="#authentication" class="text-laravel-dark hover:text-laravel-red">المصادقة</a></li>
                            <li><a href="#authorization" class="text-laravel-dark hover:text-laravel-red">التفويض</a></li>
                            <li><a href="#csrf" class="text-laravel-dark hover:text-laravel-red">حماية CSRF</a></li>
                        </ul>
                    </div>
                    
                    <div class="mb-6">
                        <h4 class="font-bold text-laravel-red mb-2">الميزات المتقدمة</h4>
                        <ul class="space-y-2">
                            <li><a href="#middleware" class="text-laravel-dark hover:text-laravel-red">الوسيطات (Middleware)</a></li>
                            <li><a href="#validation" class="text-laravel-dark hover:text-laravel-red">التحقق من البيانات</a></li>
                            <li><a href="#api" class="text-laravel-dark hover:text-laravel-red">تطوير واجهات API</a></li>
                            <li><a href="#testing" class="text-laravel-dark hover:text-laravel-red">اختبار التطبيق</a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Main Documentation -->
            <div class="md:w-3/4 lg:w-4/5">
                <div class="bg-white p-6 rounded-lg shadow-sm">
                    <!-- Installation Section -->
                    <section id="installation" class="mb-12 doc-section">
                        <h2 class="text-3xl font-bold text-laravel-dark mb-6">التثبيت</h2>
                        <p class="text-laravel-gray mb-6">يتطلب Laravel بعض المتطلبات الأساسية قبل التثبيت. تأكد من أن بيئة التطوير لديك تلبي المتطلبات التالية:</p>
                        
                        <div class="bg-laravel-light p-4 rounded-lg mb-6">
                            <h3 class="text-xl font-bold mb-3">متطلبات النظام</h3>
                            <ul class="list-disc list-inside space-y-2 text-laravel-gray">
                                <li>PHP >= 8.1</li>
                                <li>BCMath PHP Extension</li>
                                <li>Ctype PHP Extension</li>
                                <li>JSON PHP Extension</li>
                                <li>Mbstring PHP Extension</li>
                                <li>OpenSSL PHP Extension</li>
                                <li>PDO PHP Extension</li>
                                <li>Tokenizer PHP Extension</li>
                                <li>XML PHP Extension</li>
                            </ul>
                        </div>
                        
                        <h3 class="text-2xl font-bold text-laravel-dark mb-4">تثبيت Laravel</h3>
                        <p class="text-laravel-gray mb-4">هناك عدة طرق لتثبيت Laravel:</p>
                        
                        <h4 class="text-xl font-bold mb-3">باستخدام Composer Create-Project</h4>
                        <p class="text-laravel-gray mb-4">يمكنك استخدام أمر <code class="bg-gray-100 text-laravel-red px-2 py-1 rounded">composer create-project</code> لإنشاء مشروع Laravel جديد:</p>
                        
                        <pre class="code-block"><code class="language-bash">composer create-project laravel/laravel example-app
cd example-app
php artisan serve</code></pre>
                        
                        <p class="text-laravel-gray mb-4">سيقوم الأمر الأخير بتشغيل خادم التطوير المدمج في Laravel على العنوان <code class="bg-gray-100 text-laravel-red px-2 py-1 rounded">http://localhost:8000</code>.</p>
                        
                        <h4 class="text-xl font-bold mb-3">باستخدام Laravel Installer</h4>
                        <p class="text-laravel-gray mb-4">يمكنك أيضًا تثبيت أداة Laravel العالمية عبر Composer:</p>
                        
                        <pre class="code-block"><code class="language-bash">composer global require laravel/installer
laravel new example-app
cd example-app
php artisan serve</code></pre>
                        
                        <h4 class="text-xl font-bold mb-3">باستخدام Docker مع Laravel Sail</h4>
                        <p class="text-laravel-gray mb-4">يوفر Laravel أداة Sail وهي واجهة سطر أوامر خفيفة للتفاعل مع بيئة Docker:</p>
                        
                        <pre class="code-block"><code class="language-bash">curl -s "https://laravel.build/example-app" | bash
cd example-app
./vendor/bin/sail up</code></pre>
                        
                        <p class="text-laravel-gray">هذا سيقوم بإنشاء مشروع Laravel مع بيئة Docker كاملة تشمل PHP، MySQL، Redis، وخدمات أخرى.</p>
                    </section>
                    
                    <!-- Configuration Section -->
                    <section id="configuration" class="mb-12 doc-section">
                        <h2 class="text-3xl font-bold text-laravel-dark mb-6">الإعدادات</h2>
                        <p class="text-laravel-gray mb-6">بعد تثبيت Laravel، ستحتاج إلى تكوين بعض الإعدادات الأساسية للتطبيق.</p>
                        
                        <h3 class="text-2xl font-bold text-laravel-dark mb-4">ملف .env</h3>
                        <p class="text-laravel-gray mb-4">يحتوي ملف <code class="bg-gray-100 text-laravel-red px-2 py-1 rounded">.env</code> على متغيرات البيئة التي يستخدمها التطبيق. قم بنسخ ملف <code class="bg-gray-100 text-laravel-red px-2 py-1 rounded">.env.example</code> إلى <code class="bg-gray-100 text-laravel-red px-2 py-1 rounded">.env</code>:</p>
                        
                        <pre class="code-block"><code class="language-bash">cp .env.example .env</code></pre>
                        
                        <p class="text-laravel-gray mb-4">ثم قم بتوليد مفتاح التطبيق:</p>
                        
                        <pre class="code-block"><code class="language-bash">php artisan key:generate</code></pre>
                        
                        <h3 class="text-2xl font-bold text-laravel-dark mb-4">إعدادات قاعدة البيانات</h3>
                        <p class="text-laravel-gray mb-4">عدل الإعدادات في ملف <code class="bg-gray-100 text-laravel-red px-2 py-1 rounded">.env</code> لتكوين اتصال قاعدة البيانات:</p>
                        
                        <pre class="code-block"><code class="language-env">DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=laravel
DB_USERNAME=root
DB_PASSWORD=</code></pre>
                        
                        <h3 class="text-2xl font-bold text-laravel-dark mb-4">ملفات التكوين</h3>
                        <p class="text-laravel-gray mb-4">يحتوي مجلد <code class="bg-gray-100 text-laravel-red px-2 py-1 rounded">config</code> على جميع ملفات إعدادات التطبيق. راجع هذه الملفات للتعرف على الخيارات المتاحة:</p>
                        
                        <ul class="list-disc list-inside space-y-2 text-laravel-gray mb-4">
                            <li><code class="bg-gray-100 text-laravel-red px-2 py-1 rounded">config/app.php</code> - إعدادات التطبيق العامة</li>
                            <li><code class="bg-gray-100 text-laravel-red px-2 py-1 rounded">config/database.php</code> - إعدادات قاعدة البيانات</li>
                            <li><code class="bg-gray-100 text-laravel-red px-2 py-1 rounded">config/cache.php</code> - إعدادات التخزين المؤقت</li>
                            <li><code class="bg-gray-100 text-laravel-red px-2 py-1 rounded">config/mail.php</code> - إعدادات البريد الإلكتروني</li>
                        </ul>
                    </section>
                    
                    <!-- Directory Structure Section -->
                    <section id="directory-structure" class="mb-12 doc-section">
                        <h2 class="text-3xl font-bold text-laravel-dark mb-6">هيكل المشروع</h2>
                        <p class="text-laravel-gray mb-6">يتبع مشروع Laravel هيكلًا منظمًا للملفات والمجلدات. فهم هذا الهيكل يساعدك على التنقل في المشروع بسهولة.</p>
                        
                        <h3 class="text-2xl font-bold text-laravel-dark mb-4">المجلدات الرئيسية</h3>
                        
                        <div class="mb-6">
                            <h4 class="text-xl font-bold mb-2">مجلد app</h4>
                            <p class="text-laravel-gray mb-4">يحتوي على الكود الأساسي للتطبيق، بما في ذلك:</p>
                            <ul class="list-disc list-inside space-y-2 text-laravel-gray mb-4">
                                <li><code class="bg-gray-100 text-laravel-red px-2 py-1 rounded">app/Console</code> - أوامر Artisan المخصصة</li>
                                <li><code class="bg-gray-100 text-laravel-red px-2 py-1 rounded">app/Exceptions</code> - معالجة الاستثناءات</li>
                                <li><code class="bg-gray-100 text-laravel-red px-2 py-1 rounded">app/Http</code> - المتحكمات، الوسيطات، والطلبات</li>
                                <li><code class="bg-gray-100 text-laravel-red px-2 py-1 rounded">app/Models</code> - نماذج Eloquent</li>
                                <li><code class="bg-gray-100 text-laravel-red px-2 py-1 rounded">app/Providers</code> - مزودي خدمات التطبيق</li>
                            </ul>
                        </div>
                        
                        <div class="mb-6">
                            <h4 class="text-xl font-bold mb-2">مجلد config</h4>
                            <p class="text-laravel-gray mb-4">يحتوي على جميع ملفات إعدادات التطبيق.</p>
                        </div>
                        
                        <div class="mb-6">
                            <h4 class="text-xl font-bold mb-2">مجلد database</h4>
                            <p class="text-laravel-gray mb-4">يحتوي على ترحيلات قاعدة البيانات، البذور، والمصانع:</p>
                            <ul class="list-disc list-inside space-y-2 text-laravel-gray mb-4">
                                <li><code class="bg-gray-100 text-laravel-red px-2 py-1 rounded">database/migrations</code> - ترحيلات قاعدة البيانات</li>
                                <li><code class="bg-gray-100 text-laravel-red px-2 py-1 rounded">database/seeders</code> - بذور قاعدة البيانات</li>
                                <li><code class="bg-gray-100 text-laravel-red px-2 py-1 rounded">database/factories</code> - مصانع النماذج</li>
                            </ul>
                        </div>
                        
                        <div class="mb-6">
                            <h4 class="text-xl font-bold mb-2">مجلد public</h4>
                            <p class="text-laravel-gray mb-4">نقطة الدخول للتطبيق (index.php) والأصول العامة كالصور وملفات CSS و JavaScript.</p>
                        </div>
                        
                        <div class="mb-6">
                            <h4 class="text-xl font-bold mb-2">مجلد resources</h4>
                            <p class="text-laravel-gray mb-4">يحتوي على العروض، الأصول الخام (SASS، JavaScript)، وملفات اللغة:</p>
                            <ul class="list-disc list-inside space-y-2 text-laravel-gray mb-4">
                                <li><code class="bg-gray-100 text-laravel-red px-2 py-1 rounded">resources/views</code> - قوالب Blade</li>
                                <li><code class="bg-gray-100 text-laravel-red px-2 py-1 rounded">resources/lang</code> - ملفات الترجمة</li>
                                <li><code class="bg-gray-100 text-laravel-red px-2 py-1 rounded">resources/css</code> - ملفات CSS</li>
                                <li><code class="bg-gray-100 text-laravel-red px-2 py-1 rounded">resources/js</code> - ملفات JavaScript</li>
                            </ul>
                        </div>
                        
                        <div class="mb-6">
                            <h4 class="text-xl font-bold mb-2">مجلد routes</h4>
                            <p class="text-laravel-gray mb-4">يحتوي على جميع تعريفات المسارات للتطبيق:</p>
                            <ul class="list-disc list-inside space-y-2 text-laravel-gray mb-4">
                                <li><code class="bg-gray-100 text-laravel-red px-2 py-1 rounded">routes/web.php</code> - مسارات الويب</li>
                                <li><code class="bg-gray-100 text-laravel-red px-2 py-1 rounded">routes/api.php</code> - مسارات API</li>
                                <li><code class="bg-gray-100 text-laravel-red px-2 py-1 rounded">routes/console.php</code> - أوامر Artisan</li>
                                <li><code class="bg-gray-100 text-laravel-red px-2 py-1 rounded">routes/channels.php</code> - قنوات البث</li>
                            </ul>
                        </div>
                        
                        <div class="mb-6">
                            <h4 class="text-xl font-bold mb-2">مجلد storage</h4>
                            <p class="text-laravel-gray mb-4">يحتوي على الملفات المنشأة من التطبيق، مثل السجلات، ملفات الجلسة، وملفات التخزين المؤقت.</p>
                        </div>
                    </section>
                    
                    <!-- Routing Section -->
                    <section id="routing" class="mb-12 doc-section">
                        <h2 class="text-3xl font-bold text-laravel-dark mb-6">التوجيه (Routing)</h2>
                        <p class="text-laravel-gray mb-6">يدير نظام التوجيه في Laravel توجيه HTTP طلبات المستخدم إلى المتحكمات أو الإجراءات المحددة.</p>
                        
                        <h3 class="text-2xl font-bold text-laravel-dark mb-4">تعريف المسارات الأساسية</h3>
                        <p class="text-laravel-gray mb-4">يتم تعريف المسارات في الملفات الموجودة في مجلد <code class="bg-gray-100 text-laravel-red px-2 py-1 rounded">routes</code>. الملف الرئيسي لمسارات الويب هو <code class="bg-gray-100 text-laravel-red px-2 py-1 rounded">routes/web.php</code>:</p>
                        
                        <pre class="code-block"><code class="language-php">use Illuminate\Support\Facades\Route;

// مسار بسيط يعرض نص
Route::get('/hello', function () {
    return 'Hello, World!';
});

// مسار يعرض عرض
Route::get('/', function () {
    return view('welcome');
});

// مسار يوجه إلى متحكم
Route::get('/users', [UserController::class, 'index']);
</code></pre>
                        
                        <h3 class="text-2xl font-bold text-laravel-dark mb-4">طرق الطلب المتاحة</h3>
                        <p class="text-laravel-gray mb-4">يدعم Laravel مختلف طرق HTTP:</p>
                        
                        <pre class="code-block"><code class="language-php">Route::get($uri, $callback);
Route::post($uri, $callback);
Route::put($uri, $callback);
Route::patch($uri, $callback);
Route::delete($uri, $callback);
Route::options($uri, $callback);

// استجابة لأكثر من طريقة
Route::match(['get', 'post'], '/form', $callback);

// استجابة لجميع الطرق
Route::any('/page', $callback);</code></pre>
                        
                        <h3 class="text-2xl font-bold text-laravel-dark mb-4">وسائط المسار</h3>
                        <p class="text-laravel-gray mb-4">يمكنك تحديد وسائط (متغيرات) في مساراتك لالتقاط أجزاء من URI:</p>
                        
                        <pre class="code-block"><code class="language-php">// وسيط بسيط
Route::get('/users/{id}', function ($id) {
    return 'User '.$id;
});

// وسيط اختياري
Route::get('/posts/{post?}', function ($post = null) {
    return $post ?? 'All Posts';
});

// وسائط متعددة
Route::get('/posts/{category}/{post}', function ($category, $post) {
    return "Category: $category, Post: $post";
});</code></pre>
                        
                        <h3 class="text-2xl font-bold text-laravel-dark mb-4">مسارات مسماة</h3>
                        <p class="text-laravel-gray mb-4">يمكنك تسمية المسارات لإنشاء روابط إليها بسهولة:</p>
                        
                        <pre class="code-block"><code class="language-php">Route::get('/profile', function () {
    // ...
})->name('profile');

// استخدام المسار المسمى
$url = route('profile');
return redirect()->route('profile');</code></pre>
                        
                        <h3 class="text-2xl font-bold text-laravel-dark mb-4">مجموعات المسارات</h3>
                        <p class="text-laravel-gray mb-4">يمكنك تجميع المسارات لتطبيق خصائص مشتركة عليها:</p>
                        
                        <pre class="code-block"><code class="language-php">// تطبيق بادئة مشتركة ووسيط
Route::prefix('admin')->middleware('auth')->group(function () {
    Route::get('/dashboard', function () {
        // مسار /admin/dashboard
    });
    
    Route::get('/users', function () {
        // مسار /admin/users
    });
});</code></pre>
                    </section>
                    
                    <!-- Controllers Section -->
                    <section id="controllers" class="mb-12 doc-section">
                        <h2 class="text-3xl font-bold text-laravel-dark mb-6">المتحكمات (Controllers)</h2>
                        <p class="text-laravel-gray mb-6">المتحكمات هي جزء من نمط MVC (Model-View-Controller) وتحتوي على المنطق الذي يتعامل مع طلبات HTTP.</p>
                        
                        <h3 class="text-2xl font-bold text-laravel-dark mb-4">إنشاء متحكم</h3>
                        <p class="text-laravel-gray mb-4">يمكنك إنشاء متحكم جديد باستخدام أمر Artisan:</p>
                        
                        <pre class="code-block"><code class="language-bash">php artisan make:controller UserController</code></pre>
                        
                        <p class="text-laravel-gray mb-4">إذا كنت تريد إنشاء متحكم مع طرق CRUD الأساسية:</p>
                        
                        <pre class="code-block"><code class="language-bash">php artisan make:controller UserController --resource</code></pre>
                        
                        <h3 class="text-2xl font-bold text-laravel-dark mb-4">متحكم أساسي</h3>
                        <p class="text-laravel-gray mb-4">فيما يلي مثال لمتحكم بسيط:</p>
                        
                        <pre class="code-block"><code class="language-php">namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    // عرض قائمة المستخدمين
    public function index()
    {
        $users = User::all();
        return view('users.index', ['users' => $users]);
    }
    
    // عرض مستخدم محدد
    public function show($id)
    {
        $user = User::findOrFail($id);
        return view('users.show', ['user' => $user]);
    }
    
    // عرض نموذج إنشاء مستخدم جديد
    public function create()
    {
        return view('users.create');
    }
    
    // حفظ مستخدم جديد
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8',
        ]);
        
        $user = User::create($validated);
        
        return redirect()->route('users.show', $user->id)
                         ->with('success', 'تم إنشاء المستخدم بنجاح');
    }
    
    // عرض نموذج تعديل مستخدم
    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('users.edit', ['user' => $user]);
    }
    
    // تحديث مستخدم
    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);
        
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,'.$id,
        ]);
        
        $user->update($validated);
        
        return redirect()->route('users.show', $user->id)
                         ->with('success', 'تم تحديث المستخدم بنجاح');
    }
    
    // حذف مستخدم
    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();
        
        return redirect()->route('users.index')
                         ->with('success', 'تم حذف المستخدم بنجاح');
    }
}
</code></pre>

<h3 class="text-2xl font-bold text-laravel-dark mb-4">ربط المتحكم بالمسارات</h3>
<p class="text-laravel-gray mb-4">لربط المتحكم بالمسارات:</p>

<pre class="code-block"><code class="language-php">use App\Http\Controllers\UserController;

// طريقة واحدة
Route::get('/users', [UserController::class, 'index']);

// مسارات المصادر
Route::resource('users', UserController::class);

// مسارات المصادر مع تحديد الطرق
Route::resource('users', UserController::class)->only(['index', 'show']);
Route::resource('users', UserController::class)->except(['create', 'store', 'destroy']);</code></pre>
</section>

<!-- Requests Section -->
<section id="requests" class="mb-12 doc-section">
    <h2 class="text-3xl font-bold text-laravel-dark mb-6">الطلبات (Requests)</h2>
    <p class="text-laravel-gray mb-6">تمثل كائنات Request طلبات HTTP الواردة وتوفر وسائل للوصول إلى البيانات المرسلة مع الطلب.</p>
    
    <h3 class="text-2xl font-bold text-laravel-dark mb-4">الوصول إلى بيانات الطلب</h3>
    <p class="text-laravel-gray mb-4">يمكنك الوصول إلى بيانات الطلب بعدة طرق:</p>
    
    <pre class="code-block"><code class="language-php">public function store(Request $request)
{
    // الوصول إلى جميع البيانات
    $allData = $request->all();
    
    // الوصول إلى قيمة محددة
    $name = $request->input('name');
    
    // الوصول باستخدام صيغة النقطة (لمصفوفات مترابطة)
    $firstName = $request->input('user.first_name');
    
    // الوصول باستخدام صيغة الخاصية المباشرة
    $email = $request->email;
    
    // التحقق من وجود قيمة
    if ($request->has('name')) {
        // ...
    }
    
    // القيمة الافتراضية إذا كانت غير موجودة
    $page = $request->input('page', 1);
}</code></pre>

<h3 class="text-2xl font-bold text-laravel-dark mb-4">ملفات الطلب</h3>
<p class="text-laravel-gray mb-4">للوصول إلى الملفات المرفوعة في الطلب:</p>

<pre class="code-block"><code class="language-php">public function store(Request $request)
{
    // التحقق من وجود ملف
    if ($request->hasFile('photo')) {
        // الحصول على الملف
        $file = $request->file('photo');
        
        // التأكد من صحة الملف المرفوع
        if ($file->isValid()) {
            // الحصول على اسم الملف الأصلي
            $filename = $file->getClientOriginalName();
            
            // الحصول على امتداد الملف
            $extension = $file->getClientOriginalExtension();
            
            // الحصول على حجم الملف
            $size = $file->getSize();
            
            // تخزين الملف
            $path = $file->store('photos');
            // أو تخزينه باسم مخصص
            $path = $file->storeAs('photos', $filename);
        }
    }
}</code></pre>

<h3 class="text-2xl font-bold text-laravel-dark mb-4">طلبات الفورم طلبات التحقق</h3>
<p class="text-laravel-gray mb-4">يمكنك إنشاء فئات طلب مخصصة للتحقق من البيانات:</p>

<pre class="code-block"><code class="language-bash">php artisan make:request StoreUserRequest</code></pre>

<pre class="code-block"><code class="language-php">namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUserRequest extends FormRequest
{
    /**
     * تحديد ما إذا كان الطلب مسموح به
     */
    public function authorize()
    {
        return true; // يمكن استخدام المنطق لتحديد التفويض
    }

    /**
     * قواعد التحقق
     */
    public function rules()
    {
        return [
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8|confirmed',
        ];
    }
    
    /**
     * رسائل الخطأ المخصصة
     */
    public function messages()
    {
        return [
            'name.required' => 'حقل الاسم مطلوب',
            'email.unique' => 'البريد الإلكتروني مستخدم بالفعل',
        ];
    }
}</code></pre>

<p class="text-laravel-gray mb-4">ثم استخدم طلب التحقق المخصص في المتحكم:</p>

<pre class="code-block"><code class="language-php">public function store(StoreUserRequest $request)
{
    // البيانات مصادق عليها بالفعل
    $validated = $request->validated();
    
    // إنشاء المستخدم
    $user = User::create($validated);
    
    return redirect()->route('users.show', $user->id);
}</code></pre>
</section>

<!-- Responses Section -->
<section id="responses" class="mb-12 doc-section">
    <h2 class="text-3xl font-bold text-laravel-dark mb-6">الاستجابات (Responses)</h2>
    <p class="text-laravel-gray mb-6">تمثل الاستجابات البيانات المرسلة مرة أخرى إلى المستخدم.</p>
    
    <h3 class="text-2xl font-bold text-laravel-dark mb-4">أنواع الاستجابات الأساسية</h3>
    <p class="text-laravel-gray mb-4">يمكنك إرجاع أنواع مختلفة من الاستجابات:</p>
    
    <pre class="code-block"><code class="language-php">// إرجاع سلسلة نصية
return 'Hello World';

// إرجاع مصفوفة (سيتم تحويلها تلقائيًا إلى JSON)
return ['name' => 'John', 'age' => 30];

// إرجاع عرض
return view('welcome', ['name' => 'John']);

// إرجاع كائن استجابة
return response('Hello World', 200)
    ->header('Content-Type', 'text/plain');

// إرجاع JSON
return response()->json([
    'name' => 'John',
    'age' => 30
]);

// تنزيل ملف
return response()->download($pathToFile);

// عرض ملف
return response()->file($pathToFile);</code></pre>

<h3 class="text-2xl font-bold text-laravel-dark mb-4">التحويلات (Redirects)</h3>
<p class="text-laravel-gray mb-4">يمكنك إرجاع تحويلات:</p>

<pre class="code-block"><code class="language-php">// تحويل إلى URL
return redirect('/home');

// تحويل إلى مسار مسمى
return redirect()->route('users.show', ['id' => 1]);

// تحويل إلى متحكم وإجراء
return redirect()->action([UserController::class, 'show'], ['id' => 1]);

// تحويل للخلف
return redirect()->back();

// تحويل مع بيانات الجلسة المؤقتة
return redirect()->route('users.index')
    ->with('success', 'تم حفظ البيانات بنجاح');</code></pre>

<h3 class="text-2xl font-bold text-laravel-dark mb-4">رموز الحالة HTTP</h3>
<p class="text-laravel-gray mb-4">يمكنك ضبط رموز حالة HTTP للاستجابات:</p>

<pre class="code-block"><code class="language-php">// ضبط رمز الحالة
return response('محتوى', 201);

// استجابات شائعة
return response()->noContent(); // 204
return response()->json(['error' => 'غير مصرح به'], 401);
return response()->json(['error' => 'غير موجود'], 404);
return response()->json(['error' => 'خطأ في الخادم'], 500);</code></pre>
</section>

<!-- Views Section -->
<section id="views" class="mb-12 doc-section">
    <h2 class="text-3xl font-bold text-laravel-dark mb-6">العروض (Views)</h2>
    <p class="text-laravel-gray mb-6">تستخدم العروض لفصل عرض البيانات عن منطق التطبيق. تستخدم Laravel محرك قوالب Blade.</p>
    
    <h3 class="text-2xl font-bold text-laravel-dark mb-4">إنشاء عرض</h3>
    <p class="text-laravel-gray mb-4">تُخزن العروض في المجلد <code class="bg-gray-100 text-laravel-red px-2 py-1 rounded">resources/views</code>. على سبيل المثال، قد يبدو عرض بسيط <code class="bg-gray-100 text-laravel-red px-2 py-1 rounded">resources/views/welcome.blade.php</code> كما يلي:</p>
    
    <pre class="code-block"><code class="language-html"><!-- resources/views/welcome.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>مرحبًا</title>
</head>
<body>
    <h1>مرحبًا، {{ $name }}!</h1>
</body>
</html></code></pre>

<h3 class="text-2xl font-bold text-laravel-dark mb-4">عرض العروض من المتحكم</h3>
<p class="text-laravel-gray mb-4">لعرض العروض من المتحكم:</p>

<pre class="code-block"><code class="language-php">public function show()
{
    return view('welcome', ['name' => 'John']);
    
    // أو بدالة with
    return view('welcome')->with('name', 'John');
    
    // أو باستخدام الكائن عبر compact
    $name = 'John';
    return view('welcome', compact('name'));
}</code></pre>

<h3 class="text-2xl font-bold text-laravel-dark mb-4">وسم Blade الأساسية</h3>
<p class="text-laravel-gray mb-4">توفر Blade العديد من الوسوم للقوالب:</p>

<pre class="code-block"><code class="language-php">{{-- هذا تعليق --}}

{{-- عرض البيانات --}}
{{ $variable }} {{-- قيمة المتغير مع حماية من XSS --}}
{!! $variable !!} {{-- قيمة المتغير بدون حماية --}}

{{-- العبارات الشرطية --}}
@if($user->isAdmin)
    أهلاً يا مسؤول!
@elseif($user->isModerator)
    أهلاً يا مشرف!
@else
    أهلاً يا مستخدم!
@endif

{{-- عبارات تبدأ ب unless --}}
@unless($user->isAdmin)
    أنت لست مسؤولاً.
@endunless

{{-- الحلقات التكرارية --}}
@foreach($users as $user)
    <p>{{ $user->name }}</p>
@endforeach

@for($i = 0; $i < 10; $i++)
    <p>الرقم: {{ $i }}</p>
@endfor

@while($condition)
    <p>الحلقة تعمل</p>
@endwhile

{{-- القوالب --}}
@extends('layouts.app')

@section('title', 'عنوان الصفحة')

@section('content')
    <h1>محتوى الصفحة</h1>
@endsection

{{-- تضمين جزء من العرض --}}
@include('shared.errors')

{{-- تضمين جزء شرطيًا --}}
@includeWhen($boolean, 'view.name')

{{-- تضمين عرض أول مرة --}}
@includeFirst(['custom.admin', 'admin'], ['some' => 'data'])</code></pre>

<h3 class="text-2xl font-bold text-laravel-dark mb-4">مكونات Blade</h3>
<p class="text-laravel-gray mb-4">توفر Blade آلية للمكونات لإعادة استخدام أجزاء من العروض:</p>

<pre class="code-block"><code class="language-php">{{-- إنشاء مكون: resources/views/components/alert.blade.php --}}
<div class="alert alert-{{ $type }}">
    {{ $slot }}
</div>

{{-- استخدام المكون --}}
@component('components.alert', ['type' => 'danger'])
    <strong>خطأ!</strong> حدث شيء ما.
@endcomponent

{{-- باستخدام صيغة الوسوم (Laravel 7+) --}}
<x-alert type="danger">
    <strong>خطأ!</strong> حدث شيء ما.
</x-alert></code></pre>
</section>

<!-- Database Config Section -->
<section id="database-config" class="mb-12 doc-section">
    <h2 class="text-3xl font-bold text-laravel-dark mb-6">إعدادات قاعدة البيانات</h2>
    <p class="text-laravel-gray mb-6">يدعم Laravel عدة أنظمة قواعد بيانات مثل MySQL و PostgreSQL و SQLite و SQL Server.</p>
    
    <h3 class="text-2xl font-bold text-laravel-dark mb-4">إعداد قاعدة البيانات</h3>
    <p class="text-laravel-gray mb-4">تحدد إعدادات قاعدة البيانات في ملف <code class="bg-gray-100 text-laravel-red px-2 py-1 rounded">.env</code> وملف <code class="bg-gray-100 text-laravel-red px-2 py-1 rounded">config/database.php</code>.</p>
    
    <pre class="code-block"><code class="language-env"># في ملف .env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=laravel
DB_USERNAME=root
DB_PASSWORD=</code></pre>

<h3 class="text-2xl font-bold text-laravel-dark mb-4">الاتصال بقاعدة البيانات</h3>
<p class="text-laravel-gray mb-4">يمكنك استخدام واجهة DB للاتصال بقاعدة البيانات وتنفيذ الاستعلامات:</p>

<pre class="code-block"><code class="language-php">use Illuminate\Support\Facades\DB;

// استعلام بسيط
$users = DB::select('select * from users where active = ?', [1]);

// إدراج بيانات
DB::insert('insert into users (name, email) values (?, ?)', ['John', 'john@example.com']);

// تحديث بيانات
$affected = DB::update('update users set votes = 100 where name = ?', ['John']);

// حذف بيانات
$deleted = DB::delete('delete from users where id = ?', [1]);</code></pre>
</section>

<!-- Migrations Section -->
<section id="migrations" class="mb-12 doc-section">
    <h2 class="text-3xl font-bold text-laravel-dark mb-6">الترحيلات (Migrations)</h2>
    <p class="text-laravel-gray mb-6">الترحيلات هي نوع من التحكم في الإصدار لقاعدة البيانات، تسمح لك بتعريف وتحديث مخطط قاعدة البيانات.</p>
    
    <h3 class="text-2xl font-bold text-laravel-dark mb-4">إنشاء ترحيل</h3>
    <p class="text-laravel-gray mb-4">يمكنك إنشاء ترحيل جديد باستخدام أمر Artisan:</p>
    
    <pre class="code-block"><code class="language-bash">php artisan make:migration create_users_table</code></pre>
    
    <p class="text-laravel-gray mb-4">مثال لملف ترحيل:</p>
    
    <pre class="code-block"><code class="language-php">use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * تشغيل الترحيل
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * تراجع عن الترحيل
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}</code></pre>

<h3 class="text-2xl font-bold text-laravel-dark mb-4">تشغيل الترحيلات</h3>
<p class="text-laravel-gray mb-4">لتشغيل جميع الترحيلات:</p>

<pre class="code-block"><code class="language-bash">php artisan migrate</code></pre>

<p class="text-laravel-gray mb-4">أوامر ترحيل أخرى:</p>

<pre class="code-block"><code class="language-bash"># التراجع عن آخر دفعة ترحيل
php artisan migrate:rollback

# التراجع عن جميع الترحيلات
php artisan migrate:reset

# التراجع ثم إعادة تشغيل جميع الترحيلات
php artisan migrate:refresh

# حذف جميع الجداول ثم إعادة تشغيل جميع الترحيلات
php artisan migrate:fresh</code></pre>

<h3 class="text-2xl font-bold text-laravel-dark mb-4">أنواع الأعمدة الشائعة</h3>
<p class="text-laravel-gray mb-4">فيما يلي أنواع الأعمدة الشائعة:</p>

<pre class="code-block"><code class="language-php">$table->id(); // صنف زيادة عددية معرف أساسي
$table->foreignId('user_id'); // معرف أجنبي
$table->string('name', 100); // سلسلة نصية بطول اختياري
$table->text('description'); // نص طويل
$table->integer('count'); // عدد صحيح
$table->bigInteger('big_count'); // عدد صحيح كبير
$table->float('amount', 8, 2); // رقم عشري
$table->decimal('amount', 8, 2); // رقم عشري دقيق
$table->boolean('confirmed'); // قيمة منطقية
$table->date('created_at'); // تاريخ
$table->dateTime('created_at'); // تاريخ ووقت
$table->time('sunrise'); // وقت
$table->timestamp('added_at'); // طابع زمني
$table->timestamps(); // أعمدة created_at و updated_at
$table->softDeletes(); // عمود deleted_at للحذف الناعم
$table->enum('difficulty', ['easy', 'medium', 'hard']); // تعداد
$table->json('options'); // سلسلة JSON
$table->jsonb('options'); // سلسلة JSON باستخدام jsonb في بوستجريسكل</code></pre>
</section>

<!-- Eloquent Section -->
<section id="eloquent" class="mb-12 doc-section">
    <h2 class="text-3xl font-bold text-laravel-dark mb-6">Eloquent ORM</h2>
    <p class="text-laravel-gray mb-6">Eloquent هو نظام ORM المدمج في Laravel (Object-Relational Mapper) ويوفر واجهة برمجة بسيطة ومريحة للتعامل مع قاعدة البيانات.</p>
    
    <h3 class="text-2xl font-bold text-laravel-dark mb-4">إنشاء نموذج</h3>
    <p class="text-laravel-gray mb-4">يمكنك إنشاء نموذج جديد باستخدام أمر Artisan:</p>
    
    <pre class="code-block"><code class="language-bash">php artisan make:model Post</code></pre>
    
    <p class="text-laravel-gray mb-4">أو إنشاء نموذج مع ترحيل:</p>
    
    <pre class="code-block"><code class="language-bash">php artisan make:model Post --migration</code></pre>
    
    <p class="text-laravel-gray mb-4">مثال لنموذج بسيط:</p>
    
    <pre class="code-block"><code class="language-php">namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    // الجدول المرتبط بالنموذج (اختياري)
    protected $table = 'posts';
    
    // المفتاح الأساسي (اختياري)
    protected $primaryKey = 'id';
    
    // إذا كان المفتاح الأساسي غير زيادة عددية
    public $incrementing = false;
    
    // نوع المفتاح الأساسي (اختياري)
    protected $keyType = 'string';
    
    // هل يستخدم النموذج طوابع الوقت
    public $timestamps = true;
    
    // تخصيص أسماء أعمدة طوابع الوقت
    const CREATED_AT = 'creation_date';
    const UPDATED_AT = 'last_update';
    
    // الصفات التي يمكن تعيينها بشكل جماعي
    protected $fillable = [
        'title', 'content', 'user_id', 'published'
    ];
    
    // الصفات التي يجب تمثيلها كمصفوفة
    protected $casts = [
        'published' => 'boolean',
        'options' => 'array',
        'published_at' => 'datetime',
    ];
}</code></pre>

<h3 class="text-2xl font-bold text-laravel-dark mb-4">العمليات الأساسية</h3>
<p class="text-laravel-gray mb-4">العمليات الأساسية مع Eloquent:</p>

<pre class="code-block"><code class="language-php">// استرجاع جميع السجلات
$posts = Post::all();

// استرجاع سجل واحد بمعرفه
$post = Post::find(1);

// استرجاع السجل الأول الذي يطابق الشرط
$post = Post::where('published', true)->first();

// التحقق من وجود السجل أو فشل بالعثور عليه
$post = Post::findOrFail(1);
$post = Post::where('published', true)->firstOrFail();

// العدد والحد والإزاحة
$posts = Post::where('published', true)
    ->orderBy('created_at', 'desc')
    ->skip(10)
    ->take(5)
    ->get();

// إنشاء سجل جديد
$post = new Post;
$post->title = 'عنوان المقال';
$post->content = 'محتوى المقال';
$post->save();

// إنشاء باستخدام التعيين الجماعي
$post = Post::create([
    'title' => 'عنوان المقال',
    'content' => 'محتوى المقال',
]);

// تحديث سجل
$post = Post::find(1);
$post->title = 'عنوان جديد';
$post->save();

// تحديث باستخدام التعيين الجماعي
$post = Post::find(1);
$post->update([
    'title' => 'عنوان جديد',
    'content' => 'محتوى جديد',
]);

// حذف سجل
$post = Post::find(1);
$post->delete();

// حذف بواسطة المعرف
Post::destroy(1);
Post::destroy([1, 2, 3]);</code></pre>

<h3 class="text-2xl font-bold text-laravel-dark mb-4">العلاقات</h3>
<p class="text-laravel-gray mb-4">تعريف العلاقات في Eloquent:</p>

<pre class="code-block"><code class="language-php">// علاقة واحد لواحد
public function profile()
{
    return $this->hasOne(Profile::class);
}

// علاقة واحد لواحد عكسية
public function user()
{
    return $this->belongsTo(User::class);
}

// علاقة واحد لمتعدد
public function posts()
{
    return $this->hasMany(Post::class);
}

// علاقة متعدد لمتعدد
public function roles()
{
    return $this->belongsToMany(Role::class);
}

// علاقة متعدد لمتعدد مع بيانات جدول وسيط
public function roles()
{
    return $this->belongsToMany(Role::class)->withPivot('column1', 'column2');
}

// علاقة واحد عبر متعدد (has many through)
public function comments()
{
    return $this->hasManyThrough(Comment::class, Post::class);
}

// علاقة متعدد-متعدد منتمية
public function posts()
{
    return $this->morphedByMany(Post::class, 'taggable');
}</code></pre>

<h3 class="text-2xl font-bold text-laravel-dark mb-4">استخدام العلاقات</h3>
<p class="text-laravel-gray mb-4">التعامل مع العلاقات:</p>

<pre class="code-block"><code class="language-php">// الوصول إلى العلاقة
$user = User::find(1);
$profile = $user->profile;
$posts = $user->posts;

// التحميل المسبق للعلاقات (حل مشكلة N+1)
$users = User::with('posts')->get();

// تحميل شرطي للعلاقات
$posts = Post::with(['user' => function ($query) {
    $query->where('active', true);
}])->get();

// فلترة باستخدام العلاقات
$users = User::has('posts', '>=', 3)->get();
$users = User::whereHas('posts', function ($query) {
    $query->where('published', true);
})->get();</code></pre>
</section>
                </div>
            </div>
        </div>
    </main>

    <!-- Footer -->
    <footer class="bg-laravel-dark text-white pt-16 pb-8">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12 mb-12">
                <div>
                    <div class="flex items-center mb-6">
                        <svg class="h-8 w-8 text-laravel-red" viewBox="0 0 50 52" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M49.626 11.564a.809.809 0 0 1 .028.209v12.972a.8.8 0 0 1-.402.694l-9.209 5.302V39.25c0 .286-.152.55-.4.694L20.42 51.01c-.044.025-.092.041-.14.058-.018.006-.035.017-.054.022a.805.805 0 0 1-.41 0c-.022-.006-.042-.018-.063-.026-.044-.016-.09-.03-.132-.054L.402 39.944A.801.801 0 0 1 0 39.25V6.334c0-.072.01-.142.028-.21.006-.023.02-.044.028-.067.015-.042.029-.085.051-.124.015-.026.037-.047.055-.071.023-.032.044-.065.071-.093.023-.023.053-.04.079-.06.029-.024.055-.05.088-.069h.001l9.61-5.533a.802.802 0 0 1 .8 0l9.61 5.533h.002c.032.02.059.045.088.068.026.02.055.038.078.06.028.029.048.062.072.094.017.024.04.045.054.071.023.04.036.082.052.124.008.023.022.044.028.068a.809.809 0 0 1 .028.209v20.559l8.008-4.611v-10.51c0-.07.01-.141.028-.208.007-.024.02-.045.028-.068.016-.042.03-.085.052-.124.015-.026.037-.047.054-.071.024-.032.044-.065.072-.093.023-.023.052-.04.078-.06.03-.024.056-.05.088-.069h.001l9.611-5.533a.801.801 0 0 1 .8 0l9.61 5.533c.034.02.06.045.09.068.025.02.054.038.077.06.028.029.048.062.072.094.018.024.04.045.054.071.023.039.036.082.052.124.009.023.022.044.028.068z" fill="currentColor"/>
                        </svg>
                        <span class="text-xl font-bold text-white mr-2">Laravel <span class="text-laravel-red">العربي</span></span>
                    </div>
                    <p class="text-gray-400 mb-6">منصة عربية شاملة لتعلم إطار عمل Laravel، تهدف إلى تسهيل الوصول للمعرفة التقنية للمطورين العرب.</p>
                    <div class="flex space-x-4 space-x-reverse">
                        <a href="#" class="text-gray-400 hover:text-laravel-red transition-colors">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-laravel-red transition-colors">
                            <i class="fab fa-github"></i>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-laravel-red transition-colors">
                            <i class="fab fa-youtube"></i>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-laravel-red transition-colors">
                            <i class="fab fa-discord"></i>
                        </a>
                    </div>
                </div>

                <div>
                    <h3 class="text-lg font-bold mb-6">روابط سريعة</h3>
                    <ul class="space-y-3">
                        <li><a href="index.php" class="text-gray-400 hover:text-laravel-red transition-colors">الصفحة الرئيسية</a></li>
                        <li><a href="docs.php" class="text-gray-400 hover:text-laravel-red transition-colors">التوثيق</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-laravel-red transition-colors">دروس فيديو</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-laravel-red transition-colors">مكتبات وإضافات</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-laravel-red transition-colors">المنتدى</a></li>
                    </ul>
                </div>

                <div>
                    <h3 class="text-lg font-bold mb-6">الموارد</h3>
                    <ul class="space-y-3">
                        <li><a href="https://laravel.com" class="text-gray-400 hover:text-laravel-red transition-colors">Laravel.com</a></li>
                        <li><a href="https://laracasts.com" class="text-gray-400 hover:text-laravel-red transition-colors">Laracasts</a></li>
                        <li><a href="https://laravel-news.com" class="text-gray-400 hover:text-laravel-red transition-colors">Laravel News</a></li>
                        <li><a href="https://github.com/laravel/laravel" class="text-gray-400 hover:text-laravel-red transition-colors">GitHub</a></li>
                    </ul>
                </div>

                <div>
                    <h3 class="text-lg font-bold mb-6">تواصل معنا</h3>
                    <ul class="space-y-3">
                        <li class="flex items-start">
                            <i class="fas fa-envelope text-laravel-red mt-1 ml-3"></i>
                            <span class="text-gray-400">info@laravel-ar.com</span>
                        </li>
                    </ul>
                    <div class="mt-6">
                        <a href="#" class="py-2 px-6 bg-laravel-red text-white rounded-lg hover:shadow-lg transition-all duration-300 inline-flex items-center">
                            <i class="fas fa-headset ml-2"></i>
                            الدعم الفني
                        </a>
                    </div>
                </div>
            </div>

            <div class="border-t border-gray-800 pt-8 text-center">
                <p class="text-gray-500">&copy; <?php echo date('Y'); ?> Laravel العربي - جميع الحقوق محفوظة</p>
            </div>
        </div>
    </footer>

    <!-- Mobile Menu Modal (Hidden by default) -->
    <div id="mobile-menu" class="fixed inset-0 bg-black bg-opacity-50 z-50 hidden">
        <div class="bg-white w-4/5 h-full absolute right-0 shadow-lg py-4">
            <div class="flex justify-between items-center px-6 border-b pb-4">
                <a href="#" class="flex items-center">
                    <svg class="h-8 w-8 text-laravel-red" viewBox="0 0 50 52" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M49.626 11.564a.809.809 0 0 1 .028.209v12.972a.8.8 0 0 1-.402.694l-9.209 5.302V39.25c0 .286-.152.55-.4.694L20.42 51.01c-.044.025-.092.041-.14.058-.018.006-.035.017-.054.022a.805.805 0 0 1-.41 0c-.022-.006-.042-.018-.063-.026-.044-.016-.09-.03-.132-.054L.402 39.944A.801.801 0 0 1 0 39.25V6.334c0-.072.01-.142.028-.21.006-.023.02-.044.028-.067.015-.042.029-.085.051-.124.015-.026.037-.047.055-.071.023-.032.044-.065.071-.093.023-.023.053-.04.079-.06.029-.024.055-.05.088-.069h.001l9.61-5.533a.802.802 0 0 1 .8 0l9.61 5.533h.002c.032.02.059.045.088.068.026.02.055.038.078.06.028.029.048.062.072.094.017.024.04.045.054.071.023.04.036.082.052.124.008.023.022.044.028.068a.809.809 0 0 1 .028.209v20.559l8.008-4.611v-10.51c0-.07.01-.141.028-.208.007-.024.02-.045.028-.068.016-.042.03-.085.052-.124.015-.026.037-.047.054-.071.024-.032.044-.065.072-.093.023-.023.052-.04.078-.06.03-.024.056-.05.088-.069h.001l9.611-5.533a.801.801 0 0 1 .8 0l9.61 5.533c.034.02.06.045.09.068.025.02.054.038.077.06.028.029.048.062.072.094.018.024.04.045.054.071.023.039.036.082.052.124.009.023.022.044.028.068z" fill="currentColor"/>
                    </svg>
                    <span class="text-xl font-bold text-laravel-dark mr-2">Laravel <span class="text-laravel-red">العربي</span></span>
                </a>
                <button id="close-mobile-menu" class="text-laravel-dark hover:text-laravel-red">
                    <i class="fas fa-times text-xl"></i>
                </button>
            </div>
            
            <nav class="px-6 py-4">
                <ul class="space-y-4">
                    <li><a href="index.php" class="block py-2 text-laravel-dark hover:text-laravel-red font-medium">الرئيسية</a></li>
                    <li><a href="docs.php" class="block py-2 text-laravel-red font-medium">التوثيق</a></li>
                    <li><a href="#" class="block py-2 text-laravel-dark hover:text-laravel-red font-medium">المكتبات</a></li>
                    <li><a href="#" class="block py-2 text-laravel-dark hover:text-laravel-red font-medium">الفيديوهات</a></li>
                    <li><a href="#" class="block py-2 text-laravel-dark hover:text-laravel-red font-medium">المجتمع</a></li>
                </ul>
                
                <div class="mt-6 space-y-4">
                    <a href="#" class="block w-full py-2 px-4 bg-transparent border border-laravel-red text-laravel-red text-center rounded-lg hover:bg-laravel-red hover:text-white transition-colors duration-300">
                        تسجيل الدخول
                    </a>
                </div>
            </nav>
        </div>
    </div>

    <!-- JavaScript -->
    <script>
        // تبديل القائمة المتنقلة
        const mobileMenuBtn = document.querySelector('.md\\:hidden');
        const mobileMenu = document.getElementById('mobile-menu');
        const closeMobileMenuBtn = document.getElementById('close-mobile-menu');
        
        mobileMenuBtn.addEventListener('click', () => {
            mobileMenu.classList.remove('hidden');
        });
        
        closeMobileMenuBtn.addEventListener('click', () => {
            mobileMenu.classList.add('hidden');
        });

        // التمرير السلس للروابط الداخلية
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                document.querySelector(this.getAttribute('href')).scrollIntoView({
                    behavior: 'smooth'
                });
            });
        });

        // تسليط الضوء على عنصر القائمة الجانبية عند التمرير
        window.addEventListener('scroll', function() {
            const sections = document.querySelectorAll('.doc-section');
            const navLinks = document.querySelectorAll('.sidebar a');
            
            let currentSection = '';
            
            sections.forEach(section => {
                const sectionTop = section.offsetTop;
                const sectionHeight = section.clientHeight;
                if (pageYOffset >= (sectionTop - 200)) {
                    currentSection = section.getAttribute('id');
                }
            });

            navLinks.forEach(link => {
                link.classList.remove('text-laravel-red');
                link.classList.add('text-laravel-dark');
                if (link.getAttribute('href') === '#' + currentSection) {
                    link.classList.remove('text-laravel-dark');
                    link.classList.add('text-laravel-red');
                }
            });
        });
    </script>
</body>
</html>
