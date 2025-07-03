<html><head>
<meta charset="utf-8"/>
<link crossorigin="" href="https://fonts.gstatic.com/" rel="preconnect"/>
<link as="style" href="https://fonts.googleapis.com/css2?display=swap&amp;family=Noto+Sans%3Awght%40400%3B500%3B700%3B900&amp;family=Plus+Jakarta+Sans%3Awght%40400%3B500%3B700%3B800" onload="this.rel='stylesheet'" rel="stylesheet"/>
<title>K-Eventory Login</title>
<link rel="icon" type="image/png" href="{{ asset('images/logo.png') }}">
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<style type="text/tailwindcss">
    :root {
      --primary-color: #3B82F6; /* BIRU */
      --primary-text-color: #141612;
      --secondary-text-color: #75816a;
      --background-color: #ffffff;
      --form-field-bg: #f2f4f1;
      --border-color: #e0e3dd;
    }
    body {
      font-family: "Plus Jakarta Sans", "Noto Sans", sans-serif;
    }
  </style>
</head>
<body class="bg-[var(--background-color)] text-[var(--primary-text-color)]">
<div class="group/design-root flex min-h-screen flex-col overflow-x-hidden" style="--checkbox-tick-svg: url('data:image/svg+xml,%3csvg viewBox=%270 0 16 16%27 fill=%27rgb(20,22,18)%27 xmlns=%27http://www.w3.org/2000/svg%27%3e%3cpath d=%27M12.207 4.793a1 1 0 010 1.414l-5 5a1 1 0 01-1.414 0l-2-2a1 1 0 011.414-1.414L6.5 9.086l4.293-4.293a1 1 0 011.414 0z%27/%3e%3c/svg%3e');">
<div class="flex flex-col md:flex-row min-h-screen">
<div class="hidden md:flex md:w-1/2 bg-cover bg-center bg-no-repeat relative" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuAMCVaH5iub-L2KeiHR0JV35cwFN8tO5TlwOGNYdRgbpAuHaSpTvN_WYp5HA0RId4sS5--GoSCilB3V2wa7IucwH-WpzMmOKqFH0v-yVajVMRBDYr5bejAJESg4foJ4sPLkX_pYPt6qPkRk741-Z754Huv43P8dR3TD2oD-c42sM3KbBy8dEZad8B6C6DFlyUUig2Y-fbzwgNsw2fSNfoo2awvcJlDEnX9_4ELxaSqFQojI0Y-EsHrPt6v4cg1mq9iiL9aca27VLhU");'>
<div class="absolute inset-0 bg-black/30"></div>
<div class="relative z-10 flex flex-col items-center justify-center h-full w-full p-10 text-white">
<div class="flex items-center gap-3 mb-4">
<svg class="h-10 w-10 text-[var(--primary-color)]" fill="currentColor" viewBox="0 0 48 48" xmlns="http://www.w3.org/2000/svg">
<g clip-path="url(#clip0_6_319_left)">
<path d="M8.57829 8.57829C5.52816 11.6284 3.451 15.5145 2.60947 19.7452C1.76794 23.9758 2.19984 28.361 3.85056 32.3462C5.50128 36.3314 8.29667 39.7376 11.8832 42.134C15.4698 44.5305 19.6865 45.8096 24 45.8096C28.3135 45.8096 32.5302 44.5305 36.1168 42.134C39.7033 39.7375 42.4987 36.3314 44.1494 32.3462C45.8002 28.361 46.2321 23.9758 45.3905 19.7452C44.549 15.5145 42.4718 11.6284 39.4217 8.57829L24 24L8.57829 8.57829Z"></path>
</g>
<defs>
<clipPath id="clip0_6_319_left"><rect fill="white" height="48" width="48"></rect></clipPath>
</defs>
</svg>
<h1 class="text-3xl font-bold tracking-tight">K-Eventory</h1>
</div>
<p class="text-lg text-center max-w-md">Temukan, ikuti, dan jangan lewatkan setiap momen di kampus.
                K-Eventory menghubungkan kamu dengan kehidupan kampus yang seru dan dinamis.</p>
