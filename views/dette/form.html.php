<?php
// PHP code if needed
?>
<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.4.1/dist/flowbite.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.4.1/dist/flowbite.min.js"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php
    require_once ROOT . "/views/partial/menu.php";
    ?>
    <div class="p-4 sm:ml-64">
        <div>
            <div class="flex items-center justify-center bg-gray-100 space-x-4">
                <h2 class="text-2xl font-bold mb-6 mt-14">Enregistrement de Dette</h2>
            </div>
            <div class="flex items-center justify-center  bg-gray-100 space-x-4">
                <form method="post" class="bg-white p-6 rounded-lg shadow-lg w-full max-w-md">
                    <div class="flex items-center space-x-2">
                        <div class="w-full">
                            <label for="inputTel" class="block mb-1 text-sm font-medium text-gray-900 dark:text-white"><strong>Telephone</strong></label>
                            <input type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" required class="form-control" name="tel" id="inputTel" />
                        </div>
                        <button type="submit" class="mt-6 text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" id="btnTel"><strong>Ok</strong></button>
                    </div>
                    <div class="flex space-x-2">
                        <div class="w-full">
                            <label for="inputPrenom" class="block mb-1 text-sm font-medium text-gray-900 dark:text-white"><strong>Prenom</strong></label>
                            <input type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" required class="form-control " id="prenom" name="prenom" disabled />
                        </div>
                        <div class="w-full">
                            <label for="inputNom" class="block mb-1 text-sm font-medium text-gray-900 dark:text-white"><strong>Nom</strong></label>
                            <input type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" required class="form-control " id="nom" name="nom" disabled />
                        </div>
                </form>
            </div>
            <!-- Deuxième formulaire -->
            <form action="" method="post" class="bg-white p-6 rounded-lg shadow-lg w-full max-w-md">
                <div class="flex items-center space-x-2">
                    <div class="w-full">
                        <label for="inputRef" class="block mb-1 text-sm font-medium text-gray-900 dark:text-white"><strong>Reference</strong></label>
                        <input type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" required class="form-control" name="ref" id="inputRef" value="<?= $_POST["ref"] ?? "" ?>" />
                    </div>
                    <button type="submit" class="mt-6 text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" id="btnRef"><strong>Ok</strong></button>
                </div>
                <div class="flex space-x-2">
                    <div class="w-full">
                        <label for="inputArt" class="block mb-1 text-sm font-medium text-gray-900 dark:text-white"><strong>Article</strong></label>
                        <input type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" required class="form-control" name="art" id="inputArt" value="<?= $_POST["art"] ?? "" ?>" />
                    </div>
                    <div class="w-full">
                        <label for="inputQte" class="block mb-1 text-sm font-medium text-gray-900 dark:text-white"><strong>Quantite</strong></label>
                        <input type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" required class="form-control" name="qte" id="inputQte" value="<?= $_POST["qte"] ?? "" ?>  " />
                    </div>
                </div>
            </form>
        </div>
        <div class="flex justify-end mt-6">
            <button type="submit" class="text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" name="save" id="btnSave"><strong>Ajouter</strong></button>
        </div> <!-- <button type="submit" class="btn btn-primary" name="save" id="btnSave">Enregistrer</button> -->
        <div class="mt-4">
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-200 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-4 py-2">Article</th>
                        <th scope="col" class="px-4 py-2">Quantite</th>
                        <th scope="col" class="px-4 py-2">Prix Unitaire</th>
                        <th scope="col" class="px-4 py-2">Total</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-4 py-2">Article 1</td>
                        <td class="px-4 py-2">5</td>
                        <td class="px-4 py-2">5000</td>
                        <td class="px-4 py-2">15000</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-4 py-2">Article 2</td>
                        <td class="px-4 py-2">3</td>
                        <td class="px-4 py-2">2000</td>
                        <td class="px-4 py-2">5000</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-4 py-2">Article 3</td>
                        <td class="px-4 py-2">2</td>
                        <td class="px-4 py-2">8000</td>
                        <td class="px-4 py-2">20000</td>
                    </tr>
                </tbody>
            </table>
            <button type="submit" class="mt-6 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" name="save" id="btnSave"><strong>Enregistrer</strong></button>
            <nav aria-label="..." class="d-flex align-items-center justify-content-center">
            <ul class="pagination" id="pagination">
                </ul>
            </nav>
        </div>
    </div>
    <script src="../path/to/flowbite/dist/flowbite.min.js"></script>
</body>
</html>