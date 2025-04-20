<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel العربي | مرجعك الشامل لتعلم لارافيل</title>
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
        
        .geometric-background {
            background-color: #ffffff;
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='40' height='40' viewBox='0 0 40 40'%3E%3Cg fill-rule='evenodd'%3E%3Cg fill='%23FB503B' fill-opacity='0.05'%3E%3Cpath d='M0 38.59l2.83-2.83 1.41 1.41L1.41 40H0v-1.41zM0 20v-1.41l2.83-2.83 1.41 1.41L1.41 20H0zm20 0v-1.41l2.83-2.83 1.41 1.41L21.41 20H20zM0 0v1.41l2.83 2.83 1.41-1.41L1.41 0H0zm10 0v1.41l2.83 2.83 1.41-1.41L11.41 0H10zM20 0v1.41l2.83 2.83 1.41-1.41L21.41 0H20zm10 0v1.41l2.83 2.83 1.41-1.41L31.41 0H30zm-10 10v1.41l2.83 2.83 1.41-1.41L21.41 10H20zm10 0v1.41l2.83 2.83 1.41-1.41L31.41 10H30zm10 0v1.41l2.83 2.83 1.41-1.41L41.41 10H40zm-30 10v1.41l2.83 2.83 1.41-1.41L11.41 20H10zm-10 10v1.41l2.83 2.83 1.41-1.41L1.41 30H0zm10 0v1.41l2.83 2.83 1.41-1.41L11.41 30H10zm10 0v1.41l2.83 2.83 1.41-1.41L21.41 30H20zm10 0v1.41l2.83 2.83 1.41-1.41L31.41 30H30zm-10 10v1.41l2.83 2.83 1.41-1.41L21.41 40H20zm10 0v1.41l2.83 2.83 1.41-1.41L31.41 40H30z'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
        }
        
        .code-terminal {
            background-color: #1E293B;
            border-radius: 8px;
            color: #E2E8F0;
            font-family: monospace;
            padding: 15px;
            line-height: 1.5;
        }
        
        .floating {
            animation: floating 4s ease-in-out infinite;
        }
        
        @keyframes floating {
            0% { transform: translateY(0px); }
            50% { transform: translateY(-15px); }
            100% { transform: translateY(0px); }
        }
    </style>
