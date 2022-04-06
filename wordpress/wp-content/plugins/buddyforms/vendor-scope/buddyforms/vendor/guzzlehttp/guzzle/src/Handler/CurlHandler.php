<?php
 namespace tk\GuzzleHttp\Handler; use tk\GuzzleHttp\Promise\PromiseInterface; use tk\Psr\Http\Message\RequestInterface; class CurlHandler { private $factory; public function __construct(array $options = []) { $this->factory = $options['handle_factory'] ?? new \tk\GuzzleHttp\Handler\CurlFactory(3); } public function __invoke(\tk\Psr\Http\Message\RequestInterface $request, array $options) : \tk\GuzzleHttp\Promise\PromiseInterface { if (isset($options['delay'])) { \usleep($options['delay'] * 1000); } $easy = $this->factory->create($request, $options); \curl_exec($easy->handle); $easy->errno = \curl_errno($easy->handle); return \tk\GuzzleHttp\Handler\CurlFactory::finish($this, $easy, $this->factory); } } 