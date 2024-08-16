<?php
require_once ROOT . "/views/partial/menu.php";
?>
<div class="p-4 sm:ml-64">

    <div class="mb-6 mt-10">
        <h2 class="text-2xl font-bold">Détails dettes</h2>
    </div>
    <div class="container flex space-x-4 space-y-1 shadow-sm p-2 border border-1 bg-white rounded-lg">
        <div class="container">
            <div class="">Client: <span class="text-blue-500">Babacar Fall</span></div>
            <div class="">Téléphone: <span class="text-blue-500">77 234 56 78</span></div>
            <div class="">Catégorie: <span class="text-blue-500">Nouveau</span></div>
            <div class="">Adresse: <span class="text-blue-500">Keur Massar, Dakar</span></div>
        </div>
        <div class="container">
            <div class="">Date: <span class="text-blue-500">25-02-2024</span></div>
            <div class="">Montant Total: <span class="text-blue-500">20000</span></div>
            <div class="">Montant versé: <span class="text-blue-500">4500.00</span></div>
            <div class="">Montant dû: <span class="text-blue-500">15500.00</span></div>
        </div>
    </div>
    <div class="mb-6 mt-10">
        <h2 class="text-2xl font-bold">Liste des articles</h2>
    </div>
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
    </div>
    <div class="flex flex-col space-y-4 md:flex-row md:space-y-0 md:space-x-4 mt-4">
        <!-- Formulaire -->
        <form method="post" action="ajouter paiement" class="bg-white p-6 rounded-lg w-full md:w-1/2">
            <!-- <input type="hidden" name="idDette" id="idDette" value="<?= $idDette ?>" /> -->
            <div class="flex items-center justify-end space-x-2">
                <div class="w-full md:w-2/3">
                    <label for="inputMontant" class="block mb-1 text-sm font-medium text-gray-900 dark:text-white"><strong>Montant</strong></label>
                    <input type="text" name="montant" id="montant" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required />
                </div>
                <button type="submit" name="add" id="btnAdd" class="mt-6 text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"><strong>Ajouter</strong></button>
            </div>
        </form>
        <!-- Liste des Paiements -->
        <div class="w-full md:w-1/2">
            <div class="mb-6 mt-10 mx-4">
                <h2 class="text-2xl font-bold">Liste des Paiements</h2>
            </div>
            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400 bg-white rounded-lg shadow-md">
                <thead class="text-xs text-gray-700 uppercase bg-gray-200 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-4 py-2">Numero</th>
                        <th scope="col" class="px-4 py-2">Date</th>
                        <th scope="col" class="px-4 py-2">Montant</th>
                        <th scope="col" class="px-4 py-2">idDette</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($data as $paiement): ?>
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                            <td class="px-4 py-2"><?= $paiement->numeropaie ?></td>
                            <td class="px-4 py-2"><?= $paiement->datepaie ?></td>
                            <td class="px-4 py-2"><?= $paiement->montantpaie ?></td>
                            <td class="px-4 py-2"><?= $paiement->idDette ?></td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </div>
    <div class="flex justify-end">
        <button type="submit" name="action" value="dette" class="text-white mt-3 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-xs px-3 py-1.5 dark:bg-green-600 dark:hover:bg-green-700 focus:outline-none dark:focus:ring-green-800">
            Enregistrer
        </button>
    </div>
</div>