</head>
<body class="bg-white">
    <!-- Top Bar -->
    <div class="bg-laravel-dark text-white text-sm py-2 sticky top-0 z-50">
        <div class="container mx-auto px-4 flex justify-between items-center">
            <div>
                <span>Laravel v12.x</span>
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
                <a href="#" class="flex items-center">
                    <svg class="h-10 w-10 text-laravel-red" viewBox="0 0 50 52" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M49.626 11.564a.809.809 0 0 1 .028.209v12.972a.8.8 0 0 1-.402.694l-9.209 5.302V39.25c0 .286-.152.55-.4.694L20.42 51.01c-.044.025-.092.041-.14.058-.018.006-.035.017-.054.022a.805.805 0 0 1-.41 0c-.022-.006-.042-.018-.063-.026-.044-.016-.09-.03-.132-.054L.402 39.944A.801.801 0 0 1 0 39.25V6.334c0-.072.01-.142.028-.21.006-.023.02-.044.028-.067.015-.042.029-.085.051-.124.015-.026.037-.047.055-.071.023-.032.044-.065.071-.093.023-.023.053-.04.079-.06.029-.024.055-.05.088-.069h.001l9.61-5.533a.802.802 0 0 1 .8 0l9.61 5.533h.002c.032.02.059.045.088.068.026.02.055.038.078.06.028.029.048.062.072.094.017.024.04.045.054.071.023.04.036.082.052.124.008.023.022.044.028.068a.809.809 0 0 1 .028.209v20.559l8.008-4.611v-10.51c0-.07.01-.141.028-.208.007-.024.02-.045.028-.068.016-.042.03-.085.052-.124.015-.026.037-.047.054-.071.024-.032.044-.065.072-.093.023-.023.052-.04.078-.06.03-.024.056-.05.088-.069h.001l9.611-5.533a.801.801 0 0 1 .8 0l9.61 5.533c.034.02.06.045.09.068.025.02.054.038.077.06.028.029.048.062.072.094.018.024.04.045.054.071.023.039.036.082.052.124.009.023.022.044.028.068zm-1.574 10.718v-9.124l-3.363 1.936-4.646 2.675v9.124l8.01-4.611zm-9.61 16.505v-9.13l-4.57 2.61-13.05 7.448v9.216l17.62-10.144zM1.602 7.719v31.068L19.22 48.93v-9.214l-9.204-5.209-.003-.002-.004-.002c-.031-.018-.057-.044-.086-.066-.025-.02-.054-.036-.076-.058l-.002-.003c-.026-.025-.044-.056-.066-.084-.02-.027-.044-.05-.06-.078l-.001-.003c-.018-.03-.029-.066-.042-.1-.013-.03-.03-.058-.038-.09v-.001c-.01-.038-.012-.078-.016-.117-.004-.03-.012-.06-.012-.09v-.002-21.483L4.965 9.654 1.602 7.72zm8.81-5.994L2.405 6.334l8.005 4.609 8.006-4.61-8.006-4.608zm4.164 28.764l4.645-2.674V7.719l-3.363 1.936-4.646 2.675v20.096l3.364-1.937zM39.243 7.164l-8.006 4.609 8.006 4.609 8.005-4.61-8.005-4.608zm-.801 10.605l-4.646-2.675-3.363-1.936v9.124l4.645 2.674 3.364 1.937v-9.124zM20.02 38.33l11.743-6.704 5.87-3.35-8-4.606-9.211 5.303-8.395 4.833 7.993 4.524z" fill="currentColor"/>
                    </svg>
                    <span class="text-2xl font-bold text-laravel-dark mr-2">Laravel <span class="text-laravel-red">العربي</span></span>
                </a>

                <nav class="hidden md:flex">
                    <a href="#" class="nav-link mx-4 text-laravel-dark hover:text-laravel-red font-medium">الرئيسية</a>
                    <a href="#" class="nav-link mx-4 text-laravel-dark hover:text-laravel-red font-medium">التوثيق</a>
                    <a href="#" class="nav-link mx-4 text-laravel-dark hover:text-laravel-red font-medium">المكتبات</a>
                    <a href="#" class="nav-link mx-4 text-laravel-dark hover:text-laravel-red font-medium">الفيديوهات</a>
                    <a href="#" class="nav-link mx-4 text-laravel-dark hover:text-laravel-red font-medium">المجتمع</a>
                </nav>

                <div class="flex items-center">
                    <a href="#" class="hidden md:block py-2 px-4 bg-transparent border border-laravel-red text-laravel-red hover:bg-laravel-red hover:text-white rounded-lg mr-3 transition-colors duration-300">
                        تسجيل الدخول
                    </a>
                    <a href="#" class="hidden md:block py-2 px-6 bg-laravel-red text-white rounded-lg hover:shadow-lg transition-all duration-300">
                        ابدأ الآن
                    </a>
                    <button class="md:hidden text-laravel-dark">
                        <i class="fas fa-bars text-xl"></i>
                    </button>
                </div>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <main>
        <!-- Hero Section -->
        <section class="py-16 geometric-background">
            <div class="container mx-auto px-4">
                <div class="flex flex-col md:flex-row items-center justify-between">
                    <div class="md:w-1/2 text-center md:text-right mb-10 md:mb-0">
                        <h1 class="text-4xl md:text-6xl font-black mb-6">
                            تعلم <span class="text-laravel-red">Laravel</span>
                            <br>بلغتك الأم
                        </h1>
                        <p class="text-lg md:text-xl text-laravel-gray mb-8 max-w-lg">
                            دليلك الشامل لتعلم إطار العمل الأكثر شعبية في PHP. توثيق عربي كامل، دروس تفصيلية، ومجتمع داعم.
                        </p>
                        <div class="flex flex-col sm:flex-row justify-center md:justify-start space-y-4 sm:space-y-0 sm:space-x-4 sm:space-x-reverse">
                            <a href="#" class="py-3 px-8 accent-gradient text-white rounded-lg hover:shadow-lg transition-all duration-300 text-lg font-bold glow">
                                ابدأ الآن مجاناً
                            </a>
                            <a href="#" class="py-3 px-8 bg-white border border-gray-200 text-laravel-dark rounded-lg hover:shadow-lg transition-all duration-300 text-lg font-bold">
                                استكشف التوثيق
                            </a>
                        </div>
                    </div>
                    <div class="md:w-1/2 floating">
                        <div class="relative max-w-md mx-auto">
                            <div class="code-terminal">
                                <div class="flex mb-4">
                                    <div class="w-3 h-3 bg-red-500 rounded-full mr-2"></div>
                                    <div class="w-3 h-3 bg-yellow-500 rounded-full mr-2"></div>
                                    <div class="w-3 h-3 bg-green-500 rounded-full"></div>
                                </div>
                                <div class="text-sm">
                                    <span class="text-green-400">$</span> <span class="text-white">composer create-project laravel/laravel example-app</span>
                                    <p class="text-gray-400">
                                        Installing laravel/laravel (v12.0.0)
                                        <br>- Installing laravel/laravel (v12.0.0): Extracting archive
                                    </p>
                                    <span class="text-green-400">$</span> <span class="text-white">cd example-app</span>
                                    <br>
                                    <span class="text-green-400">$</span> <span class="text-white">php artisan serve</span>
                                    <p class="text-gray-400">
                                        Starting Laravel development server: http://127.0.0.1:8000
                                    </p>
                                    <span class="text-green-400 animate-pulse">▌</span>
                                </div>
                            </div>
                            <div class="absolute -top-8 -left-8 w-32 h-32 bg-laravel-red opacity-10 rounded-full blur-xl"></div>
                            <div class="absolute -bottom-8 -right-8 w-40 h-40 bg-laravel-accent opacity-10 rounded-full blur-xl"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Quick Start Section -->
        <section class="py-16">
            <div class="container mx-auto px-4">
                <div class="text-center mb-12">
                    <h2 class="text-3xl font-bold text-laravel-dark">البدء السريع مع Laravel</h2>
                    <p class="text-laravel-gray mt-4 max-w-2xl mx-auto">كل ما تحتاجه لبدء رحلتك مع Laravel بخطوات بسيطة وسريعة</p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <div class="bg-white rounded-xl shadow-sm hover:shadow-md transition-shadow p-6 border-t-4 border-laravel-red">
                        <div class="text-3xl font-bold text-laravel-red mb-4">01</div>
                        <h3 class="text-xl font-bold mb-3">تثبيت Laravel</h3>
                        <p class="text-laravel-gray mb-4">تعلم كيفية تثبيت Laravel على جهازك باستخدام Composer وإعداد بيئة التطوير.</p>
                        <div class="code-terminal text-xs p-3 mb-4">
                            <span class="text-green-400">$</span> <span class="text-white">composer create-project laravel/laravel example-app</span>
                        </div>
                        <a href="#" class="text-laravel-red hover:text-laravel-dark font-medium inline-flex items-center">
                            المزيد من التفاصيل
                            <i class="fas fa-arrow-left mr-2 text-xs"></i>
                        </a>
                    </div>

                    <div class="bg-white rounded-xl shadow-sm hover:shadow-md transition-shadow p-6 border-t-4 border-laravel-accent">
                        <div class="text-3xl font-bold text-laravel-accent mb-4">02</div>
                        <h3 class="text-xl font-bold mb-3">إنشاء أول تطبيق</h3>
                        <p class="text-laravel-gray mb-4">تعرف على كيفية بناء أول تطبيق Laravel خطوة بخطوة وفهم هيكل المشروع.</p>
                        <div class="code-terminal text-xs p-3 mb-4">
                            <span class="text-green-400">$</span> <span class="text-white">php artisan make:controller WelcomeController</span>
                        </div>
                        <a href="#" class="text-laravel-accent hover:text-laravel-dark font-medium inline-flex items-center">
                            المزيد من التفاصيل
                            <i class="fas fa-arrow-left mr-2 text-xs"></i>
                        </a>
                    </div>

                    <div class="bg-white rounded-xl shadow-sm hover:shadow-md transition-shadow p-6 border-t-4 border-laravel-dark">
                        <div class="text-3xl font-bold text-laravel-dark mb-4">03</div>
                        <h3 class="text-xl font-bold mb-3">المفاهيم الأساسية</h3>
                        <p class="text-laravel-gray mb-4">استكشف المفاهيم الأساسية في Laravel مثل التوجيه، المتحكمات، العروض وأكثر.</p>
                        <ul class="text-laravel-gray space-y-2 mb-4">
                            <li class="flex items-center">
                                <i class="fas fa-check-circle text-laravel-red ml-2"></i>
                                التوجيه (Routing)
                            </li>
                            <li class="flex items-center">
                                <i class="fas fa-check-circle text-laravel-red ml-2"></i>
                                المتحكمات (Controllers)
                            </li>
                            <li class="flex items-center">
                                <i class="fas fa-check-circle text-laravel-red ml-2"></i>
                                العروض (Views)
                            </li>
                        </ul>
                        <a href="#" class="text-laravel-dark hover:text-laravel-red font-medium inline-flex items-center">
                            المزيد من التفاصيل
                            <i class="fas fa-arrow-left mr-2 text-xs"></i>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Documentation Maps -->
        <section class="py-16 bg-gray-50">
            <div class="container mx-auto px-4">
                <div class="text-center mb-12">
                    <h2 class="text-3xl font-bold text-laravel-dark">خريطة التوثيق</h2>
                    <p class="text-laravel-gray mt-4 max-w-2xl mx-auto">استكشف مختلف الموضوعات في توثيق Laravel بلغة عربية بسيطة وواضحة</p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-5">
                    <a href="#" class="bg-white p-6 rounded-xl shadow-sm hover:shadow-md transition-all duration-300 group">
                        <div class="flex items-center mb-4">
                            <span class="w-12 h-12 bg-red-50 text-laravel-red rounded-lg flex items-center justify-center mr-4 group-hover:bg-laravel-red group-hover:text-white transition-colors duration-300">
                                <i class="fas fa-rocket text-xl"></i>
                            </span>
                            <h3 class="text-lg font-bold">دليل المبتدئين</h3>
                        </div>
                        <p class="text-laravel-gray">التثبيت، الإعداد، هيكل المشروع، والمفاهيم الأساسية اللازمة للبدء مع Laravel.</p>
                    </a>

                    <a href="#" class="bg-white p-6 rounded-xl shadow-sm hover:shadow-md transition-all duration-300 group">
                        <div class="flex items-center mb-4">
                            <span class="w-12 h-12 bg-blue-50 text-laravel-accent rounded-lg flex items-center justify-center mr-4 group-hover:bg-laravel-accent group-hover:text-white transition-colors duration-300">
                                <i class="fas fa-database text-xl"></i>
                            </span>
                            <h3 class="text-lg font-bold">قواعد البيانات</h3>
                        </div>
                        <p class="text-laravel-gray">الاتصال بقواعد البيانات، الترحيلات، ORM Eloquent، وبناء الاستعلامات المعقدة.</p>
                    </a>

                    <a href="#" class="bg-white p-6 rounded-xl shadow-sm hover:shadow-md transition-all duration-300 group">
                        <div class="flex items-center mb-4">
                            <span class="w-12 h-12 bg-green-50 text-green-600 rounded-lg flex items-center justify-center mr-4 group-hover:bg-green-600 group-hover:text-white transition-colors duration-300">
                                <i class="fas fa-shield-alt text-xl"></i>
                            </span>
                            <h3 class="text-lg font-bold">المصادقة والأمان</h3>
                        </div>
                        <p class="text-laravel-gray">تأمين التطبيق، نظام المصادقة، الصلاحيات، والحماية من الهجمات الشائعة.</p>
                    </a>

                    <a href="#" class="bg-white p-6 rounded-xl shadow-sm hover:shadow-md transition-all duration-300 group">
                        <div class="flex items-center mb-4">
                            <span class="w-12 h-12 bg-purple-50 text-purple-600 rounded-lg flex items-center justify-center mr-4 group-hover:bg-purple-600 group-hover:text-white transition-colors duration-300">
                                <i class="fas fa-exchange-alt text-xl"></i>
                            </span>
                            <h3 class="text-lg font-bold">واجهات API</h3>
                        </div>
                        <p class="text-laravel-gray">بناء واجهات برمجة RESTful، معالجة الطلبات، والتوثيق مع Sanctum وPassport.</p>
                    </a>

                    <a href="#" class="bg-white p-6 rounded-xl shadow-sm hover:shadow-md transition-all duration-300 group">
                        <div class="flex items-center mb-4">
                            <span class="w-12 h-12 bg-yellow-50 text-yellow-600 rounded-lg flex items-center justify-center mr-4 group-hover:bg-yellow-600 group-hover:text-white transition-colors duration-300">
                                <i class="fas fa-code text-xl"></i>
                            </span>
                            <h3 class="text-lg font-bold">الواجهات الأمامية</h3>
                        </div>
                        <p class="text-laravel-gray">استخدام Blade، Vue.js، React، ومكتبات أخرى لبناء واجهات مستخدم متقدمة.</p>
                    </a>

                    <a href="#" class="bg-white p-6 rounded-xl shadow-sm hover:shadow-md transition-all duration-300 group">
                        <div class="flex items-center mb-4">
                            <span class="w-12 h-12 bg-pink-50 text-pink-600 rounded-lg flex items-center justify-center mr-4 group-hover:bg-pink-600 group-hover:text-white transition-colors duration-300">
                                <i class="fas fa-server text-xl"></i>
                            </span>
                            <h3 class="text-lg font-bold">النشر والتشغيل</h3>
                        </div>
                        <p class="text-laravel-gray">نشر تطبيقات Laravel، الإعداد للإنتاج، وأفضل الممارسات في بيئات التشغيل المختلفة.</p>
                    </a>

                  
            </div>
        </section>

        <!-- Newsletter Section -->
        <section class="py-16">
            <div class="container mx-auto px-4">
                <div class="max-w-4xl mx-auto bg-white rounded-2xl shadow-lg overflow-hidden">
                    <div class="flex flex-col md:flex-row">
                        <div class="md:w-3/5 p-8 md:p-12">
                            <h2 class="text-3xl font-bold text-laravel-dark mb-4">اشترك في نشرتنا البريدية</h2>
                            <p class="text-laravel-gray mb-6">احصل على آخر الأخبار، الدروس والنصائح حول Laravel مباشرة في بريدك الإلكتروني.</p>
                            <form class="space-y-4">
                                <div>
                                    <label for="email" class="block text-sm font-medium text-laravel-gray mb-2">البريد الإلكتروني</label>
                                    <input type="email" id="email" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-laravel-red focus:border-transparent" placeholder="أدخل بريدك الإلكتروني" required>
                                </div>
                                <div class="flex items-center">
                                    <input type="checkbox" id="agree" class="ml-2">
                                    <label for="agree" class="text-sm text-laravel-gray">أوافق على تلقي الرسائل التعليمية والإخبارية</label>
                                </div>
                                <button type="submit" class="w-full md:w-auto px-6 py-3 bg-laravel-red text-white rounded-lg hover:shadow-lg transition-all duration-300">
                                    اشترك الآن
                                </button>
                            </form>
                        </div>
                        <div class="md:w-2/5 bg-gradient-to-br from-laravel-red to-red-400 p-8 md:p-12 flex items-center justify-center">
                            <div class="text-center">
                                <i class="fas fa-envelope-open-text text-white text-5xl mb-4"></i>
                                <h3 class="text-xl font-bold text-white mb-2">كن على اطلاع دائم</h3>
                                <p class="text-white text-opacity-90">أكثر من 5000 مطور استفادوا من نشرتنا البريدية حتى الآن</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Tips Section -->
        <section class="py-16 bg-gray-50">
            <div class="container mx-auto px-4">
                <div class="bg-white rounded-2xl shadow-sm p-8 border-r-4 border-laravel-red">
                    <div class="flex flex-col md:flex-row items-center">
                        <div class="md:w-2/3 mb-6 md:mb-0 md:ml-8">
                            <h2 class="text-2xl font-bold text-laravel-dark mb-4">هل تعلم؟</h2>
                            <p class="text-laravel-gray mb-6">يمكنك استخدام Laravel Sail لتشغيل بيئة تطوير Laravel كاملة باستخدام Docker بشكل سهل وسريع، دون الحاجة لإعداد PHP أو MySQL محلياً.</p>
                            <div class="code-terminal text-sm p-4 mb-6">
                                <span class="text-green-400">$</span> <span class="text-white">./vendor/bin/sail up</span>
                            </div>
                            <a href="#" class="py-2 px-6 accent-gradient text-white rounded-lg inline-flex items-center hover:opacity-90 transition-opacity">
                                <span>معرفة المزيد عن Laravel Sail</span>
                                <i class="fas fa-long-arrow-alt-left mr-2"></i>
                            </a>
                        </div>
                        <div class="md:w-1/3">
                            <img src="https://via.placeholder.com/300x250?text=Laravel+Sail" alt="Laravel Sail" class="rounded-lg shadow-md">
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <!-- Footer -->
    <footer class="bg-laravel-dark text-white pt-16 pb-8">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12 mb-12">
                <div>
                    <div class="flex items-center mb-6">
                        <svg class="h-8 w-8 text-laravel-red" viewBox="0 0 50 52" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M49.626 11.564a.809.809 0 0 1 .028.209v12.972a.8.8 0 0 1-.402.694l-9.209 5.302V39.25c0 .286-.152.55-.4.694L20.42 51.01c-.044.025-.092.041-.14.058-.018.006-.035.017-.054.022a.805.805 0 0 1-.41 0c-.022-.006-.042-.018-.063-.026-.044-.016-.09-.03-.132-.054L.402 39.944A.801.801 0 0 1 0 39.25V6.334c0-.072.01-.142.028-.21.006-.023.02-.044.028-.067.015-.042.029-.085.051-.124.015-.026.037-.047.055-.071.023-.032.044-.065.071-.093.023-.023.053-.04.079-.06.029-.024.055-.05.088-.069h.001l9.61-5.533a.802.802 0 0 1 .8 0l9.61 5.533h.002c.032.02.059.045.088.068.026.02.055.038.078.06.028.029.048.062.072.094.017.024.04.045.054.071.023.04.036.082.052.124.008.023.022.044.028.068a.809.809 0 0 1 .028.209v20.559l8.008-4.611v-10.51c0-.07.01-.141.028-.208.007-.024.02-.045.028-.068.016-.042.03-.085.052-.124.015-.026.037-.047.054-.071.024-.032.044-.065.072-.093.023-.023.052-.04.078-.06.03-.024.056-.05.088-.069h.001l9.611-5.533a.801.801 0 0 1 .8 0l9.61 5.533c.034.02.06.045.09.068.025.02.054.038.077.06.028.029.048.062.072.094.018.024.04.045.054.071.023.039.036.082.052.124.009.023.022.044.028.068zm-1.574 10.718v-9.124l-3.363 1.936-4.646 2.675v9.124l8.01-4.611zm-9.61 16.505v-9.13l-4.57 2.61-13.05 7.448v9.216l17.62-10.144zM1.602 7.719v31.068L19.22 48.93v-9.214l-9.204-5.209-.003-.002-.004-.002c-.031-.018-.057-.044-.086-.066-.025-.02-.054-.036-.076-.058l-.002-.003c-.026-.025-.044-.056-.066-.084-.02-.027-.044-.05-.06-.078l-.001-.003c-.018-.03-.029-.066-.042-.1-.013-.03-.03-.058-.038-.09v-.001c-.01-.038-.012-.078-.016-.117-.004-.03-.012-.06-.012-.09v-.002-21.483L4.965 9.654 1.602 7.72zm8.81-5.994L2.405 6.334l8.005 4.609 8.006-4.61-8.006-4.608zm4.164 28.764l4.645-2.674V7.719l-3.363 1.936-4.646 2.675v20.096l3.364-1.937zM39.243 7.164l-8.006 4.609 8.006 4.609 8.005-4.61-8.005-4.608zm-.801 10.605l-4.646-2.675-3.363-1.936v9.124l4.645 2.674 3.364 1.937v-9.124zM20.02 38.33l11.743-6.704 5.87-3.35-8-4.606-9.211 5.303-8.395 4.833 7.993 4.524z" fill="currentColor"/>
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
                        <li><a href="#" class="text-gray-400 hover:text-laravel-red transition-colors">الصفحة الرئيسية</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-laravel-red transition-colors">التوثيق</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-laravel-red transition-colors">دروس فيديو</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-laravel-red transition-colors">مكتبات وإضافات</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-laravel-red transition-colors">المنتدى</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-laravel-red transition-colors">المدونة</a></li>
                    </ul>
                </div>

                <div>
                    <h3 class="text-lg font-bold mb-6">الموارد</h3>
                    <ul class="space-y-3">
                        <li><a href="#" class="text-gray-400 hover:text-laravel-red transition-colors">Laravel.com</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-laravel-red transition-colors">Laracasts</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-laravel-red transition-colors">Laravel News</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-laravel-red transition-colors">Laravel Nova</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-laravel-red transition-colors">Laravel Forge</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-laravel-red transition-colors">GitHub</a></li>
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
                    <li><a href="#" class="block py-2 text-laravel-dark hover:text-laravel-red font-medium">الرئيسية</a></li>
                    <li><a href="#" class="block py-2 text-laravel-dark hover:text-laravel-red font-medium">التوثيق</a></li>
                    <li><a href="#" class="block py-2 text-laravel-dark hover:text-laravel-red font-medium">المكتبات</a></li>
                    <li><a href="#" class="block py-2 text-laravel-dark hover:text-laravel-red font-medium">الفيديوهات</a></li>
                    <li><a href="#" class="block py-2 text-laravel-dark hover:text-laravel-red font-medium">المجتمع</a></li>
                </ul>
                
                <div class="mt-6 space-y-4">
                    <a href="#" class="block w-full py-2 px-4 bg-transparent border border-laravel-red text-laravel-red text-center rounded-lg hover:bg-laravel-red hover:text-white transition-colors duration-300">
                        تسجيل الدخول
                    </a>
                    <a href="#" class="block w-full py-2 px-4 bg-laravel-red text-white text-center rounded-lg hover:shadow-lg transition-all duration-300">
                        ابدأ الآن
                    </a>
                </div>
            </nav>
        </div>
    </div>

    <!-- Telegram Subscription Popup -->
    <div id="telegram-popup" class="fixed inset-0 bg-black bg-opacity-60 z-50 flex items-center justify-center hidden">
        <div class="bg-white rounded-xl shadow-lg max-w-md w-full mx-4 overflow-hidden animate-fadeIn">
            <div class="relative">
                <div class="bg-gradient-to-r from-blue-500 to-blue-600 py-6 px-6 text-center">
                    <i class="fab fa-telegram text-white text-5xl mb-2"></i>
                    <h3 class="text-xl font-bold text-white">انضم لقناة apiclub على تيليغرام</h3>
                </div>
                <button id="close-telegram-popup" class="absolute top-4 left-4 text-white hover:text-gray-200">
                    <i class="fas fa-times text-xl"></i>
                </button>
            </div>
            <div class="p-6">
                <p class="text-laravel-gray mb-4">احصل على آخر الأخبار والتحديثات وأفضل الممارسات في عالم تطوير الويب والـ API.</p>
                <div class="flex flex-col space-y-3">
                    <a href="https://t.me/apiclubs" target="_blank" class="py-2 px-6 bg-blue-500 text-white rounded-lg hover:bg-blue-600 transition-all duration-300 text-center">
                        <i class="fab fa-telegram ml-2"></i>
                        الانضمام الآن
                    </a>
                    <button id="remind-later" class="py-2 px-6 bg-transparent border border-gray-300 text-laravel-gray rounded-lg hover:bg-gray-50 transition-all duration-300">
                        تذكيري لاحقاً
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- JavaScript -->
    <script>
        // Mobile menu toggle
        const mobileMenuBtn = document.querySelector('.md\\:hidden');
        const mobileMenu = document.getElementById('mobile-menu');
        const closeMobileMenuBtn = document.getElementById('close-mobile-menu');
        
        mobileMenuBtn.addEventListener('click', () => {
            mobileMenu.classList.remove('hidden');
        });
        
        closeMobileMenuBtn.addEventListener('click', () => {
            mobileMenu.classList.add('hidden');
        });

        // Telegram popup functionality
        const telegramPopup = document.getElementById('telegram-popup');
        const closeTelegramPopup = document.getElementById('close-telegram-popup');
        const remindLater = document.getElementById('remind-later');
        
        // Show popup after 5 seconds
        setTimeout(() => {
            if (!localStorage.getItem('telegram_popup_closed')) {
                telegramPopup.classList.remove('hidden');
            }
        }, 1000);
        
        // Close popup handlers
        closeTelegramPopup.addEventListener('click', () => {
            telegramPopup.classList.add('hidden');
            localStorage.setItem('telegram_popup_closed', 'true');
        });
        
        remindLater.addEventListener('click', () => {
            telegramPopup.classList.add('hidden');
            // Set to remind again after 2 days
            const twodays = new Date();
            twodays.setDate(twodays.getDate() + 2);
            localStorage.setItem('telegram_popup_closed', twodays.getTime());
        });
        
        // Check if we should show the popup (for "remind me later" case)
        const popupClosed = localStorage.getItem('telegram_popup_closed');
        if (popupClosed && !isNaN(popupClosed)) {
            const reminderDate = parseInt(popupClosed);
            if (Date.now() > reminderDate) {
                localStorage.removeItem('telegram_popup_closed');
            }
        }
    </script>
</body>
</html>
