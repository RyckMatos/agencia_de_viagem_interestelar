<?php

namespace Routes;

class Route
{
	public static $executed = false;

	public static function isExecuted(): bool
	{
		return self::$executed;
	}

	public static function get(string $path, string $arg): ?bool
	{
		return self::handleRequest('GET', $path, $arg);
	}

	public static function post(string $path, string $arg): ?bool
	{
		return self::handleRequest('POST', $path, $arg);
	}

	private static function handleRequest(string $method, string $path, string $arg): ?bool
	{
		$url = isset($_GET['url']) ? $_GET['url'] : '/';
		$url = self::normalizeUrl($url);
		$path = self::normalizeUrl($path);

		if ($_SERVER['REQUEST_METHOD'] === $method && $url === $path) {
			$arg = explode('@', $arg);
			return self::executeController($arg[0], $arg[1]);
		}

		// Comparação com parâmetros dinâmicos
		$par = [];
		if (self::matchRoute($path, $url, $par)) {
			self::$executed = true;
			$arg($par);
			return true;
		}

		return false;
	}

	private static function normalizeUrl(string $url): string
	{
		return '/' . trim($url, '/') . '/';
	}

	private static function matchRoute($path, $url, &$par)
	{
		$pattern = preg_replace('/\{[^\}]+\}/', '([^/]+)', $path);
		if (preg_match('#^' . $pattern . '$#', $url, $matches)) {
			array_shift($matches);
			$par = $matches;
			return true;
		}
		return false;
	}

	private static function executeController(string $controller, string $method)
	{
		$className = 'App\Controllers\\' . $controller;
		if (class_exists($className)) {
			$instance = new $className();
			if (method_exists($instance, $method)) {
				$instance->$method();
			} else {
				throw new Exception("Método {$method} não encontrado no controlador {$controller}");
			}
		} else {
			throw new Exception("Controlador {$controller} não encontrado");
		}
	}
}
