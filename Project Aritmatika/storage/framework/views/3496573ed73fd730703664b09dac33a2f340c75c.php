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
    <?php echo csrf_field(); ?>
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 bg">
        <div class="bg-gray overflow-hidden shadow-sm sm:rounded-lg ">
            <div class="p-6 bg-gray border-b border-gray-200 dark:bg-gray-800">
                <h1 class="mt-1 text-lg font-semibold text-white sm:text-slate-900 md:text-2xl dark:sm:text-white">Calculator Perhitungan</h1>
                <main class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                        <div class="flex justify-center">
                        <div class="mb-3 xl:w-96">
                        <label for="exampleText0" class="form-label inline-block mt-1 text-lg font-semibold text-white sm:text-slate-900 md:text-2xl dark:sm:text-white">Angka Kesatu</label>
                            <input type="text" class=" form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-gray-100 bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                            placeholder="<?php echo $angka1;?>"
                            aria-label="Disabled input example"
                            disabled/>
                        </div>
                        </div>
                        
                        <div class="flex justify-center">
                        <div class="mb-3 xl:w-96">
                        <label for="exampleText0" class="form-label inline-block mt-1 text-lg font-semibold text-white sm:text-slate-900 md:text-2xl dark:sm:text-white">Angka Kedua</label>
                            <input type="text" class=" form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-gray-100 bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                            placeholder="<?php echo $angka2;?>"
                            aria-label="Disabled input example"
                            disabled/>
                        </div>
                        </div>

                        <div class="flex justify-center">
                        <div class="mb-3 xl:w-96">
                        <label for="exampleText0" class="form-label inline-block mt-1 text-lg font-semibold text-white sm:text-slate-900 md:text-2xl dark:sm:text-white">Operasi</label>
                            <input type="text" class=" form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-gray-100 bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                            placeholder="<?php echo $o;?>"
                            aria-label="Disabled input example"
                            disabled/>
                        </div>
                        </div>

                        <div class="flex justify-center">
                        <div class="mb-3 xl:w-96">
                        <label for="exampleText0" class="form-label inline-block mt-1 text-lg font-semibold text-white sm:text-slate-900 md:text-2xl dark:sm:text-white">Hasil Yang Didapat</label>
                            <input type="text" class=" form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-gray-100 bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                            placeholder="<?php echo $angka1;?> <?php echo $o;?> <?php echo $angka2;?> = <?php echo $operasi;?>"
                            aria-label="Disabled input example"
                            disabled/>
                        </div>
                        </div>

                        <div class="flex space-x-2 justify-center">
                        <button type="button" data-mdb-ripple="true"
                        data-mdb-ripple-color="light"
                        class="inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out">
                        Kembali
                        </button>
                        </form>

                        </div>
                </main>
            </div>
        </div>
    </div>
</div>
</body>
</html><?php /**PATH C:\Laravel\Laravel Wisata\resources\views/HasilCalculator.blade.php ENDPATH**/ ?>