</div>
</div>
<div class="w-full md:w-1/2 flex flex-col items-center justify-center p-6 sm:p-10">
<div class="w-full max-w-md">
<div class="md:hidden flex flex-col items-center mb-8">
<div class="flex items-center gap-2 mb-2">
<svg class="h-8 w-8 text-[var(--primary-color)]" fill="currentColor" viewBox="0 0 48 48" xmlns="http://www.w3.org/2000/svg">
<g clip-path="url(#clip0_6_319_mobile)">
<path d="M8.57829 8.57829C5.52816 11.6284 3.451 15.5145 2.60947 19.7452C1.76794 23.9758 2.19984 28.361 3.85056 32.3462C5.50128 36.3314 8.29667 39.7376 11.8832 42.134C15.4698 44.5305 19.6865 45.8096 24 45.8096C28.3135 45.8096 32.5302 44.5305 36.1168 42.134C39.7033 39.7375 42.4987 36.3314 44.1494 32.3462C45.8002 28.361 46.2321 23.9758 45.3905 19.7452C44.549 15.5145 42.4718 11.6284 39.4217 8.57829L24 24L8.57829 8.57829Z"></path>
</g>
<defs>
<clipPath id="clip0_6_319_mobile"><rect fill="white" height="48" width="48"></rect></clipPath>
</defs>
</svg>
<h2 class="text-[var(--primary-text-color)] text-2xl font-bold">K-Eventory</h2>
</div>
</div>
<h2 class="text-3xl font-bold text-[var(--primary-text-color)] text-center md:text-left">Welcome Back</h2>
<p class="text-[var(--secondary-text-color)] text-center md:text-left mt-2 mb-8">Login to explore campus events</p>
<form method="POST" action="{{ route('login') }}" class="space-y-6">
    @csrf
<div>
<label class="block text-sm font-medium text-[var(--primary-text-color)] mb-1" for="email">Email</label>
<input autocomplete="email" class="form-input block w-full rounded-lg border-none bg-[var(--form-field-bg)] p-3.5 text-base text-[var(--primary-text-color)] placeholder:text-[var(--secondary-text-color)] focus:ring-2 focus:ring-[var(--primary-color)] focus:border-[var(--primary-color)] shadow-sm" id="email" name="email" placeholder="Enter your email" required="" type="email"/>
@error('email')
  <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
@enderror
</div>
<div>
<label class="block text-sm font-medium text-[var(--primary-text-color)] mb-1" for="password">Password</label>
<div class="relative">
<input autocomplete="current-password" class="form-input block w-full rounded-lg border-none bg-[var(--form-field-bg)] p-3.5 text-base text-[var(--primary-text-color)] placeholder:text-[var(--secondary-text-color)] focus:ring-2 focus:ring-[var(--primary-color)] focus:border-[var(--primary-color)] shadow-sm pr-10" id="password" name="password" placeholder="Enter your password" required="" type="password"/>
 @error('password')
        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
    @enderror
