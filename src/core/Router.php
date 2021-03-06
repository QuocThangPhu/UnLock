<?php
    
namespace Thangphu\UnLock\core;

class Router
{
    /**
     * @var Request
     */
    public Request $request;
    /**
     * @var Response
     */
    public Response $response;
    /**
     * @var array
     */
    protected array $routes = [];

    /**
     * @param Request $request
     * @param Response $response
     */
    public function __construct(Request $request, Response $response)
    {
        $this->request = $request;
        $this->response = $response;
    }

    /**
     * @param $path
     * @param $callback
     * @return void
     */
    public function get($path, $callback): void
    {
        $this->routes['get'][$path] = $callback;
    }

    public function post($path, $callback): void
    {
        $this->routes['post'][$path] = $callback;
    }

    /**
     * @return array|false|mixed|string|string[]
     */
    public function resolve()
    {
        $path = $this->request->getPath();
        $method = $this->request->getMethod();
        $callback = $this->routes[$method][$path] ?? false;
        if ($callback === false) {
            $this->response->setStatusCode(404);
            return $this->renderView("_404");
        }
        if (is_string($callback)) {
            return $this->renderView($callback);
        }
        return call_user_func($callback);
    }

    /**
     * @param $view
     * @return array|false|string|string[]
     */
    public function renderView($view)
    {
        $layoutContent = $this->layoutContent();
        $viewContent = $this->renderOnlyView($view);
        return str_replace('{{content}}', $viewContent, $layoutContent);
    }

    public function renderContent($viewContent)
    {
        $layoutContent = $this->layoutContent();
        return str_replace('{{content}}', $viewContent, $layoutContent);
    }

    /**
     * @return false|string
     */
    protected function layoutContent()
    {
        ob_start();
        include_once Application::$ROOT_DIR . "/UnLock/src/views/layouts/main.php";
        return ob_get_clean();
    }

    /**
     * @param $view
     * @return false|string
     */
    protected function renderOnlyView($view)
    {
        ob_start();
        include_once Application::$ROOT_DIR . "/UnLock/src/views/$view.php";
        return ob_get_clean();
    }
}
