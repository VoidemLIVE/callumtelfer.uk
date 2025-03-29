<?php

function logToConsole($data) {
    echo "<script>console.log('$data')</script>";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Callum Telfer | Developer</title>
    <meta name="description" content="Callum Telfer's personal development portfolio">
    <meta name="author" content="Callum Telfer">
    <meta name="keywords" content="Callum, Telfer, Personal Website, Web Development, Minecraft Plugins, Java, PHP, HTML, CSS, SQL, Python, JavaScript">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"/>
    <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
</head>
<body class="bg-black text-white">
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            AOS.init({
                duration: 800,
                once: true,
                offset: 100,
                easing: 'ease-out-cubic'
            });
        });
    </script>
    <!-- Mobile Nav -->
    <nav class="md:hidden fixed bottom-0 left-0 right-0 bg-gray-900 z-50 px-4 py-3">
        <div class="flex justify-around items-center">
            <a href="#home" class="text-gray-400 hover:text-white transition-colors p-2">
                <i class="fas fa-home text-xl"></i>
            </a>
            <a href="#projects" class="text-gray-400 hover:text-white transition-colors p-2">
                <i class="fas fa-code text-xl"></i>
            </a>
            <a href="#skills" class="text-gray-400 hover:text-white transition-colors p-2">
                <i class="fas fa-brain text-xl"></i>
            </a>
            <a href="#contact" class="text-gray-400 hover:text-white transition-colors p-2">
                <i class="fas fa-envelope text-xl"></i>
            </a>
            <a href="https://cv.callumtelfer.uk" target="_blank" class="text-gray-400 hover:text-white transition-colors p-2">
                <i class="fas fa-file-alt text-xl"></i>
            </a>
        </div>
    </nav>

    <!-- Desktop Nav -->
    <nav class="hidden md:flex fixed left-0 top-0 h-screen w-20 bg-gray-900 flex-col items-center justify-between py-8 z-50">
        <div class="text-3xl font-bold" style="font-family: 'JetBrains Mono', monospace;">CT</div>
        <div class="flex flex-col space-y-8">
            <a href="#home" class="text-gray-400 hover:text-white transition-colors">
                <i class="fas fa-home text-xl"></i>
            </a>
            <a href="#projects" class="text-gray-400 hover:text-white transition-colors">
                <i class="fas fa-code text-xl"></i>
            </a>
            <a href="#skills" class="text-gray-400 hover:text-white transition-colors">
                <i class="fas fa-brain text-xl"></i>
            </a>
            <a href="#contact" class="text-gray-400 hover:text-white transition-colors">
                <i class="fas fa-envelope text-xl"></i>
            </a>
        </div>
        <div>
            <a href="https://cv.callumtelfer.uk" target="_blank" class="rotate-90 block transform origin-center text-sm font-medium hover:text-gray-300">RESUME</a>
        </div>
    </nav>

    <main class="md:ml-20">
        <!-- Hero -->
        <section id="home" class="min-h-screen bg-gradient-to-br from-gray-900 to-black relative overflow-hidden px-4 md:px-0">
            <div class="absolute inset-0 opacity-20">
                <div class="absolute inset-0 bg-[radial-gradient(circle_at_center,_var(--tw-gradient-stops))] from-gray-700 via-gray-900 to-black"></div>
                <div class="grid grid-cols-8 grid-rows-8 gap-4 h-full w-full">
                    <div class="col-span-1 row-span-1 bg-white/5 rounded-lg"></div>
                </div>
            </div>
            
            <div class="absolute bottom-0 left-0 right-0 h-32 bg-gradient-to-t from-black to-transparent"></div>
            
            <div class="relative flex items-center justify-center h-screen">
                <div class="max-w-4xl mx-auto px-4 md:px-8 text-center">
                    <h1 class="text-4xl md:text-7xl font-bold mb-6 bg-gradient-to-r from-white to-gray-500 bg-clip-text text-transparent" data-aos="fade-up">
                        Callum Telfer
                    </h1>
                    <p class="text-xl md:text-2xl text-gray-400 mb-12" data-aos="fade-up" data-aos-delay="100">Full-Stack Developer & Problem Solver</p>
                    <div class="flex flex-col md:flex-row justify-center space-y-4 md:space-y-0 md:space-x-6" data-aos="fade-up" data-aos-delay="200">
                        <a href="#projects" class="px-8 py-3 bg-white text-black rounded hover:bg-gray-300 transition-colors">View Work</a>
                        <a href="#contact" class="px-8 py-3 border border-white rounded hover:bg-white hover:text-black transition-all">Contact Me</a>
                    </div>
                </div>
            </div>
        </section>

        <!-- projects  -->
        <section id="projects" class="py-20 px-4 md:px-0">
            <div class="max-w-6xl mx-auto">
                <h2 class="text-4xl md:text-5xl font-bold mb-16" data-aos="fade-right">Featured<br/>Projects_</h2>
                
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    <div class="bg-gray-900 rounded-lg overflow-hidden transform hover:-translate-y-2 transition-transform duration-300" 
                        data-aos="fade-up"
                        data-aos-delay="0">
                        <div class="h-48 bg-gray-800 relative">
                            <img src="assets/ctuk.png" alt="Callumtelfer.uk Preview" class="w-full h-full object-cover"/>
                            <div class="absolute top-4 right-4 flex space-x-3">
                                <a href="https://callumtelfer.uk" target="_blank" 
                                class="bg-white/10 backdrop-blur-sm px-3 rounded-full text-white hover:bg-white/20 transition-colors text-sm font-medium flex items-center">
                                    <i class="fas fa-external-link-alt mr-2 text-sm"></i>
                                    Visit Site
                                </a>
                                <a href="https://github.com/VoidemLIVE/callumtelfer.uk" target="_blank" 
                                class="text-white hover:text-gray-300 transition-colors">
                                    <i class="fab fa-github text-2xl"></i>
                                </a>
                            </div>
                        </div>
                        <div class="p-6">
                            <h3 class="text-xl font-bold mb-3">Callumtelfer.uk</h3>
                            <p class="text-gray-400 mb-4">Personal portfolio website showcasing my work and skills</p>
                            <div class="flex flex-wrap gap-2">
                                <span class="px-3 py-1 bg-gray-800 rounded-full text-sm">PHP</span>
                                <span class="px-3 py-1 bg-gray-800 rounded-full text-sm">Tailwind</span>
                            </div>
                        </div>
                    </div>

                    <div class="bg-gray-900 rounded-lg overflow-hidden transform hover:-translate-y-2 transition-transform duration-300" 
                        data-aos="fade-up"
                        data-aos-delay="100">
                        <div class="h-48 bg-gray-800 relative">
                            <img src="assets/newGeoWordleBanner.png" alt="Geo Wordle Preview" class="w-full h-full object-cover"/>
                            <div class="absolute top-4 right-4 flex space-x-3">
                                <a href="https://geo.voidem.com" target="_blank" 
                                class="bg-white/10 backdrop-blur-sm px-3 rounded-full text-white hover:bg-white/20 transition-colors text-sm font-medium flex items-center">
                                    <i class="fas fa-external-link-alt mr-2 text-sm"></i>
                                    Visit Site
                                </a>
                                <a href="https://github.com/VoidemLIVE/GeoWordle" target="_blank" 
                                class="text-white hover:text-gray-300 transition-colors">
                                    <i class="fab fa-github text-2xl"></i>
                                </a>
                            </div>
                        </div>
                        <div class="p-6">
                            <h3 class="text-xl font-bold mb-3">Geo Wordle</h3>
                            <p class="text-gray-400 mb-4">Interactive geography game based on the Wordle concept</p>
                            <div class="flex flex-wrap gap-2">
                                <span class="px-3 py-1 bg-gray-800 rounded-full text-sm">PHP</span>
                                <span class="px-3 py-1 bg-gray-800 rounded-full text-sm">MySQL</span>
                                <span class="px-3 py-1 bg-gray-800 rounded-full text-sm">Tailwind</span>
                                <span class="px-3 py-1 bg-gray-800 rounded-full text-sm">JavaScript</span>
                            </div>
                        </div>
                    </div>

                    <div class="bg-gray-900 rounded-lg overflow-hidden transform hover:-translate-y-2 transition-transform duration-300" 
                            data-aos="fade-up"
                            data-aos-delay="200">
                        <div class="h-48 bg-gray-800 relative">
                            <img src="assets/screenshots.png" alt="Screenshot Manager Preview" class="w-full h-full object-cover"/>
                            <div class="absolute top-4 right-4">
                                <a href="https://github.com/VoidemLIVE/VoidemScreenshots" target="_blank" 
                                class="text-black hover:text-gray-600 transition-colors">
                                    <i class="fab fa-github text-2xl"></i>
                                </a>
                            </div>
                        </div>
                        <div class="p-6">
                            <h3 class="text-xl font-bold mb-3">Screenshot Manager</h3>
                            <p class="text-gray-400 mb-4">System for storing and displaying screenshots taken using ShareX</p>
                            <div class="flex flex-wrap gap-2">
                                <span class="px-3 py-1 bg-gray-800 rounded-full text-sm">PHP</span>
                                <span class="px-3 py-1 bg-gray-800 rounded-full text-sm">Tailwind</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="skills" class="relative min-h-screen py-20 bg-black px-4 md:px-0">
            <div class="absolute inset-0 bg-[radial-gradient(circle_500px_at_50%_-30%,#1f2937,transparent)]"></div>

            <div class="max-w-6xl mx-auto relative">
                <div class="text-center mb-20">
                    <h2 class="text-4xl md:text-5xl font-bold mb-6" data-aos="fade-right">Technical<br/>Expertise_</h2>
                    <div class="h-1 w-32 bg-gradient-to-r from-gray-800 to-transparent mx-auto"></div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    <!-- Left col -->
                    <div class="space-y-6">
                        <!-- Languages -->
                        <div class="bg-gray-900/50 backdrop-blur-sm rounded-xl p-8 border border-gray-800" 
                            data-aos="fade-right"
                            data-aos-delay="0">
                            <div class="flex items-center mb-8">
                                <div class="w-1 h-8 bg-blue-500 rounded-full mr-4"></div>
                                <h3 class="text-2xl font-bold">Core Languages</h3>
                            </div>

                            <div class="space-y-6">
                                <!-- PHP -->
                                <div class="group">
                                    <div class="flex justify-between items-center mb-2">
                                        <div class="flex items-center">
                                            <span class="text-gray-300 font-medium">PHP</span>
                                            <span class="ml-3 text-xs text-blue-400 font-mono">Advanced</span>
                                        </div>
                                        <span class="text-gray-400 text-sm">90%</span>
                                    </div>
                                    <div class="h-1 w-full bg-gray-800 rounded-full overflow-hidden">
                                        <div class="h-full w-11/12 bg-gradient-to-r from-blue-600 to-blue-400 rounded-full transform origin-left transition-transform duration-500 ease-out group-hover:scale-x-105"></div>
                                    </div>
                                </div>

                                <!-- Java -->
                                <div class="group">
                                    <div class="flex justify-between items-center mb-2">
                                        <div class="flex items-center">
                                            <span class="text-gray-300 font-medium">Java</span>
                                            <span class="ml-3 text-xs text-blue-400 font-mono">Advanced</span>
                                        </div>
                                        <span class="text-gray-400 text-sm">85%</span>
                                    </div>
                                    <div class="h-1 w-full bg-gray-800 rounded-full overflow-hidden">
                                        <div class="h-full w-10/12 bg-gradient-to-r from-blue-600 to-blue-400 rounded-full transform origin-left transition-transform duration-500 ease-out group-hover:scale-x-105"></div>
                                    </div>
                                </div>

                                <!-- Python -->
                                <div class="group">
                                    <div class="flex justify-between items-center mb-2">
                                        <div class="flex items-center">
                                            <span class="text-gray-300 font-medium">Python</span>
                                            <span class="ml-3 text-xs text-blue-400 font-mono">Intermediate</span>
                                        </div>
                                        <span class="text-gray-400 text-sm">70%</span>
                                    </div>
                                    <div class="h-1 w-full bg-gray-800 rounded-full overflow-hidden">
                                        <div class="h-full w-9/12 bg-gradient-to-r from-blue-600 to-blue-400 rounded-full transform origin-left transition-transform duration-500 ease-out group-hover:scale-x-105"></div>
                                    </div>
                                </div>

                                <!-- JavaScript -->
                                <div class="group">
                                    <div class="flex justify-between items-center mb-2">
                                        <div class="flex items-center">
                                            <span class="text-gray-300 font-medium">JavaScript</span>
                                            <span class="ml-3 text-xs text-blue-400 font-mono">Intermediate</span>
                                        </div>
                                        <span class="text-gray-400 text-sm">60%</span>
                                    </div>
                                    <div class="h-1 w-full bg-gray-800 rounded-full overflow-hidden">
                                        <div class="h-full w-7/12 bg-gradient-to-r from-blue-600 to-blue-400 rounded-full transform origin-left transition-transform duration-500 ease-out group-hover:scale-x-105"></div>
                                    </div>
                                </div>

                                <!-- C - Newly added 29/03/2025 as I have become more proficient & gotten less interested in C# -->
                                <div class="group">
                                    <div class="flex justify-between items-center mb-2">
                                        <div class="flex items-center">
                                            <span class="text-gray-300 font-medium">C</span>
                                            <span class="ml-3 text-xs text-blue-400 font-mono">Beginner</span>
                                        </div>
                                        <span class="text-gray-400 text-sm">40%</span>
                                    </div>
                                    <div class="h-1 w-full bg-gray-800 rounded-full overflow-hidden">
                                        <div class="h-full w-4/12 bg-gradient-to-r from-blue-600 to-blue-400 rounded-full transform origin-left transition-transform duration-500 ease-out group-hover:scale-x-105"></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Specialised -->
                        <div class="bg-gray-900/50 backdrop-blur-sm rounded-xl p-8 border border-gray-800" 
                                data-aos="fade-right"
                                data-aos-delay="100">
                            <div class="flex items-center mb-8">
                                <div class="w-1 h-8 bg-yellow-500 rounded-full mr-4"></div>
                                <h3 class="text-2xl font-bold">Specialised</h3>
                            </div>

                            <div class="space-y-6">
                                <!-- Spigot -->
                                <div class="group">
                                    <div class="flex justify-between items-center mb-2">
                                        <div class="flex items-center">
                                            <a href="https://hub.spigotmc.org/javadocs/spigot/" target="_blank" class="text-gray-300 font-medium hover:text-yellow-400 transition-colors">SpigotAPI</a>
                                            <span class="ml-3 text-xs text-yellow-400 font-mono">Intermediate</span>
                                        </div>
                                        <span class="text-gray-400 text-sm">70%</span>
                                    </div>
                                    <div class="h-1 w-full bg-gray-800 rounded-full overflow-hidden">
                                        <div class="h-full w-9/12 bg-gradient-to-r from-yellow-600 to-yellow-400 rounded-full transform origin-left transition-transform duration-500 ease-out group-hover:scale-x-105"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Right col -->
                    <div class="space-y-6">
                        <!-- Frontend -->
                        <div class="bg-gray-900/50 backdrop-blur-sm rounded-xl p-8 border border-gray-800" 
                            data-aos="fade-left"
                            data-aos-delay="0">
                            <div class="flex items-center mb-8">
                                <div class="w-1 h-8 bg-purple-500 rounded-full mr-4"></div>
                                <h3 class="text-2xl font-bold">Frontend</h3>
                            </div>

                            <div class="space-y-6">
                                <!-- HTML/CSS -->
                                <div class="group">
                                    <div class="flex justify-between items-center mb-2">
                                        <div class="flex items-center">
                                            <span class="text-gray-300 font-medium">HTML/CSS</span>
                                            <span class="ml-3 text-xs text-purple-400 font-mono">Advanced</span>
                                        </div>
                                        <span class="text-gray-400 text-sm">85%</span>
                                    </div>
                                    <div class="h-1 w-full bg-gray-800 rounded-full overflow-hidden">
                                        <div class="h-full w-10/12 bg-gradient-to-r from-purple-600 to-purple-400 rounded-full transform origin-left transition-transform duration-500 ease-out group-hover:scale-x-105"></div>
                                    </div>
                                </div>

                                <!-- Tailwind -->
                                <div class="group">
                                    <div class="flex justify-between items-center mb-2">
                                        <div class="flex items-center">
                                            <span class="text-gray-300 font-medium">TailwindCSS</span>
                                            <span class="ml-3 text-xs text-purple-400 font-mono">Advanced</span>
                                        </div>
                                        <span class="text-gray-400 text-sm">85%</span>
                                    </div>
                                    <div class="h-1 w-full bg-gray-800 rounded-full overflow-hidden">
                                        <div class="h-full w-10/12 bg-gradient-to-r from-purple-600 to-purple-400 rounded-full transform origin-left transition-transform duration-500 ease-out group-hover:scale-x-105"></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Tools -->
                        <div class="bg-gray-900/50 backdrop-blur-sm rounded-xl p-8 border border-gray-800" 
                            data-aos="fade-left"
                            data-aos-delay="100">
                            <div class="flex items-center mb-8">
                                <div class="w-1 h-8 bg-green-500 rounded-full mr-4"></div>
                                <h3 class="text-2xl font-bold">Tools</h3>
                            </div>

                            <div class="space-y-6">
                                <!-- MySQL -->
                                <div class="group">
                                    <div class="flex justify-between items-center mb-2">
                                        <div class="flex items-center">
                                            <span class="text-gray-300 font-medium">MySQL</span>
                                            <span class="ml-3 text-xs text-green-400 font-mono">Advanced</span>
                                        </div>
                                        <span class="text-gray-400 text-sm">85%</span>
                                    </div>
                                    <div class="h-1 w-full bg-gray-800 rounded-full overflow-hidden">
                                        <div class="h-full w-10/12 bg-gradient-to-r from-green-600 to-green-400 rounded-full transform origin-left transition-transform duration-500 ease-out group-hover:scale-x-105"></div>
                                    </div>
                                </div>

                                <!-- VSCode -->
                                <div class="group">
                                    <div class="flex justify-between items-center mb-2">
                                        <div class="flex items-center">
                                            <span class="text-gray-300 font-medium">VSCode</span>
                                            <span class="ml-3 text-xs text-green-400 font-mono">Advanced</span>
                                        </div>
                                        <span class="text-gray-400 text-sm">85%</span>
                                    </div>
                                    <div class="h-1 w-full bg-gray-800 rounded-full overflow-hidden">
                                        <div class="h-full w-10/12 bg-gradient-to-r from-green-600 to-green-400 rounded-full transform origin-left transition-transform duration-500 ease-out group-hover:scale-x-105"></div>
                                    </div>
                                </div>

                                <!-- Git -->
                                <div class="group">
                                    <div class="flex justify-between items-center mb-2">
                                        <div class="flex items-center">
                                            <span class="text-gray-300 font-medium">Git</span>
                                            <span class="ml-3 text-xs text-green-400 font-mono">Intermediate</span>
                                        </div>
                                        <span class="text-gray-400 text-sm">65%</span>
                                    </div>
                                    <div class="h-1 w-full bg-gray-800 rounded-full overflow-hidden">
                                        <div class="h-full w-8/12 bg-gradient-to-r from-green-600 to-green-400 rounded-full transform origin-left transition-transform duration-500 ease-out group-hover:scale-x-105"></div>
                                    </div>
                                </div>

                                <!-- Ubuntu -->
                                <div class="group">
                                    <div class="flex justify-between items-center mb-2">
                                        <div class="flex items center">
                                            <span class="text-gray-300 font-medium">Ubuntu</span>
                                            <span class="ml-3 text-xs text-green-400 font-mono">Intermediate</span>
                                        </div>
                                        <span class="text-gray-400 text-sm">60%</span>
                                    </div>
                                    <div class="h-1 w-full bg-gray-800 rounded-full overflow-hidden">
                                        <div class="h-full w-7/12 bg-gradient-to-r from-green-600 to-green-400 rounded-full transform origin-left transition-transform duration-500 ease-out group-hover:scale-x-105"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Contact -->
        <section id="contact" class="py-20 px-4 md:px-0 mb-20 md:mb-0">
            <div class="max-w-6xl mx-auto">
                <h2 class="text-4xl md:text-5xl font-bold mb-16" data-aos="fade-right">Let's<br/>Connect_</h2>
                
                <div class="max-w-2xl">
                    <p class="text-gray-400 text-lg mb-12" data-aos="fade-up">
                        I'm always interested in hearing about new projects and opportunities. 
                        Whether you have a question or just want to say hello, I'll try my 
                        best to get back to you!
                    </p>
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                        <div class="space-y-8" data-aos="fade-right">
                            <a href="https://linkedin.com/in/callum-telfer" target="_blank" 
                            class="flex items-center space-x-4 text-gray-400 hover:text-white transition-colors group">
                                <div class="w-12 h-12 rounded-full bg-gray-900 flex items-center justify-center group-hover:bg-gray-800 transition-colors">
                                    <i class="fab fa-linkedin text-xl"></i>
                                </div>
                                <span>Connect on LinkedIn</span>
                            </a>
                            <a href="https://github.com/VoidemLIVE" target="_blank"
                            class="flex items-center space-x-4 text-gray-400 hover:text-white transition-colors group">
                                <div class="w-12 h-12 rounded-full bg-gray-900 flex items-center justify-center group-hover:bg-gray-800 transition-colors">
                                    <i class="fab fa-github text-xl"></i>
                                </div>
                                <span>Follow on GitHub</span>
                            </a>
                        </div>
                        
                        <div class="space-y-8" data-aos="fade-left">
                            <a href="mailto:callum.telfer07@gmail.com"
                            class="flex items-center space-x-4 text-gray-400 hover:text-white transition-colors group">
                                <div class="w-12 h-12 rounded-full bg-gray-900 flex items-center justify-center group-hover:bg-gray-800 transition-colors">
                                    <i class="far fa-envelope text-xl"></i>
                                </div>
                                <span>Send me an email</span>
                            </a>
                            <a href="https://cv.callumtelfer.uk" target="_blank"
                            class="flex items-center space-x-4 text-gray-400 hover:text-white transition-colors group">
                                <div class="w-12 h-12 rounded-full bg-gray-900 flex items-center justify-center group-hover:bg-gray-800 transition-colors">
                                    <i class="far fa-file-alt text-xl"></i>
                                </div>
                                <span>View Resume</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <footer class="md:ml-20 py-8 border-t border-gray-800 px-4 md:px-0 mb-16 md:mb-0">
        <div class="max-w-6xl mx-auto">
            <div class="flex flex-col md:flex-row justify-between items-center space-y-4 md:space-y-0">
                <p class="text-gray-400">© 2024 Callum Telfer</p>
                <a href="https://github.com/VoidemLIVE/callumtelfer.uk" target="_blank" 
                   class="text-gray-400 hover:text-white transition-colors">
                    View Source
                </a>
            </div>
        </div>
    </footer>

    <script>
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            const targetId = this.getAttribute('href');
            const targetElement = document.querySelector(targetId);
            if (targetElement) {
                targetElement.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }
        });
    });

    window.addEventListener('scroll', () => {
        let current = '';
        const sections = document.querySelectorAll('section');
        const navLinks = document.querySelectorAll('nav a');
        const scrollPosition = window.scrollY + window.innerHeight / 2;

        sections.forEach(section => {
            const sectionTop = section.offsetTop;
            const sectionBottom = sectionTop + section.offsetHeight;

            if (scrollPosition >= sectionTop && scrollPosition < sectionBottom) {
                current = section.getAttribute('id');
            }

            if (window.innerHeight + window.scrollY >= document.documentElement.scrollHeight - 100) {
                current = 'contact';
            }
        });

        navLinks.forEach(link => {
            link.classList.remove('text-white');
            link.classList.add('text-gray-400');
            if (link.getAttribute('href').slice(1) === current) {
                link.classList.remove('text-gray-400');
                link.classList.add('text-white');
            }
        });
    });
</script>
</body>
</html>