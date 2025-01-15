<?php 

$dsn='mysql:host=localhost;dbname=leoni';
$user='root';
$pswd='';
$message = ''; // Variable pour stocker le message de succès ou d'erreur

try {
    $dbb = new PDO($dsn, $user, $pswd);
} catch (Exception $e) {
    echo "failed " . $e->getMessage();
}

if (isset($_POST['Nom'], $_POST['Prenom'], $_POST['segment2'], $_POST['Matricule_SAP'], $_POST['Matricule'], $_POST["Date_dembauche"], $_POST['typedecontrat'], $_POST['equipe'])) {
    $nom = $_POST['Nom'];
    $prenom = $_POST['Prenom'];
    $segment2 = $_POST['segment2'];
    $matriculesap = $_POST['Matricule_SAP'];
    $matricule = $_POST['Matricule'];
    $dateembauche = $_POST["Date_dembauche"];
    $typedecontrat = $_POST['typedecontrat'];
    $equipe = $_POST['equipe'];

    $sql = "INSERT INTO operateurs (Nom, Prenom, segment2, Matricule_SAP, Matricule, Date_dembauche, typedecontrat, equipe) VALUES (:nom, :prenom, :segment2, :matriculesap, :matricule, :dateembauche, :typedecontrat, :equipe)";
    $stmt = $dbb->prepare($sql);
    $stmt->bindValue(':nom', $nom);
    $stmt->bindValue(':prenom', $prenom);
    $stmt->bindValue(':segment2', $segment2);
    $stmt->bindValue(':matriculesap', $matriculesap);
    $stmt->bindValue(':matricule', $matricule);
    $stmt->bindValue(':dateembauche', $dateembauche);
    $stmt->bindValue(':typedecontrat', $typedecontrat);
    $stmt->bindValue(':equipe', $equipe);

    if ($stmt->execute()) {
        $message = "<pre style='color: green;'>L'operateur a été ajouté avec succès.<pre>";
    } else {
        $message = "<pre style='color: red;'>Une erreur s'est produite lors de l'ajout de l'opérateur.</pre >";
    }
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
  <nav class="bg-customBlue text-white flex p-50px text-xl justify-between">
    <div class="flex gap-400px justify-center items-center">
      <img
        src="imgstock/opex logo.jpg"
        alt="opex image "
        class="h-10 rounded-r-lg w-36"
      />
    </div>
    <div>
      <label
        class="font-bold font-serif bg-Sky text-black text-2xl p-1 flex rounded-lg"
        ><svg
          xmlns="http://www.w3.org/2000/svg"
          fill="none"
          viewBox="0 0 24 24"
          stroke-width="1.5"
          stroke="currentColor"
          class="size-6"
        >
          <path
            stroke-linecap="round"
            stroke-linejoin="round"
            d="M18 7.5v3m0 0v3m0-3h3m-3 0h-3m-2.25-4.125a3.375 3.375 0 1 1-6.75 0 3.375 3.375 0 0 1 6.75 0ZM3 19.235v-.11a6.375 6.375 0 0 1 12.75 0v.109A12.318 12.318 0 0 1 9.374 21c-2.331 0-4.512-.645-6.374-1.766Z"
          />
        </svg>
        <div class="ml-3">Ajout des Operateurs</div></label
      >
    </div>
    <img src="imgstock/leoloGO1.jpg" class="h-10 rounded-l-lg" />
  </nav>
  <div class="centerdiv shadow-lg font-bold font-serif">
    <h2
      class="text-2xl mb-5 text-center text-white bg-customBlue rounded-lg font-serif mb-6 font-medium"
    >
      Formulaire d'Inscription
    </h2>
    <form method="post" action="ajoutdesoperateurs.php">
      <label class="text-customBlue">Nom<sup class="et">*</sup></label>
      <input
        type="text"
        name="Nom"
        required
        placeholder=" Nom"
        class="mb-5 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
      /><br />
      <label class="text-customBlue rounded-lg">Prenom<sup class="et">*</sup></label>
      <input
        type="text"
        name="Prenom"
        required
        placeholder=" Prenom"
        class="mb-5 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
      /><br />
      <label class="text-customBlue rounded-lg">Segement 2</label>
      <input
        type="text"
        name="segment2"
        placeholder=" Segement 2"
        class="mb-5 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
      /><br />
      <label class="text-customBlue">Matricule SAP</label>
      <input
        type="number"
        name="Matricule_SAP"
        placeholder=" Matricule SAP"
        class="mb-5 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 lining-nums"
      /><br />
      <label class="text-customBlue">Matricule<sup class="et">*</sup></label>
      <input
        type="number"
        name="Matricule"
        required
        placeholder=" Matricule"
        class="mb-5 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 lining-nums"
      /><br />
      <label class="text-customBlue">Date d'embauche <sup class="et">*</sup></label>
      <input
        type="date"
        name="Date_dembauche"
        required
        placeholder=" Date d'embauche "
        class="mb-9 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
      />
      <div class="mb-9">
        <label class="block mb-2 font-bold text-customBlue">Contrat</label>
        <select
          name="typedecontrat" class="border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
        >
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
      <label class="text-customBlue">Equipe</label>
      <input
        type="number"
        name="equipe"
        placeholder=" Equipe"
        class="mb-5 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 lining-nums"
      /><br />
      <button
        type="submit"
        class="text-white bg-customBlue hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 ml-80 transition ease-in-out delay-150 bg-customBlue hover:-translate-y-1 hover:scale-110 hover:bg-blue-600 duration-300"
      >
        Submit
      </button>
    </form>
    <?php if ($message): ?>
      <div class="mt-6 pt-4 text-center">
        <?php echo $message; ?>
      </div>
    <?php endif; ?>
  </div>
  <br />
  <br />
</body>
</html>
