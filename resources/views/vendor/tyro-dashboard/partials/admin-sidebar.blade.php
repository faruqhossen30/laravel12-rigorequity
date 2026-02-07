<aside class="sidebar" id="sidebar">
    <div class="sidebar-header">
        <a href="{{ route('tyro-dashboard.index') }}" class="sidebar-logo">
            <div class="sidebar-logo-icon">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M13 10V3L4 14h7v7l9-11h-7z" />
                </svg>
            </div>
            <span class="sidebar-logo-text">{{ $branding['app_name'] ?? config('app.name', 'Laravel') }}</span>
        </a>
    </div>

    <nav class="sidebar-nav">
        <!-- Main Menu -->
        <div class="sidebar-section">
            <div class="sidebar-section-title">Menu</div>
            <a href="{{ route('tyro-dashboard.index') }}" class="sidebar-link {{ request()->routeIs('tyro-dashboard.index') ? 'active' : '' }}">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                </svg>
                Dashboard
            </a>
            <a href="{{ route('tyro-dashboard.profile') }}" class="sidebar-link {{ request()->routeIs('tyro-dashboard.profile*') ? 'active' : '' }}">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                </svg>
                My Profile
            </a>
        </div>

        <!-- Admin Menu -->
        <div class="sidebar-section">
            <div class="sidebar-section-title">Administration</div>
            <a href="{{ route('admin.projects.index') }}" class="sidebar-link {{ request()->routeIs('admin.projects.*') ? 'active' : '' }}">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                </svg>
                Projects
            </a>
            <a href="{{ route('admin.contacts.index') }}" class="sidebar-link {{ request()->routeIs('admin.contacts.*') ? 'active' : '' }}">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                </svg>
                Contacts
            </a>
            <div class="sidebar-group {{ request()->routeIs('settings.*') ? 'active' : '' }}" x-data="{ open: {{ request()->routeIs('settings.*') ? 'true' : 'false' }} }">
                <button @click="open = !open" class="sidebar-link w-full justify-between" :class="{ 'active': open }">
                    <div class="flex items-center gap-3">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                        </svg>
                        Settings
                    </div>
                    <svg class="w-4 h-4 transition-transform duration-200" :class="{ 'rotate-180': open }" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </button>
                <div x-show="open" x-collapse class="pl-4 mt-1 space-y-1">
                    <a href="{{ route('settings.homepage') }}" class="sidebar-link text-sm {{ request()->routeIs('settings.homepage') ? 'active' : '' }}">
                        Home Page Setting
                    </a>
                    <a href="{{ route('settings.about') }}" class="sidebar-link text-sm {{ request()->routeIs('settings.about') ? 'active' : '' }}">
                        About Page Setting
                    </a>
                    <a href="{{ route('settings.contact') }}" class="sidebar-link text-sm {{ request()->routeIs('settings.contact') ? 'active' : '' }}">
                        Contact Page Setting
                    </a>
                    <a href="{{ route('settings.investment') }}" class="sidebar-link text-sm {{ request()->routeIs('settings.investment') ? 'active' : '' }}">
                        Investment Page Setting
                    </a>
                    <a href="{{ route('settings.construction') }}" class="menu-item {{ request()->routeIs('settings.construction') ? 'active' : '' }}">
                        Construction Page Setting
                    </a>
                    <a href="{{ route('settings.development') }}" class="menu-item {{ request()->routeIs('settings.development') ? 'active' : '' }}">
                        Development Page Setting
                    </a>
                    <a href="{{ route('settings.public-sector') }}" class="menu-item {{ request()->routeIs('settings.public-sector') ? 'active' : '' }}">
                        Public Sector Page Setting
                    </a>
                </div>
            </div>
            <a href="{{ route('tyro-dashboard.users.index') }}" class="sidebar-link {{ request()->routeIs('tyro-dashboard.users.*') ? 'active' : '' }}">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                </svg>
                Users
            </a>
            <a href="{{ route('tyro-dashboard.roles.index') }}" class="sidebar-link {{ request()->routeIs('tyro-dashboard.roles.*') ? 'active' : '' }}">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                </svg>
                Roles
            </a>
            <a href="{{ route('tyro-dashboard.privileges.index') }}" class="sidebar-link {{ request()->routeIs('tyro-dashboard.privileges.*') ? 'active' : '' }}">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M15 7a2 2 0 012 2m4 0a6 6 0 01-7.743 5.743L11 17H9v2H7v2H4a1 1 0 01-1-1v-2.586a1 1 0 01.293-.707l5.964-5.964A6 6 0 1121 9z" />
                </svg>
                Privileges
            </a>
        </div>

        @if (!empty(config('tyro-dashboard.resources')))
            <div class="sidebar-section">
                <div class="sidebar-section-title">Resources</div>
                @foreach (config('tyro-dashboard.resources') as $key => $resource)
                    @php
                        // Check access (logic duplicated from Controller for view)
                        $canAccess = true;
                        if (isset($resource['roles']) && !empty($resource['roles'])) {
                            $canAccess = false;
                            $user = auth()->user();
                            if ($user && method_exists($user, 'tyroRoleSlugs')) {
                                $userRoles = $user->tyroRoleSlugs();
                                // Check allowed roles
                                foreach ($resource['roles'] as $role) {
                                    if (in_array($role, $userRoles)) {
                                        $canAccess = true;
                                        break;
                                    }
                                }
                                // Check readonly roles (if not already allowed)
                                if (!$canAccess && isset($resource['readonly']) && !empty($resource['readonly'])) {
                                    foreach ($resource['readonly'] as $role) {
                                        if (in_array($role, $userRoles)) {
                                            $canAccess = true;
                                            break;
                                        }
                                    }
                                }
                            }
                        }
                    @endphp

                    @if ($canAccess)
                        <a href="{{ route('tyro-dashboard.resources.index', $key) }}" class="sidebar-link {{ request()->is('*resources/' . $key . '*') ? 'active' : '' }}">
                            @if (isset($resource['icon']))
                                {!! $resource['icon'] !!}
                            @else
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10" />
                                </svg>
                            @endif
                            {{ $resource['title'] }}
                        </a>
                    @endif
                @endforeach
            </div>
        @endif
    </nav>
</aside>
