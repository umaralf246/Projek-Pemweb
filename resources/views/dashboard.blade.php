<html><head>
<meta charset="utf-8"/>
<link crossorigin="" href="https://fonts.gstatic.com/" rel="preconnect"/>
<link as="style" href="https://fonts.googleapis.com/css2?display=swap&amp;family=Noto+Sans%3Awght%40400%3B500%3B700%3B900&amp;family=Plus+Jakarta+Sans%3Awght%40400%3B500%3B600%3B700%3B800" onload="this.rel='stylesheet'" rel="stylesheet"/>
<title>K-Eventory Dashboard</title>
<link href="data:image/x-icon;base64," rel="icon" type="image/x-icon"/>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<style type="text/tailwindcss">
      :root {
        --primary-color: #2563eb;--primary-color-hover: #1d4ed8;--secondary-color: #f3f4f6;--text-primary: #111827;--text-secondary: #4b5563;--card-bg: #ffffff;}
      .btn-primary {
        @apply bg-[var(--primary-color)] text-white hover:bg-[var(--primary-color-hover)] transition-colors duration-200;
      }
      .btn-secondary {
        @apply bg-[var(--secondary-color)] text-[var(--text-primary)] hover:bg-gray-200 transition-colors duration-200;
      }
      .nav-link {
        @apply text-[var(--text-primary)] hover:text-[var(--primary-color)] transition-colors duration-200;
      }
    </style>
<script defer="" src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>
<body class="bg-gray-50">
<div class="relative flex size-full min-h-screen flex-col group/design-root overflow-x-hidden" style='font-family: "Plus Jakarta Sans", "Noto Sans", sans-serif;'>
<div class="layout-container flex h-full grow flex-col">
<header class="sticky top-0 z-50 flex items-center justify-between border-b border-gray-200 bg-white px-6 sm:px-10 py-4 shadow-sm">
  <!-- Logo -->
  <div class="flex items-center gap-3 text-[var(--primary-color)]">
    <svg class="h-8 w-8" fill="none" viewBox="0 0 48 48" xmlns="http://www.w3.org/2000/svg">
      <g clip-path="url(#clip0_6_319_new)">
        <path d="M8.57829 8.57829C5.52816 11.6284 3.451 15.5145 2.60947 19.7452C1.76794 23.9758 2.19984 28.361 3.85056 32.3462C5.50128 36.3314 8.29667 39.7376 11.8832 42.134C15.4698 44.5305 19.6865 45.8096 24 45.8096C28.3135 45.8096 32.5302 44.5305 36.1168 42.134C39.7033 39.7375 42.4987 36.3314 44.1494 32.3462C45.8002 28.361 46.2321 23.9758 45.3905 19.7452C44.549 15.5145 42.4718 11.6284 39.4217 8.57829L24 24L8.57829 8.57829Z" fill="currentColor"></path>
      </g>
      <defs>
        <clipPath id="clip0_6_319_new"><rect fill="white" height="48" width="48"></rect></clipPath>
      </defs>
    </svg>
    <h1 class="text-xl font-bold tracking-tight">K-Eventory</h1>
  </div>

  <!-- Navigasi + Profil -->
  <div class="flex items-center gap-6">
    <!-- Nav links -->
    <nav class="hidden md:flex items-center gap-6">
      <a class="nav-link text-sm font-medium" href="/dashboard">Dashboard</a>
      <a class="nav-link text-sm font-medium" href="#">Jadwal</a>
      <a class="nav-link text-sm font-medium" href="/history">Riwayat</a>
    </nav>

    <!-- Dropdown avatar -->
    <div class="relative" x-data="{ open: false }">
      <button @click="open = !open" class="focus:outline-none">
        <div class="bg-cover bg-center rounded-full size-10 border-2 border-[var(--primary-color)]"
             style='background-image: url("data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBxISEhUQEhEQERESEBIXFRAQEBASEBAQFxIWFxUVFRUYHSggGBolGxUVITEhJSkrLi4uFx8zODMsNygtLisBCgoKBQUFDgUFDisZExkrKysrKysrKysrKysrKysrKysrKysrKysrKysrKysrKysrKysrKysrKysrKysrKysrK//AABEIAOEA4QMBIgACEQEDEQH/xAAbAAACAwEBAQAAAAAAAAAAAAAAAgEDBAUGB//EADgQAAIBAgQEAwcDBAEFAQAAAAABAgMhERIxUQQTQWEFcYEiMlKRobHBBtHhQmJy8CNzgpKishX/xAAUAQEAAAAAAAAAAAAAAAAAAAAA/8QAFBEBAAAAAAAAAAAAAAAAAAAAAP/aAAwDAQACEQMRAD8A+4meerDO92WxisAIo6EV+hFR4PBWJp31uAtLUtno/IWosFawkZPHUBDSiMi2Kcz3AKmrLKOnqTCKaxYlR4O1gJr9BaWpNO+txprBWsA8tH5GYaMnuXZFsBKKaupDk9y2EcViwIo6eoVhaltLBTvrcBaWq/3oXyEnHBYorUnuAppjoRkWxS5PcCauo9EmEcVcSpbSwDVtPUrp6jU3jrcecUlYBmZhsz3Lsi2AzgaMi2ABeUhXNq2xPN7By8b7gEY5rsJezp1DNltqHvdsAIjLGzGdNK+xGXLcOZjbcBea+w/KRHJ7hzewEObVtiYrNdhkxvuGOW2oBL2dOpCljZk45u2BRPiacNZpvZXf0A0OmlcTmvsZJ+MQ6KT+Rnfii+B/MDrctCuTVjnrxpfA/wDy/gP/ANSDd1Jeif5A6MVmuwksuhno8dT6SXr7P3NGOYCFLGzG5aIyYXDm9gF5r7DqmtSOT3DmYWwAiUsLImKzahkxuGOXuASWW6IU27E45raBkwuBPKQnNfYbm9g5PcBea+xJPJ7gAvKY6mlYbMt0VSi8QJksbomPs6k03gr2Iq30v5AEpY2RCg1cKawd7DyksNQDmor5bFyvZ/IXjOOjTW8ukV+dgLnVUVd4Yavoc3i/FFj7Cx7uy+RzuJ4iU3jJ+i0RUBbV4ictZPDbRfIpJAAAAAAAAAso15Q92TX2+RWAHUo+LWwmv+6P5R0KLUlmi01umebHo1pQeMXg/o/MD0/NRW6bMXB8ap2dpbdH5fsdKMluAsZYWZElm0FqLF2GpW1t5gRFZbsZzTsgqPHS/kJBXAOWyzmonMt0UZXswLuaiCrK9n8gAg0Q0ROBRPVgTW19BqPUmloRW6ANW0KYarzGpalfiHFKnH+56L8gJ4jx/L9mN5v/ANVuzgyk28W8W+oSk28XdvqQAAAAAAAAAAAAAAAAAAAAAYnV4Hjc3sy97o/i/k5QAeqpaCVjDwHF51g/eX1W50KIC0dfQsqaC1tPUrp6gKjUQ0ZsQNQGXEAGzvctjFNYkcpdxXNq2wBN4PBE0763CMc139Al7OnXcArNRTlph17HnOKrucnJ+i2R0fGOKeChvd+XT/exyQAAAAAAAAAxcfx6p2XtT26LzA2FE+NprWcfR4/Y8/xHEzn7zb7dF6FIHpo8dTf9cfV4fcvTxurrdHkiyjXlB4xk15aPzQHqgOfwHiSn7MsFLptL9mdAAAAAAAAGpVHFqS1TPQ06ylFSjZNfJ7HnDo+D1fayPR3Xn1+n2A60HjrceUUlihWst19SFNuwC53uXZFsLyl3F5r7AWctbAV819gAnndg5eN9xeWx4zSsBGbLbUH7XbAiSxuini55Kcn1wwXm7fkDh8VUzTcu9vJaFQAAAAAAAAGbxDiuXDH+p2iu+55uUm3i7t6vdm7xmtmqYdIrD11f+9jAAAAAAAAAeg8K4vPHB+9H6rozz5p8OrZakX0bwfk7AelAAAAAAAanNxaktU0xQA9PCamlh1SZOTC5j8Iqexfo2vyjbKSdkBHN7Bye4vLZZzEAvJ7gNzEADZluiiSuKaIaIBaTwV7GDxyfsJby/Bsra+hzPGHaK7v8AcwAAAAAAAAAPL8Y8ak/85fdlJp8RhlqSX92Pzv+TMAAAAAAAAGID0YZpKO8kvqB6okAAAAAAAADp+DStKPeL+6/Y6cFc5fgT9uX+P5R2amgBmW6KMr2ZCNQGbK9mBpACMCibuyeYyyMU7gRS0Ob48rQ85fg6E3g8EYPF7wT2kvqn/AHHAAAAAAAAADk+OcPpUXSz8ujOOeslFNYO6eq7HA8Q4B03irwej27MDEAAAAAAB0vBeHxlnekdO8n+yM3B8HKo7Wj1l0X8noqNJRSilgkA4AAAAAAAAAbvCPef+P5R14O5zvAoYuT7L8nWlFJYoBmjPiNzGW8tbAUYgX5FsAC8pbsVzwtsNzewrp433AlRzXM/iNL/jku2PyuaFLLYJe0B5cCziKWSTjs/p0KwAAAAAAACGiTLW8Qpx1li9o3/gCjiPCYSvF5HtrH5dDFLwiotHF+rX3L6njXww9ZP8IpfjNT4YfKX7gRHwip/avN/sa+H8Hirzbl2Vl+5lXjFTaHyl+5bDxr4ofKX4YHWhFJYJJJdFohjHR8Spy65X/db66GtMCQAAAAAAAAjHF4LV/cDt+Ewy083xN/LT8GxTxsLSh7Kgv6UvoNkwuA3KXcXmsbmi8p7gHNYBynuSAnLe32LYzSsxsSiauA01jdEwtrYmloRWA5fjVJWmvJ/h/72OWejdJSTi9GsDz9ek4ScXqvqtwEAAADNxnGxp63l0itf4QniPG8tWvN6Lbuzz85tvFvFvqwL+K46c9XhH4Vp67mYAAAAAAAAAL+G4ucPddvhd4v0KAA9FwXiEalvdl8O/kzYeSTO54Xx+f2Je+tH8S/cDogAABu8J4dylmwtH/6MUItvBXb6Ho+BpKEcvze76gPBYajSknZBV0EgrgCpvb7FnMW/wBxmzPgBdzFv9wKcAAg0Q0ROVbFE3cCa2voNQ6k0lYirbQBq2hzuP4XOsV7y07rY209S2SsB5Ri1JqKcnolizr+IcHm9uPvdV8XfzPM+OVMIKPxSv5L+cAONxFZzk5PV/RdEVgAAAAAAAAAAAAAAADQm001Zp4p9xQA9RwtZTipbq62fVFxyPAanvR8mvs/wer8M8PxwnNW6RfXuwLvCODwXMlq9Fst/M21iKmo1K4EUdfQsqaC1VghIO4CI1CuKKMXuwNIGbF7sAG5jLIwTuRyu4vMwtsATeFkTC+oKOa4P2fUCZrC6EU27DKWawcvC+wDctHC8e8GVdZovLUjjhj7ssd/lqdrm9huUB8u4rhp05ZJxcZbPqt0+q7lJ9N47hadWOSpBTS0x1T3T1R5fj/0nNYyoyzr4JNKa8no/oB5oCyvQnB5ZxlB7STTKwAAAAAAAAAanTcnlinJvpFNt+iAUejSlOSjFOUnoksWzueG/parNp1Hyo7Wc36aL1+R63gPCaVBYU44PrJ3lLzf4A5f6d/TnK/5Krxm1aC92K1u+rt5eZ3HNk87sTy8bgTGON2RN4aA54WBLMAQeOo0opXQrWW4KeNgF5jLOWiOULzuwD8tAJzexIE81dxXDG+4vLexbGSVgFUstmD9rTpuRNYvFE07a2AhRy3YzqY23CbxWCEUWgJ5T7Dc1dxs63Kcj2AZwxvuSnls/oNGSSwYk1joAtelGossoxktppNHJ4r9L8PK+WUP+nJ/Z4o7NO2tiZvGyA8nV/SC/orPynTT+qf4KZfo2t0qUn551+D16gy3mLcDw6/SVXrUpLyzv8Gqj+jG7yrLyjT/AC2epcHsWRkksGBweH/S3Dw99TqP+6WC+UcDrUOGhFZacIwW0YpY/ItmsdLhTtrYAUMLjcxBOWKwQig9gJ5T7DKolYbmLcqcGAzjjcE8uv0JjLBYMiosdLgDeay+pChhcILDUeUk1ggI5q7i8p9hcj2LuYtwK+U+wFmdbgBJRPVimiGiAWloRW6C1tfQaj1AWlqWz0IraFMNV5gRgaUSZWA09WWUdPUanoiutr6ATWFpak0eo9XQCZaehnwJjqvM0gQimpqKy+noAtHQKwtbUKOoEU9S5i1dP93KYgRgaY6EmaWvqA1XUeiTS0ErANW09SunqNR19CypoBLM2AI1AZcANQAZTRDRAAFVbX0Go9QABq2hTDVeZIAaDKwADRT0RXW19AAAo9R6ugABTHVeZpAAMzL6egABXW1CjqSADVdP93KYgAGkzS19QAC6loJWJACKOvoWVNAADOjUAAAAAH//2Q==");'></div>
      </button>

      <!-- Dropdown menu -->
      <div x-show="open" @click.away="open = false" x-transition
           class="absolute right-0 mt-2 w-40 bg-white border border-gray-200 rounded-lg shadow-md z-50">
        <a href="/profile" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Profil</a>
        <form method="POST" action="/logout">
          @csrf
          <button type="submit" class="w-full text-left px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Logout</button>
        </form>
      </div>
    </div>
  </div>
</header>

<main class="flex-1 px-4 sm:px-6 lg:px-8 py-8">
<div class="layout-content-container mx-auto max-w-7xl">
<div class="mb-8">
<h2 class="text-[var(--text-primary)] text-3xl font-bold leading-tight">Dashboard</h2>
</div>
<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
<div class="bg-[var(--card-bg)] rounded-xl shadow-lg overflow-hidden flex flex-col" x-data="{ expanded: false }">
<img alt="Event Image" class="w-full h-48 object-cover" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCwBwSQlgxPI-7K_NlZwP3vK_1vhQNKoNPbunBkCVEiqEc782f0BI0Q3vA_gjHnEGW_4-G3lNRgKFbpkKIzRLfzMEWt93KzlipngPYtZ3FbNKwNN4RfkRGSkYkV4x-XA_Dho6QqX4U7kQOzP6ShrYTWYYGpio4gHhauentqhApidaQNUKFEehSV5czcv_8cxAUkXAv5qzXQ9EF-bHaVb2OW2FCOWpWS32MAw3oIjO89Rr-QzrTzMYpHPgiHSNpoRb8UMStkwGgGa7I"/>
<div class="p-5 flex flex-col flex-1">
<h3 class="text-lg font-semibold text-[var(--text-primary)] mb-1">Campus Movie Night</h3>
<p class="text-xs text-[var(--text-secondary)] mb-2">October 26, 2023, 7:00 PM</p>
<p class="text-sm text-[var(--text-secondary)] mb-4 flex-1">Join us for a screening of 'The Great Escape' under the stars!</p>
<div class="mt-2 mb-4" x-collapse="" x-show="expanded">
<p class="text-sm text-[var(--text-secondary)]">Full Description: Enjoy a classic film with friends and popcorn. Bring your blankets and settle in for a cozy evening. Registration Deadline: October 25, 2023.</p>
</div>
<div class="mt-auto flex flex-col sm:flex-row sm:items-center gap-3">
<button @click="expanded = !expanded" class="btn-secondary w-full sm:w-auto text-sm font-medium py-2 px-4 rounded-lg flex items-center justify-center gap-2">
<span x-text="expanded ? 'Hide Details' : 'View Details'">View Details</span>
<svg :class="{'rotate-180': expanded}" class="w-4 h-4 transition-transform" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
<path clip-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 10.94l3.71-3.71a.75.75 0 111.06 1.06l-4.25 4.25a.75.75 0 01-1.06 0L5.23 8.29a.75.75 0 01.02-1.06z" fill-rule="evenodd"></path>
</svg>
</button>
<a class="btn-primary w-full sm:w-auto text-sm font-medium py-2 px-4 rounded-lg text-center" href="#">Register for Event</a>
</div>
</div>
</div>
<div class="bg-[var(--card-bg)] rounded-xl shadow-lg overflow-hidden flex flex-col" x-data="{ expanded: false }">
<img alt="Event Image" class="w-full h-48 object-cover" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDrwJJ9VTKGSssdz207HCiNKbyqUACXwbyMi3xIrkz_dF7VY4aOty4TxaB7rwNllPvusspNQGnv2mqLpompLiJcUwQlgtopNuvHAKGdCRR8cZgsjdoGMWasgJ69aE_H0piiyFcGKNuKSp7mLee5IU6LhcGhgOz2dyngbq94ZrUFbw5VOJNvKl10kXgJhFI5ZBmMn9vh3IQa5ORkwh09axMtjtoQmclTBbXerqAENU5tj994BLroAFIcMXMThwwhNRkC_F9byDWOvrg"/>
<div class="p-5 flex flex-col flex-1">
<h3 class="text-lg font-semibold text-[var(--text-primary)] mb-1">Tech Talk: AI in Business</h3>
<p class="text-xs text-[var(--text-secondary)] mb-2">November 5, 2023, 3:00 PM</p>
<p class="text-sm text-[var(--text-secondary)] mb-4 flex-1">Learn how AI is transforming the business landscape.</p>
<div class="mt-2 mb-4" x-collapse="" x-show="expanded">
<p class="text-sm text-[var(--text-secondary)]">Full Description: Experts will discuss current trends and future implications of Artificial Intelligence in various business sectors. Q&amp;A session included. Registration Deadline: November 4, 2023.</p>
</div>
<div class="mt-auto flex flex-col sm:flex-row sm:items-center gap-3">
<button @click="expanded = !expanded" class="btn-secondary w-full sm:w-auto text-sm font-medium py-2 px-4 rounded-lg flex items-center justify-center gap-2">
<span x-text="expanded ? 'Hide Details' : 'View Details'">View Details</span>
<svg :class="{'rotate-180': expanded}" class="w-4 h-4 transition-transform" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
<path clip-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 10.94l3.71-3.71a.75.75 0 111.06 1.06l-4.25 4.25a.75.75 0 01-1.06 0L5.23 8.29a.75.75 0 01.02-1.06z" fill-rule="evenodd"></path>
</svg>
</button>
<a class="btn-primary w-full sm:w-auto text-sm font-medium py-2 px-4 rounded-lg text-center" href="#">Register for Event</a>
</div>
</div>
</div>
<div class="bg-[var(--card-bg)] rounded-xl shadow-lg overflow-hidden flex flex-col" x-data="{ expanded: false }">
<img alt="Event Image" class="w-full h-48 object-cover" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDGpacZ6f6_6hCnoxhcQCfRZx-yOc83pjYkRU-f2ptxcTfgTjPxoDkdwNnH_h-H2WzaDaMuAl0bARLZVkewbmRAV80WfOhpQznahrl8LYitnb88hibppnDifzuAPnpNSvshBJdcZci4iWtZ8C_19-Oqk80rhr5DngGnrBcRAy1cy50BlU7mg67Owh8kP1lv-j4E3jlAWlvUjgmmrxhoSFqeyVtTph0fRpbf9W1Th2r0C-81Ee19B9eCNmT9bOEBTWhHKAxZbU28jPU"/>
<div class="p-5 flex flex-col flex-1">
<h3 class="text-lg font-semibold text-[var(--text-primary)] mb-1">Volunteer Day at the Park</h3>
<p class="text-xs text-[var(--text-secondary)] mb-2">November 12, 2023, 9:00 AM</p>
<p class="text-sm text-[var(--text-secondary)] mb-4 flex-1">Help us clean up and beautify Central Park.</p>
<div class="mt-2 mb-4" x-collapse="" x-show="expanded">
<p class="text-sm text-[var(--text-secondary)]">Full Description: Join fellow students and community members to make a difference. Gloves and tools provided. Lunch will be served for all volunteers. Registration Deadline: November 10, 2023.</p>
</div>
<div class="mt-auto flex flex-col sm:flex-row sm:items-center gap-3">
<button @click="expanded = !expanded" class="btn-secondary w-full sm:w-auto text-sm font-medium py-2 px-4 rounded-lg flex items-center justify-center gap-2">
<span x-text="expanded ? 'Hide Details' : 'View Details'">View Details</span>
<svg :class="{'rotate-180': expanded}" class="w-4 h-4 transition-transform" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
<path clip-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 10.94l3.71-3.71a.75.75 0 111.06 1.06l-4.25 4.25a.75.75 0 01-1.06 0L5.23 8.29a.75.75 0 01.02-1.06z" fill-rule="evenodd"></path>
</svg>
</button>
<a class="btn-primary w-full sm:w-auto text-sm font-medium py-2 px-4 rounded-lg text-center" href="#">Register for Event</a>
</div>
</div>
</div>
<div class="bg-[var(--card-bg)] rounded-xl shadow-lg overflow-hidden flex flex-col" x-data="{ expanded: false }">
<img alt="Event Image" class="w-full h-48 object-cover" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCQ6JUlazV9KfjTkeimhYWQpavTyuJptHLr6_pAWsNsIYEMRKd4ya8v0I11JZUiLMZZf65UvGf2xMNb4pg4PxfHedRCIMMseVUGH460_lhHynP-iBxTj8t3WoRsYSPzNE4nCFYaNQdIiB1l3g1PBJlN_09VbUaDqI7bmfO-yr4POY-KVWAVeAFhpqVvewG2g0pCnk1YDbKQH3ZukcotV9s1DFLP6wzJZde7nKHjsX29tPnenIU39mueO075eJ-KWow3Bh7sSMKygMQ"/>
<div class="p-5 flex flex-col flex-1">
<h3 class="text-lg font-semibold text-[var(--text-primary)] mb-1">Art Exhibition Opening</h3>
<p class="text-xs text-[var(--text-secondary)] mb-2">November 18, 2023, 6:00 PM</p>
<p class="text-sm text-[var(--text-secondary)] mb-4 flex-1">Experience the vibrant art scene of our talented students.</p>
<div class="mt-2 mb-4" x-collapse="" x-show="expanded">
<p class="text-sm text-[var(--text-secondary)]">Full Description: Discover diverse artworks including paintings, sculptures, and photography. Meet the artists and enjoy light refreshments. Registration Deadline: November 17, 2023.</p>
</div>
<div class="mt-auto flex flex-col sm:flex-row sm:items-center gap-3">
<button @click="expanded = !expanded" class="btn-secondary w-full sm:w-auto text-sm font-medium py-2 px-4 rounded-lg flex items-center justify-center gap-2">
<span x-text="expanded ? 'Hide Details' : 'View Details'">View Details</span>
<svg :class="{'rotate-180': expanded}" class="w-4 h-4 transition-transform" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
<path clip-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 10.94l3.71-3.71a.75.75 0 111.06 1.06l-4.25 4.25a.75.75 0 01-1.06 0L5.23 8.29a.75.75 0 01.02-1.06z" fill-rule="evenodd"></path>
</svg>
</button>
<a class="btn-primary w-full sm:w-auto text-sm font-medium py-2 px-4 rounded-lg text-center" href="#">Register for Event</a>
</div>
</div>
</div>
<div class="bg-[var(--card-bg)] rounded-xl shadow-lg overflow-hidden flex flex-col" x-data="{ expanded: false }">
<img alt="Event Image" class="w-full h-48 object-cover" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDedmXHyMIpphxslc3I2vjoVh2fD6xitkwA84iy_hpTgIDU19AQFJUGpNVzc9ajUEUKvo1QVe5SSRFq0CQm9pRTiV57E6P_fUf-iMWFrtHoIIR1WjW0idnexOJ5NSeWGdtMqR02gfJMj_OWO2AmZmQdtx5krnjN2NOONvm63YlPxm1AitqSpr2Bpm5oNrMoC20xNZnMxhYQ_FHUhzjNM2NKnAoiv59AVOn-bqxRoUchLxV3TY2hvQdvnykuSMXouQUo5R-MkeQXkXI"/>
<div class="p-5 flex flex-col flex-1">
<h3 class="text-lg font-semibold text-[var(--text-primary)] mb-1">Debate Club Finals</h3>
<p class="text-xs text-[var(--text-secondary)] mb-2">November 25, 2023, 4:00 PM</p>
<p class="text-sm text-[var(--text-secondary)] mb-4 flex-1">Witness the clash of wits and arguments in the debate finals.</p>
<div class="mt-2 mb-4" x-collapse="" x-show="expanded">
<p class="text-sm text-[var(--text-secondary)]">Full Description: Top debate teams will compete for the championship. The topic is 'The Future of Education'. Audience participation encouraged. Registration Deadline: November 24, 2023.</p>
</div>
<div class="mt-auto flex flex-col sm:flex-row sm:items-center gap-3">
<button @click="expanded = !expanded" class="btn-secondary w-full sm:w-auto text-sm font-medium py-2 px-4 rounded-lg flex items-center justify-center gap-2">
<span x-text="expanded ? 'Hide Details' : 'View Details'">View Details</span>
<svg :class="{'rotate-180': expanded}" class="w-4 h-4 transition-transform" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
<path clip-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 10.94l3.71-3.71a.75.75 0 111.06 1.06l-4.25 4.25a.75.75 0 01-1.06 0L5.23 8.29a.75.75 0 01.02-1.06z" fill-rule="evenodd"></path>
</svg>
</button>
<a class="btn-primary w-full sm:w-auto text-sm font-medium py-2 px-4 rounded-lg text-center" href="#">Register for Event</a>
</div>
</div>
</div>
<div class="bg-[var(--card-bg)] rounded-xl shadow-lg overflow-hidden flex flex-col" x-data="{ expanded: false }">
<img alt="Event Image" class="w-full h-48 object-cover" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBK6wtNZ1ZPT2z51-a0jAd4BzdCF5eopme106K55b51VFOtbEfsz4WFL2Q7PLelQx4D5v1LMkPPwfCfIg-kuaIDwdDJZlnbkzLBdTnG2LIg_lmWHIPIYUbDTjT0Or2o4MDGqaCqeNsu-PLmuHLmDo_0gd9957Psw4joWt3mNTFFIgaow19hppN01fBWoWUfh_BX1-hs18w3YS7KUaQW9BX0c_twSuMV0hV-DhQBa4vBeoQQQnBEDaYZCMmg84Jhnq2T-fLR0rfCAyk"/>
<div class="p-5 flex flex-col flex-1">
<h3 class="text-lg font-semibold text-[var(--text-primary)] mb-1">Music Festival</h3>
<p class="text-xs text-[var(--text-secondary)] mb-2">December 2, 2023, 1:00 PM</p>
<p class="text-sm text-[var(--text-secondary)] mb-4 flex-1">Enjoy live music performances from local bands.</p>
<div class="mt-2 mb-4" x-collapse="" x-show="expanded">
<p class="text-sm text-[var(--text-secondary)]">Full Description: A full day of music across multiple stages, featuring diverse genres. Food trucks and local vendors will be present. Registration Deadline: December 1, 2023.</p>
</div>
<div class="mt-auto flex flex-col sm:flex-row sm:items-center gap-3">
<button @click="expanded = !expanded" class="btn-secondary w-full sm:w-auto text-sm font-medium py-2 px-4 rounded-lg flex items-center justify-center gap-2">
<span x-text="expanded ? 'Hide Details' : 'View Details'">View Details</span>
<svg :class="{'rotate-180': expanded}" class="w-4 h-4 transition-transform" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
<path clip-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 10.94l3.71-3.71a.75.75 0 111.06 1.06l-4.25 4.25a.75.75 0 01-1.06 0L5.23 8.29a.75.75 0 01.02-1.06z" fill-rule="evenodd"></path>
</svg>
</button>
<a class="btn-primary w-full sm:w-auto text-sm font-medium py-2 px-4 rounded-lg text-center" href="#">Register for Event</a>
</div>
</div>
</div>
</div>
</div>
</main>
<footer class="py-6 text-center text-sm text-[var(--text-secondary)] border-t border-gray-200 bg-white">
          © 2025 K-Eventory. All rights reserved.
        </footer>
</div>
</div>

</body></html>