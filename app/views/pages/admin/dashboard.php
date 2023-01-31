<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Link to CSS file -->
    <link href="<?= URLROOT; ?>/css/dashboard.css" rel="stylesheet">
    <!-- link tailwind css -->
    <link href="<?= URLROOT; ?>/dist/output.css" rel="stylesheet">
    <!-- link to font awesome -->
    <script src="https://kit.fontawesome.com/93e0a23dda.js" crossorigin="anonymous"></script>
    <!-- link material icon -->
    <link href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp" rel="stylesheet">
    <title>Dashboard</title>
</head>

<body>
    <div x-data="setup()" :class="{ 'dark': isDark }">
        <div class="min-h-screen flex flex-col flex-auto flex-shrink-0 antialiased bg-white dark:bg-gray-700 text-black dark:text-white">

            <!-- Header -->
            <div class="fixed w-full flex items-center justify-between h-14 text-white z-10">
                <div class="flex items-center justify-start md:justify-center pl-3 w-14 md:w-64 h-14 bg-blue-100 dark:bg-gray-800 border-none">
                    <img class="w-7 h-7 md:w-10 md:h-10 mr-2 rounded-md overflow-hidden" src="https://therminic2018.eu/wp-content/uploads/2018/07/dummy-avatar.jpg" />
                    <span class="hidden md:block text-black dark:text-white">ADMIN</span>
                </div>
                <div class="flex justify-between items-center h-14 bg-blue-100 dark:bg-gray-800 header-right">
                    <div class="bg-white rounded flex items-center w-full max-w-xl mr-4 p-2 shadow-sm border border-gray-200">
                        <button class="outline-none focus:outline-none">
                            <svg class="w-5 text-gray-600 h-5 cursor-pointer" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" stroke="currentColor" viewBox="0 0 24 24">
                                <path d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                            </svg>
                        </button>
                        <input type="search" name="" id="" placeholder="Search" class="w-full pl-3 text-sm text-black outline-none focus:outline-none bg-transparent" />
                    </div>
                    <ul class="flex items-center">
                        <li>
                            <button aria-hidden="true" @click="toggleTheme" class="group p-2 transition-colors duration-200 rounded-full shadow-md bg-blue-200 hover:bg-blue-200 dark:bg-gray-50 dark:hover:bg-gray-200 text-gray-900 focus:outline-none">
                                <svg x-show="isDark" width="24" height="24" class="fill-current text-gray-700 group-hover:text-gray-500 group-focus:text-gray-700 dark:text-gray-700 dark:group-hover:text-gray-500 dark:group-focus:text-gray-700" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z" />
                                </svg>
                                <svg x-show="!isDark" width="24" height="24" class="fill-current text-gray-700 group-hover:text-gray-500 group-focus:text-gray-700 dark:text-gray-700 dark:group-hover:text-gray-500 dark:group-focus:text-gray-700" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z" />
                                </svg>
                            </button>
                        </li>
                        <li>
                            <div class="block w-px h-6 mx-3 bg-gray-400 dark:bg-gray-700"></div>
                        </li>
                        <li>
                            <a href="#" class="flex items-center text-black mr-4 hover:text-blue-100 dark:text-white">
                                <span class="inline-flex mr-1">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path>
                                    </svg>
                                </span>
                                Logout
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- ./Header -->

            <!-- Sidebar -->
            <div class="fixed flex flex-col top-14 left-0 w-14 hover:w-64 md:w-64 bg-blue-500 dark:bg-gray-900 h-full text-white transition-all duration-300 border-none z-10 sidebar">
                <div class="overflow-y-auto overflow-x-hidden flex flex-col justify-between flex-grow">
                    <ul class="flex flex-col py-4 space-y-1">
                        <li class="px-5 hidden md:block">
                            <div class="flex flex-row items-center h-8">
                                <div class="text-sm font-light tracking-wide text-gray-400 uppercase">Main</div>
                            </div>
                        </li>
                        <li>
                            <a href="#" class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-blue-100 dark:hover:bg-gray-600 text-white-600 hover:text-white-800 border-l-4 border-transparent hover:border-blue-500 dark:hover:border-gray-800 pr-6">
                                <span class="inline-flex justify-center items-center ml-4">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                                    </svg>
                                </span>
                                <span class="ml-2 text-sm tracking-wide truncate">Dashboard</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-blue-100 dark:hover:bg-gray-600 text-white-600 hover:text-white-800 border-l-4 border-transparent hover:border-blue-500 dark:hover:border-gray-800 pr-6">
                                <span class="inline-flex justify-center items-center ml-4">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4"></path>
                                    </svg>
                                </span>
                                <span class="ml-2 text-sm tracking-wide truncate">Client</span>
                                <span class="hidden md:block px-2 py-0.5 ml-auto text-xs font-medium tracking-wide text-blue-500 bg-indigo-50 rounded-full">New</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-blue-100 dark:hover:bg-gray-600 text-white-600 hover:text-white-800 border-l-4 border-transparent hover:border-blue-500 dark:hover:border-gray-800 pr-6">
                                <span class="inline-flex justify-center items-center ml-4">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z"></path>
                                    </svg>
                                </span>
                                <span class="ml-2 text-sm tracking-wide truncate">Categories</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-blue-100 dark:hover:bg-gray-600 text-white-600 hover:text-white-800 border-l-4 border-transparent hover:border-blue-500 dark:hover:border-gray-800 pr-6">
                                <span class="inline-flex justify-center items-center ml-4">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"></path>
                                    </svg>
                                </span>
                                <span class="ml-2 text-sm tracking-wide truncate">Produit</span>
                            </a>
                        </li>
                        <li class="px-5 hidden md:block">
                            <div class="flex flex-row items-center mt-5 h-8">
                                <div class="text-sm font-light tracking-wide text-gray-400 uppercase">Settings</div>
                            </div>
                        </li>
                        <li>
                            <a href="#" class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-blue-100 dark:hover:bg-gray-600 text-white-600 hover:text-white-800 border-l-4 border-transparent hover:border-blue-500 dark:hover:border-gray-800 pr-6">
                                <span class="inline-flex justify-center items-center ml-4">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                                    </svg>
                                </span>
                                <span class="ml-2 text-sm tracking-wide truncate">Profile</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-blue-100 dark:hover:bg-gray-600 text-white-600 hover:text-white-800 border-l-4 border-transparent hover:border-blue-500 dark:hover:border-gray-800 pr-6">
                                <span class="inline-flex justify-center items-center ml-4">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                    </svg>
                                </span>
                                <span class="ml-2 text-sm tracking-wide truncate">Settings</span>
                            </a>
                        </li>
                    </ul>
                    <p class="mb-14 px-5 py-3 hidden md:block text-center text-xs">Copyright @Achchcaimae2023</p>
                </div>
            </div>
            <!-- ./Sidebar -->

            <div class="h-full ml-14 mt-14 mb-10 md:ml-64">

                <!-- Statistics Cards -->
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 p-4 gap-4">
                    <div class="bg-blue-500 dark:bg-gray-800 shadow-lg rounded-md flex items-center justify-between p-3 border-b-4 border-blue-600 dark:border-gray-600 text-white font-medium group">
                        <div class="flex justify-center items-center w-14 h-14 bg-white rounded-full transition-all duration-300 transform group-hover:rotate-12">
                            <svg width="30" height="30" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="stroke-current text-blue-800 dark:text-gray-800 transform transition-transform duration-500 ease-in-out">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                            </svg>
                        </div>
                        <div class="text-right">
                            <p class="text-2xl">1,257</p>
                            <p>Visitors</p>
                        </div>
                    </div>
                    <div class="bg-blue-500 dark:bg-gray-800 shadow-lg rounded-md flex items-center justify-between p-3 border-b-4 border-blue-600 dark:border-gray-600 text-white font-medium group">
                        <div class="flex justify-center items-center w-14 h-14 bg-white rounded-full transition-all duration-300 transform group-hover:rotate-12">
                            <svg width="30" height="30" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="stroke-current text-blue-800 dark:text-gray-800 transform transition-transform duration-500 ease-in-out">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"></path>
                            </svg>
                        </div>
                        <div class="text-right">
                            <p class="text-2xl">557</p>
                            <p>Orders</p>
                        </div>
                    </div>
                    <div class="bg-blue-500 dark:bg-gray-800 shadow-lg rounded-md flex items-center justify-between p-3 border-b-4 border-blue-600 dark:border-gray-600 text-white font-medium group">
                        <div class="flex justify-center items-center w-14 h-14 bg-white rounded-full transition-all duration-300 transform group-hover:rotate-12">
                            <svg width="30" height="30" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="stroke-current text-blue-800 dark:text-gray-800 transform transition-transform duration-500 ease-in-out">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path>
                            </svg>
                        </div>
                        <div class="text-right">
                            <p class="text-2xl">$11,257</p>
                            <p>Sales</p>
                        </div>
                    </div>
                    <div class="bg-blue-500 dark:bg-gray-800 shadow-lg rounded-md flex items-center justify-between p-3 border-b-4 border-blue-600 dark:border-gray-600 text-white font-medium group">
                        <div class="flex justify-center items-center w-14 h-14 bg-white rounded-full transition-all duration-300 transform group-hover:rotate-12">
                            <svg width="30" height="30" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="stroke-current text-blue-800 dark:text-gray-800 transform transition-transform duration-500 ease-in-out">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                        </div>
                        <div class="text-right">
                            <p class="text-2xl">$75,257</p>
                            <p>Balances</p>
                        </div>
                    </div>
                </div>
                <!-- ./Statistics Cards -->

                <div class="grid grid-cols-1 lg:grid-cols-2 p-4 gap-4">

                </div>

                <!-- Client Table -->
                <div class="mt-4 mx-4">
                    <div class="w-full overflow-hidden rounded-lg shadow-xs">
                        <div class="w-full overflow-x-auto">
                            <table class="w-full">
                                <thead>
                                    <tr class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                                        <th class="px-4 py-3">Client</th>
                                        <th class="px-4 py-3">Amount</th>
                                        <th class="px-4 py-3">Status</th>
                                        <th class="px-4 py-3">Date</th>
                                    </tr>
                                </thead>
                                <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
                                    <tr class="bg-gray-50 dark:bg-gray-800 hover:bg-gray-100 dark:hover:bg-gray-900 text-gray-700 dark:text-gray-400">
                                        <td class="px-4 py-3">
                                            <div class="flex items-center text-sm">
                                                <div class="relative hidden w-8 h-8 mr-3 rounded-full md:block">
                                                    <img class="object-cover w-full h-full rounded-full" src="https://images.unsplash.com/flagged/photo-1570612861542-284f4c12e75f?ixlib=rb-1.2.1&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=200&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjE3Nzg0fQ" alt="" loading="lazy" />
                                                    <div class="absolute inset-0 rounded-full shadow-inner" aria-hidden="true"></div>
                                                </div>
                                                <div>
                                                    <p class="font-semibold">Hans Burger</p>
                                                    <p class="text-xs text-gray-600 dark:text-gray-400">10x Developer</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="px-4 py-3 text-sm">$855.85</td>
                                        <td class="px-4 py-3 text-xs">
                                            <span class="px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-full dark:bg-green-700 dark:text-green-100"> Approved </span>
                                        </td>
                                        <td class="px-4 py-3 text-sm">15-01-2021</td>
                                    </tr>
                                    <tr class="bg-gray-50 dark:bg-gray-800 hover:bg-gray-100 dark:hover:bg-gray-900 text-gray-700 dark:text-gray-400">
                                        <td class="px-4 py-3">
                                            <div class="flex items-center text-sm">
                                                <div class="relative hidden w-8 h-8 mr-3 rounded-full md:block">
                                                    <img class="object-cover w-full h-full rounded-full" src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=200&amp;facepad=3&amp;fit=facearea&amp;s=707b9c33066bf8808c934c8ab394dff6" alt="" loading="lazy" />
                                                    <div class="absolute inset-0 rounded-full shadow-inner" aria-hidden="true"></div>
                                                </div>
                                                <div>
                                                    <p class="font-semibold">Jolina Angelie</p>
                                                    <p class="text-xs text-gray-600 dark:text-gray-400">Unemployed</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="px-4 py-3 text-sm">$369.75</td>
                                        <td class="px-4 py-3 text-xs">
                                            <span class="px-2 py-1 font-semibold leading-tight text-yellow-700 bg-yellow-100 rounded-full"> Pending </span>
                                        </td>
                                        <td class="px-4 py-3 text-sm">23-03-2021</td>
                                    </tr>
                                    <tr class="bg-gray-50 dark:bg-gray-800 hover:bg-gray-100 dark:hover:bg-gray-900 text-gray-700 dark:text-gray-400">
                                        <td class="px-4 py-3">
                                            <div class="flex items-center text-sm">
                                                <div class="relative hidden w-8 h-8 mr-3 rounded-full md:block">
                                                    <img class="object-cover w-full h-full rounded-full" src="https://images.unsplash.com/photo-1502720705749-871143f0e671?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=200&amp;fit=max&amp;s=b8377ca9f985d80264279f277f3a67f5" alt="" loading="lazy" />
                                                    <div class="absolute inset-0 rounded-full shadow-inner" aria-hidden="true"></div>
                                                </div>
                                                <div>
                                                    <p class="font-semibold">Dave Li</p>
                                                    <p class="text-xs text-gray-600 dark:text-gray-400">Influencer</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="px-4 py-3 text-sm">$775.45</td>
                                        <td class="px-4 py-3 text-xs">
                                            <span class="px-2 py-1 font-semibold leading-tight text-gray-700 bg-gray-100 rounded-full dark:text-gray-100 dark:bg-gray-700"> Expired </span>
                                        </td>
                                        <td class="px-4 py-3 text-sm">09-02-2021</td>
                                    </tr>
                                    <tr class="bg-gray-50 dark:bg-gray-800 hover:bg-gray-100 dark:hover:bg-gray-900 text-gray-700 dark:text-gray-400">
                                        <td class="px-4 py-3">
                                            <div class="flex items-center text-sm">
                                                <div class="relative hidden w-8 h-8 mr-3 rounded-full md:block">
                                                    <img class="object-cover w-full h-full rounded-full" src="https://images.unsplash.com/photo-1551006917-3b4c078c47c9?ixlib=rb-1.2.1&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=200&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjE3Nzg0fQ" alt="" loading="lazy" />
                                                    <div class="absolute inset-0 rounded-full shadow-inner" aria-hidden="true"></div>
                                                </div>
                                                <div>
                                                    <p class="font-semibold">Rulia Joberts</p>
                                                    <p class="text-xs text-gray-600 dark:text-gray-400">Actress</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="px-4 py-3 text-sm">$1276.75</td>
                                        <td class="px-4 py-3 text-xs">
                                            <span class="px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-full dark:bg-green-700 dark:text-green-100"> Approved </span>
                                        </td>
                                        <td class="px-4 py-3 text-sm">17-04-2021</td>
                                    </tr>
                                    <tr class="bg-gray-50 dark:bg-gray-800 hover:bg-gray-100 dark:hover:bg-gray-900 text-gray-700 dark:text-gray-400">
                                        <td class="px-4 py-3">
                                            <div class="flex items-center text-sm">
                                                <div class="relative hidden w-8 h-8 mr-3 rounded-full md:block">
                                                    <img class="object-cover w-full h-full rounded-full" src="https://images.unsplash.com/photo-1566411520896-01e7ca4726af?ixlib=rb-1.2.1&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=200&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjE3Nzg0fQ" alt="" loading="lazy" />
                                                    <div class="absolute inset-0 rounded-full shadow-inner" aria-hidden="true"></div>
                                                </div>
                                                <div>
                                                    <p class="font-semibold">Hitney Wouston</p>
                                                    <p class="text-xs text-gray-600 dark:text-gray-400">Singer</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="px-4 py-3 text-sm">$863.45</td>
                                        <td class="px-4 py-3 text-xs">
                                            <span class="px-2 py-1 font-semibold leading-tight text-red-700 bg-red-100 rounded-full dark:text-red-100 dark:bg-red-700"> Denied </span>
                                        </td>
                                        <td class="px-4 py-3 text-sm">11-01-2021</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                       
                       
                    </div>
                </div>
                <!-- commande table -->
                <div class="overflow-x-auto relative shadow-md sm:rounded-lg m-4">
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400 ">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="py-3 px-6">
                           Date creation 
                        </th>
                        <th scope="col" class="py-3 px-6">
                            client
                        </th>
                        <th scope="col" class="py-3 px-6">
                            Category
                        </th>
                        <th scope="col" class="py-3 px-6">
                            Price
                        </th>
                        <th scope="col" class="py-3 px-6">
                            total price
                        </th>
                        <th scope="col" class="py-3 px-6">
                            Action
                        </th>
                        <th scope="col" class="py-3 px-6">
                            Action
                        </th>
                    </tr>
                </thead>
                
                    <tbody>
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                            <td class="py-4 px-6">
                            date de creation
                            </td>
                            <td scope="row" class="py-4 px-6 font-medium text-gray-900 wditespace-nowrap dark:text-white">
                               client
                            </td>

                            <td class="py-4 px-6">
                                quantite
                            </td>

                            <td class="py-4 px-6">
                              prix uniti
                            </td>
                            <td class="py-4 px-6">
                                total
                            </td>
                            <td class="py-4 px-6">
                                <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Accept</a>
                            </td>
                            <td class="py-4 px-6">
                                <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Refuse</a>
                            </td>
                        </tr>

                    </tbody>
                    
            </table>
            <!-- <button class="add-btn  "><a href="Ajouter.php">ajouter</a></button> -->
            
        </div>

        </tbody>
    
    

    </table>
    </div>
    <!-- end commande table -->
                <!-- ./Client Table -->

                <!-- Contact Form -->
                <!-- <div class="mt-8 mx-4">
                    <div class="grid grid-cols-1 md:grid-cols-2">
                        <div class="p-6 mr-2 bg-gray-100 dark:bg-gray-800 sm:rounded-lg">
                            <h1 class="text-4xl sm:text-5xl text-gray-800 dark:text-white font-extrabold tracking-tight">Get in touch</h1>
                            <p class="text-normal text-lg sm:text-2xl font-medium text-gray-600 dark:text-gray-400 mt-2">Fill in the form to submit any query</p>

                            <div class="flex items-center mt-8 text-gray-600 dark:text-gray-400">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                </svg>
                                <div class="ml-4 text-md tracking-wide font-semibold w-40">Dhaka, Street, State, Postal Code</div>
                            </div>

                            <div class="flex items-center mt-4 text-gray-600 dark:text-gray-400">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                                </svg>
                                <div class="ml-4 text-md tracking-wide font-semibold w-40">+880 1234567890</div>
                            </div>

                            <div class="flex items-center mt-4 text-gray-600 dark:text-gray-400">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                </svg>
                                <div class="ml-4 text-md tracking-wide font-semibold w-40">info@demo.com</div>
                            </div>
                        </div>
                        <form class="p-6 flex flex-col justify-center">
                            <div class="flex flex-col">
                                <label for="name" class="hidden">Full Name</label>
                                <input type="name" name="name" id="name" placeholder="Full Name" class="w-100 mt-2 py-3 px-3 rounded-lg bg-white dark:bg-gray-800 border border-gray-400 dark:border-gray-700 text-gray-800 dark:text-gray-50 font-semibold focus:border-blue-500 focus:outline-none" />
                            </div>

                            <div class="flex flex-col mt-2">
                                <label for="email" class="hidden">Email</label>
                                <input type="email" name="email" id="email" placeholder="Email" class="w-100 mt-2 py-3 px-3 rounded-lg bg-white dark:bg-gray-800 border border-gray-400 dark:border-gray-700 text-gray-800 dark:text-gray-50 font-semibold focus:border-blue-500 focus:outline-none" />
                            </div>

                            <div class="flex flex-col mt-2">
                                <label for="tel" class="hidden">Number</label>
                                <input type="tel" name="tel" id="tel" placeholder="Telephone Number" class="w-100 mt-2 py-3 px-3 rounded-lg bg-white dark:bg-gray-800 border border-gray-400 dark:border-gray-700 text-gray-800 dark:text-gray-50 font-semibold focus:border-blue-500 focus:outline-none" />
                            </div>

                            <button type="submit" class="md:w-32 bg-blue-600 dark:bg-gray-100 text-white dark:text-gray-800 font-bold py-3 px-6 rounded-lg mt-4 hover:bg-blue-500 dark:hover:bg-gray-200 transition ease-in-out duration-300">Submit</button>
                        </form>
                    </div>
                </div> -->
                <!-- ./Contact Form -->

                <!-- External resources -->
                <!-- <div class="mt-8 mx-4">
                    <div class="p-4 bg-blue-50 dark:bg-gray-800 dark:text-gray-50 border border-blue-500 dark:border-gray-500 rounded-lg shadow-md">
                        <h4 class="text-lg font-semibold">Have taken ideas & reused components from the following resources:</h4>
                        <ul>
                            <li class="mt-3">
                                <a class="flex items-center text-blue-700 dark:text-gray-100" href="https://tailwindcomponents.com/component/sidebar-navigation-1" target="_blank">
                                    <svg width="20" height="20" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="transform transition-transform duration-500 ease-in-out">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 9l3 3m0 0l-3 3m3-3H8m13 0a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                    <span class="inline-flex pl-2">Sidebar Navigation</span>
                                </a>
                            </li>
                            <li class="mt-2">
                                <a class="flex items-center text-blue-700 dark:text-gray-100" href="https://tailwindcomponents.com/component/contact-form-1" target="_blank">
                                    <svg width="20" height="20" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="transform transition-transform duration-500 ease-in-out">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 9l3 3m0 0l-3 3m3-3H8m13 0a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                    <span class="inline-flex pl-2">Contact Form</span>
                                </a>
                            </li>
                            <li class="mt-2">
                                <a class="flex items-center text-blue-700 dark:text-gray-100" href="https://tailwindcomponents.com/component/trello-panel-clone" target="_blank">
                                    <svg width="20" height="20" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="transform transition-transform duration-500 ease-in-out">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 9l3 3m0 0l-3 3m3-3H8m13 0a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                    <span class="inline-flex pl-2">Section: Task Summaries</span>
                                </a>
                            </li>
                            <li class="mt-2">
                                <a class="flex items-center text-blue-700 dark:text-gray-100" href="https://windmill-dashboard.vercel.app/" target="_blank">
                                    <svg width="20" height="20" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="transform transition-transform duration-500 ease-in-out">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 9l3 3m0 0l-3 3m3-3H8m13 0a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                    <span class="inline-flex pl-2">Section: Client Table</span>
                                </a>
                            </li>
                            <li class="mt-2">
                                <a class="flex items-center text-blue-700 dark:text-gray-100" href="https://demos.creative-tim.com/notus-js/pages/admin/dashboard.html" target="_blank">
                                    <svg width="20" height="20" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="transform transition-transform duration-500 ease-in-out">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 9l3 3m0 0l-3 3m3-3H8m13 0a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                    <span class="inline-flex pl-2">Section: Social Traffic</span>
                                </a>
                            </li>
                            <li class="mt-2">
                                <a class="flex items-center text-blue-700 dark:text-gray-100" href="https://mosaic.cruip.com" target="_blank">
                                    <svg width="20" height="20" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="transform transition-transform duration-500 ease-in-out">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 9l3 3m0 0l-3 3m3-3H8m13 0a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                    <span class="inline-flex pl-2">Section: Recent Activities</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div> -->
                <!-- ./External resources -->
            </div>
        </div>
    </div>
    <!-- categories section -->
