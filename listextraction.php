<?php
$dsn = 'mysql:host=localhost;dbname=leoni';
$user = 'root';
$psswd = '';

try {
    // Connexion à la base de données
    $dbb = new PDO($dsn, $user, $psswd);
    $dbb->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    // Exécution de la requête
    $sql = 'SELECT * FROM operateurs';
    $stmt = $dbb->query($sql);
    
    // Récupération des résultats
    $operateurs = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    die('Erreur de connexion : ' . $e->getMessage());
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="dist/output.css" rel="stylesheet" />
    <link rel="stylesheet" href="style.css" />
    <title>Liste des Opérateurs</title>
    <style>
      /* Style pour ajuster la taille du tableau */
      #tabaff {
        width: 60%; /* Réduit la largeur du tableau */
        margin: 20px auto;
        border-collapse: collapse;
      }

      #tabaff th, #tabaff td {
        padding: 8px 10px; /* Réduit la hauteur des cellules */
        font-size: 14px; /* Réduit la taille du texte */
        border: 1px solid #ddd; /* Ajoute une bordure légère */
      }

      #tabaff th {
        background-color: #f4f4f4; /* Couleur de fond pour les en-têtes */
      }

      #tabaff tr:nth-child(even) {
        background-color: #d6eaff; /* Couleur alternée pour les lignes */
      }

      #tabaff tr:hover {
        background-color: #f1f1f1; /* Effet survol */
      }
    </style>
  </head>
  <body class="bckimg1">
    <nav class="bg-customBlue text-white flex p-50px text-xl justify-between">
      <div class="flex gap-400px justify-center items-center">
        <img
          src="imgstock/opex logo.jpg"
          alt="opex image"
          class="h-10 rounded-r-lg w-36"
        />
      </div>
      <img src="imgstock/leoloGO1.jpg" class="h-10 rounded-l-lg" />
    </nav>

    <h1 class="font-bold text-center text-customBlue" id="listop">Liste des Opérateurs</h1>
    <table id="tabaff">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nom</th>
                <th>Prénom</th>
                <th>Segment</th>
                <th>Matricule SAP</th>
                <th>Matricule</th>
                <th>Date d'embauche</th>
                <th>Type de contrat</th>
                <th>Équipe</th>
            </tr>
        </thead>
        <tbody>
        <?php
        // Parcourir et afficher les résultats
        foreach ($operateurs as $row) {
            echo '<tr>';
            echo '<td>' . htmlspecialchars($row['id'] ?? '') . '</td>';
            echo '<td>' . htmlspecialchars($row['Nom'] ?? '') . '</td>';
            echo '<td>' . htmlspecialchars($row['Prenom'] ?? '') . '</td>';
            echo '<td>' . htmlspecialchars($row['segment2'] ?? '') . '</td>';
            echo '<td>' . htmlspecialchars($row['Matricule_SAP'] ?? '') . '</td>';
            echo '<td>' . htmlspecialchars($row['Matricule'] ?? '') . '</td>';
            echo '<td>' . htmlspecialchars($row['Date_dembauche'] ?? '') . '</td>';
            echo '<td>' . htmlspecialchars($row['typedecontrat'] ?? '') . '</td>';
            echo '<td>' . htmlspecialchars($row['equipe'] ?? '') . '</td>';
            echo '</tr>';
        }
        ?>
        </tbody>
    </table>
  </body>
</html>
