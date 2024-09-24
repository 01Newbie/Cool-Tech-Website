<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <!-- Main Card for Logged-in Message -->
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("You're logged in!") }}
                </div>
            </div>

            <!-- Additional Cards for Dashboard Metrics -->
            <div class="mt-6 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                <!-- Metrics Card -->
                <div class="bg-white dark:bg-gray-800 p-4 rounded-lg shadow hover:shadow-lg transition-shadow">
                    <h3 class="text-lg font-medium">Metrics</h3>
                    <p>Your metrics overview...</p>
                </div>

                <!-- Recent Activity Card -->
                <div class="bg-white dark:bg-gray-800 p-4 rounded-lg shadow hover:shadow-lg transition-shadow">
                    <h3 class="text-lg font-medium">Recent Activity</h3>
                    <p>Activity details...</p>
                </div>

                <!-- Notifications Card -->
                <div class="bg-white dark:bg-gray-800 p-4 rounded-lg shadow hover:shadow-lg transition-shadow">
                    <h3 class="text-lg font-medium">Notifications</h3>
                    <p>Notification details...</p>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
