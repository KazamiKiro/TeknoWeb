<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Kalkulator</title>
</head>
<body class="dark:bg-gray-800">
<div class="py-12">
    <form action="/calculator" method="post">
    @csrf
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 bg">
        <div class="bg-gray overflow-hidden shadow-sm sm:rounded-lg ">
            <div class="p-6 bg-gray border-b border-gray-200 dark:bg-gray-800">
                <h1 class="mt-1 text-lg font-semibold text-white sm:text-slate-900 md:text-2xl dark:sm:text-white">Calculator Perhitungan</h1>
                <main class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">

                        <div class="flex justify-center">
                        <div class="mb-3 xl:w-96">
                            <label for="exampleNumber0" class="form-label inline-block mt-1 text-lg font-semibold text-white sm:text-slate-900 md:text-2xl dark:sm:text-white" >Angka Pertama</label>

                                <input name="a1" type="number" class= "form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700  focus:bg-white focus:border-blue-600 focus:outline-none"
                                id="exampleNumber0"
                                placeholder="Masukkan Angka Pertama"/>
                            </div>
                            </div>
                        
                        <div class="flex justify-center">
                        <div class="mb-3 xl:w-96">
                            <label for="exampleNumbert0" class="form-label inline-block mt-1 text-lg font-semibold text-white sm:text-slate-900 md:text-2xl dark:sm:text-white">Angka Kedua</label>
                                <input name="a2"type="number"class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-paddingborder border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                                id="exampleNumber0"
                                placeholder="Masukkan Angka Kedua"/>
                        </div>
                        </div>

                        <div class="flex justify-center">
                        <div class="mb-3 xl:w-96">

                        <label for="exampleNumber0" class="form-label inline-block mt-1 text-lg font-semibold text-white sm:text-slate-900 md:text-2xl dark:sm:text-white" >Operasi</label>
                        <div class="flex justify-center">
                        <div class="mb-3 xl:w-96">
                            <select name="o" class="form-select appearance-none block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding bg-no-repeat border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" aria-label="Default select example">
                        <option selected>Pilihan Menu Operasi</option>
                        <option value="+">Penjumlahan (+)</option>
                        <option value="-">Penguragan (-)</option>
                        <option value="x">Perkalian (x)</option>
                        <option value="/">Pembagian (/)</option>
                        </select>
                        </div>
                        </div>

                        <div class="flex space-x-2 justify-center">
                        <input type="submit" data-mdb-ripple="true"
                        data-mdb-ripple-color="light"
                        class="inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out">
                        
                        </input>
                        </form>
                        </div>
                </main>
            </div>
        </div>
    </div>
</div>
</body>
</html>