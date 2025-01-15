<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="dist/output.css" rel="stylesheet" />
    <link rel="stylesheet" href="style.css" />

    <title>Document</title>
  </head>
  <body class="bckimg">
    <nav class="bg-customBlue text-white flex p-50px text-xl justify-between">
      <div class="flex gap-400px justify-center items-center">
        <img
          src="imgstock/opex logo.jpg"
          alt="opex image "
          class="h-10 rounded-r-lg w-36"
        />
      </div>

      <img src="imgstock/leoloGO1.jpg" class="h-10 rounded-l-lg" />
    </nav>
    <div class="grid grid-cols-2 gap-4 mt-10 ml-52">
      <div
        class="bg-customBlue h-48 w-64 text-center text-white font-bold flex items-center justify-center rounded-lg hover:shadow-2xl transition duration-700 ease-in-out"
      >
        <a href="GestionPers.php" class="flex items-center gap-2"
          ><svg
            xmlns="http://www.w3.org/2000/svg"
            fill="none"
            viewBox="0 0 24 24"
            stroke-width="1.5"
            stroke="currentColor"
            class="size-6 inline-block"
          >
            <path
              stroke-linecap="round"
              stroke-linejoin="round"
              d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z"
            />
          </svg>
          Gestion des Personnes</a
        >
      </div>
      <div
        class="bg-customBlue h-48 w-64 text-center text-white font-bold flex items-center justify-center rounded-lg hover:shadow-2xl transition duration-0 hover:duration-150"
      >
        <a href="NewEntretien.php" class="flex items-center gap-2"
          ><svg
            xmlns="http://www.w3.org/2000/svg"
            fill="none"
            viewBox="0 0 24 24"
            stroke-width="1.5"
            stroke="currentColor"
            class="size-6 inline-block"
          >
            <path
              stroke-linecap="round"
              stroke-linejoin="round"
              d="M12 4.5v15m7.5-7.5h-15"
            />
          </svg>
          Nouveau Entretien</a
        >
      </div>
      <div
        class="bg-customBlue h-48 w-64 text-center text-white font-bold flex items-center justify-center rounded-lg hover:shadow-2xl"
      >
        <a href="nextentretien.php" class="flex items-center gap-2"
          ><svg
            xmlns="http://www.w3.org/2000/svg"
            fill="none"
            viewBox="0 0 24 24"
            stroke-width="1.5"
            stroke="currentColor"
            class="size-6 inline-block"
          >
            <path
              stroke-linecap="round"
              stroke-linejoin="round"
              d="M3 8.689c0-.864.933-1.406 1.683-.977l7.108 4.061a1.125 1.125 0 0 1 0 1.954l-7.108 4.061A1.125 1.125 0 0 1 3 16.811V8.69ZM12.75 8.689c0-.864.933-1.406 1.683-.977l7.108 4.061a1.125 1.125 0 0 1 0 1.954l-7.108 4.061a1.125 1.125 0 0 1-1.683-.977V8.69Z"
            />
          </svg>
          Prochain Entretien</a
        >
      </div>
      <div
        class="bg-customBlue h-48 w-64 text-center text-white font-bold flex items-center justify-center rounded-lg hover:shadow-2xl"
      >
        <a href="listextraction.php" class="flex items-center gap-2 rounded">
          <svg
            xmlns="http://www.w3.org/2000/svg"
            fill="none"
            viewBox="0 0 24 24"
            stroke-width="1.5"
            stroke="currentColor"
            class="size-6 inline-block"
          >
            <path
              stroke-linecap="round"
              stroke-linejoin="round"
              d="M3.75 12h16.5m-16.5 3.75h16.5M3.75 19.5h16.5M5.625 4.5h12.75a1.875 1.875 0 0 1 0 3.75H5.625a1.875 1.875 0 0 1 0-3.75Z"
            />
          </svg>
          Extraire liste</a
        >
      </div>
    </div>

    <script src="script.js"></script>
  </body>
</html>
