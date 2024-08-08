<!doctype html>
<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://cdn.jsdelivr.net/npm/flowbite@2.4.1/dist/flowbite.min.css"  rel="stylesheet" />
  <script src="https://cdn.jsdelivr.net/npm/flowbite@2.4.1/dist/flowbite.min.js"></script>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body >
<div class="container mx-auto mt-5">
        <div class="max-w-md mx-auto bg-white shadow-md rounded-lg overflow-hidden">
            <div class="p-6">
                <h5 class="text-xl font-bold mb-2"><?php echo $client['nom'] . " " . $client['prenom']; ?></h5>
                <p class="text-gray-700 mb-2"><strong>Telephone:</strong> <?php echo $client['telephone']; ?></p>
                <p class="text-gray-700 mb-2"><strong>Email:</strong> <?php echo $client['email']; ?></p>
                <p class="text-gray-700 mb-2"><strong>Adresse:</strong> <?php echo $client['adresse']; ?></p>
                <p class="text-gray-700 mb-4"><strong>Catégorie:</strong> <?php echo $client['categorie']; ?></p>
                <img src="<?php echo $client['photo']; ?>" alt="Photo de <?php echo $client['nom']; ?>" class="w-24 h-24 rounded-full mb-4">
                <!-- Ajouter d'autres informations sur le client ici -->
            </div>
        </div>
    </div>
         
  <script src="../path/to/flowbite/dist/flowbite.min.js"></script>
</body>
</html>
      