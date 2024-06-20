<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
  <title>Responsive Page with Tailwind CSS</title>
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
  <main class="relative flex-1 flex items-center justify-center">
    <!-- Background Image -->
    <div class="absolute inset-0">
      <img src="{{ asset('images/background.jpg') }}" alt="Background Image" class="w-full h-full object-cover opacity-20">
    </div>
    <!-- Content -->
    <div class="relative z-10 text-center p-6 bg-white bg-opacity-90 rounded-lg shadow-lg max-w-3xl mx-auto">
      <h2 class="text-3xl font-bold mb-4">Pré-inscriptions en ligne en Licence Professionnelle</h2>
      <div class="text-lg mb-6 leading-relaxed sm:text-base">
        <p class="mb-4">La licence professionnelle à l'ESTK se propose de compléter la formation des candidats ayant bac+2 possédant une spécialité de base pour leur apporter les connaissances technologiques transversales essentielles dans un contexte de formation solide et complète.</p>
        <ul class="list-disc text-left ml-6">
          <li>LP - Management Bancaire et Financier</li>
          <li>LP - Management du Tourisme</li>
          <li>LP - Énergies Renouvelables et Développement Durable</li>
          <li>LP - Ingénierie des Systèmes Informatiques Et Logiciels</li>
          <li>LP - Modélisation et Gestion de l'Environnement</li>
        </ul>
      </div>
      <a href="{{ url('/inscription') }}" class="bg-green-500 text-white py-3 px-8 rounded-lg shadow hover:bg-green-600 transition duration-300 text-lg inline-block mt-4">Go to Page</a>
    </div>
  </main>

  <!-- Footer -->
  <footer class="bg-white text-gray-800 p-4 mt-4 shadow-md">
    <div class="container mx-auto text-center md:text-left flex justify-between items-center flex-wrap">
      <!-- Social Icons and Information -->
      <div class="mb-4 md:mb-0">
        <p>Contact us:</p>
        <div class="flex justify-center md:justify-start space-x-4">
          <a href="https://facebook.com" target="_blank">
            <img src="{{ asset('images/facebook.png') }}" alt="Facebook" class="h-8">
          </a>
          <a href="https://instagram.com" target="_blank">
            <img src="{{ asset('images/insta.png') }}" alt="Instagram" class="h-8">
          </a>
          <a href="mailto:your-email@example.com">
            <img src="{{ asset('images/gmail.png') }}" alt="Email" class="h-8">
          </a>
        </div>
      </div>
      <div class="text-center md:text-right">
        <p>&copy; 2024 Responsive Tailwind Page. All rights reserved.</p>
      </div>
    </div>
  </footer>

</body>
</html>
