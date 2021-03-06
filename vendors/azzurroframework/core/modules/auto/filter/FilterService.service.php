<?php
/*
	FilterService (filter) service

	Service that permits to obtain an use a filter


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

	namespace AzzurroFramework\Core\Modules\Auto\Filter;

	use \AzzurroFramework\Core\Injector\Injector;


	//--- FilterService service ----
	final class FilterService {

		// Injector
		private $injector;

		// Constructor
		public function __construct(Injector $injector) {
			$this->injector = $injector;
		}

		public function get(string $name) {
			// Checking arguments correctness
			if (!preg_match('/^[a-zA-Z_\x7f-\xff][a-zA-Z0-9_\x7f-\xff]*$/', $name)) {
				throw new InvalidArgumentException("\$app argument must be a valid filter name!");
			}
			return $this->injector->getFilter($name);
		}
	}