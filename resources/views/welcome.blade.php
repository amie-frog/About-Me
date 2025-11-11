<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio - A Zin Phyoe</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Lottie Player -->
    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
    <!-- AOS (Animate On Scroll) -->
    <link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet">
</head>
<body class="bg-gray-50 text-gray-800 font-sans overflow-x-hidden">

    <!-- Navbar -->
    <nav class="bg-white shadow-md sticky top-0 z-50" data-aos="fade-down">
        <div class="max-w-6xl mx-auto px-6 py-4 flex justify-between items-center">
            <h1 class="text-2xl font-bold text-blue-600">A Zin Phyoe</h1>
            <div class="space-x-6">
                <a href="#about" class="hover:text-blue-500 transition">About</a>
                <a href="#projects" class="hover:text-blue-500 transition">Projects</a>
                <a href="#contact" class="hover:text-blue-500 transition">Contact</a>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="flex flex-col md:flex-row items-center justify-center py-20 px-6 bg-gradient-to-r from-indigo-500 to-blue-600 text-white">
        <div class="md:w-1/2 text-center md:text-left space-y-4" data-aos="fade-right">
            <h2 class="text-4xl md:text-5xl font-bold">Hi, I'm A Zin Phyoe 👋</h2>
            <p class="text-lg opacity-90">
                Junior Web Developer specializing in Laravel, TailwindCSS, and MySQL. Passionate about creating interactive, user-friendly systems.
            </p>
            <a href="#projects" class="inline-block bg-white text-blue-700 px-6 py-3 mt-4 rounded-lg font-semibold hover:scale-105 hover:bg-gray-200 transition-transform duration-300">
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

    <!-- About Section -->
    <section id="about" class="max-w-4xl mx-auto py-16 px-6 text-center" data-aos="fade-up">
        <h3 class="text-3xl font-semibold mb-4">About Me</h3>
        <p class="text-gray-600 leading-relaxed">
            I'm a passionate developer from Myanmar 🇲🇲. I love turning complex ideas into simple, functional web applications.
            Currently working on FDA-related systems and always learning new tools and best practices.
        </p>

        <!-- Another subtle animation -->
        <div class="flex justify-center mt-10" data-aos="zoom-in">
            <lottie-player
                src="https://assets9.lottiefiles.com/packages/lf20_h4th9ofg.json"
                background="transparent"
                speed="1"
                style="width: 200px; height: 200px;"
                loop
                autoplay>
            </lottie-player>
        </div>
    </section>

    <!-- Projects Section -->
    <section id="projects" class="bg-gray-100 py-16" data-aos="fade-up">
        <div class="max-w-6xl mx-auto px-6">
            <h3 class="text-3xl font-semibold text-center mb-10">My Projects</h3>
            <div class="grid md:grid-cols-3 sm:grid-cols-2 grid-cols-1 gap-8">
                @foreach ($projects as $project)
                    <div class="bg-white rounded-2xl shadow-lg p-6 hover:-translate-y-2 transition transform hover:shadow-2xl" data-aos="zoom-in">
                        <lottie-player
                            src="https://assets6.lottiefiles.com/packages/lf20_9z9a4nvv.json"
                            background="transparent"
                            speed="1"
                            style="width: 100px; height: 100px; margin: auto;"
                            loop
                            autoplay>
                        </lottie-player>
                        <h4 class="text-xl font-semibold mb-2 text-blue-600">{{ $project['title'] }}</h4>
                        <p class="text-gray-600 mb-4">{{ $project['description'] }}</p>
                        <a href="{{ $project['link'] }}" class="text-sm font-medium text-indigo-600 hover:underline">
                            View Project →
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="max-w-4xl mx-auto py-16 px-6 text-center" data-aos="fade-up">
        <h3 class="text-3xl font-semibold mb-4">Let’s Connect</h3>
        <p class="text-gray-600 mb-6">Want to work together or just say hi? I’d love to hear from you!</p>
        <a href="mailto:azinphyoe@example.com" class="bg-blue-600 text-white px-6 py-3 rounded-lg hover:bg-blue-700 hover:scale-105 transition-transform duration-300">
            Send Message
        </a>

        <div class="flex justify-center mt-10" data-aos="zoom-in">
            <lottie-player
                src="https://assets8.lottiefiles.com/packages/lf20_twijbubv.json"
                background="transparent"
                speed="1"
                style="width: 250px; height: 250px;"
                loop
                autoplay>
            </lottie-player>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-800 text-gray-400 py-6 text-center" data-aos="fade-up">
        <p>© {{ date('Y') }} A Zin Phyoe — Crafted with ❤️ using Laravel & TailwindCSS.</p>
    </footer>

    <!-- AOS Init -->
    <script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 1000,
            once: true,
        });
    </script>
</body>
</html>
