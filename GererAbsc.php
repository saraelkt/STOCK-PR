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

if (isset($_POST['nom'], $_POST['prenom'], $_POST['matricule'], $_POST["Datedabsence"])) {
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $matricule = $_POST['matricule'];
    $Datedabsence = $_POST["Datedabsence"];
    

    $sql = "INSERT INTO Absence (nom, prenom, matricule, Datedabsence) VALUES (:nom, :prenom,  :matricule, :Datedabsence)";
    $stmt = $dbb->prepare($sql);
    $stmt->bindValue(':nom', $nom);
    $stmt->bindValue(':prenom', $prenom);
    $stmt->bindValue(':matricule', $matricule);
    $stmt->bindValue(':Datedabsence', $Datedabsence);
 

    if ($stmt->execute()) {
        $message = "<pre style='color: green;'> L'absence a été enregistrée<pre>";
    } else {
        $message = "<pre style='color: red;'> l'absence n'a pas été enregistrée </pre >";
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
              d="M9 12h3.75M9 15h3.75M9 18h3.75m3 .75H18a2.25 2.25 0 0 0 2.25-2.25V6.108c0-1.135-.845-2.098-1.976-2.192a48.424 48.424 0 0 0-1.123-.08m-5.801 0c-.065.21-.1.433-.1.664 0 .414.336.75.75.75h4.5a.75.75 0 0 0 .75-.75 2.25 2.25 0 0 0-.1-.664m-5.8 0A2.251 2.251 0 0 1 13.5 2.25H15c1.012 0 1.867.668 2.15 1.586m-5.8 0c-.376.023-.75.05-1.124.08C9.095 4.01 8.25 4.973 8.25 6.108V8.25m0 0H4.875c-.621 0-1.125.504-1.125 1.125v11.25c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125V9.375c0-.621-.504-1.125-1.125-1.125H8.25ZM6.75 12h.008v.008H6.75V12Zm0 3h.008v.008H6.75V15Zm0 3h.008v.008H6.75V18Z"
            />
          </svg>

          <div class="ml-3">Gestion des Absences</div></label
        >
      </div>
      <img src="imgstock/leoloGO1.jpg" class="h-10 rounded-l-lg" />
    </nav>
    <div class="centerdiv shadow-lg font-bold font-serif">
      <h2
        class="text-2xl mb-5 text-center text-white bg-customBlue rounded-lg font-serif mb-6 font-medium"
      >
        Signaler l'Absence
      </h2>
      <form method="post">
        <label class="text-customBlue">Nom<sup class="et">*</sup></label
        ><input
          type="text"
          name="nom"
          required
          placeholder=" Nom"
          class="mb-5 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
        /><br />
        <label class="text-customBlue rounded-lg"
          >Prenom<sup class="et">*</sup></label
        ><input
          type="text"
          name="prenom"
          required
          placeholder=" Prenom"
          class="mb-5 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
        /><br />
        <label class="text-customBlue">Matricule<sup class="et">*</sup></label
        ><input
          type="number"
          name="matricule"
          required
          placeholder=" Matricule"
          class="mb-5 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 lining-nums"
        /><br />
        <label class="text-customBlue"
          >Date d'Absence<sup class="et">*</sup></label
        ><input
          type="date"
          name="Datedabsence"
          required
          placeholder=" Date d'Absence "
          class="mb-9 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
        />
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
