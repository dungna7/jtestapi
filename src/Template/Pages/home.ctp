<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */
use Cake\Cache\Cache;
use Cake\Core\Configure;
use Cake\Core\Plugin;
use Cake\Datasource\ConnectionManager;
use Cake\Error\Debugger;
use Cake\Http\Exception\NotFoundException;

$this->layout = false;

$cakeDescription = 'CakePHP: the rapid development PHP framework';
?>
<!DOCTYPE html>
<<html><head>
    <meta charset="utf-8">    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        CakePHP: the rapid development PHP framework    </title>

    <link href="/favicon.ico" type="image/x-icon" rel="icon"><link href="/favicon.ico" type="image/x-icon" rel="shortcut icon">    <link rel="stylesheet" href="/css/base.css">    <link rel="stylesheet" href="/css/style.css">    <link rel="stylesheet" href="/css/home.css">    <link href="https://fonts.googleapis.com/css?family=Raleway:500i|Roboto:300,400,700|Roboto+Mono" rel="stylesheet">
</head>
<body class="home">

<header class="row">
    <div class="header-image"><img src="/img/cake.logo.svg" alt=""></div>
    <div class="header-title">
        <h1>Welcome to CakePHP 3.7.5 Red Velvet. Build fast. Grow solid.</h1>
    </div>
</header>

<div class="row">
    <div class="columns large-12">
        <div class="ctp-warning alert text-center">
            <p>Please be aware that this page will not be shown if you turn off debug mode unless you replace src/Template/Pages/home.ctp with your own version.</p>
        </div>
        <div id="url-rewriting-warning" class="alert url-rewriting">
            <ul>
                <li class="bullet problem">
                    URL rewriting is not properly configured on your server.<br>
                    1) <a target="_blank" href="https://book.cakephp.org/3.0/en/installation.html#url-rewriting">Help me configure it</a><br>
                    2) <a target="_blank" href="https://book.cakephp.org/3.0/en/development/configuration.html#general-configuration">I don't / can't use URL rewriting</a>
                </li>
            </ul>
        </div>
        <pre class="cake-error"><a href="javascript:void(0);" onclick="document.getElementById('cakeErr5c9200c1e0a4d-trace').style.display = (document.getElementById('cakeErr5c9200c1e0a4d-trace').style.display == 'none' ? '' : 'none');"><b>Notice</b> (1024)</a>: Please change the value of 'Security.salt' in ROOT/config/app.php to a salt value specific to your application. [<b>CORE\src\Error\Debugger.php</b>, line <b>963</b>]<div id="cakeErr5c9200c1e0a4d-trace" class="cake-stack-trace" style="display: none;"><a href="javascript:void(0);" onclick="document.getElementById('cakeErr5c9200c1e0a4d-code').style.display = (document.getElementById('cakeErr5c9200c1e0a4d-code').style.display == 'none' ? '' : 'none')">Code</a> <a href="javascript:void(0);" onclick="document.getElementById('cakeErr5c9200c1e0a4d-context').style.display = (document.getElementById('cakeErr5c9200c1e0a4d-context').style.display == 'none' ? '' : 'none')">Context</a><pre id="cakeErr5c9200c1e0a4d-code" class="cake-code-dump" style="display: none;"><code><span style="color: #000000"><span style="color: #0000BB">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">if&nbsp;(</span><span style="color: #0000BB">Security</span><span style="color: #007700">::</span><span style="color: #0000BB">getSalt</span><span style="color: #007700">()&nbsp;===&nbsp;</span><span style="color: #DD0000">'__SALT__'</span><span style="color: #007700">)&nbsp;{</span></span></code>
