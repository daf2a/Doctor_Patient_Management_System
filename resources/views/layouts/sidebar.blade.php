<aside id="cta-button-sidebar" class="fixed top-0 left-0 z-0 w-64 pt-10 mt-5 h-screen transition-transform -translate-x-full sm:translate-x-0" aria-label="Sidebar">
    <div class="h-full px-3 py-4 overflow-y-auto bg-gray-50 dark:bg-gray-800">
        <ul class="space-y-3 mt-2 mx-1 font-medium">
            <li>
                <a href="{{ route('admin.rekam.list') }}" class="flex items-center p-2 {{ request()->routeIs('admin.rekam.list') ? 'bg-blue-600 text-white' : 'hover:bg-gray-100 dark:hover:bg-gray-700 group' }} text-gray-900 rounded-lg dark:text-white group">
                <svg class="w-5 h-5 transition duration-75 dark:group-hover:text-white {{ request()->routeIs('admin.rekam.list') ? 'text-white' : 'text-gray-500 dark:text-gray-400 group-hover:text-white' }}"" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 21">
                    <path d="m1.56 6.245 8 3.924a1 1 0 0 0 .88 0l8-3.924a1 1 0 0 0 0-1.8l-8-3.925a1 1 0 0 0-.88 0l-8 3.925a1 1 0 0 0 0 1.8Z"/>
                    <path d="M18 8.376a1 1 0 0 0-1 1v.163l-7 3.434-7-3.434v-.163a1 1 0 0 0-2 0v.786a1 1 0 0 0 .56.9l8 3.925a1 1 0 0 0 .88 0l8-3.925a1 1 0 0 0 .56-.9v-.786a1 1 0 0 0-1-1Z"/>
                    <path d="M17.993 13.191a1 1 0 0 0-1 1v.163l-7 3.435-7-3.435v-.163a1 1 0 1 0-2 0v.787a1 1 0 0 0 .56.9l8 3.925a1 1 0 0 0 .88 0l8-3.925a1 1 0 0 0 .56-.9v-.787a1 1 0 0 0-1-1Z"/>
                </svg>
                <span class="ml-3">List Rekam Medis</span>
                </a>
            </li>
            <li>
                <a href="{{ route('admin.rekam.pasien') }}" class="flex items-center p-2 {{ request()->routeIs('admin.rekam.pasien') ? 'bg-blue-600 text-white' : 'hover:bg-gray-100 dark:hover:bg-gray-700 group' }} text-gray-900 rounded-lg dark:text-white group">
                <svg class="w-5 h-5 transition duration-75 dark:group-hover:text-white {{ request()->routeIs('admin.rekam.pasien') ? 'text-white' : 'text-gray-500 dark:text-gray-400 group-hover:text-white' }}"" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 21">
                    <path d="m1.56 6.245 8 3.924a1 1 0 0 0 .88 0l8-3.924a1 1 0 0 0 0-1.8l-8-3.925a1 1 0 0 0-.88 0l-8 3.925a1 1 0 0 0 0 1.8Z"/>
                    <path d="M18 8.376a1 1 0 0 0-1 1v.163l-7 3.434-7-3.434v-.163a1 1 0 0 0-2 0v.786a1 1 0 0 0 .56.9l8 3.925a1 1 0 0 0 .88 0l8-3.925a1 1 0 0 0 .56-.9v-.786a1 1 0 0 0-1-1Z"/>
                    <path d="M17.993 13.191a1 1 0 0 0-1 1v.163l-7 3.435-7-3.435v-.163a1 1 0 1 0-2 0v.787a1 1 0 0 0 .56.9l8 3.925a1 1 0 0 0 .88 0l8-3.925a1 1 0 0 0 .56-.9v-.787a1 1 0 0 0-1-1Z"/>
                </svg>
                <span class="ml-3">Rekam Medis Pasien</span>
                </a>
            </li>
            <li>
                <a href="{{ route('admin.rekam.dokter') }}" class="flex items-center p-2 {{ request()->routeIs('admin.rekam.dokter') ? 'bg-blue-600 text-white' : 'hover:bg-gray-100 dark:hover:bg-gray-700 group' }} text-gray-900 rounded-lg dark:text-white group">
                <svg class="w-5 h-5 transition duration-75 dark:group-hover:text-white {{ request()->routeIs('admin.rekam.dokter') ? 'text-white' : 'text-gray-500 dark:text-gray-400 group-hover:text-white' }}"" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 21">
                    <path d="m1.56 6.245 8 3.924a1 1 0 0 0 .88 0l8-3.924a1 1 0 0 0 0-1.8l-8-3.925a1 1 0 0 0-.88 0l-8 3.925a1 1 0 0 0 0 1.8Z"/>
                    <path d="M18 8.376a1 1 0 0 0-1 1v.163l-7 3.434-7-3.434v-.163a1 1 0 0 0-2 0v.786a1 1 0 0 0 .56.9l8 3.925a1 1 0 0 0 .88 0l8-3.925a1 1 0 0 0 .56-.9v-.786a1 1 0 0 0-1-1Z"/>
                    <path d="M17.993 13.191a1 1 0 0 0-1 1v.163l-7 3.435-7-3.435v-.163a1 1 0 1 0-2 0v.787a1 1 0 0 0 .56.9l8 3.925a1 1 0 0 0 .88 0l8-3.925a1 1 0 0 0 .56-.9v-.787a1 1 0 0 0-1-1Z"/>
                </svg>
                <span class="ml-3">Rekam Medis Dokter</span>
                </a>
            </li>
            <li>
                <a href="{{ route('admin.rekam.create') }}" class="flex items-center p-2 {{ request()->routeIs('admin.rekam.create') ? 'bg-blue-600 text-white' : 'hover:bg-gray-100 dark:hover:bg-gray-700 group' }} text-gray-900 rounded-lg dark:text-white group">
                <svg class="flex-shrink-0 w-5 h-5 transition duration-75 {{ request()->routeIs('admin.rekam.create') ? 'text-white' : 'text-gray-500 dark:text-gray-400 group-hover:text-white' }}"" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 18">
                    <path  d="M6.143 0H1.857A1.857 1.857 0 0 0 0 1.857v4.286C0 7.169.831 8 1.857 8h4.286A1.857 1.857 0 0 0 8 6.143V1.857A1.857 1.857 0 0 0 6.143 0Zm10 0h-4.286A1.857 1.857 0 0 0 10 1.857v4.286C10 7.169 10.831 8 11.857 8h4.286A1.857 1.857 0 0 0 18 6.143V1.857A1.857 1.857 0 0 0 16.143 0Zm-10 10H1.857A1.857 1.857 0 0 0 0 11.857v4.286C0 17.169.831 18 1.857 18h4.286A1.857 1.857 0 0 0 8 16.143v-4.286A1.857 1.857 0 0 0 6.143 10ZM17 13h-2v-2a1 1 0 0 0-2 0v2h-2a1 1 0 0 0 0 2h2v2a1 1 0 0 0 2 0v-2h2a1 1 0 0 0 0-2Z"/>
                </svg>
                <span class="flex-1 ml-3 whitespace-nowrap">Tambah Rekam</span>
                <!-- <span class="inline-flex items-center justify-center px-2 ml-3 text-sm font-medium text-gray-800 bg-gray-100 rounded-full dark:bg-gray-700 dark:text-gray-300">Pro</span> -->
                </a>

            </li>
            <li>
                <a class="flex items-center p-2 {{ request()->routeIs('admin.rekam.edit') ? 'bg-blue-600 text-white block' : 'hover:bg-gray-100 dark:hover:bg-gray-700 group hidden' }} text-gray-900 rounded-lg dark:text-white group">
                <svg class="flex-shrink-0 w-5 h-5 transition duration-75 {{ request()->routeIs('admin.rekam.edit') ? 'text-white' : 'text-gray-500 dark:text-gray-400 group-hover:text-white' }}"" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 18">
                    <path d="M12.687 14.408a3.01 3.01 0 0 1-1.533.821l-3.566.713a3 3 0 0 1-3.53-3.53l.713-3.566a3.01 3.01 0 0 1 .821-1.533L10.905 2H2.167A2.169 2.169 0 0 0 0 4.167v11.666A2.169 2.169 0 0 0 2.167 18h11.666A2.169 2.169 0 0 0 16 15.833V11.1l-3.313 3.308Zm5.53-9.065.546-.546a2.518 2.518 0 0 0 0-3.56 2.576 2.576 0 0 0-3.559 0l-.547.547 3.56 3.56Z"/>
                    <path d="M13.243 3.2 7.359 9.081a.5.5 0 0 0-.136.256L6.51 12.9a.5.5 0 0 0 .59.59l3.566-.713a.5.5 0 0 0 .255-.136L16.8 6.757 13.243 3.2Z"/>
                </svg>
                <span class="flex-1 ml-3 whitespace-nowrap">Edit Rekam</span>
                <!-- <span class="inline-flex items-center justify-center px-2 ml-3 text-sm font-medium text-gray-800 bg-gray-100 rounded-full dark:bg-gray-700 dark:text-gray-300">Pro</span> -->
                </a>

            </li>
        </ul>
    </div>
</aside>