<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <link crossorigin href="https://fonts.gstatic.com/" rel="preconnect" />
  <link as="style" href="https://fonts.googleapis.com/css2?display=swap&family=Noto+Sans:wght@400;500;700;900&family=Plus+Jakarta+Sans:wght@400;500;700;800" onload="this.rel='stylesheet'" rel="stylesheet" />
  <title>K-Eventory - Daftar</title>
  <link href="data:image/x-icon;base64," rel="icon" type="image/x-icon" />
  <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
  <style type="text/tailwindcss">
    :root {
      --checkbox-tick-svg: url('data:image/svg+xml,%3csvg viewBox=%270 0 16 16%27 fill=%27%23141612%27 xmlns=%27http://www.w3.org/2000/svg%27%3e%3cpath d=%27M12.207 4.793a1 1 0 010 1.414l-5 5a1 1 0 01-1.414 0l-2-2a1 1 0 011.414-1.414L6.5 9.086l4.293-4.293a1 1 0 011.414 0z%27/%3e%3c/svg%3e');
      --primary-color: #3b82f6;
      --secondary-color: #141612;
      --accent-color: #75816a;
      --background-color: #ffffff;
      --muted-background-color: #f2f4f1;
      --border-color: #e0e3dd;
      --error-color: #ef4444;
    }
    .form-input-container {
      position: relative;
    }
    .form-input-icon {
      position: absolute;
      left: 12px;
      top: 50%;
      transform: translateY(-50%);
      color: var(--accent-color);
    }
    .form-input {
      padding-left: 40px !important;
    }
  </style>