<button class="absolute inset-y-0 right-0 flex items-center pr-3 text-[var(--secondary-text-color)] hover:text-[var(--primary-text-color)]" onclick="togglePasswordVisibility()" type="button">
<svg fill="currentColor" height="20" id="eye-icon" viewBox="0 0 256 256" width="20" xmlns="http://www.w3.org/2000/svg">
<path d="M247.31,124.76c-.35-.79-8.82-19.58-27.65-38.41C194.57,61.26,162.88,48,128,48S61.43,61.26,36.34,86.35C17.51,105.18,9,124,8.69,124.76a8,8,0,0,0,0,6.5c.35.79,8.82,19.57,27.65,38.4C61.43,194.74,93.12,208,128,208s66.57-13.26,91.66-38.34c18.83-18.83,27.3-37.61,27.65-38.4A8,8,0,0,0,247.31,124.76ZM128,192c-30.78,0-57.67-11.19-79.93-33.25A133.47,133.47,0,0,1,25,128,133.33,133.33,0,0,1,48.07,97.25C70.33,75.19,97.22,64,128,64s57.67,11.19,79.93,33.25A133.46,133.46,0,0,1,231.05,128C223.84,141.46,192.43,192,128,192Zm0-112a48,48,0,1,0,48,48A48.05,48.05,0,0,0,128,80Zm0,80a32,32,0,1,1,32-32A32,32,0,0,1,128,160Z"></path>
</svg>
<svg class="hidden" fill="currentColor" height="20" id="eye-slash-icon" viewBox="0 0 256 256" width="20" xmlns="http://www.w3.org/2000/svg">
<path d="M217.6,194.35,161.43,152A48,48,0,0,0,176,128a47.34,47.34,0,0,0-2.08-13.46l29.13-29.14a140.11,140.11,0,0,1,23,24.84C241.18,128.19,231.05,141.46,217.6,153.65Zm-80.74-3.17L152,176a32,32,0,0,1-47.43-4.75L88.65,155.3A31.89,31.89,0,0,1,80,128a32.77,32.77,0,0,1,3.39-14.88l-22.8-22.8C43.4,100.9,25,114.54,25,128A133.47,133.47,0,0,0,48.07,158.75c20,20.09,46.75,32.92,79.24,33.24Zm10.79-82.65L128.2,89.08A48.15,48.15,0,0,0,128,80,48,48,0,0,0,80,128a47.34,47.34,0,0,0,2.08,13.46L53,169.65a140.11,140.11,0,0,1-23-24.84C14.82,127.81,24.95,114.54,38.4,102.35S70.57,64.33,103.31,64A110.27,110.27,0,0,1,128,66.22c2.73.24,5.42.56,8.07.94ZM208.49,38.49l-26.62,26.62L53.66,36.92a8,8,0,0,0-11.32,0L36.92,42.34a8,8,0,0,0,0,11.32l182.16,182.16a8,8,0,0,0,11.32,0l5.42-5.41a8,8,0,0,0,0-11.32Z"></path>
</svg>
</button>
</div>
</div>
<div class="flex items-center justify-between">
<div class="flex items-center">
<input class="h-4 w-4 rounded border-[var(--border-color)] text-[var(--primary-color)] focus:ring-[var(--primary-color)] checked:bg-[var(--primary-color)] checked:border-[var(--primary-color)] checked:bg-[image:--checkbox-tick-svg] shadow-sm" id="remember-me" name="remember-me" type="checkbox"/>
<label class="ml-2 block text-sm text-[var(--primary-text-color)]" for="remember-me">Remember me</label>
</div>
<div class="text-sm">
<a class="font-medium text-[var(--primary-color)] hover:text-blue-700 hover:underline" href="/forgot-password">Forgot password?</a>
</div>
</div>
<div>
<button class="w-full flex justify-center py-3 px-4 border border-transparent rounded-lg shadow-sm text-base font-bold text-[var(--primary-text-color)] bg-[var(--primary-color)] hover:text-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-[var(--primary-color)] transition duration-150 ease-in-out" type="submit">
    Login
    </button>
</div>
</form>
<p class="mt-8 text-center text-sm text-[var(--secondary-text-color)]">
    Don't have an account?
    <a class="font-medium text-[var(--primary-color)] hover:text-blue-700 hover:underline" href="/register">Sign Up<a>
</p>
</div>
</div>
</div>
</div>
<script>
      function togglePasswordVisibility() {
        const passwordInput = document.getElementById('password');
        const eyeIcon = document.getElementById('eye-icon');
        const eyeSlashIcon = document.getElementById('eye-slash-icon');
        if (passwordInput.type === 'password') {
          passwordInput.type = 'text';
          eyeIcon.classList.add('hidden');
          eyeSlashIcon.classList.remove('hidden');
        } else {
          passwordInput.type = 'password';
          eyeIcon.classList.remove('hidden');
          eyeSlashIcon.classList.add('hidden');
        }
      }
    </script>

</body></html>