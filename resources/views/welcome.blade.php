<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>A Zin Phyoe — Laravel Developer</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        /* Dark Mode configuration for immediate testing */
        /* To use custom styles like myatsoe.vercel.app, you need a custom Tailwind config */
        :root {
            color-scheme: light;
        }
        .dark {
            color-scheme: dark;
        }
    </style>
<script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
    <!-- AOS (Animate On Scroll) -->
    <link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet">
</head>
<body class="bg-white dark:bg-gray-900 text-gray-800 dark:text-gray-200 font-sans overflow-x-hidden transition duration-500 ease-in-out">

    <div class="fixed top-4 right-4 z-[100]">
        <button id="theme-toggle" type="button" class="text-gray-500 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-700 focus:outline-none focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 rounded-full text-sm p-2.5 transition duration-500">
            <svg id="theme-toggle-dark-icon" class="hidden w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path d="M17.293 13.682A7.962 7.962 0 0110 18c-4.418 0-8-3.582-8-8 0-2.343 1.01-4.475 2.618-5.96L10 11l7.293-7.318z"></path></svg>
            <svg id="theme-toggle-light-icon" class="hidden w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zM4.303 4.303a1 1 0 011.414 0l.707.707a1 1 0 01-1.414 1.414l-.707-.707a1 1 0 010-1.414zm11.38 0a1 1 0 010 1.414l-.707.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM10 5a1 1 0 011 1v1a1 1 0 11-2 0V6a1 1 0 011-1zm6 3a1 1 0 011 1v1a1 1 0 11-2 0V9a1 1 0 011-1zM3 9a1 1 0 011 1v1a1 1 0 11-2 0V9a1 1 0 011-1zM10 15a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM4.303 15.697a1 1 0 010 1.414l.707.707a1 1 0 11-1.414-1.414l-.707-.707a1 1 0 011.414 0zm11.38 0a1 1 0 011.414 0l-.707.707a1 1 0 11-1.414-1.414l.707-.707zM16 11a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM3 11a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1z"></path></svg>
        </button>
    </div>

    <nav class="bg-white dark:bg-gray-900 shadow-md dark:shadow-lg sticky top-0 z-50 transition duration-500 ease-in-out" data-aos="fade-down">
        <div class="max-w-6xl mx-auto px-6 py-4 flex justify-between items-center">
            <h1 class="text-2xl font-bold text-blue-600">A Zin Phyoe</h1>
            <div class="space-x-6">
                <a href="#about" class="hover:text-blue-500 dark:hover:text-blue-300 transition">About</a>
                <a href="#skills" class="hover:text-blue-500 dark:hover:text-blue-300 transition">Skills</a>
                <a href="#projects" class="hover:text-blue-500 dark:hover:text-blue-300 transition">Projects</a>
                <a href="#contact" class="hover:text-blue-500 dark:hover:text-blue-300 transition">Contact</a>
            </div>
        </div>
    </nav>

    <section class="flex flex-col md:flex-row items-center justify-center py-20 px-6 bg-gradient-to-r from-blue-600 to-indigo-700 text-white dark:from-gray-800 dark:to-gray-900 transition duration-500">
        <div class="md:w-1/2 text-center md:text-left space-y-4" data-aos="fade-right">
            <h2 class="text-4xl md:text-6xl font-extrabold tracking-tight">Hi, I'm <span class="text-yellow-300">A Zin Phyoe</span> 👋</h2>
            <p class="text-xl opacity-90">
                <span class="font-semibold">Junior/Mid-Level Laravel Developer</span>. Building robust APIs and user-friendly systems for the <span class="text-yellow-300">FDA Maintaince Project</span>.
            </p>
            <a href="#projects" class="inline-block bg-yellow-300 text-gray-900 px-8 py-3 mt-6 rounded-lg font-bold shadow-xl hover:scale-105 transition-transform duration-300">
                View My Work
            </a>
        </div>

       <div class="md:w-1/2 mt-10 md:mt-0 flex justify-center" data-aos="fade-left">
            <!-- Girl developer animation -->
            <lottie-player
                src="https://assets10.lottiefiles.com/packages/lf20_kkflmtur.json"
                background="transparent"
                speed="1"
                style="width: 320px; height: 320px;"
                loop
                autoplay>
            </lottie-player>
        </div>
    </section>

    <section id="about" class="max-w-5xl mx-auto py-20 px-6 text-center" data-aos="fade-up">
        <h3 class="text-4xl font-bold mb-6 text-blue-600 dark:text-blue-400">About Me</h3>
        <p class="text-xl text-gray-600 dark:text-gray-400 leading-relaxed max-w-3xl mx-auto">
            I'm a dedicated developer from Myanmar 🇲🇲, age 25. I specialize in backend development with **Laravel** and modernizing legacy applications.
            My core focus is on maintaining and enhancing high-stakes systems for the **Seure Link Co.**'s FDA project, ensuring stability and performance.
        </p>
    </section>

    <section id="skills" class="max-w-5xl mx-auto py-20 px-6" data-aos="fade-up">
        <h3 class="text-4xl font-bold mb-10 text-center text-blue-600 dark:text-blue-400">Tech Stack & Skills</h3>
        <div class="grid grid-cols-2 md:grid-cols-4 gap-8">
            @php
                $skills = [
                    ['name' => 'Laravel', 'icon' => '🐘', 'desc' => 'Primary backend framework.'],
                    ['name' => 'PHP', 'icon' => '⚙️', 'desc' => 'Strong core PHP knowledge.'],
                    ['name' => 'MySQL', 'icon' => '🗄️', 'desc' => 'Database design & query optimization.'],
                    ['name' => 'Vue.js', 'icon' => '🟢', 'desc' => 'Interactive frontend development.'],
                    ['name' => 'TailwindCSS', 'icon' => '🎨', 'desc' => 'Rapid UI development.'],
                    ['name' => 'JavaScript', 'icon' => '✨', 'desc' => 'Front-end interactivity.'],
                    ['name' => 'Git/GitHub', 'icon' => '🌳', 'desc' => 'Version control mastery.'],
                    ['name' => 'API Dev', 'icon' => '🔗', 'desc' => 'Building RESTful APIs.'],
                ];
            @endphp

            @foreach ($skills as $skill)
                <div class="bg-gray-100 dark:bg-gray-800 p-6 rounded-xl shadow-lg hover:shadow-2xl transition transform hover:scale-[1.02]" data-aos="zoom-in" data-aos-delay="100">
                    <span class="text-3xl block mb-2">{{ $skill['icon'] }}</span>
                    <h4 class="text-xl font-semibold mb-1">{{ $skill['name'] }}</h4>
                    <p class="text-sm text-gray-600 dark:text-gray-400">{{ $skill['desc'] }}</p>
                </div>
            @endforeach
        </div>
    </section>

   <section id="projects" class="bg-gray-50 dark:bg-gray-800 py-20 transition duration-500">
        <div class="max-w-6xl mx-auto px-6">
            <h3 class="text-4xl font-bold text-center mb-12 text-blue-600 dark:text-blue-400">My Work (Laravel Focus)</h3>

            {{-- 🚨 NOTE: Controller/Route မှ View သို့ Project Data ကို pass လုပ်ရပါမည်။
                ယာယီနမူနာ Data ကို View ထဲမှာပဲ သတ်မှတ်ပါမယ်။ --}}
          @php
    // ပုံ Path များကို project တစ်ခုစီအတွက် သီးခြားသတ်မှတ်ပါမည်။
    $projects = [
        [
            'title' => 'FDA eSubmission System',
            'description' => 'The main FDA Maintaince project. Responsible for backend APIs and system stability for critical government e-submission.',
            'link' => 'https://esubmission.fda.gov.mm/',
            'image_src' => asset('images/fda-login.png')
        ],
        [
            'title' => 'Post Market Surveillance',
            'description' => 'Maintained and developed core APIs for critical government-related data management.',
            'link' => 'http://pms',
            'image_src' => asset('images/pms.png')
        ],
        [
            'title' => 'FDA eSubmission System (Admin Dashboard)',
            'description' => 'Built an admin panel for inventory, orders, and user management using Laravel Livewire.',
            'link' => 'https://drug-esubmission.fda.gov.mm/home',
            'image_src' => asset('images/drug.png')
        ],
        [
            'title' => 'Learning Blog Platform',
            'description' => 'A small CRUD application to practice Unit Testing and advanced Eloquent features.',
            'link' => '#',
            'image_src' => asset('images/learningBlog.png') 
        ],
    ];