<section class="hidden">
<span class="ml-2 text-gray-500 font-bold tracking-wide truncate ">Categories</span>
                        <div class="flex items-center justify-center ">
                            <div class="col-span-12">
                                <div class="overflow-auto lg:overflow-visible ">
                                    <table class="table text-gray-400 border-separate space-y-6 text-sm">
                                        <thead class="bg-gray-800 text-gray-500">
                                            <tr>
                                                <th class="p-3">Categories</th>
                                                <th class="p-3 text-left">Category</th>
                                                <th class="p-3 text-left">Price</th>
                                                <th class="p-3 text-left">Status</th>
                                                <th class="p-3 text-left">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="bg-gray-800">
                                                <td class="p-3">
                                                    <div class="flex align-items-center">
                                                        <img class="rounded-full h-12 w-12  object-cover" src="https://images.unsplash.com/photo-1613588718956-c2e80305bf61?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=634&q=80" alt="unsplash image">
                                                        <div class="ml-3">
                                                            <div class="">Appple</div>
                                                            <div class="text-gray-500">mail@rgmail.com</div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="p-3">
                                                    Technology
                                                </td>
                                                <td class="p-3 font-bold">
                                                    200.00$
                                                </td>
                                                <td class="p-3">
                                                    <span class="bg-green-400 text-gray-50 rounded-md px-2">available</span>
                                                </td>
                                                <td class="p-3 ">
                                                    <a href="#" class="text-gray-400 hover:text-gray-100 mr-2">
                                                        <i class="material-icons-outlined text-base">visibility</i>
                                                    </a>
                                                    <a href="#" class="text-gray-400 hover:text-gray-100  mx-2">
                                                        <i class="material-icons-outlined text-base">edit</i>
                                                    </a>
                                                    <a href="#" class="text-gray-400 hover:text-gray-100  ml-2">
                                                        <i class="material-icons-round text-base">delete_outline</i>
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr class="bg-gray-800">
                                                <td class="p-3">
                                                    <div class="flex align-items-center">
                                                        <img class="rounded-full h-12 w-12   object-cover" src="https://images.unsplash.com/photo-1423784346385-c1d4dac9893a?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1050&q=80" alt="unsplash image">
                                                        <div class="ml-3">
                                                            <div class="">Realme</div>
                                                            <div class="text-gray-500">mail@rgmail.com</div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="p-3">
                                                    Technology
                                                </td>
                                                <td class="p-3 font-bold">
                                                    200.00$
                                                </td>
                                                <td class="p-3">
                                                    <span class="bg-red-400 text-gray-50 rounded-md px-2">no stock</span>
                                                </td>
                                                <td class="p-3">
                                                    <a href="#" class="text-gray-400 hover:text-gray-100  mr-2">
                                                        <i class="material-icons-outlined text-base">visibility</i>
                                                    </a>
                                                    <a href="#" class="text-gray-400 hover:text-gray-100 mx-2">
                                                        <i class="material-icons-outlined text-base">edit</i>
                                                    </a>
                                                    <a href="#" class="text-gray-400 hover:text-gray-100 ml-2">
                                                        <i class="material-icons-round text-base">delete_outline</i>
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr class="bg-gray-800">
                                                <td class="p-3">
                                                    <div class="flex align-items-center">
                                                        <img class="rounded-full h-12 w-12   object-cover" src="https://images.unsplash.com/photo-1600856209923-34372e319a5d?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2135&q=80" alt="unsplash image">
                                                        <div class="ml-3">
                                                            <div class="">Samsung</div>
                                                            <div class="text-gray-500">mail@rgmail.com</div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="p-3">
                                                    Technology
                                                </td>
                                                <td class="p-3 font-bold">
                                                    200.00$
                                                </td>
                                                <td class="p-3">
                                                    <span class="bg-yellow-400 text-gray-50  rounded-md px-2">start sale</span>
                                                </td>
                                                <td class="p-3">
                                                    <a href="#" class="text-gray-400 hover:text-gray-100 mr-2">
                                                        <i class="material-icons-outlined text-base">visibility</i>
                                                    </a>
                                                    <a href="#" class="text-gray-400 hover:text-gray-100 mx-2">
                                                        <i class="material-icons-outlined text-base">edit</i>
                                                    </a>
                                                    <a href="#" class="text-gray-400 hover:text-gray-100 ml-2">
                                                        <i class="material-icons-round text-base">delete_outline</i>
                                                    </a>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
