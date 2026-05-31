<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

        <script src="https://cdn.tailwindcss.com"></script>
        <script>
            tailwind.config = {
                darkMode: 'class',
                theme: {
                    extend: {
                        fontFamily: {
                            sans: ['Instrument Sans', 'ui-sans-serif', 'system-ui', 'sans-serif'],
                        },
                    },
                },
            }
        </script>
    </head>
    <body class="bg-[#FDFDFC] text-[#1C1A17] dark:bg-[#0A0A0A] dark:text-[#EDEDEC] antialiased min-h-screen flex flex-col items-center justify-center selection:bg-[#FF2D20] selection:text-white">
        
        @if (Route::has('login'))
            <nav class="absolute top-0 right-0 p-6 text-right z-10">
                @auth
                    <a href="{{ url('/dashboard') }}" class="font-medium text-sm text-[#1C1A17] hover:text-black dark:text-[#EDEDEC] dark:hover:text-white focus:outline-[#FF2D20]">Dashboard</a>
                @else
                    <a href="{{ route('login') }}" class="font-medium text-sm text-[#1C1A17] hover:text-black dark:text-[#EDEDEC] dark:hover:text-white focus:outline-[#FF2D20] mr-4">Log in</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="font-medium text-sm text-[#1C1A17] hover:text-black dark:text-[#EDEDEC] dark:hover:text-white focus:outline-[#FF2D20]">Register</a>
                    @endif
                @endauth
            </nav>
        @endif

        <div class="relative w-full max-w-2xl px-6 lg:max-w-7xl flex flex-col items-center justify-center min-h-screen dynamic-path">
            <main class="flex flex-col items-center justify-center flex-1 w-full text-center uniq-content px-4">
                
                <div class="flex justify-center mb-6 text-[#FF2D20]">
                    <svg class="h-16 w-auto" viewBox="0 0 62 65" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M61.8548 14.6253C61.8548 14.6253 58.7418 15.6655 57.2584 16.0315C55.775 16.3975 52.8252 14.6253 52.8252 14.6253L40.7183 7.15172C40.0163 6.7194 39.5815 5.95232 39.5815 5.12748V0L32.1887 4.54226V11.2367L43.8344 18.4239C44.5363 18.8562 44.9712 19.6233 44.9712 20.4481V33.8335L57.2584 26.2699V18.1755L61.8548 14.6253Z" fill="currentColor"/>
                        <path d="M32.1887 18.1755L19.9015 25.739V11.2367L32.1887 3.67323V18.1755Z" fill="currentColor" opacity="0.6"/>
                        <path d="M32.1887 31.4222L19.9015 38.9858V26.4357L32.1887 18.8722V31.4222Z" fill="currentColor" opacity="0.4"/>
                        <path d="M16.9201 12.6338L4.63281 20.1973V34.6996L16.9201 27.1361V12.6338Z" fill="currentColor" opacity="0.6"/>
                        <path d="M16.9201 29.8805L4.63281 37.444V26.1033L16.9201 18.5398V29.8805Z" fill="currentColor" opacity="0.4"/>
                        <path d="M0 22.8239L12.2873 15.2604V39.7627L0 47.3262V22.8239Z" fill="currentColor" opacity="0.2"/>
                        <path d="M32.1887 31.4222L44.476 23.8587V48.361L32.1887 55.9245V31.4222Z" fill="currentColor" opacity="0.8"/>
                        <path d="M32.1887 45.1639L44.476 37.6004V48.9411L32.1887 56.5046V45.1639Z" fill="currentColor" opacity="0.9"/>
                        <path d="M47.2514 32.1583L59.5386 24.5948V49.0971L47.2514 56.6606V32.1583Z" fill="currentColor"/>
                    </svg>
                </div>

                <h1 class="text-4xl font-semibold tracking-tight mb-4">
                    Laravel <span class="text-[#FF2D20]">v{{ ltrim(App::version(), 'v') }}</span>
                </h1>
                
                <p class="max-w-xl mx-auto text-base text-[#1C1A17]/70 dark:text-[#EDEDEC]/70 mb-10">
                    A web application framework with expressive, elegant syntax. We’ve already started the foundation — free you to create without sweating the small things.
                </p>

                <div class="grid gap-6 lg:grid-cols-2 max-w-4xl w-full text-left">
                    <a href="https://laravel.com/docs" class="flex flex-col p-6 bg-white dark:bg-[#161615] rounded-xl border border-[#1C1A17]/10 dark:border-[#EDEDEC]/10 hover:border-[#FF2D20] dark:hover:border-[#FF2D20] transition group shadow-[0px_14px_34px_0px_rgba(0,0,0,0.03)]">
                        <h2 class="text-lg font-medium mb-2 group-hover:text-[#FF2D20] transition">Documentation</h2>
                        <p class="text-sm text-[#1C1A17]/70 dark:text-[#EDEDEC]/70 leading-relaxed">
                            Laravel has wonderful documentation covering every aspect of the framework. Whether you are a newcomer or have prior experience, we recommend reading our entire documentation.
                        </p>
                    </a>

                    <a href="https://laracasts.com" class="flex flex-col p-6 bg-white dark:bg-[#161615] rounded-xl border border-[#1C1A17]/10 dark:border-[#EDEDEC]/10 hover:border-[#FF2D20] dark:hover:border-[#FF2D20] transition group shadow-[0px_14px_34px_0px_rgba(0,0,0,0.03)]">
                        <h2 class="text-lg font-medium mb-2 group-hover:text-[#FF2D20] transition">Laracasts</h2>
                        <p class="text-sm text-[#1C1A17]/70 dark:text-[#EDEDEC]/70 leading-relaxed">
                            Laracasts offers thousands of video tutorials on Laravel, PHP, and JavaScript development. Check them out, see for yourself, and massively level up your development skills in the process.
                        </p>
                    </a>
                </div>
            </main>

            <footer class="py-16 text-center text-sm text-[#1C1A17]/50 dark:text-[#EDEDEC]/50 w-full flex flex-col sm:flex-row items-center justify-between gap-4 border-t border-[#1C1A17]/5 dark:border-[#EDEDEC]/5 mt-10">
                <div>
                    Laravel v{{ ltrim(App::version(), 'v') }} (PHP v{{ PHP_VERSION }})
                </div>
                
                <button onclick="toggleDarkMode()" class="px-3 py-1.5 rounded-lg border border-[#1C1A17]/10 dark:border-[#EDEDEC]/10 text-xs font-medium hover:bg-[#1C1A17]/5 dark:hover:bg-[#EDEDEC]/5 transition">
                    <span class="dark:hidden">🌙 Dark Mode</span>
                    <span class="hidden dark:inline">☀️ Light Mode</span>
                </button>
            </footer>
        </div>

        <script>
            // Check local storage or system preference
            if (localStorage.getItem('theme') === 'dark' || (!('theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
                document.documentElement.classList.add('dark');
            } else {
                document.documentElement.classList.remove('dark');
            }

            function toggleDarkMode() {
                if (document.documentElement.classList.contains('dark')) {
                    document.documentElement.classList.remove('dark');
                    localStorage.setItem('theme', 'light');
                } else {
                    document.documentElement.classList.add('dark');
                    localStorage.setItem('theme', 'dark');
                }
            }
        </script>
    </body>
</html>