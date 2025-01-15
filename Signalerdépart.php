 <?php
 /*


if (isset($_POST['nom'], $_POST['prenom'], $_POST['matricule'], $_POST['typedecontrat'], $_POST["Datededépart"], $_POST['mois'], $_POST['equipe'], $_POST['motifdepart'], $_POST['departfc'])) {
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $matricule = $_POST['matricule'];
    $typedecontrat = $_POST['typedecontrat'];
    $Datededépart = $_POST["Datededépart"];
    $mois = $_POST['mois'];
    $equipe = $_POST['equipe'];
    $motifdepart = $_POST['motifdepart'];
    $departfc = $_POST['departfc'];

    $sql = "INSERT INTO Depart (nom, prenom, matricule, typedecontrat, Datededépart, mois, equipe, motifdepart, departfc) VALUES (:nom, :prenom, :matricule, :typedecontrat, :Datededépart, :mois, :equipe, :motifdepart, :departfc)";
    $stmt = $dbb->prepare($sql);
    $stmt->bindValue(':nom', $nom);
    $stmt->bindValue(':prenom', $prenom);
    $stmt->bindValue(':matricule', $matricule);
    $stmt->bindValue(':typedecontrat', $typedecontrat);
    $stmt->bindValue(':Datededépart', $Datededépart);
    $stmt->bindValue(':mois', $mois);
    $stmt->bindValue(':equipe', $equipe);
    $stmt->bindValue(':motifdepart', $motifdepart);
    $stmt->bindValue(':departfc', $departfc);

    if ($stmt->execute()) {
        $message = "<pre style='color: green;'>L'opérateur a été ajouté avec succès.</pre>";
    } else {
        $message = "<pre style='color: red;'>Une erreur s'est produite lors de l'ajout de l'opérateur.</pre>";
    }
}
    */

    $dsn = 'mysql:host=localhost;dbname=leoni';
    $user = 'root';
    $pswd = '';
    $message = ''; 
    try {
        $dbb = new PDO($dsn, $user, $pswd);
        $dbb->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (Exception $e) {
        echo "failed " . $e->getMessage();
        exit; // Arrête l'exécution en cas d'échec de la connexion
    }
    
    if (isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['matricule']) && isset($_POST['typedecontrat']) && isset($_POST['Datededepart']) && isset($_POST['mois']) && isset($_POST['equipe']) && isset($_POST['motifdepart']) && isset($_POST['departfc'])) {
        $stmt = $dbb->prepare("INSERT INTO depart (nom, prenom, matricule, typedecontrat, Datededepart, mois, equipe, motifdepart, departfc) VALUES (:nom, :prenom, :matricule, :typedecontrat, :Datededepart, :mois, :equipe, :motifdepart, :departfc)");
    
        $stmt->bindParam(':nom', $_POST['nom']);
        $stmt->bindParam(':prenom', $_POST['prenom']);
        $stmt->bindParam(':matricule', $_POST['matricule']);
        $stmt->bindParam(':typedecontrat', $_POST['typedecontrat']);
        $stmt->bindParam(':Datededepart', $_POST['Datededepart']);
        $stmt->bindParam(':mois', $_POST['mois']);
        $stmt->bindParam(':equipe', $_POST['equipe']);
        $stmt->bindParam(':motifdepart', $_POST['motifdepart']);
        $stmt->bindParam(':departfc', $_POST['departfc']);
    
        if ($stmt->execute()) {
            $message = "<pre style='color: green;'>L'operateur a été ajouté a la liste des départs.<pre>";
        } else {
            $message = "<pre style='color: red;'>Une erreur s'est produite lors de l'ajout de l'opérateur a la liste des départs.</pre >";
        }
    }
?>    




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="dist/output.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body class="bckimg1">
    <nav class="bg-customBlue text-white flex p-50px text-xl justify-between">
        <div class="flex gap-400px justify-center items-center">
            <img src="imgstock/opex logo.jpg" alt="opex image" class="h-10 rounded-r-lg w-36">
        </div>
        <div>
            <label class="font-bold font-serif bg-Sky text-black text-2xl p-1 flex rounded-lg" id="signaledep">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M22 10.5h-6m-2.25-4.125a3.375 3.375 0 1 1-6.75 0 3.375 3.375 0 0 1 6.75 0ZM4 19.235v-.11a6.375 6.375 0 0 1 12.75 0v.109A12.318 12.318 0 0 1 10.374 21c-2.331 0-4.512-.645-6.374-1.766Z"/>
                </svg>
                <div class="ml-3"  >Signaler le Départ</div>
            </label>
        </div>
        <img src="imgstock/leoloGO1.jpg" class="h-10 rounded-l-lg">
    </nav>
    <div class="centerdiv shadow-lg font-bold font-serif">
        <h2 class="text-2xl mb-5 text-center text-white bg-customBlue rounded-lg font-serif mb-6 font-medium">Formulaire de départ</h2>
        <form method="post" action="Signalerdépart.php">
            <label class="text-customBlue font-customBlue">Nom<sup class="et">*</sup></label>
            <input type="text" name="nom" required placeholder=" Nom" class="mb-5 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"><br>
            <label class="text-customBlue rounded-lg">Prenom<sup class="et">*</sup></label>
            <input type="text" name="prenom" required placeholder=" Prenom" class="mb-5 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"><br>
            <label class="text-customBlue">Matricule<sup class="et">*</sup></label>
            <input type="number" name="matricule" required placeholder=" Matricule" class="mb-5 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 lining-nums"><br>
            <div class="mb-9">
                <label class="block mb-2 font-bold text-customBlue">Contrat</label>
                <select name="typedecontrat" class="border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option disabled selected>Type de Contrat</option>
                    <option>ANAPEC</option>
                    <option>CDD1</option>
                    <option>CDD2</option>
                    <option>CDI</option>
                    <option>CDD</option>
                    <option>PREMIUM</option>
                    <option>AWRACHE</option>
                </select>
            </div>
            <label class="text-customBlue">Date départ <sup class="et">*</sup></label>
            <input type="date" name="Datededepart" required placeholder=" Date départ" class="mb-9 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            <label class="text-customBlue">Mois <sup class="et">*</sup></label>
            <input type="month" name="mois" required placeholder=" Mois" class="mb-9 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            <label class="text-customBlue">Equipe</label>
            <input type="number" name="equipe" placeholder=" Equipe" class="mb-5 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 lining-nums"><br>
            <label class="text-customBlue">Motif de départ </label><br>
            <textarea rows="4" cols="50" name="motifdepart" placeholder="Motif de départ" class="mb-5 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 lining-nums"></textarea><br>
            <div class="mb-9">
                <label class="block mb-2 font-bold text-customBlue">Depart-Fc</label>
                <select name="departfc" class="border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option disabled selected>Depart-Fc</option>
                    <option>DEPART</option>
                    <option>DEMISSION</option>
                    <option>ARRET DE CONTRAT</option>
                </select>
            </div>
            <button type="submit" class="text-white bg-customBlue hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 ml-80 transition ease-in-out delay-150 bg-customBlue hover:-translate-y-1 hover:scale-110 hover:bg-blue-600 duration-300">Submit</button>
        </form>
        <?php if ($message): ?>
      <div class="mt-6 pt-4 text-center">
        <?php echo $message; ?>
      </div>
    <?php endif; ?>
        
    </div>
    <br>
    <br>
</body>
</html>
