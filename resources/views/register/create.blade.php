<x-layout>
  <section class="px-6 py-8">
    <main class="max-w-lg p-6 mx-auto mt-10 bg-gray-100 border-gray-200 rounded-lg">
      <h1 class="text-xl font-bold text-center">Register!</h1>

      <form action="/register" method="post" class="mt-10">
        <div class="mb-6">
          <label class="block mb-2 text-xs font-bold text-gray-700 uppercase" for="username">Username</label>
          <input type="text" class="w-full p-2 border border-gray" name="username" id="username" required>
        </div>

      </form>
    </main>
  </section>
</x-layout>