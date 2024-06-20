<!-- resources/views/inscription.blade.php -->

<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
  <title>Inscription</title>
  <style>
    .dropzone {
      border: 2px dashed #ccc;
      padding: 20px;
      text-align: center;
      cursor: pointer;
      transition: background-color 0.3s ease;
    }

    .dropzone.dragover {
      background-color: rgba(52, 88, 48, 0.1); /* Light green tint */
    }
  </style>
</head>
<body class="bg-gray-100 text-gray-800 flex flex-col min-h-screen">

  <!-- Header -->
  <header class="bg-white text-gray-800 p-4 shadow-md">
    <div class="container mx-auto text-center">
      <!-- Centered Logo -->
      <img src="{{ asset('images/logo.png') }}" alt="Logo" class="mx-auto h-16">
    </div>
  </header>

  <!-- Main Content -->
  <main class="flex-1 flex items-center justify-center p-4">
    <div class="bg-white bg-opacity-90 rounded-lg shadow-lg p-6 w-full max-w-2xl">
      <h2 class="text-3xl font-bold text-center mb-6">Inscription</h2>
      <form action="#" method="post" class="space-y-6" enctype="multipart/form-data">
        <!-- Nom Input -->
        <div class="flex flex-col items-center">
          <label for="nom" class="text-gray-600 text-sm mb-1">Nom</label>
          <input type="text" id="nom" name="nom" class="w-full max-w-md px-4 py-2 rounded-lg border border-gray-300 bg-gray-200 shadow-sm focus:outline-none focus:border-green-500" placeholder="Votre Nom">
        </div>
        <!-- Prénom Input -->
        <div class="flex flex-col items-center">
          <label for="prenom" class="text-gray-600 text-sm mb-1">Prénom</label>
          <input type="text" id="prenom" name="prenom" class="w-full max-w-md px-4 py-2 rounded-lg border border-gray-300 bg-gray-200 shadow-sm focus:outline-none focus:border-green-500" placeholder="Votre Prénom">
        </div>
        <!-- Email Input -->
        <div class="flex flex-col items-center">
          <label for="email" class="text-gray-600 text-sm mb-1">Email</label>
          <input type="email" id="email" name="email" class="w-full max-w-md px-4 py-2 rounded-lg border border-gray-300 bg-gray-200 shadow-sm focus:outline-none focus:border-green-500" placeholder="Votre Email">
        </div>
        <!-- Téléphone Input -->
        <div class="flex flex-col items-center">
          <label for="tele" class="text-gray-600 text-sm mb-1">Téléphone</label>
          <input type="tel" id="tele" name="tele" class="w-full max-w-md px-4 py-2 rounded-lg border border-gray-300 bg-gray-200 shadow-sm focus:outline-none focus:border-green-500" placeholder="Votre Téléphone">
        </div>
        <!-- Age Input -->
        <div class="flex flex-col items-center">
          <label for="age" class="text-gray-600 text-sm mb-1">Age</label>
          <input type="number" id="age" name="age" class="w-full max-w-md px-4 py-2 rounded-lg border border-gray-300 bg-gray-200 shadow-sm focus:outline-none focus:border-green-500" placeholder="Votre Age">
        </div>
        <!-- Date de Naissance Input -->
        <div class="flex flex-col items-center">
          <label for="date_naissance" class="text-gray-600 text-sm mb-1">Date de Naissance</label>
          <input type="date" id="date_naissance" name="date_naissance" class="w-full max-w-md px-4 py-2 rounded-lg border border-gray-300 bg-gray-200 shadow-sm focus:outline-none focus:border-green-500">
        </div>
        <!-- Fichier PDF Input -->
        <div class="flex flex-col items-center">
          <label for="fichier_pdf" class="text-gray-600 text-sm mb-1">Fichier PDF</label>
          <div id="pdf-dropzone" class="dropzone w-full max-w-md bg-gray-200 border-gray-300 shadow-sm">
            <p class="text-gray-600">Glissez-déposez le fichier PDF ici ou cliquez pour sélectionner un fichier</p>
            <input type="file" id="fichier_pdf" name="fichier_pdf" accept="application/pdf" class="hidden">
          </div>
        </div>
        <!-- Image Input -->
        <div class="flex flex-col items-center">
          <label for="image" class="text-gray-600 text-sm mb-1">Image</label>
          <div id="image-dropzone" class="dropzone w-full max-w-md bg-gray-200 border-gray-300 shadow-sm">
            <p class="text-gray-600">Glissez-déposez l'image ici ou cliquez pour sélectionner un fichier</p>
            <input type="file" id="image" name="image" accept="image/*" class="hidden">
          </div>
        </div>
        <!-- Radio Button -->
        <div class="flex flex-col items-center">
          <label class="text-gray-600 text-sm mb-1">Choisissez une option</label>
          <div class="flex items-center space-x-4">
            <label class="inline-flex items-center">
              <input type="radio" name="option" value="option1" class="form-radio text-green-500">
              <span class="ml-2">Option 1</span>
            </label>
            <label class="inline-flex items-center">
              <input type="radio" name="option" value="option2" class="form-radio text-green-500">
              <span class="ml-2">Option 2</span>
            </label>
          </div>
        </div>
        <!-- Checkbox -->
        <div class="flex flex-col items-center">
          <label class="text-gray-600 text-sm mb-1">Cochez cette case</label>
          <label class="inline-flex items-center">
            <input type="checkbox" name="checkbox" class="form-checkbox text-green-500">
            <span class="ml-2">Je suis d'accord avec les termes et conditions</span>
          </label>
        </div>
        <!-- Submit Button -->
        <div class="text-center">
          <button type="submit" class="bg-green-500 text-white py-2 px-6 rounded-lg shadow hover:bg-green-600 transition duration-300">Submit</button>
        </div>
      </form>
    </div>
  </main>

  <!-- Footer -->
  <footer class="bg-white text-gray-800 p-4 mt-4 shadow-md w-full">
    <div class="container mx-auto text-center md:text-left flex justify-between items-center flex-wrap">
      <!-- Social Icons and Information -->
      <div class="mb-4 md:mb-0">
        <p>Contact us:</p>
        <div class="flex justify-center md:justify-start space-x-4">
          <a href="https://facebook.com" target="_blank">
            <img src="{{ asset('images/facebook-icon.png') }}" alt="Facebook" class="h-8">
          </a>
          <a href="https://instagram.com" target="_blank">
            <img src="{{ asset('images/instagram-icon.png') }}" alt="Instagram" class="h-8">
          </a>
          <a href="mailto:your-email@example.com">
            <img src="{{ asset('images/email-icon.png') }}" alt="Email" class="h-8">
          </a>
        </div>
      </div>
      <div class="text-center md:text-right">
        <p>&copy; 2024 Responsive Tailwind Page. All rights reserved.</p>
      </div>
    </div>
  </footer>

  <script>
    document.addEventListener('DOMContentLoaded', () => {
      const pdfDropzone = document.getElementById('pdf-dropzone');
      const pdfInput = document.getElementById('fichier_pdf');

      const imageDropzone = document.getElementById('image-dropzone');
      const imageInput = document.getElementById('image');

      function handleDragOver(event) {
        event.preventDefault();
        event.currentTarget.classList.add('dragover');
      }

      function handleDragLeave(event) {
        event.preventDefault();
        event.currentTarget.classList.remove('dragover');
      }

      function handleDrop(event) {
        event.preventDefault();
        event.currentTarget.classList.remove('dragover');
        const input = event.currentTarget.querySelector('input[type="file"]');
        input.files = event.dataTransfer.files;
      }

      pdfDropzone.addEventListener('dragover', handleDragOver);
      pdfDropzone.addEventListener('dragleave', handleDragLeave);
      pdfDropzone.addEventListener('drop', handleDrop);

      imageDropzone.addEventListener('dragover', handleDragOver);
      imageDropzone.addEventListener('dragleave', handleDragLeave);
      imageDropzone.addEventListener('drop', handleDrop);

      pdfDropzone.addEventListener('click', () => pdfInput.click());
      imageDropzone.addEventListener('click', () => imageInput.click());

      pdfInput.addEventListener('change', (event) => {
        const files = event.target.files;
        if (files.length > 0) {
          pdfDropzone.querySelector('p').textContent = files[0].name;
        }
      });

      imageInput.addEventListener('change', (event) => {
        const files = event.target.files;
        if (files.length > 0) {
          imageDropzone.querySelector('p').textContent = files[0].name;
        }
      });
    });
  </script>
</body>
</html>
