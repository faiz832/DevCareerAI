<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=poppins:400,600,700,800,900&display=swap" rel="stylesheet" />

    <!-- Styles -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        /* Hide scrollbar in Chrome, Safari and Opera */
        ::-webkit-scrollbar {
            display: none;
        }

        .tab-content {
            display: none;
        }

        .tab-content.active {
            display: block;
        }

        .tab-btn.active {
            border-bottom: 2px solid;
            @apply text-blue-600;
        }
    </style>
</head>

<body class="font-sans antialiased">
    <div class="bg-white">
        <!-- Navbar -->
        @include('layouts.navbar')

        <!-- Hero Section -->
        <section class="max-w-[1200px] mx-auto p-4 py-6 lg:py-8 mt-12 mb-20">
            <h1
                class="text-6xl text-center font-extrabold text-transparent bg-clip-text bg-gradient-to-r from-blue-700 to-blue-400 my-12">
                Courses</h1>
            <p class="w-2/4 mx-auto text-center text-lg">Build your career as a professional developer. Choose from a
                wide variety of professional development courses designed to enhance your skills and improve your
                career.</p>
        </section>

        <!-- Course selection section -->
        <section class="max-w-[1200px] mx-auto p-4 py-6 lg:py-8 mb-20">
            <!-- Tabs -->
            <div class="flex justify-center mb-8 space-x-4">
                <button
                    class="tab-btn active px-4 py-2 text-gray-600 border-b-2 border-transparent hover:text-blue-600 hover:border-blue-600"
                    data-target="tab1">Web Developer</button>
                <button
                    class="tab-btn px-4 py-2 text-gray-600 border-b-2 border-transparent hover:text-blue-600 hover:border-blue-600"
                    data-target="tab2">Android Developer</button>
                <button
                    class="tab-btn px-4 py-2 text-gray-600 border-b-2 border-transparent hover:text-blue-600 hover:border-blue-600"
                    data-target="tab3">Machine Learning</button>
                <button
                    class="tab-btn px-4 py-2 text-gray-600 border-b-2 border-transparent hover:text-blue-600 hover:border-blue-600"
                    data-target="tab4">Data Scientist</button>
            </div>

            <!-- Tab Contents with PHP -->
            <?php 
                // Define the content for each tab
                $tabs = [
                    'tab1' => [
                        ['title' => 'HTML & CSS', 'desc' => 'Learn the basics of web development.', 'img' => 'https://via.placeholder.com/400x200'],
                        ['title' => 'JavaScript', 'desc' => 'Master dynamic web content with JavaScript.', 'img' => 'https://via.placeholder.com/400x200'],
                        ['title' => 'React', 'desc' => 'Build modern UIs with React.js.', 'img' => 'https://via.placeholder.com/400x200'],
                        ['title' => 'PHP & Laravel', 'desc' => 'Develop robust backends with Laravel.', 'img' => 'https://via.placeholder.com/400x200']
                    ],
                    'tab2' => [
                        ['title' => 'Java', 'desc' => 'Build Android apps with Java.', 'img' => 'https://via.placeholder.com/400x200'],
                        ['title' => 'Kotlin', 'desc' => 'Develop modern Android apps with Kotlin.', 'img' => 'https://via.placeholder.com/400x200'],
                        ['title' => 'Flutter', 'desc' => 'Create cross-platform apps using Flutter.', 'img' => 'https://via.placeholder.com/400x200'],
                        ['title' => 'Android Studio', 'desc' => 'Learn to use Android Studio efficiently.', 'img' => 'https://via.placeholder.com/400x200']
                    ],
                    'tab3' => [
                        ['title' => 'Python', 'desc' => 'Get started with Python for Machine Learning.', 'img' => 'https://via.placeholder.com/400x200'],
                        ['title' => 'TensorFlow', 'desc' => 'Build neural networks with TensorFlow.', 'img' => 'https://via.placeholder.com/400x200'],
                        ['title' => 'PyTorch', 'desc' => 'Train machine learning models using PyTorch.', 'img' => 'https://via.placeholder.com/400x200'],
                        ['title' => 'Scikit-learn', 'desc' => 'Use Scikit-learn for data analysis.', 'img' => 'https://via.placeholder.com/400x200']
                    ],
                    'tab4' => [
                        ['title' => 'Data Analysis', 'desc' => 'Analyze datasets using Python.', 'img' => 'https://via.placeholder.com/400x200'],
                        ['title' => 'SQL & Databases', 'desc' => 'Learn database management and SQL.', 'img' => 'https://via.placeholder.com/400x200'],
                        ['title' => 'Big Data', 'desc' => 'Handle big data with Hadoop.', 'img' => 'https://via.placeholder.com/400x200'],
                        ['title' => 'Data Visualization', 'desc' => 'Visualize data with tools like Tableau.', 'img' => 'https://via.placeholder.com/400x200']
                    ]
                ];
        
                // Loop through each tab to generate content
                foreach ($tabs as $tabId => $contents): ?>
            <div id="<?= $tabId ?>" class="tab-content <?= $tabId == 'tab1' ? 'active' : '' ?>">
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                    <?php foreach ($contents as $content): ?>
                    <div
                        class="bg-white border rounded-lg p-3 hover:cursor-pointer hover:shadow-lg transition duration-300 ease-in-out transform hover:-translate-y-2 flex flex-col justify-between">
                        <img src="<?= $content['img'] ?>" alt="<?= $content['title'] ?>"
                            class="w-full h-48 object-cover rounded-lg mb-4">

                        <!-- Flex container for text and button -->
                        <div class="flex flex-col flex-grow">
                            <div class="mb-4">
                                <h2 class="text-2xl font-bold mb-2"><?= $content['title'] ?></h2>
                                <p class="text-gray-600"><?= $content['desc'] ?></p>
                            </div>
                            <div class="mt-auto">
                                <button
                                    class="bg-white hover:bg-blue-500 w-full text-blue-500 hover:text-white border border-blue-500 px-4 py-2 rounded transition duration-300 ease-in-out">
                                    Start Learning
                                </button>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
            <?php endforeach; ?>
        </section>

        <!-- Footer -->
        @include('layouts.footer')
    </div>

    <script>
        // Tab functionality
        document.querySelectorAll('.tab-btn').forEach(button => {
            button.addEventListener('click', () => {
                // Remove 'active' class from all tabs and buttons
                document.querySelectorAll('.tab-content').forEach(tab => tab.classList.remove('active'));
                document.querySelectorAll('.tab-btn').forEach(btn => btn.classList.remove('active'));

                // Add 'active' class to the clicked button and target tab
                const targetTab = document.getElementById(button.getAttribute('data-target'));
                targetTab.classList.add('active');
                button.classList.add('active');
            });
        });
    </script>
</body>

</html>
