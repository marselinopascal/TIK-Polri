<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>@yield('title', 'Admin Dashboard') - TIK POLRI</title>
  @vite('resources/css/app.css')
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700;800&display=swap" rel="stylesheet">
  <style>
    body { font-family: Inter, system-ui, sans-serif; }
    .hover-lift { transition: transform .2s ease, box-shadow .2s ease; }
    .hover-lift:hover { transform: translateY(-3px); }
    .fade-in { animation: fade .35s ease;}
    @keyframes fade { from { opacity: 0; transform: translateY(10px);} to { opacity: 1; transform: translateY(0);} }
  </style>
</head>
<body class="min-h-screen bg-gradient-to-br from-slate-50 to-blue-50">

  <header class="sticky top-0 z-40 bg-white/80 backdrop-blur-md border-b border-slate-200">
    <div class="max-w-7xl mx-auto px-4 sm:px-6">
      <div class="h-16 flex items-center justify-between">
        <div class="flex items-center gap-3">
          <div class="w-11 h-11 rounded-xl bg-gradient-to-br from-blue-700 to-blue-900 flex items-center justify-center shadow-lg">
            <svg class="w-7 h-7 text-yellow-400" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2 2 7v10c0 5.55 3.84 9.74 9 11 5.16-1.26 9-5.45 9-11V7L12 2z"/></svg>
          </div>
          <div>
            <div class="text-slate-900 font-extrabold text-lg leading-tight">Admin TIK POLRI</div>
            <div class="text-slate-500 text-xs -mt-0.5">Kelola Data Website</div>
          </div>
        </div>
        <div class="flex items-center gap-3">
          <div class="h-9 w-px bg-slate-200 mx-1"></div>
          <div class="flex items-center gap-3">
            <span class="hidden sm:inline text-sm text-slate-600">{{ auth()->user()->name }}</span>
            <div class="w-9 h-9 rounded-full bg-gradient-to-br from-yellow-400 to-amber-500 text-white grid place-items-center font-bold shadow-lg">{{ substr(auth()->user()->name, 0, 1) }}</div>
            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button type="submit" class="text-slate-500 hover:text-blue-700" title="Logout">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path></svg>
                </button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </header>

  <main class="max-w-7xl mx-auto px-4 sm:px-6 py-8 w-full">
    @yield('content')
  </main>

  @vite('resources/js/app.js')
  @stack('scripts')
</body>
</html>