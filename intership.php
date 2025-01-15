<?php
// Informations de connexion à la base de données
$host = 'localhost';        // Remplacez par l'adresse de votre serveur
$dbname = 'leoni';          // Nom de la base de données
$username = 'root';         // Nom d'utilisateur de la base de données
$password = '';             // Mot de passe de la base de données

// Tentative de connexion à la base de données
try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Vérification si le formulaire a été soumis
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        // Récupération des valeurs du formulaire
        $date = $_POST['Date'] ?? '';
        $nom = $_POST['Nom'] ?? '';
        $prenom = $_POST['Prenom'] ?? '';
        $matricule = $_POST['matricule'] ?? '';
        $integration = $_POST['Integration'] ?? '';
        $niveau_scolaire = $_POST['niveau_scolaire'] ?? '';
        $diplomes = $_POST['Diplomes'] ?? '';
        $experiences = $_POST['experiences'] ?? '';
        
      // Vérifier si 'categories' est un tableau ou une chaîne
$categories = isset($_POST['categories']) ? (is_array($_POST['categories']) ? implode(", ", $_POST['categories']) : $_POST['categories']) : '';



        // Préparation de la requête SQL pour insérer les données
        $sql = "INSERT INTO newinterview (date, nom, prenom, matricule, dateintegration, niveauScolaire, diplomes, experiences, categories)
                VALUES (:date, :nom, :prenom, :matricule, :integration, :niveau_scolaire, :diplomes, :experiences, :categories)";

        $stmt = $pdo->prepare($sql);

        // Liaison des paramètres
        $stmt->bindParam(':date', $date);
        $stmt->bindParam(':nom', $nom);
        $stmt->bindParam(':prenom', $prenom);
        $stmt->bindParam(':matricule', $matricule);
        $stmt->bindParam(':integration', $integration);
        $stmt->bindParam(':niveau_scolaire', $niveau_scolaire);
        $stmt->bindParam(':diplomes', $diplomes);
        $stmt->bindParam(':experiences', $experiences);
        $stmt->bindParam(':categories', $categories);

        // Exécution de la requête
        $stmt->execute();

        // Message de confirmation (peut être amélioré selon vos besoins)
        echo "Les informations ont été enregistrées avec succès.";
    }
} catch (PDOException $e) {
    // Si une erreur survient, on affiche un message d'erreur
    echo "Erreur de connexion ou d'exécution de la requête : " . $e->getMessage();
}
?>


<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="dist/output.css" rel="stylesheet" />
    <link rel="stylesheet" href="style.css" />
    <title>Document</title>
  </head>
  <body class="bckimg1">
    <!-- Navbar Section -->
    <nav class="bg-customBlue text-white flex p-50px text-xl justify-between">
      <div class="flex gap-400px justify-center items-center">
        <img
          src="imgstock/opex logo.jpg"
          alt="opex image"
          class="h-10 rounded-r-lg w-36"
        />
      </div>
      <div>
        <label class="font-bold font-serif bg-Sky text-black text-2xl p-1 flex rounded-lg">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 inline-block">
            <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
          </svg>
          <div class="ml-3">Nouveau Entretien</div>
        </label>
      </div>
      <img src="imgstock/leoloGO1.jpg" class="h-10 rounded-l-lg" />
    </nav>

    <!-- Main Content -->
    <div class="centerdiv shadow-lg font-bold font-serif">
      <div class="text-2xl mb-5 text-center text-white bg-customBlue rounded-lg font-serif mb-6 font-medium w-auto">
        <h2>Suivi des Entretiens</h2>
      </div>
      
      <!-- Form Section -->
      <form method="post">
        <div class="part1">
          
          <!-- Date Input -->
          <label class="text-customBlue">Date <sup class="et">*</sup></label>
          <input type="date" name="Date" required placeholder="Date" class="mb-9 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" />

          <!-- Name Input -->
          <label class="text-customBlue">Nom <sup class="et">*</sup></label>
          <input type="text" name="Nom" required placeholder="Nom" class="mb-5 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" />

          <!-- First Name Input -->
          <label class="text-customBlue rounded-lg">Prenom <sup class="et">*</sup></label>
          <input type="text" name="Prenom" required placeholder="Prenom" class="mb-5 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" />

          <!-- Matricule Input -->
          <label class="text-customBlue">Matricule <sup class="et">*</sup></label>
          <input type="number" name="matricule" required placeholder="Matricule" class="mb-5 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 lining-nums" />

          <!-- Integration Input -->
          <label class="text-customBlue">Integration <sup class="et">*</sup></label>
          <input type="date" name="Integration" required placeholder="Integration" class="mb-9 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" />

          <!-- Educational Level Input -->
          <label class="text-customBlue">Niveau Scolaire</label>
          <input type="text" name="niveau_scolaire" placeholder="Niveau Scolaire" class="mb-9 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" />

          <!-- Diplomas Input -->
          <label class="text-customBlue">Diplomes</label>
          <input type="text" name="Diplomes" placeholder="Diplomes" class="mb-9 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" />

          <!-- Experiences Textarea -->
          <label class="text-customBlue">Experiences</label>
          <textarea id="experiences" rows="4" cols="50" name="experiences" placeholder="Experiences" class="mb-1 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"></textarea>

          <!-- Categories Section -->
          <fieldset class="border">
            <legend class="text-customBlue ml-4">Catégories:</legend>
            <label><input type="checkbox" name="categories" value="CDD" class="mb-3 ml-3 mt-3" /> Apprenti</label><br />
            <label><input type="checkbox" name="categories" value="ANAPEC" class="mb-3 ml-3" /> ANAPEC</label><br />
            <label><input type="checkbox" name="categories" value="CRIT" class="mb-3 ml-3" /> CRIT</label><br />
            <label><input type="checkbox" name="categories" value="CDD" class="mb-3 ml-3" /> CDD</label><br />
            <label><input type="checkbox" name="categories" value="CDDI" class="ml-3 mb-3" /> PREMIUM</label><br />
          </fieldset>

          <!-- Submit Button -->
          <div class="container flex justify-end">
            <button type="submit" class="text-white bg-customBlue hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 ml-80 transition ease-in-out delay-150 bg-customBlue hover:-translate-y-1 hover:scale-110 hover:bg-blue-600 duration-300">
              Submit
            </button>
          </div>
        </div>
      </form>
    </div>
  </body>
</html>
