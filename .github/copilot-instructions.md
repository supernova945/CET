# Copilot / AI agent instructions for CET (CodeIgniter 4)

This repository is a CodeIgniter 4 application distribution. The goal of this file is to give an AI coding agent the minimal, high-value facts needed to be immediately productive: where to look, what patterns to follow, and how developers run and test the app locally.

- Project type: CodeIgniter 4 (framework in `system/`, app code in `app/`). PHP >= 8.1 (see `composer.json`).
- Entry point: `public/index.php`. Web servers must point to the `public/` folder. Local dev often runs under XAMPP; you can also use `php -S` with `public/` as the document root.
- Routing: primary route file is `app/Config/Routes.php`. Routes map to controllers using the `Controller::method` style (example: `$routes->get('/', 'Index::index');`). Use that pattern for new routes.
- Controllers: `app/Controllers/` (extend `App\\Controllers\\BaseController`). Controller class names and filenames follow CodeIgniter conventions (e.g., `Quienes_Somos.php` -> class `Quienes_Somos`). Keep methods public for route access, and keep shared setup in `BaseController::initController()`.
- Views: `app/Views/` — conventional PHP view files (this project has `Index.php`, `Servicio.php`, etc.). Render views from controllers using the framework's view helpers.
- Config: site settings live in `app/Config/*` (notably `App.php` for baseURL/indexPage, and `Database.php` for DB settings). Base URL here is `http://localhost/CET/` (see `app/Config/App.php`) — adjust for local environment if necessary.
- Assets: static files under `public/assets/` (CSS, images). Keep asset links relative to `baseURL` or use the `base_url()` helper.
- Logs & runtime: writable data (logs, cache, sessions, uploads) live in `writable/`. Inspect `writable/logs` for runtime errors when debugging.
- Tests & dev commands:
  - Unit tests use PHPUnit. `composer test` runs `phpunit` (see `composer.json`). Test config file: `phpunit.xml.dist`.
  - Coding standards and tools are included in `require-dev` (php-cs-fixer, coding-standard). Respect existing code style.
  - There is a `spark` CLI (root `spark`) typical for CI4 — use it for common tasks if needed.
- Common patterns and conventions to follow:
  - Use framework services via `service('session')`, `model()` helper or `$this->` properties initialised in `BaseController::initController()`.
  - Routes use simple `Controller::method` strings — avoid complex inline closures unless necessary.
  - Keep business logic in Models/Libraries, not controllers. Models belong in `app/Models/`.
  - Avoid changing files under `system/` (framework core) — modify app code or configuration instead.

Quick references (files to open first):
- `public/index.php` — application bootstrap and front controller.
- `app/Config/App.php` — baseURL, index page, CSP and environment-sensitive flags.
- `app/Config/Routes.php` — canonical routing examples used by the app.
- `app/Controllers/BaseController.php` — shared controller setup and helper loading.
- `app/Views/` — example view files (match controller names).
- `writable/logs` and `writable/debugbar` — runtime logs for debugging.
- `composer.json` and `phpunit.xml.dist` — PHP version, test runner, and dev tooling.

Exceptions and project-specific notes:
- This repository is the distributable CodeIgniter package adjusted for the CET site. Many CI4 conventions are in-place; don't introduce incompatible autoloading or PSR-4 changes. New classes should follow existing namespace and folder patterns (App\\Controllers, App\\Models).
- Routes here contain Spanish-named controllers (e.g., `Quienes_Somos`, `Servicios`, `Contacto`) — preserve naming and diacritics/prefixing used by the team.

If you modify or add files, include a one-line rationale referencing the files you changed and run `composer test` to ensure PHPUnit is still green. After creating routes or controllers, verify in a local webserver that the page loads and check `writable/logs` for runtime errors.

If anything above is unclear or you'd like the instructions to include more examples (e.g., a short controller -> view example), tell me which area to expand and I'll update this file.