<span class="code-highlight"><code><span style="color: #000000"><span style="color: #0000BB">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;trigger_error</span><span style="color: #007700">(</span><span style="color: #0000BB">sprintf</span><span style="color: #007700">(</span><span style="color: #DD0000">'Please&nbsp;change&nbsp;the&nbsp;value&nbsp;of&nbsp;%s&nbsp;in&nbsp;%s&nbsp;to&nbsp;a&nbsp;salt&nbsp;value&nbsp;specific&nbsp;to&nbsp;your&nbsp;application.'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'\'Security.salt\''</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'ROOT/config/app.php'</span><span style="color: #007700">),&nbsp;</span><span style="color: #0000BB">E_USER_NOTICE</span><span style="color: #007700">);</span></span></code></span>
<code><span style="color: #000000"><span style="color: #0000BB">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">}</span></span></code></pre><pre class="stack-trace">Cake\Error\Debugger::checkSecurityKeys() - CORE\src\Error\Debugger.php, line 963
include - APP/Template\Pages\home.ctp, line 70
Cake\View\View::_evaluate() - CORE\src\View\View.php, line 1413
Cake\View\View::_render() - CORE\src\View\View.php, line 1374
Cake\View\View::render() - CORE\src\View\View.php, line 880
Cake\Controller\Controller::render() - CORE\src\Controller\Controller.php, line 791
App\Controller\PagesController::display() - APP/Controller\PagesController.php, line 61
Cake\Controller\Controller::invokeAction() - CORE\src\Controller\Controller.php, line 610
Cake\Http\ActionDispatcher::_invoke() - CORE\src\Http\ActionDispatcher.php, line 120
Cake\Http\ActionDispatcher::dispatch() - CORE\src\Http\ActionDispatcher.php, line 94
Cake\Http\BaseApplication::__invoke() - CORE\src\Http\BaseApplication.php, line 235
Cake\Http\Runner::__invoke() - CORE\src\Http\Runner.php, line 65
Cake\Http\Runner::__invoke() - CORE\src\Http\Runner.php, line 65
Cake\Http\Middleware\CsrfProtectionMiddleware::__invoke() - CORE\src\Http\Middleware\CsrfProtectionMiddleware.php, line 108
Cake\Http\Runner::__invoke() - CORE\src\Http\Runner.php, line 65
Cake\Http\Runner::run() - CORE\src\Http\Runner.php, line 51</pre></div></pre>    </div>
</div>

<div class="row">
    <div class="columns large-6">
        <h4>Environment</h4>
        <ul>
                    <li class="bullet success">Your version of PHP is 5.6.0 or higher (detected 5.6.30).</li>
        
                    <li class="bullet success">Your version of PHP has the mbstring extension loaded.</li>
        
                    <li class="bullet success">Your version of PHP has the openssl extension loaded.</li>
        
                    <li class="bullet success">Your version of PHP has the intl extension loaded.</li>
                </ul>
    </div>
    <div class="columns large-6">
        <h4>Filesystem</h4>
        <ul>
                    <li class="bullet success">Your tmp directory is writable.</li>
        
                    <li class="bullet success">Your logs directory is writable.</li>
        
                            <li class="bullet success">The <em>Cake\Cache\Engine\FileEngineEngine</em> is being used for core caching. To change the config edit config/app.php</li>
                </ul>
    </div>
    <hr>
</div>

<div class="row">
    <div class="columns large-6">
        <h4>Database</h4>
                <ul>
                    <li class="bullet problem">CakePHP is NOT able to connect to the database.<br>Connection to database could not be established: SQLSTATE[HY000] [1045] Access denied for user 'my_app'@'localhost' (using password: YES)</li>
                </ul>
    </div>
    <div class="columns large-6">
        <h4>DebugKit</h4>
        <ul>
                    <li class="bullet success">DebugKit is loaded.</li>
                </ul>
    </div>
    <hr>
</div>

<div class="row">
    <div class="columns large-6">
        <h3>Editing this Page</h3>
        <ul>
            <li class="bullet cutlery">To change the content of this page, edit: src/Template/Pages/home.ctp.</li>
            <li class="bullet cutlery">You can also add some CSS styles for your pages at: webroot/css/.</li>
        </ul>
    </div>
    <div class="columns large-6">
        <h3>Getting Started</h3>
        <ul>
            <li class="bullet book"><a target="_blank" href="https://book.cakephp.org/3.0/en/">CakePHP 3.0 Docs</a></li>
            <li class="bullet book"><a target="_blank" href="https://book.cakephp.org/3.0/en/tutorials-and-examples/cms/installation.html">The 20 min CMS Tutorial</a></li>
        </ul>
    </div>
