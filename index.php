<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Siddharth | SEO Outreach Team Lead</title>
    
    <!-- Modern Premium Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    
    <!-- Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <script>
        tailwind.config = {
            darkMode: 'class',
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['"Plus Jakarta Sans"', 'sans-serif'],
                    },
                    colors: {
                        base: '#05030A', // Ultra deep space lavender
                        surface: 'rgba(20, 15, 35, 0.4)',
                        surfaceHover: 'rgba(30, 20, 50, 0.6)',
                        lavender: {
                            100: '#f3e8ff',
                            200: '#e9d5ff',
                            300: '#d8b4fe',
                            400: '#c084fc', // Bright Lavender Accent
                            500: '#a855f7',
                            600: '#9333ea',
                            900: '#3b0764',
                        }
                    },
                    animation: {
                        'blob': 'blob 10s infinite',
                        'blob-reverse': 'blob-reverse 12s infinite',
                        'float': 'float 6s ease-in-out infinite',
                        'spin-slow': 'spin 8s linear infinite',
                    },
                    keyframes: {
                        blob: {
                            '0%': { transform: 'translate(0px, 0px) scale(1)' },
                            '33%': { transform: 'translate(40px, -60px) scale(1.1)' },
                            '66%': { transform: 'translate(-30px, 30px) scale(0.9)' },
                            '100%': { transform: 'translate(0px, 0px) scale(1)' }
                        },
                        'blob-reverse': {
                            '0%': { transform: 'translate(0px, 0px) scale(1)' },
                            '33%': { transform: 'translate(-40px, 60px) scale(1.2)' },
                            '66%': { transform: 'translate(30px, -30px) scale(0.8)' },
                            '100%': { transform: 'translate(0px, 0px) scale(1)' }
                        },
                        float: {
                            '0%, 100%': { transform: 'translateY(0)' },
                            '50%': { transform: 'translateY(-15px)' }
                        }
                    }
                }
            }
        }
    </script>

    <style>
        /* Modern Scrollbar */
        ::-webkit-scrollbar { width: 6px; }
        ::-webkit-scrollbar-track { background: #05030A; }
        ::-webkit-scrollbar-thumb { background: #3b0764; border-radius: 10px; }
        ::-webkit-scrollbar-thumb:hover { background: #9333ea; }

        body {
            background-color: #05030A;
            color: #e2e8f0;
        }

        /* SVG Noise Overlay for Premium Studio Look */
        .bg-noise {
            position: fixed;
            inset: 0;
            z-index: 50;
            pointer-events: none;
            background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 200 200' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='noiseFilter'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.8' numOctaves='3' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23noiseFilter)'/%3E%3C/svg%3E");
            opacity: 0.035;
        }

        /* Animated Gradient Text */
        .text-gradient {
            background: linear-gradient(to right, #e9d5ff, #c084fc, #f472b6, #c084fc);
            background-size: 200% auto;
            color: transparent;
            -webkit-background-clip: text;
            background-clip: text;
            animation: textGradient 4s linear infinite;
        }

        @keyframes textGradient {
            to { background-position: 200% center; }
        }

        /* Scroll Reveal Utility Classes */
        .reveal {
            opacity: 0;
            transform: translateY(30px);
            transition: all 0.8s cubic-bezier(0.16, 1, 0.3, 1);
        }
        .reveal.active {
            opacity: 1;
            transform: translateY(0);
        }

        /* Glowing Border Animation for Buttons/Cards */
        .glow-border {
            position: relative;
            z-index: 1;
        }
        .glow-border::before {
            content: '';
            position: absolute;
            inset: -2px;
            border-radius: inherit;
            background: conic-gradient(from 0deg, #a855f7, transparent 30%, transparent 70%, #f472b6);
            z-index: -1;
            animation: spin 4s linear infinite;
            opacity: 0;
            transition: opacity 0.3s ease;
        }
        .glow-border:hover::before {
            opacity: 1;
        }
        .glow-border::after {
            content: '';
            position: absolute;
            inset: 1px;
            background: #05030A; /* Match body bg */
            border-radius: inherit;
            z-index: -1;
        }

        /* Sibling Fade Effect for Lists */
        .hover-group:hover .hover-item:not(:hover) {
            opacity: 0.4;
            filter: blur(1px);
        }
        .hover-item {
            transition: all 0.4s ease;
        }

        .break-inside-avoid { break-inside: avoid; }
    </style>
</head>
<body class="antialiased selection:bg-lavender-500/30 selection:text-lavender-100 overflow-x-hidden relative">

    <!-- Global Background Elements -->
    <div class="bg-noise"></div>
    
    <!-- Ambient Floating Orbs -->
    <div class="fixed top-0 left-0 w-full h-full overflow-hidden -z-10 pointer-events-none mix-blend-screen">
        <div class="absolute top-[-10%] left-[-10%] w-[500px] h-[500px] bg-lavender-600/20 rounded-full blur-[120px] animate-blob"></div>
        <div class="absolute top-[40%] right-[-10%] w-[600px] h-[600px] bg-fuchsia-600/10 rounded-full blur-[150px] animate-blob-reverse animation-delay-2000"></div>
        <div class="absolute bottom-[-20%] left-[20%] w-[700px] h-[700px] bg-indigo-600/10 rounded-full blur-[130px] animate-blob animation-delay-4000"></div>
    </div>

    <!-- Toast Container -->
    <div id="toast-container" class="fixed bottom-4 right-4 z-50 flex flex-col gap-2"></div>

    <!-- Navigation -->
    <nav class="fixed w-full bg-[#05030A]/60 backdrop-blur-xl border-b border-white/5 z-40 top-0 transition-all duration-300">
        <div class="max-w-6xl mx-auto px-6 h-20 flex items-center justify-between">
            <a href="#" class="font-bold text-2xl tracking-tight text-white group">
                Siddharth<span class="text-lavender-400 transition-colors group-hover:text-fuchsia-400">.</span>
            </a>
            <div class="hidden md:flex gap-8 text-sm font-medium text-slate-300">
                <a href="#about" class="hover:text-lavender-300 transition-colors">About</a>
                <a href="#showcase" class="hover:text-lavender-300 transition-colors">Outreach Wins</a>
                <a href="#process" class="hover:text-lavender-300 transition-colors">Process</a>
            </div>
            <button onclick="showToast('Connecting to Calendly...', 'info')" class="text-sm font-bold bg-white text-base px-5 py-2.5 rounded-full hover:bg-lavender-100 transition-colors hover:shadow-[0_0_20px_rgba(192,132,252,0.4)]">
                Let's Chat
            </button>
        </div>
    </nav>

    <!-- 1. Hero Section -->
    <header class="relative pt-40 pb-24 lg:pt-56 lg:pb-32 overflow-hidden flex flex-col items-center justify-center min-h-[90vh]">
        <div class="max-w-6xl mx-auto px-6 relative z-10 w-full">
            <div class="max-w-4xl mx-auto text-center flex flex-col items-center">
                
                <!-- Status Pill -->
                <div class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-white/5 backdrop-blur-md border border-white/10 text-lavender-200 text-sm font-semibold mb-8 hover:bg-white/10 transition-colors cursor-default">
                    <span class="relative flex h-2.5 w-2.5">
                      <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-lavender-400 opacity-75"></span>
                      <span class="relative inline-flex rounded-full h-2.5 w-2.5 bg-lavender-500"></span>
                    </span>
                    Available for full-time roles
                </div>
                
                <h1 class="text-5xl lg:text-7xl font-extrabold text-white leading-[1.1] mb-6 tracking-tight animate-float">
                    I Get Links From <br />
                    <span class="text-gradient">Sites That Say No.</span>
                </h1>
                
                <p class="text-xl lg:text-2xl text-slate-400 leading-relaxed mb-12 max-w-3xl font-light">
                    Placement credits include <span class="text-white font-medium">Cloudways, ClickUp, Whatagraph,</span> and 50+ DR 50+ domains — won through outreach so sharp, editors thank me for sending it.
                </p>
                <!-- Floating Stats Grid (Glassmorphism) -->
                <div class="grid grid-cols-2 md:grid-cols-4 gap-4 mb-14 w-full reveal">
                    <div class="bg-surface backdrop-blur-xl p-6 rounded-2xl border border-white/10 hover:border-lavender-500/50 transition-all hover:-translate-y-1 hover:shadow-[0_10px_40px_-10px_rgba(168,85,247,0.2)] group">
                        <div class="text-3xl font-extrabold text-white mb-1 group-hover:text-lavender-300 transition-colors">18–32%</div>
                        <div class="text-xs text-lavender-200/70 font-semibold uppercase tracking-wider">Avg. Reply Rate</div>
                    </div>
                    <div class="bg-surface backdrop-blur-xl p-6 rounded-2xl border border-white/10 hover:border-lavender-500/50 transition-all hover:-translate-y-1 hover:shadow-[0_10px_40px_-10px_rgba(168,85,247,0.2)] group">
                        <div class="text-3xl font-extrabold text-white mb-1 group-hover:text-lavender-300 transition-colors">9–14%</div>
                        <div class="text-xs text-lavender-200/70 font-semibold uppercase tracking-wider">Placement Rate</div>
                    </div>
                    <div class="bg-surface backdrop-blur-xl p-6 rounded-2xl border border-white/10 hover:border-lavender-500/50 transition-all hover:-translate-y-1 hover:shadow-[0_10px_40px_-10px_rgba(168,85,247,0.2)] group">
                        <div class="text-3xl font-extrabold text-white mb-1 group-hover:text-lavender-300 transition-colors">500+</div>
                        <div class="text-xs text-lavender-200/70 font-semibold uppercase tracking-wider">DR 50+ Domains</div>
                    </div>
                    <div class="bg-surface backdrop-blur-xl p-6 rounded-2xl border border-white/10 hover:border-lavender-500/50 transition-all hover:-translate-y-1 hover:shadow-[0_10px_40px_-10px_rgba(168,85,247,0.2)] group">
                        <div class="text-3xl font-extrabold text-white mb-1 group-hover:text-lavender-300 transition-colors">200+</div>
                        <div class="text-xs text-lavender-200/70 font-semibold uppercase tracking-wider">Positive Editor Replies</div>
                    </div>
                </div>
                <!-- Glow Buttons -->
                <div class="flex flex-col sm:flex-row gap-5 reveal delay-100 w-full sm:w-auto">
                    <a href="#showcase" class="glow-border relative inline-flex justify-center items-center gap-2 px-8 py-4 rounded-full font-bold text-white hover:text-lavender-100 transition-all">
                        <span class="relative z-10 flex items-center gap-2">See Exactly How I Do It <i class="fa-solid fa-arrow-down text-sm"></i></span>
                    </a>
                    <button onclick="showToast('Resume PDF is being generated...', 'success')" class="inline-flex justify-center items-center gap-2 bg-white/5 border border-white/10 hover:bg-white/10 backdrop-blur-md text-white px-8 py-4 rounded-full font-bold transition-all hover:shadow-[0_0_20px_rgba(255,255,255,0.1)]">
                        <i class="fa-regular fa-file-pdf text-lavender-400"></i> PDF Resume
                    </button>
                </div>
            </div>
        </div>
        
        <!-- Bottom Fade -->
        <div class="absolute bottom-0 left-0 w-full h-32 bg-gradient-to-t from-[#05030A] to-transparent z-20"></div>
    </header>
    <!-- 2. About / Quick Bio -->
    <section id="about" class="py-24 relative z-20">
        <div class="max-w-6xl mx-auto px-6 reveal">
            <div class="grid md:grid-cols-12 gap-16 items-center">
                
                <div class="md:col-span-7">
                    <div class="inline-flex items-center gap-2 mb-4">
                        <div class="w-8 h-[1px] bg-lavender-500"></div>
                        <span class="text-lavender-400 font-semibold tracking-widest text-sm uppercase">Philosophy</span>
                    </div>
                    <h2 class="text-4xl lg:text-5xl font-bold text-white mb-8 leading-tight">Most outreach is noise. <br/><span class="text-lavender-300">Mine is a reason to reply.</span></h2>
                    
                    <div class="space-y-6 text-lg text-slate-400 font-light mb-10 border-l border-white/10 pl-6">
                        <p>
                            I built my process around one uncomfortable truth: <strong class="text-white font-medium">editors delete 95% of outreach without reading past the subject line.</strong> So I engineered every element — the research, the angle, the opener — to feel like a useful message from a trusted peer, not a pitch from a stranger.
                        </p>
                        <p>
                            The result? Reply rates that make hiring managers do a double-take, and a placement roster that compounds over time into genuine domain authority.
                        </p>
                    </div>
                    
                    <ul class="space-y-5 hover-group">
                        <li class="flex items-start gap-4 hover-item bg-white/5 p-4 rounded-xl border border-transparent hover:border-white/10 backdrop-blur-sm cursor-default">
                            <div class="mt-1 flex-shrink-0 w-6 h-6 rounded-full bg-lavender-500/20 flex items-center justify-center border border-lavender-500/30 text-lavender-400">
                                <i class="fa-solid fa-check text-xs"></i>
                            </div>
                            <span class="text-slate-300"><strong class="text-white font-semibold">Sniper prospecting, not buckshot:</strong> Ahrefs-powered research with manual vetting to ensure every target is worth a personalized pitch — and actually capable of moving the needle.</span>
                        </li>
                        <li class="flex items-start gap-4 hover-item bg-white/5 p-4 rounded-xl border border-transparent hover:border-white/10 backdrop-blur-sm cursor-default">
                            <div class="mt-1 flex-shrink-0 w-6 h-6 rounded-full bg-lavender-500/20 flex items-center justify-center border border-lavender-500/30 text-lavender-400">
                                <i class="fa-solid fa-check text-xs"></i>
                            </div>
                            <span class="text-slate-300"><strong class="text-white font-semibold">Personalization that scales:</strong> I've cracked the playbook for writing emails that feel handcrafted — without sacrificing the volume a growing SEO program demands.</span>
                        </li>
                        <li class="flex items-start gap-4 hover-item bg-white/5 p-4 rounded-xl border border-transparent hover:border-white/10 backdrop-blur-sm cursor-default">
                            <div class="mt-1 flex-shrink-0 w-6 h-6 rounded-full bg-lavender-500/20 flex items-center justify-center border border-lavender-500/30 text-lavender-400">
                                <i class="fa-solid fa-check text-xs"></i>
                            </div>
                            <span class="text-slate-300"><strong class="text-white font-semibold">Angles that unlock doors:</strong> Value swaps, broken-link fixes, expert roundups — each matched precisely to the prospect so the ask becomes obvious before it's even made.</span>
                        </li>
                    </ul>
                </div>
                <div class="md:col-span-5">
                    <!-- Premium Glass Testimonial Card -->
                    <div class="relative group">
                        <!-- Glowing backdrop shadow -->
                        <div class="absolute -inset-1 bg-gradient-to-r from-lavender-600 to-fuchsia-600 rounded-3xl blur-xl opacity-20 group-hover:opacity-40 transition duration-1000 group-hover:duration-200"></div>
                        
                        <div class="relative bg-[#0c0817] p-10 rounded-3xl border border-white/10 ring-1 ring-white/5">
                            <i class="fa-solid fa-quote-left text-5xl text-lavender-500/20 absolute top-8 left-8"></i>
                            <p class="text-slate-300 relative z-10 text-lg mb-8 pt-6 leading-relaxed font-light">
                                "Siddharth's emails consistently get opened and replied to — which is incredibly rare in modern outreach. His attention to personalization is the reason our DR50+ placements doubled last quarter."
                            </p>
                            <div class="flex items-center gap-4 pt-6 border-t border-white/5">
                                <div class="w-14 h-14 rounded-full bg-gradient-to-br from-lavender-500 to-indigo-600 p-[2px]">
                                    <div class="w-full h-full bg-[#0c0817] rounded-full flex items-center justify-center text-white font-bold text-lg">JD</div>
                                </div>
                                <div>
                                    <div class="font-bold text-white tracking-wide">Agency Outreach Manager</div>
                                    <div class="text-sm text-lavender-400/80">Former Collaborator</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Divider -->
    <div class="h-[1px] w-full max-w-6xl mx-auto bg-gradient-to-r from-transparent via-white/10 to-transparent my-12"></div>
    <!-- 3. Outreach Mastery Showcase -->
    <section id="showcase" class="py-24 relative z-20">
        <div class="max-w-6xl mx-auto px-6">
            
            <div class="text-center mb-20 reveal">
                <h2 class="text-4xl lg:text-5xl font-bold text-white mb-6">The Outreach That Actually Works</h2>
                <p class="text-xl text-slate-400 max-w-2xl mx-auto font-light">Not theory. Real editor praise, undeniable proof, and high-DR acquisitions — the exact results of the <span class="text-lavender-300 font-medium">10%+ placement engine.</span></p>
            </div>

            <!-- Real Proof Screenshots -->
            <div class="mb-32 reveal">
                <div class="flex items-center gap-4 mb-10">
                    <div class="w-12 h-12 rounded-2xl bg-lavender-500/10 flex items-center justify-center border border-lavender-500/20 shadow-[0_0_15px_rgba(168,85,247,0.15)]">
                        <i class="fa-solid fa-camera text-xl text-lavender-400"></i>
                    </div>
                    <div>
                        <h3 class="text-3xl font-bold text-white mb-1">Undeniable Proof: The Inbox</h3>
                        <p class="text-slate-400 text-sm font-light">While others send spam, my outreach gets praised, opened, and accepted.</p>
                    </div>
                </div>

                <div class="columns-1 lg:columns-2 gap-6 space-y-6">
                    
                    <!-- Screenshot Card 1 -->
                    <div class="break-inside-avoid bg-surface backdrop-blur-md p-3 rounded-2xl border border-white/10 hover:border-lavender-500/50 transition-all group shadow-xl">
                        <div class="mb-3 px-2 pt-2 flex items-center justify-between">
                            <span class="text-sm font-bold text-lavender-300">"The best link exchange pitch"</span>
                            <i class="fa-solid fa-award text-yellow-400 text-xs shadow-[0_0_10px_rgba(250,204,21,0.5)]"></i>
                        </div>
                        <div class="rounded-xl overflow-hidden border border-white/5 bg-[#05030A]">
                            <img src="Pitch Praise.png" alt="Pitch Praise" class="w-full h-auto opacity-90 group-hover:opacity-100 group-hover:scale-[1.02] transition-all duration-500" />
                        </div>
                    </div>

                    <!-- Screenshot Card 2 -->
                    <div class="break-inside-avoid bg-surface backdrop-blur-md p-3 rounded-2xl border border-white/10 hover:border-lavender-500/50 transition-all group shadow-xl">
                        <div class="mb-3 px-2 pt-2 flex items-center justify-between">
                            <span class="text-sm font-bold text-lavender-300">Curiosity-Driven Subject Line</span>
                            <i class="fa-regular fa-eye text-lavender-400 text-xs"></i>
                        </div>
                        <div class="rounded-xl overflow-hidden border border-white/5 bg-[#05030A]">
                            <img src="Subject Line 1.png" alt="Subject Line Curiosity" class="w-full h-auto opacity-90 group-hover:opacity-100 group-hover:scale-[1.02] transition-all duration-500" />
                        </div>
                    </div>

                    <!-- Screenshot Card 3 -->
                    <div class="break-inside-avoid bg-surface backdrop-blur-md p-3 rounded-2xl border border-white/10 hover:border-lavender-500/50 transition-all group shadow-xl">
                        <div class="mb-3 px-2 pt-2 flex items-center justify-between">
                            <span class="text-sm font-bold text-lavender-300">"Interesting Subject Line" Praise</span>
                            <i class="fa-solid fa-check-double text-emerald-400 text-xs"></i>
                        </div>
                        <div class="rounded-xl overflow-hidden border border-white/5 bg-[#05030A]">
                            <img src="Subject Line 2.png" alt="Subject Line Praise" class="w-full h-auto opacity-90 group-hover:opacity-100 group-hover:scale-[1.02] transition-all duration-500" />
                        </div>
                    </div>

                    <!-- Screenshot Card 4 -->
                    <div class="break-inside-avoid bg-surface backdrop-blur-md p-3 rounded-2xl border border-white/10 hover:border-lavender-500/50 transition-all group shadow-xl">
                        <div class="mb-3 px-2 pt-2 flex items-center justify-between">
                            <span class="text-sm font-bold text-lavender-300">Direct Link Agreement</span>
                            <i class="fa-solid fa-link text-indigo-400 text-xs"></i>
                        </div>
                        <div class="rounded-xl overflow-hidden border border-white/5 bg-[#05030A]">
                            <img src="Deals Front.png" alt="Direct Agreement" class="w-full h-auto opacity-90 group-hover:opacity-100 group-hover:scale-[1.02] transition-all duration-500" />
                        </div>
                    </div>

                    <!-- Screenshot Card 5 -->
                    <div class="break-inside-avoid bg-surface backdrop-blur-md p-3 rounded-2xl border border-white/10 hover:border-lavender-500/50 transition-all group shadow-xl">
                        <div class="mb-3 px-2 pt-2 flex items-center justify-between">
                            <span class="text-sm font-bold text-lavender-300">Successful Negotiation</span>
                            <i class="fa-solid fa-handshake text-fuchsia-400 text-xs"></i>
                        </div>
                        <div class="rounded-xl overflow-hidden border border-white/5 bg-[#05030A]">
                            <img src="Negotiation Power.png" alt="Successful Negotiation" class="w-full h-auto opacity-90 group-hover:opacity-100 group-hover:scale-[1.02] transition-all duration-500" />
                        </div>
                    </div>

                    <!-- Screenshot Card 6 -->
                    <div class="break-inside-avoid bg-surface backdrop-blur-md p-3 rounded-2xl border border-white/10 hover:border-lavender-500/50 transition-all group shadow-xl">
                        <div class="mb-3 px-2 pt-2 flex items-center justify-between">
                            <span class="text-sm font-bold text-lavender-300">Instant Interest</span>
                            <i class="fa-solid fa-bolt text-yellow-400 text-xs"></i>
                        </div>
                        <div class="rounded-xl overflow-hidden border border-white/5 bg-[#05030A]">
                            <img src="Interested Right Away.png" alt="Instant Interest" class="w-full h-auto opacity-90 group-hover:opacity-100 group-hover:scale-[1.02] transition-all duration-500" />
                        </div>
                    </div>

                    <!-- Screenshot Card 7 -->
                    <div class="break-inside-avoid bg-surface backdrop-blur-md p-3 rounded-2xl border border-white/10 hover:border-lavender-500/50 transition-all group shadow-xl">
                        <div class="mb-3 px-2 pt-2 flex items-center justify-between">
                            <span class="text-sm font-bold text-lavender-300">Moving Down the Funnel</span>
                            <i class="fa-solid fa-filter text-blue-400 text-xs"></i>
                        </div>
                        <div class="rounded-xl overflow-hidden border border-white/5 bg-[#05030A]">
                            <img src="Funneling Down.png" alt="Moving Down Funnel" class="w-full h-auto opacity-90 group-hover:opacity-100 group-hover:scale-[1.02] transition-all duration-500" />
                        </div>
                    </div>

                    <!-- Screenshot Card 8 -->
                    <div class="break-inside-avoid bg-surface backdrop-blur-md p-3 rounded-2xl border border-white/10 hover:border-lavender-500/50 transition-all group shadow-xl">
                        <div class="mb-3 px-2 pt-2 flex items-center justify-between">
                            <span class="text-sm font-bold text-lavender-300">Quick Collaboration</span>
                            <i class="fa-solid fa-reply-all text-emerald-400 text-xs"></i>
                        </div>
                        <div class="rounded-xl overflow-hidden border border-white/5 bg-[#05030A]">
                            <img src="Quick Agreement.png" alt="Quick Agreement" class="w-full h-auto opacity-90 group-hover:opacity-100 group-hover:scale-[1.02] transition-all duration-500" />
                        </div>
                    </div>

                </div>
            </div>

            <!-- D. Visual Proof -->
            <div class="reveal">
                <div class="flex items-center gap-4 mb-10">
                    <div class="w-12 h-12 rounded-2xl bg-indigo-500/10 flex items-center justify-center border border-indigo-500/20 shadow-[0_0_15px_rgba(99,102,241,0.15)]">
                        <i class="fa-solid fa-link text-xl text-indigo-400"></i>
                    </div>
                    <h3 class="text-3xl font-bold text-white">Placements You Can Verify</h3>
                </div>
                
                <div class="flex flex-col gap-5">
                    <!-- Placement 1 -->
                    <div class="bg-surface backdrop-blur-xl border border-white/10 hover:border-indigo-500/40 rounded-2xl p-6 transition-all group flex flex-col md:flex-row items-start md:items-center justify-between gap-6">
                        <div class="flex items-center gap-5">
                            <div class="w-14 h-14 rounded-xl bg-gradient-to-br from-blue-600 to-indigo-600 flex items-center justify-center text-white text-2xl shadow-lg shrink-0"><i class="fa-solid fa-cloud"></i></div>
                            <div>
                                <h4 class="text-xl font-bold text-white group-hover:text-indigo-300 transition-colors">Cloudways</h4>
                                <div class="text-sm text-slate-400 mt-1">Resource Page Inclusion</div>
                            </div>
                        </div>
                        
                        <div class="flex flex-wrap sm:flex-nowrap items-center gap-4 w-full md:w-auto">
                            <div class="flex gap-3">
                                <span class="bg-[#120a21] border border-white/10 px-4 py-2 rounded-lg text-sm font-mono text-lavender-300 shadow-inner">DR 89</span>
                                <span class="bg-[#120a21] border border-white/10 px-4 py-2 rounded-lg text-sm font-mono text-emerald-400 shadow-inner">Traffic: 2.1M</span>
                            </div>
                            <a href="#" class="w-full sm:w-auto text-center bg-indigo-500/10 hover:bg-indigo-500/20 text-indigo-300 border border-indigo-500/30 px-6 py-2 rounded-lg text-sm font-bold transition-all flex items-center justify-center gap-2 whitespace-nowrap">
                                View Placement <i class="fa-solid fa-arrow-up-right-from-square text-xs"></i>
                            </a>
                        </div>
                    </div>

                    <!-- Placement 2 -->
                    <div class="bg-surface backdrop-blur-xl border border-white/10 hover:border-fuchsia-500/40 rounded-2xl p-6 transition-all group flex flex-col md:flex-row items-start md:items-center justify-between gap-6">
                        <div class="flex items-center gap-5">
                            <div class="w-14 h-14 rounded-xl bg-gradient-to-br from-fuchsia-600 to-pink-600 flex items-center justify-center text-white text-2xl shadow-lg shrink-0"><i class="fa-solid fa-bolt"></i></div>
                            <div>
                                <h4 class="text-xl font-bold text-white group-hover:text-fuchsia-300 transition-colors">ClickUp</h4>
                                <div class="text-sm text-slate-400 mt-1">Guest Post Feature</div>
                            </div>
                        </div>
                        
                        <div class="flex flex-wrap sm:flex-nowrap items-center gap-4 w-full md:w-auto">
                            <div class="flex gap-3">
                                <span class="bg-[#120a21] border border-white/10 px-4 py-2 rounded-lg text-sm font-mono text-lavender-300 shadow-inner">DR 88</span>
                                <span class="bg-[#120a21] border border-white/10 px-4 py-2 rounded-lg text-sm font-mono text-emerald-400 shadow-inner">Traffic: 3.5M</span>
                            </div>
                            <a href="#" class="w-full sm:w-auto text-center bg-fuchsia-500/10 hover:bg-fuchsia-500/20 text-fuchsia-300 border border-fuchsia-500/30 px-6 py-2 rounded-lg text-sm font-bold transition-all flex items-center justify-center gap-2 whitespace-nowrap">
                                View Placement <i class="fa-solid fa-arrow-up-right-from-square text-xs"></i>
                            </a>
                        </div>
                    </div>

                    <!-- Placement 3 -->
                    <div class="bg-surface backdrop-blur-xl border border-white/10 hover:border-orange-500/40 rounded-2xl p-6 transition-all group flex flex-col md:flex-row items-start md:items-center justify-between gap-6">
                        <div class="flex items-center gap-5">
                            <div class="w-14 h-14 rounded-xl bg-gradient-to-br from-orange-500 to-red-500 flex items-center justify-center text-white text-2xl shadow-lg shrink-0"><i class="fa-brands fa-hubspot"></i></div>
                            <div>
                                <h4 class="text-xl font-bold text-white group-hover:text-orange-300 transition-colors">HubSpot</h4>
                                <div class="text-sm text-slate-400 mt-1">Expert Quote Link</div>
                            </div>
                        </div>
                        
                        <div class="flex flex-wrap sm:flex-nowrap items-center gap-4 w-full md:w-auto">
                            <div class="flex gap-3">
                                <span class="bg-[#120a21] border border-white/10 px-4 py-2 rounded-lg text-sm font-mono text-lavender-300 shadow-inner">DR 93</span>
                                <span class="bg-[#120a21] border border-white/10 px-4 py-2 rounded-lg text-sm font-mono text-emerald-400 shadow-inner">Traffic: 15M+</span>
                            </div>
                            <a href="#" class="w-full sm:w-auto text-center bg-orange-500/10 hover:bg-orange-500/20 text-orange-300 border border-orange-500/30 px-6 py-2 rounded-lg text-sm font-bold transition-all flex items-center justify-center gap-2 whitespace-nowrap">
                                View Placement <i class="fa-solid fa-arrow-up-right-from-square text-xs"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- 4. Process / How I Work -->
    <section id="process" class="py-32 relative z-20 bg-gradient-to-b from-transparent via-[#0f091f]/50 to-transparent border-y border-white/5">
        <div class="max-w-6xl mx-auto px-6">
            <div class="text-center mb-24 reveal">
                <h2 class="text-4xl lg:text-5xl font-bold text-white mb-6">The System Behind the Results</h2>
                <p class="text-xl text-slate-400 max-w-2xl mx-auto font-light">High reply rates aren't luck — they're a repeatable process. Here's the exact framework I run to land quality links.</p>
            </div>
            
            <!-- Process Timeline Framework -->
            <div class="relative max-w-5xl mx-auto reveal">
                <!-- Center Line (Desktop) -->
                <div class="hidden md:block absolute left-1/2 top-0 bottom-0 w-1 bg-gradient-to-b from-lavender-500/30 via-fuchsia-500/30 to-indigo-500/30 -translate-x-1/2 rounded-full"></div>

                <!-- Step 1 -->
                <div class="relative flex flex-col md:flex-row justify-between items-center mb-16 group">
                    <!-- Left Content -->
                    <div class="w-full md:w-[45%] md:text-right pr-0 md:pr-10 mb-6 md:mb-0 relative z-10 transition-transform duration-300 md:group-hover:-translate-x-2">
                        <div class="md:hidden flex w-12 h-12 rounded-full bg-[#0c0817] border-2 border-lavender-500 items-center justify-center text-lavender-400 font-bold mb-4 shadow-[0_0_15px_rgba(168,85,247,0.4)]">1</div>
                        <h4 class="text-2xl font-bold text-white mb-3">Keyword & Competitor Intel</h4>
                        <p class="text-slate-400 font-light leading-relaxed">I map every linkable asset, then identify exactly who is linking to competing content — so I know which doors are already open before I knock.</p>
                    </div>
                    <!-- Center Node -->
                    <div class="hidden md:flex absolute left-1/2 -translate-x-1/2 w-14 h-14 rounded-full bg-[#05030A] border-[3px] border-lavender-500 items-center justify-center text-lavender-400 font-bold text-xl z-20 group-hover:scale-110 group-hover:bg-lavender-500/20 transition-all shadow-[0_0_20px_rgba(168,85,247,0.5)]">1</div>
                    <!-- Right Spacer -->
                    <div class="hidden md:block w-[45%]"></div>
                </div>

                <!-- Step 2 -->
                <div class="relative flex flex-col md:flex-row justify-between items-center mb-16 group">
                    <div class="hidden md:block w-[45%]"></div>
                    <div class="hidden md:flex absolute left-1/2 -translate-x-1/2 w-14 h-14 rounded-full bg-[#05030A] border-[3px] border-fuchsia-500 items-center justify-center text-fuchsia-400 font-bold text-xl z-20 group-hover:scale-110 group-hover:bg-fuchsia-500/20 transition-all shadow-[0_0_20px_rgba(217,70,239,0.5)]">2</div>
                    <div class="w-full md:w-[45%] md:text-left pl-0 md:pl-10 relative z-10 transition-transform duration-300 md:group-hover:translate-x-2">
                        <div class="md:hidden flex w-12 h-12 rounded-full bg-[#0c0817] border-2 border-fuchsia-500 items-center justify-center text-fuchsia-400 font-bold mb-4 shadow-[0_0_15px_rgba(217,70,239,0.4)]">2</div>
                        <h4 class="text-2xl font-bold text-white mb-3">Surgical Prospecting</h4>
                        <p class="text-slate-400 font-light leading-relaxed">Strict DR, traffic, and topical relevancy filters eliminate every site that wouldn't move the needle. No PBNs. No link farms. Only targets worth a personalized pitch.</p>
                    </div>
                </div>

                <!-- Step 3 -->
                <div class="relative flex flex-col md:flex-row justify-between items-center mb-16 group">
                    <div class="w-full md:w-[45%] md:text-right pr-0 md:pr-10 mb-6 md:mb-0 relative z-10 transition-transform duration-300 md:group-hover:-translate-x-2">
                        <div class="md:hidden flex w-12 h-12 rounded-full bg-[#0c0817] border-2 border-blue-500 items-center justify-center text-blue-400 font-bold mb-4 shadow-[0_0_15px_rgba(59,130,246,0.4)]">3</div>
                        <h4 class="text-2xl font-bold text-white mb-3">Hyper-Personalization</h4>
                        <p class="text-slate-400 font-light leading-relaxed">I manually extract unique merge data — a recent article, a specific opinion, a content gap — so every opener reads like it was written for one person and one person only.</p>
                    </div>
                    <div class="hidden md:flex absolute left-1/2 -translate-x-1/2 w-14 h-14 rounded-full bg-[#05030A] border-[3px] border-blue-500 items-center justify-center text-blue-400 font-bold text-xl z-20 group-hover:scale-110 group-hover:bg-blue-500/20 transition-all shadow-[0_0_20px_rgba(59,130,246,0.5)]">3</div>
                    <div class="hidden md:block w-[45%]"></div>
                </div>

                <!-- Step 4 -->
                <div class="relative flex flex-col md:flex-row justify-between items-center mb-16 group">
                    <div class="hidden md:block w-[45%]"></div>
                    <div class="hidden md:flex absolute left-1/2 -translate-x-1/2 w-14 h-14 rounded-full bg-[#05030A] border-[3px] border-lavender-500 items-center justify-center text-lavender-400 font-bold text-xl z-20 group-hover:scale-110 group-hover:bg-lavender-500/20 transition-all shadow-[0_0_20px_rgba(168,85,247,0.5)]">4</div>
                    <div class="w-full md:w-[45%] md:text-left pl-0 md:pl-10 relative z-10 transition-transform duration-300 md:group-hover:translate-x-2">
                        <div class="md:hidden flex w-12 h-12 rounded-full bg-[#0c0817] border-2 border-lavender-500 items-center justify-center text-lavender-400 font-bold mb-4 shadow-[0_0_15px_rgba(168,85,247,0.4)]">4</div>
                        <h4 class="text-2xl font-bold text-white mb-3">The Right Angle, Every Time</h4>
                        <p class="text-slate-400 font-light leading-relaxed">Value swap, broken-link fix, or expert quote — each prospect gets matched to the template that removes the most friction from their yes. Never a one-size blast.</p>
                    </div>
                </div>

                <!-- Step 5 -->
                <div class="relative flex flex-col md:flex-row justify-between items-center mb-16 group">
                    <div class="w-full md:w-[45%] md:text-right pr-0 md:pr-10 mb-6 md:mb-0 relative z-10 transition-transform duration-300 md:group-hover:-translate-x-2">
                        <div class="md:hidden flex w-12 h-12 rounded-full bg-[#0c0817] border-2 border-fuchsia-500 items-center justify-center text-fuchsia-400 font-bold mb-4 shadow-[0_0_15px_rgba(217,70,239,0.4)]">5</div>
                        <h4 class="text-2xl font-bold text-white mb-3">Smart Send & Follow-Up</h4>
                        <p class="text-slate-400 font-light leading-relaxed">Sequences go out with intelligent timing windows. Follow-ups are crafted to be a genuine addition — not the kind of nudge that gets you blocklisted.</p>
                    </div>
                    <div class="hidden md:flex absolute left-1/2 -translate-x-1/2 w-14 h-14 rounded-full bg-[#05030A] border-[3px] border-fuchsia-500 items-center justify-center text-fuchsia-400 font-bold text-xl z-20 group-hover:scale-110 group-hover:bg-fuchsia-500/20 transition-all shadow-[0_0_20px_rgba(217,70,239,0.5)]">5</div>
                    <div class="hidden md:block w-[45%]"></div>
                </div>

                <!-- Step 6 -->
                <div class="relative flex flex-col md:flex-row justify-between items-center group">
                    <div class="hidden md:block w-[45%]"></div>
                    <div class="hidden md:flex absolute left-1/2 -translate-x-1/2 w-14 h-14 rounded-full bg-[#05030A] border-[3px] border-indigo-500 items-center justify-center text-indigo-400 font-bold text-xl z-20 group-hover:scale-110 group-hover:bg-indigo-500/20 transition-all shadow-[0_0_20px_rgba(99,102,241,0.5)]">6</div>
                    <div class="w-full md:w-[45%] md:text-left pl-0 md:pl-10 relative z-10 transition-transform duration-300 md:group-hover:translate-x-2">
                        <div class="md:hidden flex w-12 h-12 rounded-full bg-[#0c0817] border-2 border-indigo-500 items-center justify-center text-indigo-400 font-bold mb-4 shadow-[0_0_15px_rgba(99,102,241,0.4)]">6</div>
                        <h4 class="text-2xl font-bold text-white mb-3">Relationship Capital</h4>
                        <p class="text-slate-400 font-light leading-relaxed">Every editor who says yes gets logged in a CRM built for long-term partnership. A first placement is just the opening — the compounding starts after.</p>
                    </div>
                </div>
            </div>
            
            <!-- Tech Stack -->
            <div class="mt-32 reveal">
                <div class="text-center mb-10">
                    <span class="text-sm font-bold uppercase tracking-widest text-lavender-400">Mastered Tools & Stack</span>
                </div>
                <div class="flex flex-wrap justify-center gap-4 items-center max-w-4xl mx-auto">
                    <!-- Ahrefs -->
                    <div class="flex items-center gap-3 bg-surface border border-white/10 px-6 py-3.5 rounded-2xl text-sm font-bold text-slate-200 backdrop-blur-md hover:bg-white/10 hover:border-orange-500/50 hover:-translate-y-1 transition-all shadow-lg cursor-default group">
                        <i class="fa-solid fa-magnifying-glass-chart text-orange-500 text-lg group-hover:scale-110 transition-transform"></i> Ahrefs
                    </div>
                    <!-- SemRush -->
                    <div class="flex items-center gap-3 bg-surface border border-white/10 px-6 py-3.5 rounded-2xl text-sm font-bold text-slate-200 backdrop-blur-md hover:bg-white/10 hover:border-red-500/50 hover:-translate-y-1 transition-all shadow-lg cursor-default group">
                        <i class="fa-solid fa-fire-flame-curved text-red-500 text-lg group-hover:scale-110 transition-transform"></i> SemRush
                    </div>
                    <!-- Majestic -->
                    <div class="flex items-center gap-3 bg-surface border border-white/10 px-6 py-3.5 rounded-2xl text-sm font-bold text-slate-200 backdrop-blur-md hover:bg-white/10 hover:border-blue-500/50 hover:-translate-y-1 transition-all shadow-lg cursor-default group">
                        <i class="fa-solid fa-star text-blue-500 text-lg group-hover:scale-110 transition-transform"></i> Majestic
                    </div>
                    <!-- Pitchbox -->
                    <div class="flex items-center gap-3 bg-surface border border-white/10 px-6 py-3.5 rounded-2xl text-sm font-bold text-slate-200 backdrop-blur-md hover:bg-white/10 hover:border-emerald-500/50 hover:-translate-y-1 transition-all shadow-lg cursor-default group">
                        <i class="fa-solid fa-inbox text-emerald-500 text-lg group-hover:scale-110 transition-transform"></i> Pitchbox
                    </div>
                    <!-- Lemlist -->
                    <div class="flex items-center gap-3 bg-surface border border-white/10 px-6 py-3.5 rounded-2xl text-sm font-bold text-slate-200 backdrop-blur-md hover:bg-white/10 hover:border-pink-500/50 hover:-translate-y-1 transition-all shadow-lg cursor-default group">
                        <i class="fa-solid fa-paper-plane text-pink-500 text-lg group-hover:scale-110 transition-transform"></i> Lemlist
                    </div>
                    <!-- Hunter.io -->
                    <div class="flex items-center gap-3 bg-surface border border-white/10 px-6 py-3.5 rounded-2xl text-sm font-bold text-slate-200 backdrop-blur-md hover:bg-white/10 hover:border-orange-400/50 hover:-translate-y-1 transition-all shadow-lg cursor-default group">
                        <i class="fa-solid fa-crosshairs text-orange-400 text-lg group-hover:scale-110 transition-transform"></i> Hunter.io
                    </div>
                    <!-- Apollo -->
                    <div class="flex items-center gap-3 bg-surface border border-white/10 px-6 py-3.5 rounded-2xl text-sm font-bold text-slate-200 backdrop-blur-md hover:bg-white/10 hover:border-blue-300/50 hover:-translate-y-1 transition-all shadow-lg cursor-default group">
                        <i class="fa-solid fa-rocket text-blue-300 text-lg group-hover:scale-110 transition-transform"></i> Apollo
                    </div>
                    <!-- Gumloop -->
                    <div class="flex items-center gap-3 bg-surface border border-white/10 px-6 py-3.5 rounded-2xl text-sm font-bold text-slate-200 backdrop-blur-md hover:bg-white/10 hover:border-purple-400/50 hover:-translate-y-1 transition-all shadow-lg cursor-default group">
                        <i class="fa-solid fa-infinity text-purple-400 text-lg group-hover:scale-110 transition-transform"></i> Gumloop
                    </div>
                    <!-- AirTable -->
                    <div class="flex items-center gap-3 bg-surface border border-white/10 px-6 py-3.5 rounded-2xl text-sm font-bold text-slate-200 backdrop-blur-md hover:bg-white/10 hover:border-yellow-400/50 hover:-translate-y-1 transition-all shadow-lg cursor-default group">
                        <i class="fa-solid fa-table-cells text-yellow-400 text-lg group-hover:scale-110 transition-transform"></i> AirTable
                    </div>
                    <!-- Google Sheets -->
                    <div class="flex items-center gap-3 bg-surface border border-white/10 px-6 py-3.5 rounded-2xl text-sm font-bold text-slate-200 backdrop-blur-md hover:bg-white/10 hover:border-green-500/50 hover:-translate-y-1 transition-all shadow-lg cursor-default group">
                        <i class="fa-solid fa-file-excel text-green-500 text-lg group-hover:scale-110 transition-transform"></i> Google Sheets
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- 5. Closing / Next Steps -->
    <section class="py-32 relative overflow-hidden z-20">
        <!-- Intense glow behind CTA -->
        <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[800px] h-[500px] bg-lavender-600/20 rounded-[100%] blur-[120px] -z-10 pointer-events-none"></div>
        <div class="max-w-4xl mx-auto px-6 relative text-center reveal">
            <h2 class="text-5xl md:text-6xl font-bold text-white mb-8 tracking-tight">Your competitors are <br/> <span class="text-gradient">already building links.</span></h2>
            <p class="text-xl text-slate-400 mb-12 font-light max-w-2xl mx-auto">
                I'm open to full-time Link Building and Outreach roles in SaaS, agency, or in-house teams. If you want a system that compounds — not a one-time campaign — let's talk.
            </p>
            
            <div class="flex flex-col sm:flex-row justify-center gap-6 mb-16">
                <button onclick="showToast('Connecting to Calendly...', 'info')" class="glow-border relative inline-flex justify-center items-center gap-3 px-10 py-5 rounded-2xl font-bold text-white hover:text-lavender-100 transition-all text-lg shadow-[0_0_40px_rgba(168,85,247,0.3)]">
                    <span class="relative z-10 flex items-center gap-3"><i class="fa-regular fa-calendar-check text-xl"></i> Schedule an Interview</span>
                </button>
                <button onclick="showToast('Resume PDF download started', 'success')" class="inline-flex justify-center items-center gap-3 bg-white/5 border border-white/10 hover:bg-white/10 backdrop-blur-xl text-white px-10 py-5 rounded-2xl font-bold transition-all text-lg">
                    <i class="fa-regular fa-file-pdf text-lavender-400 text-xl"></i> View Resume
                </button>
            </div>
            
            <div class="inline-flex items-center gap-3 text-slate-300 bg-[#0c0817] px-8 py-4 rounded-full border border-white/10 hover:border-lavender-500/50 hover:bg-[#120a21] transition-all cursor-pointer group shadow-xl" onclick="copyEmail()">
                <i class="fa-regular fa-envelope text-lavender-400 group-hover:scale-110 transition-transform"></i>
                <span id="email-text" class="font-medium tracking-wide">hello@siddharth-outreach.com</span>
                <div class="w-[1px] h-4 bg-white/20 mx-2"></div>
                <i class="fa-regular fa-copy text-slate-500 group-hover:text-lavender-400 transition-colors" title="Copy to clipboard"></i>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-[#030206] py-10 border-t border-white/5 text-center text-slate-500 text-sm relative z-20">
        <div class="max-w-6xl mx-auto px-6 flex flex-col md:flex-row justify-between items-center gap-6">
            <div class="font-medium">&copy; 2026 Siddharth. All rights reserved.</div>
            <div class="flex items-center gap-3 bg-white/5 px-4 py-2 rounded-full border border-white/5 backdrop-blur-sm">
                <span class="relative flex h-2 w-2">
                  <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-emerald-400 opacity-75"></span>
                  <span class="relative inline-flex rounded-full h-2 w-2 bg-emerald-500"></span>
                </span>
                <span class="text-slate-400 font-medium tracking-wide text-xs">Updated March 2026</span>
            </div>
        </div>
    </footer>

    <!-- Interactive Scripts -->
    <script>
        // Scroll Reveal Logic
        const observerOptions = {
            root: null,
            rootMargin: '0px',
            threshold: 0.15
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('active');
                }
            });
        }, observerOptions);

        document.querySelectorAll('.reveal').forEach((el) => {
            observer.observe(el);
        });

        // Copy Email Function
        function copyEmail() {
            const email = "hello@siddharth-outreach.com";
            const tempInput = document.createElement("input");
            tempInput.value = email;
            document.body.appendChild(tempInput);
            tempInput.select();
            document.execCommand("copy");
            document.body.removeChild(tempInput);
            
            showToast('Email copied to clipboard!', 'success');
        }

        // Advanced Toast Notification
        function showToast(message, type = 'info') {
            const container = document.getElementById('toast-container');
            const toast = document.createElement('div');
            
            const bgClass = type === 'success' ? 'bg-lavender-600/90' : 'bg-[#120a21]/90';
            const borderClass = type === 'success' ? 'border-lavender-400/50' : 'border-white/10';
            const icon = type === 'success' ? '<i class="fa-solid fa-check-circle text-white"></i>' : '<i class="fa-solid fa-info-circle text-lavender-400"></i>';
            
            toast.className = `${bgClass} backdrop-blur-xl border ${borderClass} text-white px-6 py-4 rounded-2xl shadow-[0_10px_40px_rgba(0,0,0,0.5)] flex items-center gap-4 transform transition-all duration-300 translate-y-10 opacity-0`;
            toast.innerHTML = `<div class="text-xl">${icon}</div> <span class="font-medium tracking-wide">${message}</span>`;
            
            container.appendChild(toast);
            
            // Trigger animation
            requestAnimationFrame(() => {
                toast.classList.remove('translate-y-10', 'opacity-0');
            });
            
            // Remove
            setTimeout(() => {
                toast.classList.add('translate-y-10', 'opacity-0');
                setTimeout(() => {
                    if(container.contains(toast)) container.removeChild(toast);
                }, 300);
            }, 3000);
        }

        // Nav Blur on Scroll
        window.addEventListener('scroll', () => {
            const nav = document.querySelector('nav');
            if (window.scrollY > 50) {
                nav.classList.add('bg-[#05030A]/80', 'shadow-lg');
                nav.classList.remove('bg-[#05030A]/60');
            } else {
                nav.classList.remove('bg-[#05030A]/80', 'shadow-lg');
                nav.classList.add('bg-[#05030A]/60');
            }
        });
    </script>
</body>
</html>