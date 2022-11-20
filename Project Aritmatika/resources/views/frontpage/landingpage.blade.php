@vite(['resources/css/app.css', 'resources/js/app.js'])
<div class="dark:bg-gray-800 py-12 " >
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 bg" >
        <div class="bg-gray overflow-hidden shadow-sm sm:rounded-lg ">
            <div class="p-6 bg-gray border-b border-gray-200 dark:bg-gray-800">
                <main class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                    <div class="flex items-baseline justify-between border-b border-gray200 pt-2 pb-6">
                        <h1 class="text-4xl font-semibold tracking-tight text-white900 dark:text-white">Destinasi Wisata Banjar Tegeha</h1>
                        <div class="flex items-center">
                            <div date-rangepicker class="flex items-center">
                                <div class="relative">
                                    <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                                        <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:textgray400"
                                            fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                            <path fillrule="evenodd"
                                                d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z"
                                                cliprule="evenodd"></path>
                                        </svg>
                                    </div>

                                    <input name="start" type="text"
                                        class="bg-gray-50 border bordergray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block wfull pl-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:textwhite dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                        placeholder="Select date start">
                                </div>
                                <span class="mx-4 text-gray-500">to</span>
                                <div class="relative">
                                    <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                                        <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:textgray400"
                                            fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                            <path fillrule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" cliprule="evenodd"></path>
                                        </svg>
                                    </div>
                                    <input name="end" type="text"
                                        class="bg-gray-50 border border-gray300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block wfull pl-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:textwhite dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                        placeholder="Select date end">
                                </div>
                            </div>
                            <button type="button"
                                class="inline-block mx-4 px-6 py-2 border-2 border-blue-600 text-blue-600 font-medium text-xs leading-tight uppercase rounded-rmd hover:bg-indigo-100 hover:bg-opacity-5 focus:outline-none focus:ring-0 transition duration150 ease-in-out">Check</button>
                        </div>
                    </div>
                    <section>

                        <div class="md:flex font-sans pt-8">
                            <div class="md:shrink-0">
                                <img src="https://i.pinimg.com/564x/67/8f/2d/678f2da3979b44afa58a85eb39f69f3d.jpg"
                                    alt="" class="w-full md:h-full md:w-56 inset-0 wfull h-full object-cover rounded-lg"
                                    loading="lazy" />
                            </div>
                            <form class="p-6">
                                <div class="flex flex-wrap">
                                    <h1 class="flex-auto font-medium text-slate-900 dark:text-white">
                                        Brahma Vihara Arama Buddist Temple
                                    </h1>
                                    <div class="w-full flex-none mt-2 order-1 text-3xl fontbold text-violet-600">
                                        Rp. 100.000
                                    </div>
                                    <div class="text-sm font-medium text-slate-400 ">
                                        Available
                                    </div>
                                </div>
                                <div class="flex items-baseline mt-4 mb-6 pb-6 border-b borders-late-200 dark:text-white">
                                    First, one of the most Beautiful an yet relaxing places from my village. Its known as a place to find peace and getaway from any stressing activity that most of us have, it got beautiful nature, buddist  statue, and even got a candi on the core of the temple. You can travel here with your own or your family. And there is a meditation that buddist do on te sunday. If you come accross my village, dont forget to come
                                </div>
                                <div class="flex space-x-4 mb-5 text-sm font-medium">
                                    <div class="flex-auto flex space-x-4">
                                        <button class="h-10 px-6 font-semibold rounded-full bg-violet-600 text-white hover:bg-violet-800"
                                            type="submit">
                                            Book Now
                                        </button>
                                        <button data-bs-toggle="modal" data-bstarget="#exampleModalLg"
                                            class="h-10 px-6 font-semibold rounded-full border border-slate200 text-slate-900 dark:text-white hover:bg-violet-800 hover:border-none hover:text-white"
                                            type="button">
                                            Check Availability
                                        </button>
                                    </div>
                                    <button
                                        class="flex-none flex items-center justify-center w-9 h9 rounded-full text-violet-600 bg-violet-50"
                                        type="button" aria-label="Like">
                                        <svg width="20" height="20" fill="currentColor" ariahidden="true">
                                            <path fill-rule="evenodd" cliprule="evenodd" d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z" />
                                        </svg>
                                    </button>
                                </div>
                                <p class="text-sm text-slate-500 white:text-white-300" >
                                    Free balinese clothes for foreigner, and Tour Guide
                                </p>
                            </form>
                        </div>

                        <div class="md:flex font-sans pt-8">
                            <div class="md:shrink-0">
                                <img src="https://cdn.thebalibible.com/uploads/galleries/1646313630571f40ee7732e_4605152689_2428f8f337_o.jpg"
                                    alt="" class="h-48 w-full md:h-full md:w-56 inset-0 wfull` object-cover rounded-lg"
                                    loading="lazy" />
                            </div>
                            <form class="p-6">
                                <div class="flex flex-wrap">
                                    <h1 class="flex-auto font-medium text-slate-900 dark:text-white">
                                        Banjar Tegeha Hot Spring
                                    </h1>
                                    <div class="w-full flex-none mt-2 order-1 text-3xl fontbold text-violet-600">
                                        Rp. 25.000
                                    </div>
                                    <div class="text-sm font-medium text-slate-400">
                                        Available
                                    </div>
                                </div>
                                <div class="flex items-baseline mt-4 mb-6 pb-6 border-b border-slate-200 dark:text-white">
                                Second, The most place on banjar tegeha that all ages wanted to visit, it is a cool place to having a warm bath for all family comes to my village
                                </div>
                                <div class="flex space-x-4 mb-5 text-sm font-medium">
                                    <div class="flex-auto flex space-x-4">
                                        <button class="h-10 px-6 font-semibold rounded-full bg-slate-600 text-white hover:bg-slate-900"
                                            type="submit">
                                            Book Now
                                        </button>
                                        <button data-bs-toggle="modal" data-bstarget="#exampleModalLg"
                                            class="h-10 px-6 font-semibold rounded-full border border-slate200 text-slate-900  dark:text-white hover:bg-violet-800 hover:border-none hover:text-white"
                                            type="button">
                                            Check Availability
                                        </button>
                                    </div>
                                    <button
                                        class="flex-none flex items-center justify-center w-9 h9 rounded-full text-violet-600 bg-violet-50"
                                        type="button" aria-label="Like">
                                        <svg width="20" height="20" fill="currentColor" ariahidden="true">
                                            <path fill-rule="evenodd" cliprule="evenodd" d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z" />
                                        </svg>
                                    </button>
                                </div>
                                <p class="text-sm text-slate-500 dark:text-white-300">
                                    Free welcome drink, mask, and lunch.
                                </p>
                            </form>
                        </div>
                        <div class=" font-sans pt-8 text-center">
                            <a href="#"
                                class="inline-flex items-center py-2 px-4 text-sm fontmedium text-gray-500 bg-white rounded-lg border border-gray-300 hover:bg-violet-600 hover:text-white dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray700 dark:hover:text-white">
                                Sebelumnya

                            </a>
                            <!-- Next Button -->
                            <a href="#"
                                class="inline-flex items-center py-2 px-4 ml-3 text-sm fontmedium text-gray-500 bg-white rounded-lg border border-gray-300 hover:bg-violet-600 hover:text-white dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray700 dark:hover:text-white">
                                Selanjutnya
                            </a>
                        </div>
                    </section>
                </main>
            </div>
        </div>
    </div>
    {{-- modal form untuk cek availibility --}}
    <div class="modal fade fixed top-0 left-0 hidden w-full h-full outline-none overflow-xhidden overflow-y-auto"
        id="exampleModalLg" tabindex="-1" arialabelledby="exampleModalLgLabel" aria-modal="true" role="dialog">
        <div class="modal-dialog modal-lg relative w-auto pointer-events-none">
            <div
                class="modal-content border-none shadow-lg relative flex flex-col wfull pointer-events-auto bg-white bg-clip-padding rounded-md outline-none text-current">
            </div>
        </div>
    </div>
</div>