</div>

<div class="row">
    <div class="columns large-12 text-center">
        <h3 class="more">More about Cake</h3>
        <p>
            CakePHP is a rapid development framework for PHP which uses commonly known design patterns like Front Controller and MVC.<br>
            Our primary goal is to provide a structured framework that enables PHP users at all levels to rapidly develop robust web applications, without any loss to flexibility.
        </p>
    </div>
    <hr>
</div>

<div class="row">
    <div class="columns large-4">
        <i class="icon support">P</i>
        <h3>Help and Bug Reports</h3>
        <ul>
            <li class="bullet cutlery">
                <a href="irc://irc.freenode.net/cakephp">irc.freenode.net #cakephp</a>
                <ul><li>Live chat about CakePHP</li></ul>
            </li>
            <li class="bullet cutlery">
                <a href="http://cakesf.herokuapp.com/">Slack</a>
                <ul><li>CakePHP Slack support</li></ul>
            </li>
            <li class="bullet cutlery">
                <a href="https://github.com/cakephp/cakephp/issues">CakePHP Issues</a>
                <ul><li>CakePHP issues and pull requests</li></ul>
            </li>
            <li class="bullet cutlery">
                <a href="http://discourse.cakephp.org/">CakePHP Forum</a>
                <ul><li>CakePHP official discussion forum</li></ul>
            </li>
        </ul>
    </div>
    <div class="columns large-4">
        <i class="icon docs">r</i>
        <h3>Docs and Downloads</h3>
        <ul>
            <li class="bullet cutlery">
                <a href="https://api.cakephp.org/3.0/">CakePHP API</a>
                <ul><li>Quick Reference</li></ul>
            </li>
            <li class="bullet cutlery">
                <a href="https://book.cakephp.org/3.0/en/">CakePHP Documentation</a>
                <ul><li>Your Rapid Development Cookbook</li></ul>
            </li>
            <li class="bullet cutlery">
                <a href="https://bakery.cakephp.org">The Bakery</a>
                <ul><li>Everything CakePHP</li></ul>
            </li>
            <li class="bullet cutlery">
                <a href="https://plugins.cakephp.org">CakePHP plugins repo</a>
                <ul><li>A comprehensive list of all CakePHP plugins created by the community</li></ul>
            </li>
            <li class="bullet cutlery">
                <a href="https://github.com/cakephp/">CakePHP Code</a>
                <ul><li>For the Development of CakePHP Git repository, Downloads</li></ul>
            </li>
            <li class="bullet cutlery">
                <a href="https://github.com/FriendsOfCake/awesome-cakephp">CakePHP Awesome List</a>
                <ul><li>A curated list of amazingly awesome CakePHP plugins, resources and shiny things.</li></ul>
            </li>
            <li class="bullet cutlery">
                <a href="https://www.cakephp.org">CakePHP</a>
                <ul><li>The Rapid Development Framework</li></ul>
            </li>
        </ul>
    </div>
    <div class="columns large-4">
        <i class="icon training">s</i>
        <h3>Training and Certification</h3>
        <ul>
            <li class="bullet cutlery">
                <a href="https://cakefoundation.org/">Cake Software Foundation</a>
                <ul><li>Promoting development related to CakePHP</li></ul>
            </li>
            <li class="bullet cutlery">
                <a href="https://training.cakephp.org/">CakePHP Training</a>
                <ul><li>Learn to use the CakePHP framework</li></ul>
            </li>
            <li class="bullet cutlery">
                <a href="https://certification.cakephp.org/">CakePHP Certification</a>
                <ul><li>Become a certified CakePHP developer</li></ul>
            </li>
        </ul>
    </div>
</div>



<div class="selection_bubble_root" style="display: none;"></div></body></html>