</section>
<!-- end categories section -->
    <!-- products section -->
<section class="hidden">
<span class="ml-2 text-gray-500 font-bold tracking-wide truncate ">Products</span>
                        <div class="flex items-center justify-center ">
                            <div class="col-span-12">
                                <div class="overflow-auto lg:overflow-visible ">
                                    <table class="table text-gray-400 border-separate space-y-6 text-sm">
                                        <thead class="bg-gray-800 text-gray-500">
                                            <tr>
                                                <th class="p-3">Brand</th>
                                                <th class="p-3 text-left">Category</th>
                                                <th class="p-3 text-left">Price</th>
                                                <th class="p-3 text-left">Status</th>
                                                <th class="p-3 text-left">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="bg-gray-800">
                                                <td class="p-3">
                                                    <div class="flex align-items-center">
                                                        <img class="rounded-full h-12 w-12  object-cover" src="https://images.unsplash.com/photo-1613588718956-c2e80305bf61?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=634&q=80" alt="unsplash image">
                                                        <div class="ml-3">
                                                            <div class="">Appple</div>
                                                            <div class="text-gray-500">mail@rgmail.com</div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="p-3">
                                                    Technology
                                                </td>
                                                <td class="p-3 font-bold">
                                                    200.00$
                                                </td>
                                                <td class="p-3">
                                                    <span class="bg-green-400 text-gray-50 rounded-md px-2">available</span>
                                                </td>
                                                <td class="p-3 ">
                                                    <a href="#" class="text-gray-400 hover:text-gray-100 mr-2">
                                                        <i class="material-icons-outlined text-base">visibility</i>
                                                    </a>
                                                    <a href="#" class="text-gray-400 hover:text-gray-100  mx-2">
                                                        <i class="material-icons-outlined text-base">edit</i>
                                                    </a>
                                                    <a href="#" class="text-gray-400 hover:text-gray-100  ml-2">
                                                        <i class="material-icons-round text-base">delete_outline</i>
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr class="bg-gray-800">
                                                <td class="p-3">
                                                    <div class="flex align-items-center">
                                                        <img class="rounded-full h-12 w-12   object-cover" src="https://images.unsplash.com/photo-1423784346385-c1d4dac9893a?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1050&q=80" alt="unsplash image">
                                                        <div class="ml-3">
                                                            <div class="">Realme</div>
                                                            <div class="text-gray-500">mail@rgmail.com</div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="p-3">
                                                    Technology
                                                </td>
                                                <td class="p-3 font-bold">
                                                    200.00$
                                                </td>
                                                <td class="p-3">
                                                    <span class="bg-red-400 text-gray-50 rounded-md px-2">no stock</span>
                                                </td>
                                                <td class="p-3">
                                                    <a href="#" class="text-gray-400 hover:text-gray-100  mr-2">
                                                        <i class="material-icons-outlined text-base">visibility</i>
                                                    </a>
                                                    <a href="#" class="text-gray-400 hover:text-gray-100 mx-2">
                                                        <i class="material-icons-outlined text-base">edit</i>
                                                    </a>
                                                    <a href="#" class="text-gray-400 hover:text-gray-100 ml-2">
                                                        <i class="material-icons-round text-base">delete_outline</i>
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr class="bg-gray-800">
                                                <td class="p-3">
                                                    <div class="flex align-items-center">
                                                        <img class="rounded-full h-12 w-12   object-cover" src="https://images.unsplash.com/photo-1600856209923-34372e319a5d?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2135&q=80" alt="unsplash image">
                                                        <div class="ml-3">
                                                            <div class="">Samsung</div>
                                                            <div class="text-gray-500">mail@rgmail.com</div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="p-3">
                                                    Technology
                                                </td>
                                                <td class="p-3 font-bold">
                                                    200.00$
                                                </td>
                                                <td class="p-3">
                                                    <span class="bg-yellow-400 text-gray-50  rounded-md px-2">start sale</span>
                                                </td>
                                                <td class="p-3">
                                                    <a href="#" class="text-gray-400 hover:text-gray-100 mr-2">
                                                        <i class="material-icons-outlined text-base">visibility</i>
                                                    </a>
                                                    <a href="#" class="text-gray-400 hover:text-gray-100 mx-2">
                                                        <i class="material-icons-outlined text-base">edit</i>
                                                    </a>
                                                    <a href="#" class="text-gray-400 hover:text-gray-100 ml-2">
                                                        <i class="material-icons-round text-base">delete_outline</i>
                                                    </a>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
</section>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.0/dist/alpine.min.js" defer></script>
    <script>
        const setup = () => {
            const getTheme = () => {
                if (window.localStorage.getItem('dark')) {
                    return JSON.parse(window.localStorage.getItem('dark'))
                }
                return !!window.matchMedia && window.matchMedia('(prefers-color-scheme: dark)').matches
            }

            const setTheme = (value) => {
                window.localStorage.setItem('dark', value)
            }

            return {
                loading: true,
                isDark: getTheme(),
                toggleTheme() {
                    this.isDark = !this.isDark
                    setTheme(this.isDark)
                },
            }
        }
    </script>
</body>

</html>