@endphp

            <div class="grid md:grid-cols-3 sm:grid-cols-2 grid-cols-1 gap-8">
                @foreach ($projects as $project)
                    <div class="bg-white dark:bg-gray-900 rounded-2xl shadow-lg p-6 hover:-translate-y-2 transition transform hover:shadow-2xl dark:shadow-blue-500/30" data-aos="zoom-in">
                        <img
                                src="{{ $project['image_src'] }}"
                                alt="{{ $project['title'] }} Screenshot"
                                class="w-full h-auto rounded-lg mb-4 shadow-md object-cover"
                                style="max-height: 200px; margin: auto;"
                            >
                        <h4 class="text-xl font-semibold mb-2 text-blue-600 dark:text-blue-400">{{ $project['title'] }}</h4>
                        <p class="text-gray-600 dark:text-gray-400 mb-4">{{ $project['description'] }}</p>
                        <a href="{{ $project['link'] }}" target="_blank" class="text-sm font-medium text-indigo-600 dark:text-indigo-400 hover:underline">
                            View Project →
                        </a>
                    </div>
                @endforeach
            </div>
            <div class="text-center mt-12">
                <p class="text-gray-600 dark:text-gray-400 text-lg">
                    Check out my <a href="https://github.com/amie-frog" target="_blank" class="text-blue-600 dark:text-blue-400 font-semibold hover:underline">GitHub profile</a> for more repositories.
                </p>
            </div>
        </div>
    </section>

    <section id="contact" class="max-w-5xl mx-auto py-20 px-6 text-center" data-aos="fade-up">
        <h3 class="text-4xl font-bold mb-4 text-blue-600 dark:text-blue-400">Let’s Connect</h3>
        <p class="text-xl text-gray-600 dark:text-gray-400 mb-8 max-w-3xl mx-auto">I'm actively looking for Mid-Level opportunities in Thailand. Feel free to reach out!</p>
        <a href="mailto:azinphyo452@gmail.com" class="bg-blue-600 text-white px-8 py-4 rounded-full font-bold text-lg shadow-xl hover:bg-blue-700 hover:scale-105 transition-transform duration-300">
            Send Message via Email
        </a>

        <div class="flex justify-center mt-12 space-x-6">
            <a href="YOUR_LINKEDIN_URL" target="_blank" class="text-gray-600 dark:text-gray-400 hover:text-blue-600 transition">LinkedIn</a>
            <a href="https://github.com/amie-frog" target="_blank" class="text-gray-600 dark:text-gray-400 hover:text-blue-600 transition">GitHub</a>
        </div>
    </section>

    <footer class="bg-gray-900 dark:bg-gray-900 text-gray-400 py-6 text-center transition duration-500" data-aos="fade-up">
        <p>© {{ date('Y') }} A Zin Phyoe — Built with Laravel, TailwindCSS, and Deployed on Render.</p>
    </footer>

    <script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
    <script>
        // Theme Switcher Logic
        const themeToggleBtn = document.getElementById('theme-toggle');
        const darkIcon = document.getElementById('theme-toggle-dark-icon');
        const lightIcon = document.getElementById('theme-toggle-light-icon');

        // Check for theme in local storage on load
        if (localStorage.getItem('color-theme') === 'dark' || (!('color-theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
            document.documentElement.classList.add('dark');
            darkIcon.classList.remove('hidden');
        } else {
            lightIcon.classList.remove('hidden');
        }

        themeToggleBtn.addEventListener('click', function() {
            // toggle icons
            darkIcon.classList.toggle('hidden');
            lightIcon.classList.toggle('hidden');

            if (document.documentElement.classList.contains('dark')) {
                document.documentElement.classList.remove('dark');
                localStorage.setItem('color-theme', 'light');
            } else {
                document.documentElement.classList.add('dark');
                localStorage.setItem('color-theme', 'dark');
            }
        });

        // AOS Initialization
        AOS.init({
            duration: 1000,
            once: true,
        });
    </script>
</body>
</html>