</head>
<body class="bg-[var(--background-color)] font-['Plus_Jakarta_Sans',_'Noto_Sans',_sans-serif]">
  <div class="relative flex min-h-screen flex-col group/design-root overflow-x-hidden">
    <div class="flex h-full grow flex-col">
      <header class="flex items-center justify-between whitespace-nowrap border-b border-solid border-b-[var(--muted-background-color)] px-6 sm:px-10 py-4">
        <div class="flex items-center gap-3 text-[var(--secondary-color)]">
          <div class="size-6 sm:size-7 text-[var(--primary-color)]">
            <svg class="h-8 w-8" fill="currentColor" viewBox="0 0 48 48" xmlns="http://www.w3.org/2000/svg">
              <path d="M8.57829 8.57829C5.52816 11.6284 3.451 15.5145 2.60947 19.7452C1.76794 23.9758 2.19984 28.361 3.85056 32.3462C5.50128 36.3314 8.29667 39.7376 11.8832 42.134C15.4698 44.5305 19.6865 45.8096 24 45.8096C28.3135 45.8096 32.5302 44.5305 36.1168 42.134C39.7033 39.7375 42.4987 36.3314 44.1494 32.3462C45.8002 28.361 46.2321 23.9758 45.3905 19.7452C44.549 15.5145 42.4718 11.6284 39.4217 8.57829L24 24L8.57829 8.57829Z" />
            </svg>
          </div>
          <h2 class="text-[var(--secondary-color)] text-xl sm:text-2xl font-bold leading-tight tracking-[-0.015em]">K-Eventory</h2>
        </div>
      </header>
      <main class="flex flex-1 flex-col lg:flex-row">
        <div class="lg:w-1/2 flex items-center justify-center p-6 sm:p-10 lg:p-16 bg-[var(--muted-background-color)] order-2 lg:order-1">
          <img alt="Ilustrasi K-Eventory" class="w-full max-w-md object-contain rounded-lg shadow-lg" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCZNpUlOCsCs5HdpJEj2njncmDrzlaltyVBO8OpQ5mN1eP7cSEsvivThunxYzQ3QgL1dJZug2vIjmXukB-EFvKJeqnGGJBU3NmhJEAFjdLP1dXrvvmhwszEJybkmnenkn14usUg_ux0JRhFdGCpJCFnJp_-o4Eh82lAPtxsRlKgqgWxGzhZcrpB7KtbuoEw_FBAMul6x_0bo79aoKdhuqz7k1nfqUiyG1DnfPPDH4FM1bqtr2BUDgfc3nUyHB06TbCsFQg1TEsmmQU" />
        </div>
        <div class="lg:w-1/2 flex flex-col items-center justify-center p-6 sm:p-10 order-1 lg:order-2">
          <div class="w-full max-w-md space-y-6">
            <h2 class="text-[var(--secondary-color)] text-center text-3xl sm:text-4xl font-bold leading-tight tracking-tight">
              Daftar Akun K-Eventory
            </h2>
            <form class="space-y-6" action="/login" method="GET">
              <div>
                <label for="full-name" class="block text-sm font-medium text-[var(--secondary-color)] mb-1">Nama Lengkap</label>
                <div class="form-input-container">
                  <svg class="form-input-icon w-5 h-5" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" stroke-linecap="round" stroke-linejoin="round"></path>
                  </svg>
                  <input type="text" name="full-name" id="full-name" placeholder="Masukkan nama lengkap" required class="form-input block w-full rounded-lg border border-[var(--border-color)] bg-[var(--background-color)] h-12 px-4 py-2 text-sm text-[var(--secondary-color)] placeholder-[var(--accent-color)] focus:border-[var(--primary-color)] focus:ring-[var(--primary-color)] focus:ring-opacity-50">
                </div>
              </div>
              <div>
                <label for="campus-email" class="block text-sm font-medium text-[var(--secondary-color)] mb-1">Email Kampus</label>
                <div class="form-input-container">
                  <svg class="form-input-icon w-5 h-5" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path d="M21.75 6.75v10.5a2.25 2.25 0 0 1-2.25 2.25h-15a2.25 2.25 0 0 1-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25m19.5 0v.243a2.25 2.25 0 0 1-1.07 1.916l-7.5 4.615a2.25 2.25 0 0 1-2.36 0L3.32 8.91a2.25 2.25 0 0 1-1.07-1.916V6.75" stroke-linecap="round" stroke-linejoin="round"></path>
                  </svg>
                  <input type="email" name="campus-email" id="campus-email" placeholder="Masukkan email kampus" required class="form-input block w-full rounded-lg border border-[var(--border-color)] bg-[var(--background-color)] h-12 px-4 py-2 text-sm text-[var(--secondary-color)] placeholder-[var(--accent-color)] focus:border-[var(--primary-color)] focus:ring-[var(--primary-color)] focus:ring-opacity-50">
                </div>
              </div>
              <div>
                <label for="password" class="block text-sm font-medium text-[var(--secondary-color)] mb-1">Kata Sandi</label>
                <div class="form-input-container">
                  <svg class="form-input-icon w-5 h-5" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path d="M16.5 10.5V6.75a4.5 4.5 0 1 0-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 0 0 2.25-2.25v-6.75a2.25 2.25 0 0 0-2.25-2.25H6.75a2.25 2.25 0 0 0-2.25 2.25v6.75a2.25 2.25 0 0 0 2.25 2.25Z" stroke-linecap="round" stroke-linejoin="round"></path>
                  </svg>
                  <input type="password" name="password" id="password" placeholder="Buat kata sandi" required class="form-input block w-full rounded-lg border border-[var(--border-color)] bg-[var(--background-color)] h-12 px-4 py-2 text-sm text-[var(--secondary-color)] placeholder-[var(--accent-color)] focus:border-[var(--primary-color)] focus:ring-[var(--primary-color)] focus:ring-opacity-50">
                </div>
              </div>
              <div>
                <label for="confirm-password" class="block text-sm font-medium text-[var(--secondary-color)] mb-1">Konfirmasi Kata Sandi</label>
                <div class="form-input-container">
                  <svg class="form-input-icon w-5 h-5" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path d="M16.5 10.5V6.75a4.5 4.5 0 1 0-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 0 0 2.25-2.25v-6.75a2.25 2.25 0 0 0-2.25-2.25H6.75a2.25 2.25 0 0 0-2.25 2.25v6.75a2.25 2.25 0 0 0 2.25 2.25Z" stroke-linecap="round" stroke-linejoin="round"></path>
                  </svg>
                  <input type="password" name="confirm-password" id="confirm-password" placeholder="Ulangi kata sandi" required class="form-input block w-full rounded-lg border border-[var(--border-color)] bg-[var(--background-color)] h-12 px-4 py-2 text-sm text-[var(--secondary-color)] placeholder-[var(--accent-color)] focus:border-[var(--primary-color)] focus:ring-[var(--primary-color)] focus:ring-opacity-50">
                </div>
              </div>
              <div class="flex items-center">
                <input type="checkbox" id="terms-and-conditions" name="terms-and-conditions" required class="h-4 w-4 rounded border-[var(--border-color)] text-[var(--primary-color)] checked:bg-[var(--primary-color)] checked:border-[var(--primary-color)] checked:bg-[image:--checkbox-tick-svg] focus:ring-[var(--primary-color)] focus:ring-offset-0 focus:outline-none" />
                <label for="terms-and-conditions" class="ml-2 block text-sm text-[var(--secondary-color)]">
                  Saya menyetujui <a href="#" class="font-medium text-[var(--primary-color)] hover:underline">syarat & ketentuan</a>
                </label>
              </div>
              <div>
                <button type="submit" class="flex w-full justify-center rounded-lg bg-[var(--primary-color)] px-4 py-3 text-sm font-semibold text-white shadow-sm hover:bg-opacity-90 transition-colors">
                  Daftar
                </button>
              </div>
            </form>
            <p class="text-center text-sm text-[var(--accent-color)]">
              Sudah punya akun?
              <a href="/login" class="font-medium text-[var(--primary-color)] hover:underline">Masuk di sini</a>
            </p>
          </div>
        </div>
      </main>
    </div>
  </div>
</body>
</html>
