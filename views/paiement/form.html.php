<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script>"https://cdn.tailwindcss.com"</script>
  <link href="https://cdn.jsdelivr.net/npm/flowbite@2.4.1/dist/flowbite.min.css"  rel="stylesheet" />
  <script src="https://cdn.jsdelivr.net/npm/flowbite@2.4.1/dist/flowbite.min.js"></script>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body>
   
<?php 
    require_once ROOT."/views/partial/menu.php";
    ?>
     <div class="p-4 sm:ml-64">

        <div class="mb-6 mt-10">
            <h2 class="text-2xl font-bold text-center">Liste des Paiements</h2>
        </div>
        <div class="flex justify-end w-full">
            <button data-modal-target="modal" data-modal-toggle="modal" class="text-white  bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-1.5 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
                Payer
            </button>
        </div>
<!-- Modal -->
<div id="modal" tabindex="-1" class="fixed inset-0 flex items-center justify-center z-50 hidden">
    <div class="relative bg-white rounded-lg shadow-lg w-1/3 p-6">
        <button type="button" class="absolute top-3 right-3 text-gray-400 hover:text-gray-900" data-modal-hide="modal">
            <span class="sr-only">Close</span>
            &times;
        </button>
        <h3 class="text-lg font-medium text-gray-900 mb-4">Paiement</h3>
        <form>
            <label for="numero" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"><strong>Numero</strong></label>
            <input type="text" id="numero" name="numero" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Entrez le numero" required />
            <label for="montant" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"><strong>Montant</strong></label>
            <input type="text" id="montant" name="montant" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Entrez le montant" required />
            <div class="mt-4 flex justify-end">
                <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-1.5 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    Valider
                </button>
            </div>
        </form>
    </div>
</div>
        
        <!-- Table -->
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400 bg-white rounded-lg shadow-md">
            <thead class="text-xs text-gray-700 uppercase bg-gray-200 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-4 py-2">Numero</th>
                    <th scope="col" class="px-4 py-2">Date</th>
                    <th scope="col" class="px-4 py-2">Montant</th>
                    <th scope="col" class="px-4 py-2">IdDette</th>
                </tr>
            </thead>
            <tbody>
            <?php foreach ($paiements as $key => $paiement) :?>
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                    <td class="px-4 py-2"><?=$paiement->numeropaie?></td>
                    <td class="px-4 py-2"><?=$paiement->datepaie?></td>
                    <td class="px-4 py-2"><?=$paiement->montantpaie?></td>
                    <td class="px-4 py-2"><?=$paiement->idDette?></td>
                </tr>
                <?php endforeach?>
                <!-- Répétez pour chaque ligne -->
            </tbody>
        </table>
</div>
</div>
    <div class="container mx-auto mt-10">
    <!-- <div class="container mx-auto mt-10">
        <div class="max-w-md mx-auto bg-white shadow-md rounded-lg overflow-hidden">
            <div class="p-6">
                <h2 class="text-2xl font-bold mb-4">Enregistrer un Paiement</h2>
                <form action="../controllers/PaiementController.php" method="post">
                    <div class="mb-4">
                        <label class="block text-gray-700 font-bold mb-2" for="montant">Montant</label>
                        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" name="montant" id="montant" required>
                    </div>
                    <div class="flex items-center justify-between">
                        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
                            Enregistrer
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div> -->
     
  <script src="../path/to/flowbite/dist/flowbite.min.js"></script>
</body>
</html>