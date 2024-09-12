<?php
function printToConsole($data) {
    echo "<script>console.log('Debug:" . json_encode($data) . "');</script>";
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Callum Telfer</title>
    <meta name="description" content="Callum Telfer's personal development portfolio">
    <meta name="author" content="Callum Telfer">
    <meta name="keywords" content="Callum, Telfer, Callum Telfer, Personal Website, Web Development, Minecraft Plugins, Java, PHP, HTML, CSS, SQL, Python, JavaScript">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="index, follow">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"/>
    <link rel="icon" type="image/png" href="assets/CTD_LOGO.png">
</head>
<body class="bg-gray-100 font-sans leading-normal tracking-normal">

    <nav class="bg-white p-6 fixed w-full z-10 top-0 shadow flex justify-center lg:justify-between">
        <div class="container mx-auto flex justify-center lg:justify-between items-center">
            <a class="text-gray-800 hover:text-gray-900 text-xl font-bold text-center lg:text-left" href="#">Callum Telfer</a>
            <div class="hidden lg:block">
                <ul class="inline-flex">
                    <li><a href="#" class="px-4 py-2 text-gray-700 hover:text-gray-900 font-bold" onclick="scrollToElement('home')">Home</a></li>
                    <li><a href="#projects" class="px-4 py-2 text-gray-700 hover:text-gray-900 font-bold" onclick="scrollToElement('projects')">Projects</a></li>
                    <li><a href="#skills" class="px-4 py-2 text-gray-700 hover:text-gray-900 font-bold" onclick="scrollToElement('skills')">Skills</a></li>
                    <li><a href="https://cv.callumtelfer.uk" target="#" class="px-4 py-2 text-gray-700 hover:text-gray-900 font-bold">Resume</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <header class="bg-gradient-to-r from-blue-500 to-indigo-600 relative pt-16 pb-32 flex content-center items-center justify-center" style="min-height: 75vh;" id="home">
        <div class="absolute top-0 w-full h-full bg-center bg-cover" style="background-image:url('assets/london_2023.jpeg');">
            <span id="blackOverlay" class="w-full h-full absolute opacity-60 bg-black"></span>
        </div>
        <div class="container relative mx-auto">
            <div class="items-center flex flex-wrap">
                <div class="w-full lg:w-6/12 px-4 ml-auto mr-auto text-center">
                    <div class="pr-12">
                        <h1 class="text-white font-semibold text-5xl">
                            Hello, I'm Callum
                        </h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="top-auto bottom-0 left-0 right-0 w-full absolute pointer-events-none overflow-hidden" style="height: 70px;">
        </div>
    </header>

    <section class="bg-white py-8">
        <div class="container mx-auto px-2 pt-4 pb-12 text-gray-800" id="projects">
            <h1 class="w-full my-2 text-5xl font-bold leading-tight text-center text-gray-800">Projects</h1>
            <div class="w-full mb-4">
                <div class="h-1 mx-auto bg-indigo-600 w-64 opacity-25 my-0 py-0 rounded-t"></div>
            </div>
            <div class="flex flex-wrap justify-center">
                <div class="w-full md:w-1/3 lg:w-1/4 p-4">
                    <div class="rounded-lg shadow-lg bg-gray-200 p-6">
                        <h3 class="text-xl font-semibold mb-2"><a href="https://github.com/VoidemLIVE/callumtelfer.uk" target="#">Callumtelfer.uk</a></h3>
                        <p class="text-gray-700">My personal website that you are currently viewing!</p>
                        <div class="inline-flex items-center bg-gray-400 rounded-full p-1">
                        <svg width="20" height="20">
                            <circle cx="10" cy="10" r="5" fill="#4F5D95" />
                        </svg>
                        <p class="text-xs ml-1 mr-2 font-bold">PHP</p>
                        </div>
                        <div class="inline-flex items-center bg-gray-400 rounded-full p-1">
                            <img width="25" height="20" src="assets/twLogo.png" alt="Tailwind Logo" style="width: 25px; height: 20px;">
                            <p class="text-xs ml-1 mr-2 font-bold">Tailwind</p>
                        </div>
                    </div>
                </div>
                <div class="w-full md:w-1/3 lg:w-1/4 p-4">
                    <div class="rounded-lg shadow-lg bg-gray-200 p-6">
                        <h3 class="text-xl font-semibold mb-2"><a href="https://github.com/VoidemLIVE/GeoWordle" target="#">Geo Wordle</a></h3>
                        <p class="text-gray-700">A geography wordle-like game for guessing countries</p>
                        <div class="inline-flex items-center bg-gray-400 rounded-full p-1">
                        <svg width="20" height="20">
                            <circle cx="10" cy="10" r="5" fill="#4F5D95" />
                        </svg>
                        <p class="text-xs ml-1 mr-2 font-bold">PHP</p>
                        </div>
                        <div class="inline-flex items-center bg-gray-400 rounded-full p-1">
                            <img width="25" height="20" src="assets/twLogo.png" alt="Tailwind Logo" style="width: 25px; height: 20px;">
                            <p class="text-xs ml-1 mr-2 font-bold">Tailwind</p>
                        </div>
                    </div>
                </div>
                <div class="w-full md:w-1/3 lg:w-1/4 p-4">
                    <div class="rounded-lg shadow-lg bg-gray-200 p-6">
                        <h3 class="text-xl font-semibold mb-2"><a href="https://github.com/VoidemLIVE/Help-Command-Plugin" target="#">Help Command</a></h3>
                        <p class="text-gray-700">A Minecraft plugin that creates a custom /help command</p>
                        <div class="inline-flex items-center bg-gray-400 rounded-full p-1">
                        <svg width="20" height="20">
                            <circle cx="10" cy="10" r="5" fill="#b07219" />
                        </svg>
                        <p class="text-xs ml-1 mr-2 font-bold">Java</p>
                        </div>
                        <div class="inline-flex items-center bg-gray-400 rounded-full p-1">
                            <img width="25" height="20" src="assets/spigot.png" alt="Tailwind Logo" style="width: 25px; height: 20px;">
                            <p class="text-xs ml-1 mr-2 font-bold">Spigot</p>
                        </div>
                    </div>
                </div>
                <div class="w-full md:w-1/3 lg:w-1/4 p-4">
                    <div class="rounded-lg shadow-lg bg-gray-200 p-6">
                        <h3 class="text-xl font-semibold mb-2"><a href="https://github.com/VoidemLIVE/VoidemScreenshots" target="#">Screenshot Manager</a></h3>
                        <p class="text-gray-700">A system that allows you to store and display screenshots</p>
                        <div class="inline-flex items-center bg-gray-400 rounded-full p-1">
                        <svg width="20" height="20">
                            <circle cx="10" cy="10" r="5" fill="#4F5D95" />
                        </svg>
                        <p class="text-xs ml-1 mr-2 font-bold">PHP</p>
                        </div>
                        <div class="inline-flex items-center bg-gray-400 rounded-full p-1">
                            <img width="25" height="20" src="assets/twLogo.png" alt="Tailwind Logo" style="width: 25px; height: 20px;">
                            <p class="text-xs ml-1 mr-2 font-bold">Tailwind</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-gray-100 py-8">
        <div class="container mx-auto px-2 pt-4 pb-12 text-gray-800" id="skills">
            <h1 class="w-full my-2 text-5xl font-bold leading-tight text-center text-gray-800">Skills</h1>
            <div class="w-full mb-4">
                <div class="h-1 mx-auto bg-indigo-600 w-64 opacity-25 my-0 py-0 rounded-t"></div>
            </div>
            <div class="flex flex-wrap justify-center">
                <div class="w-full md:w-1/2 lg:w-1/4 p-4 text-center">
                    <div class="bg-gray-200 rounded-lg shadow-lg p-6">
                        <h3 class="text-xl font-semibold mb-2">Frontend Development</h3>
                        <p class="text-gray-700">HTML, CSS, JavaScript</p>
                    </div>
                </div>
                <div class="w-full md:w-1/2 lg:w-1/4 p-4 text-center">
                    <div class="bg-gray-200 rounded-lg shadow-lg p-6">
                        <h3 class="text-xl font-semibold mb-2">Backend Development</h3>
                        <p class="text-gray-700">PHP, Java, Node.JS</p>
                    </div>
                </div>
                <div class="w-full md:w-1/2 lg:w-1/4 p-4 text-center">
                    <div class="bg-gray-200 rounded-lg shadow-lg p-6">
                        <h3 class="text-xl font-semibold mb-2">Technologies</h3>
                        <p class="text-gray-700">Git, MySQL, VSC</p>
                    </div>
                </div>
                <div class="w-full md:w-1/2 lg:w-1/4 p-4 text-center">
                    <div class="bg-gray-200 rounded-lg shadow-lg p-6">
                        <h3 class="text-xl font-semibold mb-2">Other Skills</h3>
                        <p class="text-gray-700">Problem Solving, Packet Tracer, Ubuntu</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer class="bg-gray-300 border-t border-gray-400 shadow mt-12">
    <div class="container max-w-4xl mx-auto flex justify-between items-center py-8">
        <div class="flex w-full md:w-1/2 justify-center md:justify-start text-white">
            <a class="pr-8" href="https://linkedin.com/in/callum-telfer" target="#">
                <i class="fab fa-linkedin-in text-gray-500 hover:text-gray-600 text-lg"></i>
            </a>
            <a class="pr-8" href="mailto:callum.telfer07@gmail.com" target="#">
                <i class="far fa-envelope text-gray-500 hover:text-gray-600 text-lg"></i>
            </a>
            <a class="pr-8" href="https://github.com/VoidemLIVE" target="#">
                <i class="fab fa-github text-gray-500 hover:text-gray-600 text-lg"></i>
            </a>
        </div>
        <div>
            <span class="text-gray-500 text-lg font-bold">Callum Telfer</span>
            <p class="text-sm text-gray-500 hover:text-gray-700 "><a href="https://github.com/VoidemLIVE/callumtelfer.uk" target="#">Github Repository</a></p>
        </div>
    </div>
</footer>
        <script>
        function scrollToElement(id) {
            var element = document.getElementById(id);
            if (element) {
                element.scrollIntoView({ behavior: 'smooth' });
            } else {
                console.error("Element with ID '" + id + "' not found.");
            }
        }
    </script>
</body>
</html>
