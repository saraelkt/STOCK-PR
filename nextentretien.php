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

    // Récupération des entretiens depuis la base de données
    $stmt = $pdo->query("SELECT * FROM newinterview");
    $entretiens = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    // Si une erreur survient, on affiche un message d'erreur
    echo "Erreur de connexion ou d'exécution de la requête : " . $e->getMessage();
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="dist/output.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <title class="text-white">Suivi des Entretiens</title>
</head>
<body class="bckimg1">
    <!-- Navbar Section -->
    <nav class="bg-customBlue text-white flex p-50px text-xl justify-between">
      <div class="flex gap-400px justify-center items-center">
        <img
          src="imgstock/opex logo.jpg"
          alt="opex image "
          class="h-10 rounded-r-lg w-36"
        />
      </div>
      <div>
        <label class="font-bold font-serif  text-white text-2xl p-1 flex rounded-lg bg-transparent">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 inline-block">
            <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
          </svg>
          <div class="ml-3 bg-transparent">Next Entretien</div>
        </label>
      </div>
      <img src="imgstock/leoloGO1.jpg" class="h-10 rounded-l-lg" />
    </nav>

    <!-- Main Content -->
    

    <div class="overflow-x-auto w-full">
    <table class="min-w-full bg-white border-collapse">
            <thead>
                <tr class="bg-customBlue ">
                    <th class="py-2 px-4 border">Date</th>
                    <th class="py-2 px-4 border">Nom</th>
                    <th class="py-2 px-4 border">Prénom</th>
                    <th class="py-2 px-4 border">Matricule</th>
                    <th class="py-2 px-4 border">Intégration</th>
                    <th class="py-2 px-4 border">Niveau Scolaire</th>
                    <th class="py-2 px-4 border">Diplômes</th>
                    <th class="py-2 px-4 border">Catégories</th>
                    <th class="py-2 px-4 border">Expériences</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($entretiens as $entretien): ?>
                    <tr>
                        <td class="py-2 px-4 border"><?= htmlspecialchars($entretien['date']) ?></td>
                        <td class="py-2 px-4 border"><?= htmlspecialchars($entretien['nom']) ?></td>
                        <td class="py-2 px-4 border"><?= htmlspecialchars($entretien['prenom']) ?></td>
                        <td class="py-2 px-4 border"><?= htmlspecialchars($entretien['matricule']) ?></td>
                        <td class="py-2 px-4 border"><?= htmlspecialchars($entretien['dateintegration']) ?></td>
                        <td class="py-2 px-4 border"><?= htmlspecialchars($entretien['niveauScolaire']) ?></td>
                        <td class="py-2 px-4 border"><?= htmlspecialchars($entretien['diplomes']) ?></td>
                        <td class="py-2 px-4 border"><?= htmlspecialchars($entretien['categories']) ?></td>
                        <td class="py-2 px-4 border"><?= htmlspecialchars($entretien['experiences']) ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
            </table>
            </div>
   
</body>
</html>
