<?php
/*
	AzzurroService (azzurro) service

	This is the main service of the framework. It can be used to access to the varius settings of the framework itself.


	Copyright 2017 Alessandro Pasqualini
	Licensed under the Apache License, Version 2.0 (the "License");
	you may not use this file except in compliance with the License.
	You may obtain a copy of the License at
    	http://www.apache.org/licenses/LICENSE-2.0
	Unless required by applicable law or agreed to in writing, software
	distributed under the License is distributed on an "AS IS" BASIS,
	WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
	See the License for the specific language governing permissions and
	limitations under the License.

	@author    Alessandro Pasqualini <alessandro.pasqualini.1105@gmail.com>
	@url       https://github.com/alessandro1105
*/

	// Strict type hint
	declare(strict_types = 1);

	namespace AzzurroFramework\Core\Modules\Auto\Azzurro;

	use \InvalidArgumentException;

	use \AzzurroFramework\Core\AzzurroFramework;

	use \AzzurroFramework\Core\Interfaces\Service\ServiceProvider;


	//--- AzzurroService service ----
	final class AzzurroService {

		// Events generated by the framework when all the framework is ready
		const EVENT_READY = AzzurroFramework::EVENT_READY;
		// Events generated by the framework at the shutdown
		const EVENT_SHUTDOWN = AzzurroFramework::EVENT_SHUTDOWN;


		// Variable that contains all the configuration for the service $azzurro (AzzurroFramework)
		private $config;
		

		// Constructor
		public function __construct(&$config) {
			$this->config = &$config;
		}

		// Return the route event
		public function getRouteEvent() {
			return $this->config['routeEvent'];
		}

		// Return the callback event
		public function getCallbackEvent() {
			return $this->config['callbackEvent'];
		}

	}