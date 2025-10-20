# Copilot Instructions for AI Coding Agents

## Project Overview
This is a Laravel-based PHP application using Livewire, Pest, and Volt. The codebase follows Laravel conventions but includes custom patterns for Livewire actions and Volt integration. The project structure is modular, with clear separation between HTTP controllers, Livewire components, models, and service providers.

## Key Architectural Patterns
- **Controllers**: Located in `app/Http/Controllers/`, handle HTTP requests and responses.
- **Livewire Components**: Found in `app/Livewire/`, especially `Actions/` for user-driven operations. Use Livewire's lifecycle and event system.
- **Models**: In `app/Models/`, represent Eloquent ORM entities (e.g., `User.php`).
- **Service Providers**: In `app/Providers/`, register services and custom bindings. Volt and Fortify providers are customized for authentication and UI.
- **Views**: Blade templates in `resources/views/`, with subfolders for components, flux, livewire, and partials.
- **Routes**: Defined in `routes/web.php`, `routes/auth.php`, and `routes/console.php`.

## Developer Workflows
- **Build assets**: Use Vite (`vite.config.js`). Run `npm run dev` for development, `npm run build` for production.
- **Run tests**: Use Pest (`vendor/bin/pest` or `./vendor/bin/pest`). Feature and unit tests are in `tests/Feature/` and `tests/Unit/`.
- **Database**: Migrations in `database/migrations/`, factories in `database/factories/`, seeders in `database/seeders/`.
- **Authentication**: Uses Laravel Fortify and custom providers. See `config/fortify.php` and `app/Providers/FortifyServiceProvider.php`.

## Project-Specific Conventions
- **Livewire Actions**: Place reusable Livewire logic in `app/Livewire/Actions/`.
- **Volt Integration**: Custom provider in `app/Providers/VoltServiceProvider.php` for Volt features.
- **Blade Components**: Use `resources/views/components/` for reusable UI.
- **Flux Pattern**: `resources/views/flux/` may implement a Flux-like state management for UI.
- **Testing**: Pest is preferred over PHPUnit. Use Pest's syntax and features.

## Integration Points
- **External Packages**: Managed via Composer (`composer.json`) and NPM (`package.json`).
- **Authentication**: Integrates Laravel Fortify and Volt for advanced auth flows.
- **Asset Pipeline**: Uses Vite for JS/CSS bundling.

## Examples
- To add a new Livewire action: create a PHP class in `app/Livewire/Actions/` and register it as needed.
- To add a new Blade component: place a Blade file in `resources/views/components/` and reference it in views.
- To run all tests: `./vendor/bin/pest`

## References
- `app/Providers/VoltServiceProvider.php` (Volt integration)
- `app/Livewire/Actions/` (custom Livewire logic)
- `vite.config.js` (asset build config)
- `tests/Feature/`, `tests/Unit/` (test organization)

---
For more details, see Laravel, Livewire, and Pest documentation. When in doubt, follow Laravel conventions unless a project-specific pattern is documented above.
